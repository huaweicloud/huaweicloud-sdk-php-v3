<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRecordSetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRecordSetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneType  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    * status  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    * type  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * name  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
    * id  待查询的Record Set的id包含此id。
    * records  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    * sortKey  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
    * sortDir  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneType' => 'string',
            'marker' => 'string',
            'searchMode' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'tags' => 'string',
            'status' => 'string',
            'type' => 'string',
            'name' => 'string',
            'id' => 'string',
            'records' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneType  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    * status  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    * type  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * name  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
    * id  待查询的Record Set的id包含此id。
    * records  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    * sortKey  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
    * sortDir  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneType' => null,
        'marker' => null,
        'searchMode' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'tags' => null,
        'status' => null,
        'type' => null,
        'name' => null,
        'id' => null,
        'records' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * zoneType  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    * status  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    * type  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * name  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
    * id  待查询的Record Set的id包含此id。
    * records  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    * sortKey  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
    * sortDir  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneType' => 'zone_type',
            'marker' => 'marker',
            'searchMode' => 'search_mode',
            'limit' => 'limit',
            'offset' => 'offset',
            'tags' => 'tags',
            'status' => 'status',
            'type' => 'type',
            'name' => 'name',
            'id' => 'id',
            'records' => 'records',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneType  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    * status  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    * type  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * name  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
    * id  待查询的Record Set的id包含此id。
    * records  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    * sortKey  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
    * sortDir  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneType' => 'setZoneType',
            'marker' => 'setMarker',
            'searchMode' => 'setSearchMode',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'status' => 'setStatus',
            'type' => 'setType',
            'name' => 'setName',
            'id' => 'setId',
            'records' => 'setRecords',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneType  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    * marker  分页查询起始的资源ID，为空时为查询第一页。  默认值为空。
    * searchMode  查询条件搜索模式。  取值范围：  like：模糊搜索 equal：精确搜索
    * limit  每页返回的资源个数。  取值范围：0~500  取值一般为10，20，50。默认值为500。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当前设置marker不为空时，以marker为分页起始标识。
    * tags  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    * status  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    * type  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    * name  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
    * id  待查询的Record Set的id包含此id。
    * records  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    * sortKey  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
    * sortDir  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneType' => 'getZoneType',
            'marker' => 'getMarker',
            'searchMode' => 'getSearchMode',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'status' => 'getStatus',
            'type' => 'getType',
            'name' => 'getName',
            'id' => 'getId',
            'records' => 'getRecords',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['searchMode'] = isset($data['searchMode']) ? $data['searchMode'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
    * Gets zoneType
    *  待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    *
    * @return string|null
    */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
    * Sets zoneType
    *
    * @param string|null $zoneType 待查询的Record Set的域名类型。  取值范围：public、private  如果为空，表示查询公网类型的Record Set。 如果为public，表示查询公网类型的Record Set。 如果为private，表示查询内网类型的Record Set。 搜索模式默认为模糊搜索。  默认值为public。
    *
    * @return $this
    */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;
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
    *  资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
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
    * @param string|null $tags 资源标签。  取值格式：key1,value1|key2,value2  多个标签之间用\"|\"分开，每个标签的键值用英文逗号\",\"相隔。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets status
    *  待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
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
    * @param string|null $status 待查询的Record Set的状态。  取值范围：ACTIVE、ERROR、DISABLE、FREEZE、PENDING_CREATE、PENDING_UPDATE、PENDING_DELETE
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
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
    * @param string|null $type 待查询的Record Set的记录集类型。 公网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、NS、SRV、CAA。 内网域名场景的记录类型: A、AAAA、MX、CNAME、TXT、SRV。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
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
    * @param string|null $name 待查询的Record Set的域名中包含此name。  搜索模式默认为模糊搜索。  默认值为空。
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
    *  待查询的Record Set的id包含此id。
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
    * @param string|null $id 待查询的Record Set的id包含此id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets records
    *  待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    *
    * @return string|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string|null $records 待查询的Record Set的值中包含此records。  搜索模式默认为模糊搜索。  默认值为空。
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets sortKey
    *  查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
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
    * @param string|null $sortKey 查询结果中Record Set列表的排序字段。  取值范围：  name：记录集名称 type：记录集类型 默认值为空，表示不排序。
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
    *  查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
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
    * @param string|null $sortDir 查询结果中Record Set列表的排序方式。  取值范围：  desc：降序排序 asc：升序排序 默认值为空，表示不排序。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

