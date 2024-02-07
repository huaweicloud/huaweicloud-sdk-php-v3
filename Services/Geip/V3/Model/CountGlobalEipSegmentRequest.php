<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountGlobalEipSegmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountGlobalEipSegmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * id  根据资源ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * cidr  根据分配的CIDR过滤
    * cidrV6  根据分配的IPv6 CIDR过滤
    * freezen  根据是否冻结过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * status  根据资源状态过滤
    * associateInstanceRegion  根据绑定实例所属的局点过滤
    * associateInstancePublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInstanceType  根据绑定实例的类型过滤
    * associateInstanceInstanceId  根据绑定实例的ID过滤
    * associateInstanceProjectId  根据绑定实例所属的项目ID过滤
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'fields' => 'string[]',
            'id' => 'string[]',
            'internetBandwidthId' => 'string[]',
            'name' => 'string[]',
            'nameLike' => 'string',
            'accessSite' => 'string[]',
            'geipPoolName' => 'string[]',
            'isp' => 'string[]',
            'ipVersion' => 'int[]',
            'cidr' => 'string[]',
            'cidrV6' => 'string[]',
            'freezen' => 'bool[]',
            'internetBandwidthIsNull' => 'bool[]',
            'status' => 'string[]',
            'associateInstanceRegion' => 'string[]',
            'associateInstancePublicBorderGroup' => 'string[]',
            'associateInstanceInstanceSite' => 'string[]',
            'associateInstanceInstanceType' => 'string[]',
            'associateInstanceInstanceId' => 'string[]',
            'associateInstanceProjectId' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'tags' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * id  根据资源ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * cidr  根据分配的CIDR过滤
    * cidrV6  根据分配的IPv6 CIDR过滤
    * freezen  根据是否冻结过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * status  根据资源状态过滤
    * associateInstanceRegion  根据绑定实例所属的局点过滤
    * associateInstancePublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInstanceType  根据绑定实例的类型过滤
    * associateInstanceInstanceId  根据绑定实例的ID过滤
    * associateInstanceProjectId  根据绑定实例所属的项目ID过滤
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'fields' => null,
        'id' => null,
        'internetBandwidthId' => null,
        'name' => null,
        'nameLike' => null,
        'accessSite' => null,
        'geipPoolName' => null,
        'isp' => null,
        'ipVersion' => 'int32',
        'cidr' => null,
        'cidrV6' => null,
        'freezen' => null,
        'internetBandwidthIsNull' => null,
        'status' => null,
        'associateInstanceRegion' => null,
        'associateInstancePublicBorderGroup' => null,
        'associateInstanceInstanceSite' => null,
        'associateInstanceInstanceType' => null,
        'associateInstanceInstanceId' => null,
        'associateInstanceProjectId' => null,
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
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * id  根据资源ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * cidr  根据分配的CIDR过滤
    * cidrV6  根据分配的IPv6 CIDR过滤
    * freezen  根据是否冻结过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * status  根据资源状态过滤
    * associateInstanceRegion  根据绑定实例所属的局点过滤
    * associateInstancePublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInstanceType  根据绑定实例的类型过滤
    * associateInstanceInstanceId  根据绑定实例的ID过滤
    * associateInstanceProjectId  根据绑定实例所属的项目ID过滤
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'fields' => 'fields',
            'id' => 'id',
            'internetBandwidthId' => 'internet_bandwidth_id',
            'name' => 'name',
            'nameLike' => 'name_like',
            'accessSite' => 'access_site',
            'geipPoolName' => 'geip_pool_name',
            'isp' => 'isp',
            'ipVersion' => 'ip_version',
            'cidr' => 'cidr',
            'cidrV6' => 'cidr_v6',
            'freezen' => 'freezen',
            'internetBandwidthIsNull' => 'internet_bandwidth_is_null',
            'status' => 'status',
            'associateInstanceRegion' => 'associate_instance.region',
            'associateInstancePublicBorderGroup' => 'associate_instance.public_border_group',
            'associateInstanceInstanceSite' => 'associate_instance.instance_site',
            'associateInstanceInstanceType' => 'associate_instance.instance_type',
            'associateInstanceInstanceId' => 'associate_instance.instance_id',
            'associateInstanceProjectId' => 'associate_instance.project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * id  根据资源ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * cidr  根据分配的CIDR过滤
    * cidrV6  根据分配的IPv6 CIDR过滤
    * freezen  根据是否冻结过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * status  根据资源状态过滤
    * associateInstanceRegion  根据绑定实例所属的局点过滤
    * associateInstancePublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInstanceType  根据绑定实例的类型过滤
    * associateInstanceInstanceId  根据绑定实例的ID过滤
    * associateInstanceProjectId  根据绑定实例所属的项目ID过滤
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'fields' => 'setFields',
            'id' => 'setId',
            'internetBandwidthId' => 'setInternetBandwidthId',
            'name' => 'setName',
            'nameLike' => 'setNameLike',
            'accessSite' => 'setAccessSite',
            'geipPoolName' => 'setGeipPoolName',
            'isp' => 'setIsp',
            'ipVersion' => 'setIpVersion',
            'cidr' => 'setCidr',
            'cidrV6' => 'setCidrV6',
            'freezen' => 'setFreezen',
            'internetBandwidthIsNull' => 'setInternetBandwidthIsNull',
            'status' => 'setStatus',
            'associateInstanceRegion' => 'setAssociateInstanceRegion',
            'associateInstancePublicBorderGroup' => 'setAssociateInstancePublicBorderGroup',
            'associateInstanceInstanceSite' => 'setAssociateInstanceInstanceSite',
            'associateInstanceInstanceType' => 'setAssociateInstanceInstanceType',
            'associateInstanceInstanceId' => 'setAssociateInstanceInstanceId',
            'associateInstanceProjectId' => 'setAssociateInstanceProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * id  根据资源ID过滤
    * internetBandwidthId  根据全域公网带宽的ID过滤
    * name  根据名称过滤
    * nameLike  根据名称模糊匹配
    * accessSite  根据接入点过滤
    * geipPoolName  根据全域弹性公网IP池名称过滤
    * isp  根据运营商线路过滤
    * ipVersion  根据IP版本过滤
    * cidr  根据分配的CIDR过滤
    * cidrV6  根据分配的IPv6 CIDR过滤
    * freezen  根据是否冻结过滤
    * internetBandwidthIsNull  根据是否绑定全域公网带宽过滤
    * status  根据资源状态过滤
    * associateInstanceRegion  根据绑定实例所属的局点过滤
    * associateInstancePublicBorderGroup  根据绑定实例所属的边缘信息过滤
    * associateInstanceInstanceSite  根据绑定实例所在的站点过滤
    * associateInstanceInstanceType  根据绑定实例的类型过滤
    * associateInstanceInstanceId  根据绑定实例的ID过滤
    * associateInstanceProjectId  根据绑定实例所属的项目ID过滤
    * enterpriseProjectId  根据企业项目ID过滤
    * tags  根据标签过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'fields' => 'getFields',
            'id' => 'getId',
            'internetBandwidthId' => 'getInternetBandwidthId',
            'name' => 'getName',
            'nameLike' => 'getNameLike',
            'accessSite' => 'getAccessSite',
            'geipPoolName' => 'getGeipPoolName',
            'isp' => 'getIsp',
            'ipVersion' => 'getIpVersion',
            'cidr' => 'getCidr',
            'cidrV6' => 'getCidrV6',
            'freezen' => 'getFreezen',
            'internetBandwidthIsNull' => 'getInternetBandwidthIsNull',
            'status' => 'getStatus',
            'associateInstanceRegion' => 'getAssociateInstanceRegion',
            'associateInstancePublicBorderGroup' => 'getAssociateInstancePublicBorderGroup',
            'associateInstanceInstanceSite' => 'getAssociateInstanceInstanceSite',
            'associateInstanceInstanceType' => 'getAssociateInstanceInstanceType',
            'associateInstanceInstanceId' => 'getAssociateInstanceInstanceId',
            'associateInstanceProjectId' => 'getAssociateInstanceProjectId',
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
    const FIELDS_COUNT = 'count';
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
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_COUNT,
        ];
    }

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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['internetBandwidthId'] = isset($data['internetBandwidthId']) ? $data['internetBandwidthId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['geipPoolName'] = isset($data['geipPoolName']) ? $data['geipPoolName'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['cidrV6'] = isset($data['cidrV6']) ? $data['cidrV6'] : null;
        $this->container['freezen'] = isset($data['freezen']) ? $data['freezen'] : null;
        $this->container['internetBandwidthIsNull'] = isset($data['internetBandwidthIsNull']) ? $data['internetBandwidthIsNull'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['associateInstanceRegion'] = isset($data['associateInstanceRegion']) ? $data['associateInstanceRegion'] : null;
        $this->container['associateInstancePublicBorderGroup'] = isset($data['associateInstancePublicBorderGroup']) ? $data['associateInstancePublicBorderGroup'] : null;
        $this->container['associateInstanceInstanceSite'] = isset($data['associateInstanceInstanceSite']) ? $data['associateInstanceInstanceSite'] : null;
        $this->container['associateInstanceInstanceType'] = isset($data['associateInstanceInstanceType']) ? $data['associateInstanceInstanceType'] : null;
        $this->container['associateInstanceInstanceId'] = isset($data['associateInstanceInstanceId']) ? $data['associateInstanceInstanceId'] : null;
        $this->container['associateInstanceProjectId'] = isset($data['associateInstanceProjectId']) ? $data['associateInstanceProjectId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets limit
    *  每页条数
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
    * @param int|null $limit 每页条数
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
    * Gets pageReverse
    *  翻页方向
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 翻页方向
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets fields
    *  只显示指定的字段
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
    * @param string[]|null $fields 只显示指定的字段
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets id
    *  根据资源ID过滤
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
    * @param string[]|null $id 根据资源ID过滤
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
    * Gets cidr
    *  根据分配的CIDR过滤
    *
    * @return string[]|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string[]|null $cidr 根据分配的CIDR过滤
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets cidrV6
    *  根据分配的IPv6 CIDR过滤
    *
    * @return string[]|null
    */
    public function getCidrV6()
    {
        return $this->container['cidrV6'];
    }

    /**
    * Sets cidrV6
    *
    * @param string[]|null $cidrV6 根据分配的IPv6 CIDR过滤
    *
    * @return $this
    */
    public function setCidrV6($cidrV6)
    {
        $this->container['cidrV6'] = $cidrV6;
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
    * Gets associateInstanceRegion
    *  根据绑定实例所属的局点过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceRegion()
    {
        return $this->container['associateInstanceRegion'];
    }

    /**
    * Sets associateInstanceRegion
    *
    * @param string[]|null $associateInstanceRegion 根据绑定实例所属的局点过滤
    *
    * @return $this
    */
    public function setAssociateInstanceRegion($associateInstanceRegion)
    {
        $this->container['associateInstanceRegion'] = $associateInstanceRegion;
        return $this;
    }

    /**
    * Gets associateInstancePublicBorderGroup
    *  根据绑定实例所属的边缘信息过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstancePublicBorderGroup()
    {
        return $this->container['associateInstancePublicBorderGroup'];
    }

    /**
    * Sets associateInstancePublicBorderGroup
    *
    * @param string[]|null $associateInstancePublicBorderGroup 根据绑定实例所属的边缘信息过滤
    *
    * @return $this
    */
    public function setAssociateInstancePublicBorderGroup($associateInstancePublicBorderGroup)
    {
        $this->container['associateInstancePublicBorderGroup'] = $associateInstancePublicBorderGroup;
        return $this;
    }

    /**
    * Gets associateInstanceInstanceSite
    *  根据绑定实例所在的站点过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInstanceSite()
    {
        return $this->container['associateInstanceInstanceSite'];
    }

    /**
    * Sets associateInstanceInstanceSite
    *
    * @param string[]|null $associateInstanceInstanceSite 根据绑定实例所在的站点过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInstanceSite($associateInstanceInstanceSite)
    {
        $this->container['associateInstanceInstanceSite'] = $associateInstanceInstanceSite;
        return $this;
    }

    /**
    * Gets associateInstanceInstanceType
    *  根据绑定实例的类型过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInstanceType()
    {
        return $this->container['associateInstanceInstanceType'];
    }

    /**
    * Sets associateInstanceInstanceType
    *
    * @param string[]|null $associateInstanceInstanceType 根据绑定实例的类型过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInstanceType($associateInstanceInstanceType)
    {
        $this->container['associateInstanceInstanceType'] = $associateInstanceInstanceType;
        return $this;
    }

    /**
    * Gets associateInstanceInstanceId
    *  根据绑定实例的ID过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceInstanceId()
    {
        return $this->container['associateInstanceInstanceId'];
    }

    /**
    * Sets associateInstanceInstanceId
    *
    * @param string[]|null $associateInstanceInstanceId 根据绑定实例的ID过滤
    *
    * @return $this
    */
    public function setAssociateInstanceInstanceId($associateInstanceInstanceId)
    {
        $this->container['associateInstanceInstanceId'] = $associateInstanceInstanceId;
        return $this;
    }

    /**
    * Gets associateInstanceProjectId
    *  根据绑定实例所属的项目ID过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceProjectId()
    {
        return $this->container['associateInstanceProjectId'];
    }

    /**
    * Sets associateInstanceProjectId
    *
    * @param string[]|null $associateInstanceProjectId 根据绑定实例所属的项目ID过滤
    *
    * @return $this
    */
    public function setAssociateInstanceProjectId($associateInstanceProjectId)
    {
        $this->container['associateInstanceProjectId'] = $associateInstanceProjectId;
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

