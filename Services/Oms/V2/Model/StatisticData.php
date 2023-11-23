<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeStamp  统计时间戳
    * statisticNum  统计数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeStamp' => 'int',
            'statisticNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeStamp  统计时间戳
    * statisticNum  统计数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeStamp' => 'int64',
        'statisticNum' => 'int64'
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
    * timeStamp  统计时间戳
    * statisticNum  统计数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeStamp' => 'time_stamp',
            'statisticNum' => 'statistic_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeStamp  统计时间戳
    * statisticNum  统计数量
    *
    * @var string[]
    */
    protected static $setters = [
            'timeStamp' => 'setTimeStamp',
            'statisticNum' => 'setStatisticNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeStamp  统计时间戳
    * statisticNum  统计数量
    *
    * @var string[]
    */
    protected static $getters = [
            'timeStamp' => 'getTimeStamp',
            'statisticNum' => 'getStatisticNum'
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
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['statisticNum'] = isset($data['statisticNum']) ? $data['statisticNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeStamp']) && ($this->container['timeStamp'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'timeStamp', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['timeStamp']) && ($this->container['timeStamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timeStamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statisticNum']) && ($this->container['statisticNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'statisticNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['statisticNum']) && ($this->container['statisticNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'statisticNum', must be bigger than or equal to 0.";
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
    * Gets timeStamp
    *  统计时间戳
    *
    * @return int|null
    */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
    * Sets timeStamp
    *
    * @param int|null $timeStamp 统计时间戳
    *
    * @return $this
    */
    public function setTimeStamp($timeStamp)
    {
        $this->container['timeStamp'] = $timeStamp;
        return $this;
    }

    /**
    * Gets statisticNum
    *  统计数量
    *
    * @return int|null
    */
    public function getStatisticNum()
    {
        return $this->container['statisticNum'];
    }

    /**
    * Sets statisticNum
    *
    * @param int|null $statisticNum 统计数量
    *
    * @return $this
    */
    public function setStatisticNum($statisticNum)
    {
        $this->container['statisticNum'] = $statisticNum;
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

