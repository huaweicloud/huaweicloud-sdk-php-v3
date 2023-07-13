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
    * id  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
    * replication  副本数，配置数据的可靠性。 取值范围：1-3。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * partition  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * retentionTime  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'replication' => 'int',
            'syncMessageFlush' => 'bool',
            'partition' => 'int',
            'syncReplication' => 'bool',
            'retentionTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
    * replication  副本数，配置数据的可靠性。 取值范围：1-3。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * partition  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * retentionTime  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'replication' => null,
        'syncMessageFlush' => null,
        'partition' => null,
        'syncReplication' => null,
        'retentionTime' => null
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
    * id  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
    * replication  副本数，配置数据的可靠性。 取值范围：1-3。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * partition  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * retentionTime  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'replication' => 'replication',
            'syncMessageFlush' => 'sync_message_flush',
            'partition' => 'partition',
            'syncReplication' => 'sync_replication',
            'retentionTime' => 'retention_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
    * replication  副本数，配置数据的可靠性。 取值范围：1-3。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * partition  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * retentionTime  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'replication' => 'setReplication',
            'syncMessageFlush' => 'setSyncMessageFlush',
            'partition' => 'setPartition',
            'syncReplication' => 'setSyncReplication',
            'retentionTime' => 'setRetentionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
    * replication  副本数，配置数据的可靠性。 取值范围：1-3。
    * syncMessageFlush  是否使用同步落盘。默认值为false。同步落盘会导致性能降低。
    * partition  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
    * syncReplication  是否开启同步复制，开启后，客户端生产消息时相应的也要设置acks=-1，否则不生效，默认关闭。
    * retentionTime  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'replication' => 'getReplication',
            'syncMessageFlush' => 'getSyncMessageFlush',
            'partition' => 'getPartition',
            'syncReplication' => 'getSyncReplication',
            'retentionTime' => 'getRetentionTime'
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
    *  topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
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
    * @param string $id topic名称，长度为4-64，以字母开头且只支持大小写字母、中横线、下划线、点以及数字。
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
    *  副本数，配置数据的可靠性。 取值范围：1-3。
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
    * @param int|null $replication 副本数，配置数据的可靠性。 取值范围：1-3。
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
    * Gets partition
    *  topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
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
    * @param int|null $partition topic分区数，设置消费的并发数。 取值范围：[1-100](tag:hws,hws_hk,otc,hws_ocb,ctc,sbc,hk_sbc,g42,tm,hk_g42,hk_tm)[1-20](tag:cmcc)。
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
    * Gets retentionTime
    *  消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
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
    * @param int|null $retentionTime 消息老化时间。默认值为72。 取值范围[1~168](tag:hws,hws_hk,hws_ocb,ctc,sbc,hk_sbc,hws_eu,g42,tm,hk_g42,hk_tm)[1-720](tag:ocb,otc)，单位小时。
    *
    * @return $this
    */
    public function setRetentionTime($retentionTime)
    {
        $this->container['retentionTime'] = $retentionTime;
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

