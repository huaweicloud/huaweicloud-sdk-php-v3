<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultResourceInstancesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultResourceInstancesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
    * tags  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * tagsAny  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTags  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTagsAny  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    * sysTags  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    * limit  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
    * offset  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
    * action  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
    * matches  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    * cloudType  云类型
    * objectType  资源类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'withoutAnyTag' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]',
            'tagsAny' => '\HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]',
            'notTags' => '\HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]',
            'notTagsAny' => '\HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]',
            'sysTags' => '\HuaweiCloud\SDK\Cbr\V1\Model\SysTags[]',
            'limit' => 'string',
            'offset' => 'string',
            'action' => 'string',
            'matches' => '\HuaweiCloud\SDK\Cbr\V1\Model\Match[]',
            'cloudType' => 'string',
            'objectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
    * tags  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * tagsAny  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTags  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTagsAny  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    * sysTags  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    * limit  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
    * offset  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
    * action  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
    * matches  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    * cloudType  云类型
    * objectType  资源类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'withoutAnyTag' => null,
        'tags' => null,
        'tagsAny' => null,
        'notTags' => null,
        'notTagsAny' => null,
        'sysTags' => null,
        'limit' => null,
        'offset' => null,
        'action' => null,
        'matches' => null,
        'cloudType' => null,
        'objectType' => null
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
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
    * tags  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * tagsAny  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTags  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTagsAny  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    * sysTags  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    * limit  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
    * offset  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
    * action  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
    * matches  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    * cloudType  云类型
    * objectType  资源类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'withoutAnyTag' => 'without_any_tag',
            'tags' => 'tags',
            'tagsAny' => 'tags_any',
            'notTags' => 'not_tags',
            'notTagsAny' => 'not_tags_any',
            'sysTags' => 'sys_tags',
            'limit' => 'limit',
            'offset' => 'offset',
            'action' => 'action',
            'matches' => 'matches',
            'cloudType' => 'cloud_type',
            'objectType' => 'object_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
    * tags  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * tagsAny  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTags  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTagsAny  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    * sysTags  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    * limit  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
    * offset  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
    * action  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
    * matches  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    * cloudType  云类型
    * objectType  资源类型
    *
    * @var string[]
    */
    protected static $setters = [
            'withoutAnyTag' => 'setWithoutAnyTag',
            'tags' => 'setTags',
            'tagsAny' => 'setTagsAny',
            'notTags' => 'setNotTags',
            'notTagsAny' => 'setNotTagsAny',
            'sysTags' => 'setSysTags',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'action' => 'setAction',
            'matches' => 'setMatches',
            'cloudType' => 'setCloudType',
            'objectType' => 'setObjectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
    * tags  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * tagsAny  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTags  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    * notTagsAny  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    * sysTags  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    * limit  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
    * offset  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
    * action  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
    * matches  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    * cloudType  云类型
    * objectType  资源类型
    *
    * @var string[]
    */
    protected static $getters = [
            'withoutAnyTag' => 'getWithoutAnyTag',
            'tags' => 'getTags',
            'tagsAny' => 'getTagsAny',
            'notTags' => 'getNotTags',
            'notTagsAny' => 'getNotTagsAny',
            'sysTags' => 'getSysTags',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'action' => 'getAction',
            'matches' => 'getMatches',
            'cloudType' => 'getCloudType',
            'objectType' => 'getObjectType'
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
    const CLOUD_TYPE__PUBLIC = 'public';
    const CLOUD_TYPE_HYBRID = 'hybrid';
    const OBJECT_TYPE_SERVER = 'server';
    const OBJECT_TYPE_DISK = 'disk';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCloudTypeAllowableValues()
    {
        return [
            self::CLOUD_TYPE__PUBLIC,
            self::CLOUD_TYPE_HYBRID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_SERVER,
            self::OBJECT_TYPE_DISK,
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
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
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
            $allowedValues = $this->getCloudTypeAllowableValues();
                if (!is_null($this->container['cloudType']) && !in_array($this->container['cloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
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
    * Gets withoutAnyTag
    *  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
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
    * @param bool|null $withoutAnyTag 不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”、“tags_any”、“not_tags”、“not_tags_any”字段。
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
    *  包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null $tags 包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  tags中多个key之间是“与”的关系。  结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
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
    *  包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null $tagsAny 包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回包含任一标签的资源列表，key之间是或的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
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
    *  不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null $notTags 不包含标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。  无过滤条件时返回全量数据。
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
    *  不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\TagsReq[]|null $notTagsAny 不包含任一标签。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。  结果返回不包含任一标签的资源列表，key之间是或的关系，key-value结构张value是或的关系。  无过滤条件时返回全量数据。
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
    *  仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\SysTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\SysTags[]|null $sysTags 仅op_service权限可以使用此字段做资源实例过滤条件。  目前TMS调用时只包含一个tag结构体。  * key： _sys_enterprise_project_id  * values：企业项目id列表  目前TMS调用时，key下面只包含一个value，0表示默认企业项目。  sys_tags和租户标签过滤条件（tags、tags_any、not_tags、not_tags_any）不能同时使用。  无sys_tags时按照tag接口处理，无tag过滤条件时返回全量数据。  sys_tags不能为空列表
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
    *  查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
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
    * @param string|null $limit 查询记录数（action为count时无此参数）如果action为filter时，默认为1000，limit最小值为1，limit最大值为1000, 不在范围内报错。返回的结果中记录数不超过limit。
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
    *  索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
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
    * @param string|null $offset 索引位置（action为count时无此参数）如果action为filter时，默认为0，offset最小值为0。返回的结果中第一条记录为符合查询条件的第offset+1条记录。
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
    *  操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
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
    * @param string $action 操作标识取值范围为：\"filter\", \"count\"。如果是filter就是分页查询，如果是count只需按照条件将总条数返回即可
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
    *  资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Match[]|null $matches 资源本身支持的查询条件。  matches中key不允许重复。  数组长度最大值为 1，后续再扩展。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets cloudType
    *  云类型
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 云类型
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets objectType
    *  资源类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 资源类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
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

