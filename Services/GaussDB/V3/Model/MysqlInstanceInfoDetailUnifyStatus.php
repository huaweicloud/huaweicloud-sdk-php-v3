<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlInstanceInfoDetailUnifyStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlInstanceInfoDetailUnifyStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * port  数据库端口号。
    * alias  实例备注
    * type  实例类型，取Cluster”。
    * chargeInfo  chargeInfo
    * nodeCount  节点个数。
    * datastore  datastore
    * backupUsedSpace  备份空间使用大小，单位为GB。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * privateWriteIps  实例的写内网IP地址。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例的公网IP地址。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * configurationId  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    * backupStrategy  backupStrategy
    * nodes  节点信息。
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * azMode  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    * masterAzCode  主可用区。
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * tags  实例标签。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * proxies  代理信息。
    * tdeInfo  tdeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'port' => 'string',
            'alias' => 'string',
            'type' => 'string',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceChargeInfo',
            'nodeCount' => 'int',
            'datastore' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlDatastoreWithKernelVersion',
            'backupUsedSpace' => 'double',
            'created' => 'string',
            'updated' => 'string',
            'privateWriteIps' => 'string[]',
            'privateDnsNames' => 'string[]',
            'publicIps' => 'string',
            'dbUserName' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'configurationId' => 'string',
            'backupStrategy' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlBackupStrategy',
            'nodes' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeInfo[]',
            'enterpriseProjectId' => 'string',
            'timeZone' => 'string',
            'azMode' => 'string',
            'masterAzCode' => 'string',
            'maintenanceWindow' => 'string',
            'tags' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTags[]',
            'dedicatedResourceId' => 'string',
            'proxies' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyInfo[]',
            'tdeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTdeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * port  数据库端口号。
    * alias  实例备注
    * type  实例类型，取Cluster”。
    * chargeInfo  chargeInfo
    * nodeCount  节点个数。
    * datastore  datastore
    * backupUsedSpace  备份空间使用大小，单位为GB。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * privateWriteIps  实例的写内网IP地址。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例的公网IP地址。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * configurationId  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    * backupStrategy  backupStrategy
    * nodes  节点信息。
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * azMode  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    * masterAzCode  主可用区。
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * tags  实例标签。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * proxies  代理信息。
    * tdeInfo  tdeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'status' => null,
        'port' => null,
        'alias' => null,
        'type' => null,
        'chargeInfo' => null,
        'nodeCount' => 'int32',
        'datastore' => null,
        'backupUsedSpace' => 'double',
        'created' => null,
        'updated' => null,
        'privateWriteIps' => null,
        'privateDnsNames' => null,
        'publicIps' => null,
        'dbUserName' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'configurationId' => null,
        'backupStrategy' => null,
        'nodes' => null,
        'enterpriseProjectId' => null,
        'timeZone' => null,
        'azMode' => null,
        'masterAzCode' => null,
        'maintenanceWindow' => null,
        'tags' => null,
        'dedicatedResourceId' => null,
        'proxies' => null,
        'tdeInfo' => null
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
    * projectId  租户在某一Region下的project ID。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * port  数据库端口号。
    * alias  实例备注
    * type  实例类型，取Cluster”。
    * chargeInfo  chargeInfo
    * nodeCount  节点个数。
    * datastore  datastore
    * backupUsedSpace  备份空间使用大小，单位为GB。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * privateWriteIps  实例的写内网IP地址。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例的公网IP地址。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * configurationId  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    * backupStrategy  backupStrategy
    * nodes  节点信息。
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * azMode  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    * masterAzCode  主可用区。
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * tags  实例标签。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * proxies  代理信息。
    * tdeInfo  tdeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'status' => 'status',
            'port' => 'port',
            'alias' => 'alias',
            'type' => 'type',
            'chargeInfo' => 'charge_info',
            'nodeCount' => 'node_count',
            'datastore' => 'datastore',
            'backupUsedSpace' => 'backup_used_space',
            'created' => 'created',
            'updated' => 'updated',
            'privateWriteIps' => 'private_write_ips',
            'privateDnsNames' => 'private_dns_names',
            'publicIps' => 'public_ips',
            'dbUserName' => 'db_user_name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'configurationId' => 'configuration_id',
            'backupStrategy' => 'backup_strategy',
            'nodes' => 'nodes',
            'enterpriseProjectId' => 'enterprise_project_id',
            'timeZone' => 'time_zone',
            'azMode' => 'az_mode',
            'masterAzCode' => 'master_az_code',
            'maintenanceWindow' => 'maintenance_window',
            'tags' => 'tags',
            'dedicatedResourceId' => 'dedicated_resource_id',
            'proxies' => 'proxies',
            'tdeInfo' => 'tde_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * port  数据库端口号。
    * alias  实例备注
    * type  实例类型，取Cluster”。
    * chargeInfo  chargeInfo
    * nodeCount  节点个数。
    * datastore  datastore
    * backupUsedSpace  备份空间使用大小，单位为GB。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * privateWriteIps  实例的写内网IP地址。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例的公网IP地址。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * configurationId  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    * backupStrategy  backupStrategy
    * nodes  节点信息。
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * azMode  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    * masterAzCode  主可用区。
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * tags  实例标签。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * proxies  代理信息。
    * tdeInfo  tdeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'port' => 'setPort',
            'alias' => 'setAlias',
            'type' => 'setType',
            'chargeInfo' => 'setChargeInfo',
            'nodeCount' => 'setNodeCount',
            'datastore' => 'setDatastore',
            'backupUsedSpace' => 'setBackupUsedSpace',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'privateWriteIps' => 'setPrivateWriteIps',
            'privateDnsNames' => 'setPrivateDnsNames',
            'publicIps' => 'setPublicIps',
            'dbUserName' => 'setDbUserName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'configurationId' => 'setConfigurationId',
            'backupStrategy' => 'setBackupStrategy',
            'nodes' => 'setNodes',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'timeZone' => 'setTimeZone',
            'azMode' => 'setAzMode',
            'masterAzCode' => 'setMasterAzCode',
            'maintenanceWindow' => 'setMaintenanceWindow',
            'tags' => 'setTags',
            'dedicatedResourceId' => 'setDedicatedResourceId',
            'proxies' => 'setProxies',
            'tdeInfo' => 'setTdeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID，严格匹配UUID规则。
    * name  创建的实例名称。
    * projectId  租户在某一Region下的project ID。
    * status  实例状态。  取值： - 值为“creating”，表示实例正在创建。 - 值为“normal”，表示实例正常。 - 值为“abnormal”，表示实例异常。 - 值为“createfail”，表示实例创建失败。
    * port  数据库端口号。
    * alias  实例备注
    * type  实例类型，取Cluster”。
    * chargeInfo  chargeInfo
    * nodeCount  节点个数。
    * datastore  datastore
    * backupUsedSpace  备份空间使用大小，单位为GB。
    * created  创建时间，格式为\"yyyy-mm-ddThh:mm:ssZ\"。  其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * updated  更新时间，格式与\"created\"字段对应格式完全相同。
    * privateWriteIps  实例的写内网IP地址。
    * privateDnsNames  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    * publicIps  实例的公网IP地址。
    * dbUserName  默认用户名。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * securityGroupId  安全组ID。
    * configurationId  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    * backupStrategy  backupStrategy
    * nodes  节点信息。
    * enterpriseProjectId  企业项目ID。
    * timeZone  时区。
    * azMode  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    * masterAzCode  主可用区。
    * maintenanceWindow  可维护时间窗，为UTC时间。
    * tags  实例标签。
    * dedicatedResourceId  专属资源池ID，只有数据库实例属于专属资源池才会返回该参数。
    * proxies  代理信息。
    * tdeInfo  tdeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'port' => 'getPort',
            'alias' => 'getAlias',
            'type' => 'getType',
            'chargeInfo' => 'getChargeInfo',
            'nodeCount' => 'getNodeCount',
            'datastore' => 'getDatastore',
            'backupUsedSpace' => 'getBackupUsedSpace',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'privateWriteIps' => 'getPrivateWriteIps',
            'privateDnsNames' => 'getPrivateDnsNames',
            'publicIps' => 'getPublicIps',
            'dbUserName' => 'getDbUserName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'configurationId' => 'getConfigurationId',
            'backupStrategy' => 'getBackupStrategy',
            'nodes' => 'getNodes',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'timeZone' => 'getTimeZone',
            'azMode' => 'getAzMode',
            'masterAzCode' => 'getMasterAzCode',
            'maintenanceWindow' => 'getMaintenanceWindow',
            'tags' => 'getTags',
            'dedicatedResourceId' => 'getDedicatedResourceId',
            'proxies' => 'getProxies',
            'tdeInfo' => 'getTdeInfo'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['backupUsedSpace'] = isset($data['backupUsedSpace']) ? $data['backupUsedSpace'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['privateWriteIps'] = isset($data['privateWriteIps']) ? $data['privateWriteIps'] : null;
        $this->container['privateDnsNames'] = isset($data['privateDnsNames']) ? $data['privateDnsNames'] : null;
        $this->container['publicIps'] = isset($data['publicIps']) ? $data['publicIps'] : null;
        $this->container['dbUserName'] = isset($data['dbUserName']) ? $data['dbUserName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
        $this->container['backupStrategy'] = isset($data['backupStrategy']) ? $data['backupStrategy'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['azMode'] = isset($data['azMode']) ? $data['azMode'] : null;
        $this->container['masterAzCode'] = isset($data['masterAzCode']) ? $data['masterAzCode'] : null;
        $this->container['maintenanceWindow'] = isset($data['maintenanceWindow']) ? $data['maintenanceWindow'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['dedicatedResourceId'] = isset($data['dedicatedResourceId']) ? $data['dedicatedResourceId'] : null;
        $this->container['proxies'] = isset($data['proxies']) ? $data['proxies'] : null;
        $this->container['tdeInfo'] = isset($data['tdeInfo']) ? $data['tdeInfo'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets projectId
    *  租户在某一Region下的project ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户在某一Region下的project ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets alias
    *  实例备注
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 实例备注
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets type
    *  实例类型，取Cluster”。
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
    * @param string|null $type 实例类型，取Cluster”。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceChargeInfo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets nodeCount
    *  节点个数。
    *
    * @return int|null
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int|null $nodeCount 节点个数。
    *
    * @return $this
    */
    public function setNodeCount($nodeCount)
    {
        $this->container['nodeCount'] = $nodeCount;
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
    * Gets backupUsedSpace
    *  备份空间使用大小，单位为GB。
    *
    * @return double|null
    */
    public function getBackupUsedSpace()
    {
        return $this->container['backupUsedSpace'];
    }

    /**
    * Sets backupUsedSpace
    *
    * @param double|null $backupUsedSpace 备份空间使用大小，单位为GB。
    *
    * @return $this
    */
    public function setBackupUsedSpace($backupUsedSpace)
    {
        $this->container['backupUsedSpace'] = $backupUsedSpace;
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
    * Gets privateWriteIps
    *  实例的写内网IP地址。
    *
    * @return string[]|null
    */
    public function getPrivateWriteIps()
    {
        return $this->container['privateWriteIps'];
    }

    /**
    * Sets privateWriteIps
    *
    * @param string[]|null $privateWriteIps 实例的写内网IP地址。
    *
    * @return $this
    */
    public function setPrivateWriteIps($privateWriteIps)
    {
        $this->container['privateWriteIps'] = $privateWriteIps;
        return $this;
    }

    /**
    * Gets privateDnsNames
    *  实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    *
    * @return string[]|null
    */
    public function getPrivateDnsNames()
    {
        return $this->container['privateDnsNames'];
    }

    /**
    * Sets privateDnsNames
    *
    * @param string[]|null $privateDnsNames 实例内网域名列表。实例创建成功后，需要手动申请内网域名，否则查询内网域名为空。
    *
    * @return $this
    */
    public function setPrivateDnsNames($privateDnsNames)
    {
        $this->container['privateDnsNames'] = $privateDnsNames;
        return $this;
    }

    /**
    * Gets publicIps
    *  实例的公网IP地址。
    *
    * @return string|null
    */
    public function getPublicIps()
    {
        return $this->container['publicIps'];
    }

    /**
    * Sets publicIps
    *
    * @param string|null $publicIps 实例的公网IP地址。
    *
    * @return $this
    */
    public function setPublicIps($publicIps)
    {
        $this->container['publicIps'] = $publicIps;
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
    * Gets configurationId
    *  实例创建的模板ID，或者应用到实例的最新参数组模板ID。
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
    * @param string|null $configurationId 实例创建的模板ID，或者应用到实例的最新参数组模板ID。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
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
    * Gets nodes
    *  节点信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeInfo[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlInstanceNodeInfo[]|null $nodes 节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
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
    * Gets azMode
    *  可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    *
    * @return string|null
    */
    public function getAzMode()
    {
        return $this->container['azMode'];
    }

    /**
    * Sets azMode
    *
    * @param string|null $azMode 可用区模式。  取值范围： - single：单可用区。 - multi：多可用区。
    *
    * @return $this
    */
    public function setAzMode($azMode)
    {
        $this->container['azMode'] = $azMode;
        return $this;
    }

    /**
    * Gets masterAzCode
    *  主可用区。
    *
    * @return string|null
    */
    public function getMasterAzCode()
    {
        return $this->container['masterAzCode'];
    }

    /**
    * Sets masterAzCode
    *
    * @param string|null $masterAzCode 主可用区。
    *
    * @return $this
    */
    public function setMasterAzCode($masterAzCode)
    {
        $this->container['masterAzCode'] = $masterAzCode;
        return $this;
    }

    /**
    * Gets maintenanceWindow
    *  可维护时间窗，为UTC时间。
    *
    * @return string|null
    */
    public function getMaintenanceWindow()
    {
        return $this->container['maintenanceWindow'];
    }

    /**
    * Sets maintenanceWindow
    *
    * @param string|null $maintenanceWindow 可维护时间窗，为UTC时间。
    *
    * @return $this
    */
    public function setMaintenanceWindow($maintenanceWindow)
    {
        $this->container['maintenanceWindow'] = $maintenanceWindow;
        return $this;
    }

    /**
    * Gets tags
    *  实例标签。
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
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTags[]|null $tags 实例标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
    * Gets proxies
    *  代理信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyInfo[]|null
    */
    public function getProxies()
    {
        return $this->container['proxies'];
    }

    /**
    * Sets proxies
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlProxyInfo[]|null $proxies 代理信息。
    *
    * @return $this
    */
    public function setProxies($proxies)
    {
        $this->container['proxies'] = $proxies;
        return $this;
    }

    /**
    * Gets tdeInfo
    *  tdeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTdeInfo|null
    */
    public function getTdeInfo()
    {
        return $this->container['tdeInfo'];
    }

    /**
    * Sets tdeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\MysqlTdeInfo|null $tdeInfo tdeInfo
    *
    * @return $this
    */
    public function setTdeInfo($tdeInfo)
    {
        $this->container['tdeInfo'] = $tdeInfo;
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

