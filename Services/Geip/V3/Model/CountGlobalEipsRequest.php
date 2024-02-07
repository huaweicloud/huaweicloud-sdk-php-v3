<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountGlobalEipsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountGlobalEipsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  根据ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * ipAddress  根据ip地址过滤
    * ipv6Address  根据ipv6地址过滤
    * freezen  根据是否冻结过滤
    * polluted  根据是否污染过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * gcbBandwidthIsNull  根据是否绑定骨干带宽过滤
    * status  根据资源状态过滤
    * associateInstanceInfoRegion  根据绑定实例所属的局点过滤
    * associateInstanceInfoPublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInfoInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInfoInstanceType  根据绑定实例的类型过滤
    * associateInstanceInfoInstanceId  根据绑定实例的ID过滤
    * associateInstanceInfoProjectId  query by associate_instance_info.project_id
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string[]',
            'internetBandwidthId' => 'string[]',
            'name' => 'string[]',
            'nameLike' => 'string',
            'accessSite' => 'string[]',
            'geipPoolName' => 'string[]',
            'isp' => 'string[]',
            'ipVersion' => 'int[]',
            'ipAddress' => 'string[]',
            'ipv6Address' => 'string[]',
            'freezen' => 'bool[]',
            'polluted' => 'bool[]',
            'internetBandwidthIsNull' => 'bool[]',
            'gcbBandwidthIsNull' => 'bool[]',
            'status' => 'string[]',
            'associateInstanceInfoRegion' => 'string[]',
            'associateInstanceInfoPublicBorderGroup' => 'string[]',
            'associateInstanceInfoInstanceSite' => 'string[]',
            'associateInstanceInfoInstanceType' => 'string[]',
            'associateInstanceInfoInstanceId' => 'string[]',
            'associateInstanceInfoProjectId' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  根据ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * ipAddress  根据ip地址过滤
    * ipv6Address  根据ipv6地址过滤
    * freezen  根据是否冻结过滤
    * polluted  根据是否污染过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * gcbBandwidthIsNull  根据是否绑定骨干带宽过滤
    * status  根据资源状态过滤
    * associateInstanceInfoRegion  根据绑定实例所属的局点过滤
    * associateInstanceInfoPublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInfoInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInfoInstanceType  根据绑定实例的类型过滤
    * associateInstanceInfoInstanceId  根据绑定实例的ID过滤
    * associateInstanceInfoProjectId  query by associate_instance_info.project_id
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'internetBandwidthId' => null,
        'name' => null,
        'nameLike' => null,
        'accessSite' => null,
        'geipPoolName' => null,
        'isp' => null,
        'ipVersion' => 'int32',
        'ipAddress' => null,
        'ipv6Address' => null,
        'freezen' => null,
        'polluted' => null,
        'internetBandwidthIsNull' => null,
        'gcbBandwidthIsNull' => null,
        'status' => null,
        'associateInstanceInfoRegion' => null,
        'associateInstanceInfoPublicBorderGroup' => null,
        'associateInstanceInfoInstanceSite' => null,
        'associateInstanceInfoInstanceType' => null,
        'associateInstanceInfoInstanceId' => null,
        'associateInstanceInfoProjectId' => null,
        'enterpriseProjectId' => null,
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
    * id  根据ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * ipAddress  根据ip地址过滤
    * ipv6Address  根据ipv6地址过滤
    * freezen  根据是否冻结过滤
    * polluted  根据是否污染过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * gcbBandwidthIsNull  根据是否绑定骨干带宽过滤
    * status  根据资源状态过滤
    * associateInstanceInfoRegion  根据绑定实例所属的局点过滤
    * associateInstanceInfoPublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInfoInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInfoInstanceType  根据绑定实例的类型过滤
    * associateInstanceInfoInstanceId  根据绑定实例的ID过滤
    * associateInstanceInfoProjectId  query by associate_instance_info.project_id
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'internetBandwidthId' => 'internet_bandwidth_id',
            'name' => 'name',
            'nameLike' => 'name_like',
            'accessSite' => 'access_site',
            'geipPoolName' => 'geip_pool_name',
            'isp' => 'isp',
            'ipVersion' => 'ip_version',
            'ipAddress' => 'ip_address',
            'ipv6Address' => 'ipv6_address',
            'freezen' => 'freezen',
            'polluted' => 'polluted',
            'internetBandwidthIsNull' => 'internet_bandwidth_is_null',
            'gcbBandwidthIsNull' => 'gcb_bandwidth_is_null',
            'status' => 'status',
            'associateInstanceInfoRegion' => 'associate_instance_info.region',
            'associateInstanceInfoPublicBorderGroup' => 'associate_instance_info.public_border_group',
            'associateInstanceInfoInstanceSite' => 'associate_instance_info.instance_site',
            'associateInstanceInfoInstanceType' => 'associate_instance_info.instance_type',
            'associateInstanceInfoInstanceId' => 'associate_instance_info.instance_id',
            'associateInstanceInfoProjectId' => 'associate_instance_info.project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  根据ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * ipAddress  根据ip地址过滤
    * ipv6Address  根据ipv6地址过滤
    * freezen  根据是否冻结过滤
    * polluted  根据是否污染过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * gcbBandwidthIsNull  根据是否绑定骨干带宽过滤
    * status  根据资源状态过滤
    * associateInstanceInfoRegion  根据绑定实例所属的局点过滤
    * associateInstanceInfoPublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInfoInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInfoInstanceType  根据绑定实例的类型过滤
    * associateInstanceInfoInstanceId  根据绑定实例的ID过滤
    * associateInstanceInfoProjectId  query by associate_instance_info.project_id
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'internetBandwidthId' => 'setInternetBandwidthId',
            'name' => 'setName',
            'nameLike' => 'setNameLike',
            'accessSite' => 'setAccessSite',
            'geipPoolName' => 'setGeipPoolName',
            'isp' => 'setIsp',
            'ipVersion' => 'setIpVersion',
            'ipAddress' => 'setIpAddress',
            'ipv6Address' => 'setIpv6Address',
            'freezen' => 'setFreezen',
            'polluted' => 'setPolluted',
            'internetBandwidthIsNull' => 'setInternetBandwidthIsNull',
            'gcbBandwidthIsNull' => 'setGcbBandwidthIsNull',
            'status' => 'setStatus',
            'associateInstanceInfoRegion' => 'setAssociateInstanceInfoRegion',
            'associateInstanceInfoPublicBorderGroup' => 'setAssociateInstanceInfoPublicBorderGroup',
            'associateInstanceInfoInstanceSite' => 'setAssociateInstanceInfoInstanceSite',
            'associateInstanceInfoInstanceType' => 'setAssociateInstanceInfoInstanceType',
            'associateInstanceInfoInstanceId' => 'setAssociateInstanceInfoInstanceId',
            'associateInstanceInfoProjectId' => 'setAssociateInstanceInfoProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  根据ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * ipAddress  根据ip地址过滤
    * ipv6Address  根据ipv6地址过滤
    * freezen  根据是否冻结过滤
    * polluted  根据是否污染过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * gcbBandwidthIsNull  根据是否绑定骨干带宽过滤
    * status  根据资源状态过滤
    * associateInstanceInfoRegion  根据绑定实例所属的局点过滤
    * associateInstanceInfoPublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInfoInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInfoInstanceType  根据绑定实例的类型过滤
    * associateInstanceInfoInstanceId  根据绑定实例的ID过滤
    * associateInstanceInfoProjectId  query by associate_instance_info.project_id
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'internetBandwidthId' => 'getInternetBandwidthId',
            'name' => 'getName',
            'nameLike' => 'getNameLike',
            'accessSite' => 'getAccessSite',
            'geipPoolName' => 'getGeipPoolName',
            'isp' => 'getIsp',
            'ipVersion' => 'getIpVersion',
            'ipAddress' => 'getIpAddress',
            'ipv6Address' => 'getIpv6Address',
            'freezen' => 'getFreezen',
            'polluted' => 'getPolluted',
            'internetBandwidthIsNull' => 'getInternetBandwidthIsNull',
            'gcbBandwidthIsNull' => 'getGcbBandwidthIsNull',
            'status' => 'getStatus',
            'associateInstanceInfoRegion' => 'getAssociateInstanceInfoRegion',
            'associateInstanceInfoPublicBorderGroup' => 'getAssociateInstanceInfoPublicBorderGroup',
            'associateInstanceInfoInstanceSite' => 'getAssociateInstanceInfoInstanceSite',
            'associateInstanceInfoInstanceType' => 'getAssociateInstanceInfoInstanceType',
            'associateInstanceInfoInstanceId' => 'getAssociateInstanceInfoInstanceId',
            'associateInstanceInfoProjectId' => 'getAssociateInstanceInfoProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    const STATUS_IDLE = 'idle';
    const STATUS_INUSE = 'inuse';
    const STATUS_PENDING_CREATE = 'pending_create';
    const STATUS_PENDING_UPDATE = 'pending_update';
    

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
            self::STATUS_IDLE,
            self::STATUS_INUSE,
            self::STATUS_PENDING_CREATE,
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
        $this->container['internetBandwidthId'] = isset($data['internetBandwidthId']) ? $data['internetBandwidthId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['geipPoolName'] = isset($data['geipPoolName']) ? $data['geipPoolName'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
        $this->container['freezen'] = isset($data['freezen']) ? $data['freezen'] : null;
        $this->container['polluted'] = isset($data['polluted']) ? $data['polluted'] : null;
        $this->container['internetBandwidthIsNull'] = isset($data['internetBandwidthIsNull']) ? $data['internetBandwidthIsNull'] : null;
        $this->container['gcbBandwidthIsNull'] = isset($data['gcbBandwidthIsNull']) ? $data['gcbBandwidthIsNull'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['associateInstanceInfoRegion'] = isset($data['associateInstanceInfoRegion']) ? $data['associateInstanceInfoRegion'] : null;
        $this->container['associateInstanceInfoPublicBorderGroup'] = isset($data['associateInstanceInfoPublicBorderGroup']) ? $data['associateInstanceInfoPublicBorderGroup'] : null;
        $this->container['associateInstanceInfoInstanceSite'] = isset($data['associateInstanceInfoInstanceSite']) ? $data['associateInstanceInfoInstanceSite'] : null;
        $this->container['associateInstanceInfoInstanceType'] = isset($data['associateInstanceInfoInstanceType']) ? $data['associateInstanceInfoInstanceType'] : null;
        $this->container['associateInstanceInfoInstanceId'] = isset($data['associateInstanceInfoInstanceId']) ? $data['associateInstanceInfoInstanceId'] : null;
        $this->container['associateInstanceInfoProjectId'] = isset($data['associateInstanceInfoProjectId']) ? $data['associateInstanceInfoProjectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    *  根据ID过滤
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据ID过滤
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets internetBandwidthId
    *  根据全域公网带宽的ID过滤
    *
    * @return string[]|null
    */
    public function getInternetBandwidthId()
    {
        return $this->container['internetBandwidthId'];
    }

    /**
    * Sets internetBandwidthId
    *
    * @param string[]|null $internetBandwidthId 根据全域公网带宽的ID过滤
    *
    * @return $this
    */
    public function setInternetBandwidthId($internetBandwidthId)
    {
        $this->container['internetBandwidthId'] = $internetBandwidthId;
        return $this;
    }

    /**
    * Gets name
    *  根据名称过滤
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 根据名称过滤
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameLike
    *  根据名称模糊匹配
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike 根据名称模糊匹配
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets accessSite
    *  根据接入点过滤
    *
    * @return string[]|null
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string[]|null $accessSite 根据接入点过滤
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
    *  根据全域弹性公网IP池名称过滤
    *
    * @return string[]|null
    */
    public function getGeipPoolName()
    {
        return $this->container['geipPoolName'];
    }

    /**
    * Sets geipPoolName
    *
    * @param string[]|null $geipPoolName 根据全域弹性公网IP池名称过滤
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
    *  根据运营商线路过滤
    *
    * @return string[]|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string[]|null $isp 根据运营商线路过滤
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
    *  根据IP版本过滤
    *
    * @return int[]|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int[]|null $ipVersion 根据IP版本过滤
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
    *  根据ip地址过滤
    *
    * @return string[]|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string[]|null $ipAddress 根据ip地址过滤
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
    *  根据ipv6地址过滤
    *
    * @return string[]|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string[]|null $ipv6Address 根据ipv6地址过滤
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
    *  根据是否冻结过滤
    *
    * @return bool[]|null
    */
    public function getFreezen()
    {
        return $this->container['freezen'];
    }

    /**
    * Sets freezen
    *
    * @param bool[]|null $freezen 根据是否冻结过滤
    *
    * @return $this
    */
    public function setFreezen($freezen)
    {
        $this->container['freezen'] = $freezen;
        return $this;
    }

    /**
    * Gets polluted
    *  根据是否污染过滤
    *
    * @return bool[]|null
    */
    public function getPolluted()
    {
        return $this->container['polluted'];
    }

    /**
    * Sets polluted
    *
    * @param bool[]|null $polluted 根据是否污染过滤
    *
    * @return $this
    */
    public function setPolluted($polluted)
    {
        $this->container['polluted'] = $polluted;
        return $this;
    }

    /**
    * Gets internetBandwidthIsNull
    *  根据是否绑定全域公网带宽过滤
    *
    * @return bool[]|null
    */
    public function getInternetBandwidthIsNull()
    {
        return $this->container['internetBandwidthIsNull'];
    }

    /**
    * Sets internetBandwidthIsNull
    *
    * @param bool[]|null $internetBandwidthIsNull 根据是否绑定全域公网带宽过滤
    *
    * @return $this
    */
    public function setInternetBandwidthIsNull($internetBandwidthIsNull)
    {
        $this->container['internetBandwidthIsNull'] = $internetBandwidthIsNull;
        return $this;
    }

    /**
    * Gets gcbBandwidthIsNull
    *  根据是否绑定骨干带宽过滤
    *
    * @return bool[]|null
    */
    public function getGcbBandwidthIsNull()
    {
        return $this->container['gcbBandwidthIsNull'];
    }

    /**
    * Sets gcbBandwidthIsNull
    *
    * @param bool[]|null $gcbBandwidthIsNull 根据是否绑定骨干带宽过滤
    *
    * @return $this
    */
    public function setGcbBandwidthIsNull($gcbBandwidthIsNull)
    {
        $this->container['gcbBandwidthIsNull'] = $gcbBandwidthIsNull;
        return $this;
    }

    /**
    * Gets status
    *  根据资源状态过滤
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 根据资源状态过滤
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets associateInstanceInfoRegion
    *  根据绑定实例所属的局点过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoRegion()
    {
        return $this->container['associateInstanceInfoRegion'];
    }

    /**
    * Sets associateInstanceInfoRegion
    *
    * @param string[]|null $associateInstanceInfoRegion 根据绑定实例所属的局点过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInfoRegion($associateInstanceInfoRegion)
    {
        $this->container['associateInstanceInfoRegion'] = $associateInstanceInfoRegion;
        return $this;
    }

    /**
    * Gets associateInstanceInfoPublicBorderGroup
    *  根据绑定实例所属的边缘信息过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoPublicBorderGroup()
    {
        return $this->container['associateInstanceInfoPublicBorderGroup'];
    }

    /**
    * Sets associateInstanceInfoPublicBorderGroup
    *
    * @param string[]|null $associateInstanceInfoPublicBorderGroup 根据绑定实例所属的边缘信息过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInfoPublicBorderGroup($associateInstanceInfoPublicBorderGroup)
    {
        $this->container['associateInstanceInfoPublicBorderGroup'] = $associateInstanceInfoPublicBorderGroup;
        return $this;
    }

    /**
    * Gets associateInstanceInfoInstanceSite
    *  根据绑定实例所在的站点过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoInstanceSite()
    {
        return $this->container['associateInstanceInfoInstanceSite'];
    }

    /**
    * Sets associateInstanceInfoInstanceSite
    *
    * @param string[]|null $associateInstanceInfoInstanceSite 根据绑定实例所在的站点过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInfoInstanceSite($associateInstanceInfoInstanceSite)
    {
        $this->container['associateInstanceInfoInstanceSite'] = $associateInstanceInfoInstanceSite;
        return $this;
    }

    /**
    * Gets associateInstanceInfoInstanceType
    *  根据绑定实例的类型过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoInstanceType()
    {
        return $this->container['associateInstanceInfoInstanceType'];
    }

    /**
    * Sets associateInstanceInfoInstanceType
    *
    * @param string[]|null $associateInstanceInfoInstanceType 根据绑定实例的类型过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInfoInstanceType($associateInstanceInfoInstanceType)
    {
        $this->container['associateInstanceInfoInstanceType'] = $associateInstanceInfoInstanceType;
        return $this;
    }

    /**
    * Gets associateInstanceInfoInstanceId
    *  根据绑定实例的ID过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoInstanceId()
    {
        return $this->container['associateInstanceInfoInstanceId'];
    }

    /**
    * Sets associateInstanceInfoInstanceId
    *
    * @param string[]|null $associateInstanceInfoInstanceId 根据绑定实例的ID过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInfoInstanceId($associateInstanceInfoInstanceId)
    {
        $this->container['associateInstanceInfoInstanceId'] = $associateInstanceInfoInstanceId;
        return $this;
    }

    /**
    * Gets associateInstanceInfoProjectId
    *  query by associate_instance_info.project_id
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInfoProjectId()
    {
        return $this->container['associateInstanceInfoProjectId'];
    }

    /**
    * Sets associateInstanceInfoProjectId
    *
    * @param string[]|null $associateInstanceInfoProjectId query by associate_instance_info.project_id
    *
    * @return $this
    */
    public function setAssociateInstanceInfoProjectId($associateInstanceInfoProjectId)
    {
        $this->container['associateInstanceInfoProjectId'] = $associateInstanceInfoProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤
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
    *  根据标签过滤
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
    * @param string[]|null $tags 根据标签过滤
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

