<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * meta  meta
    * transactions  事务节点
    * locks  锁节点
    * edges  边，连接节点表达关系
    * conflictGroups  冲突组，每条 conflicts_with 边对应一个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'meta' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespMeta',
            'transactions' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespTransactions[]',
            'locks' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLocks[]',
            'edges' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespEdges[]',
            'conflictGroups' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespConflictGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * meta  meta
    * transactions  事务节点
    * locks  锁节点
    * edges  边，连接节点表达关系
    * conflictGroups  冲突组，每条 conflicts_with 边对应一个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'meta' => null,
        'transactions' => null,
        'locks' => null,
        'edges' => null,
        'conflictGroups' => null
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
    * meta  meta
    * transactions  事务节点
    * locks  锁节点
    * edges  边，连接节点表达关系
    * conflictGroups  冲突组，每条 conflicts_with 边对应一个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'meta' => 'meta',
            'transactions' => 'transactions',
            'locks' => 'locks',
            'edges' => 'edges',
            'conflictGroups' => 'conflict_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * meta  meta
    * transactions  事务节点
    * locks  锁节点
    * edges  边，连接节点表达关系
    * conflictGroups  冲突组，每条 conflicts_with 边对应一个
    *
    * @var string[]
    */
    protected static $setters = [
            'meta' => 'setMeta',
            'transactions' => 'setTransactions',
            'locks' => 'setLocks',
            'edges' => 'setEdges',
            'conflictGroups' => 'setConflictGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * meta  meta
    * transactions  事务节点
    * locks  锁节点
    * edges  边，连接节点表达关系
    * conflictGroups  冲突组，每条 conflicts_with 边对应一个
    *
    * @var string[]
    */
    protected static $getters = [
            'meta' => 'getMeta',
            'transactions' => 'getTransactions',
            'locks' => 'getLocks',
            'edges' => 'getEdges',
            'conflictGroups' => 'getConflictGroups'
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
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['locks'] = isset($data['locks']) ? $data['locks'] : null;
        $this->container['edges'] = isset($data['edges']) ? $data['edges'] : null;
        $this->container['conflictGroups'] = isset($data['conflictGroups']) ? $data['conflictGroups'] : null;
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
    * Gets meta
    *  meta
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespMeta|null
    */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
    * Sets meta
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespMeta|null $meta meta
    *
    * @return $this
    */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;
        return $this;
    }

    /**
    * Gets transactions
    *  事务节点
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespTransactions[]|null
    */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
    * Sets transactions
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespTransactions[]|null $transactions 事务节点
    *
    * @return $this
    */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;
        return $this;
    }

    /**
    * Gets locks
    *  锁节点
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLocks[]|null
    */
    public function getLocks()
    {
        return $this->container['locks'];
    }

    /**
    * Sets locks
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLocks[]|null $locks 锁节点
    *
    * @return $this
    */
    public function setLocks($locks)
    {
        $this->container['locks'] = $locks;
        return $this;
    }

    /**
    * Gets edges
    *  边，连接节点表达关系
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespEdges[]|null
    */
    public function getEdges()
    {
        return $this->container['edges'];
    }

    /**
    * Sets edges
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespEdges[]|null $edges 边，连接节点表达关系
    *
    * @return $this
    */
    public function setEdges($edges)
    {
        $this->container['edges'] = $edges;
        return $this;
    }

    /**
    * Gets conflictGroups
    *  冲突组，每条 conflicts_with 边对应一个
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespConflictGroups[]|null
    */
    public function getConflictGroups()
    {
        return $this->container['conflictGroups'];
    }

    /**
    * Sets conflictGroups
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespConflictGroups[]|null $conflictGroups 冲突组，每条 conflicts_with 边对应一个
    *
    * @return $this
    */
    public function setConflictGroups($conflictGroups)
    {
        $this->container['conflictGroups'] = $conflictGroups;
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

