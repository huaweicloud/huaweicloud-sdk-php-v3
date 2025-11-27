<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterVersion  **参数解释**： 集群版本 **取值范围**： 不涉及
    * protectStatus  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    * policyNum  **参数解释**： 策略数量 **取值范围**： 不涉及
    * clusterStatus  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    * clusterType  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterVersion' => 'string',
            'protectStatus' => 'string',
            'policyNum' => 'int',
            'clusterStatus' => 'string',
            'clusterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterVersion  **参数解释**： 集群版本 **取值范围**： 不涉及
    * protectStatus  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    * policyNum  **参数解释**： 策略数量 **取值范围**： 不涉及
    * clusterStatus  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    * clusterType  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'clusterId' => null,
        'clusterVersion' => null,
        'protectStatus' => null,
        'policyNum' => null,
        'clusterStatus' => null,
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
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterVersion  **参数解释**： 集群版本 **取值范围**： 不涉及
    * protectStatus  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    * policyNum  **参数解释**： 策略数量 **取值范围**： 不涉及
    * clusterStatus  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    * clusterType  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterVersion' => 'cluster_version',
            'protectStatus' => 'protect_status',
            'policyNum' => 'policy_num',
            'clusterStatus' => 'cluster_status',
            'clusterType' => 'cluster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterVersion  **参数解释**： 集群版本 **取值范围**： 不涉及
    * protectStatus  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    * policyNum  **参数解释**： 策略数量 **取值范围**： 不涉及
    * clusterStatus  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    * clusterType  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterVersion' => 'setClusterVersion',
            'protectStatus' => 'setProtectStatus',
            'policyNum' => 'setPolicyNum',
            'clusterStatus' => 'setClusterStatus',
            'clusterType' => 'setClusterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群ID **取值范围**： 不涉及
    * clusterVersion  **参数解释**： 集群版本 **取值范围**： 不涉及
    * protectStatus  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    * policyNum  **参数解释**： 策略数量 **取值范围**： 不涉及
    * clusterStatus  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    * clusterType  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterVersion' => 'getClusterVersion',
            'protectStatus' => 'getProtectStatus',
            'policyNum' => 'getPolicyNum',
            'clusterStatus' => 'getClusterStatus',
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['policyNum'] = isset($data['policyNum']) ? $data['policyNum'] : null;
        $this->container['clusterStatus'] = isset($data['clusterStatus']) ? $data['clusterStatus'] : null;
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
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterVersion']) && (mb_strlen($this->container['clusterVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterVersion']) && (mb_strlen($this->container['clusterVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['policyNum']) && ($this->container['policyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'policyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be bigger than or equal to 1.";
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
    * Gets clusterName
    *  **参数解释**： 集群名称 **取值范围**： 不涉及
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 不涉及
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
    *  **参数解释**： 集群ID **取值范围**： 不涉及
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
    * @param string|null $clusterId **参数解释**： 集群ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  **参数解释**： 集群版本 **取值范围**： 不涉及
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
    * @param string|null $clusterVersion **参数解释**： 集群版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
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
    * @param string|null $protectStatus **参数解释**： 白名单规则类型 **取值范围**: - unprotected：未保护。 - plugin error：插件错误。 - protected with policy：受策略保护。 - deploy policy failed：部署策略失败。 - protected without policy：无策略保护。 - uninstall failed：卸载失败。 - uninstall：卸载。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets policyNum
    *  **参数解释**： 策略数量 **取值范围**： 不涉及
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
    * @param int|null $policyNum **参数解释**： 策略数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPolicyNum($policyNum)
    {
        $this->container['policyNum'] = $policyNum;
        return $this;
    }

    /**
    * Gets clusterStatus
    *  **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
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
    * @param string|null $clusterStatus **参数解释**： 集群运行状态 **取值范围**: - Available：可用。 - Unavailable：不可用。
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
        return $this;
    }

    /**
    * Gets clusterType
    *  **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
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
    * @param string|null $clusterType **参数解释**： 集群类型 **取值范围**: - k8s：原生集群。 - cce：CCE集群。 - ali：阿里云集群。 - tencent：腾讯云集群。 - azure：微软云集群。 - aws：亚马逊集群。 - self_built_hw：华为云自建集群。 - self_built_idc：IDC自建集群。
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

