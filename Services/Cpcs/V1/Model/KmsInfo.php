<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KmsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KmsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aes256  AES_256算法密钥数量
    * sm4  SM4算法密钥数量
    * rsa2048  RSA_2048算法密钥数量
    * rsa3072  RSA_3072算法密钥数量
    * rsa4096  RSA_4096算法密钥数量
    * ecP256  EC_P256算法密钥数量
    * ecP384  EC_P384务算法密钥数量
    * sm2  SM2算法密钥数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aes256' => 'int',
            'sm4' => 'int',
            'rsa2048' => 'int',
            'rsa3072' => 'int',
            'rsa4096' => 'int',
            'ecP256' => 'int',
            'ecP384' => 'int',
            'sm2' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aes256  AES_256算法密钥数量
    * sm4  SM4算法密钥数量
    * rsa2048  RSA_2048算法密钥数量
    * rsa3072  RSA_3072算法密钥数量
    * rsa4096  RSA_4096算法密钥数量
    * ecP256  EC_P256算法密钥数量
    * ecP384  EC_P384务算法密钥数量
    * sm2  SM2算法密钥数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aes256' => null,
        'sm4' => null,
        'rsa2048' => null,
        'rsa3072' => null,
        'rsa4096' => null,
        'ecP256' => null,
        'ecP384' => null,
        'sm2' => null
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
    * aes256  AES_256算法密钥数量
    * sm4  SM4算法密钥数量
    * rsa2048  RSA_2048算法密钥数量
    * rsa3072  RSA_3072算法密钥数量
    * rsa4096  RSA_4096算法密钥数量
    * ecP256  EC_P256算法密钥数量
    * ecP384  EC_P384务算法密钥数量
    * sm2  SM2算法密钥数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aes256' => 'aes_256',
            'sm4' => 'sm4',
            'rsa2048' => 'rsa_2048',
            'rsa3072' => 'rsa_3072',
            'rsa4096' => 'rsa_4096',
            'ecP256' => 'ec_p256',
            'ecP384' => 'ec_p384',
            'sm2' => 'sm2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aes256  AES_256算法密钥数量
    * sm4  SM4算法密钥数量
    * rsa2048  RSA_2048算法密钥数量
    * rsa3072  RSA_3072算法密钥数量
    * rsa4096  RSA_4096算法密钥数量
    * ecP256  EC_P256算法密钥数量
    * ecP384  EC_P384务算法密钥数量
    * sm2  SM2算法密钥数量
    *
    * @var string[]
    */
    protected static $setters = [
            'aes256' => 'setAes256',
            'sm4' => 'setSm4',
            'rsa2048' => 'setRsa2048',
            'rsa3072' => 'setRsa3072',
            'rsa4096' => 'setRsa4096',
            'ecP256' => 'setEcP256',
            'ecP384' => 'setEcP384',
            'sm2' => 'setSm2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aes256  AES_256算法密钥数量
    * sm4  SM4算法密钥数量
    * rsa2048  RSA_2048算法密钥数量
    * rsa3072  RSA_3072算法密钥数量
    * rsa4096  RSA_4096算法密钥数量
    * ecP256  EC_P256算法密钥数量
    * ecP384  EC_P384务算法密钥数量
    * sm2  SM2算法密钥数量
    *
    * @var string[]
    */
    protected static $getters = [
            'aes256' => 'getAes256',
            'sm4' => 'getSm4',
            'rsa2048' => 'getRsa2048',
            'rsa3072' => 'getRsa3072',
            'rsa4096' => 'getRsa4096',
            'ecP256' => 'getEcP256',
            'ecP384' => 'getEcP384',
            'sm2' => 'getSm2'
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
        $this->container['aes256'] = isset($data['aes256']) ? $data['aes256'] : null;
        $this->container['sm4'] = isset($data['sm4']) ? $data['sm4'] : null;
        $this->container['rsa2048'] = isset($data['rsa2048']) ? $data['rsa2048'] : null;
        $this->container['rsa3072'] = isset($data['rsa3072']) ? $data['rsa3072'] : null;
        $this->container['rsa4096'] = isset($data['rsa4096']) ? $data['rsa4096'] : null;
        $this->container['ecP256'] = isset($data['ecP256']) ? $data['ecP256'] : null;
        $this->container['ecP384'] = isset($data['ecP384']) ? $data['ecP384'] : null;
        $this->container['sm2'] = isset($data['sm2']) ? $data['sm2'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets aes256
    *  AES_256算法密钥数量
    *
    * @return int|null
    */
    public function getAes256()
    {
        return $this->container['aes256'];
    }

    /**
    * Sets aes256
    *
    * @param int|null $aes256 AES_256算法密钥数量
    *
    * @return $this
    */
    public function setAes256($aes256)
    {
        $this->container['aes256'] = $aes256;
        return $this;
    }

    /**
    * Gets sm4
    *  SM4算法密钥数量
    *
    * @return int|null
    */
    public function getSm4()
    {
        return $this->container['sm4'];
    }

    /**
    * Sets sm4
    *
    * @param int|null $sm4 SM4算法密钥数量
    *
    * @return $this
    */
    public function setSm4($sm4)
    {
        $this->container['sm4'] = $sm4;
        return $this;
    }

    /**
    * Gets rsa2048
    *  RSA_2048算法密钥数量
    *
    * @return int|null
    */
    public function getRsa2048()
    {
        return $this->container['rsa2048'];
    }

    /**
    * Sets rsa2048
    *
    * @param int|null $rsa2048 RSA_2048算法密钥数量
    *
    * @return $this
    */
    public function setRsa2048($rsa2048)
    {
        $this->container['rsa2048'] = $rsa2048;
        return $this;
    }

    /**
    * Gets rsa3072
    *  RSA_3072算法密钥数量
    *
    * @return int|null
    */
    public function getRsa3072()
    {
        return $this->container['rsa3072'];
    }

    /**
    * Sets rsa3072
    *
    * @param int|null $rsa3072 RSA_3072算法密钥数量
    *
    * @return $this
    */
    public function setRsa3072($rsa3072)
    {
        $this->container['rsa3072'] = $rsa3072;
        return $this;
    }

    /**
    * Gets rsa4096
    *  RSA_4096算法密钥数量
    *
    * @return int|null
    */
    public function getRsa4096()
    {
        return $this->container['rsa4096'];
    }

    /**
    * Sets rsa4096
    *
    * @param int|null $rsa4096 RSA_4096算法密钥数量
    *
    * @return $this
    */
    public function setRsa4096($rsa4096)
    {
        $this->container['rsa4096'] = $rsa4096;
        return $this;
    }

    /**
    * Gets ecP256
    *  EC_P256算法密钥数量
    *
    * @return int|null
    */
    public function getEcP256()
    {
        return $this->container['ecP256'];
    }

    /**
    * Sets ecP256
    *
    * @param int|null $ecP256 EC_P256算法密钥数量
    *
    * @return $this
    */
    public function setEcP256($ecP256)
    {
        $this->container['ecP256'] = $ecP256;
        return $this;
    }

    /**
    * Gets ecP384
    *  EC_P384务算法密钥数量
    *
    * @return int|null
    */
    public function getEcP384()
    {
        return $this->container['ecP384'];
    }

    /**
    * Sets ecP384
    *
    * @param int|null $ecP384 EC_P384务算法密钥数量
    *
    * @return $this
    */
    public function setEcP384($ecP384)
    {
        $this->container['ecP384'] = $ecP384;
        return $this;
    }

    /**
    * Gets sm2
    *  SM2算法密钥数量
    *
    * @return int|null
    */
    public function getSm2()
    {
        return $this->container['sm2'];
    }

    /**
    * Sets sm2
    *
    * @param int|null $sm2 SM2算法密钥数量
    *
    * @return $this
    */
    public function setSm2($sm2)
    {
        $this->container['sm2'] = $sm2;
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

