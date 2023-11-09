<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'pluginType' => 'string',
            'pluginScope' => 'string',
            'pluginContent' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'pluginType' => null,
        'pluginScope' => null,
        'pluginContent' => null,
        'remark' => null
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
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'pluginType' => 'plugin_type',
            'pluginScope' => 'plugin_scope',
            'pluginContent' => 'plugin_content',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'pluginType' => 'setPluginType',
            'pluginScope' => 'setPluginScope',
            'pluginContent' => 'setPluginContent',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    * pluginType  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    * pluginScope  插件可见范围。global：全局可见；
    * pluginContent  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    * remark  插件描述，255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'pluginType' => 'getPluginType',
            'pluginScope' => 'getPluginScope',
            'pluginContent' => 'getPluginContent',
            'remark' => 'getRemark'
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['pluginType'] = isset($data['pluginType']) ? $data['pluginType'] : null;
        $this->container['pluginScope'] = isset($data['pluginScope']) ? $data['pluginScope'] : null;
        $this->container['pluginContent'] = isset($data['pluginContent']) ? $data['pluginContent'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pluginName'] === null) {
            $invalidProperties[] = "'pluginName' can't be null";
        }
            if (!preg_match("/^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,254}$/", $this->container['pluginName'])) {
                $invalidProperties[] = "invalid value for 'pluginName', must be conform to the pattern /^([a-zA-Z]|[\\u4e00-\\u9fa5])([a-zA-Z0-9_-]|[\\u4e00-\\u9fa5]){2,254}$/.";
            }
        if ($this->container['pluginType'] === null) {
            $invalidProperties[] = "'pluginType' can't be null";
        }
            $allowedValues = $this->getPluginTypeAllowableValues();
                if (!is_null($this->container['pluginType']) && !in_array($this->container['pluginType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pluginType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['pluginScope'] === null) {
            $invalidProperties[] = "'pluginScope' can't be null";
        }
            $allowedValues = $this->getPluginScopeAllowableValues();
                if (!is_null($this->container['pluginScope']) && !in_array($this->container['pluginScope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pluginScope', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['pluginContent'] === null) {
            $invalidProperties[] = "'pluginContent' can't be null";
        }
            if ((mb_strlen($this->container['pluginContent']) > 65535)) {
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
    * Gets pluginName
    *  插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string $pluginName 插件名称。支持汉字，英文，数字，中划线，下划线，且只能以英文和汉字开头，3-255字符。 > 中文字符必须为UTF-8或者unicode编码。
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
    *  插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
    *
    * @return string
    */
    public function getPluginType()
    {
        return $this->container['pluginType'];
    }

    /**
    * Sets pluginType
    *
    * @param string $pluginType 插件类型 - cors：跨域资源共享 - set_resp_headers：HTTP响应头管理 - kafka_log：Kafka日志推送  - breaker：断路器 - rate_limit: 流量控制 - third_auth: 第三方认证
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
    * @return string
    */
    public function getPluginScope()
    {
        return $this->container['pluginScope'];
    }

    /**
    * Sets pluginScope
    *
    * @param string $pluginScope 插件可见范围。global：全局可见；
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
    *  插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
    *
    * @return string
    */
    public function getPluginContent()
    {
        return $this->container['pluginContent'];
    }

    /**
    * Sets pluginContent
    *
    * @param string $pluginContent 插件定义内容，支持json。参考提供的具体模型定义  CorsPluginContent：跨域资源共享 定义内容 SetRespHeadersContent：HTTP响应头管理 定义内容 KafkaLogContent：Kafka日志推送 定义内容 BreakerContent：断路器 定义内容 RateLimitContent 流量控制 定义内容 ThirdAuthContent: 第三方认证 定义内容
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

