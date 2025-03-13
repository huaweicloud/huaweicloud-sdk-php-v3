<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MaintenanceWindow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MaintenanceWindow';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * weeklyPeriod  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    * startTime  升级起始时间（UTC时间）
    * durationHours  升级时长
    * upgradeScope  升级版本范围，当前只支持小版本自动升级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'weeklyPeriod' => 'string',
            'startTime' => 'string',
            'durationHours' => 'int',
            'upgradeScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * weeklyPeriod  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    * startTime  升级起始时间（UTC时间）
    * durationHours  升级时长
    * upgradeScope  升级版本范围，当前只支持小版本自动升级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'weeklyPeriod' => null,
        'startTime' => null,
        'durationHours' => null,
        'upgradeScope' => null
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
    * weeklyPeriod  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    * startTime  升级起始时间（UTC时间）
    * durationHours  升级时长
    * upgradeScope  升级版本范围，当前只支持小版本自动升级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'weeklyPeriod' => 'weekly_period',
            'startTime' => 'start_time',
            'durationHours' => 'duration_hours',
            'upgradeScope' => 'upgrade_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * weeklyPeriod  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    * startTime  升级起始时间（UTC时间）
    * durationHours  升级时长
    * upgradeScope  升级版本范围，当前只支持小版本自动升级
    *
    * @var string[]
    */
    protected static $setters = [
            'weeklyPeriod' => 'setWeeklyPeriod',
            'startTime' => 'setStartTime',
            'durationHours' => 'setDurationHours',
            'upgradeScope' => 'setUpgradeScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * weeklyPeriod  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    * startTime  升级起始时间（UTC时间）
    * durationHours  升级时长
    * upgradeScope  升级版本范围，当前只支持小版本自动升级
    *
    * @var string[]
    */
    protected static $getters = [
            'weeklyPeriod' => 'getWeeklyPeriod',
            'startTime' => 'getStartTime',
            'durationHours' => 'getDurationHours',
            'upgradeScope' => 'getUpgradeScope'
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
        $this->container['weeklyPeriod'] = isset($data['weeklyPeriod']) ? $data['weeklyPeriod'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['durationHours'] = isset($data['durationHours']) ? $data['durationHours'] : null;
        $this->container['upgradeScope'] = isset($data['upgradeScope']) ? $data['upgradeScope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['weeklyPeriod'] === null) {
            $invalidProperties[] = "'weeklyPeriod' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['durationHours'] === null) {
            $invalidProperties[] = "'durationHours' can't be null";
        }
            if (!is_null($this->container['upgradeScope']) && !preg_match("/OnlyPatchVersion/", $this->container['upgradeScope'])) {
                $invalidProperties[] = "invalid value for 'upgradeScope', must be conform to the pattern /OnlyPatchVersion/.";
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
    * Gets weeklyPeriod
    *  升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    *
    * @return string
    */
    public function getWeeklyPeriod()
    {
        return $this->container['weeklyPeriod'];
    }

    /**
    * Sets weeklyPeriod
    *
    * @param string $weeklyPeriod 升级周期，从\"Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday\"中进行选择，以英文逗号分隔 如：\"Friday,Saturday\"
    *
    * @return $this
    */
    public function setWeeklyPeriod($weeklyPeriod)
    {
        $this->container['weeklyPeriod'] = $weeklyPeriod;
        return $this;
    }

    /**
    * Gets startTime
    *  升级起始时间（UTC时间）
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 升级起始时间（UTC时间）
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets durationHours
    *  升级时长
    *
    * @return int
    */
    public function getDurationHours()
    {
        return $this->container['durationHours'];
    }

    /**
    * Sets durationHours
    *
    * @param int $durationHours 升级时长
    *
    * @return $this
    */
    public function setDurationHours($durationHours)
    {
        $this->container['durationHours'] = $durationHours;
        return $this;
    }

    /**
    * Gets upgradeScope
    *  升级版本范围，当前只支持小版本自动升级
    *
    * @return string|null
    */
    public function getUpgradeScope()
    {
        return $this->container['upgradeScope'];
    }

    /**
    * Sets upgradeScope
    *
    * @param string|null $upgradeScope 升级版本范围，当前只支持小版本自动升级
    *
    * @return $this
    */
    public function setUpgradeScope($upgradeScope)
    {
        $this->container['upgradeScope'] = $upgradeScope;
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

