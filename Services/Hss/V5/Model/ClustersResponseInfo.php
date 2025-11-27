<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClustersResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClustersResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterName  集群名称
    * clusterType  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    * version  集群版本
    * mode  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    * namespaceNum  命名空间数
    * policyNum  策略数量
    * protectionStatus  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'clusterType' => 'string',
            'version' => 'string',
            'mode' => 'string',
            'namespaceNum' => 'int',
            'policyNum' => 'int',
            'protectionStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterName  集群名称
    * clusterType  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    * version  集群版本
    * mode  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    * namespaceNum  命名空间数
    * policyNum  策略数量
    * protectionStatus  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'clusterType' => null,
        'version' => null,
        'mode' => null,
        'namespaceNum' => 'int32',
        'policyNum' => 'int32',
        'protectionStatus' => null
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
    * clusterId  集群ID
    * clusterName  集群名称
    * clusterType  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    * version  集群版本
    * mode  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    * namespaceNum  命名空间数
    * policyNum  策略数量
    * protectionStatus  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'clusterType' => 'cluster_type',
            'version' => 'version',
            'mode' => 'mode',
            'namespaceNum' => 'namespace_num',
            'policyNum' => 'policy_num',
            'protectionStatus' => 'protection_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * clusterName  集群名称
    * clusterType  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    * version  集群版本
    * mode  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    * namespaceNum  命名空间数
    * policyNum  策略数量
    * protectionStatus  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'clusterType' => 'setClusterType',
            'version' => 'setVersion',
            'mode' => 'setMode',
            'namespaceNum' => 'setNamespaceNum',
            'policyNum' => 'setPolicyNum',
            'protectionStatus' => 'setProtectionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * clusterName  集群名称
    * clusterType  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    * version  集群版本
    * mode  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    * namespaceNum  命名空间数
    * policyNum  策略数量
    * protectionStatus  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'clusterType' => 'getClusterType',
            'version' => 'getVersion',
            'mode' => 'getMode',
            'namespaceNum' => 'getNamespaceNum',
            'policyNum' => 'getPolicyNum',
            'protectionStatus' => 'getProtectionStatus'
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
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['namespaceNum'] = isset($data['namespaceNum']) ? $data['namespaceNum'] : null;
        $this->container['policyNum'] = isset($data['policyNum']) ? $data['policyNum'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) > 64)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mode']) && (mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceNum']) && ($this->container['namespaceNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'namespaceNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['namespaceNum']) && ($this->container['namespaceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] > 16)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be bigger than or equal to 0.";
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
    *  集群ID
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
    * @param string|null $clusterId 集群ID
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
    *  集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
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
    * @param string|null $clusterType 集群类型:   - cce：cce集群   - k8s：k8s集群    - ali：阿里云集群   - tencent：腾讯云集群   - azure：微软云集群   - aws：亚马逊集群   - self_built_hw：华为云自建集群   - self_built_idc：IDC自建集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets version
    *  集群版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 集群版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets mode
    *  网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 网络模型:   - overlay_l2：容器隧道网络   - vpc-router：VPC网络   - eni：云原生网络2.0   - native-network：K8S原生网络
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets namespaceNum
    *  命名空间数
    *
    * @return int|null
    */
    public function getNamespaceNum()
    {
        return $this->container['namespaceNum'];
    }

    /**
    * Sets namespaceNum
    *
    * @param int|null $namespaceNum 命名空间数
    *
    * @return $this
    */
    public function setNamespaceNum($namespaceNum)
    {
        $this->container['namespaceNum'] = $namespaceNum;
        return $this;
    }

    /**
    * Gets policyNum
    *  策略数量
    *
    * @return int|null
    */
    public function getPolicyNum()
    {
        return $this->container['policyNum'];
    }

    /**
    * Sets policyNum
    *
    * @param int|null $policyNum 策略数量
    *
    * @return $this
    */
    public function setPolicyNum($policyNum)
    {
        $this->container['policyNum'] = $policyNum;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @return bool|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param bool|null $protectionStatus **参数解释**: 防护状态 **取值范围**: - true: 防护中 - false: 未防护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
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

