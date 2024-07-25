<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TmsQueryReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TmsQueryReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    * sysTags  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'withoutAnyTag' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]',
            'sysTags' => '\HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]',
            'matches' => '\HuaweiCloud\SDK\Apig\V2\Model\TmsMatchesKeyValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    * sysTags  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'withoutAnyTag' => null,
        'tags' => null,
        'sysTags' => null,
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
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    * sysTags  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'withoutAnyTag' => 'without_any_tag',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    * sysTags  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @var string[]
    */
    protected static $setters = [
            'withoutAnyTag' => 'setWithoutAnyTag',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    * sysTags  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @var string[]
    */
    protected static $getters = [
            'withoutAnyTag' => 'getWithoutAnyTag',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
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
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
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
    *  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
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
    * @param bool|null $withoutAnyTag 不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。 该字段为false或者未提供该参数时，该条件不生效。
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
    *  包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]|null $tags 包含标签，最多包含20个key，每个key下面的value最多20个。无tag过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\TmsKeyValues[]|null $sysTags 企业项目.仅op_service权限可以使用此字段做资源实例过滤条件. 无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
    *
    * @return \HuaweiCloud\SDK\Apig\V2\Model\TmsMatchesKeyValue[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Apig\V2\Model\TmsMatchesKeyValue[]|null $matches 搜索字段,key为要匹配的字段,当前限定为resource_name。value为匹配的值。 根据key的值确认是否需要模糊匹配，如resource_name需要实现前缀搜索。
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

