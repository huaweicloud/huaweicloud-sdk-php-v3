<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VgwIkePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VgwIkePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encryptionAlgorithm  加密算法
    * dhGroup  DH密钥组
    * authenticationAlgorithm  认证算法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encryptionAlgorithm' => 'string',
            'dhGroup' => 'string',
            'authenticationAlgorithm' => 'string',
            'lifetimeSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encryptionAlgorithm  加密算法
    * dhGroup  DH密钥组
    * authenticationAlgorithm  认证算法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encryptionAlgorithm' => null,
        'dhGroup' => null,
        'authenticationAlgorithm' => null,
        'lifetimeSeconds' => null
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
    * encryptionAlgorithm  加密算法
    * dhGroup  DH密钥组
    * authenticationAlgorithm  认证算法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encryptionAlgorithm' => 'encryption_algorithm',
            'dhGroup' => 'dh_group',
            'authenticationAlgorithm' => 'authentication_algorithm',
            'lifetimeSeconds' => 'lifetime_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encryptionAlgorithm  加密算法
    * dhGroup  DH密钥组
    * authenticationAlgorithm  认证算法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @var string[]
    */
    protected static $setters = [
            'encryptionAlgorithm' => 'setEncryptionAlgorithm',
            'dhGroup' => 'setDhGroup',
            'authenticationAlgorithm' => 'setAuthenticationAlgorithm',
            'lifetimeSeconds' => 'setLifetimeSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encryptionAlgorithm  加密算法
    * dhGroup  DH密钥组
    * authenticationAlgorithm  认证算法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @var string[]
    */
    protected static $getters = [
            'encryptionAlgorithm' => 'getEncryptionAlgorithm',
            'dhGroup' => 'getDhGroup',
            'authenticationAlgorithm' => 'getAuthenticationAlgorithm',
            'lifetimeSeconds' => 'getLifetimeSeconds'
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
        $this->container['encryptionAlgorithm'] = isset($data['encryptionAlgorithm']) ? $data['encryptionAlgorithm'] : null;
        $this->container['dhGroup'] = isset($data['dhGroup']) ? $data['dhGroup'] : null;
        $this->container['authenticationAlgorithm'] = isset($data['authenticationAlgorithm']) ? $data['authenticationAlgorithm'] : null;
        $this->container['lifetimeSeconds'] = isset($data['lifetimeSeconds']) ? $data['lifetimeSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] > 604800)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be smaller than or equal to 604800.";
            }
            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] < 60)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be bigger than or equal to 60.";
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
    * Gets encryptionAlgorithm
    *  加密算法
    *
    * @return string|null
    */
    public function getEncryptionAlgorithm()
    {
        return $this->container['encryptionAlgorithm'];
    }

    /**
    * Sets encryptionAlgorithm
    *
    * @param string|null $encryptionAlgorithm 加密算法
    *
    * @return $this
    */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->container['encryptionAlgorithm'] = $encryptionAlgorithm;
        return $this;
    }

    /**
    * Gets dhGroup
    *  DH密钥组
    *
    * @return string|null
    */
    public function getDhGroup()
    {
        return $this->container['dhGroup'];
    }

    /**
    * Sets dhGroup
    *
    * @param string|null $dhGroup DH密钥组
    *
    * @return $this
    */
    public function setDhGroup($dhGroup)
    {
        $this->container['dhGroup'] = $dhGroup;
        return $this;
    }

    /**
    * Gets authenticationAlgorithm
    *  认证算法
    *
    * @return string|null
    */
    public function getAuthenticationAlgorithm()
    {
        return $this->container['authenticationAlgorithm'];
    }

    /**
    * Sets authenticationAlgorithm
    *
    * @param string|null $authenticationAlgorithm 认证算法
    *
    * @return $this
    */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->container['authenticationAlgorithm'] = $authenticationAlgorithm;
        return $this;
    }

    /**
    * Gets lifetimeSeconds
    *  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @return int|null
    */
    public function getLifetimeSeconds()
    {
        return $this->container['lifetimeSeconds'];
    }

    /**
    * Sets lifetimeSeconds
    *
    * @param int|null $lifetimeSeconds 表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    *
    * @return $this
    */
    public function setLifetimeSeconds($lifetimeSeconds)
    {
        $this->container['lifetimeSeconds'] = $lifetimeSeconds;
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

