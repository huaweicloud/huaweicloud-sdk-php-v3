<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlInstanceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    * status  实例状态。
    * datastore  datastore
    * mode  实例类型，仅支持Cluster。
    * configurationId  参数组ID。
    * port  数据库端口信息。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * region  区域ID，与请求参数相同。
    * availabilityZoneMode  可用区模式，与请求参数相同。
    * masterAvailabilityZone  主可用区ID。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * securityGroupId  安全组ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * flavorRef  规格码，与请求参数相同。
    * chargeInfo  chargeInfo
    * volume  volume
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreInRes',
            'mode' => 'string',
            'configurationId' => 'string',
            'port' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy',
            'enterpriseProjectId' => 'string',
            'region' => 'string',
            'availabilityZoneMode' => 'string',
            'masterAvailabilityZone' => 'string',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'flavorRef' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlChargeInfo',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    * status  实例状态。
    * datastore  datastore
    * mode  实例类型，仅支持Cluster。
    * configurationId  参数组ID。
    * port  数据库端口信息。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * region  区域ID，与请求参数相同。
    * availabilityZoneMode  可用区模式，与请求参数相同。
    * masterAvailabilityZone  主可用区ID。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * securityGroupId  安全组ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * flavorRef  规格码，与请求参数相同。
    * chargeInfo  chargeInfo
    * volume  volume
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'datastore' => null,
        'mode' => null,
        'configurationId' => null,
        'port' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'region' => null,
        'availabilityZoneMode' => null,
        'masterAvailabilityZone' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'flavorRef' => null,
        'chargeInfo' => null,
        'volume' => null
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
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    * status  实例状态。
    * datastore  datastore
    * mode  实例类型，仅支持Cluster。
    * configurationId  参数组ID。
    * port  数据库端口信息。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * region  区域ID，与请求参数相同。
    * availabilityZoneMode  可用区模式，与请求参数相同。
    * masterAvailabilityZone  主可用区ID。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * securityGroupId  安全组ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * flavorRef  规格码，与请求参数相同。
    * chargeInfo  chargeInfo
    * volume  volume
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'datastore' => 'datastore',
            'mode' => 'mode',
            'configurationId' => 'configuration_id',
            'port' => 'port',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'region' => 'region',
            'availabilityZoneMode' => 'availability_zone_mode',
            'masterAvailabilityZone' => 'master_availability_zone',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'flavorRef' => 'flavor_ref',
            'chargeInfo' => 'charge_info',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    * status  实例状态。
    * datastore  datastore
    * mode  实例类型，仅支持Cluster。
    * configurationId  参数组ID。
    * port  数据库端口信息。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * region  区域ID，与请求参数相同。
    * availabilityZoneMode  可用区模式，与请求参数相同。
    * masterAvailabilityZone  主可用区ID。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * securityGroupId  安全组ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * flavorRef  规格码，与请求参数相同。
    * chargeInfo  chargeInfo
    * volume  volume
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'datastore' => 'setDatastore',
            'mode' => 'setMode',
            'configurationId' => 'setConfigurationId',
            'port' => 'setPort',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'region' => 'setRegion',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'masterAvailabilityZone' => 'setMasterAvailabilityZone',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'flavorRef' => 'setFlavorRef',
            'chargeInfo' => 'setChargeInfo',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    * status  实例状态。
    * datastore  datastore
    * mode  实例类型，仅支持Cluster。
    * configurationId  参数组ID。
    * port  数据库端口信息。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * region  区域ID，与请求参数相同。
    * availabilityZoneMode  可用区模式，与请求参数相同。
    * masterAvailabilityZone  主可用区ID。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * securityGroupId  安全组ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * flavorRef  规格码，与请求参数相同。
    * chargeInfo  chargeInfo
    * volume  volume
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'datastore' => 'getDatastore',
            'mode' => 'getMode',
            'configurationId' => 'getConfigurationId',
            'port' => 'getPort',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'region' => 'getRegion',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'masterAvailabilityZone' => 'getMasterAvailabilityZone',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'flavorRef' => 'getFlavorRef',
            'chargeInfo' => 'getChargeInfo',
            'volume' => 'getVolume'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['masterAvailabilityZone'] = isset($data['masterAvailabilityZone']) ? $data['masterAvailabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
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
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
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
    *  实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
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
    * @param string $name 实例名称。用于表示实例的名称，同一租户下，同类型的实例名称可相同。  取值范围：4~64个字符之间，必须以字母开头，不区分大小写，可以包含字母、数字、中划线或者下划线, 不能包含其它的特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。
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
    * @param string|null $status 实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreInRes|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreInRes|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型，仅支持Cluster。
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
    * @param string|null $mode 实例类型，仅支持Cluster。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets configurationId
    *  参数组ID。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 参数组ID。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口信息。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 数据库端口信息。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy|null $backupStrategy backupStrategy
    *
    * @return $this
    */
    public function setBackupStrategy($backupStrategy)
    {
        $this->container['backupStrategy'] = $backupStrategy;
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
    * Gets region
    *  区域ID，与请求参数相同。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域ID，与请求参数相同。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  可用区模式，与请求参数相同。
    *
    * @return string|null
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string|null $availabilityZoneMode 可用区模式，与请求参数相同。
    *
    * @return $this
    */
    public function setAvailabilityZoneMode($availabilityZoneMode)
    {
        $this->container['availabilityZoneMode'] = $availabilityZoneMode;
        return $this;
    }

    /**
    * Gets masterAvailabilityZone
    *  主可用区ID。
    *
    * @return string|null
    */
    public function getMasterAvailabilityZone()
    {
        return $this->container['masterAvailabilityZone'];
    }

    /**
    * Sets masterAvailabilityZone
    *
    * @param string|null $masterAvailabilityZone 主可用区ID。
    *
    * @return $this
    */
    public function setMasterAvailabilityZone($masterAvailabilityZone)
    {
        $this->container['masterAvailabilityZone'] = $masterAvailabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID，与请求参数相同。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云ID，与请求参数相同。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID，与请求参数相同。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID，与请求参数相同。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID，与请求参数相同。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID，与请求参数相同。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码，与请求参数相同。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 规格码，与请求参数相同。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlChargeInfo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeResp|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeResp|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

