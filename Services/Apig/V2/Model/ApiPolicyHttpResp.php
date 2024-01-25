<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiPolicyHttpResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiPolicyHttpResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    * reqProtocol  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    * reqMethod  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * vpcChannelInfo  vpcChannelInfo
    * vpcChannelStatus  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'effectMode' => 'string',
            'name' => 'string',
            'backendParams' => '\HuaweiCloud\SDK\Apig\V2\Model\BackendParam[]',
            'conditions' => '\HuaweiCloud\SDK\Apig\V2\Model\CoditionResp[]',
            'authorizerId' => 'string',
            'urlDomain' => 'string',
            'reqProtocol' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'timeout' => 'int',
            'retryCount' => 'string',
            'vpcChannelInfo' => '\HuaweiCloud\SDK\Apig\V2\Model\VpcInfo',
            'vpcChannelStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    * reqProtocol  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    * reqMethod  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * vpcChannelInfo  vpcChannelInfo
    * vpcChannelStatus  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'effectMode' => null,
        'name' => null,
        'backendParams' => null,
        'conditions' => null,
        'authorizerId' => null,
        'urlDomain' => null,
        'reqProtocol' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'timeout' => 'int32',
        'retryCount' => null,
        'vpcChannelInfo' => null,
        'vpcChannelStatus' => 'int32'
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
    * id  编号
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    * reqProtocol  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    * reqMethod  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * vpcChannelInfo  vpcChannelInfo
    * vpcChannelStatus  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'effectMode' => 'effect_mode',
            'name' => 'name',
            'backendParams' => 'backend_params',
            'conditions' => 'conditions',
            'authorizerId' => 'authorizer_id',
            'urlDomain' => 'url_domain',
            'reqProtocol' => 'req_protocol',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'timeout' => 'timeout',
            'retryCount' => 'retry_count',
            'vpcChannelInfo' => 'vpc_channel_info',
            'vpcChannelStatus' => 'vpc_channel_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    * reqProtocol  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    * reqMethod  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * vpcChannelInfo  vpcChannelInfo
    * vpcChannelStatus  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'effectMode' => 'setEffectMode',
            'name' => 'setName',
            'backendParams' => 'setBackendParams',
            'conditions' => 'setConditions',
            'authorizerId' => 'setAuthorizerId',
            'urlDomain' => 'setUrlDomain',
            'reqProtocol' => 'setReqProtocol',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'timeout' => 'setTimeout',
            'retryCount' => 'setRetryCount',
            'vpcChannelInfo' => 'setVpcChannelInfo',
            'vpcChannelStatus' => 'setVpcChannelStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号
    * effectMode  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    * name  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    * backendParams  后端参数列表
    * conditions  策略条件列表
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    * reqProtocol  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    * reqMethod  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * vpcChannelInfo  vpcChannelInfo
    * vpcChannelStatus  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'effectMode' => 'getEffectMode',
            'name' => 'getName',
            'backendParams' => 'getBackendParams',
            'conditions' => 'getConditions',
            'authorizerId' => 'getAuthorizerId',
            'urlDomain' => 'getUrlDomain',
            'reqProtocol' => 'getReqProtocol',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'timeout' => 'getTimeout',
            'retryCount' => 'getRetryCount',
            'vpcChannelInfo' => 'getVpcChannelInfo',
            'vpcChannelStatus' => 'getVpcChannelStatus'
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
    const EFFECT_MODE_ALL = 'ALL';
    const EFFECT_MODE_ANY = 'ANY';
    const REQ_PROTOCOL_HTTP = 'HTTP';
    const REQ_PROTOCOL_HTTPS = 'HTTPS';
    const REQ_PROTOCOL_GRPC = 'GRPC';
    const REQ_PROTOCOL_GRPCS = 'GRPCS';
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEffectModeAllowableValues()
    {
        return [
            self::EFFECT_MODE_ALL,
            self::EFFECT_MODE_ANY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqProtocolAllowableValues()
    {
        return [
            self::REQ_PROTOCOL_HTTP,
            self::REQ_PROTOCOL_HTTPS,
            self::REQ_PROTOCOL_GRPC,
            self::REQ_PROTOCOL_GRPCS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['effectMode'] = isset($data['effectMode']) ? $data['effectMode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['backendParams'] = isset($data['backendParams']) ? $data['backendParams'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
        $this->container['urlDomain'] = isset($data['urlDomain']) ? $data['urlDomain'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['retryCount'] = isset($data['retryCount']) ? $data['retryCount'] : null;
        $this->container['vpcChannelInfo'] = isset($data['vpcChannelInfo']) ? $data['vpcChannelInfo'] : null;
        $this->container['vpcChannelStatus'] = isset($data['vpcChannelStatus']) ? $data['vpcChannelStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['effectMode'] === null) {
            $invalidProperties[] = "'effectMode' can't be null";
        }
            $allowedValues = $this->getEffectModeAllowableValues();
                if (!is_null($this->container['effectMode']) && !in_array($this->container['effectMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'effectMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_]|[\\u4e00-\\u9fa5]){2,63}$/.";
            }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['reqProtocol'] === null) {
            $invalidProperties[] = "'reqProtocol' can't be null";
        }
            $allowedValues = $this->getReqProtocolAllowableValues();
                if (!is_null($this->container['reqProtocol']) && !in_array($this->container['reqProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqMethod'] === null) {
            $invalidProperties[] = "'reqMethod' can't be null";
        }
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqUri'] === null) {
            $invalidProperties[] = "'reqUri' can't be null";
        }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
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
    * Gets id
    *  编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets effectMode
    *  关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    *
    * @return string
    */
    public function getEffectMode()
    {
        return $this->container['effectMode'];
    }

    /**
    * Sets effectMode
    *
    * @param string $effectMode 关联的策略组合模式： - ALL：满足全部条件 - ANY：满足任一条件
    *
    * @return $this
    */
    public function setEffectMode($effectMode)
    {
        $this->container['effectMode'] = $effectMode;
        return $this;
    }

    /**
    * Gets name
    *  策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 策略后端名称。字符串由中文、英文字母、数字、下划线组成，且只能以中文或英文开头。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets backendParams
    *  后端参数列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\BackendParam[]|null
    */
    public function getBackendParams()
    {
        return $this->container['backendParams'];
    }

    /**
    * Sets backendParams
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\BackendParam[]|null $backendParams 后端参数列表
    *
    * @return $this
    */
    public function setBackendParams($backendParams)
    {
        $this->container['backendParams'] = $backendParams;
        return $this;
    }

    /**
    * Gets conditions
    *  策略条件列表
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\CoditionResp[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\CoditionResp[] $conditions 策略条件列表
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets authorizerId
    *  后端自定义认证对象的ID
    *
    * @return string|null
    */
    public function getAuthorizerId()
    {
        return $this->container['authorizerId'];
    }

    /**
    * Sets authorizerId
    *
    * @param string|null $authorizerId 后端自定义认证对象的ID
    *
    * @return $this
    */
    public function setAuthorizerId($authorizerId)
    {
        $this->container['authorizerId'] = $authorizerId;
        return $this;
    }

    /**
    * Gets urlDomain
    *  策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    *
    * @return string|null
    */
    public function getUrlDomain()
    {
        return $this->container['urlDomain'];
    }

    /**
    * Sets urlDomain
    *
    * @param string|null $urlDomain 策略后端的Endpoint。  由域名（或IP地址）和端口号组成，总长度不超过255。格式为域名:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443， HTTP默认端口号为80。  支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、“_”、“-”组成，且只能以英文开头。
    *
    * @return $this
    */
    public function setUrlDomain($urlDomain)
    {
        $this->container['urlDomain'] = $urlDomain;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    *
    * @return string
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string $reqProtocol 请求协议：HTTP、HTTPS、GRPC、GRPCS，后端类型为GRPC时可选GRPC、GRPCS
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    *
    * @return string
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string $reqMethod 请求方式：GET、POST、PUT、DELETE、HEAD、PATCH、OPTIONS、ANY，后端类型为GRPC时固定为POST
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqUri
    *  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    *
    * @return string
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string $reqUri 请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets timeout
    *  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets retryCount
    *  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    *
    * @return string|null
    */
    public function getRetryCount()
    {
        return $this->container['retryCount'];
    }

    /**
    * Sets retryCount
    *
    * @param string|null $retryCount 请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    *
    * @return $this
    */
    public function setRetryCount($retryCount)
    {
        $this->container['retryCount'] = $retryCount;
        return $this;
    }

    /**
    * Gets vpcChannelInfo
    *  vpcChannelInfo
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\VpcInfo|null
    */
    public function getVpcChannelInfo()
    {
        return $this->container['vpcChannelInfo'];
    }

    /**
    * Sets vpcChannelInfo
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\VpcInfo|null $vpcChannelInfo vpcChannelInfo
    *
    * @return $this
    */
    public function setVpcChannelInfo($vpcChannelInfo)
    {
        $this->container['vpcChannelInfo'] = $vpcChannelInfo;
        return $this;
    }

    /**
    * Gets vpcChannelStatus
    *  是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @return int|null
    */
    public function getVpcChannelStatus()
    {
        return $this->container['vpcChannelStatus'];
    }

    /**
    * Sets vpcChannelStatus
    *
    * @param int|null $vpcChannelStatus 是否使用VPC通道： - 1： 使用VPC通道 - 2：不使用VPC通道
    *
    * @return $this
    */
    public function setVpcChannelStatus($vpcChannelStatus)
    {
        $this->container['vpcChannelStatus'] = $vpcChannelStatus;
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

