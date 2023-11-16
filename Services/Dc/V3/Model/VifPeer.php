<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VifPeer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VifPeer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID
    * tenantId  归属租户ID
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    * deviceId  归属的设备ID
    * bgpRouteLimit  BGP的路由配置规格
    * bgpStatus  接口BGP协议状态,如果是静态路由接口则状态为 null
    * status  VIF对等体状态
    * vifId  vif对等体对应的虚拟接口ID
    * receiveRouteNum  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'addressFamily' => 'string',
            'localGatewayIp' => 'string',
            'remoteGatewayIp' => 'string',
            'routeMode' => 'string',
            'bgpAsn' => 'int',
            'bgpMd5' => 'string',
            'remoteEpGroup' => 'string[]',
            'serviceEpGroup' => 'string[]',
            'deviceId' => 'string',
            'bgpRouteLimit' => 'int',
            'bgpStatus' => 'string',
            'status' => 'string',
            'vifId' => 'string',
            'receiveRouteNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID
    * tenantId  归属租户ID
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    * deviceId  归属的设备ID
    * bgpRouteLimit  BGP的路由配置规格
    * bgpStatus  接口BGP协议状态,如果是静态路由接口则状态为 null
    * status  VIF对等体状态
    * vifId  vif对等体对应的虚拟接口ID
    * receiveRouteNum  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'addressFamily' => null,
        'localGatewayIp' => null,
        'remoteGatewayIp' => null,
        'routeMode' => null,
        'bgpAsn' => 'int32',
        'bgpMd5' => null,
        'remoteEpGroup' => null,
        'serviceEpGroup' => null,
        'deviceId' => null,
        'bgpRouteLimit' => 'int32',
        'bgpStatus' => null,
        'status' => null,
        'vifId' => null,
        'receiveRouteNum' => 'int32'
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
    * id  资源ID
    * tenantId  归属租户ID
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    * deviceId  归属的设备ID
    * bgpRouteLimit  BGP的路由配置规格
    * bgpStatus  接口BGP协议状态,如果是静态路由接口则状态为 null
    * status  VIF对等体状态
    * vifId  vif对等体对应的虚拟接口ID
    * receiveRouteNum  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'addressFamily' => 'address_family',
            'localGatewayIp' => 'local_gateway_ip',
            'remoteGatewayIp' => 'remote_gateway_ip',
            'routeMode' => 'route_mode',
            'bgpAsn' => 'bgp_asn',
            'bgpMd5' => 'bgp_md5',
            'remoteEpGroup' => 'remote_ep_group',
            'serviceEpGroup' => 'service_ep_group',
            'deviceId' => 'device_id',
            'bgpRouteLimit' => 'bgp_route_limit',
            'bgpStatus' => 'bgp_status',
            'status' => 'status',
            'vifId' => 'vif_id',
            'receiveRouteNum' => 'receive_route_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID
    * tenantId  归属租户ID
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    * deviceId  归属的设备ID
    * bgpRouteLimit  BGP的路由配置规格
    * bgpStatus  接口BGP协议状态,如果是静态路由接口则状态为 null
    * status  VIF对等体状态
    * vifId  vif对等体对应的虚拟接口ID
    * receiveRouteNum  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'addressFamily' => 'setAddressFamily',
            'localGatewayIp' => 'setLocalGatewayIp',
            'remoteGatewayIp' => 'setRemoteGatewayIp',
            'routeMode' => 'setRouteMode',
            'bgpAsn' => 'setBgpAsn',
            'bgpMd5' => 'setBgpMd5',
            'remoteEpGroup' => 'setRemoteEpGroup',
            'serviceEpGroup' => 'setServiceEpGroup',
            'deviceId' => 'setDeviceId',
            'bgpRouteLimit' => 'setBgpRouteLimit',
            'bgpStatus' => 'setBgpStatus',
            'status' => 'setStatus',
            'vifId' => 'setVifId',
            'receiveRouteNum' => 'setReceiveRouteNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID
    * tenantId  归属租户ID
    * name  VIF对等体名字
    * description  VIF对等体名字描述信息
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayIp  VIF对等体云侧接口地址
    * remoteGatewayIp  VIF对等体客户侧接口地址
    * routeMode  路由模式：static/bgp
    * bgpAsn  BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    * deviceId  归属的设备ID
    * bgpRouteLimit  BGP的路由配置规格
    * bgpStatus  接口BGP协议状态,如果是静态路由接口则状态为 null
    * status  VIF对等体状态
    * vifId  vif对等体对应的虚拟接口ID
    * receiveRouteNum  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'addressFamily' => 'getAddressFamily',
            'localGatewayIp' => 'getLocalGatewayIp',
            'remoteGatewayIp' => 'getRemoteGatewayIp',
            'routeMode' => 'getRouteMode',
            'bgpAsn' => 'getBgpAsn',
            'bgpMd5' => 'getBgpMd5',
            'remoteEpGroup' => 'getRemoteEpGroup',
            'serviceEpGroup' => 'getServiceEpGroup',
            'deviceId' => 'getDeviceId',
            'bgpRouteLimit' => 'getBgpRouteLimit',
            'bgpStatus' => 'getBgpStatus',
            'status' => 'getStatus',
            'vifId' => 'getVifId',
            'receiveRouteNum' => 'getReceiveRouteNum'
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
    const ROUTE_MODE_BGP = 'bgp';
    const ROUTE_MODE__STATIC = 'static';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRouteModeAllowableValues()
    {
        return [
            self::ROUTE_MODE_BGP,
            self::ROUTE_MODE__STATIC,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['localGatewayIp'] = isset($data['localGatewayIp']) ? $data['localGatewayIp'] : null;
        $this->container['remoteGatewayIp'] = isset($data['remoteGatewayIp']) ? $data['remoteGatewayIp'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['bgpMd5'] = isset($data['bgpMd5']) ? $data['bgpMd5'] : null;
        $this->container['remoteEpGroup'] = isset($data['remoteEpGroup']) ? $data['remoteEpGroup'] : null;
        $this->container['serviceEpGroup'] = isset($data['serviceEpGroup']) ? $data['serviceEpGroup'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['bgpRouteLimit'] = isset($data['bgpRouteLimit']) ? $data['bgpRouteLimit'] : null;
        $this->container['bgpStatus'] = isset($data['bgpStatus']) ? $data['bgpStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vifId'] = isset($data['vifId']) ? $data['vifId'] : null;
        $this->container['receiveRouteNum'] = isset($data['receiveRouteNum']) ? $data['receiveRouteNum'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRouteModeAllowableValues();
                if (!is_null($this->container['routeMode']) && !in_array($this->container['routeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'routeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['routeMode']) && (mb_strlen($this->container['routeMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'routeMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bgpStatus']) && (mb_strlen($this->container['bgpStatus']) > 10)) {
                $invalidProperties[] = "invalid value for 'bgpStatus', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['vifId']) && (mb_strlen($this->container['vifId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vifId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vifId']) && (mb_strlen($this->container['vifId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vifId', the character length must be bigger than or equal to 36.";
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
    *  资源ID
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
    * @param string|null $id 资源ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  归属租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 归属租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  VIF对等体名字
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
    * @param string|null $name VIF对等体名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  VIF对等体名字描述信息
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
    * @param string|null $description VIF对等体名字描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets addressFamily
    *  接口的地址簇类型，ipv4，ipv6
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily 接口的地址簇类型，ipv4，ipv6
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets localGatewayIp
    *  VIF对等体云侧接口地址
    *
    * @return string|null
    */
    public function getLocalGatewayIp()
    {
        return $this->container['localGatewayIp'];
    }

    /**
    * Sets localGatewayIp
    *
    * @param string|null $localGatewayIp VIF对等体云侧接口地址
    *
    * @return $this
    */
    public function setLocalGatewayIp($localGatewayIp)
    {
        $this->container['localGatewayIp'] = $localGatewayIp;
        return $this;
    }

    /**
    * Gets remoteGatewayIp
    *  VIF对等体客户侧接口地址
    *
    * @return string|null
    */
    public function getRemoteGatewayIp()
    {
        return $this->container['remoteGatewayIp'];
    }

    /**
    * Sets remoteGatewayIp
    *
    * @param string|null $remoteGatewayIp VIF对等体客户侧接口地址
    *
    * @return $this
    */
    public function setRemoteGatewayIp($remoteGatewayIp)
    {
        $this->container['remoteGatewayIp'] = $remoteGatewayIp;
        return $this;
    }

    /**
    * Gets routeMode
    *  路由模式：static/bgp
    *
    * @return string|null
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param string|null $routeMode 路由模式：static/bgp
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  BGP邻居的AS号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn BGP邻居的AS号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets bgpMd5
    *  BGP邻居的MD5密码
    *
    * @return string|null
    */
    public function getBgpMd5()
    {
        return $this->container['bgpMd5'];
    }

    /**
    * Sets bgpMd5
    *
    * @param string|null $bgpMd5 BGP邻居的MD5密码
    *
    * @return $this
    */
    public function setBgpMd5($bgpMd5)
    {
        $this->container['bgpMd5'] = $bgpMd5;
        return $this;
    }

    /**
    * Gets remoteEpGroup
    *  远端子网列表，记录租户侧的cidrs
    *
    * @return string[]|null
    */
    public function getRemoteEpGroup()
    {
        return $this->container['remoteEpGroup'];
    }

    /**
    * Sets remoteEpGroup
    *
    * @param string[]|null $remoteEpGroup 远端子网列表，记录租户侧的cidrs
    *
    * @return $this
    */
    public function setRemoteEpGroup($remoteEpGroup)
    {
        $this->container['remoteEpGroup'] = $remoteEpGroup;
        return $this;
    }

    /**
    * Gets serviceEpGroup
    *  该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    *
    * @return string[]|null
    */
    public function getServiceEpGroup()
    {
        return $this->container['serviceEpGroup'];
    }

    /**
    * Sets serviceEpGroup
    *
    * @param string[]|null $serviceEpGroup 该字段用于公网专线接口,表示租户可以访问云上公网服务地址列表
    *
    * @return $this
    */
    public function setServiceEpGroup($serviceEpGroup)
    {
        $this->container['serviceEpGroup'] = $serviceEpGroup;
        return $this;
    }

    /**
    * Gets deviceId
    *  归属的设备ID
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 归属的设备ID
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets bgpRouteLimit
    *  BGP的路由配置规格
    *
    * @return int|null
    */
    public function getBgpRouteLimit()
    {
        return $this->container['bgpRouteLimit'];
    }

    /**
    * Sets bgpRouteLimit
    *
    * @param int|null $bgpRouteLimit BGP的路由配置规格
    *
    * @return $this
    */
    public function setBgpRouteLimit($bgpRouteLimit)
    {
        $this->container['bgpRouteLimit'] = $bgpRouteLimit;
        return $this;
    }

    /**
    * Gets bgpStatus
    *  接口BGP协议状态,如果是静态路由接口则状态为 null
    *
    * @return string|null
    */
    public function getBgpStatus()
    {
        return $this->container['bgpStatus'];
    }

    /**
    * Sets bgpStatus
    *
    * @param string|null $bgpStatus 接口BGP协议状态,如果是静态路由接口则状态为 null
    *
    * @return $this
    */
    public function setBgpStatus($bgpStatus)
    {
        $this->container['bgpStatus'] = $bgpStatus;
        return $this;
    }

    /**
    * Gets status
    *  VIF对等体状态
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
    * @param string|null $status VIF对等体状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vifId
    *  vif对等体对应的虚拟接口ID
    *
    * @return string|null
    */
    public function getVifId()
    {
        return $this->container['vifId'];
    }

    /**
    * Sets vifId
    *
    * @param string|null $vifId vif对等体对应的虚拟接口ID
    *
    * @return $this
    */
    public function setVifId($vifId)
    {
        $this->container['vifId'] = $vifId;
        return $this;
    }

    /**
    * Gets receiveRouteNum
    *  路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @return int|null
    */
    public function getReceiveRouteNum()
    {
        return $this->container['receiveRouteNum'];
    }

    /**
    * Sets receiveRouteNum
    *
    * @param int|null $receiveRouteNum 路由模式为bgp：receive_route_num值为接收搭配BGP的路由数目； 路由模式为static：该字段无意义，值为-1； 注：若早期接入华为云的部分用户无法获取该字段信息，如需要请联系客服迁移专线端口。
    *
    * @return $this
    */
    public function setReceiveRouteNum($receiveRouteNum)
    {
        $this->container['receiveRouteNum'] = $receiveRouteNum;
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

