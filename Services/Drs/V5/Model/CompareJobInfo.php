<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareJobInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareJobInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  对比任务ID。
    * type  对比类型。
    * startTime  开始时间。
    * endTime  结束时间。
    * status  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * computeType  对比计算资源。
    * exportStatus  导出比对结果状态。
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签。
    * options  对比任务选项。
    * errorMsg  失败原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'computeType' => 'string',
            'exportStatus' => 'string',
            'reportRemainSeconds' => 'int',
            'compareJobTag' => 'map[string,string]',
            'options' => 'map[string,string]',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  对比任务ID。
    * type  对比类型。
    * startTime  开始时间。
    * endTime  结束时间。
    * status  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * computeType  对比计算资源。
    * exportStatus  导出比对结果状态。
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签。
    * options  对比任务选项。
    * errorMsg  失败原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'computeType' => null,
        'exportStatus' => null,
        'reportRemainSeconds' => 'int64',
        'compareJobTag' => null,
        'options' => null,
        'errorMsg' => null
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
    * id  对比任务ID。
    * type  对比类型。
    * startTime  开始时间。
    * endTime  结束时间。
    * status  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * computeType  对比计算资源。
    * exportStatus  导出比对结果状态。
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签。
    * options  对比任务选项。
    * errorMsg  失败原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'computeType' => 'compute_type',
            'exportStatus' => 'export_status',
            'reportRemainSeconds' => 'report_remain_seconds',
            'compareJobTag' => 'compare_job_tag',
            'options' => 'options',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  对比任务ID。
    * type  对比类型。
    * startTime  开始时间。
    * endTime  结束时间。
    * status  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * computeType  对比计算资源。
    * exportStatus  导出比对结果状态。
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签。
    * options  对比任务选项。
    * errorMsg  失败原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'computeType' => 'setComputeType',
            'exportStatus' => 'setExportStatus',
            'reportRemainSeconds' => 'setReportRemainSeconds',
            'compareJobTag' => 'setCompareJobTag',
            'options' => 'setOptions',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  对比任务ID。
    * type  对比类型。
    * startTime  开始时间。
    * endTime  结束时间。
    * status  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * computeType  对比计算资源。
    * exportStatus  导出比对结果状态。
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签。
    * options  对比任务选项。
    * errorMsg  失败原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'computeType' => 'getComputeType',
            'exportStatus' => 'getExportStatus',
            'reportRemainSeconds' => 'getReportRemainSeconds',
            'compareJobTag' => 'getCompareJobTag',
            'options' => 'getOptions',
            'errorMsg' => 'getErrorMsg'
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
    const STATUS_WAITING_FOR_RUNNING = 'WAITING_FOR_RUNNING';
    const STATUS_SUCCESSFUL = 'SUCCESSFUL';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_TIMEOUT_INTERRUPT = 'TIMEOUT_INTERRUPT';
    const STATUS_FULL_DOING = 'FULL_DOING';
    const STATUS_INCRE_DOING = 'INCRE_DOING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_WAITING_FOR_RUNNING,
            self::STATUS_SUCCESSFUL,
            self::STATUS_FAILED,
            self::STATUS_CANCELLED,
            self::STATUS_TIMEOUT_INTERRUPT,
            self::STATUS_FULL_DOING,
            self::STATUS_INCRE_DOING,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['computeType'] = isset($data['computeType']) ? $data['computeType'] : null;
        $this->container['exportStatus'] = isset($data['exportStatus']) ? $data['exportStatus'] : null;
        $this->container['reportRemainSeconds'] = isset($data['reportRemainSeconds']) ? $data['reportRemainSeconds'] : null;
        $this->container['compareJobTag'] = isset($data['compareJobTag']) ? $data['compareJobTag'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  对比任务ID。
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
    * @param string|null $id 对比任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  对比类型。
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
    * @param string|null $type 对比类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
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
    * @param string|null $startTime 开始时间。
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
    *  结束时间。
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
    * @param string|null $endTime 结束时间。
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
    *  对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
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
    * @param string|null $status 对比任务的状态。取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets computeType
    *  对比计算资源。
    *
    * @return string|null
    */
    public function getComputeType()
    {
        return $this->container['computeType'];
    }

    /**
    * Sets computeType
    *
    * @param string|null $computeType 对比计算资源。
    *
    * @return $this
    */
    public function setComputeType($computeType)
    {
        $this->container['computeType'] = $computeType;
        return $this;
    }

    /**
    * Gets exportStatus
    *  导出比对结果状态。
    *
    * @return string|null
    */
    public function getExportStatus()
    {
        return $this->container['exportStatus'];
    }

    /**
    * Sets exportStatus
    *
    * @param string|null $exportStatus 导出比对结果状态。
    *
    * @return $this
    */
    public function setExportStatus($exportStatus)
    {
        $this->container['exportStatus'] = $exportStatus;
        return $this;
    }

    /**
    * Gets reportRemainSeconds
    *  导出比对结果有效期剩余时间。
    *
    * @return int|null
    */
    public function getReportRemainSeconds()
    {
        return $this->container['reportRemainSeconds'];
    }

    /**
    * Sets reportRemainSeconds
    *
    * @param int|null $reportRemainSeconds 导出比对结果有效期剩余时间。
    *
    * @return $this
    */
    public function setReportRemainSeconds($reportRemainSeconds)
    {
        $this->container['reportRemainSeconds'] = $reportRemainSeconds;
        return $this;
    }

    /**
    * Gets compareJobTag
    *  对比任务的标签。
    *
    * @return map[string,string]|null
    */
    public function getCompareJobTag()
    {
        return $this->container['compareJobTag'];
    }

    /**
    * Sets compareJobTag
    *
    * @param map[string,string]|null $compareJobTag 对比任务的标签。
    *
    * @return $this
    */
    public function setCompareJobTag($compareJobTag)
    {
        $this->container['compareJobTag'] = $compareJobTag;
        return $this;
    }

    /**
    * Gets options
    *  对比任务选项。
    *
    * @return map[string,string]|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param map[string,string]|null $options 对比任务选项。
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets errorMsg
    *  失败原因。
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
    * @param string|null $errorMsg 失败原因。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

