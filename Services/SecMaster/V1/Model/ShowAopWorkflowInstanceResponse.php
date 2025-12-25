<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAopWorkflowInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAopWorkflowInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * name  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    * workflow  workflow
    * dataclass  dataclass
    * playbook  playbook
    * triggerType  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    * status  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    * startTime  **参数解释**: 开始时间 **约束限制**: 不涉及
    * endTime  **参数解释**: 结束时间 **约束限制**: 不涉及
    * retryCount  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    * defenseId  **参数解释**: 防线ID **约束限制**: 不涉及
    * dataobjectId  **参数解释**: dataobject的ID **约束限制**: 不涉及
    * topology  topology
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'workflow' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailWorkflow',
            'dataclass' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailDataclass',
            'playbook' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailPlaybook',
            'triggerType' => 'string',
            'status' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'retryCount' => 'int',
            'defenseId' => 'string',
            'dataobjectId' => 'string',
            'topology' => '\HuaweiCloud\SDK\SecMaster\V1\Model\WorkflowInstanceTopology'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * name  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    * workflow  workflow
    * dataclass  dataclass
    * playbook  playbook
    * triggerType  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    * status  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    * startTime  **参数解释**: 开始时间 **约束限制**: 不涉及
    * endTime  **参数解释**: 结束时间 **约束限制**: 不涉及
    * retryCount  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    * defenseId  **参数解释**: 防线ID **约束限制**: 不涉及
    * dataobjectId  **参数解释**: dataobject的ID **约束限制**: 不涉及
    * topology  topology
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'workflow' => null,
        'dataclass' => null,
        'playbook' => null,
        'triggerType' => null,
        'status' => null,
        'startTime' => null,
        'endTime' => null,
        'retryCount' => 'int32',
        'defenseId' => null,
        'dataobjectId' => null,
        'topology' => null
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
    * id  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * name  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    * workflow  workflow
    * dataclass  dataclass
    * playbook  playbook
    * triggerType  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    * status  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    * startTime  **参数解释**: 开始时间 **约束限制**: 不涉及
    * endTime  **参数解释**: 结束时间 **约束限制**: 不涉及
    * retryCount  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    * defenseId  **参数解释**: 防线ID **约束限制**: 不涉及
    * dataobjectId  **参数解释**: dataobject的ID **约束限制**: 不涉及
    * topology  topology
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'workflow' => 'workflow',
            'dataclass' => 'dataclass',
            'playbook' => 'playbook',
            'triggerType' => 'trigger_type',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'retryCount' => 'retry_count',
            'defenseId' => 'defense_id',
            'dataobjectId' => 'dataobject_id',
            'topology' => 'topology'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * name  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    * workflow  workflow
    * dataclass  dataclass
    * playbook  playbook
    * triggerType  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    * status  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    * startTime  **参数解释**: 开始时间 **约束限制**: 不涉及
    * endTime  **参数解释**: 结束时间 **约束限制**: 不涉及
    * retryCount  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    * defenseId  **参数解释**: 防线ID **约束限制**: 不涉及
    * dataobjectId  **参数解释**: dataobject的ID **约束限制**: 不涉及
    * topology  topology
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'workflow' => 'setWorkflow',
            'dataclass' => 'setDataclass',
            'playbook' => 'setPlaybook',
            'triggerType' => 'setTriggerType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'retryCount' => 'setRetryCount',
            'defenseId' => 'setDefenseId',
            'dataobjectId' => 'setDataobjectId',
            'topology' => 'setTopology'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 流程实例的ID **约束限制**: 不涉及
    * name  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    * workflow  workflow
    * dataclass  dataclass
    * playbook  playbook
    * triggerType  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    * status  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    * startTime  **参数解释**: 开始时间 **约束限制**: 不涉及
    * endTime  **参数解释**: 结束时间 **约束限制**: 不涉及
    * retryCount  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    * defenseId  **参数解释**: 防线ID **约束限制**: 不涉及
    * dataobjectId  **参数解释**: dataobject的ID **约束限制**: 不涉及
    * topology  topology
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'workflow' => 'getWorkflow',
            'dataclass' => 'getDataclass',
            'playbook' => 'getPlaybook',
            'triggerType' => 'getTriggerType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'retryCount' => 'getRetryCount',
            'defenseId' => 'getDefenseId',
            'dataobjectId' => 'getDataobjectId',
            'topology' => 'getTopology'
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
    const STATUS_RETRYING = 'RETRYING';
    const STATUS_TERMINATING = 'TERMINATING';
    const STATUS_TERMINATED = 'TERMINATED';
    

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
            self::STATUS_RETRYING,
            self::STATUS_TERMINATING,
            self::STATUS_TERMINATED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['dataclass'] = isset($data['dataclass']) ? $data['dataclass'] : null;
        $this->container['playbook'] = isset($data['playbook']) ? $data['playbook'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['retryCount'] = isset($data['retryCount']) ? $data['retryCount'] : null;
        $this->container['defenseId'] = isset($data['defenseId']) ? $data['defenseId'] : null;
        $this->container['dataobjectId'] = isset($data['dataobjectId']) ? $data['dataobjectId'] : null;
        $this->container['topology'] = isset($data['topology']) ? $data['topology'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 256)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retryCount']) && ($this->container['retryCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'retryCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['retryCount']) && ($this->container['retryCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'retryCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defenseId']) && (mb_strlen($this->container['defenseId']) > 256)) {
                $invalidProperties[] = "invalid value for 'defenseId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['defenseId']) && (mb_strlen($this->container['defenseId']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dataobjectId']) && (mb_strlen($this->container['dataobjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'dataobjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['dataobjectId']) && (mb_strlen($this->container['dataobjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dataobjectId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 流程实例的ID **约束限制**: 不涉及
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
    * @param string|null $id **参数解释**: 流程实例的ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**: 流程实例的名字 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets workflow
    *  workflow
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailWorkflow|null
    */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
    * Sets workflow
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailWorkflow|null $workflow workflow
    *
    * @return $this
    */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;
        return $this;
    }

    /**
    * Gets dataclass
    *  dataclass
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailDataclass|null
    */
    public function getDataclass()
    {
        return $this->container['dataclass'];
    }

    /**
    * Sets dataclass
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailDataclass|null $dataclass dataclass
    *
    * @return $this
    */
    public function setDataclass($dataclass)
    {
        $this->container['dataclass'] = $dataclass;
        return $this;
    }

    /**
    * Gets playbook
    *  playbook
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailPlaybook|null
    */
    public function getPlaybook()
    {
        return $this->container['playbook'];
    }

    /**
    * Sets playbook
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AopworkflowInstanceDetailPlaybook|null $playbook playbook
    *
    * @return $this
    */
    public function setPlaybook($playbook)
    {
        $this->container['playbook'] = $playbook;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
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
    * @param string|null $triggerType **参数解释**:          触发方式 **取值范围**: - DEBUG   调试触发 - TIMER   定时触发 - EVENT   事件触发 - MANUAL  手动触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
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
    * @param string|null $status **参数解释**:          流程实例的状态 **取值范围**: - RUNNING   运行中 - FAILED    运行失败 - FINISHED  运行结束 - RETRYING  重试中 - TERMINATING 终止中 - TERMINATED  已终止
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 开始时间 **约束限制**: 不涉及
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
    * @param string|null $startTime **参数解释**: 开始时间 **约束限制**: 不涉及
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
    *  **参数解释**: 结束时间 **约束限制**: 不涉及
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
    * @param string|null $endTime **参数解释**: 结束时间 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets retryCount
    *  **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    *
    * @return int|null
    */
    public function getRetryCount()
    {
        return $this->container['retryCount'];
    }

    /**
    * Sets retryCount
    *
    * @param int|null $retryCount **参数解释**: 流程实例重试次数 **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setRetryCount($retryCount)
    {
        $this->container['retryCount'] = $retryCount;
        return $this;
    }

    /**
    * Gets defenseId
    *  **参数解释**: 防线ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getDefenseId()
    {
        return $this->container['defenseId'];
    }

    /**
    * Sets defenseId
    *
    * @param string|null $defenseId **参数解释**: 防线ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setDefenseId($defenseId)
    {
        $this->container['defenseId'] = $defenseId;
        return $this;
    }

    /**
    * Gets dataobjectId
    *  **参数解释**: dataobject的ID **约束限制**: 不涉及
    *
    * @return string|null
    */
    public function getDataobjectId()
    {
        return $this->container['dataobjectId'];
    }

    /**
    * Sets dataobjectId
    *
    * @param string|null $dataobjectId **参数解释**: dataobject的ID **约束限制**: 不涉及
    *
    * @return $this
    */
    public function setDataobjectId($dataobjectId)
    {
        $this->container['dataobjectId'] = $dataobjectId;
        return $this;
    }

    /**
    * Gets topology
    *  topology
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\WorkflowInstanceTopology|null
    */
    public function getTopology()
    {
        return $this->container['topology'];
    }

    /**
    * Sets topology
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\WorkflowInstanceTopology|null $topology topology
    *
    * @return $this
    */
    public function setTopology($topology)
    {
        $this->container['topology'] = $topology;
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

