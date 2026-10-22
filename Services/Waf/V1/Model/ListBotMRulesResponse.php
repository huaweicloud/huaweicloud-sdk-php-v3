<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBotMRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBotMRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tenantId  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * knownBotDetection  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * transparentDetection  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * behaviorDetection  behaviorDetection
    * trafficDetectionConditions  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * interactiveDetection  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'tenantId' => 'string',
            'knownBotDetection' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]',
            'transparentDetection' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]',
            'behaviorDetection' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMBehaviorDetectionRule',
            'trafficDetectionConditions' => '\HuaweiCloud\SDK\Waf\V1\Model\TrafficDetectionConditionDTO[]',
            'interactiveDetection' => '\HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tenantId  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * knownBotDetection  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * transparentDetection  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * behaviorDetection  behaviorDetection
    * trafficDetectionConditions  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * interactiveDetection  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'tenantId' => null,
        'knownBotDetection' => null,
        'transparentDetection' => null,
        'behaviorDetection' => null,
        'trafficDetectionConditions' => null,
        'interactiveDetection' => null
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
    * policyId  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tenantId  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * knownBotDetection  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * transparentDetection  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * behaviorDetection  behaviorDetection
    * trafficDetectionConditions  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * interactiveDetection  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'tenantId' => 'tenant_id',
            'knownBotDetection' => 'known_bot_detection',
            'transparentDetection' => 'transparent_detection',
            'behaviorDetection' => 'behavior_detection',
            'trafficDetectionConditions' => 'traffic_detection_conditions',
            'interactiveDetection' => 'interactive_detection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tenantId  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * knownBotDetection  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * transparentDetection  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * behaviorDetection  behaviorDetection
    * trafficDetectionConditions  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * interactiveDetection  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'tenantId' => 'setTenantId',
            'knownBotDetection' => 'setKnownBotDetection',
            'transparentDetection' => 'setTransparentDetection',
            'behaviorDetection' => 'setBehaviorDetection',
            'trafficDetectionConditions' => 'setTrafficDetectionConditions',
            'interactiveDetection' => 'setInteractiveDetection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * tenantId  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * knownBotDetection  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * transparentDetection  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * behaviorDetection  behaviorDetection
    * trafficDetectionConditions  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * interactiveDetection  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'tenantId' => 'getTenantId',
            'knownBotDetection' => 'getKnownBotDetection',
            'transparentDetection' => 'getTransparentDetection',
            'behaviorDetection' => 'getBehaviorDetection',
            'trafficDetectionConditions' => 'getTrafficDetectionConditions',
            'interactiveDetection' => 'getInteractiveDetection'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['knownBotDetection'] = isset($data['knownBotDetection']) ? $data['knownBotDetection'] : null;
        $this->container['transparentDetection'] = isset($data['transparentDetection']) ? $data['transparentDetection'] : null;
        $this->container['behaviorDetection'] = isset($data['behaviorDetection']) ? $data['behaviorDetection'] : null;
        $this->container['trafficDetectionConditions'] = isset($data['trafficDetectionConditions']) ? $data['trafficDetectionConditions'] : null;
        $this->container['interactiveDetection'] = isset($data['interactiveDetection']) ? $data['interactiveDetection'] : null;
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
    * Gets policyId
    *  **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId **参数解释：** 策略Id，关联BotM规则的防护策略唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释：** 租户Id，当前BotM规则所属的租户唯一标识。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets knownBotDetection
    *  **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null
    */
    public function getKnownBotDetection()
    {
        return $this->container['knownBotDetection'];
    }

    /**
    * Sets knownBotDetection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null $knownBotDetection **参数解释：** 已知Bot相关的所有规则，包含针对已知Bot的检测与防护规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKnownBotDetection($knownBotDetection)
    {
        $this->container['knownBotDetection'] = $knownBotDetection;
        return $this;
    }

    /**
    * Gets transparentDetection
    *  **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null
    */
    public function getTransparentDetection()
    {
        return $this->container['transparentDetection'];
    }

    /**
    * Sets transparentDetection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null $transparentDetection **参数解释：** 透明检测相关的所有规则，包含无感知的Bot透明检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTransparentDetection($transparentDetection)
    {
        $this->container['transparentDetection'] = $transparentDetection;
        return $this;
    }

    /**
    * Gets behaviorDetection
    *  behaviorDetection
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMBehaviorDetectionRule|null
    */
    public function getBehaviorDetection()
    {
        return $this->container['behaviorDetection'];
    }

    /**
    * Sets behaviorDetection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMBehaviorDetectionRule|null $behaviorDetection behaviorDetection
    *
    * @return $this
    */
    public function setBehaviorDetection($behaviorDetection)
    {
        $this->container['behaviorDetection'] = $behaviorDetection;
        return $this;
    }

    /**
    * Gets trafficDetectionConditions
    *  **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TrafficDetectionConditionDTO[]|null
    */
    public function getTrafficDetectionConditions()
    {
        return $this->container['trafficDetectionConditions'];
    }

    /**
    * Sets trafficDetectionConditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TrafficDetectionConditionDTO[]|null $trafficDetectionConditions **参数解释：** 需要BOT检测的流量检测条件，定义触发Bot检测的流量筛选规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTrafficDetectionConditions($trafficDetectionConditions)
    {
        $this->container['trafficDetectionConditions'] = $trafficDetectionConditions;
        return $this;
    }

    /**
    * Gets interactiveDetection
    *  **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null
    */
    public function getInteractiveDetection()
    {
        return $this->container['interactiveDetection'];
    }

    /**
    * Sets interactiveDetection
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BotMRule[]|null $interactiveDetection **参数解释：** 主动特征检测规则列表，包含需要主动交互验证的Bot检测规则。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInteractiveDetection($interactiveDetection)
    {
        $this->container['interactiveDetection'] = $interactiveDetection;
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

