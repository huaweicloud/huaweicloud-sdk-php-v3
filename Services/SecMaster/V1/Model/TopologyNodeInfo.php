<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopologyNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopologyNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceType  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
    * actionId  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
    * actionName  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    * startTime  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
    * endTime  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    * errorMsg  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    * input  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
    * output  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    * parentInstanceId  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    * status  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    * succeed  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceType' => 'string',
            'actionId' => 'string',
            'actionName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'errorMsg' => 'string',
            'input' => 'string',
            'output' => 'string',
            'parentInstanceId' => 'string',
            'status' => 'string',
            'succeed' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceType  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
    * actionId  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
    * actionName  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    * startTime  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
    * endTime  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    * errorMsg  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    * input  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
    * output  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    * parentInstanceId  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    * status  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    * succeed  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceType' => null,
        'actionId' => null,
        'actionName' => null,
        'startTime' => null,
        'endTime' => null,
        'errorMsg' => null,
        'input' => null,
        'output' => null,
        'parentInstanceId' => null,
        'status' => null,
        'succeed' => null
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
    * instanceType  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
    * actionId  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
    * actionName  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    * startTime  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
    * endTime  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    * errorMsg  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    * input  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
    * output  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    * parentInstanceId  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    * status  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    * succeed  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceType' => 'instance_type',
            'actionId' => 'action_id',
            'actionName' => 'action_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'errorMsg' => 'error_msg',
            'input' => 'input',
            'output' => 'output',
            'parentInstanceId' => 'parent_instance_id',
            'status' => 'status',
            'succeed' => 'succeed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceType  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
    * actionId  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
    * actionName  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    * startTime  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
    * endTime  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    * errorMsg  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    * input  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
    * output  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    * parentInstanceId  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    * status  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    * succeed  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceType' => 'setInstanceType',
            'actionId' => 'setActionId',
            'actionName' => 'setActionName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'errorMsg' => 'setErrorMsg',
            'input' => 'setInput',
            'output' => 'setOutput',
            'parentInstanceId' => 'setParentInstanceId',
            'status' => 'setStatus',
            'succeed' => 'setSucceed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceType  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
    * actionId  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
    * actionName  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    * startTime  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
    * endTime  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    * errorMsg  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    * input  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
    * output  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    * parentInstanceId  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    * status  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    * succeed  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceType' => 'getInstanceType',
            'actionId' => 'getActionId',
            'actionName' => 'getActionName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'errorMsg' => 'getErrorMsg',
            'input' => 'getInput',
            'output' => 'getOutput',
            'parentInstanceId' => 'getParentInstanceId',
            'status' => 'getStatus',
            'succeed' => 'getSucceed'
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
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FAILED = 'FAILED';
    const STATUS_FINISHED = 'FINISHED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_FAILED,
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
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['parentInstanceId'] = isset($data['parentInstanceId']) ? $data['parentInstanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['succeed'] = isset($data['succeed']) ? $data['succeed'] : null;
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
            if (!is_null($this->container['actionId']) && (mb_strlen($this->container['actionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 64.";
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
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
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
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 256)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 1024)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 1024)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentInstanceId']) && (mb_strlen($this->container['parentInstanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentInstanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentInstanceId']) && (mb_strlen($this->container['parentInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'parentInstanceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
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
    * @param string|null $instanceType **参数解释**: 流程图拓扑图的节点实例类型 **取值范围**: - TASK
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
    *  **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
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
    * @param string|null $actionId **参数解释**: 流程拓扑图的节点ID **取值范围**: 不涉及
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
    *  **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
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
    * @param string|null $actionName **参数解释**:     流程拓扑图的节点名称 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
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
    * @param string|null $startTime **参数解释**:          流程图拓扑图的节点开始时间 **取值范围**: - 不涉及
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
    *  **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
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
    * @param string|null $endTime **参数解释**:          流程图拓扑图的节点结束时间 **取值范围**: - 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
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
    * @param string|null $errorMsg **参数解释**:          流程图拓扑图的节点错误信息 **取值范围**: - 不涉及
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets input
    *  **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
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
    * @param string|null $input **参数解释**:          流程图拓扑图的节点输入信息 **取值范围**: - 不涉及
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
    *  **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
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
    * @param string|null $output **参数解释**:          流程图拓扑图的节点输出信息 **取值范围**: - 不涉及
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets parentInstanceId
    *  **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
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
    * @param string|null $parentInstanceId **参数解释**:          流程图拓扑图的父实例ID **取值范围**: - 不涉及
    *
    * @return $this
    */
    public function setParentInstanceId($parentInstanceId)
    {
        $this->container['parentInstanceId'] = $parentInstanceId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
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
    * @param string|null $status **参数解释**:          流程图拓扑图的节点的状态 **取值范围**: - RUNNING 运行中 - FAILED  运行失败 - FINISHED 运行结束
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets succeed
    *  **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @return bool|null
    */
    public function getSucceed()
    {
        return $this->container['succeed'];
    }

    /**
    * Sets succeed
    *
    * @param bool|null $succeed **参数解释**:          流程图拓扑图的节点是否成功 **取值范围**: - true  成功 - false 失败
    *
    * @return $this
    */
    public function setSucceed($succeed)
    {
        $this->container['succeed'] = $succeed;
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

