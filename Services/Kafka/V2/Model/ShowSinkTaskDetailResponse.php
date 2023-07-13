<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSinkTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSinkTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  转储任务名称。
    * destinationType  转储任务类型。
    * createTime  转储任务创建时间戳。
    * status  转储任务状态。
    * topics  返回任务转存的topics列表或者正则表达式。
    * obsDestinationDescriptor  obsDestinationDescriptor
    * topicsInfo  topic信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'destinationType' => 'string',
            'createTime' => 'int',
            'status' => 'string',
            'topics' => 'string',
            'obsDestinationDescriptor' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespObsDestinationDescriptor',
            'topicsInfo' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespTopicsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  转储任务名称。
    * destinationType  转储任务类型。
    * createTime  转储任务创建时间戳。
    * status  转储任务状态。
    * topics  返回任务转存的topics列表或者正则表达式。
    * obsDestinationDescriptor  obsDestinationDescriptor
    * topicsInfo  topic信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'destinationType' => null,
        'createTime' => 'int64',
        'status' => null,
        'topics' => null,
        'obsDestinationDescriptor' => null,
        'topicsInfo' => null
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
    * taskName  转储任务名称。
    * destinationType  转储任务类型。
    * createTime  转储任务创建时间戳。
    * status  转储任务状态。
    * topics  返回任务转存的topics列表或者正则表达式。
    * obsDestinationDescriptor  obsDestinationDescriptor
    * topicsInfo  topic信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'destinationType' => 'destination_type',
            'createTime' => 'create_time',
            'status' => 'status',
            'topics' => 'topics',
            'obsDestinationDescriptor' => 'obs_destination_descriptor',
            'topicsInfo' => 'topics_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  转储任务名称。
    * destinationType  转储任务类型。
    * createTime  转储任务创建时间戳。
    * status  转储任务状态。
    * topics  返回任务转存的topics列表或者正则表达式。
    * obsDestinationDescriptor  obsDestinationDescriptor
    * topicsInfo  topic信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'destinationType' => 'setDestinationType',
            'createTime' => 'setCreateTime',
            'status' => 'setStatus',
            'topics' => 'setTopics',
            'obsDestinationDescriptor' => 'setObsDestinationDescriptor',
            'topicsInfo' => 'setTopicsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  转储任务名称。
    * destinationType  转储任务类型。
    * createTime  转储任务创建时间戳。
    * status  转储任务状态。
    * topics  返回任务转存的topics列表或者正则表达式。
    * obsDestinationDescriptor  obsDestinationDescriptor
    * topicsInfo  topic信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'destinationType' => 'getDestinationType',
            'createTime' => 'getCreateTime',
            'status' => 'getStatus',
            'topics' => 'getTopics',
            'obsDestinationDescriptor' => 'getObsDestinationDescriptor',
            'topicsInfo' => 'getTopicsInfo'
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
        $this->container['destinationType'] = isset($data['destinationType']) ? $data['destinationType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['obsDestinationDescriptor'] = isset($data['obsDestinationDescriptor']) ? $data['obsDestinationDescriptor'] : null;
        $this->container['topicsInfo'] = isset($data['topicsInfo']) ? $data['topicsInfo'] : null;
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
    *  转储任务名称。
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
    * @param string|null $taskName 转储任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets destinationType
    *  转储任务类型。
    *
    * @return string|null
    */
    public function getDestinationType()
    {
        return $this->container['destinationType'];
    }

    /**
    * Sets destinationType
    *
    * @param string|null $destinationType 转储任务类型。
    *
    * @return $this
    */
    public function setDestinationType($destinationType)
    {
        $this->container['destinationType'] = $destinationType;
        return $this;
    }

    /**
    * Gets createTime
    *  转储任务创建时间戳。
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
    * @param int|null $createTime 转储任务创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets status
    *  转储任务状态。
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
    * @param string|null $status 转储任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets topics
    *  返回任务转存的topics列表或者正则表达式。
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
    * @param string|null $topics 返回任务转存的topics列表或者正则表达式。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets obsDestinationDescriptor
    *  obsDestinationDescriptor
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespObsDestinationDescriptor|null
    */
    public function getObsDestinationDescriptor()
    {
        return $this->container['obsDestinationDescriptor'];
    }

    /**
    * Sets obsDestinationDescriptor
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespObsDestinationDescriptor|null $obsDestinationDescriptor obsDestinationDescriptor
    *
    * @return $this
    */
    public function setObsDestinationDescriptor($obsDestinationDescriptor)
    {
        $this->container['obsDestinationDescriptor'] = $obsDestinationDescriptor;
        return $this;
    }

    /**
    * Gets topicsInfo
    *  topic信息。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespTopicsInfo[]|null
    */
    public function getTopicsInfo()
    {
        return $this->container['topicsInfo'];
    }

    /**
    * Sets topicsInfo
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowSinkTaskDetailRespTopicsInfo[]|null $topicsInfo topic信息。
    *
    * @return $this
    */
    public function setTopicsInfo($topicsInfo)
    {
        $this->container['topicsInfo'] = $topicsInfo;
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

