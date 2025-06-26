<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    * failedCode  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    * failedDetail  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    * progress  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobName' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'failedCode' => 'string',
            'failedDetail' => 'string',
            'progress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    * failedCode  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    * failedDetail  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    * progress  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobName' => null,
        'beginTime' => null,
        'endTime' => null,
        'status' => null,
        'failedCode' => null,
        'failedDetail' => null,
        'progress' => null
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
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    * failedCode  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    * failedDetail  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    * progress  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'failedCode' => 'failed_code',
            'failedDetail' => 'failed_detail',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    * failedCode  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    * failedDetail  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    * progress  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'failedCode' => 'setFailedCode',
            'failedDetail' => 'setFailedDetail',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * jobName  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    * endTime  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    * failedCode  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    * failedDetail  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    * progress  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'failedCode' => 'getFailedCode',
            'failedDetail' => 'getFailedDetail',
            'progress' => 'getProgress'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failedCode'] = isset($data['failedCode']) ? $data['failedCode'] : null;
        $this->container['failedDetail'] = isset($data['failedDetail']) ? $data['failedDetail'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
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
    * Gets jobId
    *  **参数解释**： 任务ID。 **取值范围**： 不涉及。
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
    * @param string|null $jobId **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**： 任务名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName **参数解释**： 任务名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**： 任务开始时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
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
    * @param string|null $endTime **参数解释**： 任务结束时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 任务当前状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failedCode
    *  **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailedCode()
    {
        return $this->container['failedCode'];
    }

    /**
    * Sets failedCode
    *
    * @param string|null $failedCode **参数解释**： 任务失败错误码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedCode($failedCode)
    {
        $this->container['failedCode'] = $failedCode;
        return $this;
    }

    /**
    * Gets failedDetail
    *  **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailedDetail()
    {
        return $this->container['failedDetail'];
    }

    /**
    * Sets failedDetail
    *
    * @param string|null $failedDetail **参数解释**： 任务失败错误详情。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedDetail($failedDetail)
    {
        $this->container['failedDetail'] = $failedDetail;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress **参数解释**： 任务进度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

