<?php

namespace HuaweiCloud\SDK\_As\V1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class AsAsyncClient extends Client
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
        $client = new ClientBuilder(new AsAsyncClient());
        return $client;
    }

    /**
     * 伸缩实例生命周期回调
     *
     * 通过生命周期操作令牌或者通过实例ID和生命周期挂钩名称对伸缩实例指定的挂钩进行回调操作。如果在超时时间结束前已完成自定义操作，选择终止或继续完成生命周期操作。如果需要更多时间完成自定义操作，选择延长超时时间，实例保持等待状态的时间将增加1小时。只有实例的生命周期挂钩状态为 HANGING 时才可以进行回调操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function attachCallbackInstanceLifeCycleHookAsync($request)
    {
        return $this->attachCallbackInstanceLifeCycleHookAsyncWithHttpInfo($request);
    }
    
    public function attachCallbackInstanceLifeCycleHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_instance_hook/{scaling_group_id}/callback';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\AttachCallbackInstanceLifeCycleHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\AttachCallbackInstanceLifeCycleHookRequest',
            $asyncRequest = true);
    }

    /**
     * 批量添加实例
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。说明：- 单次最多批量操作实例个数为10。批量添加后实例数不能大于伸缩组的最大实例数，批量移出后实例数不能小于伸缩组的最小实例数。- 当伸缩组处于INSERVICE状态且没有伸缩活动时，才能添加实例。- 当伸缩组没有伸缩活动时，才能移出实例。- 向伸缩组中添加实例时，必须保证实例所在的可用区包含于伸缩组的可用区内。- 实例处于INSERVICE状态时才可以进行移出、设置或取消实例保护属性等操作。- 当伸缩组发生自动缩容活动时，设置了实例保护的实例不会被移出伸缩组。- 批量移出弹性伸缩组中的实例时，若该实例加入伸缩组时绑定的监听器和伸缩组本身的监听器相同，会解绑定实例和监听器。若该实例加入伸缩组时绑定的监听器和伸缩组本身的监听器不同，会保留实例和监听器的绑定关系。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchAddScalingInstancesAsync($request)
    {
        return $this->batchAddScalingInstancesAsyncWithHttpInfo($request);
    }
    
    public function batchAddScalingInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchAddScalingInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchAddScalingInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除弹性伸缩配置
     *
     * 批量删除指定弹性伸缩配置。被伸缩组使用的伸缩配置不能被删除。单次最多删除伸缩配置个数为50。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteScalingConfigsAsync($request)
    {
        return $this->batchDeleteScalingConfigsAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteScalingConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_configurations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchDeleteScalingConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchDeleteScalingConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 批量删除弹性伸缩策略。
     *
     * 批量启用、停用或者删除弹性伸缩策略。单次最多批量操作伸缩策略个数为20。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchDeleteScalingPoliciesAsync($request)
    {
        return $this->batchDeleteScalingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function batchDeleteScalingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policies/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchDeleteScalingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchDeleteScalingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量停用弹性伸缩策略。
     *
     * 批量启用、停用或者删除弹性伸缩策略。单次最多批量操作伸缩策略个数为20。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchPauseScalingPoliciesAsync($request)
    {
        return $this->batchPauseScalingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function batchPauseScalingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /autoscaling-api/v1/{project_id}/scaling_policies/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchPauseScalingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchPauseScalingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量设置实例保护
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchProtectScalingInstancesAsync($request)
    {
        return $this->batchProtectScalingInstancesAsyncWithHttpInfo($request);
    }
    
    public function batchProtectScalingInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchProtectScalingInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchProtectScalingInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量移除实例
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchRemoveScalingInstancesAsync($request)
    {
        return $this->batchRemoveScalingInstancesAsyncWithHttpInfo($request);
    }
    
    public function batchRemoveScalingInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchRemoveScalingInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchRemoveScalingInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量启用弹性伸缩策略。
     *
     * 批量启用、停用或者删除弹性伸缩策略。单次最多批量操作伸缩策略个数为20。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchResumeScalingPoliciesAsync($request)
    {
        return $this->batchResumeScalingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function batchResumeScalingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /autoscaling-api/v1/{project_id}/scaling_policies/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchResumeScalingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchResumeScalingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量将实例转为备用状态
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSetScalingInstancesStandbyAsync($request)
    {
        return $this->batchSetScalingInstancesStandbyAsyncWithHttpInfo($request);
    }
    
    public function batchSetScalingInstancesStandbyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/04 /autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchSetScalingInstancesStandbyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchSetScalingInstancesStandbyRequest',
            $asyncRequest = true);
    }

    /**
     * 批量取消实例保护
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUnprotectScalingInstancesAsync($request)
    {
        return $this->batchUnprotectScalingInstancesAsyncWithHttpInfo($request);
    }
    
    public function batchUnprotectScalingInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/03 /autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchUnprotectScalingInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchUnprotectScalingInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 批量将实例移出备用状态
     *
     * 批量移出伸缩组中的实例或批量添加伸缩组外的实例。批量对伸缩组中的实例设置或取消其实例保护属性。批量将伸缩组中的实例转入或移出备用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchUnsetScalingInstancesStantbyAsync($request)
    {
        return $this->batchUnsetScalingInstancesStantbyAsyncWithHttpInfo($request);
    }
    
    public function batchUnsetScalingInstancesStantbyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/05 /autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\BatchUnsetScalingInstancesStantbyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\BatchUnsetScalingInstancesStantbyRequest',
            $asyncRequest = true);
    }

    /**
     * 关闭暖池
     *
     * 关闭伸缩组的暖池
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function closeWarmPoolAsync($request)
    {
        return $this->closeWarmPoolAsyncWithHttpInfo($request);
    }
    
    public function closeWarmPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/{project_id}/scaling-groups/{scaling_group_id}/warm-pool';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CloseWarmPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CloseWarmPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 创建计划任务
     *
     * 创建计划任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createGroupScheduledTaskAsync($request)
    {
        return $this->createGroupScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function createGroupScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling-groups/{scaling_group_id}/scheduled-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateGroupScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateGroupScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 创建生命周期挂钩
     *
     * 创建生命周期挂钩，可为伸缩组添加一个或多个生命周期挂钩，最多添加5个。添加生命周期挂钩后，当伸缩组进行伸缩活动时，实例将被生命周期挂钩挂起并置于等待状态（正在加入伸缩组或正在移出伸缩组），实例将保持此状态直至超时时间结束或者用户手动回调。用户能够在实例保持等待状态的时间段内执行自定义操作，例如，用户可以在新启动的实例上安装或配置软件，也可以在实例终止前从实例中下载日志文件。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createLifyCycleHookAsync($request)
    {
        return $this->createLifyCycleHookAsyncWithHttpInfo($request);
    }
    
    public function createLifyCycleHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_lifecycle_hook/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateLifyCycleHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateLifyCycleHookRequest',
            $asyncRequest = true);
    }

    /**
     * 创建弹性伸缩配置
     *
     * 创建弹性伸缩配置。伸缩配置是伸缩组内实例（弹性云服务器云主机）的模板，定义了伸缩组内待添加的实例的规格数据。伸缩配置与伸缩组是解耦的，同一伸缩配置可以被多个伸缩组使用。默认最多可以创建100个伸缩配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingConfigAsync($request)
    {
        return $this->createScalingConfigAsyncWithHttpInfo($request);
    }
    
    public function createScalingConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 创建弹性伸缩组
     *
     * 伸缩组是具有相同应用场景的实例的集合，是启停伸缩策略和进行伸缩活动的基本单位。伸缩组内定义了最大实例数、期望实例数、最小实例数、虚拟私有云、子网、负载均衡等信息。默认最多可以创建10个伸缩组。如果伸缩组配置了负载均衡，在添加或移除实例时，会自动为实例绑定或解绑负载均衡监听器。如果伸缩组使用负载均衡健康检查方式，伸缩组中的实例需要启用负载均衡器的监听端口才能通过健康检查。端口启用可在安全组中进行配置，可参考添加安全组规则进行操作。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingGroupAsync($request)
    {
        return $this->createScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function createScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 配置伸缩组通知
     *
     * 给弹性伸缩组配置通知功能。每调用一次该接口，伸缩组即配置一个通知主题及其通知场景，每个伸缩组最多可以增加5个主题。通知主题由用户事先在SMN创建并进行订阅，当通知主题对应的通知场景出现时，伸缩组会向用户的订阅终端发送通知。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingNotificationAsync($request)
    {
        return $this->createScalingNotificationAsyncWithHttpInfo($request);
    }
    
    public function createScalingNotificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_notification/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingNotificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingNotificationRequest',
            $asyncRequest = true);
    }

    /**
     * 创建弹性伸缩策略
     *
     * 创建弹性伸缩策略。伸缩策略定义了伸缩组内实例的扩张和收缩操作。如果执行伸缩策略造成伸缩组期望实例数与伸缩组内实例数不符，弹性伸缩会自动调整实例资源，以匹配期望实例数。当前伸缩策略支持告警触发策略，周期触发策略，定时触发策略。在策略执行具体动作中，可设置实例变化的个数，或根据当前实例的百分比数进行伸缩。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingPolicyAsync($request)
    {
        return $this->createScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function createScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 创建标签
     *
     * 创建或删除指定资源的标签。每个伸缩组最多添加10个标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingTagInfoAsync($request)
    {
        return $this->createScalingTagInfoAsyncWithHttpInfo($request);
    }
    
    public function createScalingTagInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingTagInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingTagInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 删除计划任务
     *
     * 删除计划任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteGroupScheduledTaskAsync($request)
    {
        return $this->deleteGroupScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function deleteGroupScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling-groups/{scaling_group_id}/scheduled-tasks/{scheduled_task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['scheduledTaskId'] !== null) {
            $pathParams['scheduled_task_id'] = $localVarParams['scheduledTaskId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteGroupScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteGroupScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 删除生命周期挂钩
     *
     * 删除一个指定生命周期挂钩。伸缩组进行伸缩活动时，不允许删除该伸缩组内的生命周期挂钩。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteLifecycleHookAsync($request)
    {
        return $this->deleteLifecycleHookAsyncWithHttpInfo($request);
    }
    
    public function deleteLifecycleHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_lifecycle_hook/{scaling_group_id}/{lifecycle_hook_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['lifecycleHookName'] !== null) {
            $pathParams['lifecycle_hook_name'] = $localVarParams['lifecycleHookName'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteLifecycleHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteLifecycleHookRequest',
            $asyncRequest = true);
    }

    /**
     * 删除弹性伸缩配置
     *
     * 删除一个指定弹性伸缩配置。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingConfigAsync($request)
    {
        return $this->deleteScalingConfigAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_configuration/{scaling_configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingConfigurationId'] !== null) {
            $pathParams['scaling_configuration_id'] = $localVarParams['scalingConfigurationId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 删除弹性伸缩组
     *
     * 删除一个指定弹性伸缩组。force_delete属性表示如果伸缩组存在ECS实例或正在进行伸缩活动，是否强制删除伸缩组并移出和释放ECS实例。默认值为no，表示不强制删除伸缩组。如果force_delete的值为no，必须满足以下两个条件，才能删除伸缩组：条件一：伸缩组没有正在进行的伸缩活动。条件二：伸缩组当前的ECS实例数量（current_instance_number）为0。如果force_delete的值为yes，伸缩组会被置于DELETING状态，拒绝接收新的伸缩活动请求，然后等待已有的伸缩活动完成，最后将伸缩组内所有ECS实例移出伸缩组（用户手动添加的ECS实例会被移出伸缩组，弹性伸缩自动创建的ECS实例会被自动删除）并删除伸缩组。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingGroupAsync($request)
    {
        return $this->deleteScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['forceDelete'] !== null) {
            $queryParams['force_delete'] = $localVarParams['forceDelete'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 移出弹性伸缩组实例
     *
     * 从弹性伸缩组中移出一个指定实例。实例处于INSERVICE且移出后实例数不能小于伸缩组的最小实例数时才可以移出。当伸缩组没有伸缩活动时，才能移出实例。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingInstanceAsync($request)
    {
        return $this->deleteScalingInstanceAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingInstanceAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group_instance/{instance_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceDelete'] !== null) {
            $queryParams['instance_delete'] = $localVarParams['instanceDelete'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['instanceId'] !== null) {
            $pathParams['instance_id'] = $localVarParams['instanceId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingInstanceResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingInstanceRequest',
            $asyncRequest = true);
    }

    /**
     * 删除伸缩组通知
     *
     * 删除指定的弹性伸缩组中指定的通知。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingNotificationAsync($request)
    {
        return $this->deleteScalingNotificationAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingNotificationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_notification/{scaling_group_id}/{topic_urn}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['topicUrn'] !== null) {
            $pathParams['topic_urn'] = $localVarParams['topicUrn'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingNotificationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingNotificationRequest',
            $asyncRequest = true);
    }

    /**
     * 删除弹性伸缩策略
     *
     * 删除一个指定弹性伸缩策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingPolicyAsync($request)
    {
        return $this->deleteScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 删除标签
     *
     * 创建或删除指定资源的标签。每个伸缩组最多添加10个标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteScalingTagInfoAsync($request)
    {
        return $this->deleteScalingTagInfoAsyncWithHttpInfo($request);
    }
    
    public function deleteScalingTagInfoAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /autoscaling-api/v1/{project_id}/{resource_type}/{resource_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingTagInfoResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\DeleteScalingTagInfoRequest',
            $asyncRequest = true);
    }

    /**
     * 执行弹性伸缩策略。
     *
     * 立即执行或启用或停止一个指定弹性伸缩策略。当伸缩组、伸缩策略状态处于INSERVICE时，伸缩策略才能被正确执行，否则会执行失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function executeScalingPolicyAsync($request)
    {
        return $this->executeScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function executeScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ExecuteScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ExecuteScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询计划任务列表
     *
     * 查询计划任务列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listGroupScheduledTasksAsync($request)
    {
        return $this->listGroupScheduledTasksAsyncWithHttpInfo($request);
    }
    
    public function listGroupScheduledTasksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling-groups/{scaling_group_id}/scheduled-tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListGroupScheduledTasksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListGroupScheduledTasksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伸缩实例挂起信息
     *
     * 添加生命周期挂钩后，当伸缩组进行伸缩活动时，实例将被挂钩挂起并置于等待状态，根据输入条件过滤查询弹性伸缩组中伸缩实例的挂起信息。可根据实例ID进行条件过滤查询。若不加过滤条件默认查询指定伸缩组内所有实例挂起信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listHookInstancesAsync($request)
    {
        return $this->listHookInstancesAsyncWithHttpInfo($request);
    }
    
    public function listHookInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_instance_hook/{scaling_group_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['instanceId'] !== null) {
            $queryParams['instance_id'] = $localVarParams['instanceId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListHookInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListHookInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询生命周期挂钩列表
     *
     * 根据伸缩组ID查询生命周期挂钩列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listLifeCycleHooksAsync($request)
    {
        return $this->listLifeCycleHooksAsyncWithHttpInfo($request);
    }
    
    public function listLifeCycleHooksAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_lifecycle_hook/{scaling_group_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListLifeCycleHooksResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListLifeCycleHooksRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源实例
     *
     * 根据项目ID查询指定资源类型的资源实例。资源、资源tag默认按照创建时间倒序。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceInstancesAsync($request)
    {
        return $this->listResourceInstancesAsyncWithHttpInfo($request);
    }
    
    public function listResourceInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/{resource_type}/resource_instances/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListResourceInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListResourceInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伸缩活动日志
     *
     * 根据输入条件过滤查询伸缩活动日志。查询结果分页显示。可根据起始时间，截止时间，起始行号，记录数进行条件过滤查询。若不加过滤条件默认查询最多20条伸缩活动日志信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingActivityLogsAsync($request)
    {
        return $this->listScalingActivityLogsAsyncWithHttpInfo($request);
    }
    
    public function listScalingActivityLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_activity_log/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingActivityLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingActivityLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伸缩活动日志v2版本
     *
     * 根据输入条件过滤查询伸缩活动日志，支持查询实例伸缩、ELB迁移、实例备用等类型活动。查询结果分页显示。查询伸缩活动日志V2版本与V1版本区别在于，V2版本展示了更详细的实例伸缩日志，如ELB迁移日志，实例备用日志信息。可根据起始时间，截止时间，起始行号，记录数，伸缩活动类型等作为条件过滤查询。若不加过滤条件默认查询最多20条伸缩活动日志信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingActivityV2LogsAsync($request)
    {
        return $this->listScalingActivityV2LogsAsyncWithHttpInfo($request);
    }
    
    public function listScalingActivityV2LogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_activity_log/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['type'] !== null) {
            $queryParams['type'] = $localVarParams['type'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingActivityV2LogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingActivityV2LogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩配置列表
     *
     * 根据输入条件过滤查询弹性伸缩配置。查询结果分页显示。可以根据伸缩配置名称，镜像ID，起始行号，记录条数进行条件过滤查询。若不加过滤条件默认最多查询租户下20条伸缩配置信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingConfigsAsync($request)
    {
        return $this->listScalingConfigsAsyncWithHttpInfo($request);
    }
    
    public function listScalingConfigsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_configuration';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingConfigurationName'] !== null) {
            $queryParams['scaling_configuration_name'] = $localVarParams['scalingConfigurationName'];
        }
        if ($localVarParams['imageId'] !== null) {
            $queryParams['image_id'] = $localVarParams['imageId'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingConfigsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingConfigsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩组列表
     *
     * 根据输入条件过滤查询弹性伸缩组列表。查询结果分页显示。可根据伸缩组名称，伸缩配置ID，伸缩组状态，企业项目ID，起始行号，记录条数进行条件过滤查询。若不加过滤条件默认最多查询租户下20条伸缩组信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingGroupsAsync($request)
    {
        return $this->listScalingGroupsAsyncWithHttpInfo($request);
    }
    
    public function listScalingGroupsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingGroupName'] !== null) {
            $queryParams['scaling_group_name'] = $localVarParams['scalingGroupName'];
        }
        if ($localVarParams['scalingConfigurationId'] !== null) {
            $queryParams['scaling_configuration_id'] = $localVarParams['scalingConfigurationId'];
        }
        if ($localVarParams['scalingGroupStatus'] !== null) {
            $queryParams['scaling_group_status'] = $localVarParams['scalingGroupStatus'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingGroupsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingGroupsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩组中的实例列表
     *
     * 根据输入条件过滤查询弹性伸缩组中实例信息。查询结果分页显示。可根据实例在伸缩组中的生命周期状态，实例健康状态，实例保护状态，起始行号，记录条数进行条件过滤查询。若不加过滤条件默认查询组内最多20条实例信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingInstancesAsync($request)
    {
        return $this->listScalingInstancesAsyncWithHttpInfo($request);
    }
    
    public function listScalingInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group_instance/{scaling_group_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['lifeCycleState'] !== null) {
            $queryParams['life_cycle_state'] = $localVarParams['lifeCycleState'];
        }
        if ($localVarParams['healthStatus'] !== null) {
            $queryParams['health_status'] = $localVarParams['healthStatus'];
        }
        if ($localVarParams['protectFromScalingDown'] !== null) {
            $queryParams['protect_from_scaling_down'] = $localVarParams['protectFromScalingDown'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伸缩组通知列表
     *
     * 根据伸缩组ID查询指定弹性伸缩组的通知列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingNotificationsAsync($request)
    {
        return $this->listScalingNotificationsAsyncWithHttpInfo($request);
    }
    
    public function listScalingNotificationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_notification/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingNotificationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingNotificationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩策略列表
     *
     * 根据输入条件过滤查询弹性伸缩策略。查询结果分页显示。可根据伸缩策略名称，策略类型，伸缩策略ID，起始行号，记录数进行条件过滤查询。若不加过滤条件默认查询租户下指定伸缩组内最多20条伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingPoliciesAsync($request)
    {
        return $this->listScalingPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listScalingPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy/{scaling_group_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingPolicyName'] !== null) {
            $queryParams['scaling_policy_name'] = $localVarParams['scalingPolicyName'];
        }
        if ($localVarParams['scalingPolicyType'] !== null) {
            $queryParams['scaling_policy_type'] = $localVarParams['scalingPolicyType'];
        }
        if ($localVarParams['scalingPolicyId'] !== null) {
            $queryParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询策略执行日志
     *
     * 根据输入条件过滤查询策略执行的历史记录。查询结果分页显示。可根据日志ID，伸缩资源类型，伸缩资源ID，策略执行类型，查询额起始，查询截止时间，查询起始行号，查询记录数进行条件过滤查询。若不加过滤条件默认查询最多20条策略执行日志信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingPolicyExecuteLogsAsync($request)
    {
        return $this->listScalingPolicyExecuteLogsAsyncWithHttpInfo($request);
    }
    
    public function listScalingPolicyExecuteLogsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy_execute_log/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['logId'] !== null) {
            $queryParams['log_id'] = $localVarParams['logId'];
        }
        if ($localVarParams['scalingResourceType'] !== null) {
            $queryParams['scaling_resource_type'] = $localVarParams['scalingResourceType'];
        }
        if ($localVarParams['scalingResourceId'] !== null) {
            $queryParams['scaling_resource_id'] = $localVarParams['scalingResourceId'];
        }
        if ($localVarParams['executeType'] !== null) {
            $queryParams['execute_type'] = $localVarParams['executeType'];
        }
        if ($localVarParams['startTime'] !== null) {
            $queryParams['start_time'] = $localVarParams['startTime'];
        }
        if ($localVarParams['endTime'] !== null) {
            $queryParams['end_time'] = $localVarParams['endTime'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingPolicyExecuteLogsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingPolicyExecuteLogsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源标签
     *
     * 根据项目ID和资源ID查询指定资源类型的资源标签列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingTagInfosByResourceIdAsync($request)
    {
        return $this->listScalingTagInfosByResourceIdAsyncWithHttpInfo($request);
    }
    
    public function listScalingTagInfosByResourceIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/{resource_type}/{resource_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingTagInfosByResourceIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingTagInfosByResourceIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询标签
     *
     * 根据项目ID查询指定资源类型的标签列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingTagInfosByTenantIdAsync($request)
    {
        return $this->listScalingTagInfosByTenantIdAsyncWithHttpInfo($request);
    }
    
    public function listScalingTagInfosByTenantIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/{resource_type}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['resourceType'] !== null) {
            $pathParams['resource_type'] = $localVarParams['resourceType'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingTagInfosByTenantIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingTagInfosByTenantIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询暖池内实例信息
     *
     * 查询暖池内实例信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listWarmPoolInstancesAsync($request)
    {
        return $this->listWarmPoolInstancesAsyncWithHttpInfo($request);
    }
    
    public function listWarmPoolInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/{project_id}/scaling-groups/{scaling_group_id}/warm-pool-instances';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListWarmPoolInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListWarmPoolInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 停止弹性伸缩组
     *
     * 启用或停止一个指定弹性伸缩组。已停用状态的伸缩组，不会自动触发任何伸缩活动。当伸缩组正在进行伸缩活动，即使停用，正在进行的伸缩活动也不会立即停止。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pauseScalingGroupAsync($request)
    {
        return $this->pauseScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function pauseScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /autoscaling-api/v1/{project_id}/scaling_group/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\PauseScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\PauseScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 停止弹性伸缩策略。
     *
     * 立即执行或启用或停止一个指定弹性伸缩策略。当伸缩组、伸缩策略状态处于INSERVICE时，伸缩策略才能被正确执行，否则会执行失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function pauseScalingPolicyAsync($request)
    {
        return $this->pauseScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function pauseScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/02 /autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\PauseScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\PauseScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 开启暖池
     *
     * 开启并修改暖池参数
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function putWarmPoolAsync($request)
    {
        return $this->putWarmPoolAsyncWithHttpInfo($request);
    }
    
    public function putWarmPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/{project_id}/scaling-groups/{scaling_group_id}/warm-pool';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\PutWarmPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\PutWarmPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 启用弹性伸缩组
     *
     * 启用或停止一个指定弹性伸缩组。已停用状态的伸缩组，不会自动触发任何伸缩活动。当伸缩组正在进行伸缩活动，即使停用，正在进行的伸缩活动也不会立即停止。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resumeScalingGroupAsync($request)
    {
        return $this->resumeScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function resumeScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group/{scaling_group_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ResumeScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ResumeScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 启用弹性伸缩策略。
     *
     * 立即执行或启用或停止一个指定弹性伸缩策略。当伸缩组、伸缩策略状态处于INSERVICE时，伸缩策略才能被正确执行，否则会执行失败。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function resumeScalingPolicyAsync($request)
    {
        return $this->resumeScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function resumeScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/01 /autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ResumeScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ResumeScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询生命周期挂钩详情
     *
     * 根据伸缩组ID及生命周期挂钩名称查询指定的生命周期挂钩详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showLifeCycleHookAsync($request)
    {
        return $this->showLifeCycleHookAsyncWithHttpInfo($request);
    }
    
    public function showLifeCycleHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_lifecycle_hook/{scaling_group_id}/{lifecycle_hook_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['lifecycleHookName'] !== null) {
            $pathParams['lifecycle_hook_name'] = $localVarParams['lifecycleHookName'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowLifeCycleHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowLifeCycleHookRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩策略和伸缩实例配额
     *
     * 根据伸缩组ID查询指定弹性伸缩组下的伸缩策略和伸缩实例的配额总数及已使用配额数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showPolicyAndInstanceQuotaAsync($request)
    {
        return $this->showPolicyAndInstanceQuotaAsyncWithHttpInfo($request);
    }
    
    public function showPolicyAndInstanceQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/quotas/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowPolicyAndInstanceQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowPolicyAndInstanceQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询配额
     *
     * 查询指定租户下的弹性伸缩组、伸缩配置、伸缩带宽策略、伸缩策略和伸缩实例的配额总数及已使用配额数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showResourceQuotaAsync($request)
    {
        return $this->showResourceQuotaAsyncWithHttpInfo($request);
    }
    
    public function showResourceQuotaAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/quotas';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowResourceQuotaResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowResourceQuotaRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩配置详情
     *
     * 根据伸缩配置ID查询一个弹性伸缩配置的详细信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showScalingConfigAsync($request)
    {
        return $this->showScalingConfigAsyncWithHttpInfo($request);
    }
    
    public function showScalingConfigAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_configuration/{scaling_configuration_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingConfigurationId'] !== null) {
            $pathParams['scaling_configuration_id'] = $localVarParams['scalingConfigurationId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingConfigResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingConfigRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩组详情
     *
     * 查询一个指定弹性伸缩组详情。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showScalingGroupAsync($request)
    {
        return $this->showScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function showScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩策略详情
     *
     * 查询指定弹性伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showScalingPolicyAsync($request)
    {
        return $this->showScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function showScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询暖池信息
     *
     * 查询暖池信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showWarmPoolAsync($request)
    {
        return $this->showWarmPoolAsyncWithHttpInfo($request);
    }
    
    public function showWarmPoolAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/{project_id}/scaling-groups/{scaling_group_id}/warm-pool';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowWarmPoolResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowWarmPoolRequest',
            $asyncRequest = true);
    }

    /**
     * 更新计划任务
     *
     * 更新计划任务
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateGroupScheduledTaskAsync($request)
    {
        return $this->updateGroupScheduledTaskAsyncWithHttpInfo($request);
    }
    
    public function updateGroupScheduledTaskAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling-groups/{scaling_group_id}/scheduled-tasks/{scheduled_task_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['scheduledTaskId'] !== null) {
            $pathParams['scheduled_task_id'] = $localVarParams['scheduledTaskId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\UpdateGroupScheduledTaskResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\UpdateGroupScheduledTaskRequest',
            $asyncRequest = true);
    }

    /**
     * 修改生命周期挂钩
     *
     * 修改一个指定生命周期挂钩中的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateLifeCycleHookAsync($request)
    {
        return $this->updateLifeCycleHookAsyncWithHttpInfo($request);
    }
    
    public function updateLifeCycleHookAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_lifecycle_hook/{scaling_group_id}/{lifecycle_hook_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['lifecycleHookName'] !== null) {
            $pathParams['lifecycle_hook_name'] = $localVarParams['lifecycleHookName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\UpdateLifeCycleHookResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\UpdateLifeCycleHookRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性伸缩组
     *
     * 修改一个指定弹性伸缩组中的信息。更换伸缩组的伸缩配置，伸缩组中已经存在的使用之前伸缩配置创建的云服务器云主机不受影响。伸缩组为没有正在进行的伸缩活动时，可以修改伸缩组的子网、可用区和负载均衡配置。当伸缩组的期望实例数改变时，会触发伸缩活动加入或移出实例。期望实例数必须大于或等于最小实例数，必须小于或等于最大实例数。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateScalingGroupAsync($request)
    {
        return $this->updateScalingGroupAsyncWithHttpInfo($request);
    }
    
    public function updateScalingGroupAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_group/{scaling_group_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingGroupId'] !== null) {
            $pathParams['scaling_group_id'] = $localVarParams['scalingGroupId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingGroupResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingGroupRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性伸缩策略
     *
     * 修改指定弹性伸缩策略。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateScalingPolicyAsync($request)
    {
        return $this->updateScalingPolicyAsyncWithHttpInfo($request);
    }
    
    public function updateScalingPolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v1/{project_id}/scaling_policy/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingPolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingPolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩API所有版本信息
     *
     * 查询弹性伸缩API所有版本信息
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listApiVersionsAsync($request)
    {
        return $this->listApiVersionsAsyncWithHttpInfo($request);
    }
    
    public function listApiVersionsAsyncWithHttpInfo($request){
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListApiVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListApiVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩API指定版本信息
     *
     * 根据租户id和资源id查询指定资源类型的标签列表
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showApiVersionAsync($request)
    {
        return $this->showApiVersionAsyncWithHttpInfo($request);
    }
    
    public function showApiVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/{api_version}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['apiVersion'] !== null) {
            $pathParams['api_version'] = $localVarParams['apiVersion'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowApiVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowApiVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 创建弹性伸缩策略（V2版本）
     *
     * 可针对不同类型资源如伸缩组或带宽，创建弹性伸缩策略。创建弹性伸缩策略V2版本与V1版本的区别在于，V2版本支持创建对带宽资源进行调整的策略，通过伸缩资源类型区分伸缩资源。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createScalingV2PolicyAsync($request)
    {
        return $this->createScalingV2PolicyAsyncWithHttpInfo($request);
    }
    
    public function createScalingV2PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingV2PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\CreateScalingV2PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩策略全量列表（V2版本）
     *
     * 根据输入条件过滤查询弹性伸缩策略，支持查询当前租户下全量伸缩策略。查询结果分页显示。可根据伸缩资源ID，伸缩资源类型，伸缩策略名称，伸缩策略ID，告警ID，企业项目ID，起始行号，记录数，排序方式等条件进行过滤查询。若不加过滤添加默认查询该租户下最多20条伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listAllScalingV2PoliciesAsync($request)
    {
        return $this->listAllScalingV2PoliciesAsyncWithHttpInfo($request);
    }
    
    public function listAllScalingV2PoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_policy';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingResourceId'] !== null) {
            $queryParams['scaling_resource_id'] = $localVarParams['scalingResourceId'];
        }
        if ($localVarParams['scalingResourceType'] !== null) {
            $queryParams['scaling_resource_type'] = $localVarParams['scalingResourceType'];
        }
        if ($localVarParams['scalingPolicyName'] !== null) {
            $queryParams['scaling_policy_name'] = $localVarParams['scalingPolicyName'];
        }
        if ($localVarParams['scalingPolicyType'] !== null) {
            $queryParams['scaling_policy_type'] = $localVarParams['scalingPolicyType'];
        }
        if ($localVarParams['scalingPolicyId'] !== null) {
            $queryParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sortBy'] !== null) {
            $queryParams['sort_by'] = $localVarParams['sortBy'];
        }
        if ($localVarParams['order'] !== null) {
            $queryParams['order'] = $localVarParams['order'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['alarmId'] !== null) {
            $queryParams['alarm_id'] = $localVarParams['alarmId'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListAllScalingV2PoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListAllScalingV2PoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询弹性伸缩策略列表（V2版本）
     *
     * 根据输入条件过滤查询弹性伸缩策略。查询结果分页显示。查询弹性伸缩策略V2版本与V1版本的区别在于，V2版本响应含伸缩资源类型。可根据伸缩策略名称，策略类型，伸缩策略ID，起始行号，记录数进行条件过滤查询。若不加过滤条件默认查询该租户下指定资源下最多20条伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listScalingV2PoliciesAsync($request)
    {
        return $this->listScalingV2PoliciesAsyncWithHttpInfo($request);
    }
    
    public function listScalingV2PoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_policy/{scaling_resource_id}/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['scalingPolicyName'] !== null) {
            $queryParams['scaling_policy_name'] = $localVarParams['scalingPolicyName'];
        }
        if ($localVarParams['scalingPolicyType'] !== null) {
            $queryParams['scaling_policy_type'] = $localVarParams['scalingPolicyType'];
        }
        if ($localVarParams['scalingPolicyId'] !== null) {
            $queryParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }
        if ($localVarParams['startNumber'] !== null) {
            $queryParams['start_number'] = $localVarParams['startNumber'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['projectId'] !== null) {
            $pathParams['project_id'] = $localVarParams['projectId'];
        }
        if ($localVarParams['scalingResourceId'] !== null) {
            $pathParams['scaling_resource_id'] = $localVarParams['scalingResourceId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingV2PoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ListScalingV2PoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询指定弹性伸缩策略详情（V2版本）
     *
     * 查询指定弹性伸缩策略信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showScalingV2PolicyAsync($request)
    {
        return $this->showScalingV2PolicyAsyncWithHttpInfo($request);
    }
    
    public function showScalingV2PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_policy/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingV2PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\ShowScalingV2PolicyRequest',
            $asyncRequest = true);
    }

    /**
     * 修改弹性伸缩策略（V2版本）
     *
     * 修改指定弹性伸缩策略。修改弹性伸缩策略V2版本与V1版本的区别在于，V2版本支持修改伸缩资源类型。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateScalingV2PolicyAsync($request)
    {
        return $this->updateScalingV2PolicyAsyncWithHttpInfo($request);
    }
    
    public function updateScalingV2PolicyAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/autoscaling-api/v2/{project_id}/scaling_policy/{scaling_policy_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
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
        if ($localVarParams['scalingPolicyId'] !== null) {
            $pathParams['scaling_policy_id'] = $localVarParams['scalingPolicyId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json;charset=UTF-8', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json;charset=UTF-8', 'application/json'],
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
            $responseType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingV2PolicyResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\_As\V1\Model\UpdateScalingV2PolicyRequest',
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