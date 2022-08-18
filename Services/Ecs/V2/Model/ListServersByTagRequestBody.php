<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServersByTagRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServersByTagRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    * limit  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    * tags  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * notTags  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * matches  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]',
            'notTags' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]',
            'matches' => '\HuaweiCloud\SDK\Ecs\V2\Model\ServerTagMatch[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    * limit  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    * tags  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * notTags  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * matches  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'limit' => null,
        'offset' => null,
        'tags' => null,
        'notTags' => null,
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
    * action  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    * limit  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    * tags  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * notTags  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * matches  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'limit' => 'limit',
            'offset' => 'offset',
            'tags' => 'tags',
            'notTags' => 'not_tags',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    * limit  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    * tags  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * notTags  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * matches  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'notTags' => 'setNotTags',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    * limit  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    * tags  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * notTags  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    * matches  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'notTags' => 'getNotTags',
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
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
    * Gets action
    *  值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
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
    * @param string $action 值为filter：表示按标签过滤弹性云服务器，返回符合条件的云服务器列表。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
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
    * @param string|null $limit 查询返回的云服务器数量限制，最多为1000，不能为负数。  - 如果action的值为count时，此参数无效。 - 如果action的值为filter时，limit必填，取值范围[0-1000]，如果不传值，系统默认limit值为1000。
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
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
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
    * @param string|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0。  查询第一页数据时，可以不传入此参数。  - 如果action的值为count，此参数无效。 - 如果action的值为filter时，必填，如果用户不传值，系统默认offset值为0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]|null $tags 查询包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets notTags
    *  查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerTags[]|null $notTags 查询不包含所有指定标签的弹性云服务器。  - 最多包含10个key，每个key下面的value最多10个。 - 结构体不能缺失。 - key不能为空或者空字符串。 - key不能重复。 - 同一个key中values不能重复。
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ServerTagMatch[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ServerTagMatch[]|null $matches 搜索字段，用于按条件搜索弹性云服务器。  当前仅支持按resource_name进行搜索
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

