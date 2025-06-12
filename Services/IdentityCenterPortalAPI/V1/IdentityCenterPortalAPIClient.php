<?php

namespace HuaweiCloud\SDK\IdentityCenterPortalAPI\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IdentityCenterPortalAPIClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector = null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        $client = new ClientBuilder(new IdentityCenterPortalAPIClient(), "IdentityCenterPortalAPICredentials");
        return $client;
    }


    /**
     * 列出账号
     *
     * 列出分配给用户的所有账号
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccounts($request)
    {
        return $this->listAccountsWithHttpInfo($request);
    }

    public function listAccountsWithHttpInfo($request)
    {
        $resourcePath = '/v1/assigned-accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['accessToken'] !== null) {
            $headerParams[$arr['accessToken']] = $localVarParams['accessToken'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\ListAccountsResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\ListAccountsRequest');
    }

    /**
     * 列出账号委托
     *
     * 列出账号分配给用户的所有委托或信任委托
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAccountAgencies($request)
    {
        return $this->listAccountAgenciesWithHttpInfo($request);
    }

    public function listAccountAgenciesWithHttpInfo($request)
    {
        $resourcePath = '/v1/assigned-agencies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['accountId'] !== null) {
            $queryParams['account_id'] = $localVarParams['accountId'];
        }
        if ($localVarParams['accessToken'] !== null) {
            $headerParams[$arr['accessToken']] = $localVarParams['accessToken'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\ListAccountAgenciesResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\ListAccountAgenciesRequest');
    }

    /**
     * 获取委托凭证
     *
     * 获取分配给用户的指定委托或信任委托的STS短期凭证
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getAgencyCredentials($request)
    {
        return $this->getAgencyCredentialsWithHttpInfo($request);
    }

    public function getAgencyCredentialsWithHttpInfo($request)
    {
        $resourcePath = '/v1/credentials';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['targetAccountId'] !== null) {
            $queryParams['target_account_id'] = $localVarParams['targetAccountId'];
        }
        if ($localVarParams['agencyUrn'] !== null) {
            $queryParams['agency_urn'] = $localVarParams['agencyUrn'];
        }
        if ($localVarParams['accessToken'] !== null) {
            $headerParams[$arr['accessToken']] = $localVarParams['accessToken'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\GetAgencyCredentialsResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\GetAgencyCredentialsRequest');
    }

    /**
     * 登出用户
     *
     * 向IAM身份中心服务发送API调用，使相应的服务端IAM身份中心登录会话失效。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function logout($request)
    {
        return $this->logoutWithHttpInfo($request);
    }

    public function logoutWithHttpInfo($request)
    {
        $resourcePath = '/v1/logout';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accessToken'] !== null) {
            $headerParams[$arr['accessToken']] = $localVarParams['accessToken'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\LogoutResponse',
            $requestType='\HuaweiCloud\SDK\IdentityCenterPortalAPI\V1\Model\LogoutRequest');
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams = null,
        $queryParams = null,
        $headerParams = null,
        $body = null,
        $multipart = null,
        $postParams = null,
        $responseType = null,
        $requestType = null)
    {
    return $this->doHttpRequest(
        $method,
        $resourcePath,
        $pathParams,
        $queryParams,
        $headerParams,
        $body,
        $multipart,
        $postParams,
        $responseType,
        $requestType);
    }
}