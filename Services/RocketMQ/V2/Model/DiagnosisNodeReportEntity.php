<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisNodeReportEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisNodeReportEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isFaulted  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * messageAccumulation  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deadLock  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    * deadlockThread  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * stackId  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPop  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'isFaulted' => 'bool',
            'abnormalItemSum' => 'int',
            'messageAccumulation' => 'int',
            'deadLock' => 'bool',
            'deadlockThread' => 'string',
            'stackId' => 'string',
            'isPop' => 'bool',
            'consumeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isFaulted  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * messageAccumulation  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deadLock  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    * deadlockThread  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * stackId  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPop  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'isFaulted' => null,
        'abnormalItemSum' => null,
        'messageAccumulation' => 'int32',
        'deadLock' => null,
        'deadlockThread' => null,
        'stackId' => null,
        'isPop' => null,
        'consumeType' => null
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
    * nodeId  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isFaulted  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * messageAccumulation  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deadLock  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    * deadlockThread  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * stackId  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPop  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'isFaulted' => 'is_faulted',
            'abnormalItemSum' => 'abnormal_item_sum',
            'messageAccumulation' => 'message_accumulation',
            'deadLock' => 'dead_lock',
            'deadlockThread' => 'deadlock_thread',
            'stackId' => 'stack_id',
            'isPop' => 'is_pop',
            'consumeType' => 'consume_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isFaulted  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * messageAccumulation  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deadLock  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    * deadlockThread  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * stackId  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPop  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'isFaulted' => 'setIsFaulted',
            'abnormalItemSum' => 'setAbnormalItemSum',
            'messageAccumulation' => 'setMessageAccumulation',
            'deadLock' => 'setDeadLock',
            'deadlockThread' => 'setDeadlockThread',
            'stackId' => 'setStackId',
            'isPop' => 'setIsPop',
            'consumeType' => 'setConsumeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isFaulted  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    * abnormalItemSum  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * messageAccumulation  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * deadLock  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    * deadlockThread  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * stackId  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPop  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    * consumeType  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'isFaulted' => 'getIsFaulted',
            'abnormalItemSum' => 'getAbnormalItemSum',
            'messageAccumulation' => 'getMessageAccumulation',
            'deadLock' => 'getDeadLock',
            'deadlockThread' => 'getDeadlockThread',
            'stackId' => 'getStackId',
            'isPop' => 'getIsPop',
            'consumeType' => 'getConsumeType'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['isFaulted'] = isset($data['isFaulted']) ? $data['isFaulted'] : null;
        $this->container['abnormalItemSum'] = isset($data['abnormalItemSum']) ? $data['abnormalItemSum'] : null;
        $this->container['messageAccumulation'] = isset($data['messageAccumulation']) ? $data['messageAccumulation'] : null;
        $this->container['deadLock'] = isset($data['deadLock']) ? $data['deadLock'] : null;
        $this->container['deadlockThread'] = isset($data['deadlockThread']) ? $data['deadlockThread'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['isPop'] = isset($data['isPop']) ? $data['isPop'] : null;
        $this->container['consumeType'] = isset($data['consumeType']) ? $data['consumeType'] : null;
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
    * Gets nodeId
    *  **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**： 节点ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets isFaulted
    *  **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsFaulted()
    {
        return $this->container['isFaulted'];
    }

    /**
    * Sets isFaulted
    *
    * @param bool|null $isFaulted **参数解释**： 是否故障。 **约束限制**： 不涉及。 **取值范围**： - true：故障 - false：没有故障。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsFaulted($isFaulted)
    {
        $this->container['isFaulted'] = $isFaulted;
        return $this;
    }

    /**
    * Gets abnormalItemSum
    *  **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getAbnormalItemSum()
    {
        return $this->container['abnormalItemSum'];
    }

    /**
    * Sets abnormalItemSum
    *
    * @param int|null $abnormalItemSum **参数解释**： 异常项总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAbnormalItemSum($abnormalItemSum)
    {
        $this->container['abnormalItemSum'] = $abnormalItemSum;
        return $this;
    }

    /**
    * Gets messageAccumulation
    *  **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getMessageAccumulation()
    {
        return $this->container['messageAccumulation'];
    }

    /**
    * Sets messageAccumulation
    *
    * @param int|null $messageAccumulation **参数解释**： 消息堆积数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMessageAccumulation($messageAccumulation)
    {
        $this->container['messageAccumulation'] = $messageAccumulation;
        return $this;
    }

    /**
    * Gets deadLock
    *  **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getDeadLock()
    {
        return $this->container['deadLock'];
    }

    /**
    * Sets deadLock
    *
    * @param bool|null $deadLock **参数解释**： 是否为死锁。 **约束限制**： 不涉及。 **取值范围**： - true：是死锁。 - false：不是死锁。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDeadLock($deadLock)
    {
        $this->container['deadLock'] = $deadLock;
        return $this;
    }

    /**
    * Gets deadlockThread
    *  **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDeadlockThread()
    {
        return $this->container['deadlockThread'];
    }

    /**
    * Sets deadlockThread
    *
    * @param string|null $deadlockThread **参数解释**： 死锁线程。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDeadlockThread($deadlockThread)
    {
        $this->container['deadlockThread'] = $deadlockThread;
        return $this;
    }

    /**
    * Gets stackId
    *  **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId **参数解释**： 线程ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets isPop
    *  **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getIsPop()
    {
        return $this->container['isPop'];
    }

    /**
    * Sets isPop
    *
    * @param bool|null $isPop **参数解释**： 是否为pop消费模式。 **约束限制**： 不涉及。 **取值范围**： - true：是pop消费模式。 - false：不是pop消费模式。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsPop($isPop)
    {
        $this->container['isPop'] = $isPop;
        return $this;
    }

    /**
    * Gets consumeType
    *  **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getConsumeType()
    {
        return $this->container['consumeType'];
    }

    /**
    * Sets consumeType
    *
    * @param string|null $consumeType **参数解释**： 消费类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConsumeType($consumeType)
    {
        $this->container['consumeType'] = $consumeType;
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

