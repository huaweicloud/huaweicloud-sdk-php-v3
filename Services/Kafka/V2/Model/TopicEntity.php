<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopicEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopicEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policiesOnly  是否为默认策略。
    * name  topic名称。
    * replication  副本数，配置数据的可靠性。
    * partition  topic分区数，设置消费的并发数。
    * retentionTime  消息老化时间。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * externalConfigs  扩展配置。
    * topicType  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policiesOnly' => 'bool',
            'name' => 'string',
            'replication' => 'int',
            'partition' => 'int',
            'retentionTime' => 'int',
            'syncReplication' => 'bool',
            'syncMessageFlush' => 'bool',
            'externalConfigs' => 'object',
            'topicType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policiesOnly  是否为默认策略。
    * name  topic名称。
    * replication  副本数，配置数据的可靠性。
    * partition  topic分区数，设置消费的并发数。
    * retentionTime  消息老化时间。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * externalConfigs  扩展配置。
    * topicType  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policiesOnly' => null,
        'name' => null,
        'replication' => null,
        'partition' => null,
        'retentionTime' => null,
        'syncReplication' => null,
        'syncMessageFlush' => null,
        'externalConfigs' => null,
        'topicType' => null
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
    * policiesOnly  是否为默认策略。
    * name  topic名称。
    * replication  副本数，配置数据的可靠性。
    * partition  topic分区数，设置消费的并发数。
    * retentionTime  消息老化时间。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * externalConfigs  扩展配置。
    * topicType  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policiesOnly' => 'policiesOnly',
            'name' => 'name',
            'replication' => 'replication',
            'partition' => 'partition',
            'retentionTime' => 'retention_time',
            'syncReplication' => 'sync_replication',
            'syncMessageFlush' => 'sync_message_flush',
            'externalConfigs' => 'external_configs',
            'topicType' => 'topic_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policiesOnly  是否为默认策略。
    * name  topic名称。
    * replication  副本数，配置数据的可靠性。
    * partition  topic分区数，设置消费的并发数。
    * retentionTime  消息老化时间。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * externalConfigs  扩展配置。
    * topicType  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @var string[]
    */
    protected static $setters = [
            'policiesOnly' => 'setPoliciesOnly',
            'name' => 'setName',
            'replication' => 'setReplication',
            'partition' => 'setPartition',
            'retentionTime' => 'setRetentionTime',
            'syncReplication' => 'setSyncReplication',
            'syncMessageFlush' => 'setSyncMessageFlush',
            'externalConfigs' => 'setExternalConfigs',
            'topicType' => 'setTopicType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policiesOnly  是否为默认策略。
    * name  topic名称。
    * replication  副本数，配置数据的可靠性。
    * partition  topic分区数，设置消费的并发数。
    * retentionTime  消息老化时间。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * externalConfigs  扩展配置。
    * topicType  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @var string[]
    */
    protected static $getters = [
            'policiesOnly' => 'getPoliciesOnly',
            'name' => 'getName',
            'replication' => 'getReplication',
            'partition' => 'getPartition',
            'retentionTime' => 'getRetentionTime',
            'syncReplication' => 'getSyncReplication',
            'syncMessageFlush' => 'getSyncMessageFlush',
            'externalConfigs' => 'getExternalConfigs',
            'topicType' => 'getTopicType'
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
        $this->container['policiesOnly'] = isset($data['policiesOnly']) ? $data['policiesOnly'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['retentionTime'] = isset($data['retentionTime']) ? $data['retentionTime'] : null;
        $this->container['syncReplication'] = isset($data['syncReplication']) ? $data['syncReplication'] : null;
        $this->container['syncMessageFlush'] = isset($data['syncMessageFlush']) ? $data['syncMessageFlush'] : null;
        $this->container['externalConfigs'] = isset($data['externalConfigs']) ? $data['externalConfigs'] : null;
        $this->container['topicType'] = isset($data['topicType']) ? $data['topicType'] : null;
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
    * Gets policiesOnly
    *  是否为默认策略。
    *
    * @return bool|null
    */
    public function getPoliciesOnly()
    {
        return $this->container['policiesOnly'];
    }

    /**
    * Sets policiesOnly
    *
    * @param bool|null $policiesOnly 是否为默认策略。
    *
    * @return $this
    */
    public function setPoliciesOnly($policiesOnly)
    {
        $this->container['policiesOnly'] = $policiesOnly;
        return $this;
    }

    /**
    * Gets name
    *  topic名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name topic名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets replication
    *  副本数，配置数据的可靠性。
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
    * @param int|null $replication 副本数，配置数据的可靠性。
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets partition
    *  topic分区数，设置消费的并发数。
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
    * @param int|null $partition topic分区数，设置消费的并发数。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets retentionTime
    *  消息老化时间。
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
    * @param int|null $retentionTime 消息老化时间。
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
    *  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
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
    * @param bool|null $syncReplication 是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
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
    *  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
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
    * @param bool|null $syncMessageFlush 是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    *
    * @return $this
    */
    public function setSyncMessageFlush($syncMessageFlush)
    {
        $this->container['syncMessageFlush'] = $syncMessageFlush;
        return $this;
    }

    /**
    * Gets externalConfigs
    *  扩展配置。
    *
    * @return object|null
    */
    public function getExternalConfigs()
    {
        return $this->container['externalConfigs'];
    }

    /**
    * Sets externalConfigs
    *
    * @param object|null $externalConfigs 扩展配置。
    *
    * @return $this
    */
    public function setExternalConfigs($externalConfigs)
    {
        $this->container['externalConfigs'] = $externalConfigs;
        return $this;
    }

    /**
    * Gets topicType
    *  topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @return int|null
    */
    public function getTopicType()
    {
        return $this->container['topicType'];
    }

    /**
    * Sets topicType
    *
    * @param int|null $topicType topic类型(0:普通Topic 1:系统(内部)Topic)。
    *
    * @return $this
    */
    public function setTopicType($topicType)
    {
        $this->container['topicType'] = $topicType;
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

