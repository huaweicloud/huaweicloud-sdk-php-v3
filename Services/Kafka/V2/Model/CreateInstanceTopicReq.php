<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceTopicReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceTopicReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * replication  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    * partition  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    * retentionTime  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    * topicOtherConfigs  **参数解释**： Topic配置
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'replication' => 'int',
            'syncMessageFlush' => 'bool',
            'partition' => 'int',
            'syncReplication' => 'bool',
            'retentionTime' => 'int',
            'topicOtherConfigs' => '\HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceTopicReqTopicOtherConfigs[]',
            'topicDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * replication  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    * partition  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    * retentionTime  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    * topicOtherConfigs  **参数解释**： Topic配置
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'replication' => null,
        'syncMessageFlush' => null,
        'partition' => null,
        'syncReplication' => null,
        'retentionTime' => null,
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
    * id  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * replication  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    * partition  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    * retentionTime  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    * topicOtherConfigs  **参数解释**： Topic配置
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'replication' => 'replication',
            'syncMessageFlush' => 'sync_message_flush',
            'partition' => 'partition',
            'syncReplication' => 'sync_replication',
            'retentionTime' => 'retention_time',
            'topicOtherConfigs' => 'topic_other_configs',
            'topicDesc' => 'topic_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * replication  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    * partition  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    * retentionTime  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    * topicOtherConfigs  **参数解释**： Topic配置
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'replication' => 'setReplication',
            'syncMessageFlush' => 'setSyncMessageFlush',
            'partition' => 'setPartition',
            'syncReplication' => 'setSyncReplication',
            'retentionTime' => 'setRetentionTime',
            'topicOtherConfigs' => 'setTopicOtherConfigs',
            'topicDesc' => 'setTopicDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * replication  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    * syncMessageFlush  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    * partition  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    * syncReplication  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    * retentionTime  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    * topicOtherConfigs  **参数解释**： Topic配置
    * topicDesc  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'replication' => 'getReplication',
            'syncMessageFlush' => 'getSyncMessageFlush',
            'partition' => 'getPartition',
            'syncReplication' => 'getSyncReplication',
            'retentionTime' => 'getRetentionTime',
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
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['syncMessageFlush'] = isset($data['syncMessageFlush']) ? $data['syncMessageFlush'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['syncReplication'] = isset($data['syncReplication']) ? $data['syncReplication'] : null;
        $this->container['retentionTime'] = isset($data['retentionTime']) ? $data['retentionTime'] : null;
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
            if ((mb_strlen($this->container['id']) > 200)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 200.";
            }
            if ((mb_strlen($this->container['id']) < 3)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['replication']) && ($this->container['replication'] > 3)) {
                $invalidProperties[] = "invalid value for 'replication', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['replication']) && ($this->container['replication'] < 1)) {
                $invalidProperties[] = "invalid value for 'replication', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['topicDesc']) && (mb_strlen($this->container['topicDesc']) > 200)) {
                $invalidProperties[] = "invalid value for 'topicDesc', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['topicDesc']) && (mb_strlen($this->container['topicDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicDesc', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
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
    * @param string $id **参数解释**： Topic名称。 **约束限制**： 长度为3-200，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets replication
    *  **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
    * Sets replication
    *
    * @param int|null $replication **参数解释**： 副本数，配置数据的可靠性。副本数和代理数有关，如果有3个代理，最大副本数是3。 **约束限制**： 不涉及。 **取值范围**： 不涉及 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets syncMessageFlush
    *  **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
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
    * @param bool|null $syncMessageFlush **参数解释**： 是否使用同步落盘，同步落盘会导致性能降低。 **约束限制**： 不涉及。 **取值范围**： - true：同步落盘。 - false：不使用同步落盘。 **默认取值**： false
    *
    * @return $this
    */
    public function setSyncMessageFlush($syncMessageFlush)
    {
        $this->container['syncMessageFlush'] = $syncMessageFlush;
        return $this;
    }

    /**
    * Gets partition
    *  **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param int|null $partition **参数解释**： Topic分区数，设置消费的并发数。 **约束限制**： 不涉及。 **取值范围**： 1-200。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets syncReplication
    *  **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
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
    * @param bool|null $syncReplication **参数解释**： 是否开启同步复制。 **约束限制**： 不涉及。 **取值范围**： - true：开启。开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效。 - false：不开启。 **默认取值**： false。
    *
    * @return $this
    */
    public function setSyncReplication($syncReplication)
    {
        $this->container['syncReplication'] = $syncReplication;
        return $this;
    }

    /**
    * Gets retentionTime
    *  **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
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
    * @param int|null $retentionTime **参数解释**： 消息老化时间。 **约束限制**： 不涉及。 **取值范围**： 1-720 **默认取值**： 72
    *
    * @return $this
    */
    public function setRetentionTime($retentionTime)
    {
        $this->container['retentionTime'] = $retentionTime;
        return $this;
    }

    /**
    * Gets topicOtherConfigs
    *  **参数解释**： Topic配置
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceTopicReqTopicOtherConfigs[]|null
    */
    public function getTopicOtherConfigs()
    {
        return $this->container['topicOtherConfigs'];
    }

    /**
    * Sets topicOtherConfigs
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\CreateInstanceTopicReqTopicOtherConfigs[]|null $topicOtherConfigs **参数解释**： Topic配置
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
    *  **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
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
    * @param string|null $topicDesc **参数解释**： Topic描述。 **约束限制**： 不涉及。 **取值范围**： 0-200个字符。 **默认取值**： 不涉及。
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

