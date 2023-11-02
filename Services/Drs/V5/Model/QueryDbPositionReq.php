<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDbPositionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDbPositionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resetPositionTime  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resetPositionTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resetPositionTime  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resetPositionTime' => null
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
    * resetPositionTime  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resetPositionTime' => 'reset_position_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resetPositionTime  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @var string[]
    */
    protected static $setters = [
            'resetPositionTime' => 'setResetPositionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resetPositionTime  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @var string[]
    */
    protected static $getters = [
            'resetPositionTime' => 'getResetPositionTime'
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
        $this->container['resetPositionTime'] = isset($data['resetPositionTime']) ? $data['resetPositionTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resetPositionTime'] === null) {
            $invalidProperties[] = "'resetPositionTime' can't be null";
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
    * Gets resetPositionTime
    *  重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @return string
    */
    public function getResetPositionTime()
    {
        return $this->container['resetPositionTime'];
    }

    /**
    * Sets resetPositionTime
    *
    * @param string $resetPositionTime 重置位点时间, 使用UTC时间 示例：2023-09-19 15:00:00，UTC时间是2023-09-19T07:00:00Z
    *
    * @return $this
    */
    public function setResetPositionTime($resetPositionTime)
    {
        $this->container['resetPositionTime'] = $resetPositionTime;
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

