<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClickHouseDatabaseUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClickHouseDatabaseUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    * password  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    * databases  数据库列表。“*”表示所有数据库。
    * dml  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'password' => 'string',
            'databases' => 'string[]',
            'dml' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    * password  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    * databases  数据库列表。“*”表示所有数据库。
    * dml  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'password' => null,
        'databases' => null,
        'dml' => 'int32'
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
    * userName  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    * password  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    * databases  数据库列表。“*”表示所有数据库。
    * dml  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'password' => 'password',
            'databases' => 'databases',
            'dml' => 'dml'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    * password  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    * databases  数据库列表。“*”表示所有数据库。
    * dml  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'password' => 'setPassword',
            'databases' => 'setDatabases',
            'dml' => 'setDml'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    * password  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    * databases  数据库列表。“*”表示所有数据库。
    * dml  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'password' => 'getPassword',
            'databases' => 'getDatabases',
            'dml' => 'getDml'
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
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['dml'] = isset($data['dml']) ? $data['dml'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['databases'] === null) {
            $invalidProperties[] = "'databases' can't be null";
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
    * Gets userName
    *  数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 数据库账户名。长度为2-32个字符，必须以小写字母开头，小写字母或数字结尾，可以包含小写字母、数字以及下划线，不能包含其它特殊字符。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets password
    *  账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
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
    * @param string $password 账户密码。 - 8-32个字符 - 至少包含以下字符中的三种：大写字母、小写字母、数字和特殊字符~！@#%^*-_=+? - 不能与用户名或倒序的用户名相同
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets databases
    *  数据库列表。“*”表示所有数据库。
    *
    * @return string[]
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string[] $databases 数据库列表。“*”表示所有数据库。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets dml
    *  DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @return int|null
    */
    public function getDml()
    {
        return $this->container['dml'];
    }

    /**
    * Sets dml
    *
    * @param int|null $dml DML权限，默认2。 取值范围： - 1：只读权限 - 2：读取和设置权限
    *
    * @return $this
    */
    public function setDml($dml)
    {
        $this->container['dml'] = $dml;
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

