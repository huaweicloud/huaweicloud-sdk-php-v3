<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiPolicyFunctionBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiPolicyFunctionBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数URN
    * invocationType  调用类型 - async： 异步 - sync：同步
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * version  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * aliasUrn  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * timeout  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * reqProtocol  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'invocationType' => 'string',
            'networkType' => 'string',
            'version' => 'string',
            'aliasUrn' => 'string',
            'timeout' => 'int',
            'reqProtocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数URN
    * invocationType  调用类型 - async： 异步 - sync：同步
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * version  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * aliasUrn  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * timeout  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * reqProtocol  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'invocationType' => null,
        'networkType' => null,
        'version' => null,
        'aliasUrn' => null,
        'timeout' => 'int32',
        'reqProtocol' => null
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
    * functionUrn  函数URN
    * invocationType  调用类型 - async： 异步 - sync：同步
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * version  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * aliasUrn  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * timeout  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * reqProtocol  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'invocationType' => 'invocation_type',
            'networkType' => 'network_type',
            'version' => 'version',
            'aliasUrn' => 'alias_urn',
            'timeout' => 'timeout',
            'reqProtocol' => 'req_protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数URN
    * invocationType  调用类型 - async： 异步 - sync：同步
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * version  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * aliasUrn  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * timeout  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * reqProtocol  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'invocationType' => 'setInvocationType',
            'networkType' => 'setNetworkType',
            'version' => 'setVersion',
            'aliasUrn' => 'setAliasUrn',
            'timeout' => 'setTimeout',
            'reqProtocol' => 'setReqProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数URN
    * invocationType  调用类型 - async： 异步 - sync：同步
    * networkType  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    * version  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * aliasUrn  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    * timeout  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    * reqProtocol  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'invocationType' => 'getInvocationType',
            'networkType' => 'getNetworkType',
            'version' => 'getVersion',
            'aliasUrn' => 'getAliasUrn',
            'timeout' => 'getTimeout',
            'reqProtocol' => 'getReqProtocol'
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
    const INVOCATION_TYPE_ASYNC = 'async';
    const INVOCATION_TYPE_SYNC = 'sync';
    const NETWORK_TYPE_V1 = 'V1';
    const NETWORK_TYPE_V2 = 'V2';
    const REQ_PROTOCOL_HTTPS = 'HTTPS';
    const REQ_PROTOCOL_GRPCS = 'GRPCS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTypeAllowableValues()
    {
        return [
            self::INVOCATION_TYPE_ASYNC,
            self::INVOCATION_TYPE_SYNC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE_V1,
            self::NETWORK_TYPE_V2,
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
            self::REQ_PROTOCOL_HTTPS,
            self::REQ_PROTOCOL_GRPCS,
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['invocationType'] = isset($data['invocationType']) ? $data['invocationType'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['aliasUrn'] = isset($data['aliasUrn']) ? $data['aliasUrn'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
        }
        if ($this->container['invocationType'] === null) {
            $invalidProperties[] = "'invocationType' can't be null";
        }
            $allowedValues = $this->getInvocationTypeAllowableValues();
                if (!is_null($this->container['invocationType']) && !in_array($this->container['invocationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['networkType'] === null) {
            $invalidProperties[] = "'networkType' can't be null";
        }
            $allowedValues = $this->getNetworkTypeAllowableValues();
                if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getReqProtocolAllowableValues();
                if (!is_null($this->container['reqProtocol']) && !in_array($this->container['reqProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqProtocol', must be one of '%s'",
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
    * Gets functionUrn
    *  函数URN
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 函数URN
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets invocationType
    *  调用类型 - async： 异步 - sync：同步
    *
    * @return string
    */
    public function getInvocationType()
    {
        return $this->container['invocationType'];
    }

    /**
    * Sets invocationType
    *
    * @param string $invocationType 调用类型 - async： 异步 - sync：同步
    *
    * @return $this
    */
    public function setInvocationType($invocationType)
    {
        $this->container['invocationType'] = $invocationType;
        return $this;
    }

    /**
    * Gets networkType
    *  对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    *
    * @return string
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string $networkType 对接函数的网络架构类型 - V1：非VPC网络架构 - V2：VPC网络架构
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets version
    *  函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
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
    * @param string|null $version 函数版本   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets aliasUrn
    *  函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return string|null
    */
    public function getAliasUrn()
    {
        return $this->container['aliasUrn'];
    }

    /**
    * Sets aliasUrn
    *
    * @param string|null $aliasUrn 函数别名URN   当函数别名URN和函数版本同时传入时，函数版本将被忽略，只会使用函数别名URN
    *
    * @return $this
    */
    public function setAliasUrn($aliasUrn)
    {
        $this->container['aliasUrn'] = $aliasUrn;
        return $this;
    }

    /**
    * Gets timeout
    *  API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
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
    * @param int|null $timeout API网关请求后端服务的超时时间。函数网络架构为V1时最大超时时间为60000，V2最大超时时间可通过实例特性backend_timeout配置修改，可修改的上限为600000。  单位：毫秒。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @return string|null
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string|null $reqProtocol 函数后端的请求协议：HTTPS、GRPCS，默认值为HTTPS，前端配置中的请求协议为GRPCS时可选GRPCS。
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
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

