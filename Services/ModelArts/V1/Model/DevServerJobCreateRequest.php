<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevServerJobCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevServerJobCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * serverIds  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    * isReboot  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    * items  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'serverIds' => 'string[]',
            'type' => 'string',
            'isReboot' => 'bool',
            'items' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * serverIds  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    * isReboot  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    * items  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'serverIds' => null,
        'type' => null,
        'isReboot' => null,
        'items' => null
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
    * name  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * serverIds  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    * isReboot  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    * items  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'serverIds' => 'server_ids',
            'type' => 'type',
            'isReboot' => 'is_reboot',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * serverIds  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    * isReboot  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    * items  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'serverIds' => 'setServerIds',
            'type' => 'setType',
            'isReboot' => 'setIsReboot',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * description  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * serverIds  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    * type  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    * isReboot  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    * items  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'serverIds' => 'getServerIds',
            'type' => 'getType',
            'isReboot' => 'getIsReboot',
            'items' => 'getItems'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isReboot'] = isset($data['isReboot']) ? $data['isReboot'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['serverIds'] === null) {
            $invalidProperties[] = "'serverIds' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
    * Gets name
    *  **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string $name **参数解释**：任务名称。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：任务描述。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets serverIds
    *  **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    *
    * @return string[]
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string[] $serverIds **参数解释**：DevServer实例id列表。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setServerIds($serverIds)
    {
        $this->container['serverIds'] = $serverIds;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：任务模板类型。 **约束限制**：^[-_.a-zA-Z0-9]{1,64}$。 **取值范围**：-COMMON  -SERVICE_DEPLOY 等。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isReboot
    *  **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    *
    * @return bool|null
    */
    public function getIsReboot()
    {
        return $this->container['isReboot'];
    }

    /**
    * Sets isReboot
    *
    * @param bool|null $isReboot **参数解释**：任务失败后是否重启。 **约束限制**：不涉及。 **取值范围**：- true   -false。 **默认取值**：false。
    *
    * @return $this
    */
    public function setIsReboot($isReboot)
    {
        $this->container['isReboot'] = $isReboot;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[]
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DevServerJobItem[] $items **参数解释**：任务实例列表。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

