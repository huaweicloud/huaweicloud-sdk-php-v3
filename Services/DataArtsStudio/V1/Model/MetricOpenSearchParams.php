<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricOpenSearchParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricOpenSearchParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * architectureGuid  指标资产ID
    * query  查询条件
    * limit  单次请求条数
    * offset  偏移量
    * searchNameDescription  是否按名称和描述搜索
    * includeSubArchitecture  是否查询子指标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'architectureGuid' => 'string',
            'query' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'searchNameDescription' => 'bool',
            'includeSubArchitecture' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * architectureGuid  指标资产ID
    * query  查询条件
    * limit  单次请求条数
    * offset  偏移量
    * searchNameDescription  是否按名称和描述搜索
    * includeSubArchitecture  是否查询子指标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'architectureGuid' => null,
        'query' => null,
        'limit' => null,
        'offset' => null,
        'searchNameDescription' => null,
        'includeSubArchitecture' => null
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
    * architectureGuid  指标资产ID
    * query  查询条件
    * limit  单次请求条数
    * offset  偏移量
    * searchNameDescription  是否按名称和描述搜索
    * includeSubArchitecture  是否查询子指标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'architectureGuid' => 'architecture_guid',
            'query' => 'query',
            'limit' => 'limit',
            'offset' => 'offset',
            'searchNameDescription' => 'search_name_description',
            'includeSubArchitecture' => 'include_sub_architecture'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * architectureGuid  指标资产ID
    * query  查询条件
    * limit  单次请求条数
    * offset  偏移量
    * searchNameDescription  是否按名称和描述搜索
    * includeSubArchitecture  是否查询子指标
    *
    * @var string[]
    */
    protected static $setters = [
            'architectureGuid' => 'setArchitectureGuid',
            'query' => 'setQuery',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'searchNameDescription' => 'setSearchNameDescription',
            'includeSubArchitecture' => 'setIncludeSubArchitecture'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * architectureGuid  指标资产ID
    * query  查询条件
    * limit  单次请求条数
    * offset  偏移量
    * searchNameDescription  是否按名称和描述搜索
    * includeSubArchitecture  是否查询子指标
    *
    * @var string[]
    */
    protected static $getters = [
            'architectureGuid' => 'getArchitectureGuid',
            'query' => 'getQuery',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'searchNameDescription' => 'getSearchNameDescription',
            'includeSubArchitecture' => 'getIncludeSubArchitecture'
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
        $this->container['architectureGuid'] = isset($data['architectureGuid']) ? $data['architectureGuid'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['searchNameDescription'] = isset($data['searchNameDescription']) ? $data['searchNameDescription'] : null;
        $this->container['includeSubArchitecture'] = isset($data['includeSubArchitecture']) ? $data['includeSubArchitecture'] : null;
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
    * Gets architectureGuid
    *  指标资产ID
    *
    * @return string|null
    */
    public function getArchitectureGuid()
    {
        return $this->container['architectureGuid'];
    }

    /**
    * Sets architectureGuid
    *
    * @param string|null $architectureGuid 指标资产ID
    *
    * @return $this
    */
    public function setArchitectureGuid($architectureGuid)
    {
        $this->container['architectureGuid'] = $architectureGuid;
        return $this;
    }

    /**
    * Gets query
    *  查询条件
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
    * @param string $query 查询条件
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets limit
    *  单次请求条数
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
    * @param int|null $limit 单次请求条数
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
    *  偏移量
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
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets searchNameDescription
    *  是否按名称和描述搜索
    *
    * @return bool|null
    */
    public function getSearchNameDescription()
    {
        return $this->container['searchNameDescription'];
    }

    /**
    * Sets searchNameDescription
    *
    * @param bool|null $searchNameDescription 是否按名称和描述搜索
    *
    * @return $this
    */
    public function setSearchNameDescription($searchNameDescription)
    {
        $this->container['searchNameDescription'] = $searchNameDescription;
        return $this;
    }

    /**
    * Gets includeSubArchitecture
    *  是否查询子指标
    *
    * @return bool|null
    */
    public function getIncludeSubArchitecture()
    {
        return $this->container['includeSubArchitecture'];
    }

    /**
    * Sets includeSubArchitecture
    *
    * @param bool|null $includeSubArchitecture 是否查询子指标
    *
    * @return $this
    */
    public function setIncludeSubArchitecture($includeSubArchitecture)
    {
        $this->container['includeSubArchitecture'] = $includeSubArchitecture;
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

