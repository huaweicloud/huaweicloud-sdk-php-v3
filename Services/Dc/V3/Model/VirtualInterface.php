<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VirtualInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VirtualInterface';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间
    * updateTime  虚拟接口更新时间
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能nqa功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * vifPeers  vif的Peer的相关信息
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'bandwidth' => 'int',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'description' => 'string',
            'directConnectId' => 'string',
            'serviceType' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'type' => 'string',
            'vgwId' => 'string',
            'vlan' => 'int',
            'routeLimit' => 'int',
            'enableNqa' => 'bool',
            'enableBfd' => 'bool',
            'lagId' => 'string',
            'deviceId' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]',
            'vifPeers' => '\HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]',
            'extendAttribute' => '\HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间
    * updateTime  虚拟接口更新时间
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能nqa功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * vifPeers  vif的Peer的相关信息
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'adminStateUp' => null,
        'bandwidth' => 'int32',
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'description' => null,
        'directConnectId' => null,
        'serviceType' => null,
        'status' => null,
        'tenantId' => null,
        'type' => null,
        'vgwId' => null,
        'vlan' => 'int32',
        'routeLimit' => 'int32',
        'enableNqa' => null,
        'enableBfd' => null,
        'lagId' => null,
        'deviceId' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'vifPeers' => null,
        'extendAttribute' => null
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
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间
    * updateTime  虚拟接口更新时间
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能nqa功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * vifPeers  vif的Peer的相关信息
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'bandwidth' => 'bandwidth',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'description' => 'description',
            'directConnectId' => 'direct_connect_id',
            'serviceType' => 'service_type',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'type' => 'type',
            'vgwId' => 'vgw_id',
            'vlan' => 'vlan',
            'routeLimit' => 'route_limit',
            'enableNqa' => 'enable_nqa',
            'enableBfd' => 'enable_bfd',
            'lagId' => 'lag_id',
            'deviceId' => 'device_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'vifPeers' => 'vif_peers',
            'extendAttribute' => 'extend_attribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间
    * updateTime  虚拟接口更新时间
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能nqa功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * vifPeers  vif的Peer的相关信息
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'bandwidth' => 'setBandwidth',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'description' => 'setDescription',
            'directConnectId' => 'setDirectConnectId',
            'serviceType' => 'setServiceType',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'type' => 'setType',
            'vgwId' => 'setVgwId',
            'vlan' => 'setVlan',
            'routeLimit' => 'setRouteLimit',
            'enableNqa' => 'setEnableNqa',
            'enableBfd' => 'setEnableBfd',
            'lagId' => 'setLagId',
            'deviceId' => 'setDeviceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'vifPeers' => 'setVifPeers',
            'extendAttribute' => 'setExtendAttribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间
    * updateTime  虚拟接口更新时间
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能nqa功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * vifPeers  vif的Peer的相关信息
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'bandwidth' => 'getBandwidth',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'description' => 'getDescription',
            'directConnectId' => 'getDirectConnectId',
            'serviceType' => 'getServiceType',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'type' => 'getType',
            'vgwId' => 'getVgwId',
            'vlan' => 'getVlan',
            'routeLimit' => 'getRouteLimit',
            'enableNqa' => 'getEnableNqa',
            'enableBfd' => 'getEnableBfd',
            'lagId' => 'getLagId',
            'deviceId' => 'getDeviceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'vifPeers' => 'getVifPeers',
            'extendAttribute' => 'getExtendAttribute'
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
    const SERVICE_TYPE_VGW = 'VGW';
    const SERVICE_TYPE_GDGW = 'GDGW';
    const SERVICE_TYPE_LGW = 'LGW';
    const TYPE__PRIVATE = 'private';
    const TYPE__PUBLIC = 'public';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_VGW,
            self::SERVICE_TYPE_GDGW,
            self::SERVICE_TYPE_LGW,
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
            self::TYPE__PRIVATE,
            self::TYPE__PUBLIC,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directConnectId'] = isset($data['directConnectId']) ? $data['directConnectId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['routeLimit'] = isset($data['routeLimit']) ? $data['routeLimit'] : null;
        $this->container['enableNqa'] = isset($data['enableNqa']) ? $data['enableNqa'] : null;
        $this->container['enableBfd'] = isset($data['enableBfd']) ? $data['enableBfd'] : null;
        $this->container['lagId'] = isset($data['lagId']) ? $data['lagId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['vifPeers'] = isset($data['vifPeers']) ? $data['vifPeers'] : null;
        $this->container['extendAttribute'] = isset($data['extendAttribute']) ? $data['extendAttribute'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['directConnectId']) && (mb_strlen($this->container['directConnectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'directConnectId', the character length must be smaller than or equal to 36.";
            }
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vgwId']) && (mb_strlen($this->container['vgwId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vgwId']) && (mb_strlen($this->container['vgwId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] > 3999)) {
                $invalidProperties[] = "invalid value for 'vlan', must be smaller than or equal to 3999.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] < 0)) {
                $invalidProperties[] = "invalid value for 'vlan', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['routeLimit']) && ($this->container['routeLimit'] > 200)) {
                $invalidProperties[] = "invalid value for 'routeLimit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['routeLimit']) && ($this->container['routeLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'routeLimit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) > 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) < 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  虚拟接口的ID
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
    * @param string|null $id 虚拟接口的ID
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
    *  虚拟接口的名字
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
    * @param string|null $name 虚拟接口的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  管理状态：true或false
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 管理状态：true或false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets bandwidth
    *  虚拟接口接入带宽
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 虚拟接口接入带宽
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets createTime
    *  虚拟接口创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 虚拟接口创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  虚拟接口更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 虚拟接口更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets description
    *  虚拟接口的描述
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
    * @param string|null $description 虚拟接口的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets directConnectId
    *  物理专线的ID
    *
    * @return string|null
    */
    public function getDirectConnectId()
    {
        return $this->container['directConnectId'];
    }

    /**
    * Sets directConnectId
    *
    * @param string|null $directConnectId 物理专线的ID
    *
    * @return $this
    */
    public function setDirectConnectId($directConnectId)
    {
        $this->container['directConnectId'] = $directConnectId;
        return $this;
    }

    /**
    * Gets serviceType
    *  接入网关的类型：包括VGW,GDGW,LGW等
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 接入网关的类型：包括VGW,GDGW,LGW等
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets status
    *  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
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
    * @param string|null $status 操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
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
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets type
    *  表示接口类型：private
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
    * @param string|null $type 表示接口类型：private
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vgwId
    *  虚拟网关的ID
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId 虚拟网关的ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets vlan
    *  同用户网关对接的vlan, 配置范围0-3999
    *
    * @return int|null
    */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
    * Sets vlan
    *
    * @param int|null $vlan 同用户网关对接的vlan, 配置范围0-3999
    *
    * @return $this
    */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;
        return $this;
    }

    /**
    * Gets routeLimit
    *  VIF远端子网路由配置规格
    *
    * @return int|null
    */
    public function getRouteLimit()
    {
        return $this->container['routeLimit'];
    }

    /**
    * Sets routeLimit
    *
    * @param int|null $routeLimit VIF远端子网路由配置规格
    *
    * @return $this
    */
    public function setRouteLimit($routeLimit)
    {
        $this->container['routeLimit'] = $routeLimit;
        return $this;
    }

    /**
    * Gets enableNqa
    *  是否使能nqa功能：true或false
    *
    * @return bool|null
    */
    public function getEnableNqa()
    {
        return $this->container['enableNqa'];
    }

    /**
    * Sets enableNqa
    *
    * @param bool|null $enableNqa 是否使能nqa功能：true或false
    *
    * @return $this
    */
    public function setEnableNqa($enableNqa)
    {
        $this->container['enableNqa'] = $enableNqa;
        return $this;
    }

    /**
    * Gets enableBfd
    *  是否使能nqa功能：true或false
    *
    * @return bool|null
    */
    public function getEnableBfd()
    {
        return $this->container['enableBfd'];
    }

    /**
    * Sets enableBfd
    *
    * @param bool|null $enableBfd 是否使能nqa功能：true或false
    *
    * @return $this
    */
    public function setEnableBfd($enableBfd)
    {
        $this->container['enableBfd'] = $enableBfd;
        return $this;
    }

    /**
    * Gets lagId
    *  VIF关联的链路聚合组ID
    *
    * @return string|null
    */
    public function getLagId()
    {
        return $this->container['lagId'];
    }

    /**
    * Sets lagId
    *
    * @param string|null $lagId VIF关联的链路聚合组ID
    *
    * @return $this
    */
    public function setLagId($lagId)
    {
        $this->container['lagId'] = $lagId;
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
    * Gets enterpriseProjectId
    *  实例所属企业项目ID
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
    * @param string|null $enterpriseProjectId 实例所属企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets vifPeers
    *  vif的Peer的相关信息
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]|null
    */
    public function getVifPeers()
    {
        return $this->container['vifPeers'];
    }

    /**
    * Sets vifPeers
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]|null $vifPeers vif的Peer的相关信息
    *
    * @return $this
    */
    public function setVifPeers($vifPeers)
    {
        $this->container['vifPeers'] = $vifPeers;
        return $this;
    }

    /**
    * Gets extendAttribute
    *  extendAttribute
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute|null
    */
    public function getExtendAttribute()
    {
        return $this->container['extendAttribute'];
    }

    /**
    * Sets extendAttribute
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute|null $extendAttribute extendAttribute
    *
    * @return $this
    */
    public function setExtendAttribute($extendAttribute)
    {
        $this->container['extendAttribute'] = $extendAttribute;
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

