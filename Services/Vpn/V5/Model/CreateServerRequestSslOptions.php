<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServerRequestSslOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServerRequest_ssl_options';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'port' => 'int',
            'encryptionAlgorithm' => 'string',
            'isCompressed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'port' => null,
        'encryptionAlgorithm' => null,
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
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'port' => 'port',
            'encryptionAlgorithm' => 'encryption_algorithm',
            'isCompressed' => 'is_compressed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'encryptionAlgorithm' => 'setEncryptionAlgorithm',
            'isCompressed' => 'setIsCompressed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议
    * port  端口
    * encryptionAlgorithm  加密算法
    * isCompressed  是否压缩
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'encryptionAlgorithm' => 'getEncryptionAlgorithm',
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
    const PROTOCOL_TCP = 'TCP';
    const PORT_443 = 443;
    const PORT_1194 = 1194;
    const ENCRYPTION_ALGORITHM_AES_128_GCM = 'AES-128-GCM';
    const ENCRYPTION_ALGORITHM_AES_256_GCM = 'AES-256-GCM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPortAllowableValues()
    {
        return [
            self::PORT_443,
            self::PORT_1194,
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
            self::ENCRYPTION_ALGORITHM_AES_128_GCM,
            self::ENCRYPTION_ALGORITHM_AES_256_GCM,
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['encryptionAlgorithm'] = isset($data['encryptionAlgorithm']) ? $data['encryptionAlgorithm'] : null;
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
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPortAllowableValues();
                if (!is_null($this->container['port']) && !in_array($this->container['port'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'port', must be one of '%s'",
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

