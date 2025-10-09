<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subTaskName  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    * percent  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    * remainingTime  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subTaskName' => 'string',
            'percent' => 'string',
            'remainingTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subTaskName  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    * percent  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    * remainingTime  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subTaskName' => null,
        'percent' => null,
        'remainingTime' => null
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
    * subTaskName  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    * percent  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    * remainingTime  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subTaskName' => 'sub_task_name',
            'percent' => 'percent',
            'remainingTime' => 'remaining_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subTaskName  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    * percent  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    * remainingTime  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'subTaskName' => 'setSubTaskName',
            'percent' => 'setPercent',
            'remainingTime' => 'setRemainingTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subTaskName  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    * percent  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    * remainingTime  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'subTaskName' => 'getSubTaskName',
            'percent' => 'getPercent',
            'remainingTime' => 'getRemainingTime'
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
        $this->container['subTaskName'] = isset($data['subTaskName']) ? $data['subTaskName'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
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
    * Gets subTaskName
    *  **参数解释**：  子任务名。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSubTaskName()
    {
        return $this->container['subTaskName'];
    }

    /**
    * Sets subTaskName
    *
    * @param string|null $subTaskName **参数解释**：  子任务名。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSubTaskName($subTaskName)
    {
        $this->container['subTaskName'] = $subTaskName;
        return $this;
    }

    /**
    * Gets percent
    *  **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    *
    * @return string|null
    */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
    * Sets percent
    *
    * @param string|null $percent **参数解释**：  子任务进度百分比。  **取值范围**：  0-100。
    *
    * @return $this
    */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;
        return $this;
    }

    /**
    * Gets remainingTime
    *  **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime **参数解释**：  剩余时间，单位为秒。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
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

