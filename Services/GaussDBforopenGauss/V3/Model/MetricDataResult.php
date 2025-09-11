<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricDataResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricDataResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    * type  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    * unit  **参数解释**: 指标单位。 **取值范围**: 不涉及。
    * datapoints  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    * timestamps  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string',
            'type' => 'string',
            'unit' => 'string',
            'datapoints' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatapointResult[]',
            'timestamps' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    * type  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    * unit  **参数解释**: 指标单位。 **取值范围**: 不涉及。
    * datapoints  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    * timestamps  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'type' => null,
        'unit' => null,
        'datapoints' => null,
        'timestamps' => null
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
    * metric  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    * type  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    * unit  **参数解释**: 指标单位。 **取值范围**: 不涉及。
    * datapoints  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    * timestamps  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'type' => 'type',
            'unit' => 'unit',
            'datapoints' => 'datapoints',
            'timestamps' => 'timestamps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    * type  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    * unit  **参数解释**: 指标单位。 **取值范围**: 不涉及。
    * datapoints  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    * timestamps  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'type' => 'setType',
            'unit' => 'setUnit',
            'datapoints' => 'setDatapoints',
            'timestamps' => 'setTimestamps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    * type  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    * unit  **参数解释**: 指标单位。 **取值范围**: 不涉及。
    * datapoints  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    * timestamps  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'type' => 'getType',
            'unit' => 'getUnit',
            'datapoints' => 'getDatapoints',
            'timestamps' => 'getTimestamps'
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
    const TYPE_INSTANCE = 'INSTANCE';
    const TYPE_NODE = 'NODE';
    const TYPE_COMPONENT = 'COMPONENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INSTANCE,
            self::TYPE_NODE,
            self::TYPE_COMPONENT,
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['datapoints'] = isset($data['datapoints']) ? $data['datapoints'] : null;
        $this->container['timestamps'] = isset($data['timestamps']) ? $data['timestamps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['datapoints'] === null) {
            $invalidProperties[] = "'datapoints' can't be null";
        }
        if ($this->container['timestamps'] === null) {
            $invalidProperties[] = "'timestamps' can't be null";
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
    * Gets metric
    *  **参数解释**: 指标ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric **参数解释**: 指标ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释** 指标类型 *取值范围* - INSTANCE：实例类型。 - NODE：节点类型。 - COMPONENT：组件类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**: 指标单位。 **取值范围**: 不涉及。
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
    * @param string $unit **参数解释**: 指标单位。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets datapoints
    *  **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatapointResult[]
    */
    public function getDatapoints()
    {
        return $this->container['datapoints'];
    }

    /**
    * Sets datapoints
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DatapointResult[] $datapoints **参数解释**: 指标维度及指标值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatapoints($datapoints)
    {
        $this->container['datapoints'] = $datapoints;
        return $this;
    }

    /**
    * Gets timestamps
    *  **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @return string[]
    */
    public function getTimestamps()
    {
        return $this->container['timestamps'];
    }

    /**
    * Sets timestamps
    *
    * @param string[] $timestamps **参数解释**: 时间戳，例如1699495140000。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTimestamps($timestamps)
    {
        $this->container['timestamps'] = $timestamps;
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

