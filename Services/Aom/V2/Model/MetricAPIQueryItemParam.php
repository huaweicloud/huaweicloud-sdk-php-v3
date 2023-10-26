<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricAPIQueryItemParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricAPIQueryItemParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inventoryId  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    * metricItems  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inventoryId' => 'string',
            'metricItems' => '\HuaweiCloud\SDK\Aom\V2\Model\QueryMetricItemOptionParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inventoryId  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    * metricItems  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inventoryId' => null,
        'metricItems' => null
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
    * inventoryId  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    * metricItems  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inventoryId' => 'inventoryId',
            'metricItems' => 'metricItems'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inventoryId  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    * metricItems  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'inventoryId' => 'setInventoryId',
            'metricItems' => 'setMetricItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inventoryId  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    * metricItems  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'inventoryId' => 'getInventoryId',
            'metricItems' => 'getMetricItems'
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
        $this->container['inventoryId'] = isset($data['inventoryId']) ? $data['inventoryId'] : null;
        $this->container['metricItems'] = isset($data['metricItems']) ? $data['metricItems'] : null;
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
    * Gets inventoryId
    *  资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    *
    * @return string|null
    */
    public function getInventoryId()
    {
        return $this->container['inventoryId'];
    }

    /**
    * Sets inventoryId
    *
    * @param string|null $inventoryId 资源编号,格式为resType_resId。其中resType部分的枚举值为：host, application, instance, container, process, network, storage, volume。当URI参数中的type取值为“inventory”时，通过该参数查询关联的指标，不再使用metricItems数组中的信息。
    *
    * @return $this
    */
    public function setInventoryId($inventoryId)
    {
        $this->container['inventoryId'] = $inventoryId;
        return $this;
    }

    /**
    * Gets metricItems
    *  当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\QueryMetricItemOptionParam[]|null
    */
    public function getMetricItems()
    {
        return $this->container['metricItems'];
    }

    /**
    * Sets metricItems
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\QueryMetricItemOptionParam[]|null $metricItems 当URI参数中的type取值不为“inventory”时，就通过该数组传递的参数信息进行指标查询。
    *
    * @return $this
    */
    public function setMetricItems($metricItems)
    {
        $this->container['metricItems'] = $metricItems;
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

