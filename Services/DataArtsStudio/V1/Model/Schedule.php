<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Schedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Schedule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    * cron  cron
    * event  event
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'cron' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron',
            'event' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    * cron  cron
    * event  event
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'cron' => null,
        'event' => null
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
    * type  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    * cron  cron
    * event  event
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'cron' => 'cron',
            'event' => 'event'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    * cron  cron
    * event  event
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'cron' => 'setCron',
            'event' => 'setEvent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    * cron  cron
    * event  event
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'cron' => 'getCron',
            'event' => 'getEvent'
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
    const TYPE_EXECUTE_ONCE = 'EXECUTE_ONCE';
    const TYPE_CRON = 'CRON';
    const TYPE_EVENT = 'EVENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EXECUTE_ONCE,
            self::TYPE_CRON,
            self::TYPE_EVENT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 调度类型 - EXECUTE_ONCE: 作业立即运行，只运行一次。 - CRON: 作业按指定频率周期执行。 - EVENT:  根据事件触发执行。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cron
    *  cron
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron|null
    */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
    * Sets cron
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Cron|null $cron cron
    *
    * @return $this
    */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;
        return $this;
    }

    /**
    * Gets event
    *  event
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event|null
    */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
    * Sets event
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Event|null $event event
    *
    * @return $this
    */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
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

