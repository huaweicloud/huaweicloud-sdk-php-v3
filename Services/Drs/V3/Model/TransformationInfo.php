<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransformationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransformationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transformationType  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    * value  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transformationType' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transformationType  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    * value  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transformationType' => null,
        'value' => null
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
    * transformationType  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    * value  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transformationType' => 'transformation_type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transformationType  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    * value  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @var string[]
    */
    protected static $setters = [
            'transformationType' => 'setTransformationType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transformationType  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    * value  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @var string[]
    */
    protected static $getters = [
            'transformationType' => 'getTransformationType',
            'value' => 'getValue'
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
    const TRANSFORMATION_TYPE_CONTENT_CONDITIONAL_FILTER = 'contentConditionalFilter';
    const TRANSFORMATION_TYPE_CONFIG_CONDITIONAL_FILTER = 'configConditionalFilter';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransformationTypeAllowableValues()
    {
        return [
            self::TRANSFORMATION_TYPE_CONTENT_CONDITIONAL_FILTER,
            self::TRANSFORMATION_TYPE_CONFIG_CONDITIONAL_FILTER,
        ];
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
        $this->container['transformationType'] = isset($data['transformationType']) ? $data['transformationType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['transformationType'] === null) {
            $invalidProperties[] = "'transformationType' can't be null";
        }
            $allowedValues = $this->getTransformationTypeAllowableValues();
                if (!is_null($this->container['transformationType']) && !in_array($this->container['transformationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transformationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
    * Gets transformationType
    *  - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    *
    * @return string
    */
    public function getTransformationType()
    {
        return $this->container['transformationType'];
    }

    /**
    * Sets transformationType
    *
    * @param string $transformationType - 生成加工规则值为contentConditionalFilter - 生成配置规则值为configConditionalFilter
    *
    * @return $this
    */
    public function setTransformationType($transformationType)
    {
        $this->container['transformationType'] = $transformationType;
        return $this;
    }

    /**
    * Gets value
    *  过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 过滤条件，生成加工规则值为sql条件语句，生成配置规则值为config。长度限制256。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

