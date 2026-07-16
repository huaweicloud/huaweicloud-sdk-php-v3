<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskStatuses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskStatuses';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * task  训练作业子任务名称。
    * exitCode  训练作业子任务退出码。
    * message  训练作业子任务错误消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'task' => 'string',
            'exitCode' => 'int',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * task  训练作业子任务名称。
    * exitCode  训练作业子任务退出码。
    * message  训练作业子任务错误消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'task' => null,
        'exitCode' => 'int32',
        'message' => null
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
    * task  训练作业子任务名称。
    * exitCode  训练作业子任务退出码。
    * message  训练作业子任务错误消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'task' => 'task',
            'exitCode' => 'exit_code',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * task  训练作业子任务名称。
    * exitCode  训练作业子任务退出码。
    * message  训练作业子任务错误消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'task' => 'setTask',
            'exitCode' => 'setExitCode',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * task  训练作业子任务名称。
    * exitCode  训练作业子任务退出码。
    * message  训练作业子任务错误消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'task' => 'getTask',
            'exitCode' => 'getExitCode',
            'message' => 'getMessage'
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
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['exitCode'] = isset($data['exitCode']) ? $data['exitCode'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets task
    *  训练作业子任务名称。
    *
    * @return string|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param string|null $task 训练作业子任务名称。
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets exitCode
    *  训练作业子任务退出码。
    *
    * @return int|null
    */
    public function getExitCode()
    {
        return $this->container['exitCode'];
    }

    /**
    * Sets exitCode
    *
    * @param int|null $exitCode 训练作业子任务退出码。
    *
    * @return $this
    */
    public function setExitCode($exitCode)
    {
        $this->container['exitCode'] = $exitCode;
        return $this;
    }

    /**
    * Gets message
    *  训练作业子任务错误消息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 训练作业子任务错误消息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

