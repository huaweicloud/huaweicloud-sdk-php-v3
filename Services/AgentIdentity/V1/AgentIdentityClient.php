<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AgentIdentityClient extends Client
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
        $client = new ClientBuilder(new AgentIdentityClient());
        return $client;
    }


    /**
     * 创建API密钥凭证提供者
     *
     * Creates a new API key credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createApiKeyCredentialProvider($request)
    {
        return $this->createApiKeyCredentialProviderWithHttpInfo($request);
    }

    public function createApiKeyCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key-credential-providers';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateApiKeyCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateApiKeyCredentialProviderRequest');
    }

    /**
     * 删除API密钥凭证提供者
     *
     * Deletes an API key credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteApiKeyCredentialProvider($request)
    {
        return $this->deleteApiKeyCredentialProviderWithHttpInfo($request);
    }

    public function deleteApiKeyCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteApiKeyCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteApiKeyCredentialProviderRequest');
    }

    /**
     * 查询API密钥凭证提供者详情
     *
     * Gets details of an API key credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getApiKeyCredentialProvider($request)
    {
        return $this->getApiKeyCredentialProviderWithHttpInfo($request);
    }

    public function getApiKeyCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetApiKeyCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetApiKeyCredentialProviderRequest');
    }

    /**
     * 查询API密钥凭证提供者列表
     *
     * Lists API key credential providers.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiKeyCredentialProviders($request)
    {
        return $this->listApiKeyCredentialProvidersWithHttpInfo($request);
    }

    public function listApiKeyCredentialProvidersWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key-credential-providers';
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListApiKeyCredentialProvidersResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListApiKeyCredentialProvidersRequest');
    }

    /**
     * 更新API密钥凭证提供者
     *
     * Updates the API key of an existing API key credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateApiKeyCredentialProvider($request)
    {
        return $this->updateApiKeyCredentialProviderWithHttpInfo($request);
    }

    public function updateApiKeyCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateApiKeyCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateApiKeyCredentialProviderRequest');
    }

    /**
     * Confirm user authentication session for OAuth2.0 tokens
     *
     * Confirms the user authentication session to obtain OAuth2.0 tokens for a resource
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function completeResourceTokenAuth($request)
    {
        return $this->completeResourceTokenAuthWithHttpInfo($request);
    }

    public function completeResourceTokenAuthWithHttpInfo($request)
    {
        $resourcePath = '/v1/resource-token-auth/complete';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CompleteResourceTokenAuthResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CompleteResourceTokenAuthRequest');
    }

    /**
     * Retrieve API key from resource credential provider
     *
     * Retrieves the API key associated with a specified resource credential provider
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getResourceApiKey($request)
    {
        return $this->getResourceApiKeyWithHttpInfo($request);
    }

    public function getResourceApiKeyWithHttpInfo($request)
    {
        $resourcePath = '/v1/api-key';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceApiKeyResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceApiKeyRequest');
    }

    /**
     * Retrieve OAuth2.0 token from resource credential provider
     *
     * Returns the OAuth2.0 token for the specified resource using the configured flow
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getResourceOauth2Token($request)
    {
        return $this->getResourceOauth2TokenWithHttpInfo($request);
    }

    public function getResourceOauth2TokenWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2/token';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceOauth2TokenResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceOauth2TokenRequest');
    }

    /**
     * Retrieve STS credentials from STS credential provider
     *
     * Retrieves temporary STS credentials from a specified STS credential provider
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getResourceStsToken($request)
    {
        return $this->getResourceStsTokenWithHttpInfo($request);
    }

    public function getResourceStsTokenWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts/token';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceStsTokenResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceStsTokenRequest');
    }

    /**
     * OAuth2.0 Pushed Authorization Request (PAR) standard authorize API
     *
     * Core OAuth2 authorization endpoint following RFC 9126 PAR spec, only accepts authorization request via request_uri parameter to trigger user authorization flow
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function oauth2Authorize($request)
    {
        return $this->oauth2AuthorizeWithHttpInfo($request);
    }

    public function oauth2AuthorizeWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2/authorize';
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
        if ($localVarParams['requestUri'] !== null) {
            $queryParams['request_uri'] = $localVarParams['requestUri'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizeResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizeRequest');
    }

    /**
     * OAuth2.0 Standard Authorization Callback API
     *
     * OAuth2 redirect callback endpoint to receive authorization result after user consent/denial
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function oauth2Callback($request)
    {
        return $this->oauth2CallbackWithHttpInfo($request);
    }

    public function oauth2CallbackWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2/callback/{credential_provider_id}';
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
        if ($localVarParams['code'] !== null) {
            $queryParams['code'] = $localVarParams['code'];
        }
        if ($localVarParams['state'] !== null) {
            $queryParams['state'] = $localVarParams['state'];
        }
        if ($localVarParams['error'] !== null) {
            $queryParams['error'] = $localVarParams['error'];
        }
        if ($localVarParams['errorDescription'] !== null) {
            $queryParams['error_description'] = $localVarParams['errorDescription'];
        }
        if ($localVarParams['credentialProviderId'] !== null) {
            $pathParams['credential_provider_id'] = $localVarParams['credentialProviderId'];
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
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2CallbackResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2CallbackRequest');
    }

    /**
     * 创建OAuth2凭证提供者
     *
     * Creates a new OAuth2 credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOauth2CredentialProvider($request)
    {
        return $this->createOauth2CredentialProviderWithHttpInfo($request);
    }

    public function createOauth2CredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2-credential-providers';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateOauth2CredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateOauth2CredentialProviderRequest');
    }

    /**
     * 删除OAuth2凭证提供者
     *
     * Deletes an OAuth2 credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOauth2CredentialProvider($request)
    {
        return $this->deleteOauth2CredentialProviderWithHttpInfo($request);
    }

    public function deleteOauth2CredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteOauth2CredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteOauth2CredentialProviderRequest');
    }

    /**
     * 查询OAuth2凭证提供者详情
     *
     * Gets details of an OAuth2 credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getOauth2CredentialProvider($request)
    {
        return $this->getOauth2CredentialProviderWithHttpInfo($request);
    }

    public function getOauth2CredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetOauth2CredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetOauth2CredentialProviderRequest');
    }

    /**
     * 查询OAuth2凭证提供者列表
     *
     * Lists OAuth2 credential providers.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOauth2CredentialProviders($request)
    {
        return $this->listOauth2CredentialProvidersWithHttpInfo($request);
    }

    public function listOauth2CredentialProvidersWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2-credential-providers';
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListOauth2CredentialProvidersResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListOauth2CredentialProvidersRequest');
    }

    /**
     * 更新OAuth2凭证提供者
     *
     * Updates an existing OAuth2 credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateOauth2CredentialProvider($request)
    {
        return $this->updateOauth2CredentialProviderWithHttpInfo($request);
    }

    public function updateOauth2CredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/oauth2-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateOauth2CredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateOauth2CredentialProviderRequest');
    }

    /**
     * 创建STS凭证提供者
     *
     * Creates a new STS credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createStsCredentialProvider($request)
    {
        return $this->createStsCredentialProviderWithHttpInfo($request);
    }

    public function createStsCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts-credential-providers';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateStsCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateStsCredentialProviderRequest');
    }

    /**
     * 删除STS凭证提供者
     *
     * Deletes an STS credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteStsCredentialProvider($request)
    {
        return $this->deleteStsCredentialProviderWithHttpInfo($request);
    }

    public function deleteStsCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteStsCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteStsCredentialProviderRequest');
    }

    /**
     * 查询STS凭证提供者详情
     *
     * Gets details of an STS credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getStsCredentialProvider($request)
    {
        return $this->getStsCredentialProviderWithHttpInfo($request);
    }

    public function getStsCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetStsCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetStsCredentialProviderRequest');
    }

    /**
     * 查询STS凭证提供者列表
     *
     * Lists STS credential providers.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listStsCredentialProviders($request)
    {
        return $this->listStsCredentialProvidersWithHttpInfo($request);
    }

    public function listStsCredentialProvidersWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts-credential-providers';
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListStsCredentialProvidersResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListStsCredentialProvidersRequest');
    }

    /**
     * 更新STS凭证提供者
     *
     * Updates an existing STS credential provider.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateStsCredentialProvider($request)
    {
        return $this->updateStsCredentialProviderWithHttpInfo($request);
    }

    public function updateStsCredentialProviderWithHttpInfo($request)
    {
        $resourcePath = '/v1/sts-credential-providers/{credential_provider_name}';
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
        if ($localVarParams['credentialProviderName'] !== null) {
            $pathParams['credential_provider_name'] = $localVarParams['credentialProviderName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateStsCredentialProviderResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateStsCredentialProviderRequest');
    }

    /**
     * 查询令牌保管库详情
     *
     * Gets details of a token vault.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getTokenVault($request)
    {
        return $this->getTokenVaultWithHttpInfo($request);
    }

    public function getTokenVaultWithHttpInfo($request)
    {
        $resourcePath = '/v1/token-vaults/{token_vault_id}';
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
        if ($localVarParams['tokenVaultId'] !== null) {
            $pathParams['token_vault_id'] = $localVarParams['tokenVaultId'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetTokenVaultResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetTokenVaultRequest');
    }

    /**
     * Create workload access token (not acting on behalf of a user)
     *
     * Retrieves a workload access token for agentic workloads that do not act on behalf of a user
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkloadAccessToken($request)
    {
        return $this->createWorkloadAccessTokenWithHttpInfo($request);
    }

    public function createWorkloadAccessTokenWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-access-token';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenRequest');
    }

    /**
     * Create workload access token using JWT (acting on behalf of a user)
     *
     * Retrieves a workload access token for agentic workloads acting on behalf of a user, using a JWT token
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkloadAccessTokenForJwt($request)
    {
        return $this->createWorkloadAccessTokenForJwtWithHttpInfo($request);
    }

    public function createWorkloadAccessTokenForJwtWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-access-token-for-jwt';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForJwtResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForJwtRequest');
    }

    /**
     * Create workload access token using user ID (acting on behalf of a user)
     *
     * Retrieves a workload access token for agentic workloads acting on behalf of a user, using the user&#39;s ID
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkloadAccessTokenForUserId($request)
    {
        return $this->createWorkloadAccessTokenForUserIdWithHttpInfo($request);
    }

    public function createWorkloadAccessTokenForUserIdWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-access-token-for-user-id';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForUserIdResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForUserIdRequest');
    }

    /**
     * 创建工作负载身份
     *
     * Creates a new workload identity.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createWorkloadIdentity($request)
    {
        return $this->createWorkloadIdentityWithHttpInfo($request);
    }

    public function createWorkloadIdentityWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities';
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
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadIdentityResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadIdentityRequest');
    }

    /**
     * 删除工作负载身份
     *
     * Deletes a workload identity.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteWorkloadIdentity($request)
    {
        return $this->deleteWorkloadIdentityWithHttpInfo($request);
    }

    public function deleteWorkloadIdentityWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities/{workload_identity_name}';
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
        if ($localVarParams['workloadIdentityName'] !== null) {
            $pathParams['workload_identity_name'] = $localVarParams['workloadIdentityName'];
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
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteWorkloadIdentityResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteWorkloadIdentityRequest');
    }

    /**
     * 查询工作负载身份详情
     *
     * Gets details of a workload identity.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getWorkloadIdentity($request)
    {
        return $this->getWorkloadIdentityWithHttpInfo($request);
    }

    public function getWorkloadIdentityWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities/{workload_identity_name}';
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
        if ($localVarParams['workloadIdentityName'] !== null) {
            $pathParams['workload_identity_name'] = $localVarParams['workloadIdentityName'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityRequest');
    }

    /**
     * 查询工作负载身份的授权配置
     *
     * Gets the authorizer configuration of a workload identity.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function getWorkloadIdentityAuthorizerConfiguration($request)
    {
        return $this->getWorkloadIdentityAuthorizerConfigurationWithHttpInfo($request);
    }

    public function getWorkloadIdentityAuthorizerConfigurationWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities/{workload_identity_name}/authorizer-configuration';
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
        if ($localVarParams['workloadIdentityName'] !== null) {
            $pathParams['workload_identity_name'] = $localVarParams['workloadIdentityName'];
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityAuthorizerConfigurationResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityAuthorizerConfigurationRequest');
    }

    /**
     * 查询工作负载身份列表
     *
     * Lists workload identities.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWorkloadIdentities($request)
    {
        return $this->listWorkloadIdentitiesWithHttpInfo($request);
    }

    public function listWorkloadIdentitiesWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities';
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
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListWorkloadIdentitiesResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListWorkloadIdentitiesRequest');
    }

    /**
     * 更新工作负载身份
     *
     * Updates an existing workload identity.
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateWorkloadIdentity($request)
    {
        return $this->updateWorkloadIdentityWithHttpInfo($request);
    }

    public function updateWorkloadIdentityWithHttpInfo($request)
    {
        $resourcePath = '/v1/workload-identities/{workload_identity_name}';
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
        if ($localVarParams['workloadIdentityName'] !== null) {
            $pathParams['workload_identity_name'] = $localVarParams['workloadIdentityName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateWorkloadIdentityResponse',
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateWorkloadIdentityRequest');
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