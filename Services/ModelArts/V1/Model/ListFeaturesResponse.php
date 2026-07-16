<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFeaturesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFeaturesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * enabled  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    * id  **参数解释**：特性ID。 **取值范围**：不涉及。
    * name  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    * quota  **参数解释**：特性配额。 **取值范围**：不涉及。
    * used  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createAt' => 'int',
            'enabled' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'quota' => 'int',
            'used' => 'int',
            'updateAt' => 'int',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * enabled  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    * id  **参数解释**：特性ID。 **取值范围**：不涉及。
    * name  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    * quota  **参数解释**：特性配额。 **取值范围**：不涉及。
    * used  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createAt' => 'int64',
        'enabled' => null,
        'id' => null,
        'name' => null,
        'quota' => 'int32',
        'used' => 'int32',
        'updateAt' => 'int64',
        'userId' => null
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
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * enabled  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    * id  **参数解释**：特性ID。 **取值范围**：不涉及。
    * name  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    * quota  **参数解释**：特性配额。 **取值范围**：不涉及。
    * used  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createAt' => 'create_at',
            'enabled' => 'enabled',
            'id' => 'id',
            'name' => 'name',
            'quota' => 'quota',
            'used' => 'used',
            'updateAt' => 'update_at',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * enabled  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    * id  **参数解释**：特性ID。 **取值范围**：不涉及。
    * name  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    * quota  **参数解释**：特性配额。 **取值范围**：不涉及。
    * used  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'createAt' => 'setCreateAt',
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'name' => 'setName',
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'updateAt' => 'setUpdateAt',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createAt  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    * enabled  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    * id  **参数解释**：特性ID。 **取值范围**：不涉及。
    * name  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    * quota  **参数解释**：特性配额。 **取值范围**：不涉及。
    * used  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    * updateAt  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    * userId  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'createAt' => 'getCreateAt',
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'name' => 'getName',
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'updateAt' => 'getUpdateAt',
            'userId' => 'getUserId'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
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
    * Gets createAt
    *  **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt **参数解释**：实例创建的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**：特性开关。 **取值范围**：布尔类型： - true：开启。 - false：未开启。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：特性ID。 **取值范围**：不涉及。
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
    * @param string|null $id **参数解释**：特性ID。 **取值范围**：不涉及。
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
    *  **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
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
    * @param string|null $name **参数解释**：特性名称。 **取值范围**：枚举类型，取值如下： - NOTEBOOK：用户显式创建的Notebook实例。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**：特性配额。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota **参数解释**：特性配额。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used **参数解释**：特性已使用额度。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt **参数解释**：实例最后更新的时间，UTC毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**：用户ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

