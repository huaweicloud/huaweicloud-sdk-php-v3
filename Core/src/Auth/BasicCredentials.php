<?php
namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\SdkRequest;

class BasicCredentials extends Credentials
{
    private $ak;
    private $sk;
    private $securityToken;
    private $projectId;

    /**
     * BasicCredentials constructor.
     * @param $ak
     * @param $sk
     * @param $securityToken
     * @param $projectId
     */
    public function __construct($ak = null,
                                $sk = null,
                                $projectId = null,
                                $securityToken = null
    ) {
        $this->ak = $ak;
        $this->sk = $sk;
        $this->projectId = $projectId;
        $this->securityToken = $securityToken;
    }

    public function withAk($ak)
    {
        $this->setSk($ak);
        return $this;
    }

    public function withSk($sk)
    {
        $this->setSk($sk);
        return $this;
    }

    public function withProjectId($projectId)
    {
        $this->setSk($projectId);
        return $this;
    }

    public function withSecurityToken($securityToken)
    {
        $this->setSk($securityToken);
        return $this;
    }

    protected static $setters = [
        'ak' => 'setAk',
        'sk' => 'setSk',
        'securityToken' => 'setSecurityToken',
        'projectId' => 'setProjectId'
    ];

    protected static $getters = [
        'ak' => 'getAk',
        'sk' => 'getSk',
        'securityToken' => 'getSecurityToken',
        'projectId' => 'getProjectId'
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
     * @return array
     */
    public function getUpdatePathParams()
    {
        $pathParams = Array();
        if ($this->projectId){
            $pathParams['project_id'] = $this->projectId;
        }
        return $pathParams;
    }

    public function processAuthRequest(SdkRequest $request)
    {
        return $this->signRequest($request);
    }

    public function signRequest(SdkRequest $request)
    {
        $request->headerParams["X-Project-Id"] = $this->projectId;
        if ($this->securityToken != null) {
            $request->headerParams["X-Security-Token"] = $this->securityToken;
        }
        if (isset($request->headerParams['Content-Type']) and
            strpos($request->headerParams['Content-Type'],
                "application/json")===0) {
            $request->headerParams["X-Sdk-Content-Sha256"] = "UNSIGNED-PAYLOAD";
        }

        $signer = new Signer($this);
        return $signer->sign($request);
    }
}