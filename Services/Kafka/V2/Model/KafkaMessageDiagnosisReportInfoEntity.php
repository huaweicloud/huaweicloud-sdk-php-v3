<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaMessageDiagnosisReportInfoEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaMessageDiagnosisReportInfoEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  诊断报告ID
    * status  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    * beginTime  诊断任务开始时间
    * endTime  诊断任务结束时间
    * groupName  该次诊断任务诊断的消费组名称
    * topicName  该次诊断任务诊断的topic名称
    * accumulatedPartitions  该次诊断任务发现的存在消息堆积的分区数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'groupName' => 'string',
            'topicName' => 'string',
            'accumulatedPartitions' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  诊断报告ID
    * status  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    * beginTime  诊断任务开始时间
    * endTime  诊断任务结束时间
    * groupName  该次诊断任务诊断的消费组名称
    * topicName  该次诊断任务诊断的topic名称
    * accumulatedPartitions  该次诊断任务发现的存在消息堆积的分区数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'groupName' => null,
        'topicName' => null,
        'accumulatedPartitions' => 'int32'
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
    * reportId  诊断报告ID
    * status  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    * beginTime  诊断任务开始时间
    * endTime  诊断任务结束时间
    * groupName  该次诊断任务诊断的消费组名称
    * topicName  该次诊断任务诊断的topic名称
    * accumulatedPartitions  该次诊断任务发现的存在消息堆积的分区数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'groupName' => 'group_name',
            'topicName' => 'topic_name',
            'accumulatedPartitions' => 'accumulated_partitions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  诊断报告ID
    * status  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    * beginTime  诊断任务开始时间
    * endTime  诊断任务结束时间
    * groupName  该次诊断任务诊断的消费组名称
    * topicName  该次诊断任务诊断的topic名称
    * accumulatedPartitions  该次诊断任务发现的存在消息堆积的分区数
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'groupName' => 'setGroupName',
            'topicName' => 'setTopicName',
            'accumulatedPartitions' => 'setAccumulatedPartitions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  诊断报告ID
    * status  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    * beginTime  诊断任务开始时间
    * endTime  诊断任务结束时间
    * groupName  该次诊断任务诊断的消费组名称
    * topicName  该次诊断任务诊断的topic名称
    * accumulatedPartitions  该次诊断任务发现的存在消息堆积的分区数
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'groupName' => 'getGroupName',
            'topicName' => 'getTopicName',
            'accumulatedPartitions' => 'getAccumulatedPartitions'
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
    const STATUS_DIAGNOSING = 'diagnosing';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETED = 'deleted';
    const STATUS_FINISHED = 'finished';
    const STATUS_NORMAL = 'normal';
    const STATUS_ABNORMAL = 'abnormal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DIAGNOSING,
            self::STATUS_FAILED,
            self::STATUS_DELETED,
            self::STATUS_FINISHED,
            self::STATUS_NORMAL,
            self::STATUS_ABNORMAL,
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['accumulatedPartitions'] = isset($data['accumulatedPartitions']) ? $data['accumulatedPartitions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['reportId'] === null) {
            $invalidProperties[] = "'reportId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
        if ($this->container['topicName'] === null) {
            $invalidProperties[] = "'topicName' can't be null";
        }
        if ($this->container['accumulatedPartitions'] === null) {
            $invalidProperties[] = "'accumulatedPartitions' can't be null";
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
    * Gets reportId
    *  诊断报告ID
    *
    * @return string
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string $reportId 诊断报告ID
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets status
    *  消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 消息积压诊断任务状态。 - diagnosing：诊断中 - failed：诊断失败 - deleted：手动删除 - finished：诊断完成 - normal：诊断结果正常 - abnormal：诊断结果异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  诊断任务开始时间
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime 诊断任务开始时间
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
    *  诊断任务结束时间
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
    * @param string|null $endTime 诊断任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets groupName
    *  该次诊断任务诊断的消费组名称
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 该次诊断任务诊断的消费组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets topicName
    *  该次诊断任务诊断的topic名称
    *
    * @return string
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string $topicName 该次诊断任务诊断的topic名称
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets accumulatedPartitions
    *  该次诊断任务发现的存在消息堆积的分区数
    *
    * @return int
    */
    public function getAccumulatedPartitions()
    {
        return $this->container['accumulatedPartitions'];
    }

    /**
    * Sets accumulatedPartitions
    *
    * @param int $accumulatedPartitions 该次诊断任务发现的存在消息堆积的分区数
    *
    * @return $this
    */
    public function setAccumulatedPartitions($accumulatedPartitions)
    {
        $this->container['accumulatedPartitions'] = $accumulatedPartitions;
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

