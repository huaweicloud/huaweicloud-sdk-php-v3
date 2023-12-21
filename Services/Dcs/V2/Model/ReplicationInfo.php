<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replicationId  副本ID
    * nodeId  节点ID
    * replicationIp  副本IP
    * groupId  组ID
    * groupName  组名称
    * availableZone  可用区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replicationId' => 'string',
            'nodeId' => 'string',
            'replicationIp' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'availableZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replicationId  副本ID
    * nodeId  节点ID
    * replicationIp  副本IP
    * groupId  组ID
    * groupName  组名称
    * availableZone  可用区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replicationId' => null,
        'nodeId' => null,
        'replicationIp' => null,
        'groupId' => null,
        'groupName' => null,
        'availableZone' => null
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
    * replicationId  副本ID
    * nodeId  节点ID
    * replicationIp  副本IP
    * groupId  组ID
    * groupName  组名称
    * availableZone  可用区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replicationId' => 'replication_id',
            'nodeId' => 'node_id',
            'replicationIp' => 'replication_ip',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'availableZone' => 'available_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replicationId  副本ID
    * nodeId  节点ID
    * replicationIp  副本IP
    * groupId  组ID
    * groupName  组名称
    * availableZone  可用区
    *
    * @var string[]
    */
    protected static $setters = [
            'replicationId' => 'setReplicationId',
            'nodeId' => 'setNodeId',
            'replicationIp' => 'setReplicationIp',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'availableZone' => 'setAvailableZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replicationId  副本ID
    * nodeId  节点ID
    * replicationIp  副本IP
    * groupId  组ID
    * groupName  组名称
    * availableZone  可用区
    *
    * @var string[]
    */
    protected static $getters = [
            'replicationId' => 'getReplicationId',
            'nodeId' => 'getNodeId',
            'replicationIp' => 'getReplicationIp',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'availableZone' => 'getAvailableZone'
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
        $this->container['replicationId'] = isset($data['replicationId']) ? $data['replicationId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['replicationIp'] = isset($data['replicationIp']) ? $data['replicationIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
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
    * Gets replicationId
    *  副本ID
    *
    * @return string|null
    */
    public function getReplicationId()
    {
        return $this->container['replicationId'];
    }

    /**
    * Sets replicationId
    *
    * @param string|null $replicationId 副本ID
    *
    * @return $this
    */
    public function setReplicationId($replicationId)
    {
        $this->container['replicationId'] = $replicationId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
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
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets replicationIp
    *  副本IP
    *
    * @return string|null
    */
    public function getReplicationIp()
    {
        return $this->container['replicationIp'];
    }

    /**
    * Sets replicationIp
    *
    * @param string|null $replicationIp 副本IP
    *
    * @return $this
    */
    public function setReplicationIp($replicationIp)
    {
        $this->container['replicationIp'] = $replicationIp;
        return $this;
    }

    /**
    * Gets groupId
    *  组ID
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets availableZone
    *  可用区
    *
    * @return string|null
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string|null $availableZone 可用区
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
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

