<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserTopicPerms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'User_topic_perms';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * perm  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'perm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * perm  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'perm' => null
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
    * name  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * perm  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'perm' => 'perm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * perm  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'perm' => 'setPerm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * perm  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'perm' => 'getPerm'
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
    const PERM_PUB = 'PUB';
    const PERM_SUB = 'SUB';
    const PERM_PUB_SUB = 'PUB|SUB';
    const PERM_DENY = 'DENY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermAllowableValues()
    {
        return [
            self::PERM_PUB,
            self::PERM_SUB,
            self::PERM_PUB_SUB,
            self::PERM_DENY,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['perm'] = isset($data['perm']) ? $data['perm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPermAllowableValues();
                if (!is_null($this->container['perm']) && !in_array($this->container['perm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'perm', must be one of '%s'",
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
    * Gets name
    *  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets perm
    *  **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPerm()
    {
        return $this->container['perm'];
    }

    /**
    * Sets perm
    *
    * @param string|null $perm **参数解释**： Topic权限。 **约束限制**： 不涉及。 **取值范围**： - PUB：拥有发布权限。 - SUB：拥有订阅权限。 - PUB|SUB：拥有发布订阅权限。 - DENY：无权限。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPerm($perm)
    {
        $this->container['perm'] = $perm;
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

