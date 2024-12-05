<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RmsShowGlobalDcGateway implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RmsShowGlobalDcGateway';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户ID
    * name  名称
    * description  描述信息
    * enterpriseProjectId  企业项目ID
    * globalCenterNetworkId  全球中心网路ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    * bgpAsn  BGP模式AS号
    * regionId  局点ID
    * locationName  位置名称
    * locales  locales
    * currentPeerLinkCount  当前对等体数量
    * availablePeerLinkCount  有效对等体数量
    * adminStateUp  是否冻结：true-是，false-否
    * status  状态：ACTIVE-正常，ERROR-异常
    * createdTime  创建时间
    * updatedTime  更新时间
    * tags  返回给RMS的资源标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'globalCenterNetworkId' => 'string',
            'siteNetworkId' => 'string',
            'cloudConnectionId' => 'string',
            'bgpAsn' => 'int',
            'regionId' => 'string',
            'locationName' => 'string',
            'locales' => '\HuaweiCloud\SDK\Dc\V3\Model\Locale',
            'currentPeerLinkCount' => 'int',
            'availablePeerLinkCount' => 'int',
            'adminStateUp' => 'bool',
            'status' => 'string',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime',
            'tags' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户ID
    * name  名称
    * description  描述信息
    * enterpriseProjectId  企业项目ID
    * globalCenterNetworkId  全球中心网路ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    * bgpAsn  BGP模式AS号
    * regionId  局点ID
    * locationName  位置名称
    * locales  locales
    * currentPeerLinkCount  当前对等体数量
    * availablePeerLinkCount  有效对等体数量
    * adminStateUp  是否冻结：true-是，false-否
    * status  状态：ACTIVE-正常，ERROR-异常
    * createdTime  创建时间
    * updatedTime  更新时间
    * tags  返回给RMS的资源标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'globalCenterNetworkId' => null,
        'siteNetworkId' => null,
        'cloudConnectionId' => null,
        'bgpAsn' => 'int64',
        'regionId' => null,
        'locationName' => null,
        'locales' => null,
        'currentPeerLinkCount' => 'int32',
        'availablePeerLinkCount' => 'int32',
        'adminStateUp' => null,
        'status' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time',
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
    * id  唯一ID
    * tenantId  租户ID
    * name  名称
    * description  描述信息
    * enterpriseProjectId  企业项目ID
    * globalCenterNetworkId  全球中心网路ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    * bgpAsn  BGP模式AS号
    * regionId  局点ID
    * locationName  位置名称
    * locales  locales
    * currentPeerLinkCount  当前对等体数量
    * availablePeerLinkCount  有效对等体数量
    * adminStateUp  是否冻结：true-是，false-否
    * status  状态：ACTIVE-正常，ERROR-异常
    * createdTime  创建时间
    * updatedTime  更新时间
    * tags  返回给RMS的资源标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'globalCenterNetworkId' => 'global_center_network_id',
            'siteNetworkId' => 'site_network_id',
            'cloudConnectionId' => 'cloud_connection_id',
            'bgpAsn' => 'bgp_asn',
            'regionId' => 'region_id',
            'locationName' => 'location_name',
            'locales' => 'locales',
            'currentPeerLinkCount' => 'current_peer_link_count',
            'availablePeerLinkCount' => 'available_peer_link_count',
            'adminStateUp' => 'admin_state_up',
            'status' => 'status',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一ID
    * tenantId  租户ID
    * name  名称
    * description  描述信息
    * enterpriseProjectId  企业项目ID
    * globalCenterNetworkId  全球中心网路ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    * bgpAsn  BGP模式AS号
    * regionId  局点ID
    * locationName  位置名称
    * locales  locales
    * currentPeerLinkCount  当前对等体数量
    * availablePeerLinkCount  有效对等体数量
    * adminStateUp  是否冻结：true-是，false-否
    * status  状态：ACTIVE-正常，ERROR-异常
    * createdTime  创建时间
    * updatedTime  更新时间
    * tags  返回给RMS的资源标签
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'globalCenterNetworkId' => 'setGlobalCenterNetworkId',
            'siteNetworkId' => 'setSiteNetworkId',
            'cloudConnectionId' => 'setCloudConnectionId',
            'bgpAsn' => 'setBgpAsn',
            'regionId' => 'setRegionId',
            'locationName' => 'setLocationName',
            'locales' => 'setLocales',
            'currentPeerLinkCount' => 'setCurrentPeerLinkCount',
            'availablePeerLinkCount' => 'setAvailablePeerLinkCount',
            'adminStateUp' => 'setAdminStateUp',
            'status' => 'setStatus',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一ID
    * tenantId  租户ID
    * name  名称
    * description  描述信息
    * enterpriseProjectId  企业项目ID
    * globalCenterNetworkId  全球中心网路ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    * bgpAsn  BGP模式AS号
    * regionId  局点ID
    * locationName  位置名称
    * locales  locales
    * currentPeerLinkCount  当前对等体数量
    * availablePeerLinkCount  有效对等体数量
    * adminStateUp  是否冻结：true-是，false-否
    * status  状态：ACTIVE-正常，ERROR-异常
    * createdTime  创建时间
    * updatedTime  更新时间
    * tags  返回给RMS的资源标签
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'globalCenterNetworkId' => 'getGlobalCenterNetworkId',
            'siteNetworkId' => 'getSiteNetworkId',
            'cloudConnectionId' => 'getCloudConnectionId',
            'bgpAsn' => 'getBgpAsn',
            'regionId' => 'getRegionId',
            'locationName' => 'getLocationName',
            'locales' => 'getLocales',
            'currentPeerLinkCount' => 'getCurrentPeerLinkCount',
            'availablePeerLinkCount' => 'getAvailablePeerLinkCount',
            'adminStateUp' => 'getAdminStateUp',
            'status' => 'getStatus',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['globalCenterNetworkId'] = isset($data['globalCenterNetworkId']) ? $data['globalCenterNetworkId'] : null;
        $this->container['siteNetworkId'] = isset($data['siteNetworkId']) ? $data['siteNetworkId'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['currentPeerLinkCount'] = isset($data['currentPeerLinkCount']) ? $data['currentPeerLinkCount'] : null;
        $this->container['availablePeerLinkCount'] = isset($data['availablePeerLinkCount']) ? $data['availablePeerLinkCount'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
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
    *  唯一ID
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
    * @param string|null $id 唯一ID
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
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    * Gets globalCenterNetworkId
    *  全球中心网路ID
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
    * @param string|null $globalCenterNetworkId 全球中心网路ID
    *
    * @return $this
    */
    public function setGlobalCenterNetworkId($globalCenterNetworkId)
    {
        $this->container['globalCenterNetworkId'] = $globalCenterNetworkId;
        return $this;
    }

    /**
    * Gets siteNetworkId
    *  站点网络ID
    *
    * @return string|null
    */
    public function getSiteNetworkId()
    {
        return $this->container['siteNetworkId'];
    }

    /**
    * Sets siteNetworkId
    *
    * @param string|null $siteNetworkId 站点网络ID
    *
    * @return $this
    */
    public function setSiteNetworkId($siteNetworkId)
    {
        $this->container['siteNetworkId'] = $siteNetworkId;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  云连接ID
    *
    * @return string|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string|null $cloudConnectionId 云连接ID
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  BGP模式AS号
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
    * @param int|null $bgpAsn BGP模式AS号
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
    *  局点ID
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
    * @param string|null $regionId 局点ID
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
    *  位置名称
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
    * @param string|null $locationName 位置名称
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
    * @return \HuaweiCloud\SDK\Dc\V3\Model\Locale|null
    */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
    * Sets locales
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Locale|null $locales locales
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
    *  当前对等体数量
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
    * @param int|null $currentPeerLinkCount 当前对等体数量
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
    *  有效对等体数量
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
    * @param int|null $availablePeerLinkCount 有效对等体数量
    *
    * @return $this
    */
    public function setAvailablePeerLinkCount($availablePeerLinkCount)
    {
        $this->container['availablePeerLinkCount'] = $availablePeerLinkCount;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  是否冻结：true-是，false-否
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
    * @param bool|null $adminStateUp 是否冻结：true-是，false-否
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
    *  状态：ACTIVE-正常，ERROR-异常
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
    * @param string|null $status 状态：ACTIVE-正常，ERROR-异常
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
    *  创建时间
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
    * @param \DateTime|null $createdTime 创建时间
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
    *  更新时间
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
    * @param \DateTime|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets tags
    *  返回给RMS的资源标签
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags 返回给RMS的资源标签
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

