<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationCombineRuleCheckDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationCombineRuleCheckDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expression  条件表达式
    * combineInputData  combineInputData
    * combine  分类ID
    * singleRuleCheckList  条件单规则列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expression' => 'string',
            'combineInputData' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationCombineRuleCheckDTOCombineInputData',
            'combine' => 'bool',
            'singleRuleCheckList' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expression  条件表达式
    * combineInputData  combineInputData
    * combine  分类ID
    * singleRuleCheckList  条件单规则列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expression' => null,
        'combineInputData' => null,
        'combine' => null,
        'singleRuleCheckList' => null
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
    * expression  条件表达式
    * combineInputData  combineInputData
    * combine  分类ID
    * singleRuleCheckList  条件单规则列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expression' => 'expression',
            'combineInputData' => 'combine_input_data',
            'combine' => 'combine',
            'singleRuleCheckList' => 'single_rule_check_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expression  条件表达式
    * combineInputData  combineInputData
    * combine  分类ID
    * singleRuleCheckList  条件单规则列表
    *
    * @var string[]
    */
    protected static $setters = [
            'expression' => 'setExpression',
            'combineInputData' => 'setCombineInputData',
            'combine' => 'setCombine',
            'singleRuleCheckList' => 'setSingleRuleCheckList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expression  条件表达式
    * combineInputData  combineInputData
    * combine  分类ID
    * singleRuleCheckList  条件单规则列表
    *
    * @var string[]
    */
    protected static $getters = [
            'expression' => 'getExpression',
            'combineInputData' => 'getCombineInputData',
            'combine' => 'getCombine',
            'singleRuleCheckList' => 'getSingleRuleCheckList'
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
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['combineInputData'] = isset($data['combineInputData']) ? $data['combineInputData'] : null;
        $this->container['combine'] = isset($data['combine']) ? $data['combine'] : null;
        $this->container['singleRuleCheckList'] = isset($data['singleRuleCheckList']) ? $data['singleRuleCheckList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 128)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) < 1)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 1.";
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
    * Gets expression
    *  条件表达式
    *
    * @return string|null
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string|null $expression 条件表达式
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets combineInputData
    *  combineInputData
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationCombineRuleCheckDTOCombineInputData|null
    */
    public function getCombineInputData()
    {
        return $this->container['combineInputData'];
    }

    /**
    * Sets combineInputData
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationCombineRuleCheckDTOCombineInputData|null $combineInputData combineInputData
    *
    * @return $this
    */
    public function setCombineInputData($combineInputData)
    {
        $this->container['combineInputData'] = $combineInputData;
        return $this;
    }

    /**
    * Gets combine
    *  分类ID
    *
    * @return bool|null
    */
    public function getCombine()
    {
        return $this->container['combine'];
    }

    /**
    * Sets combine
    *
    * @param bool|null $combine 分类ID
    *
    * @return $this
    */
    public function setCombine($combine)
    {
        $this->container['combine'] = $combine;
        return $this;
    }

    /**
    * Gets singleRuleCheckList
    *  条件单规则列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[]|null
    */
    public function getSingleRuleCheckList()
    {
        return $this->container['singleRuleCheckList'];
    }

    /**
    * Sets singleRuleCheckList
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataClassificationSingleRuleDTO[]|null $singleRuleCheckList 条件单规则列表
    *
    * @return $this
    */
    public function setSingleRuleCheckList($singleRuleCheckList)
    {
        $this->container['singleRuleCheckList'] = $singleRuleCheckList;
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

