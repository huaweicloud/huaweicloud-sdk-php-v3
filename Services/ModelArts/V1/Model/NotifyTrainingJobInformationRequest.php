<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotifyTrainingJobInformationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotifyTrainingJobInformationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trainingJobId  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * taskId  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * reportType  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trainingJobId' => 'string',
            'taskId' => 'string',
            'reportType' => 'string',
            'body' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ReportEventBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trainingJobId  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * taskId  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * reportType  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trainingJobId' => null,
        'taskId' => null,
        'reportType' => null,
        'body' => null
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
    * trainingJobId  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * taskId  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * reportType  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trainingJobId' => 'training_job_id',
            'taskId' => 'task_id',
            'reportType' => 'report_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trainingJobId  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * taskId  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * reportType  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'trainingJobId' => 'setTrainingJobId',
            'taskId' => 'setTaskId',
            'reportType' => 'setReportType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trainingJobId  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * taskId  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * reportType  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'trainingJobId' => 'getTrainingJobId',
            'taskId' => 'getTaskId',
            'reportType' => 'getReportType',
            'body' => 'getBody'
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
        $this->container['trainingJobId'] = isset($data['trainingJobId']) ? $data['trainingJobId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['reportType'] = isset($data['reportType']) ? $data['reportType'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trainingJobId'] === null) {
            $invalidProperties[] = "'trainingJobId' can't be null";
        }
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
        if ($this->container['reportType'] === null) {
            $invalidProperties[] = "'reportType' can't be null";
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
    * Gets trainingJobId
    *  **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getTrainingJobId()
    {
        return $this->container['trainingJobId'];
    }

    /**
    * Sets trainingJobId
    *
    * @param string $trainingJobId **参数解释**：训练作业ID。获取方法请参见[查询训练作业列表](ListTrainingJobs.xml)。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTrainingJobId($trainingJobId)
    {
        $this->container['trainingJobId'] = $trainingJobId;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId **参数解释**：训练作业的任务名称。可从训练作业详情中的status.tasks字段中获取。 **约束限制**：单节点默认为\"worker-0\"，多节点则为\"worker-0\"、\"worker-1\"，依次类推。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets reportType
    *  **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
    * Sets reportType
    *
    * @param string $reportType **参数解释**：事件上报类型。 **约束限制**：不涉及。 **取值范围**：取\"training-event\"。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setReportType($reportType)
    {
        $this->container['reportType'] = $reportType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ReportEventBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ReportEventBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

