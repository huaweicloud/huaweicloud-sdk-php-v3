<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MaintainWindowsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MaintainWindowsEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * default  是否为默认时间段。
    * end  维护时间窗结束时间。
    * begin  维护时间窗开始时间。
    * seq  序号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'default' => 'bool',
            'end' => 'string',
            'begin' => 'string',
            'seq' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * default  是否为默认时间段。
    * end  维护时间窗结束时间。
    * begin  维护时间窗开始时间。
    * seq  序号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'default' => null,
        'end' => null,
        'begin' => null,
        'seq' => null
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
    * default  是否为默认时间段。
    * end  维护时间窗结束时间。
    * begin  维护时间窗开始时间。
    * seq  序号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'default' => 'default',
            'end' => 'end',
            'begin' => 'begin',
            'seq' => 'seq'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * default  是否为默认时间段。
    * end  维护时间窗结束时间。
    * begin  维护时间窗开始时间。
    * seq  序号。
    *
    * @var string[]
    */
    protected static $setters = [
            'default' => 'setDefault',
            'end' => 'setEnd',
            'begin' => 'setBegin',
            'seq' => 'setSeq'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * default  是否为默认时间段。
    * end  维护时间窗结束时间。
    * begin  维护时间窗开始时间。
    * seq  序号。
    *
    * @var string[]
    */
    protected static $getters = [
            'default' => 'getDefault',
            'end' => 'getEnd',
            'begin' => 'getBegin',
            'seq' => 'getSeq'
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['begin'] = isset($data['begin']) ? $data['begin'] : null;
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets default
    *  是否为默认时间段。
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认时间段。
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets end
    *  维护时间窗结束时间。
    *
    * @return string|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string|null $end 维护时间窗结束时间。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets begin
    *  维护时间窗开始时间。
    *
    * @return string|null
    */
    public function getBegin()
    {
        return $this->container['begin'];
    }

    /**
    * Sets begin
    *
    * @param string|null $begin 维护时间窗开始时间。
    *
    * @return $this
    */
    public function setBegin($begin)
    {
        $this->container['begin'] = $begin;
        return $this;
    }

    /**
    * Gets seq
    *  序号。
    *
    * @return int|null
    */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
    * Sets seq
    *
    * @param int|null $seq 序号。
    *
    * @return $this
    */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;
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

