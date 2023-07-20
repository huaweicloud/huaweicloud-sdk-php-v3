<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserMigrationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserMigrationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isMigrateUser  是否迁移用户。
    * isSetPassword  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    * userList  userList
    * roleList  roleList
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isMigrateUser' => 'bool',
            'isSetPassword' => 'bool',
            'password' => 'string',
            'userList' => '\HuaweiCloud\SDK\Drs\V5\Model\UserMigrationList[]',
            'roleList' => '\HuaweiCloud\SDK\Drs\V5\Model\UserMigrationRole[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isMigrateUser  是否迁移用户。
    * isSetPassword  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    * userList  userList
    * roleList  roleList
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isMigrateUser' => null,
        'isSetPassword' => null,
        'password' => null,
        'userList' => null,
        'roleList' => null
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
    * isMigrateUser  是否迁移用户。
    * isSetPassword  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    * userList  userList
    * roleList  roleList
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isMigrateUser' => 'is_migrate_user',
            'isSetPassword' => 'is_set_password',
            'password' => 'password',
            'userList' => 'user_list',
            'roleList' => 'role_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isMigrateUser  是否迁移用户。
    * isSetPassword  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    * userList  userList
    * roleList  roleList
    *
    * @var string[]
    */
    protected static $setters = [
            'isMigrateUser' => 'setIsMigrateUser',
            'isSetPassword' => 'setIsSetPassword',
            'password' => 'setPassword',
            'userList' => 'setUserList',
            'roleList' => 'setRoleList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isMigrateUser  是否迁移用户。
    * isSetPassword  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    * userList  userList
    * roleList  roleList
    *
    * @var string[]
    */
    protected static $getters = [
            'isMigrateUser' => 'getIsMigrateUser',
            'isSetPassword' => 'getIsSetPassword',
            'password' => 'getPassword',
            'userList' => 'getUserList',
            'roleList' => 'getRoleList'
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
        $this->container['isMigrateUser'] = isset($data['isMigrateUser']) ? $data['isMigrateUser'] : null;
        $this->container['isSetPassword'] = isset($data['isSetPassword']) ? $data['isSetPassword'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['roleList'] = isset($data['roleList']) ? $data['roleList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isMigrateUser'] === null) {
            $invalidProperties[] = "'isMigrateUser' can't be null";
        }
        if ($this->container['isSetPassword'] === null) {
            $invalidProperties[] = "'isSetPassword' can't be null";
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
    * Gets isMigrateUser
    *  是否迁移用户。
    *
    * @return bool
    */
    public function getIsMigrateUser()
    {
        return $this->container['isMigrateUser'];
    }

    /**
    * Sets isMigrateUser
    *
    * @param bool $isMigrateUser 是否迁移用户。
    *
    * @return $this
    */
    public function setIsMigrateUser($isMigrateUser)
    {
        $this->container['isMigrateUser'] = $isMigrateUser;
        return $this;
    }

    /**
    * Gets isSetPassword
    *  是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    *
    * @return bool
    */
    public function getIsSetPassword()
    {
        return $this->container['isSetPassword'];
    }

    /**
    * Sets isSetPassword
    *
    * @param bool $isSetPassword 是否统一重置密码。取值： - true：重置密码为统一密码。 - false：不统一重置密码。 当前支持的场景： - 实时迁移场景：MySQL迁移。
    *
    * @return $this
    */
    public function setIsSetPassword($isSetPassword)
    {
        $this->container['isSetPassword'] = $isSetPassword;
        return $this;
    }

    /**
    * Gets password
    *  重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
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
    * @param string|null $password 重置后的统一密码。统一重置密码为true时必填。 约束：密码不能为空。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets userList
    *  userList
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationList[]|null
    */
    public function getUserList()
    {
        return $this->container['userList'];
    }

    /**
    * Sets userList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationList[]|null $userList userList
    *
    * @return $this
    */
    public function setUserList($userList)
    {
        $this->container['userList'] = $userList;
        return $this;
    }

    /**
    * Gets roleList
    *  roleList
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationRole[]|null
    */
    public function getRoleList()
    {
        return $this->container['roleList'];
    }

    /**
    * Sets roleList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationRole[]|null $roleList roleList
    *
    * @return $this
    */
    public function setRoleList($roleList)
    {
        $this->container['roleList'] = $roleList;
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

