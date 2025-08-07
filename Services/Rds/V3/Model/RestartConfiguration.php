<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestartConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestartConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restartServer  是否重启虚拟机。
    * forcible  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    * delay  是否在可维护时间段内重启。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restartServer' => 'bool',
            'forcible' => 'bool',
            'delay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restartServer  是否重启虚拟机。
    * forcible  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    * delay  是否在可维护时间段内重启。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restartServer' => null,
        'forcible' => null,
        'delay' => null
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
    * restartServer  是否重启虚拟机。
    * forcible  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    * delay  是否在可维护时间段内重启。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restartServer' => 'restart_server',
            'forcible' => 'forcible',
            'delay' => 'delay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restartServer  是否重启虚拟机。
    * forcible  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    * delay  是否在可维护时间段内重启。
    *
    * @var string[]
    */
    protected static $setters = [
            'restartServer' => 'setRestartServer',
            'forcible' => 'setForcible',
            'delay' => 'setDelay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restartServer  是否重启虚拟机。
    * forcible  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    * delay  是否在可维护时间段内重启。
    *
    * @var string[]
    */
    protected static $getters = [
            'restartServer' => 'getRestartServer',
            'forcible' => 'getForcible',
            'delay' => 'getDelay'
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
        $this->container['restartServer'] = isset($data['restartServer']) ? $data['restartServer'] : null;
        $this->container['forcible'] = isset($data['forcible']) ? $data['forcible'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
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
    * Gets restartServer
    *  是否重启虚拟机。
    *
    * @return bool|null
    */
    public function getRestartServer()
    {
        return $this->container['restartServer'];
    }

    /**
    * Sets restartServer
    *
    * @param bool|null $restartServer 是否重启虚拟机。
    *
    * @return $this
    */
    public function setRestartServer($restartServer)
    {
        $this->container['restartServer'] = $restartServer;
        return $this;
    }

    /**
    * Gets forcible
    *  是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    *
    * @return bool|null
    */
    public function getForcible()
    {
        return $this->container['forcible'];
    }

    /**
    * Sets forcible
    *
    * @param bool|null $forcible 是否强制重启, 强制重启会导致数据库服务中未提交的事务强制中断。
    *
    * @return $this
    */
    public function setForcible($forcible)
    {
        $this->container['forcible'] = $forcible;
        return $this;
    }

    /**
    * Gets delay
    *  是否在可维护时间段内重启。
    *
    * @return bool|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param bool|null $delay 是否在可维护时间段内重启。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
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

