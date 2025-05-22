<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopologyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopologyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * nodeName  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    * ip  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    * port  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    * maxMemory  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    * usedMemory  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    * qps  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    * bandwidth  bandwidth
    * dbNum  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    * dbs  dbs
    * relationIp  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    * relationPort  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 分片ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    * dims  dims
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'ip' => 'string',
            'port' => 'string',
            'nodeType' => 'string',
            'maxMemory' => 'string',
            'usedMemory' => 'string',
            'qps' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Dcs\V2\Model\BandWidth',
            'dbNum' => 'string',
            'dbs' => '\HuaweiCloud\SDK\Dcs\V2\Model\KeySpace',
            'relationIp' => 'string',
            'relationPort' => 'string',
            'groupId' => 'string',
            'status' => 'string',
            'dims' => '\HuaweiCloud\SDK\Dcs\V2\Model\DimsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * nodeName  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    * ip  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    * port  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    * maxMemory  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    * usedMemory  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    * qps  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    * bandwidth  bandwidth
    * dbNum  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    * dbs  dbs
    * relationIp  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    * relationPort  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 分片ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    * dims  dims
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'ip' => null,
        'port' => null,
        'nodeType' => null,
        'maxMemory' => null,
        'usedMemory' => null,
        'qps' => null,
        'bandwidth' => null,
        'dbNum' => null,
        'dbs' => null,
        'relationIp' => null,
        'relationPort' => null,
        'groupId' => null,
        'status' => null,
        'dims' => null
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
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * nodeName  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    * ip  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    * port  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    * maxMemory  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    * usedMemory  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    * qps  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    * bandwidth  bandwidth
    * dbNum  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    * dbs  dbs
    * relationIp  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    * relationPort  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 分片ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    * dims  dims
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'ip' => 'ip',
            'port' => 'port',
            'nodeType' => 'node_type',
            'maxMemory' => 'max_memory',
            'usedMemory' => 'used_memory',
            'qps' => 'qps',
            'bandwidth' => 'bandwidth',
            'dbNum' => 'db_num',
            'dbs' => 'dbs',
            'relationIp' => 'relation_ip',
            'relationPort' => 'relation_port',
            'groupId' => 'group_id',
            'status' => 'status',
            'dims' => 'dims'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * nodeName  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    * ip  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    * port  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    * maxMemory  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    * usedMemory  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    * qps  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    * bandwidth  bandwidth
    * dbNum  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    * dbs  dbs
    * relationIp  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    * relationPort  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 分片ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    * dims  dims
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'ip' => 'setIp',
            'port' => 'setPort',
            'nodeType' => 'setNodeType',
            'maxMemory' => 'setMaxMemory',
            'usedMemory' => 'setUsedMemory',
            'qps' => 'setQps',
            'bandwidth' => 'setBandwidth',
            'dbNum' => 'setDbNum',
            'dbs' => 'setDbs',
            'relationIp' => 'setRelationIp',
            'relationPort' => 'setRelationPort',
            'groupId' => 'setGroupId',
            'status' => 'setStatus',
            'dims' => 'setDims'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**： 节点ID。 **取值范围**： 不涉及。
    * nodeName  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    * ip  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    * port  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    * nodeType  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    * maxMemory  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    * usedMemory  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    * qps  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    * bandwidth  bandwidth
    * dbNum  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    * dbs  dbs
    * relationIp  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    * relationPort  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    * groupId  **参数解释**： 分片ID。 **取值范围**： 不涉及。
    * status  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    * dims  dims
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'ip' => 'getIp',
            'port' => 'getPort',
            'nodeType' => 'getNodeType',
            'maxMemory' => 'getMaxMemory',
            'usedMemory' => 'getUsedMemory',
            'qps' => 'getQps',
            'bandwidth' => 'getBandwidth',
            'dbNum' => 'getDbNum',
            'dbs' => 'getDbs',
            'relationIp' => 'getRelationIp',
            'relationPort' => 'getRelationPort',
            'groupId' => 'getGroupId',
            'status' => 'getStatus',
            'dims' => 'getDims'
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
    const NODE_TYPE_MASTER = 'master';
    const NODE_TYPE_SLAVE = 'slave';
    const NODE_TYPE_PROXY = 'proxy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_MASTER,
            self::NODE_TYPE_SLAVE,
            self::NODE_TYPE_PROXY,
        ];
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['maxMemory'] = isset($data['maxMemory']) ? $data['maxMemory'] : null;
        $this->container['usedMemory'] = isset($data['usedMemory']) ? $data['usedMemory'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['dbNum'] = isset($data['dbNum']) ? $data['dbNum'] : null;
        $this->container['dbs'] = isset($data['dbs']) ? $data['dbs'] : null;
        $this->container['relationIp'] = isset($data['relationIp']) ? $data['relationIp'] : null;
        $this->container['relationPort'] = isset($data['relationPort']) ? $data['relationPort'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dims'] = isset($data['dims']) ? $data['dims'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets nodeId
    *  **参数解释**： 节点ID。 **取值范围**： 不涉及。
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
    * @param string|null $nodeId **参数解释**： 节点ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**： 节点名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName **参数解释**： 节点名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets ip
    *  **参数解释**： 节点IP。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**： 节点IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 节点端口。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port **参数解释**： 节点端口。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType **参数解释**： 节点主从角色。 **取值范围**： master：主节点 slave：从节点 proxy：proxy节点
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets maxMemory
    *  **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMaxMemory()
    {
        return $this->container['maxMemory'];
    }

    /**
    * Sets maxMemory
    *
    * @param string|null $maxMemory **参数解释**： 总内存，单位：MB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxMemory($maxMemory)
    {
        $this->container['maxMemory'] = $maxMemory;
        return $this;
    }

    /**
    * Gets usedMemory
    *  **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUsedMemory()
    {
        return $this->container['usedMemory'];
    }

    /**
    * Sets usedMemory
    *
    * @param string|null $usedMemory **参数解释**： 已使用的内存，单位：MB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsedMemory($usedMemory)
    {
        $this->container['usedMemory'] = $usedMemory;
        return $this;
    }

    /**
    * Gets qps
    *  **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param string|null $qps **参数解释**： 每秒查询率。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BandWidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BandWidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets dbNum
    *  **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbNum()
    {
        return $this->container['dbNum'];
    }

    /**
    * Sets dbNum
    *
    * @param string|null $dbNum **参数解释**： 该实例的DB数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbNum($dbNum)
    {
        $this->container['dbNum'] = $dbNum;
        return $this;
    }

    /**
    * Gets dbs
    *  dbs
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\KeySpace|null
    */
    public function getDbs()
    {
        return $this->container['dbs'];
    }

    /**
    * Sets dbs
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\KeySpace|null $dbs dbs
    *
    * @return $this
    */
    public function setDbs($dbs)
    {
        $this->container['dbs'] = $dbs;
        return $this;
    }

    /**
    * Gets relationIp
    *  **参数解释**： 关联IP。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelationIp()
    {
        return $this->container['relationIp'];
    }

    /**
    * Sets relationIp
    *
    * @param string|null $relationIp **参数解释**： 关联IP。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelationIp($relationIp)
    {
        $this->container['relationIp'] = $relationIp;
        return $this;
    }

    /**
    * Gets relationPort
    *  **参数解释**： 关联端口。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelationPort()
    {
        return $this->container['relationPort'];
    }

    /**
    * Sets relationPort
    *
    * @param string|null $relationPort **参数解释**： 关联端口。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelationPort($relationPort)
    {
        $this->container['relationPort'] = $relationPort;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 分片ID。 **取值范围**： 不涉及。
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
    * @param string|null $groupId **参数解释**： 分片ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 节点状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 节点状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dims
    *  dims
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DimsInfo|null
    */
    public function getDims()
    {
        return $this->container['dims'];
    }

    /**
    * Sets dims
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DimsInfo|null $dims dims
    *
    * @return $this
    */
    public function setDims($dims)
    {
        $this->container['dims'] = $dims;
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

