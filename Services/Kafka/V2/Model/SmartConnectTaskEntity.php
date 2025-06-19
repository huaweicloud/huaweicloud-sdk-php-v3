<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartConnectTaskEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartConnectTaskEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    * topics  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    * topicsRegex  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    * sourceTask  sourceTask
    * sinkType  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    * sinkTask  sinkTask
    * id  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    * status  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    * createTime  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'topics' => 'string',
            'topicsRegex' => 'string',
            'sourceType' => 'string',
            'sourceTask' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig',
            'sinkType' => 'string',
            'sinkTask' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSinkConfig',
            'id' => 'string',
            'status' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    * topics  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    * topicsRegex  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    * sourceTask  sourceTask
    * sinkType  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    * sinkTask  sinkTask
    * id  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    * status  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    * createTime  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'topics' => null,
        'topicsRegex' => null,
        'sourceType' => null,
        'sourceTask' => null,
        'sinkType' => null,
        'sinkTask' => null,
        'id' => null,
        'status' => null,
        'createTime' => 'int64'
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
    * taskName  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    * topics  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    * topicsRegex  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    * sourceTask  sourceTask
    * sinkType  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    * sinkTask  sinkTask
    * id  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    * status  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    * createTime  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'topics' => 'topics',
            'topicsRegex' => 'topics_regex',
            'sourceType' => 'source_type',
            'sourceTask' => 'source_task',
            'sinkType' => 'sink_type',
            'sinkTask' => 'sink_task',
            'id' => 'id',
            'status' => 'status',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    * topics  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    * topicsRegex  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    * sourceTask  sourceTask
    * sinkType  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    * sinkTask  sinkTask
    * id  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    * status  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    * createTime  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'topics' => 'setTopics',
            'topicsRegex' => 'setTopicsRegex',
            'sourceType' => 'setSourceType',
            'sourceTask' => 'setSourceTask',
            'sinkType' => 'setSinkType',
            'sinkTask' => 'setSinkTask',
            'id' => 'setId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    * topics  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    * topicsRegex  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    * sourceType  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    * sourceTask  sourceTask
    * sinkType  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    * sinkTask  sinkTask
    * id  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    * status  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    * createTime  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'topics' => 'getTopics',
            'topicsRegex' => 'getTopicsRegex',
            'sourceType' => 'getSourceType',
            'sourceTask' => 'getSourceTask',
            'sinkType' => 'getSinkType',
            'sinkTask' => 'getSinkTask',
            'id' => 'getId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime'
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['topicsRegex'] = isset($data['topicsRegex']) ? $data['topicsRegex'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceTask'] = isset($data['sourceTask']) ? $data['sourceTask'] : null;
        $this->container['sinkType'] = isset($data['sinkType']) ? $data['sinkType'] : null;
        $this->container['sinkTask'] = isset($data['sinkTask']) ? $data['sinkTask'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets taskName
    *  **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**： Smart Connect任务名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets topics
    *  **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string|null $topics **参数解释**： Smart Connect任务配置的Topic。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets topicsRegex
    *  **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTopicsRegex()
    {
        return $this->container['topicsRegex'];
    }

    /**
    * Sets topicsRegex
    *
    * @param string|null $topicsRegex **参数解释**： Smart Connect任务配置的Topic正则表达式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTopicsRegex($topicsRegex)
    {
        $this->container['topicsRegex'] = $topicsRegex;
        return $this;
    }

    /**
    * Gets sourceType
    *  **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType **参数解释**： Smart Connect任务的源端类型。 **取值范围**： - NONE：不配置。 - KAFKA_REPLICATOR_SOURCE：Kafka数据复制。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceTask
    *  sourceTask
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig|null
    */
    public function getSourceTask()
    {
        return $this->container['sourceTask'];
    }

    /**
    * Sets sourceTask
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSourceConfig|null $sourceTask sourceTask
    *
    * @return $this
    */
    public function setSourceTask($sourceTask)
    {
        $this->container['sourceTask'] = $sourceTask;
        return $this;
    }

    /**
    * Gets sinkType
    *  **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    *
    * @return string|null
    */
    public function getSinkType()
    {
        return $this->container['sinkType'];
    }

    /**
    * Sets sinkType
    *
    * @param string|null $sinkType **参数解释**： Smart Connect任务的目标端类型。 **取值范围**： - NONE：不配置。 - OBS_SINK：转储。
    *
    * @return $this
    */
    public function setSinkType($sinkType)
    {
        $this->container['sinkType'] = $sinkType;
        return $this;
    }

    /**
    * Gets sinkTask
    *  sinkTask
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSinkConfig|null
    */
    public function getSinkTask()
    {
        return $this->container['sinkTask'];
    }

    /**
    * Sets sinkTask
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskRespSinkConfig|null $sinkTask sinkTask
    *
    * @return $this
    */
    public function setSinkTask($sinkTask)
    {
        $this->container['sinkTask'] = $sinkTask;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： Smart Connect任务的id。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： Smart Connect任务的状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： Smart Connect任务的创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

