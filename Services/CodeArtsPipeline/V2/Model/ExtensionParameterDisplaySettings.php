<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionParameterDisplaySettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionParameterDisplaySettings';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * devCloudControlType  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    * devCloudControlTypeDefault  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    * devCloudControlTypeSelect  下拉选项(Select类型)。
    * devCloudControlTypeRadio  单选选项(Radio类型)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'devCloudControlType' => 'string',
            'devCloudControlTypeDefault' => 'string',
            'devCloudControlTypeSelect' => 'string[]',
            'devCloudControlTypeRadio' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionRadioOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * devCloudControlType  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    * devCloudControlTypeDefault  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    * devCloudControlTypeSelect  下拉选项(Select类型)。
    * devCloudControlTypeRadio  单选选项(Radio类型)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'devCloudControlType' => null,
        'devCloudControlTypeDefault' => null,
        'devCloudControlTypeSelect' => null,
        'devCloudControlTypeRadio' => null
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
    * devCloudControlType  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    * devCloudControlTypeDefault  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    * devCloudControlTypeSelect  下拉选项(Select类型)。
    * devCloudControlTypeRadio  单选选项(Radio类型)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'devCloudControlType' => 'DevCloud.ControlType',
            'devCloudControlTypeDefault' => 'DevCloud.ControlType.Default',
            'devCloudControlTypeSelect' => 'DevCloud.ControlType.Select',
            'devCloudControlTypeRadio' => 'DevCloud.ControlType.Radio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * devCloudControlType  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    * devCloudControlTypeDefault  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    * devCloudControlTypeSelect  下拉选项(Select类型)。
    * devCloudControlTypeRadio  单选选项(Radio类型)。
    *
    * @var string[]
    */
    protected static $setters = [
            'devCloudControlType' => 'setDevCloudControlType',
            'devCloudControlTypeDefault' => 'setDevCloudControlTypeDefault',
            'devCloudControlTypeSelect' => 'setDevCloudControlTypeSelect',
            'devCloudControlTypeRadio' => 'setDevCloudControlTypeRadio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * devCloudControlType  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    * devCloudControlTypeDefault  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    * devCloudControlTypeSelect  下拉选项(Select类型)。
    * devCloudControlTypeRadio  单选选项(Radio类型)。
    *
    * @var string[]
    */
    protected static $getters = [
            'devCloudControlType' => 'getDevCloudControlType',
            'devCloudControlTypeDefault' => 'getDevCloudControlTypeDefault',
            'devCloudControlTypeSelect' => 'getDevCloudControlTypeSelect',
            'devCloudControlTypeRadio' => 'getDevCloudControlTypeRadio'
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
        $this->container['devCloudControlType'] = isset($data['devCloudControlType']) ? $data['devCloudControlType'] : null;
        $this->container['devCloudControlTypeDefault'] = isset($data['devCloudControlTypeDefault']) ? $data['devCloudControlTypeDefault'] : null;
        $this->container['devCloudControlTypeSelect'] = isset($data['devCloudControlTypeSelect']) ? $data['devCloudControlTypeSelect'] : null;
        $this->container['devCloudControlTypeRadio'] = isset($data['devCloudControlTypeRadio']) ? $data['devCloudControlTypeRadio'] : null;
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
    * Gets devCloudControlType
    *  控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    *
    * @return string|null
    */
    public function getDevCloudControlType()
    {
        return $this->container['devCloudControlType'];
    }

    /**
    * Sets devCloudControlType
    *
    * @param string|null $devCloudControlType 控件类型，如 Select/CodeText/Radio/SingleLineText/Hidden
    *
    * @return $this
    */
    public function setDevCloudControlType($devCloudControlType)
    {
        $this->container['devCloudControlType'] = $devCloudControlType;
        return $this;
    }

    /**
    * Gets devCloudControlTypeDefault
    *  默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    *
    * @return string|null
    */
    public function getDevCloudControlTypeDefault()
    {
        return $this->container['devCloudControlTypeDefault'];
    }

    /**
    * Sets devCloudControlTypeDefault
    *
    * @param string|null $devCloudControlTypeDefault 默认选中值。可能为字符串，也可能为对象(如 {displayName, value})。
    *
    * @return $this
    */
    public function setDevCloudControlTypeDefault($devCloudControlTypeDefault)
    {
        $this->container['devCloudControlTypeDefault'] = $devCloudControlTypeDefault;
        return $this;
    }

    /**
    * Gets devCloudControlTypeSelect
    *  下拉选项(Select类型)。
    *
    * @return string[]|null
    */
    public function getDevCloudControlTypeSelect()
    {
        return $this->container['devCloudControlTypeSelect'];
    }

    /**
    * Sets devCloudControlTypeSelect
    *
    * @param string[]|null $devCloudControlTypeSelect 下拉选项(Select类型)。
    *
    * @return $this
    */
    public function setDevCloudControlTypeSelect($devCloudControlTypeSelect)
    {
        $this->container['devCloudControlTypeSelect'] = $devCloudControlTypeSelect;
        return $this;
    }

    /**
    * Gets devCloudControlTypeRadio
    *  单选选项(Radio类型)。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionRadioOption[]|null
    */
    public function getDevCloudControlTypeRadio()
    {
        return $this->container['devCloudControlTypeRadio'];
    }

    /**
    * Sets devCloudControlTypeRadio
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionRadioOption[]|null $devCloudControlTypeRadio 单选选项(Radio类型)。
    *
    * @return $this
    */
    public function setDevCloudControlTypeRadio($devCloudControlTypeRadio)
    {
        $this->container['devCloudControlTypeRadio'] = $devCloudControlTypeRadio;
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

