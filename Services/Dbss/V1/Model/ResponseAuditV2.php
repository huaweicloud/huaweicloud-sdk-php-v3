<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseAuditV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseAuditV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bindingDbType  绑定数据库类型
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注
    * configNum  已配置数据库数量
    * connectIpv6  IPV6
    * connectIp  IPV4
    * cpu  CPU数量
    * created  创建时间
    * databaseLimit  数据库数量限额
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * failedReason  失败原因
    * instanceId  实例ID
    * keepDays  在线天数
    * name  实例名称
    * newVersion  最新版本
    * portId  端口ID
    * ram  内存大小
    * region  所属区域
    * remainDays  剩余天数
    * resourceId  资源ID
    * resourceSpecCode  资源规格编码
    * scene  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  规格
    * status  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    * subnetId  子网ID
    * supportedFeature  功能列表
    * task  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    * timezone  时区
    * upgradeLog  升级日志
    * version  实例版本
    * vpcId  VPC私有云ID
    * zone  可用区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bindingDbType' => 'string',
            'chargeModel' => 'string',
            'comment' => 'string',
            'configNum' => 'int',
            'connectIpv6' => 'string',
            'connectIp' => 'string',
            'cpu' => 'int',
            'created' => 'string',
            'databaseLimit' => 'int',
            'effect' => 'int',
            'enterpriseProjectId' => 'string',
            'expired' => 'string',
            'failedReason' => 'string',
            'instanceId' => 'string',
            'keepDays' => 'string',
            'name' => 'string',
            'newVersion' => 'string',
            'portId' => 'string',
            'ram' => 'int',
            'region' => 'string',
            'remainDays' => 'string',
            'resourceId' => 'string',
            'resourceSpecCode' => 'string',
            'scene' => 'string',
            'securityGroupId' => 'string',
            'specification' => 'string',
            'status' => 'string',
            'subnetId' => 'string',
            'supportedFeature' => 'string[]',
            'task' => 'string',
            'timezone' => 'string',
            'upgradeLog' => 'string',
            'version' => 'string',
            'vpcId' => 'string',
            'zone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bindingDbType  绑定数据库类型
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注
    * configNum  已配置数据库数量
    * connectIpv6  IPV6
    * connectIp  IPV4
    * cpu  CPU数量
    * created  创建时间
    * databaseLimit  数据库数量限额
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * failedReason  失败原因
    * instanceId  实例ID
    * keepDays  在线天数
    * name  实例名称
    * newVersion  最新版本
    * portId  端口ID
    * ram  内存大小
    * region  所属区域
    * remainDays  剩余天数
    * resourceId  资源ID
    * resourceSpecCode  资源规格编码
    * scene  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  规格
    * status  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    * subnetId  子网ID
    * supportedFeature  功能列表
    * task  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    * timezone  时区
    * upgradeLog  升级日志
    * version  实例版本
    * vpcId  VPC私有云ID
    * zone  可用区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bindingDbType' => null,
        'chargeModel' => null,
        'comment' => null,
        'configNum' => 'int32',
        'connectIpv6' => null,
        'connectIp' => null,
        'cpu' => 'int32',
        'created' => null,
        'databaseLimit' => 'int32',
        'effect' => 'int32',
        'enterpriseProjectId' => null,
        'expired' => null,
        'failedReason' => null,
        'instanceId' => null,
        'keepDays' => null,
        'name' => null,
        'newVersion' => null,
        'portId' => null,
        'ram' => 'int32',
        'region' => null,
        'remainDays' => null,
        'resourceId' => null,
        'resourceSpecCode' => null,
        'scene' => null,
        'securityGroupId' => null,
        'specification' => null,
        'status' => null,
        'subnetId' => null,
        'supportedFeature' => null,
        'task' => null,
        'timezone' => null,
        'upgradeLog' => null,
        'version' => null,
        'vpcId' => null,
        'zone' => null
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
    * bindingDbType  绑定数据库类型
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注
    * configNum  已配置数据库数量
    * connectIpv6  IPV6
    * connectIp  IPV4
    * cpu  CPU数量
    * created  创建时间
    * databaseLimit  数据库数量限额
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * failedReason  失败原因
    * instanceId  实例ID
    * keepDays  在线天数
    * name  实例名称
    * newVersion  最新版本
    * portId  端口ID
    * ram  内存大小
    * region  所属区域
    * remainDays  剩余天数
    * resourceId  资源ID
    * resourceSpecCode  资源规格编码
    * scene  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  规格
    * status  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    * subnetId  子网ID
    * supportedFeature  功能列表
    * task  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    * timezone  时区
    * upgradeLog  升级日志
    * version  实例版本
    * vpcId  VPC私有云ID
    * zone  可用区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bindingDbType' => 'binding_db_type',
            'chargeModel' => 'charge_model',
            'comment' => 'comment',
            'configNum' => 'config_num',
            'connectIpv6' => 'connectIpv6',
            'connectIp' => 'connect_ip',
            'cpu' => 'cpu',
            'created' => 'created',
            'databaseLimit' => 'database_limit',
            'effect' => 'effect',
            'enterpriseProjectId' => 'enterprise_project_id',
            'expired' => 'expired',
            'failedReason' => 'failed_reason',
            'instanceId' => 'instance_id',
            'keepDays' => 'keep_days',
            'name' => 'name',
            'newVersion' => 'new_version',
            'portId' => 'port_id',
            'ram' => 'ram',
            'region' => 'region',
            'remainDays' => 'remain_days',
            'resourceId' => 'resource_id',
            'resourceSpecCode' => 'resource_spec_code',
            'scene' => 'scene',
            'securityGroupId' => 'security_group_id',
            'specification' => 'specification',
            'status' => 'status',
            'subnetId' => 'subnet_id',
            'supportedFeature' => 'supported_feature',
            'task' => 'task',
            'timezone' => 'timezone',
            'upgradeLog' => 'upgrade_log',
            'version' => 'version',
            'vpcId' => 'vpc_id',
            'zone' => 'zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bindingDbType  绑定数据库类型
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注
    * configNum  已配置数据库数量
    * connectIpv6  IPV6
    * connectIp  IPV4
    * cpu  CPU数量
    * created  创建时间
    * databaseLimit  数据库数量限额
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * failedReason  失败原因
    * instanceId  实例ID
    * keepDays  在线天数
    * name  实例名称
    * newVersion  最新版本
    * portId  端口ID
    * ram  内存大小
    * region  所属区域
    * remainDays  剩余天数
    * resourceId  资源ID
    * resourceSpecCode  资源规格编码
    * scene  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  规格
    * status  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    * subnetId  子网ID
    * supportedFeature  功能列表
    * task  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    * timezone  时区
    * upgradeLog  升级日志
    * version  实例版本
    * vpcId  VPC私有云ID
    * zone  可用区
    *
    * @var string[]
    */
    protected static $setters = [
            'bindingDbType' => 'setBindingDbType',
            'chargeModel' => 'setChargeModel',
            'comment' => 'setComment',
            'configNum' => 'setConfigNum',
            'connectIpv6' => 'setConnectIpv6',
            'connectIp' => 'setConnectIp',
            'cpu' => 'setCpu',
            'created' => 'setCreated',
            'databaseLimit' => 'setDatabaseLimit',
            'effect' => 'setEffect',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'expired' => 'setExpired',
            'failedReason' => 'setFailedReason',
            'instanceId' => 'setInstanceId',
            'keepDays' => 'setKeepDays',
            'name' => 'setName',
            'newVersion' => 'setNewVersion',
            'portId' => 'setPortId',
            'ram' => 'setRam',
            'region' => 'setRegion',
            'remainDays' => 'setRemainDays',
            'resourceId' => 'setResourceId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'scene' => 'setScene',
            'securityGroupId' => 'setSecurityGroupId',
            'specification' => 'setSpecification',
            'status' => 'setStatus',
            'subnetId' => 'setSubnetId',
            'supportedFeature' => 'setSupportedFeature',
            'task' => 'setTask',
            'timezone' => 'setTimezone',
            'upgradeLog' => 'setUpgradeLog',
            'version' => 'setVersion',
            'vpcId' => 'setVpcId',
            'zone' => 'setZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bindingDbType  绑定数据库类型
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注
    * configNum  已配置数据库数量
    * connectIpv6  IPV6
    * connectIp  IPV4
    * cpu  CPU数量
    * created  创建时间
    * databaseLimit  数据库数量限额
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * enterpriseProjectId  企业项目ID
    * expired  过期时间
    * failedReason  失败原因
    * instanceId  实例ID
    * keepDays  在线天数
    * name  实例名称
    * newVersion  最新版本
    * portId  端口ID
    * ram  内存大小
    * region  所属区域
    * remainDays  剩余天数
    * resourceId  资源ID
    * resourceSpecCode  资源规格编码
    * scene  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  规格
    * status  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    * subnetId  子网ID
    * supportedFeature  功能列表
    * task  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    * timezone  时区
    * upgradeLog  升级日志
    * version  实例版本
    * vpcId  VPC私有云ID
    * zone  可用区
    *
    * @var string[]
    */
    protected static $getters = [
            'bindingDbType' => 'getBindingDbType',
            'chargeModel' => 'getChargeModel',
            'comment' => 'getComment',
            'configNum' => 'getConfigNum',
            'connectIpv6' => 'getConnectIpv6',
            'connectIp' => 'getConnectIp',
            'cpu' => 'getCpu',
            'created' => 'getCreated',
            'databaseLimit' => 'getDatabaseLimit',
            'effect' => 'getEffect',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'expired' => 'getExpired',
            'failedReason' => 'getFailedReason',
            'instanceId' => 'getInstanceId',
            'keepDays' => 'getKeepDays',
            'name' => 'getName',
            'newVersion' => 'getNewVersion',
            'portId' => 'getPortId',
            'ram' => 'getRam',
            'region' => 'getRegion',
            'remainDays' => 'getRemainDays',
            'resourceId' => 'getResourceId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'scene' => 'getScene',
            'securityGroupId' => 'getSecurityGroupId',
            'specification' => 'getSpecification',
            'status' => 'getStatus',
            'subnetId' => 'getSubnetId',
            'supportedFeature' => 'getSupportedFeature',
            'task' => 'getTask',
            'timezone' => 'getTimezone',
            'upgradeLog' => 'getUpgradeLog',
            'version' => 'getVersion',
            'vpcId' => 'getVpcId',
            'zone' => 'getZone'
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
        $this->container['bindingDbType'] = isset($data['bindingDbType']) ? $data['bindingDbType'] : null;
        $this->container['chargeModel'] = isset($data['chargeModel']) ? $data['chargeModel'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['configNum'] = isset($data['configNum']) ? $data['configNum'] : null;
        $this->container['connectIpv6'] = isset($data['connectIpv6']) ? $data['connectIpv6'] : null;
        $this->container['connectIp'] = isset($data['connectIp']) ? $data['connectIp'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['databaseLimit'] = isset($data['databaseLimit']) ? $data['databaseLimit'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['keepDays'] = isset($data['keepDays']) ? $data['keepDays'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['newVersion'] = isset($data['newVersion']) ? $data['newVersion'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['remainDays'] = isset($data['remainDays']) ? $data['remainDays'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['supportedFeature'] = isset($data['supportedFeature']) ? $data['supportedFeature'] : null;
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['upgradeLog'] = isset($data['upgradeLog']) ? $data['upgradeLog'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargeModel'] === null) {
            $invalidProperties[] = "'chargeModel' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalidProperties[] = "'comment' can't be null";
        }
        if ($this->container['configNum'] === null) {
            $invalidProperties[] = "'configNum' can't be null";
        }
        if ($this->container['connectIp'] === null) {
            $invalidProperties[] = "'connectIp' can't be null";
        }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['databaseLimit'] === null) {
            $invalidProperties[] = "'databaseLimit' can't be null";
        }
        if ($this->container['effect'] === null) {
            $invalidProperties[] = "'effect' can't be null";
        }
        if ($this->container['expired'] === null) {
            $invalidProperties[] = "'expired' can't be null";
        }
        if ($this->container['keepDays'] === null) {
            $invalidProperties[] = "'keepDays' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['newVersion'] === null) {
            $invalidProperties[] = "'newVersion' can't be null";
        }
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['remainDays'] === null) {
            $invalidProperties[] = "'remainDays' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['task'] === null) {
            $invalidProperties[] = "'task' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['zone'] === null) {
            $invalidProperties[] = "'zone' can't be null";
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
    * Gets bindingDbType
    *  绑定数据库类型
    *
    * @return string|null
    */
    public function getBindingDbType()
    {
        return $this->container['bindingDbType'];
    }

    /**
    * Sets bindingDbType
    *
    * @param string|null $bindingDbType 绑定数据库类型
    *
    * @return $this
    */
    public function setBindingDbType($bindingDbType)
    {
        $this->container['bindingDbType'] = $bindingDbType;
        return $this;
    }

    /**
    * Gets chargeModel
    *  付费模式  - Period：包周期 - Demand：按需。
    *
    * @return string
    */
    public function getChargeModel()
    {
        return $this->container['chargeModel'];
    }

    /**
    * Sets chargeModel
    *
    * @param string $chargeModel 付费模式  - Period：包周期 - Demand：按需。
    *
    * @return $this
    */
    public function setChargeModel($chargeModel)
    {
        $this->container['chargeModel'] = $chargeModel;
        return $this;
    }

    /**
    * Gets comment
    *  备注
    *
    * @return string
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string $comment 备注
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets configNum
    *  已配置数据库数量
    *
    * @return int
    */
    public function getConfigNum()
    {
        return $this->container['configNum'];
    }

    /**
    * Sets configNum
    *
    * @param int $configNum 已配置数据库数量
    *
    * @return $this
    */
    public function setConfigNum($configNum)
    {
        $this->container['configNum'] = $configNum;
        return $this;
    }

    /**
    * Gets connectIpv6
    *  IPV6
    *
    * @return string|null
    */
    public function getConnectIpv6()
    {
        return $this->container['connectIpv6'];
    }

    /**
    * Sets connectIpv6
    *
    * @param string|null $connectIpv6 IPV6
    *
    * @return $this
    */
    public function setConnectIpv6($connectIpv6)
    {
        $this->container['connectIpv6'] = $connectIpv6;
        return $this;
    }

    /**
    * Gets connectIp
    *  IPV4
    *
    * @return string
    */
    public function getConnectIp()
    {
        return $this->container['connectIp'];
    }

    /**
    * Sets connectIp
    *
    * @param string $connectIp IPV4
    *
    * @return $this
    */
    public function setConnectIp($connectIp)
    {
        $this->container['connectIp'] = $connectIp;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU数量
    *
    * @return int
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int $cpu CPU数量
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets created
    *  创建时间
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets databaseLimit
    *  数据库数量限额
    *
    * @return int
    */
    public function getDatabaseLimit()
    {
        return $this->container['databaseLimit'];
    }

    /**
    * Sets databaseLimit
    *
    * @param int $databaseLimit 数据库数量限额
    *
    * @return $this
    */
    public function setDatabaseLimit($databaseLimit)
    {
        $this->container['databaseLimit'] = $databaseLimit;
        return $this;
    }

    /**
    * Gets effect
    *  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    *
    * @return int
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param int $effect 实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets expired
    *  过期时间
    *
    * @return string
    */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
    * Sets expired
    *
    * @param string $expired 过期时间
    *
    * @return $this
    */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;
        return $this;
    }

    /**
    * Gets failedReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 失败原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets keepDays
    *  在线天数
    *
    * @return string
    */
    public function getKeepDays()
    {
        return $this->container['keepDays'];
    }

    /**
    * Sets keepDays
    *
    * @param string $keepDays 在线天数
    *
    * @return $this
    */
    public function setKeepDays($keepDays)
    {
        $this->container['keepDays'] = $keepDays;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
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
    * @param string $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets newVersion
    *  最新版本
    *
    * @return string
    */
    public function getNewVersion()
    {
        return $this->container['newVersion'];
    }

    /**
    * Sets newVersion
    *
    * @param string $newVersion 最新版本
    *
    * @return $this
    */
    public function setNewVersion($newVersion)
    {
        $this->container['newVersion'] = $newVersion;
        return $this;
    }

    /**
    * Gets portId
    *  端口ID
    *
    * @return string
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string $portId 端口ID
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小
    *
    * @return int
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param int $ram 内存大小
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets region
    *  所属区域
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
    * @param string $region 所属区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets remainDays
    *  剩余天数
    *
    * @return string
    */
    public function getRemainDays()
    {
        return $this->container['remainDays'];
    }

    /**
    * Sets remainDays
    *
    * @param string $remainDays 剩余天数
    *
    * @return $this
    */
    public function setRemainDays($remainDays)
    {
        $this->container['remainDays'] = $remainDays;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格编码
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets scene
    *  冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene 冻结场景  - POLICE: 公安冻结  - ILLEGAL: 违规冻结  - VERIFY: 未实名认证冻结  - PARTNER: 合作伙伴冻结 - ARREARS: 普通冻结（普通）
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID
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
    * @param string $securityGroupId 安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets specification
    *  规格
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 规格
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets status
    *  实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 实例状态  - SHUTOFF: 已关闭  - ACTIVE: 运行中，允许任何操作   - DELETING: 删除中，不允许任何操作  - BUILD: 创建中，不允许任何操作  - DELETED: 已删除，不需要展示  - ERROR: 故障，只允许删除  - HAWAIT: 等待备机创建成功，不允许任何操作  - FROZEN: 已冻结，只允许续费、绑定/解绑  - UPGRADING: 升级中，不允许升级操作
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID
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
    * @param string $subnetId 子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets supportedFeature
    *  功能列表
    *
    * @return string[]|null
    */
    public function getSupportedFeature()
    {
        return $this->container['supportedFeature'];
    }

    /**
    * Sets supportedFeature
    *
    * @param string[]|null $supportedFeature 功能列表
    *
    * @return $this
    */
    public function setSupportedFeature($supportedFeature)
    {
        $this->container['supportedFeature'] = $supportedFeature;
        return $this;
    }

    /**
    * Gets task
    *  任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    *
    * @return string
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param string $task 任务状态  - powering-on: 正在开启，实例可以绑定、解绑  - powering-off: 正在关闭，实例可以绑定、解绑  - rebooting: 正在重启，实例可以绑定、解绑  - delete_wait: 等待删除，集群与实例不允许任何操作  - NO_TASK: 不展示
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets timezone
    *  时区
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 时区
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets upgradeLog
    *  升级日志
    *
    * @return string|null
    */
    public function getUpgradeLog()
    {
        return $this->container['upgradeLog'];
    }

    /**
    * Sets upgradeLog
    *
    * @param string|null $upgradeLog 升级日志
    *
    * @return $this
    */
    public function setUpgradeLog($upgradeLog)
    {
        $this->container['upgradeLog'] = $upgradeLog;
        return $this;
    }

    /**
    * Gets version
    *  实例版本
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 实例版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC私有云ID
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
    * @param string $vpcId VPC私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets zone
    *  可用区
    *
    * @return string
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string $zone 可用区
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
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

