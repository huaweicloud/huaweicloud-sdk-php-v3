<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqListDehByTags implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqListDehByTags';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * notTags  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * limit  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
    * offset  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
    * action  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    * tagsAny  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    * matches  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\DeH\V1\Model\Tag[]',
            'notTags' => '\HuaweiCloud\SDK\DeH\V1\Model\Tag[]',
            'limit' => 'int',
            'offset' => 'int',
            'action' => 'string',
            'tagsAny' => '\HuaweiCloud\SDK\DeH\V1\Model\Tag[]',
            'notTagsAny' => '\HuaweiCloud\SDK\DeH\V1\Model\Tag[]',
            'matches' => '\HuaweiCloud\SDK\DeH\V1\Model\Match[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * notTags  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * limit  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
    * offset  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
    * action  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    * tagsAny  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    * matches  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'notTags' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'action' => null,
        'tagsAny' => null,
        'notTagsAny' => null,
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
    * tags  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * notTags  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * limit  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
    * offset  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
    * action  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    * tagsAny  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    * matches  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'notTags' => 'not_tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'action' => 'action',
            'tagsAny' => 'tags_any',
            'notTagsAny' => 'not_tags_any',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * notTags  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * limit  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
    * offset  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
    * action  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    * tagsAny  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    * matches  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'notTags' => 'setNotTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'action' => 'setAction',
            'tagsAny' => 'setTagsAny',
            'notTagsAny' => 'setNotTagsAny',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * notTags  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    * limit  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
    * offset  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
    * action  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    * tagsAny  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    * matches  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'notTags' => 'getNotTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'action' => 'getAction',
            'tagsAny' => 'getTagsAny',
            'notTagsAny' => 'getNotTagsAny',
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
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
    * Gets tags
    *  查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null $tags 查询包含所有指定标签的专属主机结构体不能缺失。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
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
    *  查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null $notTags 查询不包含所有指定标签的专属主机。 1.最多包含10个key，每个key下面的value最多10个。 2.结构体不能缺失。 3.key不能为空或者空字符串。 4.key不能重复。 5.同一个key中value不能重复。
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
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
    * @param int|null $limit 查询返回的专属主机数量限制，最多为1000，不能为负数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，limit默认为1000。
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
    *  索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
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
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询。必须为数字，不能为负数。 查询第一页数据时，不需要传入此参数。查询后续页码数据时，将查询前一页数据时响应体中的值带入此参数。 1.如果action的值为count，此参数无效。 2.如果action的值为filter，offset默认为0。
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
    *  操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
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
    * @param string $action 操作标识，包括filter和count两种。 1.filter：表示按标签过滤专属主机，返回符合条件的专属主机列表。此时，为分页查询。 2.count：表示按标签搜索专属主机，返回符合条件的专属主机个数。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets tagsAny
    *  包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null $tagsAny 包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回包含标签的资源列表，key之间是“或”的关系，key-value结构中value是“或”的关系。 4.无过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setTagsAny($tagsAny)
    {
        $this->container['tagsAny'] = $tagsAny;
        return $this;
    }

    /**
    * Gets notTagsAny
    *  不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\Tag[]|null $notTagsAny 不包含任意标签。 1.最多包含10个key，每个key下面的value最多10个，每个key对应的value可以为空数组但结构体不能缺失。 2.key不能重复，同一个key中value不能重复。 3.结果返回不包含标签的资源列表，key之间是“或”的关系，key-value结构中value是或的关系。 4.无过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setNotTagsAny($notTagsAny)
    {
        $this->container['notTagsAny'] = $notTagsAny;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\Match[]|null $matches 搜索字段，用于按条件搜索专属主机。  当前仅支持按resource_name进行搜索。
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

