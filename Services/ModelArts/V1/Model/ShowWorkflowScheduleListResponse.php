<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkflowScheduleListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkflowScheduleListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schedules  **参数解释**：工作流定时调度列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schedules' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowScheduleResp[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schedules  **参数解释**：工作流定时调度列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schedules' => null
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
    * schedules  **参数解释**：工作流定时调度列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schedules' => 'schedules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schedules  **参数解释**：工作流定时调度列表
    *
    * @var string[]
    */
    protected static $setters = [
            'schedules' => 'setSchedules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schedules  **参数解释**：工作流定时调度列表
    *
    * @var string[]
    */
    protected static $getters = [
            'schedules' => 'getSchedules'
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
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
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
    * Gets schedules
    *  **参数解释**：工作流定时调度列表
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowScheduleResp[]|null
    */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
    * Sets schedules
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowScheduleResp[]|null $schedules **参数解释**：工作流定时调度列表
    *
    * @return $this
    */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;
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

