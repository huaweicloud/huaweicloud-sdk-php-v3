<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryLoginInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryLoginInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  登录数据库的用户名
    * password  登录数据库的密码
    * isSavePassword  是否保存密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'password' => 'string',
            'isSavePassword' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  登录数据库的用户名
    * password  登录数据库的密码
    * isSavePassword  是否保存密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'password' => null,
        'isSavePassword' => null
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
    * username  登录数据库的用户名
    * password  登录数据库的密码
    * isSavePassword  是否保存密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'password' => 'password',
            'isSavePassword' => 'is_save_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  登录数据库的用户名
    * password  登录数据库的密码
    * isSavePassword  是否保存密码
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'password' => 'setPassword',
            'isSavePassword' => 'setIsSavePassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  登录数据库的用户名
    * password  登录数据库的密码
    * isSavePassword  是否保存密码
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'password' => 'getPassword',
            'isSavePassword' => 'getIsSavePassword'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['isSavePassword'] = isset($data['isSavePassword']) ? $data['isSavePassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['isSavePassword'] === null) {
            $invalidProperties[] = "'isSavePassword' can't be null";
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
    * Gets username
    *  登录数据库的用户名
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
    * @param string|null $username 登录数据库的用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  登录数据库的密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 登录数据库的密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets isSavePassword
    *  是否保存密码
    *
    * @return bool
    */
    public function getIsSavePassword()
    {
        return $this->container['isSavePassword'];
    }

    /**
    * Sets isSavePassword
    *
    * @param bool $isSavePassword 是否保存密码
    *
    * @return $this
    */
    public function setIsSavePassword($isSavePassword)
    {
        $this->container['isSavePassword'] = $isSavePassword;
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

