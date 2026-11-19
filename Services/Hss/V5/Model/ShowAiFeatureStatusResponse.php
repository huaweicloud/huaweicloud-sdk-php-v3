<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAiFeatureStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAiFeatureStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aiDefender  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    * agentarts  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    * officeace  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    * openclaw  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aiDefender' => 'string',
            'agentarts' => 'string',
            'officeace' => 'string',
            'openclaw' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aiDefender  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    * agentarts  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    * officeace  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    * openclaw  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aiDefender' => null,
        'agentarts' => null,
        'officeace' => null,
        'openclaw' => null
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
    * aiDefender  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    * agentarts  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    * officeace  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    * openclaw  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aiDefender' => 'ai_defender',
            'agentarts' => 'agentarts',
            'officeace' => 'officeace',
            'openclaw' => 'openclaw'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aiDefender  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    * agentarts  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    * officeace  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    * openclaw  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @var string[]
    */
    protected static $setters = [
            'aiDefender' => 'setAiDefender',
            'agentarts' => 'setAgentarts',
            'officeace' => 'setOfficeace',
            'openclaw' => 'setOpenclaw'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aiDefender  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    * agentarts  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    * officeace  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    * openclaw  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @var string[]
    */
    protected static $getters = [
            'aiDefender' => 'getAiDefender',
            'agentarts' => 'getAgentarts',
            'officeace' => 'getOfficeace',
            'openclaw' => 'getOpenclaw'
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
        $this->container['aiDefender'] = isset($data['aiDefender']) ? $data['aiDefender'] : null;
        $this->container['agentarts'] = isset($data['agentarts']) ? $data['agentarts'] : null;
        $this->container['officeace'] = isset($data['officeace']) ? $data['officeace'] : null;
        $this->container['openclaw'] = isset($data['openclaw']) ? $data['openclaw'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['aiDefender']) && !preg_match("/^(not_enabled|enabled)$/", $this->container['aiDefender'])) {
                $invalidProperties[] = "invalid value for 'aiDefender', must be conform to the pattern /^(not_enabled|enabled)$/.";
            }
            if (!is_null($this->container['agentarts']) && !preg_match("/^(not_available|not_enabled|enabled)$/", $this->container['agentarts'])) {
                $invalidProperties[] = "invalid value for 'agentarts', must be conform to the pattern /^(not_available|not_enabled|enabled)$/.";
            }
            if (!is_null($this->container['officeace']) && !preg_match("/^(not_available|not_enabled|enabled)$/", $this->container['officeace'])) {
                $invalidProperties[] = "invalid value for 'officeace', must be conform to the pattern /^(not_available|not_enabled|enabled)$/.";
            }
            if (!is_null($this->container['openclaw']) && !preg_match("/^(not_available|enabled)$/", $this->container['openclaw'])) {
                $invalidProperties[] = "invalid value for 'openclaw', must be conform to the pattern /^(not_available|enabled)$/.";
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
    * Gets aiDefender
    *  **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    *
    * @return string|null
    */
    public function getAiDefender()
    {
        return $this->container['aiDefender'];
    }

    /**
    * Sets aiDefender
    *
    * @param string|null $aiDefender **参数解释**: AI Defender白名单开关状态 **取值范围**: - not_enabled：该Region已上线AI Defender，但该客户未开通，需显示引导页面 - enabled：该Region已上线AI Defender，并且该客户已开通
    *
    * @return $this
    */
    public function setAiDefender($aiDefender)
    {
        $this->container['aiDefender'] = $aiDefender;
        return $this;
    }

    /**
    * Gets agentarts
    *  **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    *
    * @return string|null
    */
    public function getAgentarts()
    {
        return $this->container['agentarts'];
    }

    /**
    * Sets agentarts
    *
    * @param string|null $agentarts **参数解释**: AgentArts开关状态 **取值范围**: - not_available：该Region未上线AgentArts，不显示AgentArts任何内容 - not_enabled：该Region已上线AgentArts，但该客户未开通 - enabled：该Region已上线AgentArts，并且该客户已开通
    *
    * @return $this
    */
    public function setAgentarts($agentarts)
    {
        $this->container['agentarts'] = $agentarts;
        return $this;
    }

    /**
    * Gets officeace
    *  **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    *
    * @return string|null
    */
    public function getOfficeace()
    {
        return $this->container['officeace'];
    }

    /**
    * Sets officeace
    *
    * @param string|null $officeace **参数解释**: OfficeAce开关状态 **取值范围**: - not_available：该Region未上线OfficeAce，不显示OfficeAce任何内容 - not_enabled：该Region已上线OfficeAce，但该客户未开通 - enabled：该Region已上线OfficeAce，并且该客户已开通
    *
    * @return $this
    */
    public function setOfficeace($officeace)
    {
        $this->container['officeace'] = $officeace;
        return $this;
    }

    /**
    * Gets openclaw
    *  **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @return string|null
    */
    public function getOpenclaw()
    {
        return $this->container['openclaw'];
    }

    /**
    * Sets openclaw
    *
    * @param string|null $openclaw **参数解释**: OpenClaw开关状态 **取值范围**: - not_available：该Region未上线OpenClaw - enabled：该Region已上线OpenClaw
    *
    * @return $this
    */
    public function setOpenclaw($openclaw)
    {
        $this->container['openclaw'] = $openclaw;
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

