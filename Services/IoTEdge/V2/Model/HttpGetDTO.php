<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpGetDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpGetDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  请求路径
    * port  端口
    * host  主机地址
    * scheme  协议类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'port' => 'int',
            'host' => 'string',
            'scheme' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  请求路径
    * port  端口
    * host  主机地址
    * scheme  协议类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'port' => 'int32',
        'host' => null,
        'scheme' => null
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
    * path  请求路径
    * port  端口
    * host  主机地址
    * scheme  协议类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'port' => 'port',
            'host' => 'host',
            'scheme' => 'scheme'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  请求路径
    * port  端口
    * host  主机地址
    * scheme  协议类型
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'port' => 'setPort',
            'host' => 'setHost',
            'scheme' => 'setScheme'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  请求路径
    * port  端口
    * host  主机地址
    * scheme  协议类型
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'port' => 'getPort',
            'host' => 'getHost',
            'scheme' => 'getScheme'
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
    const SCHEME_HTTP = 'HTTP';
    const SCHEME_HTTPS = 'HTTPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSchemeAllowableValues()
    {
        return [
            self::SCHEME_HTTP,
            self::SCHEME_HTTPS,
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
            if ((mb_strlen($this->container['path']) > 64)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['path']) < 2)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^\/(\\w+\/?)+$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^\/(\\w+\/?)+$/.";
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
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) > 64)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['host']) && (mb_strlen($this->container['host']) < 0)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['host']) && !preg_match("/^((https?:\/\/)?(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()!@:%_\\+.~#?&\/\/=]*))*$/", $this->container['host'])) {
                $invalidProperties[] = "invalid value for 'host', must be conform to the pattern /^((https?:\/\/)?(www\\.)?[-a-zA-Z0-9@:%._\\+~#=]{1,256}\\.[a-zA-Z0-9()]{1,6}\\b([-a-zA-Z0-9()!@:%_\\+.~#?&\/\/=]*))*$/.";
            }
        if ($this->container['scheme'] === null) {
            $invalidProperties[] = "'scheme' can't be null";
        }
            $allowedValues = $this->getSchemeAllowableValues();
                if (!is_null($this->container['scheme']) && !in_array($this->container['scheme'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheme', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['scheme']) > 64)) {
                $invalidProperties[] = "invalid value for 'scheme', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['scheme']) < 1)) {
                $invalidProperties[] = "invalid value for 'scheme', the character length must be bigger than or equal to 1.";
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
    * Gets path
    *  请求路径
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 请求路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets port
    *  端口
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
    * @param int $port 端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets host
    *  主机地址
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 主机地址
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets scheme
    *  协议类型
    *
    * @return string
    */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
    * Sets scheme
    *
    * @param string $scheme 协议类型
    *
    * @return $this
    */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;
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

