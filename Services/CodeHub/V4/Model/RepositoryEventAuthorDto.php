<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryEventAuthorDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryEventAuthorDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 状态。
    * avatarUrl  **参数解释：** 头像地址。
    * nameCn  **参数解释：** 中文名。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'username' => 'string',
            'state' => 'string',
            'avatarUrl' => 'string',
            'nameCn' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 状态。
    * avatarUrl  **参数解释：** 头像地址。
    * nameCn  **参数解释：** 中文名。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'username' => null,
        'state' => null,
        'avatarUrl' => null,
        'nameCn' => null,
        'nickName' => null,
        'tenantName' => null
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
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 状态。
    * avatarUrl  **参数解释：** 头像地址。
    * nameCn  **参数解释：** 中文名。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'username' => 'username',
            'state' => 'state',
            'avatarUrl' => 'avatar_url',
            'nameCn' => 'name_cn',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 状态。
    * avatarUrl  **参数解释：** 头像地址。
    * nameCn  **参数解释：** 中文名。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'username' => 'setUsername',
            'state' => 'setState',
            'avatarUrl' => 'setAvatarUrl',
            'nameCn' => 'setNameCn',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 状态。
    * avatarUrl  **参数解释：** 头像地址。
    * nameCn  **参数解释：** 中文名。
    * nickName  **参数解释：** 昵称。
    * tenantName  **参数解释：** 租户名。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'username' => 'getUsername',
            'state' => 'getState',
            'avatarUrl' => 'getAvatarUrl',
            'nameCn' => 'getNameCn',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName'
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
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 255)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 255)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 用户名称。
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
    * @param string|null $name **参数解释：** 用户名称。
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
    *  **参数解释：** 用户名。
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
    * @param string|null $username **参数解释：** 用户名。
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
    *  **参数解释：** 状态。
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
    * @param string|null $state **参数解释：** 状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  **参数解释：** 头像地址。
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl **参数解释：** 头像地址。
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets nameCn
    *  **参数解释：** 中文名。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn **参数解释：** 中文名。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 昵称。
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
    * @param string|null $nickName **参数解释：** 昵称。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
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

