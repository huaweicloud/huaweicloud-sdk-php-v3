<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowSourceDecryption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowSourceDecryption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithm  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    * keyType  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    * passphrase  srt解密秘钥，用于flow对srt流进行解密
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithm' => 'string',
            'keyType' => 'string',
            'passphrase' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithm  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    * keyType  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    * passphrase  srt解密秘钥，用于flow对srt流进行解密
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithm' => null,
        'keyType' => null,
        'passphrase' => null
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
    * algorithm  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    * keyType  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    * passphrase  srt解密秘钥，用于flow对srt流进行解密
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithm' => 'algorithm',
            'keyType' => 'key_type',
            'passphrase' => 'passphrase'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithm  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    * keyType  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    * passphrase  srt解密秘钥，用于flow对srt流进行解密
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithm' => 'setAlgorithm',
            'keyType' => 'setKeyType',
            'passphrase' => 'setPassphrase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithm  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    * keyType  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    * passphrase  srt解密秘钥，用于flow对srt流进行解密
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithm' => 'getAlgorithm',
            'keyType' => 'getKeyType',
            'passphrase' => 'getPassphrase'
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
    const ALGORITHM_AES128 = 'aes128';
    const ALGORITHM_AES192 = 'aes192';
    const ALGORITHM_AES256 = 'aes256';
    const KEY_TYPE_SPEKE = 'speke';
    const KEY_TYPE_STATIC_KEY = 'static-key';
    const KEY_TYPE_SRT_PASSWORD = 'srt-password';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmAllowableValues()
    {
        return [
            self::ALGORITHM_AES128,
            self::ALGORITHM_AES192,
            self::ALGORITHM_AES256,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyTypeAllowableValues()
    {
        return [
            self::KEY_TYPE_SPEKE,
            self::KEY_TYPE_STATIC_KEY,
            self::KEY_TYPE_SRT_PASSWORD,
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['keyType'] = isset($data['keyType']) ? $data['keyType'] : null;
        $this->container['passphrase'] = isset($data['passphrase']) ? $data['passphrase'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlgorithmAllowableValues();
                if (!is_null($this->container['algorithm']) && !in_array($this->container['algorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['keyType'] === null) {
            $invalidProperties[] = "'keyType' can't be null";
        }
            $allowedValues = $this->getKeyTypeAllowableValues();
                if (!is_null($this->container['keyType']) && !in_array($this->container['keyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['passphrase'] === null) {
            $invalidProperties[] = "'passphrase' can't be null";
        }
            if ((mb_strlen($this->container['passphrase']) > 79)) {
                $invalidProperties[] = "invalid value for 'passphrase', the character length must be smaller than or equal to 79.";
            }
            if ((mb_strlen($this->container['passphrase']) < 10)) {
                $invalidProperties[] = "invalid value for 'passphrase', the character length must be bigger than or equal to 10.";
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
    * Gets algorithm
    *  加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    *
    * @return string|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string|null $algorithm 加密算法，aes128: 加密算法为aes-128，aes192:加密算法为aes-192，aes256: 加密算法为AES-256
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets keyType
    *  秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    *
    * @return string
    */
    public function getKeyType()
    {
        return $this->container['keyType'];
    }

    /**
    * Sets keyType
    *
    * @param string $keyType 秘钥类型,speke:使用speke协议获取秘钥,static-key:静态秘钥,srt-password:SRT协议秘钥 目前仅支持srt-password类型，其他类型暂不支持
    *
    * @return $this
    */
    public function setKeyType($keyType)
    {
        $this->container['keyType'] = $keyType;
        return $this;
    }

    /**
    * Gets passphrase
    *  srt解密秘钥，用于flow对srt流进行解密
    *
    * @return string
    */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
    * Sets passphrase
    *
    * @param string $passphrase srt解密秘钥，用于flow对srt流进行解密
    *
    * @return $this
    */
    public function setPassphrase($passphrase)
    {
        $this->container['passphrase'] = $passphrase;
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

