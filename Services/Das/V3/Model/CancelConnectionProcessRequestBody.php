<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CancelConnectionProcessRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CancelConnectionProcessRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * processIds  查杀会话的ID列表
    * killAll  是否查杀全部会话
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeRole  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'processIds' => 'string[]',
            'killAll' => 'bool',
            'nodeId' => 'string',
            'nodeRole' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * processIds  查杀会话的ID列表
    * killAll  是否查杀全部会话
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeRole  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'processIds' => null,
        'killAll' => null,
        'nodeId' => null,
        'nodeRole' => null
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
    * processIds  查杀会话的ID列表
    * killAll  是否查杀全部会话
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeRole  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'processIds' => 'process_ids',
            'killAll' => 'kill_all',
            'nodeId' => 'node_id',
            'nodeRole' => 'node_role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * processIds  查杀会话的ID列表
    * killAll  是否查杀全部会话
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeRole  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @var string[]
    */
    protected static $setters = [
            'processIds' => 'setProcessIds',
            'killAll' => 'setKillAll',
            'nodeId' => 'setNodeId',
            'nodeRole' => 'setNodeRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * processIds  查杀会话的ID列表
    * killAll  是否查杀全部会话
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeRole  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @var string[]
    */
    protected static $getters = [
            'processIds' => 'getProcessIds',
            'killAll' => 'getKillAll',
            'nodeId' => 'getNodeId',
            'nodeRole' => 'getNodeRole'
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
        $this->container['processIds'] = isset($data['processIds']) ? $data['processIds'] : null;
        $this->container['killAll'] = isset($data['killAll']) ? $data['killAll'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['processIds'] === null) {
            $invalidProperties[] = "'processIds' can't be null";
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
    * Gets processIds
    *  查杀会话的ID列表
    *
    * @return string[]
    */
    public function getProcessIds()
    {
        return $this->container['processIds'];
    }

    /**
    * Sets processIds
    *
    * @param string[] $processIds 查杀会话的ID列表
    *
    * @return $this
    */
    public function setProcessIds($processIds)
    {
        $this->container['processIds'] = $processIds;
        return $this;
    }

    /**
    * Gets killAll
    *  是否查杀全部会话
    *
    * @return bool|null
    */
    public function getKillAll()
    {
        return $this->container['killAll'];
    }

    /**
    * Sets killAll
    *
    * @param bool|null $killAll 是否查杀全部会话
    *
    * @return $this
    */
    public function setKillAll($killAll)
    {
        $this->container['killAll'] = $killAll;
        return $this;
    }

    /**
    * Gets nodeId
    *  实例节点ID，实例节点的唯一标识
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
    * @param string|null $nodeId 实例节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeRole
    *  实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole 实例节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
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

