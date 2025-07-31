<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DaemonSetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DaemonSetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  daemonset名称
    * namespaceName  命名空间名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * clusterName  集群名称
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'namespaceName' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'clusterName' => 'string',
            'status' => 'string',
            'podsNum' => 'int',
            'imageName' => 'string',
            'matchLabels' => '\HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  daemonset名称
    * namespaceName  命名空间名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * clusterName  集群名称
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'namespaceName' => null,
        'clusterId' => null,
        'clusterType' => null,
        'clusterName' => null,
        'status' => null,
        'podsNum' => 'int32',
        'imageName' => null,
        'matchLabels' => null,
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
    * name  daemonset名称
    * namespaceName  命名空间名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * clusterName  集群名称
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'namespaceName' => 'namespace_name',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'clusterName' => 'cluster_name',
            'status' => 'status',
            'podsNum' => 'pods_num',
            'imageName' => 'image_name',
            'matchLabels' => 'match_labels',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  daemonset名称
    * namespaceName  命名空间名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * clusterName  集群名称
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'namespaceName' => 'setNamespaceName',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'clusterName' => 'setClusterName',
            'status' => 'setStatus',
            'podsNum' => 'setPodsNum',
            'imageName' => 'setImageName',
            'matchLabels' => 'setMatchLabels',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  daemonset名称
    * namespaceName  命名空间名称
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * clusterName  集群名称
    * status  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    * podsNum  实例个数
    * imageName  镜像名称
    * matchLabels  标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'namespaceName' => 'getNamespaceName',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'clusterName' => 'getClusterName',
            'status' => 'getStatus',
            'podsNum' => 'getPodsNum',
            'imageName' => 'getImageName',
            'matchLabels' => 'getMatchLabels',
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
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['podsNum'] = isset($data['podsNum']) ? $data['podsNum'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['matchLabels'] = isset($data['matchLabels']) ? $data['matchLabels'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 65535)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podsNum']) && ($this->container['podsNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'podsNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['podsNum']) && ($this->container['podsNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'podsNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  daemonset名称
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
    * @param string|null $name daemonset名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets status
    *  状态，包含以下几种 -Running：正常运行 -Failed：存在异常
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
    * @param string|null $status 状态，包含以下几种 -Running：正常运行 -Failed：存在异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets podsNum
    *  实例个数
    *
    * @return int|null
    */
    public function getPodsNum()
    {
        return $this->container['podsNum'];
    }

    /**
    * Sets podsNum
    *
    * @param int|null $podsNum 实例个数
    *
    * @return $this
    */
    public function setPodsNum($podsNum)
    {
        $this->container['podsNum'] = $podsNum;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets matchLabels
    *  标签
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null
    */
    public function getMatchLabels()
    {
        return $this->container['matchLabels'];
    }

    /**
    * Sets matchLabels
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null $matchLabels 标签
    *
    * @return $this
    */
    public function setMatchLabels($matchLabels)
    {
        $this->container['matchLabels'] = $matchLabels;
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

