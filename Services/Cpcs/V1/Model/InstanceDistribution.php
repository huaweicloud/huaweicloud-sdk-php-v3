<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceDistribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceDistribution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encryptDecrypt  加解密服务实例数量
    * signVerify  签名验签服务实例数量
    * kms  密钥管理服务实例数量
    * timestamp  时间戳服务实例数量
    * collaSign  协同签名服务实例数量
    * otp  动态口令服务实例数量
    * dbEncrypt  数据库加密服务实例数量
    * fileEncrypt  文件加密服务实例数量
    * digitSeal  电子签章服务实例数量
    * sslVpn  ssl vpn服务实例数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encryptDecrypt' => 'int',
            'signVerify' => 'int',
            'kms' => 'int',
            'timestamp' => 'int',
            'collaSign' => 'int',
            'otp' => 'int',
            'dbEncrypt' => 'int',
            'fileEncrypt' => 'int',
            'digitSeal' => 'int',
            'sslVpn' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encryptDecrypt  加解密服务实例数量
    * signVerify  签名验签服务实例数量
    * kms  密钥管理服务实例数量
    * timestamp  时间戳服务实例数量
    * collaSign  协同签名服务实例数量
    * otp  动态口令服务实例数量
    * dbEncrypt  数据库加密服务实例数量
    * fileEncrypt  文件加密服务实例数量
    * digitSeal  电子签章服务实例数量
    * sslVpn  ssl vpn服务实例数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encryptDecrypt' => null,
        'signVerify' => null,
        'kms' => null,
        'timestamp' => null,
        'collaSign' => null,
        'otp' => null,
        'dbEncrypt' => null,
        'fileEncrypt' => null,
        'digitSeal' => null,
        'sslVpn' => null
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
    * encryptDecrypt  加解密服务实例数量
    * signVerify  签名验签服务实例数量
    * kms  密钥管理服务实例数量
    * timestamp  时间戳服务实例数量
    * collaSign  协同签名服务实例数量
    * otp  动态口令服务实例数量
    * dbEncrypt  数据库加密服务实例数量
    * fileEncrypt  文件加密服务实例数量
    * digitSeal  电子签章服务实例数量
    * sslVpn  ssl vpn服务实例数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encryptDecrypt' => 'encrypt_decrypt',
            'signVerify' => 'sign_verify',
            'kms' => 'kms',
            'timestamp' => 'timestamp',
            'collaSign' => 'colla_sign',
            'otp' => 'otp',
            'dbEncrypt' => 'db_encrypt',
            'fileEncrypt' => 'file_encrypt',
            'digitSeal' => 'digit_seal',
            'sslVpn' => 'ssl_vpn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encryptDecrypt  加解密服务实例数量
    * signVerify  签名验签服务实例数量
    * kms  密钥管理服务实例数量
    * timestamp  时间戳服务实例数量
    * collaSign  协同签名服务实例数量
    * otp  动态口令服务实例数量
    * dbEncrypt  数据库加密服务实例数量
    * fileEncrypt  文件加密服务实例数量
    * digitSeal  电子签章服务实例数量
    * sslVpn  ssl vpn服务实例数量
    *
    * @var string[]
    */
    protected static $setters = [
            'encryptDecrypt' => 'setEncryptDecrypt',
            'signVerify' => 'setSignVerify',
            'kms' => 'setKms',
            'timestamp' => 'setTimestamp',
            'collaSign' => 'setCollaSign',
            'otp' => 'setOtp',
            'dbEncrypt' => 'setDbEncrypt',
            'fileEncrypt' => 'setFileEncrypt',
            'digitSeal' => 'setDigitSeal',
            'sslVpn' => 'setSslVpn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encryptDecrypt  加解密服务实例数量
    * signVerify  签名验签服务实例数量
    * kms  密钥管理服务实例数量
    * timestamp  时间戳服务实例数量
    * collaSign  协同签名服务实例数量
    * otp  动态口令服务实例数量
    * dbEncrypt  数据库加密服务实例数量
    * fileEncrypt  文件加密服务实例数量
    * digitSeal  电子签章服务实例数量
    * sslVpn  ssl vpn服务实例数量
    *
    * @var string[]
    */
    protected static $getters = [
            'encryptDecrypt' => 'getEncryptDecrypt',
            'signVerify' => 'getSignVerify',
            'kms' => 'getKms',
            'timestamp' => 'getTimestamp',
            'collaSign' => 'getCollaSign',
            'otp' => 'getOtp',
            'dbEncrypt' => 'getDbEncrypt',
            'fileEncrypt' => 'getFileEncrypt',
            'digitSeal' => 'getDigitSeal',
            'sslVpn' => 'getSslVpn'
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
        $this->container['encryptDecrypt'] = isset($data['encryptDecrypt']) ? $data['encryptDecrypt'] : null;
        $this->container['signVerify'] = isset($data['signVerify']) ? $data['signVerify'] : null;
        $this->container['kms'] = isset($data['kms']) ? $data['kms'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['collaSign'] = isset($data['collaSign']) ? $data['collaSign'] : null;
        $this->container['otp'] = isset($data['otp']) ? $data['otp'] : null;
        $this->container['dbEncrypt'] = isset($data['dbEncrypt']) ? $data['dbEncrypt'] : null;
        $this->container['fileEncrypt'] = isset($data['fileEncrypt']) ? $data['fileEncrypt'] : null;
        $this->container['digitSeal'] = isset($data['digitSeal']) ? $data['digitSeal'] : null;
        $this->container['sslVpn'] = isset($data['sslVpn']) ? $data['sslVpn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['encryptDecrypt'] === null) {
            $invalidProperties[] = "'encryptDecrypt' can't be null";
        }
        if ($this->container['signVerify'] === null) {
            $invalidProperties[] = "'signVerify' can't be null";
        }
        if ($this->container['kms'] === null) {
            $invalidProperties[] = "'kms' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['collaSign'] === null) {
            $invalidProperties[] = "'collaSign' can't be null";
        }
        if ($this->container['otp'] === null) {
            $invalidProperties[] = "'otp' can't be null";
        }
        if ($this->container['dbEncrypt'] === null) {
            $invalidProperties[] = "'dbEncrypt' can't be null";
        }
        if ($this->container['fileEncrypt'] === null) {
            $invalidProperties[] = "'fileEncrypt' can't be null";
        }
        if ($this->container['digitSeal'] === null) {
            $invalidProperties[] = "'digitSeal' can't be null";
        }
        if ($this->container['sslVpn'] === null) {
            $invalidProperties[] = "'sslVpn' can't be null";
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
    * Gets encryptDecrypt
    *  加解密服务实例数量
    *
    * @return int
    */
    public function getEncryptDecrypt()
    {
        return $this->container['encryptDecrypt'];
    }

    /**
    * Sets encryptDecrypt
    *
    * @param int $encryptDecrypt 加解密服务实例数量
    *
    * @return $this
    */
    public function setEncryptDecrypt($encryptDecrypt)
    {
        $this->container['encryptDecrypt'] = $encryptDecrypt;
        return $this;
    }

    /**
    * Gets signVerify
    *  签名验签服务实例数量
    *
    * @return int
    */
    public function getSignVerify()
    {
        return $this->container['signVerify'];
    }

    /**
    * Sets signVerify
    *
    * @param int $signVerify 签名验签服务实例数量
    *
    * @return $this
    */
    public function setSignVerify($signVerify)
    {
        $this->container['signVerify'] = $signVerify;
        return $this;
    }

    /**
    * Gets kms
    *  密钥管理服务实例数量
    *
    * @return int
    */
    public function getKms()
    {
        return $this->container['kms'];
    }

    /**
    * Sets kms
    *
    * @param int $kms 密钥管理服务实例数量
    *
    * @return $this
    */
    public function setKms($kms)
    {
        $this->container['kms'] = $kms;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳服务实例数量
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp 时间戳服务实例数量
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets collaSign
    *  协同签名服务实例数量
    *
    * @return int
    */
    public function getCollaSign()
    {
        return $this->container['collaSign'];
    }

    /**
    * Sets collaSign
    *
    * @param int $collaSign 协同签名服务实例数量
    *
    * @return $this
    */
    public function setCollaSign($collaSign)
    {
        $this->container['collaSign'] = $collaSign;
        return $this;
    }

    /**
    * Gets otp
    *  动态口令服务实例数量
    *
    * @return int
    */
    public function getOtp()
    {
        return $this->container['otp'];
    }

    /**
    * Sets otp
    *
    * @param int $otp 动态口令服务实例数量
    *
    * @return $this
    */
    public function setOtp($otp)
    {
        $this->container['otp'] = $otp;
        return $this;
    }

    /**
    * Gets dbEncrypt
    *  数据库加密服务实例数量
    *
    * @return int
    */
    public function getDbEncrypt()
    {
        return $this->container['dbEncrypt'];
    }

    /**
    * Sets dbEncrypt
    *
    * @param int $dbEncrypt 数据库加密服务实例数量
    *
    * @return $this
    */
    public function setDbEncrypt($dbEncrypt)
    {
        $this->container['dbEncrypt'] = $dbEncrypt;
        return $this;
    }

    /**
    * Gets fileEncrypt
    *  文件加密服务实例数量
    *
    * @return int
    */
    public function getFileEncrypt()
    {
        return $this->container['fileEncrypt'];
    }

    /**
    * Sets fileEncrypt
    *
    * @param int $fileEncrypt 文件加密服务实例数量
    *
    * @return $this
    */
    public function setFileEncrypt($fileEncrypt)
    {
        $this->container['fileEncrypt'] = $fileEncrypt;
        return $this;
    }

    /**
    * Gets digitSeal
    *  电子签章服务实例数量
    *
    * @return int
    */
    public function getDigitSeal()
    {
        return $this->container['digitSeal'];
    }

    /**
    * Sets digitSeal
    *
    * @param int $digitSeal 电子签章服务实例数量
    *
    * @return $this
    */
    public function setDigitSeal($digitSeal)
    {
        $this->container['digitSeal'] = $digitSeal;
        return $this;
    }

    /**
    * Gets sslVpn
    *  ssl vpn服务实例数量
    *
    * @return int
    */
    public function getSslVpn()
    {
        return $this->container['sslVpn'];
    }

    /**
    * Sets sslVpn
    *
    * @param int $sslVpn ssl vpn服务实例数量
    *
    * @return $this
    */
    public function setSslVpn($sslVpn)
    {
        $this->container['sslVpn'] = $sslVpn;
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

