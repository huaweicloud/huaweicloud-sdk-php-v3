<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InputRemoteConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Input_remote_constraint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataType  数据输入类型，包括数据存储位置、数据集两种方式。
    * attributes  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataType' => 'string',
            'attributes' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataType  数据输入类型，包括数据存储位置、数据集两种方式。
    * attributes  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataType' => null,
        'attributes' => null
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
    * dataType  数据输入类型，包括数据存储位置、数据集两种方式。
    * attributes  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataType' => 'data_type',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataType  数据输入类型，包括数据存储位置、数据集两种方式。
    * attributes  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataType' => 'setDataType',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataType  数据输入类型，包括数据存储位置、数据集两种方式。
    * attributes  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataType' => 'getDataType',
            'attributes' => 'getAttributes'
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
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
    * Gets dataType
    *  数据输入类型，包括数据存储位置、数据集两种方式。
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
    * @param string|null $dataType 数据输入类型，包括数据存储位置、数据集两种方式。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets attributes
    *  数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @return string|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param string|null $attributes 数据输入为数据集时的相关属性。枚举值：   - data_format 数据格式；   - data_segmentation 数据切分方式；   - dataset_type 标注类型。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

