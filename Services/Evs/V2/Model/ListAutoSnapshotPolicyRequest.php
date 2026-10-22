<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoSnapshotPolicyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoSnapshotPolicyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自动快照策略ID。
    * name  自动快照策略名称。
    * tags  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    * tagKey  自动快照策略的标签的key。
    * enterpriseProjectId  自动快照策略的企业项目ID。
    * limit  返回结果个数限制。
    * offset  偏移量。
    * sortKey  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'tags' => 'string',
            'tagKey' => 'string',
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自动快照策略ID。
    * name  自动快照策略名称。
    * tags  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    * tagKey  自动快照策略的标签的key。
    * enterpriseProjectId  自动快照策略的企业项目ID。
    * limit  返回结果个数限制。
    * offset  偏移量。
    * sortKey  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'tags' => null,
        'tagKey' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'sortKey' => null,
        'sortDir' => null
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
    * id  自动快照策略ID。
    * name  自动快照策略名称。
    * tags  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    * tagKey  自动快照策略的标签的key。
    * enterpriseProjectId  自动快照策略的企业项目ID。
    * limit  返回结果个数限制。
    * offset  偏移量。
    * sortKey  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'tags' => 'tags',
            'tagKey' => 'tag_key',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自动快照策略ID。
    * name  自动快照策略名称。
    * tags  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    * tagKey  自动快照策略的标签的key。
    * enterpriseProjectId  自动快照策略的企业项目ID。
    * limit  返回结果个数限制。
    * offset  偏移量。
    * sortKey  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'tags' => 'setTags',
            'tagKey' => 'setTagKey',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自动快照策略ID。
    * name  自动快照策略名称。
    * tags  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    * tagKey  自动快照策略的标签的key。
    * enterpriseProjectId  自动快照策略的企业项目ID。
    * limit  返回结果个数限制。
    * offset  偏移量。
    * sortKey  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
    * sortDir  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'tags' => 'getTags',
            'tagKey' => 'getTagKey',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
    *  自动快照策略ID。
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
    * @param string|null $id 自动快照策略ID。
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
    *  自动快照策略名称。
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
    * @param string|null $name 自动快照策略名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tags
    *  自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
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
    * @param string|null $tags 自动快照策略的标签的key/value对，例如[{\"key1\":\"value1\"}]。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tagKey
    *  自动快照策略的标签的key。
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
    * @param string|null $tagKey 自动快照策略的标签的key。
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  自动快照策略的企业项目ID。
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
    * @param string|null $enterpriseProjectId 自动快照策略的企业项目ID。
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
    *  返回结果个数限制。
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
    * @param int|null $limit 返回结果个数限制。
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
    *  偏移量。
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
    * @param int|null $offset 偏移量。
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
    *  返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
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
    * @param string|null $sortKey 返回结果按该关键字排序，支持id，created_at等关键字，默认为“created_at”。
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
    *  返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
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
    * @param string|null $sortDir 返回结果按照降序或升序排列，默认为“desc”。 降序：desc 升序：asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

