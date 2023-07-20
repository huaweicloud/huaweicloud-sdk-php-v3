<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DurationStrategies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DurationStrategies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * strategy  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    * estimatedUpgradeDuration  升级时长，单位为分钟
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'strategy' => 'string',
            'estimatedUpgradeDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * strategy  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    * estimatedUpgradeDuration  升级时长，单位为分钟
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'strategy' => null,
        'estimatedUpgradeDuration' => null
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
    * strategy  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    * estimatedUpgradeDuration  升级时长，单位为分钟
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'strategy' => 'strategy',
            'estimatedUpgradeDuration' => 'estimated_upgrade_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * strategy  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    * estimatedUpgradeDuration  升级时长，单位为分钟
    *
    * @var string[]
    */
    protected static $setters = [
            'strategy' => 'setStrategy',
            'estimatedUpgradeDuration' => 'setEstimatedUpgradeDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * strategy  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    * estimatedUpgradeDuration  升级时长，单位为分钟
    *
    * @var string[]
    */
    protected static $getters = [
            'strategy' => 'getStrategy',
            'estimatedUpgradeDuration' => 'getEstimatedUpgradeDuration'
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
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['estimatedUpgradeDuration'] = isset($data['estimatedUpgradeDuration']) ? $data['estimatedUpgradeDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['strategy'] === null) {
            $invalidProperties[] = "'strategy' can't be null";
        }
        if ($this->container['estimatedUpgradeDuration'] === null) {
            $invalidProperties[] = "'estimatedUpgradeDuration' can't be null";
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
    * Gets strategy
    *  升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    *
    * @return string
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string $strategy 升级策略 - minimized_interrupt_time，表示最短中断时间 - minimized_upgrade_time，最短升级时长
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets estimatedUpgradeDuration
    *  升级时长，单位为分钟
    *
    * @return int
    */
    public function getEstimatedUpgradeDuration()
    {
        return $this->container['estimatedUpgradeDuration'];
    }

    /**
    * Sets estimatedUpgradeDuration
    *
    * @param int $estimatedUpgradeDuration 升级时长，单位为分钟
    *
    * @return $this
    */
    public function setEstimatedUpgradeDuration($estimatedUpgradeDuration)
    {
        $this->container['estimatedUpgradeDuration'] = $estimatedUpgradeDuration;
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

