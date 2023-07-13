<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyTokenDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyTokenDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessToken  代理鉴权服务器的短token字符串。
    * longAccessToken  代理鉴权服务器的长token字符串。
    * validPeriod  Token有效时长，单位：秒。
    * middleEndUrl  中台地址。
    * middleEndInnerUrl  中台内网地址。
    * enableRerouting  是否开启二次路由。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessToken' => 'string',
            'longAccessToken' => 'string',
            'validPeriod' => 'int',
            'middleEndUrl' => 'string',
            'middleEndInnerUrl' => 'string',
            'enableRerouting' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessToken  代理鉴权服务器的短token字符串。
    * longAccessToken  代理鉴权服务器的长token字符串。
    * validPeriod  Token有效时长，单位：秒。
    * middleEndUrl  中台地址。
    * middleEndInnerUrl  中台内网地址。
    * enableRerouting  是否开启二次路由。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'longAccessToken' => null,
        'validPeriod' => 'int64',
        'middleEndUrl' => null,
        'middleEndInnerUrl' => null,
        'enableRerouting' => null
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
    * accessToken  代理鉴权服务器的短token字符串。
    * longAccessToken  代理鉴权服务器的长token字符串。
    * validPeriod  Token有效时长，单位：秒。
    * middleEndUrl  中台地址。
    * middleEndInnerUrl  中台内网地址。
    * enableRerouting  是否开启二次路由。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessToken' => 'accessToken',
            'longAccessToken' => 'longAccessToken',
            'validPeriod' => 'validPeriod',
            'middleEndUrl' => 'middleEndUrl',
            'middleEndInnerUrl' => 'middleEndInnerUrl',
            'enableRerouting' => 'enableRerouting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessToken  代理鉴权服务器的短token字符串。
    * longAccessToken  代理鉴权服务器的长token字符串。
    * validPeriod  Token有效时长，单位：秒。
    * middleEndUrl  中台地址。
    * middleEndInnerUrl  中台内网地址。
    * enableRerouting  是否开启二次路由。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessToken' => 'setAccessToken',
            'longAccessToken' => 'setLongAccessToken',
            'validPeriod' => 'setValidPeriod',
            'middleEndUrl' => 'setMiddleEndUrl',
            'middleEndInnerUrl' => 'setMiddleEndInnerUrl',
            'enableRerouting' => 'setEnableRerouting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessToken  代理鉴权服务器的短token字符串。
    * longAccessToken  代理鉴权服务器的长token字符串。
    * validPeriod  Token有效时长，单位：秒。
    * middleEndUrl  中台地址。
    * middleEndInnerUrl  中台内网地址。
    * enableRerouting  是否开启二次路由。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessToken' => 'getAccessToken',
            'longAccessToken' => 'getLongAccessToken',
            'validPeriod' => 'getValidPeriod',
            'middleEndUrl' => 'getMiddleEndUrl',
            'middleEndInnerUrl' => 'getMiddleEndInnerUrl',
            'enableRerouting' => 'getEnableRerouting'
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
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['longAccessToken'] = isset($data['longAccessToken']) ? $data['longAccessToken'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['middleEndUrl'] = isset($data['middleEndUrl']) ? $data['middleEndUrl'] : null;
        $this->container['middleEndInnerUrl'] = isset($data['middleEndInnerUrl']) ? $data['middleEndInnerUrl'] : null;
        $this->container['enableRerouting'] = isset($data['enableRerouting']) ? $data['enableRerouting'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
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
    * Gets accessToken
    *  代理鉴权服务器的短token字符串。
    *
    * @return string
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string $accessToken 代理鉴权服务器的短token字符串。
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets longAccessToken
    *  代理鉴权服务器的长token字符串。
    *
    * @return string|null
    */
    public function getLongAccessToken()
    {
        return $this->container['longAccessToken'];
    }

    /**
    * Sets longAccessToken
    *
    * @param string|null $longAccessToken 代理鉴权服务器的长token字符串。
    *
    * @return $this
    */
    public function setLongAccessToken($longAccessToken)
    {
        $this->container['longAccessToken'] = $longAccessToken;
        return $this;
    }

    /**
    * Gets validPeriod
    *  Token有效时长，单位：秒。
    *
    * @return int|null
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param int|null $validPeriod Token有效时长，单位：秒。
    *
    * @return $this
    */
    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
        return $this;
    }

    /**
    * Gets middleEndUrl
    *  中台地址。
    *
    * @return string|null
    */
    public function getMiddleEndUrl()
    {
        return $this->container['middleEndUrl'];
    }

    /**
    * Sets middleEndUrl
    *
    * @param string|null $middleEndUrl 中台地址。
    *
    * @return $this
    */
    public function setMiddleEndUrl($middleEndUrl)
    {
        $this->container['middleEndUrl'] = $middleEndUrl;
        return $this;
    }

    /**
    * Gets middleEndInnerUrl
    *  中台内网地址。
    *
    * @return string|null
    */
    public function getMiddleEndInnerUrl()
    {
        return $this->container['middleEndInnerUrl'];
    }

    /**
    * Sets middleEndInnerUrl
    *
    * @param string|null $middleEndInnerUrl 中台内网地址。
    *
    * @return $this
    */
    public function setMiddleEndInnerUrl($middleEndInnerUrl)
    {
        $this->container['middleEndInnerUrl'] = $middleEndInnerUrl;
        return $this;
    }

    /**
    * Gets enableRerouting
    *  是否开启二次路由。
    *
    * @return bool|null
    */
    public function getEnableRerouting()
    {
        return $this->container['enableRerouting'];
    }

    /**
    * Sets enableRerouting
    *
    * @param bool|null $enableRerouting 是否开启二次路由。
    *
    * @return $this
    */
    public function setEnableRerouting($enableRerouting)
    {
        $this->container['enableRerouting'] = $enableRerouting;
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

