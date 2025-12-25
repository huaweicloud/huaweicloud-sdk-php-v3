<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcEip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcEip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性公网IP唯一标识
    * alias  弹性公网IP名称
    * protectedStatus  DDoss或CFW开启状态：OPEN | CLOSE
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID。
    * ipVersion  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    * publicIpAddress  弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  IPv4时无此字段，IPv6时为申请到的弹性公网IP
    * publicipPoolName  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    * publicipPoolId  公网IP所属网络的ID，publicip_pool_name对应的网络ID
    * status  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
    * description  弹性公网IP描述信息
    * tags  功能说明：用户标签。（默认不显示）
    * type  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
    * vnic  vnic
    * bandwidth  bandwidth
    * lockStatus  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
    * associateInstanceType  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
    * associateInstanceId  公网IP绑定的实例ID
    * allowShareBandwidthTypes  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    * createdAt  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * publicBorderGroup  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'alias' => 'string',
            'protectedStatus' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'ipVersion' => 'int',
            'publicIpAddress' => 'string',
            'publicIpv6Address' => 'string',
            'publicipPoolName' => 'string',
            'publicipPoolId' => 'string',
            'status' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'type' => 'string',
            'vnic' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipVnic',
            'bandwidth' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipBandwidth',
            'lockStatus' => 'string',
            'associateInstanceType' => 'string',
            'associateInstanceId' => 'string',
            'allowShareBandwidthTypes' => 'string[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'publicBorderGroup' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性公网IP唯一标识
    * alias  弹性公网IP名称
    * protectedStatus  DDoss或CFW开启状态：OPEN | CLOSE
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID。
    * ipVersion  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    * publicIpAddress  弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  IPv4时无此字段，IPv6时为申请到的弹性公网IP
    * publicipPoolName  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    * publicipPoolId  公网IP所属网络的ID，publicip_pool_name对应的网络ID
    * status  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
    * description  弹性公网IP描述信息
    * tags  功能说明：用户标签。（默认不显示）
    * type  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
    * vnic  vnic
    * bandwidth  bandwidth
    * lockStatus  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
    * associateInstanceType  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
    * associateInstanceId  公网IP绑定的实例ID
    * allowShareBandwidthTypes  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    * createdAt  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * publicBorderGroup  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'alias' => null,
        'protectedStatus' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'ipVersion' => 'int32',
        'publicIpAddress' => null,
        'publicIpv6Address' => null,
        'publicipPoolName' => null,
        'publicipPoolId' => null,
        'status' => null,
        'description' => null,
        'tags' => null,
        'type' => null,
        'vnic' => null,
        'bandwidth' => null,
        'lockStatus' => null,
        'associateInstanceType' => null,
        'associateInstanceId' => null,
        'allowShareBandwidthTypes' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'publicBorderGroup' => null
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
    * id  弹性公网IP唯一标识
    * alias  弹性公网IP名称
    * protectedStatus  DDoss或CFW开启状态：OPEN | CLOSE
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID。
    * ipVersion  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    * publicIpAddress  弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  IPv4时无此字段，IPv6时为申请到的弹性公网IP
    * publicipPoolName  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    * publicipPoolId  公网IP所属网络的ID，publicip_pool_name对应的网络ID
    * status  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
    * description  弹性公网IP描述信息
    * tags  功能说明：用户标签。（默认不显示）
    * type  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
    * vnic  vnic
    * bandwidth  bandwidth
    * lockStatus  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
    * associateInstanceType  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
    * associateInstanceId  公网IP绑定的实例ID
    * allowShareBandwidthTypes  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    * createdAt  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * publicBorderGroup  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'alias' => 'alias',
            'protectedStatus' => 'protected_status',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipVersion' => 'ip_version',
            'publicIpAddress' => 'public_ip_address',
            'publicIpv6Address' => 'public_ipv6_address',
            'publicipPoolName' => 'publicip_pool_name',
            'publicipPoolId' => 'publicip_pool_id',
            'status' => 'status',
            'description' => 'description',
            'tags' => 'tags',
            'type' => 'type',
            'vnic' => 'vnic',
            'bandwidth' => 'bandwidth',
            'lockStatus' => 'lock_status',
            'associateInstanceType' => 'associate_instance_type',
            'associateInstanceId' => 'associate_instance_id',
            'allowShareBandwidthTypes' => 'allow_share_bandwidth_types',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'publicBorderGroup' => 'public_border_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性公网IP唯一标识
    * alias  弹性公网IP名称
    * protectedStatus  DDoss或CFW开启状态：OPEN | CLOSE
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID。
    * ipVersion  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    * publicIpAddress  弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  IPv4时无此字段，IPv6时为申请到的弹性公网IP
    * publicipPoolName  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    * publicipPoolId  公网IP所属网络的ID，publicip_pool_name对应的网络ID
    * status  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
    * description  弹性公网IP描述信息
    * tags  功能说明：用户标签。（默认不显示）
    * type  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
    * vnic  vnic
    * bandwidth  bandwidth
    * lockStatus  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
    * associateInstanceType  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
    * associateInstanceId  公网IP绑定的实例ID
    * allowShareBandwidthTypes  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    * createdAt  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * publicBorderGroup  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'alias' => 'setAlias',
            'protectedStatus' => 'setProtectedStatus',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipVersion' => 'setIpVersion',
            'publicIpAddress' => 'setPublicIpAddress',
            'publicIpv6Address' => 'setPublicIpv6Address',
            'publicipPoolName' => 'setPublicipPoolName',
            'publicipPoolId' => 'setPublicipPoolId',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'type' => 'setType',
            'vnic' => 'setVnic',
            'bandwidth' => 'setBandwidth',
            'lockStatus' => 'setLockStatus',
            'associateInstanceType' => 'setAssociateInstanceType',
            'associateInstanceId' => 'setAssociateInstanceId',
            'allowShareBandwidthTypes' => 'setAllowShareBandwidthTypes',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'publicBorderGroup' => 'setPublicBorderGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性公网IP唯一标识
    * alias  弹性公网IP名称
    * protectedStatus  DDoss或CFW开启状态：OPEN | CLOSE
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID。
    * ipVersion  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    * publicIpAddress  弹性公网IP或者IPv6端口的地址
    * publicIpv6Address  IPv4时无此字段，IPv6时为申请到的弹性公网IP
    * publicipPoolName  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    * publicipPoolId  公网IP所属网络的ID，publicip_pool_name对应的网络ID
    * status  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
    * description  弹性公网IP描述信息
    * tags  功能说明：用户标签。（默认不显示）
    * type  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
    * vnic  vnic
    * bandwidth  bandwidth
    * lockStatus  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
    * associateInstanceType  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
    * associateInstanceId  公网IP绑定的实例ID
    * allowShareBandwidthTypes  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    * createdAt  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * updatedAt  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    * publicBorderGroup  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'alias' => 'getAlias',
            'protectedStatus' => 'getProtectedStatus',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipVersion' => 'getIpVersion',
            'publicIpAddress' => 'getPublicIpAddress',
            'publicIpv6Address' => 'getPublicIpv6Address',
            'publicipPoolName' => 'getPublicipPoolName',
            'publicipPoolId' => 'getPublicipPoolId',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'type' => 'getType',
            'vnic' => 'getVnic',
            'bandwidth' => 'getBandwidth',
            'lockStatus' => 'getLockStatus',
            'associateInstanceType' => 'getAssociateInstanceType',
            'associateInstanceId' => 'getAssociateInstanceId',
            'allowShareBandwidthTypes' => 'getAllowShareBandwidthTypes',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'publicBorderGroup' => 'getPublicBorderGroup'
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
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['protectedStatus'] = isset($data['protectedStatus']) ? $data['protectedStatus'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['publicIpv6Address'] = isset($data['publicIpv6Address']) ? $data['publicIpv6Address'] : null;
        $this->container['publicipPoolName'] = isset($data['publicipPoolName']) ? $data['publicipPoolName'] : null;
        $this->container['publicipPoolId'] = isset($data['publicipPoolId']) ? $data['publicipPoolId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vnic'] = isset($data['vnic']) ? $data['vnic'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['associateInstanceId'] = isset($data['associateInstanceId']) ? $data['associateInstanceId'] : null;
        $this->container['allowShareBandwidthTypes'] = isset($data['allowShareBandwidthTypes']) ? $data['allowShareBandwidthTypes'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
            if ((mb_strlen($this->container['alias']) > 128)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['alias']) < 0)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectedStatus'] === null) {
            $invalidProperties[] = "'protectedStatus' can't be null";
        }
            if ((mb_strlen($this->container['protectedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protectedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
            if (($this->container['ipVersion'] >= 6)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be smaller than 6.";
            }
            if (($this->container['ipVersion'] <= 4)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be bigger than 4.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) > 32)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIpv6Address']) && (mb_strlen($this->container['publicIpv6Address']) > 32)) {
                $invalidProperties[] = "invalid value for 'publicIpv6Address', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['publicIpv6Address']) && (mb_strlen($this->container['publicIpv6Address']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpv6Address', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicipPoolName']) && (mb_strlen($this->container['publicipPoolName']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicipPoolName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicipPoolName']) && (mb_strlen($this->container['publicipPoolName']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicipPoolName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicipPoolId']) && (mb_strlen($this->container['publicipPoolId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipPoolId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicipPoolId']) && (mb_strlen($this->container['publicipPoolId']) < 32)) {
                $invalidProperties[] = "invalid value for 'publicipPoolId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) > 36)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lockStatus']) && (mb_strlen($this->container['lockStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'lockStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['associateInstanceType']) && (mb_strlen($this->container['associateInstanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['associateInstanceId']) && (mb_strlen($this->container['associateInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associateInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 36)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
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
    *  弹性公网IP唯一标识
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
    * @param string $id 弹性公网IP唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets alias
    *  弹性公网IP名称
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string $alias 弹性公网IP名称
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets protectedStatus
    *  DDoss或CFW开启状态：OPEN | CLOSE
    *
    * @return string
    */
    public function getProtectedStatus()
    {
        return $this->container['protectedStatus'];
    }

    /**
    * Sets protectedStatus
    *
    * @param string $protectedStatus DDoss或CFW开启状态：OPEN | CLOSE
    *
    * @return $this
    */
    public function setProtectedStatus($protectedStatus)
    {
        $this->container['protectedStatus'] = $protectedStatus;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion IP版本信息 取值范围： 4：公网IP地址为public_ip_address地址 6：公网IP地址为public_ipv6_address地址
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
    *  弹性公网IP或者IPv6端口的地址
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
    * @param string|null $publicIpAddress 弹性公网IP或者IPv6端口的地址
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
    *  IPv4时无此字段，IPv6时为申请到的弹性公网IP
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
    * @param string|null $publicIpv6Address IPv4时无此字段，IPv6时为申请到的弹性公网IP
    *
    * @return $this
    */
    public function setPublicIpv6Address($publicIpv6Address)
    {
        $this->container['publicIpv6Address'] = $publicIpv6Address;
        return $this;
    }

    /**
    * Gets publicipPoolName
    *  弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
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
    * @param string|null $publicipPoolName 弹性公网IP的网络类型, 包括公共池类型，如5_bgp/5_sbgp...，和用户购买的专属池。
    *
    * @return $this
    */
    public function setPublicipPoolName($publicipPoolName)
    {
        $this->container['publicipPoolName'] = $publicipPoolName;
        return $this;
    }

    /**
    * Gets publicipPoolId
    *  公网IP所属网络的ID，publicip_pool_name对应的网络ID
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
    * @param string|null $publicipPoolId 公网IP所属网络的ID，publicip_pool_name对应的网络ID
    *
    * @return $this
    */
    public function setPublicipPoolId($publicipPoolId)
    {
        $this->container['publicipPoolId'] = $publicipPoolId;
        return $this;
    }

    /**
    * Gets status
    *  弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
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
    * @param string $status 弹性公网IP的状态 取值范围： FREEZED：冻结 BIND_ERROR：绑定失败 BINDING：绑定中 PENDING_DELETE：释放中 PENDING_CREATE：创建中 NOTIFYING：创建中 NOTIFY_DELETE：释放中 PENDING_UPDATE：更新中 DOWN：未绑定 ACTIVE：绑定 ELB：绑定ELB VPN：绑定VPN ERROR：失败
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
    *  弹性公网IP描述信息
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
    * @param string|null $description 弹性公网IP描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  功能说明：用户标签。（默认不显示）
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 功能说明：用户标签。（默认不显示）
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
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
    * @param string|null $type 弹性公网IP类型 枚举值： EIP DUALSTACK DUALSTACK_SUBNET
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipVnic|null
    */
    public function getVnic()
    {
        return $this->container['vnic'];
    }

    /**
    * Sets vnic
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipVnic|null $vnic vnic
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipBandwidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcEipBandwidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets lockStatus
    *  记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
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
    * @param string|null $lockStatus 记录公网IP当前的冻结状态 约束：metadata类型，标识欠费冻结、公安冻结 取值范围： police locked
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
    *  公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
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
    * @param string|null $associateInstanceType 公网IP绑定的实例类型 取值范围： PORT NATGW ELB ELBV1 VPN null
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
    *  公网IP绑定的实例ID
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
    * @param string|null $associateInstanceId 公网IP绑定的实例ID
    *
    * @return $this
    */
    public function setAssociateInstanceId($associateInstanceId)
    {
        $this->container['associateInstanceId'] = $associateInstanceId;
        return $this;
    }

    /**
    * Gets allowShareBandwidthTypes
    *  表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @return string[]|null
    */
    public function getAllowShareBandwidthTypes()
    {
        return $this->container['allowShareBandwidthTypes'];
    }

    /**
    * Sets allowShareBandwidthTypes
    *
    * @param string[]|null $allowShareBandwidthTypes 表示此publicip可以加入的共享带宽类型列表，如果为空列表，则表示该 publicip不能加入任何共享带宽 约束：publicip只能加入到有该带宽类型的共享带宽中
    *
    * @return $this
    */
    public function setAllowShareBandwidthTypes($allowShareBandwidthTypes)
    {
        $this->container['allowShareBandwidthTypes'] = $allowShareBandwidthTypes;
        return $this;
    }

    /**
    * Gets createdAt
    *  资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 资产创建UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
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
    *  资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 资产更新UTC时间 格式：yyyy-MM-ddTHH:mm:ssZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
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
    * @param string|null $publicBorderGroup 表示中心站点资产或者边缘站点资产 取值范围： center、边缘站点名称 约束：publicip只能绑定该字段相同的资产
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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

