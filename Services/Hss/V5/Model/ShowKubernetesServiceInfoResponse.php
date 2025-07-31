<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKubernetesServiceInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKubernetesServiceInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  服务ID
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * selector  选择器
    * sessionAffinity  会话亲和性
    * servicePortList  Service关联端口列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'endpointName' => 'string',
            'namespace' => 'string',
            'creationTimestamp' => 'int',
            'clusterName' => 'string',
            'labels' => 'string',
            'type' => 'string',
            'clusterIp' => 'string',
            'selector' => 'string',
            'sessionAffinity' => 'string',
            'servicePortList' => '\HuaweiCloud\SDK\Hss\V5\Model\KubernetesServicePortInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  服务ID
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * selector  选择器
    * sessionAffinity  会话亲和性
    * servicePortList  Service关联端口列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'endpointName' => null,
        'namespace' => null,
        'creationTimestamp' => 'int64',
        'clusterName' => null,
        'labels' => null,
        'type' => null,
        'clusterIp' => null,
        'selector' => null,
        'sessionAffinity' => null,
        'servicePortList' => null
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
    * id  服务ID
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * selector  选择器
    * sessionAffinity  会话亲和性
    * servicePortList  Service关联端口列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'endpointName' => 'endpoint_name',
            'namespace' => 'namespace',
            'creationTimestamp' => 'creation_timestamp',
            'clusterName' => 'cluster_name',
            'labels' => 'labels',
            'type' => 'type',
            'clusterIp' => 'cluster_ip',
            'selector' => 'selector',
            'sessionAffinity' => 'session_affinity',
            'servicePortList' => 'service_port_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  服务ID
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * selector  选择器
    * sessionAffinity  会话亲和性
    * servicePortList  Service关联端口列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'endpointName' => 'setEndpointName',
            'namespace' => 'setNamespace',
            'creationTimestamp' => 'setCreationTimestamp',
            'clusterName' => 'setClusterName',
            'labels' => 'setLabels',
            'type' => 'setType',
            'clusterIp' => 'setClusterIp',
            'selector' => 'setSelector',
            'sessionAffinity' => 'setSessionAffinity',
            'servicePortList' => 'setServicePortList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  服务ID
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * clusterName  集群名称
    * labels  标签
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * selector  选择器
    * sessionAffinity  会话亲和性
    * servicePortList  Service关联端口列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'endpointName' => 'getEndpointName',
            'namespace' => 'getNamespace',
            'creationTimestamp' => 'getCreationTimestamp',
            'clusterName' => 'getClusterName',
            'labels' => 'getLabels',
            'type' => 'getType',
            'clusterIp' => 'getClusterIp',
            'selector' => 'getSelector',
            'sessionAffinity' => 'getSessionAffinity',
            'servicePortList' => 'getServicePortList'
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
        $this->container['endpointName'] = isset($data['endpointName']) ? $data['endpointName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clusterIp'] = isset($data['clusterIp']) ? $data['clusterIp'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['sessionAffinity'] = isset($data['sessionAffinity']) ? $data['sessionAffinity'] : null;
        $this->container['servicePortList'] = isset($data['servicePortList']) ? $data['servicePortList'] : null;
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
            if (!is_null($this->container['endpointName']) && (mb_strlen($this->container['endpointName']) > 256)) {
                $invalidProperties[] = "invalid value for 'endpointName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['endpointName']) && (mb_strlen($this->container['endpointName']) < 0)) {
                $invalidProperties[] = "invalid value for 'endpointName', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterIp']) && (mb_strlen($this->container['clusterIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterIp']) && (mb_strlen($this->container['clusterIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['selector']) && (mb_strlen($this->container['selector']) > 256)) {
                $invalidProperties[] = "invalid value for 'selector', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['selector']) && (mb_strlen($this->container['selector']) < 0)) {
                $invalidProperties[] = "invalid value for 'selector', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionAffinity']) && (mb_strlen($this->container['sessionAffinity']) > 256)) {
                $invalidProperties[] = "invalid value for 'sessionAffinity', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sessionAffinity']) && (mb_strlen($this->container['sessionAffinity']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionAffinity', the character length must be bigger than or equal to 0.";
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
    *  服务ID
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
    * @param string|null $id 服务ID
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
    *  服务名称
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
    * @param string|null $name 服务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets endpointName
    *  端点名称
    *
    * @return string|null
    */
    public function getEndpointName()
    {
        return $this->container['endpointName'];
    }

    /**
    * Sets endpointName
    *
    * @param string|null $endpointName 端点名称
    *
    * @return $this
    */
    public function setEndpointName($endpointName)
    {
        $this->container['endpointName'] = $endpointName;
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
    * Gets type
    *  服务类型（访问方式）
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
    * @param string|null $type 服务类型（访问方式）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clusterIp
    *  集群IP
    *
    * @return string|null
    */
    public function getClusterIp()
    {
        return $this->container['clusterIp'];
    }

    /**
    * Sets clusterIp
    *
    * @param string|null $clusterIp 集群IP
    *
    * @return $this
    */
    public function setClusterIp($clusterIp)
    {
        $this->container['clusterIp'] = $clusterIp;
        return $this;
    }

    /**
    * Gets selector
    *  选择器
    *
    * @return string|null
    */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
    * Sets selector
    *
    * @param string|null $selector 选择器
    *
    * @return $this
    */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;
        return $this;
    }

    /**
    * Gets sessionAffinity
    *  会话亲和性
    *
    * @return string|null
    */
    public function getSessionAffinity()
    {
        return $this->container['sessionAffinity'];
    }

    /**
    * Sets sessionAffinity
    *
    * @param string|null $sessionAffinity 会话亲和性
    *
    * @return $this
    */
    public function setSessionAffinity($sessionAffinity)
    {
        $this->container['sessionAffinity'] = $sessionAffinity;
        return $this;
    }

    /**
    * Gets servicePortList
    *  Service关联端口列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\KubernetesServicePortInfo[]|null
    */
    public function getServicePortList()
    {
        return $this->container['servicePortList'];
    }

    /**
    * Sets servicePortList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\KubernetesServicePortInfo[]|null $servicePortList Service关联端口列表
    *
    * @return $this
    */
    public function setServicePortList($servicePortList)
    {
        $this->container['servicePortList'] = $servicePortList;
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

