<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayShardStaticsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayShardStaticsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  回放时间点
    * total  SQL总量
    * finish  SQL执行量
    * abnormal  SQL异常量
    * slow  慢SQL数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'total' => 'int',
            'finish' => 'int',
            'abnormal' => 'int',
            'slow' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  回放时间点
    * total  SQL总量
    * finish  SQL执行量
    * abnormal  SQL异常量
    * slow  慢SQL数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'total' => 'int64',
        'finish' => 'int64',
        'abnormal' => 'int64',
        'slow' => 'int64'
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
    * time  回放时间点
    * total  SQL总量
    * finish  SQL执行量
    * abnormal  SQL异常量
    * slow  慢SQL数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'total' => 'total',
            'finish' => 'finish',
            'abnormal' => 'abnormal',
            'slow' => 'slow'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  回放时间点
    * total  SQL总量
    * finish  SQL执行量
    * abnormal  SQL异常量
    * slow  慢SQL数量
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'total' => 'setTotal',
            'finish' => 'setFinish',
            'abnormal' => 'setAbnormal',
            'slow' => 'setSlow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  回放时间点
    * total  SQL总量
    * finish  SQL执行量
    * abnormal  SQL异常量
    * slow  慢SQL数量
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'total' => 'getTotal',
            'finish' => 'getFinish',
            'abnormal' => 'getAbnormal',
            'slow' => 'getSlow'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['finish'] = isset($data['finish']) ? $data['finish'] : null;
        $this->container['abnormal'] = isset($data['abnormal']) ? $data['abnormal'] : null;
        $this->container['slow'] = isset($data['slow']) ? $data['slow'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['finish'] === null) {
            $invalidProperties[] = "'finish' can't be null";
        }
        if ($this->container['abnormal'] === null) {
            $invalidProperties[] = "'abnormal' can't be null";
        }
        if ($this->container['slow'] === null) {
            $invalidProperties[] = "'slow' can't be null";
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
    * Gets time
    *  回放时间点
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 回放时间点
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets total
    *  SQL总量
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total SQL总量
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets finish
    *  SQL执行量
    *
    * @return int
    */
    public function getFinish()
    {
        return $this->container['finish'];
    }

    /**
    * Sets finish
    *
    * @param int $finish SQL执行量
    *
    * @return $this
    */
    public function setFinish($finish)
    {
        $this->container['finish'] = $finish;
        return $this;
    }

    /**
    * Gets abnormal
    *  SQL异常量
    *
    * @return int
    */
    public function getAbnormal()
    {
        return $this->container['abnormal'];
    }

    /**
    * Sets abnormal
    *
    * @param int $abnormal SQL异常量
    *
    * @return $this
    */
    public function setAbnormal($abnormal)
    {
        $this->container['abnormal'] = $abnormal;
        return $this;
    }

    /**
    * Gets slow
    *  慢SQL数量
    *
    * @return int
    */
    public function getSlow()
    {
        return $this->container['slow'];
    }

    /**
    * Sets slow
    *
    * @param int $slow 慢SQL数量
    *
    * @return $this
    */
    public function setSlow($slow)
    {
        $this->container['slow'] = $slow;
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

