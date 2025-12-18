<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceTopicDetailRespPartitions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceTopicDetailResp_partitions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  **参数解释**： 分区ID。 **取值范围**： 不涉及
    * leader  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    * leo  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    * hw  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    * lso  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    * lastUpdateTimestamp  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'int',
            'leader' => 'int',
            'leo' => 'int',
            'hw' => 'int',
            'lso' => 'int',
            'lastUpdateTimestamp' => 'int',
            'replicas' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespReplicas[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  **参数解释**： 分区ID。 **取值范围**： 不涉及
    * leader  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    * leo  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    * hw  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    * lso  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    * lastUpdateTimestamp  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => null,
        'leader' => null,
        'leo' => 'int64',
        'hw' => 'int64',
        'lso' => 'int64',
        'lastUpdateTimestamp' => 'int64',
        'replicas' => null
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
    * partition  **参数解释**： 分区ID。 **取值范围**： 不涉及
    * leader  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    * leo  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    * hw  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    * lso  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    * lastUpdateTimestamp  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'leader' => 'leader',
            'leo' => 'leo',
            'hw' => 'hw',
            'lso' => 'lso',
            'lastUpdateTimestamp' => 'last_update_timestamp',
            'replicas' => 'replicas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  **参数解释**： 分区ID。 **取值范围**： 不涉及
    * leader  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    * leo  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    * hw  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    * lso  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    * lastUpdateTimestamp  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'leader' => 'setLeader',
            'leo' => 'setLeo',
            'hw' => 'setHw',
            'lso' => 'setLso',
            'lastUpdateTimestamp' => 'setLastUpdateTimestamp',
            'replicas' => 'setReplicas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  **参数解释**： 分区ID。 **取值范围**： 不涉及
    * leader  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    * leo  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    * hw  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    * lso  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    * lastUpdateTimestamp  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'leader' => 'getLeader',
            'leo' => 'getLeo',
            'hw' => 'getHw',
            'lso' => 'getLso',
            'lastUpdateTimestamp' => 'getLastUpdateTimestamp',
            'replicas' => 'getReplicas'
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
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['leader'] = isset($data['leader']) ? $data['leader'] : null;
        $this->container['leo'] = isset($data['leo']) ? $data['leo'] : null;
        $this->container['hw'] = isset($data['hw']) ? $data['hw'] : null;
        $this->container['lso'] = isset($data['lso']) ? $data['lso'] : null;
        $this->container['lastUpdateTimestamp'] = isset($data['lastUpdateTimestamp']) ? $data['lastUpdateTimestamp'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
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
    * Gets partition
    *  **参数解释**： 分区ID。 **取值范围**： 不涉及
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
    * @param int|null $partition **参数解释**： 分区ID。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets leader
    *  **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLeader()
    {
        return $this->container['leader'];
    }

    /**
    * Sets leader
    *
    * @param int|null $leader **参数解释**： leader副本所在节点的id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLeader($leader)
    {
        $this->container['leader'] = $leader;
        return $this;
    }

    /**
    * Gets leo
    *  **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLeo()
    {
        return $this->container['leo'];
    }

    /**
    * Sets leo
    *
    * @param int|null $leo **参数解释**： 分区leader副本的LEO（Log End Offset）。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLeo($leo)
    {
        $this->container['leo'] = $leo;
        return $this;
    }

    /**
    * Gets hw
    *  **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHw()
    {
        return $this->container['hw'];
    }

    /**
    * Sets hw
    *
    * @param int|null $hw **参数解释**： 分区高水位（HW，High Watermark）。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHw($hw)
    {
        $this->container['hw'] = $hw;
        return $this;
    }

    /**
    * Gets lso
    *  **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLso()
    {
        return $this->container['lso'];
    }

    /**
    * Sets lso
    *
    * @param int|null $lso **参数解释**： 分区leader副本的LSO（Log Start Offset）。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLso($lso)
    {
        $this->container['lso'] = $lso;
        return $this;
    }

    /**
    * Gets lastUpdateTimestamp
    *  **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLastUpdateTimestamp()
    {
        return $this->container['lastUpdateTimestamp'];
    }

    /**
    * Sets lastUpdateTimestamp
    *
    * @param int|null $lastUpdateTimestamp **参数解释**： 分区上次写入消息的时间。  格式为Unix时间戳。  单位：毫秒。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLastUpdateTimestamp($lastUpdateTimestamp)
    {
        $this->container['lastUpdateTimestamp'] = $lastUpdateTimestamp;
        return $this;
    }

    /**
    * Gets replicas
    *  **参数解释**： 副本列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespReplicas[]|null
    */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
    * Sets replicas
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespReplicas[]|null $replicas **参数解释**： 副本列表。
    *
    * @return $this
    */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;
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

