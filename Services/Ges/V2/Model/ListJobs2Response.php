<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobs2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobs2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobCount  任务总数。
    * jobList  任务列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobCount' => 'int',
            'jobList' => '\HuaweiCloud\SDK\Ges\V2\Model\ListJobsRespJobList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobCount  任务总数。
    * jobList  任务列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobCount' => 'int32',
        'jobList' => null
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
    * jobCount  任务总数。
    * jobList  任务列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobCount' => 'job_count',
            'jobList' => 'job_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobCount  任务总数。
    * jobList  任务列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobCount' => 'setJobCount',
            'jobList' => 'setJobList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobCount  任务总数。
    * jobList  任务列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobCount' => 'getJobCount',
            'jobList' => 'getJobList'
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
        $this->container['jobCount'] = isset($data['jobCount']) ? $data['jobCount'] : null;
        $this->container['jobList'] = isset($data['jobList']) ? $data['jobList'] : null;
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
    * Gets jobCount
    *  任务总数。
    *
    * @return int|null
    */
    public function getJobCount()
    {
        return $this->container['jobCount'];
    }

    /**
    * Sets jobCount
    *
    * @param int|null $jobCount 任务总数。
    *
    * @return $this
    */
    public function setJobCount($jobCount)
    {
        $this->container['jobCount'] = $jobCount;
        return $this;
    }

    /**
    * Gets jobList
    *  任务列表。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ListJobsRespJobList[]|null
    */
    public function getJobList()
    {
        return $this->container['jobList'];
    }

    /**
    * Sets jobList
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ListJobsRespJobList[]|null $jobList 任务列表。
    *
    * @return $this
    */
    public function setJobList($jobList)
    {
        $this->container['jobList'] = $jobList;
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

