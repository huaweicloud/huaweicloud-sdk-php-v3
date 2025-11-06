<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyEmailAddressDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyEmailAddressDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * email  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * verifyCode  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'email' => 'string',
            'verifyCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * email  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * verifyCode  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'email' => null,
        'verifyCode' => null
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
    * email  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * verifyCode  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'email' => 'email',
            'verifyCode' => 'verify_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * email  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * verifyCode  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'email' => 'setEmail',
            'verifyCode' => 'setVerifyCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * email  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * verifyCode  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'email' => 'getEmail',
            'verifyCode' => 'getVerifyCode'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['verifyCode'] = isset($data['verifyCode']) ? $data['verifyCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1000)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) > 1000)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['verifyCode']) && (mb_strlen($this->container['verifyCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyCode', the character length must be bigger than or equal to 1.";
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
    * Gets email
    *  **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email **参数解释：** 邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets verifyCode
    *  **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getVerifyCode()
    {
        return $this->container['verifyCode'];
    }

    /**
    * Sets verifyCode
    *
    * @param string|null $verifyCode **参数解释：** 验证码。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setVerifyCode($verifyCode)
    {
        $this->container['verifyCode'] = $verifyCode;
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

