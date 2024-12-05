<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRmsGlobalDcGatewayRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRmsGlobalDcGatewayRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  offset
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  pageReverse
    * rpName  通过rp_name过滤记录
    * domainId  domain_id
    * regionId  region_id
    * resourceType  resource_type
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过淲实例
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalCenterNetworkId  全球中心网络ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'rpName' => 'string',
            'domainId' => 'string',
            'regionId' => 'string',
            'resourceType' => 'string',
            'fields' => 'string[]',
            'extFields' => 'string[]',
            'sortKey' => 'string',
            'sortDir' => 'string[]',
            'id' => 'string[]',
            'name' => 'string[]',
            'status' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'globalCenterNetworkId' => 'string[]',
            'siteNetworkId' => 'string[]',
            'cloudConnectionId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  offset
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  pageReverse
    * rpName  通过rp_name过滤记录
    * domainId  domain_id
    * regionId  region_id
    * resourceType  resource_type
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过淲实例
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalCenterNetworkId  全球中心网络ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'rpName' => null,
        'domainId' => null,
        'regionId' => null,
        'resourceType' => null,
        'fields' => null,
        'extFields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'globalCenterNetworkId' => null,
        'siteNetworkId' => null,
        'cloudConnectionId' => null
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
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  offset
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  pageReverse
    * rpName  通过rp_name过滤记录
    * domainId  domain_id
    * regionId  region_id
    * resourceType  resource_type
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过淲实例
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalCenterNetworkId  全球中心网络ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'rpName' => 'rp_name',
            'domainId' => 'domain_id',
            'regionId' => 'region_id',
            'resourceType' => 'resource_type',
            'fields' => 'fields',
            'extFields' => 'ext_fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'globalCenterNetworkId' => 'global_center_network_id',
            'siteNetworkId' => 'site_network_id',
            'cloudConnectionId' => 'cloud_connection_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  offset
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  pageReverse
    * rpName  通过rp_name过滤记录
    * domainId  domain_id
    * regionId  region_id
    * resourceType  resource_type
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过淲实例
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalCenterNetworkId  全球中心网络ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'rpName' => 'setRpName',
            'domainId' => 'setDomainId',
            'regionId' => 'setRegionId',
            'resourceType' => 'setResourceType',
            'fields' => 'setFields',
            'extFields' => 'setExtFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'globalCenterNetworkId' => 'setGlobalCenterNetworkId',
            'siteNetworkId' => 'setSiteNetworkId',
            'cloudConnectionId' => 'setCloudConnectionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  offset
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  pageReverse
    * rpName  通过rp_name过滤记录
    * domainId  domain_id
    * regionId  region_id
    * resourceType  resource_type
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * id  根据资源ID过滤实例
    * name  根据名字过滤查询，可查询多个名字。
    * status  根椐资源状态过淲实例
    * enterpriseProjectId  根据企业项目ID过滤资源实例
    * globalCenterNetworkId  全球中心网络ID
    * siteNetworkId  站点网络ID
    * cloudConnectionId  云连接ID
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'rpName' => 'getRpName',
            'domainId' => 'getDomainId',
            'regionId' => 'getRegionId',
            'resourceType' => 'getResourceType',
            'fields' => 'getFields',
            'extFields' => 'getExtFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'globalCenterNetworkId' => 'getGlobalCenterNetworkId',
            'siteNetworkId' => 'getSiteNetworkId',
            'cloudConnectionId' => 'getCloudConnectionId'
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
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
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
        $this->container['rpName'] = isset($data['rpName']) ? $data['rpName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['extFields'] = isset($data['extFields']) ? $data['extFields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['globalCenterNetworkId'] = isset($data['globalCenterNetworkId']) ? $data['globalCenterNetworkId'] : null;
        $this->container['siteNetworkId'] = isset($data['siteNetworkId']) ? $data['siteNetworkId'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['rpName'] === null) {
            $invalidProperties[] = "'rpName' can't be null";
        }
            if (!preg_match("/dcaas/", $this->container['rpName'])) {
                $invalidProperties[] = "invalid value for 'rpName', must be conform to the pattern /dcaas/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if (!preg_match("/[a-zA-Z0-9-]{1,64}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-zA-Z0-9-]{1,64}/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if (!preg_match("/gdgw/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /gdgw/.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
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
    *  每页返回的个数。 取值范围：1~2000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~2000。
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
    *  offset
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
    * @param int|null $offset offset
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
    *  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
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
    * @param string|null $marker 上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
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
    *  pageReverse
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
    * @param bool|null $pageReverse pageReverse
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets rpName
    *  通过rp_name过滤记录
    *
    * @return string
    */
    public function getRpName()
    {
        return $this->container['rpName'];
    }

    /**
    * Sets rpName
    *
    * @param string $rpName 通过rp_name过滤记录
    *
    * @return $this
    */
    public function setRpName($rpName)
    {
        $this->container['rpName'] = $rpName;
        return $this;
    }

    /**
    * Gets domainId
    *  domain_id
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId domain_id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets regionId
    *  region_id
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId region_id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceType
    *  resource_type
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType resource_type
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets fields
    *  显示字段列表
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
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets extFields
    *  show response ext-fields
    *
    * @return string[]|null
    */
    public function getExtFields()
    {
        return $this->container['extFields'];
    }

    /**
    * Sets extFields
    *
    * @param string[]|null $extFields show response ext-fields
    *
    * @return $this
    */
    public function setExtFields($extFields)
    {
        $this->container['extFields'] = $extFields;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段。
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
    * @param string|null $sortKey 排序字段。
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
    *  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return string[]|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string[]|null $sortDir 返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets id
    *  根据资源ID过滤实例
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
    * @param string[]|null $id 根据资源ID过滤实例
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
    *  根据名字过滤查询，可查询多个名字。
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
    * @param string[]|null $name 根据名字过滤查询，可查询多个名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  根椐资源状态过淲实例
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
    * @param string[]|null $status 根椐资源状态过淲实例
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤资源实例
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
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤资源实例
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
    *  全球中心网络ID
    *
    * @return string[]|null
    */
    public function getGlobalCenterNetworkId()
    {
        return $this->container['globalCenterNetworkId'];
    }

    /**
    * Sets globalCenterNetworkId
    *
    * @param string[]|null $globalCenterNetworkId 全球中心网络ID
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
    * @return string[]|null
    */
    public function getSiteNetworkId()
    {
        return $this->container['siteNetworkId'];
    }

    /**
    * Sets siteNetworkId
    *
    * @param string[]|null $siteNetworkId 站点网络ID
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
    * @return string[]|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string[]|null $cloudConnectionId 云连接ID
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
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

