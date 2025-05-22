<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReportSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReportSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务编号
    * buildNo  构建编号
    * stageName  步骤名称，对应构建步骤，例如stage2
    * rootId  报告编号
    * total  总数
    * success  成功数量
    * failures  失败数量
    * errors  错误数量
    * others  其他
    * executionTime  执行耗时
    * genrateTime  生成时间
    * region  局点
    * isSuccess  是否通过
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'buildNo' => 'int',
            'stageName' => 'string',
            'rootId' => 'string',
            'total' => 'int',
            'success' => 'int',
            'failures' => 'int',
            'errors' => 'int',
            'others' => 'int',
            'executionTime' => 'int',
            'genrateTime' => 'string',
            'region' => 'string',
            'isSuccess' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务编号
    * buildNo  构建编号
    * stageName  步骤名称，对应构建步骤，例如stage2
    * rootId  报告编号
    * total  总数
    * success  成功数量
    * failures  失败数量
    * errors  错误数量
    * others  其他
    * executionTime  执行耗时
    * genrateTime  生成时间
    * region  局点
    * isSuccess  是否通过
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'buildNo' => null,
        'stageName' => null,
        'rootId' => null,
        'total' => null,
        'success' => null,
        'failures' => null,
        'errors' => null,
        'others' => null,
        'executionTime' => null,
        'genrateTime' => null,
        'region' => null,
        'isSuccess' => null
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
    * jobId  任务编号
    * buildNo  构建编号
    * stageName  步骤名称，对应构建步骤，例如stage2
    * rootId  报告编号
    * total  总数
    * success  成功数量
    * failures  失败数量
    * errors  错误数量
    * others  其他
    * executionTime  执行耗时
    * genrateTime  生成时间
    * region  局点
    * isSuccess  是否通过
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'buildNo' => 'build_no',
            'stageName' => 'stage_name',
            'rootId' => 'root_id',
            'total' => 'total',
            'success' => 'success',
            'failures' => 'failures',
            'errors' => 'errors',
            'others' => 'others',
            'executionTime' => 'execution_time',
            'genrateTime' => 'genrate_time',
            'region' => 'region',
            'isSuccess' => 'is_success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务编号
    * buildNo  构建编号
    * stageName  步骤名称，对应构建步骤，例如stage2
    * rootId  报告编号
    * total  总数
    * success  成功数量
    * failures  失败数量
    * errors  错误数量
    * others  其他
    * executionTime  执行耗时
    * genrateTime  生成时间
    * region  局点
    * isSuccess  是否通过
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'buildNo' => 'setBuildNo',
            'stageName' => 'setStageName',
            'rootId' => 'setRootId',
            'total' => 'setTotal',
            'success' => 'setSuccess',
            'failures' => 'setFailures',
            'errors' => 'setErrors',
            'others' => 'setOthers',
            'executionTime' => 'setExecutionTime',
            'genrateTime' => 'setGenrateTime',
            'region' => 'setRegion',
            'isSuccess' => 'setIsSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务编号
    * buildNo  构建编号
    * stageName  步骤名称，对应构建步骤，例如stage2
    * rootId  报告编号
    * total  总数
    * success  成功数量
    * failures  失败数量
    * errors  错误数量
    * others  其他
    * executionTime  执行耗时
    * genrateTime  生成时间
    * region  局点
    * isSuccess  是否通过
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'buildNo' => 'getBuildNo',
            'stageName' => 'getStageName',
            'rootId' => 'getRootId',
            'total' => 'getTotal',
            'success' => 'getSuccess',
            'failures' => 'getFailures',
            'errors' => 'getErrors',
            'others' => 'getOthers',
            'executionTime' => 'getExecutionTime',
            'genrateTime' => 'getGenrateTime',
            'region' => 'getRegion',
            'isSuccess' => 'getIsSuccess'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failures'] = isset($data['failures']) ? $data['failures'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['others'] = isset($data['others']) ? $data['others'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['genrateTime'] = isset($data['genrateTime']) ? $data['genrateTime'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
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
    * Gets jobId
    *  任务编号
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
    * @param string|null $jobId 任务编号
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int|null $buildNo 构建编号
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets stageName
    *  步骤名称，对应构建步骤，例如stage2
    *
    * @return string|null
    */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
    * Sets stageName
    *
    * @param string|null $stageName 步骤名称，对应构建步骤，例如stage2
    *
    * @return $this
    */
    public function setStageName($stageName)
    {
        $this->container['stageName'] = $stageName;
        return $this;
    }

    /**
    * Gets rootId
    *  报告编号
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId 报告编号
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets success
    *  成功数量
    *
    * @return int|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param int|null $success 成功数量
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failures
    *  失败数量
    *
    * @return int|null
    */
    public function getFailures()
    {
        return $this->container['failures'];
    }

    /**
    * Sets failures
    *
    * @param int|null $failures 失败数量
    *
    * @return $this
    */
    public function setFailures($failures)
    {
        $this->container['failures'] = $failures;
        return $this;
    }

    /**
    * Gets errors
    *  错误数量
    *
    * @return int|null
    */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
    * Sets errors
    *
    * @param int|null $errors 错误数量
    *
    * @return $this
    */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;
        return $this;
    }

    /**
    * Gets others
    *  其他
    *
    * @return int|null
    */
    public function getOthers()
    {
        return $this->container['others'];
    }

    /**
    * Sets others
    *
    * @param int|null $others 其他
    *
    * @return $this
    */
    public function setOthers($others)
    {
        $this->container['others'] = $others;
        return $this;
    }

    /**
    * Gets executionTime
    *  执行耗时
    *
    * @return int|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int|null $executionTime 执行耗时
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets genrateTime
    *  生成时间
    *
    * @return string|null
    */
    public function getGenrateTime()
    {
        return $this->container['genrateTime'];
    }

    /**
    * Sets genrateTime
    *
    * @param string|null $genrateTime 生成时间
    *
    * @return $this
    */
    public function setGenrateTime($genrateTime)
    {
        $this->container['genrateTime'] = $genrateTime;
        return $this;
    }

    /**
    * Gets region
    *  局点
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets isSuccess
    *  是否通过
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
    * @param bool|null $isSuccess 是否通过
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
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

