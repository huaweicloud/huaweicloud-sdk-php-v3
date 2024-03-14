<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateActiveCodeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateActiveCodeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'robotId' => 'string',
            'roomId' => 'string',
            'validPeriod' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'robotId' => null,
        'roomId' => null,
        'validPeriod' => null
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
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'robotId' => 'robot_id',
            'roomId' => 'room_id',
            'validPeriod' => 'valid_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    *
    * @var string[]
    */
    protected static $setters = [
            'robotId' => 'setRobotId',
            'roomId' => 'setRoomId',
            'validPeriod' => 'setValidPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * robotId  应用ID。
    * roomId  智能交互对话ID。
    * validPeriod  有效天数（0表示长期有效）。
    *
    * @var string[]
    */
    protected static $getters = [
            'robotId' => 'getRobotId',
            'roomId' => 'getRoomId',
            'validPeriod' => 'getValidPeriod'
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
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['robotId'] === null) {
            $invalidProperties[] = "'robotId' can't be null";
        }
            if ((mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['validPeriod'] === null) {
            $invalidProperties[] = "'validPeriod' can't be null";
        }
            if (($this->container['validPeriod'] > 65535)) {
                $invalidProperties[] = "invalid value for 'validPeriod', must be smaller than or equal to 65535.";
            }
            if (($this->container['validPeriod'] < 0)) {
                $invalidProperties[] = "invalid value for 'validPeriod', must be bigger than or equal to 0.";
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
    * Gets robotId
    *  应用ID。
    *
    * @return string
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets roomId
    *  智能交互对话ID。
    *
    * @return string
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string $roomId 智能交互对话ID。
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets validPeriod
    *  有效天数（0表示长期有效）。
    *
    * @return int
    */
    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    /**
    * Sets validPeriod
    *
    * @param int $validPeriod 有效天数（0表示长期有效）。
    *
    * @return $this
    */
    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
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

