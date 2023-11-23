<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEngineJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEngineJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * engineId  任务所属引擎ID
    * type  任务类型
    * description  任务描述
    * status  任务状态
    * scheduling  任务是否正在执行，0表示不在执行，1表示执行中
    * createUser  任务创建者
    * startTime  任务开始时间
    * endTime  任务结束时间
    * context  任务执行上下文
    * tasks  任务包含的处理阶段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'engineId' => 'string',
            'type' => 'string',
            'description' => 'string',
            'status' => 'string',
            'scheduling' => 'int',
            'createUser' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'context' => 'string',
            'tasks' => '\HuaweiCloud\SDK\Cse\V1\Model\TaskSteps[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * engineId  任务所属引擎ID
    * type  任务类型
    * description  任务描述
    * status  任务状态
    * scheduling  任务是否正在执行，0表示不在执行，1表示执行中
    * createUser  任务创建者
    * startTime  任务开始时间
    * endTime  任务结束时间
    * context  任务执行上下文
    * tasks  任务包含的处理阶段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'engineId' => null,
        'type' => null,
        'description' => null,
        'status' => null,
        'scheduling' => 'int32',
        'createUser' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'context' => null,
        'tasks' => null
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
    * id  任务ID
    * engineId  任务所属引擎ID
    * type  任务类型
    * description  任务描述
    * status  任务状态
    * scheduling  任务是否正在执行，0表示不在执行，1表示执行中
    * createUser  任务创建者
    * startTime  任务开始时间
    * endTime  任务结束时间
    * context  任务执行上下文
    * tasks  任务包含的处理阶段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'engineId' => 'engineId',
            'type' => 'type',
            'description' => 'description',
            'status' => 'status',
            'scheduling' => 'scheduling',
            'createUser' => 'createUser',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'context' => 'context',
            'tasks' => 'tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * engineId  任务所属引擎ID
    * type  任务类型
    * description  任务描述
    * status  任务状态
    * scheduling  任务是否正在执行，0表示不在执行，1表示执行中
    * createUser  任务创建者
    * startTime  任务开始时间
    * endTime  任务结束时间
    * context  任务执行上下文
    * tasks  任务包含的处理阶段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'engineId' => 'setEngineId',
            'type' => 'setType',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'scheduling' => 'setScheduling',
            'createUser' => 'setCreateUser',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'context' => 'setContext',
            'tasks' => 'setTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * engineId  任务所属引擎ID
    * type  任务类型
    * description  任务描述
    * status  任务状态
    * scheduling  任务是否正在执行，0表示不在执行，1表示执行中
    * createUser  任务创建者
    * startTime  任务开始时间
    * endTime  任务结束时间
    * context  任务执行上下文
    * tasks  任务包含的处理阶段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'engineId' => 'getEngineId',
            'type' => 'getType',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'scheduling' => 'getScheduling',
            'createUser' => 'getCreateUser',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'context' => 'getContext',
            'tasks' => 'getTasks'
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
    const TYPE_CREATE = 'Create';
    const TYPE_DELETE = 'Delete';
    const TYPE_UPGRADE = 'Upgrade';
    const TYPE_MODIFY = 'Modify';
    const STATUS_INIT = 'Init';
    const STATUS_EXECUTING = 'Executing';
    const STATUS_ERROR = 'Error';
    const STATUS_TIMEOUT = 'Timeout';
    const STATUS_FINISHED = 'Finished';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CREATE,
            self::TYPE_DELETE,
            self::TYPE_UPGRADE,
            self::TYPE_MODIFY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_EXECUTING,
            self::STATUS_ERROR,
            self::STATUS_TIMEOUT,
            self::STATUS_FINISHED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scheduling'] = isset($data['scheduling']) ? $data['scheduling'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  任务ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets engineId
    *  任务所属引擎ID
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 任务所属引擎ID
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets type
    *  任务类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  任务描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 任务描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets scheduling
    *  任务是否正在执行，0表示不在执行，1表示执行中
    *
    * @return int|null
    */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
    * Sets scheduling
    *
    * @param int|null $scheduling 任务是否正在执行，0表示不在执行，1表示执行中
    *
    * @return $this
    */
    public function setScheduling($scheduling)
    {
        $this->container['scheduling'] = $scheduling;
        return $this;
    }

    /**
    * Gets createUser
    *  任务创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 任务创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间
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
    * @param int|null $startTime 任务开始时间
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
    *  任务结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets context
    *  任务执行上下文
    *
    * @return string|null
    */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
    * Sets context
    *
    * @param string|null $context 任务执行上下文
    *
    * @return $this
    */
    public function setContext($context)
    {
        $this->container['context'] = $context;
        return $this;
    }

    /**
    * Gets tasks
    *  任务包含的处理阶段
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\TaskSteps[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\TaskSteps[]|null $tasks 任务包含的处理阶段
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
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

