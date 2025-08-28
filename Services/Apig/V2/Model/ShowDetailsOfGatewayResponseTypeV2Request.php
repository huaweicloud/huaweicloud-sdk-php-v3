<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailsOfGatewayResponseTypeV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailsOfGatewayResponseTypeV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * groupId  分组的编号
    * responseId  响应编号
    * responseType  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'groupId' => 'string',
            'responseId' => 'string',
            'responseType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * groupId  分组的编号
    * responseId  响应编号
    * responseType  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'groupId' => null,
        'responseId' => null,
        'responseType' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * groupId  分组的编号
    * responseId  响应编号
    * responseType  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'groupId' => 'group_id',
            'responseId' => 'response_id',
            'responseType' => 'response_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * groupId  分组的编号
    * responseId  响应编号
    * responseType  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'groupId' => 'setGroupId',
            'responseId' => 'setResponseId',
            'responseType' => 'setResponseType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * groupId  分组的编号
    * responseId  响应编号
    * responseType  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'groupId' => 'getGroupId',
            'responseId' => 'getResponseId',
            'responseType' => 'getResponseType'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const RESPONSE_TYPE_AUTH_FAILURE = 'AUTH_FAILURE';
    const RESPONSE_TYPE_AUTH_HEADER_MISSING = 'AUTH_HEADER_MISSING';
    const RESPONSE_TYPE_AUTHORIZER_FAILURE = 'AUTHORIZER_FAILURE';
    const RESPONSE_TYPE_AUTHORIZER_CONF_FAILURE = 'AUTHORIZER_CONF_FAILURE';
    const RESPONSE_TYPE_AUTHORIZER_IDENTITIES_FAILURE = 'AUTHORIZER_IDENTITIES_FAILURE';
    const RESPONSE_TYPE_BACKEND_UNAVAILABLE = 'BACKEND_UNAVAILABLE';
    const RESPONSE_TYPE_BACKEND_TIMEOUT = 'BACKEND_TIMEOUT';
    const RESPONSE_TYPE_THROTTLED = 'THROTTLED';
    const RESPONSE_TYPE_UNAUTHORIZED = 'UNAUTHORIZED';
    const RESPONSE_TYPE_ACCESS_DENIED = 'ACCESS_DENIED';
    const RESPONSE_TYPE_NOT_FOUND = 'NOT_FOUND';
    const RESPONSE_TYPE_REQUEST_PARAMETERS_FAILURE = 'REQUEST_PARAMETERS_FAILURE';
    const RESPONSE_TYPE_DEFAULT_4_XX = 'DEFAULT_4XX';
    const RESPONSE_TYPE_DEFAULT_5_XX = 'DEFAULT_5XX';
    const RESPONSE_TYPE_THIRD_AUTH_FAILURE = 'THIRD_AUTH_FAILURE';
    const RESPONSE_TYPE_THIRD_AUTH_IDENTITIES_FAILURE = 'THIRD_AUTH_IDENTITIES_FAILURE';
    const RESPONSE_TYPE_THIRD_AUTH_CONF_FAILURE = 'THIRD_AUTH_CONF_FAILURE';
    const RESPONSE_TYPE_OIDC_AUTH_TOKEN_VERIFY_FAIL = 'OIDC_AUTH_TOKEN_VERIFY_FAIL';
    const RESPONSE_TYPE_OIDC_AUTH_GET_DISCOVERY_ERROR = 'OIDC_AUTH_GET_DISCOVERY_ERROR';
    const RESPONSE_TYPE_OIDC_AUTH_CODE_FLOW_FAIL = 'OIDC_AUTH_CODE_FLOW_FAIL';
    const RESPONSE_TYPE_JWT_AUTH_FAILURE = 'JWT_AUTH_FAILURE';
    const RESPONSE_TYPE_ORCHESTRATION_PARAMETER_NOT_FOUND = 'ORCHESTRATION_PARAMETER_NOT_FOUND';
    const RESPONSE_TYPE_ORCHESTRATION_FAILURE = 'ORCHESTRATION_FAILURE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResponseTypeAllowableValues()
    {
        return [
            self::RESPONSE_TYPE_AUTH_FAILURE,
            self::RESPONSE_TYPE_AUTH_HEADER_MISSING,
            self::RESPONSE_TYPE_AUTHORIZER_FAILURE,
            self::RESPONSE_TYPE_AUTHORIZER_CONF_FAILURE,
            self::RESPONSE_TYPE_AUTHORIZER_IDENTITIES_FAILURE,
            self::RESPONSE_TYPE_BACKEND_UNAVAILABLE,
            self::RESPONSE_TYPE_BACKEND_TIMEOUT,
            self::RESPONSE_TYPE_THROTTLED,
            self::RESPONSE_TYPE_UNAUTHORIZED,
            self::RESPONSE_TYPE_ACCESS_DENIED,
            self::RESPONSE_TYPE_NOT_FOUND,
            self::RESPONSE_TYPE_REQUEST_PARAMETERS_FAILURE,
            self::RESPONSE_TYPE_DEFAULT_4_XX,
            self::RESPONSE_TYPE_DEFAULT_5_XX,
            self::RESPONSE_TYPE_THIRD_AUTH_FAILURE,
            self::RESPONSE_TYPE_THIRD_AUTH_IDENTITIES_FAILURE,
            self::RESPONSE_TYPE_THIRD_AUTH_CONF_FAILURE,
            self::RESPONSE_TYPE_OIDC_AUTH_TOKEN_VERIFY_FAIL,
            self::RESPONSE_TYPE_OIDC_AUTH_GET_DISCOVERY_ERROR,
            self::RESPONSE_TYPE_OIDC_AUTH_CODE_FLOW_FAIL,
            self::RESPONSE_TYPE_JWT_AUTH_FAILURE,
            self::RESPONSE_TYPE_ORCHESTRATION_PARAMETER_NOT_FOUND,
            self::RESPONSE_TYPE_ORCHESTRATION_FAILURE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['responseId'] = isset($data['responseId']) ? $data['responseId'] : null;
        $this->container['responseType'] = isset($data['responseType']) ? $data['responseType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['responseId'] === null) {
            $invalidProperties[] = "'responseId' can't be null";
        }
        if ($this->container['responseType'] === null) {
            $invalidProperties[] = "'responseType' can't be null";
        }
            $allowedValues = $this->getResponseTypeAllowableValues();
                if (!is_null($this->container['responseType']) && !in_array($this->container['responseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'responseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets instanceId
    *  实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets groupId
    *  分组的编号
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 分组的编号
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets responseId
    *  响应编号
    *
    * @return string
    */
    public function getResponseId()
    {
        return $this->container['responseId'];
    }

    /**
    * Sets responseId
    *
    * @param string $responseId 响应编号
    *
    * @return $this
    */
    public function setResponseId($responseId)
    {
        $this->container['responseId'] = $responseId;
        return $this;
    }

    /**
    * Gets responseType
    *  错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @return string
    */
    public function getResponseType()
    {
        return $this->container['responseType'];
    }

    /**
    * Sets responseType
    *
    * @param string $responseType 错误类型 - AUTH_FAILURE: 认证失败，IAM或APP认证校验失败 - AUTH_HEADER_MISSING: 认证身份来源信息缺失 - AUTHORIZER_FAILURE: 自定义认证方返回认证失败 - AUTHORIZER_CONF_FAILURE:自定义认证方异常，通信失败、返回异常响应等错误 - AUTHORIZER_IDENTITIES_FAILURE: 前端自定义认证的身份来源信息缺失或不合法错误 - BACKEND_UNAVAILABLE: 后端不可用，网络不可达错误 - BACKEND_TIMEOUT: 后端超时，与后端的网络交互超过预配置的时间错误 - THROTTLED: API调用次数超出所配置的流量策略阈值 - UNAUTHORIZED: 使用的凭据未被授权访问该API - ACCESS_DENIED: 拒绝访问，如触发配置的访问控制策略、或异常攻击检测拦截 - NOT_FOUND: 未匹配到API错误 - REQUEST_PARAMETERS_FAILURE: 请求参数校验失败、不支持的HTTP方法 - DEFAULT_4XX: 其它4XX类错误 - DEFAULT_5XX: 其它5XX类错误 - THIRD_AUTH_FAILURE: 第三方认证方返回认证失败 - THIRD_AUTH_IDENTITIES_FAILURE: 第三方认证的身份来源信息缺失或不合法错误 - THIRD_AUTH_CONF_FAILURE: 第三方认证方异常，通信失败、返回异常响应等错误 - OIDC_AUTH_TOKEN_VERIFY_FAIL: OIDC认证中token校验失败 - OIDC_AUTH_GET_DISCOVERY_ERROR: OIDC认证中从配置的discovery处获取信息失败 - OIDC_AUTH_CODE_FLOW_FAIL: OIDC认证中授权码流程处理失败 - JWT_AUTH_FAILURE: JWT认证中token校验失败 - ORCHESTRATION_PARAMETER_NOT_FOUND: 参数编排失败，请求中没有待编排的入参 - ORCHESTRATION_FAILURE: 参数编排失败，没有编排规则匹配成功
    *
    * @return $this
    */
    public function setResponseType($responseType)
    {
        $this->container['responseType'] = $responseType;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

