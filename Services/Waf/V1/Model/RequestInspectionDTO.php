<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RequestInspectionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RequestInspectionDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * payloadType  请求的 Payload 类型（JSON/FORM_URLENCODED）
    * username  用户名字段路径
    * password  密码字段路径
    * email  邮箱字段路径（可选）
    * phone  手机号字段路径（可选）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'payloadType' => 'string',
            'username' => 'string',
            'password' => 'string',
            'email' => 'string',
            'phone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * payloadType  请求的 Payload 类型（JSON/FORM_URLENCODED）
    * username  用户名字段路径
    * password  密码字段路径
    * email  邮箱字段路径（可选）
    * phone  手机号字段路径（可选）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'payloadType' => null,
        'username' => null,
        'password' => null,
        'email' => null,
        'phone' => null
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
    * payloadType  请求的 Payload 类型（JSON/FORM_URLENCODED）
    * username  用户名字段路径
    * password  密码字段路径
    * email  邮箱字段路径（可选）
    * phone  手机号字段路径（可选）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'payloadType' => 'payload_type',
            'username' => 'username',
            'password' => 'password',
            'email' => 'email',
            'phone' => 'phone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * payloadType  请求的 Payload 类型（JSON/FORM_URLENCODED）
    * username  用户名字段路径
    * password  密码字段路径
    * email  邮箱字段路径（可选）
    * phone  手机号字段路径（可选）
    *
    * @var string[]
    */
    protected static $setters = [
            'payloadType' => 'setPayloadType',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'email' => 'setEmail',
            'phone' => 'setPhone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * payloadType  请求的 Payload 类型（JSON/FORM_URLENCODED）
    * username  用户名字段路径
    * password  密码字段路径
    * email  邮箱字段路径（可选）
    * phone  手机号字段路径（可选）
    *
    * @var string[]
    */
    protected static $getters = [
            'payloadType' => 'getPayloadType',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'email' => 'getEmail',
            'phone' => 'getPhone'
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
    const PAYLOAD_TYPE_JSON = 'JSON';
    const PAYLOAD_TYPE_FORM_URLENCODED = 'FORM_URLENCODED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPayloadTypeAllowableValues()
    {
        return [
            self::PAYLOAD_TYPE_JSON,
            self::PAYLOAD_TYPE_FORM_URLENCODED,
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
        $this->container['payloadType'] = isset($data['payloadType']) ? $data['payloadType'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['payloadType'] === null) {
            $invalidProperties[] = "'payloadType' can't be null";
        }
            $allowedValues = $this->getPayloadTypeAllowableValues();
                if (!is_null($this->container['payloadType']) && !in_array($this->container['payloadType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'payloadType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
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
    * Gets payloadType
    *  请求的 Payload 类型（JSON/FORM_URLENCODED）
    *
    * @return string
    */
    public function getPayloadType()
    {
        return $this->container['payloadType'];
    }

    /**
    * Sets payloadType
    *
    * @param string $payloadType 请求的 Payload 类型（JSON/FORM_URLENCODED）
    *
    * @return $this
    */
    public function setPayloadType($payloadType)
    {
        $this->container['payloadType'] = $payloadType;
        return $this;
    }

    /**
    * Gets username
    *  用户名字段路径
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username 用户名字段路径
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
    *  密码字段路径
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
    * @param string $password 密码字段路径
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets email
    *  邮箱字段路径（可选）
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
    * @param string|null $email 邮箱字段路径（可选）
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets phone
    *  手机号字段路径（可选）
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号字段路径（可选）
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
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

