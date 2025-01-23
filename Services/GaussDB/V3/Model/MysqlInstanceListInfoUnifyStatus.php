<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlInstanceListInfoUnifyStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlInstanceListInfoUnifyStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * privateIps  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    * proxyIps  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    * readonlyPrivateIps  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。
    * type  实例类型，取值为“Cluster”。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * flavorInfo  flavorInfo
    * volume  volume
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * chargeInfo  chargeInfo
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'privateIps' => 'string[]',
            'proxyIps' => 'string[]',
            'readonlyPrivateIps' => 'string[]',
            'publicIps' => 'string[]',
            'port' => 'string',
            'type' => 'string',
            'region' => 'string',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreWithKernelVersion',
            'created' => 'string',
            'updated' => 'string',
            'dbUserName' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'flavorRef' => 'string',
            'flavorInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlFlavorInfo',
            'volume' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeInfo',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy',
            'enterpriseProjectId' => 'string',
            'timeZone' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlChargeInfo',
            'dedicatedResourceId' => 'string',
            'tags' => '\HuaweiCloud\SDK\GaussDB\V3\Model\InstanceTagItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * privateIps  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    * proxyIps  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    * readonlyPrivateIps  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。
    * type  实例类型，取值为“Cluster”。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * flavorInfo  flavorInfo
    * volume  volume
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * chargeInfo  chargeInfo
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'privateIps' => null,
        'proxyIps' => null,
        'readonlyPrivateIps' => null,
        'publicIps' => null,
        'port' => null,
        'type' => null,
        'region' => null,
        'datastore' => null,
        'created' => null,
        'updated' => null,
        'dbUserName' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'flavorRef' => null,
        'flavorInfo' => null,
        'volume' => null,
        'backupStrategy' => null,
        'enterpriseProjectId' => null,
        'timeZone' => null,
        'chargeInfo' => null,
        'dedicatedResourceId' => null,
        'tags' => null
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
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * privateIps  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    * proxyIps  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    * readonlyPrivateIps  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。
    * type  实例类型，取值为“Cluster”。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * flavorInfo  flavorInfo
    * volume  volume
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * chargeInfo  chargeInfo
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'privateIps' => 'private_ips',
            'proxyIps' => 'proxy_ips',
            'readonlyPrivateIps' => 'readonly_private_ips',
            'publicIps' => 'public_ips',
            'port' => 'port',
            'type' => 'type',
            'region' => 'region',
            'datastore' => 'datastore',
            'created' => 'created',
            'updated' => 'updated',
            'dbUserName' => 'db_user_name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'flavorRef' => 'flavor_ref',
            'flavorInfo' => 'flavor_info',
            'volume' => 'volume',
            'backupStrategy' => 'backup_strategy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'timeZone' => 'time_zone',
            'chargeInfo' => 'charge_info',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * privateIps  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    * proxyIps  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    * readonlyPrivateIps  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。
    * type  实例类型，取值为“Cluster”。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * flavorInfo  flavorInfo
    * volume  volume
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * chargeInfo  chargeInfo
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'privateIps' => 'setPrivateIps',
            'proxyIps' => 'setProxyIps',
            'readonlyPrivateIps' => 'setReadonlyPrivateIps',
            'publicIps' => 'setPublicIps',
            'port' => 'setPort',
            'type' => 'setType',
            'region' => 'setRegion',
            'datastore' => 'setDatastore',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'dbUserName' => 'setDbUserName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'flavorRef' => 'setFlavorRef',
            'flavorInfo' => 'setFlavorInfo',
            'volume' => 'setVolume',
            'backupStrategy' => 'setBackupStrategy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'timeZone' => 'setTimeZone',
            'chargeInfo' => 'setChargeInfo',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * privateIps  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    * proxyIps  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    * readonlyPrivateIps  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    * publicIps  实例外网IP地址列表。
    * port  数据库端口号。
    * type  实例类型，取值为“Cluster”。
    * region  实例所在区域。
    * datastore  datastore
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * flavorRef  规格码。
    * flavorInfo  flavorInfo
    * volume  volume
    * backupStrategy  backupStrategy
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * chargeInfo  chargeInfo
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'privateIps' => 'getPrivateIps',
            'proxyIps' => 'getProxyIps',
            'readonlyPrivateIps' => 'getReadonlyPrivateIps',
            'publicIps' => 'getPublicIps',
            'port' => 'getPort',
            'type' => 'getType',
            'region' => 'getRegion',
            'datastore' => 'getDatastore',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'dbUserName' => 'getDbUserName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'flavorRef' => 'getFlavorRef',
            'flavorInfo' => 'getFlavorInfo',
            'volume' => 'getVolume',
            'backupStrategy' => 'getBackupStrategy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'timeZone' => 'getTimeZone',
            'chargeInfo' => 'getChargeInfo',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'tags' => 'getTags'
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
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['proxyIps'] = isset($data['proxyIps']) ? $data['proxyIps'] : null;
        $this->container['readonlyPrivateIps'] = isset($data['readonlyPrivateIps']) ? $data['readonlyPrivateIps'] : null;
        $this->container['publicIps'] = isset($data['publicIps']) ? $data['publicIps'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['flavorInfo'] = isset($data['flavorInfo']) ? $data['flavorInfo'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    *  实例ID，严格匹配UUID规则。
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
    * @param string $id 实例ID，严格匹配UUID规则。
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
    *  创建的实例名称。
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
    * @param string $name 创建的实例名称。
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
    *  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
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
    * @param string|null $status 实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets privateIps
    *  实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    *
    * @return string[]|null
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param string[]|null $privateIps 实例写内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空字列表。
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets proxyIps
    *  实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    *
    * @return string[]|null
    */
    public function getProxyIps()
    {
        return $this->container['proxyIps'];
    }

    /**
    * Sets proxyIps
    *
    * @param string[]|null $proxyIps 实例读写分离IP地址列表。TaurusDB实例开启代理成功后该值存在，其他情况下为空列表。
    *
    * @return $this
    */
    public function setProxyIps($proxyIps)
    {
        $this->container['proxyIps'] = $proxyIps;
        return $this;
    }

    /**
    * Gets readonlyPrivateIps
    *  实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    *
    * @return string[]|null
    */
    public function getReadonlyPrivateIps()
    {
        return $this->container['readonlyPrivateIps'];
    }

    /**
    * Sets readonlyPrivateIps
    *
    * @param string[]|null $readonlyPrivateIps 实例读内网IP地址列表。弹性云服务器创建成功后该值存在，其他情况下为空列表。
    *
    * @return $this
    */
    public function setReadonlyPrivateIps($readonlyPrivateIps)
    {
        $this->container['readonlyPrivateIps'] = $readonlyPrivateIps;
        return $this;
    }

    /**
    * Gets publicIps
    *  实例外网IP地址列表。
    *
    * @return string[]|null
    */
    public function getPublicIps()
    {
        return $this->container['publicIps'];
    }

    /**
    * Sets publicIps
    *
    * @param string[]|null $publicIps 实例外网IP地址列表。
    *
    * @return $this
    */
    public function setPublicIps($publicIps)
    {
        $this->container['publicIps'] = $publicIps;
        return $this;
    }

    /**
    * Gets port
    *  数据库端口号。
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
    * @param string|null $port 数据库端口号。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，取值为“Cluster”。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 实例类型，取值为“Cluster”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets region
    *  实例所在区域。
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
    * @param string|null $region 实例所在区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreWithKernelVersion|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreWithKernelVersion|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
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
    * @param string|null $created 创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式与\"created\"字段对应格式完全相同。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式与\"created\"字段对应格式完全相同。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets dbUserName
    *  默认用户名。
    *
    * @return string|null
    */
    public function getDbUserName()
    {
        return $this->container['dbUserName'];
    }

    /**
    * Sets dbUserName
    *
    * @param string|null $dbUserName 默认用户名。
    *
    * @return $this
    */
    public function setDbUserName($dbUserName)
    {
        $this->container['dbUserName'] = $dbUserName;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
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
    * @param string|null $vpcId 虚拟私有云ID。
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
    *  子网的网络ID信息。
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
    * @param string|null $subnetId 子网的网络ID信息。
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
    *  安全组ID。
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
    * @param string|null $securityGroupId 安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码。
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
    * @param string|null $flavorRef 规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets flavorInfo
    *  flavorInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlFlavorInfo|null
    */
    public function getFlavorInfo()
    {
        return $this->container['flavorInfo'];
    }

    /**
    * Sets flavorInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlFlavorInfo|null $flavorInfo flavorInfo
    *
    * @return $this
    */
    public function setFlavorInfo($flavorInfo)
    {
        $this->container['flavorInfo'] = $flavorInfo;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeInfo|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlVolumeInfo|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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
    * Gets timeZone
    *  时区。
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
    * @param string|null $timeZone 时区。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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
    * Gets dedicatedResourceId
    *  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
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
    * @param string|null $dedicatedResourceId 专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    *
    * @return $this
    */
    public function setDedicatedResourceId($dedicatedResourceId)
    {
        $this->container['dedicatedResourceId'] = $dedicatedResourceId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\InstanceTagItem[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\InstanceTagItem[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

