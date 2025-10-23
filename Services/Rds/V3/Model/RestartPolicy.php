<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestartPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestartPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * period  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    * utcOffset  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'period' => 'string[]',
            'utcOffset' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * period  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    * utcOffset  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'period' => null,
        'utcOffset' => null
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
    * period  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    * utcOffset  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'period' => 'period',
            'utcOffset' => 'utc_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * period  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    * utcOffset  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @var string[]
    */
    protected static $setters = [
            'period' => 'setPeriod',
            'utcOffset' => 'setUtcOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * period  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    * utcOffset  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @var string[]
    */
    protected static $getters = [
            'period' => 'getPeriod',
            'utcOffset' => 'getUtcOffset'
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
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['utcOffset'] = isset($data['utcOffset']) ? $data['utcOffset'] : null;
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
    * Gets period
    *  重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    *
    * @return string[]|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string[]|null $period 重启周期配置，在重启周期内的可维护时间窗进行重启，时区为UTC，取值范围： begin: 每月的第一天 middle：每月的15号 end：每月的最后一天 空列表，表示该功能关闭。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets utcOffset
    *  所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @return string|null
    */
    public function getUtcOffset()
    {
        return $this->container['utcOffset'];
    }

    /**
    * Sets utcOffset
    *
    * @param string|null $utcOffset 所在时区相较于UTC时间的偏移量，取值范围：格式必须为+hh:mm，或者-hh:mm，例如+08:00。
    *
    * @return $this
    */
    public function setUtcOffset($utcOffset)
    {
        $this->container['utcOffset'] = $utcOffset;
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

