<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetAddress';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  **参数说明**：服务的对应IP
    * port  **参数说明**：服务对应端口
    * domain  **参数说明**：服务对应的域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'port' => 'int',
            'domain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  **参数说明**：服务的对应IP
    * port  **参数说明**：服务对应端口
    * domain  **参数说明**：服务对应的域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'port' => 'int32',
        'domain' => null
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
    * ip  **参数说明**：服务的对应IP
    * port  **参数说明**：服务对应端口
    * domain  **参数说明**：服务对应的域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'port' => 'port',
            'domain' => 'domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  **参数说明**：服务的对应IP
    * port  **参数说明**：服务对应端口
    * domain  **参数说明**：服务对应的域名
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'port' => 'setPort',
            'domain' => 'setDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  **参数说明**：服务的对应IP
    * port  **参数说明**：服务对应端口
    * domain  **参数说明**：服务对应的域名
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'port' => 'getPort',
            'domain' => 'getDomain'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ip']) && !preg_match("/^((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)(\\.((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)){3}$/", $this->container['ip'])) {
                $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /^((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)(\\.((25[0-5])|(2[0-4]\\d)|(1\\d\\d)|([1-9]\\d)|\\d)){3}$/.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && !preg_match("/^([a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9.])?)+[a-zA-Z0-9]{2,6}$/", $this->container['domain'])) {
                $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /^([a-zA-Z0-9]([a-zA-Z0-9\\-]{0,61}[a-zA-Z0-9.])?)+[a-zA-Z0-9]{2,6}$/.";
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
    * Gets ip
    *  **参数说明**：服务的对应IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数说明**：服务的对应IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  **参数说明**：服务对应端口
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
    * @param int|null $port **参数说明**：服务对应端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets domain
    *  **参数说明**：服务对应的域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain **参数说明**：服务对应的域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
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

