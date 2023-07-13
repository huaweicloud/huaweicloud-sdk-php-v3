<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HlsEncrypt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HlsEncrypt';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  内容加密秘钥
    * url  秘钥获取服务的地址
    * iv  初始向量，base64binary，随机数
    * algorithm  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'url' => 'string',
            'iv' => 'string',
            'algorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  内容加密秘钥
    * url  秘钥获取服务的地址
    * iv  初始向量，base64binary，随机数
    * algorithm  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'url' => null,
        'iv' => null,
        'algorithm' => null
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
    * key  内容加密秘钥
    * url  秘钥获取服务的地址
    * iv  初始向量，base64binary，随机数
    * algorithm  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'url' => 'url',
            'iv' => 'iv',
            'algorithm' => 'algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  内容加密秘钥
    * url  秘钥获取服务的地址
    * iv  初始向量，base64binary，随机数
    * algorithm  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'url' => 'setUrl',
            'iv' => 'setIv',
            'algorithm' => 'setAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  内容加密秘钥
    * url  秘钥获取服务的地址
    * iv  初始向量，base64binary，随机数
    * algorithm  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'url' => 'getUrl',
            'iv' => 'getIv',
            'algorithm' => 'getAlgorithm'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['iv'] = isset($data['iv']) ? $data['iv'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 256)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['iv']) && (mb_strlen($this->container['iv']) > 256)) {
                $invalidProperties[] = "invalid value for 'iv', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['iv']) && (mb_strlen($this->container['iv']) < 0)) {
                $invalidProperties[] = "invalid value for 'iv', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) > 16)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be bigger than or equal to 0.";
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
    * Gets key
    *  内容加密秘钥
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 内容加密秘钥
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets url
    *  秘钥获取服务的地址
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 秘钥获取服务的地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets iv
    *  初始向量，base64binary，随机数
    *
    * @return string|null
    */
    public function getIv()
    {
        return $this->container['iv'];
    }

    /**
    * Sets iv
    *
    * @param string|null $iv 初始向量，base64binary，随机数
    *
    * @return $this
    */
    public function setIv($iv)
    {
        $this->container['iv'] = $iv;
        return $this;
    }

    /**
    * Gets algorithm
    *  加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
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
    * @param string|null $algorithm 加密算法。 - AES-128-CTR - AES-128-CBC - SM4CBC  默认值：AES-128-CTR
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
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

