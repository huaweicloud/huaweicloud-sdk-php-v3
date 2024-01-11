<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务执行状态，取值如下。
    * progress  任务执行进度百分比, 取值范围：[0, 100]。
    * createTime  转码任务启动时间
    * startTime  下发xcode任务成功时间
    * endTime  转码任务结束时间
    * input  input
    * output  output
    * userData  用户数据。
    * errorCode  转码任务错误码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * mediaDetail  mediaDetail
    * xcodeError  xcodeError
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'progress' => 'int',
            'createTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'userData' => 'string',
            'errorCode' => 'string',
            'description' => 'string',
            'mediaDetail' => '\HuaweiCloud\SDK\Mpc\V1\Model\MediaDetail',
            'xcodeError' => '\HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID。
    * status  任务执行状态，取值如下。
    * progress  任务执行进度百分比, 取值范围：[0, 100]。
    * createTime  转码任务启动时间
    * startTime  下发xcode任务成功时间
    * endTime  转码任务结束时间
    * input  input
    * output  output
    * userData  用户数据。
    * errorCode  转码任务错误码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * mediaDetail  mediaDetail
    * xcodeError  xcodeError
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'progress' => 'int32',
        'createTime' => null,
        'startTime' => null,
        'endTime' => null,
        'input' => null,
        'output' => null,
        'userData' => null,
        'errorCode' => null,
        'description' => null,
        'mediaDetail' => null,
        'xcodeError' => null
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
    * taskId  任务ID。
    * status  任务执行状态，取值如下。
    * progress  任务执行进度百分比, 取值范围：[0, 100]。
    * createTime  转码任务启动时间
    * startTime  下发xcode任务成功时间
    * endTime  转码任务结束时间
    * input  input
    * output  output
    * userData  用户数据。
    * errorCode  转码任务错误码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * mediaDetail  mediaDetail
    * xcodeError  xcodeError
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'progress' => 'progress',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'input' => 'input',
            'output' => 'output',
            'userData' => 'user_data',
            'errorCode' => 'error_code',
            'description' => 'description',
            'mediaDetail' => 'media_detail',
            'xcodeError' => 'xcode_error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID。
    * status  任务执行状态，取值如下。
    * progress  任务执行进度百分比, 取值范围：[0, 100]。
    * createTime  转码任务启动时间
    * startTime  下发xcode任务成功时间
    * endTime  转码任务结束时间
    * input  input
    * output  output
    * userData  用户数据。
    * errorCode  转码任务错误码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * mediaDetail  mediaDetail
    * xcodeError  xcodeError
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'input' => 'setInput',
            'output' => 'setOutput',
            'userData' => 'setUserData',
            'errorCode' => 'setErrorCode',
            'description' => 'setDescription',
            'mediaDetail' => 'setMediaDetail',
            'xcodeError' => 'setXcodeError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID。
    * status  任务执行状态，取值如下。
    * progress  任务执行进度百分比, 取值范围：[0, 100]。
    * createTime  转码任务启动时间
    * startTime  下发xcode任务成功时间
    * endTime  转码任务结束时间
    * input  input
    * output  output
    * userData  用户数据。
    * errorCode  转码任务错误码。
    * description  转码任务描述，当转码出现异常时，此字段为异常的原因。
    * mediaDetail  mediaDetail
    * xcodeError  xcodeError
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'input' => 'getInput',
            'output' => 'getOutput',
            'userData' => 'getUserData',
            'errorCode' => 'getErrorCode',
            'description' => 'getDescription',
            'mediaDetail' => 'getMediaDetail',
            'xcodeError' => 'getXcodeError'
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
    const STATUS_NO_TASK = 'NO_TASK';
    const STATUS_WAITING = 'WAITING';
    const STATUS_TRANSCODING = 'TRANSCODING';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_NEED_TO_BE_AUDIT = 'NEED_TO_BE_AUDIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NO_TASK,
            self::STATUS_WAITING,
            self::STATUS_TRANSCODING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_CANCELED,
            self::STATUS_NEED_TO_BE_AUDIT,
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['mediaDetail'] = isset($data['mediaDetail']) ? $data['mediaDetail'] : null;
        $this->container['xcodeError'] = isset($data['xcodeError']) ? $data['xcodeError'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 16)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 100)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets taskId
    *  任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态，取值如下。
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
    * @param string|null $status 任务执行状态，取值如下。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progress
    *  任务执行进度百分比, 取值范围：[0, 100]。
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 任务执行进度百分比, 取值范围：[0, 100]。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets createTime
    *  转码任务启动时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 转码任务启动时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  下发xcode任务成功时间
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
    * @param string|null $startTime 下发xcode任务成功时间
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
    *  转码任务结束时间
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
    * @param string|null $endTime 转码任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets userData
    *  用户数据。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户数据。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets errorCode
    *  转码任务错误码。
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
    * @param string|null $errorCode 转码任务错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets description
    *  转码任务描述，当转码出现异常时，此字段为异常的原因。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 转码任务描述，当转码出现异常时，此字段为异常的原因。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets mediaDetail
    *  mediaDetail
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MediaDetail|null
    */
    public function getMediaDetail()
    {
        return $this->container['mediaDetail'];
    }

    /**
    * Sets mediaDetail
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MediaDetail|null $mediaDetail mediaDetail
    *
    * @return $this
    */
    public function setMediaDetail($mediaDetail)
    {
        $this->container['mediaDetail'] = $mediaDetail;
        return $this;
    }

    /**
    * Gets xcodeError
    *  xcodeError
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse|null
    */
    public function getXcodeError()
    {
        return $this->container['xcodeError'];
    }

    /**
    * Sets xcodeError
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ErrorResponse|null $xcodeError xcodeError
    *
    * @return $this
    */
    public function setXcodeError($xcodeError)
    {
        $this->container['xcodeError'] = $xcodeError;
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

