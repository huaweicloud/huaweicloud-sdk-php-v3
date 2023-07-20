<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AsyncJobResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AsyncJobResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * createTime  批量异步创建的任务的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'asyncJobId' => 'string',
            'status' => 'string',
            'domainName' => 'string',
            'userName' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * createTime  批量异步创建的任务的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'asyncJobId' => null,
        'status' => null,
        'domainName' => null,
        'userName' => null,
        'createTime' => null
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
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * createTime  批量异步创建的任务的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'asyncJobId' => 'async_job_id',
            'status' => 'status',
            'domainName' => 'domain_name',
            'userName' => 'user_name',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * createTime  批量异步创建的任务的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'asyncJobId' => 'setAsyncJobId',
            'status' => 'setStatus',
            'domainName' => 'setDomainName',
            'userName' => 'setUserName',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * asyncJobId  批量异步创建的任务ID。
    * status  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    * domainName  批量异步创建的任务的租户名。
    * userName  批量异步创建的任务的用户名。
    * createTime  批量异步创建的任务的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'asyncJobId' => 'getAsyncJobId',
            'status' => 'getStatus',
            'domainName' => 'getDomainName',
            'userName' => 'getUserName',
            'createTime' => 'getCreateTime'
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
    const STATUS_ASYNC_JOB_VALIDATING = 'ASYNC_JOB_VALIDATING';
    const STATUS_ASYNC_JOB_VALIDATE_FAILED = 'ASYNC_JOB_VALIDATE_FAILED';
    const STATUS_AUTO_PARAM_VALIDATE_SUCCESS = 'AUTO_PARAM_VALIDATE_SUCCESS';
    const STATUS_COMMIT_SUCCESS = 'COMMIT_SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ASYNC_JOB_VALIDATING,
            self::STATUS_ASYNC_JOB_VALIDATE_FAILED,
            self::STATUS_AUTO_PARAM_VALIDATE_SUCCESS,
            self::STATUS_COMMIT_SUCCESS,
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
        $this->container['asyncJobId'] = isset($data['asyncJobId']) ? $data['asyncJobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['asyncJobId'] === null) {
            $invalidProperties[] = "'asyncJobId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
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
    * Gets asyncJobId
    *  批量异步创建的任务ID。
    *
    * @return string
    */
    public function getAsyncJobId()
    {
        return $this->container['asyncJobId'];
    }

    /**
    * Sets asyncJobId
    *
    * @param string $asyncJobId 批量异步创建的任务ID。
    *
    * @return $this
    */
    public function setAsyncJobId($asyncJobId)
    {
        $this->container['asyncJobId'] = $asyncJobId;
        return $this;
    }

    /**
    * Gets status
    *  批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 批量异步创建的任务状态。取值： - ASYNC_JOB_VALIDATING：批量异步任务参数校验中。 - ASYNC_JOB_VALIDATE_FAILED：批量异步任务参数校验失败。 - AUTO_PARAM_VALIDATE_SUCCESS：批量异步任务参数校验成功。 - COMMIT_SUCCESS：批量异步任务提交成功。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets domainName
    *  批量异步创建的任务的租户名。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 批量异步创建的任务的租户名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userName
    *  批量异步创建的任务的用户名。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 批量异步创建的任务的用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets createTime
    *  批量异步创建的任务的创建时间。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 批量异步创建的任务的创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

