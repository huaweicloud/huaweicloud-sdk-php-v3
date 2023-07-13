<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteGroupScheduledTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteGroupScheduledTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID
    * scheduledTaskId  计划任务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupId' => 'string',
            'scheduledTaskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID
    * scheduledTaskId  计划任务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupId' => null,
        'scheduledTaskId' => null
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
    * scalingGroupId  伸缩组ID
    * scheduledTaskId  计划任务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupId' => 'scaling_group_id',
            'scheduledTaskId' => 'scheduled_task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupId  伸缩组ID
    * scheduledTaskId  计划任务ID
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupId' => 'setScalingGroupId',
            'scheduledTaskId' => 'setScheduledTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupId  伸缩组ID
    * scheduledTaskId  计划任务ID
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupId' => 'getScalingGroupId',
            'scheduledTaskId' => 'getScheduledTaskId'
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
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['scheduledTaskId'] = isset($data['scheduledTaskId']) ? $data['scheduledTaskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingGroupId'] === null) {
            $invalidProperties[] = "'scalingGroupId' can't be null";
        }
        if ($this->container['scheduledTaskId'] === null) {
            $invalidProperties[] = "'scheduledTaskId' can't be null";
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
    * Gets scalingGroupId
    *  伸缩组ID
    *
    * @return string
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string $scalingGroupId 伸缩组ID
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets scheduledTaskId
    *  计划任务ID
    *
    * @return string
    */
    public function getScheduledTaskId()
    {
        return $this->container['scheduledTaskId'];
    }

    /**
    * Sets scheduledTaskId
    *
    * @param string $scheduledTaskId 计划任务ID
    *
    * @return $this
    */
    public function setScheduledTaskId($scheduledTaskId)
    {
        $this->container['scheduledTaskId'] = $scheduledTaskId;
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

