<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

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
    * type  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    * cookieName  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    * persistenceTimeout  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'cookieName' => 'string',
            'persistenceTimeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    * cookieName  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    * persistenceTimeout  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'cookieName' => null,
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
    * type  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    * cookieName  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    * persistenceTimeout  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'cookieName' => 'cookie_name',
            'persistenceTimeout' => 'persistence_timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    * cookieName  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    * persistenceTimeout  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'cookieName' => 'setCookieName',
            'persistenceTimeout' => 'setPersistenceTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    * cookieName  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    * persistenceTimeout  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'cookieName' => 'getCookieName',
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
    const TYPE_SOURCE_IP = 'SOURCE_IP';
    const TYPE_HTTP_COOKIE = 'HTTP_COOKIE';
    const TYPE_APP_COOKIE = 'APP_COOKIE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SOURCE_IP,
            self::TYPE_HTTP_COOKIE,
            self::TYPE_APP_COOKIE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cookieName'] = isset($data['cookieName']) ? $data['cookieName'] : null;
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
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets type
    *  会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
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
    * @param string $type 会话保持的类型。SOURCE_IP：根据请求的源IP，将同一IP的请求发送到同一个后端云服务器上。HTTP_COOKIE：客户端第一次发送请求时，负载均衡器自动生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。APP_COOKIE：客户端第一次发送请求时，后端服务器生成cookie并将该cookie插入响应消息中，后续请求会发送到处理第一个请求的后端云服务器上。当后端云服务器的protocol为TCP时，只按SOURCE_IP生效当后端云服务器的protocol为HTTP时，只按HTTP_COOKIE或APP_COOKIE生效
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cookieName
    *  cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
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
    * @param string|null $cookieName cookie的名称。只有当会话保持的类型是APP_COOKIE时可以指定。
    *
    * @return $this
    */
    public function setCookieName($cookieName)
    {
        $this->container['cookieName'] = $cookieName;
        return $this;
    }

    /**
    * Gets persistenceTimeout
    *  会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
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
    * @param int|null $persistenceTimeout 会话保持的超时时间。取值范围：[1,60]（分钟）：当后端云服务器的protocol为TCP、UDP时[1,1440]（分钟）：当后端云服务器的protocol为HTTP时。当type为APP_COOKIE时该字段不生效。
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

