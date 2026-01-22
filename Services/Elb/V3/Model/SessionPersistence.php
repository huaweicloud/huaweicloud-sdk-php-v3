<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SessionPersistence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SessionPersistence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cookieName  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    * persistenceTimeout  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cookieName' => 'string',
            'type' => 'string',
            'persistenceTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cookieName  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    * persistenceTimeout  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cookieName' => null,
        'type' => null,
        'persistenceTimeout' => 'int32'
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
    * cookieName  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    * persistenceTimeout  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cookieName' => 'cookie_name',
            'type' => 'type',
            'persistenceTimeout' => 'persistence_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cookieName  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    * persistenceTimeout  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'cookieName' => 'setCookieName',
            'type' => 'setType',
            'persistenceTimeout' => 'setPersistenceTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cookieName  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    * type  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    * persistenceTimeout  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'cookieName' => 'getCookieName',
            'type' => 'getType',
            'persistenceTimeout' => 'getPersistenceTimeout'
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
        $this->container['cookieName'] = isset($data['cookieName']) ? $data['cookieName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['persistenceTimeout'] = isset($data['persistenceTimeout']) ? $data['persistenceTimeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets cookieName
    *  **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    *
    * @return string|null
    */
    public function getCookieName()
    {
        return $this->container['cookieName'];
    }

    /**
    * Sets cookieName
    *
    * @param string|null $cookieName **参数解释**：cookie名称。  **取值范围**：最大长度1024个字符。  [不支持该字段，请勿使用。](tag:hws_eu,hcso_dt)
    *
    * @return $this
    */
    public function setCookieName($cookieName)
    {
        $this->container['cookieName'] = $cookieName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：会话保持类型。  **取值范围**： - SOURCE_IP：基于源IP地址的会话保持，也就是根据客户端的源IP地址将流量持续转发到同一后端服务器（member）。 - HTTP_COOKIE：通过在HTTP响应中插入一个特殊的Cookie，实现会话保持。负载均衡会在后续请求中识别该Cookie，并将请求转发到对应的后端服务器。 - APP_COOKIE：基于应用层Cookie的会话保持。与HTTP_COOKIE不同的是，APP_COOKIE要求后端服务在响应中插入一个指定名称的Cookie，负载均衡器识别后，将后续请求转发到相同后端member。  [荷兰region不支持QUIC。](tag:dt) [不支持QUIC。](tag:tm)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets persistenceTimeout
    *  **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return int|null
    */
    public function getPersistenceTimeout()
    {
        return $this->container['persistenceTimeout'];
    }

    /**
    * Sets persistenceTimeout
    *
    * @param int|null $persistenceTimeout **参数解释**：会话保持的时间。当type为APP_COOKIE时不生效。  **取值范围**： - 若pool的protocol为TCP、UDP和QUIC则范围为[1,60]（分钟），默认值1。 - 若pool的protocol为HTTP和HTTPS则范围为[1,1440]（分钟），默认值1440。  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return $this
    */
    public function setPersistenceTimeout($persistenceTimeout)
    {
        $this->container['persistenceTimeout'] = $persistenceTimeout;
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

