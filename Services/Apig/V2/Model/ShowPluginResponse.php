<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPluginResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPluginResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * createTime  创建时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginId' => 'string',
            'pluginName' => 'string',
            'pluginType' => 'string',
            'pluginScope' => 'string',
            'pluginContent' => 'string',
            'remark' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * createTime  创建时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginId' => null,
        'pluginName' => null,
        'pluginType' => null,
        'pluginScope' => null,
        'pluginContent' => null,
        'remark' => null,
        'createTime' => 'date-time',
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
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * createTime  创建时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginId' => 'plugin_id',
            'pluginName' => 'plugin_name',
            'pluginType' => 'plugin_type',
            'pluginScope' => 'plugin_scope',
            'pluginContent' => 'plugin_content',
            'remark' => 'remark',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * createTime  创建时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginId' => 'setPluginId',
            'pluginName' => 'setPluginName',
            'pluginType' => 'setPluginType',
            'pluginScope' => 'setPluginScope',
            'pluginContent' => 'setPluginContent',
            'remark' => 'setRemark',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginId  插件编码。
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * createTime  创建时间。
    * updateTime  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginId' => 'getPluginId',
            'pluginName' => 'getPluginName',
            'pluginType' => 'getPluginType',
            'pluginScope' => 'getPluginScope',
            'pluginContent' => 'getPluginContent',
            'remark' => 'getRemark',
            'createTime' => 'getCreateTime',
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
    const PLUGIN_TYPE_CORS = 'cors';
    const PLUGIN_TYPE_SET_RESP_HEADERS = 'set_resp_headers';
    const PLUGIN_TYPE_KAFKA_LOG = 'kafka_log';
    const PLUGIN_TYPE_BREAKER = 'breaker';
    const PLUGIN_TYPE_RATE_LIMIT = 'rate_limit';
    const PLUGIN_TYPE_THIRD_AUTH = 'third_auth';
    const PLUGIN_TYPE_PROXY_CACHE = 'proxy_cache';
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
        $this->container['pluginId'] = isset($data['pluginId']) ? $data['pluginId'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginType'] = isset($data['pluginType']) ? $data['pluginType'] : null;
        $this->container['pluginScope'] = isset($data['pluginScope']) ? $data['pluginScope'] : null;
        $this->container['pluginContent'] = isset($data['pluginContent']) ? $data['pluginContent'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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

            if (!is_null($this->container['pluginContent']) && (mb_strlen($this->container['pluginContent']) > 65535)) {
                $invalidProperties[] = "invalid value for 'pluginContent', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 255)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 255.";
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
    *  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
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
    * @param string|null $pluginName 插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
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
    *  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
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
    * @param string|null $pluginType 插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送 - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证 - proxy_cache: 响应缓存
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
    *  插件可见范围。global：全局可见；
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
    * @param string|null $pluginScope 插件可见范围。global：全局可见；
    *
    * @return $this
    */
    public function setPluginScope($pluginScope)
    {
        $this->container['pluginScope'] = $pluginScope;
        return $this;
    }

    /**
    * Gets pluginContent
    *  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    *
    * @return string|null
    */
    public function getPluginContent()
    {
        return $this->container['pluginContent'];
    }

    /**
    * Sets pluginContent
    *
    * @param string|null $pluginContent 插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容 ProxyCacheContent: 响应缓存 定义内容
    *
    * @return $this
    */
    public function setPluginContent($pluginContent)
    {
        $this->container['pluginContent'] = $pluginContent;
        return $this;
    }

    /**
    * Gets remark
    *  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
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
    * @param string|null $remark 插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
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
    * @param \DateTime|null $updateTime 更新时间。
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

