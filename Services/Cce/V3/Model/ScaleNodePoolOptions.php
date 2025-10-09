<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleNodePoolOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleNodePoolOptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalableChecking  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    * scalePolicy  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    * billingConfigOverride  billingConfigOverride
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalableChecking' => 'string',
            'scalePolicy' => 'string',
            'billingConfigOverride' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleUpBillingConfigOverride'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalableChecking  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    * scalePolicy  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    * billingConfigOverride  billingConfigOverride
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalableChecking' => null,
        'scalePolicy' => null,
        'billingConfigOverride' => null
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
    * scalableChecking  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    * scalePolicy  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    * billingConfigOverride  billingConfigOverride
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalableChecking' => 'scalableChecking',
            'scalePolicy' => 'scalePolicy',
            'billingConfigOverride' => 'billingConfigOverride'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalableChecking  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    * scalePolicy  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    * billingConfigOverride  billingConfigOverride
    *
    * @var string[]
    */
    protected static $setters = [
            'scalableChecking' => 'setScalableChecking',
            'scalePolicy' => 'setScalePolicy',
            'billingConfigOverride' => 'setBillingConfigOverride'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalableChecking  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    * scalePolicy  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    * billingConfigOverride  billingConfigOverride
    *
    * @var string[]
    */
    protected static $getters = [
            'scalableChecking' => 'getScalableChecking',
            'scalePolicy' => 'getScalePolicy',
            'billingConfigOverride' => 'getBillingConfigOverride'
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
    const SCALE_POLICY_AZ_BALANCE = 'AZBalance';
    const SCALE_POLICY_RANDOM = 'Random';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalePolicyAllowableValues()
    {
        return [
            self::SCALE_POLICY_AZ_BALANCE,
            self::SCALE_POLICY_RANDOM,
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
        $this->container['scalableChecking'] = isset($data['scalableChecking']) ? $data['scalableChecking'] : null;
        $this->container['scalePolicy'] = isset($data['scalePolicy']) ? $data['scalePolicy'] : null;
        $this->container['billingConfigOverride'] = isset($data['billingConfigOverride']) ? $data['billingConfigOverride'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScalePolicyAllowableValues();
                if (!is_null($this->container['scalePolicy']) && !in_array($this->container['scalePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalePolicy', must be one of '%s'",
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
    * Gets scalableChecking
    *  扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    *
    * @return string|null
    */
    public function getScalableChecking()
    {
        return $this->container['scalableChecking'];
    }

    /**
    * Sets scalableChecking
    *
    * @param string|null $scalableChecking 扩容状态检查策略: instant(同步检查), async(异步检查)。默认同步检查instant
    *
    * @return $this
    */
    public function setScalableChecking($scalableChecking)
    {
        $this->container['scalableChecking'] = $scalableChecking;
        return $this;
    }

    /**
    * Gets scalePolicy
    *  **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    *
    * @return string|null
    */
    public function getScalePolicy()
    {
        return $this->container['scalePolicy'];
    }

    /**
    * Sets scalePolicy
    *
    * @param string|null $scalePolicy **参数解释**： 扩容的策略，允许为空，该参数scaleGroups传多项时有效。 **约束限制**： 不涉及 **取值范围**： - AZBalance：AZ优先策略，扩容节点池时，系统会使各个AZ间的节点数尽可能的均衡，规格会在所选伸缩组中随机指定。该策略适用于对节点成本和可用区无特殊要求的场景，优点是配置简便、降低单点故障风险。注意：如果某个AZ资源不足，该AZ期望的扩容节点会向其他AZ扩容，可能会使AZ间节点不均衡。如需解决该问题，可在该AZ资源充足时尝试再次扩容。 - Random：随机策略，从下发的规格scaleGroups列表中随机选择伸缩组扩容。  **默认取值**： Random
    *
    * @return $this
    */
    public function setScalePolicy($scalePolicy)
    {
        $this->container['scalePolicy'] = $scalePolicy;
        return $this;
    }

    /**
    * Gets billingConfigOverride
    *  billingConfigOverride
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleUpBillingConfigOverride|null
    */
    public function getBillingConfigOverride()
    {
        return $this->container['billingConfigOverride'];
    }

    /**
    * Sets billingConfigOverride
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleUpBillingConfigOverride|null $billingConfigOverride billingConfigOverride
    *
    * @return $this
    */
    public function setBillingConfigOverride($billingConfigOverride)
    {
        $this->container['billingConfigOverride'] = $billingConfigOverride;
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

