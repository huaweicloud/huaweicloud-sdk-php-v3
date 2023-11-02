<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * query  查询关键字
    * filter  filter
    * facets  条件参数列表
    * limit  分页显示每页返回结果数。默认值100
    * offset  偏移量，默认值0
    * relationshipAttributes  关联关系属性
    * sort  排序信息
    * owner  所有者
    * queryPrivilege  是否校验权限，默认值false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'query' => 'string',
            'filter' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria',
            'facets' => 'string[]',
            'limit' => 'int',
            'offset' => 'int',
            'relationshipAttributes' => 'string[]',
            'sort' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Sort[]',
            'owner' => 'string',
            'queryPrivilege' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * query  查询关键字
    * filter  filter
    * facets  条件参数列表
    * limit  分页显示每页返回结果数。默认值100
    * offset  偏移量，默认值0
    * relationshipAttributes  关联关系属性
    * sort  排序信息
    * owner  所有者
    * queryPrivilege  是否校验权限，默认值false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'query' => null,
        'filter' => null,
        'facets' => null,
        'limit' => null,
        'offset' => null,
        'relationshipAttributes' => null,
        'sort' => null,
        'owner' => null,
        'queryPrivilege' => null
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
    * filter  filter
    * facets  条件参数列表
    * limit  分页显示每页返回结果数。默认值100
    * offset  偏移量，默认值0
    * relationshipAttributes  关联关系属性
    * sort  排序信息
    * owner  所有者
    * queryPrivilege  是否校验权限，默认值false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'query' => 'query',
            'filter' => 'filter',
            'facets' => 'facets',
            'limit' => 'limit',
            'offset' => 'offset',
            'relationshipAttributes' => 'relationship_attributes',
            'sort' => 'sort',
            'owner' => 'owner',
            'queryPrivilege' => 'query_privilege'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * query  查询关键字
    * filter  filter
    * facets  条件参数列表
    * limit  分页显示每页返回结果数。默认值100
    * offset  偏移量，默认值0
    * relationshipAttributes  关联关系属性
    * sort  排序信息
    * owner  所有者
    * queryPrivilege  是否校验权限，默认值false
    *
    * @var string[]
    */
    protected static $setters = [
            'query' => 'setQuery',
            'filter' => 'setFilter',
            'facets' => 'setFacets',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'relationshipAttributes' => 'setRelationshipAttributes',
            'sort' => 'setSort',
            'owner' => 'setOwner',
            'queryPrivilege' => 'setQueryPrivilege'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * query  查询关键字
    * filter  filter
    * facets  条件参数列表
    * limit  分页显示每页返回结果数。默认值100
    * offset  偏移量，默认值0
    * relationshipAttributes  关联关系属性
    * sort  排序信息
    * owner  所有者
    * queryPrivilege  是否校验权限，默认值false
    *
    * @var string[]
    */
    protected static $getters = [
            'query' => 'getQuery',
            'filter' => 'getFilter',
            'facets' => 'getFacets',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'relationshipAttributes' => 'getRelationshipAttributes',
            'sort' => 'getSort',
            'owner' => 'getOwner',
            'queryPrivilege' => 'getQueryPrivilege'
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['facets'] = isset($data['facets']) ? $data['facets'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['relationshipAttributes'] = isset($data['relationshipAttributes']) ? $data['relationshipAttributes'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['queryPrivilege'] = isset($data['queryPrivilege']) ? $data['queryPrivilege'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 查询关键字
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DataMapFilterCriteria|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets facets
    *  条件参数列表
    *
    * @return string[]|null
    */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
    * Sets facets
    *
    * @param string[]|null $facets 条件参数列表
    *
    * @return $this
    */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;
        return $this;
    }

    /**
    * Gets limit
    *  分页显示每页返回结果数。默认值100
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
    * @param int $limit 分页显示每页返回结果数。默认值100
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
    *  偏移量，默认值0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量，默认值0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets relationshipAttributes
    *  关联关系属性
    *
    * @return string[]|null
    */
    public function getRelationshipAttributes()
    {
        return $this->container['relationshipAttributes'];
    }

    /**
    * Sets relationshipAttributes
    *
    * @param string[]|null $relationshipAttributes 关联关系属性
    *
    * @return $this
    */
    public function setRelationshipAttributes($relationshipAttributes)
    {
        $this->container['relationshipAttributes'] = $relationshipAttributes;
        return $this;
    }

    /**
    * Gets sort
    *  排序信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Sort[]|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Sort[]|null $sort 排序信息
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets owner
    *  所有者
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 所有者
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets queryPrivilege
    *  是否校验权限，默认值false
    *
    * @return bool|null
    */
    public function getQueryPrivilege()
    {
        return $this->container['queryPrivilege'];
    }

    /**
    * Sets queryPrivilege
    *
    * @param bool|null $queryPrivilege 是否校验权限，默认值false
    *
    * @return $this
    */
    public function setQueryPrivilege($queryPrivilege)
    {
        $this->container['queryPrivilege'] = $queryPrivilege;
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

