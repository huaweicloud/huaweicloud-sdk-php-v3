<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobCount  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    * jobs  **参数解释**： 任务列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobCount' => 'string',
            'jobs' => '\HuaweiCloud\SDK\Kafka\V2\Model\ScheduledTaskEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobCount  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    * jobs  **参数解释**： 任务列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobCount' => null,
        'jobs' => null
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
    * jobCount  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    * jobs  **参数解释**： 任务列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobCount' => 'job_count',
            'jobs' => 'jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobCount  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    * jobs  **参数解释**： 任务列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobCount' => 'setJobCount',
            'jobs' => 'setJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobCount  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    * jobs  **参数解释**： 任务列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobCount' => 'getJobCount',
            'jobs' => 'getJobs'
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
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
    *  **参数解释**： 任务总数。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobCount()
    {
        return $this->container['jobCount'];
    }

    /**
    * Sets jobCount
    *
    * @param string|null $jobCount **参数解释**： 任务总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobCount($jobCount)
    {
        $this->container['jobCount'] = $jobCount;
        return $this;
    }

    /**
    * Gets jobs
    *  **参数解释**： 任务列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ScheduledTaskEntity[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ScheduledTaskEntity[]|null $jobs **参数解释**： 任务列表。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
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

