<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Conversion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Conversion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    * refMeasureId  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    * conversionRatio  |参数名称：转换比率| |参数的约束及描述：转换比率|
    * measureType  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'measureId' => 'int',
            'refMeasureId' => 'int',
            'conversionRatio' => 'int',
            'measureType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    * refMeasureId  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    * conversionRatio  |参数名称：转换比率| |参数的约束及描述：转换比率|
    * measureType  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'measureId' => 'int32',
        'refMeasureId' => 'int32',
        'conversionRatio' => 'int64',
        'measureType' => 'int32'
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
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    * refMeasureId  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    * conversionRatio  |参数名称：转换比率| |参数的约束及描述：转换比率|
    * measureType  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'measureId' => 'measure_id',
            'refMeasureId' => 'ref_measure_id',
            'conversionRatio' => 'conversion_ratio',
            'measureType' => 'measure_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    * refMeasureId  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    * conversionRatio  |参数名称：转换比率| |参数的约束及描述：转换比率|
    * measureType  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @var string[]
    */
    protected static $setters = [
            'measureId' => 'setMeasureId',
            'refMeasureId' => 'setRefMeasureId',
            'conversionRatio' => 'setConversionRatio',
            'measureType' => 'setMeasureType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * measureId  |参数名称：度量单位| |参数的约束及描述：度量单位|
    * refMeasureId  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    * conversionRatio  |参数名称：转换比率| |参数的约束及描述：转换比率|
    * measureType  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @var string[]
    */
    protected static $getters = [
            'measureId' => 'getMeasureId',
            'refMeasureId' => 'getRefMeasureId',
            'conversionRatio' => 'getConversionRatio',
            'measureType' => 'getMeasureType'
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
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['refMeasureId'] = isset($data['refMeasureId']) ? $data['refMeasureId'] : null;
        $this->container['conversionRatio'] = isset($data['conversionRatio']) ? $data['conversionRatio'] : null;
        $this->container['measureType'] = isset($data['measureType']) ? $data['measureType'] : null;
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
    * Gets measureId
    *  |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId |参数名称：度量单位| |参数的约束及描述：度量单位|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets refMeasureId
    *  |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    *
    * @return int|null
    */
    public function getRefMeasureId()
    {
        return $this->container['refMeasureId'];
    }

    /**
    * Sets refMeasureId
    *
    * @param int|null $refMeasureId |参数名称：转换的度量单位| |参数的约束及描述：转换的度量单位|
    *
    * @return $this
    */
    public function setRefMeasureId($refMeasureId)
    {
        $this->container['refMeasureId'] = $refMeasureId;
        return $this;
    }

    /**
    * Gets conversionRatio
    *  |参数名称：转换比率| |参数的约束及描述：转换比率|
    *
    * @return int|null
    */
    public function getConversionRatio()
    {
        return $this->container['conversionRatio'];
    }

    /**
    * Sets conversionRatio
    *
    * @param int|null $conversionRatio |参数名称：转换比率| |参数的约束及描述：转换比率|
    *
    * @return $this
    */
    public function setConversionRatio($conversionRatio)
    {
        $this->container['conversionRatio'] = $conversionRatio;
        return $this;
    }

    /**
    * Gets measureType
    *  |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @return int|null
    */
    public function getMeasureType()
    {
        return $this->container['measureType'];
    }

    /**
    * Sets measureType
    *
    * @param int|null $measureType |参数名称：度量类型| |参数的约束及描述：度量类型|
    *
    * @return $this
    */
    public function setMeasureType($measureType)
    {
        $this->container['measureType'] = $measureType;
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

