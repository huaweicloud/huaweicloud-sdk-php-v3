<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAiInstanceProtectionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAiInstanceProtectionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentIdList  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    * status  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentIdList' => 'string[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentIdList  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    * status  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentIdList' => null,
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
    * agentIdList  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    * status  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentIdList' => 'agent_id_list',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentIdList  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    * status  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @var string[]
    */
    protected static $setters = [
            'agentIdList' => 'setAgentIdList',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentIdList  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    * status  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @var string[]
    */
    protected static $getters = [
            'agentIdList' => 'getAgentIdList',
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
    const STATUS_OPEN = 'open';
    const STATUS_CLOSE = 'close';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSE,
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
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
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
        if ($this->container['agentIdList'] === null) {
            $invalidProperties[] = "'agentIdList' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['status']) > 10)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(open|close)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(open|close)$/.";
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
    * Gets agentIdList
    *  需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    *
    * @return string[]
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[] $agentIdList 需要修改防护状态的OpenClaw智能体ID列表 **约束限制**： - 单次最多50个 **取值范围**： 智能体实例的agent_id
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**: 目标防护状态 **取值范围**: - open：开启防护 - close：关闭防
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

