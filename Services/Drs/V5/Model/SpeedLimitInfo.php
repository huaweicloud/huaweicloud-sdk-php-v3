<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpeedLimitInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpeedLimitInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * begin  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    * end  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    * speed  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'begin' => 'string',
            'end' => 'string',
            'speed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * begin  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    * end  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    * speed  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'begin' => null,
        'end' => null,
        'speed' => null
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
    * begin  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    * end  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    * speed  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'begin' => 'begin',
            'end' => 'end',
            'speed' => 'speed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * begin  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    * end  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    * speed  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @var string[]
    */
    protected static $setters = [
            'begin' => 'setBegin',
            'end' => 'setEnd',
            'speed' => 'setSpeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * begin  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    * end  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    * speed  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @var string[]
    */
    protected static $getters = [
            'begin' => 'getBegin',
            'end' => 'getEnd',
            'speed' => 'getSpeed'
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
        $this->container['begin'] = isset($data['begin']) ? $data['begin'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['begin'] === null) {
            $invalidProperties[] = "'begin' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
        if ($this->container['speed'] === null) {
            $invalidProperties[] = "'speed' can't be null";
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
    * Gets begin
    *  开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    *
    * @return string
    */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
    * Sets begin
    *
    * @param string $begin 开始限速时间，此时间为UTC时间，开始时间为整时，若有分钟，则会忽略，格式为hh:mm，小时数为两位，例如：01:00。
    *
    * @return $this
    */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;
        return $this;
    }

    /**
    * Gets end
    *  结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    *
    * @return string
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string $end 结束时间，此时间为UTC时间，输入必须为59分结尾，格式为hh:mm，例如：15:59。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets speed
    *  限速值，取值范围为1~9999，单位为MB/s。
    *
    * @return string
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param string $speed 限速值，取值范围为1~9999，单位为MB/s。
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
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

