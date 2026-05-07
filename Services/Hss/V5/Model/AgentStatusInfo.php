<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentStatusInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentStatusInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    * statusTime  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * abnormalReason  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentStatus' => 'string',
            'statusTime' => 'int',
            'abnormalReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    * statusTime  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * abnormalReason  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentStatus' => null,
        'statusTime' => 'int64',
        'abnormalReason' => null
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
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    * statusTime  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * abnormalReason  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentStatus' => 'agent_status',
            'statusTime' => 'status_time',
            'abnormalReason' => 'abnormal_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    * statusTime  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * abnormalReason  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentStatus' => 'setAgentStatus',
            'statusTime' => 'setStatusTime',
            'abnormalReason' => 'setAbnormalReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    * statusTime  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * abnormalReason  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentStatus' => 'getAgentStatus',
            'statusTime' => 'getStatusTime',
            'abnormalReason' => 'getAbnormalReason'
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
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['statusTime'] = isset($data['statusTime']) ? $data['statusTime'] : null;
        $this->container['abnormalReason'] = isset($data['abnormalReason']) ? $data['abnormalReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statusTime']) && ($this->container['statusTime'] > 4824695185000)) {
                $invalidProperties[] = "invalid value for 'statusTime', must be smaller than or equal to 4824695185000.";
            }
            if (!is_null($this->container['statusTime']) && ($this->container['statusTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'statusTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalReason']) && (mb_strlen($this->container['abnormalReason']) > 512)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['abnormalReason']) && (mb_strlen($this->container['abnormalReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalReason', the character length must be bigger than or equal to 0.";
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
    * Gets agentStatus
    *  **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: 包含如下3种。 - online：在线。 - offline：离线。 - agent_protect_interrupted：防护中断。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets statusTime
    *  **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    *
    * @return int|null
    */
    public function getStatusTime()
    {
        return $this->container['statusTime'];
    }

    /**
    * Sets statusTime
    *
    * @param int|null $statusTime **参数解释**： agent状态时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    *
    * @return $this
    */
    public function setStatusTime($statusTime)
    {
        $this->container['statusTime'] = $statusTime;
        return $this;
    }

    /**
    * Gets abnormalReason
    *  **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @return string|null
    */
    public function getAbnormalReason()
    {
        return $this->container['abnormalReason'];
    }

    /**
    * Sets abnormalReason
    *
    * @param string|null $abnormalReason **参数解释**： 异常原因 **取值范围**： 字符长度0-512位
    *
    * @return $this
    */
    public function setAbnormalReason($abnormalReason)
    {
        $this->container['abnormalReason'] = $abnormalReason;
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

