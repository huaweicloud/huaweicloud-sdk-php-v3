<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PodSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PodSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumes  定义 Pod 可以挂载的存储卷列表
    * containers  Pod中的主要容器列表
    * restartPolicy  容器失败后的重启策略
    * terminationGracePeriodSeconds  容器终止前的优雅退出时间
    * activeDeadlineSeconds  Pod在节点上的最大存活时间
    * dnsPolicy  DNS策略
    * nodeSelector  节点选择器，用于指定Pod可以调度到哪些节点
    * serviceAccountName  运行此Pod所使用的ServiceAccount名称
    * serviceAccount  提供向后兼容的旧版ServiceAccount字段
    * automountServiceAccountToken  是否自动挂载ServiceAccount的令牌
    * nodeName  指定Pod应该调度到的节点
    * securityContext  Pod级别的安全上下文
    * schedulerName  指定使用的调度器
    * tolerations  容器容忍的污点列表
    * priority  Pod 的优先级
    * enableServiceLinks  服务信息是否注入到Pod的环境变量中
    * preemptionPolicy  抢占优先级策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumes' => 'object[]',
            'containers' => 'object[]',
            'restartPolicy' => 'string',
            'terminationGracePeriodSeconds' => 'int',
            'activeDeadlineSeconds' => 'int',
            'dnsPolicy' => 'string',
            'nodeSelector' => 'map[string,string]',
            'serviceAccountName' => 'string',
            'serviceAccount' => 'string',
            'automountServiceAccountToken' => 'bool',
            'nodeName' => 'string',
            'securityContext' => 'object',
            'schedulerName' => 'string',
            'tolerations' => '\HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]',
            'priority' => 'int',
            'enableServiceLinks' => 'bool',
            'preemptionPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumes  定义 Pod 可以挂载的存储卷列表
    * containers  Pod中的主要容器列表
    * restartPolicy  容器失败后的重启策略
    * terminationGracePeriodSeconds  容器终止前的优雅退出时间
    * activeDeadlineSeconds  Pod在节点上的最大存活时间
    * dnsPolicy  DNS策略
    * nodeSelector  节点选择器，用于指定Pod可以调度到哪些节点
    * serviceAccountName  运行此Pod所使用的ServiceAccount名称
    * serviceAccount  提供向后兼容的旧版ServiceAccount字段
    * automountServiceAccountToken  是否自动挂载ServiceAccount的令牌
    * nodeName  指定Pod应该调度到的节点
    * securityContext  Pod级别的安全上下文
    * schedulerName  指定使用的调度器
    * tolerations  容器容忍的污点列表
    * priority  Pod 的优先级
    * enableServiceLinks  服务信息是否注入到Pod的环境变量中
    * preemptionPolicy  抢占优先级策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumes' => null,
        'containers' => null,
        'restartPolicy' => null,
        'terminationGracePeriodSeconds' => 'int32',
        'activeDeadlineSeconds' => 'int32',
        'dnsPolicy' => null,
        'nodeSelector' => null,
        'serviceAccountName' => null,
        'serviceAccount' => null,
        'automountServiceAccountToken' => null,
        'nodeName' => null,
        'securityContext' => null,
        'schedulerName' => null,
        'tolerations' => null,
        'priority' => 'int32',
        'enableServiceLinks' => null,
        'preemptionPolicy' => null
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
    * volumes  定义 Pod 可以挂载的存储卷列表
    * containers  Pod中的主要容器列表
    * restartPolicy  容器失败后的重启策略
    * terminationGracePeriodSeconds  容器终止前的优雅退出时间
    * activeDeadlineSeconds  Pod在节点上的最大存活时间
    * dnsPolicy  DNS策略
    * nodeSelector  节点选择器，用于指定Pod可以调度到哪些节点
    * serviceAccountName  运行此Pod所使用的ServiceAccount名称
    * serviceAccount  提供向后兼容的旧版ServiceAccount字段
    * automountServiceAccountToken  是否自动挂载ServiceAccount的令牌
    * nodeName  指定Pod应该调度到的节点
    * securityContext  Pod级别的安全上下文
    * schedulerName  指定使用的调度器
    * tolerations  容器容忍的污点列表
    * priority  Pod 的优先级
    * enableServiceLinks  服务信息是否注入到Pod的环境变量中
    * preemptionPolicy  抢占优先级策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumes' => 'volumes',
            'containers' => 'containers',
            'restartPolicy' => 'restartPolicy',
            'terminationGracePeriodSeconds' => 'terminationGracePeriodSeconds',
            'activeDeadlineSeconds' => 'activeDeadlineSeconds',
            'dnsPolicy' => 'dnsPolicy',
            'nodeSelector' => 'nodeSelector',
            'serviceAccountName' => 'serviceAccountName',
            'serviceAccount' => 'serviceAccount',
            'automountServiceAccountToken' => 'automountServiceAccountToken',
            'nodeName' => 'nodeName',
            'securityContext' => 'securityContext',
            'schedulerName' => 'schedulerName',
            'tolerations' => 'tolerations',
            'priority' => 'priority',
            'enableServiceLinks' => 'enableServiceLinks',
            'preemptionPolicy' => 'preemptionPolicy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumes  定义 Pod 可以挂载的存储卷列表
    * containers  Pod中的主要容器列表
    * restartPolicy  容器失败后的重启策略
    * terminationGracePeriodSeconds  容器终止前的优雅退出时间
    * activeDeadlineSeconds  Pod在节点上的最大存活时间
    * dnsPolicy  DNS策略
    * nodeSelector  节点选择器，用于指定Pod可以调度到哪些节点
    * serviceAccountName  运行此Pod所使用的ServiceAccount名称
    * serviceAccount  提供向后兼容的旧版ServiceAccount字段
    * automountServiceAccountToken  是否自动挂载ServiceAccount的令牌
    * nodeName  指定Pod应该调度到的节点
    * securityContext  Pod级别的安全上下文
    * schedulerName  指定使用的调度器
    * tolerations  容器容忍的污点列表
    * priority  Pod 的优先级
    * enableServiceLinks  服务信息是否注入到Pod的环境变量中
    * preemptionPolicy  抢占优先级策略
    *
    * @var string[]
    */
    protected static $setters = [
            'volumes' => 'setVolumes',
            'containers' => 'setContainers',
            'restartPolicy' => 'setRestartPolicy',
            'terminationGracePeriodSeconds' => 'setTerminationGracePeriodSeconds',
            'activeDeadlineSeconds' => 'setActiveDeadlineSeconds',
            'dnsPolicy' => 'setDnsPolicy',
            'nodeSelector' => 'setNodeSelector',
            'serviceAccountName' => 'setServiceAccountName',
            'serviceAccount' => 'setServiceAccount',
            'automountServiceAccountToken' => 'setAutomountServiceAccountToken',
            'nodeName' => 'setNodeName',
            'securityContext' => 'setSecurityContext',
            'schedulerName' => 'setSchedulerName',
            'tolerations' => 'setTolerations',
            'priority' => 'setPriority',
            'enableServiceLinks' => 'setEnableServiceLinks',
            'preemptionPolicy' => 'setPreemptionPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumes  定义 Pod 可以挂载的存储卷列表
    * containers  Pod中的主要容器列表
    * restartPolicy  容器失败后的重启策略
    * terminationGracePeriodSeconds  容器终止前的优雅退出时间
    * activeDeadlineSeconds  Pod在节点上的最大存活时间
    * dnsPolicy  DNS策略
    * nodeSelector  节点选择器，用于指定Pod可以调度到哪些节点
    * serviceAccountName  运行此Pod所使用的ServiceAccount名称
    * serviceAccount  提供向后兼容的旧版ServiceAccount字段
    * automountServiceAccountToken  是否自动挂载ServiceAccount的令牌
    * nodeName  指定Pod应该调度到的节点
    * securityContext  Pod级别的安全上下文
    * schedulerName  指定使用的调度器
    * tolerations  容器容忍的污点列表
    * priority  Pod 的优先级
    * enableServiceLinks  服务信息是否注入到Pod的环境变量中
    * preemptionPolicy  抢占优先级策略
    *
    * @var string[]
    */
    protected static $getters = [
            'volumes' => 'getVolumes',
            'containers' => 'getContainers',
            'restartPolicy' => 'getRestartPolicy',
            'terminationGracePeriodSeconds' => 'getTerminationGracePeriodSeconds',
            'activeDeadlineSeconds' => 'getActiveDeadlineSeconds',
            'dnsPolicy' => 'getDnsPolicy',
            'nodeSelector' => 'getNodeSelector',
            'serviceAccountName' => 'getServiceAccountName',
            'serviceAccount' => 'getServiceAccount',
            'automountServiceAccountToken' => 'getAutomountServiceAccountToken',
            'nodeName' => 'getNodeName',
            'securityContext' => 'getSecurityContext',
            'schedulerName' => 'getSchedulerName',
            'tolerations' => 'getTolerations',
            'priority' => 'getPriority',
            'enableServiceLinks' => 'getEnableServiceLinks',
            'preemptionPolicy' => 'getPreemptionPolicy'
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
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->container['terminationGracePeriodSeconds'] = isset($data['terminationGracePeriodSeconds']) ? $data['terminationGracePeriodSeconds'] : null;
        $this->container['activeDeadlineSeconds'] = isset($data['activeDeadlineSeconds']) ? $data['activeDeadlineSeconds'] : null;
        $this->container['dnsPolicy'] = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['serviceAccountName'] = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->container['serviceAccount'] = isset($data['serviceAccount']) ? $data['serviceAccount'] : null;
        $this->container['automountServiceAccountToken'] = isset($data['automountServiceAccountToken']) ? $data['automountServiceAccountToken'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['securityContext'] = isset($data['securityContext']) ? $data['securityContext'] : null;
        $this->container['schedulerName'] = isset($data['schedulerName']) ? $data['schedulerName'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['enableServiceLinks'] = isset($data['enableServiceLinks']) ? $data['enableServiceLinks'] : null;
        $this->container['preemptionPolicy'] = isset($data['preemptionPolicy']) ? $data['preemptionPolicy'] : null;
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
    * Gets volumes
    *  定义 Pod 可以挂载的存储卷列表
    *
    * @return object[]|null
    */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
    * Sets volumes
    *
    * @param object[]|null $volumes 定义 Pod 可以挂载的存储卷列表
    *
    * @return $this
    */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;
        return $this;
    }

    /**
    * Gets containers
    *  Pod中的主要容器列表
    *
    * @return object[]|null
    */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
    * Sets containers
    *
    * @param object[]|null $containers Pod中的主要容器列表
    *
    * @return $this
    */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;
        return $this;
    }

    /**
    * Gets restartPolicy
    *  容器失败后的重启策略
    *
    * @return string|null
    */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
    * Sets restartPolicy
    *
    * @param string|null $restartPolicy 容器失败后的重启策略
    *
    * @return $this
    */
    public function setRestartPolicy($restartPolicy)
    {
        $this->container['restartPolicy'] = $restartPolicy;
        return $this;
    }

    /**
    * Gets terminationGracePeriodSeconds
    *  容器终止前的优雅退出时间
    *
    * @return int|null
    */
    public function getTerminationGracePeriodSeconds()
    {
        return $this->container['terminationGracePeriodSeconds'];
    }

    /**
    * Sets terminationGracePeriodSeconds
    *
    * @param int|null $terminationGracePeriodSeconds 容器终止前的优雅退出时间
    *
    * @return $this
    */
    public function setTerminationGracePeriodSeconds($terminationGracePeriodSeconds)
    {
        $this->container['terminationGracePeriodSeconds'] = $terminationGracePeriodSeconds;
        return $this;
    }

    /**
    * Gets activeDeadlineSeconds
    *  Pod在节点上的最大存活时间
    *
    * @return int|null
    */
    public function getActiveDeadlineSeconds()
    {
        return $this->container['activeDeadlineSeconds'];
    }

    /**
    * Sets activeDeadlineSeconds
    *
    * @param int|null $activeDeadlineSeconds Pod在节点上的最大存活时间
    *
    * @return $this
    */
    public function setActiveDeadlineSeconds($activeDeadlineSeconds)
    {
        $this->container['activeDeadlineSeconds'] = $activeDeadlineSeconds;
        return $this;
    }

    /**
    * Gets dnsPolicy
    *  DNS策略
    *
    * @return string|null
    */
    public function getDnsPolicy()
    {
        return $this->container['dnsPolicy'];
    }

    /**
    * Sets dnsPolicy
    *
    * @param string|null $dnsPolicy DNS策略
    *
    * @return $this
    */
    public function setDnsPolicy($dnsPolicy)
    {
        $this->container['dnsPolicy'] = $dnsPolicy;
        return $this;
    }

    /**
    * Gets nodeSelector
    *  节点选择器，用于指定Pod可以调度到哪些节点
    *
    * @return map[string,string]|null
    */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
    * Sets nodeSelector
    *
    * @param map[string,string]|null $nodeSelector 节点选择器，用于指定Pod可以调度到哪些节点
    *
    * @return $this
    */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;
        return $this;
    }

    /**
    * Gets serviceAccountName
    *  运行此Pod所使用的ServiceAccount名称
    *
    * @return string|null
    */
    public function getServiceAccountName()
    {
        return $this->container['serviceAccountName'];
    }

    /**
    * Sets serviceAccountName
    *
    * @param string|null $serviceAccountName 运行此Pod所使用的ServiceAccount名称
    *
    * @return $this
    */
    public function setServiceAccountName($serviceAccountName)
    {
        $this->container['serviceAccountName'] = $serviceAccountName;
        return $this;
    }

    /**
    * Gets serviceAccount
    *  提供向后兼容的旧版ServiceAccount字段
    *
    * @return string|null
    */
    public function getServiceAccount()
    {
        return $this->container['serviceAccount'];
    }

    /**
    * Sets serviceAccount
    *
    * @param string|null $serviceAccount 提供向后兼容的旧版ServiceAccount字段
    *
    * @return $this
    */
    public function setServiceAccount($serviceAccount)
    {
        $this->container['serviceAccount'] = $serviceAccount;
        return $this;
    }

    /**
    * Gets automountServiceAccountToken
    *  是否自动挂载ServiceAccount的令牌
    *
    * @return bool|null
    */
    public function getAutomountServiceAccountToken()
    {
        return $this->container['automountServiceAccountToken'];
    }

    /**
    * Sets automountServiceAccountToken
    *
    * @param bool|null $automountServiceAccountToken 是否自动挂载ServiceAccount的令牌
    *
    * @return $this
    */
    public function setAutomountServiceAccountToken($automountServiceAccountToken)
    {
        $this->container['automountServiceAccountToken'] = $automountServiceAccountToken;
        return $this;
    }

    /**
    * Gets nodeName
    *  指定Pod应该调度到的节点
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
    * @param string|null $nodeName 指定Pod应该调度到的节点
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets securityContext
    *  Pod级别的安全上下文
    *
    * @return object|null
    */
    public function getSecurityContext()
    {
        return $this->container['securityContext'];
    }

    /**
    * Sets securityContext
    *
    * @param object|null $securityContext Pod级别的安全上下文
    *
    * @return $this
    */
    public function setSecurityContext($securityContext)
    {
        $this->container['securityContext'] = $securityContext;
        return $this;
    }

    /**
    * Gets schedulerName
    *  指定使用的调度器
    *
    * @return string|null
    */
    public function getSchedulerName()
    {
        return $this->container['schedulerName'];
    }

    /**
    * Sets schedulerName
    *
    * @param string|null $schedulerName 指定使用的调度器
    *
    * @return $this
    */
    public function setSchedulerName($schedulerName)
    {
        $this->container['schedulerName'] = $schedulerName;
        return $this;
    }

    /**
    * Gets tolerations
    *  容器容忍的污点列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]|null
    */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
    * Sets tolerations
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Toleration[]|null $tolerations 容器容忍的污点列表
    *
    * @return $this
    */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;
        return $this;
    }

    /**
    * Gets priority
    *  Pod 的优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority Pod 的优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets enableServiceLinks
    *  服务信息是否注入到Pod的环境变量中
    *
    * @return bool|null
    */
    public function getEnableServiceLinks()
    {
        return $this->container['enableServiceLinks'];
    }

    /**
    * Sets enableServiceLinks
    *
    * @param bool|null $enableServiceLinks 服务信息是否注入到Pod的环境变量中
    *
    * @return $this
    */
    public function setEnableServiceLinks($enableServiceLinks)
    {
        $this->container['enableServiceLinks'] = $enableServiceLinks;
        return $this;
    }

    /**
    * Gets preemptionPolicy
    *  抢占优先级策略
    *
    * @return string|null
    */
    public function getPreemptionPolicy()
    {
        return $this->container['preemptionPolicy'];
    }

    /**
    * Sets preemptionPolicy
    *
    * @param string|null $preemptionPolicy 抢占优先级策略
    *
    * @return $this
    */
    public function setPreemptionPolicy($preemptionPolicy)
    {
        $this->container['preemptionPolicy'] = $preemptionPolicy;
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

