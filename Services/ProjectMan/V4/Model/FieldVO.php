<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  字段名称
    * createdBy  添加人
    * fieldType  字段类型
    * showOnCard  是否显示在新建页
    * optional  是否必填
    * allOptions  字段选项
    * defaultValue  默认值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'createdBy' => 'string',
            'fieldType' => 'string',
            'showOnCard' => 'bool',
            'optional' => 'bool',
            'allOptions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]',
            'defaultValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  字段名称
    * createdBy  添加人
    * fieldType  字段类型
    * showOnCard  是否显示在新建页
    * optional  是否必填
    * allOptions  字段选项
    * defaultValue  默认值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'createdBy' => null,
        'fieldType' => null,
        'showOnCard' => null,
        'optional' => null,
        'allOptions' => null,
        'defaultValue' => null
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
    * displayName  字段名称
    * createdBy  添加人
    * fieldType  字段类型
    * showOnCard  是否显示在新建页
    * optional  是否必填
    * allOptions  字段选项
    * defaultValue  默认值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'display_name',
            'createdBy' => 'created_by',
            'fieldType' => 'field_type',
            'showOnCard' => 'show_on_card',
            'optional' => 'optional',
            'allOptions' => 'all_options',
            'defaultValue' => 'default_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  字段名称
    * createdBy  添加人
    * fieldType  字段类型
    * showOnCard  是否显示在新建页
    * optional  是否必填
    * allOptions  字段选项
    * defaultValue  默认值
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'createdBy' => 'setCreatedBy',
            'fieldType' => 'setFieldType',
            'showOnCard' => 'setShowOnCard',
            'optional' => 'setOptional',
            'allOptions' => 'setAllOptions',
            'defaultValue' => 'setDefaultValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  字段名称
    * createdBy  添加人
    * fieldType  字段类型
    * showOnCard  是否显示在新建页
    * optional  是否必填
    * allOptions  字段选项
    * defaultValue  默认值
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'createdBy' => 'getCreatedBy',
            'fieldType' => 'getFieldType',
            'showOnCard' => 'getShowOnCard',
            'optional' => 'getOptional',
            'allOptions' => 'getAllOptions',
            'defaultValue' => 'getDefaultValue'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['showOnCard'] = isset($data['showOnCard']) ? $data['showOnCard'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['allOptions'] = isset($data['allOptions']) ? $data['allOptions'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
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
    * Gets displayName
    *  字段名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 字段名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets createdBy
    *  添加人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 添加人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets fieldType
    *  字段类型
    *
    * @return string|null
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param string|null $fieldType 字段类型
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets showOnCard
    *  是否显示在新建页
    *
    * @return bool|null
    */
    public function getShowOnCard()
    {
        return $this->container['showOnCard'];
    }

    /**
    * Sets showOnCard
    *
    * @param bool|null $showOnCard 是否显示在新建页
    *
    * @return $this
    */
    public function setShowOnCard($showOnCard)
    {
        $this->container['showOnCard'] = $showOnCard;
        return $this;
    }

    /**
    * Gets optional
    *  是否必填
    *
    * @return bool|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool|null $optional 是否必填
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets allOptions
    *  字段选项
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null
    */
    public function getAllOptions()
    {
        return $this->container['allOptions'];
    }

    /**
    * Sets allOptions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null $allOptions 字段选项
    *
    * @return $this
    */
    public function setAllOptions($allOptions)
    {
        $this->container['allOptions'] = $allOptions;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
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

