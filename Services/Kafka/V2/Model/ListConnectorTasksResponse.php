<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectorTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectorTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tasks  Smart Connector任务详情。
    * totalNumber  Smart Connector任务数。
    * maxTasks  Smart Connector最大任务数。
    * quotaTasks  Smart Connector任务配额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tasks' => '\HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskEntity[]',
            'totalNumber' => 'int',
            'maxTasks' => 'int',
            'quotaTasks' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tasks  Smart Connector任务详情。
    * totalNumber  Smart Connector任务数。
    * maxTasks  Smart Connector最大任务数。
    * quotaTasks  Smart Connector任务配额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tasks' => null,
        'totalNumber' => null,
        'maxTasks' => null,
        'quotaTasks' => null
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
    * tasks  Smart Connector任务详情。
    * totalNumber  Smart Connector任务数。
    * maxTasks  Smart Connector最大任务数。
    * quotaTasks  Smart Connector任务配额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tasks' => 'tasks',
            'totalNumber' => 'total_number',
            'maxTasks' => 'max_tasks',
            'quotaTasks' => 'quota_tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tasks  Smart Connector任务详情。
    * totalNumber  Smart Connector任务数。
    * maxTasks  Smart Connector最大任务数。
    * quotaTasks  Smart Connector任务配额。
    *
    * @var string[]
    */
    protected static $setters = [
            'tasks' => 'setTasks',
            'totalNumber' => 'setTotalNumber',
            'maxTasks' => 'setMaxTasks',
            'quotaTasks' => 'setQuotaTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tasks  Smart Connector任务详情。
    * totalNumber  Smart Connector任务数。
    * maxTasks  Smart Connector最大任务数。
    * quotaTasks  Smart Connector任务配额。
    *
    * @var string[]
    */
    protected static $getters = [
            'tasks' => 'getTasks',
            'totalNumber' => 'getTotalNumber',
            'maxTasks' => 'getMaxTasks',
            'quotaTasks' => 'getQuotaTasks'
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
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['totalNumber'] = isset($data['totalNumber']) ? $data['totalNumber'] : null;
        $this->container['maxTasks'] = isset($data['maxTasks']) ? $data['maxTasks'] : null;
        $this->container['quotaTasks'] = isset($data['quotaTasks']) ? $data['quotaTasks'] : null;
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
    * Gets tasks
    *  Smart Connector任务详情。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskEntity[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\SmartConnectTaskEntity[]|null $tasks Smart Connector任务详情。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets totalNumber
    *  Smart Connector任务数。
    *
    * @return int|null
    */
    public function getTotalNumber()
    {
        return $this->container['totalNumber'];
    }

    /**
    * Sets totalNumber
    *
    * @param int|null $totalNumber Smart Connector任务数。
    *
    * @return $this
    */
    public function setTotalNumber($totalNumber)
    {
        $this->container['totalNumber'] = $totalNumber;
        return $this;
    }

    /**
    * Gets maxTasks
    *  Smart Connector最大任务数。
    *
    * @return int|null
    */
    public function getMaxTasks()
    {
        return $this->container['maxTasks'];
    }

    /**
    * Sets maxTasks
    *
    * @param int|null $maxTasks Smart Connector最大任务数。
    *
    * @return $this
    */
    public function setMaxTasks($maxTasks)
    {
        $this->container['maxTasks'] = $maxTasks;
        return $this;
    }

    /**
    * Gets quotaTasks
    *  Smart Connector任务配额。
    *
    * @return int|null
    */
    public function getQuotaTasks()
    {
        return $this->container['quotaTasks'];
    }

    /**
    * Sets quotaTasks
    *
    * @param int|null $quotaTasks Smart Connector任务配额。
    *
    * @return $this
    */
    public function setQuotaTasks($quotaTasks)
    {
        $this->container['quotaTasks'] = $quotaTasks;
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

