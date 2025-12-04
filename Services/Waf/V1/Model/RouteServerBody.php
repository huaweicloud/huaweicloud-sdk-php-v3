<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouteServerBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouteServerBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backProtocol' => 'string',
            'address' => 'string',
            'port' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backProtocol' => null,
        'address' => null,
        'port' => null
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
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backProtocol' => 'back_protocol',
            'address' => 'address',
            'port' => 'port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    *
    * @var string[]
    */
    protected static $setters = [
            'backProtocol' => 'setBackProtocol',
            'address' => 'setAddress',
            'port' => 'setPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backProtocol  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    * address  客户端访问的源站服务器的IP地址
    * port  WAF转发客户端请求到源站服务的业务端口
    *
    * @var string[]
    */
    protected static $getters = [
            'backProtocol' => 'getBackProtocol',
            'address' => 'getAddress',
            'port' => 'getPort'
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
    const BACK_PROTOCOL_HTTP = 'HTTP';
    const BACK_PROTOCOL_HTTPS = 'HTTPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackProtocolAllowableValues()
    {
        return [
            self::BACK_PROTOCOL_HTTP,
            self::BACK_PROTOCOL_HTTPS,
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
        $this->container['backProtocol'] = isset($data['backProtocol']) ? $data['backProtocol'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getBackProtocolAllowableValues();
                if (!is_null($this->container['backProtocol']) && !in_array($this->container['backProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backProtocol', must be one of '%s'",
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
    * Gets backProtocol
    *  **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBackProtocol()
    {
        return $this->container['backProtocol'];
    }

    /**
    * Sets backProtocol
    *
    * @param string|null $backProtocol **参数解释：** WAF转发客户端请求到防护域名源站服务器的协议 **约束限制：** 不涉及 **取值范围：**  - HTTP: HTTP协议  - HTTPS: HTTPS协议  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBackProtocol($backProtocol)
    {
        $this->container['backProtocol'] = $backProtocol;
        return $this;
    }

    /**
    * Gets address
    *  客户端访问的源站服务器的IP地址
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
    * @param string|null $address 客户端访问的源站服务器的IP地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets port
    *  WAF转发客户端请求到源站服务的业务端口
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
    * @param int|null $port WAF转发客户端请求到源站服务的业务端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
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

