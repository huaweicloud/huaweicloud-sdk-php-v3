<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreNewInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreNewInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    * availabilityZone  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
    * subnetId  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
    * securityGroupId  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    * password  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * diskEncryptionId  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    * configurations  参数组配置信息。
    * flavor  实例规格详情。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * sslOption  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    * dssPoolId  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    * serverGroupPolicies  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    * restorePoint  restorePoint
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'password' => 'string',
            'diskEncryptionId' => 'string',
            'configurations' => '\HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceConfigurationsOption[]',
            'flavor' => '\HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceFlavorOption[]',
            'backupStrategy' => '\HuaweiCloud\SDK\Dds\V3\Model\BackupStrategy',
            'enterpriseProjectId' => 'string',
            'sslOption' => 'string',
            'dssPoolId' => 'string',
            'serverGroupPolicies' => 'string[]',
            'restorePoint' => '\HuaweiCloud\SDK\Dds\V3\Model\RestorePoint',
            'chargeInfo' => '\HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    * availabilityZone  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
    * subnetId  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
    * securityGroupId  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    * password  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * diskEncryptionId  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    * configurations  参数组配置信息。
    * flavor  实例规格详情。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * sslOption  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    * dssPoolId  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    * serverGroupPolicies  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    * restorePoint  restorePoint
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'password' => null,
        'diskEncryptionId' => null,
        'configurations' => null,
        'flavor' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'sslOption' => null,
        'dssPoolId' => null,
        'serverGroupPolicies' => null,
        'restorePoint' => null,
        'chargeInfo' => null
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
    * name  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    * availabilityZone  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
    * subnetId  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
    * securityGroupId  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    * password  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * diskEncryptionId  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    * configurations  参数组配置信息。
    * flavor  实例规格详情。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * sslOption  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    * dssPoolId  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    * serverGroupPolicies  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    * restorePoint  restorePoint
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'password' => 'password',
            'diskEncryptionId' => 'disk_encryption_id',
            'configurations' => 'configurations',
            'flavor' => 'flavor',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sslOption' => 'ssl_option',
            'dssPoolId' => 'dss_pool_id',
            'serverGroupPolicies' => 'server_group_policies',
            'restorePoint' => 'restore_point',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    * availabilityZone  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
    * subnetId  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
    * securityGroupId  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    * password  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * diskEncryptionId  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    * configurations  参数组配置信息。
    * flavor  实例规格详情。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * sslOption  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    * dssPoolId  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    * serverGroupPolicies  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    * restorePoint  restorePoint
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'password' => 'setPassword',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'configurations' => 'setConfigurations',
            'flavor' => 'setFlavor',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sslOption' => 'setSslOption',
            'dssPoolId' => 'setDssPoolId',
            'serverGroupPolicies' => 'setServerGroupPolicies',
            'restorePoint' => 'setRestorePoint',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    * availabilityZone  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    * vpcId  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
    * subnetId  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
    * securityGroupId  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    * password  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * diskEncryptionId  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    * configurations  参数组配置信息。
    * flavor  实例规格详情。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * sslOption  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    * dssPoolId  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    * serverGroupPolicies  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    * restorePoint  restorePoint
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'password' => 'getPassword',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'configurations' => 'getConfigurations',
            'flavor' => 'getFlavor',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sslOption' => 'getSslOption',
            'dssPoolId' => 'getDssPoolId',
            'serverGroupPolicies' => 'getServerGroupPolicies',
            'restorePoint' => 'getRestorePoint',
            'chargeInfo' => 'getChargeInfo'
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['dssPoolId'] = isset($data['dssPoolId']) ? $data['dssPoolId'] : null;
        $this->container['serverGroupPolicies'] = isset($data['serverGroupPolicies']) ? $data['serverGroupPolicies'] : null;
        $this->container['restorePoint'] = isset($data['restorePoint']) ? $data['restorePoint'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['restorePoint'] === null) {
            $invalidProperties[] = "'restorePoint' can't be null";
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
    *  实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
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
    * @param string $name 实例名称。用于表示实例的名称，用于表示实例的名称，允许和已有名称重复。 取值范围：长度为4~64位，必须以字母开头（A~Z或a~z），区分大小写，可以包含字母、数字（0~9）、中划线（-）或者下划线（_），不能包含其他特殊字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区ID，请参见[地区和终端节点](https://developer.huaweicloud.com/endpoint)。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
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
    * @param string $vpcId 虚拟私有云ID。获取方法请参见《虚拟私有云API参考》中“VPC”的内容。 取值：非空，字符长度校验，严格UUID正则校验。
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
    *  子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
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
    * @param string $subnetId 子网ID。获取方法请参见《虚拟私有云API参考》中“子网”的内容。
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
    *  指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 指定实例所属的安全组ID。 获取方法请参见《虚拟私有云API参考》中“安全组”的内容。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets password
    *  数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 数据库密码。 取值范围：长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    *
    * @return string|null
    */
    public function getDiskEncryptionId()
    {
        return $this->container['diskEncryptionId'];
    }

    /**
    * Sets diskEncryptionId
    *
    * @param string|null $diskEncryptionId 磁盘加密时的密钥ID，严格UUID正则校验。 不传该参数时，表示不进行磁盘加密。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets configurations
    *  参数组配置信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceConfigurationsOption[]|null
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceConfigurationsOption[]|null $configurations 参数组配置信息。
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
        return $this;
    }

    /**
    * Gets flavor
    *  实例规格详情。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceFlavorOption[]
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RestoreNewInstanceFlavorOption[] $flavor 实例规格详情。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets backupStrategy
    *  backupStrategy
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\BackupStrategy|null
    */
    public function getBackupStrategy()
    {
        return $this->container['backupStrategy'];
    }

    /**
    * Sets backupStrategy
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\BackupStrategy|null $backupStrategy backupStrategy
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
    * Gets sslOption
    *  SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    *
    * @return string|null
    */
    public function getSslOption()
    {
        return $this->container['sslOption'];
    }

    /**
    * Sets sslOption
    *
    * @param string|null $sslOption SSL开关选项。 取值： - 取“0”，表示DDS实例默认不启用SSL连接。 - 取“1”，表示DDS实例默认启用SSL连接。 - 不传该参数时，默认启用SSL连接。
    *
    * @return $this
    */
    public function setSslOption($sslOption)
    {
        $this->container['sslOption'] = $sslOption;
        return $this;
    }

    /**
    * Gets dssPoolId
    *  创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    *
    * @return string|null
    */
    public function getDssPoolId()
    {
        return $this->container['dssPoolId'];
    }

    /**
    * Sets dssPoolId
    *
    * @param string|null $dssPoolId 创建新实例所在专属存储池ID，仅专属云创建实例时有效。
    *
    * @return $this
    */
    public function setDssPoolId($dssPoolId)
    {
        $this->container['dssPoolId'] = $dssPoolId;
        return $this;
    }

    /**
    * Gets serverGroupPolicies
    *  创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    *
    * @return string[]|null
    */
    public function getServerGroupPolicies()
    {
        return $this->container['serverGroupPolicies'];
    }

    /**
    * Sets serverGroupPolicies
    *
    * @param string[]|null $serverGroupPolicies 创建新实例设置云服务器组关联的策略名称列表，仅专属云创建实例时有效。 取值    - 取“anti-affinity”，表示DDS实例开启反亲和部署，反亲和部署是出于高可用性考虑，将您的Primary、Secondary和Hidden节点分别创建在不同的物理机上。当前仅支持该值，不传该值默认不开启反亲和部署。
    *
    * @return $this
    */
    public function setServerGroupPolicies($serverGroupPolicies)
    {
        $this->container['serverGroupPolicies'] = $serverGroupPolicies;
        return $this;
    }

    /**
    * Gets restorePoint
    *  restorePoint
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RestorePoint
    */
    public function getRestorePoint()
    {
        return $this->container['restorePoint'];
    }

    /**
    * Sets restorePoint
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RestorePoint $restorePoint restorePoint
    *
    * @return $this
    */
    public function setRestorePoint($restorePoint)
    {
        $this->container['restorePoint'] = $restorePoint;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoOption|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoOption|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
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

