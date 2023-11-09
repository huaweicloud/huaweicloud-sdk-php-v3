<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsJobInstanceVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsJobInstanceVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  结束时间
    * ext  参数等额外信息
    * id  实例id
    * isSinglePredict  单方还是双方预测
    * jobInstanceType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * jobName  作业名称
    * jobPartner  参与方信息
    * resultExt  参数等额外信息
    * roundId  作业执行总轮数
    * startTime  开始时间
    * status  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => '\DateTime',
            'ext' => 'string',
            'id' => 'string',
            'isSinglePredict' => 'bool',
            'jobInstanceType' => 'string',
            'jobName' => 'string',
            'jobPartner' => 'string',
            'resultExt' => 'string',
            'roundId' => 'int',
            'startTime' => '\DateTime',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  结束时间
    * ext  参数等额外信息
    * id  实例id
    * isSinglePredict  单方还是双方预测
    * jobInstanceType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * jobName  作业名称
    * jobPartner  参与方信息
    * resultExt  参数等额外信息
    * roundId  作业执行总轮数
    * startTime  开始时间
    * status  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => 'date-time',
        'ext' => null,
        'id' => null,
        'isSinglePredict' => null,
        'jobInstanceType' => null,
        'jobName' => null,
        'jobPartner' => null,
        'resultExt' => null,
        'roundId' => 'int32',
        'startTime' => 'date-time',
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
    * endTime  结束时间
    * ext  参数等额外信息
    * id  实例id
    * isSinglePredict  单方还是双方预测
    * jobInstanceType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * jobName  作业名称
    * jobPartner  参与方信息
    * resultExt  参数等额外信息
    * roundId  作业执行总轮数
    * startTime  开始时间
    * status  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'ext' => 'ext',
            'id' => 'id',
            'isSinglePredict' => 'is_single_predict',
            'jobInstanceType' => 'job_instance_type',
            'jobName' => 'job_name',
            'jobPartner' => 'job_partner',
            'resultExt' => 'result_ext',
            'roundId' => 'round_id',
            'startTime' => 'start_time',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  结束时间
    * ext  参数等额外信息
    * id  实例id
    * isSinglePredict  单方还是双方预测
    * jobInstanceType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * jobName  作业名称
    * jobPartner  参与方信息
    * resultExt  参数等额外信息
    * roundId  作业执行总轮数
    * startTime  开始时间
    * status  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'ext' => 'setExt',
            'id' => 'setId',
            'isSinglePredict' => 'setIsSinglePredict',
            'jobInstanceType' => 'setJobInstanceType',
            'jobName' => 'setJobName',
            'jobPartner' => 'setJobPartner',
            'resultExt' => 'setResultExt',
            'roundId' => 'setRoundId',
            'startTime' => 'setStartTime',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  结束时间
    * ext  参数等额外信息
    * id  实例id
    * isSinglePredict  单方还是双方预测
    * jobInstanceType  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    * jobName  作业名称
    * jobPartner  参与方信息
    * resultExt  参数等额外信息
    * roundId  作业执行总轮数
    * startTime  开始时间
    * status  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'ext' => 'getExt',
            'id' => 'getId',
            'isSinglePredict' => 'getIsSinglePredict',
            'jobInstanceType' => 'getJobInstanceType',
            'jobName' => 'getJobName',
            'jobPartner' => 'getJobPartner',
            'resultExt' => 'getResultExt',
            'roundId' => 'getRoundId',
            'startTime' => 'getStartTime',
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
    const JOB_INSTANCE_TYPE_HFL = 'HFL';
    const JOB_INSTANCE_TYPE_SQL = 'SQL';
    const JOB_INSTANCE_TYPE_VFL_EVALUATE = 'VFL_EVALUATE';
    const JOB_INSTANCE_TYPE_VFL_FEATURE_SELECTION = 'VFL_FEATURE_SELECTION';
    const JOB_INSTANCE_TYPE_VFL_ID_TRUNCATION = 'VFL_ID_TRUNCATION';
    const JOB_INSTANCE_TYPE_VFL_PREDICT = 'VFL_PREDICT';
    const JOB_INSTANCE_TYPE_VFL_SAMPLE_ALIGNMENT = 'VFL_SAMPLE_ALIGNMENT';
    const JOB_INSTANCE_TYPE_VFL_TRAIN = 'VFL_TRAIN';
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
    public function getJobInstanceTypeAllowableValues()
    {
        return [
            self::JOB_INSTANCE_TYPE_HFL,
            self::JOB_INSTANCE_TYPE_SQL,
            self::JOB_INSTANCE_TYPE_VFL_EVALUATE,
            self::JOB_INSTANCE_TYPE_VFL_FEATURE_SELECTION,
            self::JOB_INSTANCE_TYPE_VFL_ID_TRUNCATION,
            self::JOB_INSTANCE_TYPE_VFL_PREDICT,
            self::JOB_INSTANCE_TYPE_VFL_SAMPLE_ALIGNMENT,
            self::JOB_INSTANCE_TYPE_VFL_TRAIN,
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isSinglePredict'] = isset($data['isSinglePredict']) ? $data['isSinglePredict'] : null;
        $this->container['jobInstanceType'] = isset($data['jobInstanceType']) ? $data['jobInstanceType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobPartner'] = isset($data['jobPartner']) ? $data['jobPartner'] : null;
        $this->container['resultExt'] = isset($data['resultExt']) ? $data['resultExt'] : null;
        $this->container['roundId'] = isset($data['roundId']) ? $data['roundId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) > 512)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) < 0)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['jobInstanceType'] === null) {
            $invalidProperties[] = "'jobInstanceType' can't be null";
        }
            $allowedValues = $this->getJobInstanceTypeAllowableValues();
                if (!is_null($this->container['jobInstanceType']) && !in_array($this->container['jobInstanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobInstanceType', must be one of '%s'",
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
            if (!is_null($this->container['jobPartner']) && (mb_strlen($this->container['jobPartner']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobPartner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobPartner']) && (mb_strlen($this->container['jobPartner']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobPartner', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resultExt']) && (mb_strlen($this->container['resultExt']) > 512)) {
                $invalidProperties[] = "invalid value for 'resultExt', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['resultExt']) && (mb_strlen($this->container['resultExt']) < 0)) {
                $invalidProperties[] = "invalid value for 'resultExt', the character length must be bigger than or equal to 0.";
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
    * Gets endTime
    *  结束时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets ext
    *  参数等额外信息
    *
    * @return string|null
    */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
    * Sets ext
    *
    * @param string|null $ext 参数等额外信息
    *
    * @return $this
    */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;
        return $this;
    }

    /**
    * Gets id
    *  实例id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isSinglePredict
    *  单方还是双方预测
    *
    * @return bool|null
    */
    public function getIsSinglePredict()
    {
        return $this->container['isSinglePredict'];
    }

    /**
    * Sets isSinglePredict
    *
    * @param bool|null $isSinglePredict 单方还是双方预测
    *
    * @return $this
    */
    public function setIsSinglePredict($isSinglePredict)
    {
        $this->container['isSinglePredict'] = $isSinglePredict;
        return $this;
    }

    /**
    * Gets jobInstanceType
    *  作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    *
    * @return string
    */
    public function getJobInstanceType()
    {
        return $this->container['jobInstanceType'];
    }

    /**
    * Sets jobInstanceType
    *
    * @param string $jobInstanceType 作业类型，HFL.横向联邦，SQL.联邦分析，VFL_EVALUATE.联邦评估，VFL_FEATURE_SELECTION.特征选择，VFL_ID_TRUNCATION.Id截断，VFL_PREDICT.联邦预测，VFL_SAMPLE_ALIGNMENT.样本对齐，VFL_TRAIN.联邦训练
    *
    * @return $this
    */
    public function setJobInstanceType($jobInstanceType)
    {
        $this->container['jobInstanceType'] = $jobInstanceType;
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
    * Gets jobPartner
    *  参与方信息
    *
    * @return string|null
    */
    public function getJobPartner()
    {
        return $this->container['jobPartner'];
    }

    /**
    * Sets jobPartner
    *
    * @param string|null $jobPartner 参与方信息
    *
    * @return $this
    */
    public function setJobPartner($jobPartner)
    {
        $this->container['jobPartner'] = $jobPartner;
        return $this;
    }

    /**
    * Gets resultExt
    *  参数等额外信息
    *
    * @return string|null
    */
    public function getResultExt()
    {
        return $this->container['resultExt'];
    }

    /**
    * Sets resultExt
    *
    * @param string|null $resultExt 参数等额外信息
    *
    * @return $this
    */
    public function setResultExt($resultExt)
    {
        $this->container['resultExt'] = $resultExt;
        return $this;
    }

    /**
    * Gets roundId
    *  作业执行总轮数
    *
    * @return int|null
    */
    public function getRoundId()
    {
        return $this->container['roundId'];
    }

    /**
    * Sets roundId
    *
    * @param int|null $roundId 作业执行总轮数
    *
    * @return $this
    */
    public function setRoundId($roundId)
    {
        $this->container['roundId'] = $roundId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
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
    * @param string $status 作业、任务状态，作业任务状态，NEW.新建,SUBMITING.提交中,ACCEPTED.已接收,DEPLOYING.部署中,RUNNING.运行中,SUCCEEDED.成功,FAILED.失败,TERMINATED.中止,TERMINATING.中止中,PENDING.等待中
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

