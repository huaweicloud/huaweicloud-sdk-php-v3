<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisConf';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * redisMode  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    * scheduleConf  scheduleConf
    * parallelJobs  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    * parallelJob  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    * priorityPolicy  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    * bucketSplitInfo  bucketSplitInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'redisMode' => 'string',
            'scheduleConf' => '\HuaweiCloud\SDK\Dws\V2\Model\ScheduleConf',
            'parallelJobs' => 'int',
            'parallelJob' => 'int',
            'priorityPolicy' => 'string',
            'bucketSplitInfo' => '\HuaweiCloud\SDK\Dws\V2\Model\BucketSplitInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * redisMode  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    * scheduleConf  scheduleConf
    * parallelJobs  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    * parallelJob  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    * priorityPolicy  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    * bucketSplitInfo  bucketSplitInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'redisMode' => null,
        'scheduleConf' => null,
        'parallelJobs' => 'int32',
        'parallelJob' => 'int32',
        'priorityPolicy' => null,
        'bucketSplitInfo' => null
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
    * redisMode  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    * scheduleConf  scheduleConf
    * parallelJobs  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    * parallelJob  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    * priorityPolicy  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    * bucketSplitInfo  bucketSplitInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'redisMode' => 'redis_mode',
            'scheduleConf' => 'schedule_conf',
            'parallelJobs' => 'parallel_jobs',
            'parallelJob' => 'parallel_job',
            'priorityPolicy' => 'priority_policy',
            'bucketSplitInfo' => 'bucket_split_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * redisMode  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    * scheduleConf  scheduleConf
    * parallelJobs  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    * parallelJob  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    * priorityPolicy  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    * bucketSplitInfo  bucketSplitInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'redisMode' => 'setRedisMode',
            'scheduleConf' => 'setScheduleConf',
            'parallelJobs' => 'setParallelJobs',
            'parallelJob' => 'setParallelJob',
            'priorityPolicy' => 'setPriorityPolicy',
            'bucketSplitInfo' => 'setBucketSplitInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * redisMode  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    * scheduleConf  scheduleConf
    * parallelJobs  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    * parallelJob  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    * priorityPolicy  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    * bucketSplitInfo  bucketSplitInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'redisMode' => 'getRedisMode',
            'scheduleConf' => 'getScheduleConf',
            'parallelJobs' => 'getParallelJobs',
            'parallelJob' => 'getParallelJob',
            'priorityPolicy' => 'getPriorityPolicy',
            'bucketSplitInfo' => 'getBucketSplitInfo'
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
        $this->container['redisMode'] = isset($data['redisMode']) ? $data['redisMode'] : null;
        $this->container['scheduleConf'] = isset($data['scheduleConf']) ? $data['scheduleConf'] : null;
        $this->container['parallelJobs'] = isset($data['parallelJobs']) ? $data['parallelJobs'] : null;
        $this->container['parallelJob'] = isset($data['parallelJob']) ? $data['parallelJob'] : null;
        $this->container['priorityPolicy'] = isset($data['priorityPolicy']) ? $data['priorityPolicy'] : null;
        $this->container['bucketSplitInfo'] = isset($data['bucketSplitInfo']) ? $data['bucketSplitInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['redisMode'] === null) {
            $invalidProperties[] = "'redisMode' can't be null";
        }
        if ($this->container['parallelJobs'] === null) {
            $invalidProperties[] = "'parallelJobs' can't be null";
        }
        if ($this->container['parallelJob'] === null) {
            $invalidProperties[] = "'parallelJob' can't be null";
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
    * Gets redisMode
    *  **参数解释**： 重分布模式。 **取值范围**： online|offline。
    *
    * @return string
    */
    public function getRedisMode()
    {
        return $this->container['redisMode'];
    }

    /**
    * Sets redisMode
    *
    * @param string $redisMode **参数解释**： 重分布模式。 **取值范围**： online|offline。
    *
    * @return $this
    */
    public function setRedisMode($redisMode)
    {
        $this->container['redisMode'] = $redisMode;
        return $this;
    }

    /**
    * Gets scheduleConf
    *  scheduleConf
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ScheduleConf|null
    */
    public function getScheduleConf()
    {
        return $this->container['scheduleConf'];
    }

    /**
    * Sets scheduleConf
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ScheduleConf|null $scheduleConf scheduleConf
    *
    * @return $this
    */
    public function setScheduleConf($scheduleConf)
    {
        $this->container['scheduleConf'] = $scheduleConf;
        return $this;
    }

    /**
    * Gets parallelJobs
    *  **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    *
    * @return int
    */
    public function getParallelJobs()
    {
        return $this->container['parallelJobs'];
    }

    /**
    * Sets parallelJobs
    *
    * @param int $parallelJobs **参数解释**： 重分布并发数。 **取值范围**： 1~200。
    *
    * @return $this
    */
    public function setParallelJobs($parallelJobs)
    {
        $this->container['parallelJobs'] = $parallelJobs;
        return $this;
    }

    /**
    * Gets parallelJob
    *  **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    *
    * @return int
    */
    public function getParallelJob()
    {
        return $this->container['parallelJob'];
    }

    /**
    * Sets parallelJob
    *
    * @param int $parallelJob **参数解释**： 重分布并发数，已经废弃。 **取值范围**： 1~200。
    *
    * @return $this
    */
    public function setParallelJob($parallelJob)
    {
        $this->container['parallelJob'] = $parallelJob;
        return $this;
    }

    /**
    * Gets priorityPolicy
    *  **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    *
    * @return string|null
    */
    public function getPriorityPolicy()
    {
        return $this->container['priorityPolicy'];
    }

    /**
    * Sets priorityPolicy
    *
    * @param string|null $priorityPolicy **参数解释**： 优先级策略,支持large优先对大表进行重分布，small优先对小表进行重分布，default默认顺序进行重分布。 **取值范围**： large|small|default。
    *
    * @return $this
    */
    public function setPriorityPolicy($priorityPolicy)
    {
        $this->container['priorityPolicy'] = $priorityPolicy;
        return $this;
    }

    /**
    * Gets bucketSplitInfo
    *  bucketSplitInfo
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\BucketSplitInfo|null
    */
    public function getBucketSplitInfo()
    {
        return $this->container['bucketSplitInfo'];
    }

    /**
    * Sets bucketSplitInfo
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\BucketSplitInfo|null $bucketSplitInfo bucketSplitInfo
    *
    * @return $this
    */
    public function setBucketSplitInfo($bucketSplitInfo)
    {
        $this->container['bucketSplitInfo'] = $bucketSplitInfo;
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

