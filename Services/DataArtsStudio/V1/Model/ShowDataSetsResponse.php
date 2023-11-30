<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDataSetsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDataSetsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  查询结果总量
    * entities  资产实体列表
    * facets  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    * metrics  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    * referredEntities  关联资产，数据类型Map<String, Entity>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'float',
            'entities' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]',
            'facets' => 'object[]',
            'metrics' => 'object',
            'referredEntities' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  查询结果总量
    * entities  资产实体列表
    * facets  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    * metrics  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    * referredEntities  关联资产，数据类型Map<String, Entity>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'entities' => null,
        'facets' => null,
        'metrics' => null,
        'referredEntities' => null
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
    * count  查询结果总量
    * entities  资产实体列表
    * facets  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    * metrics  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    * referredEntities  关联资产，数据类型Map<String, Entity>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'entities' => 'entities',
            'facets' => 'facets',
            'metrics' => 'metrics',
            'referredEntities' => 'referred_entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  查询结果总量
    * entities  资产实体列表
    * facets  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    * metrics  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    * referredEntities  关联资产，数据类型Map<String, Entity>
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'entities' => 'setEntities',
            'facets' => 'setFacets',
            'metrics' => 'setMetrics',
            'referredEntities' => 'setReferredEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  查询结果总量
    * entities  资产实体列表
    * facets  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    * metrics  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    * referredEntities  关联资产，数据类型Map<String, Entity>
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'entities' => 'getEntities',
            'facets' => 'getFacets',
            'metrics' => 'getMetrics',
            'referredEntities' => 'getReferredEntities'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['facets'] = isset($data['facets']) ? $data['facets'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['referredEntities'] = isset($data['referredEntities']) ? $data['referredEntities'] : null;
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
    * Gets count
    *  查询结果总量
    *
    * @return float|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param float|null $count 查询结果总量
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
    *  资产实体列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]|null $entities 资产实体列表
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets facets
    *  资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    *
    * @return object[]|null
    */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
    * Sets facets
    *
    * @param object[]|null $facets 资产分类facets维度信息列表，数据结构List<Map<String, List<Aggregation>>> 取值为count
    *
    * @return $this
    */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;
        return $this;
    }

    /**
    * Gets metrics
    *  资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    *
    * @return object|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param object|null $metrics 资产分类metrics维度信息列表，数据结构List<Map<String, List<Aggregation>>>  取值为aggregation
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets referredEntities
    *  关联资产，数据类型Map<String, Entity>
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
    * @param object|null $referredEntities 关联资产，数据类型Map<String, Entity>
    *
    * @return $this
    */
    public function setReferredEntities($referredEntities)
    {
        $this->container['referredEntities'] = $referredEntities;
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

