<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProbeParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProbeParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheme  type为http类型时生效
    * host  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    * port  type为http和tcp类型时生效。
    * path  type为http类型时生效。请求路径。
    * command  type为command类型时生效。命令列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheme' => 'string',
            'host' => 'string',
            'port' => 'int',
            'path' => 'string',
            'command' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheme  type为http类型时生效
    * host  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    * port  type为http和tcp类型时生效。
    * path  type为http类型时生效。请求路径。
    * command  type为command类型时生效。命令列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheme' => null,
        'host' => null,
        'port' => null,
        'path' => null,
        'command' => null
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
    * scheme  type为http类型时生效
    * host  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    * port  type为http和tcp类型时生效。
    * path  type为http类型时生效。请求路径。
    * command  type为command类型时生效。命令列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheme' => 'scheme',
            'host' => 'host',
            'port' => 'port',
            'path' => 'path',
            'command' => 'command'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheme  type为http类型时生效
    * host  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    * port  type为http和tcp类型时生效。
    * path  type为http类型时生效。请求路径。
    * command  type为command类型时生效。命令列表
    *
    * @var string[]
    */
    protected static $setters = [
            'scheme' => 'setScheme',
            'host' => 'setHost',
            'port' => 'setPort',
            'path' => 'setPath',
            'command' => 'setCommand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheme  type为http类型时生效
    * host  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    * port  type为http和tcp类型时生效。
    * path  type为http类型时生效。请求路径。
    * command  type为command类型时生效。命令列表
    *
    * @var string[]
    */
    protected static $getters = [
            'scheme' => 'getScheme',
            'host' => 'getHost',
            'port' => 'getPort',
            'path' => 'getPath',
            'command' => 'getCommand'
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
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSchemeAllowableValues();
                if (!is_null($this->container['scheme']) && !in_array($this->container['scheme'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheme', must be one of '%s'",
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
    * Gets scheme
    *  type为http类型时生效
    *
    * @return string|null
    */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
    * Sets scheme
    *
    * @param string|null $scheme type为http类型时生效
    *
    * @return $this
    */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;
        return $this;
    }

    /**
    * Gets host
    *  type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
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
    * @param string|null $host type为http类型时生效。默认为POD的IP, 可以指定自定义的IP
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets port
    *  type为http和tcp类型时生效。
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
    * @param int|null $port type为http和tcp类型时生效。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets path
    *  type为http类型时生效。请求路径。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path type为http类型时生效。请求路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets command
    *  type为command类型时生效。命令列表
    *
    * @return string[]|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string[]|null $command type为command类型时生效。命令列表
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
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

