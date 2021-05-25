<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageByTagsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageByTagsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    * tags  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * tagsAny  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    * notTags  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * limit  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    * matches  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ims\V2\Model\Tags[]',
            'tagsAny' => '\HuaweiCloud\SDK\Ims\V2\Model\Tags[]',
            'notTags' => '\HuaweiCloud\SDK\Ims\V2\Model\Tags[]',
            'notTagsAny' => '\HuaweiCloud\SDK\Ims\V2\Model\Tags[]',
            'limit' => 'string',
            'offset' => 'string',
            'matches' => '\HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    * tags  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * tagsAny  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    * notTags  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * limit  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    * matches  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'tags' => null,
        'tagsAny' => null,
        'notTags' => null,
        'notTagsAny' => null,
        'limit' => null,
        'offset' => null,
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
    * action  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    * tags  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * tagsAny  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    * notTags  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * limit  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    * matches  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'tags' => 'tags',
            'tagsAny' => 'tags_any',
            'notTags' => 'not_tags',
            'notTagsAny' => 'not_tags_any',
            'limit' => 'limit',
            'offset' => 'offset',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    * tags  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * tagsAny  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    * notTags  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * limit  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    * matches  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'tags' => 'setTags',
            'tagsAny' => 'setTagsAny',
            'notTags' => 'setNotTags',
            'notTagsAny' => 'setNotTagsAny',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    * tags  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * tagsAny  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    * notTags  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    * limit  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    * matches  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'tags' => 'getTags',
            'tagsAny' => 'getTagsAny',
            'notTags' => 'getNotTags',
            'notTagsAny' => 'getNotTagsAny',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
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
    const ACTION_FILTER = 'filter';
    const ACTION_COUNT = 'count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_FILTER,
            self::ACTION_COUNT,
        ];
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets action
    *  操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 操作标识（区分大小写），支持filter、count。filter就是分页查询；count是只需按照条件将总条数返回即可。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets tags
    *  包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null $tags 包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tagsAny
    *  包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null $tagsAny 包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不允许为空列表，但可以不传递参数。
    *
    * @return $this
    */
    public function setTagsAny($tagsAny)
    {
        $this->container['tagsAny'] = $tagsAny;
        return $this;
    }

    /**
    * Gets notTags
    *  不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null $notTags 不包含标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets notTagsAny
    *  不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\Tags[]|null $notTagsAny 不包含任意标签，最多包含10个key，每个key对应的values最多包含10个值，且key和values都不能重复。不能为空列表。
    *
    * @return $this
    */
    public function setNotTagsAny($notTagsAny)
    {
        $this->container['notTagsAny'] = $notTagsAny;
        return $this;
    }

    /**
    * Gets limit
    *  最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 最大查询记录数(action为count，时此参数无效）如果action为filter默认为10，limit最多为1000，不能为负数，最小值为1。
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
    *  索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 索引位置， 从offset指定的下一条数据开始查询。 查询第一页数据时，不需要传入此参数（action为count时，此参数无效），如果action为filter默认为0，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null $matches 搜索字段，key为要匹配的字段，如resource_name、resource_id等。value为匹配的值。多个matches的key不允许重复。不允许为空列表，但可以不传递参数。
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

