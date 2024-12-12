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
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
    * logDescription  日志描述。用于记录人工或自动审核不通过时的审核意见。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    * errorCode  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateTime' => 'string',
            'logType' => 'string',
            'logDescription' => 'string',
            'operateUser' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
    * logDescription  日志描述。用于记录人工或自动审核不通过时的审核意见。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    * errorCode  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateTime' => null,
        'logType' => null,
        'logDescription' => null,
        'operateUser' => null,
        'errorCode' => null
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
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
    * logDescription  日志描述。用于记录人工或自动审核不通过时的审核意见。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    * errorCode  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateTime' => 'operate_time',
            'logType' => 'log_type',
            'logDescription' => 'log_description',
            'operateUser' => 'operate_user',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
    * logDescription  日志描述。用于记录人工或自动审核不通过时的审核意见。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    * errorCode  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @var string[]
    */
    protected static $setters = [
            'operateTime' => 'setOperateTime',
            'logType' => 'setLogType',
            'logDescription' => 'setLogDescription',
            'operateUser' => 'setOperateUser',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * logType  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
    * logDescription  日志描述。用于记录人工或自动审核不通过时的审核意见。
    * operateUser  操作人员。 * USER：用户 * ADMIN：管理员 * SYSTEM：系统
    * errorCode  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @var string[]
    */
    protected static $getters = [
            'operateTime' => 'getOperateTime',
            'logType' => 'getLogType',
            'logDescription' => 'getLogDescription',
            'operateUser' => 'getOperateUser',
            'errorCode' => 'getErrorCode'
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
    const LOG_TYPE_ADMIN_UPDATE_BEAUTY_LEVEL = 'ADMIN_UPDATE_BEAUTY_LEVEL';
    const LOG_TYPE_SYSTEM_VERIFY_SUCCESS = 'SYSTEM_VERIFY_SUCCESS';
    const LOG_TYPE_ADMIN_VERIFY_SUCCESS = 'ADMIN_VERIFY_SUCCESS';
    const LOG_TYPE_ADMIN_VERIFY_FAILED = 'ADMIN_VERIFY_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESSING = 'SYSTEM_TRAIN_DATA_PREPROCESSING';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_FAILED = 'SYSTEM_TRAIN_DATA_PREPROCESS_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS = 'SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING = 'SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_SUCCESS = 'SYSTEM_ACTION_GENERATE_DATA_SUCCESS';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_SUCCESS = 'SYSTEM_ACTION_GENERATE_ORI_SUCCESS';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_FAILED = 'SYSTEM_ACTION_GENERATE_DATA_FAILED';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_FAILED = 'SYSTEM_ACTION_GENERATE_ORI_FAILED';
    const LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING = 'SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING';
    const LOG_TYPE_SYSTEM_TRAINING = 'SYSTEM_TRAINING';
    const LOG_TYPE_ADMIN_STOP_TRAINING_DATA_PREPROCESS = 'ADMIN_STOP_TRAINING_DATA_PREPROCESS';
    const LOG_TYPE_ADMIN_STOP_BEAUTY_PREPROCESS = 'ADMIN_STOP_BEAUTY_PREPROCESS';
    const LOG_TYPE_ADMIN_STOP_INFERENCE_DATA_PREPROCESS = 'ADMIN_STOP_INFERENCE_DATA_PREPROCESS';
    const LOG_TYPE_ADMIN_STOP_TRAIN = 'ADMIN_STOP_TRAIN';
    const LOG_TYPE_SYSTEM_TRAIN_FAILED = 'SYSTEM_TRAIN_FAILED';
    const LOG_TYPE_SYSTEM_TRAIN_SUCCESS = 'SYSTEM_TRAIN_SUCCESS';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESSING = 'SYSTEM_INFERENCE_DATA_PREPROCESSING';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED = 'SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED';
    const LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS = 'SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS';
    const LOG_TYPE_SYSTEM_JOB_SUCCESS = 'SYSTEM_JOB_SUCCESS';
    const LOG_TYPE_ADMIN_MASK_UPLOADED = 'ADMIN_MASK_UPLOADED';
    const LOG_TYPE_ADMIN_UPDATE_VIDEO = 'ADMIN_UPDATE_VIDEO';
    const LOG_TYPE_ADMIN_UPDATE_ACTION_VIDEO = 'ADMIN_UPDATE_ACTION_VIDEO';
    const LOG_TYPE_ADMIN_RESET = 'ADMIN_RESET';
    const LOG_TYPE_ADMIN_ACCEPT = 'ADMIN_ACCEPT';
    const LOG_TYPE_USER_REPAIR = 'USER_REPAIR';
    const LOG_TYPE_SYSTEM_UPDATE_COVER = 'SYSTEM_UPDATE_COVER';
    const LOG_TYPE_ADMIN_SET_SILENCE_REPEAT_NUM = 'ADMIN_SET_SILENCE_REPEAT_NUM';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO = 'SYSTEM_MARKABLE_VIDEO';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO = 'SYSTEM_MASK_VERIFY_VIDEO';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_SUCCESS = 'SYSTEM_MASK_VERIFY_VIDEO_SUCCESS';
    const LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_FAILED = 'SYSTEM_MASK_VERIFY_VIDEO_FAILED';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO_SUCCESS = 'SYSTEM_MARKABLE_VIDEO_SUCCESS';
    const LOG_TYPE_SYSTEM_BEAUTY_PREPROCESSING = 'SYSTEM_BEAUTY_PREPROCESSING';
    const LOG_TYPE_SYSTEM_BEAUTY_PREPROCESS_FAILED = 'SYSTEM_BEAUTY_PREPROCESS_FAILED';
    const LOG_TYPE_ADMIN_CONFIRM_ACTION = 'ADMIN_CONFIRM_ACTION';
    const LOG_TYPE_ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS = 'ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS';
    const LOG_TYPE_ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS = 'ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS';
    const LOG_TYPE_SYSTEM_BEAUTY_PREPROCESS_SUCCESS = 'SYSTEM_BEAUTY_PREPROCESS_SUCCESS';
    const LOG_TYPE_SYSTEM_COMPILE_FAILED = 'SYSTEM_COMPILE_FAILED';
    const LOG_TYPE_SYSTEM_COMPILE_SUCCESS = 'SYSTEM_COMPILE_SUCCESS';
    const LOG_TYPE_SYSTEM_MARKABLE_VIDEO_FAILED = 'SYSTEM_MARKABLE_VIDEO_FAILED';
    const LOG_TYPE_ADMIN_UPDATE_COMPILE = 'ADMIN_UPDATE_COMPILE';
    const LOG_TYPE_ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO = 'ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO';
    const LOG_TYPE_SYSTEM_EXECUTE_COMPILE = 'SYSTEM_EXECUTE_COMPILE';
    const LOG_TYPE_SYSTEM_EXECUTE_BEAUTY = 'SYSTEM_EXECUTE_BEAUTY';
    const LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS = 'SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS';
    const LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED = 'SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED';
    const LOG_TYPE_USER_UPDATE_VIDEO = 'USER_UPDATE_VIDEO';
    const LOG_TYPE_ADMIN_UPDATE_GENERAL_CONFIG = 'ADMIN_UPDATE_GENERAL_CONFIG';
    const LOG_TYPE_ADMIN_MASK_ACTION_TIME = 'ADMIN_MASK_ACTION_TIME';
    const LOG_TYPE_STOP_COMPILE = 'STOP_COMPILE';
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
            self::LOG_TYPE_ADMIN_UPDATE_BEAUTY_LEVEL,
            self::LOG_TYPE_SYSTEM_VERIFY_SUCCESS,
            self::LOG_TYPE_ADMIN_VERIFY_SUCCESS,
            self::LOG_TYPE_ADMIN_VERIFY_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_SUCCESS,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_SUCCESS,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_DATA_FAILED,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_FAILED,
            self::LOG_TYPE_SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_TRAINING,
            self::LOG_TYPE_ADMIN_STOP_TRAINING_DATA_PREPROCESS,
            self::LOG_TYPE_ADMIN_STOP_BEAUTY_PREPROCESS,
            self::LOG_TYPE_ADMIN_STOP_INFERENCE_DATA_PREPROCESS,
            self::LOG_TYPE_ADMIN_STOP_TRAIN,
            self::LOG_TYPE_SYSTEM_TRAIN_FAILED,
            self::LOG_TYPE_SYSTEM_TRAIN_SUCCESS,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED,
            self::LOG_TYPE_SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS,
            self::LOG_TYPE_SYSTEM_JOB_SUCCESS,
            self::LOG_TYPE_ADMIN_MASK_UPLOADED,
            self::LOG_TYPE_ADMIN_UPDATE_VIDEO,
            self::LOG_TYPE_ADMIN_UPDATE_ACTION_VIDEO,
            self::LOG_TYPE_ADMIN_RESET,
            self::LOG_TYPE_ADMIN_ACCEPT,
            self::LOG_TYPE_USER_REPAIR,
            self::LOG_TYPE_SYSTEM_UPDATE_COVER,
            self::LOG_TYPE_ADMIN_SET_SILENCE_REPEAT_NUM,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_SUCCESS,
            self::LOG_TYPE_SYSTEM_MASK_VERIFY_VIDEO_FAILED,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO_SUCCESS,
            self::LOG_TYPE_SYSTEM_BEAUTY_PREPROCESSING,
            self::LOG_TYPE_SYSTEM_BEAUTY_PREPROCESS_FAILED,
            self::LOG_TYPE_ADMIN_CONFIRM_ACTION,
            self::LOG_TYPE_ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS,
            self::LOG_TYPE_ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS,
            self::LOG_TYPE_SYSTEM_BEAUTY_PREPROCESS_SUCCESS,
            self::LOG_TYPE_SYSTEM_COMPILE_FAILED,
            self::LOG_TYPE_SYSTEM_COMPILE_SUCCESS,
            self::LOG_TYPE_SYSTEM_MARKABLE_VIDEO_FAILED,
            self::LOG_TYPE_ADMIN_UPDATE_COMPILE,
            self::LOG_TYPE_ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO,
            self::LOG_TYPE_SYSTEM_EXECUTE_COMPILE,
            self::LOG_TYPE_SYSTEM_EXECUTE_BEAUTY,
            self::LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS,
            self::LOG_TYPE_SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED,
            self::LOG_TYPE_USER_UPDATE_VIDEO,
            self::LOG_TYPE_ADMIN_UPDATE_GENERAL_CONFIG,
            self::LOG_TYPE_ADMIN_MASK_ACTION_TIME,
            self::LOG_TYPE_STOP_COMPILE,
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 0.";
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
    *  命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
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
    * @param string|null $logType 命令执行结果。 * USER_CREATE_JOD：用户开始分身数字人定制 * USER_VERIFYING_SUBMITTED：用户提交审核 * SYSTEM_VERIFY_FAILED：自动审核失败 * ADMIN_UPDATE_BEAUTY_LEVEL：管理员更新美白等级 * SYSTEM_VERIFY_SUCCESS：自动审核成功 * ADMIN_VERIFY_SUCCESS：人工审核通过 * ADMIN_VERIFY_FAILED：人工审核不通过 * SYSTEM_TRAIN_DATA_PREPROCESSING：训练数据预处理中 * SYSTEM_TRAIN_DATA_PREPROCESS_FAILED：训练数据预处理失败 * SYSTEM_TRAIN_DATA_PREPROCESS_SUCCESS：训练数据预处理成功 * SYSTEM_ACTION_GENERATE_DATA_PREPROCESSING：动作编排原子动作生成中 * SYSTEM_ACTION_GENERATE_DATA_SUCCESS：动作编排原子动作生成成功 * SYSTEM_ACTION_GENERATE_ORI_SUCCESS：动作编排资产数据生成成功 * SYSTEM_ACTION_GENERATE_DATA_FAILED：动作编排原子动作生成失败 * SYSTEM_ACTION_GENERATE_ORI_FAILED：动作编排资产数据生成失败 * SYSTEM_ACTION_GENERATE_ORI_PREPROCESSING：动作编排资产数据生成中 * SYSTEM_TRAINING：开始训练 * ADMIN_STOP_TRAINING_DATA_PREPROCESS：人工中止训练 * ADMIN_STOP_BEAUTY_PREPROCESS：人工中止美白 * ADMIN_STOP_INFERENCE_DATA_PREPROCESS：人工中止推理预处理 * ADMIN_STOP_TRAIN：人工终止训练 * SYSTEM_TRAIN_FAILED：训练失败 * SYSTEM_TRAIN_SUCCESS：训练成功 * SYSTEM_INFERENCE_DATA_PREPROCESSING：推理数据预处理中 * SYSTEM_INFERENCE_DATA_PREPROCESS_FAILED：推理数据预处理失败 * SYSTEM_INFERENCE_DATA_PREPROCESS_SUCCESS：推理数据预处理成功 * SYSTEM_JOB_SUCCESS：任务处理完成 * ADMIN_MASK_UPLOADED：遮罩文件上传完成（已废弃） * ADMIN_UPDATE_VIDEO：管理员更换视频 * ADMIN_UPDATE_ACTION_VIDEO：管理员更换动作编排视频 * ADMIN_RESET：管理员一键重置 * ADMIN_ACCEPT：管理员通过 * USER_REPAIR：用户修复 * SYSTEM_UPDATE_COVER：更换封面 * ADMIN_SET_SILENCE_REPEAT_NUM：管理员设置静默轮数 * SYSTEM_MARKABLE_VIDEO：标记视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO：校验视频生成任务 * SYSTEM_MASK_VERIFY_VIDEO_SUCCESS：校验视频生成成功 * SYSTEM_MASK_VERIFY_VIDEO_FAILED：校验视频生成失败 * SYSTEM_MARKABLE_VIDEO_SUCCESS：标记视频生成成功 * SYSTEM_BEAUTY_PREPROCESSING：美白处理中 * SYSTEM_BEAUTY_PREPROCESS_FAILED：美白处理失败 * ADMIN_CONFIRM_ACTION：管理员确认动作 * ADMIN_STOP_ACTION_GENERATE_DATA_PREPROCESS：人工中止原子动作生成 * ADMIN_STOP_ACTION_GENERATE_ORI_PREPROCESS：人工中止动作编排 * SYSTEM_BEAUTY_PREPROCESS_SUCCESS：美白视频训练预处理成功 * SYSTEM_COMPILE_FAILED：转编译失败 * SYSTEM_COMPILE_SUCCESS：转编译成功 * SYSTEM_MARKABLE_VIDEO_FAILED：标记视频生成失败 * ADMIN_UPDATE_COMPILE：管理员更新转编译配置 * ADMIN_UPDATE_INFERENCE_DATA_PROCESS_VIDEO：管理员更新推理预处理时间段信息 * SYSTEM_EXECUTE_COMPILE：执行转编译 * SYSTEM_EXECUTE_BEAUTY：执行美白处理 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_SUCCESS：自动标记成功 * SYSTEM_MASK_VIDEO_AND_ACTION_TIME_FAILED：自动标记失败 * USER_UPDATE_VIDEO：用户更换视频 * ADMIN_UPDATE_GENERAL_CONFIG：管理员更新通用配置 * ADMIN_MASK_ACTION_TIME：管理员标记 * STOP_COMPILE：人工中止转编译
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
    *  日志描述。用于记录人工或自动审核不通过时的审核意见。
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
    * @param string|null $logDescription 日志描述。用于记录人工或自动审核不通过时的审核意见。
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
    * Gets errorCode
    *  系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 系统自动驳回时的错误码： * 44005901：视频分辨率不符合要求，目前只接受 1080p(1920x1080, 1080x1920) 或 4K(3840x2160, 2160x3840) 这四种分辨率
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

