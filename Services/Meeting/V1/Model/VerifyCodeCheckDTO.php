<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VerifyCodeCheckDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VerifyCodeCheckDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  必须和发送验证码时带的用户身份信息相同。
    * code  验证码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'code' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  必须和发送验证码时带的用户身份信息相同。
    * code  验证码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'code' => null
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
    * user  必须和发送验证码时带的用户身份信息相同。
    * code  验证码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'code' => 'code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  必须和发送验证码时带的用户身份信息相同。
    * code  验证码。
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'code' => 'setCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  必须和发送验证码时带的用户身份信息相同。
    * code  验证码。
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'code' => 'getCode'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
            if ((mb_strlen($this->container['user']) > 255)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
            if ((mb_strlen($this->container['code']) > 32)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
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
    * Gets user
    *  必须和发送验证码时带的用户身份信息相同。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 必须和发送验证码时带的用户身份信息相同。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets code
    *  验证码。
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 验证码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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

