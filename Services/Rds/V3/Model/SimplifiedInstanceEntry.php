<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SimplifiedInstanceEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SimplifiedInstanceEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例id
    * name  创建的实例名称
    * engineName  引擎名字
    * engineVersion  引擎版本
    * instanceStatus  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    * frozen  是否冻结
    * type  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    * payModel  按需还是包周期
    * specCode  规格码
    * availabilityZoneIds  可用区集合
    * readOnlyInstances  只读实例id集合
    * currentActions  当前实例操作动作集合
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小(单位:G)。
    * enterpriseProjectId  企业项目标签ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'instanceStatus' => 'string',
            'frozen' => 'bool',
            'type' => 'string',
            'payModel' => 'string',
            'specCode' => 'string',
            'availabilityZoneIds' => 'string[]',
            'readOnlyInstances' => 'string[]',
            'currentActions' => 'string[]',
            'volumeType' => 'string',
            'volumeSize' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例id
    * name  创建的实例名称
    * engineName  引擎名字
    * engineVersion  引擎版本
    * instanceStatus  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    * frozen  是否冻结
    * type  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    * payModel  按需还是包周期
    * specCode  规格码
    * availabilityZoneIds  可用区集合
    * readOnlyInstances  只读实例id集合
    * currentActions  当前实例操作动作集合
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小(单位:G)。
    * enterpriseProjectId  企业项目标签ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'engineName' => null,
        'engineVersion' => null,
        'instanceStatus' => null,
        'frozen' => null,
        'type' => null,
        'payModel' => null,
        'specCode' => null,
        'availabilityZoneIds' => null,
        'readOnlyInstances' => null,
        'currentActions' => null,
        'volumeType' => null,
        'volumeSize' => 'int64',
        'enterpriseProjectId' => null
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
    * id  实例id
    * name  创建的实例名称
    * engineName  引擎名字
    * engineVersion  引擎版本
    * instanceStatus  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    * frozen  是否冻结
    * type  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    * payModel  按需还是包周期
    * specCode  规格码
    * availabilityZoneIds  可用区集合
    * readOnlyInstances  只读实例id集合
    * currentActions  当前实例操作动作集合
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小(单位:G)。
    * enterpriseProjectId  企业项目标签ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'instanceStatus' => 'instance_status',
            'frozen' => 'frozen',
            'type' => 'type',
            'payModel' => 'pay_model',
            'specCode' => 'spec_code',
            'availabilityZoneIds' => 'availability_zone_ids',
            'readOnlyInstances' => 'read_only_instances',
            'currentActions' => 'current_actions',
            'volumeType' => 'volume_type',
            'volumeSize' => 'volume_size',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例id
    * name  创建的实例名称
    * engineName  引擎名字
    * engineVersion  引擎版本
    * instanceStatus  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    * frozen  是否冻结
    * type  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    * payModel  按需还是包周期
    * specCode  规格码
    * availabilityZoneIds  可用区集合
    * readOnlyInstances  只读实例id集合
    * currentActions  当前实例操作动作集合
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小(单位:G)。
    * enterpriseProjectId  企业项目标签ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'instanceStatus' => 'setInstanceStatus',
            'frozen' => 'setFrozen',
            'type' => 'setType',
            'payModel' => 'setPayModel',
            'specCode' => 'setSpecCode',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'readOnlyInstances' => 'setReadOnlyInstances',
            'currentActions' => 'setCurrentActions',
            'volumeType' => 'setVolumeType',
            'volumeSize' => 'setVolumeSize',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例id
    * name  创建的实例名称
    * engineName  引擎名字
    * engineVersion  引擎版本
    * instanceStatus  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    * frozen  是否冻结
    * type  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    * payModel  按需还是包周期
    * specCode  规格码
    * availabilityZoneIds  可用区集合
    * readOnlyInstances  只读实例id集合
    * currentActions  当前实例操作动作集合
    * volumeType  磁盘类型。
    * volumeSize  磁盘大小(单位:G)。
    * enterpriseProjectId  企业项目标签ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'instanceStatus' => 'getInstanceStatus',
            'frozen' => 'getFrozen',
            'type' => 'getType',
            'payModel' => 'getPayModel',
            'specCode' => 'getSpecCode',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'readOnlyInstances' => 'getReadOnlyInstances',
            'currentActions' => 'getCurrentActions',
            'volumeType' => 'getVolumeType',
            'volumeSize' => 'getVolumeSize',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['readOnlyInstances'] = isset($data['readOnlyInstances']) ? $data['readOnlyInstances'] : null;
        $this->container['currentActions'] = isset($data['currentActions']) ? $data['currentActions'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['volumeSize'] = isset($data['volumeSize']) ? $data['volumeSize'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['instanceStatus'] === null) {
            $invalidProperties[] = "'instanceStatus' can't be null";
        }
        if ($this->container['frozen'] === null) {
            $invalidProperties[] = "'frozen' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['payModel'] === null) {
            $invalidProperties[] = "'payModel' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['availabilityZoneIds'] === null) {
            $invalidProperties[] = "'availabilityZoneIds' can't be null";
        }
        if ($this->container['readOnlyInstances'] === null) {
            $invalidProperties[] = "'readOnlyInstances' can't be null";
        }
        if ($this->container['currentActions'] === null) {
            $invalidProperties[] = "'currentActions' can't be null";
        }
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
        if ($this->container['volumeSize'] === null) {
            $invalidProperties[] = "'volumeSize' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    *  实例id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例id
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
    *  创建的实例名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 创建的实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名字
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName 引擎名字
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
    *  引擎版本
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    *
    * @return string
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string $instanceStatus 实例状态。 normal,表示正常 abnormal,表示异常 creating,表示创建中 createfail,表示创建失败 data_disk_full,表示磁盘满 deleted,表示删除 shutdown,表示关机
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets frozen
    *  是否冻结
    *
    * @return bool
    */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
    * Sets frozen
    *
    * @param bool $frozen 是否冻结
    *
    * @return $this
    */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;
        return $this;
    }

    /**
    * Gets type
    *  按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 按照实例类型查询。取值Single、Ha、Replica、Enterprise，分别对应于单实例、主备实例和只读实例、分布式实例（企业版）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets payModel
    *  按需还是包周期
    *
    * @return string
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string $payModel 按需还是包周期
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets specCode
    *  规格码
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 规格码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  可用区集合
    *
    * @return string[]
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[] $availabilityZoneIds 可用区集合
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets readOnlyInstances
    *  只读实例id集合
    *
    * @return string[]
    */
    public function getReadOnlyInstances()
    {
        return $this->container['readOnlyInstances'];
    }

    /**
    * Sets readOnlyInstances
    *
    * @param string[] $readOnlyInstances 只读实例id集合
    *
    * @return $this
    */
    public function setReadOnlyInstances($readOnlyInstances)
    {
        $this->container['readOnlyInstances'] = $readOnlyInstances;
        return $this;
    }

    /**
    * Gets currentActions
    *  当前实例操作动作集合
    *
    * @return string[]
    */
    public function getCurrentActions()
    {
        return $this->container['currentActions'];
    }

    /**
    * Sets currentActions
    *
    * @param string[] $currentActions 当前实例操作动作集合
    *
    * @return $this
    */
    public function setCurrentActions($currentActions)
    {
        $this->container['currentActions'] = $currentActions;
        return $this;
    }

    /**
    * Gets volumeType
    *  磁盘类型。
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType 磁盘类型。
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
    *  磁盘大小(单位:G)。
    *
    * @return int
    */
    public function getVolumeSize()
    {
        return $this->container['volumeSize'];
    }

    /**
    * Sets volumeSize
    *
    * @param int $volumeSize 磁盘大小(单位:G)。
    *
    * @return $this
    */
    public function setVolumeSize($volumeSize)
    {
        $this->container['volumeSize'] = $volumeSize;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标签ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目标签ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

