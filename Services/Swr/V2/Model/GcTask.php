<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GcTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GcTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  gc任务的ID。
    * jobName  gc任务的名称。
    * jobKind  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    * jobParameters  jobParameters
    * jobStatus  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    * creationTime  gc任务的创建时间。
    * updateTime  gc任务的更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'jobName' => 'string',
            'jobKind' => 'string',
            'jobParameters' => '\HuaweiCloud\SDK\Swr\V2\Model\JobParameters',
            'jobStatus' => 'string',
            'creationTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  gc任务的ID。
    * jobName  gc任务的名称。
    * jobKind  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    * jobParameters  jobParameters
    * jobStatus  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    * creationTime  gc任务的创建时间。
    * updateTime  gc任务的更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'jobName' => null,
        'jobKind' => null,
        'jobParameters' => null,
        'jobStatus' => null,
        'creationTime' => null,
        'updateTime' => null
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
    * id  gc任务的ID。
    * jobName  gc任务的名称。
    * jobKind  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    * jobParameters  jobParameters
    * jobStatus  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    * creationTime  gc任务的创建时间。
    * updateTime  gc任务的更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'jobName' => 'job_name',
            'jobKind' => 'job_kind',
            'jobParameters' => 'job_parameters',
            'jobStatus' => 'job_status',
            'creationTime' => 'creation_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  gc任务的ID。
    * jobName  gc任务的名称。
    * jobKind  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    * jobParameters  jobParameters
    * jobStatus  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    * creationTime  gc任务的创建时间。
    * updateTime  gc任务的更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'jobName' => 'setJobName',
            'jobKind' => 'setJobKind',
            'jobParameters' => 'setJobParameters',
            'jobStatus' => 'setJobStatus',
            'creationTime' => 'setCreationTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  gc任务的ID。
    * jobName  gc任务的名称。
    * jobKind  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    * jobParameters  jobParameters
    * jobStatus  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    * creationTime  gc任务的创建时间。
    * updateTime  gc任务的更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'jobName' => 'getJobName',
            'jobKind' => 'getJobKind',
            'jobParameters' => 'getJobParameters',
            'jobStatus' => 'getJobStatus',
            'creationTime' => 'getCreationTime',
            'updateTime' => 'getUpdateTime'
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
    const JOB_KIND_MANUAL = 'MANUAL';
    const JOB_KIND_SCHEDULE = 'SCHEDULE';
    const JOB_STATUS_SUCCESS = 'Success';
    const JOB_STATUS_STOPPED = 'Stopped';
    const JOB_STATUS_RUNNING = 'Running';
    const JOB_STATUS_PENDING = 'Pending';
    const JOB_STATUS_ERROR = 'Error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobKindAllowableValues()
    {
        return [
            self::JOB_KIND_MANUAL,
            self::JOB_KIND_SCHEDULE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobStatusAllowableValues()
    {
        return [
            self::JOB_STATUS_SUCCESS,
            self::JOB_STATUS_STOPPED,
            self::JOB_STATUS_RUNNING,
            self::JOB_STATUS_PENDING,
            self::JOB_STATUS_ERROR,
        ];
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobKind'] = isset($data['jobKind']) ? $data['jobKind'] : null;
        $this->container['jobParameters'] = isset($data['jobParameters']) ? $data['jobParameters'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['creationTime'] = isset($data['creationTime']) ? $data['creationTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobKindAllowableValues();
                if (!is_null($this->container['jobKind']) && !in_array($this->container['jobKind'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobKind', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobStatusAllowableValues();
                if (!is_null($this->container['jobStatus']) && !in_array($this->container['jobStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  gc任务的ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id gc任务的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets jobName
    *  gc任务的名称。
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
    * @param string|null $jobName gc任务的名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobKind
    *  任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    *
    * @return string|null
    */
    public function getJobKind()
    {
        return $this->container['jobKind'];
    }

    /**
    * Sets jobKind
    *
    * @param string|null $jobKind 任务类型，MANUAL：手动执行，SCHEDULE：定时执行。
    *
    * @return $this
    */
    public function setJobKind($jobKind)
    {
        $this->container['jobKind'] = $jobKind;
        return $this;
    }

    /**
    * Gets jobParameters
    *  jobParameters
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\JobParameters|null
    */
    public function getJobParameters()
    {
        return $this->container['jobParameters'];
    }

    /**
    * Sets jobParameters
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\JobParameters|null $jobParameters jobParameters
    *
    * @return $this
    */
    public function setJobParameters($jobParameters)
    {
        $this->container['jobParameters'] = $jobParameters;
        return $this;
    }

    /**
    * Gets jobStatus
    *  gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus gc任务的状态，Success：已完成，Stopped：已停止，Running：清理中，Pending：排队中，Error：失败。
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets creationTime
    *  gc任务的创建时间。
    *
    * @return string|null
    */
    public function getCreationTime()
    {
        return $this->container['creationTime'];
    }

    /**
    * Sets creationTime
    *
    * @param string|null $creationTime gc任务的创建时间。
    *
    * @return $this
    */
    public function setCreationTime($creationTime)
    {
        $this->container['creationTime'] = $creationTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  gc任务的更新时间。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime gc任务的更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

