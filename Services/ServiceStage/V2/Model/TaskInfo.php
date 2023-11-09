<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间。
    * lastHealthCheck  健康检查时间。
    * messages  消息。
    * ownerId  创建用户ID。
    * taskId  任务ID。
    * taskIndex  任务序号。
    * taskName  任务名称。
    * taskStatus  任务状态。
    * taskType  任务类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'lastHealthCheck' => 'string',
            'messages' => 'string',
            'ownerId' => 'string',
            'taskId' => 'string',
            'taskIndex' => 'int',
            'taskName' => 'string',
            'taskStatus' => 'string',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间。
    * lastHealthCheck  健康检查时间。
    * messages  消息。
    * ownerId  创建用户ID。
    * taskId  任务ID。
    * taskIndex  任务序号。
    * taskName  任务名称。
    * taskStatus  任务状态。
    * taskType  任务类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'lastHealthCheck' => null,
        'messages' => null,
        'ownerId' => null,
        'taskId' => null,
        'taskIndex' => null,
        'taskName' => null,
        'taskStatus' => null,
        'taskType' => null
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
    * createdAt  创建时间。
    * lastHealthCheck  健康检查时间。
    * messages  消息。
    * ownerId  创建用户ID。
    * taskId  任务ID。
    * taskIndex  任务序号。
    * taskName  任务名称。
    * taskStatus  任务状态。
    * taskType  任务类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'CREATED_AT',
            'lastHealthCheck' => 'LAST_HEALTH_CHECK',
            'messages' => 'MESSAGES',
            'ownerId' => 'OWNER_ID',
            'taskId' => 'TASK_ID',
            'taskIndex' => 'TASK_INDEX',
            'taskName' => 'TASK_NAME',
            'taskStatus' => 'TASK_STATUS',
            'taskType' => 'TASK_TYPE'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间。
    * lastHealthCheck  健康检查时间。
    * messages  消息。
    * ownerId  创建用户ID。
    * taskId  任务ID。
    * taskIndex  任务序号。
    * taskName  任务名称。
    * taskStatus  任务状态。
    * taskType  任务类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'lastHealthCheck' => 'setLastHealthCheck',
            'messages' => 'setMessages',
            'ownerId' => 'setOwnerId',
            'taskId' => 'setTaskId',
            'taskIndex' => 'setTaskIndex',
            'taskName' => 'setTaskName',
            'taskStatus' => 'setTaskStatus',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间。
    * lastHealthCheck  健康检查时间。
    * messages  消息。
    * ownerId  创建用户ID。
    * taskId  任务ID。
    * taskIndex  任务序号。
    * taskName  任务名称。
    * taskStatus  任务状态。
    * taskType  任务类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'lastHealthCheck' => 'getLastHealthCheck',
            'messages' => 'getMessages',
            'ownerId' => 'getOwnerId',
            'taskId' => 'getTaskId',
            'taskIndex' => 'getTaskIndex',
            'taskName' => 'getTaskName',
            'taskStatus' => 'getTaskStatus',
            'taskType' => 'getTaskType'
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
    const TASK_STATUS_RUNNING = 'RUNNING';
    const TASK_STATUS_SKIPPED = 'SKIPPED';
    const TASK_STATUS_FAILED = 'FAILED';
    const TASK_STATUS_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskStatusAllowableValues()
    {
        return [
            self::TASK_STATUS_RUNNING,
            self::TASK_STATUS_SKIPPED,
            self::TASK_STATUS_FAILED,
            self::TASK_STATUS_SUCCEEDED,
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['lastHealthCheck'] = isset($data['lastHealthCheck']) ? $data['lastHealthCheck'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskIndex'] = isset($data['taskIndex']) ? $data['taskIndex'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
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
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets lastHealthCheck
    *  健康检查时间。
    *
    * @return string|null
    */
    public function getLastHealthCheck()
    {
        return $this->container['lastHealthCheck'];
    }

    /**
    * Sets lastHealthCheck
    *
    * @param string|null $lastHealthCheck 健康检查时间。
    *
    * @return $this
    */
    public function setLastHealthCheck($lastHealthCheck)
    {
        $this->container['lastHealthCheck'] = $lastHealthCheck;
        return $this;
    }

    /**
    * Gets messages
    *  消息。
    *
    * @return string|null
    */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
    * Sets messages
    *
    * @param string|null $messages 消息。
    *
    * @return $this
    */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;
        return $this;
    }

    /**
    * Gets ownerId
    *  创建用户ID。
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 创建用户ID。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID。
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
    * @param string|null $taskId 任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskIndex
    *  任务序号。
    *
    * @return int|null
    */
    public function getTaskIndex()
    {
        return $this->container['taskIndex'];
    }

    /**
    * Sets taskIndex
    *
    * @param int|null $taskIndex 任务序号。
    *
    * @return $this
    */
    public function setTaskIndex($taskIndex)
    {
        $this->container['taskIndex'] = $taskIndex;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态。
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
    * @param string|null $taskStatus 任务状态。
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型。
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型。
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
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

