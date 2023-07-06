<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserMigrationList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserMigrationList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户ID。
    * account  用户。
    * isSetPassword  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'account' => 'string',
            'isSetPassword' => 'bool',
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户ID。
    * account  用户。
    * isSetPassword  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'account' => null,
        'isSetPassword' => null,
        'password' => null
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
    * id  用户ID。
    * account  用户。
    * isSetPassword  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'account' => 'account',
            'isSetPassword' => 'is_set_password',
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户ID。
    * account  用户。
    * isSetPassword  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'account' => 'setAccount',
            'isSetPassword' => 'setIsSetPassword',
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户ID。
    * account  用户。
    * isSetPassword  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
    * password  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'account' => 'getAccount',
            'isSetPassword' => 'getIsSetPassword',
            'password' => 'getPassword'
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
        $this->container['isSetPassword'] = isset($data['isSetPassword']) ? $data['isSetPassword'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
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
    *  用户ID。
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
    * @param string $id 用户ID。
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
    *  用户。
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
    * @param string $account 用户。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets isSetPassword
    *  是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
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
    * @param bool|null $isSetPassword 是否重置该用户密码。当前支持的场景： - 实时迁移场景：MySQL迁移。
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
    *  重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
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
    * @param string|null $password 重置后的密码。统一重置密码或单个用户重置密码为true时必填，约束：密码不能为空。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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

