<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSinkTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSinkTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tasks  转储任务列表。
    * totalNumber  转储任务总数。
    * maxTasks  总的支持任务个数。
    * quotaTasks  任务总数的配额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tasks' => '\HuaweiCloud\SDK\Kafka\V2\Model\ListSinkTasksRespTasks[]',
            'totalNumber' => 'int',
            'maxTasks' => 'int',
            'quotaTasks' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tasks  转储任务列表。
    * totalNumber  转储任务总数。
    * maxTasks  总的支持任务个数。
    * quotaTasks  任务总数的配额。
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
    * tasks  转储任务列表。
    * totalNumber  转储任务总数。
    * maxTasks  总的支持任务个数。
    * quotaTasks  任务总数的配额。
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
    * tasks  转储任务列表。
    * totalNumber  转储任务总数。
    * maxTasks  总的支持任务个数。
    * quotaTasks  任务总数的配额。
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
    * tasks  转储任务列表。
    * totalNumber  转储任务总数。
    * maxTasks  总的支持任务个数。
    * quotaTasks  任务总数的配额。
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
    *  转储任务列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ListSinkTasksRespTasks[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ListSinkTasksRespTasks[]|null $tasks 转储任务列表。
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
    *  转储任务总数。
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
    * @param int|null $totalNumber 转储任务总数。
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
    *  总的支持任务个数。
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
    * @param int|null $maxTasks 总的支持任务个数。
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
    *  任务总数的配额。
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
    * @param int|null $quotaTasks 任务总数的配额。
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

