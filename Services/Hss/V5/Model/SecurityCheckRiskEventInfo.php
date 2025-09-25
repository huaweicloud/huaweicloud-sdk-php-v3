<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckRiskEventInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckRiskEventInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * eventName  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    * eventClassId  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    * attackFlag  **参数解释**： 攻击标识 **取值范围**： 不涉及
    * attackTime  **参数解释**： 攻击时间 **取值范围**： 不涉及
    * status  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'severity' => 'string',
            'eventName' => 'string',
            'eventClassId' => 'string',
            'attackFlag' => 'string',
            'attackTime' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * eventName  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    * eventClassId  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    * attackFlag  **参数解释**： 攻击标识 **取值范围**： 不涉及
    * attackTime  **参数解释**： 攻击时间 **取值范围**： 不涉及
    * status  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'severity' => null,
        'eventName' => null,
        'eventClassId' => null,
        'attackFlag' => null,
        'attackTime' => 'int64',
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
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * eventName  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    * eventClassId  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    * attackFlag  **参数解释**： 攻击标识 **取值范围**： 不涉及
    * attackTime  **参数解释**： 攻击时间 **取值范围**： 不涉及
    * status  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'severity' => 'severity',
            'eventName' => 'event_name',
            'eventClassId' => 'event_class_id',
            'attackFlag' => 'attack_flag',
            'attackTime' => 'attack_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * eventName  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    * eventClassId  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    * attackFlag  **参数解释**： 攻击标识 **取值范围**： 不涉及
    * attackTime  **参数解释**： 攻击时间 **取值范围**： 不涉及
    * status  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @var string[]
    */
    protected static $setters = [
            'severity' => 'setSeverity',
            'eventName' => 'setEventName',
            'eventClassId' => 'setEventClassId',
            'attackFlag' => 'setAttackFlag',
            'attackTime' => 'setAttackTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * severity  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    * eventName  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    * eventClassId  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    * attackFlag  **参数解释**： 攻击标识 **取值范围**： 不涉及
    * attackTime  **参数解释**： 攻击时间 **取值范围**： 不涉及
    * status  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
    *
    * @var string[]
    */
    protected static $getters = [
            'severity' => 'getSeverity',
            'eventName' => 'getEventName',
            'eventClassId' => 'getEventClassId',
            'attackFlag' => 'getAttackFlag',
            'attackTime' => 'getAttackTime',
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
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventClassId'] = isset($data['eventClassId']) ? $data['eventClassId'] : null;
        $this->container['attackFlag'] = isset($data['attackFlag']) ? $data['attackFlag'] : null;
        $this->container['attackTime'] = isset($data['attackTime']) ? $data['attackTime'] : null;
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
    * Gets severity
    *  **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释**： 风险级别 **取值范围**： - high：高危 - medium：中危 - low：低危 - safe：安全，无风险
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets eventName
    *  **参数解释**： 告警事件名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName **参数解释**： 告警事件名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventClassId
    *  **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getEventClassId()
    {
        return $this->container['eventClassId'];
    }

    /**
    * Sets eventClassId
    *
    * @param string|null $eventClassId **参数解释**： 告警事件class，用于前台生成事件名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEventClassId($eventClassId)
    {
        $this->container['eventClassId'] = $eventClassId;
        return $this;
    }

    /**
    * Gets attackFlag
    *  **参数解释**： 攻击标识 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAttackFlag()
    {
        return $this->container['attackFlag'];
    }

    /**
    * Sets attackFlag
    *
    * @param string|null $attackFlag **参数解释**： 攻击标识 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackFlag($attackFlag)
    {
        $this->container['attackFlag'] = $attackFlag;
        return $this;
    }

    /**
    * Gets attackTime
    *  **参数解释**： 攻击时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAttackTime()
    {
        return $this->container['attackTime'];
    }

    /**
    * Sets attackTime
    *
    * @param int|null $attackTime **参数解释**： 攻击时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackTime($attackTime)
    {
        $this->container['attackTime'] = $attackTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
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
    * @param string|null $status **参数解释**： 处理状态 **取值范围**： - unhandled：未处理 - handled：已处理
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

