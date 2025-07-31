<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessPodInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessPodInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * podName  实例名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * podIp  实例 IP
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * detectResult  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'podName' => 'string',
            'namespaceName' => 'string',
            'clusterName' => 'string',
            'cpu' => 'string',
            'memory' => 'string',
            'cpuLimit' => 'string',
            'memoryLimit' => 'string',
            'podIp' => 'string',
            'protectStatus' => 'string',
            'detectResult' => 'string',
            'status' => 'object',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * podName  实例名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * podIp  实例 IP
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * detectResult  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'podName' => null,
        'namespaceName' => null,
        'clusterName' => null,
        'cpu' => null,
        'memory' => null,
        'cpuLimit' => null,
        'memoryLimit' => null,
        'podIp' => null,
        'protectStatus' => null,
        'detectResult' => null,
        'status' => null,
        'createTime' => 'int64'
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
    * podName  实例名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * podIp  实例 IP
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * detectResult  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'podName' => 'pod_name',
            'namespaceName' => 'namespace_name',
            'clusterName' => 'cluster_name',
            'cpu' => 'cpu',
            'memory' => 'memory',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'podIp' => 'pod_ip',
            'protectStatus' => 'protect_status',
            'detectResult' => 'detect_result',
            'status' => 'status',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * podName  实例名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * podIp  实例 IP
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * detectResult  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'podName' => 'setPodName',
            'namespaceName' => 'setNamespaceName',
            'clusterName' => 'setClusterName',
            'cpu' => 'setCpu',
            'memory' => 'setMemory',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'podIp' => 'setPodIp',
            'protectStatus' => 'setProtectStatus',
            'detectResult' => 'setDetectResult',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * podName  实例名称
    * namespaceName  命名空间名称
    * clusterName  所属集群
    * cpu  CPU使用量
    * memory  内存使用量
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * podIp  实例 IP
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * detectResult  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * status  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'podName' => 'getPodName',
            'namespaceName' => 'getNamespaceName',
            'clusterName' => 'getClusterName',
            'cpu' => 'getCpu',
            'memory' => 'getMemory',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'podIp' => 'getPodIp',
            'protectStatus' => 'getProtectStatus',
            'detectResult' => 'getDetectResult',
            'status' => 'getStatus',
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
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) > 65535)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4071095999000.";
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
    *  实例名称
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
    * @param string|null $podName 实例名称
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
    * Gets podIp
    *  实例 IP
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
    * @param string|null $podIp 实例 IP
    *
    * @return $this
    */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets detectResult
    *  Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    *
    * @return string|null
    */
    public function getDetectResult()
    {
        return $this->container['detectResult'];
    }

    /**
    * Sets detectResult
    *
    * @param string|null $detectResult Serverless安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets status
    *  Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
    *
    * @return object|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param object|null $status Pod状态，包含以下几种 -Pending：pod 已被 Kubernetes 系统接受，但尚未创建一个或多个容器镜像 -Running：pod 已经绑定到一个节点，并且所有的容器都已经创建完毕 -Succeeded：pod 中的所有容器都已成功终止，不会重新启动 -Failed：Pod 中的所有容器都已终止，并且至少有一个容器因故障而终止 -Unknown：由于某种原因无法获取 pod 的状态，通常是由于与 pod 的主机通信时出错
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

