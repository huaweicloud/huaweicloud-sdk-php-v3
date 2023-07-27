<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetPassword implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetPassword';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newPassword  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newPassword  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newPassword' => 'password'
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
    * newPassword  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newPassword' => 'new_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newPassword  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @var string[]
    */
    protected static $setters = [
            'newPassword' => 'setNewPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newPassword  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @var string[]
    */
    protected static $getters = [
            'newPassword' => 'getNewPassword'
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
        $this->container['newPassword'] = isset($data['newPassword']) ? $data['newPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newPassword'] === null) {
            $invalidProperties[] = "'newPassword' can't be null";
        }
            if (!preg_match("/[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/", $this->container['newPassword'])) {
                $invalidProperties[] = "invalid value for 'newPassword', must be conform to the pattern /[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/.";
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
    * Gets newPassword
    *  裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @return string
    */
    public function getNewPassword()
    {
        return $this->container['newPassword'];
    }

    /**
    * Sets newPassword
    *
    * @param string $newPassword 裸金属服务器新密码。该接口不做密码安全性校验，设置的密码复杂度请遵循密码规则。密码规则：密码长度范围为8到26位。密码至少包含以下4种字符中的3种：大写字母小写字母数字特殊字符Windows：!@$%-_=+[]:./?Linux：!@%^-_=+[]{}:,./?密码不能包含用户名或用户名的逆序。Windows系统的裸金属服务器，不能包含用户名中超过两个连续字符的部分。
    *
    * @return $this
    */
    public function setNewPassword($newPassword)
    {
        $this->container['newPassword'] = $newPassword;
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

