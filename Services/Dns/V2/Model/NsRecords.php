<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NsRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ns_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostname  主机名。  当为内网名称服务器时，此值为空。
    * address  名称服务器地址。  当为公网名称服务器时，此值为空。
    * priority  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostname' => 'string',
            'address' => 'string',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostname  主机名。  当为内网名称服务器时，此值为空。
    * address  名称服务器地址。  当为公网名称服务器时，此值为空。
    * priority  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostname' => null,
        'address' => null,
        'priority' => 'int32'
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
    * hostname  主机名。  当为内网名称服务器时，此值为空。
    * address  名称服务器地址。  当为公网名称服务器时，此值为空。
    * priority  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostname' => 'hostname',
            'address' => 'address',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostname  主机名。  当为内网名称服务器时，此值为空。
    * address  名称服务器地址。  当为公网名称服务器时，此值为空。
    * priority  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostname' => 'setHostname',
            'address' => 'setAddress',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostname  主机名。  当为内网名称服务器时，此值为空。
    * address  名称服务器地址。  当为公网名称服务器时，此值为空。
    * priority  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostname' => 'getHostname',
            'address' => 'getAddress',
            'priority' => 'getPriority'
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
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
    * Gets hostname
    *  主机名。  当为内网名称服务器时，此值为空。
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 主机名。  当为内网名称服务器时，此值为空。
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets address
    *  名称服务器地址。  当为公网名称服务器时，此值为空。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 名称服务器地址。  当为公网名称服务器时，此值为空。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets priority
    *  优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级。  示例：  如果priority的值为“1”，表示会第一个采用该域名服务器进行解析。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

