<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryNodeResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryNodeResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  节点名称
    * internalIp  节点ip
    * hostname  主机名
    * allocatable  allocatable
    * capacity  capacity
    * allocatedResources  allocatedResources
    * status  状态，Ready or NotReady
    * architecture  架构，amd64 or arm64
    * labels  map类型，key为string,value为string
    * nodeType  节点类型
    * kernelVersion  内核版本
    * osImage  操作系统版本
    * containerRuntimeVersion  容器运行时版本
    * kubernetesVersion  k8s版本
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'internalIp' => 'string',
            'hostname' => 'string',
            'allocatable' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO',
            'capacity' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO',
            'allocatedResources' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\NodeAllocatedResourceDTO',
            'status' => 'string',
            'architecture' => 'string',
            'labels' => 'map[string,string]',
            'nodeType' => 'string',
            'kernelVersion' => 'string',
            'osImage' => 'string',
            'containerRuntimeVersion' => 'string',
            'kubernetesVersion' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  节点名称
    * internalIp  节点ip
    * hostname  主机名
    * allocatable  allocatable
    * capacity  capacity
    * allocatedResources  allocatedResources
    * status  状态，Ready or NotReady
    * architecture  架构，amd64 or arm64
    * labels  map类型，key为string,value为string
    * nodeType  节点类型
    * kernelVersion  内核版本
    * osImage  操作系统版本
    * containerRuntimeVersion  容器运行时版本
    * kubernetesVersion  k8s版本
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'internalIp' => null,
        'hostname' => null,
        'allocatable' => null,
        'capacity' => null,
        'allocatedResources' => null,
        'status' => null,
        'architecture' => null,
        'labels' => null,
        'nodeType' => null,
        'kernelVersion' => null,
        'osImage' => null,
        'containerRuntimeVersion' => null,
        'kubernetesVersion' => null,
        'createTime' => null
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
    * name  节点名称
    * internalIp  节点ip
    * hostname  主机名
    * allocatable  allocatable
    * capacity  capacity
    * allocatedResources  allocatedResources
    * status  状态，Ready or NotReady
    * architecture  架构，amd64 or arm64
    * labels  map类型，key为string,value为string
    * nodeType  节点类型
    * kernelVersion  内核版本
    * osImage  操作系统版本
    * containerRuntimeVersion  容器运行时版本
    * kubernetesVersion  k8s版本
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'internalIp' => 'internal_ip',
            'hostname' => 'hostname',
            'allocatable' => 'allocatable',
            'capacity' => 'capacity',
            'allocatedResources' => 'allocated_resources',
            'status' => 'status',
            'architecture' => 'architecture',
            'labels' => 'labels',
            'nodeType' => 'node_type',
            'kernelVersion' => 'kernel_version',
            'osImage' => 'os_image',
            'containerRuntimeVersion' => 'container_runtime_version',
            'kubernetesVersion' => 'kubernetes_version',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  节点名称
    * internalIp  节点ip
    * hostname  主机名
    * allocatable  allocatable
    * capacity  capacity
    * allocatedResources  allocatedResources
    * status  状态，Ready or NotReady
    * architecture  架构，amd64 or arm64
    * labels  map类型，key为string,value为string
    * nodeType  节点类型
    * kernelVersion  内核版本
    * osImage  操作系统版本
    * containerRuntimeVersion  容器运行时版本
    * kubernetesVersion  k8s版本
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'internalIp' => 'setInternalIp',
            'hostname' => 'setHostname',
            'allocatable' => 'setAllocatable',
            'capacity' => 'setCapacity',
            'allocatedResources' => 'setAllocatedResources',
            'status' => 'setStatus',
            'architecture' => 'setArchitecture',
            'labels' => 'setLabels',
            'nodeType' => 'setNodeType',
            'kernelVersion' => 'setKernelVersion',
            'osImage' => 'setOsImage',
            'containerRuntimeVersion' => 'setContainerRuntimeVersion',
            'kubernetesVersion' => 'setKubernetesVersion',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  节点名称
    * internalIp  节点ip
    * hostname  主机名
    * allocatable  allocatable
    * capacity  capacity
    * allocatedResources  allocatedResources
    * status  状态，Ready or NotReady
    * architecture  架构，amd64 or arm64
    * labels  map类型，key为string,value为string
    * nodeType  节点类型
    * kernelVersion  内核版本
    * osImage  操作系统版本
    * containerRuntimeVersion  容器运行时版本
    * kubernetesVersion  k8s版本
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'internalIp' => 'getInternalIp',
            'hostname' => 'getHostname',
            'allocatable' => 'getAllocatable',
            'capacity' => 'getCapacity',
            'allocatedResources' => 'getAllocatedResources',
            'status' => 'getStatus',
            'architecture' => 'getArchitecture',
            'labels' => 'getLabels',
            'nodeType' => 'getNodeType',
            'kernelVersion' => 'getKernelVersion',
            'osImage' => 'getOsImage',
            'containerRuntimeVersion' => 'getContainerRuntimeVersion',
            'kubernetesVersion' => 'getKubernetesVersion',
            'createTime' => 'getCreateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['allocatable'] = isset($data['allocatable']) ? $data['allocatable'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['allocatedResources'] = isset($data['allocatedResources']) ? $data['allocatedResources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['osImage'] = isset($data['osImage']) ? $data['osImage'] : null;
        $this->container['containerRuntimeVersion'] = isset($data['containerRuntimeVersion']) ? $data['containerRuntimeVersion'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets name
    *  节点名称
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
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets internalIp
    *  节点ip
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 节点ip
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
        return $this;
    }

    /**
    * Gets hostname
    *  主机名
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 主机名
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets allocatable
    *  allocatable
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO|null
    */
    public function getAllocatable()
    {
        return $this->container['allocatable'];
    }

    /**
    * Sets allocatable
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO|null $allocatable allocatable
    *
    * @return $this
    */
    public function setAllocatable($allocatable)
    {
        $this->container['allocatable'] = $allocatable;
        return $this;
    }

    /**
    * Gets capacity
    *  capacity
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeResourceDTO|null $capacity capacity
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets allocatedResources
    *  allocatedResources
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeAllocatedResourceDTO|null
    */
    public function getAllocatedResources()
    {
        return $this->container['allocatedResources'];
    }

    /**
    * Sets allocatedResources
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\NodeAllocatedResourceDTO|null $allocatedResources allocatedResources
    *
    * @return $this
    */
    public function setAllocatedResources($allocatedResources)
    {
        $this->container['allocatedResources'] = $allocatedResources;
        return $this;
    }

    /**
    * Gets status
    *  状态，Ready or NotReady
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
    * @param string|null $status 状态，Ready or NotReady
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets architecture
    *  架构，amd64 or arm64
    *
    * @return string|null
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string|null $architecture 架构，amd64 or arm64
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets labels
    *  map类型，key为string,value为string
    *
    * @return map[string,string]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param map[string,string]|null $labels map类型，key为string,value为string
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型
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
    * @param string|null $nodeType 节点类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  内核版本
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion 内核版本
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
        return $this;
    }

    /**
    * Gets osImage
    *  操作系统版本
    *
    * @return string|null
    */
    public function getOsImage()
    {
        return $this->container['osImage'];
    }

    /**
    * Sets osImage
    *
    * @param string|null $osImage 操作系统版本
    *
    * @return $this
    */
    public function setOsImage($osImage)
    {
        $this->container['osImage'] = $osImage;
        return $this;
    }

    /**
    * Gets containerRuntimeVersion
    *  容器运行时版本
    *
    * @return string|null
    */
    public function getContainerRuntimeVersion()
    {
        return $this->container['containerRuntimeVersion'];
    }

    /**
    * Sets containerRuntimeVersion
    *
    * @param string|null $containerRuntimeVersion 容器运行时版本
    *
    * @return $this
    */
    public function setContainerRuntimeVersion($containerRuntimeVersion)
    {
        $this->container['containerRuntimeVersion'] = $containerRuntimeVersion;
        return $this;
    }

    /**
    * Gets kubernetesVersion
    *  k8s版本
    *
    * @return string|null
    */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
    * Sets kubernetesVersion
    *
    * @param string|null $kubernetesVersion k8s版本
    *
    * @return $this
    */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

