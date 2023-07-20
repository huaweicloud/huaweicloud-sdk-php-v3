<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessConfigWindowsLogInfoCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessConfigWindowsLogInfoCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * categorys  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    * timeOffset  timeOffset
    * eventLevel  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'categorys' => 'string[]',
            'timeOffset' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTimeOffsetCreate',
            'eventLevel' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * categorys  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    * timeOffset  timeOffset
    * eventLevel  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'categorys' => null,
        'timeOffset' => null,
        'eventLevel' => null
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
    * categorys  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    * timeOffset  timeOffset
    * eventLevel  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'categorys' => 'categorys',
            'timeOffset' => 'time_offset',
            'eventLevel' => 'event_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * categorys  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    * timeOffset  timeOffset
    * eventLevel  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @var string[]
    */
    protected static $setters = [
            'categorys' => 'setCategorys',
            'timeOffset' => 'setTimeOffset',
            'eventLevel' => 'setEventLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * categorys  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    * timeOffset  timeOffset
    * eventLevel  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @var string[]
    */
    protected static $getters = [
            'categorys' => 'getCategorys',
            'timeOffset' => 'getTimeOffset',
            'eventLevel' => 'getEventLevel'
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
    const CATEGORYS_APPLICATION = 'Application';
    const CATEGORYS_SYSTEM = 'System';
    const CATEGORYS_SECURITY = 'Security';
    const CATEGORYS_SETUP = 'Setup';
    const EVENT_LEVEL_INFORMATION = 'information';
    const EVENT_LEVEL_WARNING = 'warning';
    const EVENT_LEVEL_ERROR = 'error';
    const EVENT_LEVEL_CRITICAL = 'critical';
    const EVENT_LEVEL_VERBOSE = 'verbose';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategorysAllowableValues()
    {
        return [
            self::CATEGORYS_APPLICATION,
            self::CATEGORYS_SYSTEM,
            self::CATEGORYS_SECURITY,
            self::CATEGORYS_SETUP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventLevelAllowableValues()
    {
        return [
            self::EVENT_LEVEL_INFORMATION,
            self::EVENT_LEVEL_WARNING,
            self::EVENT_LEVEL_ERROR,
            self::EVENT_LEVEL_CRITICAL,
            self::EVENT_LEVEL_VERBOSE,
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
        $this->container['categorys'] = isset($data['categorys']) ? $data['categorys'] : null;
        $this->container['timeOffset'] = isset($data['timeOffset']) ? $data['timeOffset'] : null;
        $this->container['eventLevel'] = isset($data['eventLevel']) ? $data['eventLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['categorys'] === null) {
            $invalidProperties[] = "'categorys' can't be null";
        }
        if ($this->container['timeOffset'] === null) {
            $invalidProperties[] = "'timeOffset' can't be null";
        }
        if ($this->container['eventLevel'] === null) {
            $invalidProperties[] = "'eventLevel' can't be null";
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
    * Gets categorys
    *  采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    *
    * @return string[]
    */
    public function getCategorys()
    {
        return $this->container['categorys'];
    }

    /**
    * Sets categorys
    *
    * @param string[] $categorys 采集Windows事件日志类型。Application：应用系统，System：系统，Security：安全，Setup：启动
    *
    * @return $this
    */
    public function setCategorys($categorys)
    {
        $this->container['categorys'] = $categorys;
        return $this;
    }

    /**
    * Gets timeOffset
    *  timeOffset
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTimeOffsetCreate
    */
    public function getTimeOffset()
    {
        return $this->container['timeOffset'];
    }

    /**
    * Sets timeOffset
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTimeOffsetCreate $timeOffset timeOffset
    *
    * @return $this
    */
    public function setTimeOffset($timeOffset)
    {
        $this->container['timeOffset'] = $timeOffset;
        return $this;
    }

    /**
    * Gets eventLevel
    *  事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @return string[]
    */
    public function getEventLevel()
    {
        return $this->container['eventLevel'];
    }

    /**
    * Sets eventLevel
    *
    * @param string[] $eventLevel 事件等级。information：info，warning：告警，error：错误，critical：关键，verbose：冗长
    *
    * @return $this
    */
    public function setEventLevel($eventLevel)
    {
        $this->container['eventLevel'] = $eventLevel;
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

