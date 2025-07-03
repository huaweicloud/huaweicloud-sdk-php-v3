<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigItemValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigItemValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  配置项名字
    * displayName  显示名称
    * configDataType  数据类型
    * maxLength  最大长度
    * minValue  最小值
    * maxValue  最大值
    * optionValues  可选值
    * defaultValue  默认值
    * sinceVersion  开始版本
    * deadVersion  截至版本
    * value  值
    * objectArrayPatterns  对象数组
    * overrideList  实际生效值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'displayName' => 'string',
            'configDataType' => 'string',
            'maxLength' => 'int',
            'minValue' => 'double',
            'maxValue' => 'double',
            'optionValues' => '\HuaweiCloud\SDK\Apm\V1\Model\OptionValue[]',
            'defaultValue' => 'string',
            'sinceVersion' => 'string',
            'deadVersion' => 'string',
            'value' => 'string',
            'objectArrayPatterns' => '\HuaweiCloud\SDK\Apm\V1\Model\ObjectArrayPatterns[]',
            'overrideList' => '\HuaweiCloud\SDK\Apm\V1\Model\ConfigItemOverride[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  配置项名字
    * displayName  显示名称
    * configDataType  数据类型
    * maxLength  最大长度
    * minValue  最小值
    * maxValue  最大值
    * optionValues  可选值
    * defaultValue  默认值
    * sinceVersion  开始版本
    * deadVersion  截至版本
    * value  值
    * objectArrayPatterns  对象数组
    * overrideList  实际生效值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'displayName' => null,
        'configDataType' => null,
        'maxLength' => 'int32',
        'minValue' => 'double',
        'maxValue' => 'double',
        'optionValues' => null,
        'defaultValue' => null,
        'sinceVersion' => null,
        'deadVersion' => null,
        'value' => null,
        'objectArrayPatterns' => null,
        'overrideList' => null
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
    * configName  配置项名字
    * displayName  显示名称
    * configDataType  数据类型
    * maxLength  最大长度
    * minValue  最小值
    * maxValue  最大值
    * optionValues  可选值
    * defaultValue  默认值
    * sinceVersion  开始版本
    * deadVersion  截至版本
    * value  值
    * objectArrayPatterns  对象数组
    * overrideList  实际生效值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'displayName' => 'display_name',
            'configDataType' => 'config_data_type',
            'maxLength' => 'max_length',
            'minValue' => 'min_value',
            'maxValue' => 'max_value',
            'optionValues' => 'option_values',
            'defaultValue' => 'default_value',
            'sinceVersion' => 'since_version',
            'deadVersion' => 'dead_version',
            'value' => 'value',
            'objectArrayPatterns' => 'object_array_patterns',
            'overrideList' => 'override_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  配置项名字
    * displayName  显示名称
    * configDataType  数据类型
    * maxLength  最大长度
    * minValue  最小值
    * maxValue  最大值
    * optionValues  可选值
    * defaultValue  默认值
    * sinceVersion  开始版本
    * deadVersion  截至版本
    * value  值
    * objectArrayPatterns  对象数组
    * overrideList  实际生效值
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'displayName' => 'setDisplayName',
            'configDataType' => 'setConfigDataType',
            'maxLength' => 'setMaxLength',
            'minValue' => 'setMinValue',
            'maxValue' => 'setMaxValue',
            'optionValues' => 'setOptionValues',
            'defaultValue' => 'setDefaultValue',
            'sinceVersion' => 'setSinceVersion',
            'deadVersion' => 'setDeadVersion',
            'value' => 'setValue',
            'objectArrayPatterns' => 'setObjectArrayPatterns',
            'overrideList' => 'setOverrideList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  配置项名字
    * displayName  显示名称
    * configDataType  数据类型
    * maxLength  最大长度
    * minValue  最小值
    * maxValue  最大值
    * optionValues  可选值
    * defaultValue  默认值
    * sinceVersion  开始版本
    * deadVersion  截至版本
    * value  值
    * objectArrayPatterns  对象数组
    * overrideList  实际生效值
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'displayName' => 'getDisplayName',
            'configDataType' => 'getConfigDataType',
            'maxLength' => 'getMaxLength',
            'minValue' => 'getMinValue',
            'maxValue' => 'getMaxValue',
            'optionValues' => 'getOptionValues',
            'defaultValue' => 'getDefaultValue',
            'sinceVersion' => 'getSinceVersion',
            'deadVersion' => 'getDeadVersion',
            'value' => 'getValue',
            'objectArrayPatterns' => 'getObjectArrayPatterns',
            'overrideList' => 'getOverrideList'
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['configDataType'] = isset($data['configDataType']) ? $data['configDataType'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['optionValues'] = isset($data['optionValues']) ? $data['optionValues'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['sinceVersion'] = isset($data['sinceVersion']) ? $data['sinceVersion'] : null;
        $this->container['deadVersion'] = isset($data['deadVersion']) ? $data['deadVersion'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['objectArrayPatterns'] = isset($data['objectArrayPatterns']) ? $data['objectArrayPatterns'] : null;
        $this->container['overrideList'] = isset($data['overrideList']) ? $data['overrideList'] : null;
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
    * Gets configName
    *  配置项名字
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配置项名字
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets displayName
    *  显示名称
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
    * @param string|null $displayName 显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets configDataType
    *  数据类型
    *
    * @return string|null
    */
    public function getConfigDataType()
    {
        return $this->container['configDataType'];
    }

    /**
    * Sets configDataType
    *
    * @param string|null $configDataType 数据类型
    *
    * @return $this
    */
    public function setConfigDataType($configDataType)
    {
        $this->container['configDataType'] = $configDataType;
        return $this;
    }

    /**
    * Gets maxLength
    *  最大长度
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 最大长度
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets minValue
    *  最小值
    *
    * @return double|null
    */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
    * Sets minValue
    *
    * @param double|null $minValue 最小值
    *
    * @return $this
    */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值
    *
    * @return double|null
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param double|null $maxValue 最大值
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets optionValues
    *  可选值
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\OptionValue[]|null
    */
    public function getOptionValues()
    {
        return $this->container['optionValues'];
    }

    /**
    * Sets optionValues
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\OptionValue[]|null $optionValues 可选值
    *
    * @return $this
    */
    public function setOptionValues($optionValues)
    {
        $this->container['optionValues'] = $optionValues;
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
    * Gets sinceVersion
    *  开始版本
    *
    * @return string|null
    */
    public function getSinceVersion()
    {
        return $this->container['sinceVersion'];
    }

    /**
    * Sets sinceVersion
    *
    * @param string|null $sinceVersion 开始版本
    *
    * @return $this
    */
    public function setSinceVersion($sinceVersion)
    {
        $this->container['sinceVersion'] = $sinceVersion;
        return $this;
    }

    /**
    * Gets deadVersion
    *  截至版本
    *
    * @return string|null
    */
    public function getDeadVersion()
    {
        return $this->container['deadVersion'];
    }

    /**
    * Sets deadVersion
    *
    * @param string|null $deadVersion 截至版本
    *
    * @return $this
    */
    public function setDeadVersion($deadVersion)
    {
        $this->container['deadVersion'] = $deadVersion;
        return $this;
    }

    /**
    * Gets value
    *  值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets objectArrayPatterns
    *  对象数组
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ObjectArrayPatterns[]|null
    */
    public function getObjectArrayPatterns()
    {
        return $this->container['objectArrayPatterns'];
    }

    /**
    * Sets objectArrayPatterns
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ObjectArrayPatterns[]|null $objectArrayPatterns 对象数组
    *
    * @return $this
    */
    public function setObjectArrayPatterns($objectArrayPatterns)
    {
        $this->container['objectArrayPatterns'] = $objectArrayPatterns;
        return $this;
    }

    /**
    * Gets overrideList
    *  实际生效值
    *
    * @return \HuaweiCloud\SDK\Apm\V1\Model\ConfigItemOverride[]|null
    */
    public function getOverrideList()
    {
        return $this->container['overrideList'];
    }

    /**
    * Sets overrideList
    *
    * @param \HuaweiCloud\SDK\Apm\V1\Model\ConfigItemOverride[]|null $overrideList 实际生效值
    *
    * @return $this
    */
    public function setOverrideList($overrideList)
    {
        $this->container['overrideList'] = $overrideList;
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

