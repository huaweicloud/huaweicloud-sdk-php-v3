<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppCodeCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppCodeCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appCode  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appCode  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appCode' => null
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
    * appCode  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appCode' => 'app_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appCode  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'appCode' => 'setAppCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appCode  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'appCode' => 'getAppCode'
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
        $this->container['appCode'] = isset($data['appCode']) ? $data['appCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appCode'] === null) {
            $invalidProperties[] = "'appCode' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9+\/]([a-zA-Z0-9-_!@#$%+\/=]){63,179}$/", $this->container['appCode'])) {
                $invalidProperties[] = "invalid value for 'appCode', must be conform to the pattern /^[a-zA-Z0-9+\/]([a-zA-Z0-9-_!@#$%+\/=]){63,179}$/.";
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
    * Gets appCode
    *  App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @return string
    */
    public function getAppCode()
    {
        return $this->container['appCode'];
    }

    /**
    * Sets appCode
    *
    * @param string $appCode App Code值  支持英文、数字，+_!@#$%-/=，且只能以英文、数字和+、/开头，64-180个字符。
    *
    * @return $this
    */
    public function setAppCode($appCode)
    {
        $this->container['appCode'] = $appCode;
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

