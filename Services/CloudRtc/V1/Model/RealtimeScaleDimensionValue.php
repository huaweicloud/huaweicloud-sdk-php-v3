<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealtimeScaleDimensionValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealtimeScaleDimensionValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimension  维度值，如查询维度为region，则此处取值可能为GD
    * onlineUsers  在线观众数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimension' => 'string',
            'onlineUsers' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimension  维度值，如查询维度为region，则此处取值可能为GD
    * onlineUsers  在线观众数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimension' => null,
        'onlineUsers' => 'int64'
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
    * dimension  维度值，如查询维度为region，则此处取值可能为GD
    * onlineUsers  在线观众数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimension' => 'dimension',
            'onlineUsers' => 'online_users'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimension  维度值，如查询维度为region，则此处取值可能为GD
    * onlineUsers  在线观众数
    *
    * @var string[]
    */
    protected static $setters = [
            'dimension' => 'setDimension',
            'onlineUsers' => 'setOnlineUsers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimension  维度值，如查询维度为region，则此处取值可能为GD
    * onlineUsers  在线观众数
    *
    * @var string[]
    */
    protected static $getters = [
            'dimension' => 'getDimension',
            'onlineUsers' => 'getOnlineUsers'
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
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['onlineUsers'] = isset($data['onlineUsers']) ? $data['onlineUsers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) > 256)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['dimension']) && (mb_strlen($this->container['dimension']) < 0)) {
                $invalidProperties[] = "invalid value for 'dimension', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['onlineUsers']) && ($this->container['onlineUsers'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'onlineUsers', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['onlineUsers']) && ($this->container['onlineUsers'] < 0)) {
                $invalidProperties[] = "invalid value for 'onlineUsers', must be bigger than or equal to 0.";
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
    * Gets dimension
    *  维度值，如查询维度为region，则此处取值可能为GD
    *
    * @return string|null
    */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
    * Sets dimension
    *
    * @param string|null $dimension 维度值，如查询维度为region，则此处取值可能为GD
    *
    * @return $this
    */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;
        return $this;
    }

    /**
    * Gets onlineUsers
    *  在线观众数
    *
    * @return int|null
    */
    public function getOnlineUsers()
    {
        return $this->container['onlineUsers'];
    }

    /**
    * Sets onlineUsers
    *
    * @param int|null $onlineUsers 在线观众数
    *
    * @return $this
    */
    public function setOnlineUsers($onlineUsers)
    {
        $this->container['onlineUsers'] = $onlineUsers;
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

