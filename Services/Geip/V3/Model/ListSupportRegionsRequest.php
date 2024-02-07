<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSupportRegionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSupportRegionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * id  根据ID过滤
    * instanceType  根据实例类型过滤
    * publicBorderGroup  根据边缘信息过滤，中心站点or边缘站点
    * accessSite  根据接入点过滤
    * regionId  根据region_id过滤
    * remoteEndpoint  query by remote_endpoint
    * status  根据资源状态过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'fields' => 'string[]',
            'sortKey' => 'string[]',
            'sortDir' => 'string[]',
            'id' => 'string[]',
            'instanceType' => 'string[]',
            'publicBorderGroup' => 'string[]',
            'accessSite' => 'string[]',
            'regionId' => 'string[]',
            'remoteEndpoint' => 'string[]',
            'status' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * id  根据ID过滤
    * instanceType  根据实例类型过滤
    * publicBorderGroup  根据边缘信息过滤，中心站点or边缘站点
    * accessSite  根据接入点过滤
    * regionId  根据region_id过滤
    * remoteEndpoint  query by remote_endpoint
    * status  根据资源状态过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'fields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'instanceType' => null,
        'publicBorderGroup' => null,
        'accessSite' => null,
        'regionId' => null,
        'remoteEndpoint' => null,
        'status' => null
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
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * id  根据ID过滤
    * instanceType  根据实例类型过滤
    * publicBorderGroup  根据边缘信息过滤，中心站点or边缘站点
    * accessSite  根据接入点过滤
    * regionId  根据region_id过滤
    * remoteEndpoint  query by remote_endpoint
    * status  根据资源状态过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'fields' => 'fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'instanceType' => 'instance_type',
            'publicBorderGroup' => 'public_border_group',
            'accessSite' => 'access_site',
            'regionId' => 'region_id',
            'remoteEndpoint' => 'remote_endpoint',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * id  根据ID过滤
    * instanceType  根据实例类型过滤
    * publicBorderGroup  根据边缘信息过滤，中心站点or边缘站点
    * accessSite  根据接入点过滤
    * regionId  根据region_id过滤
    * remoteEndpoint  query by remote_endpoint
    * status  根据资源状态过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'fields' => 'setFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'instanceType' => 'setInstanceType',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'accessSite' => 'setAccessSite',
            'regionId' => 'setRegionId',
            'remoteEndpoint' => 'setRemoteEndpoint',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页条数
    * offset  分页起始点
    * marker  分页起始点
    * pageReverse  翻页方向
    * fields  只显示指定的字段
    * sortKey  按照sort_key指定的字段排序
    * sortDir  排序的方向，倒序或者正序
    * id  根据ID过滤
    * instanceType  根据实例类型过滤
    * publicBorderGroup  根据边缘信息过滤，中心站点or边缘站点
    * accessSite  根据接入点过滤
    * regionId  根据region_id过滤
    * remoteEndpoint  query by remote_endpoint
    * status  根据资源状态过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'fields' => 'getFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'instanceType' => 'getInstanceType',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'accessSite' => 'getAccessSite',
            'regionId' => 'getRegionId',
            'remoteEndpoint' => 'getRemoteEndpoint',
            'status' => 'getStatus'
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
    const FIELDS_ID = 'id';
    const FIELDS_INSTANCE_TYPE = 'instance_type';
    const FIELDS_ACCESS_SITE = 'access_site';
    const FIELDS_REGION_ID = 'region_id';
    const FIELDS_PUBLIC_BORDER_GROUP = 'public_border_group';
    const FIELDS_REMOTE_ENDPOINT = 'remote_endpoint';
    const FIELDS_STATUS = 'status';
    const FIELDS_CREATED_AT = 'created_at';
    const FIELDS_UPDATED_AT = 'updated_at';
    const SORT_KEY_ID = 'id';
    const SORT_KEY_INSTANCE_TYPE = 'instance_type';
    const SORT_KEY_ACCESS_SITE = 'access_site';
    const SORT_KEY_PUBLIC_BORDER_GROUP = 'public_border_group';
    const SORT_KEY_REGION_ID = 'region_id';
    const SORT_KEY_REMOTE_ENDPOINT = 'remote_endpoint';
    const SORT_KEY_STATUS = 'status';
    const SORT_KEY_CREATED_AT = 'created_at';
    const SORT_KEY_UPDATED_AT = 'updated_at';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_INSTANCE_TYPE,
            self::FIELDS_ACCESS_SITE,
            self::FIELDS_REGION_ID,
            self::FIELDS_PUBLIC_BORDER_GROUP,
            self::FIELDS_REMOTE_ENDPOINT,
            self::FIELDS_STATUS,
            self::FIELDS_CREATED_AT,
            self::FIELDS_UPDATED_AT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_ID,
            self::SORT_KEY_INSTANCE_TYPE,
            self::SORT_KEY_ACCESS_SITE,
            self::SORT_KEY_PUBLIC_BORDER_GROUP,
            self::SORT_KEY_REGION_ID,
            self::SORT_KEY_REMOTE_ENDPOINT,
            self::SORT_KEY_STATUS,
            self::SORT_KEY_CREATED_AT,
            self::SORT_KEY_UPDATED_AT,
        ];
    }

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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['remoteEndpoint'] = isset($data['remoteEndpoint']) ? $data['remoteEndpoint'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets sortKey
    *  按照sort_key指定的字段排序
    *
    * @return string[]|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string[]|null $sortKey 按照sort_key指定的字段排序
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
    *  排序的方向，倒序或者正序
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
    * @param string[]|null $sortDir 排序的方向，倒序或者正序
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
    * Gets instanceType
    *  根据实例类型过滤
    *
    * @return string[]|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string[]|null $instanceType 根据实例类型过滤
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  根据边缘信息过滤，中心站点or边缘站点
    *
    * @return string[]|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string[]|null $publicBorderGroup 根据边缘信息过滤，中心站点or边缘站点
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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
    * Gets regionId
    *  根据region_id过滤
    *
    * @return string[]|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string[]|null $regionId 根据region_id过滤
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets remoteEndpoint
    *  query by remote_endpoint
    *
    * @return string[]|null
    */
    public function getRemoteEndpoint()
    {
        return $this->container['remoteEndpoint'];
    }

    /**
    * Sets remoteEndpoint
    *
    * @param string[]|null $remoteEndpoint query by remote_endpoint
    *
    * @return $this
    */
    public function setRemoteEndpoint($remoteEndpoint)
    {
        $this->container['remoteEndpoint'] = $remoteEndpoint;
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

