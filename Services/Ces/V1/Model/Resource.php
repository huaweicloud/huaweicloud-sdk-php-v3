<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Resource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Resource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relationId  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    * namespace  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    * dimensions  **参数解释** 指标维度信息
    * status  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relationId' => 'string',
            'namespace' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relationId  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    * namespace  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    * dimensions  **参数解释** 指标维度信息
    * status  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relationId' => null,
        'namespace' => null,
        'dimensions' => null,
        'status' => null
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
    * relationId  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    * namespace  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    * dimensions  **参数解释** 指标维度信息
    * status  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relationId' => 'relation_id',
            'namespace' => 'namespace',
            'dimensions' => 'dimensions',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relationId  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    * namespace  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    * dimensions  **参数解释** 指标维度信息
    * status  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @var string[]
    */
    protected static $setters = [
            'relationId' => 'setRelationId',
            'namespace' => 'setNamespace',
            'dimensions' => 'setDimensions',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relationId  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    * namespace  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    * dimensions  **参数解释** 指标维度信息
    * status  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @var string[]
    */
    protected static $getters = [
            'relationId' => 'getRelationId',
            'namespace' => 'getNamespace',
            'dimensions' => 'getDimensions',
            'status' => 'getStatus'
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
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTH = 'unhealth';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HEALTH,
            self::STATUS_UNHEALTH,
            self::STATUS_NO_ALARM_RULE,
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
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets relationId
    *  **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param string|null $relationId **参数解释**： 告警规则的ID或者资源分组ID。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**： 服务指标命名空间。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets dimensions
    *  **参数解释** 指标维度信息
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\DimensionResp[]|null $dimensions **参数解释** 指标维度信息
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 资源健康状态 **取值范围** - health: 表示无告警 - unhealth: 表示告警中 - no_alarm_rule: 表示未设置告警规则
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

