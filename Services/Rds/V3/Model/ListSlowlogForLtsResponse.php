<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowlogForLtsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowlogForLtsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * slowLogList  日志数据集合。
    * longQueryTime  当前慢日志阈值时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'slowLogList' => '\HuaweiCloud\SDK\Rds\V3\Model\MysqlSlowLogDetailsItem[]',
            'longQueryTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * slowLogList  日志数据集合。
    * longQueryTime  当前慢日志阈值时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'slowLogList' => null,
        'longQueryTime' => null
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
    * slowLogList  日志数据集合。
    * longQueryTime  当前慢日志阈值时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'slowLogList' => 'slow_log_list',
            'longQueryTime' => 'long_query_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * slowLogList  日志数据集合。
    * longQueryTime  当前慢日志阈值时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'slowLogList' => 'setSlowLogList',
            'longQueryTime' => 'setLongQueryTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * slowLogList  日志数据集合。
    * longQueryTime  当前慢日志阈值时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'slowLogList' => 'getSlowLogList',
            'longQueryTime' => 'getLongQueryTime'
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
        $this->container['slowLogList'] = isset($data['slowLogList']) ? $data['slowLogList'] : null;
        $this->container['longQueryTime'] = isset($data['longQueryTime']) ? $data['longQueryTime'] : null;
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
    * Gets slowLogList
    *  日志数据集合。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\MysqlSlowLogDetailsItem[]|null
    */
    public function getSlowLogList()
    {
        return $this->container['slowLogList'];
    }

    /**
    * Sets slowLogList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\MysqlSlowLogDetailsItem[]|null $slowLogList 日志数据集合。
    *
    * @return $this
    */
    public function setSlowLogList($slowLogList)
    {
        $this->container['slowLogList'] = $slowLogList;
        return $this;
    }

    /**
    * Gets longQueryTime
    *  当前慢日志阈值时间。
    *
    * @return string|null
    */
    public function getLongQueryTime()
    {
        return $this->container['longQueryTime'];
    }

    /**
    * Sets longQueryTime
    *
    * @param string|null $longQueryTime 当前慢日志阈值时间。
    *
    * @return $this
    */
    public function setLongQueryTime($longQueryTime)
    {
        $this->container['longQueryTime'] = $longQueryTime;
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

