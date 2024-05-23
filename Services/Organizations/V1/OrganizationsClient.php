<?php

namespace HuaweiCloud\SDK\Organizations\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class OrganizationsClient extends Client
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
        return new ClientBuilder(new OrganizationsClient(), "GlobalCredentials");
    }


    /**
     * 关闭账号
     *
     * 关闭账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function closeAccount($request)
    {
        return $this->closeAccountWithHttpInfo($request);
    }

    public function closeAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/{account_id}/close';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $pathParams['account_id'] = $localVarParams['accountId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CloseAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CloseAccountRequest');
    }

    /**
     * 创建账号
     *
     * 创建一个账号，生成的账号将自动成为调用此接口的账号所属组织的成员。此操作只能由组织的管理账号调用。组织云服务将在新账号中创建所需的服务关联委托和账号访问委托。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createAccount($request)
    {
        return $this->createAccountWithHttpInfo($request);
    }

    public function createAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateAccountRequest');
    }

    /**
     * 邀请账号加入组织
     *
     * 向另一个账号发送邀请，受邀账号将以成员账号加入您的组织。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function inviteAccount($request)
    {
        return $this->inviteAccountWithHttpInfo($request);
    }

    public function inviteAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/invite';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\InviteAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\InviteAccountRequest');
    }

    /**
     * 列出组织中的账号
     *
     * 列出组织中的账号。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。如果指定父级组织单元，则将获得作为父级直系子级的所有账号的列表。
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
        $resourcePath = '/v1/organizations/accounts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListAccountsResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListAccountsRequest');
    }

    /**
     * 列出关闭账号的状态
     *
     * 列出组织中指定状态的账号关闭请求。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCloseAccountStatuses($request)
    {
        return $this->listCloseAccountStatusesWithHttpInfo($request);
    }

    public function listCloseAccountStatusesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/close-account-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['states'] !== null) {
            $queryParams['states'] = $localVarParams['states'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListCloseAccountStatusesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListCloseAccountStatusesRequest');
    }

    /**
     * 列出创建账号的状态
     *
     * 列出组织中指定状态的账号创建请求。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCreateAccountStatuses($request)
    {
        return $this->listCreateAccountStatusesWithHttpInfo($request);
    }

    public function listCreateAccountStatusesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/create-account-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['states'] !== null) {
            $queryParams['states'] = $localVarParams['states'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListCreateAccountStatusesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListCreateAccountStatusesRequest');
    }

    /**
     * 移动账号
     *
     * 将账号从其当前源位置（根或组织单元）移动到指定的目标位置（根或组织单元）。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function moveAccount($request)
    {
        return $this->moveAccountWithHttpInfo($request);
    }

    public function moveAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/{account_id}/move';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $pathParams['account_id'] = $localVarParams['accountId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\MoveAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\MoveAccountRequest');
    }

    /**
     * 移除指定的账号
     *
     * 从组织中移除指定的账号。移除的账号将成为一个独立账号，该账号不是任何组织的成员。此操作只能由组织的管理账号调用。只有当账号配置了作为独立账号运行所需的信息时，您才能从组织中移除账号。注意，要移除的账号不能是组织启用的任何服务的委托管理员账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function removeAccount($request)
    {
        return $this->removeAccountWithHttpInfo($request);
    }

    public function removeAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/{account_id}/remove';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $pathParams['account_id'] = $localVarParams['accountId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\RemoveAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\RemoveAccountRequest');
    }

    /**
     * 查询账号信息
     *
     * 查询有关指定账号的信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showAccount($request)
    {
        return $this->showAccountWithHttpInfo($request);
    }

    public function showAccountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/{account_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['accountId'] !== null) {
            $pathParams['account_id'] = $localVarParams['accountId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowAccountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowAccountRequest');
    }

    /**
     * 查询有关创建账号状态的信息
     *
     * 检索创建账号的异步请求的当前状态。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCreateAccountStatus($request)
    {
        return $this->showCreateAccountStatusWithHttpInfo($request);
    }

    public function showCreateAccountStatusWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/create-account-status/{create_account_status_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['createAccountStatusId'] !== null) {
            $pathParams['create_account_status_id'] = $localVarParams['createAccountStatusId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowCreateAccountStatusResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowCreateAccountStatusRequest');
    }

    /**
     * 注销服务的委托管理员
     *
     * 删除指定成员账号作为指定服务的委托管理员。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deregisterDelegatedAdministrator($request)
    {
        return $this->deregisterDelegatedAdministratorWithHttpInfo($request);
    }

    public function deregisterDelegatedAdministratorWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/delegated-administrators/deregister';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeregisterDelegatedAdministratorResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeregisterDelegatedAdministratorRequest');
    }

    /**
     * 列出此组织中指定为委托管理员的账号
     *
     * 列出在此组织中指定为委派管理员的账号。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDelegatedAdministrators($request)
    {
        return $this->listDelegatedAdministratorsWithHttpInfo($request);
    }

    public function listDelegatedAdministratorsWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/delegated-administrators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['servicePrincipal'] !== null) {
            $queryParams['service_principal'] = $localVarParams['servicePrincipal'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListDelegatedAdministratorsResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListDelegatedAdministratorsRequest');
    }

    /**
     * 列出指定账号是其委托管理员的服务
     *
     * 列出指定账号是其委托管理员的服务。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listDelegatedServices($request)
    {
        return $this->listDelegatedServicesWithHttpInfo($request);
    }

    public function listDelegatedServicesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/accounts/{account_id}/delegated-services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $pathParams['account_id'] = $localVarParams['accountId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListDelegatedServicesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListDelegatedServicesRequest');
    }

    /**
     * 注册作为服务委托管理员
     *
     * 指定成员账号能够管理指定服务的组织功能。此接口授予委托管理员对组织服务数据的只读访问权限。委托管理员账号中的IAM用户仍需要IAM权限才能访问和管理服务。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function registerDelegatedAdministrator($request)
    {
        return $this->registerDelegatedAdministratorWithHttpInfo($request);
    }

    public function registerDelegatedAdministratorWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/delegated-administrators/register';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\RegisterDelegatedAdministratorResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\RegisterDelegatedAdministratorRequest');
    }

    /**
     * 接受邀请
     *
     * 向邀请的发起方发送应答，接受加入组织邀请。在您接受邀请后，此邀请信息将继续保留并出现在相关API的返回结果中，保留期限为30天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function acceptHandshake($request)
    {
        return $this->acceptHandshakeWithHttpInfo($request);
    }

    public function acceptHandshakeWithHttpInfo($request)
    {
        $resourcePath = '/v1/received-handshakes/{handshake_id}/accept';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['handshakeId'] !== null) {
            $pathParams['handshake_id'] = $localVarParams['handshakeId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\AcceptHandshakeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\AcceptHandshakeRequest');
    }

    /**
     * 取消邀请
     *
     * 取消邀请，此时邀请状态将设置为已取消。此接口只能由发起邀请的账号调用。取消邀请后，此邀请信息将继续保留并出现在相关API的返回结果中，保留期限为30天。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelHandshake($request)
    {
        return $this->cancelHandshakeWithHttpInfo($request);
    }

    public function cancelHandshakeWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/handshakes/{handshake_id}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['handshakeId'] !== null) {
            $pathParams['handshake_id'] = $localVarParams['handshakeId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CancelHandshakeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CancelHandshakeRequest');
    }

    /**
     * 拒绝邀请
     *
     * 拒绝邀请请求。受邀账号拒绝邀请，此时当前邀请状态将设置为拒绝，邀请停止。此接口只能由受邀账号调用。邀请发起者无法再次激活被拒绝的邀请，但可以重新发送新的邀请。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function declineHandshake($request)
    {
        return $this->declineHandshakeWithHttpInfo($request);
    }

    public function declineHandshakeWithHttpInfo($request)
    {
        $resourcePath = '/v1/received-handshakes/{handshake_id}/decline';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['handshakeId'] !== null) {
            $pathParams['handshake_id'] = $localVarParams['handshakeId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeclineHandshakeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeclineHandshakeRequest');
    }

    /**
     * 列出发送的邀请
     *
     * 列出所属组织发送的邀请。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHandshakes($request)
    {
        return $this->listHandshakesWithHttpInfo($request);
    }

    public function listHandshakesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/handshakes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListHandshakesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListHandshakesRequest');
    }

    /**
     * 列出收到的邀请
     *
     * 列出账号收到的所有邀请。此操作可以由任何账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listReceivedHandshakes($request)
    {
        return $this->listReceivedHandshakesWithHttpInfo($request);
    }

    public function listReceivedHandshakesWithHttpInfo($request)
    {
        $resourcePath = '/v1/received-handshakes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListReceivedHandshakesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListReceivedHandshakesRequest');
    }

    /**
     * 查询邀请相关信息
     *
     * 查询组织中已有账号邀请的相关信息。此接口可以由组织中的任何账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showHandshake($request)
    {
        return $this->showHandshakeWithHttpInfo($request);
    }

    public function showHandshakeWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/handshakes/{handshake_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['handshakeId'] !== null) {
            $pathParams['handshake_id'] = $localVarParams['handshakeId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowHandshakeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowHandshakeRequest');
    }

    /**
     * 列出组织中的根、组织单元和账号
     *
     * 列出组织中包含的所有根、组织单元和账号。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。您可以通过指定父ID和子ID参数来过滤实体。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEntities($request)
    {
        return $this->listEntitiesWithHttpInfo($request);
    }

    public function listEntitiesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/entities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
        }
        if ($localVarParams['childId'] !== null) {
            $queryParams['child_id'] = $localVarParams['childId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListEntitiesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListEntitiesRequest');
    }

    /**
     * 列出租户的组织配额
     *
     * 列出租户的组织配额。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotas($request)
    {
        return $this->listQuotasWithHttpInfo($request);
    }

    public function listQuotasWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListQuotasResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListQuotasRequest');
    }

    /**
     * 列出所有可以与组织服务集成的云服务
     *
     * 列出所有可以与组织服务集成的云服务。集成后云服务将成为组织的可信服务。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServices($request)
    {
        return $this->listServicesWithHttpInfo($request);
    }

    public function listServicesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListServicesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListServicesRequest');
    }

    /**
     * 列出被添加到标签策略强制执行的资源类型
     *
     * 列出被添加到标签策略强制执行的资源类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagPolicyServices($request)
    {
        return $this->listTagPolicyServicesWithHttpInfo($request);
    }

    public function listTagPolicyServicesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/tag-policy-services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagPolicyServicesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagPolicyServicesRequest');
    }

    /**
     * 查询有效的策略
     *
     * 查询指定策略类型和账户的有效策略信息。当前此接口不支持查询服务控制策略（service_control_policy）。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showEffectivePolicies($request)
    {
        return $this->showEffectivePoliciesWithHttpInfo($request);
    }

    public function showEffectivePoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/entities/effective-policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['entityId'] !== null) {
            $queryParams['entity_id'] = $localVarParams['entityId'];
        }
        if ($localVarParams['policyType'] !== null) {
            $queryParams['policy_type'] = $localVarParams['policyType'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowEffectivePoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowEffectivePoliciesRequest');
    }

    /**
     * 创建组织
     *
     * 创建组织。调用此接口的账号将自动成为新组织的管理账号，调用此接口的账号凭证必须是新组织管理账号的账号凭证。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrganization($request)
    {
        return $this->createOrganizationWithHttpInfo($request);
    }

    public function createOrganizationWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateOrganizationResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateOrganizationRequest');
    }

    /**
     * 删除组织
     *
     * 删除组织。您必须使用管理账号才能删除组织，并且先移除组织中的所有账号、组织单元和策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOrganization($request)
    {
        return $this->deleteOrganizationWithHttpInfo($request);
    }

    public function deleteOrganizationWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteOrganizationResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteOrganizationRequest');
    }

    /**
     * 离开当前组织
     *
     * 此操作只能由组织的成员账号调用。只有当组织账号配置了作为独立账号运行所需的信息时，您才能作为成员账户离开组织。要离开的账号不能是组织启用的任何服务的委托管理员账号。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function leaveOrganization($request)
    {
        return $this->leaveOrganizationWithHttpInfo($request);
    }

    public function leaveOrganizationWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/leave';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\LeaveOrganizationResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\LeaveOrganizationRequest');
    }

    /**
     * 列出组织的根
     *
     * 列出当前组织的根。此接口只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRoots($request)
    {
        return $this->listRootsWithHttpInfo($request);
    }

    public function listRootsWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/roots';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListRootsResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListRootsRequest');
    }

    /**
     * 查询所属组织信息
     *
     * 查询账号所属组织的信息。此操作可以由组织中的任何账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganization($request)
    {
        return $this->showOrganizationWithHttpInfo($request);
    }

    public function showOrganizationWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowOrganizationResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowOrganizationRequest');
    }

    /**
     * 创建组织单元
     *
     * 在根或父组织单元中创建组织单元。组织单元是账号的容器，使您能够对账号进行分组管理，并根据业务要求应用策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createOrganizationalUnit($request)
    {
        return $this->createOrganizationalUnitWithHttpInfo($request);
    }

    public function createOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/organizational-units';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateOrganizationalUnitRequest');
    }

    /**
     * 删除组织单元
     *
     * 从根或其他组织单元中删除组织单元。前提是您必须先移除该组织单元中的所有成员账号或将成员账号移动至其他组织单元，必须删除该组织单元中的所有子组织单元。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteOrganizationalUnit($request)
    {
        return $this->deleteOrganizationalUnitWithHttpInfo($request);
    }

    public function deleteOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/organizational-units/{organizational_unit_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $pathParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteOrganizationalUnitRequest');
    }

    /**
     * 列出组织单元
     *
     * 列出组织中的所有组织单元。如果指定父级组织单元，则将获得父级直系子级的组织单元列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrganizationalUnits($request)
    {
        return $this->listOrganizationalUnitsWithHttpInfo($request);
    }

    public function listOrganizationalUnitsWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/organizational-units';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListOrganizationalUnitsResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListOrganizationalUnitsRequest');
    }

    /**
     * 查询有关组织单元的信息
     *
     * 查询有关组织单元的信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showOrganizationalUnit($request)
    {
        return $this->showOrganizationalUnitWithHttpInfo($request);
    }

    public function showOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/organizational-units/{organizational_unit_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $pathParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowOrganizationalUnitRequest');
    }

    /**
     * 更改组织单元名称
     *
     * 重命名指定的组织单元。重命名后组织单元ID不变，下属子组织单元和下属账号不变，组织单元绑定的策略不变。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateOrganizationalUnit($request)
    {
        return $this->updateOrganizationalUnitWithHttpInfo($request);
    }

    public function updateOrganizationalUnitWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/organizational-units/{organizational_unit_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['organizationalUnitId'] !== null) {
            $pathParams['organizational_unit_id'] = $localVarParams['organizationalUnitId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\UpdateOrganizationalUnitResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\UpdateOrganizationalUnitRequest');
    }

    /**
     * 将策略跟实体绑定
     *
     * 绑定策略到根、组织单元或个人账户。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachPolicy($request)
    {
        return $this->attachPolicyWithHttpInfo($request);
    }

    public function attachPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}/attach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\AttachPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\AttachPolicyRequest');
    }

    /**
     * 创建策略
     *
     * 创建指定类型的策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPolicy($request)
    {
        return $this->createPolicyWithHttpInfo($request);
    }

    public function createPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CreatePolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CreatePolicyRequest');
    }

    /**
     * 删除策略
     *
     * 从组织中删除指定的策略。在执行此操作之前，必须首先将策略跟所有组织单元、根和账号解绑。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePolicy($request)
    {
        return $this->deletePolicyWithHttpInfo($request);
    }

    public function deletePolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeletePolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeletePolicyRequest');
    }

    /**
     * 将策略跟实体解绑
     *
     * 从根、组织单元或账号解绑策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function detachPolicy($request)
    {
        return $this->detachPolicyWithHttpInfo($request);
    }

    public function detachPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}/detach';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DetachPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DetachPolicyRequest');
    }

    /**
     * 禁用根中的策略类型
     *
     * 禁用根中的策略类型。只有在根中启用了特定类型的策略，才能将该类型的策略绑定到根中的实体。执行此操作后，您不能再将指定类型的策略绑定到该根或该根中的任何组织单元或账号。这是在后台执行的异步请求。您可以使用ListRoots查看指定根的策略类型的状态。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disablePolicyType($request)
    {
        return $this->disablePolicyTypeWithHttpInfo($request);
    }

    public function disablePolicyTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DisablePolicyTypeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DisablePolicyTypeRequest');
    }

    /**
     * 在根中启用策略类型
     *
     * 在根中启用策略类型。在根中启用策略类型后，您可以将该类型的策略绑定到根、或该根中的任何组织单元和账号。这是在后台执行的异步请求。您可以使用ListRoots查看指定根的策略类型的状态。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enablePolicyType($request)
    {
        return $this->enablePolicyTypeWithHttpInfo($request);
    }

    public function enablePolicyTypeWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\EnablePolicyTypeResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\EnablePolicyTypeRequest');
    }

    /**
     * 列出跟指定策略绑定的所有实体
     *
     * 列出跟指定策略绑定的所有根、组织单元和账号。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEntitiesForPolicy($request)
    {
        return $this->listEntitiesForPolicyWithHttpInfo($request);
    }

    public function listEntitiesForPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}/attached-entities';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListEntitiesForPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListEntitiesForPolicyRequest');
    }

    /**
     * 列出策略
     *
     * 列出组织中的所有策略。如果指定了资源ID，例如组织单元ID或账号ID，则将获得该资源已绑定的策略列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPolicies($request)
    {
        return $this->listPoliciesWithHttpInfo($request);
    }

    public function listPoliciesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['attachedEntityId'] !== null) {
            $queryParams['attached_entity_id'] = $localVarParams['attachedEntityId'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListPoliciesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListPoliciesRequest');
    }

    /**
     * 查询策略相关信息
     *
     * 检索策略的相关信息。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicy($request)
    {
        return $this->showPolicyWithHttpInfo($request);
    }

    public function showPolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowPolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowPolicyRequest');
    }

    /**
     * 更新策略
     *
     * 更新策略，可以更新策略的名称、描述或内容。如果不提供任何参数，则策略将保持不变。您不能更改策略的类型。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePolicy($request)
    {
        return $this->updatePolicyWithHttpInfo($request);
    }

    public function updatePolicyWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/policies/{policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams[$arr['xLanguage']] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['policyId'] !== null) {
            $pathParams['policy_id'] = $localVarParams['policyId'];
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
            $method='PATCH',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\UpdatePolicyResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\UpdatePolicyRequest');
    }

    /**
     * 为指定资源添加标签
     *
     * 向指定的资源添加一个或多个标签。目前，您可以将标签附加到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createTagResource($request)
    {
        return $this->createTagResourceWithHttpInfo($request);
    }

    public function createTagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/{resource_id}/tags/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateTagResourceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\CreateTagResourceRequest');
    }

    /**
     * 从指定资源中删除指定主键标签
     *
     * 从指定资源中删除具有指定主键的任何标签。您可以将标签绑定到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteTagResource($request)
    {
        return $this->deleteTagResourceWithHttpInfo($request);
    }

    public function deleteTagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/{resource_id}/tags/delete';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteTagResourceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DeleteTagResourceRequest');
    }

    /**
     * 根据资源类型及标签信息查询实例列表
     *
     * 根据资源类型及标签信息查询实例列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceInstances($request)
    {
        return $this->listResourceInstancesWithHttpInfo($request);
    }

    public function listResourceInstancesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/resource-instances/filter';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListResourceInstancesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListResourceInstancesRequest');
    }

    /**
     * 查询资源标签
     *
     * 查询资源标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTags($request)
    {
        return $this->listResourceTagsWithHttpInfo($request);
    }

    public function listResourceTagsWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListResourceTagsResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListResourceTagsRequest');
    }

    /**
     * 列出绑定到指定资源的标签
     *
     * 列出绑定到指定资源的标签。您可以将标签附加到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagResources($request)
    {
        return $this->listTagResourcesWithHttpInfo($request);
    }

    public function listTagResourcesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagResourcesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagResourcesRequest');
    }

    /**
     * 列出绑定到指定资源的标签
     *
     * 列出绑定到指定资源的标签。您可以将标签附加到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTagsForResource($request)
    {
        return $this->listTagsForResourceWithHttpInfo($request);
    }

    public function listTagsForResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/resources/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagsForResourceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTagsForResourceRequest');
    }

    /**
     * 根据资源类型及标签信息查询实例数量
     *
     * 根据资源类型及标签信息查询实例数量。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceInstancesCount($request)
    {
        return $this->showResourceInstancesCountWithHttpInfo($request);
    }

    public function showResourceInstancesCountWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/{resource_type}/resource-instances/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowResourceInstancesCountResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ShowResourceInstancesCountRequest');
    }

    /**
     * 为指定资源添加标签
     *
     * 向指定的资源添加一个或多个标签。目前，您可以将标签附加到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function tagResource($request)
    {
        return $this->tagResourceWithHttpInfo($request);
    }

    public function tagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/resources/{resource_id}/tag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\TagResourceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\TagResourceRequest');
    }

    /**
     * 从指定资源中删除指定主键标签
     *
     * 从指定资源中删除具有指定主键的任何标签。您可以将标签绑定到组织中的账号、组织单元、根和策略。此操作只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function untagResource($request)
    {
        return $this->untagResourceWithHttpInfo($request);
    }

    public function untagResourceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/resources/{resource_id}/untag';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\UntagResourceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\UntagResourceRequest');
    }

    /**
     * 禁用受信任服务
     *
     * 禁用服务（由service_principal指定的服务）与组织的集成。禁用可信服务后，指定服务将不可以在组织中的新账号中创建服务关联委托。这意味着该服务无法代表您对组织中的任何新账号执行操作。在服务完成从组织中的清理之前，服务仍可以在旧账号中执行操作。此接口只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function disableTrustedService($request)
    {
        return $this->disableTrustedServiceWithHttpInfo($request);
    }

    public function disableTrustedServiceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/trusted-services/disable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\DisableTrustedServiceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\DisableTrustedServiceRequest');
    }

    /**
     * 启用可信服务
     *
     * 启用服务（由service_principal指定的服务）与组织的集成。启用可信服务后，允许指定的可信服务对组织中的所有账号创建服务关联委托。这允许可信服务代表您在组织及其账号中执行操作。此接口只能由组织的管理账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function enableTrustedService($request)
    {
        return $this->enableTrustedServiceWithHttpInfo($request);
    }

    public function enableTrustedServiceWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/trusted-services/enable';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\EnableTrustedServiceResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\EnableTrustedServiceRequest');
    }

    /**
     * 列出组织的可信服务列表
     *
     * 返回启用与组织集成的可信服务列表。此操作只能由组织的管理账号或作为服务委托管理员的成员账号调用。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listTrustedServices($request)
    {
        return $this->listTrustedServicesWithHttpInfo($request);
    }

    public function listTrustedServicesWithHttpInfo($request)
    {
        $resourcePath = '/v1/organizations/trusted-services';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTrustedServicesResponse',
            $requestType='\HuaweiCloud\SDK\Organizations\V1\Model\ListTrustedServicesRequest');
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