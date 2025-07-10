<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClearAlarmRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClearAlarmRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remarks  清除备注
    * alarmIds  告警id拼接字符串，以”，“分隔
    * isServiceInterrupt  业务是否中断
    * startTime  故障发生时间
    * faultRecoveryTime  故障恢复时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remarks' => 'string',
            'alarmIds' => 'string',
            'isServiceInterrupt' => 'bool',
            'startTime' => 'int',
            'faultRecoveryTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remarks  清除备注
    * alarmIds  告警id拼接字符串，以”，“分隔
    * isServiceInterrupt  业务是否中断
    * startTime  故障发生时间
    * faultRecoveryTime  故障恢复时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remarks' => null,
        'alarmIds' => null,
        'isServiceInterrupt' => null,
        'startTime' => 'int64',
        'faultRecoveryTime' => 'int64'
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
    * remarks  清除备注
    * alarmIds  告警id拼接字符串，以”，“分隔
    * isServiceInterrupt  业务是否中断
    * startTime  故障发生时间
    * faultRecoveryTime  故障恢复时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remarks' => 'remarks',
            'alarmIds' => 'alarm_ids',
            'isServiceInterrupt' => 'is_service_interrupt',
            'startTime' => 'start_time',
            'faultRecoveryTime' => 'fault_recovery_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remarks  清除备注
    * alarmIds  告警id拼接字符串，以”，“分隔
    * isServiceInterrupt  业务是否中断
    * startTime  故障发生时间
    * faultRecoveryTime  故障恢复时间
    *
    * @var string[]
    */
    protected static $setters = [
            'remarks' => 'setRemarks',
            'alarmIds' => 'setAlarmIds',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'startTime' => 'setStartTime',
            'faultRecoveryTime' => 'setFaultRecoveryTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remarks  清除备注
    * alarmIds  告警id拼接字符串，以”，“分隔
    * isServiceInterrupt  业务是否中断
    * startTime  故障发生时间
    * faultRecoveryTime  故障恢复时间
    *
    * @var string[]
    */
    protected static $getters = [
            'remarks' => 'getRemarks',
            'alarmIds' => 'getAlarmIds',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'startTime' => 'getStartTime',
            'faultRecoveryTime' => 'getFaultRecoveryTime'
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
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['alarmIds'] = isset($data['alarmIds']) ? $data['alarmIds'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['faultRecoveryTime'] = isset($data['faultRecoveryTime']) ? $data['faultRecoveryTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 100)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 0)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['alarmIds'] === null) {
            $invalidProperties[] = "'alarmIds' can't be null";
        }
            if ((mb_strlen($this->container['alarmIds']) > 2700)) {
                $invalidProperties[] = "invalid value for 'alarmIds', the character length must be smaller than or equal to 2700.";
            }
            if ((mb_strlen($this->container['alarmIds']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmIds', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['faultRecoveryTime']) && ($this->container['faultRecoveryTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'faultRecoveryTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['faultRecoveryTime']) && ($this->container['faultRecoveryTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'faultRecoveryTime', must be bigger than or equal to 0.";
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
    * Gets remarks
    *  清除备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 清除备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets alarmIds
    *  告警id拼接字符串，以”，“分隔
    *
    * @return string
    */
    public function getAlarmIds()
    {
        return $this->container['alarmIds'];
    }

    /**
    * Sets alarmIds
    *
    * @param string $alarmIds 告警id拼接字符串，以”，“分隔
    *
    * @return $this
    */
    public function setAlarmIds($alarmIds)
    {
        $this->container['alarmIds'] = $alarmIds;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  业务是否中断
    *
    * @return bool|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool|null $isServiceInterrupt 业务是否中断
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets startTime
    *  故障发生时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 故障发生时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets faultRecoveryTime
    *  故障恢复时间
    *
    * @return int|null
    */
    public function getFaultRecoveryTime()
    {
        return $this->container['faultRecoveryTime'];
    }

    /**
    * Sets faultRecoveryTime
    *
    * @param int|null $faultRecoveryTime 故障恢复时间
    *
    * @return $this
    */
    public function setFaultRecoveryTime($faultRecoveryTime)
    {
        $this->container['faultRecoveryTime'] = $faultRecoveryTime;
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

