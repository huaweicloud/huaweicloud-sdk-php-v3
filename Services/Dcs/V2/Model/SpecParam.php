<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SpecParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SpecParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * shardingCount  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    * replicaCount  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    * cacheMode  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'shardingCount' => 'int',
            'replicaCount' => 'int',
            'cacheMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * shardingCount  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    * replicaCount  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    * cacheMode  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'shardingCount' => 'int32',
        'replicaCount' => 'int32',
        'cacheMode' => null
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
    * shardingCount  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    * replicaCount  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    * cacheMode  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'shardingCount' => 'sharding_count',
            'replicaCount' => 'replica_count',
            'cacheMode' => 'cache_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * shardingCount  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    * replicaCount  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    * cacheMode  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'shardingCount' => 'setShardingCount',
            'replicaCount' => 'setReplicaCount',
            'cacheMode' => 'setCacheMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * shardingCount  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    * replicaCount  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    * cacheMode  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'shardingCount' => 'getShardingCount',
            'replicaCount' => 'getReplicaCount',
            'cacheMode' => 'getCacheMode'
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
        $this->container['shardingCount'] = isset($data['shardingCount']) ? $data['shardingCount'] : null;
        $this->container['replicaCount'] = isset($data['replicaCount']) ? $data['replicaCount'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
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
    * Gets shardingCount
    *  **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getShardingCount()
    {
        return $this->container['shardingCount'];
    }

    /**
    * Sets shardingCount
    *
    * @param int|null $shardingCount **参数解释**： 实例分片数。 **约束限制**： 不涉及。 **取值范围**： 1-128。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setShardingCount($shardingCount)
    {
        $this->container['shardingCount'] = $shardingCount;
        return $this;
    }

    /**
    * Gets replicaCount
    *  副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getReplicaCount()
    {
        return $this->container['replicaCount'];
    }

    /**
    * Sets replicaCount
    *
    * @param int|null $replicaCount 副本数 **参数解释**： 实例副本数。 **约束限制**： 不涉及。 **取值范围**： 1-10。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setReplicaCount($replicaCount)
    {
        $this->container['replicaCount'] = $replicaCount;
        return $this;
    }

    /**
    * Gets cacheMode
    *  副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCacheMode()
    {
        return $this->container['cacheMode'];
    }

    /**
    * Sets cacheMode
    *
    * @param string|null $cacheMode 副本数 **参数解释**： 实例类型。 **约束限制**： 不涉及。 **取值范围**： 1.ha：主备类型 2.single：单机类型 3.ha_rw_split：读写分离类型 4.proxy：proxy集群类型 5.cluster：cluster集群类型 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCacheMode($cacheMode)
    {
        $this->container['cacheMode'] = $cacheMode;
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

