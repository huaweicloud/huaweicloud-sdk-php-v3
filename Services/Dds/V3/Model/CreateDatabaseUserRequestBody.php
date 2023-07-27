<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDatabaseUserRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDatabaseUserRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userName  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    * userPwd  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * dbName  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    * roles  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userName' => 'string',
            'userPwd' => 'string',
            'dbName' => 'string',
            'roles' => '\HuaweiCloud\SDK\Dds\V3\Model\RolesOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userName  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    * userPwd  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * dbName  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    * roles  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userName' => null,
        'userPwd' => null,
        'dbName' => null,
        'roles' => null
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
    * userName  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    * userPwd  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * dbName  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    * roles  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userName' => 'user_name',
            'userPwd' => 'user_pwd',
            'dbName' => 'db_name',
            'roles' => 'roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userName  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    * userPwd  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * dbName  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    * roles  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'userName' => 'setUserName',
            'userPwd' => 'setUserPwd',
            'dbName' => 'setDbName',
            'roles' => 'setRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userName  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    * userPwd  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    * dbName  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    * roles  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'userName' => 'getUserName',
            'userPwd' => 'getUserPwd',
            'dbName' => 'getDbName',
            'roles' => 'getRoles'
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
        $this->container['userPwd'] = isset($data['userPwd']) ? $data['userPwd'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
        if ($this->container['userPwd'] === null) {
            $invalidProperties[] = "'userPwd' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
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
    *  数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
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
    * @param string $userName 数据库用户名称。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、中划线、下划线和点。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userPwd
    *  数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return string
    */
    public function getUserPwd()
    {
        return $this->container['userPwd'];
    }

    /**
    * Sets userPwd
    *
    * @param string $userPwd 数据库用户密码。 - 长度为8~32位，必须是大写字母（A~Z）、小写字母（a~z）、数字（0~9）、特殊字符~!@#%^*-_=+?的组合。 - 建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。
    *
    * @return $this
    */
    public function setUserPwd($userPwd)
    {
        $this->container['userPwd'] = $userPwd;
        return $this;
    }

    /**
    * Gets dbName
    *  新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 新用户所在的数据库，默认为“admin”。 - 长度为1~64位，可以包含大写字母（A~Z）、小写字母（a~z）、数字（0~9）、下划线。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets roles
    *  新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RolesOption[]
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RolesOption[] $roles 新用户所拥有的角色。 roles限制了该帐户所具有的权限。若指定一个空数组，表示该帐户不具有任何权限。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
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

