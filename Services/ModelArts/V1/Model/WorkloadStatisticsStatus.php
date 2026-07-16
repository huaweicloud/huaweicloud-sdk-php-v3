<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadStatisticsStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadStatistics_status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queue  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    * abnormal  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    * terminating  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    * creating  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    * running  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    * completed  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    * terminated  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    * failed  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queue' => 'int',
            'pending' => 'int',
            'abnormal' => 'int',
            'terminating' => 'int',
            'creating' => 'int',
            'running' => 'int',
            'completed' => 'int',
            'terminated' => 'int',
            'failed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queue  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    * abnormal  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    * terminating  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    * creating  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    * running  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    * completed  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    * terminated  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    * failed  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queue' => null,
        'pending' => null,
        'abnormal' => null,
        'terminating' => null,
        'creating' => null,
        'running' => null,
        'completed' => null,
        'terminated' => null,
        'failed' => null
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
    * queue  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    * abnormal  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    * terminating  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    * creating  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    * running  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    * completed  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    * terminated  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    * failed  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queue' => 'Queue',
            'pending' => 'Pending',
            'abnormal' => 'Abnormal',
            'terminating' => 'Terminating',
            'creating' => 'Creating',
            'running' => 'Running',
            'completed' => 'Completed',
            'terminated' => 'Terminated',
            'failed' => 'Failed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queue  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    * abnormal  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    * terminating  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    * creating  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    * running  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    * completed  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    * terminated  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    * failed  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'queue' => 'setQueue',
            'pending' => 'setPending',
            'abnormal' => 'setAbnormal',
            'terminating' => 'setTerminating',
            'creating' => 'setCreating',
            'running' => 'setRunning',
            'completed' => 'setCompleted',
            'terminated' => 'setTerminated',
            'failed' => 'setFailed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queue  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    * pending  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    * abnormal  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    * terminating  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    * creating  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    * running  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    * completed  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    * terminated  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    * failed  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'queue' => 'getQueue',
            'pending' => 'getPending',
            'abnormal' => 'getAbnormal',
            'terminating' => 'getTerminating',
            'creating' => 'getCreating',
            'running' => 'getRunning',
            'completed' => 'getCompleted',
            'terminated' => 'getTerminated',
            'failed' => 'getFailed'
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
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['pending'] = isset($data['pending']) ? $data['pending'] : null;
        $this->container['abnormal'] = isset($data['abnormal']) ? $data['abnormal'] : null;
        $this->container['terminating'] = isset($data['terminating']) ? $data['terminating'] : null;
        $this->container['creating'] = isset($data['creating']) ? $data['creating'] : null;
        $this->container['running'] = isset($data['running']) ? $data['running'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['terminated'] = isset($data['terminated']) ? $data['terminated'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
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
    * Gets queue
    *  **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param int|null $queue **参数描述**： 排队中的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets pending
    *  **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
    * Sets pending
    *
    * @param int|null $pending **参数描述**： 等待中的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPending($pending)
    {
        $this->container['pending'] = $pending;
        return $this;
    }

    /**
    * Gets abnormal
    *  **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getAbnormal()
    {
        return $this->container['abnormal'];
    }

    /**
    * Sets abnormal
    *
    * @param int|null $abnormal **参数描述**： 异常的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAbnormal($abnormal)
    {
        $this->container['abnormal'] = $abnormal;
        return $this;
    }

    /**
    * Gets terminating
    *  **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTerminating()
    {
        return $this->container['terminating'];
    }

    /**
    * Sets terminating
    *
    * @param int|null $terminating **参数描述**： 终止中的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTerminating($terminating)
    {
        $this->container['terminating'] = $terminating;
        return $this;
    }

    /**
    * Gets creating
    *  **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCreating()
    {
        return $this->container['creating'];
    }

    /**
    * Sets creating
    *
    * @param int|null $creating **参数描述**： 创建中的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreating($creating)
    {
        $this->container['creating'] = $creating;
        return $this;
    }

    /**
    * Gets running
    *  **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
    * Sets running
    *
    * @param int|null $running **参数描述**： 运行中的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRunning($running)
    {
        $this->container['running'] = $running;
        return $this;
    }

    /**
    * Gets completed
    *  **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
    * Sets completed
    *
    * @param int|null $completed **参数描述**： 已完成的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;
        return $this;
    }

    /**
    * Gets terminated
    *  **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTerminated()
    {
        return $this->container['terminated'];
    }

    /**
    * Sets terminated
    *
    * @param int|null $terminated **参数描述**： 已终止的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTerminated($terminated)
    {
        $this->container['terminated'] = $terminated;
        return $this;
    }

    /**
    * Gets failed
    *  **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int|null $failed **参数描述**：运行失败的作业个数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
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

