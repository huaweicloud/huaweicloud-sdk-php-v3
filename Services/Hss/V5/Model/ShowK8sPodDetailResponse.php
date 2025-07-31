<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowK8sPodDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowK8sPodDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * podName  pod名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * nodeName  所属节点名称
    * label  标签
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * nodeIp  所属节点IP
    * podIp  Pod IP
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    * containers  pod容器列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'podName' => 'string',
            'namespaceName' => 'string',
            'clusterName' => 'string',
            'nodeName' => 'string',
            'label' => 'string',
            'cpu' => 'string',
            'memory' => 'string',
            'cpuLimit' => 'string',
            'memoryLimit' => 'string',
            'nodeIp' => 'string',
            'podIp' => 'string',
            'status' => 'string',
            'createTime' => 'int',
            'containers' => '\HuaweiCloud\SDK\Hss\V5\Model\ContainerBaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * podName  pod名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * nodeName  所属节点名称
    * label  标签
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * nodeIp  所属节点IP
    * podIp  Pod IP
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    * containers  pod容器列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'podName' => null,
        'namespaceName' => null,
        'clusterName' => null,
        'nodeName' => null,
        'label' => null,
        'cpu' => null,
        'memory' => null,
        'cpuLimit' => null,
        'memoryLimit' => null,
        'nodeIp' => null,
        'podIp' => null,
        'status' => null,
        'createTime' => 'int64',
        'containers' => null
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
    * podName  pod名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * nodeName  所属节点名称
    * label  标签
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * nodeIp  所属节点IP
    * podIp  Pod IP
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    * containers  pod容器列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'podName' => 'pod_name',
            'namespaceName' => 'namespace_name',
            'clusterName' => 'cluster_name',
            'nodeName' => 'node_name',
            'label' => 'label',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'nodeIp' => 'node_ip',
            'podIp' => 'pod_ip',
            'status' => 'status',
            'createTime' => 'create_time',
            'containers' => 'containers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * podName  pod名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * nodeName  所属节点名称
    * label  标签
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * nodeIp  所属节点IP
    * podIp  Pod IP
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    * containers  pod容器列表
    *
    * @var string[]
    */
    protected static $setters = [
            'podName' => 'setPodName',
            'namespaceName' => 'setNamespaceName',
            'clusterName' => 'setClusterName',
            'nodeName' => 'setNodeName',
            'label' => 'setLabel',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'nodeIp' => 'setNodeIp',
            'podIp' => 'setPodIp',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'containers' => 'setContainers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * podName  pod名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * nodeName  所属节点名称
    * label  标签
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * nodeIp  所属节点IP
    * podIp  Pod IP
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    * containers  pod容器列表
    *
    * @var string[]
    */
    protected static $getters = [
            'podName' => 'getPodName',
            'namespaceName' => 'getNamespaceName',
            'clusterName' => 'getClusterName',
            'nodeName' => 'getNodeName',
            'label' => 'getLabel',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'nodeIp' => 'getNodeIp',
            'podIp' => 'getPodIp',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'containers' => 'getContainers'
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
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 256)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 65535)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 0)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpu']) && (mb_strlen($this->container['cpu']) > 65535)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpu']) && (mb_strlen($this->container['cpu']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memory']) && (mb_strlen($this->container['memory']) > 65535)) {
                $invalidProperties[] = "invalid value for 'memory', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['memory']) && (mb_strlen($this->container['memory']) < 0)) {
                $invalidProperties[] = "invalid value for 'memory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) > 65535)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeIp']) && (mb_strlen($this->container['nodeIp']) > 65535)) {
                $invalidProperties[] = "invalid value for 'nodeIp', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['nodeIp']) && (mb_strlen($this->container['nodeIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) > 65535)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 65535)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets podName
    *  pod名称
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName pod名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名称
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets clusterName
    *  所属集群
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 所属集群
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets nodeName
    *  所属节点名称
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
    * @param string|null $nodeName 所属节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets label
    *  标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU使用量
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
    * @param string|null $cpu CPU使用量
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets memory
    *  内存使用量
    *
    * @return string|null
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param string|null $memory 内存使用量
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  cpu限制
    *
    * @return string|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string|null $cpuLimit cpu限制
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memoryLimit
    *  内存限制
    *
    * @return string|null
    */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
    * Sets memoryLimit
    *
    * @param string|null $memoryLimit 内存限制
    *
    * @return $this
    */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;
        return $this;
    }

    /**
    * Gets nodeIp
    *  所属节点IP
    *
    * @return string|null
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string|null $nodeIp 所属节点IP
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets podIp
    *  Pod IP
    *
    * @return string|null
    */
    public function getPodIp()
    {
        return $this->container['podIp'];
    }

    /**
    * Sets podIp
    *
    * @param string|null $podIp Pod IP
    *
    * @return $this
    */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;
        return $this;
    }

    /**
    * Gets status
    *  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
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
    * @param string|null $status Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets containers
    *  pod容器列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ContainerBaseInfo[]|null
    */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
    * Sets containers
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ContainerBaseInfo[]|null $containers pod容器列表
    *
    * @return $this
    */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;
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

