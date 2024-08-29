<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectGeipBindingsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectGeipBindingsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  GEIP所处的出口位置
    * instanceType  绑定的实例类型
    * instanceId  绑定的实例id
    * instanceVpcId  绑定的实例vpcid
    * gcbandwidthId  骨干带宽的uuid
    * gcbandwidthAdminStatus  骨干带宽的状态
    * gcbandwidthSize  骨干带宽的大小
    * gcbandwidthSlaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * gcbandwidthDscp  线路质量金银铜对应的DSCP值
    * vnicPrivateIpAddress  绑定实例的ip地址
    * vnicVpcId  绑定实例所在的vpcid
    * vnicPortId  绑定实例port的uuid
    * vnicDeviceId  绑定实例port对应的实例id
    * vnicDeviceOwner  绑定实例port对应的实例所有者
    * vnicDeviceOwnerPrefixlike  绑定实例port对应的实例所有者的前缀
    * vnicInstanceType  绑定实例port对应的实例类型
    * vnicInstanceId  绑定实例port对应的实例id
    * sortKey  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * offset  分页起始点
    * marker  分页起始点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'geipId' => 'string',
            'geipIpAddress' => 'string',
            'publicBorderGroup' => 'string',
            'instanceType' => 'string',
            'instanceId' => 'string',
            'instanceVpcId' => 'string',
            'gcbandwidthId' => 'string',
            'gcbandwidthAdminStatus' => 'string',
            'gcbandwidthSize' => 'int',
            'gcbandwidthSlaLevel' => 'string',
            'gcbandwidthDscp' => 'int',
            'vnicPrivateIpAddress' => 'string',
            'vnicVpcId' => 'string',
            'vnicPortId' => 'string',
            'vnicDeviceId' => 'string',
            'vnicDeviceOwner' => 'string',
            'vnicDeviceOwnerPrefixlike' => 'string',
            'vnicInstanceType' => 'string',
            'vnicInstanceId' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  GEIP所处的出口位置
    * instanceType  绑定的实例类型
    * instanceId  绑定的实例id
    * instanceVpcId  绑定的实例vpcid
    * gcbandwidthId  骨干带宽的uuid
    * gcbandwidthAdminStatus  骨干带宽的状态
    * gcbandwidthSize  骨干带宽的大小
    * gcbandwidthSlaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * gcbandwidthDscp  线路质量金银铜对应的DSCP值
    * vnicPrivateIpAddress  绑定实例的ip地址
    * vnicVpcId  绑定实例所在的vpcid
    * vnicPortId  绑定实例port的uuid
    * vnicDeviceId  绑定实例port对应的实例id
    * vnicDeviceOwner  绑定实例port对应的实例所有者
    * vnicDeviceOwnerPrefixlike  绑定实例port对应的实例所有者的前缀
    * vnicInstanceType  绑定实例port对应的实例类型
    * vnicInstanceId  绑定实例port对应的实例id
    * sortKey  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * offset  分页起始点
    * marker  分页起始点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'geipId' => null,
        'geipIpAddress' => null,
        'publicBorderGroup' => null,
        'instanceType' => null,
        'instanceId' => null,
        'instanceVpcId' => null,
        'gcbandwidthId' => null,
        'gcbandwidthAdminStatus' => null,
        'gcbandwidthSize' => 'int32',
        'gcbandwidthSlaLevel' => null,
        'gcbandwidthDscp' => 'int32',
        'vnicPrivateIpAddress' => null,
        'vnicVpcId' => null,
        'vnicPortId' => null,
        'vnicDeviceId' => null,
        'vnicDeviceOwner' => null,
        'vnicDeviceOwnerPrefixlike' => null,
        'vnicInstanceType' => null,
        'vnicInstanceId' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null
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
    * fields  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  GEIP所处的出口位置
    * instanceType  绑定的实例类型
    * instanceId  绑定的实例id
    * instanceVpcId  绑定的实例vpcid
    * gcbandwidthId  骨干带宽的uuid
    * gcbandwidthAdminStatus  骨干带宽的状态
    * gcbandwidthSize  骨干带宽的大小
    * gcbandwidthSlaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * gcbandwidthDscp  线路质量金银铜对应的DSCP值
    * vnicPrivateIpAddress  绑定实例的ip地址
    * vnicVpcId  绑定实例所在的vpcid
    * vnicPortId  绑定实例port的uuid
    * vnicDeviceId  绑定实例port对应的实例id
    * vnicDeviceOwner  绑定实例port对应的实例所有者
    * vnicDeviceOwnerPrefixlike  绑定实例port对应的实例所有者的前缀
    * vnicInstanceType  绑定实例port对应的实例类型
    * vnicInstanceId  绑定实例port对应的实例id
    * sortKey  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * offset  分页起始点
    * marker  分页起始点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'geipId' => 'geip_id',
            'geipIpAddress' => 'geip_ip_address',
            'publicBorderGroup' => 'public_border_group',
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'instanceVpcId' => 'instance_vpc_id',
            'gcbandwidthId' => 'gcbandwidth.id',
            'gcbandwidthAdminStatus' => 'gcbandwidth.admin_status',
            'gcbandwidthSize' => 'gcbandwidth.size',
            'gcbandwidthSlaLevel' => 'gcbandwidth.sla_level',
            'gcbandwidthDscp' => 'gcbandwidth.dscp',
            'vnicPrivateIpAddress' => 'vnic.private_ip_address',
            'vnicVpcId' => 'vnic.vpc_id',
            'vnicPortId' => 'vnic.port_id',
            'vnicDeviceId' => 'vnic.device_id',
            'vnicDeviceOwner' => 'vnic.device_owner',
            'vnicDeviceOwnerPrefixlike' => 'vnic.device_owner_prefixlike',
            'vnicInstanceType' => 'vnic.instance_type',
            'vnicInstanceId' => 'vnic.instance_id',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  GEIP所处的出口位置
    * instanceType  绑定的实例类型
    * instanceId  绑定的实例id
    * instanceVpcId  绑定的实例vpcid
    * gcbandwidthId  骨干带宽的uuid
    * gcbandwidthAdminStatus  骨干带宽的状态
    * gcbandwidthSize  骨干带宽的大小
    * gcbandwidthSlaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * gcbandwidthDscp  线路质量金银铜对应的DSCP值
    * vnicPrivateIpAddress  绑定实例的ip地址
    * vnicVpcId  绑定实例所在的vpcid
    * vnicPortId  绑定实例port的uuid
    * vnicDeviceId  绑定实例port对应的实例id
    * vnicDeviceOwner  绑定实例port对应的实例所有者
    * vnicDeviceOwnerPrefixlike  绑定实例port对应的实例所有者的前缀
    * vnicInstanceType  绑定实例port对应的实例类型
    * vnicInstanceId  绑定实例port对应的实例id
    * sortKey  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * offset  分页起始点
    * marker  分页起始点
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'geipId' => 'setGeipId',
            'geipIpAddress' => 'setGeipIpAddress',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'instanceVpcId' => 'setInstanceVpcId',
            'gcbandwidthId' => 'setGcbandwidthId',
            'gcbandwidthAdminStatus' => 'setGcbandwidthAdminStatus',
            'gcbandwidthSize' => 'setGcbandwidthSize',
            'gcbandwidthSlaLevel' => 'setGcbandwidthSlaLevel',
            'gcbandwidthDscp' => 'setGcbandwidthDscp',
            'vnicPrivateIpAddress' => 'setVnicPrivateIpAddress',
            'vnicVpcId' => 'setVnicVpcId',
            'vnicPortId' => 'setVnicPortId',
            'vnicDeviceId' => 'setVnicDeviceId',
            'vnicDeviceOwner' => 'setVnicDeviceOwner',
            'vnicDeviceOwnerPrefixlike' => 'setVnicDeviceOwnerPrefixlike',
            'vnicInstanceType' => 'setVnicInstanceType',
            'vnicInstanceId' => 'setVnicInstanceId',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    * geipId  GEIP的uuid
    * geipIpAddress  GEIP的ip地址
    * publicBorderGroup  GEIP所处的出口位置
    * instanceType  绑定的实例类型
    * instanceId  绑定的实例id
    * instanceVpcId  绑定的实例vpcid
    * gcbandwidthId  骨干带宽的uuid
    * gcbandwidthAdminStatus  骨干带宽的状态
    * gcbandwidthSize  骨干带宽的大小
    * gcbandwidthSlaLevel  描述网络等级，从高到低分为铂金、金、银、铜
    * gcbandwidthDscp  线路质量金银铜对应的DSCP值
    * vnicPrivateIpAddress  绑定实例的ip地址
    * vnicVpcId  绑定实例所在的vpcid
    * vnicPortId  绑定实例port的uuid
    * vnicDeviceId  绑定实例port对应的实例id
    * vnicDeviceOwner  绑定实例port对应的实例所有者
    * vnicDeviceOwnerPrefixlike  绑定实例port对应的实例所有者的前缀
    * vnicInstanceType  绑定实例port对应的实例类型
    * vnicInstanceId  绑定实例port对应的实例id
    * sortKey  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * offset  分页起始点
    * marker  分页起始点
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'geipId' => 'getGeipId',
            'geipIpAddress' => 'getGeipIpAddress',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'instanceVpcId' => 'getInstanceVpcId',
            'gcbandwidthId' => 'getGcbandwidthId',
            'gcbandwidthAdminStatus' => 'getGcbandwidthAdminStatus',
            'gcbandwidthSize' => 'getGcbandwidthSize',
            'gcbandwidthSlaLevel' => 'getGcbandwidthSlaLevel',
            'gcbandwidthDscp' => 'getGcbandwidthDscp',
            'vnicPrivateIpAddress' => 'getVnicPrivateIpAddress',
            'vnicVpcId' => 'getVnicVpcId',
            'vnicPortId' => 'getVnicPortId',
            'vnicDeviceId' => 'getVnicDeviceId',
            'vnicDeviceOwner' => 'getVnicDeviceOwner',
            'vnicDeviceOwnerPrefixlike' => 'getVnicDeviceOwnerPrefixlike',
            'vnicInstanceType' => 'getVnicInstanceType',
            'vnicInstanceId' => 'getVnicInstanceId',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['geipId'] = isset($data['geipId']) ? $data['geipId'] : null;
        $this->container['geipIpAddress'] = isset($data['geipIpAddress']) ? $data['geipIpAddress'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceVpcId'] = isset($data['instanceVpcId']) ? $data['instanceVpcId'] : null;
        $this->container['gcbandwidthId'] = isset($data['gcbandwidthId']) ? $data['gcbandwidthId'] : null;
        $this->container['gcbandwidthAdminStatus'] = isset($data['gcbandwidthAdminStatus']) ? $data['gcbandwidthAdminStatus'] : null;
        $this->container['gcbandwidthSize'] = isset($data['gcbandwidthSize']) ? $data['gcbandwidthSize'] : null;
        $this->container['gcbandwidthSlaLevel'] = isset($data['gcbandwidthSlaLevel']) ? $data['gcbandwidthSlaLevel'] : null;
        $this->container['gcbandwidthDscp'] = isset($data['gcbandwidthDscp']) ? $data['gcbandwidthDscp'] : null;
        $this->container['vnicPrivateIpAddress'] = isset($data['vnicPrivateIpAddress']) ? $data['vnicPrivateIpAddress'] : null;
        $this->container['vnicVpcId'] = isset($data['vnicVpcId']) ? $data['vnicVpcId'] : null;
        $this->container['vnicPortId'] = isset($data['vnicPortId']) ? $data['vnicPortId'] : null;
        $this->container['vnicDeviceId'] = isset($data['vnicDeviceId']) ? $data['vnicDeviceId'] : null;
        $this->container['vnicDeviceOwner'] = isset($data['vnicDeviceOwner']) ? $data['vnicDeviceOwner'] : null;
        $this->container['vnicDeviceOwnerPrefixlike'] = isset($data['vnicDeviceOwnerPrefixlike']) ? $data['vnicDeviceOwnerPrefixlike'] : null;
        $this->container['vnicInstanceType'] = isset($data['vnicInstanceType']) ? $data['vnicInstanceType'] : null;
        $this->container['vnicInstanceId'] = isset($data['vnicInstanceId']) ? $data['vnicInstanceId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['geipId']) && (mb_strlen($this->container['geipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'geipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['geipId']) && (mb_strlen($this->container['geipId']) < 1)) {
                $invalidProperties[] = "invalid value for 'geipId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['geipIpAddress']) && (mb_strlen($this->container['geipIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'geipIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['geipIpAddress']) && (mb_strlen($this->container['geipIpAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'geipIpAddress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceVpcId']) && (mb_strlen($this->container['instanceVpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceVpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceVpcId']) && (mb_strlen($this->container['instanceVpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceVpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbandwidthId']) && (mb_strlen($this->container['gcbandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gcbandwidthId']) && (mb_strlen($this->container['gcbandwidthId']) < 0)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbandwidthAdminStatus']) && (mb_strlen($this->container['gcbandwidthAdminStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthAdminStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['gcbandwidthAdminStatus']) && (mb_strlen($this->container['gcbandwidthAdminStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthAdminStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbandwidthSize']) && ($this->container['gcbandwidthSize'] > 999999)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthSize', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['gcbandwidthSize']) && ($this->container['gcbandwidthSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbandwidthSlaLevel']) && (mb_strlen($this->container['gcbandwidthSlaLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthSlaLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['gcbandwidthSlaLevel']) && (mb_strlen($this->container['gcbandwidthSlaLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthSlaLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gcbandwidthDscp']) && ($this->container['gcbandwidthDscp'] > 63)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthDscp', must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['gcbandwidthDscp']) && ($this->container['gcbandwidthDscp'] < 0)) {
                $invalidProperties[] = "invalid value for 'gcbandwidthDscp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicPrivateIpAddress']) && (mb_strlen($this->container['vnicPrivateIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'vnicPrivateIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vnicPrivateIpAddress']) && (mb_strlen($this->container['vnicPrivateIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicPrivateIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicVpcId']) && (mb_strlen($this->container['vnicVpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vnicVpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vnicVpcId']) && (mb_strlen($this->container['vnicVpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicVpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicPortId']) && (mb_strlen($this->container['vnicPortId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vnicPortId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vnicPortId']) && (mb_strlen($this->container['vnicPortId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicPortId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicDeviceId']) && (mb_strlen($this->container['vnicDeviceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vnicDeviceId']) && (mb_strlen($this->container['vnicDeviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicDeviceOwner']) && (mb_strlen($this->container['vnicDeviceOwner']) > 256)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwner', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vnicDeviceOwner']) && (mb_strlen($this->container['vnicDeviceOwner']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicDeviceOwnerPrefixlike']) && (mb_strlen($this->container['vnicDeviceOwnerPrefixlike']) > 256)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwnerPrefixlike', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vnicDeviceOwnerPrefixlike']) && (mb_strlen($this->container['vnicDeviceOwnerPrefixlike']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwnerPrefixlike', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicInstanceType']) && (mb_strlen($this->container['vnicInstanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'vnicInstanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vnicInstanceType']) && (mb_strlen($this->container['vnicInstanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicInstanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicInstanceId']) && (mb_strlen($this->container['vnicInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vnicInstanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vnicInstanceId']) && (mb_strlen($this->container['vnicInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
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
    * Gets fields
    *  形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 形式为\\\"fields=geip_id&fields=geip_ip_address&...\\\"，支持字段：geip_id/geip_ip_address/instance_type/instance_id/vnic/vn_list/public_border_group/gcbandwidth/version/created_at/updated_at/instance_vpc_id
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets geipId
    *  GEIP的uuid
    *
    * @return string|null
    */
    public function getGeipId()
    {
        return $this->container['geipId'];
    }

    /**
    * Sets geipId
    *
    * @param string|null $geipId GEIP的uuid
    *
    * @return $this
    */
    public function setGeipId($geipId)
    {
        $this->container['geipId'] = $geipId;
        return $this;
    }

    /**
    * Gets geipIpAddress
    *  GEIP的ip地址
    *
    * @return string|null
    */
    public function getGeipIpAddress()
    {
        return $this->container['geipIpAddress'];
    }

    /**
    * Sets geipIpAddress
    *
    * @param string|null $geipIpAddress GEIP的ip地址
    *
    * @return $this
    */
    public function setGeipIpAddress($geipIpAddress)
    {
        $this->container['geipIpAddress'] = $geipIpAddress;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  GEIP所处的出口位置
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
    * @param string|null $publicBorderGroup GEIP所处的出口位置
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets instanceType
    *  绑定的实例类型
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 绑定的实例类型
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceId
    *  绑定的实例id
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
    * @param string|null $instanceId 绑定的实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceVpcId
    *  绑定的实例vpcid
    *
    * @return string|null
    */
    public function getInstanceVpcId()
    {
        return $this->container['instanceVpcId'];
    }

    /**
    * Sets instanceVpcId
    *
    * @param string|null $instanceVpcId 绑定的实例vpcid
    *
    * @return $this
    */
    public function setInstanceVpcId($instanceVpcId)
    {
        $this->container['instanceVpcId'] = $instanceVpcId;
        return $this;
    }

    /**
    * Gets gcbandwidthId
    *  骨干带宽的uuid
    *
    * @return string|null
    */
    public function getGcbandwidthId()
    {
        return $this->container['gcbandwidthId'];
    }

    /**
    * Sets gcbandwidthId
    *
    * @param string|null $gcbandwidthId 骨干带宽的uuid
    *
    * @return $this
    */
    public function setGcbandwidthId($gcbandwidthId)
    {
        $this->container['gcbandwidthId'] = $gcbandwidthId;
        return $this;
    }

    /**
    * Gets gcbandwidthAdminStatus
    *  骨干带宽的状态
    *
    * @return string|null
    */
    public function getGcbandwidthAdminStatus()
    {
        return $this->container['gcbandwidthAdminStatus'];
    }

    /**
    * Sets gcbandwidthAdminStatus
    *
    * @param string|null $gcbandwidthAdminStatus 骨干带宽的状态
    *
    * @return $this
    */
    public function setGcbandwidthAdminStatus($gcbandwidthAdminStatus)
    {
        $this->container['gcbandwidthAdminStatus'] = $gcbandwidthAdminStatus;
        return $this;
    }

    /**
    * Gets gcbandwidthSize
    *  骨干带宽的大小
    *
    * @return int|null
    */
    public function getGcbandwidthSize()
    {
        return $this->container['gcbandwidthSize'];
    }

    /**
    * Sets gcbandwidthSize
    *
    * @param int|null $gcbandwidthSize 骨干带宽的大小
    *
    * @return $this
    */
    public function setGcbandwidthSize($gcbandwidthSize)
    {
        $this->container['gcbandwidthSize'] = $gcbandwidthSize;
        return $this;
    }

    /**
    * Gets gcbandwidthSlaLevel
    *  描述网络等级，从高到低分为铂金、金、银、铜
    *
    * @return string|null
    */
    public function getGcbandwidthSlaLevel()
    {
        return $this->container['gcbandwidthSlaLevel'];
    }

    /**
    * Sets gcbandwidthSlaLevel
    *
    * @param string|null $gcbandwidthSlaLevel 描述网络等级，从高到低分为铂金、金、银、铜
    *
    * @return $this
    */
    public function setGcbandwidthSlaLevel($gcbandwidthSlaLevel)
    {
        $this->container['gcbandwidthSlaLevel'] = $gcbandwidthSlaLevel;
        return $this;
    }

    /**
    * Gets gcbandwidthDscp
    *  线路质量金银铜对应的DSCP值
    *
    * @return int|null
    */
    public function getGcbandwidthDscp()
    {
        return $this->container['gcbandwidthDscp'];
    }

    /**
    * Sets gcbandwidthDscp
    *
    * @param int|null $gcbandwidthDscp 线路质量金银铜对应的DSCP值
    *
    * @return $this
    */
    public function setGcbandwidthDscp($gcbandwidthDscp)
    {
        $this->container['gcbandwidthDscp'] = $gcbandwidthDscp;
        return $this;
    }

    /**
    * Gets vnicPrivateIpAddress
    *  绑定实例的ip地址
    *
    * @return string|null
    */
    public function getVnicPrivateIpAddress()
    {
        return $this->container['vnicPrivateIpAddress'];
    }

    /**
    * Sets vnicPrivateIpAddress
    *
    * @param string|null $vnicPrivateIpAddress 绑定实例的ip地址
    *
    * @return $this
    */
    public function setVnicPrivateIpAddress($vnicPrivateIpAddress)
    {
        $this->container['vnicPrivateIpAddress'] = $vnicPrivateIpAddress;
        return $this;
    }

    /**
    * Gets vnicVpcId
    *  绑定实例所在的vpcid
    *
    * @return string|null
    */
    public function getVnicVpcId()
    {
        return $this->container['vnicVpcId'];
    }

    /**
    * Sets vnicVpcId
    *
    * @param string|null $vnicVpcId 绑定实例所在的vpcid
    *
    * @return $this
    */
    public function setVnicVpcId($vnicVpcId)
    {
        $this->container['vnicVpcId'] = $vnicVpcId;
        return $this;
    }

    /**
    * Gets vnicPortId
    *  绑定实例port的uuid
    *
    * @return string|null
    */
    public function getVnicPortId()
    {
        return $this->container['vnicPortId'];
    }

    /**
    * Sets vnicPortId
    *
    * @param string|null $vnicPortId 绑定实例port的uuid
    *
    * @return $this
    */
    public function setVnicPortId($vnicPortId)
    {
        $this->container['vnicPortId'] = $vnicPortId;
        return $this;
    }

    /**
    * Gets vnicDeviceId
    *  绑定实例port对应的实例id
    *
    * @return string|null
    */
    public function getVnicDeviceId()
    {
        return $this->container['vnicDeviceId'];
    }

    /**
    * Sets vnicDeviceId
    *
    * @param string|null $vnicDeviceId 绑定实例port对应的实例id
    *
    * @return $this
    */
    public function setVnicDeviceId($vnicDeviceId)
    {
        $this->container['vnicDeviceId'] = $vnicDeviceId;
        return $this;
    }

    /**
    * Gets vnicDeviceOwner
    *  绑定实例port对应的实例所有者
    *
    * @return string|null
    */
    public function getVnicDeviceOwner()
    {
        return $this->container['vnicDeviceOwner'];
    }

    /**
    * Sets vnicDeviceOwner
    *
    * @param string|null $vnicDeviceOwner 绑定实例port对应的实例所有者
    *
    * @return $this
    */
    public function setVnicDeviceOwner($vnicDeviceOwner)
    {
        $this->container['vnicDeviceOwner'] = $vnicDeviceOwner;
        return $this;
    }

    /**
    * Gets vnicDeviceOwnerPrefixlike
    *  绑定实例port对应的实例所有者的前缀
    *
    * @return string|null
    */
    public function getVnicDeviceOwnerPrefixlike()
    {
        return $this->container['vnicDeviceOwnerPrefixlike'];
    }

    /**
    * Sets vnicDeviceOwnerPrefixlike
    *
    * @param string|null $vnicDeviceOwnerPrefixlike 绑定实例port对应的实例所有者的前缀
    *
    * @return $this
    */
    public function setVnicDeviceOwnerPrefixlike($vnicDeviceOwnerPrefixlike)
    {
        $this->container['vnicDeviceOwnerPrefixlike'] = $vnicDeviceOwnerPrefixlike;
        return $this;
    }

    /**
    * Gets vnicInstanceType
    *  绑定实例port对应的实例类型
    *
    * @return string|null
    */
    public function getVnicInstanceType()
    {
        return $this->container['vnicInstanceType'];
    }

    /**
    * Sets vnicInstanceType
    *
    * @param string|null $vnicInstanceType 绑定实例port对应的实例类型
    *
    * @return $this
    */
    public function setVnicInstanceType($vnicInstanceType)
    {
        $this->container['vnicInstanceType'] = $vnicInstanceType;
        return $this;
    }

    /**
    * Gets vnicInstanceId
    *  绑定实例port对应的实例id
    *
    * @return string|null
    */
    public function getVnicInstanceId()
    {
        return $this->container['vnicInstanceId'];
    }

    /**
    * Sets vnicInstanceId
    *
    * @param string|null $vnicInstanceId 绑定实例port对应的实例id
    *
    * @return $this
    */
    public function setVnicInstanceId($vnicInstanceId)
    {
        $this->container['vnicInstanceId'] = $vnicInstanceId;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序，形式为\"sort_key=geip_id&sort_dir=asc\"  支持字段：geip_id/version/public_border_group/ geip_ip_address/created_at/updated_at
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方向  取值范围：asc、desc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方向  取值范围：asc、desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页起始点
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页起始点
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets marker
    *  分页起始点
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页起始点
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

