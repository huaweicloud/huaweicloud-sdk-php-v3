<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventSubMetricsItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventSubMetricsItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failNum  失败数
    * retrySuccessNum  重试成功数
    * retryFailNum  重试失败数
    * retryTimes  重试数
    * timestamp  时间戳
    * num  调用数
    * successNum  调用成功数
    * processTime  处理时间
    * invokeTime  调用时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failNum' => 'int',
            'retrySuccessNum' => 'int',
            'retryFailNum' => 'int',
            'retryTimes' => 'int',
            'timestamp' => 'int',
            'num' => 'int',
            'successNum' => 'int',
            'processTime' => 'int',
            'invokeTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failNum  失败数
    * retrySuccessNum  重试成功数
    * retryFailNum  重试失败数
    * retryTimes  重试数
    * timestamp  时间戳
    * num  调用数
    * successNum  调用成功数
    * processTime  处理时间
    * invokeTime  调用时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failNum' => 'int64',
        'retrySuccessNum' => 'int64',
        'retryFailNum' => 'int64',
        'retryTimes' => null,
        'timestamp' => 'int64',
        'num' => 'int64',
        'successNum' => 'int64',
        'processTime' => 'int64',
        'invokeTime' => 'int64'
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
    * failNum  失败数
    * retrySuccessNum  重试成功数
    * retryFailNum  重试失败数
    * retryTimes  重试数
    * timestamp  时间戳
    * num  调用数
    * successNum  调用成功数
    * processTime  处理时间
    * invokeTime  调用时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failNum' => 'fail_num',
            'retrySuccessNum' => 'retry_success_num',
            'retryFailNum' => 'retry_fail_num',
            'retryTimes' => 'retry_times',
            'timestamp' => 'timestamp',
            'num' => 'num',
            'successNum' => 'success_num',
            'processTime' => 'process_time',
            'invokeTime' => 'invoke_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failNum  失败数
    * retrySuccessNum  重试成功数
    * retryFailNum  重试失败数
    * retryTimes  重试数
    * timestamp  时间戳
    * num  调用数
    * successNum  调用成功数
    * processTime  处理时间
    * invokeTime  调用时间
    *
    * @var string[]
    */
    protected static $setters = [
            'failNum' => 'setFailNum',
            'retrySuccessNum' => 'setRetrySuccessNum',
            'retryFailNum' => 'setRetryFailNum',
            'retryTimes' => 'setRetryTimes',
            'timestamp' => 'setTimestamp',
            'num' => 'setNum',
            'successNum' => 'setSuccessNum',
            'processTime' => 'setProcessTime',
            'invokeTime' => 'setInvokeTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failNum  失败数
    * retrySuccessNum  重试成功数
    * retryFailNum  重试失败数
    * retryTimes  重试数
    * timestamp  时间戳
    * num  调用数
    * successNum  调用成功数
    * processTime  处理时间
    * invokeTime  调用时间
    *
    * @var string[]
    */
    protected static $getters = [
            'failNum' => 'getFailNum',
            'retrySuccessNum' => 'getRetrySuccessNum',
            'retryFailNum' => 'getRetryFailNum',
            'retryTimes' => 'getRetryTimes',
            'timestamp' => 'getTimestamp',
            'num' => 'getNum',
            'successNum' => 'getSuccessNum',
            'processTime' => 'getProcessTime',
            'invokeTime' => 'getInvokeTime'
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
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['retrySuccessNum'] = isset($data['retrySuccessNum']) ? $data['retrySuccessNum'] : null;
        $this->container['retryFailNum'] = isset($data['retryFailNum']) ? $data['retryFailNum'] : null;
        $this->container['retryTimes'] = isset($data['retryTimes']) ? $data['retryTimes'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['invokeTime'] = isset($data['invokeTime']) ? $data['invokeTime'] : null;
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
    * Gets failNum
    *  失败数
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum 失败数
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets retrySuccessNum
    *  重试成功数
    *
    * @return int|null
    */
    public function getRetrySuccessNum()
    {
        return $this->container['retrySuccessNum'];
    }

    /**
    * Sets retrySuccessNum
    *
    * @param int|null $retrySuccessNum 重试成功数
    *
    * @return $this
    */
    public function setRetrySuccessNum($retrySuccessNum)
    {
        $this->container['retrySuccessNum'] = $retrySuccessNum;
        return $this;
    }

    /**
    * Gets retryFailNum
    *  重试失败数
    *
    * @return int|null
    */
    public function getRetryFailNum()
    {
        return $this->container['retryFailNum'];
    }

    /**
    * Sets retryFailNum
    *
    * @param int|null $retryFailNum 重试失败数
    *
    * @return $this
    */
    public function setRetryFailNum($retryFailNum)
    {
        $this->container['retryFailNum'] = $retryFailNum;
        return $this;
    }

    /**
    * Gets retryTimes
    *  重试数
    *
    * @return int|null
    */
    public function getRetryTimes()
    {
        return $this->container['retryTimes'];
    }

    /**
    * Sets retryTimes
    *
    * @param int|null $retryTimes 重试数
    *
    * @return $this
    */
    public function setRetryTimes($retryTimes)
    {
        $this->container['retryTimes'] = $retryTimes;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets num
    *  调用数
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num 调用数
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets successNum
    *  调用成功数
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum 调用成功数
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets processTime
    *  处理时间
    *
    * @return int|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param int|null $processTime 处理时间
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets invokeTime
    *  调用时间
    *
    * @return int|null
    */
    public function getInvokeTime()
    {
        return $this->container['invokeTime'];
    }

    /**
    * Sets invokeTime
    *
    * @param int|null $invokeTime 调用时间
    *
    * @return $this
    */
    public function setInvokeTime($invokeTime)
    {
        $this->container['invokeTime'] = $invokeTime;
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

