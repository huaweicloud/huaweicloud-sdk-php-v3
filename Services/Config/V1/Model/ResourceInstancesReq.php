<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceInstancesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceInstancesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'withoutAnyTag' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Config\V1\Model\Tag[]',
            'matches' => '\HuaweiCloud\SDK\Config\V1\Model\Match[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'withoutAnyTag' => null,
        'tags' => null,
        'matches' => null
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
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'withoutAnyTag' => 'without_any_tag',
            'tags' => 'tags',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @var string[]
    */
    protected static $setters = [
            'withoutAnyTag' => 'setWithoutAnyTag',
            'tags' => 'setTags',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @var string[]
    */
    protected static $getters = [
            'withoutAnyTag' => 'getWithoutAnyTag',
            'tags' => 'getTags',
            'matches' => 'getMatches'
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
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
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
    * Gets withoutAnyTag
    *  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    *
    * @return bool|null
    */
    public function getWithoutAnyTag()
    {
        return $this->container['withoutAnyTag'];
    }

    /**
    * Sets withoutAnyTag
    *
    * @param bool|null $withoutAnyTag 不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets tags
    *  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\Tag[]|null $tags 包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\Match[]|null $matches 搜索字段,key为要匹配的字段，如resource_name等。value为匹配的值。key为固定字典值，不能包含重复的key或不支持的key。根据key的值确认是否需要模糊匹配，如resource_name默认为精确搜索（推荐实现前缀搜索），如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况，因此此类情况返回空列表）。resource_id为精确匹配。第一期只做resource_name，后续再扩展。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
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

