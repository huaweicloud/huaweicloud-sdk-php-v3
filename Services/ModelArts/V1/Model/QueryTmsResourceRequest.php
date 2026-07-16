<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTmsResourceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTmsResourceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * matches  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    * tags  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    * withoutAnyTag  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'matches' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TmsMatch[]',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CombineInferTmsTags[]',
            'withoutAnyTag' => 'bool',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * matches  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    * tags  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    * withoutAnyTag  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'matches' => null,
        'tags' => null,
        'withoutAnyTag' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * matches  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    * tags  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    * withoutAnyTag  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'matches' => 'matches',
            'tags' => 'tags',
            'withoutAnyTag' => 'without_any_tag',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * matches  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    * tags  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    * withoutAnyTag  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @var string[]
    */
    protected static $setters = [
            'matches' => 'setMatches',
            'tags' => 'setTags',
            'withoutAnyTag' => 'setWithoutAnyTag',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * matches  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    * tags  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    * withoutAnyTag  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    * limit  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
    * offset  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @var string[]
    */
    protected static $getters = [
            'matches' => 'getMatches',
            'tags' => 'getTags',
            'withoutAnyTag' => 'getWithoutAnyTag',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets matches
    *  **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TmsMatch[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TmsMatch[]|null $matches **参数解释：** 匹配项，目前只支持资源名称的模糊匹配。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CombineInferTmsTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CombineInferTmsTags[]|null $tags **参数解释：** 标签匹配项，只支持多个标签与操作，不携带表示查询所有资源。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets withoutAnyTag
    *  **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
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
    * @param bool|null $withoutAnyTag **参数解释：** 是否只查询没有打标签的资源。 **约束限制：** 不涉及。 **取值范围：** true：只查询没有打标签的资源。 false：查询所有资源。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
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
    * @param int|null $limit **参数解释：** 指定每一页返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 10。
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
    *  **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
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
    * @param int|null $offset **参数解释：** 分页列表的起始页。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

