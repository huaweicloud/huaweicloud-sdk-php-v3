<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryHookRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryHookRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hookUrl  触发url
    * service  事件来源
    * token  安全令牌
    * hookEvents  触发事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hookUrl' => 'string',
            'service' => 'string',
            'token' => 'string',
            'hookEvents' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hookUrl  触发url
    * service  事件来源
    * token  安全令牌
    * hookEvents  触发事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hookUrl' => null,
        'service' => null,
        'token' => null,
        'hookEvents' => null
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
    * hookUrl  触发url
    * service  事件来源
    * token  安全令牌
    * hookEvents  触发事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hookUrl' => 'hook_url',
            'service' => 'service',
            'token' => 'token',
            'hookEvents' => 'hook_events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hookUrl  触发url
    * service  事件来源
    * token  安全令牌
    * hookEvents  触发事件
    *
    * @var string[]
    */
    protected static $setters = [
            'hookUrl' => 'setHookUrl',
            'service' => 'setService',
            'token' => 'setToken',
            'hookEvents' => 'setHookEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hookUrl  触发url
    * service  事件来源
    * token  安全令牌
    * hookEvents  触发事件
    *
    * @var string[]
    */
    protected static $getters = [
            'hookUrl' => 'getHookUrl',
            'service' => 'getService',
            'token' => 'getToken',
            'hookEvents' => 'getHookEvents'
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
        $this->container['hookUrl'] = isset($data['hookUrl']) ? $data['hookUrl'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['hookEvents'] = isset($data['hookEvents']) ? $data['hookEvents'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hookUrl'] === null) {
            $invalidProperties[] = "'hookUrl' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['hookEvents'] === null) {
            $invalidProperties[] = "'hookEvents' can't be null";
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
    * Gets hookUrl
    *  触发url
    *
    * @return string
    */
    public function getHookUrl()
    {
        return $this->container['hookUrl'];
    }

    /**
    * Sets hookUrl
    *
    * @param string $hookUrl 触发url
    *
    * @return $this
    */
    public function setHookUrl($hookUrl)
    {
        $this->container['hookUrl'] = $hookUrl;
        return $this;
    }

    /**
    * Gets service
    *  事件来源
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 事件来源
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets token
    *  安全令牌
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token 安全令牌
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets hookEvents
    *  触发事件
    *
    * @return string[]
    */
    public function getHookEvents()
    {
        return $this->container['hookEvents'];
    }

    /**
    * Sets hookEvents
    *
    * @param string[] $hookEvents 触发事件
    *
    * @return $this
    */
    public function setHookEvents($hookEvents)
    {
        $this->container['hookEvents'] = $hookEvents;
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

