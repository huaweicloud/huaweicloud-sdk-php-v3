<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamClassLoggerLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamClassLoggerLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loggerName  输出日志的类的名称。
    * loggerLevel  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loggerName' => 'string',
            'loggerLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loggerName  输出日志的类的名称。
    * loggerLevel  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loggerName' => null,
        'loggerLevel' => null
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
    * loggerName  输出日志的类的名称。
    * loggerLevel  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loggerName' => 'logger_name',
            'loggerLevel' => 'logger_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loggerName  输出日志的类的名称。
    * loggerLevel  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @var string[]
    */
    protected static $setters = [
            'loggerName' => 'setLoggerName',
            'loggerLevel' => 'setLoggerLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loggerName  输出日志的类的名称。
    * loggerLevel  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @var string[]
    */
    protected static $getters = [
            'loggerName' => 'getLoggerName',
            'loggerLevel' => 'getLoggerLevel'
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
        $this->container['loggerName'] = isset($data['loggerName']) ? $data['loggerName'] : null;
        $this->container['loggerLevel'] = isset($data['loggerLevel']) ? $data['loggerLevel'] : null;
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
    * Gets loggerName
    *  输出日志的类的名称。
    *
    * @return string|null
    */
    public function getLoggerName()
    {
        return $this->container['loggerName'];
    }

    /**
    * Sets loggerName
    *
    * @param string|null $loggerName 输出日志的类的名称。
    *
    * @return $this
    */
    public function setLoggerName($loggerName)
    {
        $this->container['loggerName'] = $loggerName;
        return $this;
    }

    /**
    * Gets loggerLevel
    *  输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @return string|null
    */
    public function getLoggerLevel()
    {
        return $this->container['loggerLevel'];
    }

    /**
    * Sets loggerLevel
    *
    * @param string|null $loggerLevel 输出日志的级别，DEBUG\\TRACE\\WARNNING\\INFO\\ERROR。
    *
    * @return $this
    */
    public function setLoggerLevel($loggerLevel)
    {
        $this->container['loggerLevel'] = $loggerLevel;
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

