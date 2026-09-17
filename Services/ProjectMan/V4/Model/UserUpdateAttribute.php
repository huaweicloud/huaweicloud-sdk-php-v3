<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserUpdateAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserUpdateAttribute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    * nickName  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'nickName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    * nickName  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'nickName' => null
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
    * id  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    * nickName  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'nickName' => 'nick_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    * nickName  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'nickName' => 'setNickName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    * nickName  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'nickName' => 'getNickName'
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
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 30)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 2)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $id **参数解释**： 用户ID，可通过[查询项目成员列表](ListProjectUsers.xml)接口获取，响应消息体中的**id**字段的值就是用户ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 用户名称。 **约束限制**： 当**id**属性有值时，优先使用**id**和项目成员进行匹配，匹配失败再按**name**匹配。 **取值范围**： 2~64个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释**： 用户昵称。 **约束限制**： 当**id**，**name**属性有值时，优先使用**id**，**name**和项目成员进行匹配，匹配失败再按**nick_name**匹配。 **取值范围**： 2~30个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
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

