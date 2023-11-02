<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenEntitySearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenEntitySearchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  查询关键字
    * typeNames  分类名称 List<String>
    * connectionNames  List<String> 连接名称
    * searchAllAttributes  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    * tags  List<String> 标签的名称
    * limit  分页显示每页返回结果数。默认值，10
    * offset  偏移量，默认值，0
    * attributes  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    * filterCriteria  filterCriteria
    * timeRange  timeRange
    * scrollId  scroll_id
    * securityLevels  List<String> 安全级别
    * isImport  是否导入
    * classifications  List<String> 分类
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'typeNames' => 'string[]',
            'connectionNames' => 'string[]',
            'searchAllAttributes' => 'bool',
            'tags' => 'string[]',
            'limit' => 'int',
            'offset' => 'int',
            'attributes' => 'object',
            'filterCriteria' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\FilterCriteria',
            'timeRange' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeRange',
            'scrollId' => 'string',
            'securityLevels' => 'string[]',
            'isImport' => 'bool',
            'classifications' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  查询关键字
    * typeNames  分类名称 List<String>
    * connectionNames  List<String> 连接名称
    * searchAllAttributes  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    * tags  List<String> 标签的名称
    * limit  分页显示每页返回结果数。默认值，10
    * offset  偏移量，默认值，0
    * attributes  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    * filterCriteria  filterCriteria
    * timeRange  timeRange
    * scrollId  scroll_id
    * securityLevels  List<String> 安全级别
    * isImport  是否导入
    * classifications  List<String> 分类
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'typeNames' => null,
        'connectionNames' => null,
        'searchAllAttributes' => null,
        'tags' => null,
        'limit' => null,
        'offset' => null,
        'attributes' => null,
        'filterCriteria' => null,
        'timeRange' => null,
        'scrollId' => null,
        'securityLevels' => null,
        'isImport' => null,
        'classifications' => null,
        'description' => null
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
    * query  查询关键字
    * typeNames  分类名称 List<String>
    * connectionNames  List<String> 连接名称
    * searchAllAttributes  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    * tags  List<String> 标签的名称
    * limit  分页显示每页返回结果数。默认值，10
    * offset  偏移量，默认值，0
    * attributes  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    * filterCriteria  filterCriteria
    * timeRange  timeRange
    * scrollId  scroll_id
    * securityLevels  List<String> 安全级别
    * isImport  是否导入
    * classifications  List<String> 分类
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'typeNames' => 'type_names',
            'connectionNames' => 'connection_names',
            'searchAllAttributes' => 'search_all_attributes',
            'tags' => 'tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'attributes' => 'attributes',
            'filterCriteria' => 'filter_criteria',
            'timeRange' => 'time_range',
            'scrollId' => 'scroll_id',
            'securityLevels' => 'security_levels',
            'isImport' => 'is_import',
            'classifications' => 'classifications',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  查询关键字
    * typeNames  分类名称 List<String>
    * connectionNames  List<String> 连接名称
    * searchAllAttributes  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    * tags  List<String> 标签的名称
    * limit  分页显示每页返回结果数。默认值，10
    * offset  偏移量，默认值，0
    * attributes  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    * filterCriteria  filterCriteria
    * timeRange  timeRange
    * scrollId  scroll_id
    * securityLevels  List<String> 安全级别
    * isImport  是否导入
    * classifications  List<String> 分类
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'typeNames' => 'setTypeNames',
            'connectionNames' => 'setConnectionNames',
            'searchAllAttributes' => 'setSearchAllAttributes',
            'tags' => 'setTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'attributes' => 'setAttributes',
            'filterCriteria' => 'setFilterCriteria',
            'timeRange' => 'setTimeRange',
            'scrollId' => 'setScrollId',
            'securityLevels' => 'setSecurityLevels',
            'isImport' => 'setIsImport',
            'classifications' => 'setClassifications',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  查询关键字
    * typeNames  分类名称 List<String>
    * connectionNames  List<String> 连接名称
    * searchAllAttributes  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    * tags  List<String> 标签的名称
    * limit  分页显示每页返回结果数。默认值，10
    * offset  偏移量，默认值，0
    * attributes  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    * filterCriteria  filterCriteria
    * timeRange  timeRange
    * scrollId  scroll_id
    * securityLevels  List<String> 安全级别
    * isImport  是否导入
    * classifications  List<String> 分类
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'typeNames' => 'getTypeNames',
            'connectionNames' => 'getConnectionNames',
            'searchAllAttributes' => 'getSearchAllAttributes',
            'tags' => 'getTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'attributes' => 'getAttributes',
            'filterCriteria' => 'getFilterCriteria',
            'timeRange' => 'getTimeRange',
            'scrollId' => 'getScrollId',
            'securityLevels' => 'getSecurityLevels',
            'isImport' => 'getIsImport',
            'classifications' => 'getClassifications',
            'description' => 'getDescription'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['typeNames'] = isset($data['typeNames']) ? $data['typeNames'] : null;
        $this->container['connectionNames'] = isset($data['connectionNames']) ? $data['connectionNames'] : null;
        $this->container['searchAllAttributes'] = isset($data['searchAllAttributes']) ? $data['searchAllAttributes'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['filterCriteria'] = isset($data['filterCriteria']) ? $data['filterCriteria'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['scrollId'] = isset($data['scrollId']) ? $data['scrollId'] : null;
        $this->container['securityLevels'] = isset($data['securityLevels']) ? $data['securityLevels'] : null;
        $this->container['isImport'] = isset($data['isImport']) ? $data['isImport'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 100)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 100.";
            }
        if ($this->container['typeNames'] === null) {
            $invalidProperties[] = "'typeNames' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
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
    * Gets query
    *  查询关键字
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query 查询关键字
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets typeNames
    *  分类名称 List<String>
    *
    * @return string[]
    */
    public function getTypeNames()
    {
        return $this->container['typeNames'];
    }

    /**
    * Sets typeNames
    *
    * @param string[] $typeNames 分类名称 List<String>
    *
    * @return $this
    */
    public function setTypeNames($typeNames)
    {
        $this->container['typeNames'] = $typeNames;
        return $this;
    }

    /**
    * Gets connectionNames
    *  List<String> 连接名称
    *
    * @return string[]|null
    */
    public function getConnectionNames()
    {
        return $this->container['connectionNames'];
    }

    /**
    * Sets connectionNames
    *
    * @param string[]|null $connectionNames List<String> 连接名称
    *
    * @return $this
    */
    public function setConnectionNames($connectionNames)
    {
        $this->container['connectionNames'] = $connectionNames;
        return $this;
    }

    /**
    * Gets searchAllAttributes
    *  查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    *
    * @return bool|null
    */
    public function getSearchAllAttributes()
    {
        return $this->container['searchAllAttributes'];
    }

    /**
    * Sets searchAllAttributes
    *
    * @param bool|null $searchAllAttributes 查询关键字是否匹配资产的名称描述信息，true:匹配所有属性，false:只匹配名称、描述，默认false
    *
    * @return $this
    */
    public function setSearchAllAttributes($searchAllAttributes)
    {
        $this->container['searchAllAttributes'] = $searchAllAttributes;
        return $this;
    }

    /**
    * Gets tags
    *  List<String> 标签的名称
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
    * @param string[]|null $tags List<String> 标签的名称
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets limit
    *  分页显示每页返回结果数。默认值，10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页显示每页返回结果数。默认值，10
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
    *  偏移量，默认值，0
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
    * @param int|null $offset 偏移量，默认值，0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets attributes
    *  key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    *
    * @return object|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object|null $attributes key当前支持Table，value可为以下中的一个或多个：rowCounts、tableSize、database、schema、namespace、ddlUpdateTime、dataUpdateTime、ddlCreateTime Map<String,Set<String>>
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets filterCriteria
    *  filterCriteria
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\FilterCriteria|null
    */
    public function getFilterCriteria()
    {
        return $this->container['filterCriteria'];
    }

    /**
    * Sets filterCriteria
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\FilterCriteria|null $filterCriteria filterCriteria
    *
    * @return $this
    */
    public function setFilterCriteria($filterCriteria)
    {
        $this->container['filterCriteria'] = $filterCriteria;
        return $this;
    }

    /**
    * Gets timeRange
    *  timeRange
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeRange|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeRange|null $timeRange timeRange
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets scrollId
    *  scroll_id
    *
    * @return string|null
    */
    public function getScrollId()
    {
        return $this->container['scrollId'];
    }

    /**
    * Sets scrollId
    *
    * @param string|null $scrollId scroll_id
    *
    * @return $this
    */
    public function setScrollId($scrollId)
    {
        $this->container['scrollId'] = $scrollId;
        return $this;
    }

    /**
    * Gets securityLevels
    *  List<String> 安全级别
    *
    * @return string[]|null
    */
    public function getSecurityLevels()
    {
        return $this->container['securityLevels'];
    }

    /**
    * Sets securityLevels
    *
    * @param string[]|null $securityLevels List<String> 安全级别
    *
    * @return $this
    */
    public function setSecurityLevels($securityLevels)
    {
        $this->container['securityLevels'] = $securityLevels;
        return $this;
    }

    /**
    * Gets isImport
    *  是否导入
    *
    * @return bool|null
    */
    public function getIsImport()
    {
        return $this->container['isImport'];
    }

    /**
    * Sets isImport
    *
    * @param bool|null $isImport 是否导入
    *
    * @return $this
    */
    public function setIsImport($isImport)
    {
        $this->container['isImport'] = $isImport;
        return $this;
    }

    /**
    * Gets classifications
    *  List<String> 分类
    *
    * @return string[]|null
    */
    public function getClassifications()
    {
        return $this->container['classifications'];
    }

    /**
    * Sets classifications
    *
    * @param string[]|null $classifications List<String> 分类
    *
    * @return $this
    */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

