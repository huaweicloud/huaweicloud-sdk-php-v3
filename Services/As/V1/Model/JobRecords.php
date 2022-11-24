<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobRecords';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  任务名称
    * recordType  记录类型。API：接口调用类型。MEG：消息类型。
    * recordTime  记录时间。
    * request  请求体，仅当record_type为API时有效
    * response  返回体，仅当record_type为API时有效
    * code  返回码，仅当record_type为API时有效
    * message  消息，仅当record_type为MEG时有效
    * jobStatus  job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'recordType' => 'string',
            'recordTime' => 'string',
            'request' => 'string',
            'response' => 'string',
            'code' => 'string',
            'message' => 'string',
            'jobStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  任务名称
    * recordType  记录类型。API：接口调用类型。MEG：消息类型。
    * recordTime  记录时间。
    * request  请求体，仅当record_type为API时有效
    * response  返回体，仅当record_type为API时有效
    * code  返回码，仅当record_type为API时有效
    * message  消息，仅当record_type为MEG时有效
    * jobStatus  job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'recordType' => null,
        'recordTime' => null,
        'request' => null,
        'response' => null,
        'code' => null,
        'message' => null,
        'jobStatus' => null
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
    * jobName  任务名称
    * recordType  记录类型。API：接口调用类型。MEG：消息类型。
    * recordTime  记录时间。
    * request  请求体，仅当record_type为API时有效
    * response  返回体，仅当record_type为API时有效
    * code  返回码，仅当record_type为API时有效
    * message  消息，仅当record_type为MEG时有效
    * jobStatus  job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'recordType' => 'record_type',
            'recordTime' => 'record_time',
            'request' => 'request',
            'response' => 'response',
            'code' => 'code',
            'message' => 'message',
            'jobStatus' => 'job_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  任务名称
    * recordType  记录类型。API：接口调用类型。MEG：消息类型。
    * recordTime  记录时间。
    * request  请求体，仅当record_type为API时有效
    * response  返回体，仅当record_type为API时有效
    * code  返回码，仅当record_type为API时有效
    * message  消息，仅当record_type为MEG时有效
    * jobStatus  job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'recordType' => 'setRecordType',
            'recordTime' => 'setRecordTime',
            'request' => 'setRequest',
            'response' => 'setResponse',
            'code' => 'setCode',
            'message' => 'setMessage',
            'jobStatus' => 'setJobStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  任务名称
    * recordType  记录类型。API：接口调用类型。MEG：消息类型。
    * recordTime  记录时间。
    * request  请求体，仅当record_type为API时有效
    * response  返回体，仅当record_type为API时有效
    * code  返回码，仅当record_type为API时有效
    * message  消息，仅当record_type为MEG时有效
    * jobStatus  job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'recordType' => 'getRecordType',
            'recordTime' => 'getRecordTime',
            'request' => 'getRequest',
            'response' => 'getResponse',
            'code' => 'getCode',
            'message' => 'getMessage',
            'jobStatus' => 'getJobStatus'
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
    const RECORD_TYPE_API = 'API';
    const RECORD_TYPE_MEG = 'MEG';
    const JOB_STATUS_SUCCESS = 'SUCCESS';
    const JOB_STATUS_FAIL = 'FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordTypeAllowableValues()
    {
        return [
            self::RECORD_TYPE_API,
            self::RECORD_TYPE_MEG,
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
            self::JOB_STATUS_FAIL,
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['recordTime'] = isset($data['recordTime']) ? $data['recordTime'] : null;
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRecordTypeAllowableValues();
                if (!is_null($this->container['recordType']) && !in_array($this->container['recordType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recordType', must be one of '%s'",
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
    * Gets jobName
    *  任务名称
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
    * @param string|null $jobName 任务名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets recordType
    *  记录类型。API：接口调用类型。MEG：消息类型。
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
    * @param string|null $recordType 记录类型。API：接口调用类型。MEG：消息类型。
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets recordTime
    *  记录时间。
    *
    * @return string|null
    */
    public function getRecordTime()
    {
        return $this->container['recordTime'];
    }

    /**
    * Sets recordTime
    *
    * @param string|null $recordTime 记录时间。
    *
    * @return $this
    */
    public function setRecordTime($recordTime)
    {
        $this->container['recordTime'] = $recordTime;
        return $this;
    }

    /**
    * Gets request
    *  请求体，仅当record_type为API时有效
    *
    * @return string|null
    */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
    * Sets request
    *
    * @param string|null $request 请求体，仅当record_type为API时有效
    *
    * @return $this
    */
    public function setRequest($request)
    {
        $this->container['request'] = $request;
        return $this;
    }

    /**
    * Gets response
    *  返回体，仅当record_type为API时有效
    *
    * @return string|null
    */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
    * Sets response
    *
    * @param string|null $response 返回体，仅当record_type为API时有效
    *
    * @return $this
    */
    public function setResponse($response)
    {
        $this->container['response'] = $response;
        return $this;
    }

    /**
    * Gets code
    *  返回码，仅当record_type为API时有效
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
    * @param string|null $code 返回码，仅当record_type为API时有效
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets message
    *  消息，仅当record_type为MEG时有效
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
    * @param string|null $message 消息，仅当record_type为MEG时有效
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobStatus
    *  job执行状态：SUCCESS：成功。FAIL：失败。
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
    * @param string|null $jobStatus job执行状态：SUCCESS：成功。FAIL：失败。
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
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

