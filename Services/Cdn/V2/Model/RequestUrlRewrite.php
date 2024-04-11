<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestUrlRewrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestUrlRewrite';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  condition
    * redirectStatusCode  重定向状态码。支持301、302、303、307。
    * redirectUrl  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
    * redirectHost  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    * executionMode  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => '\HuaweiCloud\SDK\Cdn\V2\Model\UrlRewriteCondition',
            'redirectStatusCode' => 'int',
            'redirectUrl' => 'string',
            'redirectHost' => 'string',
            'executionMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  condition
    * redirectStatusCode  重定向状态码。支持301、302、303、307。
    * redirectUrl  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
    * redirectHost  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    * executionMode  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
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
    * condition  condition
    * redirectStatusCode  重定向状态码。支持301、302、303、307。
    * redirectUrl  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
    * redirectHost  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    * executionMode  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'redirectStatusCode' => 'redirect_status_code',
            'redirectUrl' => 'redirect_url',
            'redirectHost' => 'redirect_host',
            'executionMode' => 'execution_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  condition
    * redirectStatusCode  重定向状态码。支持301、302、303、307。
    * redirectUrl  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
    * redirectHost  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    * executionMode  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'redirectStatusCode' => 'setRedirectStatusCode',
            'redirectUrl' => 'setRedirectUrl',
            'redirectHost' => 'setRedirectHost',
            'executionMode' => 'setExecutionMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  condition
    * redirectStatusCode  重定向状态码。支持301、302、303、307。
    * redirectUrl  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
    * redirectHost  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    * executionMode  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
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
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['redirectUrl'] === null) {
            $invalidProperties[] = "'redirectUrl' can't be null";
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
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UrlRewriteCondition
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UrlRewriteCondition $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets redirectStatusCode
    *  重定向状态码。支持301、302、303、307。
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
    * @param int|null $redirectStatusCode 重定向状态码。支持301、302、303、307。
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
    *  重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
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
    * @param string $redirectUrl 重定向URL。重定向后的URL，以正斜线（/）开头，不含http://头及域名，如：/test/index.html。   - 当匹配类型为全路径时，\"\\*\"可以用“$1”捕获，例如：匹配内容为/test/\\*.jpg，重定向URL配置为/newtest/$1.jpg，则用户请求/test/11.jpg时，$1捕获11，重定向后请求的URL为/newtest/11.jpg。
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
    *  支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
    *
    * @return string|null
    */
    public function getRedirectHost()
    {
        return $this->container['redirectHost'];
    }

    /**
    * Sets redirectHost
    *
    * @param string|null $redirectHost 支持将客户端请求重定向到其他域名。   > 不填时默认为当前域名。   > 支持字符长度为1-255，必须以http://或https://开头，例如http://www.example.com。
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
    *  执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
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
    * @param string $executionMode 执行规则：   - redirect：如果请求的URL匹配了当前规则，该请求将被重定向到目标Path。执行完当前规则后，当存在其他配置规则时，会继续匹配剩余规则。   - break：如果请求的URL匹配了当前规则，请求将被改写为目标Path。执行完当前规则后，当存在其他配置规则时，将不再匹配剩余规则，此时不支持配置重定向Host和重定向状态码，返回状态码200。
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

