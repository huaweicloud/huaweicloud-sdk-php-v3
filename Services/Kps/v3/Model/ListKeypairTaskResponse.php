<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListKeypairTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListKeypairTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  租户虚拟机ID
    * taskId  任务下发成功返回的ID
    * taskStatus  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'taskId' => 'string',
            'taskStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  租户虚拟机ID
    * taskId  任务下发成功返回的ID
    * taskStatus  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'taskId' => null,
        'taskStatus' => null
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
    * serverId  租户虚拟机ID
    * taskId  任务下发成功返回的ID
    * taskStatus  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'taskId' => 'task_id',
            'taskStatus' => 'task_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  租户虚拟机ID
    * taskId  任务下发成功返回的ID
    * taskStatus  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'taskId' => 'setTaskId',
            'taskStatus' => 'setTaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  租户虚拟机ID
    * taskId  任务下发成功返回的ID
    * taskStatus  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'taskId' => 'getTaskId',
            'taskStatus' => 'getTaskStatus'
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
    const TASK_STATUS_READY_RESET = 'READY_RESET';
    const TASK_STATUS_RUNNING_RESET = 'RUNNING_RESET';
    const TASK_STATUS_FAILED_RESET = 'FAILED_RESET';
    const TASK_STATUS_SUCCESS_RESET = 'SUCCESS_RESET';
    const TASK_STATUS_READY_REPLACE = 'READY_REPLACE';
    const TASK_STATUS_RUNNING_REPLACE = 'RUNNING_REPLACE';
    const TASK_STATUS_READY_UNBIND = 'READY_UNBIND';
    const TASK_STATUS_RUNNING_UNBIND = 'RUNNING_UNBIND';
    const TASK_STATUS_FAILED_UNBIND = 'FAILED_UNBIND';
    const TASK_STATUS_SUCCESS_UNBIND = 'SUCCESS_UNBIND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_READY_RESET,
            self::TASK_STATUS_RUNNING_RESET,
            self::TASK_STATUS_FAILED_RESET,
            self::TASK_STATUS_SUCCESS_RESET,
            self::TASK_STATUS_READY_REPLACE,
            self::TASK_STATUS_RUNNING_REPLACE,
            self::TASK_STATUS_READY_UNBIND,
            self::TASK_STATUS_RUNNING_UNBIND,
            self::TASK_STATUS_FAILED_UNBIND,
            self::TASK_STATUS_SUCCESS_UNBIND,
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 36)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 36)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getTaskStatusAllowableValues();
                if (!is_null($this->container['taskStatus']) && !in_array($this->container['taskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskStatus', must be one of '%s'",
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
    * Gets serverId
    *  租户虚拟机ID
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 租户虚拟机ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务下发成功返回的ID
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
    * @param string|null $taskId 任务下发成功返回的ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
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
    * @param string|null $taskStatus 密钥对正在处理的状态。 - READY_RESET 准备重置 - RUNNING_RESET 正在重置 - FAILED_RESET 重置失败 - SUCCESS_RESET 重置成功 - READY_REPLACE 准备替换 - RUNNING_REPLACE 正在替换 - FAILED_RESET 替换失败 - SUCCESS_RESET 替换成功 - READY_UNBIND 准备解绑 - RUNNING_UNBIND 正在解绑 - FAILED_UNBIND 解绑失败 - SUCCESS_UNBIND 解绑成功
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
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

