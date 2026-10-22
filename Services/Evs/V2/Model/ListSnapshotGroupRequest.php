<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * offset  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * sortKey  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    * sortDir  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    * serverId  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'tagKey' => 'string',
            'tags' => 'string',
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * offset  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * sortKey  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    * sortDir  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    * serverId  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'tagKey' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'sortKey' => null,
        'sortDir' => null,
        'serverId' => null
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
    * id  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * offset  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * sortKey  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    * sortDir  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    * serverId  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'tagKey' => 'tag_key',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * offset  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * sortKey  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    * sortDir  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    * serverId  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'tagKey' => 'setTagKey',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * name  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    * status  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    * tagKey  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * tags  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * enterpriseProjectId  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * limit  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * offset  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    * sortKey  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    * sortDir  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    * serverId  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'tagKey' => 'getTagKey',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'serverId' => 'getServerId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
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
    * Gets id
    *  **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释** 指定的快照一致性组ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释** 快照一致性组名称。 **约束限制** 最大支持255个字节。 最小长度：0 最大长度：255 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 快照一致性组的状态。 **约束限制** 不涉及。 **取值范围** - creating：创建中。 - available：创建成功。 - error：创建失败。 - deleting: 删除中。 - deleted：删除成功。 - error_deleting：删除失败。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tagKey
    *  **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey **参数解释** 快照一致性组的标签的key。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释** 快照一致性组的标签的key/value对，例如[{\"key\":\"bbb\",\"value\":\"bbb\"}]。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释** 快照一致性组的企业项目ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param int|null $limit **参数解释** 返回结果个数限制。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    *  **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
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
    * @param int|null $offset **参数解释** 偏移量。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释** 返回结果按该关键字排序。 **约束限制** 不涉及。 **取值范围** - id：快照一致性组的ID。 - status：快照一致性组的状态。 - created_at：快照一致性组的创建时间。 **默认取值** created_at
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释** 返回结果按照降序或升序排列。 **约束限制** 不涉及。 **取值范围** - desc：降序。 - asc：升序。 **默认取值** desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets serverId
    *  **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId **参数解释** 云服务器ID。 **约束限制** 不涉及。 **取值范围** 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

