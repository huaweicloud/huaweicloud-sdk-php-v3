<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricMonitorVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricMonitorVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * otherMetricIds  其他指标ID，填写String类型替代Long类型。
    * otherMetricNames  其他指标名称，只读。
    * otherCompoundMetricIds  其他复合指标ID。
    * otherCompoundMetricNames  其他复合指标名称。
    * expression  告警表达式。
    * metricId  挂载指ID，填写String类型替代Long类型。
    * frontConfigs  前端表达式配置，用于前端数据恢复。
    * metricType  metricType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'otherMetricIds' => 'string[]',
            'otherMetricNames' => 'string[]',
            'otherCompoundMetricIds' => 'string[]',
            'otherCompoundMetricNames' => 'string[]',
            'expression' => 'string',
            'metricId' => 'string',
            'frontConfigs' => 'string',
            'metricType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编码，填写String类型替代Long类型。
    * otherMetricIds  其他指标ID，填写String类型替代Long类型。
    * otherMetricNames  其他指标名称，只读。
    * otherCompoundMetricIds  其他复合指标ID。
    * otherCompoundMetricNames  其他复合指标名称。
    * expression  告警表达式。
    * metricId  挂载指ID，填写String类型替代Long类型。
    * frontConfigs  前端表达式配置，用于前端数据恢复。
    * metricType  metricType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'otherMetricIds' => null,
        'otherMetricNames' => null,
        'otherCompoundMetricIds' => null,
        'otherCompoundMetricNames' => null,
        'expression' => null,
        'metricId' => null,
        'frontConfigs' => null,
        'metricType' => null
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
    * id  编码，填写String类型替代Long类型。
    * otherMetricIds  其他指标ID，填写String类型替代Long类型。
    * otherMetricNames  其他指标名称，只读。
    * otherCompoundMetricIds  其他复合指标ID。
    * otherCompoundMetricNames  其他复合指标名称。
    * expression  告警表达式。
    * metricId  挂载指ID，填写String类型替代Long类型。
    * frontConfigs  前端表达式配置，用于前端数据恢复。
    * metricType  metricType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'otherMetricIds' => 'other_metric_ids',
            'otherMetricNames' => 'other_metric_names',
            'otherCompoundMetricIds' => 'other_compound_metric_ids',
            'otherCompoundMetricNames' => 'other_compound_metric_names',
            'expression' => 'expression',
            'metricId' => 'metric_id',
            'frontConfigs' => 'front_configs',
            'metricType' => 'metric_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编码，填写String类型替代Long类型。
    * otherMetricIds  其他指标ID，填写String类型替代Long类型。
    * otherMetricNames  其他指标名称，只读。
    * otherCompoundMetricIds  其他复合指标ID。
    * otherCompoundMetricNames  其他复合指标名称。
    * expression  告警表达式。
    * metricId  挂载指ID，填写String类型替代Long类型。
    * frontConfigs  前端表达式配置，用于前端数据恢复。
    * metricType  metricType
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'otherMetricIds' => 'setOtherMetricIds',
            'otherMetricNames' => 'setOtherMetricNames',
            'otherCompoundMetricIds' => 'setOtherCompoundMetricIds',
            'otherCompoundMetricNames' => 'setOtherCompoundMetricNames',
            'expression' => 'setExpression',
            'metricId' => 'setMetricId',
            'frontConfigs' => 'setFrontConfigs',
            'metricType' => 'setMetricType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编码，填写String类型替代Long类型。
    * otherMetricIds  其他指标ID，填写String类型替代Long类型。
    * otherMetricNames  其他指标名称，只读。
    * otherCompoundMetricIds  其他复合指标ID。
    * otherCompoundMetricNames  其他复合指标名称。
    * expression  告警表达式。
    * metricId  挂载指ID，填写String类型替代Long类型。
    * frontConfigs  前端表达式配置，用于前端数据恢复。
    * metricType  metricType
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'otherMetricIds' => 'getOtherMetricIds',
            'otherMetricNames' => 'getOtherMetricNames',
            'otherCompoundMetricIds' => 'getOtherCompoundMetricIds',
            'otherCompoundMetricNames' => 'getOtherCompoundMetricNames',
            'expression' => 'getExpression',
            'metricId' => 'getMetricId',
            'frontConfigs' => 'getFrontConfigs',
            'metricType' => 'getMetricType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['otherMetricIds'] = isset($data['otherMetricIds']) ? $data['otherMetricIds'] : null;
        $this->container['otherMetricNames'] = isset($data['otherMetricNames']) ? $data['otherMetricNames'] : null;
        $this->container['otherCompoundMetricIds'] = isset($data['otherCompoundMetricIds']) ? $data['otherCompoundMetricIds'] : null;
        $this->container['otherCompoundMetricNames'] = isset($data['otherCompoundMetricNames']) ? $data['otherCompoundMetricNames'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['metricId'] = isset($data['metricId']) ? $data['metricId'] : null;
        $this->container['frontConfigs'] = isset($data['frontConfigs']) ? $data['frontConfigs'] : null;
        $this->container['metricType'] = isset($data['metricType']) ? $data['metricType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expression']) && (mb_strlen($this->container['expression']) > 2000)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 2000.";
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
    *  编码，填写String类型替代Long类型。
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
    * @param string|null $id 编码，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets otherMetricIds
    *  其他指标ID，填写String类型替代Long类型。
    *
    * @return string[]|null
    */
    public function getOtherMetricIds()
    {
        return $this->container['otherMetricIds'];
    }

    /**
    * Sets otherMetricIds
    *
    * @param string[]|null $otherMetricIds 其他指标ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setOtherMetricIds($otherMetricIds)
    {
        $this->container['otherMetricIds'] = $otherMetricIds;
        return $this;
    }

    /**
    * Gets otherMetricNames
    *  其他指标名称，只读。
    *
    * @return string[]|null
    */
    public function getOtherMetricNames()
    {
        return $this->container['otherMetricNames'];
    }

    /**
    * Sets otherMetricNames
    *
    * @param string[]|null $otherMetricNames 其他指标名称，只读。
    *
    * @return $this
    */
    public function setOtherMetricNames($otherMetricNames)
    {
        $this->container['otherMetricNames'] = $otherMetricNames;
        return $this;
    }

    /**
    * Gets otherCompoundMetricIds
    *  其他复合指标ID。
    *
    * @return string[]|null
    */
    public function getOtherCompoundMetricIds()
    {
        return $this->container['otherCompoundMetricIds'];
    }

    /**
    * Sets otherCompoundMetricIds
    *
    * @param string[]|null $otherCompoundMetricIds 其他复合指标ID。
    *
    * @return $this
    */
    public function setOtherCompoundMetricIds($otherCompoundMetricIds)
    {
        $this->container['otherCompoundMetricIds'] = $otherCompoundMetricIds;
        return $this;
    }

    /**
    * Gets otherCompoundMetricNames
    *  其他复合指标名称。
    *
    * @return string[]|null
    */
    public function getOtherCompoundMetricNames()
    {
        return $this->container['otherCompoundMetricNames'];
    }

    /**
    * Sets otherCompoundMetricNames
    *
    * @param string[]|null $otherCompoundMetricNames 其他复合指标名称。
    *
    * @return $this
    */
    public function setOtherCompoundMetricNames($otherCompoundMetricNames)
    {
        $this->container['otherCompoundMetricNames'] = $otherCompoundMetricNames;
        return $this;
    }

    /**
    * Gets expression
    *  告警表达式。
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
    * @param string|null $expression 告警表达式。
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets metricId
    *  挂载指ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getMetricId()
    {
        return $this->container['metricId'];
    }

    /**
    * Sets metricId
    *
    * @param string|null $metricId 挂载指ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setMetricId($metricId)
    {
        $this->container['metricId'] = $metricId;
        return $this;
    }

    /**
    * Gets frontConfigs
    *  前端表达式配置，用于前端数据恢复。
    *
    * @return string|null
    */
    public function getFrontConfigs()
    {
        return $this->container['frontConfigs'];
    }

    /**
    * Sets frontConfigs
    *
    * @param string|null $frontConfigs 前端表达式配置，用于前端数据恢复。
    *
    * @return $this
    */
    public function setFrontConfigs($frontConfigs)
    {
        $this->container['frontConfigs'] = $frontConfigs;
        return $this;
    }

    /**
    * Gets metricType
    *  metricType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getMetricType()
    {
        return $this->container['metricType'];
    }

    /**
    * Sets metricType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $metricType metricType
    *
    * @return $this
    */
    public function setMetricType($metricType)
    {
        $this->container['metricType'] = $metricType;
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

