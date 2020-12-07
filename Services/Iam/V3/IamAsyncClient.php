<?php

namespace HuaweiCloud\SDK\Iam\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IamAsyncClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;
    public function __construct($selector=null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder($clazz)
    {
        return new ClientBuilder($clazz, "GlobalCredentials");
    }

    public function associateAgencyWithAllProjectsPermissionAsync($request){
        return $this->associateAgencyWithAllProjectsPermissionAsyncWithHttpInfo($request);
    }
    
    public function associateAgencyWithAllProjectsPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-INHERIT/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithAllProjectsPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithAllProjectsPermissionRequest',
            $asyncRequest = true);
    }

    public function associateAgencyWithDomainPermissionAsync($request){
        return $this->associateAgencyWithDomainPermissionAsyncWithHttpInfo($request);
    }
    
    public function associateAgencyWithDomainPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithDomainPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithDomainPermissionRequest',
            $asyncRequest = true);
    }

    public function associateAgencyWithProjectPermissionAsync($request){
        return $this->associateAgencyWithProjectPermissionAsyncWithHttpInfo($request);
    }
    
    public function associateAgencyWithProjectPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/projects/{project_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithProjectPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithProjectPermissionRequest',
            $asyncRequest = true);
    }

    public function checkAllProjectsPermissionForAgencyAsync($request){
        return $this->checkAllProjectsPermissionForAgencyAsyncWithHttpInfo($request);
    }
    
    public function checkAllProjectsPermissionForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-INHERIT/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CheckAllProjectsPermissionForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckAllProjectsPermissionForAgencyRequest',
            $asyncRequest = true);
    }

    public function checkDomainPermissionForAgencyAsync($request){
        return $this->checkDomainPermissionForAgencyAsyncWithHttpInfo($request);
    }
    
    public function checkDomainPermissionForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CheckDomainPermissionForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckDomainPermissionForAgencyRequest',
            $asyncRequest = true);
    }

    public function checkProjectPermissionForAgencyAsync($request){
        return $this->checkProjectPermissionForAgencyAsyncWithHttpInfo($request);
    }
    
    public function checkProjectPermissionForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/projects/{project_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CheckProjectPermissionForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckProjectPermissionForAgencyRequest',
            $asyncRequest = true);
    }

    public function createAgencyAsync($request){
        return $this->createAgencyAsyncWithHttpInfo($request);
    }
    
    public function createAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/agencies';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyRequest',
            $asyncRequest = true);
    }

    public function createAgencyCustomPolicyAsync($request){
        return $this->createAgencyCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function createAgencyCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v3.0/OS-ROLE/roles';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function createCloudServiceCustomPolicyAsync($request){
        return $this->createCloudServiceCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function createCloudServiceCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-ROLE/roles';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateCloudServiceCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateCloudServiceCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function createLoginTokenAsync($request){
        return $this->createLoginTokenAsyncWithHttpInfo($request);
    }
    
    public function createLoginTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AUTH/securitytoken/logintokens';
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
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateLoginTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateLoginTokenRequest',
            $asyncRequest = true);
    }

    public function createMetadataAsync($request){
        return $this->createMetadataAsyncWithHttpInfo($request);
    }
    
    public function createMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3-ext/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}/metadata';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataRequest',
            $asyncRequest = true);
    }

    public function createUnscopeTokenByIdpInitiatedAsync($request){
        return $this->createUnscopeTokenByIdpInitiatedAsyncWithHttpInfo($request);
    }
    
    public function createUnscopeTokenByIdpInitiatedAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-FEDERATION/tokens';
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


        if ($localVarParams['xIdpId'] !== null) {
            $headerParams['x_idp_id'] = $localVarParams['xIdpId'];
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/x-www-form-urlencoded']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUnscopeTokenByIdpInitiatedResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUnscopeTokenByIdpInitiatedRequest',
            $asyncRequest = true);
    }

    public function deleteAgencyAsync($request){
        return $this->deleteAgencyAsyncWithHttpInfo($request);
    }
    
    public function deleteAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/agencies/{agency_id}';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteAgencyRequest',
            $asyncRequest = true);
    }

    public function deleteCustomPolicyAsync($request){
        return $this->deleteCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-ROLE/roles/{role_id}';
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



        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function deleteDomainGroupInheritedRoleAsync($request){
        return $this->deleteDomainGroupInheritedRoleAsyncWithHttpInfo($request);
    }
    
    public function deleteDomainGroupInheritedRoleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-INHERIT/domains/{domain_id}/groups/{group_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteDomainGroupInheritedRoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteDomainGroupInheritedRoleRequest',
            $asyncRequest = true);
    }

    public function keystoneAddUserToGroupAsync($request){
        return $this->keystoneAddUserToGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneAddUserToGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}/users/{user_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAddUserToGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAddUserToGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneAssociateGroupWithDomainPermissionAsync($request){
        return $this->keystoneAssociateGroupWithDomainPermissionAsyncWithHttpInfo($request);
    }
    
    public function keystoneAssociateGroupWithDomainPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithDomainPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithDomainPermissionRequest',
            $asyncRequest = true);
    }

    public function keystoneAssociateGroupWithProjectPermissionAsync($request){
        return $this->keystoneAssociateGroupWithProjectPermissionAsyncWithHttpInfo($request);
    }
    
    public function keystoneAssociateGroupWithProjectPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithProjectPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithProjectPermissionRequest',
            $asyncRequest = true);
    }

    public function keystoneCheckDomainPermissionForGroupAsync($request){
        return $this->keystoneCheckDomainPermissionForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneCheckDomainPermissionForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckDomainPermissionForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckDomainPermissionForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneCheckProjectPermissionForGroupAsync($request){
        return $this->keystoneCheckProjectPermissionForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneCheckProjectPermissionForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckProjectPermissionForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckProjectPermissionForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneCheckUserInGroupAsync($request){
        return $this->keystoneCheckUserInGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneCheckUserInGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}/users/{user_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckUserInGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckUserInGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneCheckroleForGroupAsync($request){
        return $this->keystoneCheckroleForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneCheckroleForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-INHERIT/domains/{domain_id}/groups/{group_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='HEAD',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckroleForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckroleForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateGroupAsync($request){
        return $this->keystoneCreateGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateIdentityProviderAsync($request){
        return $this->keystoneCreateIdentityProviderAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateIdentityProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateIdentityProviderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateIdentityProviderRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateMappingAsync($request){
        return $this->keystoneCreateMappingAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/mappings/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateMappingRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateProjectAsync($request){
        return $this->keystoneCreateProjectAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProjectRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateProtocolAsync($request){
        return $this->keystoneCreateProtocolAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateProtocolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProtocolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProtocolRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateScopedTokenAsync($request){
        return $this->keystoneCreateScopedTokenAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateScopedTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /v3/auth/tokens';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateScopedTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateScopedTokenRequest',
            $asyncRequest = true);
    }

    public function keystoneDeleteGroupAsync($request){
        return $this->keystoneDeleteGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneDeleteGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneDeleteIdentityProviderAsync($request){
        return $this->keystoneDeleteIdentityProviderAsyncWithHttpInfo($request);
    }
    
    public function keystoneDeleteIdentityProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteIdentityProviderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteIdentityProviderRequest',
            $asyncRequest = true);
    }

    public function keystoneDeleteMappingAsync($request){
        return $this->keystoneDeleteMappingAsyncWithHttpInfo($request);
    }
    
    public function keystoneDeleteMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/mappings/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteMappingRequest',
            $asyncRequest = true);
    }

    public function keystoneDeleteProtocolAsync($request){
        return $this->keystoneDeleteProtocolAsyncWithHttpInfo($request);
    }
    
    public function keystoneDeleteProtocolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteProtocolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteProtocolRequest',
            $asyncRequest = true);
    }

    public function keystoneListAllProjectPermissionsForGroupAsync($request){
        return $this->keystoneListAllProjectPermissionsForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneListAllProjectPermissionsForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-INHERIT/domains/{domain_id}/groups/{group_id}/roles/inherited_to_projects';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAllProjectPermissionsForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAllProjectPermissionsForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneListAuthDomainsAsync($request){
        return $this->keystoneListAuthDomainsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListAuthDomainsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/auth/domains';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthDomainsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthDomainsRequest',
            $asyncRequest = true);
    }

    public function keystoneListAuthProjectsAsync($request){
        return $this->keystoneListAuthProjectsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListAuthProjectsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/auth/projects';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthProjectsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthProjectsRequest',
            $asyncRequest = true);
    }

    public function keystoneListDomainPermissionsForGroupAsync($request){
        return $this->keystoneListDomainPermissionsForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneListDomainPermissionsForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/groups/{group_id}/roles';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListDomainPermissionsForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListDomainPermissionsForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneListEndpointsAsync($request){
        return $this->keystoneListEndpointsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListEndpointsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/endpoints';
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

        if ($localVarParams['interface'] !== null) {
            $queryParams['interface'] = $localVarParams['interface'];
        }
        if ($localVarParams['serviceId'] !== null) {
            $queryParams['service_id'] = $localVarParams['serviceId'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListEndpointsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListEndpointsRequest',
            $asyncRequest = true);
    }

    public function keystoneListGroupsAsync($request){
        return $this->keystoneListGroupsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups';
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

        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsRequest',
            $asyncRequest = true);
    }

    public function keystoneListIdentityProvidersAsync($request){
        return $this->keystoneListIdentityProvidersAsyncWithHttpInfo($request);
    }
    
    public function keystoneListIdentityProvidersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListIdentityProvidersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListIdentityProvidersRequest',
            $asyncRequest = true);
    }

    public function keystoneListMappingsAsync($request){
        return $this->keystoneListMappingsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListMappingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/mappings';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListMappingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListMappingsRequest',
            $asyncRequest = true);
    }

    public function keystoneListPermissionsAsync($request){
        return $this->keystoneListPermissionsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListPermissionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/roles';
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

        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListPermissionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListPermissionsRequest',
            $asyncRequest = true);
    }

    public function keystoneListProjectPermissionsForGroupAsync($request){
        return $this->keystoneListProjectPermissionsForGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneListProjectPermissionsForGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}/groups/{group_id}/roles';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectPermissionsForGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectPermissionsForGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneListProjectsAsync($request){
        return $this->keystoneListProjectsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListProjectsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects';
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

        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['isDomain'] !== null) {
            $queryParams['is_domain'] = $localVarParams['isDomain'];
        }
        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsRequest',
            $asyncRequest = true);
    }

    public function keystoneListProjectsForUserAsync($request){
        return $this->keystoneListProjectsForUserAsyncWithHttpInfo($request);
    }
    
    public function keystoneListProjectsForUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}/projects';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsForUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsForUserRequest',
            $asyncRequest = true);
    }

    public function keystoneListProtocolsAsync($request){
        return $this->keystoneListProtocolsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListProtocolsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{idp_id}/protocols';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProtocolsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProtocolsRequest',
            $asyncRequest = true);
    }

    public function keystoneListRegionsAsync($request){
        return $this->keystoneListRegionsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListRegionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/regions';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListRegionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListRegionsRequest',
            $asyncRequest = true);
    }

    public function keystoneListServicesAsync($request){
        return $this->keystoneListServicesAsyncWithHttpInfo($request);
    }
    
    public function keystoneListServicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/services';
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

        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListServicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListServicesRequest',
            $asyncRequest = true);
    }

    public function keystoneListUsersForGroupByAdminAsync($request){
        return $this->keystoneListUsersForGroupByAdminAsyncWithHttpInfo($request);
    }
    
    public function keystoneListUsersForGroupByAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}/users';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersForGroupByAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersForGroupByAdminRequest',
            $asyncRequest = true);
    }

    public function keystoneListVersionsAsync($request){
        return $this->keystoneListVersionsAsyncWithHttpInfo($request);
    }
    
    public function keystoneListVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListVersionsRequest',
            $asyncRequest = true);
    }

    public function keystoneRemoveDomainPermissionFromGroupAsync($request){
        return $this->keystoneRemoveDomainPermissionFromGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneRemoveDomainPermissionFromGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveDomainPermissionFromGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveDomainPermissionFromGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneRemoveProjectPermissionFromGroupAsync($request){
        return $this->keystoneRemoveProjectPermissionFromGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneRemoveProjectPermissionFromGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}/groups/{group_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveProjectPermissionFromGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveProjectPermissionFromGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneRemoveUserFromGroupAsync($request){
        return $this->keystoneRemoveUserFromGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneRemoveUserFromGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}/users/{user_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveUserFromGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveUserFromGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneShowCatalogAsync($request){
        return $this->keystoneShowCatalogAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowCatalogAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/auth/catalog';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowCatalogResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowCatalogRequest',
            $asyncRequest = true);
    }

    public function keystoneShowEndpointAsync($request){
        return $this->keystoneShowEndpointAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowEndpointAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/endpoints/{endpoint_id}';
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



        if ($localVarParams['endpointId'] !== null) {
            $pathParams['endpoint_id'] = $localVarParams['endpointId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowEndpointResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowEndpointRequest',
            $asyncRequest = true);
    }

    public function keystoneShowGroupAsync($request){
        return $this->keystoneShowGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneShowIdentityProviderAsync($request){
        return $this->keystoneShowIdentityProviderAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowIdentityProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowIdentityProviderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowIdentityProviderRequest',
            $asyncRequest = true);
    }

    public function keystoneShowMappingAsync($request){
        return $this->keystoneShowMappingAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/mappings/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowMappingRequest',
            $asyncRequest = true);
    }

    public function keystoneShowPermissionAsync($request){
        return $this->keystoneShowPermissionAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowPermissionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/roles/{role_id}';
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



        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowPermissionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowPermissionRequest',
            $asyncRequest = true);
    }

    public function keystoneShowProjectAsync($request){
        return $this->keystoneShowProjectAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProjectRequest',
            $asyncRequest = true);
    }

    public function keystoneShowProtocolAsync($request){
        return $this->keystoneShowProtocolAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowProtocolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProtocolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProtocolRequest',
            $asyncRequest = true);
    }

    public function keystoneShowRegionAsync($request){
        return $this->keystoneShowRegionAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowRegionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/regions/{region_id}';
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



        if ($localVarParams['regionId'] !== null) {
            $pathParams['region_id'] = $localVarParams['regionId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowRegionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowRegionRequest',
            $asyncRequest = true);
    }

    public function keystoneShowSecurityComplianceAsync($request){
        return $this->keystoneShowSecurityComplianceAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowSecurityComplianceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/config/security_compliance';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceRequest',
            $asyncRequest = true);
    }

    public function keystoneShowSecurityComplianceByOptionAsync($request){
        return $this->keystoneShowSecurityComplianceByOptionAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowSecurityComplianceByOptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/domains/{domain_id}/config/security_compliance/{option}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['option'] !== null) {
            $pathParams['option'] = $localVarParams['option'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceByOptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceByOptionRequest',
            $asyncRequest = true);
    }

    public function keystoneShowServiceAsync($request){
        return $this->keystoneShowServiceAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowServiceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/services/{service_id}';
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



        if ($localVarParams['serviceId'] !== null) {
            $pathParams['service_id'] = $localVarParams['serviceId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowServiceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowServiceRequest',
            $asyncRequest = true);
    }

    public function keystoneShowVersionAsync($request){
        return $this->keystoneShowVersionAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowVersionRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateGroupAsync($request){
        return $this->keystoneUpdateGroupAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/groups/{group_id}';
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



        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateGroupRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateIdentityProviderAsync($request){
        return $this->keystoneUpdateIdentityProviderAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateIdentityProviderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateIdentityProviderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateIdentityProviderRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateMappingAsync($request){
        return $this->keystoneUpdateMappingAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateMappingAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/mappings/{id}';
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



        if ($localVarParams['id'] !== null) {
            $pathParams['id'] = $localVarParams['id'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateMappingResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateMappingRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateProjectAsync($request){
        return $this->keystoneUpdateProjectAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateProjectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/projects/{project_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProjectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProjectRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateProtocolAsync($request){
        return $this->keystoneUpdateProtocolAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateProtocolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProtocolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProtocolRequest',
            $asyncRequest = true);
    }

    public function listAgenciesAsync($request){
        return $this->listAgenciesAsyncWithHttpInfo($request);
    }
    
    public function listAgenciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/agencies';
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

        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['trustDomainId'] !== null) {
            $queryParams['trust_domain_id'] = $localVarParams['trustDomainId'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListAgenciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListAgenciesRequest',
            $asyncRequest = true);
    }

    public function listAllProjectsPermissionsForAgencyAsync($request){
        return $this->listAllProjectsPermissionsForAgencyAsyncWithHttpInfo($request);
    }
    
    public function listAllProjectsPermissionsForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-INHERIT/domains/{domain_id}/agencies/{agency_id}/roles/inherited_to_projects';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListAllProjectsPermissionsForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListAllProjectsPermissionsForAgencyRequest',
            $asyncRequest = true);
    }

    public function listCustomPoliciesAsync($request){
        return $this->listCustomPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listCustomPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-ROLE/roles';
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

        if ($localVarParams['page'] !== null) {
            $queryParams['page'] = $localVarParams['page'];
        }
        if ($localVarParams['perPage'] !== null) {
            $queryParams['per_page'] = $localVarParams['perPage'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListCustomPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListCustomPoliciesRequest',
            $asyncRequest = true);
    }

    public function listDomainPermissionsForAgencyAsync($request){
        return $this->listDomainPermissionsForAgencyAsyncWithHttpInfo($request);
    }
    
    public function listDomainPermissionsForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/domains/{domain_id}/agencies/{agency_id}/roles';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListDomainPermissionsForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListDomainPermissionsForAgencyRequest',
            $asyncRequest = true);
    }

    public function listProjectPermissionsForAgencyAsync($request){
        return $this->listProjectPermissionsForAgencyAsyncWithHttpInfo($request);
    }
    
    public function listProjectPermissionsForAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/projects/{project_id}/agencies/{agency_id}/roles';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListProjectPermissionsForAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListProjectPermissionsForAgencyRequest',
            $asyncRequest = true);
    }

    public function removeAllProjectsPermissionFromAgencyAsync($request){
        return $this->removeAllProjectsPermissionFromAgencyAsyncWithHttpInfo($request);
    }
    
    public function removeAllProjectsPermissionFromAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-INHERIT/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveAllProjectsPermissionFromAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveAllProjectsPermissionFromAgencyRequest',
            $asyncRequest = true);
    }

    public function removeDomainPermissionFromAgencyAsync($request){
        return $this->removeDomainPermissionFromAgencyAsyncWithHttpInfo($request);
    }
    
    public function removeDomainPermissionFromAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/domains/{domain_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveDomainPermissionFromAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveDomainPermissionFromAgencyRequest',
            $asyncRequest = true);
    }

    public function removeProjectPermissionFromAgencyAsync($request){
        return $this->removeProjectPermissionFromAgencyAsyncWithHttpInfo($request);
    }
    
    public function removeProjectPermissionFromAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/projects/{project_id}/agencies/{agency_id}/roles/{role_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveProjectPermissionFromAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveProjectPermissionFromAgencyRequest',
            $asyncRequest = true);
    }

    public function showAgencyAsync($request){
        return $this->showAgencyAsyncWithHttpInfo($request);
    }
    
    public function showAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/agencies/{agency_id}';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowAgencyRequest',
            $asyncRequest = true);
    }

    public function showCustomPolicyAsync($request){
        return $this->showCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function showCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-ROLE/roles/{role_id}';
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



        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainApiAclPolicyAsync($request){
        return $this->showDomainApiAclPolicyAsyncWithHttpInfo($request);
    }
    
    public function showDomainApiAclPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/api-acl-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainApiAclPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainApiAclPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainConsoleAclPolicyAsync($request){
        return $this->showDomainConsoleAclPolicyAsyncWithHttpInfo($request);
    }
    
    public function showDomainConsoleAclPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/console-acl-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainConsoleAclPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainConsoleAclPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainLoginPolicyAsync($request){
        return $this->showDomainLoginPolicyAsyncWithHttpInfo($request);
    }
    
    public function showDomainLoginPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/login-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainLoginPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainLoginPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainPasswordPolicyAsync($request){
        return $this->showDomainPasswordPolicyAsyncWithHttpInfo($request);
    }
    
    public function showDomainPasswordPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/password-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainPasswordPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainPasswordPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainProtectPolicyAsync($request){
        return $this->showDomainProtectPolicyAsyncWithHttpInfo($request);
    }
    
    public function showDomainProtectPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/protect-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainProtectPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainProtectPolicyRequest',
            $asyncRequest = true);
    }

    public function showDomainQuotaAsync($request){
        return $this->showDomainQuotaAsyncWithHttpInfo($request);
    }
    
    public function showDomainQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-QUOTA/domains/{domain_id}';
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

        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }


        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainQuotaRequest',
            $asyncRequest = true);
    }

    public function showMetadataAsync($request){
        return $this->showMetadataAsyncWithHttpInfo($request);
    }
    
    public function showMetadataAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3-ext/OS-FEDERATION/identity_providers/{idp_id}/protocols/{protocol_id}/metadata';
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



        if ($localVarParams['idpId'] !== null) {
            $pathParams['idp_id'] = $localVarParams['idpId'];
        }
        if ($localVarParams['protocolId'] !== null) {
            $pathParams['protocol_id'] = $localVarParams['protocolId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowMetadataResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowMetadataRequest',
            $asyncRequest = true);
    }

    public function showProjectDetailsAndStatusAsync($request){
        return $this->showProjectDetailsAndStatusAsyncWithHttpInfo($request);
    }
    
    public function showProjectDetailsAndStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3-ext/projects/{project_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectDetailsAndStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectDetailsAndStatusRequest',
            $asyncRequest = true);
    }

    public function showProjectQuotaAsync($request){
        return $this->showProjectQuotaAsyncWithHttpInfo($request);
    }
    
    public function showProjectQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-QUOTA/projects/{project_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectQuotaRequest',
            $asyncRequest = true);
    }

    public function updateAgencyAsync($request){
        return $this->updateAgencyAsyncWithHttpInfo($request);
    }
    
    public function updateAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-AGENCY/agencies/{agency_id}';
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



        if ($localVarParams['agencyId'] !== null) {
            $pathParams['agency_id'] = $localVarParams['agencyId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyRequest',
            $asyncRequest = true);
    }

    public function updateAgencyCustomPolicyAsync($request){
        return $this->updateAgencyCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateAgencyCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v3.0/OS-ROLE/roles/{role_id}';
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



        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function updateCloudServiceCustomPolicyAsync($request){
        return $this->updateCloudServiceCustomPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateCloudServiceCustomPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-ROLE/roles/{role_id}';
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



        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateCloudServiceCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateCloudServiceCustomPolicyRequest',
            $asyncRequest = true);
    }

    public function updateDomainApiAclPolicyAsync($request){
        return $this->updateDomainApiAclPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDomainApiAclPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/api-acl-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainApiAclPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainApiAclPolicyRequest',
            $asyncRequest = true);
    }

    public function updateDomainConsoleAclPolicyAsync($request){
        return $this->updateDomainConsoleAclPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDomainConsoleAclPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/console-acl-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainConsoleAclPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainConsoleAclPolicyRequest',
            $asyncRequest = true);
    }

    public function updateDomainGroupInheritRoleAsync($request){
        return $this->updateDomainGroupInheritRoleAsyncWithHttpInfo($request);
    }
    
    public function updateDomainGroupInheritRoleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/OS-INHERIT/domains/{domain_id}/groups/{group_id}/roles/{role_id}/inherited_to_projects';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['groupId'] !== null) {
            $pathParams['group_id'] = $localVarParams['groupId'];
        }
        if ($localVarParams['roleId'] !== null) {
            $pathParams['role_id'] = $localVarParams['roleId'];
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
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainGroupInheritRoleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainGroupInheritRoleRequest',
            $asyncRequest = true);
    }

    public function updateDomainLoginPolicyAsync($request){
        return $this->updateDomainLoginPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDomainLoginPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/login-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainLoginPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainLoginPolicyRequest',
            $asyncRequest = true);
    }

    public function updateDomainPasswordPolicyAsync($request){
        return $this->updateDomainPasswordPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDomainPasswordPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/password-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainPasswordPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainPasswordPolicyRequest',
            $asyncRequest = true);
    }

    public function updateDomainProtectPolicyAsync($request){
        return $this->updateDomainProtectPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateDomainProtectPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-SECURITYPOLICY/domains/{domain_id}/protect-policy';
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



        if ($localVarParams['domainId'] !== null) {
            $pathParams['domain_id'] = $localVarParams['domainId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainProtectPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainProtectPolicyRequest',
            $asyncRequest = true);
    }

    public function updateProjectStatusAsync($request){
        return $this->updateProjectStatusAsyncWithHttpInfo($request);
    }
    
    public function updateProjectStatusAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3-ext/projects/{project_id}';
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



        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateProjectStatusResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateProjectStatusRequest',
            $asyncRequest = true);
    }

    public function createPermanentAccessKeyAsync($request){
        return $this->createPermanentAccessKeyAsyncWithHttpInfo($request);
    }
    
    public function createPermanentAccessKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/credentials';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreatePermanentAccessKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreatePermanentAccessKeyRequest',
            $asyncRequest = true);
    }

    public function createTemporaryAccessKeyByAgencyAsync($request){
        return $this->createTemporaryAccessKeyByAgencyAsyncWithHttpInfo($request);
    }
    
    public function createTemporaryAccessKeyByAgencyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v3.0/OS-CREDENTIAL/securitytokens';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByAgencyRequest',
            $asyncRequest = true);
    }

    public function createTemporaryAccessKeyByTokenAsync($request){
        return $this->createTemporaryAccessKeyByTokenAsyncWithHttpInfo($request);
    }
    
    public function createTemporaryAccessKeyByTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/securitytokens';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByTokenRequest',
            $asyncRequest = true);
    }

    public function deletePermanentAccessKeyAsync($request){
        return $this->deletePermanentAccessKeyAsyncWithHttpInfo($request);
    }
    
    public function deletePermanentAccessKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/credentials/{access_key}';
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



        if ($localVarParams['accessKey'] !== null) {
            $pathParams['access_key'] = $localVarParams['accessKey'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeletePermanentAccessKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeletePermanentAccessKeyRequest',
            $asyncRequest = true);
    }

    public function listPermanentAccessKeysAsync($request){
        return $this->listPermanentAccessKeysAsyncWithHttpInfo($request);
    }
    
    public function listPermanentAccessKeysAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/credentials';
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

        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysRequest',
            $asyncRequest = true);
    }

    public function showPermanentAccessKeyAsync($request){
        return $this->showPermanentAccessKeyAsyncWithHttpInfo($request);
    }
    
    public function showPermanentAccessKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/credentials/{access_key}';
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



        if ($localVarParams['accessKey'] !== null) {
            $pathParams['access_key'] = $localVarParams['accessKey'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowPermanentAccessKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowPermanentAccessKeyRequest',
            $asyncRequest = true);
    }

    public function updatePermanentAccessKeyAsync($request){
        return $this->updatePermanentAccessKeyAsyncWithHttpInfo($request);
    }
    
    public function updatePermanentAccessKeyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-CREDENTIAL/credentials/{access_key}';
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



        if ($localVarParams['accessKey'] !== null) {
            $pathParams['access_key'] = $localVarParams['accessKey'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdatePermanentAccessKeyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdatePermanentAccessKeyRequest',
            $asyncRequest = true);
    }

    public function createBindingDeviceAsync($request){
        return $this->createBindingDeviceAsyncWithHttpInfo($request);
    }
    
    public function createBindingDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/mfa-devices/bind';
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateBindingDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateBindingDeviceRequest',
            $asyncRequest = true);
    }

    public function createMfaDeviceAsync($request){
        return $this->createMfaDeviceAsyncWithHttpInfo($request);
    }
    
    public function createMfaDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/virtual-mfa-devices';
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
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMfaDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMfaDeviceRequest',
            $asyncRequest = true);
    }

    public function createUserAsync($request){
        return $this->createUserAsyncWithHttpInfo($request);
    }
    
    public function createUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUserRequest',
            $asyncRequest = true);
    }

    public function deleteBindingDeviceAsync($request){
        return $this->deleteBindingDeviceAsyncWithHttpInfo($request);
    }
    
    public function deleteBindingDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/mfa-devices/unbind';
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteBindingDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteBindingDeviceRequest',
            $asyncRequest = true);
    }

    public function deleteMfaDeviceAsync($request){
        return $this->deleteMfaDeviceAsyncWithHttpInfo($request);
    }
    
    public function deleteMfaDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/virtual-mfa-devices';
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

        if ($localVarParams['userId'] !== null) {
            $queryParams['user_id'] = $localVarParams['userId'];
        }
        if ($localVarParams['serialNumber'] !== null) {
            $queryParams['serial_number'] = $localVarParams['serialNumber'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteMfaDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteMfaDeviceRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateUserAsync($request){
        return $this->keystoneCreateUserAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users';
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
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserRequest',
            $asyncRequest = true);
    }

    public function keystoneDeleteUserAsync($request){
        return $this->keystoneDeleteUserAsyncWithHttpInfo($request);
    }
    
    public function keystoneDeleteUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteUserRequest',
            $asyncRequest = true);
    }

    public function keystoneListGroupsForUserAsync($request){
        return $this->keystoneListGroupsForUserAsyncWithHttpInfo($request);
    }
    
    public function keystoneListGroupsForUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}/groups';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsForUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsForUserRequest',
            $asyncRequest = true);
    }

    public function keystoneListUsersAsync($request){
        return $this->keystoneListUsersAsyncWithHttpInfo($request);
    }
    
    public function keystoneListUsersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users';
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

        if ($localVarParams['domainId'] !== null) {
            $queryParams['domain_id'] = $localVarParams['domainId'];
        }
        if ($localVarParams['enabled'] !== null) {
            $queryParams['enabled'] = $localVarParams['enabled'];
        }
        if ($localVarParams['name'] !== null) {
            $queryParams['name'] = $localVarParams['name'];
        }
        if ($localVarParams['passwordExpiresAt'] !== null) {
            $queryParams['password_expires_at'] = $localVarParams['passwordExpiresAt'];
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersRequest',
            $asyncRequest = true);
    }

    public function keystoneShowUserAsync($request){
        return $this->keystoneShowUserAsyncWithHttpInfo($request);
    }
    
    public function keystoneShowUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowUserRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateUserByAdminAsync($request){
        return $this->keystoneUpdateUserByAdminAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateUserByAdminAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );
        return $this->callApi(
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserByAdminResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserByAdminRequest',
            $asyncRequest = true);
    }

    public function keystoneUpdateUserPasswordAsync($request){
        return $this->keystoneUpdateUserPasswordAsyncWithHttpInfo($request);
    }
    
    public function keystoneUpdateUserPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/users/{user_id}/password';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserPasswordRequest',
            $asyncRequest = true);
    }

    public function listUserLoginProtectsAsync($request){
        return $this->listUserLoginProtectsAsyncWithHttpInfo($request);
    }
    
    public function listUserLoginProtectsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/login-protects';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserLoginProtectsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserLoginProtectsRequest',
            $asyncRequest = true);
    }

    public function listUserMfaDevicesAsync($request){
        return $this->listUserMfaDevicesAsyncWithHttpInfo($request);
    }
    
    public function listUserMfaDevicesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/virtual-mfa-devices';
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





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserMfaDevicesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserMfaDevicesRequest',
            $asyncRequest = true);
    }

    public function showUserAsync($request){
        return $this->showUserAsyncWithHttpInfo($request);
    }
    
    public function showUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users/{user_id}';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserRequest',
            $asyncRequest = true);
    }

    public function showUserLoginProtectAsync($request){
        return $this->showUserLoginProtectAsyncWithHttpInfo($request);
    }
    
    public function showUserLoginProtectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users/{user_id}/login-protect';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserLoginProtectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserLoginProtectRequest',
            $asyncRequest = true);
    }

    public function showUserMfaDeviceAsync($request){
        return $this->showUserMfaDeviceAsyncWithHttpInfo($request);
    }
    
    public function showUserMfaDeviceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-MFA/users/{user_id}/virtual-mfa-device';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserMfaDeviceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserMfaDeviceRequest',
            $asyncRequest = true);
    }

    public function updateLoginProtectAsync($request){
        return $this->updateLoginProtectAsyncWithHttpInfo($request);
    }
    
    public function updateLoginProtectAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users/{user_id}/login-protect';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateLoginProtectResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateLoginProtectRequest',
            $asyncRequest = true);
    }

    public function updateUserAsync($request){
        return $this->updateUserAsyncWithHttpInfo($request);
    }
    
    public function updateUserAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users/{user_id}';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
        }

        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserRequest',
            $asyncRequest = true);
    }

    public function updateUserInformationAsync($request){
        return $this->updateUserInformationAsyncWithHttpInfo($request);
    }
    
    public function updateUserInformationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3.0/OS-USER/users/{user_id}/info';
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



        if ($localVarParams['userId'] !== null) {
            $pathParams['user_id'] = $localVarParams['userId'];
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
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserInformationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserInformationRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateAgencyTokenAsync($request){
        return $this->keystoneCreateAgencyTokenAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateAgencyTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /v3/auth/tokens';
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

        if ($localVarParams['nocatalog'] !== null) {
            $queryParams['nocatalog'] = $localVarParams['nocatalog'];
        }



        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateAgencyTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateAgencyTokenRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateUserTokenByPasswordAsync($request){
        return $this->keystoneCreateUserTokenByPasswordAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateUserTokenByPasswordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/auth/tokens';
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

        if ($localVarParams['nocatalog'] !== null) {
            $queryParams['nocatalog'] = $localVarParams['nocatalog'];
        }



        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordRequest',
            $asyncRequest = true);
    }

    public function keystoneCreateUserTokenByPasswordAndMfaAsync($request){
        return $this->keystoneCreateUserTokenByPasswordAndMfaAsyncWithHttpInfo($request);
    }
    
    public function keystoneCreateUserTokenByPasswordAndMfaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /v3/auth/tokens';
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

        if ($localVarParams['nocatalog'] !== null) {
            $queryParams['nocatalog'] = $localVarParams['nocatalog'];
        }



        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*', 'application/json', 'application/json-1']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*', 'application/json', 'application/json-1'],
                ['application/json;charset=UTF-8']
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordAndMfaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordAndMfaRequest',
            $asyncRequest = true);
    }

    public function keystoneValidateTokenAsync($request){
        return $this->keystoneValidateTokenAsyncWithHttpInfo($request);
    }
    
    public function keystoneValidateTokenAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/auth/tokens';
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

        if ($localVarParams['nocatalog'] !== null) {
            $queryParams['nocatalog'] = $localVarParams['nocatalog'];
        }

        if ($localVarParams['xSubjectToken'] !== null) {
            $headerParams['x_subject_token'] = $localVarParams['xSubjectToken'];
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneValidateTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneValidateTokenRequest',
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