<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentHostAuthorizationBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentHostAuthorizationBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * username  用户名，可输入中英文，数字和符号(-_.)。
    * password  密码，认证类型为0时，密码必填。
    * privateKey  密钥，认证类型为1时，密钥必填
    * trustedType  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'username' => 'string',
            'password' => 'string',
            'privateKey' => 'string',
            'trustedType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * username  用户名，可输入中英文，数字和符号(-_.)。
    * password  密码，认证类型为0时，密码必填。
    * privateKey  密钥，认证类型为1时，密钥必填
    * trustedType  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'username' => null,
        'password' => null,
        'privateKey' => null,
        'trustedType' => 'int32'
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
    * username  用户名，可输入中英文，数字和符号(-_.)。
    * password  密码，认证类型为0时，密码必填。
    * privateKey  密钥，认证类型为1时，密钥必填
    * trustedType  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'username' => 'username',
            'password' => 'password',
            'privateKey' => 'private_key',
            'trustedType' => 'trusted_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * username  用户名，可输入中英文，数字和符号(-_.)。
    * password  密码，认证类型为0时，密码必填。
    * privateKey  密钥，认证类型为1时，密钥必填
    * trustedType  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @var string[]
    */
    protected static $setters = [
            'username' => 'setUsername',
            'password' => 'setPassword',
            'privateKey' => 'setPrivateKey',
            'trustedType' => 'setTrustedType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * username  用户名，可输入中英文，数字和符号(-_.)。
    * password  密码，认证类型为0时，密码必填。
    * privateKey  密钥，认证类型为1时，密钥必填
    * trustedType  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @var string[]
    */
    protected static $getters = [
            'username' => 'getUsername',
            'password' => 'getPassword',
            'privateKey' => 'getPrivateKey',
            'trustedType' => 'getTrustedType'
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
    const TRUSTED_TYPE_0 = 0;
    const TRUSTED_TYPE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTrustedTypeAllowableValues()
    {
        return [
            self::TRUSTED_TYPE_0,
            self::TRUSTED_TYPE_1,
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['trustedType'] = isset($data['trustedType']) ? $data['trustedType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
            if ((mb_strlen($this->container['username']) > 128)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['username']) < 3)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z][a-zA-Z0-9\\_\\-\\.@]{1,31}$/", $this->container['username'])) {
                $invalidProperties[] = "invalid value for 'username', must be conform to the pattern /^[a-zA-Z][a-zA-Z0-9\\_\\-\\.@]{1,31}$/.";
            }
            if (!is_null($this->container['password']) && !preg_match("/^[^ \\f\\n\\r\\t\\\"\\']{5,32}$/", $this->container['password'])) {
                $invalidProperties[] = "invalid value for 'password', must be conform to the pattern /^[^ \\f\\n\\r\\t\\\"\\']{5,32}$/.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 5000)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKey']) && !preg_match("/^[A-Za-z0-9\\-\\_\\+\\\\=\/\\s\\r\\n]{1,5000}$/", $this->container['privateKey'])) {
                $invalidProperties[] = "invalid value for 'privateKey', must be conform to the pattern /^[A-Za-z0-9\\-\\_\\+\\\\=\/\\s\\r\\n]{1,5000}$/.";
            }
        if ($this->container['trustedType'] === null) {
            $invalidProperties[] = "'trustedType' can't be null";
        }
            $allowedValues = $this->getTrustedTypeAllowableValues();
                if (!is_null($this->container['trustedType']) && !in_array($this->container['trustedType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trustedType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets username
    *  用户名，可输入中英文，数字和符号(-_.)。
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
    * @param string $username 用户名，可输入中英文，数字和符号(-_.)。
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
    *  密码，认证类型为0时，密码必填。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 密码，认证类型为0时，密码必填。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets privateKey
    *  密钥，认证类型为1时，密钥必填
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 密钥，认证类型为1时，密钥必填
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets trustedType
    *  认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @return int
    */
    public function getTrustedType()
    {
        return $this->container['trustedType'];
    }

    /**
    * Sets trustedType
    *
    * @param int $trustedType 认证类型，0表示使用密码认证，1表示使用密钥认证
    *
    * @return $this
    */
    public function setTrustedType($trustedType)
    {
        $this->container['trustedType'] = $trustedType;
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

