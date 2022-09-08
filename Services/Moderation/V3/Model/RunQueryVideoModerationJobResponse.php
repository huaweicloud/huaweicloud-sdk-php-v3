<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunQueryVideoModerationJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunQueryVideoModerationJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * jobId  作业id
    * status  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    * requestParams  requestParams
    * craeteTime  作业创建时间
    * updateTime  作业更新时间
    * result  result
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'requestParams' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParams',
            'craeteTime' => 'string',
            'updateTime' => 'string',
            'result' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * jobId  作业id
    * status  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    * requestParams  requestParams
    * craeteTime  作业创建时间
    * updateTime  作业更新时间
    * result  result
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'jobId' => null,
        'status' => null,
        'requestParams' => null,
        'craeteTime' => null,
        'updateTime' => null,
        'result' => null
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
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * jobId  作业id
    * status  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    * requestParams  requestParams
    * craeteTime  作业创建时间
    * updateTime  作业更新时间
    * result  result
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'jobId' => 'job_id',
            'status' => 'status',
            'requestParams' => 'request_params',
            'craeteTime' => 'craete_time',
            'updateTime' => 'update_time',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * jobId  作业id
    * status  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    * requestParams  requestParams
    * craeteTime  作业创建时间
    * updateTime  作业更新时间
    * result  result
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'requestParams' => 'setRequestParams',
            'craeteTime' => 'setCraeteTime',
            'updateTime' => 'setUpdateTime',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * jobId  作业id
    * status  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    * requestParams  requestParams
    * craeteTime  作业创建时间
    * updateTime  作业更新时间
    * result  result
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'requestParams' => 'getRequestParams',
            'craeteTime' => 'getCraeteTime',
            'updateTime' => 'getUpdateTime',
            'result' => 'getResult'
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
    const STATUS_RUNNING = 'running';
    const STATUS_SUCCEEDED = 'succeeded';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['requestParams'] = isset($data['requestParams']) ? $data['requestParams'] : null;
        $this->container['craeteTime'] = isset($data['craeteTime']) ? $data['craeteTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
    * Gets requestId
    *  本次请求的唯⼀标识，⽤于问题排查，建议保存。
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
    * @param string|null $requestId 本次请求的唯⼀标识，⽤于问题排查，建议保存。
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
    *  作业id
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
    * @param string|null $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
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
    * @param string|null $status 作业状态，可取值有：  running: 正在运行 succeeded: 运行成功  failed: 运行失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets requestParams
    *  requestParams
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParams|null
    */
    public function getRequestParams()
    {
        return $this->container['requestParams'];
    }

    /**
    * Sets requestParams
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultRequestParams|null $requestParams requestParams
    *
    * @return $this
    */
    public function setRequestParams($requestParams)
    {
        $this->container['requestParams'] = $requestParams;
        return $this;
    }

    /**
    * Gets craeteTime
    *  作业创建时间
    *
    * @return string|null
    */
    public function getCraeteTime()
    {
        return $this->container['craeteTime'];
    }

    /**
    * Sets craeteTime
    *
    * @param string|null $craeteTime 作业创建时间
    *
    * @return $this
    */
    public function setCraeteTime($craeteTime)
    {
        $this->container['craeteTime'] = $craeteTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  作业更新时间
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
    * @param string|null $updateTime 作业更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultResult|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationResultResult|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

