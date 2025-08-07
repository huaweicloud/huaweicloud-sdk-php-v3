<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resetViewLastTime  最新重置时间
    * totalCount  总的个数
    * list  数据列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resetViewLastTime' => 'int',
            'totalCount' => 'int',
            'list' => '\HuaweiCloud\SDK\Rds\V3\Model\Statistic[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resetViewLastTime  最新重置时间
    * totalCount  总的个数
    * list  数据列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resetViewLastTime' => 'int64',
        'totalCount' => 'int32',
        'list' => null
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
    * resetViewLastTime  最新重置时间
    * totalCount  总的个数
    * list  数据列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resetViewLastTime' => 'reset_view_last_time',
            'totalCount' => 'total_count',
            'list' => 'list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resetViewLastTime  最新重置时间
    * totalCount  总的个数
    * list  数据列表
    *
    * @var string[]
    */
    protected static $setters = [
            'resetViewLastTime' => 'setResetViewLastTime',
            'totalCount' => 'setTotalCount',
            'list' => 'setList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resetViewLastTime  最新重置时间
    * totalCount  总的个数
    * list  数据列表
    *
    * @var string[]
    */
    protected static $getters = [
            'resetViewLastTime' => 'getResetViewLastTime',
            'totalCount' => 'getTotalCount',
            'list' => 'getList'
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
        $this->container['resetViewLastTime'] = isset($data['resetViewLastTime']) ? $data['resetViewLastTime'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
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
    * Gets resetViewLastTime
    *  最新重置时间
    *
    * @return int|null
    */
    public function getResetViewLastTime()
    {
        return $this->container['resetViewLastTime'];
    }

    /**
    * Sets resetViewLastTime
    *
    * @param int|null $resetViewLastTime 最新重置时间
    *
    * @return $this
    */
    public function setResetViewLastTime($resetViewLastTime)
    {
        $this->container['resetViewLastTime'] = $resetViewLastTime;
        return $this;
    }

    /**
    * Gets totalCount
    *  总的个数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总的个数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets list
    *  数据列表
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\Statistic[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\Statistic[]|null $list 数据列表
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
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

