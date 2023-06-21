<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppCallbackUrlReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppCallbackUrlReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'authKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'authKey' => null
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
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'authKey' => 'auth_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'authKey' => 'setAuthKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'authKey' => 'getAuthKey'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : 'http://127.0.0.1';
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : '01234567890123456789012345678912';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) < 32)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be bigger than or equal to 32.";
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
    * Gets url
    *  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets authKey
    *  回调秘钥，主要用于鉴权
    *
    * @return string|null
    */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
    * Sets authKey
    *
    * @param string|null $authKey 回调秘钥，主要用于鉴权
    *
    * @return $this
    */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;
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

