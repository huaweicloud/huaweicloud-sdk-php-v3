<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalEips implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalEips';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * name  资源名称
    * description  用户自定义的资源描述
    * domainId  租户ID
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  线路
    * ipVersion  IPv4或IPv6
    * ipAddress  IPv4地址
    * ipv6Address  IPv6地址
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * polluted  是否污染
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidthInfo  internetBandwidthInfo
    * globalConnectionBandwidthInfo  globalConnectionBandwidthInfo
    * associateInstanceInfo  associateInstanceInfo
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'accessSite' => 'string',
            'geipPoolName' => 'string',
            'isp' => 'string',
            'ipVersion' => 'int',
            'ipAddress' => 'string',
            'ipv6Address' => 'string',
            'freezen' => 'bool',
            'freezenInfo' => 'string',
            'polluted' => 'bool',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'internetBandwidthInfo' => '\HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo',
            'globalConnectionBandwidthInfo' => '\HuaweiCloud\SDK\Geip\V3\Model\GlobalConnectionBandwidthInfo',
            'associateInstanceInfo' => '\HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo',
            'isPrePaid' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'sysTags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * name  资源名称
    * description  用户自定义的资源描述
    * domainId  租户ID
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  线路
    * ipVersion  IPv4或IPv6
    * ipAddress  IPv4地址
    * ipv6Address  IPv6地址
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * polluted  是否污染
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidthInfo  internetBandwidthInfo
    * globalConnectionBandwidthInfo  globalConnectionBandwidthInfo
    * associateInstanceInfo  associateInstanceInfo
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'accessSite' => null,
        'geipPoolName' => null,
        'isp' => null,
        'ipVersion' => 'int32',
        'ipAddress' => null,
        'ipv6Address' => null,
        'freezen' => null,
        'freezenInfo' => null,
        'polluted' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'internetBandwidthInfo' => null,
        'globalConnectionBandwidthInfo' => null,
        'associateInstanceInfo' => null,
        'isPrePaid' => null,
        'tags' => null,
        'sysTags' => null,
        'enterpriseProjectId' => null
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
    * id  ID
    * name  资源名称
    * description  用户自定义的资源描述
    * domainId  租户ID
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  线路
    * ipVersion  IPv4或IPv6
    * ipAddress  IPv4地址
    * ipv6Address  IPv6地址
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * polluted  是否污染
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidthInfo  internetBandwidthInfo
    * globalConnectionBandwidthInfo  globalConnectionBandwidthInfo
    * associateInstanceInfo  associateInstanceInfo
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'accessSite' => 'access_site',
            'geipPoolName' => 'geip_pool_name',
            'isp' => 'isp',
            'ipVersion' => 'ip_version',
            'ipAddress' => 'ip_address',
            'ipv6Address' => 'ipv6_address',
            'freezen' => 'freezen',
            'freezenInfo' => 'freezen_info',
            'polluted' => 'polluted',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'internetBandwidthInfo' => 'internet_bandwidth_info',
            'globalConnectionBandwidthInfo' => 'global_connection_bandwidth_info',
            'associateInstanceInfo' => 'associate_instance_info',
            'isPrePaid' => 'is_pre_paid',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * name  资源名称
    * description  用户自定义的资源描述
    * domainId  租户ID
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  线路
    * ipVersion  IPv4或IPv6
    * ipAddress  IPv4地址
    * ipv6Address  IPv6地址
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * polluted  是否污染
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidthInfo  internetBandwidthInfo
    * globalConnectionBandwidthInfo  globalConnectionBandwidthInfo
    * associateInstanceInfo  associateInstanceInfo
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'accessSite' => 'setAccessSite',
            'geipPoolName' => 'setGeipPoolName',
            'isp' => 'setIsp',
            'ipVersion' => 'setIpVersion',
            'ipAddress' => 'setIpAddress',
            'ipv6Address' => 'setIpv6Address',
            'freezen' => 'setFreezen',
            'freezenInfo' => 'setFreezenInfo',
            'polluted' => 'setPolluted',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'internetBandwidthInfo' => 'setInternetBandwidthInfo',
            'globalConnectionBandwidthInfo' => 'setGlobalConnectionBandwidthInfo',
            'associateInstanceInfo' => 'setAssociateInstanceInfo',
            'isPrePaid' => 'setIsPrePaid',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * name  资源名称
    * description  用户自定义的资源描述
    * domainId  租户ID
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  线路
    * ipVersion  IPv4或IPv6
    * ipAddress  IPv4地址
    * ipv6Address  IPv6地址
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * polluted  是否污染
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidthInfo  internetBandwidthInfo
    * globalConnectionBandwidthInfo  globalConnectionBandwidthInfo
    * associateInstanceInfo  associateInstanceInfo
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP标签
    * sysTags  系统标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'accessSite' => 'getAccessSite',
            'geipPoolName' => 'getGeipPoolName',
            'isp' => 'getIsp',
            'ipVersion' => 'getIpVersion',
            'ipAddress' => 'getIpAddress',
            'ipv6Address' => 'getIpv6Address',
            'freezen' => 'getFreezen',
            'freezenInfo' => 'getFreezenInfo',
            'polluted' => 'getPolluted',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'internetBandwidthInfo' => 'getInternetBandwidthInfo',
            'globalConnectionBandwidthInfo' => 'getGlobalConnectionBandwidthInfo',
            'associateInstanceInfo' => 'getAssociateInstanceInfo',
            'isPrePaid' => 'getIsPrePaid',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_IDLE = 'IDLE';
    const STATUS_INUSE = 'INUSE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_CREATE,
            self::STATUS_IDLE,
            self::STATUS_INUSE,
            self::STATUS_PENDING_UPDATE,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['geipPoolName'] = isset($data['geipPoolName']) ? $data['geipPoolName'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
        $this->container['freezen'] = isset($data['freezen']) ? $data['freezen'] : null;
        $this->container['freezenInfo'] = isset($data['freezenInfo']) ? $data['freezenInfo'] : null;
        $this->container['polluted'] = isset($data['polluted']) ? $data['polluted'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['internetBandwidthInfo'] = isset($data['internetBandwidthInfo']) ? $data['internetBandwidthInfo'] : null;
        $this->container['globalConnectionBandwidthInfo'] = isset($data['globalConnectionBandwidthInfo']) ? $data['globalConnectionBandwidthInfo'] : null;
        $this->container['associateInstanceInfo'] = isset($data['associateInstanceInfo']) ? $data['associateInstanceInfo'] : null;
        $this->container['isPrePaid'] = isset($data['isPrePaid']) ? $data['isPrePaid'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    *  ID
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
    * @param string|null $id ID
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
    *  资源名称
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
    * @param string|null $name 资源名称
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
    *  用户自定义的资源描述
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
    * @param string|null $description 用户自定义的资源描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets accessSite
    *  接入点信息
    *
    * @return string|null
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string|null $accessSite 接入点信息
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets geipPoolName
    *  全域弹性公网IP池子名称
    *
    * @return string|null
    */
    public function getGeipPoolName()
    {
        return $this->container['geipPoolName'];
    }

    /**
    * Sets geipPoolName
    *
    * @param string|null $geipPoolName 全域弹性公网IP池子名称
    *
    * @return $this
    */
    public function setGeipPoolName($geipPoolName)
    {
        $this->container['geipPoolName'] = $geipPoolName;
        return $this;
    }

    /**
    * Gets isp
    *  线路
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IPv4或IPv6
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
    * @param int|null $ipVersion IPv4或IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IPv4地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IPv4地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets ipv6Address
    *  IPv6地址
    *
    * @return string|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string|null $ipv6Address IPv6地址
    *
    * @return $this
    */
    public function setIpv6Address($ipv6Address)
    {
        $this->container['ipv6Address'] = $ipv6Address;
        return $this;
    }

    /**
    * Gets freezen
    *  是否冻结
    *
    * @return bool|null
    */
    public function getFreezen()
    {
        return $this->container['freezen'];
    }

    /**
    * Sets freezen
    *
    * @param bool|null $freezen 是否冻结
    *
    * @return $this
    */
    public function setFreezen($freezen)
    {
        $this->container['freezen'] = $freezen;
        return $this;
    }

    /**
    * Gets freezenInfo
    *  冻结原因
    *
    * @return string|null
    */
    public function getFreezenInfo()
    {
        return $this->container['freezenInfo'];
    }

    /**
    * Sets freezenInfo
    *
    * @param string|null $freezenInfo 冻结原因
    *
    * @return $this
    */
    public function setFreezenInfo($freezenInfo)
    {
        $this->container['freezenInfo'] = $freezenInfo;
        return $this;
    }

    /**
    * Gets polluted
    *  是否污染
    *
    * @return bool|null
    */
    public function getPolluted()
    {
        return $this->container['polluted'];
    }

    /**
    * Sets polluted
    *
    * @param bool|null $polluted 是否污染
    *
    * @return $this
    */
    public function setPolluted($polluted)
    {
        $this->container['polluted'] = $polluted;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param \DateTime|null $createdAt 创建时间
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
    *  更新时间
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
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets internetBandwidthInfo
    *  internetBandwidthInfo
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo|null
    */
    public function getInternetBandwidthInfo()
    {
        return $this->container['internetBandwidthInfo'];
    }

    /**
    * Sets internetBandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo|null $internetBandwidthInfo internetBandwidthInfo
    *
    * @return $this
    */
    public function setInternetBandwidthInfo($internetBandwidthInfo)
    {
        $this->container['internetBandwidthInfo'] = $internetBandwidthInfo;
        return $this;
    }

    /**
    * Gets globalConnectionBandwidthInfo
    *  globalConnectionBandwidthInfo
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\GlobalConnectionBandwidthInfo|null
    */
    public function getGlobalConnectionBandwidthInfo()
    {
        return $this->container['globalConnectionBandwidthInfo'];
    }

    /**
    * Sets globalConnectionBandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\GlobalConnectionBandwidthInfo|null $globalConnectionBandwidthInfo globalConnectionBandwidthInfo
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthInfo($globalConnectionBandwidthInfo)
    {
        $this->container['globalConnectionBandwidthInfo'] = $globalConnectionBandwidthInfo;
        return $this;
    }

    /**
    * Gets associateInstanceInfo
    *  associateInstanceInfo
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo|null
    */
    public function getAssociateInstanceInfo()
    {
        return $this->container['associateInstanceInfo'];
    }

    /**
    * Sets associateInstanceInfo
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo|null $associateInstanceInfo associateInstanceInfo
    *
    * @return $this
    */
    public function setAssociateInstanceInfo($associateInstanceInfo)
    {
        $this->container['associateInstanceInfo'] = $associateInstanceInfo;
        return $this;
    }

    /**
    * Gets isPrePaid
    *  是否包周期
    *
    * @return bool|null
    */
    public function getIsPrePaid()
    {
        return $this->container['isPrePaid'];
    }

    /**
    * Sets isPrePaid
    *
    * @param bool|null $isPrePaid 是否包周期
    *
    * @return $this
    */
    public function setIsPrePaid($isPrePaid)
    {
        $this->container['isPrePaid'] = $isPrePaid;
        return $this;
    }

    /**
    * Gets tags
    *  全域弹性公网IP标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $tags 全域弹性公网IP标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $sysTags 系统标签
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  资源的企业项目id
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
    * @param string|null $enterpriseProjectId 资源的企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

