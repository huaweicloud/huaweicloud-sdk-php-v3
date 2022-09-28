<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryResourceInstanceTagsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryResourceInstanceTagsBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    * tagsAny  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTags  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * sysTags  系统标签，
    * limit  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
    * action  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
    * matches  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    * withoutAnyTag  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]',
            'tagsAny' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]',
            'notTags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]',
            'notTagsAny' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]',
            'sysTags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]',
            'limit' => 'string',
            'offset' => 'string',
            'action' => 'string',
            'matches' => '\HuaweiCloud\SDK\Vpcep\V1\Model\Match[]',
            'withoutAnyTag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    * tagsAny  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTags  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * sysTags  系统标签，
    * limit  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
    * action  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
    * matches  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    * withoutAnyTag  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'tagsAny' => null,
        'notTags' => null,
        'notTagsAny' => null,
        'sysTags' => null,
        'limit' => null,
        'offset' => null,
        'action' => null,
        'matches' => null,
        'withoutAnyTag' => null
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
    * tags  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    * tagsAny  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTags  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * sysTags  系统标签，
    * limit  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
    * action  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
    * matches  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    * withoutAnyTag  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'tagsAny' => 'tags_any',
            'notTags' => 'not_tags',
            'notTagsAny' => 'not_tags_any',
            'sysTags' => 'sys_tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'action' => 'action',
            'matches' => 'matches',
            'withoutAnyTag' => 'without_any_tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    * tagsAny  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTags  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * sysTags  系统标签，
    * limit  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
    * action  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
    * matches  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    * withoutAnyTag  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'tagsAny' => 'setTagsAny',
            'notTags' => 'setNotTags',
            'notTagsAny' => 'setNotTagsAny',
            'sysTags' => 'setSysTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'action' => 'setAction',
            'matches' => 'setMatches',
            'withoutAnyTag' => 'setWithoutAnyTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    * tagsAny  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTags  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * notTagsAny  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    * sysTags  系统标签，
    * limit  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
    * offset  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
    * action  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
    * matches  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    * withoutAnyTag  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'tagsAny' => 'getTagsAny',
            'notTags' => 'getNotTags',
            'notTagsAny' => 'getNotTagsAny',
            'sysTags' => 'getSysTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'action' => 'getAction',
            'matches' => 'getMatches',
            'withoutAnyTag' => 'getWithoutAnyTag'
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
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
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
    *  包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null $tags 包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回包含所有标签的资源列表， key之间是与的关系，key-value结构中value是或的关系。 无tag过滤条件时返回全量数据。
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
    *  包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null $tagsAny 包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。 Key不能重复，同一个key中values不能重复。 结果返回包含标签的资源列表，key之间是或的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
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
    *  不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null $notTags 不包含标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表，key之间是与的关系， key、value结构中value是或的关系。 无过滤条件时返回全量数据。
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
    *  不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null $notTagsAny 不包含任意标签，最多包含10个key，每个key下面的value最多10个， 每个key对应的value可以为空数组但结构体不能缺失。Key不能重复， 同一个key中values不能重复。结果返回不包含标签的资源列表， key之间是与的关系，key、value结构中value是或的关系。 无过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setNotTagsAny($notTagsAny)
    {
        $this->container['notTagsAny'] = $notTagsAny;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签，
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagValuesList[]|null $sysTags 系统标签，
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
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
    * @param string|null $limit 查询记录数（action为count时无此参数）如果action为filter默认为1000， limit最多为1000，不能为负数，最小值为1。
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
    *  索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
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
    * @param string|null $offset 索引位置，偏移量（action为count时无此参数）从第一条数据偏移offset条数据后开始查询， 如果action为filter默认为0（偏移0条数据，表示从第一条数据开始查询）， 必须为数字，不能为负数。
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
    *  操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
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
    * @param string $action 操作标识（仅限于filter，count）：filter（过滤）， count(查询总条数)如果是filter就按照过滤条件查询， 如果是count，只需要返回总条数，禁止返回其他字段。
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
    *  搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\Match[]|null $matches 搜索字段，key为要匹配的字段，如resource_name等。value为匹配的值。 key为固定字典值，不能包含重复的key或不支持的key。 根据key的值确认是否需要模糊匹配，如resource_name默认为模糊搜索（不区分大小写）， 如果value为空字符串精确匹配（多数服务不存在资源名称为空的情况， 因此此类情况返回空列表）。resource_id为精确匹配。 第一期只做resource_name，后续再扩展。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets withoutAnyTag
    *  默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
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
    * @param bool|null $withoutAnyTag 默认为false，取值【true/false】,当withoutAnyTag=true， 忽略tags、tagsAny、notTags、notTagsAny参数校验。
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
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

