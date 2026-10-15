<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSwitchoverInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSwitchoverInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastSwitchoverTime  上次倒换完成时间点
    * incrementCheckPoint  上次倒换任务位点信息
    * targetSafePoint  上次倒换目标库倒换时位点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastSwitchoverTime' => 'string',
            'incrementCheckPoint' => 'string',
            'targetSafePoint' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastSwitchoverTime  上次倒换完成时间点
    * incrementCheckPoint  上次倒换任务位点信息
    * targetSafePoint  上次倒换目标库倒换时位点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastSwitchoverTime' => null,
        'incrementCheckPoint' => null,
        'targetSafePoint' => null
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
    * lastSwitchoverTime  上次倒换完成时间点
    * incrementCheckPoint  上次倒换任务位点信息
    * targetSafePoint  上次倒换目标库倒换时位点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastSwitchoverTime' => 'last_switchover_time',
            'incrementCheckPoint' => 'increment_check_point',
            'targetSafePoint' => 'target_safe_point'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastSwitchoverTime  上次倒换完成时间点
    * incrementCheckPoint  上次倒换任务位点信息
    * targetSafePoint  上次倒换目标库倒换时位点
    *
    * @var string[]
    */
    protected static $setters = [
            'lastSwitchoverTime' => 'setLastSwitchoverTime',
            'incrementCheckPoint' => 'setIncrementCheckPoint',
            'targetSafePoint' => 'setTargetSafePoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastSwitchoverTime  上次倒换完成时间点
    * incrementCheckPoint  上次倒换任务位点信息
    * targetSafePoint  上次倒换目标库倒换时位点
    *
    * @var string[]
    */
    protected static $getters = [
            'lastSwitchoverTime' => 'getLastSwitchoverTime',
            'incrementCheckPoint' => 'getIncrementCheckPoint',
            'targetSafePoint' => 'getTargetSafePoint'
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
        $this->container['lastSwitchoverTime'] = isset($data['lastSwitchoverTime']) ? $data['lastSwitchoverTime'] : null;
        $this->container['incrementCheckPoint'] = isset($data['incrementCheckPoint']) ? $data['incrementCheckPoint'] : null;
        $this->container['targetSafePoint'] = isset($data['targetSafePoint']) ? $data['targetSafePoint'] : null;
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
    * Gets lastSwitchoverTime
    *  上次倒换完成时间点
    *
    * @return string|null
    */
    public function getLastSwitchoverTime()
    {
        return $this->container['lastSwitchoverTime'];
    }

    /**
    * Sets lastSwitchoverTime
    *
    * @param string|null $lastSwitchoverTime 上次倒换完成时间点
    *
    * @return $this
    */
    public function setLastSwitchoverTime($lastSwitchoverTime)
    {
        $this->container['lastSwitchoverTime'] = $lastSwitchoverTime;
        return $this;
    }

    /**
    * Gets incrementCheckPoint
    *  上次倒换任务位点信息
    *
    * @return string|null
    */
    public function getIncrementCheckPoint()
    {
        return $this->container['incrementCheckPoint'];
    }

    /**
    * Sets incrementCheckPoint
    *
    * @param string|null $incrementCheckPoint 上次倒换任务位点信息
    *
    * @return $this
    */
    public function setIncrementCheckPoint($incrementCheckPoint)
    {
        $this->container['incrementCheckPoint'] = $incrementCheckPoint;
        return $this;
    }

    /**
    * Gets targetSafePoint
    *  上次倒换目标库倒换时位点
    *
    * @return string|null
    */
    public function getTargetSafePoint()
    {
        return $this->container['targetSafePoint'];
    }

    /**
    * Sets targetSafePoint
    *
    * @param string|null $targetSafePoint 上次倒换目标库倒换时位点
    *
    * @return $this
    */
    public function setTargetSafePoint($targetSafePoint)
    {
        $this->container['targetSafePoint'] = $targetSafePoint;
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

