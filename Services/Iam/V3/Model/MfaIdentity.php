<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MfaIdentity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MfaIdentity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * methods  认证方法，该字段内容为[\"password\", \"totp\"]。
    * password  password
    * totp  totp
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'methods' => 'string[]',
            'password' => '\HuaweiCloud\SDK\Iam\V3\Model\PwdPassword',
            'totp' => '\HuaweiCloud\SDK\Iam\V3\Model\MfaTotp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * methods  认证方法，该字段内容为[\"password\", \"totp\"]。
    * password  password
    * totp  totp
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'methods' => null,
        'password' => null,
        'totp' => null
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
    * methods  认证方法，该字段内容为[\"password\", \"totp\"]。
    * password  password
    * totp  totp
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'methods' => 'methods',
            'password' => 'password',
            'totp' => 'totp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * methods  认证方法，该字段内容为[\"password\", \"totp\"]。
    * password  password
    * totp  totp
    *
    * @var string[]
    */
    protected static $setters = [
            'methods' => 'setMethods',
            'password' => 'setPassword',
            'totp' => 'setTotp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * methods  认证方法，该字段内容为[\"password\", \"totp\"]。
    * password  password
    * totp  totp
    *
    * @var string[]
    */
    protected static $getters = [
            'methods' => 'getMethods',
            'password' => 'getPassword',
            'totp' => 'getTotp'
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
    const METHODS_PASSWORD = 'password';
    const METHODS_TOTP = 'totp';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodsAllowableValues()
    {
        return [
            self::METHODS_PASSWORD,
            self::METHODS_TOTP,
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
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['totp'] = isset($data['totp']) ? $data['totp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['totp'] === null) {
            $invalidProperties[] = "'totp' can't be null";
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
    * Gets methods
    *  认证方法，该字段内容为[\"password\", \"totp\"]。
    *
    * @return string[]
    */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
    * Sets methods
    *
    * @param string[] $methods 认证方法，该字段内容为[\"password\", \"totp\"]。
    *
    * @return $this
    */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;
        return $this;
    }

    /**
    * Gets password
    *  password
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\PwdPassword
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\PwdPassword $password password
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets totp
    *  totp
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\MfaTotp
    */
    public function getTotp()
    {
        return $this->container['totp'];
    }

    /**
    * Sets totp
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\MfaTotp $totp totp
    *
    * @return $this
    */
    public function setTotp($totp)
    {
        $this->container['totp'] = $totp;
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

