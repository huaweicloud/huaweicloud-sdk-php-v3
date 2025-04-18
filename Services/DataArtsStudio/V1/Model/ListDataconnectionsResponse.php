<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDataconnectionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDataconnectionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  当前分页返回记录数
    * maxRecords  返回记录总数，一个工作空间最多只能创建50条数据连接
    * totalSize  返回当前空间内创建连接的总数
    * dataConnectionLists  返回数据连接列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'maxRecords' => 'int',
            'totalSize' => 'int',
            'dataConnectionLists' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceView[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  当前分页返回记录数
    * maxRecords  返回记录总数，一个工作空间最多只能创建50条数据连接
    * totalSize  返回当前空间内创建连接的总数
    * dataConnectionLists  返回数据连接列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'maxRecords' => null,
        'totalSize' => null,
        'dataConnectionLists' => null
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
    * count  当前分页返回记录数
    * maxRecords  返回记录总数，一个工作空间最多只能创建50条数据连接
    * totalSize  返回当前空间内创建连接的总数
    * dataConnectionLists  返回数据连接列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'maxRecords' => 'max_records',
            'totalSize' => 'total_size',
            'dataConnectionLists' => 'data_connection_lists'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  当前分页返回记录数
    * maxRecords  返回记录总数，一个工作空间最多只能创建50条数据连接
    * totalSize  返回当前空间内创建连接的总数
    * dataConnectionLists  返回数据连接列表
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'maxRecords' => 'setMaxRecords',
            'totalSize' => 'setTotalSize',
            'dataConnectionLists' => 'setDataConnectionLists'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  当前分页返回记录数
    * maxRecords  返回记录总数，一个工作空间最多只能创建50条数据连接
    * totalSize  返回当前空间内创建连接的总数
    * dataConnectionLists  返回数据连接列表
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'maxRecords' => 'getMaxRecords',
            'totalSize' => 'getTotalSize',
            'dataConnectionLists' => 'getDataConnectionLists'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['maxRecords'] = isset($data['maxRecords']) ? $data['maxRecords'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['dataConnectionLists'] = isset($data['dataConnectionLists']) ? $data['dataConnectionLists'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 50)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxRecords']) && ($this->container['maxRecords'] > 50)) {
                $invalidProperties[] = "invalid value for 'maxRecords', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['maxRecords']) && ($this->container['maxRecords'] < 50)) {
                $invalidProperties[] = "invalid value for 'maxRecords', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be bigger than or equal to 0.";
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
    * Gets count
    *  当前分页返回记录数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 当前分页返回记录数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets maxRecords
    *  返回记录总数，一个工作空间最多只能创建50条数据连接
    *
    * @return int|null
    */
    public function getMaxRecords()
    {
        return $this->container['maxRecords'];
    }

    /**
    * Sets maxRecords
    *
    * @param int|null $maxRecords 返回记录总数，一个工作空间最多只能创建50条数据连接
    *
    * @return $this
    */
    public function setMaxRecords($maxRecords)
    {
        $this->container['maxRecords'] = $maxRecords;
        return $this;
    }

    /**
    * Gets totalSize
    *  返回当前空间内创建连接的总数
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 返回当前空间内创建连接的总数
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets dataConnectionLists
    *  返回数据连接列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceView[]|null
    */
    public function getDataConnectionLists()
    {
        return $this->container['dataConnectionLists'];
    }

    /**
    * Sets dataConnectionLists
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApigDataSourceView[]|null $dataConnectionLists 返回数据连接列表
    *
    * @return $this
    */
    public function setDataConnectionLists($dataConnectionLists)
    {
        $this->container['dataConnectionLists'] = $dataConnectionLists;
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

