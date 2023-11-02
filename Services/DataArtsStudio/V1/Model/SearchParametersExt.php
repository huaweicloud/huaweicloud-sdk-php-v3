<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchParametersExt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchParametersExt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attributes  属性
    * classifications  分类
    * connectionNames  数据连接
    * excludeClassifications  是否排除分类
    * excludeSecurityLevels  是否排除密级
    * excludeTags  是否排除标签
    * includeClassificationAttributes  包含分类属性
    * includeSubClassifications  包含子分类
    * limit  分页参数，每页限制数量，默认查询所有
    * offset  分页参数，偏移量，默认查询所有
    * order  排序方式
    * query  查询参数
    * searchNameAndDescription  是否按名称和描述搜索
    * securityLevels  安全密级列表
    * termNames  标签列表
    * typeNames  类型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attributes' => 'object',
            'classifications' => 'string[]',
            'connectionNames' => 'string[]',
            'excludeClassifications' => 'bool',
            'excludeSecurityLevels' => 'bool',
            'excludeTags' => 'bool',
            'includeClassificationAttributes' => 'bool',
            'includeSubClassifications' => 'bool',
            'limit' => 'int',
            'offset' => 'int',
            'order' => 'string',
            'query' => 'string',
            'searchNameAndDescription' => 'bool',
            'securityLevels' => 'string[]',
            'termNames' => 'string[]',
            'typeNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attributes  属性
    * classifications  分类
    * connectionNames  数据连接
    * excludeClassifications  是否排除分类
    * excludeSecurityLevels  是否排除密级
    * excludeTags  是否排除标签
    * includeClassificationAttributes  包含分类属性
    * includeSubClassifications  包含子分类
    * limit  分页参数，每页限制数量，默认查询所有
    * offset  分页参数，偏移量，默认查询所有
    * order  排序方式
    * query  查询参数
    * searchNameAndDescription  是否按名称和描述搜索
    * securityLevels  安全密级列表
    * termNames  标签列表
    * typeNames  类型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attributes' => null,
        'classifications' => null,
        'connectionNames' => null,
        'excludeClassifications' => null,
        'excludeSecurityLevels' => null,
        'excludeTags' => null,
        'includeClassificationAttributes' => null,
        'includeSubClassifications' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'order' => null,
        'query' => null,
        'searchNameAndDescription' => null,
        'securityLevels' => null,
        'termNames' => null,
        'typeNames' => null
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
    * attributes  属性
    * classifications  分类
    * connectionNames  数据连接
    * excludeClassifications  是否排除分类
    * excludeSecurityLevels  是否排除密级
    * excludeTags  是否排除标签
    * includeClassificationAttributes  包含分类属性
    * includeSubClassifications  包含子分类
    * limit  分页参数，每页限制数量，默认查询所有
    * offset  分页参数，偏移量，默认查询所有
    * order  排序方式
    * query  查询参数
    * searchNameAndDescription  是否按名称和描述搜索
    * securityLevels  安全密级列表
    * termNames  标签列表
    * typeNames  类型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attributes' => 'attributes',
            'classifications' => 'classifications',
            'connectionNames' => 'connection_names',
            'excludeClassifications' => 'exclude_classifications',
            'excludeSecurityLevels' => 'exclude_security_levels',
            'excludeTags' => 'exclude_tags',
            'includeClassificationAttributes' => 'include_classification_attributes',
            'includeSubClassifications' => 'include_sub_classifications',
            'limit' => 'limit',
            'offset' => 'offset',
            'order' => 'order',
            'query' => 'query',
            'searchNameAndDescription' => 'search_name_and_description',
            'securityLevels' => 'security_levels',
            'termNames' => 'term_names',
            'typeNames' => 'type_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attributes  属性
    * classifications  分类
    * connectionNames  数据连接
    * excludeClassifications  是否排除分类
    * excludeSecurityLevels  是否排除密级
    * excludeTags  是否排除标签
    * includeClassificationAttributes  包含分类属性
    * includeSubClassifications  包含子分类
    * limit  分页参数，每页限制数量，默认查询所有
    * offset  分页参数，偏移量，默认查询所有
    * order  排序方式
    * query  查询参数
    * searchNameAndDescription  是否按名称和描述搜索
    * securityLevels  安全密级列表
    * termNames  标签列表
    * typeNames  类型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'attributes' => 'setAttributes',
            'classifications' => 'setClassifications',
            'connectionNames' => 'setConnectionNames',
            'excludeClassifications' => 'setExcludeClassifications',
            'excludeSecurityLevels' => 'setExcludeSecurityLevels',
            'excludeTags' => 'setExcludeTags',
            'includeClassificationAttributes' => 'setIncludeClassificationAttributes',
            'includeSubClassifications' => 'setIncludeSubClassifications',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'order' => 'setOrder',
            'query' => 'setQuery',
            'searchNameAndDescription' => 'setSearchNameAndDescription',
            'securityLevels' => 'setSecurityLevels',
            'termNames' => 'setTermNames',
            'typeNames' => 'setTypeNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attributes  属性
    * classifications  分类
    * connectionNames  数据连接
    * excludeClassifications  是否排除分类
    * excludeSecurityLevels  是否排除密级
    * excludeTags  是否排除标签
    * includeClassificationAttributes  包含分类属性
    * includeSubClassifications  包含子分类
    * limit  分页参数，每页限制数量，默认查询所有
    * offset  分页参数，偏移量，默认查询所有
    * order  排序方式
    * query  查询参数
    * searchNameAndDescription  是否按名称和描述搜索
    * securityLevels  安全密级列表
    * termNames  标签列表
    * typeNames  类型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'attributes' => 'getAttributes',
            'classifications' => 'getClassifications',
            'connectionNames' => 'getConnectionNames',
            'excludeClassifications' => 'getExcludeClassifications',
            'excludeSecurityLevels' => 'getExcludeSecurityLevels',
            'excludeTags' => 'getExcludeTags',
            'includeClassificationAttributes' => 'getIncludeClassificationAttributes',
            'includeSubClassifications' => 'getIncludeSubClassifications',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'order' => 'getOrder',
            'query' => 'getQuery',
            'searchNameAndDescription' => 'getSearchNameAndDescription',
            'securityLevels' => 'getSecurityLevels',
            'termNames' => 'getTermNames',
            'typeNames' => 'getTypeNames'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['classifications'] = isset($data['classifications']) ? $data['classifications'] : null;
        $this->container['connectionNames'] = isset($data['connectionNames']) ? $data['connectionNames'] : null;
        $this->container['excludeClassifications'] = isset($data['excludeClassifications']) ? $data['excludeClassifications'] : null;
        $this->container['excludeSecurityLevels'] = isset($data['excludeSecurityLevels']) ? $data['excludeSecurityLevels'] : null;
        $this->container['excludeTags'] = isset($data['excludeTags']) ? $data['excludeTags'] : null;
        $this->container['includeClassificationAttributes'] = isset($data['includeClassificationAttributes']) ? $data['includeClassificationAttributes'] : null;
        $this->container['includeSubClassifications'] = isset($data['includeSubClassifications']) ? $data['includeSubClassifications'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['searchNameAndDescription'] = isset($data['searchNameAndDescription']) ? $data['searchNameAndDescription'] : null;
        $this->container['securityLevels'] = isset($data['securityLevels']) ? $data['securityLevels'] : null;
        $this->container['termNames'] = isset($data['termNames']) ? $data['termNames'] : null;
        $this->container['typeNames'] = isset($data['typeNames']) ? $data['typeNames'] : null;
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
    * Gets attributes
    *  属性
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
    * @param object|null $attributes 属性
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets classifications
    *  分类
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
    * @param string[]|null $classifications 分类
    *
    * @return $this
    */
    public function setClassifications($classifications)
    {
        $this->container['classifications'] = $classifications;
        return $this;
    }

    /**
    * Gets connectionNames
    *  数据连接
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
    * @param string[]|null $connectionNames 数据连接
    *
    * @return $this
    */
    public function setConnectionNames($connectionNames)
    {
        $this->container['connectionNames'] = $connectionNames;
        return $this;
    }

    /**
    * Gets excludeClassifications
    *  是否排除分类
    *
    * @return bool|null
    */
    public function getExcludeClassifications()
    {
        return $this->container['excludeClassifications'];
    }

    /**
    * Sets excludeClassifications
    *
    * @param bool|null $excludeClassifications 是否排除分类
    *
    * @return $this
    */
    public function setExcludeClassifications($excludeClassifications)
    {
        $this->container['excludeClassifications'] = $excludeClassifications;
        return $this;
    }

    /**
    * Gets excludeSecurityLevels
    *  是否排除密级
    *
    * @return bool|null
    */
    public function getExcludeSecurityLevels()
    {
        return $this->container['excludeSecurityLevels'];
    }

    /**
    * Sets excludeSecurityLevels
    *
    * @param bool|null $excludeSecurityLevels 是否排除密级
    *
    * @return $this
    */
    public function setExcludeSecurityLevels($excludeSecurityLevels)
    {
        $this->container['excludeSecurityLevels'] = $excludeSecurityLevels;
        return $this;
    }

    /**
    * Gets excludeTags
    *  是否排除标签
    *
    * @return bool|null
    */
    public function getExcludeTags()
    {
        return $this->container['excludeTags'];
    }

    /**
    * Sets excludeTags
    *
    * @param bool|null $excludeTags 是否排除标签
    *
    * @return $this
    */
    public function setExcludeTags($excludeTags)
    {
        $this->container['excludeTags'] = $excludeTags;
        return $this;
    }

    /**
    * Gets includeClassificationAttributes
    *  包含分类属性
    *
    * @return bool|null
    */
    public function getIncludeClassificationAttributes()
    {
        return $this->container['includeClassificationAttributes'];
    }

    /**
    * Sets includeClassificationAttributes
    *
    * @param bool|null $includeClassificationAttributes 包含分类属性
    *
    * @return $this
    */
    public function setIncludeClassificationAttributes($includeClassificationAttributes)
    {
        $this->container['includeClassificationAttributes'] = $includeClassificationAttributes;
        return $this;
    }

    /**
    * Gets includeSubClassifications
    *  包含子分类
    *
    * @return bool|null
    */
    public function getIncludeSubClassifications()
    {
        return $this->container['includeSubClassifications'];
    }

    /**
    * Sets includeSubClassifications
    *
    * @param bool|null $includeSubClassifications 包含子分类
    *
    * @return $this
    */
    public function setIncludeSubClassifications($includeSubClassifications)
    {
        $this->container['includeSubClassifications'] = $includeSubClassifications;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数，每页限制数量，默认查询所有
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
    * @param int|null $limit 分页参数，每页限制数量，默认查询所有
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
    *  分页参数，偏移量，默认查询所有
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
    * @param int|null $offset 分页参数，偏移量，默认查询所有
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets order
    *  排序方式
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序方式
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets query
    *  查询参数
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
    * @param string|null $query 查询参数
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets searchNameAndDescription
    *  是否按名称和描述搜索
    *
    * @return bool|null
    */
    public function getSearchNameAndDescription()
    {
        return $this->container['searchNameAndDescription'];
    }

    /**
    * Sets searchNameAndDescription
    *
    * @param bool|null $searchNameAndDescription 是否按名称和描述搜索
    *
    * @return $this
    */
    public function setSearchNameAndDescription($searchNameAndDescription)
    {
        $this->container['searchNameAndDescription'] = $searchNameAndDescription;
        return $this;
    }

    /**
    * Gets securityLevels
    *  安全密级列表
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
    * @param string[]|null $securityLevels 安全密级列表
    *
    * @return $this
    */
    public function setSecurityLevels($securityLevels)
    {
        $this->container['securityLevels'] = $securityLevels;
        return $this;
    }

    /**
    * Gets termNames
    *  标签列表
    *
    * @return string[]|null
    */
    public function getTermNames()
    {
        return $this->container['termNames'];
    }

    /**
    * Sets termNames
    *
    * @param string[]|null $termNames 标签列表
    *
    * @return $this
    */
    public function setTermNames($termNames)
    {
        $this->container['termNames'] = $termNames;
        return $this;
    }

    /**
    * Gets typeNames
    *  类型列表
    *
    * @return string[]|null
    */
    public function getTypeNames()
    {
        return $this->container['typeNames'];
    }

    /**
    * Sets typeNames
    *
    * @param string[]|null $typeNames 类型列表
    *
    * @return $this
    */
    public function setTypeNames($typeNames)
    {
        $this->container['typeNames'] = $typeNames;
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

