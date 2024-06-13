<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicipInstanceResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicipInstanceResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：弹性公网IP唯一标识
    * projectId  功能说明：项目ID
    * ipVersion  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    * publicIpAddress  功能说明：弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * status  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    * description  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    * publicBorderGroup  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    * createdAt  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * type  功能说明：弹性公网IP类型
    * vnic  vnic
    * bandwidth  bandwidth
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * billingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * lockStatus  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    * associateInstanceType  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    * associateInstanceId  功能说明：公网IP绑定的实例ID
    * publicipPoolId  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    * publicipPoolName  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    * alias  功能说明：弹性公网IP名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'ipVersion' => 'int',
            'publicIpAddress' => 'string',
            'publicIpv6Address' => 'string',
            'status' => 'string',
            'description' => 'string',
            'publicBorderGroup' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'type' => 'string',
            'vnic' => '\HuaweiCloud\SDK\Eip\V3\Model\VnicInfo',
            'bandwidth' => '\HuaweiCloud\SDK\Eip\V3\Model\PublicipBandwidthInfo',
            'enterpriseProjectId' => 'string',
            'billingInfo' => 'string',
            'lockStatus' => 'string',
            'associateInstanceType' => 'string',
            'associateInstanceId' => 'string',
            'publicipPoolId' => 'string',
            'publicipPoolName' => 'string',
            'alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：弹性公网IP唯一标识
    * projectId  功能说明：项目ID
    * ipVersion  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    * publicIpAddress  功能说明：弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * status  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    * description  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    * publicBorderGroup  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    * createdAt  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * type  功能说明：弹性公网IP类型
    * vnic  vnic
    * bandwidth  bandwidth
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * billingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * lockStatus  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    * associateInstanceType  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    * associateInstanceId  功能说明：公网IP绑定的实例ID
    * publicipPoolId  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    * publicipPoolName  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    * alias  功能说明：弹性公网IP名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'ipVersion' => 'int32',
        'publicIpAddress' => 'ipv4',
        'publicIpv6Address' => 'ipv6',
        'status' => null,
        'description' => null,
        'publicBorderGroup' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'type' => null,
        'vnic' => null,
        'bandwidth' => null,
        'enterpriseProjectId' => null,
        'billingInfo' => null,
        'lockStatus' => null,
        'associateInstanceType' => null,
        'associateInstanceId' => null,
        'publicipPoolId' => null,
        'publicipPoolName' => null,
        'alias' => null
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
    * id  功能说明：弹性公网IP唯一标识
    * projectId  功能说明：项目ID
    * ipVersion  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    * publicIpAddress  功能说明：弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * status  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    * description  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    * publicBorderGroup  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    * createdAt  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * type  功能说明：弹性公网IP类型
    * vnic  vnic
    * bandwidth  bandwidth
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * billingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * lockStatus  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    * associateInstanceType  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    * associateInstanceId  功能说明：公网IP绑定的实例ID
    * publicipPoolId  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    * publicipPoolName  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    * alias  功能说明：弹性公网IP名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'ipVersion' => 'ip_version',
            'publicIpAddress' => 'public_ip_address',
            'publicIpv6Address' => 'public_ipv6_address',
            'status' => 'status',
            'description' => 'description',
            'publicBorderGroup' => 'public_border_group',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'type' => 'type',
            'vnic' => 'vnic',
            'bandwidth' => 'bandwidth',
            'enterpriseProjectId' => 'enterprise_project_id',
            'billingInfo' => 'billing_info',
            'lockStatus' => 'lock_status',
            'associateInstanceType' => 'associate_instance_type',
            'associateInstanceId' => 'associate_instance_id',
            'publicipPoolId' => 'publicip_pool_id',
            'publicipPoolName' => 'publicip_pool_name',
            'alias' => 'alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：弹性公网IP唯一标识
    * projectId  功能说明：项目ID
    * ipVersion  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    * publicIpAddress  功能说明：弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * status  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    * description  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    * publicBorderGroup  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    * createdAt  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * type  功能说明：弹性公网IP类型
    * vnic  vnic
    * bandwidth  bandwidth
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * billingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * lockStatus  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    * associateInstanceType  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    * associateInstanceId  功能说明：公网IP绑定的实例ID
    * publicipPoolId  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    * publicipPoolName  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    * alias  功能说明：弹性公网IP名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'ipVersion' => 'setIpVersion',
            'publicIpAddress' => 'setPublicIpAddress',
            'publicIpv6Address' => 'setPublicIpv6Address',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'type' => 'setType',
            'vnic' => 'setVnic',
            'bandwidth' => 'setBandwidth',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'billingInfo' => 'setBillingInfo',
            'lockStatus' => 'setLockStatus',
            'associateInstanceType' => 'setAssociateInstanceType',
            'associateInstanceId' => 'setAssociateInstanceId',
            'publicipPoolId' => 'setPublicipPoolId',
            'publicipPoolName' => 'setPublicipPoolName',
            'alias' => 'setAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：弹性公网IP唯一标识
    * projectId  功能说明：项目ID
    * ipVersion  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    * publicIpAddress  功能说明：弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * status  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    * description  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    * publicBorderGroup  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    * createdAt  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    * type  功能说明：弹性公网IP类型
    * vnic  vnic
    * bandwidth  bandwidth
    * enterpriseProjectId  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    * billingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * lockStatus  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    * associateInstanceType  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    * associateInstanceId  功能说明：公网IP绑定的实例ID
    * publicipPoolId  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    * publicipPoolName  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    * alias  功能说明：弹性公网IP名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'ipVersion' => 'getIpVersion',
            'publicIpAddress' => 'getPublicIpAddress',
            'publicIpv6Address' => 'getPublicIpv6Address',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'type' => 'getType',
            'vnic' => 'getVnic',
            'bandwidth' => 'getBandwidth',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'billingInfo' => 'getBillingInfo',
            'lockStatus' => 'getLockStatus',
            'associateInstanceType' => 'getAssociateInstanceType',
            'associateInstanceId' => 'getAssociateInstanceId',
            'publicipPoolId' => 'getPublicipPoolId',
            'publicipPoolName' => 'getPublicipPoolName',
            'alias' => 'getAlias'
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    const STATUS_FREEZED = 'FREEZED';
    const STATUS_BIND_ERROR = 'BIND_ERROR';
    const STATUS_BINDING = 'BINDING';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_NOTIFYING = 'NOTIFYING';
    const STATUS_NOTIFY_DELETE = 'NOTIFY_DELETE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ELB = 'ELB';
    const STATUS_ERROR = 'ERROR';
    const STATUS_VPN = 'VPN';
    const TYPE_EIP = 'EIP';
    const TYPE_DUALSTACK = 'DUALSTACK';
    const TYPE_DUALSTACK_SUBNET = 'DUALSTACK_SUBNET';
    const ASSOCIATE_INSTANCE_TYPE_PORT = 'PORT';
    const ASSOCIATE_INSTANCE_TYPE_NATGW = 'NATGW';
    const ASSOCIATE_INSTANCE_TYPE_ELB = 'ELB';
    const ASSOCIATE_INSTANCE_TYPE_ELBV1 = 'ELBV1';
    const ASSOCIATE_INSTANCE_TYPE_VPN = 'VPN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_FREEZED,
            self::STATUS_BIND_ERROR,
            self::STATUS_BINDING,
            self::STATUS_PENDING_DELETE,
            self::STATUS_PENDING_CREATE,
            self::STATUS_NOTIFYING,
            self::STATUS_NOTIFY_DELETE,
            self::STATUS_PENDING_UPDATE,
            self::STATUS_DOWN,
            self::STATUS_ACTIVE,
            self::STATUS_ELB,
            self::STATUS_ERROR,
            self::STATUS_VPN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EIP,
            self::TYPE_DUALSTACK,
            self::TYPE_DUALSTACK_SUBNET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssociateInstanceTypeAllowableValues()
    {
        return [
            self::ASSOCIATE_INSTANCE_TYPE_PORT,
            self::ASSOCIATE_INSTANCE_TYPE_NATGW,
            self::ASSOCIATE_INSTANCE_TYPE_ELB,
            self::ASSOCIATE_INSTANCE_TYPE_ELBV1,
            self::ASSOCIATE_INSTANCE_TYPE_VPN,
        ];
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['publicIpv6Address'] = isset($data['publicIpv6Address']) ? $data['publicIpv6Address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vnic'] = isset($data['vnic']) ? $data['vnic'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['associateInstanceId'] = isset($data['associateInstanceId']) ? $data['associateInstanceId'] : null;
        $this->container['publicipPoolId'] = isset($data['publicipPoolId']) ? $data['publicipPoolId'] : null;
        $this->container['publicipPoolName'] = isset($data['publicipPoolName']) ? $data['publicipPoolName'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIpv6Address']) && (mb_strlen($this->container['publicIpv6Address']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIpv6Address', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicIpv6Address']) && (mb_strlen($this->container['publicIpv6Address']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpv6Address', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 256)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssociateInstanceTypeAllowableValues();
                if (!is_null($this->container['associateInstanceType']) && !in_array($this->container['associateInstanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'associateInstanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicipPoolId']) && (mb_strlen($this->container['publicipPoolId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipPoolId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicipPoolId']) && (mb_strlen($this->container['publicipPoolId']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicipPoolId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicipPoolName']) && (mb_strlen($this->container['publicipPoolName']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicipPoolName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicipPoolName']) && (mb_strlen($this->container['publicipPoolName']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicipPoolName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 64)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 0)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 0.";
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
    *  功能说明：弹性公网IP唯一标识
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
    * @param string|null $id 功能说明：弹性公网IP唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 功能说明：项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion 功能说明：IP版本信息 取值范围：4表示公网IP地址为public_ip_address地址;6表示公网IP地址为public_ipv6_address地址\"
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  功能说明：弹性公网IP或者IPv6端口的地址
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress 功能说明：弹性公网IP或者IPv6端口的地址
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets publicIpv6Address
    *  功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    *
    * @return string|null
    */
    public function getPublicIpv6Address()
    {
        return $this->container['publicIpv6Address'];
    }

    /**
    * Sets publicIpv6Address
    *
    * @param string|null $publicIpv6Address 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicIpv6Address($publicIpv6Address)
    {
        $this->container['publicIpv6Address'] = $publicIpv6Address;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
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
    * @param string|null $status 功能说明：弹性公网IP的状态  取值范围：冻结FREEZED，绑定失败BIND_ERROR，绑定中BINDING，释放中PENDING_DELETE， 创建中PENDING_CREATE，创建中NOTIFYING，释放中NOTIFY_DELETE，更新中PENDING_UPDATE， 未绑定DOWN ，绑定ACTIVE，绑定ELB，绑定VPN，失败ERROR。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：弹性公网IP描述信息 约束：用户以自定义方式标识资源，系统不感知
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 功能说明：表示中心站点资源或者边缘站点资源 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资源
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 功能说明：资源创建UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 功能说明：资源更新UTC时间 格式:yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：弹性公网IP类型
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
    * @param string|null $type 功能说明：弹性公网IP类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vnic
    *  vnic
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\VnicInfo|null
    */
    public function getVnic()
    {
        return $this->container['vnic'];
    }

    /**
    * Sets vnic
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\VnicInfo|null $vnic vnic
    *
    * @return $this
    */
    public function setVnic($vnic)
    {
        $this->container['vnic'] = $vnic;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\PublicipBandwidthInfo|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\PublicipBandwidthInfo|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
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
    * @param string|null $enterpriseProjectId 功能说明：企业项目ID。最大长度36字节,带“-”连字符的UUID格式,或者是字符串“0”。创建弹性公网IP时,给弹性公网IP绑定企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets billingInfo
    *  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets lockStatus
    *  功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    *
    * @return string|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string|null $lockStatus 功能说明：记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围：police，locked
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets associateInstanceType
    *  功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    *
    * @return string|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string|null $associateInstanceType 功能说明：公网IP绑定的实例类型 取值范围：PORT、NATGW、ELB、ELBV1、VPN、null
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
        return $this;
    }

    /**
    * Gets associateInstanceId
    *  功能说明：公网IP绑定的实例ID
    *
    * @return string|null
    */
    public function getAssociateInstanceId()
    {
        return $this->container['associateInstanceId'];
    }

    /**
    * Sets associateInstanceId
    *
    * @param string|null $associateInstanceId 功能说明：公网IP绑定的实例ID
    *
    * @return $this
    */
    public function setAssociateInstanceId($associateInstanceId)
    {
        $this->container['associateInstanceId'] = $associateInstanceId;
        return $this;
    }

    /**
    * Gets publicipPoolId
    *  功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    *
    * @return string|null
    */
    public function getPublicipPoolId()
    {
        return $this->container['publicipPoolId'];
    }

    /**
    * Sets publicipPoolId
    *
    * @param string|null $publicipPoolId 功能说明：公网IP所属网络的ID。publicip_pool_name对应的网络ID
    *
    * @return $this
    */
    public function setPublicipPoolId($publicipPoolId)
    {
        $this->container['publicipPoolId'] = $publicipPoolId;
        return $this;
    }

    /**
    * Gets publicipPoolName
    *  功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    *
    * @return string|null
    */
    public function getPublicipPoolName()
    {
        return $this->container['publicipPoolName'];
    }

    /**
    * Sets publicipPoolName
    *
    * @param string|null $publicipPoolName 功能说明：弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。 专属池见publcip_pool相关接口
    *
    * @return $this
    */
    public function setPublicipPoolName($publicipPoolName)
    {
        $this->container['publicipPoolName'] = $publicipPoolName;
        return $this;
    }

    /**
    * Gets alias
    *  功能说明：弹性公网IP名称
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
    * @param string|null $alias 功能说明：弹性公网IP名称
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
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

