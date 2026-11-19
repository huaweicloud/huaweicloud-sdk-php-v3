<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListColdTableWaitingTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListColdTableWaitingTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    * waitingTasks  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'waitingTasks' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ColdTableWaitingTask[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    * waitingTasks  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'waitingTasks' => null
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
    * totalCount  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    * waitingTasks  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'waitingTasks' => 'waiting_tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    * waitingTasks  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'waitingTasks' => 'setWaitingTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    * waitingTasks  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'waitingTasks' => 'getWaitingTasks'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['waitingTasks'] = isset($data['waitingTasks']) ? $data['waitingTasks'] : null;
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
    * Gets totalCount
    *  **参数解释**：  任务总数。  **取值范围**：  非负整数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**：  任务总数。  **取值范围**：  非负整数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets waitingTasks
    *  **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ColdTableWaitingTask[]|null
    */
    public function getWaitingTasks()
    {
        return $this->container['waitingTasks'];
    }

    /**
    * Sets waitingTasks
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ColdTableWaitingTask[]|null $waitingTasks **参数解释**：  冷热分离待下发任务列表，没有任务时默认为空数组。
    *
    * @return $this
    */
    public function setWaitingTasks($waitingTasks)
    {
        $this->container['waitingTasks'] = $waitingTasks;
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

