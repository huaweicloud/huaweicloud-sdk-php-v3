<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the LICENSE is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the LICENSE for the
 * specific language governing permissions and limitations
 * under the LICENSE.
 */

namespace HuaweiCloud\SDK\Core\Auth;


use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\SdkRequest;
use HuaweiCloud\SDK\Iam\V3\Model\{KeystoneCreateProjectOption,
    KeystoneCreateProjectRequest,
    KeystoneCreateProjectRequestBody,
    KeystoneListProjectsRequest,
    KeystoneListRegionsRequest,
    KeystoneListAuthDomainsRequest
};
use \Exception;

class BasicCredentials extends Credentials
{
    private $projectId;

    /**
     * BasicCredentials constructor.
     *
     * @param $ak
     * @param $sk
     * @param $securityToken
     * @param $projectId
     */
    public function __construct($ak = null,
                                $sk = null,
                                $projectId = null,
                                $securityToken = null,
                                $iamEndpoint = null
    )
    {
        $this->ak = isset($ak) ? $ak : null;
        $this->sk = isset($sk) ? $sk : null;
        $this->projectId = isset($projectId) ? $projectId : null;
        $this->securityToken = isset($securityToken) ? $securityToken : null;
        $this->iamEndpoint = isset($iamEndpoint) ? $iamEndpoint : null;
    }

    public function withAk($ak)
    {
        $this->setAk($ak);

        return $this;
    }

    public function withSk($sk)
    {
        $this->setSk($sk);

        return $this;
    }

    public function withProjectId($projectId)
    {
        $this->setProjectId($projectId);

        return $this;
    }

    /**
     * @param $securityToken
     *
     * @return BasicCredentials
     */
    public function withSecurityToken($securityToken)
    {
        $this->setSecurityToken($securityToken);

        return $this;
    }

    /**
     * @param $iamEndponit
     *
     * @return BasicCredentials
     */
    public function withIamEndpoint($iamEndpoint)
    {
        $this->setIamEndpoint($iamEndpoint);

        return $this;
    }

    protected static $setters = [
        'ak' => 'setAk',
        'sk' => 'setSk',
        'securityToken' => 'setSecurityToken',
        'projectId' => 'setProjectId',
        'iamEndpoint' => 'setIamEndpoint'
    ];

    protected static $getters = [
        'ak' => 'getAk',
        'sk' => 'getSk',
        'securityToken' => 'getSecurityToken',
        'projectId' => 'getProjectId',
        'iamEndPoint' => 'getIamEndPoint'
    ];

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * @return string
     */
    public function getAk()
    {
        return $this->ak;
    }

    /**
     * @param string $ak
     */
    public function setAk($ak)
    {
        $this->ak = $ak;
    }

    /**
     * @return string
     */
    public function getSk()
    {
        return $this->sk;
    }

    /**
     * @param string $sk
     */
    public function setSk($sk)
    {
        $this->sk = $sk;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    /**
     * @param string $securityToken
     */
    public function setSecurityToken($securityToken)
    {
        $this->securityToken = $securityToken;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getIamEndpoint()
    {
        return $this->iamEndpoint;
    }

    /**
     * @param string $iamEndpoint
     */
    public function setIamEndpoint($iamEndpoint)
    {
        $this->iamEndpoint = $iamEndpoint;
    }

    /**
     * @return array
     */
    public function getUpdatePathParams()
    {
        $pathParams = [];
        if ($this->projectId) {
            $pathParams['project_id'] = $this->projectId;
        }

        return $pathParams;
    }

    public function processAuthRequest(SdkRequest $request)
    {
        return $this->signRequest($request);
    }

    private function signRequest(SdkRequest $request)
    {
        if (null != $this->projectId) {
            $request->headerParams['X-Project-Id'] = $this->projectId;
        }
        if (null != $this->securityToken) {
            $request->headerParams['X-Security-Token'] = $this->securityToken;
        }
        if (isset($request->headerParams['Content-Type']) and
            0 === strpos($request->headerParams['Content-Type'],
                'application/json')) {
            $request->headerParams['X-Sdk-Content-Sha256'] = 'UNSIGNED-PAYLOAD';
        }

        $signer = new Signer($this);

        return $signer->sign($request);
    }

    public function processAuthParams($client, $regionId)
    {
        if (isset($this->projectId)) {
            return;
        }
        $akWithName = $this->getAk() . $regionId;
        $projectId = AuthCache::getAuth($akWithName);
        if (isset($projectId)) {
            $this->projectId = $projectId;
            return;
        }
        $iamClient = parent::getIamClient($client, $this);
        $keystoneListProjectsRequest = new KeystoneListProjectsRequest();
        $keystoneListProjectsRequest->setName($regionId);
        $response = $iamClient->keystoneListProjects($keystoneListProjectsRequest);
        try {
            if (null == $response) {
                throw new SdkException("Failed to get project id, please input project id when initializing BasicCredentials");
            }
            $projects = $response->getProjects();
            if (1 == count($projects)) {
                $this->projectId = reset($projects)->getId();
            } else {
                $this->projectId = $this->keystoneCreateProject($iamClient, $regionId);
            }
            AuthCache::setAuth($akWithName, $this->projectId);
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }

    private function keystoneCreateProject($iamClient, $regionId)
    {
        $filterRegionIds = $this->getSupportedRegions($iamClient);
        try {
            if (empty($filterRegionIds)) {
                throw new SdkException("failed to list regions");
            }
            if (!in_array($regionId, $filterRegionIds)) {
                throw new SdkException("the region input is not supported to create project automatically");
            }
            $domainId = $this->getDomainId($iamClient);
            if (!isset($domainId)) {
                throw new SdkException("No domain id found, please select one of the following solutions:\n\t" .
                    "1. Manually specify domain_id when initializing the credentials.\n\t" .
                    "2. Use the domain account to grant the current account permissions of the IAM service.\n\t" .
                    "3. Use AK/SK of the domain account.");
            }
            return $this->getCreateProjectId($iamClient, $regionId, $domainId);
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }

    }

    private function getSupportedRegions($iamClient)
    {
        $publicRegionType = "public";
        $keystoneListRegionsRequest = new KeystoneListRegionsRequest();
        $response = $iamClient->keystoneListRegions($keystoneListRegionsRequest);
        $filterRegionIds = [];
        try {
            if (null == $response) {
                throw new SdkException("failed to list all regions");
            }
            $regions = $response->getRegions();
            foreach ($regions as $region) {
                if (strcmp($publicRegionType, $region->getType()) == 0 && null != $region->getId()) {
                    array_push($filterRegionIds, $region->getId());
                }
            }
            return $filterRegionIds;
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }

    private function getDomainId($iamClient)
    {
        $keystoneListAuthDomainsRequest = new KeystoneListAuthDomainsRequest();
        $response = $iamClient->keystoneListAuthDomains($keystoneListAuthDomainsRequest);
        try {
            if (null == $response) {
                throw new SdkException("No domain id found, please select one of the following solutions:\n\t".
                    "1. Manually specify domain_id when initializing the credentials.\n\t" .
                    "2. Use the domain account to grant the current account permissions of the IAM service.\n\t" .
                    "3. Use AK/SK of the domain account.");
            }
            return reset($response->getDomains())->getId();
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }

    }

    private function getCreateProjectId($iamClient, $regionId, $domainId)
    {
        $credentials = (new GlobalCredentials())->withAk($this->ak)->withSk($this->sk)->withDomainId($domainId);
        $iamClient->withCredentials($credentials);
        $keystoneCreateProjectOption = (new KeystoneCreateProjectOption())->setName($regionId)->setDomainId($domainId);
        $keystoneCreateProjectRequestBody = (new KeystoneCreateProjectRequestBody())->setProject($keystoneCreateProjectOption);
        $keystoneCreateProjectRequest = (new KeystoneCreateProjectRequest())->setBody($keystoneCreateProjectRequestBody);
        $response = $iamClient->keystoneCreateProject($keystoneCreateProjectRequest);
        try {
            if (null == $response) {
                throw new SdkException("failed to create project");
            }
            return $response->getProject()->getId();
        } catch (SdkException $e) {
            $msg = $e->getMessage();
            echo "\n" . $msg . "\n";
        }
    }
}
