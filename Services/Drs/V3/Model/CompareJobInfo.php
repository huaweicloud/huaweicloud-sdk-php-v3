<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

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
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * startTime  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * endTime  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * status  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * exportStatus  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签，当前仅涉及对比策略时返回。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'options' => 'map[string,string]',
            'startTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'exportStatus' => 'string',
            'reportRemainSeconds' => 'int',
            'compareJobTag' => 'map[string,string]',
            'proportionValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  对比任务ID。
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * startTime  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * endTime  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * status  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * exportStatus  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签，当前仅涉及对比策略时返回。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'options' => null,
        'startTime' => null,
        'endTime' => null,
        'status' => null,
        'exportStatus' => null,
        'reportRemainSeconds' => 'int64',
        'compareJobTag' => null,
        'proportionValue' => null
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
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * startTime  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * endTime  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * status  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * exportStatus  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签，当前仅涉及对比策略时返回。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'options' => 'options',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'exportStatus' => 'export_status',
            'reportRemainSeconds' => 'report_remain_seconds',
            'compareJobTag' => 'compare_job_tag',
            'proportionValue' => 'proportion_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  对比任务ID。
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * startTime  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * endTime  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * status  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * exportStatus  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签，当前仅涉及对比策略时返回。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'options' => 'setOptions',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'exportStatus' => 'setExportStatus',
            'reportRemainSeconds' => 'setReportRemainSeconds',
            'compareJobTag' => 'setCompareJobTag',
            'proportionValue' => 'setProportionValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  对比任务ID。
    * type  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    * options  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    * startTime  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * endTime  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
    * status  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    * exportStatus  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
    * reportRemainSeconds  导出比对结果有效期剩余时间。
    * compareJobTag  对比任务的标签，当前仅涉及对比策略时返回。
    * proportionValue  抽样比例，对比类型为抽样对比时填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'options' => 'getOptions',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'exportStatus' => 'getExportStatus',
            'reportRemainSeconds' => 'getReportRemainSeconds',
            'compareJobTag' => 'getCompareJobTag',
            'proportionValue' => 'getProportionValue'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['exportStatus'] = isset($data['exportStatus']) ? $data['exportStatus'] : null;
        $this->container['reportRemainSeconds'] = isset($data['reportRemainSeconds']) ? $data['reportRemainSeconds'] : null;
        $this->container['compareJobTag'] = isset($data['compareJobTag']) ? $data['compareJobTag'] : null;
        $this->container['proportionValue'] = isset($data['proportionValue']) ? $data['proportionValue'] : null;
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
    *  对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
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
    * @param string|null $type 对比类型。 - lines：行数对比 - contents：内容对比 - random：抽样对比，当前仅支持gaussdbv5、gaussdbv5-to-postgresql、gaussdbv5ha-to-postgresql链路。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets options
    *  对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
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
    * @param map[string,string]|null $options 对比配置项，key-value形式。 内容对比支持以下配置项： - 对比方式配置，key：contentCompareType，value：dynamic表示动态对比，static表示静态对比。 - lob字段对比类型配置，key：lobCompare，value：ignore表示忽略，length表示长度对比。  行数对比支持以下配置项： - 对比策略配置，多表归一情况下适用，key：comparePolicy，value：normal表示正常对比，manyToOne表示多对一对比。
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
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
    * @param string|null $startTime 开始时间，UTC时间，例如：2020-09-01T18:50:20Z。
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
    *  结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
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
    * @param string|null $endTime 结束时间，UTC时间，例如：2020-09-01T18:50:20Z。
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
    *  对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
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
    * @param string|null $status 对比任务的状态。 - RUNNING-运行中 - WAITING_FOR_RUNNING-等待启动中 - SUCCESSFUL-完成 - FAILED-失败 - CANCELLED-已取消 - TIMEOUT_INTERRUPT-超时中断 - FULL_DOING-全量校验中 - INCRE_DOING-增量校验中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets exportStatus
    *  导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
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
    * @param string|null $exportStatus 导出对比结果状态。 - INIT：初始状态 - EXPORTING：对比结果导出中 - EXPORT_COMPLETE：对比结果导出完成 - EXPORT_COMMON_FAILED：对比结果导出失败
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
    *  对比任务的标签，当前仅涉及对比策略时返回。
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
    * @param map[string,string]|null $compareJobTag 对比任务的标签，当前仅涉及对比策略时返回。
    *
    * @return $this
    */
    public function setCompareJobTag($compareJobTag)
    {
        $this->container['compareJobTag'] = $compareJobTag;
        return $this;
    }

    /**
    * Gets proportionValue
    *  抽样比例，对比类型为抽样对比时填写。
    *
    * @return string|null
    */
    public function getProportionValue()
    {
        return $this->container['proportionValue'];
    }

    /**
    * Sets proportionValue
    *
    * @param string|null $proportionValue 抽样比例，对比类型为抽样对比时填写。
    *
    * @return $this
    */
    public function setProportionValue($proportionValue)
    {
        $this->container['proportionValue'] = $proportionValue;
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

