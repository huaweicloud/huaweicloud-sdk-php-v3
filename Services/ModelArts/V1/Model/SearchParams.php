<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  超参名称。
    * paramType  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    * lowerBound  超参下界。
    * upperBound  超参上界。
    * discretePointsNum  连续型超参离散化取值个数。
    * discreteValues  离散型超参的取值列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'paramType' => 'string',
            'lowerBound' => 'string',
            'upperBound' => 'string',
            'discretePointsNum' => 'string',
            'discreteValues' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  超参名称。
    * paramType  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    * lowerBound  超参下界。
    * upperBound  超参上界。
    * discretePointsNum  连续型超参离散化取值个数。
    * discreteValues  离散型超参的取值列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'paramType' => null,
        'lowerBound' => null,
        'upperBound' => null,
        'discretePointsNum' => null,
        'discreteValues' => null
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
    * name  超参名称。
    * paramType  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    * lowerBound  超参下界。
    * upperBound  超参上界。
    * discretePointsNum  连续型超参离散化取值个数。
    * discreteValues  离散型超参的取值列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'paramType' => 'param_type',
            'lowerBound' => 'lower_bound',
            'upperBound' => 'upper_bound',
            'discretePointsNum' => 'discrete_points_num',
            'discreteValues' => 'discrete_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  超参名称。
    * paramType  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    * lowerBound  超参下界。
    * upperBound  超参上界。
    * discretePointsNum  连续型超参离散化取值个数。
    * discreteValues  离散型超参的取值列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'paramType' => 'setParamType',
            'lowerBound' => 'setLowerBound',
            'upperBound' => 'setUpperBound',
            'discretePointsNum' => 'setDiscretePointsNum',
            'discreteValues' => 'setDiscreteValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  超参名称。
    * paramType  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    * lowerBound  超参下界。
    * upperBound  超参上界。
    * discretePointsNum  连续型超参离散化取值个数。
    * discreteValues  离散型超参的取值列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'paramType' => 'getParamType',
            'lowerBound' => 'getLowerBound',
            'upperBound' => 'getUpperBound',
            'discretePointsNum' => 'getDiscretePointsNum',
            'discreteValues' => 'getDiscreteValues'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['lowerBound'] = isset($data['lowerBound']) ? $data['lowerBound'] : null;
        $this->container['upperBound'] = isset($data['upperBound']) ? $data['upperBound'] : null;
        $this->container['discretePointsNum'] = isset($data['discretePointsNum']) ? $data['discretePointsNum'] : null;
        $this->container['discreteValues'] = isset($data['discreteValues']) ? $data['discreteValues'] : null;
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
    * Gets name
    *  超参名称。
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
    * @param string|null $name 超参名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets paramType
    *  参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    *
    * @return string|null
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string|null $paramType 参数类型。 - continuous：指定时表示这个超参是连续类型的。连续类型的超参在算法使用于训练作业时，控制台显示为输入框。 - discrete：指定时表示这个超参是离散类型的。离散类型的超参在算法使用于训练作业时，控制台显示为下拉选择框架。
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
        return $this;
    }

    /**
    * Gets lowerBound
    *  超参下界。
    *
    * @return string|null
    */
    public function getLowerBound()
    {
        return $this->container['lowerBound'];
    }

    /**
    * Sets lowerBound
    *
    * @param string|null $lowerBound 超参下界。
    *
    * @return $this
    */
    public function setLowerBound($lowerBound)
    {
        $this->container['lowerBound'] = $lowerBound;
        return $this;
    }

    /**
    * Gets upperBound
    *  超参上界。
    *
    * @return string|null
    */
    public function getUpperBound()
    {
        return $this->container['upperBound'];
    }

    /**
    * Sets upperBound
    *
    * @param string|null $upperBound 超参上界。
    *
    * @return $this
    */
    public function setUpperBound($upperBound)
    {
        $this->container['upperBound'] = $upperBound;
        return $this;
    }

    /**
    * Gets discretePointsNum
    *  连续型超参离散化取值个数。
    *
    * @return string|null
    */
    public function getDiscretePointsNum()
    {
        return $this->container['discretePointsNum'];
    }

    /**
    * Sets discretePointsNum
    *
    * @param string|null $discretePointsNum 连续型超参离散化取值个数。
    *
    * @return $this
    */
    public function setDiscretePointsNum($discretePointsNum)
    {
        $this->container['discretePointsNum'] = $discretePointsNum;
        return $this;
    }

    /**
    * Gets discreteValues
    *  离散型超参的取值列表。
    *
    * @return string[]|null
    */
    public function getDiscreteValues()
    {
        return $this->container['discreteValues'];
    }

    /**
    * Sets discreteValues
    *
    * @param string[]|null $discreteValues 离散型超参的取值列表。
    *
    * @return $this
    */
    public function setDiscreteValues($discreteValues)
    {
        $this->container['discreteValues'] = $discreteValues;
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

