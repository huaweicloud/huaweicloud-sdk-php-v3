<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求的唯一标识ID。
    * jobId  任务的唯一标识。
    * beginTime  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * endTime  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * status  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    * phoneId  云手机的唯一标识，云手机相关任务包含此字段。
    * serverId  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    * errorMsg  任务错误码说明。
    * errorCode  任务错误码。
    * executeMsg  任务执行返回内容，最长1024个字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'jobId' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'status' => 'int',
            'phoneId' => 'string',
            'serverId' => 'string',
            'errorMsg' => 'string',
            'errorCode' => 'string',
            'executeMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求的唯一标识ID。
    * jobId  任务的唯一标识。
    * beginTime  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * endTime  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * status  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    * phoneId  云手机的唯一标识，云手机相关任务包含此字段。
    * serverId  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    * errorMsg  任务错误码说明。
    * errorCode  任务错误码。
    * executeMsg  任务执行返回内容，最长1024个字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'jobId' => null,
        'beginTime' => null,
        'endTime' => null,
        'status' => 'int32',
        'phoneId' => null,
        'serverId' => null,
        'errorMsg' => null,
        'errorCode' => null,
        'executeMsg' => null
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
    * requestId  请求的唯一标识ID。
    * jobId  任务的唯一标识。
    * beginTime  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * endTime  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * status  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    * phoneId  云手机的唯一标识，云手机相关任务包含此字段。
    * serverId  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    * errorMsg  任务错误码说明。
    * errorCode  任务错误码。
    * executeMsg  任务执行返回内容，最长1024个字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'jobId' => 'job_id',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'phoneId' => 'phone_id',
            'serverId' => 'server_id',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code',
            'executeMsg' => 'execute_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求的唯一标识ID。
    * jobId  任务的唯一标识。
    * beginTime  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * endTime  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * status  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    * phoneId  云手机的唯一标识，云手机相关任务包含此字段。
    * serverId  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    * errorMsg  任务错误码说明。
    * errorCode  任务错误码。
    * executeMsg  任务执行返回内容，最长1024个字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'jobId' => 'setJobId',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'phoneId' => 'setPhoneId',
            'serverId' => 'setServerId',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode',
            'executeMsg' => 'setExecuteMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求的唯一标识ID。
    * jobId  任务的唯一标识。
    * beginTime  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * endTime  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
    * status  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    * phoneId  云手机的唯一标识，云手机相关任务包含此字段。
    * serverId  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    * errorMsg  任务错误码说明。
    * errorCode  任务错误码。
    * executeMsg  任务执行返回内容，最长1024个字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'jobId' => 'getJobId',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'phoneId' => 'getPhoneId',
            'serverId' => 'getServerId',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode',
            'executeMsg' => 'getExecuteMsg'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['phoneId'] = isset($data['phoneId']) ? $data['phoneId'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['executeMsg'] = isset($data['executeMsg']) ? $data['executeMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['beginTime']) && (mb_strlen($this->container['beginTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 1024)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 128)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < -128)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['phoneId']) && (mb_strlen($this->container['phoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 32)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 1024)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executeMsg']) && (mb_strlen($this->container['executeMsg']) > 1024)) {
                $invalidProperties[] = "invalid value for 'executeMsg', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['executeMsg']) && (mb_strlen($this->container['executeMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'executeMsg', the character length must be bigger than or equal to 0.";
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
    * Gets requestId
    *  请求的唯一标识ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求的唯一标识ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务的唯一标识。
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
    * @param string|null $jobId 任务的唯一标识。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
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
    * @param string|null $beginTime 任务处理开始时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
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
    *  任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
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
    * @param string|null $endTime 任务处理结束时间，时间格式为UTC，YYYY-MM-DDTHH:MM:SSZ。
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
    *  任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 任务状态。 - 1： 运行中 - 2： 成功 - -1： 失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets phoneId
    *  云手机的唯一标识，云手机相关任务包含此字段。
    *
    * @return string|null
    */
    public function getPhoneId()
    {
        return $this->container['phoneId'];
    }

    /**
    * Sets phoneId
    *
    * @param string|null $phoneId 云手机的唯一标识，云手机相关任务包含此字段。
    *
    * @return $this
    */
    public function setPhoneId($phoneId)
    {
        $this->container['phoneId'] = $phoneId;
        return $this;
    }

    /**
    * Gets serverId
    *  云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云手机服务器的唯一标识ID，云手机服务器相关任务包含此字段。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets errorMsg
    *  任务错误码说明。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 任务错误码说明。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  任务错误码。
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
    * @param string|null $errorCode 任务错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets executeMsg
    *  任务执行返回内容，最长1024个字节。
    *
    * @return string|null
    */
    public function getExecuteMsg()
    {
        return $this->container['executeMsg'];
    }

    /**
    * Sets executeMsg
    *
    * @param string|null $executeMsg 任务执行返回内容，最长1024个字节。
    *
    * @return $this
    */
    public function setExecuteMsg($executeMsg)
    {
        $this->container['executeMsg'] = $executeMsg;
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

