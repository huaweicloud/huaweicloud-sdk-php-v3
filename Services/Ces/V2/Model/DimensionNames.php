<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DimensionNames implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DimensionNames';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    * event  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string[]',
            'event' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    * event  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'event' => null
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
    * metric  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    * event  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'event' => 'event'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    * event  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'event' => 'setEvent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    * event  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'event' => 'getEvent'
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
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
    * Gets metric
    *  启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    *
    * @return string[]
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string[] $metric 启用一键告警关联指标告警规则的维度列表，未指定的维度默认不开启
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets event
    *  启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @return string[]
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param string[] $event 启用一键告警关联事件告警规则的维度列表，未指定的维度默认不开启，其中\"\"代表全部资源
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
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

