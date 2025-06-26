<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateItemResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateItemResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    * from  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    * to  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    * status  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    * process  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'from' => 'string',
            'to' => 'string',
            'status' => 'string',
            'process' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'jobId' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    * from  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    * to  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    * status  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    * process  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'from' => null,
        'to' => null,
        'status' => null,
        'process' => null,
        'startTime' => null,
        'endTime' => null,
        'jobId' => null,
        'failedReason' => null
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
    * id  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    * from  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    * to  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    * status  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    * process  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'from' => 'from',
            'to' => 'to',
            'status' => 'status',
            'process' => 'process',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'jobId' => 'job_id',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    * from  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    * to  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    * status  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    * process  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'status' => 'setStatus',
            'process' => 'setProcess',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'jobId' => 'setJobId',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    * from  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    * to  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    * status  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    * process  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    * startTime  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    * jobId  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'status' => 'getStatus',
            'process' => 'getProcess',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'jobId' => 'getJobId',
            'failedReason' => 'getFailedReason'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
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
    * Gets id
    *  **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 升级项ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**： 起始版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from **参数解释**： 起始版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释**： 目标版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to **参数解释**： 目标版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 升级路径状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets process
    *  **参数解释**： 升级进度。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process **参数解释**： 升级进度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 起始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 起始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**： 升级任务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
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

