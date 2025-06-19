<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlJobsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlJobsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    * jobCount  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * jobs  作业信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobCount' => 'int',
            'jobs' => '\HuaweiCloud\SDK\Dli\V1\Model\SqlJob[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    * jobCount  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * jobs  作业信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'jobCount' => 'int32',
        'jobs' => null
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
    * isSuccess  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    * jobCount  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * jobs  作业信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobCount' => 'job_count',
            'jobs' => 'jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    * jobCount  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * jobs  作业信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobCount' => 'setJobCount',
            'jobs' => 'setJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    * jobCount  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * jobs  作业信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobCount' => 'getJobCount',
            'jobs' => 'getJobs'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobCount'] = isset($data['jobCount']) ? $data['jobCount'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
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
    * Gets isSuccess
    *  参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 参数解释:  请求发送是否成功。“true”表示请求发送成功 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $message 参数解释:  系统提示信息，执行成功时，信息可能为空 示例: import data to table t2 started 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobCount
    *  参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getJobCount()
    {
        return $this->container['jobCount'];
    }

    /**
    * Sets jobCount
    *
    * @param int|null $jobCount 参数解释:  作业总个数 示例: 7 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setJobCount($jobCount)
    {
        $this->container['jobCount'] = $jobCount;
        return $this;
    }

    /**
    * Gets jobs
    *  作业信息。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\SqlJob[]|null
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\SqlJob[]|null $jobs 作业信息。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
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

