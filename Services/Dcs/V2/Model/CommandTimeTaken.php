<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommandTimeTaken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommandTimeTaken';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * callsSum  调用次数
    * usecSum  耗时总数
    * commandName  命令名称
    * perUsec  耗时占比
    * averageUsec  每次调用平均耗时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'callsSum' => 'int',
            'usecSum' => 'double',
            'commandName' => 'string',
            'perUsec' => 'string',
            'averageUsec' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * callsSum  调用次数
    * usecSum  耗时总数
    * commandName  命令名称
    * perUsec  耗时占比
    * averageUsec  每次调用平均耗时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'callsSum' => 'int32',
        'usecSum' => 'double',
        'commandName' => null,
        'perUsec' => null,
        'averageUsec' => 'double'
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
    * callsSum  调用次数
    * usecSum  耗时总数
    * commandName  命令名称
    * perUsec  耗时占比
    * averageUsec  每次调用平均耗时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'callsSum' => 'calls_sum',
            'usecSum' => 'usec_sum',
            'commandName' => 'command_name',
            'perUsec' => 'per_usec',
            'averageUsec' => 'average_usec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * callsSum  调用次数
    * usecSum  耗时总数
    * commandName  命令名称
    * perUsec  耗时占比
    * averageUsec  每次调用平均耗时
    *
    * @var string[]
    */
    protected static $setters = [
            'callsSum' => 'setCallsSum',
            'usecSum' => 'setUsecSum',
            'commandName' => 'setCommandName',
            'perUsec' => 'setPerUsec',
            'averageUsec' => 'setAverageUsec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * callsSum  调用次数
    * usecSum  耗时总数
    * commandName  命令名称
    * perUsec  耗时占比
    * averageUsec  每次调用平均耗时
    *
    * @var string[]
    */
    protected static $getters = [
            'callsSum' => 'getCallsSum',
            'usecSum' => 'getUsecSum',
            'commandName' => 'getCommandName',
            'perUsec' => 'getPerUsec',
            'averageUsec' => 'getAverageUsec'
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
        $this->container['callsSum'] = isset($data['callsSum']) ? $data['callsSum'] : null;
        $this->container['usecSum'] = isset($data['usecSum']) ? $data['usecSum'] : null;
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['perUsec'] = isset($data['perUsec']) ? $data['perUsec'] : null;
        $this->container['averageUsec'] = isset($data['averageUsec']) ? $data['averageUsec'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['callsSum'] === null) {
            $invalidProperties[] = "'callsSum' can't be null";
        }
        if ($this->container['usecSum'] === null) {
            $invalidProperties[] = "'usecSum' can't be null";
        }
        if ($this->container['commandName'] === null) {
            $invalidProperties[] = "'commandName' can't be null";
        }
        if ($this->container['perUsec'] === null) {
            $invalidProperties[] = "'perUsec' can't be null";
        }
        if ($this->container['averageUsec'] === null) {
            $invalidProperties[] = "'averageUsec' can't be null";
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
    * Gets callsSum
    *  调用次数
    *
    * @return int
    */
    public function getCallsSum()
    {
        return $this->container['callsSum'];
    }

    /**
    * Sets callsSum
    *
    * @param int $callsSum 调用次数
    *
    * @return $this
    */
    public function setCallsSum($callsSum)
    {
        $this->container['callsSum'] = $callsSum;
        return $this;
    }

    /**
    * Gets usecSum
    *  耗时总数
    *
    * @return double
    */
    public function getUsecSum()
    {
        return $this->container['usecSum'];
    }

    /**
    * Sets usecSum
    *
    * @param double $usecSum 耗时总数
    *
    * @return $this
    */
    public function setUsecSum($usecSum)
    {
        $this->container['usecSum'] = $usecSum;
        return $this;
    }

    /**
    * Gets commandName
    *  命令名称
    *
    * @return string
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string $commandName 命令名称
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets perUsec
    *  耗时占比
    *
    * @return string
    */
    public function getPerUsec()
    {
        return $this->container['perUsec'];
    }

    /**
    * Sets perUsec
    *
    * @param string $perUsec 耗时占比
    *
    * @return $this
    */
    public function setPerUsec($perUsec)
    {
        $this->container['perUsec'] = $perUsec;
        return $this;
    }

    /**
    * Gets averageUsec
    *  每次调用平均耗时
    *
    * @return double
    */
    public function getAverageUsec()
    {
        return $this->container['averageUsec'];
    }

    /**
    * Sets averageUsec
    *
    * @param double $averageUsec 每次调用平均耗时
    *
    * @return $this
    */
    public function setAverageUsec($averageUsec)
    {
        $this->container['averageUsec'] = $averageUsec;
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

