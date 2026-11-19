<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * clusterVersion  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    * clusterStatus  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectName' => 'string',
            'clusterVersion' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'clusterStatus' => 'string',
            'installedPodNum' => 'int',
            'podNum' => 'int',
            'protectPodNum' => 'int',
            'createTime' => 'int',
            'protectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * clusterVersion  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    * clusterStatus  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectName' => null,
        'clusterVersion' => null,
        'clusterId' => null,
        'clusterName' => null,
        'clusterStatus' => null,
        'installedPodNum' => 'int32',
        'podNum' => 'int32',
        'protectPodNum' => 'int32',
        'createTime' => 'int64',
        'protectStatus' => null
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
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * clusterVersion  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    * clusterStatus  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectName' => 'enterprise_project_name',
            'clusterVersion' => 'cluster_version',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'clusterStatus' => 'cluster_status',
            'installedPodNum' => 'installed_pod_num',
            'podNum' => 'pod_num',
            'protectPodNum' => 'protect_pod_num',
            'createTime' => 'create_time',
            'protectStatus' => 'protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * clusterVersion  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    * clusterStatus  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'clusterVersion' => 'setClusterVersion',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'clusterStatus' => 'setClusterStatus',
            'installedPodNum' => 'setInstalledPodNum',
            'podNum' => 'setPodNum',
            'protectPodNum' => 'setProtectPodNum',
            'createTime' => 'setCreateTime',
            'protectStatus' => 'setProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * clusterVersion  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    * clusterStatus  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'clusterVersion' => 'getClusterVersion',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'clusterStatus' => 'getClusterStatus',
            'installedPodNum' => 'getInstalledPodNum',
            'podNum' => 'getPodNum',
            'protectPodNum' => 'getProtectPodNum',
            'createTime' => 'getCreateTime',
            'protectStatus' => 'getProtectStatus'
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
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterStatus'] = isset($data['clusterStatus']) ? $data['clusterStatus'] : null;
        $this->container['installedPodNum'] = isset($data['installedPodNum']) ? $data['installedPodNum'] : null;
        $this->container['podNum'] = isset($data['podNum']) ? $data['podNum'] : null;
        $this->container['protectPodNum'] = isset($data['protectPodNum']) ? $data['protectPodNum'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterVersion']) && (mb_strlen($this->container['clusterVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterVersion']) && (mb_strlen($this->container['clusterVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installedPodNum']) && ($this->container['installedPodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'installedPodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['installedPodNum']) && ($this->container['installedPodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'installedPodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'podNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'podNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectPodNum']) && ($this->container['protectPodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectPodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectPodNum']) && ($this->container['protectPodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectPodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectName
    *  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string|null $clusterVersion **参数解释**: 集群版本 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **取值范围**: 字符长度0-64位
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
    * @param string|null $clusterId **参数解释**: 集群id **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
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
    * @param string|null $clusterName **参数解释**: 所属集群 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterStatus
    *  **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    *
    * @return string|null
    */
    public function getClusterStatus()
    {
        return $this->container['clusterStatus'];
    }

    /**
    * Sets clusterStatus
    *
    * @param string|null $clusterStatus **参数解释**： 集群状态，从CCE同步状态 **取值范围**： - workload：工作负载。 - cluster：集群。
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
        return $this;
    }

    /**
    * Gets installedPodNum
    *  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getInstalledPodNum()
    {
        return $this->container['installedPodNum'];
    }

    /**
    * Sets installedPodNum
    *
    * @param int|null $installedPodNum **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setInstalledPodNum($installedPodNum)
    {
        $this->container['installedPodNum'] = $installedPodNum;
        return $this;
    }

    /**
    * Gets podNum
    *  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPodNum()
    {
        return $this->container['podNum'];
    }

    /**
    * Sets podNum
    *
    * @param int|null $podNum **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPodNum($podNum)
    {
        $this->container['podNum'] = $podNum;
        return $this;
    }

    /**
    * Gets protectPodNum
    *  **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectPodNum()
    {
        return $this->container['protectPodNum'];
    }

    /**
    * Sets protectPodNum
    *
    * @param int|null $protectPodNum **参数解释**: 已防护实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectPodNum($protectPodNum)
    {
        $this->container['protectPodNum'] = $protectPodNum;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $createTime **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
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
    * @param string|null $protectStatus **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
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

