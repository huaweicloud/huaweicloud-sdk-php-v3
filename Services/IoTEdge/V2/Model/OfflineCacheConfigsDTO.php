<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OfflineCacheConfigsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OfflineCacheConfigsDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishOrder  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    * period  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    * capacity  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishOrder' => 'string',
            'period' => 'int',
            'capacity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishOrder  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    * period  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    * capacity  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishOrder' => null,
        'period' => 'int32',
        'capacity' => 'int32'
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
    * publishOrder  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    * period  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    * capacity  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishOrder' => 'publish_order',
            'period' => 'period',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishOrder  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    * period  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    * capacity  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @var string[]
    */
    protected static $setters = [
            'publishOrder' => 'setPublishOrder',
            'period' => 'setPeriod',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishOrder  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    * period  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    * capacity  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @var string[]
    */
    protected static $getters = [
            'publishOrder' => 'getPublishOrder',
            'period' => 'getPeriod',
            'capacity' => 'getCapacity'
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
        $this->container['publishOrder'] = isset($data['publishOrder']) ? $data['publishOrder'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publishOrder']) && !preg_match("/(sequential|realtime_first)/", $this->container['publishOrder'])) {
                $invalidProperties[] = "invalid value for 'publishOrder', must be conform to the pattern /(sequential|realtime_first)/.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] > 14)) {
                $invalidProperties[] = "invalid value for 'period', must be smaller than or equal to 14.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] < -1)) {
                $invalidProperties[] = "invalid value for 'period', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['capacity']) && ($this->container['capacity'] > 8192)) {
                $invalidProperties[] = "invalid value for 'capacity', must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['capacity']) && ($this->container['capacity'] < 500)) {
                $invalidProperties[] = "invalid value for 'capacity', must be bigger than or equal to 500.";
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
    * Gets publishOrder
    *  数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    *
    * @return string|null
    */
    public function getPublishOrder()
    {
        return $this->container['publishOrder'];
    }

    /**
    * Sets publishOrder
    *
    * @param string|null $publishOrder 数据上报优先级，可选项：realtime_first实时数据优先 sequential按时序上报，默认realtime_first
    *
    * @return $this
    */
    public function setPublishOrder($publishOrder)
    {
        $this->container['publishOrder'] = $publishOrder;
        return $this;
    }

    /**
    * Gets period
    *  节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 节点离线缓存数据的储存天数，默认7，取值范围-1~14，-1表示存储天数没有限制
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets capacity
    *  节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @return int|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param int|null $capacity 节点离线缓存容量，单位MB，默认2048，取值范围500-8192
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
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

