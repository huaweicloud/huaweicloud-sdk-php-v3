<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    * actionId  流程ID
    * actionName  流程名称
    * instanceId  实例ID
    * parentInstanceId  父节点实例ID
    * logLevel  日志级别
    * input  输入
    * output  输出
    * errorMsg  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * status  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'actionId' => 'string',
            'actionName' => 'string',
            'instanceId' => 'string',
            'parentInstanceId' => 'string',
            'logLevel' => 'string',
            'input' => 'string',
            'output' => 'string',
            'errorMsg' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'triggerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    * actionId  流程ID
    * actionName  流程名称
    * instanceId  实例ID
    * parentInstanceId  父节点实例ID
    * logLevel  日志级别
    * input  输入
    * output  输出
    * errorMsg  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * status  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'actionId' => null,
        'actionName' => null,
        'instanceId' => null,
        'parentInstanceId' => null,
        'logLevel' => null,
        'input' => null,
        'output' => null,
        'errorMsg' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'triggerType' => null
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
    * instanceType  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    * actionId  流程ID
    * actionName  流程名称
    * instanceId  实例ID
    * parentInstanceId  父节点实例ID
    * logLevel  日志级别
    * input  输入
    * output  输出
    * errorMsg  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * status  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'actionId' => 'action_id',
            'actionName' => 'action_name',
            'instanceId' => 'instance_id',
            'parentInstanceId' => 'parent_instance_id',
            'logLevel' => 'log_level',
            'input' => 'input',
            'output' => 'output',
            'errorMsg' => 'error_msg',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'triggerType' => 'trigger_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    * actionId  流程ID
    * actionName  流程名称
    * instanceId  实例ID
    * parentInstanceId  父节点实例ID
    * logLevel  日志级别
    * input  输入
    * output  输出
    * errorMsg  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * status  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'actionId' => 'setActionId',
            'actionName' => 'setActionName',
            'instanceId' => 'setInstanceId',
            'parentInstanceId' => 'setParentInstanceId',
            'logLevel' => 'setLogLevel',
            'input' => 'setInput',
            'output' => 'setOutput',
            'errorMsg' => 'setErrorMsg',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'triggerType' => 'setTriggerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    * actionId  流程ID
    * actionName  流程名称
    * instanceId  实例ID
    * parentInstanceId  父节点实例ID
    * logLevel  日志级别
    * input  输入
    * output  输出
    * errorMsg  错误信息
    * startTime  开始时间
    * endTime  结束时间
    * status  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    * triggerType  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'actionId' => 'getActionId',
            'actionName' => 'getActionName',
            'instanceId' => 'getInstanceId',
            'parentInstanceId' => 'getParentInstanceId',
            'logLevel' => 'getLogLevel',
            'input' => 'getInput',
            'output' => 'getOutput',
            'errorMsg' => 'getErrorMsg',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'triggerType' => 'getTriggerType'
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['parentInstanceId'] = isset($data['parentInstanceId']) ? $data['parentInstanceId'] : null;
        $this->container['logLevel'] = isset($data['logLevel']) ? $data['logLevel'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 1028)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 1028)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentInstanceId']) && (mb_strlen($this->container['parentInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentInstanceId']) && (mb_strlen($this->container['parentInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logLevel']) && (mb_strlen($this->container['logLevel']) > 1028)) {
                $invalidProperties[] = "invalid value for 'logLevel', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['logLevel']) && (mb_strlen($this->container['logLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'logLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 64)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 1028)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 64)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 1028)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 1028)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 1028)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
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
    * Gets instanceType
    *  实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型（AOP_WORKFLOW--流程, SCRIPT--脚本, PLAYBOOK--剧本）
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets actionId
    *  流程ID
    *
    * @return string|null
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string|null $actionId 流程ID
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets actionName
    *  流程名称
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName 流程名称
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets parentInstanceId
    *  父节点实例ID
    *
    * @return string|null
    */
    public function getParentInstanceId()
    {
        return $this->container['parentInstanceId'];
    }

    /**
    * Sets parentInstanceId
    *
    * @param string|null $parentInstanceId 父节点实例ID
    *
    * @return $this
    */
    public function setParentInstanceId($parentInstanceId)
    {
        $this->container['parentInstanceId'] = $parentInstanceId;
        return $this;
    }

    /**
    * Gets logLevel
    *  日志级别
    *
    * @return string|null
    */
    public function getLogLevel()
    {
        return $this->container['logLevel'];
    }

    /**
    * Sets logLevel
    *
    * @param string|null $logLevel 日志级别
    *
    * @return $this
    */
    public function setLogLevel($logLevel)
    {
        $this->container['logLevel'] = $logLevel;
        return $this;
    }

    /**
    * Gets input
    *  输入
    *
    * @return string|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string|null $input 输入
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  输出
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output 输出
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
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
    *  结束时间
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
    * @param string|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
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
    * @param string|null $status 状态。(RUNNING--运行中、FINISHED--成功、FAILED--失败、RETRYING--重试中、TERMINATING--终止中、TERMINATED--已终止)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型. TIMER--定时触发, EVENT--事件触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
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

