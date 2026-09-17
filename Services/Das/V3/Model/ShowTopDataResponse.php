<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topDataList  Top库表数据列表
    * totalCount  总数
    * collectTimestamp  采集时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topDataList' => '\HuaweiCloud\SDK\Das\V3\Model\TopDataInfo[]',
            'totalCount' => 'int',
            'collectTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topDataList  Top库表数据列表
    * totalCount  总数
    * collectTimestamp  采集时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topDataList' => null,
        'totalCount' => 'int32',
        'collectTimestamp' => 'int64'
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
    * topDataList  Top库表数据列表
    * totalCount  总数
    * collectTimestamp  采集时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topDataList' => 'top_data_list',
            'totalCount' => 'total_count',
            'collectTimestamp' => 'collect_timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topDataList  Top库表数据列表
    * totalCount  总数
    * collectTimestamp  采集时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'topDataList' => 'setTopDataList',
            'totalCount' => 'setTotalCount',
            'collectTimestamp' => 'setCollectTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topDataList  Top库表数据列表
    * totalCount  总数
    * collectTimestamp  采集时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'topDataList' => 'getTopDataList',
            'totalCount' => 'getTotalCount',
            'collectTimestamp' => 'getCollectTimestamp'
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
        $this->container['topDataList'] = isset($data['topDataList']) ? $data['topDataList'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['collectTimestamp'] = isset($data['collectTimestamp']) ? $data['collectTimestamp'] : null;
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
    * Gets topDataList
    *  Top库表数据列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopDataInfo[]|null
    */
    public function getTopDataList()
    {
        return $this->container['topDataList'];
    }

    /**
    * Sets topDataList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopDataInfo[]|null $topDataList Top库表数据列表
    *
    * @return $this
    */
    public function setTopDataList($topDataList)
    {
        $this->container['topDataList'] = $topDataList;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数
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
    * @param int|null $totalCount 总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets collectTimestamp
    *  采集时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getCollectTimestamp()
    {
        return $this->container['collectTimestamp'];
    }

    /**
    * Sets collectTimestamp
    *
    * @param int|null $collectTimestamp 采集时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setCollectTimestamp($collectTimestamp)
    {
        $this->container['collectTimestamp'] = $collectTimestamp;
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

