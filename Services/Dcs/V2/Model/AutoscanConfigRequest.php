<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoscanConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoscanConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableAutoScan' => 'bool',
            'scheduleAt' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableAutoScan' => null,
        'scheduleAt' => null
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
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableAutoScan' => 'enable_auto_scan',
            'scheduleAt' => 'schedule_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'enableAutoScan' => 'setEnableAutoScan',
            'scheduleAt' => 'setScheduleAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableAutoScan  是否开启自动分析
    * scheduleAt  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'enableAutoScan' => 'getEnableAutoScan',
            'scheduleAt' => 'getScheduleAt'
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
        $this->container['enableAutoScan'] = isset($data['enableAutoScan']) ? $data['enableAutoScan'] : null;
        $this->container['scheduleAt'] = isset($data['scheduleAt']) ? $data['scheduleAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableAutoScan'] === null) {
            $invalidProperties[] = "'enableAutoScan' can't be null";
        }
        if ($this->container['scheduleAt'] === null) {
            $invalidProperties[] = "'scheduleAt' can't be null";
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
    * Gets enableAutoScan
    *  是否开启自动分析
    *
    * @return bool
    */
    public function getEnableAutoScan()
    {
        return $this->container['enableAutoScan'];
    }

    /**
    * Sets enableAutoScan
    *
    * @param bool $enableAutoScan 是否开启自动分析
    *
    * @return $this
    */
    public function setEnableAutoScan($enableAutoScan)
    {
        $this->container['enableAutoScan'] = $enableAutoScan;
        return $this;
    }

    /**
    * Gets scheduleAt
    *  每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @return string[]
    */
    public function getScheduleAt()
    {
        return $this->container['scheduleAt'];
    }

    /**
    * Sets scheduleAt
    *
    * @param string[] $scheduleAt 每日分析时间，时间格式为21:00，时间为UTC时间
    *
    * @return $this
    */
    public function setScheduleAt($scheduleAt)
    {
        $this->container['scheduleAt'] = $scheduleAt;
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

