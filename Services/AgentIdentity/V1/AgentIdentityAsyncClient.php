<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AgentIdentityAsyncClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector=null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        $client = new ClientBuilder(new AgentIdentityAsyncClient());
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
    public function createApiKeyCredentialProviderAsync($request)
    {
        return $this->createApiKeyCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function createApiKeyCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateApiKeyCredentialProviderRequest',
            $asyncRequest = true);
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
    public function deleteApiKeyCredentialProviderAsync($request)
    {
        return $this->deleteApiKeyCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function deleteApiKeyCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteApiKeyCredentialProviderRequest',
            $asyncRequest = true);
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
    public function getApiKeyCredentialProviderAsync($request)
    {
        return $this->getApiKeyCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function getApiKeyCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetApiKeyCredentialProviderRequest',
            $asyncRequest = true);
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
    public function listApiKeyCredentialProvidersAsync($request)
    {
        return $this->listApiKeyCredentialProvidersAsyncWithHttpInfo($request);
    }
    
    public function listApiKeyCredentialProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListApiKeyCredentialProvidersRequest',
            $asyncRequest = true);
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
    public function updateApiKeyCredentialProviderAsync($request)
    {
        return $this->updateApiKeyCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function updateApiKeyCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateApiKeyCredentialProviderRequest',
            $asyncRequest = true);
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
    public function completeResourceTokenAuthAsync($request)
    {
        return $this->completeResourceTokenAuthAsyncWithHttpInfo($request);
    }
    
    public function completeResourceTokenAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CompleteResourceTokenAuthRequest',
            $asyncRequest = true);
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
    public function getResourceApiKeyAsync($request)
    {
        return $this->getResourceApiKeyAsyncWithHttpInfo($request);
    }
    
    public function getResourceApiKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceApiKeyRequest',
            $asyncRequest = true);
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
    public function getResourceOauth2TokenAsync($request)
    {
        return $this->getResourceOauth2TokenAsyncWithHttpInfo($request);
    }
    
    public function getResourceOauth2TokenAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceOauth2TokenRequest',
            $asyncRequest = true);
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
    public function getResourceStsTokenAsync($request)
    {
        return $this->getResourceStsTokenAsyncWithHttpInfo($request);
    }
    
    public function getResourceStsTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetResourceStsTokenRequest',
            $asyncRequest = true);
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
    public function oauth2AuthorizeAsync($request)
    {
        return $this->oauth2AuthorizeAsyncWithHttpInfo($request);
    }
    
    public function oauth2AuthorizeAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizeRequest',
            $asyncRequest = true);
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
    public function oauth2CallbackAsync($request)
    {
        return $this->oauth2CallbackAsyncWithHttpInfo($request);
    }
    
    public function oauth2CallbackAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2CallbackRequest',
            $asyncRequest = true);
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
    public function createOauth2CredentialProviderAsync($request)
    {
        return $this->createOauth2CredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function createOauth2CredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateOauth2CredentialProviderRequest',
            $asyncRequest = true);
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
    public function deleteOauth2CredentialProviderAsync($request)
    {
        return $this->deleteOauth2CredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function deleteOauth2CredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteOauth2CredentialProviderRequest',
            $asyncRequest = true);
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
    public function getOauth2CredentialProviderAsync($request)
    {
        return $this->getOauth2CredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function getOauth2CredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetOauth2CredentialProviderRequest',
            $asyncRequest = true);
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
    public function listOauth2CredentialProvidersAsync($request)
    {
        return $this->listOauth2CredentialProvidersAsyncWithHttpInfo($request);
    }
    
    public function listOauth2CredentialProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListOauth2CredentialProvidersRequest',
            $asyncRequest = true);
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
    public function updateOauth2CredentialProviderAsync($request)
    {
        return $this->updateOauth2CredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function updateOauth2CredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateOauth2CredentialProviderRequest',
            $asyncRequest = true);
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
    public function createStsCredentialProviderAsync($request)
    {
        return $this->createStsCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function createStsCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateStsCredentialProviderRequest',
            $asyncRequest = true);
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
    public function deleteStsCredentialProviderAsync($request)
    {
        return $this->deleteStsCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function deleteStsCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteStsCredentialProviderRequest',
            $asyncRequest = true);
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
    public function getStsCredentialProviderAsync($request)
    {
        return $this->getStsCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function getStsCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetStsCredentialProviderRequest',
            $asyncRequest = true);
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
    public function listStsCredentialProvidersAsync($request)
    {
        return $this->listStsCredentialProvidersAsyncWithHttpInfo($request);
    }
    
    public function listStsCredentialProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListStsCredentialProvidersRequest',
            $asyncRequest = true);
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
    public function updateStsCredentialProviderAsync($request)
    {
        return $this->updateStsCredentialProviderAsyncWithHttpInfo($request);
    }
    
    public function updateStsCredentialProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateStsCredentialProviderRequest',
            $asyncRequest = true);
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
    public function getTokenVaultAsync($request)
    {
        return $this->getTokenVaultAsyncWithHttpInfo($request);
    }
    
    public function getTokenVaultAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetTokenVaultRequest',
            $asyncRequest = true);
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
    public function createWorkloadAccessTokenAsync($request)
    {
        return $this->createWorkloadAccessTokenAsyncWithHttpInfo($request);
    }
    
    public function createWorkloadAccessTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenRequest',
            $asyncRequest = true);
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
    public function createWorkloadAccessTokenForJwtAsync($request)
    {
        return $this->createWorkloadAccessTokenForJwtAsyncWithHttpInfo($request);
    }
    
    public function createWorkloadAccessTokenForJwtAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForJwtRequest',
            $asyncRequest = true);
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
    public function createWorkloadAccessTokenForUserIdAsync($request)
    {
        return $this->createWorkloadAccessTokenForUserIdAsyncWithHttpInfo($request);
    }
    
    public function createWorkloadAccessTokenForUserIdAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadAccessTokenForUserIdRequest',
            $asyncRequest = true);
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
    public function createWorkloadIdentityAsync($request)
    {
        return $this->createWorkloadIdentityAsyncWithHttpInfo($request);
    }
    
    public function createWorkloadIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\CreateWorkloadIdentityRequest',
            $asyncRequest = true);
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
    public function deleteWorkloadIdentityAsync($request)
    {
        return $this->deleteWorkloadIdentityAsyncWithHttpInfo($request);
    }
    
    public function deleteWorkloadIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\DeleteWorkloadIdentityRequest',
            $asyncRequest = true);
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
    public function getWorkloadIdentityAsync($request)
    {
        return $this->getWorkloadIdentityAsyncWithHttpInfo($request);
    }
    
    public function getWorkloadIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityRequest',
            $asyncRequest = true);
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
    public function getWorkloadIdentityAuthorizerConfigurationAsync($request)
    {
        return $this->getWorkloadIdentityAuthorizerConfigurationAsyncWithHttpInfo($request);
    }
    
    public function getWorkloadIdentityAuthorizerConfigurationAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\GetWorkloadIdentityAuthorizerConfigurationRequest',
            $asyncRequest = true);
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
    public function listWorkloadIdentitiesAsync($request)
    {
        return $this->listWorkloadIdentitiesAsyncWithHttpInfo($request);
    }
    
    public function listWorkloadIdentitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\ListWorkloadIdentitiesRequest',
            $asyncRequest = true);
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
    public function updateWorkloadIdentityAsync($request)
    {
        return $this->updateWorkloadIdentityAsyncWithHttpInfo($request);
    }
    
    public function updateWorkloadIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
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
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdateWorkloadIdentityRequest',
            $asyncRequest = true);
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams=null,
        $queryParams=null,
        $headerParams=null,
        $body=null,
        $multipart=null,
        $postParams=null,
        $responseType=null,
        $collectionFormats=null,
        $requestType=null,
        $asyncRequest = null)
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
        $collectionFormats,
        $requestType,
        $asyncRequest);
    }
}