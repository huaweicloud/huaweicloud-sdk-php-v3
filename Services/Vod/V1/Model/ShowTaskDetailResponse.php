<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务Id
    * taskType  任务类型
    * status  任务状态，包含就绪，处理中，成功，失败，已取消
    * errorCode  错误码
    * errorMsg  错误信息
    * createTime  任务开始时间
    * startTime  任务开始处理时间，多个任务则是第一个任务的开始时间
    * endTime  任务处理结束时间，多个任务则是最后一个任务的结束时间
    * workflowTask  workflowTask
    * editMediaTask  editMediaTask
    * sessionContext  用户自定义数据
    * callbackUrl  客户回调地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskType' => 'string',
            'status' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'createTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'workflowTask' => '\HuaweiCloud\SDK\Vod\V1\Model\WorkflowTask',
            'editMediaTask' => '\HuaweiCloud\SDK\Vod\V1\Model\EditMediaTask',
            'sessionContext' => 'string',
            'callbackUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务Id
    * taskType  任务类型
    * status  任务状态，包含就绪，处理中，成功，失败，已取消
    * errorCode  错误码
    * errorMsg  错误信息
    * createTime  任务开始时间
    * startTime  任务开始处理时间，多个任务则是第一个任务的开始时间
    * endTime  任务处理结束时间，多个任务则是最后一个任务的结束时间
    * workflowTask  workflowTask
    * editMediaTask  editMediaTask
    * sessionContext  用户自定义数据
    * callbackUrl  客户回调地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskType' => null,
        'status' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'createTime' => null,
        'startTime' => null,
        'endTime' => null,
        'workflowTask' => null,
        'editMediaTask' => null,
        'sessionContext' => null,
        'callbackUrl' => null
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
    * taskId  任务Id
    * taskType  任务类型
    * status  任务状态，包含就绪，处理中，成功，失败，已取消
    * errorCode  错误码
    * errorMsg  错误信息
    * createTime  任务开始时间
    * startTime  任务开始处理时间，多个任务则是第一个任务的开始时间
    * endTime  任务处理结束时间，多个任务则是最后一个任务的结束时间
    * workflowTask  workflowTask
    * editMediaTask  editMediaTask
    * sessionContext  用户自定义数据
    * callbackUrl  客户回调地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'status' => 'status',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'workflowTask' => 'workflow_task',
            'editMediaTask' => 'edit_media_task',
            'sessionContext' => 'session_context',
            'callbackUrl' => 'callback_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务Id
    * taskType  任务类型
    * status  任务状态，包含就绪，处理中，成功，失败，已取消
    * errorCode  错误码
    * errorMsg  错误信息
    * createTime  任务开始时间
    * startTime  任务开始处理时间，多个任务则是第一个任务的开始时间
    * endTime  任务处理结束时间，多个任务则是最后一个任务的结束时间
    * workflowTask  workflowTask
    * editMediaTask  editMediaTask
    * sessionContext  用户自定义数据
    * callbackUrl  客户回调地址
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'status' => 'setStatus',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'workflowTask' => 'setWorkflowTask',
            'editMediaTask' => 'setEditMediaTask',
            'sessionContext' => 'setSessionContext',
            'callbackUrl' => 'setCallbackUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务Id
    * taskType  任务类型
    * status  任务状态，包含就绪，处理中，成功，失败，已取消
    * errorCode  错误码
    * errorMsg  错误信息
    * createTime  任务开始时间
    * startTime  任务开始处理时间，多个任务则是第一个任务的开始时间
    * endTime  任务处理结束时间，多个任务则是最后一个任务的结束时间
    * workflowTask  workflowTask
    * editMediaTask  editMediaTask
    * sessionContext  用户自定义数据
    * callbackUrl  客户回调地址
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType',
            'status' => 'getStatus',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'workflowTask' => 'getWorkflowTask',
            'editMediaTask' => 'getEditMediaTask',
            'sessionContext' => 'getSessionContext',
            'callbackUrl' => 'getCallbackUrl'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['workflowTask'] = isset($data['workflowTask']) ? $data['workflowTask'] : null;
        $this->container['editMediaTask'] = isset($data['editMediaTask']) ? $data['editMediaTask'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
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
    * Gets taskId
    *  任务Id
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
    * @param string|null $taskId 任务Id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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
    * Gets status
    *  任务状态，包含就绪，处理中，成功，失败，已取消
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
    * @param string|null $status 任务状态，包含就绪，处理中，成功，失败，已取消
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets createTime
    *  任务开始时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务开始时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始处理时间，多个任务则是第一个任务的开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始处理时间，多个任务则是第一个任务的开始时间
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
    *  任务处理结束时间，多个任务则是最后一个任务的结束时间
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
    * @param string|null $endTime 任务处理结束时间，多个任务则是最后一个任务的结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets workflowTask
    *  workflowTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\WorkflowTask|null
    */
    public function getWorkflowTask()
    {
        return $this->container['workflowTask'];
    }

    /**
    * Sets workflowTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\WorkflowTask|null $workflowTask workflowTask
    *
    * @return $this
    */
    public function setWorkflowTask($workflowTask)
    {
        $this->container['workflowTask'] = $workflowTask;
        return $this;
    }

    /**
    * Gets editMediaTask
    *  editMediaTask
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\EditMediaTask|null
    */
    public function getEditMediaTask()
    {
        return $this->container['editMediaTask'];
    }

    /**
    * Sets editMediaTask
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\EditMediaTask|null $editMediaTask editMediaTask
    *
    * @return $this
    */
    public function setEditMediaTask($editMediaTask)
    {
        $this->container['editMediaTask'] = $editMediaTask;
        return $this;
    }

    /**
    * Gets sessionContext
    *  用户自定义数据
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 用户自定义数据
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  客户回调地址
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 客户回调地址
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
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

