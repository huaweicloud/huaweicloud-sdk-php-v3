<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppState';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * state  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'state' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * state  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'state' => null,
        'updateTime' => null
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
    * state  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'state' => 'state',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * state  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $setters = [
            'state' => 'setState',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * state  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    * updateTime  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @var string[]
    */
    protected static $getters = [
            'state' => 'getState',
            'updateTime' => 'getUpdateTime'
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
    const STATE_ACTIVATION = 'ACTIVATION';
    const STATE_DEACTIVATION = 'DEACTIVATION';
    const STATE_ARREARS = 'ARREARS';
    const STATE_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVATION,
            self::STATE_DEACTIVATION,
            self::STATE_ARREARS,
            self::STATE_DELETED,
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 1.";
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
    * Gets state
    *  状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态 - ACTIVATION：开启 - DEACTIVATION：停用 - ARREARS：欠费 - DELETED：已删除
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets updateTime
    *  app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime app鉴权的更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

