<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  资源
    * taskName  任务名称
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * taskType  任务类型
    * operator  操作人
    * totalCount  导入总数
    * successCount  成功数
    * failureCount  失败数
    * taskStatus  任务状态
    * taskId  任务ID
    * userId  操作用户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'string',
            'taskName' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'taskType' => 'string',
            'operator' => 'string',
            'totalCount' => 'int',
            'successCount' => 'int',
            'failureCount' => 'int',
            'taskStatus' => 'string',
            'taskId' => 'string',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  资源
    * taskName  任务名称
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * taskType  任务类型
    * operator  操作人
    * totalCount  导入总数
    * successCount  成功数
    * failureCount  失败数
    * taskStatus  任务状态
    * taskId  任务ID
    * userId  操作用户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'taskName' => null,
        'beginTime' => null,
        'endTime' => null,
        'taskType' => null,
        'operator' => null,
        'totalCount' => 'int32',
        'successCount' => 'int32',
        'failureCount' => 'int32',
        'taskStatus' => null,
        'taskId' => null,
        'userId' => null
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
    * resource  资源
    * taskName  任务名称
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * taskType  任务类型
    * operator  操作人
    * totalCount  导入总数
    * successCount  成功数
    * failureCount  失败数
    * taskStatus  任务状态
    * taskId  任务ID
    * userId  操作用户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'taskName' => 'task_name',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'taskType' => 'task_type',
            'operator' => 'operator',
            'totalCount' => 'total_count',
            'successCount' => 'success_count',
            'failureCount' => 'failure_count',
            'taskStatus' => 'task_status',
            'taskId' => 'task_id',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  资源
    * taskName  任务名称
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * taskType  任务类型
    * operator  操作人
    * totalCount  导入总数
    * successCount  成功数
    * failureCount  失败数
    * taskStatus  任务状态
    * taskId  任务ID
    * userId  操作用户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'taskName' => 'setTaskName',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'taskType' => 'setTaskType',
            'operator' => 'setOperator',
            'totalCount' => 'setTotalCount',
            'successCount' => 'setSuccessCount',
            'failureCount' => 'setFailureCount',
            'taskStatus' => 'setTaskStatus',
            'taskId' => 'setTaskId',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  资源
    * taskName  任务名称
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * taskType  任务类型
    * operator  操作人
    * totalCount  导入总数
    * successCount  成功数
    * failureCount  失败数
    * taskStatus  任务状态
    * taskId  任务ID
    * userId  操作用户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'taskName' => 'getTaskName',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'taskType' => 'getTaskType',
            'operator' => 'getOperator',
            'totalCount' => 'getTotalCount',
            'successCount' => 'getSuccessCount',
            'failureCount' => 'getFailureCount',
            'taskStatus' => 'getTaskStatus',
            'taskId' => 'getTaskId',
            'userId' => 'getUserId'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['failureCount'] = isset($data['failureCount']) ? $data['failureCount'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resource']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['resource'])) {
                $invalidProperties[] = "invalid value for 'resource', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 256)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successCount']) && ($this->container['successCount'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'successCount', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['successCount']) && ($this->container['successCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'successCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failureCount']) && ($this->container['failureCount'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'failureCount', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['failureCount']) && ($this->container['failureCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'failureCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 256)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
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
    * Gets resource
    *  资源
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource 资源
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称
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
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务开始时间
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
    * @param string|null $beginTime 任务开始时间
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
    *  任务结束时间
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
    * @param string|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
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
    * @param string|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets operator
    *  操作人
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets totalCount
    *  导入总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 导入总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets successCount
    *  成功数
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount 成功数
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets failureCount
    *  失败数
    *
    * @return int|null
    */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
    * Sets failureCount
    *
    * @param int|null $failureCount 失败数
    *
    * @return $this
    */
    public function setFailureCount($failureCount)
    {
        $this->container['failureCount'] = $failureCount;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态
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
    * @param string|null $taskStatus 任务状态
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets userId
    *  操作用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 操作用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

