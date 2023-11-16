<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpStatusDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpStatusDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockTime  封堵时间
    * unblockTime  解封时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockTime' => 'int',
            'unblockTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockTime  封堵时间
    * unblockTime  解封时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockTime' => 'int64',
        'unblockTime' => 'int64'
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
    * blockTime  封堵时间
    * unblockTime  解封时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockTime' => 'block_time',
            'unblockTime' => 'unblock_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockTime  封堵时间
    * unblockTime  解封时间
    *
    * @var string[]
    */
    protected static $setters = [
            'blockTime' => 'setBlockTime',
            'unblockTime' => 'setUnblockTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockTime  封堵时间
    * unblockTime  解封时间
    *
    * @var string[]
    */
    protected static $getters = [
            'blockTime' => 'getBlockTime',
            'unblockTime' => 'getUnblockTime'
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
        $this->container['blockTime'] = isset($data['blockTime']) ? $data['blockTime'] : null;
        $this->container['unblockTime'] = isset($data['unblockTime']) ? $data['unblockTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['blockTime'] === null) {
            $invalidProperties[] = "'blockTime' can't be null";
        }
            if (($this->container['blockTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['blockTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockTime', must be bigger than or equal to 0.";
            }
        if ($this->container['unblockTime'] === null) {
            $invalidProperties[] = "'unblockTime' can't be null";
        }
            if (($this->container['unblockTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'unblockTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['unblockTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'unblockTime', must be bigger than or equal to 0.";
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
    * Gets blockTime
    *  封堵时间
    *
    * @return int
    */
    public function getBlockTime()
    {
        return $this->container['blockTime'];
    }

    /**
    * Sets blockTime
    *
    * @param int $blockTime 封堵时间
    *
    * @return $this
    */
    public function setBlockTime($blockTime)
    {
        $this->container['blockTime'] = $blockTime;
        return $this;
    }

    /**
    * Gets unblockTime
    *  解封时间
    *
    * @return int
    */
    public function getUnblockTime()
    {
        return $this->container['unblockTime'];
    }

    /**
    * Sets unblockTime
    *
    * @param int $unblockTime 解封时间
    *
    * @return $this
    */
    public function setUnblockTime($unblockTime)
    {
        $this->container['unblockTime'] = $unblockTime;
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

