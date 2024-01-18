<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IkePolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IkePolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ikeVersion  IKE协商版本
    * phase1NegotiationMode  协商模式，ike版本为v1时生效
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * dhGroup  DH密钥组
    * authenticationMethod  ike协商时的认证方法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    * localIdType  本端ID类型
    * localId  本端ID
    * peerIdType  对端ID类型
    * peerId  对端ID
    * dpd  dpd
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ikeVersion' => 'string',
            'phase1NegotiationMode' => 'string',
            'authenticationAlgorithm' => 'string',
            'encryptionAlgorithm' => 'string',
            'dhGroup' => 'string',
            'authenticationMethod' => 'string',
            'lifetimeSeconds' => 'int',
            'localIdType' => 'string',
            'localId' => 'string',
            'peerIdType' => 'string',
            'peerId' => 'string',
            'dpd' => '\HuaweiCloud\SDK\Vpn\V5\Model\Dpd'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ikeVersion  IKE协商版本
    * phase1NegotiationMode  协商模式，ike版本为v1时生效
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * dhGroup  DH密钥组
    * authenticationMethod  ike协商时的认证方法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    * localIdType  本端ID类型
    * localId  本端ID
    * peerIdType  对端ID类型
    * peerId  对端ID
    * dpd  dpd
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ikeVersion' => null,
        'phase1NegotiationMode' => null,
        'authenticationAlgorithm' => null,
        'encryptionAlgorithm' => null,
        'dhGroup' => null,
        'authenticationMethod' => null,
        'lifetimeSeconds' => null,
        'localIdType' => null,
        'localId' => null,
        'peerIdType' => null,
        'peerId' => null,
        'dpd' => null
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
    * ikeVersion  IKE协商版本
    * phase1NegotiationMode  协商模式，ike版本为v1时生效
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * dhGroup  DH密钥组
    * authenticationMethod  ike协商时的认证方法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    * localIdType  本端ID类型
    * localId  本端ID
    * peerIdType  对端ID类型
    * peerId  对端ID
    * dpd  dpd
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ikeVersion' => 'ike_version',
            'phase1NegotiationMode' => 'phase1_negotiation_mode',
            'authenticationAlgorithm' => 'authentication_algorithm',
            'encryptionAlgorithm' => 'encryption_algorithm',
            'dhGroup' => 'dh_group',
            'authenticationMethod' => 'authentication_method',
            'lifetimeSeconds' => 'lifetime_seconds',
            'localIdType' => 'local_id_type',
            'localId' => 'local_id',
            'peerIdType' => 'peer_id_type',
            'peerId' => 'peer_id',
            'dpd' => 'dpd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ikeVersion  IKE协商版本
    * phase1NegotiationMode  协商模式，ike版本为v1时生效
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * dhGroup  DH密钥组
    * authenticationMethod  ike协商时的认证方法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    * localIdType  本端ID类型
    * localId  本端ID
    * peerIdType  对端ID类型
    * peerId  对端ID
    * dpd  dpd
    *
    * @var string[]
    */
    protected static $setters = [
            'ikeVersion' => 'setIkeVersion',
            'phase1NegotiationMode' => 'setPhase1NegotiationMode',
            'authenticationAlgorithm' => 'setAuthenticationAlgorithm',
            'encryptionAlgorithm' => 'setEncryptionAlgorithm',
            'dhGroup' => 'setDhGroup',
            'authenticationMethod' => 'setAuthenticationMethod',
            'lifetimeSeconds' => 'setLifetimeSeconds',
            'localIdType' => 'setLocalIdType',
            'localId' => 'setLocalId',
            'peerIdType' => 'setPeerIdType',
            'peerId' => 'setPeerId',
            'dpd' => 'setDpd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ikeVersion  IKE协商版本
    * phase1NegotiationMode  协商模式，ike版本为v1时生效
    * authenticationAlgorithm  认证算法，SHA1和MD5安全性较低，请慎用
    * encryptionAlgorithm  加密算法，3DES安全性较低，请慎用
    * dhGroup  DH密钥组
    * authenticationMethod  ike协商时的认证方法
    * lifetimeSeconds  表示SA的生存周期，当该生存周期超时后IKE SA将自动更新
    * localIdType  本端ID类型
    * localId  本端ID
    * peerIdType  对端ID类型
    * peerId  对端ID
    * dpd  dpd
    *
    * @var string[]
    */
    protected static $getters = [
            'ikeVersion' => 'getIkeVersion',
            'phase1NegotiationMode' => 'getPhase1NegotiationMode',
            'authenticationAlgorithm' => 'getAuthenticationAlgorithm',
            'encryptionAlgorithm' => 'getEncryptionAlgorithm',
            'dhGroup' => 'getDhGroup',
            'authenticationMethod' => 'getAuthenticationMethod',
            'lifetimeSeconds' => 'getLifetimeSeconds',
            'localIdType' => 'getLocalIdType',
            'localId' => 'getLocalId',
            'peerIdType' => 'getPeerIdType',
            'peerId' => 'getPeerId',
            'dpd' => 'getDpd'
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
    const IKE_VERSION_V1 = 'v1';
    const IKE_VERSION_V2 = 'v2';
    const PHASE1_NEGOTIATION_MODE_MAIN = 'main';
    const PHASE1_NEGOTIATION_MODE_AGGRESSIVE = 'aggressive';
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
    const AUTHENTICATION_METHOD_PRE_SHARE = 'pre-share';
    const AUTHENTICATION_METHOD_DIGITAL_ENVELOPE_V2 = 'digital-envelope-v2';
    const LOCAL_ID_TYPE_IP = 'ip';
    const LOCAL_ID_TYPE_FQDN = 'fqdn';
    const PEER_ID_TYPE_IP = 'ip';
    const PEER_ID_TYPE_FQDN = 'fqdn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIkeVersionAllowableValues()
    {
        return [
            self::IKE_VERSION_V1,
            self::IKE_VERSION_V2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPhase1NegotiationModeAllowableValues()
    {
        return [
            self::PHASE1_NEGOTIATION_MODE_MAIN,
            self::PHASE1_NEGOTIATION_MODE_AGGRESSIVE,
        ];
    }

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
    public function getAuthenticationMethodAllowableValues()
    {
        return [
            self::AUTHENTICATION_METHOD_PRE_SHARE,
            self::AUTHENTICATION_METHOD_DIGITAL_ENVELOPE_V2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocalIdTypeAllowableValues()
    {
        return [
            self::LOCAL_ID_TYPE_IP,
            self::LOCAL_ID_TYPE_FQDN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeerIdTypeAllowableValues()
    {
        return [
            self::PEER_ID_TYPE_IP,
            self::PEER_ID_TYPE_FQDN,
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
        $this->container['ikeVersion'] = isset($data['ikeVersion']) ? $data['ikeVersion'] : null;
        $this->container['phase1NegotiationMode'] = isset($data['phase1NegotiationMode']) ? $data['phase1NegotiationMode'] : null;
        $this->container['authenticationAlgorithm'] = isset($data['authenticationAlgorithm']) ? $data['authenticationAlgorithm'] : null;
        $this->container['encryptionAlgorithm'] = isset($data['encryptionAlgorithm']) ? $data['encryptionAlgorithm'] : null;
        $this->container['dhGroup'] = isset($data['dhGroup']) ? $data['dhGroup'] : null;
        $this->container['authenticationMethod'] = isset($data['authenticationMethod']) ? $data['authenticationMethod'] : null;
        $this->container['lifetimeSeconds'] = isset($data['lifetimeSeconds']) ? $data['lifetimeSeconds'] : null;
        $this->container['localIdType'] = isset($data['localIdType']) ? $data['localIdType'] : null;
        $this->container['localId'] = isset($data['localId']) ? $data['localId'] : null;
        $this->container['peerIdType'] = isset($data['peerIdType']) ? $data['peerIdType'] : null;
        $this->container['peerId'] = isset($data['peerId']) ? $data['peerId'] : null;
        $this->container['dpd'] = isset($data['dpd']) ? $data['dpd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIkeVersionAllowableValues();
                if (!is_null($this->container['ikeVersion']) && !in_array($this->container['ikeVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ikeVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPhase1NegotiationModeAllowableValues();
                if (!is_null($this->container['phase1NegotiationMode']) && !in_array($this->container['phase1NegotiationMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'phase1NegotiationMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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

            $allowedValues = $this->getAuthenticationMethodAllowableValues();
                if (!is_null($this->container['authenticationMethod']) && !in_array($this->container['authenticationMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authenticationMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] > 604800)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be smaller than or equal to 604800.";
            }
            if (!is_null($this->container['lifetimeSeconds']) && ($this->container['lifetimeSeconds'] < 60)) {
                $invalidProperties[] = "invalid value for 'lifetimeSeconds', must be bigger than or equal to 60.";
            }
            $allowedValues = $this->getLocalIdTypeAllowableValues();
                if (!is_null($this->container['localIdType']) && !in_array($this->container['localIdType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'localIdType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['localId']) && (mb_strlen($this->container['localId']) > 255)) {
                $invalidProperties[] = "invalid value for 'localId', the character length must be smaller than or equal to 255.";
            }
            $allowedValues = $this->getPeerIdTypeAllowableValues();
                if (!is_null($this->container['peerIdType']) && !in_array($this->container['peerIdType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'peerIdType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['peerId']) && (mb_strlen($this->container['peerId']) > 255)) {
                $invalidProperties[] = "invalid value for 'peerId', the character length must be smaller than or equal to 255.";
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
    * Gets ikeVersion
    *  IKE协商版本
    *
    * @return string|null
    */
    public function getIkeVersion()
    {
        return $this->container['ikeVersion'];
    }

    /**
    * Sets ikeVersion
    *
    * @param string|null $ikeVersion IKE协商版本
    *
    * @return $this
    */
    public function setIkeVersion($ikeVersion)
    {
        $this->container['ikeVersion'] = $ikeVersion;
        return $this;
    }

    /**
    * Gets phase1NegotiationMode
    *  协商模式，ike版本为v1时生效
    *
    * @return string|null
    */
    public function getPhase1NegotiationMode()
    {
        return $this->container['phase1NegotiationMode'];
    }

    /**
    * Sets phase1NegotiationMode
    *
    * @param string|null $phase1NegotiationMode 协商模式，ike版本为v1时生效
    *
    * @return $this
    */
    public function setPhase1NegotiationMode($phase1NegotiationMode)
    {
        $this->container['phase1NegotiationMode'] = $phase1NegotiationMode;
        return $this;
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
    * Gets authenticationMethod
    *  ike协商时的认证方法
    *
    * @return string|null
    */
    public function getAuthenticationMethod()
    {
        return $this->container['authenticationMethod'];
    }

    /**
    * Sets authenticationMethod
    *
    * @param string|null $authenticationMethod ike协商时的认证方法
    *
    * @return $this
    */
    public function setAuthenticationMethod($authenticationMethod)
    {
        $this->container['authenticationMethod'] = $authenticationMethod;
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
    * Gets localIdType
    *  本端ID类型
    *
    * @return string|null
    */
    public function getLocalIdType()
    {
        return $this->container['localIdType'];
    }

    /**
    * Sets localIdType
    *
    * @param string|null $localIdType 本端ID类型
    *
    * @return $this
    */
    public function setLocalIdType($localIdType)
    {
        $this->container['localIdType'] = $localIdType;
        return $this;
    }

    /**
    * Gets localId
    *  本端ID
    *
    * @return string|null
    */
    public function getLocalId()
    {
        return $this->container['localId'];
    }

    /**
    * Sets localId
    *
    * @param string|null $localId 本端ID
    *
    * @return $this
    */
    public function setLocalId($localId)
    {
        $this->container['localId'] = $localId;
        return $this;
    }

    /**
    * Gets peerIdType
    *  对端ID类型
    *
    * @return string|null
    */
    public function getPeerIdType()
    {
        return $this->container['peerIdType'];
    }

    /**
    * Sets peerIdType
    *
    * @param string|null $peerIdType 对端ID类型
    *
    * @return $this
    */
    public function setPeerIdType($peerIdType)
    {
        $this->container['peerIdType'] = $peerIdType;
        return $this;
    }

    /**
    * Gets peerId
    *  对端ID
    *
    * @return string|null
    */
    public function getPeerId()
    {
        return $this->container['peerId'];
    }

    /**
    * Sets peerId
    *
    * @param string|null $peerId 对端ID
    *
    * @return $this
    */
    public function setPeerId($peerId)
    {
        $this->container['peerId'] = $peerId;
        return $this;
    }

    /**
    * Gets dpd
    *  dpd
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\Dpd|null
    */
    public function getDpd()
    {
        return $this->container['dpd'];
    }

    /**
    * Sets dpd
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\Dpd|null $dpd dpd
    *
    * @return $this
    */
    public function setDpd($dpd)
    {
        $this->container['dpd'] = $dpd;
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

