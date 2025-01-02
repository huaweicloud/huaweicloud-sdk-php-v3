<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalDcGatewayEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalDcGatewayEntry';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  专线全域接入网关（global-dc-gateway）ID
    * tenantId  项目ID。
    * name  global-dc-gateway名字。
    * description  描述信息
    * reason  失败原因
    * enterpriseProjectId  global-dc-gateway所属的企业项目ID。
    * globalCenterNetworkId  DGW加载的全球中心网络实例的ID
    * bgpAsn  DGW对应BGP的ASN编号
    * regionId  DGW所属Region
    * locationName  DGW创建网关设备归属的位置
    * locales  locales
    * currentPeerLinkCount  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    * availablePeerLinkCount  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    * tags  global-dc-gateway关联TAG。
    * adminStateUp  该GDGW的管理状态，true为激活状态、false为冻结状态
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * addressFamily  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'reason' => 'string',
            'enterpriseProjectId' => 'string',
            'globalCenterNetworkId' => 'string',
            'bgpAsn' => 'int',
            'regionId' => 'string',
            'locationName' => 'string',
            'locales' => '\HuaweiCloud\SDK\Dc\V3\Model\LocalesBody',
            'currentPeerLinkCount' => 'int',
            'availablePeerLinkCount' => 'int',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]',
            'adminStateUp' => 'bool',
            'status' => '\HuaweiCloud\SDK\Dc\V3\Model\GlobalDcGatewayStatus',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime',
            'addressFamily' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  专线全域接入网关（global-dc-gateway）ID
    * tenantId  项目ID。
    * name  global-dc-gateway名字。
    * description  描述信息
    * reason  失败原因
    * enterpriseProjectId  global-dc-gateway所属的企业项目ID。
    * globalCenterNetworkId  DGW加载的全球中心网络实例的ID
    * bgpAsn  DGW对应BGP的ASN编号
    * regionId  DGW所属Region
    * locationName  DGW创建网关设备归属的位置
    * locales  locales
    * currentPeerLinkCount  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    * availablePeerLinkCount  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    * tags  global-dc-gateway关联TAG。
    * adminStateUp  该GDGW的管理状态，true为激活状态、false为冻结状态
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * addressFamily  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'reason' => null,
        'enterpriseProjectId' => null,
        'globalCenterNetworkId' => null,
        'bgpAsn' => 'int64',
        'regionId' => null,
        'locationName' => null,
        'locales' => null,
        'currentPeerLinkCount' => 'int32',
        'availablePeerLinkCount' => 'int32',
        'tags' => null,
        'adminStateUp' => null,
        'status' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time',
        'addressFamily' => null
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
    * id  专线全域接入网关（global-dc-gateway）ID
    * tenantId  项目ID。
    * name  global-dc-gateway名字。
    * description  描述信息
    * reason  失败原因
    * enterpriseProjectId  global-dc-gateway所属的企业项目ID。
    * globalCenterNetworkId  DGW加载的全球中心网络实例的ID
    * bgpAsn  DGW对应BGP的ASN编号
    * regionId  DGW所属Region
    * locationName  DGW创建网关设备归属的位置
    * locales  locales
    * currentPeerLinkCount  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    * availablePeerLinkCount  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    * tags  global-dc-gateway关联TAG。
    * adminStateUp  该GDGW的管理状态，true为激活状态、false为冻结状态
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * addressFamily  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'reason' => 'reason',
            'enterpriseProjectId' => 'enterprise_project_id',
            'globalCenterNetworkId' => 'global_center_network_id',
            'bgpAsn' => 'bgp_asn',
            'regionId' => 'region_id',
            'locationName' => 'location_name',
            'locales' => 'locales',
            'currentPeerLinkCount' => 'current_peer_link_count',
            'availablePeerLinkCount' => 'available_peer_link_count',
            'tags' => 'tags',
            'adminStateUp' => 'admin_state_up',
            'status' => 'status',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'addressFamily' => 'address_family'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  专线全域接入网关（global-dc-gateway）ID
    * tenantId  项目ID。
    * name  global-dc-gateway名字。
    * description  描述信息
    * reason  失败原因
    * enterpriseProjectId  global-dc-gateway所属的企业项目ID。
    * globalCenterNetworkId  DGW加载的全球中心网络实例的ID
    * bgpAsn  DGW对应BGP的ASN编号
    * regionId  DGW所属Region
    * locationName  DGW创建网关设备归属的位置
    * locales  locales
    * currentPeerLinkCount  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    * availablePeerLinkCount  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    * tags  global-dc-gateway关联TAG。
    * adminStateUp  该GDGW的管理状态，true为激活状态、false为冻结状态
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * addressFamily  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'reason' => 'setReason',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'globalCenterNetworkId' => 'setGlobalCenterNetworkId',
            'bgpAsn' => 'setBgpAsn',
            'regionId' => 'setRegionId',
            'locationName' => 'setLocationName',
            'locales' => 'setLocales',
            'currentPeerLinkCount' => 'setCurrentPeerLinkCount',
            'availablePeerLinkCount' => 'setAvailablePeerLinkCount',
            'tags' => 'setTags',
            'adminStateUp' => 'setAdminStateUp',
            'status' => 'setStatus',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'addressFamily' => 'setAddressFamily'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  专线全域接入网关（global-dc-gateway）ID
    * tenantId  项目ID。
    * name  global-dc-gateway名字。
    * description  描述信息
    * reason  失败原因
    * enterpriseProjectId  global-dc-gateway所属的企业项目ID。
    * globalCenterNetworkId  DGW加载的全球中心网络实例的ID
    * bgpAsn  DGW对应BGP的ASN编号
    * regionId  DGW所属Region
    * locationName  DGW创建网关设备归属的位置
    * locales  locales
    * currentPeerLinkCount  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    * availablePeerLinkCount  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    * tags  global-dc-gateway关联TAG。
    * adminStateUp  该GDGW的管理状态，true为激活状态、false为冻结状态
    * status  status
    * createdTime  创建时间。
    * updatedTime  更新时间。
    * addressFamily  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'reason' => 'getReason',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'globalCenterNetworkId' => 'getGlobalCenterNetworkId',
            'bgpAsn' => 'getBgpAsn',
            'regionId' => 'getRegionId',
            'locationName' => 'getLocationName',
            'locales' => 'getLocales',
            'currentPeerLinkCount' => 'getCurrentPeerLinkCount',
            'availablePeerLinkCount' => 'getAvailablePeerLinkCount',
            'tags' => 'getTags',
            'adminStateUp' => 'getAdminStateUp',
            'status' => 'getStatus',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'addressFamily' => 'getAddressFamily'
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
    const ADDRESS_FAMILY_IPV4 = 'ipv4';
    const ADDRESS_FAMILY_DUAL = 'dual';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressFamilyAllowableValues()
    {
        return [
            self::ADDRESS_FAMILY_IPV4,
            self::ADDRESS_FAMILY_DUAL,
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
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['globalCenterNetworkId'] = isset($data['globalCenterNetworkId']) ? $data['globalCenterNetworkId'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['currentPeerLinkCount'] = isset($data['currentPeerLinkCount']) ? $data['currentPeerLinkCount'] : null;
        $this->container['availablePeerLinkCount'] = isset($data['availablePeerLinkCount']) ? $data['availablePeerLinkCount'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
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
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-z0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-z0-9]{32}/.";
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
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 255)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['globalCenterNetworkId']) && (mb_strlen($this->container['globalCenterNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalCenterNetworkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['globalCenterNetworkId']) && (mb_strlen($this->container['globalCenterNetworkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'globalCenterNetworkId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 65535)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 0)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['locationName']) && (mb_strlen($this->container['locationName']) > 36)) {
                $invalidProperties[] = "invalid value for 'locationName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['locationName']) && (mb_strlen($this->container['locationName']) < 0)) {
                $invalidProperties[] = "invalid value for 'locationName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAddressFamilyAllowableValues();
                if (!is_null($this->container['addressFamily']) && !in_array($this->container['addressFamily'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressFamily', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  专线全域接入网关（global-dc-gateway）ID
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
    * @param string|null $id 专线全域接入网关（global-dc-gateway）ID
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
    *  项目ID。
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
    * @param string|null $tenantId 项目ID。
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
    *  global-dc-gateway名字。
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
    * @param string|null $name global-dc-gateway名字。
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
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets reason
    *  失败原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 失败原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  global-dc-gateway所属的企业项目ID。
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
    * @param string|null $enterpriseProjectId global-dc-gateway所属的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets globalCenterNetworkId
    *  DGW加载的全球中心网络实例的ID
    *
    * @return string|null
    */
    public function getGlobalCenterNetworkId()
    {
        return $this->container['globalCenterNetworkId'];
    }

    /**
    * Sets globalCenterNetworkId
    *
    * @param string|null $globalCenterNetworkId DGW加载的全球中心网络实例的ID
    *
    * @return $this
    */
    public function setGlobalCenterNetworkId($globalCenterNetworkId)
    {
        $this->container['globalCenterNetworkId'] = $globalCenterNetworkId;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  DGW对应BGP的ASN编号
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
    * @param int|null $bgpAsn DGW对应BGP的ASN编号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets regionId
    *  DGW所属Region
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId DGW所属Region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets locationName
    *  DGW创建网关设备归属的位置
    *
    * @return string|null
    */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
    * Sets locationName
    *
    * @param string|null $locationName DGW创建网关设备归属的位置
    *
    * @return $this
    */
    public function setLocationName($locationName)
    {
        $this->container['locationName'] = $locationName;
        return $this;
    }

    /**
    * Gets locales
    *  locales
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null
    */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
    * Sets locales
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null $locales locales
    *
    * @return $this
    */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;
        return $this;
    }

    /**
    * Gets currentPeerLinkCount
    *  全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    *
    * @return int|null
    */
    public function getCurrentPeerLinkCount()
    {
        return $this->container['currentPeerLinkCount'];
    }

    /**
    * Sets currentPeerLinkCount
    *
    * @param int|null $currentPeerLinkCount 全域接入网关(GDGW)上关联连接的数量，表示DGW挂载ER的数量
    *
    * @return $this
    */
    public function setCurrentPeerLinkCount($currentPeerLinkCount)
    {
        $this->container['currentPeerLinkCount'] = $currentPeerLinkCount;
        return $this;
    }

    /**
    * Gets availablePeerLinkCount
    *  该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    *
    * @return int|null
    */
    public function getAvailablePeerLinkCount()
    {
        return $this->container['availablePeerLinkCount'];
    }

    /**
    * Sets availablePeerLinkCount
    *
    * @param int|null $availablePeerLinkCount 该全域接入网关上GDGW允许创建关联连接（PeerLink）的数量
    *
    * @return $this
    */
    public function setAvailablePeerLinkCount($availablePeerLinkCount)
    {
        $this->container['availablePeerLinkCount'] = $availablePeerLinkCount;
        return $this;
    }

    /**
    * Gets tags
    *  global-dc-gateway关联TAG。
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
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null $tags global-dc-gateway关联TAG。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  该GDGW的管理状态，true为激活状态、false为冻结状态
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
    * @param bool|null $adminStateUp 该GDGW的管理状态，true为激活状态、false为冻结状态
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\GlobalDcGatewayStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\GlobalDcGatewayStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 创建时间。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param \DateTime|null $updatedTime 更新时间。
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets addressFamily
    *  网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
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
    * @param string|null $addressFamily 网关的地址簇，IPv4或者ipv6和IPv4双栈 - ipv4 - dual
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
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

