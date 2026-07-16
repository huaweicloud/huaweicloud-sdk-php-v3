<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StageInfoWithSub implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StageInfoWithSub';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**：作业ID。 **取值范围**：不涉及。
    * name  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    * enMessage  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    * startTime  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
    * endTime  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    * stageOrder  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    * subStages  **参数解释**：子阶段信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'name' => 'string',
            'enMessage' => 'string',
            'zhMessage' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'stageOrder' => 'int',
            'subStages' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SubStage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**：作业ID。 **取值范围**：不涉及。
    * name  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    * enMessage  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    * startTime  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
    * endTime  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    * stageOrder  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    * subStages  **参数解释**：子阶段信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'name' => null,
        'enMessage' => null,
        'zhMessage' => null,
        'startTime' => null,
        'endTime' => null,
        'stageOrder' => 'int32',
        'subStages' => null
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
    * jobId  **参数解释**：作业ID。 **取值范围**：不涉及。
    * name  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    * enMessage  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    * startTime  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
    * endTime  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    * stageOrder  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    * subStages  **参数解释**：子阶段信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'name' => 'name',
            'enMessage' => 'en_message',
            'zhMessage' => 'zh_message',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'stageOrder' => 'stage_order',
            'subStages' => 'sub_stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**：作业ID。 **取值范围**：不涉及。
    * name  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    * enMessage  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    * startTime  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
    * endTime  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    * stageOrder  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    * subStages  **参数解释**：子阶段信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'name' => 'setName',
            'enMessage' => 'setEnMessage',
            'zhMessage' => 'setZhMessage',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'stageOrder' => 'setStageOrder',
            'subStages' => 'setSubStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**：作业ID。 **取值范围**：不涉及。
    * name  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    * enMessage  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    * zhMessage  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    * startTime  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
    * endTime  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    * stageOrder  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    * subStages  **参数解释**：子阶段信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'name' => 'getName',
            'enMessage' => 'getEnMessage',
            'zhMessage' => 'getZhMessage',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'stageOrder' => 'getStageOrder',
            'subStages' => 'getSubStages'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enMessage'] = isset($data['enMessage']) ? $data['enMessage'] : null;
        $this->container['zhMessage'] = isset($data['zhMessage']) ? $data['zhMessage'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['stageOrder'] = isset($data['stageOrder']) ? $data['stageOrder'] : null;
        $this->container['subStages'] = isset($data['subStages']) ? $data['subStages'] : null;
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
    * Gets jobId
    *  **参数解释**：作业ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**：作业ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
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
    * @param string|null $name **参数解释**：主阶段名称。  **取值范围**： - scheduling：作业调度 - preparing：环境准备 - running：作业运行 - end：作业结束
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enMessage
    *  **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEnMessage()
    {
        return $this->container['enMessage'];
    }

    /**
    * Sets enMessage
    *
    * @param string|null $enMessage **参数解释**：主阶段英文描述信息。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEnMessage($enMessage)
    {
        $this->container['enMessage'] = $enMessage;
        return $this;
    }

    /**
    * Gets zhMessage
    *  **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getZhMessage()
    {
        return $this->container['zhMessage'];
    }

    /**
    * Sets zhMessage
    *
    * @param string|null $zhMessage **参数解释**：主阶段中文描述信息。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setZhMessage($zhMessage)
    {
        $this->container['zhMessage'] = $zhMessage;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
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
    * @param string|null $startTime **参数解释**：主阶段开始时间。  **取值范围**：不涉及。
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
    *  **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
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
    * @param string|null $endTime **参数解释**：主阶段结束时间。  **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets stageOrder
    *  **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    *
    * @return int|null
    */
    public function getStageOrder()
    {
        return $this->container['stageOrder'];
    }

    /**
    * Sets stageOrder
    *
    * @param int|null $stageOrder **参数解释**：主阶段序号。 **取值范围**：[1,4]。
    *
    * @return $this
    */
    public function setStageOrder($stageOrder)
    {
        $this->container['stageOrder'] = $stageOrder;
        return $this;
    }

    /**
    * Gets subStages
    *  **参数解释**：子阶段信息列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SubStage[]|null
    */
    public function getSubStages()
    {
        return $this->container['subStages'];
    }

    /**
    * Sets subStages
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SubStage[]|null $subStages **参数解释**：子阶段信息列表。
    *
    * @return $this
    */
    public function setSubStages($subStages)
    {
        $this->container['subStages'] = $subStages;
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

