<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackendApiBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackendApiBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
    * reqProtocol  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    * remark  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  请求方式，后端类型为GRPC时请求方式固定为POST
    * version  web后端版本，字符长度不超过16
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * enableClientSsl  是否开启双向认证
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * enableSmChannel  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    * id  编号
    * status  后端状态   - 1： 有效
    * registerTime  注册时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizerId' => 'string',
            'urlDomain' => 'string',
            'reqProtocol' => 'string',
            'remark' => 'string',
            'reqMethod' => 'string',
            'version' => 'string',
            'reqUri' => 'string',
            'timeout' => 'int',
            'enableClientSsl' => 'bool',
            'retryCount' => 'string',
            'enableSmChannel' => 'bool',
            'id' => 'string',
            'status' => 'int',
            'registerTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
    * reqProtocol  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    * remark  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  请求方式，后端类型为GRPC时请求方式固定为POST
    * version  web后端版本，字符长度不超过16
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * enableClientSsl  是否开启双向认证
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * enableSmChannel  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    * id  编号
    * status  后端状态   - 1： 有效
    * registerTime  注册时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizerId' => null,
        'urlDomain' => null,
        'reqProtocol' => null,
        'remark' => null,
        'reqMethod' => null,
        'version' => null,
        'reqUri' => null,
        'timeout' => 'int32',
        'enableClientSsl' => null,
        'retryCount' => null,
        'enableSmChannel' => null,
        'id' => null,
        'status' => 'int32',
        'registerTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
    * reqProtocol  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    * remark  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  请求方式，后端类型为GRPC时请求方式固定为POST
    * version  web后端版本，字符长度不超过16
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * enableClientSsl  是否开启双向认证
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * enableSmChannel  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    * id  编号
    * status  后端状态   - 1： 有效
    * registerTime  注册时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizerId' => 'authorizer_id',
            'urlDomain' => 'url_domain',
            'reqProtocol' => 'req_protocol',
            'remark' => 'remark',
            'reqMethod' => 'req_method',
            'version' => 'version',
            'reqUri' => 'req_uri',
            'timeout' => 'timeout',
            'enableClientSsl' => 'enable_client_ssl',
            'retryCount' => 'retry_count',
            'enableSmChannel' => 'enable_sm_channel',
            'id' => 'id',
            'status' => 'status',
            'registerTime' => 'register_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
    * reqProtocol  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    * remark  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  请求方式，后端类型为GRPC时请求方式固定为POST
    * version  web后端版本，字符长度不超过16
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * enableClientSsl  是否开启双向认证
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * enableSmChannel  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    * id  编号
    * status  后端状态   - 1： 有效
    * registerTime  注册时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizerId' => 'setAuthorizerId',
            'urlDomain' => 'setUrlDomain',
            'reqProtocol' => 'setReqProtocol',
            'remark' => 'setRemark',
            'reqMethod' => 'setReqMethod',
            'version' => 'setVersion',
            'reqUri' => 'setReqUri',
            'timeout' => 'setTimeout',
            'enableClientSsl' => 'setEnableClientSsl',
            'retryCount' => 'setRetryCount',
            'enableSmChannel' => 'setEnableSmChannel',
            'id' => 'setId',
            'status' => 'setStatus',
            'registerTime' => 'setRegisterTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizerId  后端自定义认证对象的ID
    * urlDomain  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
    * reqProtocol  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    * remark  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  请求方式，后端类型为GRPC时请求方式固定为POST
    * version  web后端版本，字符长度不超过16
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。  > 需要服从URI规范。  后端类型为GRPC时请求地址固定为/
    * timeout  API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * enableClientSsl  是否开启双向认证
    * retryCount  请求后端服务的重试次数，默认为-1，范围[-1,10]。  当该值为-1时，幂等的接口会重试1次，非幂等的不会重试。POST，PATCH方法为非幂等；GET，HEAD，PUT，OPTIONS和DELETE等方法为幂等的。
    * enableSmChannel  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    * id  编号
    * status  后端状态   - 1： 有效
    * registerTime  注册时间
    * updateTime  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizerId' => 'getAuthorizerId',
            'urlDomain' => 'getUrlDomain',
            'reqProtocol' => 'getReqProtocol',
            'remark' => 'getRemark',
            'reqMethod' => 'getReqMethod',
            'version' => 'getVersion',
            'reqUri' => 'getReqUri',
            'timeout' => 'getTimeout',
            'enableClientSsl' => 'getEnableClientSsl',
            'retryCount' => 'getRetryCount',
            'enableSmChannel' => 'getEnableSmChannel',
            'id' => 'getId',
            'status' => 'getStatus',
            'registerTime' => 'getRegisterTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['authorizerId'] = isset($data['authorizerId']) ? $data['authorizerId'] : null;
        $this->container['urlDomain'] = isset($data['urlDomain']) ? $data['urlDomain'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['enableClientSsl'] = isset($data['enableClientSsl']) ? $data['enableClientSsl'] : null;
        $this->container['retryCount'] = isset($data['retryCount']) ? $data['retryCount'] : null;
        $this->container['enableSmChannel'] = isset($data['enableSmChannel']) ? $data['enableSmChannel'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['registerTime'] = isset($data['registerTime']) ? $data['registerTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
            if (($this->container['timeout'] < 1)) {
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
    *  后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
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
    * @param string|null $urlDomain 后端服务的地址。   由主机（IP或域名）和端口号组成，总长度不超过255。格式为主机:端口（如：apig.example.com:7443）。如果不写端口，则HTTPS默认端口号为443，HTTP默认端口号为80。   支持环境变量，使用环境变量时，每个变量名的长度为3 ~ 32位的字符串，字符串由英文字母、数字、下划线、中划线组成，且只能以英文开头
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
    *  请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
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
    * @param string $reqProtocol 请求协议，后端类型为GRPC时请求协议可选GRPC、GRPCS
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets remark
    *  描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 描述。字符长度不超过255 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets reqMethod
    *  请求方式，后端类型为GRPC时请求方式固定为POST
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
    * @param string $reqMethod 请求方式，后端类型为GRPC时请求方式固定为POST
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets version
    *  web后端版本，字符长度不超过16
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version web后端版本，字符长度不超过16
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout API网关请求后端服务的超时时间。最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets enableClientSsl
    *  是否开启双向认证
    *
    * @return bool|null
    */
    public function getEnableClientSsl()
    {
        return $this->container['enableClientSsl'];
    }

    /**
    * Sets enableClientSsl
    *
    * @param bool|null $enableClientSsl 是否开启双向认证
    *
    * @return $this
    */
    public function setEnableClientSsl($enableClientSsl)
    {
        $this->container['enableClientSsl'] = $enableClientSsl;
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
    * Gets enableSmChannel
    *  是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    *
    * @return bool|null
    */
    public function getEnableSmChannel()
    {
        return $this->container['enableSmChannel'];
    }

    /**
    * Sets enableSmChannel
    *
    * @param bool|null $enableSmChannel 是否启用SM商密通道。  仅实例支持SM系列商密算法的实例时支持开启。
    *
    * @return $this
    */
    public function setEnableSmChannel($enableSmChannel)
    {
        $this->container['enableSmChannel'] = $enableSmChannel;
        return $this;
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
    * Gets status
    *  后端状态   - 1： 有效
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 后端状态   - 1： 有效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets registerTime
    *  注册时间
    *
    * @return \DateTime|null
    */
    public function getRegisterTime()
    {
        return $this->container['registerTime'];
    }

    /**
    * Sets registerTime
    *
    * @param \DateTime|null $registerTime 注册时间
    *
    * @return $this
    */
    public function setRegisterTime($registerTime)
    {
        $this->container['registerTime'] = $registerTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

