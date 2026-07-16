<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunningRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunningRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startAt  本次运行开始时间的unix时间戳，单位为秒(s)。
    * endAt  本次运行结束时间的unix时间戳，单位为秒(s)。
    * xpuStartAt  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * startType  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    * endReason  本次运行结束原因。
    * endRelatedTask  引发本次运行结束的task worker ID(如worker-0)。
    * endRecover  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * endRecoverBeforeDowngrade  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    * recoverRecords  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startAt' => 'int',
            'endAt' => 'int',
            'xpuStartAt' => 'int',
            'startType' => 'string',
            'endReason' => 'string',
            'endRelatedTask' => 'string',
            'endRecover' => 'string',
            'endRecoverBeforeDowngrade' => 'string',
            'recoverRecords' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RecoverRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startAt  本次运行开始时间的unix时间戳，单位为秒(s)。
    * endAt  本次运行结束时间的unix时间戳，单位为秒(s)。
    * xpuStartAt  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * startType  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    * endReason  本次运行结束原因。
    * endRelatedTask  引发本次运行结束的task worker ID(如worker-0)。
    * endRecover  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * endRecoverBeforeDowngrade  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    * recoverRecords  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startAt' => 'int64',
        'endAt' => 'int64',
        'xpuStartAt' => 'int64',
        'startType' => null,
        'endReason' => null,
        'endRelatedTask' => null,
        'endRecover' => null,
        'endRecoverBeforeDowngrade' => null,
        'recoverRecords' => null
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
    * startAt  本次运行开始时间的unix时间戳，单位为秒(s)。
    * endAt  本次运行结束时间的unix时间戳，单位为秒(s)。
    * xpuStartAt  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * startType  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    * endReason  本次运行结束原因。
    * endRelatedTask  引发本次运行结束的task worker ID(如worker-0)。
    * endRecover  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * endRecoverBeforeDowngrade  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    * recoverRecords  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'xpuStartAt' => 'xpu_start_at',
            'startType' => 'start_type',
            'endReason' => 'end_reason',
            'endRelatedTask' => 'end_related_task',
            'endRecover' => 'end_recover',
            'endRecoverBeforeDowngrade' => 'end_recover_before_downgrade',
            'recoverRecords' => 'recover_records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startAt  本次运行开始时间的unix时间戳，单位为秒(s)。
    * endAt  本次运行结束时间的unix时间戳，单位为秒(s)。
    * xpuStartAt  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * startType  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    * endReason  本次运行结束原因。
    * endRelatedTask  引发本次运行结束的task worker ID(如worker-0)。
    * endRecover  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * endRecoverBeforeDowngrade  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    * recoverRecords  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'xpuStartAt' => 'setXpuStartAt',
            'startType' => 'setStartType',
            'endReason' => 'setEndReason',
            'endRelatedTask' => 'setEndRelatedTask',
            'endRecover' => 'setEndRecover',
            'endRecoverBeforeDowngrade' => 'setEndRecoverBeforeDowngrade',
            'recoverRecords' => 'setRecoverRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startAt  本次运行开始时间的unix时间戳，单位为秒(s)。
    * endAt  本次运行结束时间的unix时间戳，单位为秒(s)。
    * xpuStartAt  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    * startType  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    * endReason  本次运行结束原因。
    * endRelatedTask  引发本次运行结束的task worker ID(如worker-0)。
    * endRecover  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    * endRecoverBeforeDowngrade  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    * recoverRecords  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'xpuStartAt' => 'getXpuStartAt',
            'startType' => 'getStartType',
            'endReason' => 'getEndReason',
            'endRelatedTask' => 'getEndRelatedTask',
            'endRecover' => 'getEndRecover',
            'endRecoverBeforeDowngrade' => 'getEndRecoverBeforeDowngrade',
            'recoverRecords' => 'getRecoverRecords'
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
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['xpuStartAt'] = isset($data['xpuStartAt']) ? $data['xpuStartAt'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['endReason'] = isset($data['endReason']) ? $data['endReason'] : null;
        $this->container['endRelatedTask'] = isset($data['endRelatedTask']) ? $data['endRelatedTask'] : null;
        $this->container['endRecover'] = isset($data['endRecover']) ? $data['endRecover'] : null;
        $this->container['endRecoverBeforeDowngrade'] = isset($data['endRecoverBeforeDowngrade']) ? $data['endRecoverBeforeDowngrade'] : null;
        $this->container['recoverRecords'] = isset($data['recoverRecords']) ? $data['recoverRecords'] : null;
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
    * Gets startAt
    *  本次运行开始时间的unix时间戳，单位为秒(s)。
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 本次运行开始时间的unix时间戳，单位为秒(s)。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  本次运行结束时间的unix时间戳，单位为秒(s)。
    *
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 本次运行结束时间的unix时间戳，单位为秒(s)。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets xpuStartAt
    *  **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getXpuStartAt()
    {
        return $this->container['xpuStartAt'];
    }

    /**
    * Sets xpuStartAt
    *
    * @param int|null $xpuStartAt **参数解释**：本次运行加速卡启动时间的unix时间戳，单位为秒(s)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setXpuStartAt($xpuStartAt)
    {
        $this->container['xpuStartAt'] = $xpuStartAt;
        return $this;
    }

    /**
    * Gets startType
    *  本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    *
    * @return string|null
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string|null $startType 本地运行的启动方式： - init_or_rescheduled：代表本次启动为被调度后的首次运行，包括初次启动及调度恢复后的运行。 - restarted：代表本次启动非被调度后的首次运行，为进程重启后的运行。
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets endReason
    *  本次运行结束原因。
    *
    * @return string|null
    */
    public function getEndReason()
    {
        return $this->container['endReason'];
    }

    /**
    * Sets endReason
    *
    * @param string|null $endReason 本次运行结束原因。
    *
    * @return $this
    */
    public function setEndReason($endReason)
    {
        $this->container['endReason'] = $endReason;
        return $this;
    }

    /**
    * Gets endRelatedTask
    *  引发本次运行结束的task worker ID(如worker-0)。
    *
    * @return string|null
    */
    public function getEndRelatedTask()
    {
        return $this->container['endRelatedTask'];
    }

    /**
    * Sets endRelatedTask
    *
    * @param string|null $endRelatedTask 引发本次运行结束的task worker ID(如worker-0)。
    *
    * @return $this
    */
    public function setEndRelatedTask($endRelatedTask)
    {
        $this->container['endRelatedTask'] = $endRelatedTask;
        return $this;
    }

    /**
    * Gets endRecover
    *  本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    *
    * @return string|null
    */
    public function getEndRecover()
    {
        return $this->container['endRecover'];
    }

    /**
    * Sets endRecover
    *
    * @param string|null $endRecover 本次运行结束后所采取的故障容忍策略，枚举值如下： - npu_proc_restart: NPU原地热恢复 - gpu_proc_restart: GPU原地热恢复 - proc_restart: 进程原地重启 - pod_reschedule: Pod级重调度 - job_reschedule: Job级重调度 - job_reschedule_with_taint: 隔离式Job重调度
    *
    * @return $this
    */
    public function setEndRecover($endRecover)
    {
        $this->container['endRecover'] = $endRecover;
        return $this;
    }

    /**
    * Gets endRecoverBeforeDowngrade
    *  本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    *
    * @return string|null
    */
    public function getEndRecoverBeforeDowngrade()
    {
        return $this->container['endRecoverBeforeDowngrade'];
    }

    /**
    * Sets endRecoverBeforeDowngrade
    *
    * @param string|null $endRecoverBeforeDowngrade 本次运行结束后在故障容忍策略降级前所采取的容忍策略，取值范围同end_recover。
    *
    * @return $this
    */
    public function setEndRecoverBeforeDowngrade($endRecoverBeforeDowngrade)
    {
        $this->container['endRecoverBeforeDowngrade'] = $endRecoverBeforeDowngrade;
        return $this;
    }

    /**
    * Gets recoverRecords
    *  **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RecoverRecord[]|null
    */
    public function getRecoverRecords()
    {
        return $this->container['recoverRecords'];
    }

    /**
    * Sets recoverRecords
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RecoverRecord[]|null $recoverRecords **参数解释**：本次运行异常结束时采取的所有故障容忍策略详情。
    *
    * @return $this
    */
    public function setRecoverRecords($recoverRecords)
    {
        $this->container['recoverRecords'] = $recoverRecords;
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

