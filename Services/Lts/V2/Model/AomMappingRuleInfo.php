<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AomMappingRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AomMappingRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * deploymentsPrefix  日志流前缀
    * deployments  工作负载
    * namespace  命名空间
    * containerName  容器名称
    * files  接入规则详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'deploymentsPrefix' => 'string',
            'deployments' => 'string[]',
            'namespace' => 'string',
            'containerName' => 'string',
            'files' => '\HuaweiCloud\SDK\Lts\V2\Model\AomMappingfilesInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * deploymentsPrefix  日志流前缀
    * deployments  工作负载
    * namespace  命名空间
    * containerName  容器名称
    * files  接入规则详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'deploymentsPrefix' => null,
        'deployments' => null,
        'namespace' => null,
        'containerName' => null,
        'files' => null
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
    * clusterId  集群id
    * clusterName  集群名称
    * deploymentsPrefix  日志流前缀
    * deployments  工作负载
    * namespace  命名空间
    * containerName  容器名称
    * files  接入规则详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'deploymentsPrefix' => 'deployments_prefix',
            'deployments' => 'deployments',
            'namespace' => 'namespace',
            'containerName' => 'container_name',
            'files' => 'files'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * deploymentsPrefix  日志流前缀
    * deployments  工作负载
    * namespace  命名空间
    * containerName  容器名称
    * files  接入规则详情
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'deploymentsPrefix' => 'setDeploymentsPrefix',
            'deployments' => 'setDeployments',
            'namespace' => 'setNamespace',
            'containerName' => 'setContainerName',
            'files' => 'setFiles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * deploymentsPrefix  日志流前缀
    * deployments  工作负载
    * namespace  命名空间
    * containerName  容器名称
    * files  接入规则详情
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'deploymentsPrefix' => 'getDeploymentsPrefix',
            'deployments' => 'getDeployments',
            'namespace' => 'getNamespace',
            'containerName' => 'getContainerName',
            'files' => 'getFiles'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['deploymentsPrefix'] = isset($data['deploymentsPrefix']) ? $data['deploymentsPrefix'] : null;
        $this->container['deployments'] = isset($data['deployments']) ? $data['deployments'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['clusterId']) < 36)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 10000)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deploymentsPrefix']) && (mb_strlen($this->container['deploymentsPrefix']) > 64)) {
                $invalidProperties[] = "invalid value for 'deploymentsPrefix', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deploymentsPrefix']) && (mb_strlen($this->container['deploymentsPrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'deploymentsPrefix', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deployments'] === null) {
            $invalidProperties[] = "'deployments' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 10000)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 10000)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['files'] === null) {
            $invalidProperties[] = "'files' can't be null";
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
    * Gets clusterId
    *  集群id
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets deploymentsPrefix
    *  日志流前缀
    *
    * @return string|null
    */
    public function getDeploymentsPrefix()
    {
        return $this->container['deploymentsPrefix'];
    }

    /**
    * Sets deploymentsPrefix
    *
    * @param string|null $deploymentsPrefix 日志流前缀
    *
    * @return $this
    */
    public function setDeploymentsPrefix($deploymentsPrefix)
    {
        $this->container['deploymentsPrefix'] = $deploymentsPrefix;
        return $this;
    }

    /**
    * Gets deployments
    *  工作负载
    *
    * @return string[]
    */
    public function getDeployments()
    {
        return $this->container['deployments'];
    }

    /**
    * Sets deployments
    *
    * @param string[] $deployments 工作负载
    *
    * @return $this
    */
    public function setDeployments($deployments)
    {
        $this->container['deployments'] = $deployments;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets containerName
    *  容器名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets files
    *  接入规则详情
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AomMappingfilesInfo[]
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AomMappingfilesInfo[] $files 接入规则详情
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
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

