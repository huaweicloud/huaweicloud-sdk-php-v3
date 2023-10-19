<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAclAccountRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAclAccountRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountName  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    * accountRole  账号权限
    * accountPassword  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    * description  账号描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountName' => 'string',
            'accountRole' => 'string',
            'accountPassword' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountName  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    * accountRole  账号权限
    * accountPassword  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    * description  账号描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountName' => null,
        'accountRole' => null,
        'accountPassword' => null,
        'description' => null
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
    * accountName  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    * accountRole  账号权限
    * accountPassword  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    * description  账号描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountName' => 'account_name',
            'accountRole' => 'account_role',
            'accountPassword' => 'account_password',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountName  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    * accountRole  账号权限
    * accountPassword  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    * description  账号描述
    *
    * @var string[]
    */
    protected static $setters = [
            'accountName' => 'setAccountName',
            'accountRole' => 'setAccountRole',
            'accountPassword' => 'setAccountPassword',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountName  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    * accountRole  账号权限
    * accountPassword  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    * description  账号描述
    *
    * @var string[]
    */
    protected static $getters = [
            'accountName' => 'getAccountName',
            'accountRole' => 'getAccountRole',
            'accountPassword' => 'getAccountPassword',
            'description' => 'getDescription'
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
    const ACCOUNT_ROLE_READ = 'read';
    const ACCOUNT_ROLE_WRITE = 'write';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountRoleAllowableValues()
    {
        return [
            self::ACCOUNT_ROLE_READ,
            self::ACCOUNT_ROLE_WRITE,
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountRole'] = isset($data['accountRole']) ? $data['accountRole'] : null;
        $this->container['accountPassword'] = isset($data['accountPassword']) ? $data['accountPassword'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
        if ($this->container['accountRole'] === null) {
            $invalidProperties[] = "'accountRole' can't be null";
        }
            $allowedValues = $this->getAccountRoleAllowableValues();
                if (!is_null($this->container['accountRole']) && !in_array($this->container['accountRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['accountPassword'] === null) {
            $invalidProperties[] = "'accountPassword' can't be null";
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
    * Gets accountName
    *  账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName 账号名称 - 以字母开头。 - 内容由字母、数字、中划线、下划线组成。 - 长度范围[1~64]个字符。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets accountRole
    *  账号权限
    *
    * @return string
    */
    public function getAccountRole()
    {
        return $this->container['accountRole'];
    }

    /**
    * Sets accountRole
    *
    * @param string $accountRole 账号权限
    *
    * @return $this
    */
    public function setAccountRole($accountRole)
    {
        $this->container['accountRole'] = $accountRole;
        return $this;
    }

    /**
    * Gets accountPassword
    *  账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    *
    * @return string
    */
    public function getAccountPassword()
    {
        return $this->container['accountPassword'];
    }

    /**
    * Sets accountPassword
    *
    * @param string $accountPassword 账号密码 - 输入长度为8到64位的字符串。 - 不能包含正序逆序用户名。 - 必须包含如下四种字符中的三种组合（不允许包含冒号）：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|{},<.>/?）
    *
    * @return $this
    */
    public function setAccountPassword($accountPassword)
    {
        $this->container['accountPassword'] = $accountPassword;
        return $this;
    }

    /**
    * Gets description
    *  账号描述
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
    * @param string|null $description 账号描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

