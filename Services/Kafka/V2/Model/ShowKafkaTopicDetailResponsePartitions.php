<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKafkaTopicDetailResponsePartitions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKafkaTopicDetailResponse_partitions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  **参数解释**： 分区编号。  **取值范围**： 不涉及。
    * leader  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'int',
            'leader' => 'int',
            'replicas' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  **参数解释**： 分区编号。  **取值范围**： 不涉及。
    * leader  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => null,
        'leader' => null,
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
    * partition  **参数解释**： 分区编号。  **取值范围**： 不涉及。
    * leader  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'leader' => 'leader',
            'replicas' => 'replicas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  **参数解释**： 分区编号。  **取值范围**： 不涉及。
    * leader  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'leader' => 'setLeader',
            'replicas' => 'setReplicas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  **参数解释**： 分区编号。  **取值范围**： 不涉及。
    * leader  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    * replicas  **参数解释**： 副本列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'leader' => 'getLeader',
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
    *  **参数解释**： 分区编号。  **取值范围**： 不涉及。
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
    * @param int|null $partition **参数解释**： 分区编号。  **取值范围**： 不涉及。
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
    *  **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
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
    * @param int|null $leader **参数解释**： leader副本所在节点的ID。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLeader($leader)
    {
        $this->container['leader'] = $leader;
        return $this;
    }

    /**
    * Gets replicas
    *  **参数解释**： 副本列表。
    *
    * @return int[]|null
    */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
    * Sets replicas
    *
    * @param int[]|null $replicas **参数解释**： 副本列表。
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

