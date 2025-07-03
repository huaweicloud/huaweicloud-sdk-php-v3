<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrontLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrontLine';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pointList  数据点集合。
    * title  标题。
    * unit  单位。
    * precision  百分比。
    * dataType  日期类型。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pointList' => '\HuaweiCloud\SDK\Apm\V1\Model\FrontPoint[]',
            'title' => 'string',
            'unit' => 'string',
            'precision' => 'int',
            'dataType' => 'string',
            'visible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pointList  数据点集合。
    * title  标题。
    * unit  单位。
    * precision  百分比。
    * dataType  日期类型。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pointList' => null,
        'title' => null,
        'unit' => null,
        'precision' => 'int32',
        'dataType' => null,
        'visible' => null
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
    * pointList  数据点集合。
    * title  标题。
    * unit  单位。
    * precision  百分比。
    * dataType  日期类型。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pointList' => 'point_list',
            'title' => 'title',
            'unit' => 'unit',
            'precision' => 'precision',
            'dataType' => 'data_type',
            'visible' => 'visible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pointList  数据点集合。
    * title  标题。
    * unit  单位。
    * precision  百分比。
    * dataType  日期类型。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $setters = [
            'pointList' => 'setPointList',
            'title' => 'setTitle',
            'unit' => 'setUnit',
            'precision' => 'setPrecision',
            'dataType' => 'setDataType',
            'visible' => 'setVisible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pointList  数据点集合。
    * title  标题。
    * unit  单位。
    * precision  百分比。
    * dataType  日期类型。
    * visible  是否可见。
    *
    * @var string[]
    */
    protected static $getters = [
            'pointList' => 'getPointList',
            'title' => 'getTitle',
            'unit' => 'getUnit',
            'precision' => 'getPrecision',
            'dataType' => 'getDataType',
            'visible' => 'getVisible'
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
        $this->container['pointList'] = isset($data['pointList']) ? $data['pointList'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
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
    * Gets pointList
    *  数据点集合。
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\FrontPoint[]|null
    */
    public function getPointList()
    {
        return $this->container['pointList'];
    }

    /**
    * Sets pointList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\FrontPoint[]|null $pointList 数据点集合。
    *
    * @return $this
    */
    public function setPointList($pointList)
    {
        $this->container['pointList'] = $pointList;
        return $this;
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
    * Gets unit
    *  单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets precision
    *  百分比。
    *
    * @return int|null
    */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
    * Sets precision
    *
    * @param int|null $precision 百分比。
    *
    * @return $this
    */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;
        return $this;
    }

    /**
    * Gets dataType
    *  日期类型。
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 日期类型。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets visible
    *  是否可见。
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible 是否可见。
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
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

