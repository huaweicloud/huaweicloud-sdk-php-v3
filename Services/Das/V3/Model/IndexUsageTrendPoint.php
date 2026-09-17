<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndexUsageTrendPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndexUsageTrendPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectTime  采集时间
    * maxFragmentationPercentage  TOP1碎片率
    * indexSizeMb  总空间大小(MB)
    * pageCount  页数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectTime' => 'int',
            'maxFragmentationPercentage' => 'double',
            'indexSizeMb' => 'double',
            'pageCount' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectTime  采集时间
    * maxFragmentationPercentage  TOP1碎片率
    * indexSizeMb  总空间大小(MB)
    * pageCount  页数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectTime' => 'int64',
        'maxFragmentationPercentage' => 'double',
        'indexSizeMb' => 'double',
        'pageCount' => 'double'
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
    * collectTime  采集时间
    * maxFragmentationPercentage  TOP1碎片率
    * indexSizeMb  总空间大小(MB)
    * pageCount  页数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectTime' => 'collect_time',
            'maxFragmentationPercentage' => 'max_fragmentation_percentage',
            'indexSizeMb' => 'index_size_mb',
            'pageCount' => 'page_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectTime  采集时间
    * maxFragmentationPercentage  TOP1碎片率
    * indexSizeMb  总空间大小(MB)
    * pageCount  页数量
    *
    * @var string[]
    */
    protected static $setters = [
            'collectTime' => 'setCollectTime',
            'maxFragmentationPercentage' => 'setMaxFragmentationPercentage',
            'indexSizeMb' => 'setIndexSizeMb',
            'pageCount' => 'setPageCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectTime  采集时间
    * maxFragmentationPercentage  TOP1碎片率
    * indexSizeMb  总空间大小(MB)
    * pageCount  页数量
    *
    * @var string[]
    */
    protected static $getters = [
            'collectTime' => 'getCollectTime',
            'maxFragmentationPercentage' => 'getMaxFragmentationPercentage',
            'indexSizeMb' => 'getIndexSizeMb',
            'pageCount' => 'getPageCount'
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
        $this->container['maxFragmentationPercentage'] = isset($data['maxFragmentationPercentage']) ? $data['maxFragmentationPercentage'] : null;
        $this->container['indexSizeMb'] = isset($data['indexSizeMb']) ? $data['indexSizeMb'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
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
    *  采集时间
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
    * @param int|null $collectTime 采集时间
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets maxFragmentationPercentage
    *  TOP1碎片率
    *
    * @return double|null
    */
    public function getMaxFragmentationPercentage()
    {
        return $this->container['maxFragmentationPercentage'];
    }

    /**
    * Sets maxFragmentationPercentage
    *
    * @param double|null $maxFragmentationPercentage TOP1碎片率
    *
    * @return $this
    */
    public function setMaxFragmentationPercentage($maxFragmentationPercentage)
    {
        $this->container['maxFragmentationPercentage'] = $maxFragmentationPercentage;
        return $this;
    }

    /**
    * Gets indexSizeMb
    *  总空间大小(MB)
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
    * @param double|null $indexSizeMb 总空间大小(MB)
    *
    * @return $this
    */
    public function setIndexSizeMb($indexSizeMb)
    {
        $this->container['indexSizeMb'] = $indexSizeMb;
        return $this;
    }

    /**
    * Gets pageCount
    *  页数量
    *
    * @return double|null
    */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
    * Sets pageCount
    *
    * @param double|null $pageCount 页数量
    *
    * @return $this
    */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;
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

