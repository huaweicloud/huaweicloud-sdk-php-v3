<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeInfo  chargeInfo
    * region  区域ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * mode  实例类型，目前仅支持Cluster。
    * flavorRef  规格码。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID。
    * securityGroupId  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    * configurationId  参数模板ID。
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * backupStrategy  backupStrategy
    * timeZone  时区。默认时区为UTC。
    * availabilityZoneMode  可用区类型,单可用区single或多可用区multi。
    * masterAvailabilityZone  主可用区。
    * slaveCount  只读节点个数。单次接口调用最多支持创建9个只读节点。
    * volume  volume
    * tags  tags
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    * enterpriseProjectId  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    * restorePoint  restorePoint
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlChargeInfo',
            'region' => 'string',
            'name' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastore',
            'mode' => 'string',
            'flavorRef' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'configurationId' => 'string',
            'password' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy',
            'timeZone' => 'string',
            'availabilityZoneMode' => 'string',
            'masterAvailabilityZone' => 'string',
            'slaveCount' => 'int',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolume',
            'tags' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTags[]',
            'lowerCaseTableNames' => 'int',
            'enterpriseProjectId' => 'string',
            'dedicatedResourceId' => 'string',
            'restorePoint' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlRestorePoint'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeInfo  chargeInfo
    * region  区域ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * mode  实例类型，目前仅支持Cluster。
    * flavorRef  规格码。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID。
    * securityGroupId  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    * configurationId  参数模板ID。
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * backupStrategy  backupStrategy
    * timeZone  时区。默认时区为UTC。
    * availabilityZoneMode  可用区类型,单可用区single或多可用区multi。
    * masterAvailabilityZone  主可用区。
    * slaveCount  只读节点个数。单次接口调用最多支持创建9个只读节点。
    * volume  volume
    * tags  tags
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    * enterpriseProjectId  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    * restorePoint  restorePoint
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeInfo' => null,
        'region' => null,
        'name' => null,
        'datastore' => null,
        'mode' => null,
        'flavorRef' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'configurationId' => null,
        'password' => null,
        'backupStrategy' => null,
        'timeZone' => null,
        'availabilityZoneMode' => null,
        'masterAvailabilityZone' => null,
        'slaveCount' => 'int32',
        'volume' => null,
        'tags' => null,
        'lowerCaseTableNames' => 'int32',
        'enterpriseProjectId' => null,
        'dedicatedResourceId' => null,
        'restorePoint' => null
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
    * chargeInfo  chargeInfo
    * region  区域ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * mode  实例类型，目前仅支持Cluster。
    * flavorRef  规格码。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID。
    * securityGroupId  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    * configurationId  参数模板ID。
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * backupStrategy  backupStrategy
    * timeZone  时区。默认时区为UTC。
    * availabilityZoneMode  可用区类型,单可用区single或多可用区multi。
    * masterAvailabilityZone  主可用区。
    * slaveCount  只读节点个数。单次接口调用最多支持创建9个只读节点。
    * volume  volume
    * tags  tags
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    * enterpriseProjectId  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    * restorePoint  restorePoint
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeInfo' => 'charge_info',
            'region' => 'region',
            'name' => 'name',
            'datastore' => 'datastore',
            'mode' => 'mode',
            'flavorRef' => 'flavor_ref',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'configurationId' => 'configuration_id',
            'password' => 'password',
            'backupStrategy' => 'backup_strategy',
            'timeZone' => 'time_zone',
            'availabilityZoneMode' => 'availability_zone_mode',
            'masterAvailabilityZone' => 'master_availability_zone',
            'slaveCount' => 'slave_count',
            'volume' => 'volume',
            'tags' => 'tags',
            'lowerCaseTableNames' => 'lower_case_table_names',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'restorePoint' => 'restore_point'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeInfo  chargeInfo
    * region  区域ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * mode  实例类型，目前仅支持Cluster。
    * flavorRef  规格码。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID。
    * securityGroupId  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    * configurationId  参数模板ID。
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * backupStrategy  backupStrategy
    * timeZone  时区。默认时区为UTC。
    * availabilityZoneMode  可用区类型,单可用区single或多可用区multi。
    * masterAvailabilityZone  主可用区。
    * slaveCount  只读节点个数。单次接口调用最多支持创建9个只读节点。
    * volume  volume
    * tags  tags
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    * enterpriseProjectId  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    * restorePoint  restorePoint
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeInfo' => 'setChargeInfo',
            'region' => 'setRegion',
            'name' => 'setName',
            'datastore' => 'setDatastore',
            'mode' => 'setMode',
            'flavorRef' => 'setFlavorRef',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'configurationId' => 'setConfigurationId',
            'password' => 'setPassword',
            'backupStrategy' => 'setBackupStrategy',
            'timeZone' => 'setTimeZone',
            'availabilityZoneMode' => 'setAvailabilityZoneMode',
            'masterAvailabilityZone' => 'setMasterAvailabilityZone',
            'slaveCount' => 'setSlaveCount',
            'volume' => 'setVolume',
            'tags' => 'setTags',
            'lowerCaseTableNames' => 'setLowerCaseTableNames',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'restorePoint' => 'setRestorePoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeInfo  chargeInfo
    * region  区域ID。
    * name  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    * datastore  datastore
    * mode  实例类型，目前仅支持Cluster。
    * flavorRef  规格码。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID。
    * securityGroupId  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    * configurationId  参数模板ID。
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    * backupStrategy  backupStrategy
    * timeZone  时区。默认时区为UTC。
    * availabilityZoneMode  可用区类型,单可用区single或多可用区multi。
    * masterAvailabilityZone  主可用区。
    * slaveCount  只读节点个数。单次接口调用最多支持创建9个只读节点。
    * volume  volume
    * tags  tags
    * lowerCaseTableNames  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    * enterpriseProjectId  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    * dedicatedResourceId  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    * restorePoint  restorePoint
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeInfo' => 'getChargeInfo',
            'region' => 'getRegion',
            'name' => 'getName',
            'datastore' => 'getDatastore',
            'mode' => 'getMode',
            'flavorRef' => 'getFlavorRef',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'configurationId' => 'getConfigurationId',
            'password' => 'getPassword',
            'backupStrategy' => 'getBackupStrategy',
            'timeZone' => 'getTimeZone',
            'availabilityZoneMode' => 'getAvailabilityZoneMode',
            'masterAvailabilityZone' => 'getMasterAvailabilityZone',
            'slaveCount' => 'getSlaveCount',
            'volume' => 'getVolume',
            'tags' => 'getTags',
            'lowerCaseTableNames' => 'getLowerCaseTableNames',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'restorePoint' => 'getRestorePoint'
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
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['availabilityZoneMode'] = isset($data['availabilityZoneMode']) ? $data['availabilityZoneMode'] : null;
        $this->container['masterAvailabilityZone'] = isset($data['masterAvailabilityZone']) ? $data['masterAvailabilityZone'] : null;
        $this->container['slaveCount'] = isset($data['slaveCount']) ? $data['slaveCount'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['lowerCaseTableNames'] = isset($data['lowerCaseTableNames']) ? $data['lowerCaseTableNames'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['restorePoint'] = isset($data['restorePoint']) ? $data['restorePoint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['availabilityZoneMode'] === null) {
            $invalidProperties[] = "'availabilityZoneMode' can't be null";
        }
        if ($this->container['slaveCount'] === null) {
            $invalidProperties[] = "'slaveCount' can't be null";
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
    * Gets region
    *  区域ID。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域ID。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
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
    * @param string $name 实例名称。用于表示实例的名称，同一租户下，同类型的实例名可重名。  取值范围：4~64个字符之间，必须以字母开头，区分大小写，可以包含字母、数字、中划线或者下划线，不能包含其他的特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastore
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastore $datastore datastore
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
    *  实例类型，目前仅支持Cluster。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 实例类型，目前仅支持Cluster。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网的网络ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网的网络ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
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
    * @param string|null $securityGroupId 安全组ID。如果实例所选用的子网开启网络ACL进行访问控制，则该参数非必选。如果未开启ACL进行访问控制，则该参数必选。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets configurationId
    *  参数模板ID。
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
    * @param string|null $configurationId 参数模板ID。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
        return $this;
    }

    /**
    * Gets password
    *  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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
    * Gets timeZone
    *  时区。默认时区为UTC。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。默认时区为UTC。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets availabilityZoneMode
    *  可用区类型,单可用区single或多可用区multi。
    *
    * @return string
    */
    public function getAvailabilityZoneMode()
    {
        return $this->container['availabilityZoneMode'];
    }

    /**
    * Sets availabilityZoneMode
    *
    * @param string $availabilityZoneMode 可用区类型,单可用区single或多可用区multi。
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
    *  主可用区。
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
    * @param string|null $masterAvailabilityZone 主可用区。
    *
    * @return $this
    */
    public function setMasterAvailabilityZone($masterAvailabilityZone)
    {
        $this->container['masterAvailabilityZone'] = $masterAvailabilityZone;
        return $this;
    }

    /**
    * Gets slaveCount
    *  只读节点个数。单次接口调用最多支持创建9个只读节点。
    *
    * @return int
    */
    public function getSlaveCount()
    {
        return $this->container['slaveCount'];
    }

    /**
    * Sets slaveCount
    *
    * @param int $slaveCount 只读节点个数。单次接口调用最多支持创建9个只读节点。
    *
    * @return $this
    */
    public function setSlaveCount($slaveCount)
    {
        $this->container['slaveCount'] = $slaveCount;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolume|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolume|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets tags
    *  tags
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTags[]|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets lowerCaseTableNames
    *  表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @return int|null
    */
    public function getLowerCaseTableNames()
    {
        return $this->container['lowerCaseTableNames'];
    }

    /**
    * Sets lowerCaseTableNames
    *
    * @param int|null $lowerCaseTableNames 表名大小写是否敏感，默认值是“1”。  取值范围： - 0：表名被存储成固定且表名称大小写敏感。 - 1：表名将被存储成小写且表名称大小写不敏感。
    *
    * @return $this
    */
    public function setLowerCaseTableNames($lowerCaseTableNames)
    {
        $this->container['lowerCaseTableNames'] = $lowerCaseTableNames;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
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
    * @param string|null $enterpriseProjectId 企业项目ID。如果账户开通企业项目服务则该参数必选，未开启该参数不可选。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets dedicatedResourceId
    *  专属资源池ID，只有开通专属资源池后才可以下发此参数。
    *
    * @return string|null
    */
    public function getDedicatedResourceId()
    {
        return $this->container['dedicatedResourceId'];
    }

    /**
    * Sets dedicatedResourceId
    *
    * @param string|null $dedicatedResourceId 专属资源池ID，只有开通专属资源池后才可以下发此参数。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets restorePoint
    *  restorePoint
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlRestorePoint|null
    */
    public function getRestorePoint()
    {
        return $this->container['restorePoint'];
    }

    /**
    * Sets restorePoint
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlRestorePoint|null $restorePoint restorePoint
    *
    * @return $this
    */
    public function setRestorePoint($restorePoint)
    {
        $this->container['restorePoint'] = $restorePoint;
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

