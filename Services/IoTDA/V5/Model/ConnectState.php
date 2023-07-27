<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectState';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastUpdateTime  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastUpdateTime' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastUpdateTime  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastUpdateTime' => null,
        'status' => null
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
    * lastUpdateTime  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastUpdateTime' => 'last_update_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastUpdateTime  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @var string[]
    */
    protected static $setters = [
            'lastUpdateTime' => 'setLastUpdateTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastUpdateTime  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * status  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @var string[]
    */
    protected static $getters = [
            'lastUpdateTime' => 'getLastUpdateTime',
            'status' => 'getStatus'
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
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lastUpdateTime']) && !preg_match("/^[0-9TZ]{16}$/", $this->container['lastUpdateTime'])) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be conform to the pattern /^[0-9TZ]{16}$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^[a-zA-Z]{1,16}$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^[a-zA-Z]{1,16}$/.";
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
    * Gets lastUpdateTime
    *  隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 隧道最近一次状态更新时间。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets status
    *  客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 客户端连接状态 CONNECTED | DISCONNECTED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

