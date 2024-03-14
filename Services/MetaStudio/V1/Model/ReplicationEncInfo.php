<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicationEncInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicationEncInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithm  加密算法
    * keyId  秘钥id
    * iv  初始化向量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithm' => 'string',
            'keyId' => 'string',
            'iv' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithm  加密算法
    * keyId  秘钥id
    * iv  初始化向量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithm' => null,
        'keyId' => null,
        'iv' => null
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
    * algorithm  加密算法
    * keyId  秘钥id
    * iv  初始化向量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithm' => 'algorithm',
            'keyId' => 'key_id',
            'iv' => 'iv'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithm  加密算法
    * keyId  秘钥id
    * iv  初始化向量
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithm' => 'setAlgorithm',
            'keyId' => 'setKeyId',
            'iv' => 'setIv'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithm  加密算法
    * keyId  秘钥id
    * iv  初始化向量
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithm' => 'getAlgorithm',
            'keyId' => 'getKeyId',
            'iv' => 'getIv'
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['iv'] = isset($data['iv']) ? $data['iv'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) > 64)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) < 1)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 128)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iv']) && (mb_strlen($this->container['iv']) > 128)) {
                $invalidProperties[] = "invalid value for 'iv', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['iv']) && (mb_strlen($this->container['iv']) < 1)) {
                $invalidProperties[] = "invalid value for 'iv', the character length must be bigger than or equal to 1.";
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
    *  加密算法
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
    * @param string|null $algorithm 加密算法
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets keyId
    *  秘钥id
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 秘钥id
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets iv
    *  初始化向量
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
    * @param string|null $iv 初始化向量
    *
    * @return $this
    */
    public function setIv($iv)
    {
        $this->container['iv'] = $iv;
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

