<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resource  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    * name  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'since' => 'int',
            'until' => 'int',
            'resource' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resource  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    * name  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'since' => 'int64',
        'until' => 'int64',
        'resource' => null,
        'name' => null
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
    * type  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resource  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    * name  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'limit' => 'limit',
            'offset' => 'offset',
            'since' => 'since',
            'until' => 'until',
            'resource' => 'resource',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resource  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    * name  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'since' => 'setSince',
            'until' => 'setUntil',
            'resource' => 'setResource',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * offset  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * resource  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    * name  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'since' => 'getSince',
            'until' => 'getUntil',
            'resource' => 'getResource',
            'name' => 'getName'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['until'] = isset($data['until']) ? $data['until'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    * Gets type
    *  **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：任务类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - replace-node：故障节点替换任务。 - reboot-node：节点重启任务。 - reset-nodes：节点重置任务。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int|null $limit **参数解释**：单页查询最大数量，该值为空时默认返回100条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int|null $offset **参数解释**：分页查询的偏移量，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets since
    *  **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
    * Sets since
    *
    * @param int|null $since **参数解释**：查询起始时间，单位毫秒。默认从30天前开始查询。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSince($since)
    {
        $this->container['since'] = $since;
        return $this;
    }

    /**
    * Gets until
    *  **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getUntil()
    {
        return $this->container['until'];
    }

    /**
    * Sets until
    *
    * @param int|null $until **参数解释**：查询终止时间，单位毫秒。默认当前时间。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUntil($until)
    {
        $this->container['until'] = $until;
        return $this;
    }

    /**
    * Gets resource
    *  **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource **参数解释**：任务关联的资源类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - pools：资源池 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $name **参数解释**：关联的资源名称，与resource配合使用。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

