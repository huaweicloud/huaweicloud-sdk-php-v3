<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLockBlockingTrendResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLockBlockingTrendResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intervalMillis  时间间隔（ms）
    * trendList  锁阻塞趋势列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intervalMillis' => 'int',
            'trendList' => '\HuaweiCloud\SDK\Das\V3\Model\ShowLockBlockingTrendRespTrendList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intervalMillis  时间间隔（ms）
    * trendList  锁阻塞趋势列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intervalMillis' => 'int64',
        'trendList' => null
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
    * intervalMillis  时间间隔（ms）
    * trendList  锁阻塞趋势列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intervalMillis' => 'interval_millis',
            'trendList' => 'trend_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intervalMillis  时间间隔（ms）
    * trendList  锁阻塞趋势列表
    *
    * @var string[]
    */
    protected static $setters = [
            'intervalMillis' => 'setIntervalMillis',
            'trendList' => 'setTrendList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intervalMillis  时间间隔（ms）
    * trendList  锁阻塞趋势列表
    *
    * @var string[]
    */
    protected static $getters = [
            'intervalMillis' => 'getIntervalMillis',
            'trendList' => 'getTrendList'
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
        $this->container['intervalMillis'] = isset($data['intervalMillis']) ? $data['intervalMillis'] : null;
        $this->container['trendList'] = isset($data['trendList']) ? $data['trendList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['intervalMillis']) && ($this->container['intervalMillis'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'intervalMillis', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['intervalMillis']) && ($this->container['intervalMillis'] < 0)) {
                $invalidProperties[] = "invalid value for 'intervalMillis', must be bigger than or equal to 0.";
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
    * Gets intervalMillis
    *  时间间隔（ms）
    *
    * @return int|null
    */
    public function getIntervalMillis()
    {
        return $this->container['intervalMillis'];
    }

    /**
    * Sets intervalMillis
    *
    * @param int|null $intervalMillis 时间间隔（ms）
    *
    * @return $this
    */
    public function setIntervalMillis($intervalMillis)
    {
        $this->container['intervalMillis'] = $intervalMillis;
        return $this;
    }

    /**
    * Gets trendList
    *  锁阻塞趋势列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowLockBlockingTrendRespTrendList[]|null
    */
    public function getTrendList()
    {
        return $this->container['trendList'];
    }

    /**
    * Sets trendList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowLockBlockingTrendRespTrendList[]|null $trendList 锁阻塞趋势列表
    *
    * @return $this
    */
    public function setTrendList($trendList)
    {
        $this->container['trendList'] = $trendList;
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

