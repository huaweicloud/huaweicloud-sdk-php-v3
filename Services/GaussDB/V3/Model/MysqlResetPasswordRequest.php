<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MysqlResetPasswordRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MysqlResetPasswordRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @var string[]
    */
    protected static $setters = [
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * password  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
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
    * Gets password
    *  数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
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
    * @param string $password 数据库密码。  取值范围：至少包含以下字符的三种：大小写字母、数字和特殊符号~!@#$%^*-_=+?,()&，长度8~32个字符。建议您输入高强度密码，以提高安全性，防止出现密码被暴力破解等安全风险。如果您输入弱密码，系统会自动判定密码非法。
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
