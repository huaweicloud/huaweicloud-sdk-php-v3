<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * tagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTags  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * limit  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    * action  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    * matches  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Dns\V2\Model\TagValues[]',
            'tagsAny' => '\HuaweiCloud\SDK\Dns\V2\Model\TagValues[]',
            'notTags' => '\HuaweiCloud\SDK\Dns\V2\Model\TagValues[]',
            'notTagsAny' => '\HuaweiCloud\SDK\Dns\V2\Model\TagValues[]',
            'limit' => 'int',
            'offset' => 'int',
            'action' => 'string',
            'matches' => '\HuaweiCloud\SDK\Dns\V2\Model\Match[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * tagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTags  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * limit  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    * action  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    * matches  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'tagsAny' => null,
        'notTags' => null,
        'notTagsAny' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'action' => null,
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
    * tags  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * tagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTags  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * limit  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    * action  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    * matches  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'tagsAny' => 'tags_any',
            'notTags' => 'not_tags',
            'notTagsAny' => 'not_tags_any',
            'limit' => 'limit',
            'offset' => 'offset',
            'action' => 'action',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * tagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTags  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * limit  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    * action  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    * matches  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'tagsAny' => 'setTagsAny',
            'notTags' => 'setNotTags',
            'notTagsAny' => 'setNotTagsAny',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'action' => 'setAction',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * tagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTags  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * notTagsAny  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    * limit  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    * action  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    * matches  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'tagsAny' => 'getTagsAny',
            'notTags' => 'getNotTags',
            'notTagsAny' => 'getNotTagsAny',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'action' => 'getAction',
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets tags
    *  包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null $tags 包含标签。 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
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
    *  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null $tagsAny 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
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
    *  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null $notTags 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
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
    *  最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\TagValues[]|null $notTagsAny 最多包含10个key，每个key下面的value最多10个，结构体不能缺失，key不能为空或者空字符串。Key不能重复，同一个key中values不能重复。
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
    *  分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
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
    * @param int|null $limit 分页查询时配置每页返回的资源个数。  取值范围：1~1000  参数取值说明：  如果action为filter时，默认为1000。 如果action为count时，无此参数。
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
    *  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
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
    * @param int|null $offset 分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  参数取值说明： 查询第一页数据时，不需要传入此参数。 查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 如果action为filter时，默认为0，必须为数字，不能为负数。 如果action为count时，无此参数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets action
    *  操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
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
    * @param string $action 操作标识（区分大小写）。  取值范围：  filter：分页过滤查询 count：查询总条数
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets matches
    *  key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Match[]|null $matches key为要匹配的字段，value为匹配的值。  如果value为空字符串则精确匹配，否则模糊匹配。
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

