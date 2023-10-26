<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFsTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFsTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * status  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    * dirUsage  目录资源使用情况(包含子目录)
    * beginTime  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    * endTime  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'dirUsage' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDuInfo',
            'beginTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * status  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    * dirUsage  目录资源使用情况(包含子目录)
    * beginTime  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    * endTime  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'dirUsage' => null,
        'beginTime' => null,
        'endTime' => null
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
    * taskId  任务id
    * status  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    * dirUsage  目录资源使用情况(包含子目录)
    * beginTime  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    * endTime  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'dirUsage' => 'dir_usage',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * status  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    * dirUsage  目录资源使用情况(包含子目录)
    * beginTime  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    * endTime  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'dirUsage' => 'setDirUsage',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * status  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    * dirUsage  目录资源使用情况(包含子目录)
    * beginTime  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    * endTime  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'dirUsage' => 'getDirUsage',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_DOING = 'DOING';
    const STATUS_FAIL = 'FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_DOING,
            self::STATUS_FAIL,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dirUsage'] = isset($data['dirUsage']) ? $data['dirUsage'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['beginTime']) && !preg_match("/2006-01-02 15:04:05/", $this->container['beginTime'])) {
                $invalidProperties[] = "invalid value for 'beginTime', must be conform to the pattern /2006-01-02 15:04:05/.";
            }
            if (!is_null($this->container['endTime']) && !preg_match("/2006-01-02 15:04:06/", $this->container['endTime'])) {
                $invalidProperties[] = "invalid value for 'endTime', must be conform to the pattern /2006-01-02 15:04:06/.";
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
    * Gets taskId
    *  任务id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
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
    * @param string|null $status 任务状态, SUCCESS表示成功，DOING表示正在执行，FAIL表示失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dirUsage
    *  目录资源使用情况(包含子目录)
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDuInfo|null
    */
    public function getDirUsage()
    {
        return $this->container['dirUsage'];
    }

    /**
    * Sets dirUsage
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\FsDuInfo|null $dirUsage 目录资源使用情况(包含子目录)
    *
    * @return $this
    */
    public function setDirUsage($dirUsage)
    {
        $this->container['dirUsage'] = $dirUsage;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 任务开始时间，UTC时间，例如：2006-01-02 15:04:05'
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
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
    * @param string|null $endTime 任务结束时间，UTC时间，例如：2006-01-02 15:04:06'
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

