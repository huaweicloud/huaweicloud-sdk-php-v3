<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateUserRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateUserRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    * description  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * passwordLifetime  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    * databases  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'password' => 'string',
            'baseAuthority' => 'string[]',
            'description' => 'string',
            'passwordLifetime' => 'int',
            'databases' => '\HuaweiCloud\SDK\Ddm\V1\Model\CreateUserRelatedLogicDbV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    * description  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * passwordLifetime  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    * databases  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'password' => null,
        'baseAuthority' => null,
        'description' => null,
        'passwordLifetime' => 'int64',
        'databases' => null
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
    * name  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    * description  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * passwordLifetime  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    * databases  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'password' => 'password',
            'baseAuthority' => 'base_authority',
            'description' => 'description',
            'passwordLifetime' => 'password_lifetime',
            'databases' => 'databases'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    * description  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * passwordLifetime  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    * databases  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'password' => 'setPassword',
            'baseAuthority' => 'setBaseAuthority',
            'description' => 'setDescription',
            'passwordLifetime' => 'setPasswordLifetime',
            'databases' => 'setDatabases'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    * password  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * baseAuthority  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    * description  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * passwordLifetime  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    * databases  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'password' => 'getPassword',
            'baseAuthority' => 'getBaseAuthority',
            'description' => 'getDescription',
            'passwordLifetime' => 'getPasswordLifetime',
            'databases' => 'getDatabases'
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
    const BASE_AUTHORITY_CREATE = 'CREATE';
    const BASE_AUTHORITY_DROP = 'DROP';
    const BASE_AUTHORITY_ALTER = 'ALTER';
    const BASE_AUTHORITY_INDEX = 'INDEX';
    const BASE_AUTHORITY_INSERT = 'INSERT';
    const BASE_AUTHORITY_DELETE = 'DELETE';
    const BASE_AUTHORITY_UPDATE = 'UPDATE';
    const BASE_AUTHORITY_SELECT = 'SELECT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBaseAuthorityAllowableValues()
    {
        return [
            self::BASE_AUTHORITY_CREATE,
            self::BASE_AUTHORITY_DROP,
            self::BASE_AUTHORITY_ALTER,
            self::BASE_AUTHORITY_INDEX,
            self::BASE_AUTHORITY_INSERT,
            self::BASE_AUTHORITY_DELETE,
            self::BASE_AUTHORITY_UPDATE,
            self::BASE_AUTHORITY_SELECT,
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['baseAuthority'] = isset($data['baseAuthority']) ? $data['baseAuthority'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['passwordLifetime'] = isset($data['passwordLifetime']) ? $data['passwordLifetime'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9_]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9_]*$/.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 32)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['password']) < 8)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
            }
        if ($this->container['baseAuthority'] === null) {
            $invalidProperties[] = "'baseAuthority' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：  实例账号名称。  **约束限制**：  - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母、数字、下划线，不能包含其它特殊字符。  **取值范围**：  不涉及。  **默认取值**：    不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    * @param string $password **参数解释**：  实例账号密码。  **约束限制**：  - 长度为8~32个字符。 - 至少包含三种字符组合：小写字母、大写字母、数字、特殊字符 ~ ! @ # % ^ * - _ + ? - 不能使用简单、强度不够、容易被猜测的密码。 - 不能与账号名称或者倒序的账号名称相同。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets baseAuthority
    *  **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    *
    * @return string[]
    */
    public function getBaseAuthority()
    {
        return $this->container['baseAuthority'];
    }

    /**
    * Sets baseAuthority
    *
    * @param string[] $baseAuthority **参数解释**：  DDM实例账号的基础权限。  **约束限制**：  无  **取值范围**：  CREATE、DROP、ALTER、INDEX、INSERT、DELETE、UPDATE、SELECT的任意集合  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setBaseAuthority($baseAuthority)
    {
        $this->container['baseAuthority'] = $baseAuthority;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**：  实例账号的描述信息。  **约束限制**：  - 长度不超过256个字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets passwordLifetime
    *  **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    *
    * @return int|null
    */
    public function getPasswordLifetime()
    {
        return $this->container['passwordLifetime'];
    }

    /**
    * Sets passwordLifetime
    *
    * @param int|null $passwordLifetime **参数解释**：  DDM实例账号的密码有效期。  **约束限制**：  不涉及。   **取值范围**：  取值范围为0-65535的整数，单位为天。  0与空表示密码永不过期。  **默认取值**：  默认值为空，永不过期。
    *
    * @return $this
    */
    public function setPasswordLifetime($passwordLifetime)
    {
        $this->container['passwordLifetime'] = $passwordLifetime;
        return $this;
    }

    /**
    * Gets databases
    *  关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\CreateUserRelatedLogicDbV3[]|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\CreateUserRelatedLogicDbV3[]|null $databases 关联的逻辑库的集合。 databases字段可以省略，即创建用户时可以不关联逻辑库。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
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

