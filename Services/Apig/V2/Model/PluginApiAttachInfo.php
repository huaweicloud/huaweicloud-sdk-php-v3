<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginApiAttachInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginApiAttachInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginAttachId  插件绑定编码。
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    * pluginScope  插件可见范围。global：全局可见。
    * envId  绑定API的环境编码。
    * envName  api授权绑定的环境名称
    * apiId  绑定的API编码。
    * apiName  API的名称
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginAttachId' => 'string',
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginType' => 'string',
            'pluginScope' => 'string',
            'envId' => 'string',
            'envName' => 'string',
            'apiId' => 'string',
            'apiName' => 'string',
            'attachedTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginAttachId  插件绑定编码。
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    * pluginScope  插件可见范围。global：全局可见。
    * envId  绑定API的环境编码。
    * envName  api授权绑定的环境名称
    * apiId  绑定的API编码。
    * apiName  API的名称
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginAttachId' => null,
        'pluginId' => null,
        'pluginName' => null,
        'pluginType' => null,
        'pluginScope' => null,
        'envId' => null,
        'envName' => null,
        'apiId' => null,
        'apiName' => null,
        'attachedTime' => 'date-time'
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
    * pluginAttachId  插件绑定编码。
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    * pluginScope  插件可见范围。global：全局可见。
    * envId  绑定API的环境编码。
    * envName  api授权绑定的环境名称
    * apiId  绑定的API编码。
    * apiName  API的名称
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginAttachId' => 'plugin_attach_id',
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginType' => 'plugin_type',
            'pluginScope' => 'plugin_scope',
            'envId' => 'env_id',
            'envName' => 'env_name',
            'apiId' => 'api_id',
            'apiName' => 'api_name',
            'attachedTime' => 'attached_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginAttachId  插件绑定编码。
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    * pluginScope  插件可见范围。global：全局可见。
    * envId  绑定API的环境编码。
    * envName  api授权绑定的环境名称
    * apiId  绑定的API编码。
    * apiName  API的名称
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginAttachId' => 'setPluginAttachId',
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginType' => 'setPluginType',
            'pluginScope' => 'setPluginScope',
            'envId' => 'setEnvId',
            'envName' => 'setEnvName',
            'apiId' => 'setApiId',
            'apiName' => 'setApiName',
            'attachedTime' => 'setAttachedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginAttachId  插件绑定编码。
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    * pluginScope  插件可见范围。global：全局可见。
    * envId  绑定API的环境编码。
    * envName  api授权绑定的环境名称
    * apiId  绑定的API编码。
    * apiName  API的名称
    * attachedTime  绑定时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginAttachId' => 'getPluginAttachId',
            'pluginId' => 'getPluginId',
            'pluginName' => 'getPluginName',
            'pluginType' => 'getPluginType',
            'pluginScope' => 'getPluginScope',
            'envId' => 'getEnvId',
            'envName' => 'getEnvName',
            'apiId' => 'getApiId',
            'apiName' => 'getApiName',
            'attachedTime' => 'getAttachedTime'
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
    const PLUGIN_TYPE_CORS = 'cors';
    const PLUGIN_TYPE_SET_RESP_HEADERS = 'set_resp_headers';
    const PLUGIN_TYPE_KAFKA_LOG = 'kafka_log';
    const PLUGIN_TYPE_BREAKER = 'breaker';
    const PLUGIN_TYPE_RATE_LIMIT = 'rate_limit';
    const PLUGIN_TYPE_THIRD_AUTH = 'third_auth';
    const PLUGIN_TYPE_PROXY_CACHE = 'proxy_cache';
    const PLUGIN_TYPE_PROXY_MIRROR = 'proxy_mirror';
    const PLUGIN_TYPE_OIDC_AUTH = 'oidc_auth';
    const PLUGIN_TYPE_JWT_AUTH = 'jwt_auth';
    const PLUGIN_SCOPE__GLOBAL = 'global';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPluginTypeAllowableValues()
    {
        return [
            self::PLUGIN_TYPE_CORS,
            self::PLUGIN_TYPE_SET_RESP_HEADERS,
            self::PLUGIN_TYPE_KAFKA_LOG,
            self::PLUGIN_TYPE_BREAKER,
            self::PLUGIN_TYPE_RATE_LIMIT,
            self::PLUGIN_TYPE_THIRD_AUTH,
            self::PLUGIN_TYPE_PROXY_CACHE,
            self::PLUGIN_TYPE_PROXY_MIRROR,
            self::PLUGIN_TYPE_OIDC_AUTH,
            self::PLUGIN_TYPE_JWT_AUTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPluginScopeAllowableValues()
    {
        return [
            self::PLUGIN_SCOPE__GLOBAL,
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
        $this->container['pluginAttachId'] = isset($data['pluginAttachId']) ? $data['pluginAttachId'] : null;
        $this->container['pluginId'] = isset($data['pluginId']) ? $data['pluginId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginType'] = isset($data['pluginType']) ? $data['pluginType'] : null;
        $this->container['pluginScope'] = isset($data['pluginScope']) ? $data['pluginScope'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['attachedTime'] = isset($data['attachedTime']) ? $data['attachedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pluginName']) && !preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,254}$/", $this->container['pluginName'])) {
                $invalidProperties[] = "invalid value for 'pluginName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,254}$/.";
            }
            $allowedValues = $this->getPluginTypeAllowableValues();
                if (!is_null($this->container['pluginType']) && !in_array($this->container['pluginType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pluginType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPluginScopeAllowableValues();
                if (!is_null($this->container['pluginScope']) && !in_array($this->container['pluginScope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pluginScope', must be one of '%s'",
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
    * Gets pluginAttachId
    *  插件绑定编码。
    *
    * @return string|null
    */
    public function getPluginAttachId()
    {
        return $this->container['pluginAttachId'];
    }

    /**
    * Sets pluginAttachId
    *
    * @param string|null $pluginAttachId 插件绑定编码。
    *
    * @return $this
    */
    public function setPluginAttachId($pluginAttachId)
    {
        $this->container['pluginAttachId'] = $pluginAttachId;
        return $this;
    }

    /**
    * Gets pluginId
    *  插件编码。
    *
    * @return string|null
    */
    public function getPluginId()
    {
        return $this->container['pluginId'];
    }

    /**
    * Sets pluginId
    *
    * @param string|null $pluginId 插件编码。
    *
    * @return $this
    */
    public function setPluginId($pluginId)
    {
        $this->container['pluginId'] = $pluginId;
        return $this;
    }

    /**
    * Gets pluginName
    *  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets pluginType
    *  插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    *
    * @return string|null
    */
    public function getPluginType()
    {
        return $this->container['pluginType'];
    }

    /**
    * Sets pluginType
    *
    * @param string|null $pluginType 插件类型。 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存 - proxy_mirror: 请求镜像 - oidc_auth: OIDC认证 - jwt_auth: JWT认证
    *
    * @return $this
    */
    public function setPluginType($pluginType)
    {
        $this->container['pluginType'] = $pluginType;
        return $this;
    }

    /**
    * Gets pluginScope
    *  插件可见范围。global：全局可见。
    *
    * @return string|null
    */
    public function getPluginScope()
    {
        return $this->container['pluginScope'];
    }

    /**
    * Sets pluginScope
    *
    * @param string|null $pluginScope 插件可见范围。global：全局可见。
    *
    * @return $this
    */
    public function setPluginScope($pluginScope)
    {
        $this->container['pluginScope'] = $pluginScope;
        return $this;
    }

    /**
    * Gets envId
    *  绑定API的环境编码。
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId 绑定API的环境编码。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets envName
    *  api授权绑定的环境名称
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName api授权绑定的环境名称
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets apiId
    *  绑定的API编码。
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId 绑定的API编码。
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
        return $this;
    }

    /**
    * Gets apiName
    *  API的名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName API的名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
        return $this;
    }

    /**
    * Gets attachedTime
    *  绑定时间。
    *
    * @return \DateTime|null
    */
    public function getAttachedTime()
    {
        return $this->container['attachedTime'];
    }

    /**
    * Sets attachedTime
    *
    * @param \DateTime|null $attachedTime 绑定时间。
    *
    * @return $this
    */
    public function setAttachedTime($attachedTime)
    {
        $this->container['attachedTime'] = $attachedTime;
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

