<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUnrelatedTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUnrelatedTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attributes  attributes
    * classification  分类
    * count  结果总量
    * entities  资产信息
    * fullTextResult  fullTextResult
    * queryText  查询内容
    * queryType  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    * referredEntities  Map<String, AtlasEntityHeader>
    * scrollId  滚动条id
    * searchParameters  参数
    * type  类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attributes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AttributeSearchResult',
            'classification' => 'string',
            'count' => 'int',
            'entities' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasEntityHeader[]',
            'fullTextResult' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasFullTextResult[]',
            'queryText' => 'string',
            'queryType' => 'string',
            'referredEntities' => 'object',
            'scrollId' => 'string',
            'searchParameters' => 'object',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attributes  attributes
    * classification  分类
    * count  结果总量
    * entities  资产信息
    * fullTextResult  fullTextResult
    * queryText  查询内容
    * queryType  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    * referredEntities  Map<String, AtlasEntityHeader>
    * scrollId  滚动条id
    * searchParameters  参数
    * type  类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attributes' => null,
        'classification' => null,
        'count' => 'int32',
        'entities' => null,
        'fullTextResult' => null,
        'queryText' => null,
        'queryType' => null,
        'referredEntities' => null,
        'scrollId' => null,
        'searchParameters' => null,
        'type' => null
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
    * attributes  attributes
    * classification  分类
    * count  结果总量
    * entities  资产信息
    * fullTextResult  fullTextResult
    * queryText  查询内容
    * queryType  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    * referredEntities  Map<String, AtlasEntityHeader>
    * scrollId  滚动条id
    * searchParameters  参数
    * type  类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attributes' => 'attributes',
            'classification' => 'classification',
            'count' => 'count',
            'entities' => 'entities',
            'fullTextResult' => 'full_text_result',
            'queryText' => 'query_text',
            'queryType' => 'query_type',
            'referredEntities' => 'referred_entities',
            'scrollId' => 'scroll_id',
            'searchParameters' => 'search_parameters',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attributes  attributes
    * classification  分类
    * count  结果总量
    * entities  资产信息
    * fullTextResult  fullTextResult
    * queryText  查询内容
    * queryType  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    * referredEntities  Map<String, AtlasEntityHeader>
    * scrollId  滚动条id
    * searchParameters  参数
    * type  类型
    *
    * @var string[]
    */
    protected static $setters = [
            'attributes' => 'setAttributes',
            'classification' => 'setClassification',
            'count' => 'setCount',
            'entities' => 'setEntities',
            'fullTextResult' => 'setFullTextResult',
            'queryText' => 'setQueryText',
            'queryType' => 'setQueryType',
            'referredEntities' => 'setReferredEntities',
            'scrollId' => 'setScrollId',
            'searchParameters' => 'setSearchParameters',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attributes  attributes
    * classification  分类
    * count  结果总量
    * entities  资产信息
    * fullTextResult  fullTextResult
    * queryText  查询内容
    * queryType  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    * referredEntities  Map<String, AtlasEntityHeader>
    * scrollId  滚动条id
    * searchParameters  参数
    * type  类型
    *
    * @var string[]
    */
    protected static $getters = [
            'attributes' => 'getAttributes',
            'classification' => 'getClassification',
            'count' => 'getCount',
            'entities' => 'getEntities',
            'fullTextResult' => 'getFullTextResult',
            'queryText' => 'getQueryText',
            'queryType' => 'getQueryType',
            'referredEntities' => 'getReferredEntities',
            'scrollId' => 'getScrollId',
            'searchParameters' => 'getSearchParameters',
            'type' => 'getType'
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
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['fullTextResult'] = isset($data['fullTextResult']) ? $data['fullTextResult'] : null;
        $this->container['queryText'] = isset($data['queryText']) ? $data['queryText'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['referredEntities'] = isset($data['referredEntities']) ? $data['referredEntities'] : null;
        $this->container['scrollId'] = isset($data['scrollId']) ? $data['scrollId'] : null;
        $this->container['searchParameters'] = isset($data['searchParameters']) ? $data['searchParameters'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    *  attributes
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AttributeSearchResult|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AttributeSearchResult|null $attributes attributes
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets classification
    *  分类
    *
    * @return string|null
    */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
    * Sets classification
    *
    * @param string|null $classification 分类
    *
    * @return $this
    */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;
        return $this;
    }

    /**
    * Gets count
    *  结果总量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 结果总量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets entities
    *  资产信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasEntityHeader[]|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasEntityHeader[]|null $entities 资产信息
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets fullTextResult
    *  fullTextResult
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasFullTextResult[]|null
    */
    public function getFullTextResult()
    {
        return $this->container['fullTextResult'];
    }

    /**
    * Sets fullTextResult
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AtlasFullTextResult[]|null $fullTextResult fullTextResult
    *
    * @return $this
    */
    public function setFullTextResult($fullTextResult)
    {
        $this->container['fullTextResult'] = $fullTextResult;
        return $this;
    }

    /**
    * Gets queryText
    *  查询内容
    *
    * @return string|null
    */
    public function getQueryText()
    {
        return $this->container['queryText'];
    }

    /**
    * Sets queryText
    *
    * @param string|null $queryText 查询内容
    *
    * @return $this
    */
    public function setQueryText($queryText)
    {
        $this->container['queryText'] = $queryText;
        return $this;
    }

    /**
    * Gets queryType
    *  查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询类型，取值范围DSL,FULL_TEXT,GREMLIN,BASIC,ATTRIBUTE,RELATIONSHIP,ADVANCED
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets referredEntities
    *  Map<String, AtlasEntityHeader>
    *
    * @return object|null
    */
    public function getReferredEntities()
    {
        return $this->container['referredEntities'];
    }

    /**
    * Sets referredEntities
    *
    * @param object|null $referredEntities Map<String, AtlasEntityHeader>
    *
    * @return $this
    */
    public function setReferredEntities($referredEntities)
    {
        $this->container['referredEntities'] = $referredEntities;
        return $this;
    }

    /**
    * Gets scrollId
    *  滚动条id
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
    * @param string|null $scrollId 滚动条id
    *
    * @return $this
    */
    public function setScrollId($scrollId)
    {
        $this->container['scrollId'] = $scrollId;
        return $this;
    }

    /**
    * Gets searchParameters
    *  参数
    *
    * @return object|null
    */
    public function getSearchParameters()
    {
        return $this->container['searchParameters'];
    }

    /**
    * Sets searchParameters
    *
    * @param object|null $searchParameters 参数
    *
    * @return $this
    */
    public function setSearchParameters($searchParameters)
    {
        $this->container['searchParameters'] = $searchParameters;
        return $this;
    }

    /**
    * Gets type
    *  类型
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
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

