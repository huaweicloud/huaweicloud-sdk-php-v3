<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSJobStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSJobStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    * reason  原因
    * startTime  开始时间
    * finishTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'reason' => 'string',
            'startTime' => '\DateTime',
            'finishTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    * reason  原因
    * startTime  开始时间
    * finishTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'reason' => null,
        'startTime' => 'date-time',
        'finishTime' => 'date-time'
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
    * status  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    * reason  原因
    * startTime  开始时间
    * finishTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'reason' => 'reason',
            'startTime' => 'startTime',
            'finishTime' => 'finishTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    * reason  原因
    * startTime  开始时间
    * finishTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'reason' => 'setReason',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    * reason  原因
    * startTime  开始时间
    * finishTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'reason' => 'getReason',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
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
    * Gets status
    *  Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status Job状态： - Running：运行中 - TimedOut：运行超时 - Succeeded：运行成功 - Failed：运行失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  结束时间
    *
    * @return \DateTime|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param \DateTime|null $finishTime 结束时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
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

