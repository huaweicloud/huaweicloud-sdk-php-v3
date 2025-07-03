<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineViewConfigModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineViewConfigModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricSet  视图对应的指标集的名称。
    * filterPrefix  过滤参数。
    * lineViewItemList  视图函数集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricSet' => 'string',
            'filterPrefix' => 'string',
            'lineViewItemList' => '\HuaweiCloud\SDK\Apm\V1\Model\LineViewItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricSet  视图对应的指标集的名称。
    * filterPrefix  过滤参数。
    * lineViewItemList  视图函数集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricSet' => null,
        'filterPrefix' => null,
        'lineViewItemList' => null
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
    * metricSet  视图对应的指标集的名称。
    * filterPrefix  过滤参数。
    * lineViewItemList  视图函数集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricSet' => 'metric_set',
            'filterPrefix' => 'filter_prefix',
            'lineViewItemList' => 'line_view_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricSet  视图对应的指标集的名称。
    * filterPrefix  过滤参数。
    * lineViewItemList  视图函数集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'metricSet' => 'setMetricSet',
            'filterPrefix' => 'setFilterPrefix',
            'lineViewItemList' => 'setLineViewItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricSet  视图对应的指标集的名称。
    * filterPrefix  过滤参数。
    * lineViewItemList  视图函数集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'metricSet' => 'getMetricSet',
            'filterPrefix' => 'getFilterPrefix',
            'lineViewItemList' => 'getLineViewItemList'
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
        $this->container['metricSet'] = isset($data['metricSet']) ? $data['metricSet'] : null;
        $this->container['filterPrefix'] = isset($data['filterPrefix']) ? $data['filterPrefix'] : null;
        $this->container['lineViewItemList'] = isset($data['lineViewItemList']) ? $data['lineViewItemList'] : null;
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
    * Gets metricSet
    *  视图对应的指标集的名称。
    *
    * @return string|null
    */
    public function getMetricSet()
    {
        return $this->container['metricSet'];
    }

    /**
    * Sets metricSet
    *
    * @param string|null $metricSet 视图对应的指标集的名称。
    *
    * @return $this
    */
    public function setMetricSet($metricSet)
    {
        $this->container['metricSet'] = $metricSet;
        return $this;
    }

    /**
    * Gets filterPrefix
    *  过滤参数。
    *
    * @return string|null
    */
    public function getFilterPrefix()
    {
        return $this->container['filterPrefix'];
    }

    /**
    * Sets filterPrefix
    *
    * @param string|null $filterPrefix 过滤参数。
    *
    * @return $this
    */
    public function setFilterPrefix($filterPrefix)
    {
        $this->container['filterPrefix'] = $filterPrefix;
        return $this;
    }

    /**
    * Gets lineViewItemList
    *  视图函数集合。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\LineViewItem[]|null
    */
    public function getLineViewItemList()
    {
        return $this->container['lineViewItemList'];
    }

    /**
    * Sets lineViewItemList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\LineViewItem[]|null $lineViewItemList 视图函数集合。
    *
    * @return $this
    */
    public function setLineViewItemList($lineViewItemList)
    {
        $this->container['lineViewItemList'] = $lineViewItemList;
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

