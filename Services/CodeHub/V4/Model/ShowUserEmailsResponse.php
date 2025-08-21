<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserEmailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserEmailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * state  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * lastActivityOn  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * commitEmail  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'username' => 'string',
            'state' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'lastActivityOn' => 'string',
            'commitEmail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * state  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * lastActivityOn  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * commitEmail  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'username' => null,
        'state' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'lastActivityOn' => null,
        'commitEmail' => null
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
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * state  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * lastActivityOn  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * commitEmail  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'username' => 'username',
            'state' => 'state',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'lastActivityOn' => 'last_activity_on',
            'commitEmail' => 'commit_email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * state  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * lastActivityOn  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * commitEmail  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'username' => 'setUsername',
            'state' => 'setState',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'lastActivityOn' => 'setLastActivityOn',
            'commitEmail' => 'setCommitEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * state  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * lastActivityOn  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * commitEmail  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'username' => 'getUsername',
            'state' => 'getState',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'lastActivityOn' => 'getLastActivityOn',
            'commitEmail' => 'getCommitEmail'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['lastActivityOn'] = isset($data['lastActivityOn']) ? $data['lastActivityOn'] : null;
        $this->container['commitEmail'] = isset($data['commitEmail']) ? $data['commitEmail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 1000)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1000)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastActivityOn']) && (mb_strlen($this->container['lastActivityOn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'lastActivityOn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['lastActivityOn']) && (mb_strlen($this->container['lastActivityOn']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastActivityOn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitEmail']) && (mb_strlen($this->container['commitEmail']) > 1000)) {
                $invalidProperties[] = "invalid value for 'commitEmail', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['commitEmail']) && (mb_strlen($this->container['commitEmail']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitEmail', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户id。
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
    *  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $name **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 用户长id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释：** 用户状态。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets lastActivityOn
    *  **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getLastActivityOn()
    {
        return $this->container['lastActivityOn'];
    }

    /**
    * Sets lastActivityOn
    *
    * @param string|null $lastActivityOn **参数解释：** 最后活跃时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setLastActivityOn($lastActivityOn)
    {
        $this->container['lastActivityOn'] = $lastActivityOn;
        return $this;
    }

    /**
    * Gets commitEmail
    *  **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCommitEmail()
    {
        return $this->container['commitEmail'];
    }

    /**
    * Sets commitEmail
    *
    * @param string|null $commitEmail **参数解释：** 提交邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCommitEmail($commitEmail)
    {
        $this->container['commitEmail'] = $commitEmail;
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

