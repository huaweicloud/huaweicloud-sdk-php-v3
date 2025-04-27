<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicZonesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicZonesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  待查询的域名的类型。  取值范围：public 默认值为空。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    * name  域名。  搜索模式默认为模糊搜索。
    * id  域名ID。
    * status  资源状态。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * sortKey  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
    * sortDir  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'offset' => 'int',
            'tags' => 'string',
            'name' => 'string',
            'id' => 'string',
            'status' => 'string',
            'searchMode' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  待查询的域名的类型。  取值范围：public 默认值为空。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    * name  域名。  搜索模式默认为模糊搜索。
    * id  域名ID。
    * status  资源状态。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * sortKey  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
    * sortDir  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'limit' => 'int32',
        'marker' => null,
        'offset' => 'int32',
        'tags' => null,
        'name' => null,
        'id' => null,
        'status' => null,
        'searchMode' => null,
        'sortKey' => null,
        'sortDir' => null,
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
    * type  待查询的域名的类型。  取值范围：public 默认值为空。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    * name  域名。  搜索模式默认为模糊搜索。
    * id  域名ID。
    * status  资源状态。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * sortKey  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
    * sortDir  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker',
            'offset' => 'offset',
            'tags' => 'tags',
            'name' => 'name',
            'id' => 'id',
            'status' => 'status',
            'searchMode' => 'search_mode',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  待查询的域名的类型。  取值范围：public 默认值为空。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    * name  域名。  搜索模式默认为模糊搜索。
    * id  域名ID。
    * status  资源状态。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * sortKey  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
    * sortDir  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'name' => 'setName',
            'id' => 'setId',
            'status' => 'setStatus',
            'searchMode' => 'setSearchMode',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  待查询的域名的类型。  取值范围：public 默认值为空。
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    * name  域名。  搜索模式默认为模糊搜索。
    * id  域名ID。
    * status  资源状态。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * sortKey  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
    * sortDir  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    * enterpriseProjectId  域名关联的企业项目ID，长度不超过36个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'name' => 'getName',
            'id' => 'getId',
            'status' => 'getStatus',
            'searchMode' => 'getSearchMode',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['searchMode'] = isset($data['searchMode']) ? $data['searchMode'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
    * Gets type
    *  待查询的域名的类型。  取值范围：public 默认值为空。
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
    * @param string|null $type 待查询的域名的类型。  取值范围：public 默认值为空。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
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
    * @param int|null $limit 每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
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
    * @param string|null $marker 分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
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
    * @param int|null $offset 分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用“|”分开，每个标签的键值用英文逗号“,”相隔。  多个标签之间为“与”的关系。  关于资源标签，请参见添加资源标签。  搜索模式为精确搜索。如果资源标签值value是以&ast;开头时，则按照&ast;后面的值全模糊匹配。  默认值为空。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets name
    *  域名。  搜索模式默认为模糊搜索。
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
    * @param string|null $name 域名。  搜索模式默认为模糊搜索。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  域名ID。
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
    * @param string|null $id 域名ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
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
    * @param string|null $status 资源状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets searchMode
    *  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    *
    * @return string|null
    */
    public function getSearchMode()
    {
        return $this->container['searchMode'];
    }

    /**
    * Sets searchMode
    *
    * @param string|null $searchMode 查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    *
    * @return $this
    */
    public function setSearchMode($searchMode)
    {
        $this->container['searchMode'] = $searchMode;
        return $this;
    }

    /**
    * Gets sortKey
    *  查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
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
    * @param string|null $sortKey 查询结果中域名列表的排序字段。  取值范围为：  name：域名 created_at：创建时间 updated_at：更新时间 默认值为空，表示不排序。
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
    *  查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
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
    * @param string|null $sortDir 查询结果中域名列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  域名关联的企业项目ID，长度不超过36个字符。
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
    * @param string|null $enterpriseProjectId 域名关联的企业项目ID，长度不超过36个字符。
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

