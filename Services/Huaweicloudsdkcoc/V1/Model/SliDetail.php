<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SliDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SliDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SLi的ID
    * sortId  顺序
    * sliType  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    * name  SLI名称
    * description  SLI描述
    * comparisonOperator  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    * numericalValue  数值
    * unit  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'sortId' => 'int',
            'sliType' => 'string',
            'name' => 'string',
            'description' => 'string',
            'comparisonOperator' => 'string',
            'numericalValue' => 'double',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SLi的ID
    * sortId  顺序
    * sliType  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    * name  SLI名称
    * description  SLI描述
    * comparisonOperator  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    * numericalValue  数值
    * unit  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'sortId' => 'int32',
        'sliType' => null,
        'name' => null,
        'description' => null,
        'comparisonOperator' => null,
        'numericalValue' => 'double',
        'unit' => null
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
    * id  SLi的ID
    * sortId  顺序
    * sliType  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    * name  SLI名称
    * description  SLI描述
    * comparisonOperator  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    * numericalValue  数值
    * unit  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'sortId' => 'sort_id',
            'sliType' => 'sli_type',
            'name' => 'name',
            'description' => 'description',
            'comparisonOperator' => 'comparison_operator',
            'numericalValue' => 'numerical_value',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SLi的ID
    * sortId  顺序
    * sliType  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    * name  SLI名称
    * description  SLI描述
    * comparisonOperator  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    * numericalValue  数值
    * unit  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'sortId' => 'setSortId',
            'sliType' => 'setSliType',
            'name' => 'setName',
            'description' => 'setDescription',
            'comparisonOperator' => 'setComparisonOperator',
            'numericalValue' => 'setNumericalValue',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SLi的ID
    * sortId  顺序
    * sliType  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    * name  SLI名称
    * description  SLI描述
    * comparisonOperator  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    * numericalValue  数值
    * unit  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'sortId' => 'getSortId',
            'sliType' => 'getSliType',
            'name' => 'getName',
            'description' => 'getDescription',
            'comparisonOperator' => 'getComparisonOperator',
            'numericalValue' => 'getNumericalValue',
            'unit' => 'getUnit'
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
    const SLI_TYPE_REQUEST = 'REQUEST';
    const SLI_TYPE_INSTANCES = 'INSTANCES';
    const COMPARISON_OPERATOR_GREATER_THAN = 'GREATER_THAN';
    const COMPARISON_OPERATOR_GREATER_THAN_OR_EQUAL_TO = 'GREATER_THAN_OR_EQUAL_TO';
    const COMPARISON_OPERATOR_EQUALS = 'EQUALS';
    const COMPARISON_OPERATOR_LESS_THAN = 'LESS_THAN';
    const COMPARISON_OPERATOR_LESS_THAN_OR_EQUAL_TO = 'LESS_THAN_OR_EQUAL_TO';
    const UNIT_PERCENT_SIGN = 'PERCENT_SIGN';
    const UNIT_MILLISECONDS = 'MILLISECONDS';
    const UNIT_NUMBER_OF_REQUESTS_PER_SECOND = 'NUMBER_OF_REQUESTS_PER_SECOND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSliTypeAllowableValues()
    {
        return [
            self::SLI_TYPE_REQUEST,
            self::SLI_TYPE_INSTANCES,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getComparisonOperatorAllowableValues()
    {
        return [
            self::COMPARISON_OPERATOR_GREATER_THAN,
            self::COMPARISON_OPERATOR_GREATER_THAN_OR_EQUAL_TO,
            self::COMPARISON_OPERATOR_EQUALS,
            self::COMPARISON_OPERATOR_LESS_THAN,
            self::COMPARISON_OPERATOR_LESS_THAN_OR_EQUAL_TO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_PERCENT_SIGN,
            self::UNIT_MILLISECONDS,
            self::UNIT_NUMBER_OF_REQUESTS_PER_SECOND,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sortId'] = isset($data['sortId']) ? $data['sortId'] : null;
        $this->container['sliType'] = isset($data['sliType']) ? $data['sliType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['comparisonOperator'] = isset($data['comparisonOperator']) ? $data['comparisonOperator'] : null;
        $this->container['numericalValue'] = isset($data['numericalValue']) ? $data['numericalValue'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortId']) && ($this->container['sortId'] > 50)) {
                $invalidProperties[] = "invalid value for 'sortId', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['sortId']) && ($this->container['sortId'] < 0)) {
                $invalidProperties[] = "invalid value for 'sortId', must be bigger than or equal to 0.";
            }
        if ($this->container['sliType'] === null) {
            $invalidProperties[] = "'sliType' can't be null";
        }
            $allowedValues = $this->getSliTypeAllowableValues();
                if (!is_null($this->container['sliType']) && !in_array($this->container['sliType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sliType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['comparisonOperator'] === null) {
            $invalidProperties[] = "'comparisonOperator' can't be null";
        }
            $allowedValues = $this->getComparisonOperatorAllowableValues();
                if (!is_null($this->container['comparisonOperator']) && !in_array($this->container['comparisonOperator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'comparisonOperator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['numericalValue'] === null) {
            $invalidProperties[] = "'numericalValue' can't be null";
        }
            if (($this->container['numericalValue'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'numericalValue', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['numericalValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'numericalValue', must be bigger than or equal to 0.";
            }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
            $allowedValues = $this->getUnitAllowableValues();
                if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
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
    * Gets id
    *  SLi的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id SLi的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sortId
    *  顺序
    *
    * @return int|null
    */
    public function getSortId()
    {
        return $this->container['sortId'];
    }

    /**
    * Sets sortId
    *
    * @param int|null $sortId 顺序
    *
    * @return $this
    */
    public function setSortId($sortId)
    {
        $this->container['sortId'] = $sortId;
        return $this;
    }

    /**
    * Gets sliType
    *  SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    *
    * @return string
    */
    public function getSliType()
    {
        return $this->container['sliType'];
    }

    /**
    * Sets sliType
    *
    * @param string $sliType SLI类型 REQUEST 请求型SLI指标 INSTANCES 实例型SLI指标
    *
    * @return $this
    */
    public function setSliType($sliType)
    {
        $this->container['sliType'] = $sliType;
        return $this;
    }

    /**
    * Gets name
    *  SLI名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name SLI名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  SLI描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description SLI描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets comparisonOperator
    *  比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    *
    * @return string
    */
    public function getComparisonOperator()
    {
        return $this->container['comparisonOperator'];
    }

    /**
    * Sets comparisonOperator
    *
    * @param string $comparisonOperator 比较符 LESS_THAN 小于 LESS_THAN_OR_EQUAL_TO 小于等于 EQUALS 等于 GREATER_THAN 大于 GREATER_THAN_OR_EQUAL_TO 大于等于
    *
    * @return $this
    */
    public function setComparisonOperator($comparisonOperator)
    {
        $this->container['comparisonOperator'] = $comparisonOperator;
        return $this;
    }

    /**
    * Gets numericalValue
    *  数值
    *
    * @return double
    */
    public function getNumericalValue()
    {
        return $this->container['numericalValue'];
    }

    /**
    * Sets numericalValue
    *
    * @param double $numericalValue 数值
    *
    * @return $this
    */
    public function setNumericalValue($numericalValue)
    {
        $this->container['numericalValue'] = $numericalValue;
        return $this;
    }

    /**
    * Gets unit
    *  单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 单位 PERCENT_SIGN 百分号 MILLISECONDS 毫秒 NUMBER_OF_REQUESTS_PER_SECOND 每秒请求数量
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

