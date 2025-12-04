<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceTopicReqTopics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceTopicReq_topics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retentionTime  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    * newPartitionNumbers  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * newPartitionBrokers  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topicOtherConfigs  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'retentionTime' => 'int',
            'syncReplication' => 'bool',
            'syncMessageFlush' => 'bool',
            'newPartitionNumbers' => 'int',
            'newPartitionBrokers' => 'int[]',
            'topicOtherConfigs' => '\HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceTopicReqTopicOtherConfigs[]',
            'topicDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retentionTime  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    * newPartitionNumbers  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * newPartitionBrokers  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topicOtherConfigs  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'retentionTime' => null,
        'syncReplication' => null,
        'syncMessageFlush' => null,
        'newPartitionNumbers' => 'int32',
        'newPartitionBrokers' => 'int32',
        'topicOtherConfigs' => null,
        'topicDesc' => null
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
    * id  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retentionTime  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    * newPartitionNumbers  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * newPartitionBrokers  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topicOtherConfigs  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'retentionTime' => 'retention_time',
            'syncReplication' => 'sync_replication',
            'syncMessageFlush' => 'sync_message_flush',
            'newPartitionNumbers' => 'new_partition_numbers',
            'newPartitionBrokers' => 'new_partition_brokers',
            'topicOtherConfigs' => 'topic_other_configs',
            'topicDesc' => 'topic_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retentionTime  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    * newPartitionNumbers  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * newPartitionBrokers  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topicOtherConfigs  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'retentionTime' => 'setRetentionTime',
            'syncReplication' => 'setSyncReplication',
            'syncMessageFlush' => 'setSyncMessageFlush',
            'newPartitionNumbers' => 'setNewPartitionNumbers',
            'newPartitionBrokers' => 'setNewPartitionBrokers',
            'topicOtherConfigs' => 'setTopicOtherConfigs',
            'topicDesc' => 'setTopicDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * retentionTime  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    * newPartitionNumbers  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * newPartitionBrokers  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topicOtherConfigs  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'retentionTime' => 'getRetentionTime',
            'syncReplication' => 'getSyncReplication',
            'syncMessageFlush' => 'getSyncMessageFlush',
            'newPartitionNumbers' => 'getNewPartitionNumbers',
            'newPartitionBrokers' => 'getNewPartitionBrokers',
            'topicOtherConfigs' => 'getTopicOtherConfigs',
            'topicDesc' => 'getTopicDesc'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['retentionTime'] = isset($data['retentionTime']) ? $data['retentionTime'] : null;
        $this->container['syncReplication'] = isset($data['syncReplication']) ? $data['syncReplication'] : null;
        $this->container['syncMessageFlush'] = isset($data['syncMessageFlush']) ? $data['syncMessageFlush'] : null;
        $this->container['newPartitionNumbers'] = isset($data['newPartitionNumbers']) ? $data['newPartitionNumbers'] : null;
        $this->container['newPartitionBrokers'] = isset($data['newPartitionBrokers']) ? $data['newPartitionBrokers'] : null;
        $this->container['topicOtherConfigs'] = isset($data['topicOtherConfigs']) ? $data['topicOtherConfigs'] : null;
        $this->container['topicDesc'] = isset($data['topicDesc']) ? $data['topicDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： Topic名称，不支持修改。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets retentionTime
    *  **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getRetentionTime()
    {
        return $this->container['retentionTime'];
    }

    /**
    * Sets retentionTime
    *
    * @param int|null $retentionTime **参数解释**： 老化时间，单位小时。 **约束限制**： 不涉及。 **取值范围**： 0-720。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRetentionTime($retentionTime)
    {
        $this->container['retentionTime'] = $retentionTime;
        return $this;
    }

    /**
    * Gets syncReplication
    *  **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getSyncReplication()
    {
        return $this->container['syncReplication'];
    }

    /**
    * Sets syncReplication
    *
    * @param bool|null $syncReplication **参数解释**： 是否同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步复制。 - false：不开启同步复制。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSyncReplication($syncReplication)
    {
        $this->container['syncReplication'] = $syncReplication;
        return $this;
    }

    /**
    * Gets syncMessageFlush
    *  **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getSyncMessageFlush()
    {
        return $this->container['syncMessageFlush'];
    }

    /**
    * Sets syncMessageFlush
    *
    * @param bool|null $syncMessageFlush **参数解释**： 是否同步落盘。 **约束限制**： 不涉及。 **取值范围**： - true：开启同步落盘。 - false：不开启同步落盘。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSyncMessageFlush($syncMessageFlush)
    {
        $this->container['syncMessageFlush'] = $syncMessageFlush;
        return $this;
    }

    /**
    * Gets newPartitionNumbers
    *  **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getNewPartitionNumbers()
    {
        return $this->container['newPartitionNumbers'];
    }

    /**
    * Sets newPartitionNumbers
    *
    * @param int|null $newPartitionNumbers **参数解释**： 分区数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNewPartitionNumbers($newPartitionNumbers)
    {
        $this->container['newPartitionNumbers'] = $newPartitionNumbers;
        return $this;
    }

    /**
    * Gets newPartitionBrokers
    *  **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int[]|null
    */
    public function getNewPartitionBrokers()
    {
        return $this->container['newPartitionBrokers'];
    }

    /**
    * Sets newPartitionBrokers
    *
    * @param int[]|null $newPartitionBrokers **参数解释**： 增加分区时指定broker列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNewPartitionBrokers($newPartitionBrokers)
    {
        $this->container['newPartitionBrokers'] = $newPartitionBrokers;
        return $this;
    }

    /**
    * Gets topicOtherConfigs
    *  **参数解释**： Topic配置。 **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceTopicReqTopicOtherConfigs[]|null
    */
    public function getTopicOtherConfigs()
    {
        return $this->container['topicOtherConfigs'];
    }

    /**
    * Sets topicOtherConfigs
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\UpdateInstanceTopicReqTopicOtherConfigs[]|null $topicOtherConfigs **参数解释**： Topic配置。 **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setTopicOtherConfigs($topicOtherConfigs)
    {
        $this->container['topicOtherConfigs'] = $topicOtherConfigs;
        return $this;
    }

    /**
    * Gets topicDesc
    *  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTopicDesc()
    {
        return $this->container['topicDesc'];
    }

    /**
    * Sets topicDesc
    *
    * @param string|null $topicDesc **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopicDesc($topicDesc)
    {
        $this->container['topicDesc'] = $topicDesc;
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

