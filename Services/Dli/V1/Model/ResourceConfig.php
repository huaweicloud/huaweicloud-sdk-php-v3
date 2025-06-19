<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxSlot  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    * parallelNumber  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    * jobmanagerResourceSpec  jobmanagerResourceSpec
    * taskmanagerResourceSpec  taskmanagerResourceSpec
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxSlot' => 'int',
            'parallelNumber' => 'int',
            'jobmanagerResourceSpec' => '\HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec',
            'taskmanagerResourceSpec' => '\HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxSlot  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    * parallelNumber  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    * jobmanagerResourceSpec  jobmanagerResourceSpec
    * taskmanagerResourceSpec  taskmanagerResourceSpec
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxSlot' => null,
        'parallelNumber' => null,
        'jobmanagerResourceSpec' => null,
        'taskmanagerResourceSpec' => null
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
    * maxSlot  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    * parallelNumber  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    * jobmanagerResourceSpec  jobmanagerResourceSpec
    * taskmanagerResourceSpec  taskmanagerResourceSpec
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxSlot' => 'max_slot',
            'parallelNumber' => 'parallel_number',
            'jobmanagerResourceSpec' => 'jobmanager_resource_spec',
            'taskmanagerResourceSpec' => 'taskmanager_resource_spec'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxSlot  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    * parallelNumber  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    * jobmanagerResourceSpec  jobmanagerResourceSpec
    * taskmanagerResourceSpec  taskmanagerResourceSpec
    *
    * @var string[]
    */
    protected static $setters = [
            'maxSlot' => 'setMaxSlot',
            'parallelNumber' => 'setParallelNumber',
            'jobmanagerResourceSpec' => 'setJobmanagerResourceSpec',
            'taskmanagerResourceSpec' => 'setTaskmanagerResourceSpec'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxSlot  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    * parallelNumber  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    * jobmanagerResourceSpec  jobmanagerResourceSpec
    * taskmanagerResourceSpec  taskmanagerResourceSpec
    *
    * @var string[]
    */
    protected static $getters = [
            'maxSlot' => 'getMaxSlot',
            'parallelNumber' => 'getParallelNumber',
            'jobmanagerResourceSpec' => 'getJobmanagerResourceSpec',
            'taskmanagerResourceSpec' => 'getTaskmanagerResourceSpec'
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
        $this->container['maxSlot'] = isset($data['maxSlot']) ? $data['maxSlot'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['jobmanagerResourceSpec'] = isset($data['jobmanagerResourceSpec']) ? $data['jobmanagerResourceSpec'] : null;
        $this->container['taskmanagerResourceSpec'] = isset($data['taskmanagerResourceSpec']) ? $data['taskmanagerResourceSpec'] : null;
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
    * Gets maxSlot
    *  该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    *
    * @return int|null
    */
    public function getMaxSlot()
    {
        return $this->container['maxSlot'];
    }

    /**
    * Sets maxSlot
    *
    * @param int|null $maxSlot 该参数用于设置单个TaskManager可以提供的并行任务数量。每个Task Slot可以并行执行一个任务。增加 Task Slots 可以提高 TaskManager 的并行处理能力，但也会增加资源消耗。Task Slots的数量与TaskManager的CPU数相关联，因为每个CPU可以提供一个Task Slot。单TM Slot默认值为1。最小并行数不能小于1。
    *
    * @return $this
    */
    public function setMaxSlot($maxSlot)
    {
        $this->container['maxSlot'] = $maxSlot;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 作业的并行数，指作业中各个算子的并行执行的子任务的数量，算子的子任务数就是其对应算子的并行度。默认值为“1”。
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets jobmanagerResourceSpec
    *  jobmanagerResourceSpec
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec|null
    */
    public function getJobmanagerResourceSpec()
    {
        return $this->container['jobmanagerResourceSpec'];
    }

    /**
    * Sets jobmanagerResourceSpec
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec|null $jobmanagerResourceSpec jobmanagerResourceSpec
    *
    * @return $this
    */
    public function setJobmanagerResourceSpec($jobmanagerResourceSpec)
    {
        $this->container['jobmanagerResourceSpec'] = $jobmanagerResourceSpec;
        return $this;
    }

    /**
    * Gets taskmanagerResourceSpec
    *  taskmanagerResourceSpec
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec|null
    */
    public function getTaskmanagerResourceSpec()
    {
        return $this->container['taskmanagerResourceSpec'];
    }

    /**
    * Sets taskmanagerResourceSpec
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ResourceSpec|null $taskmanagerResourceSpec taskmanagerResourceSpec
    *
    * @return $this
    */
    public function setTaskmanagerResourceSpec($taskmanagerResourceSpec)
    {
        $this->container['taskmanagerResourceSpec'] = $taskmanagerResourceSpec;
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

