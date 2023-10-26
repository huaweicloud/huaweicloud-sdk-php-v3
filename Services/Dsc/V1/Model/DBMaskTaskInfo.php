<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DBMaskTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DBMaskTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbType  DB类型
    * endTime  任务结束时间
    * executeLine  执行行数
    * id  任务ID
    * progress  执行进度
    * runStatus  任务运行状态
    * startTime  任务开始时间
    * taskTemplateId  任务模板ID
    * type  任务类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbType' => 'string',
            'endTime' => 'int',
            'executeLine' => 'int',
            'id' => 'string',
            'progress' => 'int',
            'runStatus' => 'string',
            'startTime' => 'int',
            'taskTemplateId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbType  DB类型
    * endTime  任务结束时间
    * executeLine  执行行数
    * id  任务ID
    * progress  执行进度
    * runStatus  任务运行状态
    * startTime  任务开始时间
    * taskTemplateId  任务模板ID
    * type  任务类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbType' => null,
        'endTime' => 'int64',
        'executeLine' => 'int32',
        'id' => null,
        'progress' => 'int32',
        'runStatus' => null,
        'startTime' => 'int64',
        'taskTemplateId' => null,
        'type' => null
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
    * dbType  DB类型
    * endTime  任务结束时间
    * executeLine  执行行数
    * id  任务ID
    * progress  执行进度
    * runStatus  任务运行状态
    * startTime  任务开始时间
    * taskTemplateId  任务模板ID
    * type  任务类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbType' => 'db_type',
            'endTime' => 'end_time',
            'executeLine' => 'execute_line',
            'id' => 'id',
            'progress' => 'progress',
            'runStatus' => 'run_status',
            'startTime' => 'start_time',
            'taskTemplateId' => 'task_template_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbType  DB类型
    * endTime  任务结束时间
    * executeLine  执行行数
    * id  任务ID
    * progress  执行进度
    * runStatus  任务运行状态
    * startTime  任务开始时间
    * taskTemplateId  任务模板ID
    * type  任务类型
    *
    * @var string[]
    */
    protected static $setters = [
            'dbType' => 'setDbType',
            'endTime' => 'setEndTime',
            'executeLine' => 'setExecuteLine',
            'id' => 'setId',
            'progress' => 'setProgress',
            'runStatus' => 'setRunStatus',
            'startTime' => 'setStartTime',
            'taskTemplateId' => 'setTaskTemplateId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbType  DB类型
    * endTime  任务结束时间
    * executeLine  执行行数
    * id  任务ID
    * progress  执行进度
    * runStatus  任务运行状态
    * startTime  任务开始时间
    * taskTemplateId  任务模板ID
    * type  任务类型
    *
    * @var string[]
    */
    protected static $getters = [
            'dbType' => 'getDbType',
            'endTime' => 'getEndTime',
            'executeLine' => 'getExecuteLine',
            'id' => 'getId',
            'progress' => 'getProgress',
            'runStatus' => 'getRunStatus',
            'startTime' => 'getStartTime',
            'taskTemplateId' => 'getTaskTemplateId',
            'type' => 'getType'
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
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executeLine'] = isset($data['executeLine']) ? $data['executeLine'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskTemplateId'] = isset($data['taskTemplateId']) ? $data['taskTemplateId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets dbType
    *  DB类型
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType DB类型
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
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
    * Gets executeLine
    *  执行行数
    *
    * @return int|null
    */
    public function getExecuteLine()
    {
        return $this->container['executeLine'];
    }

    /**
    * Sets executeLine
    *
    * @param int|null $executeLine 执行行数
    *
    * @return $this
    */
    public function setExecuteLine($executeLine)
    {
        $this->container['executeLine'] = $executeLine;
        return $this;
    }

    /**
    * Gets id
    *  任务ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets progress
    *  执行进度
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 执行进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets runStatus
    *  任务运行状态
    *
    * @return string|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param string|null $runStatus 任务运行状态
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
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
    * Gets taskTemplateId
    *  任务模板ID
    *
    * @return string|null
    */
    public function getTaskTemplateId()
    {
        return $this->container['taskTemplateId'];
    }

    /**
    * Sets taskTemplateId
    *
    * @param string|null $taskTemplateId 任务模板ID
    *
    * @return $this
    */
    public function setTaskTemplateId($taskTemplateId)
    {
        $this->container['taskTemplateId'] = $taskTemplateId;
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

