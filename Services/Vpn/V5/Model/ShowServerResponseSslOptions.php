<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowServerResponseSslOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowServerResponse_ssl_options';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * authenticationAlgorithm  认证算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'port' => 'int',
            'encryptionAlgorithm' => 'string',
            'authenticationAlgorithm' => 'string',
            'isCompressed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * authenticationAlgorithm  认证算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'port' => null,
        'encryptionAlgorithm' => null,
        'authenticationAlgorithm' => null,
        'isCompressed' => null
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
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * authenticationAlgorithm  认证算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'port' => 'port',
            'encryptionAlgorithm' => 'encryption_algorithm',
            'authenticationAlgorithm' => 'authentication_algorithm',
            'isCompressed' => 'is_compressed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * authenticationAlgorithm  认证算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'encryptionAlgorithm' => 'setEncryptionAlgorithm',
            'authenticationAlgorithm' => 'setAuthenticationAlgorithm',
            'isCompressed' => 'setIsCompressed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * authenticationAlgorithm  认证算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'encryptionAlgorithm' => 'getEncryptionAlgorithm',
            'authenticationAlgorithm' => 'getAuthenticationAlgorithm',
            'isCompressed' => 'getIsCompressed'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['encryptionAlgorithm'] = isset($data['encryptionAlgorithm']) ? $data['encryptionAlgorithm'] : null;
        $this->container['authenticationAlgorithm'] = isset($data['authenticationAlgorithm']) ? $data['authenticationAlgorithm'] : null;
        $this->container['isCompressed'] = isset($data['isCompressed']) ? $data['isCompressed'] : null;
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
    * Gets protocol
    *  协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets port
    *  端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
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
    * Gets isCompressed
    *  是否压缩
    *
    * @return bool|null
    */
    public function getIsCompressed()
    {
        return $this->container['isCompressed'];
    }

    /**
    * Sets isCompressed
    *
    * @param bool|null $isCompressed 是否压缩
    *
    * @return $this
    */
    public function setIsCompressed($isCompressed)
    {
        $this->container['isCompressed'] = $isCompressed;
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

