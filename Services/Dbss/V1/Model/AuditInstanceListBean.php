<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditInstanceListBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditInstanceListBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注信息。
    * configNum  配置的数据库总数。
    * connectIp  连接地址。
    * connectIpv6  ipv6连接地址。
    * cpu  CPU个数
    * created  创建时间
    * databaseLimit  支持的数据库总数
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * expired  过期时间
    * id  ID
    * keepDays  剩余天数
    * name  实例别名
    * newVersion  如果有返回，则需要升级，如果没有，则为null。
    * portId  绑定弹性IP的port ID
    * ram  内存
    * region  实例所在region
    * remainDays  到期天数
    * resourceId  资源ID
    * resourceSpecCode  实例的规格
    * scene  场景
    * securityGroupId  安全组
    * specification  实例规格
    * status  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
    * subnetId  子网ID
    * task  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    * version  实例的当前版本
    * vpcId  虚拟私有云
    * zone  可用区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeModel' => 'string',
            'comment' => 'string',
            'configNum' => 'int',
            'connectIp' => 'string',
            'connectIpv6' => 'string',
            'cpu' => 'int',
            'created' => 'string',
            'databaseLimit' => 'int',
            'effect' => 'int',
            'expired' => 'string',
            'id' => 'string',
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
            'task' => 'string',
            'version' => 'string',
            'vpcId' => 'string',
            'zone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注信息。
    * configNum  配置的数据库总数。
    * connectIp  连接地址。
    * connectIpv6  ipv6连接地址。
    * cpu  CPU个数
    * created  创建时间
    * databaseLimit  支持的数据库总数
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * expired  过期时间
    * id  ID
    * keepDays  剩余天数
    * name  实例别名
    * newVersion  如果有返回，则需要升级，如果没有，则为null。
    * portId  绑定弹性IP的port ID
    * ram  内存
    * region  实例所在region
    * remainDays  到期天数
    * resourceId  资源ID
    * resourceSpecCode  实例的规格
    * scene  场景
    * securityGroupId  安全组
    * specification  实例规格
    * status  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
    * subnetId  子网ID
    * task  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    * version  实例的当前版本
    * vpcId  虚拟私有云
    * zone  可用区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeModel' => null,
        'comment' => null,
        'configNum' => 'int32',
        'connectIp' => null,
        'connectIpv6' => null,
        'cpu' => 'int32',
        'created' => null,
        'databaseLimit' => 'int32',
        'effect' => 'int32',
        'expired' => null,
        'id' => null,
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
        'task' => null,
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
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注信息。
    * configNum  配置的数据库总数。
    * connectIp  连接地址。
    * connectIpv6  ipv6连接地址。
    * cpu  CPU个数
    * created  创建时间
    * databaseLimit  支持的数据库总数
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * expired  过期时间
    * id  ID
    * keepDays  剩余天数
    * name  实例别名
    * newVersion  如果有返回，则需要升级，如果没有，则为null。
    * portId  绑定弹性IP的port ID
    * ram  内存
    * region  实例所在region
    * remainDays  到期天数
    * resourceId  资源ID
    * resourceSpecCode  实例的规格
    * scene  场景
    * securityGroupId  安全组
    * specification  实例规格
    * status  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
    * subnetId  子网ID
    * task  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    * version  实例的当前版本
    * vpcId  虚拟私有云
    * zone  可用区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeModel' => 'charge_model',
            'comment' => 'comment',
            'configNum' => 'config_num',
            'connectIp' => 'connect_ip',
            'connectIpv6' => 'connect_ipv6',
            'cpu' => 'cpu',
            'created' => 'created',
            'databaseLimit' => 'database_limit',
            'effect' => 'effect',
            'expired' => 'expired',
            'id' => 'id',
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
            'task' => 'task',
            'version' => 'version',
            'vpcId' => 'vpc_id',
            'zone' => 'zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注信息。
    * configNum  配置的数据库总数。
    * connectIp  连接地址。
    * connectIpv6  ipv6连接地址。
    * cpu  CPU个数
    * created  创建时间
    * databaseLimit  支持的数据库总数
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * expired  过期时间
    * id  ID
    * keepDays  剩余天数
    * name  实例别名
    * newVersion  如果有返回，则需要升级，如果没有，则为null。
    * portId  绑定弹性IP的port ID
    * ram  内存
    * region  实例所在region
    * remainDays  到期天数
    * resourceId  资源ID
    * resourceSpecCode  实例的规格
    * scene  场景
    * securityGroupId  安全组
    * specification  实例规格
    * status  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
    * subnetId  子网ID
    * task  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    * version  实例的当前版本
    * vpcId  虚拟私有云
    * zone  可用区
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeModel' => 'setChargeModel',
            'comment' => 'setComment',
            'configNum' => 'setConfigNum',
            'connectIp' => 'setConnectIp',
            'connectIpv6' => 'setConnectIpv6',
            'cpu' => 'setCpu',
            'created' => 'setCreated',
            'databaseLimit' => 'setDatabaseLimit',
            'effect' => 'setEffect',
            'expired' => 'setExpired',
            'id' => 'setId',
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
            'task' => 'setTask',
            'version' => 'setVersion',
            'vpcId' => 'setVpcId',
            'zone' => 'setZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeModel  付费模式  - Period：包周期 - Demand：按需。
    * comment  备注信息。
    * configNum  配置的数据库总数。
    * connectIp  连接地址。
    * connectIpv6  ipv6连接地址。
    * cpu  CPU个数
    * created  创建时间
    * databaseLimit  支持的数据库总数
    * effect  实例结果状态 - 1：冻结可释放  - 2：冻结不可释放 - 3：冻结后不可续费
    * expired  过期时间
    * id  ID
    * keepDays  剩余天数
    * name  实例别名
    * newVersion  如果有返回，则需要升级，如果没有，则为null。
    * portId  绑定弹性IP的port ID
    * ram  内存
    * region  实例所在region
    * remainDays  到期天数
    * resourceId  资源ID
    * resourceSpecCode  实例的规格
    * scene  场景
    * securityGroupId  安全组
    * specification  实例规格
    * status  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
    * subnetId  子网ID
    * task  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    * version  实例的当前版本
    * vpcId  虚拟私有云
    * zone  可用区
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeModel' => 'getChargeModel',
            'comment' => 'getComment',
            'configNum' => 'getConfigNum',
            'connectIp' => 'getConnectIp',
            'connectIpv6' => 'getConnectIpv6',
            'cpu' => 'getCpu',
            'created' => 'getCreated',
            'databaseLimit' => 'getDatabaseLimit',
            'effect' => 'getEffect',
            'expired' => 'getExpired',
            'id' => 'getId',
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
            'task' => 'getTask',
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
        $this->container['chargeModel'] = isset($data['chargeModel']) ? $data['chargeModel'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['configNum'] = isset($data['configNum']) ? $data['configNum'] : null;
        $this->container['connectIp'] = isset($data['connectIp']) ? $data['connectIp'] : null;
        $this->container['connectIpv6'] = isset($data['connectIpv6']) ? $data['connectIpv6'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['databaseLimit'] = isset($data['databaseLimit']) ? $data['databaseLimit'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
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
        if ($this->container['connectIpv6'] === null) {
            $invalidProperties[] = "'connectIpv6' can't be null";
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    *  备注信息。
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
    * @param string $comment 备注信息。
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
    *  配置的数据库总数。
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
    * @param int $configNum 配置的数据库总数。
    *
    * @return $this
    */
    public function setConfigNum($configNum)
    {
        $this->container['configNum'] = $configNum;
        return $this;
    }

    /**
    * Gets connectIp
    *  连接地址。
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
    * @param string $connectIp 连接地址。
    *
    * @return $this
    */
    public function setConnectIp($connectIp)
    {
        $this->container['connectIp'] = $connectIp;
        return $this;
    }

    /**
    * Gets connectIpv6
    *  ipv6连接地址。
    *
    * @return string
    */
    public function getConnectIpv6()
    {
        return $this->container['connectIpv6'];
    }

    /**
    * Sets connectIpv6
    *
    * @param string $connectIpv6 ipv6连接地址。
    *
    * @return $this
    */
    public function setConnectIpv6($connectIpv6)
    {
        $this->container['connectIpv6'] = $connectIpv6;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU个数
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
    * @param int $cpu CPU个数
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
    *  支持的数据库总数
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
    * @param int $databaseLimit 支持的数据库总数
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
    * Gets id
    *  ID
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
    * @param string $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets keepDays
    *  剩余天数
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
    * @param string $keepDays 剩余天数
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
    *  实例别名
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
    * @param string $name 实例别名
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
    *  如果有返回，则需要升级，如果没有，则为null。
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
    * @param string $newVersion 如果有返回，则需要升级，如果没有，则为null。
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
    *  绑定弹性IP的port ID
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
    * @param string $portId 绑定弹性IP的port ID
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
    *  内存
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
    * @param int $ram 内存
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
    *  实例所在region
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
    * @param string $region 实例所在region
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
    *  到期天数
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
    * @param string $remainDays 到期天数
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
    *  实例的规格
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
    * @param string $resourceSpecCode 实例的规格
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
    *  场景
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
    * @param string $scene 场景
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
    *  安全组
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
    * @param string $securityGroupId 安全组
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
    *  实例规格
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
    * @param string $specification 实例规格
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
    *  实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
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
    * @param string $status 实例状态  - SHUTOFF：已关闭  - ACTIVE：运行中，允许任何操作   - DELETING：删除中，不允许任何操作  - BUILD：创建中，不允许任何操作  - DELETED：已删除，不需要展示  - ERROR：故障，只允许删除  - HAWAIT：等待备机创建成功，不允许任何操作  - FROZEN：已冻结，只允许续费、绑定/解绑  - UPGRADING：升级中，不允许升级操作
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
    * Gets task
    *  任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
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
    * @param string $task 任务状态  - powering-on：正在开启，实例可以绑定、解绑  - powering-off：正在关闭，实例可以绑定、解绑  - rebooting：正在重启，实例可以绑定、解绑  - delete_wait：等待删除，集群与实例不允许任何操作  - NO_TASK：不展示
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets version
    *  实例的当前版本
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
    * @param string $version 实例的当前版本
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
    *  虚拟私有云
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
    * @param string $vpcId 虚拟私有云
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

