<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonitorItemDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonitorItemDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * interval  采集间隔
    * collectorId  采集器ID
    * configItemList  采集参数配置列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'interval' => 'int',
            'collectorId' => 'int',
            'configItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\ConfigItemValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * interval  采集间隔
    * collectorId  采集器ID
    * configItemList  采集参数配置列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'interval' => 'int64',
        'collectorId' => 'int64',
        'configItemList' => null
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
    * interval  采集间隔
    * collectorId  采集器ID
    * configItemList  采集参数配置列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'interval' => 'interval',
            'collectorId' => 'collector_id',
            'configItemList' => 'config_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * interval  采集间隔
    * collectorId  采集器ID
    * configItemList  采集参数配置列表
    *
    * @var string[]
    */
    protected static $setters = [
            'interval' => 'setInterval',
            'collectorId' => 'setCollectorId',
            'configItemList' => 'setConfigItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * interval  采集间隔
    * collectorId  采集器ID
    * configItemList  采集参数配置列表
    *
    * @var string[]
    */
    protected static $getters = [
            'interval' => 'getInterval',
            'collectorId' => 'getCollectorId',
            'configItemList' => 'getConfigItemList'
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
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['collectorId'] = isset($data['collectorId']) ? $data['collectorId'] : null;
        $this->container['configItemList'] = isset($data['configItemList']) ? $data['configItemList'] : null;
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
    * Gets interval
    *  采集间隔
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 采集间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets collectorId
    *  采集器ID
    *
    * @return int|null
    */
    public function getCollectorId()
    {
        return $this->container['collectorId'];
    }

    /**
    * Sets collectorId
    *
    * @param int|null $collectorId 采集器ID
    *
    * @return $this
    */
    public function setCollectorId($collectorId)
    {
        $this->container['collectorId'] = $collectorId;
        return $this;
    }

    /**
    * Gets configItemList
    *  采集参数配置列表
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ConfigItemValue[]|null
    */
    public function getConfigItemList()
    {
        return $this->container['configItemList'];
    }

    /**
    * Sets configItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ConfigItemValue[]|null $configItemList 采集参数配置列表
    *
    * @return $this
    */
    public function setConfigItemList($configItemList)
    {
        $this->container['configItemList'] = $configItemList;
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

