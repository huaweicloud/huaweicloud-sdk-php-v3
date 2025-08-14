<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterContainerLogResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterContainerLogResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    * time  日志产生的时间
    * namespace  容器日志所属的命名空间
    * podName  产生日志的容器所属pod的名称
    * podId  产生日志的容器所属pod的id
    * podIp  产生日志的容器所属pod的ip
    * hostIp  产生日志的容器所在的主机ip
    * containerName  产生日志的容器名称
    * containerId  产生日志的容器id
    * content  日志的内容
    * lineNum  cce集群容器日志的行号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'time' => 'int',
            'namespace' => 'string',
            'podName' => 'string',
            'podId' => 'string',
            'podIp' => 'string',
            'hostIp' => 'string',
            'containerName' => 'string',
            'containerId' => 'string',
            'content' => 'string',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    * time  日志产生的时间
    * namespace  容器日志所属的命名空间
    * podName  产生日志的容器所属pod的名称
    * podId  产生日志的容器所属pod的id
    * podIp  产生日志的容器所属pod的ip
    * hostIp  产生日志的容器所在的主机ip
    * containerName  产生日志的容器名称
    * containerId  产生日志的容器id
    * content  日志的内容
    * lineNum  cce集群容器日志的行号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'clusterId' => null,
        'clusterType' => null,
        'time' => 'int64',
        'namespace' => null,
        'podName' => null,
        'podId' => null,
        'podIp' => null,
        'hostIp' => null,
        'containerName' => null,
        'containerId' => null,
        'content' => null,
        'lineNum' => null
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
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    * time  日志产生的时间
    * namespace  容器日志所属的命名空间
    * podName  产生日志的容器所属pod的名称
    * podId  产生日志的容器所属pod的id
    * podIp  产生日志的容器所属pod的ip
    * hostIp  产生日志的容器所在的主机ip
    * containerName  产生日志的容器名称
    * containerId  产生日志的容器id
    * content  日志的内容
    * lineNum  cce集群容器日志的行号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'time' => 'time',
            'namespace' => 'namespace',
            'podName' => 'pod_name',
            'podId' => 'pod_id',
            'podIp' => 'pod_ip',
            'hostIp' => 'host_ip',
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'content' => 'content',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    * time  日志产生的时间
    * namespace  容器日志所属的命名空间
    * podName  产生日志的容器所属pod的名称
    * podId  产生日志的容器所属pod的id
    * podIp  产生日志的容器所属pod的ip
    * hostIp  产生日志的容器所在的主机ip
    * containerName  产生日志的容器名称
    * containerId  产生日志的容器id
    * content  日志的内容
    * lineNum  cce集群容器日志的行号
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'time' => 'setTime',
            'namespace' => 'setNamespace',
            'podName' => 'setPodName',
            'podId' => 'setPodId',
            'podIp' => 'setPodIp',
            'hostIp' => 'setHostIp',
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'content' => 'setContent',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  集群名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    * time  日志产生的时间
    * namespace  容器日志所属的命名空间
    * podName  产生日志的容器所属pod的名称
    * podId  产生日志的容器所属pod的id
    * podIp  产生日志的容器所属pod的ip
    * hostIp  产生日志的容器所在的主机ip
    * containerName  产生日志的容器名称
    * containerId  产生日志的容器id
    * content  日志的内容
    * lineNum  cce集群容器日志的行号
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'time' => 'getTime',
            'namespace' => 'getNamespace',
            'podName' => 'getPodName',
            'podId' => 'getPodId',
            'podIp' => 'getPodIp',
            'hostIp' => 'getHostIp',
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'content' => 'getContent',
            'lineNum' => 'getLineNum'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 256)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 1)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 64)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 1)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 65535)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) > 128)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['lineNum']) && (mb_strlen($this->container['lineNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'lineNum', the character length must be bigger than or equal to 0.";
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
    * Gets clusterId
    *  集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
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
    * @param string|null $clusterType 集群类型，包含以下几种： - cce：cce集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets time
    *  日志产生的时间
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 日志产生的时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets namespace
    *  容器日志所属的命名空间
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
    * @param string|null $namespace 容器日志所属的命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets podName
    *  产生日志的容器所属pod的名称
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
    * @param string|null $podName 产生日志的容器所属pod的名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets podId
    *  产生日志的容器所属pod的id
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId 产生日志的容器所属pod的id
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podIp
    *  产生日志的容器所属pod的ip
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
    * @param string|null $podIp 产生日志的容器所属pod的ip
    *
    * @return $this
    */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;
        return $this;
    }

    /**
    * Gets hostIp
    *  产生日志的容器所在的主机ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 产生日志的容器所在的主机ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets containerName
    *  产生日志的容器名称
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
    * @param string|null $containerName 产生日志的容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets containerId
    *  产生日志的容器id
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 产生日志的容器id
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets content
    *  日志的内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 日志的内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets lineNum
    *  cce集群容器日志的行号
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum cce集群容器日志的行号
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

