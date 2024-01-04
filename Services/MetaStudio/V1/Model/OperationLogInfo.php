<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    * logDescription  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateTime' => 'string',
            'logType' => 'string',
            'logDescription' => 'string',
            'operateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    * logDescription  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateTime' => null,
        'logType' => null,
        'logDescription' => null,
        'operateUser' => null
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
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    * logDescription  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateTime' => 'operate_time',
            'logType' => 'log_type',
            'logDescription' => 'log_description',
            'operateUser' => 'operate_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    * logDescription  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @var string[]
    */
    protected static $setters = [
            'operateTime' => 'setOperateTime',
            'logType' => 'setLogType',
            'logDescription' => 'setLogDescription',
            'operateUser' => 'setOperateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    * logDescription  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @var string[]
    */
    protected static $getters = [
            'operateTime' => 'getOperateTime',
            'logType' => 'getLogType',
            'logDescription' => 'getLogDescription',
            'operateUser' => 'getOperateUser'
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
    const LOG_TYPE_USER_CREATE_JOD = 'USER_CREATE_JOD';
    const LOG_TYPE_USER_VERIFYING_SUBMITTED = 'USER_VERIFYING_SUBMITTED';
    const LOG_TYPE_SYSTEM_VERIFY_FAILED = 'SYSTEM_VERIFY_FAILED';
    const LOG_TYPE_SYSTEM_VERIFY_SUCCESS = 'SYSTEM_VERIFY_SUCCESS';
    const LOG_TYPE_ADMIN_VERIFY_SUCCESS = 'ADMIN_VERIFY_SUCCESS';
    const LOG_TYPE_ADMIN_VERIFY_FAILED = 'ADMIN_VERIFY_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESSING = 'SYSTEM_TRAIN_DATA_PREPROCESSING';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_FAILED = 'SYSTEM_TRAIN_DATA_PREPROCESS_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS = 'SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS';
    const LOG_TYPE_SYSTEM_TRAINING = 'SYSTEM_TRAINING';
    const LOG_TYPE_ADMIN_STOP_TRAIN = 'ADMIN_STOP_TRAIN';
    const LOG_TYPE_SYSTEM_TRAIN_FAILED = 'SYSTEM_TRAIN_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_SUCCESS = 'SYSTEM_TRAIN_SUCCESS';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESSING = 'SYSTEM_INFERENCE_DATA_PREPROCESSING';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED = 'SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS = 'SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS';
    const LOG_TYPE_SYSTEM_JOB_SUCCESS = 'SYSTEM_JOB_SUCCESS';
    const LOG_TYPE_ADMIN_MASK_UPLOADED = 'ADMIN_MASK_UPLOADED';
    const LOG_TYPE_ADMIN_UPDATE_VIDEO = 'ADMIN_UPDATE_VIDEO';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO = 'SYSTEM_MARKABLE_VIDEO';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO = 'SYSTEM_MASK_VERIFY_VIDEO';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_SUCCESS = 'SYSTEM_MASK_VERIFY_VIDEO_SUCCESS';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_FAILED = 'SYSTEM_MASK_VERIFY_VIDEO_FAILED';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO_SUCCESS = 'SYSTEM_MARKABLE_VIDEO_SUCCESS';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO_FAILED = 'SYSTEM_MARKABLE_VIDEO_FAILED';
    const LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS = 'SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS';
    const LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED = 'SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED';
    const LOG_TYPE_USER_UPDATE_VIDEO = 'USER_UPDATE_VIDEO';
    const LOG_TYPE_ADMIN_MASK_ACTION_TIME = 'ADMIN_MASK_ACTION_TIME';
    const OPERATE_USER_USER = 'USER';
    const OPERATE_USER_ADMIN = 'ADMIN';
    const OPERATE_USER_SYSTEM = 'SYSTEM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTypeAllowableValues()
    {
        return [
            self::LOG_TYPE_USER_CREATE_JOD,
            self::LOG_TYPE_USER_VERIFYING_SUBMITTED,
            self::LOG_TYPE_SYSTEM_VERIFY_FAILED,
            self::LOG_TYPE_SYSTEM_VERIFY_SUCCESS,
            self::LOG_TYPE_ADMIN_VERIFY_SUCCESS,
            self::LOG_TYPE_ADMIN_VERIFY_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS,
            self::LOG_TYPE_SYSTEM_TRAINING,
            self::LOG_TYPE_ADMIN_STOP_TRAIN,
            self::LOG_TYPE_SYSTEM_TRAIN_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_SUCCESS,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS,
            self::LOG_TYPE_SYSTEM_JOB_SUCCESS,
            self::LOG_TYPE_ADMIN_MASK_UPLOADED,
            self::LOG_TYPE_ADMIN_UPDATE_VIDEO,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_SUCCESS,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_FAILED,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO_SUCCESS,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO_FAILED,
            self::LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS,
            self::LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED,
            self::LOG_TYPE_USER_UPDATE_VIDEO,
            self::LOG_TYPE_ADMIN_MASK_ACTION_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateUserAllowableValues()
    {
        return [
            self::OPERATE_USER_USER,
            self::OPERATE_USER_ADMIN,
            self::OPERATE_USER_SYSTEM,
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
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logDescription'] = isset($data['logDescription']) ? $data['logDescription'] : null;
        $this->container['operateUser'] = isset($data['operateUser']) ? $data['operateUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operateTime']) && (mb_strlen($this->container['operateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'operateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['operateTime']) && (mb_strlen($this->container['operateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'operateTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getLogTypeAllowableValues();
                if (!is_null($this->container['logType']) && !in_array($this->container['logType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['logDescription']) && (mb_strlen($this->container['logDescription']) > 2048)) {
                $invalidProperties[] = "invalid value for 'logDescription', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['logDescription']) && (mb_strlen($this->container['logDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'logDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOperateUserAllowableValues();
                if (!is_null($this->container['operateUser']) && !in_array($this->container['operateUser'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateUser', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['operateUser']) && (mb_strlen($this->container['operateUser']) > 64)) {
                $invalidProperties[] = "invalid value for 'operateUser', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operateUser']) && (mb_strlen($this->container['operateUser']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateUser', the character length must be bigger than or equal to 1.";
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
    * Gets operateTime
    *  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param string|null $operateTime 操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets logType
    *  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType 命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * SYSTEM_MARKABLE_VIDEO: 标定视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO: 校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标定视频生成成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标定视频生成失败 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标定成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标定失败 * ADMIN_MASK_UPLOADED：遮罩文件上传完成 * ADMIN_UPDATE_VIDEO：管理员更换视频 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_MASK_ACTION_TIME：管理员标定
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets logDescription
    *  日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    *
    * @return string|null
    */
    public function getLogDescription()
    {
        return $this->container['logDescription'];
    }

    /**
    * Sets logDescription
    *
    * @param string|null $logDescription 日志描述。用于记录人工审核不通过时的审核意见和DHTS、DHPS上报的错误信息。
    *
    * @return $this
    */
    public function setLogDescription($logDescription)
    {
        $this->container['logDescription'] = $logDescription;
        return $this;
    }

    /**
    * Gets operateUser
    *  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @return string|null
    */
    public function getOperateUser()
    {
        return $this->container['operateUser'];
    }

    /**
    * Sets operateUser
    *
    * @param string|null $operateUser 操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    *
    * @return $this
    */
    public function setOperateUser($operateUser)
    {
        $this->container['operateUser'] = $operateUser;
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

