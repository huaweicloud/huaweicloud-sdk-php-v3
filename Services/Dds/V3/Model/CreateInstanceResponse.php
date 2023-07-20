<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * datastore  datastore
    * name  实例名称，与请求参数相同。
    * created  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * status  实例状态，取值为“creating”。
    * region  区域ID，与请求参数相同。
    * availabilityZone  可用区ID，与请求参数相同。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * securityGroupId  实例所属的安全组ID，与请求参数相同。
    * port  数据库访问端口。
    * diskEncryptionId  磁盘加密的密钥ID，与请求参数相同。
    * mode  实例类型，与请求参数相同。
    * configurations  参数组配置信息。
    * flavor  实例规格详情，与请求参数相同。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * sslOption  SSL开关选项，与请求参数相同。
    * dssPoolId  专属存储池ID。
    * jobId  创建实例的工作流ID。
    * tags  标签列表，与请求参数相同。
    * orderId  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dds\V3\Model\Datastore',
            'name' => 'string',
            'created' => 'string',
            'status' => 'string',
            'region' => 'string',
            'availabilityZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'port' => 'int',
            'diskEncryptionId' => 'string',
            'mode' => 'string',
            'configurations' => '\HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceConfigurationsOption[]',
            'flavor' => '\HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceFlavorOption[]',
            'backupStrategy' => '\HuaweiCloud\SDK\Dds\V3\Model\BackupStrategy',
            'enterpriseProjectId' => 'string',
            'sslOption' => 'string',
            'dssPoolId' => 'string',
            'jobId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dds\V3\Model\TagWithKeyValue[]',
            'orderId' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * datastore  datastore
    * name  实例名称，与请求参数相同。
    * created  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * status  实例状态，取值为“creating”。
    * region  区域ID，与请求参数相同。
    * availabilityZone  可用区ID，与请求参数相同。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * securityGroupId  实例所属的安全组ID，与请求参数相同。
    * port  数据库访问端口。
    * diskEncryptionId  磁盘加密的密钥ID，与请求参数相同。
    * mode  实例类型，与请求参数相同。
    * configurations  参数组配置信息。
    * flavor  实例规格详情，与请求参数相同。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * sslOption  SSL开关选项，与请求参数相同。
    * dssPoolId  专属存储池ID。
    * jobId  创建实例的工作流ID。
    * tags  标签列表，与请求参数相同。
    * orderId  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'datastore' => null,
        'name' => null,
        'created' => null,
        'status' => null,
        'region' => null,
        'availabilityZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'port' => 'int64',
        'diskEncryptionId' => null,
        'mode' => null,
        'configurations' => null,
        'flavor' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'sslOption' => null,
        'dssPoolId' => null,
        'jobId' => null,
        'tags' => null,
        'orderId' => null,
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
    * id  实例ID。
    * datastore  datastore
    * name  实例名称，与请求参数相同。
    * created  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * status  实例状态，取值为“creating”。
    * region  区域ID，与请求参数相同。
    * availabilityZone  可用区ID，与请求参数相同。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * securityGroupId  实例所属的安全组ID，与请求参数相同。
    * port  数据库访问端口。
    * diskEncryptionId  磁盘加密的密钥ID，与请求参数相同。
    * mode  实例类型，与请求参数相同。
    * configurations  参数组配置信息。
    * flavor  实例规格详情，与请求参数相同。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * sslOption  SSL开关选项，与请求参数相同。
    * dssPoolId  专属存储池ID。
    * jobId  创建实例的工作流ID。
    * tags  标签列表，与请求参数相同。
    * orderId  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'datastore' => 'datastore',
            'name' => 'name',
            'created' => 'created',
            'status' => 'status',
            'region' => 'region',
            'availabilityZone' => 'availability_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'port' => 'port',
            'diskEncryptionId' => 'disk_encryption_id',
            'mode' => 'mode',
            'configurations' => 'configurations',
            'flavor' => 'flavor',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sslOption' => 'ssl_option',
            'dssPoolId' => 'dss_pool_id',
            'jobId' => 'job_id',
            'tags' => 'tags',
            'orderId' => 'order_id',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * datastore  datastore
    * name  实例名称，与请求参数相同。
    * created  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * status  实例状态，取值为“creating”。
    * region  区域ID，与请求参数相同。
    * availabilityZone  可用区ID，与请求参数相同。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * securityGroupId  实例所属的安全组ID，与请求参数相同。
    * port  数据库访问端口。
    * diskEncryptionId  磁盘加密的密钥ID，与请求参数相同。
    * mode  实例类型，与请求参数相同。
    * configurations  参数组配置信息。
    * flavor  实例规格详情，与请求参数相同。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * sslOption  SSL开关选项，与请求参数相同。
    * dssPoolId  专属存储池ID。
    * jobId  创建实例的工作流ID。
    * tags  标签列表，与请求参数相同。
    * orderId  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'datastore' => 'setDatastore',
            'name' => 'setName',
            'created' => 'setCreated',
            'status' => 'setStatus',
            'region' => 'setRegion',
            'availabilityZone' => 'setAvailabilityZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'port' => 'setPort',
            'diskEncryptionId' => 'setDiskEncryptionId',
            'mode' => 'setMode',
            'configurations' => 'setConfigurations',
            'flavor' => 'setFlavor',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sslOption' => 'setSslOption',
            'dssPoolId' => 'setDssPoolId',
            'jobId' => 'setJobId',
            'tags' => 'setTags',
            'orderId' => 'setOrderId',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * datastore  datastore
    * name  实例名称，与请求参数相同。
    * created  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * status  实例状态，取值为“creating”。
    * region  区域ID，与请求参数相同。
    * availabilityZone  可用区ID，与请求参数相同。
    * vpcId  虚拟私有云ID，与请求参数相同。
    * subnetId  子网ID，与请求参数相同。
    * securityGroupId  实例所属的安全组ID，与请求参数相同。
    * port  数据库访问端口。
    * diskEncryptionId  磁盘加密的密钥ID，与请求参数相同。
    * mode  实例类型，与请求参数相同。
    * configurations  参数组配置信息。
    * flavor  实例规格详情，与请求参数相同。
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。取值为“0”，表示为default企业项目。
    * sslOption  SSL开关选项，与请求参数相同。
    * dssPoolId  专属存储池ID。
    * jobId  创建实例的工作流ID。
    * tags  标签列表，与请求参数相同。
    * orderId  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'datastore' => 'getDatastore',
            'name' => 'getName',
            'created' => 'getCreated',
            'status' => 'getStatus',
            'region' => 'getRegion',
            'availabilityZone' => 'getAvailabilityZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'port' => 'getPort',
            'diskEncryptionId' => 'getDiskEncryptionId',
            'mode' => 'getMode',
            'configurations' => 'getConfigurations',
            'flavor' => 'getFlavor',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sslOption' => 'getSslOption',
            'dssPoolId' => 'getDssPoolId',
            'jobId' => 'getJobId',
            'tags' => 'getTags',
            'orderId' => 'getOrderId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['diskEncryptionId'] = isset($data['diskEncryptionId']) ? $data['diskEncryptionId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sslOption'] = isset($data['sslOption']) ? $data['sslOption'] : null;
        $this->container['dssPoolId'] = isset($data['dssPoolId']) ? $data['dssPoolId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
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
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets name
    *  实例名称，与请求参数相同。
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
    * @param string|null $name 实例名称，与请求参数相同。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets created
    *  创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间为本地时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets status
    *  实例状态，取值为“creating”。
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
    * @param string|null $status 实例状态，取值为“creating”。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets availabilityZone
    *  可用区ID，与请求参数相同。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 可用区ID，与请求参数相同。
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
    * Gets securityGroupId
    *  实例所属的安全组ID，与请求参数相同。
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
    * @param string|null $securityGroupId 实例所属的安全组ID，与请求参数相同。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets port
    *  数据库访问端口。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 数据库访问端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets diskEncryptionId
    *  磁盘加密的密钥ID，与请求参数相同。
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
    * @param string|null $diskEncryptionId 磁盘加密的密钥ID，与请求参数相同。
    *
    * @return $this
    */
    public function setDiskEncryptionId($diskEncryptionId)
    {
        $this->container['diskEncryptionId'] = $diskEncryptionId;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型，与请求参数相同。
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
    * @param string|null $mode 实例类型，与请求参数相同。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets configurations
    *  参数组配置信息。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceConfigurationsOption[]|null
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceConfigurationsOption[]|null $configurations 参数组配置信息。
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
    *  实例规格详情，与请求参数相同。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceFlavorOption[]|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\CreateInstanceFlavorOption[]|null $flavor 实例规格详情，与请求参数相同。
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
    *  企业项目ID。取值为“0”，表示为default企业项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID。取值为“0”，表示为default企业项目。
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
    *  SSL开关选项，与请求参数相同。
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
    * @param string|null $sslOption SSL开关选项，与请求参数相同。
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
    *  专属存储池ID。
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
    * @param string|null $dssPoolId 专属存储池ID。
    *
    * @return $this
    */
    public function setDssPoolId($dssPoolId)
    {
        $this->container['dssPoolId'] = $dssPoolId;
        return $this;
    }

    /**
    * Gets jobId
    *  创建实例的工作流ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 创建实例的工作流ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，与请求参数相同。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\TagWithKeyValue[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\TagWithKeyValue[]|null $tags 标签列表，与请求参数相同。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets orderId
    *  创建实例的订单ID，仅创建包年包月实例时返回该参数。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 创建实例的订单ID，仅创建包年包月实例时返回该参数。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoResult|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\ChargeInfoResult|null $chargeInfo chargeInfo
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

