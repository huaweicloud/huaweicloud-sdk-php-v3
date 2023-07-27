<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubJobs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubJobs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    * entities  entities
    * jobId  Job ID
    * jobType  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    * beginTime  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
    * endTime  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    * errorCode  Job执行失败时的错误码
    * failReason  Job执行失败时的错误原因
    * message  出现错误时，返回的错误消息
    * code  出现错误时，返回的错误码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'entities' => '\HuaweiCloud\SDK\Bms\V1\Model\Entitie',
            'jobId' => 'string',
            'jobType' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'errorCode' => 'string',
            'failReason' => 'string',
            'message' => 'string',
            'code' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    * entities  entities
    * jobId  Job ID
    * jobType  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    * beginTime  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
    * endTime  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    * errorCode  Job执行失败时的错误码
    * failReason  Job执行失败时的错误原因
    * message  出现错误时，返回的错误消息
    * code  出现错误时，返回的错误码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'entities' => null,
        'jobId' => null,
        'jobType' => null,
        'beginTime' => null,
        'endTime' => null,
        'errorCode' => null,
        'failReason' => null,
        'message' => null,
        'code' => null
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
    * status  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    * entities  entities
    * jobId  Job ID
    * jobType  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    * beginTime  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
    * endTime  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    * errorCode  Job执行失败时的错误码
    * failReason  Job执行失败时的错误原因
    * message  出现错误时，返回的错误消息
    * code  出现错误时，返回的错误码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'entities' => 'entities',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'errorCode' => 'error_code',
            'failReason' => 'fail_reason',
            'message' => 'message',
            'code' => 'code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    * entities  entities
    * jobId  Job ID
    * jobType  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    * beginTime  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
    * endTime  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    * errorCode  Job执行失败时的错误码
    * failReason  Job执行失败时的错误原因
    * message  出现错误时，返回的错误消息
    * code  出现错误时，返回的错误码
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'entities' => 'setEntities',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'errorCode' => 'setErrorCode',
            'failReason' => 'setFailReason',
            'message' => 'setMessage',
            'code' => 'setCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    * entities  entities
    * jobId  Job ID
    * jobType  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    * beginTime  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
    * endTime  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    * errorCode  Job执行失败时的错误码
    * failReason  Job执行失败时的错误原因
    * message  出现错误时，返回的错误消息
    * code  出现错误时，返回的错误码
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'entities' => 'getEntities',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'errorCode' => 'getErrorCode',
            'failReason' => 'getFailReason',
            'message' => 'getMessage',
            'code' => 'getCode'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FAIL = 'FAIL';
    const STATUS_INIT = 'INIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_RUNNING,
            self::STATUS_FAIL,
            self::STATUS_INIT,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets status
    *  Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
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
    * @param string|null $status Job的状态。SUCCESS：成功RUNNING：运行中FAIL：失败INIT：正在初始化
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets entities
    *  entities
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\Entitie|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\Entitie|null $entities entities
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets jobId
    *  Job ID
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
    * @param string|null $jobId Job ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobType
    *  Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType Job的类型，包含以下类型：baremetalSingleCreate：创建单个裸金属服务器；baremetalSingleOperate：修改单个裸金属服务器电源状态；baremetalAttachSingleVolume：挂载单个共享磁盘
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
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
    * @param string|null $beginTime 开始时间。时间戳格式为ISO 8601，例如：2019-04-25T20:04:47.591Z
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
    *  结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
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
    * @param string|null $endTime 结束时间。时间戳格式为ISO 8601，例如：2019-04-26T20:04:47.591Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorCode
    *  Job执行失败时的错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode Job执行失败时的错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets failReason
    *  Job执行失败时的错误原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason Job执行失败时的错误原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets message
    *  出现错误时，返回的错误消息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 出现错误时，返回的错误消息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets code
    *  出现错误时，返回的错误码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 出现错误时，返回的错误码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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

