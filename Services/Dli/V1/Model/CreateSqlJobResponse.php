<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
    * jobType  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    * schema  当语句类型为DDL时，返回其结果的列名称及类型。
    * rows  当语句类型为DDL时，直接返回其执行结果。
    * jobMode  表示作业执行方式，是同步还是异步的
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'schema' => 'object[]',
            'rows' => 'string[][]',
            'jobMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
    * jobType  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    * schema  当语句类型为DDL时，返回其结果的列名称及类型。
    * rows  当语句类型为DDL时，直接返回其执行结果。
    * jobMode  表示作业执行方式，是同步还是异步的
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'jobId' => null,
        'jobType' => null,
        'schema' => null,
        'rows' => null,
        'jobMode' => null
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
    * isSuccess  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
    * jobType  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    * schema  当语句类型为DDL时，返回其结果的列名称及类型。
    * rows  当语句类型为DDL时，直接返回其执行结果。
    * jobMode  表示作业执行方式，是同步还是异步的
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'schema' => 'schema',
            'rows' => 'rows',
            'jobMode' => 'job_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
    * jobType  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    * schema  当语句类型为DDL时，返回其结果的列名称及类型。
    * rows  当语句类型为DDL时，直接返回其执行结果。
    * jobMode  表示作业执行方式，是同步还是异步的
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'schema' => 'setSchema',
            'rows' => 'setRows',
            'jobMode' => 'setJobMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
    * jobType  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    * schema  当语句类型为DDL时，返回其结果的列名称及类型。
    * rows  当语句类型为DDL时，直接返回其执行结果。
    * jobMode  表示作业执行方式，是同步还是异步的
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'schema' => 'getSchema',
            'rows' => 'getRows',
            'jobMode' => 'getJobMode'
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
    const JOB_TYPE_DDL = 'DDL';
    const JOB_TYPE_DCL = 'DCL';
    const JOB_TYPE_IMPORT = 'IMPORT';
    const JOB_TYPE_EXPORT = 'EXPORT';
    const JOB_TYPE_QUERY = 'QUERY';
    const JOB_TYPE_INSERT = 'INSERT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_DDL,
            self::JOB_TYPE_DCL,
            self::JOB_TYPE_IMPORT,
            self::JOB_TYPE_EXPORT,
            self::JOB_TYPE_QUERY,
            self::JOB_TYPE_INSERT,
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
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
    * Gets isSuccess
    *  当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
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
    * @param bool|null $isSuccess 当“job_type”为“DCL”时，为请求执行是否成功。“true”表示请求执行成功。
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
    *  系统提示信息，执行成功时，信息可能为空。
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
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobId
    *  此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
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
    * @param string|null $jobId 此SQL语句将生成并提交一个新作业，返回此作业的ID，可用于获取作业状态和作业结果。
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
    *  作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
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
    * @param string|null $jobType 作业类型。  DDL DCL IMPORT EXPORT QUERY INSERT
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets schema
    *  当语句类型为DDL时，返回其结果的列名称及类型。
    *
    * @return object[]|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param object[]|null $schema 当语句类型为DDL时，返回其结果的列名称及类型。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets rows
    *  当语句类型为DDL时，直接返回其执行结果。
    *
    * @return string[][]|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param string[][]|null $rows 当语句类型为DDL时，直接返回其执行结果。
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets jobMode
    *  表示作业执行方式，是同步还是异步的
    *
    * @return string|null
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param string|null $jobMode 表示作业执行方式，是同步还是异步的
    *
    * @return $this
    */
    public function setJobMode($jobMode)
    {
        $this->container['jobMode'] = $jobMode;
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

