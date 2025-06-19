<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertStatisticsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertStatisticsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockAlertCount  阻塞告警次数
    * exceptionAlertCount  异常告警次数
    * failAlertCount  失败告警次数
    * serviceId  服务id
    * statisticsTime  统计时间
    * timeoutAlertCount  超时告警次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockAlertCount' => 'int',
            'exceptionAlertCount' => 'int',
            'failAlertCount' => 'int',
            'serviceId' => 'string',
            'statisticsTime' => 'int',
            'timeoutAlertCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockAlertCount  阻塞告警次数
    * exceptionAlertCount  异常告警次数
    * failAlertCount  失败告警次数
    * serviceId  服务id
    * statisticsTime  统计时间
    * timeoutAlertCount  超时告警次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockAlertCount' => 'int32',
        'exceptionAlertCount' => 'int32',
        'failAlertCount' => 'int32',
        'serviceId' => null,
        'statisticsTime' => 'int64',
        'timeoutAlertCount' => 'int32'
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
    * blockAlertCount  阻塞告警次数
    * exceptionAlertCount  异常告警次数
    * failAlertCount  失败告警次数
    * serviceId  服务id
    * statisticsTime  统计时间
    * timeoutAlertCount  超时告警次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockAlertCount' => 'block_alert_count',
            'exceptionAlertCount' => 'exception_alert_count',
            'failAlertCount' => 'fail_alert_count',
            'serviceId' => 'service_id',
            'statisticsTime' => 'statistics_time',
            'timeoutAlertCount' => 'timeout_alert_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockAlertCount  阻塞告警次数
    * exceptionAlertCount  异常告警次数
    * failAlertCount  失败告警次数
    * serviceId  服务id
    * statisticsTime  统计时间
    * timeoutAlertCount  超时告警次数
    *
    * @var string[]
    */
    protected static $setters = [
            'blockAlertCount' => 'setBlockAlertCount',
            'exceptionAlertCount' => 'setExceptionAlertCount',
            'failAlertCount' => 'setFailAlertCount',
            'serviceId' => 'setServiceId',
            'statisticsTime' => 'setStatisticsTime',
            'timeoutAlertCount' => 'setTimeoutAlertCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockAlertCount  阻塞告警次数
    * exceptionAlertCount  异常告警次数
    * failAlertCount  失败告警次数
    * serviceId  服务id
    * statisticsTime  统计时间
    * timeoutAlertCount  超时告警次数
    *
    * @var string[]
    */
    protected static $getters = [
            'blockAlertCount' => 'getBlockAlertCount',
            'exceptionAlertCount' => 'getExceptionAlertCount',
            'failAlertCount' => 'getFailAlertCount',
            'serviceId' => 'getServiceId',
            'statisticsTime' => 'getStatisticsTime',
            'timeoutAlertCount' => 'getTimeoutAlertCount'
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
        $this->container['blockAlertCount'] = isset($data['blockAlertCount']) ? $data['blockAlertCount'] : null;
        $this->container['exceptionAlertCount'] = isset($data['exceptionAlertCount']) ? $data['exceptionAlertCount'] : null;
        $this->container['failAlertCount'] = isset($data['failAlertCount']) ? $data['failAlertCount'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['statisticsTime'] = isset($data['statisticsTime']) ? $data['statisticsTime'] : null;
        $this->container['timeoutAlertCount'] = isset($data['timeoutAlertCount']) ? $data['timeoutAlertCount'] : null;
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
    * Gets blockAlertCount
    *  阻塞告警次数
    *
    * @return int|null
    */
    public function getBlockAlertCount()
    {
        return $this->container['blockAlertCount'];
    }

    /**
    * Sets blockAlertCount
    *
    * @param int|null $blockAlertCount 阻塞告警次数
    *
    * @return $this
    */
    public function setBlockAlertCount($blockAlertCount)
    {
        $this->container['blockAlertCount'] = $blockAlertCount;
        return $this;
    }

    /**
    * Gets exceptionAlertCount
    *  异常告警次数
    *
    * @return int|null
    */
    public function getExceptionAlertCount()
    {
        return $this->container['exceptionAlertCount'];
    }

    /**
    * Sets exceptionAlertCount
    *
    * @param int|null $exceptionAlertCount 异常告警次数
    *
    * @return $this
    */
    public function setExceptionAlertCount($exceptionAlertCount)
    {
        $this->container['exceptionAlertCount'] = $exceptionAlertCount;
        return $this;
    }

    /**
    * Gets failAlertCount
    *  失败告警次数
    *
    * @return int|null
    */
    public function getFailAlertCount()
    {
        return $this->container['failAlertCount'];
    }

    /**
    * Sets failAlertCount
    *
    * @param int|null $failAlertCount 失败告警次数
    *
    * @return $this
    */
    public function setFailAlertCount($failAlertCount)
    {
        $this->container['failAlertCount'] = $failAlertCount;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务id
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets statisticsTime
    *  统计时间
    *
    * @return int|null
    */
    public function getStatisticsTime()
    {
        return $this->container['statisticsTime'];
    }

    /**
    * Sets statisticsTime
    *
    * @param int|null $statisticsTime 统计时间
    *
    * @return $this
    */
    public function setStatisticsTime($statisticsTime)
    {
        $this->container['statisticsTime'] = $statisticsTime;
        return $this;
    }

    /**
    * Gets timeoutAlertCount
    *  超时告警次数
    *
    * @return int|null
    */
    public function getTimeoutAlertCount()
    {
        return $this->container['timeoutAlertCount'];
    }

    /**
    * Sets timeoutAlertCount
    *
    * @param int|null $timeoutAlertCount 超时告警次数
    *
    * @return $this
    */
    public function setTimeoutAlertCount($timeoutAlertCount)
    {
        $this->container['timeoutAlertCount'] = $timeoutAlertCount;
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

