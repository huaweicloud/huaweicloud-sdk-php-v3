<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RateLimitResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RateLimitResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    * unit  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'int',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    * unit  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => 'int32',
        'unit' => null
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
    * num  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    * unit  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    * unit  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    * unit  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'unit' => 'getUnit'
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
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['num'] === null) {
            $invalidProperties[] = "'num' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
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
    * Gets num
    *  **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    *
    * @return int
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int $num **参数解释：** 服务流量限制是指指定单位内一个服务能够被访问的次数上限。 **取值范围：** 1-10000。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit **参数解释：** 流量限制单元。 **取值范围：** - NANOS（纳秒）。 - MICROS（微秒）。 - MILLIS（毫秒）。 - SECONDS（秒）。 - MINUTES（分钟）。 - HOURS（小时）。 - DAYS（天）。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

