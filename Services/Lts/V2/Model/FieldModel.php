<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FieldModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FieldModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldName  字段名称
    * isAnalysis  是否开启快速分析。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldName' => 'string',
            'isAnalysis' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldName  字段名称
    * isAnalysis  是否开启快速分析。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldName' => null,
        'isAnalysis' => null
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
    * fieldName  字段名称
    * isAnalysis  是否开启快速分析。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldName' => 'field_name',
            'isAnalysis' => 'is_analysis'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldName  字段名称
    * isAnalysis  是否开启快速分析。
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldName' => 'setFieldName',
            'isAnalysis' => 'setIsAnalysis'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldName  字段名称
    * isAnalysis  是否开启快速分析。
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldName' => 'getFieldName',
            'isAnalysis' => 'getIsAnalysis'
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['isAnalysis'] = isset($data['isAnalysis']) ? $data['isAnalysis'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fieldName'] === null) {
            $invalidProperties[] = "'fieldName' can't be null";
        }
            if ((mb_strlen($this->container['fieldName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fieldName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be bigger than or equal to 1.";
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
    * Gets fieldName
    *  字段名称
    *
    * @return string
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string $fieldName 字段名称
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets isAnalysis
    *  是否开启快速分析。
    *
    * @return bool|null
    */
    public function getIsAnalysis()
    {
        return $this->container['isAnalysis'];
    }

    /**
    * Sets isAnalysis
    *
    * @param bool|null $isAnalysis 是否开启快速分析。
    *
    * @return $this
    */
    public function setIsAnalysis($isAnalysis)
    {
        $this->container['isAnalysis'] = $isAnalysis;
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

