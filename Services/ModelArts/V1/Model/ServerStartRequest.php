<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerStartRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerStartRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arch  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    * chargingMode  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arch' => 'string',
            'chargingMode' => 'string',
            'serverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arch  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    * chargingMode  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arch' => null,
        'chargingMode' => null,
        'serverType' => null
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
    * arch  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    * chargingMode  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arch' => 'arch',
            'chargingMode' => 'charging_mode',
            'serverType' => 'server_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arch  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    * chargingMode  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'arch' => 'setArch',
            'chargingMode' => 'setChargingMode',
            'serverType' => 'setServerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arch  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    * chargingMode  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'arch' => 'getArch',
            'chargingMode' => 'getChargingMode',
            'serverType' => 'getServerType'
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
    const ARCH_ARM = 'ARM';
    const ARCH_X86 = 'X86';
    const CHARGING_MODE_COMMON = 'COMMON';
    const CHARGING_MODE_POST_PAID = 'POST_PAID';
    const CHARGING_MODE_PRE_PAID = 'PRE_PAID';
    const SERVER_TYPE_BMS = 'BMS';
    const SERVER_TYPE_ECS = 'ECS';
    const SERVER_TYPE_HPS = 'HPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_ARM,
            self::ARCH_X86,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_COMMON,
            self::CHARGING_MODE_POST_PAID,
            self::CHARGING_MODE_PRE_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServerTypeAllowableValues()
    {
        return [
            self::SERVER_TYPE_BMS,
            self::SERVER_TYPE_ECS,
            self::SERVER_TYPE_HPS,
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
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getServerTypeAllowableValues();
                if (!is_null($this->container['serverType']) && !in_array($this->container['serverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serverType', must be one of '%s'",
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
    * Gets arch
    *  **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：服务器架构信息。 **约束限制**：不涉及 **取值范围**： - -ARM - X86 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**：服务器规格计费模式。 **约束限制**：不涉及。 **取值范围**： - [COMMON：同时支持包周期和按需](tag:hws,hws_hk) - POST_PAID：按需 - [PRE_PAID：包周期](tag:hws,hws_hk) **默认取值**：不涉及
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets serverType
    *  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
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

