<?php

namespace HuaweiCloud\SDK\AntiDDoS\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowNewTaskStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowNewTaskStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskStatus  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    * taskMsg  任务的附加信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskStatus' => 'string',
            'taskMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskStatus  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    * taskMsg  任务的附加信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskStatus' => null,
        'taskMsg' => null
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
    * taskStatus  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    * taskMsg  任务的附加信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskStatus' => 'task_status',
            'taskMsg' => 'task_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskStatus  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    * taskMsg  任务的附加信息
    *
    * @var string[]
    */
    protected static $setters = [
            'taskStatus' => 'setTaskStatus',
            'taskMsg' => 'setTaskMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskStatus  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    * taskMsg  任务的附加信息
    *
    * @var string[]
    */
    protected static $getters = [
            'taskStatus' => 'getTaskStatus',
            'taskMsg' => 'getTaskMsg'
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
    const TASK_STATUS_SUCCESS = 'success';
    const TASK_STATUS_FAILED = 'failed';
    const TASK_STATUS_WAITING = 'waiting';
    const TASK_STATUS_RUNNING = 'running';
    const TASK_STATUS_PREPROCESS = 'preprocess';
    const TASK_STATUS_READY = 'ready';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_SUCCESS,
            self::TASK_STATUS_FAILED,
            self::TASK_STATUS_WAITING,
            self::TASK_STATUS_RUNNING,
            self::TASK_STATUS_PREPROCESS,
            self::TASK_STATUS_READY,
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
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskMsg'] = isset($data['taskMsg']) ? $data['taskMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskStatusAllowableValues();
                if (!is_null($this->container['taskStatus']) && !in_array($this->container['taskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskMsg']) && (mb_strlen($this->container['taskMsg']) > 255)) {
                $invalidProperties[] = "invalid value for 'taskMsg', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['taskMsg']) && (mb_strlen($this->container['taskMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskMsg', the character length must be bigger than or equal to 0.";
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
    * Gets taskStatus
    *  任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态，可选范围： - success: 表示成功 - failed: 表示失败 - waiting: 表示等待 - running: 表示运行中 - preprocess: 表示预处理 - ready: 表示准备
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskMsg
    *  任务的附加信息
    *
    * @return string|null
    */
    public function getTaskMsg()
    {
        return $this->container['taskMsg'];
    }

    /**
    * Sets taskMsg
    *
    * @param string|null $taskMsg 任务的附加信息
    *
    * @return $this
    */
    public function setTaskMsg($taskMsg)
    {
        $this->container['taskMsg'] = $taskMsg;
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

