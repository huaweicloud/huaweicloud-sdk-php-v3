<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DepParamInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DepParamInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareValue  比较值
    * comparison  比较
    * condition  条件
    * inValidValues  无效值列表
    * name  名称
    * nullInfo  空值信息
    * relationMap  关系映射，key为整数，value为字符串
    * relationNum  关系数量
    * values  值列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareValue' => 'string',
            'comparison' => 'string',
            'condition' => 'bool',
            'inValidValues' => 'string[]',
            'name' => 'string',
            'nullInfo' => 'string',
            'relationMap' => 'map[string,string]',
            'relationNum' => 'int',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareValue  比较值
    * comparison  比较
    * condition  条件
    * inValidValues  无效值列表
    * name  名称
    * nullInfo  空值信息
    * relationMap  关系映射，key为整数，value为字符串
    * relationNum  关系数量
    * values  值列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareValue' => null,
        'comparison' => null,
        'condition' => null,
        'inValidValues' => null,
        'name' => null,
        'nullInfo' => null,
        'relationMap' => null,
        'relationNum' => 'int32',
        'values' => null
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
    * compareValue  比较值
    * comparison  比较
    * condition  条件
    * inValidValues  无效值列表
    * name  名称
    * nullInfo  空值信息
    * relationMap  关系映射，key为整数，value为字符串
    * relationNum  关系数量
    * values  值列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareValue' => 'compareValue',
            'comparison' => 'comparison',
            'condition' => 'condition',
            'inValidValues' => 'inValidValues',
            'name' => 'name',
            'nullInfo' => 'nullInfo',
            'relationMap' => 'relationMap',
            'relationNum' => 'relationNum',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareValue  比较值
    * comparison  比较
    * condition  条件
    * inValidValues  无效值列表
    * name  名称
    * nullInfo  空值信息
    * relationMap  关系映射，key为整数，value为字符串
    * relationNum  关系数量
    * values  值列表
    *
    * @var string[]
    */
    protected static $setters = [
            'compareValue' => 'setCompareValue',
            'comparison' => 'setComparison',
            'condition' => 'setCondition',
            'inValidValues' => 'setInValidValues',
            'name' => 'setName',
            'nullInfo' => 'setNullInfo',
            'relationMap' => 'setRelationMap',
            'relationNum' => 'setRelationNum',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareValue  比较值
    * comparison  比较
    * condition  条件
    * inValidValues  无效值列表
    * name  名称
    * nullInfo  空值信息
    * relationMap  关系映射，key为整数，value为字符串
    * relationNum  关系数量
    * values  值列表
    *
    * @var string[]
    */
    protected static $getters = [
            'compareValue' => 'getCompareValue',
            'comparison' => 'getComparison',
            'condition' => 'getCondition',
            'inValidValues' => 'getInValidValues',
            'name' => 'getName',
            'nullInfo' => 'getNullInfo',
            'relationMap' => 'getRelationMap',
            'relationNum' => 'getRelationNum',
            'values' => 'getValues'
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
        $this->container['compareValue'] = isset($data['compareValue']) ? $data['compareValue'] : null;
        $this->container['comparison'] = isset($data['comparison']) ? $data['comparison'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['inValidValues'] = isset($data['inValidValues']) ? $data['inValidValues'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nullInfo'] = isset($data['nullInfo']) ? $data['nullInfo'] : null;
        $this->container['relationMap'] = isset($data['relationMap']) ? $data['relationMap'] : null;
        $this->container['relationNum'] = isset($data['relationNum']) ? $data['relationNum'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
    * Gets compareValue
    *  比较值
    *
    * @return string|null
    */
    public function getCompareValue()
    {
        return $this->container['compareValue'];
    }

    /**
    * Sets compareValue
    *
    * @param string|null $compareValue 比较值
    *
    * @return $this
    */
    public function setCompareValue($compareValue)
    {
        $this->container['compareValue'] = $compareValue;
        return $this;
    }

    /**
    * Gets comparison
    *  比较
    *
    * @return string|null
    */
    public function getComparison()
    {
        return $this->container['comparison'];
    }

    /**
    * Sets comparison
    *
    * @param string|null $comparison 比较
    *
    * @return $this
    */
    public function setComparison($comparison)
    {
        $this->container['comparison'] = $comparison;
        return $this;
    }

    /**
    * Gets condition
    *  条件
    *
    * @return bool|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param bool|null $condition 条件
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets inValidValues
    *  无效值列表
    *
    * @return string[]|null
    */
    public function getInValidValues()
    {
        return $this->container['inValidValues'];
    }

    /**
    * Sets inValidValues
    *
    * @param string[]|null $inValidValues 无效值列表
    *
    * @return $this
    */
    public function setInValidValues($inValidValues)
    {
        $this->container['inValidValues'] = $inValidValues;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nullInfo
    *  空值信息
    *
    * @return string|null
    */
    public function getNullInfo()
    {
        return $this->container['nullInfo'];
    }

    /**
    * Sets nullInfo
    *
    * @param string|null $nullInfo 空值信息
    *
    * @return $this
    */
    public function setNullInfo($nullInfo)
    {
        $this->container['nullInfo'] = $nullInfo;
        return $this;
    }

    /**
    * Gets relationMap
    *  关系映射，key为整数，value为字符串
    *
    * @return map[string,string]|null
    */
    public function getRelationMap()
    {
        return $this->container['relationMap'];
    }

    /**
    * Sets relationMap
    *
    * @param map[string,string]|null $relationMap 关系映射，key为整数，value为字符串
    *
    * @return $this
    */
    public function setRelationMap($relationMap)
    {
        $this->container['relationMap'] = $relationMap;
        return $this;
    }

    /**
    * Gets relationNum
    *  关系数量
    *
    * @return int|null
    */
    public function getRelationNum()
    {
        return $this->container['relationNum'];
    }

    /**
    * Sets relationNum
    *
    * @param int|null $relationNum 关系数量
    *
    * @return $this
    */
    public function setRelationNum($relationNum)
    {
        $this->container['relationNum'] = $relationNum;
        return $this;
    }

    /**
    * Gets values
    *  值列表
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values 值列表
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

