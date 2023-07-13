<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSinkTaskDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSinkTaskDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    * topicInfo  是否包含topic信息。默认是false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectorId' => 'string',
            'taskId' => 'string',
            'topicInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    * topicInfo  是否包含topic信息。默认是false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectorId' => null,
        'taskId' => null,
        'topicInfo' => null
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
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    * topicInfo  是否包含topic信息。默认是false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectorId' => 'connector_id',
            'taskId' => 'task_id',
            'topicInfo' => 'topic-info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    * topicInfo  是否包含topic信息。默认是false。
    *
    * @var string[]
    */
    protected static $setters = [
            'connectorId' => 'setConnectorId',
            'taskId' => 'setTaskId',
            'topicInfo' => 'setTopicInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectorId  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    * taskId  转储任务ID。
    * topicInfo  是否包含topic信息。默认是false。
    *
    * @var string[]
    */
    protected static $getters = [
            'connectorId' => 'getConnectorId',
            'taskId' => 'getTaskId',
            'topicInfo' => 'getTopicInfo'
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
    const TOPIC_INFO_TRUE = 'true';
    const TOPIC_INFO_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTopicInfoAllowableValues()
    {
        return [
            self::TOPIC_INFO_TRUE,
            self::TOPIC_INFO_FALSE,
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
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['topicInfo'] = isset($data['topicInfo']) ? $data['topicInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectorId'] === null) {
            $invalidProperties[] = "'connectorId' can't be null";
        }
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            $allowedValues = $this->getTopicInfoAllowableValues();
                if (!is_null($this->container['topicInfo']) && !in_array($this->container['topicInfo'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'topicInfo', must be one of '%s'",
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
    * Gets connectorId
    *  实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    *
    * @return string
    */
    public function getConnectorId()
    {
        return $this->container['connectorId'];
    }

    /**
    * Sets connectorId
    *
    * @param string $connectorId 实例转储ID。 请参考[实例生命周期][查询实例]接口返回的数据。
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets taskId
    *  转储任务ID。
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
    * @param string $taskId 转储任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets topicInfo
    *  是否包含topic信息。默认是false。
    *
    * @return string|null
    */
    public function getTopicInfo()
    {
        return $this->container['topicInfo'];
    }

    /**
    * Sets topicInfo
    *
    * @param string|null $topicInfo 是否包含topic信息。默认是false。
    *
    * @return $this
    */
    public function setTopicInfo($topicInfo)
    {
        $this->container['topicInfo'] = $topicInfo;
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

