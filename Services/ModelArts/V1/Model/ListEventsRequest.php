<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * continue  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'continue' => 'string',
            'since' => 'int',
            'until' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * continue  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'name' => null,
        'limit' => null,
        'continue' => null,
        'since' => null,
        'until' => null,
        'type' => null
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
    * resource  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * continue  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'name' => 'name',
            'limit' => 'limit',
            'continue' => 'continue',
            'since' => 'since',
            'until' => 'until',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * continue  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'name' => 'setName',
            'limit' => 'setLimit',
            'continue' => 'setContinue',
            'since' => 'setSince',
            'until' => 'setUntil',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * name  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * limit  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * continue  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * since  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * until  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * type  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'name' => 'getName',
            'limit' => 'getLimit',
            'continue' => 'getContinue',
            'since' => 'getSince',
            'until' => 'getUntil',
            'type' => 'getType'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['continue'] = isset($data['continue']) ? $data['continue'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['until'] = isset($data['until']) ? $data['until'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets resource
    *  **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string $resource **参数解释**：事件所属资源类型。可选值为pools，表示资源池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：事件所属资源名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int|null $limit **参数解释**：单页查询最大数量，该值为空或者0时默认返回500条记录，单页最大允许查询500条记录。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets continue
    *  **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getContinue()
    {
        return $this->container['continue'];
    }

    /**
    * Sets continue
    *
    * @param string|null $continue **参数解释**：分页查询的上一页标记，内容为UUID字符串，查询第一页时为空。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setContinue($continue)
    {
        $this->container['continue'] = $continue;
        return $this;
    }

    /**
    * Gets since
    *  **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int|null $since **参数解释**：事件开始时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param int|null $until **参数解释**：事件结束时间戳。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUntil($until)
    {
        $this->container['until'] = $until;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
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
    * @param string|null $type **参数解释**：事件类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Normal：正常 - Warning：异常 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

