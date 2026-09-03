<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertExpression implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertExpression';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expressionOperator  表达式操作符
    * metricName  指标名称
    * metricOperator  指标操作符
    * metricThreshold  指标阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expressionOperator' => 'string',
            'metricName' => 'string',
            'metricOperator' => 'string',
            'metricThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expressionOperator  表达式操作符
    * metricName  指标名称
    * metricOperator  指标操作符
    * metricThreshold  指标阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expressionOperator' => null,
        'metricName' => null,
        'metricOperator' => null,
        'metricThreshold' => 'int32'
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
    * expressionOperator  表达式操作符
    * metricName  指标名称
    * metricOperator  指标操作符
    * metricThreshold  指标阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expressionOperator' => 'expression_operator',
            'metricName' => 'metric_name',
            'metricOperator' => 'metric_operator',
            'metricThreshold' => 'metric_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expressionOperator  表达式操作符
    * metricName  指标名称
    * metricOperator  指标操作符
    * metricThreshold  指标阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'expressionOperator' => 'setExpressionOperator',
            'metricName' => 'setMetricName',
            'metricOperator' => 'setMetricOperator',
            'metricThreshold' => 'setMetricThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expressionOperator  表达式操作符
    * metricName  指标名称
    * metricOperator  指标操作符
    * metricThreshold  指标阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'expressionOperator' => 'getExpressionOperator',
            'metricName' => 'getMetricName',
            'metricOperator' => 'getMetricOperator',
            'metricThreshold' => 'getMetricThreshold'
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
        $this->container['expressionOperator'] = isset($data['expressionOperator']) ? $data['expressionOperator'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['metricOperator'] = isset($data['metricOperator']) ? $data['metricOperator'] : null;
        $this->container['metricThreshold'] = isset($data['metricThreshold']) ? $data['metricThreshold'] : null;
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
    * Gets expressionOperator
    *  表达式操作符
    *
    * @return string|null
    */
    public function getExpressionOperator()
    {
        return $this->container['expressionOperator'];
    }

    /**
    * Sets expressionOperator
    *
    * @param string|null $expressionOperator 表达式操作符
    *
    * @return $this
    */
    public function setExpressionOperator($expressionOperator)
    {
        $this->container['expressionOperator'] = $expressionOperator;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 指标名称
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets metricOperator
    *  指标操作符
    *
    * @return string|null
    */
    public function getMetricOperator()
    {
        return $this->container['metricOperator'];
    }

    /**
    * Sets metricOperator
    *
    * @param string|null $metricOperator 指标操作符
    *
    * @return $this
    */
    public function setMetricOperator($metricOperator)
    {
        $this->container['metricOperator'] = $metricOperator;
        return $this;
    }

    /**
    * Gets metricThreshold
    *  指标阈值
    *
    * @return int|null
    */
    public function getMetricThreshold()
    {
        return $this->container['metricThreshold'];
    }

    /**
    * Sets metricThreshold
    *
    * @param int|null $metricThreshold 指标阈值
    *
    * @return $this
    */
    public function setMetricThreshold($metricThreshold)
    {
        $this->container['metricThreshold'] = $metricThreshold;
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

