<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserAccountVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserAccountVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户账户ID。
    * account  用户
    * comment  说明
    * isTransfer  是否支持迁移
    * privileges  权限列表
    * password  密码
    * isSetPassword  是否重置密码。
    * roles  角色
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'account' => 'string',
            'comment' => 'string',
            'isTransfer' => 'bool',
            'privileges' => 'string[]',
            'password' => 'string',
            'isSetPassword' => 'bool',
            'roles' => 'string[]',
            'selected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户账户ID。
    * account  用户
    * comment  说明
    * isTransfer  是否支持迁移
    * privileges  权限列表
    * password  密码
    * isSetPassword  是否重置密码。
    * roles  角色
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'account' => null,
        'comment' => null,
        'isTransfer' => null,
        'privileges' => null,
        'password' => null,
        'isSetPassword' => null,
        'roles' => null,
        'selected' => null
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
    * id  用户账户ID。
    * account  用户
    * comment  说明
    * isTransfer  是否支持迁移
    * privileges  权限列表
    * password  密码
    * isSetPassword  是否重置密码。
    * roles  角色
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'account' => 'account',
            'comment' => 'comment',
            'isTransfer' => 'is_transfer',
            'privileges' => 'privileges',
            'password' => 'password',
            'isSetPassword' => 'is_set_password',
            'roles' => 'roles',
            'selected' => 'selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户账户ID。
    * account  用户
    * comment  说明
    * isTransfer  是否支持迁移
    * privileges  权限列表
    * password  密码
    * isSetPassword  是否重置密码。
    * roles  角色
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'account' => 'setAccount',
            'comment' => 'setComment',
            'isTransfer' => 'setIsTransfer',
            'privileges' => 'setPrivileges',
            'password' => 'setPassword',
            'isSetPassword' => 'setIsSetPassword',
            'roles' => 'setRoles',
            'selected' => 'setSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户账户ID。
    * account  用户
    * comment  说明
    * isTransfer  是否支持迁移
    * privileges  权限列表
    * password  密码
    * isSetPassword  是否重置密码。
    * roles  角色
    * selected  是否选择。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'account' => 'getAccount',
            'comment' => 'getComment',
            'isTransfer' => 'getIsTransfer',
            'privileges' => 'getPrivileges',
            'password' => 'getPassword',
            'isSetPassword' => 'getIsSetPassword',
            'roles' => 'getRoles',
            'selected' => 'getSelected'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['isTransfer'] = isset($data['isTransfer']) ? $data['isTransfer'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['isSetPassword'] = isset($data['isSetPassword']) ? $data['isSetPassword'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['isTransfer'] === null) {
            $invalidProperties[] = "'isTransfer' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['selected'] === null) {
            $invalidProperties[] = "'selected' can't be null";
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
    *  用户账户ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 用户账户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets account
    *  用户
    *
    * @return string
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string $account 用户
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets comment
    *  说明
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 说明
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets isTransfer
    *  是否支持迁移
    *
    * @return bool
    */
    public function getIsTransfer()
    {
        return $this->container['isTransfer'];
    }

    /**
    * Sets isTransfer
    *
    * @param bool $isTransfer 是否支持迁移
    *
    * @return $this
    */
    public function setIsTransfer($isTransfer)
    {
        $this->container['isTransfer'] = $isTransfer;
        return $this;
    }

    /**
    * Gets privileges
    *  权限列表
    *
    * @return string[]|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string[]|null $privileges 权限列表
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
        return $this;
    }

    /**
    * Gets password
    *  密码
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets isSetPassword
    *  是否重置密码。
    *
    * @return bool|null
    */
    public function getIsSetPassword()
    {
        return $this->container['isSetPassword'];
    }

    /**
    * Sets isSetPassword
    *
    * @param bool|null $isSetPassword 是否重置密码。
    *
    * @return $this
    */
    public function setIsSetPassword($isSetPassword)
    {
        $this->container['isSetPassword'] = $isSetPassword;
        return $this;
    }

    /**
    * Gets roles
    *  角色
    *
    * @return string[]
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param string[] $roles 角色
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets selected
    *  是否选择。
    *
    * @return bool
    */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
    * Sets selected
    *
    * @param bool $selected 是否选择。
    *
    * @return $this
    */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;
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

