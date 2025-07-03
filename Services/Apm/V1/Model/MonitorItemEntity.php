<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MonitorItemEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MonitorItemEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categoryId  采集器类别id。
    * collectorName  采集器名称。
    * displayName  采集器类别展示名称。
    * showInTotal  是否展示标题。
    * monitorItemId  监控项id。
    * disabled  是否禁用。
    * collectorId  采集器id。
    * sequence  序列号。
    * collectInterval  默认数据采集间隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categoryId' => 'int',
            'collectorName' => 'string',
            'displayName' => 'string',
            'showInTotal' => 'bool',
            'monitorItemId' => 'int',
            'disabled' => 'bool',
            'collectorId' => 'int',
            'sequence' => 'int',
            'collectInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categoryId  采集器类别id。
    * collectorName  采集器名称。
    * displayName  采集器类别展示名称。
    * showInTotal  是否展示标题。
    * monitorItemId  监控项id。
    * disabled  是否禁用。
    * collectorId  采集器id。
    * sequence  序列号。
    * collectInterval  默认数据采集间隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categoryId' => 'int32',
        'collectorName' => null,
        'displayName' => null,
        'showInTotal' => null,
        'monitorItemId' => 'int64',
        'disabled' => null,
        'collectorId' => 'int32',
        'sequence' => 'int32',
        'collectInterval' => 'int32'
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
    * categoryId  采集器类别id。
    * collectorName  采集器名称。
    * displayName  采集器类别展示名称。
    * showInTotal  是否展示标题。
    * monitorItemId  监控项id。
    * disabled  是否禁用。
    * collectorId  采集器id。
    * sequence  序列号。
    * collectInterval  默认数据采集间隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categoryId' => 'category_id',
            'collectorName' => 'collector_name',
            'displayName' => 'display_name',
            'showInTotal' => 'show_in_total',
            'monitorItemId' => 'monitor_item_id',
            'disabled' => 'disabled',
            'collectorId' => 'collector_id',
            'sequence' => 'sequence',
            'collectInterval' => 'collect_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categoryId  采集器类别id。
    * collectorName  采集器名称。
    * displayName  采集器类别展示名称。
    * showInTotal  是否展示标题。
    * monitorItemId  监控项id。
    * disabled  是否禁用。
    * collectorId  采集器id。
    * sequence  序列号。
    * collectInterval  默认数据采集间隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'categoryId' => 'setCategoryId',
            'collectorName' => 'setCollectorName',
            'displayName' => 'setDisplayName',
            'showInTotal' => 'setShowInTotal',
            'monitorItemId' => 'setMonitorItemId',
            'disabled' => 'setDisabled',
            'collectorId' => 'setCollectorId',
            'sequence' => 'setSequence',
            'collectInterval' => 'setCollectInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categoryId  采集器类别id。
    * collectorName  采集器名称。
    * displayName  采集器类别展示名称。
    * showInTotal  是否展示标题。
    * monitorItemId  监控项id。
    * disabled  是否禁用。
    * collectorId  采集器id。
    * sequence  序列号。
    * collectInterval  默认数据采集间隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'categoryId' => 'getCategoryId',
            'collectorName' => 'getCollectorName',
            'displayName' => 'getDisplayName',
            'showInTotal' => 'getShowInTotal',
            'monitorItemId' => 'getMonitorItemId',
            'disabled' => 'getDisabled',
            'collectorId' => 'getCollectorId',
            'sequence' => 'getSequence',
            'collectInterval' => 'getCollectInterval'
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
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['collectorName'] = isset($data['collectorName']) ? $data['collectorName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['showInTotal'] = isset($data['showInTotal']) ? $data['showInTotal'] : null;
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['collectorId'] = isset($data['collectorId']) ? $data['collectorId'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['collectInterval'] = isset($data['collectInterval']) ? $data['collectInterval'] : null;
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
    * Gets categoryId
    *  采集器类别id。
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 采集器类别id。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets collectorName
    *  采集器名称。
    *
    * @return string|null
    */
    public function getCollectorName()
    {
        return $this->container['collectorName'];
    }

    /**
    * Sets collectorName
    *
    * @param string|null $collectorName 采集器名称。
    *
    * @return $this
    */
    public function setCollectorName($collectorName)
    {
        $this->container['collectorName'] = $collectorName;
        return $this;
    }

    /**
    * Gets displayName
    *  采集器类别展示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 采集器类别展示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets showInTotal
    *  是否展示标题。
    *
    * @return bool|null
    */
    public function getShowInTotal()
    {
        return $this->container['showInTotal'];
    }

    /**
    * Sets showInTotal
    *
    * @param bool|null $showInTotal 是否展示标题。
    *
    * @return $this
    */
    public function setShowInTotal($showInTotal)
    {
        $this->container['showInTotal'] = $showInTotal;
        return $this;
    }

    /**
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int|null
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int|null $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets disabled
    *  是否禁用。
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否禁用。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets collectorId
    *  采集器id。
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
    * @param int|null $collectorId 采集器id。
    *
    * @return $this
    */
    public function setCollectorId($collectorId)
    {
        $this->container['collectorId'] = $collectorId;
        return $this;
    }

    /**
    * Gets sequence
    *  序列号。
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序列号。
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets collectInterval
    *  默认数据采集间隔。
    *
    * @return int|null
    */
    public function getCollectInterval()
    {
        return $this->container['collectInterval'];
    }

    /**
    * Sets collectInterval
    *
    * @param int|null $collectInterval 默认数据采集间隔。
    *
    * @return $this
    */
    public function setCollectInterval($collectInterval)
    {
        $this->container['collectInterval'] = $collectInterval;
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

