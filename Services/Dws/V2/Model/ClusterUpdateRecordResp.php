<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterUpdateRecordResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterUpdateRecordResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  升级项目ID
    * status  升级状态
    * recordType  升级类型
    * fromVersion  升级前版本
    * toVersion  目标版本
    * startTime  开始时间
    * endTime  结束时间
    * jobId  升级任务ID
    * failedReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'status' => 'string',
            'recordType' => 'string',
            'fromVersion' => 'string',
            'toVersion' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'jobId' => 'string',
            'failedReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  升级项目ID
    * status  升级状态
    * recordType  升级类型
    * fromVersion  升级前版本
    * toVersion  目标版本
    * startTime  开始时间
    * endTime  结束时间
    * jobId  升级任务ID
    * failedReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'status' => null,
        'recordType' => null,
        'fromVersion' => null,
        'toVersion' => null,
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
    * itemId  升级项目ID
    * status  升级状态
    * recordType  升级类型
    * fromVersion  升级前版本
    * toVersion  目标版本
    * startTime  开始时间
    * endTime  结束时间
    * jobId  升级任务ID
    * failedReason  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'status' => 'status',
            'recordType' => 'record_type',
            'fromVersion' => 'from_version',
            'toVersion' => 'to_version',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'jobId' => 'job_id',
            'failedReason' => 'failed_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  升级项目ID
    * status  升级状态
    * recordType  升级类型
    * fromVersion  升级前版本
    * toVersion  目标版本
    * startTime  开始时间
    * endTime  结束时间
    * jobId  升级任务ID
    * failedReason  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'status' => 'setStatus',
            'recordType' => 'setRecordType',
            'fromVersion' => 'setFromVersion',
            'toVersion' => 'setToVersion',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'jobId' => 'setJobId',
            'failedReason' => 'setFailedReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  升级项目ID
    * status  升级状态
    * recordType  升级类型
    * fromVersion  升级前版本
    * toVersion  目标版本
    * startTime  开始时间
    * endTime  结束时间
    * jobId  升级任务ID
    * failedReason  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'status' => 'getStatus',
            'recordType' => 'getRecordType',
            'fromVersion' => 'getFromVersion',
            'toVersion' => 'getToVersion',
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['fromVersion'] = isset($data['fromVersion']) ? $data['fromVersion'] : null;
        $this->container['toVersion'] = isset($data['toVersion']) ? $data['toVersion'] : null;
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
    * Gets itemId
    *  升级项目ID
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId 升级项目ID
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets status
    *  升级状态
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
    * @param string|null $status 升级状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets recordType
    *  升级类型
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 升级类型
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets fromVersion
    *  升级前版本
    *
    * @return string|null
    */
    public function getFromVersion()
    {
        return $this->container['fromVersion'];
    }

    /**
    * Sets fromVersion
    *
    * @param string|null $fromVersion 升级前版本
    *
    * @return $this
    */
    public function setFromVersion($fromVersion)
    {
        $this->container['fromVersion'] = $fromVersion;
        return $this;
    }

    /**
    * Gets toVersion
    *  目标版本
    *
    * @return string|null
    */
    public function getToVersion()
    {
        return $this->container['toVersion'];
    }

    /**
    * Sets toVersion
    *
    * @param string|null $toVersion 目标版本
    *
    * @return $this
    */
    public function setToVersion($toVersion)
    {
        $this->container['toVersion'] = $toVersion;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param string|null $startTime 开始时间
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
    *  结束时间
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
    * @param string|null $endTime 结束时间
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
    *  升级任务ID
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
    * @param string|null $jobId 升级任务ID
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
    *  失败原因
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
    * @param string|null $failedReason 失败原因
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

