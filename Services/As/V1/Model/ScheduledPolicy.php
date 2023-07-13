<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    * endTime  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    * launchTime  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    * recurrenceType  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    * recurrenceValue  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'launchTime' => 'string',
            'recurrenceType' => 'string',
            'recurrenceValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    * endTime  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    * launchTime  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    * recurrenceType  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    * recurrenceValue  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'launchTime' => null,
        'recurrenceType' => null,
        'recurrenceValue' => null
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
    * startTime  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    * endTime  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    * launchTime  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    * recurrenceType  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    * recurrenceValue  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'launchTime' => 'launch_time',
            'recurrenceType' => 'recurrence_type',
            'recurrenceValue' => 'recurrence_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    * endTime  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    * launchTime  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    * recurrenceType  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    * recurrenceValue  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'launchTime' => 'setLaunchTime',
            'recurrenceType' => 'setRecurrenceType',
            'recurrenceValue' => 'setRecurrenceValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    * endTime  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    * launchTime  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    * recurrenceType  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    * recurrenceValue  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'launchTime' => 'getLaunchTime',
            'recurrenceType' => 'getRecurrenceType',
            'recurrenceValue' => 'getRecurrenceValue'
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
    const RECURRENCE_TYPE_DAILY = 'DAILY';
    const RECURRENCE_TYPE_WEEKLY = 'WEEKLY';
    const RECURRENCE_TYPE_MONTHLY = 'MONTHLY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecurrenceTypeAllowableValues()
    {
        return [
            self::RECURRENCE_TYPE_DAILY,
            self::RECURRENCE_TYPE_WEEKLY,
            self::RECURRENCE_TYPE_MONTHLY,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['launchTime'] = isset($data['launchTime']) ? $data['launchTime'] : null;
        $this->container['recurrenceType'] = isset($data['recurrenceType']) ? $data['recurrenceType'] : null;
        $this->container['recurrenceValue'] = isset($data['recurrenceValue']) ? $data['recurrenceValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['launchTime'] === null) {
            $invalidProperties[] = "'launchTime' can't be null";
        }
            $allowedValues = $this->getRecurrenceTypeAllowableValues();
                if (!is_null($this->container['recurrenceType']) && !in_array($this->container['recurrenceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recurrenceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['recurrenceValue']) && (mb_strlen($this->container['recurrenceValue']) > 64)) {
                $invalidProperties[] = "invalid value for 'recurrenceValue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['recurrenceValue']) && (mb_strlen($this->container['recurrenceValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'recurrenceValue', the character length must be bigger than or equal to 1.";
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
    * Gets startTime
    *  非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 非必选，仅当recurrence_type不为空时生效，表示计划任务的生效开始时间，格式为yyyy-MM-dd'T'HH:mm'Z'，不填写时默认为任务创建成功的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 仅当recurrence_type不为空时生效且必选，表示计划任务的生效结束时间，格式为yyyy-MM-dd'T'HH:mm'Z'
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets launchTime
    *  必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    *
    * @return string
    */
    public function getLaunchTime()
    {
        return $this->container['launchTime'];
    }

    /**
    * Sets launchTime
    *
    * @param string $launchTime 必选，执行时间，采用UTC时间，recurrence_type不填写或为空时，格式为HH:mm, recurrence_type不为空时，格式为yyyy-MM-dd'T'HH:mm'Z'
    *
    * @return $this
    */
    public function setLaunchTime($launchTime)
    {
        $this->container['launchTime'] = $launchTime;
        return $this;
    }

    /**
    * Gets recurrenceType
    *  非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    *
    * @return string|null
    */
    public function getRecurrenceType()
    {
        return $this->container['recurrenceType'];
    }

    /**
    * Sets recurrenceType
    *
    * @param string|null $recurrenceType 非必选，不填写时计划任务为定时执行， 填写时，为周期执行，且只能填写DAILY，WEEKLY，MONTHLY 中的一种，分别为按天，按周，按月周期执行
    *
    * @return $this
    */
    public function setRecurrenceType($recurrenceType)
    {
        $this->container['recurrenceType'] = $recurrenceType;
        return $this;
    }

    /**
    * Gets recurrenceValue
    *  仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @return string|null
    */
    public function getRecurrenceValue()
    {
        return $this->container['recurrenceValue'];
    }

    /**
    * Sets recurrenceValue
    *
    * @param string|null $recurrenceValue 仅当recurrence_type为WEEKLY，MONTHLY时必选，表示周期执行的具体日期，多个日期用,分割。recurrence_type为WEEKLY时，可填入1-7， recurrence_type为MONTHLY时，可填入1-31
    *
    * @return $this
    */
    public function setRecurrenceValue($recurrenceValue)
    {
        $this->container['recurrenceValue'] = $recurrenceValue;
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

