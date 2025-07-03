<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEnvMonitorItemsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEnvMonitorItemsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryInfoList  采集器类别集合。
    * monitorItemInfoList  监控项集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryInfoList' => '\HuaweiCloud\SDK\Apm\V1\Model\CollectorCategoryInfo[]',
            'monitorItemInfoList' => '\HuaweiCloud\SDK\Apm\V1\Model\MonitorItemEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryInfoList  采集器类别集合。
    * monitorItemInfoList  监控项集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryInfoList' => null,
        'monitorItemInfoList' => null
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
    * categoryInfoList  采集器类别集合。
    * monitorItemInfoList  监控项集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryInfoList' => 'category_info_list',
            'monitorItemInfoList' => 'monitor_item_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryInfoList  采集器类别集合。
    * monitorItemInfoList  监控项集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryInfoList' => 'setCategoryInfoList',
            'monitorItemInfoList' => 'setMonitorItemInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryInfoList  采集器类别集合。
    * monitorItemInfoList  监控项集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryInfoList' => 'getCategoryInfoList',
            'monitorItemInfoList' => 'getMonitorItemInfoList'
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
        $this->container['categoryInfoList'] = isset($data['categoryInfoList']) ? $data['categoryInfoList'] : null;
        $this->container['monitorItemInfoList'] = isset($data['monitorItemInfoList']) ? $data['monitorItemInfoList'] : null;
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
    * Gets categoryInfoList
    *  采集器类别集合。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\CollectorCategoryInfo[]|null
    */
    public function getCategoryInfoList()
    {
        return $this->container['categoryInfoList'];
    }

    /**
    * Sets categoryInfoList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\CollectorCategoryInfo[]|null $categoryInfoList 采集器类别集合。
    *
    * @return $this
    */
    public function setCategoryInfoList($categoryInfoList)
    {
        $this->container['categoryInfoList'] = $categoryInfoList;
        return $this;
    }

    /**
    * Gets monitorItemInfoList
    *  监控项集合。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\MonitorItemEntity[]|null
    */
    public function getMonitorItemInfoList()
    {
        return $this->container['monitorItemInfoList'];
    }

    /**
    * Sets monitorItemInfoList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\MonitorItemEntity[]|null $monitorItemInfoList 监控项集合。
    *
    * @return $this
    */
    public function setMonitorItemInfoList($monitorItemInfoList)
    {
        $this->container['monitorItemInfoList'] = $monitorItemInfoList;
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

