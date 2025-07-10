<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestUrlRewriteEngine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestUrlRewriteEngine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redirectStatusCode  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    * redirectUrl  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    * redirectHost  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    * executionMode  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redirectStatusCode' => 'int',
            'redirectUrl' => 'string',
            'redirectHost' => 'string',
            'executionMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redirectStatusCode  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    * redirectUrl  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    * redirectHost  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    * executionMode  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redirectStatusCode' => 'int32',
        'redirectUrl' => null,
        'redirectHost' => null,
        'executionMode' => null
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
    * redirectStatusCode  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    * redirectUrl  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    * redirectHost  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    * executionMode  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redirectStatusCode' => 'redirect_status_code',
            'redirectUrl' => 'redirect_url',
            'redirectHost' => 'redirect_host',
            'executionMode' => 'execution_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redirectStatusCode  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    * redirectUrl  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    * redirectHost  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    * executionMode  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'redirectStatusCode' => 'setRedirectStatusCode',
            'redirectUrl' => 'setRedirectUrl',
            'redirectHost' => 'setRedirectHost',
            'executionMode' => 'setExecutionMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redirectStatusCode  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    * redirectUrl  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    * redirectHost  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    * executionMode  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'redirectStatusCode' => 'getRedirectStatusCode',
            'redirectUrl' => 'getRedirectUrl',
            'redirectHost' => 'getRedirectHost',
            'executionMode' => 'getExecutionMode'
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
        $this->container['redirectStatusCode'] = isset($data['redirectStatusCode']) ? $data['redirectStatusCode'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['redirectHost'] = isset($data['redirectHost']) ? $data['redirectHost'] : null;
        $this->container['executionMode'] = isset($data['executionMode']) ? $data['executionMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['redirectUrl'] === null) {
            $invalidProperties[] = "'redirectUrl' can't be null";
        }
        if ($this->container['redirectHost'] === null) {
            $invalidProperties[] = "'redirectHost' can't be null";
        }
        if ($this->container['executionMode'] === null) {
            $invalidProperties[] = "'executionMode' can't be null";
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
    * Gets redirectStatusCode
    *  **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getRedirectStatusCode()
    {
        return $this->container['redirectStatusCode'];
    }

    /**
    * Sets redirectStatusCode
    *
    * @param int|null $redirectStatusCode **参数解释：** 重定向状态码 **约束限制：** 不涉及 **取值范围：** - 301 - 302 - 303 - 307 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRedirectStatusCode($redirectStatusCode)
    {
        $this->container['redirectStatusCode'] = $redirectStatusCode;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string $redirectUrl **参数解释：** 重定向URL **约束限制：** - 重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets redirectHost
    *  **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    *
    * @return string
    */
    public function getRedirectHost()
    {
        return $this->container['redirectHost'];
    }

    /**
    * Sets redirectHost
    *
    * @param string $redirectHost **参数解释：** 支持将客户端请求重定向到其他域名 **约束限制：** 不涉及 **取值范围：** - 1-255个字符 - 必须以http://或https://开头 **默认取值：** 不填时默认为当前域名
    *
    * @return $this
    */
    public function setRedirectHost($redirectHost)
    {
        $this->container['redirectHost'] = $redirectHost;
        return $this;
    }

    /**
    * Gets executionMode
    *  **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getExecutionMode()
    {
        return $this->container['executionMode'];
    }

    /**
    * Sets executionMode
    *
    * @param string $executionMode **参数解释：** 执行规则 **约束限制：** 不涉及 **取值范围：** - redirect: 如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则 - break: 如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExecutionMode($executionMode)
    {
        $this->container['executionMode'] = $executionMode;
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

