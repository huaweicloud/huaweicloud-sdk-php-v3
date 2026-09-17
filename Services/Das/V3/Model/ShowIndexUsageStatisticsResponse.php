<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIndexUsageStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIndexUsageStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectTime  采集时间(ms)
    * totalIndexUsageCount  索引使用总数
    * indexSizeMb  索引总空间(MB)
    * fragmentationGl30Count  碎片率大于30%的数量
    * keyLookupLt100Count  查找次数小于100的数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectTime' => 'int',
            'totalIndexUsageCount' => 'int',
            'indexSizeMb' => 'double',
            'fragmentationGl30Count' => 'int',
            'keyLookupLt100Count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectTime  采集时间(ms)
    * totalIndexUsageCount  索引使用总数
    * indexSizeMb  索引总空间(MB)
    * fragmentationGl30Count  碎片率大于30%的数量
    * keyLookupLt100Count  查找次数小于100的数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectTime' => 'int64',
        'totalIndexUsageCount' => 'int64',
        'indexSizeMb' => 'double',
        'fragmentationGl30Count' => 'int64',
        'keyLookupLt100Count' => 'int64'
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
    * collectTime  采集时间(ms)
    * totalIndexUsageCount  索引使用总数
    * indexSizeMb  索引总空间(MB)
    * fragmentationGl30Count  碎片率大于30%的数量
    * keyLookupLt100Count  查找次数小于100的数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectTime' => 'collect_time',
            'totalIndexUsageCount' => 'total_index_usage_count',
            'indexSizeMb' => 'index_size_mb',
            'fragmentationGl30Count' => 'fragmentation_gl30_count',
            'keyLookupLt100Count' => 'key_lookup_lt100_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectTime  采集时间(ms)
    * totalIndexUsageCount  索引使用总数
    * indexSizeMb  索引总空间(MB)
    * fragmentationGl30Count  碎片率大于30%的数量
    * keyLookupLt100Count  查找次数小于100的数量
    *
    * @var string[]
    */
    protected static $setters = [
            'collectTime' => 'setCollectTime',
            'totalIndexUsageCount' => 'setTotalIndexUsageCount',
            'indexSizeMb' => 'setIndexSizeMb',
            'fragmentationGl30Count' => 'setFragmentationGl30Count',
            'keyLookupLt100Count' => 'setKeyLookupLt100Count'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectTime  采集时间(ms)
    * totalIndexUsageCount  索引使用总数
    * indexSizeMb  索引总空间(MB)
    * fragmentationGl30Count  碎片率大于30%的数量
    * keyLookupLt100Count  查找次数小于100的数量
    *
    * @var string[]
    */
    protected static $getters = [
            'collectTime' => 'getCollectTime',
            'totalIndexUsageCount' => 'getTotalIndexUsageCount',
            'indexSizeMb' => 'getIndexSizeMb',
            'fragmentationGl30Count' => 'getFragmentationGl30Count',
            'keyLookupLt100Count' => 'getKeyLookupLt100Count'
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
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['totalIndexUsageCount'] = isset($data['totalIndexUsageCount']) ? $data['totalIndexUsageCount'] : null;
        $this->container['indexSizeMb'] = isset($data['indexSizeMb']) ? $data['indexSizeMb'] : null;
        $this->container['fragmentationGl30Count'] = isset($data['fragmentationGl30Count']) ? $data['fragmentationGl30Count'] : null;
        $this->container['keyLookupLt100Count'] = isset($data['keyLookupLt100Count']) ? $data['keyLookupLt100Count'] : null;
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
    * Gets collectTime
    *  采集时间(ms)
    *
    * @return int|null
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int|null $collectTime 采集时间(ms)
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets totalIndexUsageCount
    *  索引使用总数
    *
    * @return int|null
    */
    public function getTotalIndexUsageCount()
    {
        return $this->container['totalIndexUsageCount'];
    }

    /**
    * Sets totalIndexUsageCount
    *
    * @param int|null $totalIndexUsageCount 索引使用总数
    *
    * @return $this
    */
    public function setTotalIndexUsageCount($totalIndexUsageCount)
    {
        $this->container['totalIndexUsageCount'] = $totalIndexUsageCount;
        return $this;
    }

    /**
    * Gets indexSizeMb
    *  索引总空间(MB)
    *
    * @return double|null
    */
    public function getIndexSizeMb()
    {
        return $this->container['indexSizeMb'];
    }

    /**
    * Sets indexSizeMb
    *
    * @param double|null $indexSizeMb 索引总空间(MB)
    *
    * @return $this
    */
    public function setIndexSizeMb($indexSizeMb)
    {
        $this->container['indexSizeMb'] = $indexSizeMb;
        return $this;
    }

    /**
    * Gets fragmentationGl30Count
    *  碎片率大于30%的数量
    *
    * @return int|null
    */
    public function getFragmentationGl30Count()
    {
        return $this->container['fragmentationGl30Count'];
    }

    /**
    * Sets fragmentationGl30Count
    *
    * @param int|null $fragmentationGl30Count 碎片率大于30%的数量
    *
    * @return $this
    */
    public function setFragmentationGl30Count($fragmentationGl30Count)
    {
        $this->container['fragmentationGl30Count'] = $fragmentationGl30Count;
        return $this;
    }

    /**
    * Gets keyLookupLt100Count
    *  查找次数小于100的数量
    *
    * @return int|null
    */
    public function getKeyLookupLt100Count()
    {
        return $this->container['keyLookupLt100Count'];
    }

    /**
    * Sets keyLookupLt100Count
    *
    * @param int|null $keyLookupLt100Count 查找次数小于100的数量
    *
    * @return $this
    */
    public function setKeyLookupLt100Count($keyLookupLt100Count)
    {
        $this->container['keyLookupLt100Count'] = $keyLookupLt100Count;
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

