<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterName  集群名称
    * description  集群描述
    * version  边缘集群版本
    * state  边缘集群状态
    * os  操作系统
    * arch  集群架构
    * license  license
    * resourceId  资源id
    * clusterType  集群类型
    * kubernetesVersion  kubernetes版本
    * licenseStatus  集群license状态
    * clusterAddr  集群地址
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'description' => 'string',
            'version' => 'string',
            'state' => 'string',
            'os' => 'string',
            'arch' => 'string',
            'license' => '\HuaweiCloud\SDK\IoTEdge\V3\Model\LicenseInfo',
            'resourceId' => 'string',
            'clusterType' => 'string',
            'kubernetesVersion' => 'string',
            'licenseStatus' => 'string',
            'clusterAddr' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID
    * clusterName  集群名称
    * description  集群描述
    * version  边缘集群版本
    * state  边缘集群状态
    * os  操作系统
    * arch  集群架构
    * license  license
    * resourceId  资源id
    * clusterType  集群类型
    * kubernetesVersion  kubernetes版本
    * licenseStatus  集群license状态
    * clusterAddr  集群地址
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'description' => null,
        'version' => null,
        'state' => null,
        'os' => null,
        'arch' => null,
        'license' => null,
        'resourceId' => null,
        'clusterType' => null,
        'kubernetesVersion' => null,
        'licenseStatus' => null,
        'clusterAddr' => null,
        'createTime' => null,
        'updateTime' => null
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
    * description  集群描述
    * version  边缘集群版本
    * state  边缘集群状态
    * os  操作系统
    * arch  集群架构
    * license  license
    * resourceId  资源id
    * clusterType  集群类型
    * kubernetesVersion  kubernetes版本
    * licenseStatus  集群license状态
    * clusterAddr  集群地址
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'description' => 'description',
            'version' => 'version',
            'state' => 'state',
            'os' => 'os',
            'arch' => 'arch',
            'license' => 'license',
            'resourceId' => 'resource_id',
            'clusterType' => 'cluster_type',
            'kubernetesVersion' => 'kubernetes_version',
            'licenseStatus' => 'license_status',
            'clusterAddr' => 'cluster_addr',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID
    * clusterName  集群名称
    * description  集群描述
    * version  边缘集群版本
    * state  边缘集群状态
    * os  操作系统
    * arch  集群架构
    * license  license
    * resourceId  资源id
    * clusterType  集群类型
    * kubernetesVersion  kubernetes版本
    * licenseStatus  集群license状态
    * clusterAddr  集群地址
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'description' => 'setDescription',
            'version' => 'setVersion',
            'state' => 'setState',
            'os' => 'setOs',
            'arch' => 'setArch',
            'license' => 'setLicense',
            'resourceId' => 'setResourceId',
            'clusterType' => 'setClusterType',
            'kubernetesVersion' => 'setKubernetesVersion',
            'licenseStatus' => 'setLicenseStatus',
            'clusterAddr' => 'setClusterAddr',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID
    * clusterName  集群名称
    * description  集群描述
    * version  边缘集群版本
    * state  边缘集群状态
    * os  操作系统
    * arch  集群架构
    * license  license
    * resourceId  资源id
    * clusterType  集群类型
    * kubernetesVersion  kubernetes版本
    * licenseStatus  集群license状态
    * clusterAddr  集群地址
    * createTime  创建时间
    * updateTime  最后一次修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'description' => 'getDescription',
            'version' => 'getVersion',
            'state' => 'getState',
            'os' => 'getOs',
            'arch' => 'getArch',
            'license' => 'getLicense',
            'resourceId' => 'getResourceId',
            'clusterType' => 'getClusterType',
            'kubernetesVersion' => 'getKubernetesVersion',
            'licenseStatus' => 'getLicenseStatus',
            'clusterAddr' => 'getClusterAddr',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['licenseStatus'] = isset($data['licenseStatus']) ? $data['licenseStatus'] : null;
        $this->container['clusterAddr'] = isset($data['clusterAddr']) ? $data['clusterAddr'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 4)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^[A-Za-z0-9-_]*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^[A-Za-z0-9-_]*$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_；：？！，;:、,.?!。\\-\\s\\u4e00-\\u9fa5]*$/.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    * Gets description
    *  集群描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 集群描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets version
    *  边缘集群版本
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
    * @param string|null $version 边缘集群版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets state
    *  边缘集群状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 边缘集群状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets os
    *  操作系统
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets arch
    *  集群架构
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch 集群架构
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets license
    *  license
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V3\Model\LicenseInfo|null
    */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
    * Sets license
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V3\Model\LicenseInfo|null $license license
    *
    * @return $this
    */
    public function setLicense($license)
    {
        $this->container['license'] = $license;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型
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
    * @param string|null $clusterType 集群类型
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets kubernetesVersion
    *  kubernetes版本
    *
    * @return string|null
    */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
    * Sets kubernetesVersion
    *
    * @param string|null $kubernetesVersion kubernetes版本
    *
    * @return $this
    */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;
        return $this;
    }

    /**
    * Gets licenseStatus
    *  集群license状态
    *
    * @return string|null
    */
    public function getLicenseStatus()
    {
        return $this->container['licenseStatus'];
    }

    /**
    * Sets licenseStatus
    *
    * @param string|null $licenseStatus 集群license状态
    *
    * @return $this
    */
    public function setLicenseStatus($licenseStatus)
    {
        $this->container['licenseStatus'] = $licenseStatus;
        return $this;
    }

    /**
    * Gets clusterAddr
    *  集群地址
    *
    * @return string|null
    */
    public function getClusterAddr()
    {
        return $this->container['clusterAddr'];
    }

    /**
    * Sets clusterAddr
    *
    * @param string|null $clusterAddr 集群地址
    *
    * @return $this
    */
    public function setClusterAddr($clusterAddr)
    {
        $this->container['clusterAddr'] = $clusterAddr;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

