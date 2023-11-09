<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlJobListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlJobListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithmType  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    * approvalStatus  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorName  创建人名称
    * description  作业描述
    * ext  参数等额外信息
    * hflPlatformType  联邦学习运行平台枚举值，LOCAL.本地
    * hflType  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    * isSinglePredict  单方还是双方预测
    * jobId  作业id
    * jobName  作业名称
    * jobType  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * learningTaskType  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithmType' => 'string',
            'approvalStatus' => 'string',
            'createTime' => '\DateTime',
            'creatorName' => 'string',
            'description' => 'string',
            'ext' => 'string',
            'hflPlatformType' => 'string',
            'hflType' => 'string',
            'isSinglePredict' => 'bool',
            'jobId' => 'string',
            'jobName' => 'string',
            'jobType' => 'string',
            'learningTaskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithmType  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    * approvalStatus  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorName  创建人名称
    * description  作业描述
    * ext  参数等额外信息
    * hflPlatformType  联邦学习运行平台枚举值，LOCAL.本地
    * hflType  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    * isSinglePredict  单方还是双方预测
    * jobId  作业id
    * jobName  作业名称
    * jobType  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * learningTaskType  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithmType' => null,
        'approvalStatus' => null,
        'createTime' => 'date-time',
        'creatorName' => null,
        'description' => null,
        'ext' => null,
        'hflPlatformType' => null,
        'hflType' => null,
        'isSinglePredict' => null,
        'jobId' => null,
        'jobName' => null,
        'jobType' => null,
        'learningTaskType' => null
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
    * algorithmType  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    * approvalStatus  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorName  创建人名称
    * description  作业描述
    * ext  参数等额外信息
    * hflPlatformType  联邦学习运行平台枚举值，LOCAL.本地
    * hflType  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    * isSinglePredict  单方还是双方预测
    * jobId  作业id
    * jobName  作业名称
    * jobType  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * learningTaskType  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithmType' => 'algorithm_type',
            'approvalStatus' => 'approval_status',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'description' => 'description',
            'ext' => 'ext',
            'hflPlatformType' => 'hfl_platform_type',
            'hflType' => 'hfl_type',
            'isSinglePredict' => 'is_single_predict',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'jobType' => 'job_type',
            'learningTaskType' => 'learning_task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithmType  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    * approvalStatus  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorName  创建人名称
    * description  作业描述
    * ext  参数等额外信息
    * hflPlatformType  联邦学习运行平台枚举值，LOCAL.本地
    * hflType  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    * isSinglePredict  单方还是双方预测
    * jobId  作业id
    * jobName  作业名称
    * jobType  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * learningTaskType  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithmType' => 'setAlgorithmType',
            'approvalStatus' => 'setApprovalStatus',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'description' => 'setDescription',
            'ext' => 'setExt',
            'hflPlatformType' => 'setHflPlatformType',
            'hflType' => 'setHflType',
            'isSinglePredict' => 'setIsSinglePredict',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'jobType' => 'setJobType',
            'learningTaskType' => 'setLearningTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithmType  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    * approvalStatus  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    * createTime  创建时间
    * creatorName  创建人名称
    * description  作业描述
    * ext  参数等额外信息
    * hflPlatformType  联邦学习运行平台枚举值，LOCAL.本地
    * hflType  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    * isSinglePredict  单方还是双方预测
    * jobId  作业id
    * jobName  作业名称
    * jobType  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    * learningTaskType  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithmType' => 'getAlgorithmType',
            'approvalStatus' => 'getApprovalStatus',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'description' => 'getDescription',
            'ext' => 'getExt',
            'hflPlatformType' => 'getHflPlatformType',
            'hflType' => 'getHflType',
            'isSinglePredict' => 'getIsSinglePredict',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'jobType' => 'getJobType',
            'learningTaskType' => 'getLearningTaskType'
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
    const ALGORITHM_TYPE_FIBINET = 'FIBINET';
    const ALGORITHM_TYPE_LIGHT_BGM = 'LIGHT_BGM';
    const ALGORITHM_TYPE_LOGISTIC_REGRESSION = 'LOGISTIC_REGRESSION';
    const ALGORITHM_TYPE_NEURAL_NETWORK = 'NEURAL_NETWORK';
    const ALGORITHM_TYPE_XG_BOOST = 'XG_BOOST';
    const APPROVAL_STATUS_APPROVED = 'APPROVED';
    const APPROVAL_STATUS_APPROVING = 'APPROVING';
    const APPROVAL_STATUS__NEW = 'NEW';
    const APPROVAL_STATUS_REJECTED = 'REJECTED';
    const APPROVAL_STATUS_REVOKED = 'REVOKED';
    const HFL_PLATFORM_TYPE_LOCAL = 'LOCAL';
    const HFL_TYPE_EVALUATE = 'EVALUATE';
    const HFL_TYPE_TRAIN = 'TRAIN';
    const JOB_TYPE_HFL = 'HFL';
    const JOB_TYPE_PREDICT = 'PREDICT';
    const JOB_TYPE_SQL = 'SQL';
    const JOB_TYPE_VFL = 'VFL';
    const JOB_TYPE_DATA_EXCHANGE = 'DATA_EXCHANGE';
    const LEARNING_TASK_TYPE_CLASSIFICATION = 'CLASSIFICATION';
    const LEARNING_TASK_TYPE_REGRESSION = 'REGRESSION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmTypeAllowableValues()
    {
        return [
            self::ALGORITHM_TYPE_FIBINET,
            self::ALGORITHM_TYPE_LIGHT_BGM,
            self::ALGORITHM_TYPE_LOGISTIC_REGRESSION,
            self::ALGORITHM_TYPE_NEURAL_NETWORK,
            self::ALGORITHM_TYPE_XG_BOOST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalStatusAllowableValues()
    {
        return [
            self::APPROVAL_STATUS_APPROVED,
            self::APPROVAL_STATUS_APPROVING,
            self::APPROVAL_STATUS__NEW,
            self::APPROVAL_STATUS_REJECTED,
            self::APPROVAL_STATUS_REVOKED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHflPlatformTypeAllowableValues()
    {
        return [
            self::HFL_PLATFORM_TYPE_LOCAL,
        ];
    }

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
            self::JOB_TYPE_PREDICT,
            self::JOB_TYPE_SQL,
            self::JOB_TYPE_VFL,
            self::JOB_TYPE_DATA_EXCHANGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLearningTaskTypeAllowableValues()
    {
        return [
            self::LEARNING_TASK_TYPE_CLASSIFICATION,
            self::LEARNING_TASK_TYPE_REGRESSION,
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
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['hflPlatformType'] = isset($data['hflPlatformType']) ? $data['hflPlatformType'] : null;
        $this->container['hflType'] = isset($data['hflType']) ? $data['hflType'] : null;
        $this->container['isSinglePredict'] = isset($data['isSinglePredict']) ? $data['isSinglePredict'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['learningTaskType'] = isset($data['learningTaskType']) ? $data['learningTaskType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlgorithmTypeAllowableValues();
                if (!is_null($this->container['algorithmType']) && !in_array($this->container['algorithmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApprovalStatusAllowableValues();
                if (!is_null($this->container['approvalStatus']) && !in_array($this->container['approvalStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['creatorName'] === null) {
            $invalidProperties[] = "'creatorName' can't be null";
        }
            if ((mb_strlen($this->container['creatorName']) > 128)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) > 512)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['ext']) && (mb_strlen($this->container['ext']) < 0)) {
                $invalidProperties[] = "invalid value for 'ext', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hflPlatformType'] === null) {
            $invalidProperties[] = "'hflPlatformType' can't be null";
        }
            $allowedValues = $this->getHflPlatformTypeAllowableValues();
                if (!is_null($this->container['hflPlatformType']) && !in_array($this->container['hflPlatformType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hflPlatformType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 32)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['jobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 0.";
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
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLearningTaskTypeAllowableValues();
                if (!is_null($this->container['learningTaskType']) && !in_array($this->container['learningTaskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'learningTaskType', must be one of '%s'",
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
    * Gets algorithmType
    *  纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 纵向联邦算法类型枚举，XG_BOOST.XGBoost,LIGHT_BGM.LightGBM,LOGISTIC_REGRESSION.逻辑回归,NEURAL_NETWORK.神经网络，FIBINET.FIBINET
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets approvalStatus
    *  fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    *
    * @return string|null
    */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
    * Sets approvalStatus
    *
    * @param string|null $approvalStatus fl作业审批状态，APPROVED.审批通过，APPROVING.审批中，NEW.新建，REJECTED.驳回，REVOKED.撤销
    *
    * @return $this
    */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人名称
    *
    * @return string
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets description
    *  作业描述
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
    * @param string|null $description 作业描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets hflPlatformType
    *  联邦学习运行平台枚举值，LOCAL.本地
    *
    * @return string
    */
    public function getHflPlatformType()
    {
        return $this->container['hflPlatformType'];
    }

    /**
    * Sets hflPlatformType
    *
    * @param string $hflPlatformType 联邦学习运行平台枚举值，LOCAL.本地
    *
    * @return $this
    */
    public function setHflPlatformType($hflPlatformType)
    {
        $this->container['hflPlatformType'] = $hflPlatformType;
        return $this;
    }

    /**
    * Gets hflType
    *  fl作业类型枚举,TRAIN.训练,EVALUATE.评估
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
    * @param string $hflType fl作业类型枚举,TRAIN.训练,EVALUATE.评估
    *
    * @return $this
    */
    public function setHflType($hflType)
    {
        $this->container['hflType'] = $hflType;
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
    * Gets jobId
    *  作业id
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 作业id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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
    *  作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
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
    * @param string|null $jobType 作业类型,SQL.联合SQL分析,HFL.横向联邦学习,VFL.纵向联邦学习,PREDICT.预测，DATA_EXCHANGE.数据交换
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets learningTaskType
    *  纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @return string|null
    */
    public function getLearningTaskType()
    {
        return $this->container['learningTaskType'];
    }

    /**
    * Sets learningTaskType
    *
    * @param string|null $learningTaskType 纵向联邦任务类型,CLASSIFICATION.分类，REGRESSION.拟合
    *
    * @return $this
    */
    public function setLearningTaskType($learningTaskType)
    {
        $this->container['learningTaskType'] = $learningTaskType;
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

