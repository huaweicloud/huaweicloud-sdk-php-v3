<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Entities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Entities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subJobsTotal  子任务数量。没有子任务时为0
    * subJobs  每个子任务的执行信息。没有子任务时为空列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subJobsTotal' => 'int',
            'subJobs' => '\HuaweiCloud\SDK\Bms\V1\Model\SubJobs[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subJobsTotal  子任务数量。没有子任务时为0
    * subJobs  每个子任务的执行信息。没有子任务时为空列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subJobsTotal' => 'int32',
        'subJobs' => null
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
    * subJobsTotal  子任务数量。没有子任务时为0
    * subJobs  每个子任务的执行信息。没有子任务时为空列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subJobsTotal' => 'sub_jobs_total',
            'subJobs' => 'sub_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subJobsTotal  子任务数量。没有子任务时为0
    * subJobs  每个子任务的执行信息。没有子任务时为空列表
    *
    * @var string[]
    */
    protected static $setters = [
            'subJobsTotal' => 'setSubJobsTotal',
            'subJobs' => 'setSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subJobsTotal  子任务数量。没有子任务时为0
    * subJobs  每个子任务的执行信息。没有子任务时为空列表
    *
    * @var string[]
    */
    protected static $getters = [
            'subJobsTotal' => 'getSubJobsTotal',
            'subJobs' => 'getSubJobs'
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
        $this->container['subJobsTotal'] = isset($data['subJobsTotal']) ? $data['subJobsTotal'] : null;
        $this->container['subJobs'] = isset($data['subJobs']) ? $data['subJobs'] : null;
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
    * Gets subJobsTotal
    *  子任务数量。没有子任务时为0
    *
    * @return int|null
    */
    public function getSubJobsTotal()
    {
        return $this->container['subJobsTotal'];
    }

    /**
    * Sets subJobsTotal
    *
    * @param int|null $subJobsTotal 子任务数量。没有子任务时为0
    *
    * @return $this
    */
    public function setSubJobsTotal($subJobsTotal)
    {
        $this->container['subJobsTotal'] = $subJobsTotal;
        return $this;
    }

    /**
    * Gets subJobs
    *  每个子任务的执行信息。没有子任务时为空列表
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\SubJobs[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\SubJobs[]|null $subJobs 每个子任务的执行信息。没有子任务时为空列表
    *
    * @return $this
    */
    public function setSubJobs($subJobs)
    {
        $this->container['subJobs'] = $subJobs;
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

