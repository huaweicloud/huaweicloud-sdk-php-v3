<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeLoadbalancerChargeModeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeLoadbalancerChargeModeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancerIds  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * chargeMode  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancerIds' => 'string[]',
            'chargeMode' => 'string',
            'prepaidOptions' => '\HuaweiCloud\SDK\Elb\V3\Model\PrepaidChangeChargeModeOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancerIds  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * chargeMode  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancerIds' => null,
        'chargeMode' => null,
        'prepaidOptions' => null
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
    * loadbalancerIds  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * chargeMode  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancerIds' => 'loadbalancer_ids',
            'chargeMode' => 'charge_mode',
            'prepaidOptions' => 'prepaid_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancerIds  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * chargeMode  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancerIds' => 'setLoadbalancerIds',
            'chargeMode' => 'setChargeMode',
            'prepaidOptions' => 'setPrepaidOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancerIds  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * chargeMode  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancerIds' => 'getLoadbalancerIds',
            'chargeMode' => 'getChargeMode',
            'prepaidOptions' => 'getPrepaidOptions'
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
    const CHARGE_MODE_PREPAID = 'prepaid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_PREPAID,
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
        $this->container['loadbalancerIds'] = isset($data['loadbalancerIds']) ? $data['loadbalancerIds'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancerIds'] === null) {
            $invalidProperties[] = "'loadbalancerIds' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
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
    * Gets loadbalancerIds
    *  **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]
    */
    public function getLoadbalancerIds()
    {
        return $this->container['loadbalancerIds'];
    }

    /**
    * Sets loadbalancerIds
    *
    * @param string[] $loadbalancerIds **参数解释**：需要修改计费类型的负载均衡器ID列表。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerIds($loadbalancerIds)
    {
        $this->container['loadbalancerIds'] = $loadbalancerIds;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode **参数解释**：计费模式。  **约束限制**：不涉及  **取值范围**：仅支持设置为'prepaid'-包周期计费。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets prepaidOptions
    *  prepaidOptions
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PrepaidChangeChargeModeOption|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PrepaidChangeChargeModeOption|null $prepaidOptions prepaidOptions
    *
    * @return $this
    */
    public function setPrepaidOptions($prepaidOptions)
    {
        $this->container['prepaidOptions'] = $prepaidOptions;
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

