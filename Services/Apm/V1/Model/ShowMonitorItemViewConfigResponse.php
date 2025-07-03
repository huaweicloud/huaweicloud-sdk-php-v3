<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMonitorItemViewConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMonitorItemViewConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  标题。
    * collectorName  采集器名称。
    * viewRowList  视图的列表，内部每个List代表的是一行图表。
    * style  类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'collectorName' => 'string',
            'viewRowList' => '\HuaweiCloud\SDK\Apm\V1\Model\ViewRow[]',
            'style' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  标题。
    * collectorName  采集器名称。
    * viewRowList  视图的列表，内部每个List代表的是一行图表。
    * style  类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'collectorName' => null,
        'viewRowList' => null,
        'style' => null
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
    * title  标题。
    * collectorName  采集器名称。
    * viewRowList  视图的列表，内部每个List代表的是一行图表。
    * style  类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'collectorName' => 'collector_name',
            'viewRowList' => 'view_row_list',
            'style' => 'style'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  标题。
    * collectorName  采集器名称。
    * viewRowList  视图的列表，内部每个List代表的是一行图表。
    * style  类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'collectorName' => 'setCollectorName',
            'viewRowList' => 'setViewRowList',
            'style' => 'setStyle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  标题。
    * collectorName  采集器名称。
    * viewRowList  视图的列表，内部每个List代表的是一行图表。
    * style  类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'collectorName' => 'getCollectorName',
            'viewRowList' => 'getViewRowList',
            'style' => 'getStyle'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['collectorName'] = isset($data['collectorName']) ? $data['collectorName'] : null;
        $this->container['viewRowList'] = isset($data['viewRowList']) ? $data['viewRowList'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
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
    * Gets title
    *  标题。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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
    * Gets viewRowList
    *  视图的列表，内部每个List代表的是一行图表。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ViewRow[]|null
    */
    public function getViewRowList()
    {
        return $this->container['viewRowList'];
    }

    /**
    * Sets viewRowList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ViewRow[]|null $viewRowList 视图的列表，内部每个List代表的是一行图表。
    *
    * @return $this
    */
    public function setViewRowList($viewRowList)
    {
        $this->container['viewRowList'] = $viewRowList;
        return $this;
    }

    /**
    * Gets style
    *  类型。
    *
    * @return string|null
    */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
    * Sets style
    *
    * @param string|null $style 类型。
    *
    * @return $this
    */
    public function setStyle($style)
    {
        $this->container['style'] = $style;
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

