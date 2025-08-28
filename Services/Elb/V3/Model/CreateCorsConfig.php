<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCorsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCorsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allowOrigin  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    * allowMethods  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowHeaders  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * exposeHeaders  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowCredentials  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    * maxAge  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allowOrigin' => 'string[]',
            'allowMethods' => 'string[]',
            'allowHeaders' => 'string[]',
            'exposeHeaders' => 'string[]',
            'allowCredentials' => 'bool',
            'maxAge' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allowOrigin  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    * allowMethods  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowHeaders  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * exposeHeaders  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowCredentials  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    * maxAge  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allowOrigin' => null,
        'allowMethods' => null,
        'allowHeaders' => null,
        'exposeHeaders' => null,
        'allowCredentials' => null,
        'maxAge' => 'int64'
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
    * allowOrigin  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    * allowMethods  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowHeaders  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * exposeHeaders  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowCredentials  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    * maxAge  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allowOrigin' => 'allow_origin',
            'allowMethods' => 'allow_methods',
            'allowHeaders' => 'allow_headers',
            'exposeHeaders' => 'expose_headers',
            'allowCredentials' => 'allow_credentials',
            'maxAge' => 'max_age'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allowOrigin  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    * allowMethods  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowHeaders  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * exposeHeaders  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowCredentials  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    * maxAge  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'allowOrigin' => 'setAllowOrigin',
            'allowMethods' => 'setAllowMethods',
            'allowHeaders' => 'setAllowHeaders',
            'exposeHeaders' => 'setExposeHeaders',
            'allowCredentials' => 'setAllowCredentials',
            'maxAge' => 'setMaxAge'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allowOrigin  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    * allowMethods  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowHeaders  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * exposeHeaders  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * allowCredentials  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    * maxAge  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'allowOrigin' => 'getAllowOrigin',
            'allowMethods' => 'getAllowMethods',
            'allowHeaders' => 'getAllowHeaders',
            'exposeHeaders' => 'getExposeHeaders',
            'allowCredentials' => 'getAllowCredentials',
            'maxAge' => 'getMaxAge'
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
        $this->container['allowOrigin'] = isset($data['allowOrigin']) ? $data['allowOrigin'] : null;
        $this->container['allowMethods'] = isset($data['allowMethods']) ? $data['allowMethods'] : null;
        $this->container['allowHeaders'] = isset($data['allowHeaders']) ? $data['allowHeaders'] : null;
        $this->container['exposeHeaders'] = isset($data['exposeHeaders']) ? $data['exposeHeaders'] : null;
        $this->container['allowCredentials'] = isset($data['allowCredentials']) ? $data['allowCredentials'] : null;
        $this->container['maxAge'] = isset($data['maxAge']) ? $data['maxAge'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['maxAge']) && ($this->container['maxAge'] > 172800)) {
                $invalidProperties[] = "invalid value for 'maxAge', must be smaller than or equal to 172800.";
            }
            if (!is_null($this->container['maxAge']) && ($this->container['maxAge'] < -1)) {
                $invalidProperties[] = "invalid value for 'maxAge', must be bigger than or equal to -1.";
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
    * Gets allowOrigin
    *  **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAllowOrigin()
    {
        return $this->container['allowOrigin'];
    }

    /**
    * Sets allowOrigin
    *
    * @param string[]|null $allowOrigin **参数解释**：允许的访问来源列表。支持只配置一个元素*，或配置一个或多个值。  **约束限制**： - 单个值必须以http://或者https://开头，后边加一个正确的域名或一级泛域名。（例：http://_*.test.abc.example.com） - 单个值可以不加端口，也可以指定端口，端口范围：1~65535。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAllowOrigin($allowOrigin)
    {
        $this->container['allowOrigin'] = $allowOrigin;
        return $this;
    }

    /**
    * Gets allowMethods
    *  **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAllowMethods()
    {
        return $this->container['allowMethods'];
    }

    /**
    * Sets allowMethods
    *
    * @param string[]|null $allowMethods **参数解释**：选择跨域访问时允许的 HTTP 方法。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAllowMethods($allowMethods)
    {
        $this->container['allowMethods'] = $allowMethods;
        return $this;
    }

    /**
    * Gets allowHeaders
    *  **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAllowHeaders()
    {
        return $this->container['allowHeaders'];
    }

    /**
    * Sets allowHeaders
    *
    * @param string[]|null $allowHeaders **参数解释**：允许跨域的 Header 列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAllowHeaders($allowHeaders)
    {
        $this->container['allowHeaders'] = $allowHeaders;
        return $this;
    }

    /**
    * Gets exposeHeaders
    *  **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getExposeHeaders()
    {
        return $this->container['exposeHeaders'];
    }

    /**
    * Sets exposeHeaders
    *
    * @param string[]|null $exposeHeaders **参数解释**：允许暴露的Header列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setExposeHeaders($exposeHeaders)
    {
        $this->container['exposeHeaders'] = $exposeHeaders;
        return $this;
    }

    /**
    * Gets allowCredentials
    *  **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getAllowCredentials()
    {
        return $this->container['allowCredentials'];
    }

    /**
    * Sets allowCredentials
    *
    * @param bool|null $allowCredentials **参数解释**：是否允许携带凭证信息。  **约束限制**：不涉及  **取值范围**：true 是，false 否。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAllowCredentials($allowCredentials)
    {
        $this->container['allowCredentials'] = $allowCredentials;
        return $this;
    }

    /**
    * Gets maxAge
    *  **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @return int|null
    */
    public function getMaxAge()
    {
        return $this->container['maxAge'];
    }

    /**
    * Sets maxAge
    *
    * @param int|null $maxAge **参数解释**：预检请求在浏览器的最大缓存时间，单位：秒。  **约束限制**：不涉及  **取值范围**：-1~172800  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMaxAge($maxAge)
    {
        $this->container['maxAge'] = $maxAge;
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

