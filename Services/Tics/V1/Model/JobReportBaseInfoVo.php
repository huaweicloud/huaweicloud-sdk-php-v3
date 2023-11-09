<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobReportBaseInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobReportBaseInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exeTime  执行时间
    * executor  执行人
    * hflType  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    * jobName  作业名称
    * jobType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * status  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exeTime' => '\DateTime',
            'executor' => 'string',
            'hflType' => 'string',
            'jobName' => 'string',
            'jobType' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exeTime  执行时间
    * executor  执行人
    * hflType  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    * jobName  作业名称
    * jobType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * status  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exeTime' => 'date-time',
        'executor' => null,
        'hflType' => null,
        'jobName' => null,
        'jobType' => null,
        'status' => null
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
    * exeTime  执行时间
    * executor  执行人
    * hflType  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    * jobName  作业名称
    * jobType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * status  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exeTime' => 'exe_time',
            'executor' => 'executor',
            'hflType' => 'hfl_type',
            'jobName' => 'job_name',
            'jobType' => 'job_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exeTime  执行时间
    * executor  执行人
    * hflType  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    * jobName  作业名称
    * jobType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * status  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $setters = [
            'exeTime' => 'setExeTime',
            'executor' => 'setExecutor',
            'hflType' => 'setHflType',
            'jobName' => 'setJobName',
            'jobType' => 'setJobType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exeTime  执行时间
    * executor  执行人
    * hflType  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    * jobName  作业名称
    * jobType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * status  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $getters = [
            'exeTime' => 'getExeTime',
            'executor' => 'getExecutor',
            'hflType' => 'getHflType',
            'jobName' => 'getJobName',
            'jobType' => 'getJobType',
            'status' => 'getStatus'
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
    const HFL_TYPE_EVALUATE = 'EVALUATE';
    const HFL_TYPE_TRAIN = 'TRAIN';
    const JOB_TYPE_HFL = 'HFL';
    const JOB_TYPE_SQL = 'SQL';
    const JOB_TYPE_VFL_EVALUATE = 'VFL_EVALUATE';
    const JOB_TYPE_VFL_FEATURE_SELECTION = 'VFL_FEATURE_SELECTION';
    const JOB_TYPE_VFL_ID_TRUNCATION = 'VFL_ID_TRUNCATION';
    const JOB_TYPE_VFL_PREDICT = 'VFL_PREDICT';
    const JOB_TYPE_VFL_SAMPLE_ALIGNMENT = 'VFL_SAMPLE_ALIGNMENT';
    const JOB_TYPE_VFL_TRAIN = 'VFL_TRAIN';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_DEPLOYING = 'DEPLOYING';
    const STATUS_FAILED = 'FAILED';
    const STATUS__NEW = 'NEW';
    const STATUS_PENDING = 'PENDING';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_SUBMITING = 'SUBMITING';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const STATUS_TERMINATED = 'TERMINATED';
    const STATUS_TERMINATING = 'TERMINATING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHflTypeAllowableValues()
    {
        return [
            self::HFL_TYPE_EVALUATE,
            self::HFL_TYPE_TRAIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_HFL,
            self::JOB_TYPE_SQL,
            self::JOB_TYPE_VFL_EVALUATE,
            self::JOB_TYPE_VFL_FEATURE_SELECTION,
            self::JOB_TYPE_VFL_ID_TRUNCATION,
            self::JOB_TYPE_VFL_PREDICT,
            self::JOB_TYPE_VFL_SAMPLE_ALIGNMENT,
            self::JOB_TYPE_VFL_TRAIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_DEPLOYING,
            self::STATUS_FAILED,
            self::STATUS__NEW,
            self::STATUS_PENDING,
            self::STATUS_RUNNING,
            self::STATUS_SUBMITING,
            self::STATUS_SUCCEEDED,
            self::STATUS_TERMINATED,
            self::STATUS_TERMINATING,
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
        $this->container['exeTime'] = isset($data['exeTime']) ? $data['exeTime'] : null;
        $this->container['executor'] = isset($data['executor']) ? $data['executor'] : null;
        $this->container['hflType'] = isset($data['hflType']) ? $data['hflType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) > 128)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['executor']) && (mb_strlen($this->container['executor']) < 0)) {
                $invalidProperties[] = "invalid value for 'executor', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hflType'] === null) {
            $invalidProperties[] = "'hflType' can't be null";
        }
            $allowedValues = $this->getHflTypeAllowableValues();
                if (!is_null($this->container['hflType']) && !in_array($this->container['hflType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hflType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if ((mb_strlen($this->container['jobName']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['jobName']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets exeTime
    *  执行时间
    *
    * @return \DateTime|null
    */
    public function getExeTime()
    {
        return $this->container['exeTime'];
    }

    /**
    * Sets exeTime
    *
    * @param \DateTime|null $exeTime 执行时间
    *
    * @return $this
    */
    public function setExeTime($exeTime)
    {
        $this->container['exeTime'] = $exeTime;
        return $this;
    }

    /**
    * Gets executor
    *  执行人
    *
    * @return string|null
    */
    public function getExecutor()
    {
        return $this->container['executor'];
    }

    /**
    * Sets executor
    *
    * @param string|null $executor 执行人
    *
    * @return $this
    */
    public function setExecutor($executor)
    {
        $this->container['executor'] = $executor;
        return $this;
    }

    /**
    * Gets hflType
    *  hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    *
    * @return string
    */
    public function getHflType()
    {
        return $this->container['hflType'];
    }

    /**
    * Sets hflType
    *
    * @param string $hflType hfl作业类型枚举，TRAIN.训练,EVALUATE.评估
    *
    * @return $this
    */
    public function setHflType($hflType)
    {
        $this->container['hflType'] = $hflType;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
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
    * @param string $status 作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

