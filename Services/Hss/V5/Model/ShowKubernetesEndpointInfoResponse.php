<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKubernetesEndpointInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKubernetesEndpointInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  端点名称
    * serviceName  服务名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * associationService  是否关联服务
    * endpointPodList  端点关联Pod映射
    * endpointPortList  端点关联端口列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'serviceName' => 'string',
            'namespace' => 'string',
            'creationTimestamp' => 'int',
            'clusterName' => 'string',
            'labels' => 'string',
            'associationService' => 'bool',
            'endpointPodList' => '\HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPodInfo[]',
            'endpointPortList' => '\HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPortInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  端点名称
    * serviceName  服务名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * associationService  是否关联服务
    * endpointPodList  端点关联Pod映射
    * endpointPortList  端点关联端口列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'serviceName' => null,
        'namespace' => null,
        'creationTimestamp' => 'int64',
        'clusterName' => null,
        'labels' => null,
        'associationService' => null,
        'endpointPodList' => null,
        'endpointPortList' => null
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
    * id  id
    * name  端点名称
    * serviceName  服务名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * associationService  是否关联服务
    * endpointPodList  端点关联Pod映射
    * endpointPortList  端点关联端口列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'serviceName' => 'service_name',
            'namespace' => 'namespace',
            'creationTimestamp' => 'creation_timestamp',
            'clusterName' => 'cluster_name',
            'labels' => 'labels',
            'associationService' => 'association_service',
            'endpointPodList' => 'endpoint_pod_list',
            'endpointPortList' => 'endpoint_port_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  端点名称
    * serviceName  服务名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * associationService  是否关联服务
    * endpointPodList  端点关联Pod映射
    * endpointPortList  端点关联端口列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'serviceName' => 'setServiceName',
            'namespace' => 'setNamespace',
            'creationTimestamp' => 'setCreationTimestamp',
            'clusterName' => 'setClusterName',
            'labels' => 'setLabels',
            'associationService' => 'setAssociationService',
            'endpointPodList' => 'setEndpointPodList',
            'endpointPortList' => 'setEndpointPortList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  端点名称
    * serviceName  服务名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * associationService  是否关联服务
    * endpointPodList  端点关联Pod映射
    * endpointPortList  端点关联端口列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'serviceName' => 'getServiceName',
            'namespace' => 'getNamespace',
            'creationTimestamp' => 'getCreationTimestamp',
            'clusterName' => 'getClusterName',
            'labels' => 'getLabels',
            'associationService' => 'getAssociationService',
            'endpointPodList' => 'getEndpointPodList',
            'endpointPortList' => 'getEndpointPortList'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['associationService'] = isset($data['associationService']) ? $data['associationService'] : null;
        $this->container['endpointPodList'] = isset($data['endpointPodList']) ? $data['endpointPodList'] : null;
        $this->container['endpointPortList'] = isset($data['endpointPortList']) ? $data['endpointPortList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creationTimestamp']) && ($this->container['creationTimestamp'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'creationTimestamp', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['creationTimestamp']) && ($this->container['creationTimestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'creationTimestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 256)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  id
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
    * @param string|null $id id
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
    *  端点名称
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
    * @param string|null $name 端点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名称
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名称
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param int|null $creationTimestamp 创建时间戳
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
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
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets associationService
    *  是否关联服务
    *
    * @return bool|null
    */
    public function getAssociationService()
    {
        return $this->container['associationService'];
    }

    /**
    * Sets associationService
    *
    * @param bool|null $associationService 是否关联服务
    *
    * @return $this
    */
    public function setAssociationService($associationService)
    {
        $this->container['associationService'] = $associationService;
        return $this;
    }

    /**
    * Gets endpointPodList
    *  端点关联Pod映射
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPodInfo[]|null
    */
    public function getEndpointPodList()
    {
        return $this->container['endpointPodList'];
    }

    /**
    * Sets endpointPodList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPodInfo[]|null $endpointPodList 端点关联Pod映射
    *
    * @return $this
    */
    public function setEndpointPodList($endpointPodList)
    {
        $this->container['endpointPodList'] = $endpointPodList;
        return $this;
    }

    /**
    * Gets endpointPortList
    *  端点关联端口列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPortInfo[]|null
    */
    public function getEndpointPortList()
    {
        return $this->container['endpointPortList'];
    }

    /**
    * Sets endpointPortList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\KubernetesEndpointPortInfo[]|null $endpointPortList 端点关联端口列表
    *
    * @return $this
    */
    public function setEndpointPortList($endpointPortList)
    {
        $this->container['endpointPortList'] = $endpointPortList;
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

