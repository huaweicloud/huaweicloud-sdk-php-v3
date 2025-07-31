<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KubernetesServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KubernetesServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * clusterName  集群名称
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'endpointName' => 'string',
            'namespace' => 'string',
            'creationTimestamp' => 'int',
            'type' => 'string',
            'clusterIp' => 'string',
            'clusterName' => 'string',
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * clusterName  集群名称
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'endpointName' => null,
        'namespace' => null,
        'creationTimestamp' => 'int64',
        'type' => null,
        'clusterIp' => null,
        'clusterName' => null,
        'clusterType' => null
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
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * clusterName  集群名称
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'endpointName' => 'endpoint_name',
            'namespace' => 'namespace',
            'creationTimestamp' => 'creation_timestamp',
            'type' => 'type',
            'clusterIp' => 'cluster_ip',
            'clusterName' => 'cluster_name',
            'clusterType' => 'cluster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * clusterName  集群名称
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'endpointName' => 'setEndpointName',
            'namespace' => 'setNamespace',
            'creationTimestamp' => 'setCreationTimestamp',
            'type' => 'setType',
            'clusterIp' => 'setClusterIp',
            'clusterName' => 'setClusterName',
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  服务名称
    * endpointName  端点名称
    * namespace  命名空间
    * creationTimestamp  创建时间戳
    * type  服务类型（访问方式）
    * clusterIp  集群IP
    * clusterName  集群名称
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'endpointName' => 'getEndpointName',
            'namespace' => 'getNamespace',
            'creationTimestamp' => 'getCreationTimestamp',
            'type' => 'getType',
            'clusterIp' => 'getClusterIp',
            'clusterName' => 'getClusterName',
            'clusterType' => 'getClusterType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clusterIp'] = isset($data['clusterIp']) ? $data['clusterIp'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
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
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 0.";
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
    * Gets clusterType
    *  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
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

