<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NacosServerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NacosServerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipAddress  nacos服务端IP地址。不包含中文字符。
    * port  nacos服务端端口号。取值范围1 ~ 65535。
    * grpcPort  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipAddress' => 'string',
            'port' => 'int',
            'grpcPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipAddress  nacos服务端IP地址。不包含中文字符。
    * port  nacos服务端端口号。取值范围1 ~ 65535。
    * grpcPort  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipAddress' => null,
        'port' => 'int32',
        'grpcPort' => 'int32'
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
    * ipAddress  nacos服务端IP地址。不包含中文字符。
    * port  nacos服务端端口号。取值范围1 ~ 65535。
    * grpcPort  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipAddress' => 'ip_address',
            'port' => 'port',
            'grpcPort' => 'grpc_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipAddress  nacos服务端IP地址。不包含中文字符。
    * port  nacos服务端端口号。取值范围1 ~ 65535。
    * grpcPort  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @var string[]
    */
    protected static $setters = [
            'ipAddress' => 'setIpAddress',
            'port' => 'setPort',
            'grpcPort' => 'setGrpcPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipAddress  nacos服务端IP地址。不包含中文字符。
    * port  nacos服务端端口号。取值范围1 ~ 65535。
    * grpcPort  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @var string[]
    */
    protected static $getters = [
            'ipAddress' => 'getIpAddress',
            'port' => 'getPort',
            'grpcPort' => 'getGrpcPort'
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
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['grpcPort'] = isset($data['grpcPort']) ? $data['grpcPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
        }
            if ((mb_strlen($this->container['ipAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ipAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 7.";
            }
            if (!preg_match("/^[^\\u4E00-\\u9FA5]*$/", $this->container['ipAddress'])) {
                $invalidProperties[] = "invalid value for 'ipAddress', must be conform to the pattern /^[^\\u4E00-\\u9FA5]*$/.";
            }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
            if (($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['grpcPort']) && ($this->container['grpcPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'grpcPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['grpcPort']) && ($this->container['grpcPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'grpcPort', must be bigger than or equal to 1.";
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
    * Gets ipAddress
    *  nacos服务端IP地址。不包含中文字符。
    *
    * @return string
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string $ipAddress nacos服务端IP地址。不包含中文字符。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets port
    *  nacos服务端端口号。取值范围1 ~ 65535。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port nacos服务端端口号。取值范围1 ~ 65535。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets grpcPort
    *  nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @return int|null
    */
    public function getGrpcPort()
    {
        return $this->container['grpcPort'];
    }

    /**
    * Sets grpcPort
    *
    * @param int|null $grpcPort nacos服务端gRPC端口号，默认为port+1000。取值范围1 ~ 65535。
    *
    * @return $this
    */
    public function setGrpcPort($grpcPort)
    {
        $this->container['grpcPort'] = $grpcPort;
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

