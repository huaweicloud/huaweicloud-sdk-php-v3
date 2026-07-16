<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecoverRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecoverRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recoverStartAt  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    * recoverEndAt  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * recover  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * faultScenario  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    * reason  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    * relatedTask  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    * recoverResult  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recoverStartAt' => 'int',
            'recoverEndAt' => 'int',
            'recover' => 'string',
            'faultScenario' => 'string',
            'reason' => 'string',
            'relatedTask' => 'string',
            'recoverResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recoverStartAt  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    * recoverEndAt  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * recover  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * faultScenario  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    * reason  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    * relatedTask  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    * recoverResult  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recoverStartAt' => 'int64',
        'recoverEndAt' => 'int64',
        'recover' => null,
        'faultScenario' => null,
        'reason' => null,
        'relatedTask' => null,
        'recoverResult' => null
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
    * recoverStartAt  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    * recoverEndAt  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * recover  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * faultScenario  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    * reason  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    * relatedTask  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    * recoverResult  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recoverStartAt' => 'recover_start_at',
            'recoverEndAt' => 'recover_end_at',
            'recover' => 'recover',
            'faultScenario' => 'fault_scenario',
            'reason' => 'reason',
            'relatedTask' => 'related_task',
            'recoverResult' => 'recover_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recoverStartAt  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    * recoverEndAt  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * recover  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * faultScenario  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    * reason  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    * relatedTask  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    * recoverResult  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @var string[]
    */
    protected static $setters = [
            'recoverStartAt' => 'setRecoverStartAt',
            'recoverEndAt' => 'setRecoverEndAt',
            'recover' => 'setRecover',
            'faultScenario' => 'setFaultScenario',
            'reason' => 'setReason',
            'relatedTask' => 'setRelatedTask',
            'recoverResult' => 'setRecoverResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recoverStartAt  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    * recoverEndAt  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * recover  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * faultScenario  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    * reason  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    * relatedTask  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    * recoverResult  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @var string[]
    */
    protected static $getters = [
            'recoverStartAt' => 'getRecoverStartAt',
            'recoverEndAt' => 'getRecoverEndAt',
            'recover' => 'getRecover',
            'faultScenario' => 'getFaultScenario',
            'reason' => 'getReason',
            'relatedTask' => 'getRelatedTask',
            'recoverResult' => 'getRecoverResult'
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
        $this->container['recoverStartAt'] = isset($data['recoverStartAt']) ? $data['recoverStartAt'] : null;
        $this->container['recoverEndAt'] = isset($data['recoverEndAt']) ? $data['recoverEndAt'] : null;
        $this->container['recover'] = isset($data['recover']) ? $data['recover'] : null;
        $this->container['faultScenario'] = isset($data['faultScenario']) ? $data['faultScenario'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['relatedTask'] = isset($data['relatedTask']) ? $data['relatedTask'] : null;
        $this->container['recoverResult'] = isset($data['recoverResult']) ? $data['recoverResult'] : null;
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
    * Gets recoverStartAt
    *  **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getRecoverStartAt()
    {
        return $this->container['recoverStartAt'];
    }

    /**
    * Sets recoverStartAt
    *
    * @param int|null $recoverStartAt **参数描述**：本次故障容忍策略开始执行时间的unix时间戳，单位为秒(s)，同时也是故障发生时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRecoverStartAt($recoverStartAt)
    {
        $this->container['recoverStartAt'] = $recoverStartAt;
        return $this;
    }

    /**
    * Gets recoverEndAt
    *  **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getRecoverEndAt()
    {
        return $this->container['recoverEndAt'];
    }

    /**
    * Sets recoverEndAt
    *
    * @param int|null $recoverEndAt **参数描述**：本次故障容忍策略结束时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRecoverEndAt($recoverEndAt)
    {
        $this->container['recoverEndAt'] = $recoverEndAt;
        return $this;
    }

    /**
    * Gets recover
    *  **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    *
    * @return string|null
    */
    public function getRecover()
    {
        return $this->container['recover'];
    }

    /**
    * Sets recover
    *
    * @param string|null $recover **参数描述**：本次故障容忍策略。 **取值范围**：枚举值如下： - npu_step_retry: Step重计算 - npu_proc_restart: NPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    *
    * @return $this
    */
    public function setRecover($recover)
    {
        $this->container['recover'] = $recover;
        return $this;
    }

    /**
    * Gets faultScenario
    *  **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    *
    * @return string|null
    */
    public function getFaultScenario()
    {
        return $this->container['faultScenario'];
    }

    /**
    * Sets faultScenario
    *
    * @param string|null $faultScenario **参数描述**：本次故障场景。 **取值范围**：枚举值如下： - chip_fault: 芯片故障 - node_fault: 节点故障 - job_failed: 作业失败退出 - job_hanged: 作业卡死 - job_subhealth: 作业亚健康 - error_in_log: 日志异常
    *
    * @return $this
    */
    public function setFaultScenario($faultScenario)
    {
        $this->container['faultScenario'] = $faultScenario;
        return $this;
    }

    /**
    * Gets reason
    *  **参数描述**：本次故障原因。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数描述**：本次故障原因。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets relatedTask
    *  **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRelatedTask()
    {
        return $this->container['relatedTask'];
    }

    /**
    * Sets relatedTask
    *
    * @param string|null $relatedTask **参数描述**：引发本次运行结束的task worker ID(如worker-0)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRelatedTask($relatedTask)
    {
        $this->container['relatedTask'] = $relatedTask;
        return $this;
    }

    /**
    * Gets recoverResult
    *  **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @return string|null
    */
    public function getRecoverResult()
    {
        return $this->container['recoverResult'];
    }

    /**
    * Sets recoverResult
    *
    * @param string|null $recoverResult **参数描述**：本次故障执行结果。 **取值范围**：枚举值如下： - recovering: 执行中 - success: 成功 - failed: 失败 - downgrade: 策略降级 - terminated: 策略被终止 - quotaExceeded: 策略执行次数超限制
    *
    * @return $this
    */
    public function setRecoverResult($recoverResult)
    {
        $this->container['recoverResult'] = $recoverResult;
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

