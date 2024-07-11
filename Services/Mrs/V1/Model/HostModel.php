<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟机ID
    * name  虚拟机名称
    * ip  虚拟机IP地址
    * availabilityZoneId  可用区域
    * tags  标签列表信息
    * status  虚拟机当前状态
    * resourceId  节点资源ID
    * flavor  虚拟机规格ID
    * type  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    * mem  内存
    * cpu  CPU核数
    * rootVolumeSize  操作系统盘容量
    * dataVolumeType  数据盘类型
    * dataVolumeSize  数据盘容量
    * dataVolumeCount  数据盘个数
    * nodeGroupName  节点组名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ip' => 'string',
            'availabilityZoneId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Mrs\V1\Model\TagPlain[]',
            'status' => 'string',
            'resourceId' => 'string',
            'flavor' => 'string',
            'type' => 'string',
            'mem' => 'string',
            'cpu' => 'string',
            'rootVolumeSize' => 'string',
            'dataVolumeType' => 'string',
            'dataVolumeSize' => 'int',
            'dataVolumeCount' => 'int',
            'nodeGroupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟机ID
    * name  虚拟机名称
    * ip  虚拟机IP地址
    * availabilityZoneId  可用区域
    * tags  标签列表信息
    * status  虚拟机当前状态
    * resourceId  节点资源ID
    * flavor  虚拟机规格ID
    * type  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    * mem  内存
    * cpu  CPU核数
    * rootVolumeSize  操作系统盘容量
    * dataVolumeType  数据盘类型
    * dataVolumeSize  数据盘容量
    * dataVolumeCount  数据盘个数
    * nodeGroupName  节点组名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ip' => null,
        'availabilityZoneId' => null,
        'tags' => null,
        'status' => null,
        'resourceId' => null,
        'flavor' => null,
        'type' => null,
        'mem' => null,
        'cpu' => null,
        'rootVolumeSize' => null,
        'dataVolumeType' => null,
        'dataVolumeSize' => 'int32',
        'dataVolumeCount' => 'int32',
        'nodeGroupName' => null
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
    * id  虚拟机ID
    * name  虚拟机名称
    * ip  虚拟机IP地址
    * availabilityZoneId  可用区域
    * tags  标签列表信息
    * status  虚拟机当前状态
    * resourceId  节点资源ID
    * flavor  虚拟机规格ID
    * type  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    * mem  内存
    * cpu  CPU核数
    * rootVolumeSize  操作系统盘容量
    * dataVolumeType  数据盘类型
    * dataVolumeSize  数据盘容量
    * dataVolumeCount  数据盘个数
    * nodeGroupName  节点组名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ip' => 'ip',
            'availabilityZoneId' => 'availability_zone_id',
            'tags' => 'tags',
            'status' => 'status',
            'resourceId' => 'resource_id',
            'flavor' => 'flavor',
            'type' => 'type',
            'mem' => 'mem',
            'cpu' => 'cpu',
            'rootVolumeSize' => 'root_volume_size',
            'dataVolumeType' => 'data_volume_type',
            'dataVolumeSize' => 'data_volume_size',
            'dataVolumeCount' => 'data_volume_count',
            'nodeGroupName' => 'node_group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟机ID
    * name  虚拟机名称
    * ip  虚拟机IP地址
    * availabilityZoneId  可用区域
    * tags  标签列表信息
    * status  虚拟机当前状态
    * resourceId  节点资源ID
    * flavor  虚拟机规格ID
    * type  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    * mem  内存
    * cpu  CPU核数
    * rootVolumeSize  操作系统盘容量
    * dataVolumeType  数据盘类型
    * dataVolumeSize  数据盘容量
    * dataVolumeCount  数据盘个数
    * nodeGroupName  节点组名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ip' => 'setIp',
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'resourceId' => 'setResourceId',
            'flavor' => 'setFlavor',
            'type' => 'setType',
            'mem' => 'setMem',
            'cpu' => 'setCpu',
            'rootVolumeSize' => 'setRootVolumeSize',
            'dataVolumeType' => 'setDataVolumeType',
            'dataVolumeSize' => 'setDataVolumeSize',
            'dataVolumeCount' => 'setDataVolumeCount',
            'nodeGroupName' => 'setNodeGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟机ID
    * name  虚拟机名称
    * ip  虚拟机IP地址
    * availabilityZoneId  可用区域
    * tags  标签列表信息
    * status  虚拟机当前状态
    * resourceId  节点资源ID
    * flavor  虚拟机规格ID
    * type  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    * mem  内存
    * cpu  CPU核数
    * rootVolumeSize  操作系统盘容量
    * dataVolumeType  数据盘类型
    * dataVolumeSize  数据盘容量
    * dataVolumeCount  数据盘个数
    * nodeGroupName  节点组名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ip' => 'getIp',
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'resourceId' => 'getResourceId',
            'flavor' => 'getFlavor',
            'type' => 'getType',
            'mem' => 'getMem',
            'cpu' => 'getCpu',
            'rootVolumeSize' => 'getRootVolumeSize',
            'dataVolumeType' => 'getDataVolumeType',
            'dataVolumeSize' => 'getDataVolumeSize',
            'dataVolumeCount' => 'getDataVolumeCount',
            'nodeGroupName' => 'getNodeGroupName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['rootVolumeSize'] = isset($data['rootVolumeSize']) ? $data['rootVolumeSize'] : null;
        $this->container['dataVolumeType'] = isset($data['dataVolumeType']) ? $data['dataVolumeType'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['dataVolumeCount'] = isset($data['dataVolumeCount']) ? $data['dataVolumeCount'] : null;
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
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
    * Gets id
    *  虚拟机ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 虚拟机ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  虚拟机名称
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
    * @param string|null $name 虚拟机名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ip
    *  虚拟机IP地址
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
    * @param string|null $ip 虚拟机IP地址
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  可用区域
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId 可用区域
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表信息
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\TagPlain[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\TagPlain[]|null $tags 标签列表信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  虚拟机当前状态
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
    * @param string|null $status 虚拟机当前状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets resourceId
    *  节点资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 节点资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets flavor
    *  虚拟机规格ID
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 虚拟机规格ID
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets type
    *  虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 虚拟机类型，当前支持MasterNode，CoreNode，TaskNode
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets mem
    *  内存
    *
    * @return string|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string|null $mem 内存
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU核数
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu CPU核数
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets rootVolumeSize
    *  操作系统盘容量
    *
    * @return string|null
    */
    public function getRootVolumeSize()
    {
        return $this->container['rootVolumeSize'];
    }

    /**
    * Sets rootVolumeSize
    *
    * @param string|null $rootVolumeSize 操作系统盘容量
    *
    * @return $this
    */
    public function setRootVolumeSize($rootVolumeSize)
    {
        $this->container['rootVolumeSize'] = $rootVolumeSize;
        return $this;
    }

    /**
    * Gets dataVolumeType
    *  数据盘类型
    *
    * @return string|null
    */
    public function getDataVolumeType()
    {
        return $this->container['dataVolumeType'];
    }

    /**
    * Sets dataVolumeType
    *
    * @param string|null $dataVolumeType 数据盘类型
    *
    * @return $this
    */
    public function setDataVolumeType($dataVolumeType)
    {
        $this->container['dataVolumeType'] = $dataVolumeType;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  数据盘容量
    *
    * @return int|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param int|null $dataVolumeSize 数据盘容量
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets dataVolumeCount
    *  数据盘个数
    *
    * @return int|null
    */
    public function getDataVolumeCount()
    {
        return $this->container['dataVolumeCount'];
    }

    /**
    * Sets dataVolumeCount
    *
    * @param int|null $dataVolumeCount 数据盘个数
    *
    * @return $this
    */
    public function setDataVolumeCount($dataVolumeCount)
    {
        $this->container['dataVolumeCount'] = $dataVolumeCount;
        return $this;
    }

    /**
    * Gets nodeGroupName
    *  节点组名称
    *
    * @return string|null
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string|null $nodeGroupName 节点组名称
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
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

