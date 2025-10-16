<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ForceRedirect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ForceRedirect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switch  强制跳转开关。1打开。0关闭。
    * redirectType  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switch' => 'int',
            'redirectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switch  强制跳转开关。1打开。0关闭。
    * redirectType  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switch' => 'int32',
        'redirectType' => null
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
    * switch  强制跳转开关。1打开。0关闭。
    * redirectType  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switch' => 'switch',
            'redirectType' => 'redirect_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switch  强制跳转开关。1打开。0关闭。
    * redirectType  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @var string[]
    */
    protected static $setters = [
            'switch' => 'setSwitch',
            'redirectType' => 'setRedirectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switch  强制跳转开关。1打开。0关闭。
    * redirectType  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @var string[]
    */
    protected static $getters = [
            'switch' => 'getSwitch',
            'redirectType' => 'getRedirectType'
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
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['redirectType'] = isset($data['redirectType']) ? $data['redirectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switch'] === null) {
            $invalidProperties[] = "'switch' can't be null";
        }
        if ($this->container['redirectType'] === null) {
            $invalidProperties[] = "'redirectType' can't be null";
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
    * Gets switch
    *  强制跳转开关。1打开。0关闭。
    *
    * @return int
    */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
    * Sets switch
    *
    * @param int $switch 强制跳转开关。1打开。0关闭。
    *
    * @return $this
    */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;
        return $this;
    }

    /**
    * Gets redirectType
    *  强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @return string
    */
    public function getRedirectType()
    {
        return $this->container['redirectType'];
    }

    /**
    * Sets redirectType
    *
    * @param string $redirectType 强制跳转类型。http：强制跳转HTTP。https：强制跳转HTTPS。
    *
    * @return $this
    */
    public function setRedirectType($redirectType)
    {
        $this->container['redirectType'] = $redirectType;
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

