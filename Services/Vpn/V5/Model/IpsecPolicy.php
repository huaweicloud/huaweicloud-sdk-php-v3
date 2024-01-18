<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsecPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsecPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * pfs  PFS使用的DH密钥组
    * transformProtocol  传输模式
    * lifetimeSeconds  表示配置IPSec连接建立的隧道以时间为基准的生存周期
    * encapsulationMode  封装模式，当前只有tunnel模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authenticationAlgorithm' => 'string',
            'encryptionAlgorithm' => 'string',
            'pfs' => 'string',
            'transformProtocol' => 'string',
            'lifetimeSeconds' => 'int',
            'encapsulationMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * pfs  PFS使用的DH密钥组
    * transformProtocol  传输模式
    * lifetimeSeconds  表示配置IPSec连接建立的隧道以时间为基准的生存周期
    * encapsulationMode  封装模式，当前只有tunnel模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authenticationAlgorithm' => null,
        'encryptionAlgorithm' => null,
        'pfs' => null,
        'transformProtocol' => null,
        'lifetimeSeconds' => null,
        'encapsulationMode' => null
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
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * pfs  PFS使用的DH密钥组
    * transformProtocol  传输模式
    * lifetimeSeconds  表示配置IPSec连接建立的隧道以时间为基准的生存周期
    * encapsulationMode  封装模式，当前只有tunnel模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authenticationAlgorithm' => 'authentication_algorithm',
            'encryptionAlgorithm' => 'encryption_algorithm',
            'pfs' => 'pfs',
            'transformProtocol' => 'transform_protocol',
            'lifetimeSeconds' => 'lifetime_seconds',
            'encapsulationMode' => 'encapsulation_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * pfs  PFS使用的DH密钥组
    * transformProtocol  传输模式
    * lifetimeSeconds  表示配置IPSec连接建立的隧道以时间为基准的生存周期
    * encapsulationMode  封装模式，当前只有tunnel模式
    *
    * @var string[]
    */
    protected static $setters = [
            'authenticationAlgorithm' => 'setAuthenticationAlgorithm',
            'encryptionAlgorithm' => 'setEncryptionAlgorithm',
            'pfs' => 'setPfs',
            'transformProtocol' => 'setTransformProtocol',
            'lifetimeSeconds' => 'setLifetimeSeconds',
            'encapsulationMode' => 'setEncapsulationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * pfs  PFS使用的DH密钥组
    * transformProtocol  传输模式
    * lifetimeSeconds  表示配置IPSec连接建立的隧道以时间为基准的生存周期
    * encapsulationMode  封装模式，当前只有tunnel模式
    *
    * @var string[]
    */
    protected static $getters = [
            'authenticationAlgorithm' => 'getAuthenticationAlgorithm',
            'encryptionAlgorithm' => 'getEncryptionAlgorithm',
            'pfs' => 'getPfs',
            'transformProtocol' => 'getTransformProtocol',
            'lifetimeSeconds' => 'getLifetimeSeconds',
            'encapsulationMode' => 'getEncapsulationMode'
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
    const AUTHENTICATION_ALGORITHM_SHA1 = 'sha1';
    const AUTHENTICATION_ALGORITHM_MD5 = 'md5';
    const AUTHENTICATION_ALGORITHM_SHA2_256 = 'sha2-256';
    const AUTHENTICATION_ALGORITHM_SHA2_384 = 'sha2-384';
    const AUTHENTICATION_ALGORITHM_SHA2_512 = 'sha2-512';
    const ENCRYPTION_ALGORITHM__3DES = '3des';
    const ENCRYPTION_ALGORITHM_AES_128 = 'aes-128';
    const ENCRYPTION_ALGORITHM_AES_192 = 'aes-192';
    const ENCRYPTION_ALGORITHM_AES_256 = 'aes-256';
    const ENCRYPTION_ALGORITHM_AES_128_GCM_16 = 'aes-128-gcm-16';
    const ENCRYPTION_ALGORITHM_AES_256_GCM_16 = 'aes-256-gcm-16';
    const ENCRYPTION_ALGORITHM_AES_128_GCM_128 = 'aes-128-gcm-128';
    const ENCRYPTION_ALGORITHM_AES_256_GCM_128 = 'aes-256-gcm-128';
    const TRANSFORM_PROTOCOL_ESP = 'esp';
    const ENCAPSULATION_MODE_TUNNEL = 'tunnel';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthenticationAlgorithmAllowableValues()
    {
        return [
            self::AUTHENTICATION_ALGORITHM_SHA1,
            self::AUTHENTICATION_ALGORITHM_MD5,
            self::AUTHENTICATION_ALGORITHM_SHA2_256,
            self::AUTHENTICATION_ALGORITHM_SHA2_384,
            self::AUTHENTICATION_ALGORITHM_SHA2_512,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncryptionAlgorithmAllowableValues()
    {
        return [
            self::ENCRYPTION_ALGORITHM__3DES,
            self::ENCRYPTION_ALGORITHM_AES_128,
            self::ENCRYPTION_ALGORITHM_AES_192,
            self::ENCRYPTION_ALGORITHM_AES_256,
            self::ENCRYPTION_ALGORITHM_AES_128_GCM_16,
            self::ENCRYPTION_ALGORITHM_AES_256_GCM_16,
            self::ENCRYPTION_ALGORITHM_AES_128_GCM_128,
            self::ENCRYPTION_ALGORITHM_AES_256_GCM_128,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTransformProtocolAllowableValues()
    {
        return [
            self::TRANSFORM_PROTOCOL_ESP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncapsulationModeAllowableValues()
    {
        return [
            self::ENCAPSULATION_MODE_TUNNEL,
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
        $this->container['authenticationAlgorithm'] = isset($data['authenticationAlgorithm']) ? $data['authenticationAlgorithm'] : null;
        $this->container['encryptionAlgorithm'] = isset($data['encryptionAlgorithm']) ? $data['encryptionAlgorithm'] : null;
        $this->container['pfs'] = isset($data['pfs']) ? $data['pfs'] : null;
        $this->container['transformProtocol'] = isset($data['transformProtocol']) ? $data['transformProtocol'] : null;
        $this->container['lifetimeSeconds'] = isset($data['lifetimeSeconds']) ? $data['lifetimeSeconds'] : null;
        $this->container['encapsulationMode'] = isset($data['encapsulationMode']) ? $data['encapsulationMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAuthenticationAlgorithmAllowableValues();
                if (!is_null($this->container['authenticationAlgorithm']) && !in_array($this->container['authenticationAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authenticationAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEncryptionAlgorithmAllowableValues();
                if (!is_null($this->container['encryptionAlgorithm']) && !in_array($this->container['encryptionAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encryptionAlgorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTransformProtocolAllowableValues();
                if (!is_null($this->container['transformProtocol']) && !in_array($this->container['transformProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transformProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] > 604800)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be smaller than or equal to 604800.";
            }
            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] < 30)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be bigger than or equal to 30.";
            }
            $allowedValues = $this->getEncapsulationModeAllowableValues();
                if (!is_null($this->container['encapsulationMode']) && !in_array($this->container['encapsulationMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encapsulationMode', must be one of '%s'",
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
    * Gets authenticationAlgorithm
    *  认证算法，SHA1和MD5安全性较低，请慎用
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
    * @param string|null $authenticationAlgorithm 认证算法，SHA1和MD5安全性较低，请慎用
    *
    * @return $this
    */
    public function setAuthenticationAlgorithm($authenticationAlgorithm)
    {
        $this->container['authenticationAlgorithm'] = $authenticationAlgorithm;
        return $this;
    }

    /**
    * Gets encryptionAlgorithm
    *  加密算法，3DES安全性较低，请慎用
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
    * @param string|null $encryptionAlgorithm 加密算法，3DES安全性较低，请慎用
    *
    * @return $this
    */
    public function setEncryptionAlgorithm($encryptionAlgorithm)
    {
        $this->container['encryptionAlgorithm'] = $encryptionAlgorithm;
        return $this;
    }

    /**
    * Gets pfs
    *  PFS使用的DH密钥组
    *
    * @return string|null
    */
    public function getPfs()
    {
        return $this->container['pfs'];
    }

    /**
    * Sets pfs
    *
    * @param string|null $pfs PFS使用的DH密钥组
    *
    * @return $this
    */
    public function setPfs($pfs)
    {
        $this->container['pfs'] = $pfs;
        return $this;
    }

    /**
    * Gets transformProtocol
    *  传输模式
    *
    * @return string|null
    */
    public function getTransformProtocol()
    {
        return $this->container['transformProtocol'];
    }

    /**
    * Sets transformProtocol
    *
    * @param string|null $transformProtocol 传输模式
    *
    * @return $this
    */
    public function setTransformProtocol($transformProtocol)
    {
        $this->container['transformProtocol'] = $transformProtocol;
        return $this;
    }

    /**
    * Gets lifetimeSeconds
    *  表示配置IPSec连接建立的隧道以时间为基准的生存周期
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
    * @param int|null $lifetimeSeconds 表示配置IPSec连接建立的隧道以时间为基准的生存周期
    *
    * @return $this
    */
    public function setLifetimeSeconds($lifetimeSeconds)
    {
        $this->container['lifetimeSeconds'] = $lifetimeSeconds;
        return $this;
    }

    /**
    * Gets encapsulationMode
    *  封装模式，当前只有tunnel模式
    *
    * @return string|null
    */
    public function getEncapsulationMode()
    {
        return $this->container['encapsulationMode'];
    }

    /**
    * Sets encapsulationMode
    *
    * @param string|null $encapsulationMode 封装模式，当前只有tunnel模式
    *
    * @return $this
    */
    public function setEncapsulationMode($encapsulationMode)
    {
        $this->container['encapsulationMode'] = $encapsulationMode;
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

