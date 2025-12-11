<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAuditRuleRisksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAuditRuleRisksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * name  风险名称
    * riskLevels  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'name' => 'string',
            'riskLevels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * name  风险名称
    * riskLevels  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'name' => null,
        'riskLevels' => null
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
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * name  风险名称
    * riskLevels  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'name' => 'name',
            'riskLevels' => 'risk_levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * name  风险名称
    * riskLevels  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'riskLevels' => 'setRiskLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    * name  风险名称
    * riskLevels  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'riskLevels' => 'getRiskLevels'
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
    const RISK_LEVELS_LOW = 'LOW';
    const RISK_LEVELS_MEDIUM = 'MEDIUM';
    const RISK_LEVELS_HIGH = 'HIGH';
    const RISK_LEVELS_NO_RISK = 'NO_RISK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelsAllowableValues()
    {
        return [
            self::RISK_LEVELS_LOW,
            self::RISK_LEVELS_MEDIUM,
            self::RISK_LEVELS_HIGH,
            self::RISK_LEVELS_NO_RISK,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['riskLevels'] = isset($data['riskLevels']) ? $data['riskLevels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getRiskLevelsAllowableValues();
                if (!is_null($this->container['riskLevels']) && !in_array($this->container['riskLevels'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevels', must be one of '%s'",
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
    * Gets instanceId
    *  **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： 实例ID。可通过查询实例列表接口ID字段获取 **约束限制**： 不涉及 **取值范围**： 以查询实例列表接口值为准，字符长度32-64。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  风险名称
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
    * @param string|null $name 风险名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets riskLevels
    *  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @return string|null
    */
    public function getRiskLevels()
    {
        return $this->container['riskLevels'];
    }

    /**
    * Sets riskLevels
    *
    * @param string|null $riskLevels 风险级别 - LOW：低 - MEDIUM：中 - HIGH：高 - NO_RISK：无风险
    *
    * @return $this
    */
    public function setRiskLevels($riskLevels)
    {
        $this->container['riskLevels'] = $riskLevels;
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

