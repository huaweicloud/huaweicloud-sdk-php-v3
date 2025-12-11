<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleInstanceV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleInstanceV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * haMode  实例类型。
    * engineName  引擎名称。
    * engineVersion  引擎版本。
    * payModel  计费模式。
    * createAt  创建时间。
    * deletedAt  删除时间。
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小。
    * dataVip  数据面VIP。
    * dataVipIpv6  数据面IPV6。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * backupLevel  备份级别。
    * recycleBackupId  备份ID。
    * recycleStatus  回收状态。
    * recycleBakcups  **参数解释**：  实例所有的回收站备份列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'haMode' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'payModel' => 'string',
            'createAt' => 'int',
            'deletedAt' => 'int',
            'volumeType' => 'string',
            'volumeSize' => 'string',
            'dataVip' => 'string',
            'dataVipIpv6' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'backupLevel' => 'string',
            'recycleBackupId' => 'string',
            'recycleStatus' => 'string',
            'recycleBakcups' => '\HuaweiCloud\SDK\GaussDB\V3\Model\RecycleBackupV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。
    * haMode  实例类型。
    * engineName  引擎名称。
    * engineVersion  引擎版本。
    * payModel  计费模式。
    * createAt  创建时间。
    * deletedAt  删除时间。
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小。
    * dataVip  数据面VIP。
    * dataVipIpv6  数据面IPV6。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * backupLevel  备份级别。
    * recycleBackupId  备份ID。
    * recycleStatus  回收状态。
    * recycleBakcups  **参数解释**：  实例所有的回收站备份列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'haMode' => null,
        'engineName' => null,
        'engineVersion' => null,
        'payModel' => null,
        'createAt' => 'int64',
        'deletedAt' => 'int64',
        'volumeType' => null,
        'volumeSize' => null,
        'dataVip' => null,
        'dataVipIpv6' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'backupLevel' => null,
        'recycleBackupId' => null,
        'recycleStatus' => null,
        'recycleBakcups' => null
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
    * id  实例ID。
    * name  实例名称。
    * haMode  实例类型。
    * engineName  引擎名称。
    * engineVersion  引擎版本。
    * payModel  计费模式。
    * createAt  创建时间。
    * deletedAt  删除时间。
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小。
    * dataVip  数据面VIP。
    * dataVipIpv6  数据面IPV6。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * backupLevel  备份级别。
    * recycleBackupId  备份ID。
    * recycleStatus  回收状态。
    * recycleBakcups  **参数解释**：  实例所有的回收站备份列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'haMode' => 'ha_mode',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'payModel' => 'pay_model',
            'createAt' => 'create_at',
            'deletedAt' => 'deleted_at',
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size',
            'dataVip' => 'data_vip',
            'dataVipIpv6' => 'data_vip_ipv6',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'backupLevel' => 'backup_level',
            'recycleBackupId' => 'recycle_backup_id',
            'recycleStatus' => 'recycle_status',
            'recycleBakcups' => 'recycle_bakcups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。
    * haMode  实例类型。
    * engineName  引擎名称。
    * engineVersion  引擎版本。
    * payModel  计费模式。
    * createAt  创建时间。
    * deletedAt  删除时间。
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小。
    * dataVip  数据面VIP。
    * dataVipIpv6  数据面IPV6。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * backupLevel  备份级别。
    * recycleBackupId  备份ID。
    * recycleStatus  回收状态。
    * recycleBakcups  **参数解释**：  实例所有的回收站备份列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'haMode' => 'setHaMode',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'payModel' => 'setPayModel',
            'createAt' => 'setCreateAt',
            'deletedAt' => 'setDeletedAt',
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize',
            'dataVip' => 'setDataVip',
            'dataVipIpv6' => 'setDataVipIpv6',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'backupLevel' => 'setBackupLevel',
            'recycleBackupId' => 'setRecycleBackupId',
            'recycleStatus' => 'setRecycleStatus',
            'recycleBakcups' => 'setRecycleBakcups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。
    * haMode  实例类型。
    * engineName  引擎名称。
    * engineVersion  引擎版本。
    * payModel  计费模式。
    * createAt  创建时间。
    * deletedAt  删除时间。
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小。
    * dataVip  数据面VIP。
    * dataVipIpv6  数据面IPV6。
    * enterpriseProjectId  企业项目ID。
    * enterpriseProjectName  企业项目名称。
    * backupLevel  备份级别。
    * recycleBackupId  备份ID。
    * recycleStatus  回收状态。
    * recycleBakcups  **参数解释**：  实例所有的回收站备份列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'haMode' => 'getHaMode',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'payModel' => 'getPayModel',
            'createAt' => 'getCreateAt',
            'deletedAt' => 'getDeletedAt',
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize',
            'dataVip' => 'getDataVip',
            'dataVipIpv6' => 'getDataVipIpv6',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'backupLevel' => 'getBackupLevel',
            'recycleBackupId' => 'getRecycleBackupId',
            'recycleStatus' => 'getRecycleStatus',
            'recycleBakcups' => 'getRecycleBakcups'
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
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['deletedAt'] = isset($data['deletedAt']) ? $data['deletedAt'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['dataVip'] = isset($data['dataVip']) ? $data['dataVip'] : null;
        $this->container['dataVipIpv6'] = isset($data['dataVipIpv6']) ? $data['dataVipIpv6'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['recycleBackupId'] = isset($data['recycleBackupId']) ? $data['recycleBackupId'] : null;
        $this->container['recycleStatus'] = isset($data['recycleStatus']) ? $data['recycleStatus'] : null;
        $this->container['recycleBakcups'] = isset($data['recycleBakcups']) ? $data['recycleBakcups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  实例ID。
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
    * @param string|null $id 实例ID。
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
    *  实例名称。
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
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets haMode
    *  实例类型。
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode 实例类型。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets payModel
    *  计费模式。
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 计费模式。
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets deletedAt
    *  删除时间。
    *
    * @return int|null
    */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
    * Sets deletedAt
    *
    * @param int|null $deletedAt 删除时间。
    *
    * @return $this
    */
    public function setDeletedAt($deletedAt)
    {
        $this->container['deletedAt'] = $deletedAt;
        return $this;
    }

    /**
    * Gets volumeType
    *  磁盘类型。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType 磁盘类型。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets volumeSize
    *  磁盘大小。
    *
    * @return string|null
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param string|null $volumeSize 磁盘大小。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets dataVip
    *  数据面VIP。
    *
    * @return string|null
    */
    public function getDataVip()
    {
        return $this->container['dataVip'];
    }

    /**
    * Sets dataVip
    *
    * @param string|null $dataVip 数据面VIP。
    *
    * @return $this
    */
    public function setDataVip($dataVip)
    {
        $this->container['dataVip'] = $dataVip;
        return $this;
    }

    /**
    * Gets dataVipIpv6
    *  数据面IPV6。
    *
    * @return string|null
    */
    public function getDataVipIpv6()
    {
        return $this->container['dataVipIpv6'];
    }

    /**
    * Sets dataVipIpv6
    *
    * @param string|null $dataVipIpv6 数据面IPV6。
    *
    * @return $this
    */
    public function setDataVipIpv6($dataVipIpv6)
    {
        $this->container['dataVipIpv6'] = $dataVipIpv6;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
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
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets backupLevel
    *  备份级别。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel 备份级别。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets recycleBackupId
    *  备份ID。
    *
    * @return string|null
    */
    public function getRecycleBackupId()
    {
        return $this->container['recycleBackupId'];
    }

    /**
    * Sets recycleBackupId
    *
    * @param string|null $recycleBackupId 备份ID。
    *
    * @return $this
    */
    public function setRecycleBackupId($recycleBackupId)
    {
        $this->container['recycleBackupId'] = $recycleBackupId;
        return $this;
    }

    /**
    * Gets recycleStatus
    *  回收状态。
    *
    * @return string|null
    */
    public function getRecycleStatus()
    {
        return $this->container['recycleStatus'];
    }

    /**
    * Sets recycleStatus
    *
    * @param string|null $recycleStatus 回收状态。
    *
    * @return $this
    */
    public function setRecycleStatus($recycleStatus)
    {
        $this->container['recycleStatus'] = $recycleStatus;
        return $this;
    }

    /**
    * Gets recycleBakcups
    *  **参数解释**：  实例所有的回收站备份列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\RecycleBackupV3[]|null
    */
    public function getRecycleBakcups()
    {
        return $this->container['recycleBakcups'];
    }

    /**
    * Sets recycleBakcups
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\RecycleBackupV3[]|null $recycleBakcups **参数解释**：  实例所有的回收站备份列表。
    *
    * @return $this
    */
    public function setRecycleBakcups($recycleBakcups)
    {
        $this->container['recycleBakcups'] = $recycleBakcups;
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

