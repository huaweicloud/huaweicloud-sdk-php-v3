<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShortJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShortJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  jobType
    * jobId  任务id。
    * state  state
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * assessResult  assessResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ShortJobType',
            'jobId' => 'string',
            'state' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\JobState',
            'jobFailedCode' => 'string',
            'jobFailedReason' => 'string',
            'createTime' => 'int',
            'lastupdateTime' => 'int',
            'assessResult' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  jobType
    * jobId  任务id。
    * state  state
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * assessResult  assessResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'jobId' => null,
        'state' => null,
        'jobFailedCode' => null,
        'jobFailedReason' => null,
        'createTime' => 'int64',
        'lastupdateTime' => 'int64',
        'assessResult' => null
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
    * jobType  jobType
    * jobId  任务id。
    * state  state
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * assessResult  assessResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'jobId' => 'job_id',
            'state' => 'state',
            'jobFailedCode' => 'job_failed_code',
            'jobFailedReason' => 'job_failed_reason',
            'createTime' => 'create_time',
            'lastupdateTime' => 'lastupdate_time',
            'assessResult' => 'assess_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  jobType
    * jobId  任务id。
    * state  state
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * assessResult  assessResult
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'jobId' => 'setJobId',
            'state' => 'setState',
            'jobFailedCode' => 'setJobFailedCode',
            'jobFailedReason' => 'setJobFailedReason',
            'createTime' => 'setCreateTime',
            'lastupdateTime' => 'setLastupdateTime',
            'assessResult' => 'setAssessResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  jobType
    * jobId  任务id。
    * state  state
    * jobFailedCode  当任务失败时呈现,失败错误码。
    * jobFailedReason  当任务失败时呈现,失败原因。
    * createTime  任务创建时间。
    * lastupdateTime  任务状态更新时间。
    * assessResult  assessResult
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'jobId' => 'getJobId',
            'state' => 'getState',
            'jobFailedCode' => 'getJobFailedCode',
            'jobFailedReason' => 'getJobFailedReason',
            'createTime' => 'getCreateTime',
            'lastupdateTime' => 'getLastupdateTime',
            'assessResult' => 'getAssessResult'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['jobFailedCode'] = isset($data['jobFailedCode']) ? $data['jobFailedCode'] : null;
        $this->container['jobFailedReason'] = isset($data['jobFailedReason']) ? $data['jobFailedReason'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastupdateTime'] = isset($data['lastupdateTime']) ? $data['lastupdateTime'] : null;
        $this->container['assessResult'] = isset($data['assessResult']) ? $data['assessResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobFailedCode']) && (mb_strlen($this->container['jobFailedCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobFailedCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobFailedCode']) && (mb_strlen($this->container['jobFailedCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobFailedCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobFailedReason']) && (mb_strlen($this->container['jobFailedReason']) > 256)) {
                $invalidProperties[] = "invalid value for 'jobFailedReason', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['jobFailedReason']) && (mb_strlen($this->container['jobFailedReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobFailedReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastupdateTime']) && ($this->container['lastupdateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lastupdateTime']) && ($this->container['lastupdateTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'lastupdateTime', must be bigger than or equal to 1.";
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
    * Gets jobType
    *  jobType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ShortJobType|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ShortJobType|null $jobType jobType
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id。
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
    * @param string|null $jobId 任务id。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\JobState|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\JobState|null $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets jobFailedCode
    *  当任务失败时呈现,失败错误码。
    *
    * @return string|null
    */
    public function getJobFailedCode()
    {
        return $this->container['jobFailedCode'];
    }

    /**
    * Sets jobFailedCode
    *
    * @param string|null $jobFailedCode 当任务失败时呈现,失败错误码。
    *
    * @return $this
    */
    public function setJobFailedCode($jobFailedCode)
    {
        $this->container['jobFailedCode'] = $jobFailedCode;
        return $this;
    }

    /**
    * Gets jobFailedReason
    *  当任务失败时呈现,失败原因。
    *
    * @return string|null
    */
    public function getJobFailedReason()
    {
        return $this->container['jobFailedReason'];
    }

    /**
    * Sets jobFailedReason
    *
    * @param string|null $jobFailedReason 当任务失败时呈现,失败原因。
    *
    * @return $this
    */
    public function setJobFailedReason($jobFailedReason)
    {
        $this->container['jobFailedReason'] = $jobFailedReason;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastupdateTime
    *  任务状态更新时间。
    *
    * @return int|null
    */
    public function getLastupdateTime()
    {
        return $this->container['lastupdateTime'];
    }

    /**
    * Sets lastupdateTime
    *
    * @param int|null $lastupdateTime 任务状态更新时间。
    *
    * @return $this
    */
    public function setLastupdateTime($lastupdateTime)
    {
        $this->container['lastupdateTime'] = $lastupdateTime;
        return $this;
    }

    /**
    * Gets assessResult
    *  assessResult
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessResult|null
    */
    public function getAssessResult()
    {
        return $this->container['assessResult'];
    }

    /**
    * Sets assessResult
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessResult|null $assessResult assessResult
    *
    * @return $this
    */
    public function setAssessResult($assessResult)
    {
        $this->container['assessResult'] = $assessResult;
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

