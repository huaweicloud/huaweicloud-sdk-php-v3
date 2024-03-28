<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateQueuePropertyRequestBodyProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateQueuePropertyRequestBody_properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * computeEngineMaxInstance  队列能启动的最大spark driver数量
    * jobMaxConcurrent  单个spark driver能同时运行的最大任务数量
    * computeEngineMaxPrefetchInstance  队列预先启动的最大spark driver数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'computeEngineMaxInstance' => 'int',
            'jobMaxConcurrent' => 'int',
            'computeEngineMaxPrefetchInstance' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * computeEngineMaxInstance  队列能启动的最大spark driver数量
    * jobMaxConcurrent  单个spark driver能同时运行的最大任务数量
    * computeEngineMaxPrefetchInstance  队列预先启动的最大spark driver数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'computeEngineMaxInstance' => 'int32',
        'jobMaxConcurrent' => 'int32',
        'computeEngineMaxPrefetchInstance' => 'int32'
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
    * computeEngineMaxInstance  队列能启动的最大spark driver数量
    * jobMaxConcurrent  单个spark driver能同时运行的最大任务数量
    * computeEngineMaxPrefetchInstance  队列预先启动的最大spark driver数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'computeEngineMaxInstance' => 'computeEngine.maxInstance',
            'jobMaxConcurrent' => 'job.maxConcurrent',
            'computeEngineMaxPrefetchInstance' => 'computeEngine.maxPrefetchInstance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * computeEngineMaxInstance  队列能启动的最大spark driver数量
    * jobMaxConcurrent  单个spark driver能同时运行的最大任务数量
    * computeEngineMaxPrefetchInstance  队列预先启动的最大spark driver数量
    *
    * @var string[]
    */
    protected static $setters = [
            'computeEngineMaxInstance' => 'setComputeEngineMaxInstance',
            'jobMaxConcurrent' => 'setJobMaxConcurrent',
            'computeEngineMaxPrefetchInstance' => 'setComputeEngineMaxPrefetchInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * computeEngineMaxInstance  队列能启动的最大spark driver数量
    * jobMaxConcurrent  单个spark driver能同时运行的最大任务数量
    * computeEngineMaxPrefetchInstance  队列预先启动的最大spark driver数量
    *
    * @var string[]
    */
    protected static $getters = [
            'computeEngineMaxInstance' => 'getComputeEngineMaxInstance',
            'jobMaxConcurrent' => 'getJobMaxConcurrent',
            'computeEngineMaxPrefetchInstance' => 'getComputeEngineMaxPrefetchInstance'
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
        $this->container['computeEngineMaxInstance'] = isset($data['computeEngineMaxInstance']) ? $data['computeEngineMaxInstance'] : null;
        $this->container['jobMaxConcurrent'] = isset($data['jobMaxConcurrent']) ? $data['jobMaxConcurrent'] : null;
        $this->container['computeEngineMaxPrefetchInstance'] = isset($data['computeEngineMaxPrefetchInstance']) ? $data['computeEngineMaxPrefetchInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobMaxConcurrent']) && ($this->container['jobMaxConcurrent'] > 32)) {
                $invalidProperties[] = "invalid value for 'jobMaxConcurrent', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['jobMaxConcurrent']) && ($this->container['jobMaxConcurrent'] < 1)) {
                $invalidProperties[] = "invalid value for 'jobMaxConcurrent', must be bigger than or equal to 1.";
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
    * Gets computeEngineMaxInstance
    *  队列能启动的最大spark driver数量
    *
    * @return int|null
    */
    public function getComputeEngineMaxInstance()
    {
        return $this->container['computeEngineMaxInstance'];
    }

    /**
    * Sets computeEngineMaxInstance
    *
    * @param int|null $computeEngineMaxInstance 队列能启动的最大spark driver数量
    *
    * @return $this
    */
    public function setComputeEngineMaxInstance($computeEngineMaxInstance)
    {
        $this->container['computeEngineMaxInstance'] = $computeEngineMaxInstance;
        return $this;
    }

    /**
    * Gets jobMaxConcurrent
    *  单个spark driver能同时运行的最大任务数量
    *
    * @return int|null
    */
    public function getJobMaxConcurrent()
    {
        return $this->container['jobMaxConcurrent'];
    }

    /**
    * Sets jobMaxConcurrent
    *
    * @param int|null $jobMaxConcurrent 单个spark driver能同时运行的最大任务数量
    *
    * @return $this
    */
    public function setJobMaxConcurrent($jobMaxConcurrent)
    {
        $this->container['jobMaxConcurrent'] = $jobMaxConcurrent;
        return $this;
    }

    /**
    * Gets computeEngineMaxPrefetchInstance
    *  队列预先启动的最大spark driver数量
    *
    * @return int|null
    */
    public function getComputeEngineMaxPrefetchInstance()
    {
        return $this->container['computeEngineMaxPrefetchInstance'];
    }

    /**
    * Sets computeEngineMaxPrefetchInstance
    *
    * @param int|null $computeEngineMaxPrefetchInstance 队列预先启动的最大spark driver数量
    *
    * @return $this
    */
    public function setComputeEngineMaxPrefetchInstance($computeEngineMaxPrefetchInstance)
    {
        $this->container['computeEngineMaxPrefetchInstance'] = $computeEngineMaxPrefetchInstance;
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

