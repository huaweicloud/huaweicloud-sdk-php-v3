<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProxyUnitedWorkloadResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProxyUnitedWorkloadResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    * apiVersion  API版本
    * metadata  metadata
    * template  要部署的应用模板
    * propagationPolicy  propagationPolicy
    * overridePolicy  overridePolicy
    * resourceBinding  resourceBinding
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'apiVersion' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Ucs\V1\Model\ObjectMeta',
            'template' => 'object',
            'propagationPolicy' => '\HuaweiCloud\SDK\Ucs\V1\Model\PropagationPolicy',
            'overridePolicy' => '\HuaweiCloud\SDK\Ucs\V1\Model\OverridePolicy',
            'resourceBinding' => '\HuaweiCloud\SDK\Ucs\V1\Model\ResourceBinding'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    * apiVersion  API版本
    * metadata  metadata
    * template  要部署的应用模板
    * propagationPolicy  propagationPolicy
    * overridePolicy  overridePolicy
    * resourceBinding  resourceBinding
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'apiVersion' => null,
        'metadata' => null,
        'template' => null,
        'propagationPolicy' => null,
        'overridePolicy' => null,
        'resourceBinding' => null
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
    * kind  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    * apiVersion  API版本
    * metadata  metadata
    * template  要部署的应用模板
    * propagationPolicy  propagationPolicy
    * overridePolicy  overridePolicy
    * resourceBinding  resourceBinding
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'apiVersion' => 'apiVersion',
            'metadata' => 'metadata',
            'template' => 'template',
            'propagationPolicy' => 'propagationPolicy',
            'overridePolicy' => 'overridePolicy',
            'resourceBinding' => 'resourceBinding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    * apiVersion  API版本
    * metadata  metadata
    * template  要部署的应用模板
    * propagationPolicy  propagationPolicy
    * overridePolicy  overridePolicy
    * resourceBinding  resourceBinding
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'apiVersion' => 'setApiVersion',
            'metadata' => 'setMetadata',
            'template' => 'setTemplate',
            'propagationPolicy' => 'setPropagationPolicy',
            'overridePolicy' => 'setOverridePolicy',
            'resourceBinding' => 'setResourceBinding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    * apiVersion  API版本
    * metadata  metadata
    * template  要部署的应用模板
    * propagationPolicy  propagationPolicy
    * overridePolicy  overridePolicy
    * resourceBinding  resourceBinding
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'apiVersion' => 'getApiVersion',
            'metadata' => 'getMetadata',
            'template' => 'getTemplate',
            'propagationPolicy' => 'getPropagationPolicy',
            'overridePolicy' => 'getOverridePolicy',
            'resourceBinding' => 'getResourceBinding'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['propagationPolicy'] = isset($data['propagationPolicy']) ? $data['propagationPolicy'] : null;
        $this->container['overridePolicy'] = isset($data['overridePolicy']) ? $data['overridePolicy'] : null;
        $this->container['resourceBinding'] = isset($data['resourceBinding']) ? $data['resourceBinding'] : null;
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
    * Gets kind
    *  资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind 资源类型，有以下取值： - Deployment：用于管理无状态应用 - Service：实现服务发现和负载均衡 - Ingress：管理对集群内服务的外部 HTTP/HTTPS 访问 - ConfigMap：用于存储非敏感的配置数据 - Secret：用于存储敏感信息 - Job：用于运行一次性任务的资源 - StatefulSet：用于管理有状态应用 - DaemonSet：用于在每个节点上运行一个 Pod 的资源 - PersistentVolumeClaim：用于向集群申请并使用持久化存储资源的声明
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets apiVersion
    *  API版本
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion API版本
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ObjectMeta|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ObjectMeta|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets template
    *  要部署的应用模板
    *
    * @return object|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param object|null $template 要部署的应用模板
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets propagationPolicy
    *  propagationPolicy
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\PropagationPolicy|null
    */
    public function getPropagationPolicy()
    {
        return $this->container['propagationPolicy'];
    }

    /**
    * Sets propagationPolicy
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\PropagationPolicy|null $propagationPolicy propagationPolicy
    *
    * @return $this
    */
    public function setPropagationPolicy($propagationPolicy)
    {
        $this->container['propagationPolicy'] = $propagationPolicy;
        return $this;
    }

    /**
    * Gets overridePolicy
    *  overridePolicy
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\OverridePolicy|null
    */
    public function getOverridePolicy()
    {
        return $this->container['overridePolicy'];
    }

    /**
    * Sets overridePolicy
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\OverridePolicy|null $overridePolicy overridePolicy
    *
    * @return $this
    */
    public function setOverridePolicy($overridePolicy)
    {
        $this->container['overridePolicy'] = $overridePolicy;
        return $this;
    }

    /**
    * Gets resourceBinding
    *  resourceBinding
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ResourceBinding|null
    */
    public function getResourceBinding()
    {
        return $this->container['resourceBinding'];
    }

    /**
    * Sets resourceBinding
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ResourceBinding|null $resourceBinding resourceBinding
    *
    * @return $this
    */
    public function setResourceBinding($resourceBinding)
    {
        $this->container['resourceBinding'] = $resourceBinding;
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

