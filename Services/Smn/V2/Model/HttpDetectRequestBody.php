<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpDetectRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpDetectRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议类型，当前仅支持http/https，不可为空
    * endpoint  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    * extension  extension
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'endpoint' => 'string',
            'extension' => '\HuaweiCloud\SDK\Smn\V2\Model\HttpDetectRequestBodyExtension'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议类型，当前仅支持http/https，不可为空
    * endpoint  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    * extension  extension
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'endpoint' => null,
        'extension' => null
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
    * protocol  协议类型，当前仅支持http/https，不可为空
    * endpoint  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    * extension  extension
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'endpoint' => 'endpoint',
            'extension' => 'extension'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议类型，当前仅支持http/https，不可为空
    * endpoint  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    * extension  extension
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'endpoint' => 'setEndpoint',
            'extension' => 'setExtension'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议类型，当前仅支持http/https，不可为空
    * endpoint  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    * extension  extension
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'endpoint' => 'getEndpoint',
            'extension' => 'getExtension'
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
    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_HTTPS = 'https;';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
            if (!preg_match("/^(http|https):\/\/.*$/", $this->container['endpoint'])) {
                $invalidProperties[] = "invalid value for 'endpoint', must be conform to the pattern /^(http|https):\/\/.*$/.";
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
    *  协议类型，当前仅支持http/https，不可为空
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议类型，当前仅支持http/https，不可为空
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets endpoint
    *  待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 待探测的终端地址，当前仅支持以http:// 或https://开头，不可为空
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets extension
    *  extension
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\HttpDetectRequestBodyExtension|null
    */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
    * Sets extension
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\HttpDetectRequestBodyExtension|null $extension extension
    *
    * @return $this
    */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
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

