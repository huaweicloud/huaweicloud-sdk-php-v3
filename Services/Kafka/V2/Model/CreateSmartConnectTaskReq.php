<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSmartConnectTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSmartConnectTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  SmartConnect任务名称。
    * startLater  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    * topics  SmartConnect任务配置的Topic。
    * topicsRegex  SmartConnect任务配置的Topic正则表达式。
    * sourceType  SmartConnect任务的源端类型。
    * sourceTask  sourceTask
    * sinkType  SmartConnect任务的目标端类型。
    * sinkTask  sinkTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'startLater' => 'bool',
            'topics' => 'string',
            'topicsRegex' => 'string',
            'sourceType' => 'string',
            'sourceTask' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSourceConfig',
            'sinkType' => 'string',
            'sinkTask' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSinkConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  SmartConnect任务名称。
    * startLater  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    * topics  SmartConnect任务配置的Topic。
    * topicsRegex  SmartConnect任务配置的Topic正则表达式。
    * sourceType  SmartConnect任务的源端类型。
    * sourceTask  sourceTask
    * sinkType  SmartConnect任务的目标端类型。
    * sinkTask  sinkTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'startLater' => null,
        'topics' => null,
        'topicsRegex' => null,
        'sourceType' => null,
        'sourceTask' => null,
        'sinkType' => null,
        'sinkTask' => null
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
    * taskName  SmartConnect任务名称。
    * startLater  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    * topics  SmartConnect任务配置的Topic。
    * topicsRegex  SmartConnect任务配置的Topic正则表达式。
    * sourceType  SmartConnect任务的源端类型。
    * sourceTask  sourceTask
    * sinkType  SmartConnect任务的目标端类型。
    * sinkTask  sinkTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'startLater' => 'start_later',
            'topics' => 'topics',
            'topicsRegex' => 'topics_regex',
            'sourceType' => 'source_type',
            'sourceTask' => 'source_task',
            'sinkType' => 'sink_type',
            'sinkTask' => 'sink_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  SmartConnect任务名称。
    * startLater  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    * topics  SmartConnect任务配置的Topic。
    * topicsRegex  SmartConnect任务配置的Topic正则表达式。
    * sourceType  SmartConnect任务的源端类型。
    * sourceTask  sourceTask
    * sinkType  SmartConnect任务的目标端类型。
    * sinkTask  sinkTask
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'startLater' => 'setStartLater',
            'topics' => 'setTopics',
            'topicsRegex' => 'setTopicsRegex',
            'sourceType' => 'setSourceType',
            'sourceTask' => 'setSourceTask',
            'sinkType' => 'setSinkType',
            'sinkTask' => 'setSinkTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  SmartConnect任务名称。
    * startLater  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    * topics  SmartConnect任务配置的Topic。
    * topicsRegex  SmartConnect任务配置的Topic正则表达式。
    * sourceType  SmartConnect任务的源端类型。
    * sourceTask  sourceTask
    * sinkType  SmartConnect任务的目标端类型。
    * sinkTask  sinkTask
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'startLater' => 'getStartLater',
            'topics' => 'getTopics',
            'topicsRegex' => 'getTopicsRegex',
            'sourceType' => 'getSourceType',
            'sourceTask' => 'getSourceTask',
            'sinkType' => 'getSinkType',
            'sinkTask' => 'getSinkTask'
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
    const SOURCE_TYPE_KAFKA_REPLICATOR_SOURCE = 'KAFKA_REPLICATOR_SOURCE';
    const SOURCE_TYPE_NONE = 'NONE';
    const SINK_TYPE_OBS_SINK = 'OBS_SINK';
    const SINK_TYPE_NONE = 'NONE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_KAFKA_REPLICATOR_SOURCE,
            self::SOURCE_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSinkTypeAllowableValues()
    {
        return [
            self::SINK_TYPE_OBS_SINK,
            self::SINK_TYPE_NONE,
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['startLater'] = isset($data['startLater']) ? $data['startLater'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['topicsRegex'] = isset($data['topicsRegex']) ? $data['topicsRegex'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceTask'] = isset($data['sourceTask']) ? $data['sourceTask'] : null;
        $this->container['sinkType'] = isset($data['sinkType']) ? $data['sinkType'] : null;
        $this->container['sinkTask'] = isset($data['sinkTask']) ? $data['sinkTask'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSinkTypeAllowableValues();
                if (!is_null($this->container['sinkType']) && !in_array($this->container['sinkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sinkType', must be one of '%s'",
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
    * Gets taskName
    *  SmartConnect任务名称。
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
    * @param string|null $taskName SmartConnect任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets startLater
    *  是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    *
    * @return bool|null
    */
    public function getStartLater()
    {
        return $this->container['startLater'];
    }

    /**
    * Sets startLater
    *
    * @param bool|null $startLater 是否稍后再启动任务。如需要创建任务后立即启动，请填false；如希望稍后在任务列表中手动开启任务，请填true。
    *
    * @return $this
    */
    public function setStartLater($startLater)
    {
        $this->container['startLater'] = $startLater;
        return $this;
    }

    /**
    * Gets topics
    *  SmartConnect任务配置的Topic。
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
    * @param string|null $topics SmartConnect任务配置的Topic。
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
    *  SmartConnect任务配置的Topic正则表达式。
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
    * @param string|null $topicsRegex SmartConnect任务配置的Topic正则表达式。
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
    *  SmartConnect任务的源端类型。
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
    * @param string|null $sourceType SmartConnect任务的源端类型。
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
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSourceConfig|null
    */
    public function getSourceTask()
    {
        return $this->container['sourceTask'];
    }

    /**
    * Sets sourceTask
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSourceConfig|null $sourceTask sourceTask
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
    *  SmartConnect任务的目标端类型。
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
    * @param string|null $sinkType SmartConnect任务的目标端类型。
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
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSinkConfig|null
    */
    public function getSinkTask()
    {
        return $this->container['sinkTask'];
    }

    /**
    * Sets sinkTask
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskReqSinkConfig|null $sinkTask sinkTask
    *
    * @return $this
    */
    public function setSinkTask($sinkTask)
    {
        $this->container['sinkTask'] = $sinkTask;
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

