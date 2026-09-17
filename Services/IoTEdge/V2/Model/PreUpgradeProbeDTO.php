<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreUpgradeProbeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreUpgradeProbeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * port  端口
    * path  请求路径
    * interval  轮询间隔
    * protocol  协议类型
    * timeoutConfig  timeoutConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'port' => 'int',
            'path' => 'string',
            'interval' => 'int',
            'protocol' => 'string',
            'timeoutConfig' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpgradeProbeTimeoutConfigDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * port  端口
    * path  请求路径
    * interval  轮询间隔
    * protocol  协议类型
    * timeoutConfig  timeoutConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'port' => 'int32',
        'path' => null,
        'interval' => 'int32',
        'protocol' => null,
        'timeoutConfig' => null
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
    * port  端口
    * path  请求路径
    * interval  轮询间隔
    * protocol  协议类型
    * timeoutConfig  timeoutConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'port' => 'port',
            'path' => 'path',
            'interval' => 'interval',
            'protocol' => 'protocol',
            'timeoutConfig' => 'timeout_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * port  端口
    * path  请求路径
    * interval  轮询间隔
    * protocol  协议类型
    * timeoutConfig  timeoutConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'port' => 'setPort',
            'path' => 'setPath',
            'interval' => 'setInterval',
            'protocol' => 'setProtocol',
            'timeoutConfig' => 'setTimeoutConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * port  端口
    * path  请求路径
    * interval  轮询间隔
    * protocol  协议类型
    * timeoutConfig  timeoutConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'port' => 'getPort',
            'path' => 'getPath',
            'interval' => 'getInterval',
            'protocol' => 'getProtocol',
            'timeoutConfig' => 'getTimeoutConfig'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['timeoutConfig'] = isset($data['timeoutConfig']) ? $data['timeoutConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 64)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 2)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['path']) && !preg_match("/^\/[\\w\/.-]{1,63}$/", $this->container['path'])) {
                $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /^\/[\\w\/.-]{1,63}$/.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] > 300)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 1)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protocol']) && !preg_match("/(HTTP|HTTPS)/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /(HTTP|HTTPS)/.";
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
    * Gets path
    *  请求路径
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
    * @param string|null $path 请求路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets interval
    *  轮询间隔
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 轮询间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型
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
    * @param string|null $protocol 协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets timeoutConfig
    *  timeoutConfig
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpgradeProbeTimeoutConfigDTO|null
    */
    public function getTimeoutConfig()
    {
        return $this->container['timeoutConfig'];
    }

    /**
    * Sets timeoutConfig
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpgradeProbeTimeoutConfigDTO|null $timeoutConfig timeoutConfig
    *
    * @return $this
    */
    public function setTimeoutConfig($timeoutConfig)
    {
        $this->container['timeoutConfig'] = $timeoutConfig;
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

