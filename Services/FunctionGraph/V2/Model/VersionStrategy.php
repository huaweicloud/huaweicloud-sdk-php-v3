<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionStrategy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rules  规则列表
    * combineType  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rules' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\VersionStrategyRules[]',
            'combineType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rules  规则列表
    * combineType  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rules' => null,
        'combineType' => null
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
    * rules  规则列表
    * combineType  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rules' => 'rules',
            'combineType' => 'combine_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rules  规则列表
    * combineType  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @var string[]
    */
    protected static $setters = [
            'rules' => 'setRules',
            'combineType' => 'setCombineType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rules  规则列表
    * combineType  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @var string[]
    */
    protected static $getters = [
            'rules' => 'getRules',
            'combineType' => 'getCombineType'
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
    const COMBINE_TYPE__AND = 'and';
    const COMBINE_TYPE__OR = 'or';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCombineTypeAllowableValues()
    {
        return [
            self::COMBINE_TYPE__AND,
            self::COMBINE_TYPE__OR,
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
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['combineType'] = isset($data['combineType']) ? $data['combineType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCombineTypeAllowableValues();
                if (!is_null($this->container['combineType']) && !in_array($this->container['combineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'combineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets rules
    *  规则列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\VersionStrategyRules[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\VersionStrategyRules[]|null $rules 规则列表
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets combineType
    *  所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @return string|null
    */
    public function getCombineType()
    {
        return $this->container['combineType'];
    }

    /**
    * Sets combineType
    *
    * @param string|null $combineType 所有规则聚合方式。and：所有规则都满足，or：满足其中一个
    *
    * @return $this
    */
    public function setCombineType($combineType)
    {
        $this->container['combineType'] = $combineType;
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

