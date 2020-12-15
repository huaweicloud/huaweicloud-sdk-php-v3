<?php

namespace HuaweiCloud\SDK\Iam\V3;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class IamClient extends Client
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


    public function associateAgencyWithAllProjectsPermission($request){
        return $this->associateAgencyWithAllProjectsPermissionWithHttpInfo($request);
    }

    public function associateAgencyWithAllProjectsPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithAllProjectsPermissionRequest');
    }

    public function associateAgencyWithDomainPermission($request){
        return $this->associateAgencyWithDomainPermissionWithHttpInfo($request);
    }

    public function associateAgencyWithDomainPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithDomainPermissionRequest');
    }

    public function associateAgencyWithProjectPermission($request){
        return $this->associateAgencyWithProjectPermissionWithHttpInfo($request);
    }

    public function associateAgencyWithProjectPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\AssociateAgencyWithProjectPermissionRequest');
    }

    public function checkAllProjectsPermissionForAgency($request){
        return $this->checkAllProjectsPermissionForAgencyWithHttpInfo($request);
    }

    public function checkAllProjectsPermissionForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckAllProjectsPermissionForAgencyRequest');
    }

    public function checkDomainPermissionForAgency($request){
        return $this->checkDomainPermissionForAgencyWithHttpInfo($request);
    }

    public function checkDomainPermissionForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckDomainPermissionForAgencyRequest');
    }

    public function checkProjectPermissionForAgency($request){
        return $this->checkProjectPermissionForAgencyWithHttpInfo($request);
    }

    public function checkProjectPermissionForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CheckProjectPermissionForAgencyRequest');
    }

    public function createAgency($request){
        return $this->createAgencyWithHttpInfo($request);
    }

    public function createAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyRequest');
    }

    public function createAgencyCustomPolicy($request){
        return $this->createAgencyCustomPolicyWithHttpInfo($request);
    }

    public function createAgencyCustomPolicyWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateAgencyCustomPolicyRequest');
    }

    public function createCloudServiceCustomPolicy($request){
        return $this->createCloudServiceCustomPolicyWithHttpInfo($request);
    }

    public function createCloudServiceCustomPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateCloudServiceCustomPolicyRequest');
    }

    public function createLoginToken($request){
        return $this->createLoginTokenWithHttpInfo($request);
    }

    public function createLoginTokenWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateLoginTokenRequest');
    }

    public function createMetadata($request){
        return $this->createMetadataWithHttpInfo($request);
    }

    public function createMetadataWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMetadataRequest');
    }

    public function createUnscopeTokenByIdpInitiated($request){
        return $this->createUnscopeTokenByIdpInitiatedWithHttpInfo($request);
    }

    public function createUnscopeTokenByIdpInitiatedWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUnscopeTokenByIdpInitiatedRequest');
    }

    public function deleteAgency($request){
        return $this->deleteAgencyWithHttpInfo($request);
    }

    public function deleteAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteAgencyRequest');
    }

    public function deleteCustomPolicy($request){
        return $this->deleteCustomPolicyWithHttpInfo($request);
    }

    public function deleteCustomPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteCustomPolicyRequest');
    }

    public function deleteDomainGroupInheritedRole($request){
        return $this->deleteDomainGroupInheritedRoleWithHttpInfo($request);
    }

    public function deleteDomainGroupInheritedRoleWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteDomainGroupInheritedRoleRequest');
    }

    public function keystoneAddUserToGroup($request){
        return $this->keystoneAddUserToGroupWithHttpInfo($request);
    }

    public function keystoneAddUserToGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAddUserToGroupRequest');
    }

    public function keystoneAssociateGroupWithDomainPermission($request){
        return $this->keystoneAssociateGroupWithDomainPermissionWithHttpInfo($request);
    }

    public function keystoneAssociateGroupWithDomainPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithDomainPermissionRequest');
    }

    public function keystoneAssociateGroupWithProjectPermission($request){
        return $this->keystoneAssociateGroupWithProjectPermissionWithHttpInfo($request);
    }

    public function keystoneAssociateGroupWithProjectPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneAssociateGroupWithProjectPermissionRequest');
    }

    public function keystoneCheckDomainPermissionForGroup($request){
        return $this->keystoneCheckDomainPermissionForGroupWithHttpInfo($request);
    }

    public function keystoneCheckDomainPermissionForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckDomainPermissionForGroupRequest');
    }

    public function keystoneCheckProjectPermissionForGroup($request){
        return $this->keystoneCheckProjectPermissionForGroupWithHttpInfo($request);
    }

    public function keystoneCheckProjectPermissionForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckProjectPermissionForGroupRequest');
    }

    public function keystoneCheckUserInGroup($request){
        return $this->keystoneCheckUserInGroupWithHttpInfo($request);
    }

    public function keystoneCheckUserInGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckUserInGroupRequest');
    }

    public function keystoneCheckroleForGroup($request){
        return $this->keystoneCheckroleForGroupWithHttpInfo($request);
    }

    public function keystoneCheckroleForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCheckroleForGroupRequest');
    }

    public function keystoneCreateGroup($request){
        return $this->keystoneCreateGroupWithHttpInfo($request);
    }

    public function keystoneCreateGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateGroupRequest');
    }

    public function keystoneCreateIdentityProvider($request){
        return $this->keystoneCreateIdentityProviderWithHttpInfo($request);
    }

    public function keystoneCreateIdentityProviderWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateIdentityProviderRequest');
    }

    public function keystoneCreateMapping($request){
        return $this->keystoneCreateMappingWithHttpInfo($request);
    }

    public function keystoneCreateMappingWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateMappingRequest');
    }

    public function keystoneCreateProject($request){
        return $this->keystoneCreateProjectWithHttpInfo($request);
    }

    public function keystoneCreateProjectWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProjectRequest');
    }

    public function keystoneCreateProtocol($request){
        return $this->keystoneCreateProtocolWithHttpInfo($request);
    }

    public function keystoneCreateProtocolWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateProtocolRequest');
    }

    public function keystoneCreateScopedToken($request){
        return $this->keystoneCreateScopedTokenWithHttpInfo($request);
    }

    public function keystoneCreateScopedTokenWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateScopedTokenRequest');
    }

    public function keystoneDeleteGroup($request){
        return $this->keystoneDeleteGroupWithHttpInfo($request);
    }

    public function keystoneDeleteGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteGroupRequest');
    }

    public function keystoneDeleteIdentityProvider($request){
        return $this->keystoneDeleteIdentityProviderWithHttpInfo($request);
    }

    public function keystoneDeleteIdentityProviderWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteIdentityProviderRequest');
    }

    public function keystoneDeleteMapping($request){
        return $this->keystoneDeleteMappingWithHttpInfo($request);
    }

    public function keystoneDeleteMappingWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteMappingRequest');
    }

    public function keystoneDeleteProtocol($request){
        return $this->keystoneDeleteProtocolWithHttpInfo($request);
    }

    public function keystoneDeleteProtocolWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteProtocolRequest');
    }

    public function keystoneListAllProjectPermissionsForGroup($request){
        return $this->keystoneListAllProjectPermissionsForGroupWithHttpInfo($request);
    }

    public function keystoneListAllProjectPermissionsForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAllProjectPermissionsForGroupRequest');
    }

    public function keystoneListAuthDomains($request){
        return $this->keystoneListAuthDomainsWithHttpInfo($request);
    }

    public function keystoneListAuthDomainsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthDomainsRequest');
    }

    public function keystoneListAuthProjects($request){
        return $this->keystoneListAuthProjectsWithHttpInfo($request);
    }

    public function keystoneListAuthProjectsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListAuthProjectsRequest');
    }

    public function keystoneListDomainPermissionsForGroup($request){
        return $this->keystoneListDomainPermissionsForGroupWithHttpInfo($request);
    }

    public function keystoneListDomainPermissionsForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListDomainPermissionsForGroupRequest');
    }

    public function keystoneListEndpoints($request){
        return $this->keystoneListEndpointsWithHttpInfo($request);
    }

    public function keystoneListEndpointsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListEndpointsRequest');
    }

    public function keystoneListGroups($request){
        return $this->keystoneListGroupsWithHttpInfo($request);
    }

    public function keystoneListGroupsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsRequest');
    }

    public function keystoneListIdentityProviders($request){
        return $this->keystoneListIdentityProvidersWithHttpInfo($request);
    }

    public function keystoneListIdentityProvidersWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListIdentityProvidersRequest');
    }

    public function keystoneListMappings($request){
        return $this->keystoneListMappingsWithHttpInfo($request);
    }

    public function keystoneListMappingsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListMappingsRequest');
    }

    public function keystoneListPermissions($request){
        return $this->keystoneListPermissionsWithHttpInfo($request);
    }

    public function keystoneListPermissionsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListPermissionsRequest');
    }

    public function keystoneListProjectPermissionsForGroup($request){
        return $this->keystoneListProjectPermissionsForGroupWithHttpInfo($request);
    }

    public function keystoneListProjectPermissionsForGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectPermissionsForGroupRequest');
    }

    public function keystoneListProjects($request){
        return $this->keystoneListProjectsWithHttpInfo($request);
    }

    public function keystoneListProjectsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsRequest');
    }

    public function keystoneListProjectsForUser($request){
        return $this->keystoneListProjectsForUserWithHttpInfo($request);
    }

    public function keystoneListProjectsForUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProjectsForUserRequest');
    }

    public function keystoneListProtocols($request){
        return $this->keystoneListProtocolsWithHttpInfo($request);
    }

    public function keystoneListProtocolsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListProtocolsRequest');
    }

    public function keystoneListRegions($request){
        return $this->keystoneListRegionsWithHttpInfo($request);
    }

    public function keystoneListRegionsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListRegionsRequest');
    }

    public function keystoneListServices($request){
        return $this->keystoneListServicesWithHttpInfo($request);
    }

    public function keystoneListServicesWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListServicesRequest');
    }

    public function keystoneListUsersForGroupByAdmin($request){
        return $this->keystoneListUsersForGroupByAdminWithHttpInfo($request);
    }

    public function keystoneListUsersForGroupByAdminWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersForGroupByAdminRequest');
    }

    public function keystoneListVersions($request){
        return $this->keystoneListVersionsWithHttpInfo($request);
    }

    public function keystoneListVersionsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListVersionsRequest');
    }

    public function keystoneRemoveDomainPermissionFromGroup($request){
        return $this->keystoneRemoveDomainPermissionFromGroupWithHttpInfo($request);
    }

    public function keystoneRemoveDomainPermissionFromGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveDomainPermissionFromGroupRequest');
    }

    public function keystoneRemoveProjectPermissionFromGroup($request){
        return $this->keystoneRemoveProjectPermissionFromGroupWithHttpInfo($request);
    }

    public function keystoneRemoveProjectPermissionFromGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveProjectPermissionFromGroupRequest');
    }

    public function keystoneRemoveUserFromGroup($request){
        return $this->keystoneRemoveUserFromGroupWithHttpInfo($request);
    }

    public function keystoneRemoveUserFromGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneRemoveUserFromGroupRequest');
    }

    public function keystoneShowCatalog($request){
        return $this->keystoneShowCatalogWithHttpInfo($request);
    }

    public function keystoneShowCatalogWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowCatalogRequest');
    }

    public function keystoneShowEndpoint($request){
        return $this->keystoneShowEndpointWithHttpInfo($request);
    }

    public function keystoneShowEndpointWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowEndpointRequest');
    }

    public function keystoneShowGroup($request){
        return $this->keystoneShowGroupWithHttpInfo($request);
    }

    public function keystoneShowGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowGroupRequest');
    }

    public function keystoneShowIdentityProvider($request){
        return $this->keystoneShowIdentityProviderWithHttpInfo($request);
    }

    public function keystoneShowIdentityProviderWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowIdentityProviderRequest');
    }

    public function keystoneShowMapping($request){
        return $this->keystoneShowMappingWithHttpInfo($request);
    }

    public function keystoneShowMappingWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowMappingRequest');
    }

    public function keystoneShowPermission($request){
        return $this->keystoneShowPermissionWithHttpInfo($request);
    }

    public function keystoneShowPermissionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowPermissionRequest');
    }

    public function keystoneShowProject($request){
        return $this->keystoneShowProjectWithHttpInfo($request);
    }

    public function keystoneShowProjectWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProjectRequest');
    }

    public function keystoneShowProtocol($request){
        return $this->keystoneShowProtocolWithHttpInfo($request);
    }

    public function keystoneShowProtocolWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowProtocolRequest');
    }

    public function keystoneShowRegion($request){
        return $this->keystoneShowRegionWithHttpInfo($request);
    }

    public function keystoneShowRegionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowRegionRequest');
    }

    public function keystoneShowSecurityCompliance($request){
        return $this->keystoneShowSecurityComplianceWithHttpInfo($request);
    }

    public function keystoneShowSecurityComplianceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceRequest');
    }

    public function keystoneShowSecurityComplianceByOption($request){
        return $this->keystoneShowSecurityComplianceByOptionWithHttpInfo($request);
    }

    public function keystoneShowSecurityComplianceByOptionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowSecurityComplianceByOptionRequest');
    }

    public function keystoneShowService($request){
        return $this->keystoneShowServiceWithHttpInfo($request);
    }

    public function keystoneShowServiceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowServiceRequest');
    }

    public function keystoneShowVersion($request){
        return $this->keystoneShowVersionWithHttpInfo($request);
    }

    public function keystoneShowVersionWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowVersionRequest');
    }

    public function keystoneUpdateGroup($request){
        return $this->keystoneUpdateGroupWithHttpInfo($request);
    }

    public function keystoneUpdateGroupWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateGroupRequest');
    }

    public function keystoneUpdateIdentityProvider($request){
        return $this->keystoneUpdateIdentityProviderWithHttpInfo($request);
    }

    public function keystoneUpdateIdentityProviderWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateIdentityProviderRequest');
    }

    public function keystoneUpdateMapping($request){
        return $this->keystoneUpdateMappingWithHttpInfo($request);
    }

    public function keystoneUpdateMappingWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateMappingRequest');
    }

    public function keystoneUpdateProject($request){
        return $this->keystoneUpdateProjectWithHttpInfo($request);
    }

    public function keystoneUpdateProjectWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProjectRequest');
    }

    public function keystoneUpdateProtocol($request){
        return $this->keystoneUpdateProtocolWithHttpInfo($request);
    }

    public function keystoneUpdateProtocolWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateProtocolRequest');
    }

    public function listAgencies($request){
        return $this->listAgenciesWithHttpInfo($request);
    }

    public function listAgenciesWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListAgenciesRequest');
    }

    public function listAllProjectsPermissionsForAgency($request){
        return $this->listAllProjectsPermissionsForAgencyWithHttpInfo($request);
    }

    public function listAllProjectsPermissionsForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListAllProjectsPermissionsForAgencyRequest');
    }

    public function listCustomPolicies($request){
        return $this->listCustomPoliciesWithHttpInfo($request);
    }

    public function listCustomPoliciesWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListCustomPoliciesRequest');
    }

    public function listDomainPermissionsForAgency($request){
        return $this->listDomainPermissionsForAgencyWithHttpInfo($request);
    }

    public function listDomainPermissionsForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListDomainPermissionsForAgencyRequest');
    }

    public function listProjectPermissionsForAgency($request){
        return $this->listProjectPermissionsForAgencyWithHttpInfo($request);
    }

    public function listProjectPermissionsForAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListProjectPermissionsForAgencyRequest');
    }

    public function removeAllProjectsPermissionFromAgency($request){
        return $this->removeAllProjectsPermissionFromAgencyWithHttpInfo($request);
    }

    public function removeAllProjectsPermissionFromAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveAllProjectsPermissionFromAgencyRequest');
    }

    public function removeDomainPermissionFromAgency($request){
        return $this->removeDomainPermissionFromAgencyWithHttpInfo($request);
    }

    public function removeDomainPermissionFromAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveDomainPermissionFromAgencyRequest');
    }

    public function removeProjectPermissionFromAgency($request){
        return $this->removeProjectPermissionFromAgencyWithHttpInfo($request);
    }

    public function removeProjectPermissionFromAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\RemoveProjectPermissionFromAgencyRequest');
    }

    public function showAgency($request){
        return $this->showAgencyWithHttpInfo($request);
    }

    public function showAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowAgencyRequest');
    }

    public function showCustomPolicy($request){
        return $this->showCustomPolicyWithHttpInfo($request);
    }

    public function showCustomPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowCustomPolicyRequest');
    }

    public function showDomainApiAclPolicy($request){
        return $this->showDomainApiAclPolicyWithHttpInfo($request);
    }

    public function showDomainApiAclPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainApiAclPolicyRequest');
    }

    public function showDomainConsoleAclPolicy($request){
        return $this->showDomainConsoleAclPolicyWithHttpInfo($request);
    }

    public function showDomainConsoleAclPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainConsoleAclPolicyRequest');
    }

    public function showDomainLoginPolicy($request){
        return $this->showDomainLoginPolicyWithHttpInfo($request);
    }

    public function showDomainLoginPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainLoginPolicyRequest');
    }

    public function showDomainPasswordPolicy($request){
        return $this->showDomainPasswordPolicyWithHttpInfo($request);
    }

    public function showDomainPasswordPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainPasswordPolicyRequest');
    }

    public function showDomainProtectPolicy($request){
        return $this->showDomainProtectPolicyWithHttpInfo($request);
    }

    public function showDomainProtectPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainProtectPolicyRequest');
    }

    public function showDomainQuota($request){
        return $this->showDomainQuotaWithHttpInfo($request);
    }

    public function showDomainQuotaWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowDomainQuotaRequest');
    }

    public function showMetadata($request){
        return $this->showMetadataWithHttpInfo($request);
    }

    public function showMetadataWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowMetadataRequest');
    }

    public function showProjectDetailsAndStatus($request){
        return $this->showProjectDetailsAndStatusWithHttpInfo($request);
    }

    public function showProjectDetailsAndStatusWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectDetailsAndStatusRequest');
    }

    public function showProjectQuota($request){
        return $this->showProjectQuotaWithHttpInfo($request);
    }

    public function showProjectQuotaWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowProjectQuotaRequest');
    }

    public function updateAgency($request){
        return $this->updateAgencyWithHttpInfo($request);
    }

    public function updateAgencyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyRequest');
    }

    public function updateAgencyCustomPolicy($request){
        return $this->updateAgencyCustomPolicyWithHttpInfo($request);
    }

    public function updateAgencyCustomPolicyWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyCustomPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateAgencyCustomPolicyRequest');
    }

    public function updateCloudServiceCustomPolicy($request){
        return $this->updateCloudServiceCustomPolicyWithHttpInfo($request);
    }

    public function updateCloudServiceCustomPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateCloudServiceCustomPolicyRequest');
    }

    public function updateDomainApiAclPolicy($request){
        return $this->updateDomainApiAclPolicyWithHttpInfo($request);
    }

    public function updateDomainApiAclPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainApiAclPolicyRequest');
    }

    public function updateDomainConsoleAclPolicy($request){
        return $this->updateDomainConsoleAclPolicyWithHttpInfo($request);
    }

    public function updateDomainConsoleAclPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainConsoleAclPolicyRequest');
    }

    public function updateDomainGroupInheritRole($request){
        return $this->updateDomainGroupInheritRoleWithHttpInfo($request);
    }

    public function updateDomainGroupInheritRoleWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainGroupInheritRoleRequest');
    }

    public function updateDomainLoginPolicy($request){
        return $this->updateDomainLoginPolicyWithHttpInfo($request);
    }

    public function updateDomainLoginPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainLoginPolicyRequest');
    }

    public function updateDomainPasswordPolicy($request){
        return $this->updateDomainPasswordPolicyWithHttpInfo($request);
    }

    public function updateDomainPasswordPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainPasswordPolicyRequest');
    }

    public function updateDomainProtectPolicy($request){
        return $this->updateDomainProtectPolicyWithHttpInfo($request);
    }

    public function updateDomainProtectPolicyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateDomainProtectPolicyRequest');
    }

    public function updateProjectStatus($request){
        return $this->updateProjectStatusWithHttpInfo($request);
    }

    public function updateProjectStatusWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateProjectStatusRequest');
    }

    public function createPermanentAccessKey($request){
        return $this->createPermanentAccessKeyWithHttpInfo($request);
    }

    public function createPermanentAccessKeyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreatePermanentAccessKeyRequest');
    }

    public function createTemporaryAccessKeyByAgency($request){
        return $this->createTemporaryAccessKeyByAgencyWithHttpInfo($request);
    }

    public function createTemporaryAccessKeyByAgencyWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByAgencyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByAgencyRequest');
    }

    public function createTemporaryAccessKeyByToken($request){
        return $this->createTemporaryAccessKeyByTokenWithHttpInfo($request);
    }

    public function createTemporaryAccessKeyByTokenWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateTemporaryAccessKeyByTokenRequest');
    }

    public function deletePermanentAccessKey($request){
        return $this->deletePermanentAccessKeyWithHttpInfo($request);
    }

    public function deletePermanentAccessKeyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeletePermanentAccessKeyRequest');
    }

    public function listPermanentAccessKeys($request){
        return $this->listPermanentAccessKeysWithHttpInfo($request);
    }

    public function listPermanentAccessKeysWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListPermanentAccessKeysRequest');
    }

    public function showPermanentAccessKey($request){
        return $this->showPermanentAccessKeyWithHttpInfo($request);
    }

    public function showPermanentAccessKeyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowPermanentAccessKeyRequest');
    }

    public function updatePermanentAccessKey($request){
        return $this->updatePermanentAccessKeyWithHttpInfo($request);
    }

    public function updatePermanentAccessKeyWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdatePermanentAccessKeyRequest');
    }

    public function createBindingDevice($request){
        return $this->createBindingDeviceWithHttpInfo($request);
    }

    public function createBindingDeviceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateBindingDeviceRequest');
    }

    public function createMfaDevice($request){
        return $this->createMfaDeviceWithHttpInfo($request);
    }

    public function createMfaDeviceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateMfaDeviceRequest');
    }

    public function createUser($request){
        return $this->createUserWithHttpInfo($request);
    }

    public function createUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\CreateUserRequest');
    }

    public function deleteBindingDevice($request){
        return $this->deleteBindingDeviceWithHttpInfo($request);
    }

    public function deleteBindingDeviceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteBindingDeviceRequest');
    }

    public function deleteMfaDevice($request){
        return $this->deleteMfaDeviceWithHttpInfo($request);
    }

    public function deleteMfaDeviceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\DeleteMfaDeviceRequest');
    }

    public function keystoneCreateUser($request){
        return $this->keystoneCreateUserWithHttpInfo($request);
    }

    public function keystoneCreateUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserRequest');
    }

    public function keystoneDeleteUser($request){
        return $this->keystoneDeleteUserWithHttpInfo($request);
    }

    public function keystoneDeleteUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneDeleteUserRequest');
    }

    public function keystoneListGroupsForUser($request){
        return $this->keystoneListGroupsForUserWithHttpInfo($request);
    }

    public function keystoneListGroupsForUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListGroupsForUserRequest');
    }

    public function keystoneListUsers($request){
        return $this->keystoneListUsersWithHttpInfo($request);
    }

    public function keystoneListUsersWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneListUsersRequest');
    }

    public function keystoneShowUser($request){
        return $this->keystoneShowUserWithHttpInfo($request);
    }

    public function keystoneShowUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneShowUserRequest');
    }

    public function keystoneUpdateUserByAdmin($request){
        return $this->keystoneUpdateUserByAdminWithHttpInfo($request);
    }

    public function keystoneUpdateUserByAdminWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserByAdminRequest');
    }

    public function keystoneUpdateUserPassword($request){
        return $this->keystoneUpdateUserPasswordWithHttpInfo($request);
    }

    public function keystoneUpdateUserPasswordWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneUpdateUserPasswordRequest');
    }

    public function listUserLoginProtects($request){
        return $this->listUserLoginProtectsWithHttpInfo($request);
    }

    public function listUserLoginProtectsWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserLoginProtectsRequest');
    }

    public function listUserMfaDevices($request){
        return $this->listUserMfaDevicesWithHttpInfo($request);
    }

    public function listUserMfaDevicesWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ListUserMfaDevicesRequest');
    }

    public function showUser($request){
        return $this->showUserWithHttpInfo($request);
    }

    public function showUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserRequest');
    }

    public function showUserLoginProtect($request){
        return $this->showUserLoginProtectWithHttpInfo($request);
    }

    public function showUserLoginProtectWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserLoginProtectRequest');
    }

    public function showUserMfaDevice($request){
        return $this->showUserMfaDeviceWithHttpInfo($request);
    }

    public function showUserMfaDeviceWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\ShowUserMfaDeviceRequest');
    }

    public function updateLoginProtect($request){
        return $this->updateLoginProtectWithHttpInfo($request);
    }

    public function updateLoginProtectWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateLoginProtectRequest');
    }

    public function updateUser($request){
        return $this->updateUserWithHttpInfo($request);
    }

    public function updateUserWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserRequest');
    }

    public function updateUserInformation($request){
        return $this->updateUserInformationWithHttpInfo($request);
    }

    public function updateUserInformationWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\UpdateUserInformationRequest');
    }

    public function keystoneCreateAgencyToken($request){
        return $this->keystoneCreateAgencyTokenWithHttpInfo($request);
    }

    public function keystoneCreateAgencyTokenWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateAgencyTokenResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateAgencyTokenRequest');
    }

    public function keystoneCreateUserTokenByPassword($request){
        return $this->keystoneCreateUserTokenByPasswordWithHttpInfo($request);
    }

    public function keystoneCreateUserTokenByPasswordWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordRequest');
    }

    public function keystoneCreateUserTokenByPasswordAndMfa($request){
        return $this->keystoneCreateUserTokenByPasswordAndMfaWithHttpInfo($request);
    }

    public function keystoneCreateUserTokenByPasswordAndMfaWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordAndMfaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneCreateUserTokenByPasswordAndMfaRequest');
    }

    public function keystoneValidateToken($request){
        return $this->keystoneValidateTokenWithHttpInfo($request);
    }

    public function keystoneValidateTokenWithHttpInfo($request){
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
            $requestType='\HuaweiCloud\SDK\Iam\V3\Model\KeystoneValidateTokenRequest');
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
        $collectionFormats = null,
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
        $collectionFormats,
        $requestType);
    }
}