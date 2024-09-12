<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Show2dModelTrainingJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Show2dModelTrainingJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * trainingVideoDownloadUrl  分身数字人训练视频下载URL。24小时内有效。
    * idCardImage1DownloadUrl  身份证正面照片下载URL。24小时内有效。
    * idCardImage2DownloadUrl  身份证反面照片下载URL。24小时内有效。
    * grantFileDownloadUrl  授权书下载URL。24小时内有效。
    * actionVideoDownloadUrl  动作视频
    * audioFileDownloadUrl  音频文件下载url。
    * operationLogs  操作日志列表。
    * verifyVideoMattingInfo  生成抠图验证视频时不抠图区域。
    * commentLogs  评论记录列表。
    * samples  动作视频样例。
    * isMaskFileUploaded  遮罩文件是否已上传。
    * maskFileDownloadUrl  遮罩下载URL。24小时内有效。
    * verifyVideoDownloadUrl  制作审核视频
    * markableVideoDownloadUrl  标注视频url下载链接。24小时内有效。
    * inferenceDataProcessVideoMarkInfo  inferenceDataProcessVideoMarkInfo
    * inferenceDataProcessActionMarkInfo  inferenceDataProcessActionMarkInfo
    * inferenceDataProcessEyeCorrectionMarkInfo  inferenceDataProcessEyeCorrectionMarkInfo
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * workerType  转编译任务机型
    * voiceTrainJobId  声音训练任务id。
    * flexusRetryCount  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'name' => 'string',
            'state' => 'string',
            'assetId' => 'string',
            'projectId' => 'string',
            'coverDownloadUrl' => 'string',
            'lastUpdateTime' => 'string',
            'createTime' => 'string',
            'contact' => 'string',
            'batchName' => 'string',
            'tags' => 'string[]',
            'modelVersion' => 'string',
            'mattingType' => 'string',
            'modelResolution' => 'string',
            'appUserId' => 'string',
            'isFlexus' => 'bool',
            'trainingVideoDownloadUrl' => 'string',
            'idCardImage1DownloadUrl' => 'string',
            'idCardImage2DownloadUrl' => 'string',
            'grantFileDownloadUrl' => 'string',
            'actionVideoDownloadUrl' => 'string',
            'audioFileDownloadUrl' => 'string',
            'operationLogs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\OperationLogInfo[]',
            'verifyVideoMattingInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VerifyVideoMattingInfo[]',
            'commentLogs' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\CommentLogInfo[]',
            'samples' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ActionSampleInfo[]',
            'isMaskFileUploaded' => 'bool',
            'maskFileDownloadUrl' => 'string',
            'verifyVideoDownloadUrl' => 'string',
            'markableVideoDownloadUrl' => 'string',
            'inferenceDataProcessVideoMarkInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceVideoMarkInfo',
            'inferenceDataProcessActionMarkInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceActionMarkInfo',
            'inferenceDataProcessEyeCorrectionMarkInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceEyeCorrectionMarkInfo',
            'isBackgroundReplacement' => 'bool',
            'workerType' => 'string[]',
            'voiceTrainJobId' => 'string',
            'flexusRetryCount' => 'int',
            'audioSourceType' => 'string',
            'supportedService' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * trainingVideoDownloadUrl  分身数字人训练视频下载URL。24小时内有效。
    * idCardImage1DownloadUrl  身份证正面照片下载URL。24小时内有效。
    * idCardImage2DownloadUrl  身份证反面照片下载URL。24小时内有效。
    * grantFileDownloadUrl  授权书下载URL。24小时内有效。
    * actionVideoDownloadUrl  动作视频
    * audioFileDownloadUrl  音频文件下载url。
    * operationLogs  操作日志列表。
    * verifyVideoMattingInfo  生成抠图验证视频时不抠图区域。
    * commentLogs  评论记录列表。
    * samples  动作视频样例。
    * isMaskFileUploaded  遮罩文件是否已上传。
    * maskFileDownloadUrl  遮罩下载URL。24小时内有效。
    * verifyVideoDownloadUrl  制作审核视频
    * markableVideoDownloadUrl  标注视频url下载链接。24小时内有效。
    * inferenceDataProcessVideoMarkInfo  inferenceDataProcessVideoMarkInfo
    * inferenceDataProcessActionMarkInfo  inferenceDataProcessActionMarkInfo
    * inferenceDataProcessEyeCorrectionMarkInfo  inferenceDataProcessEyeCorrectionMarkInfo
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * workerType  转编译任务机型
    * voiceTrainJobId  声音训练任务id。
    * flexusRetryCount  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'name' => null,
        'state' => null,
        'assetId' => null,
        'projectId' => null,
        'coverDownloadUrl' => null,
        'lastUpdateTime' => null,
        'createTime' => null,
        'contact' => null,
        'batchName' => null,
        'tags' => null,
        'modelVersion' => null,
        'mattingType' => null,
        'modelResolution' => null,
        'appUserId' => null,
        'isFlexus' => null,
        'trainingVideoDownloadUrl' => null,
        'idCardImage1DownloadUrl' => null,
        'idCardImage2DownloadUrl' => null,
        'grantFileDownloadUrl' => null,
        'actionVideoDownloadUrl' => null,
        'audioFileDownloadUrl' => null,
        'operationLogs' => null,
        'verifyVideoMattingInfo' => null,
        'commentLogs' => null,
        'samples' => null,
        'isMaskFileUploaded' => null,
        'maskFileDownloadUrl' => null,
        'verifyVideoDownloadUrl' => null,
        'markableVideoDownloadUrl' => null,
        'inferenceDataProcessVideoMarkInfo' => null,
        'inferenceDataProcessActionMarkInfo' => null,
        'inferenceDataProcessEyeCorrectionMarkInfo' => null,
        'isBackgroundReplacement' => null,
        'workerType' => null,
        'voiceTrainJobId' => null,
        'flexusRetryCount' => 'int32',
        'audioSourceType' => null,
        'supportedService' => null,
        'xRequestId' => null
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
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * trainingVideoDownloadUrl  分身数字人训练视频下载URL。24小时内有效。
    * idCardImage1DownloadUrl  身份证正面照片下载URL。24小时内有效。
    * idCardImage2DownloadUrl  身份证反面照片下载URL。24小时内有效。
    * grantFileDownloadUrl  授权书下载URL。24小时内有效。
    * actionVideoDownloadUrl  动作视频
    * audioFileDownloadUrl  音频文件下载url。
    * operationLogs  操作日志列表。
    * verifyVideoMattingInfo  生成抠图验证视频时不抠图区域。
    * commentLogs  评论记录列表。
    * samples  动作视频样例。
    * isMaskFileUploaded  遮罩文件是否已上传。
    * maskFileDownloadUrl  遮罩下载URL。24小时内有效。
    * verifyVideoDownloadUrl  制作审核视频
    * markableVideoDownloadUrl  标注视频url下载链接。24小时内有效。
    * inferenceDataProcessVideoMarkInfo  inferenceDataProcessVideoMarkInfo
    * inferenceDataProcessActionMarkInfo  inferenceDataProcessActionMarkInfo
    * inferenceDataProcessEyeCorrectionMarkInfo  inferenceDataProcessEyeCorrectionMarkInfo
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * workerType  转编译任务机型
    * voiceTrainJobId  声音训练任务id。
    * flexusRetryCount  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'name' => 'name',
            'state' => 'state',
            'assetId' => 'asset_id',
            'projectId' => 'project_id',
            'coverDownloadUrl' => 'cover_download_url',
            'lastUpdateTime' => 'last_update_time',
            'createTime' => 'create_time',
            'contact' => 'contact',
            'batchName' => 'batch_name',
            'tags' => 'tags',
            'modelVersion' => 'model_version',
            'mattingType' => 'matting_type',
            'modelResolution' => 'model_resolution',
            'appUserId' => 'app_user_id',
            'isFlexus' => 'is_flexus',
            'trainingVideoDownloadUrl' => 'training_video_download_url',
            'idCardImage1DownloadUrl' => 'id_card_image1_download_url',
            'idCardImage2DownloadUrl' => 'id_card_image2_download_url',
            'grantFileDownloadUrl' => 'grant_file_download_url',
            'actionVideoDownloadUrl' => 'action_video_download_url',
            'audioFileDownloadUrl' => 'audio_file_download_url',
            'operationLogs' => 'operation_logs',
            'verifyVideoMattingInfo' => 'verify_video_matting_info',
            'commentLogs' => 'comment_logs',
            'samples' => 'samples',
            'isMaskFileUploaded' => 'is_mask_file_uploaded',
            'maskFileDownloadUrl' => 'mask_file_download_url',
            'verifyVideoDownloadUrl' => 'verify_video_download_url',
            'markableVideoDownloadUrl' => 'markable_video_download_url',
            'inferenceDataProcessVideoMarkInfo' => 'inference_data_process_video_mark_info',
            'inferenceDataProcessActionMarkInfo' => 'inference_data_process_action_mark_info',
            'inferenceDataProcessEyeCorrectionMarkInfo' => 'inference_data_process_eye_correction_mark_info',
            'isBackgroundReplacement' => 'is_background_replacement',
            'workerType' => 'worker_type',
            'voiceTrainJobId' => 'voice_train_job_id',
            'flexusRetryCount' => 'flexus_retry_count',
            'audioSourceType' => 'audio_source_type',
            'supportedService' => 'supported_service',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * trainingVideoDownloadUrl  分身数字人训练视频下载URL。24小时内有效。
    * idCardImage1DownloadUrl  身份证正面照片下载URL。24小时内有效。
    * idCardImage2DownloadUrl  身份证反面照片下载URL。24小时内有效。
    * grantFileDownloadUrl  授权书下载URL。24小时内有效。
    * actionVideoDownloadUrl  动作视频
    * audioFileDownloadUrl  音频文件下载url。
    * operationLogs  操作日志列表。
    * verifyVideoMattingInfo  生成抠图验证视频时不抠图区域。
    * commentLogs  评论记录列表。
    * samples  动作视频样例。
    * isMaskFileUploaded  遮罩文件是否已上传。
    * maskFileDownloadUrl  遮罩下载URL。24小时内有效。
    * verifyVideoDownloadUrl  制作审核视频
    * markableVideoDownloadUrl  标注视频url下载链接。24小时内有效。
    * inferenceDataProcessVideoMarkInfo  inferenceDataProcessVideoMarkInfo
    * inferenceDataProcessActionMarkInfo  inferenceDataProcessActionMarkInfo
    * inferenceDataProcessEyeCorrectionMarkInfo  inferenceDataProcessEyeCorrectionMarkInfo
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * workerType  转编译任务机型
    * voiceTrainJobId  声音训练任务id。
    * flexusRetryCount  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'name' => 'setName',
            'state' => 'setState',
            'assetId' => 'setAssetId',
            'projectId' => 'setProjectId',
            'coverDownloadUrl' => 'setCoverDownloadUrl',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createTime' => 'setCreateTime',
            'contact' => 'setContact',
            'batchName' => 'setBatchName',
            'tags' => 'setTags',
            'modelVersion' => 'setModelVersion',
            'mattingType' => 'setMattingType',
            'modelResolution' => 'setModelResolution',
            'appUserId' => 'setAppUserId',
            'isFlexus' => 'setIsFlexus',
            'trainingVideoDownloadUrl' => 'setTrainingVideoDownloadUrl',
            'idCardImage1DownloadUrl' => 'setIdCardImage1DownloadUrl',
            'idCardImage2DownloadUrl' => 'setIdCardImage2DownloadUrl',
            'grantFileDownloadUrl' => 'setGrantFileDownloadUrl',
            'actionVideoDownloadUrl' => 'setActionVideoDownloadUrl',
            'audioFileDownloadUrl' => 'setAudioFileDownloadUrl',
            'operationLogs' => 'setOperationLogs',
            'verifyVideoMattingInfo' => 'setVerifyVideoMattingInfo',
            'commentLogs' => 'setCommentLogs',
            'samples' => 'setSamples',
            'isMaskFileUploaded' => 'setIsMaskFileUploaded',
            'maskFileDownloadUrl' => 'setMaskFileDownloadUrl',
            'verifyVideoDownloadUrl' => 'setVerifyVideoDownloadUrl',
            'markableVideoDownloadUrl' => 'setMarkableVideoDownloadUrl',
            'inferenceDataProcessVideoMarkInfo' => 'setInferenceDataProcessVideoMarkInfo',
            'inferenceDataProcessActionMarkInfo' => 'setInferenceDataProcessActionMarkInfo',
            'inferenceDataProcessEyeCorrectionMarkInfo' => 'setInferenceDataProcessEyeCorrectionMarkInfo',
            'isBackgroundReplacement' => 'setIsBackgroundReplacement',
            'workerType' => 'setWorkerType',
            'voiceTrainJobId' => 'setVoiceTrainJobId',
            'flexusRetryCount' => 'setFlexusRetryCount',
            'audioSourceType' => 'setAudioSourceType',
            'supportedService' => 'setSupportedService',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * trainingVideoDownloadUrl  分身数字人训练视频下载URL。24小时内有效。
    * idCardImage1DownloadUrl  身份证正面照片下载URL。24小时内有效。
    * idCardImage2DownloadUrl  身份证反面照片下载URL。24小时内有效。
    * grantFileDownloadUrl  授权书下载URL。24小时内有效。
    * actionVideoDownloadUrl  动作视频
    * audioFileDownloadUrl  音频文件下载url。
    * operationLogs  操作日志列表。
    * verifyVideoMattingInfo  生成抠图验证视频时不抠图区域。
    * commentLogs  评论记录列表。
    * samples  动作视频样例。
    * isMaskFileUploaded  遮罩文件是否已上传。
    * maskFileDownloadUrl  遮罩下载URL。24小时内有效。
    * verifyVideoDownloadUrl  制作审核视频
    * markableVideoDownloadUrl  标注视频url下载链接。24小时内有效。
    * inferenceDataProcessVideoMarkInfo  inferenceDataProcessVideoMarkInfo
    * inferenceDataProcessActionMarkInfo  inferenceDataProcessActionMarkInfo
    * inferenceDataProcessEyeCorrectionMarkInfo  inferenceDataProcessEyeCorrectionMarkInfo
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * workerType  转编译任务机型
    * voiceTrainJobId  声音训练任务id。
    * flexusRetryCount  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    * audioSourceType  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    * supportedService  该任务所生成的模型支持的业务类型，可多选
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'name' => 'getName',
            'state' => 'getState',
            'assetId' => 'getAssetId',
            'projectId' => 'getProjectId',
            'coverDownloadUrl' => 'getCoverDownloadUrl',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createTime' => 'getCreateTime',
            'contact' => 'getContact',
            'batchName' => 'getBatchName',
            'tags' => 'getTags',
            'modelVersion' => 'getModelVersion',
            'mattingType' => 'getMattingType',
            'modelResolution' => 'getModelResolution',
            'appUserId' => 'getAppUserId',
            'isFlexus' => 'getIsFlexus',
            'trainingVideoDownloadUrl' => 'getTrainingVideoDownloadUrl',
            'idCardImage1DownloadUrl' => 'getIdCardImage1DownloadUrl',
            'idCardImage2DownloadUrl' => 'getIdCardImage2DownloadUrl',
            'grantFileDownloadUrl' => 'getGrantFileDownloadUrl',
            'actionVideoDownloadUrl' => 'getActionVideoDownloadUrl',
            'audioFileDownloadUrl' => 'getAudioFileDownloadUrl',
            'operationLogs' => 'getOperationLogs',
            'verifyVideoMattingInfo' => 'getVerifyVideoMattingInfo',
            'commentLogs' => 'getCommentLogs',
            'samples' => 'getSamples',
            'isMaskFileUploaded' => 'getIsMaskFileUploaded',
            'maskFileDownloadUrl' => 'getMaskFileDownloadUrl',
            'verifyVideoDownloadUrl' => 'getVerifyVideoDownloadUrl',
            'markableVideoDownloadUrl' => 'getMarkableVideoDownloadUrl',
            'inferenceDataProcessVideoMarkInfo' => 'getInferenceDataProcessVideoMarkInfo',
            'inferenceDataProcessActionMarkInfo' => 'getInferenceDataProcessActionMarkInfo',
            'inferenceDataProcessEyeCorrectionMarkInfo' => 'getInferenceDataProcessEyeCorrectionMarkInfo',
            'isBackgroundReplacement' => 'getIsBackgroundReplacement',
            'workerType' => 'getWorkerType',
            'voiceTrainJobId' => 'getVoiceTrainJobId',
            'flexusRetryCount' => 'getFlexusRetryCount',
            'audioSourceType' => 'getAudioSourceType',
            'supportedService' => 'getSupportedService',
            'xRequestId' => 'getXRequestId'
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
    const STATE_WAIT_FILE_UPLOAD = 'WAIT_FILE_UPLOAD';
    const STATE_AUTO_VERIFYING = 'AUTO_VERIFYING';
    const STATE_AUTO_VERIFY_FAILED = 'AUTO_VERIFY_FAILED';
    const STATE_MANUAL_VERIFYING = 'MANUAL_VERIFYING';
    const STATE_WAIT_TRAINING_DATA_PREPROCESS = 'WAIT_TRAINING_DATA_PREPROCESS';
    const STATE_MANUAL_VERIFY_FAILED = 'MANUAL_VERIFY_FAILED';
    const STATE_MANUAL_VERIFY_SUCCESS = 'MANUAL_VERIFY_SUCCESS';
    const STATE_TRAINING_DATA_PREPROCESSING = 'TRAINING_DATA_PREPROCESSING';
    const STATE_TRAINING_DATA_PREPROCESS_FAILED = 'TRAINING_DATA_PREPROCESS_FAILED';
    const STATE_TRAINING_DATA_PREPROCESS_SUCCESS = 'TRAINING_DATA_PREPROCESS_SUCCESS';
    const STATE_TRAINING = 'TRAINING';
    const STATE_TRAIN_FAILED = 'TRAIN_FAILED';
    const STATE_TRAIN_SUCCESS = 'TRAIN_SUCCESS';
    const STATE_INFERENCE_DATA_PREPROCESSING = 'INFERENCE_DATA_PREPROCESSING';
    const STATE_INFERENCE_DATA_PREPROCESS_FAILED = 'INFERENCE_DATA_PREPROCESS_FAILED';
    const STATE_WAIT_MASK_UPLOAD = 'WAIT_MASK_UPLOAD';
    const STATE_WAIT_MAIN_FILE_UPLOAD = 'WAIT_MAIN_FILE_UPLOAD';
    const STATE_JOB_SUCCESS = 'JOB_SUCCESS';
    const STATE_MANUAL_STOP_INFERENCE_DATA_PREPROCESS = 'MANUAL_STOP_INFERENCE_DATA_PREPROCESS';
    const STATE_MANUAL_STOP_TRAIN = 'MANUAL_STOP_TRAIN';
    const STATE_MANUAL_STOP_TRAINING_DATA_PREPROCESS = 'MANUAL_STOP_TRAINING_DATA_PREPROCESS';
    const STATE_MANUAL_STOP_BEAUTY_PREPROCESS = 'MANUAL_STOP_BEAUTY_PREPROCESS';
    const STATE_WAIT_USER_CONFIRM = 'WAIT_USER_CONFIRM';
    const STATE_JOB_REJECT = 'JOB_REJECT';
    const STATE_JOB_PENDING = 'JOB_PENDING';
    const STATE_WAIT_ADMIN_CONFIRM = 'WAIT_ADMIN_CONFIRM';
    const STATE_JOB_FINISH = 'JOB_FINISH';
    const STATE_COMPILING = 'COMPILING';
    const STATE_WAIT_COMPILE = 'WAIT_COMPILE';
    const STATE_COMPILE_FAILED = 'COMPILE_FAILED';
    const STATE_WAIT_BEAUTY = 'WAIT_BEAUTY';
    const STATE_WAIT_GENERATE_ACTION = 'WAIT_GENERATE_ACTION';
    const STATE_WAIT_ARRANGE = 'WAIT_ARRANGE';
    const STATE_ACTION_GENERATE_DATA_PROCESSING = 'ACTION_GENERATE_DATA_PROCESSING';
    const STATE_MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING = 'MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING';
    const STATE_MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING = 'MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING';
    const STATE_ACTION_GENERATE_ORI_PROCESSING = 'ACTION_GENERATE_ORI_PROCESSING';
    const STATE_ACTION_GENERATE_DATA_FAILED = 'ACTION_GENERATE_DATA_FAILED';
    const STATE_ACTION_GENERATE_ORI_FAILED = 'ACTION_GENERATE_ORI_FAILED';
    const STATE_ACTION_GENERATE_ORI_SUCCESS = 'ACTION_GENERATE_ORI_SUCCESS';
    const STATE_GENERATE_ACTION_PREPROCESS_FAILED = 'GENERATE_ACTION_PREPROCESS_FAILED';
    const STATE_WAIT_ADMIN_CALIBRATION = 'WAIT_ADMIN_CALIBRATION';
    const STATE_BEAUTY_VIDEO_FILE_UPLOADED = 'BEAUTY_VIDEO_FILE_UPLOADED';
    const STATE_BEAUTYFACE_SUCCESS = 'BEAUTYFACE_SUCCESS';
    const STATE_BEAUTYFACE_FAILED = 'BEAUTYFACE_FAILED';
    const STATE_WAIT_BEAUTY_VIDEO_FILE_UPLOAD = 'WAIT_BEAUTY_VIDEO_FILE_UPLOAD';
    const STATE_BEAUTYFACE_ROCESSING = 'BEAUTYFACE_ROCESSING';
    const MODEL_VERSION_V2 = 'V2';
    const MODEL_VERSION_V3 = 'V3';
    const MODEL_VERSION_V3_2 = 'V3.2';
    const MATTING_TYPE_AI = 'AI';
    const MATTING_TYPE_MANUAL = 'MANUAL';
    const AUDIO_SOURCE_TYPE_VIDEO = 'VIDEO';
    const AUDIO_SOURCE_TYPE_AUDIO = 'AUDIO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_WAIT_FILE_UPLOAD,
            self::STATE_AUTO_VERIFYING,
            self::STATE_AUTO_VERIFY_FAILED,
            self::STATE_MANUAL_VERIFYING,
            self::STATE_WAIT_TRAINING_DATA_PREPROCESS,
            self::STATE_MANUAL_VERIFY_FAILED,
            self::STATE_MANUAL_VERIFY_SUCCESS,
            self::STATE_TRAINING_DATA_PREPROCESSING,
            self::STATE_TRAINING_DATA_PREPROCESS_FAILED,
            self::STATE_TRAINING_DATA_PREPROCESS_SUCCESS,
            self::STATE_TRAINING,
            self::STATE_TRAIN_FAILED,
            self::STATE_TRAIN_SUCCESS,
            self::STATE_INFERENCE_DATA_PREPROCESSING,
            self::STATE_INFERENCE_DATA_PREPROCESS_FAILED,
            self::STATE_WAIT_MASK_UPLOAD,
            self::STATE_WAIT_MAIN_FILE_UPLOAD,
            self::STATE_JOB_SUCCESS,
            self::STATE_MANUAL_STOP_INFERENCE_DATA_PREPROCESS,
            self::STATE_MANUAL_STOP_TRAIN,
            self::STATE_MANUAL_STOP_TRAINING_DATA_PREPROCESS,
            self::STATE_MANUAL_STOP_BEAUTY_PREPROCESS,
            self::STATE_WAIT_USER_CONFIRM,
            self::STATE_JOB_REJECT,
            self::STATE_JOB_PENDING,
            self::STATE_WAIT_ADMIN_CONFIRM,
            self::STATE_JOB_FINISH,
            self::STATE_COMPILING,
            self::STATE_WAIT_COMPILE,
            self::STATE_COMPILE_FAILED,
            self::STATE_WAIT_BEAUTY,
            self::STATE_WAIT_GENERATE_ACTION,
            self::STATE_WAIT_ARRANGE,
            self::STATE_ACTION_GENERATE_DATA_PROCESSING,
            self::STATE_MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING,
            self::STATE_MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING,
            self::STATE_ACTION_GENERATE_ORI_PROCESSING,
            self::STATE_ACTION_GENERATE_DATA_FAILED,
            self::STATE_ACTION_GENERATE_ORI_FAILED,
            self::STATE_ACTION_GENERATE_ORI_SUCCESS,
            self::STATE_GENERATE_ACTION_PREPROCESS_FAILED,
            self::STATE_WAIT_ADMIN_CALIBRATION,
            self::STATE_BEAUTY_VIDEO_FILE_UPLOADED,
            self::STATE_BEAUTYFACE_SUCCESS,
            self::STATE_BEAUTYFACE_FAILED,
            self::STATE_WAIT_BEAUTY_VIDEO_FILE_UPLOAD,
            self::STATE_BEAUTYFACE_ROCESSING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelVersionAllowableValues()
    {
        return [
            self::MODEL_VERSION_V2,
            self::MODEL_VERSION_V3,
            self::MODEL_VERSION_V3_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMattingTypeAllowableValues()
    {
        return [
            self::MATTING_TYPE_AI,
            self::MATTING_TYPE_MANUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioSourceTypeAllowableValues()
    {
        return [
            self::AUDIO_SOURCE_TYPE_VIDEO,
            self::AUDIO_SOURCE_TYPE_AUDIO,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['coverDownloadUrl'] = isset($data['coverDownloadUrl']) ? $data['coverDownloadUrl'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['batchName'] = isset($data['batchName']) ? $data['batchName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['modelVersion'] = isset($data['modelVersion']) ? $data['modelVersion'] : null;
        $this->container['mattingType'] = isset($data['mattingType']) ? $data['mattingType'] : null;
        $this->container['modelResolution'] = isset($data['modelResolution']) ? $data['modelResolution'] : null;
        $this->container['appUserId'] = isset($data['appUserId']) ? $data['appUserId'] : null;
        $this->container['isFlexus'] = isset($data['isFlexus']) ? $data['isFlexus'] : null;
        $this->container['trainingVideoDownloadUrl'] = isset($data['trainingVideoDownloadUrl']) ? $data['trainingVideoDownloadUrl'] : null;
        $this->container['idCardImage1DownloadUrl'] = isset($data['idCardImage1DownloadUrl']) ? $data['idCardImage1DownloadUrl'] : null;
        $this->container['idCardImage2DownloadUrl'] = isset($data['idCardImage2DownloadUrl']) ? $data['idCardImage2DownloadUrl'] : null;
        $this->container['grantFileDownloadUrl'] = isset($data['grantFileDownloadUrl']) ? $data['grantFileDownloadUrl'] : null;
        $this->container['actionVideoDownloadUrl'] = isset($data['actionVideoDownloadUrl']) ? $data['actionVideoDownloadUrl'] : null;
        $this->container['audioFileDownloadUrl'] = isset($data['audioFileDownloadUrl']) ? $data['audioFileDownloadUrl'] : null;
        $this->container['operationLogs'] = isset($data['operationLogs']) ? $data['operationLogs'] : null;
        $this->container['verifyVideoMattingInfo'] = isset($data['verifyVideoMattingInfo']) ? $data['verifyVideoMattingInfo'] : null;
        $this->container['commentLogs'] = isset($data['commentLogs']) ? $data['commentLogs'] : null;
        $this->container['samples'] = isset($data['samples']) ? $data['samples'] : null;
        $this->container['isMaskFileUploaded'] = isset($data['isMaskFileUploaded']) ? $data['isMaskFileUploaded'] : null;
        $this->container['maskFileDownloadUrl'] = isset($data['maskFileDownloadUrl']) ? $data['maskFileDownloadUrl'] : null;
        $this->container['verifyVideoDownloadUrl'] = isset($data['verifyVideoDownloadUrl']) ? $data['verifyVideoDownloadUrl'] : null;
        $this->container['markableVideoDownloadUrl'] = isset($data['markableVideoDownloadUrl']) ? $data['markableVideoDownloadUrl'] : null;
        $this->container['inferenceDataProcessVideoMarkInfo'] = isset($data['inferenceDataProcessVideoMarkInfo']) ? $data['inferenceDataProcessVideoMarkInfo'] : null;
        $this->container['inferenceDataProcessActionMarkInfo'] = isset($data['inferenceDataProcessActionMarkInfo']) ? $data['inferenceDataProcessActionMarkInfo'] : null;
        $this->container['inferenceDataProcessEyeCorrectionMarkInfo'] = isset($data['inferenceDataProcessEyeCorrectionMarkInfo']) ? $data['inferenceDataProcessEyeCorrectionMarkInfo'] : null;
        $this->container['isBackgroundReplacement'] = isset($data['isBackgroundReplacement']) ? $data['isBackgroundReplacement'] : null;
        $this->container['workerType'] = isset($data['workerType']) ? $data['workerType'] : null;
        $this->container['voiceTrainJobId'] = isset($data['voiceTrainJobId']) ? $data['voiceTrainJobId'] : null;
        $this->container['flexusRetryCount'] = isset($data['flexusRetryCount']) ? $data['flexusRetryCount'] : null;
        $this->container['audioSourceType'] = isset($data['audioSourceType']) ? $data['audioSourceType'] : null;
        $this->container['supportedService'] = isset($data['supportedService']) ? $data['supportedService'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['state']) > 64)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coverDownloadUrl']) && (mb_strlen($this->container['coverDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverDownloadUrl']) && (mb_strlen($this->container['coverDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'coverDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['lastUpdateTime']) && (mb_strlen($this->container['lastUpdateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) > 64)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) < 1)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) > 256)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['batchName']) && (mb_strlen($this->container['batchName']) < 1)) {
                $invalidProperties[] = "invalid value for 'batchName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getModelVersionAllowableValues();
                if (!is_null($this->container['modelVersion']) && !in_array($this->container['modelVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMattingTypeAllowableValues();
                if (!is_null($this->container['mattingType']) && !in_array($this->container['mattingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mattingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelResolution']) && (mb_strlen($this->container['modelResolution']) > 128)) {
                $invalidProperties[] = "invalid value for 'modelResolution', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['modelResolution']) && (mb_strlen($this->container['modelResolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelResolution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appUserId']) && (mb_strlen($this->container['appUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'appUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['trainingVideoDownloadUrl']) && (mb_strlen($this->container['trainingVideoDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'trainingVideoDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['trainingVideoDownloadUrl']) && (mb_strlen($this->container['trainingVideoDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'trainingVideoDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['idCardImage1DownloadUrl']) && (mb_strlen($this->container['idCardImage1DownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'idCardImage1DownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['idCardImage1DownloadUrl']) && (mb_strlen($this->container['idCardImage1DownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'idCardImage1DownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['idCardImage2DownloadUrl']) && (mb_strlen($this->container['idCardImage2DownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'idCardImage2DownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['idCardImage2DownloadUrl']) && (mb_strlen($this->container['idCardImage2DownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'idCardImage2DownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['grantFileDownloadUrl']) && (mb_strlen($this->container['grantFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'grantFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['grantFileDownloadUrl']) && (mb_strlen($this->container['grantFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'grantFileDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionVideoDownloadUrl']) && (mb_strlen($this->container['actionVideoDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'actionVideoDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['actionVideoDownloadUrl']) && (mb_strlen($this->container['actionVideoDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionVideoDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maskFileDownloadUrl']) && (mb_strlen($this->container['maskFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'maskFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['maskFileDownloadUrl']) && (mb_strlen($this->container['maskFileDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'maskFileDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verifyVideoDownloadUrl']) && (mb_strlen($this->container['verifyVideoDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'verifyVideoDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['verifyVideoDownloadUrl']) && (mb_strlen($this->container['verifyVideoDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyVideoDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['markableVideoDownloadUrl']) && (mb_strlen($this->container['markableVideoDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'markableVideoDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['markableVideoDownloadUrl']) && (mb_strlen($this->container['markableVideoDownloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'markableVideoDownloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['voiceTrainJobId']) && (mb_strlen($this->container['voiceTrainJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'voiceTrainJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['voiceTrainJobId']) && (mb_strlen($this->container['voiceTrainJobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceTrainJobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['flexusRetryCount']) && ($this->container['flexusRetryCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'flexusRetryCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['flexusRetryCount']) && ($this->container['flexusRetryCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'flexusRetryCount', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAudioSourceTypeAllowableValues();
                if (!is_null($this->container['audioSourceType']) && !in_array($this->container['audioSourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioSourceType', must be one of '%s'",
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
    * Gets jobId
    *  任务ID。
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
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets name
    *  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 任务的状态。 * WAIT_FILE_UPLOAD: 待上传文件 * AUTO_VERIFYING: 自动审核中 * AUTO_VERIFY_FAILED: 自动审核失败 * MANUAL_VERIFYING: 人工审核中 * WAIT_TRAINING_DATA_PREPROCESS: 人工审核中 * MANUAL_VERIFY_FAILED: 人工审核失败 * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源 * TRAINING_DATA_PREPROCESSING: 训练数据预处理中 * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败 * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中 * TRAINING: 训练中 * TRAIN_FAILED: 训练失败 * TRAIN_SUCCESS: 训练完成，等待预处理资源 * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中 * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败 * WAIT_MASK_UPLOAD: 等待遮罩上传 * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传 * JOB_SUCCESS: 训练任务完成 * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理 * MANUAL_STOP_TRAIN: 人工中止训练 * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理 * WAIT_USER_CONFIRM: 等待用户确认训练效果 * JOB_REJECT: 驳回任务 * JOB_PENDING: 挂起任务 * WAIT_ADMIN_CONFIRM: 等待管理员审核 * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态。 * COMPILING: 转编译中 * WAIT_COMPILE: 等待转编译 * COMPILE_FAILED: 转编译失败 * WAIT_GENERATE_ACTION: 等待原子动作生成 * WAIT_ARRANGE: 等待编排 * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中 * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成 * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排 * ACTION_GENERATE_ORI_PROCESSING: 动作编排中 * ACTION_GENERATE_DATA_FAILED: 动作生成失败 * ACTION_GENERATE_ORI_FAILED: 动作编排失败 * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功 * GENERATE_ACTION_PREPROCESS_FAILED: 动作编排失败 * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets assetId
    *  模型资产ID。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 模型资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets projectId
    *  模型资产所属项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 模型资产所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets coverDownloadUrl
    *  分身数字人模型封面下载URL。URL有效期24小时。
    *
    * @return string|null
    */
    public function getCoverDownloadUrl()
    {
        return $this->container['coverDownloadUrl'];
    }

    /**
    * Sets coverDownloadUrl
    *
    * @param string|null $coverDownloadUrl 分身数字人模型封面下载URL。URL有效期24小时。
    *
    * @return $this
    */
    public function setCoverDownloadUrl($coverDownloadUrl)
    {
        $this->container['coverDownloadUrl'] = $coverDownloadUrl;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets contact
    *  分身数字人训练任务创建者联系方式，如手机或邮箱等。
    *
    * @return string|null
    */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
    * Sets contact
    *
    * @param string|null $contact 分身数字人训练任务创建者联系方式，如手机或邮箱等。
    *
    * @return $this
    */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;
        return $this;
    }

    /**
    * Gets batchName
    *  分身数字人训练任务的批次名称。
    *
    * @return string|null
    */
    public function getBatchName()
    {
        return $this->container['batchName'];
    }

    /**
    * Sets batchName
    *
    * @param string|null $batchName 分身数字人训练任务的批次名称。
    *
    * @return $this
    */
    public function setBatchName($batchName)
    {
        $this->container['batchName'] = $batchName;
        return $this;
    }

    /**
    * Gets tags
    *  分身数字人训练任务标签。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 分身数字人训练任务标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets modelVersion
    *  分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    *
    * @return string|null
    */
    public function getModelVersion()
    {
        return $this->container['modelVersion'];
    }

    /**
    * Sets modelVersion
    *
    * @param string|null $modelVersion 分身数字人模型版本。默认是V3版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3.2：V3.2版本模型
    *
    * @return $this
    */
    public function setModelVersion($modelVersion)
    {
        $this->container['modelVersion'] = $modelVersion;
        return $this;
    }

    /**
    * Gets mattingType
    *  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @return string|null
    */
    public function getMattingType()
    {
        return $this->container['mattingType'];
    }

    /**
    * Sets mattingType
    *
    * @param string|null $mattingType 抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    *
    * @return $this
    */
    public function setMattingType($mattingType)
    {
        $this->container['mattingType'] = $mattingType;
        return $this;
    }

    /**
    * Gets modelResolution
    *  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @return string|null
    */
    public function getModelResolution()
    {
        return $this->container['modelResolution'];
    }

    /**
    * Sets modelResolution
    *
    * @param string|null $modelResolution 分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @return $this
    */
    public function setModelResolution($modelResolution)
    {
        $this->container['modelResolution'] = $modelResolution;
        return $this;
    }

    /**
    * Gets appUserId
    *  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    *
    * @return string|null
    */
    public function getAppUserId()
    {
        return $this->container['appUserId'];
    }

    /**
    * Sets appUserId
    *
    * @param string|null $appUserId 自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    *
    * @return $this
    */
    public function setAppUserId($appUserId)
    {
        $this->container['appUserId'] = $appUserId;
        return $this;
    }

    /**
    * Gets isFlexus
    *  是否是基础版的形象训练
    *
    * @return bool|null
    */
    public function getIsFlexus()
    {
        return $this->container['isFlexus'];
    }

    /**
    * Sets isFlexus
    *
    * @param bool|null $isFlexus 是否是基础版的形象训练
    *
    * @return $this
    */
    public function setIsFlexus($isFlexus)
    {
        $this->container['isFlexus'] = $isFlexus;
        return $this;
    }

    /**
    * Gets trainingVideoDownloadUrl
    *  分身数字人训练视频下载URL。24小时内有效。
    *
    * @return string|null
    */
    public function getTrainingVideoDownloadUrl()
    {
        return $this->container['trainingVideoDownloadUrl'];
    }

    /**
    * Sets trainingVideoDownloadUrl
    *
    * @param string|null $trainingVideoDownloadUrl 分身数字人训练视频下载URL。24小时内有效。
    *
    * @return $this
    */
    public function setTrainingVideoDownloadUrl($trainingVideoDownloadUrl)
    {
        $this->container['trainingVideoDownloadUrl'] = $trainingVideoDownloadUrl;
        return $this;
    }

    /**
    * Gets idCardImage1DownloadUrl
    *  身份证正面照片下载URL。24小时内有效。
    *
    * @return string|null
    */
    public function getIdCardImage1DownloadUrl()
    {
        return $this->container['idCardImage1DownloadUrl'];
    }

    /**
    * Sets idCardImage1DownloadUrl
    *
    * @param string|null $idCardImage1DownloadUrl 身份证正面照片下载URL。24小时内有效。
    *
    * @return $this
    */
    public function setIdCardImage1DownloadUrl($idCardImage1DownloadUrl)
    {
        $this->container['idCardImage1DownloadUrl'] = $idCardImage1DownloadUrl;
        return $this;
    }

    /**
    * Gets idCardImage2DownloadUrl
    *  身份证反面照片下载URL。24小时内有效。
    *
    * @return string|null
    */
    public function getIdCardImage2DownloadUrl()
    {
        return $this->container['idCardImage2DownloadUrl'];
    }

    /**
    * Sets idCardImage2DownloadUrl
    *
    * @param string|null $idCardImage2DownloadUrl 身份证反面照片下载URL。24小时内有效。
    *
    * @return $this
    */
    public function setIdCardImage2DownloadUrl($idCardImage2DownloadUrl)
    {
        $this->container['idCardImage2DownloadUrl'] = $idCardImage2DownloadUrl;
        return $this;
    }

    /**
    * Gets grantFileDownloadUrl
    *  授权书下载URL。24小时内有效。
    *
    * @return string|null
    */
    public function getGrantFileDownloadUrl()
    {
        return $this->container['grantFileDownloadUrl'];
    }

    /**
    * Sets grantFileDownloadUrl
    *
    * @param string|null $grantFileDownloadUrl 授权书下载URL。24小时内有效。
    *
    * @return $this
    */
    public function setGrantFileDownloadUrl($grantFileDownloadUrl)
    {
        $this->container['grantFileDownloadUrl'] = $grantFileDownloadUrl;
        return $this;
    }

    /**
    * Gets actionVideoDownloadUrl
    *  动作视频
    *
    * @return string|null
    */
    public function getActionVideoDownloadUrl()
    {
        return $this->container['actionVideoDownloadUrl'];
    }

    /**
    * Sets actionVideoDownloadUrl
    *
    * @param string|null $actionVideoDownloadUrl 动作视频
    *
    * @return $this
    */
    public function setActionVideoDownloadUrl($actionVideoDownloadUrl)
    {
        $this->container['actionVideoDownloadUrl'] = $actionVideoDownloadUrl;
        return $this;
    }

    /**
    * Gets audioFileDownloadUrl
    *  音频文件下载url。
    *
    * @return string|null
    */
    public function getAudioFileDownloadUrl()
    {
        return $this->container['audioFileDownloadUrl'];
    }

    /**
    * Sets audioFileDownloadUrl
    *
    * @param string|null $audioFileDownloadUrl 音频文件下载url。
    *
    * @return $this
    */
    public function setAudioFileDownloadUrl($audioFileDownloadUrl)
    {
        $this->container['audioFileDownloadUrl'] = $audioFileDownloadUrl;
        return $this;
    }

    /**
    * Gets operationLogs
    *  操作日志列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\OperationLogInfo[]|null
    */
    public function getOperationLogs()
    {
        return $this->container['operationLogs'];
    }

    /**
    * Sets operationLogs
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\OperationLogInfo[]|null $operationLogs 操作日志列表。
    *
    * @return $this
    */
    public function setOperationLogs($operationLogs)
    {
        $this->container['operationLogs'] = $operationLogs;
        return $this;
    }

    /**
    * Gets verifyVideoMattingInfo
    *  生成抠图验证视频时不抠图区域。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VerifyVideoMattingInfo[]|null
    */
    public function getVerifyVideoMattingInfo()
    {
        return $this->container['verifyVideoMattingInfo'];
    }

    /**
    * Sets verifyVideoMattingInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VerifyVideoMattingInfo[]|null $verifyVideoMattingInfo 生成抠图验证视频时不抠图区域。
    *
    * @return $this
    */
    public function setVerifyVideoMattingInfo($verifyVideoMattingInfo)
    {
        $this->container['verifyVideoMattingInfo'] = $verifyVideoMattingInfo;
        return $this;
    }

    /**
    * Gets commentLogs
    *  评论记录列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\CommentLogInfo[]|null
    */
    public function getCommentLogs()
    {
        return $this->container['commentLogs'];
    }

    /**
    * Sets commentLogs
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\CommentLogInfo[]|null $commentLogs 评论记录列表。
    *
    * @return $this
    */
    public function setCommentLogs($commentLogs)
    {
        $this->container['commentLogs'] = $commentLogs;
        return $this;
    }

    /**
    * Gets samples
    *  动作视频样例。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionSampleInfo[]|null
    */
    public function getSamples()
    {
        return $this->container['samples'];
    }

    /**
    * Sets samples
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionSampleInfo[]|null $samples 动作视频样例。
    *
    * @return $this
    */
    public function setSamples($samples)
    {
        $this->container['samples'] = $samples;
        return $this;
    }

    /**
    * Gets isMaskFileUploaded
    *  遮罩文件是否已上传。
    *
    * @return bool|null
    */
    public function getIsMaskFileUploaded()
    {
        return $this->container['isMaskFileUploaded'];
    }

    /**
    * Sets isMaskFileUploaded
    *
    * @param bool|null $isMaskFileUploaded 遮罩文件是否已上传。
    *
    * @return $this
    */
    public function setIsMaskFileUploaded($isMaskFileUploaded)
    {
        $this->container['isMaskFileUploaded'] = $isMaskFileUploaded;
        return $this;
    }

    /**
    * Gets maskFileDownloadUrl
    *  遮罩下载URL。24小时内有效。
    *
    * @return string|null
    */
    public function getMaskFileDownloadUrl()
    {
        return $this->container['maskFileDownloadUrl'];
    }

    /**
    * Sets maskFileDownloadUrl
    *
    * @param string|null $maskFileDownloadUrl 遮罩下载URL。24小时内有效。
    *
    * @return $this
    */
    public function setMaskFileDownloadUrl($maskFileDownloadUrl)
    {
        $this->container['maskFileDownloadUrl'] = $maskFileDownloadUrl;
        return $this;
    }

    /**
    * Gets verifyVideoDownloadUrl
    *  制作审核视频
    *
    * @return string|null
    */
    public function getVerifyVideoDownloadUrl()
    {
        return $this->container['verifyVideoDownloadUrl'];
    }

    /**
    * Sets verifyVideoDownloadUrl
    *
    * @param string|null $verifyVideoDownloadUrl 制作审核视频
    *
    * @return $this
    */
    public function setVerifyVideoDownloadUrl($verifyVideoDownloadUrl)
    {
        $this->container['verifyVideoDownloadUrl'] = $verifyVideoDownloadUrl;
        return $this;
    }

    /**
    * Gets markableVideoDownloadUrl
    *  标注视频url下载链接。24小时内有效。
    *
    * @return string|null
    */
    public function getMarkableVideoDownloadUrl()
    {
        return $this->container['markableVideoDownloadUrl'];
    }

    /**
    * Sets markableVideoDownloadUrl
    *
    * @param string|null $markableVideoDownloadUrl 标注视频url下载链接。24小时内有效。
    *
    * @return $this
    */
    public function setMarkableVideoDownloadUrl($markableVideoDownloadUrl)
    {
        $this->container['markableVideoDownloadUrl'] = $markableVideoDownloadUrl;
        return $this;
    }

    /**
    * Gets inferenceDataProcessVideoMarkInfo
    *  inferenceDataProcessVideoMarkInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceVideoMarkInfo|null
    */
    public function getInferenceDataProcessVideoMarkInfo()
    {
        return $this->container['inferenceDataProcessVideoMarkInfo'];
    }

    /**
    * Sets inferenceDataProcessVideoMarkInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceVideoMarkInfo|null $inferenceDataProcessVideoMarkInfo inferenceDataProcessVideoMarkInfo
    *
    * @return $this
    */
    public function setInferenceDataProcessVideoMarkInfo($inferenceDataProcessVideoMarkInfo)
    {
        $this->container['inferenceDataProcessVideoMarkInfo'] = $inferenceDataProcessVideoMarkInfo;
        return $this;
    }

    /**
    * Gets inferenceDataProcessActionMarkInfo
    *  inferenceDataProcessActionMarkInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceActionMarkInfo|null
    */
    public function getInferenceDataProcessActionMarkInfo()
    {
        return $this->container['inferenceDataProcessActionMarkInfo'];
    }

    /**
    * Sets inferenceDataProcessActionMarkInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceActionMarkInfo|null $inferenceDataProcessActionMarkInfo inferenceDataProcessActionMarkInfo
    *
    * @return $this
    */
    public function setInferenceDataProcessActionMarkInfo($inferenceDataProcessActionMarkInfo)
    {
        $this->container['inferenceDataProcessActionMarkInfo'] = $inferenceDataProcessActionMarkInfo;
        return $this;
    }

    /**
    * Gets inferenceDataProcessEyeCorrectionMarkInfo
    *  inferenceDataProcessEyeCorrectionMarkInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceEyeCorrectionMarkInfo|null
    */
    public function getInferenceDataProcessEyeCorrectionMarkInfo()
    {
        return $this->container['inferenceDataProcessEyeCorrectionMarkInfo'];
    }

    /**
    * Sets inferenceDataProcessEyeCorrectionMarkInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\InferenceEyeCorrectionMarkInfo|null $inferenceDataProcessEyeCorrectionMarkInfo inferenceDataProcessEyeCorrectionMarkInfo
    *
    * @return $this
    */
    public function setInferenceDataProcessEyeCorrectionMarkInfo($inferenceDataProcessEyeCorrectionMarkInfo)
    {
        $this->container['inferenceDataProcessEyeCorrectionMarkInfo'] = $inferenceDataProcessEyeCorrectionMarkInfo;
        return $this;
    }

    /**
    * Gets isBackgroundReplacement
    *  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    *
    * @return bool|null
    */
    public function getIsBackgroundReplacement()
    {
        return $this->container['isBackgroundReplacement'];
    }

    /**
    * Sets isBackgroundReplacement
    *
    * @param bool|null $isBackgroundReplacement 分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    *
    * @return $this
    */
    public function setIsBackgroundReplacement($isBackgroundReplacement)
    {
        $this->container['isBackgroundReplacement'] = $isBackgroundReplacement;
        return $this;
    }

    /**
    * Gets workerType
    *  转编译任务机型
    *
    * @return string[]|null
    */
    public function getWorkerType()
    {
        return $this->container['workerType'];
    }

    /**
    * Sets workerType
    *
    * @param string[]|null $workerType 转编译任务机型
    *
    * @return $this
    */
    public function setWorkerType($workerType)
    {
        $this->container['workerType'] = $workerType;
        return $this;
    }

    /**
    * Gets voiceTrainJobId
    *  声音训练任务id。
    *
    * @return string|null
    */
    public function getVoiceTrainJobId()
    {
        return $this->container['voiceTrainJobId'];
    }

    /**
    * Sets voiceTrainJobId
    *
    * @param string|null $voiceTrainJobId 声音训练任务id。
    *
    * @return $this
    */
    public function setVoiceTrainJobId($voiceTrainJobId)
    {
        $this->container['voiceTrainJobId'] = $voiceTrainJobId;
        return $this;
    }

    /**
    * Gets flexusRetryCount
    *  flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    *
    * @return int|null
    */
    public function getFlexusRetryCount()
    {
        return $this->container['flexusRetryCount'];
    }

    /**
    * Sets flexusRetryCount
    *
    * @param int|null $flexusRetryCount flexus版本任务剩余可以重训的次数，每重训一次减1，减到0时不可再重训。
    *
    * @return $this
    */
    public function setFlexusRetryCount($flexusRetryCount)
    {
        $this->container['flexusRetryCount'] = $flexusRetryCount;
        return $this;
    }

    /**
    * Gets audioSourceType
    *  声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    *
    * @return string|null
    */
    public function getAudioSourceType()
    {
        return $this->container['audioSourceType'];
    }

    /**
    * Sets audioSourceType
    *
    * @param string|null $audioSourceType 声音来源类型 * VIDEO：视频中抽取音频 * AUDIO：单独上传的音频
    *
    * @return $this
    */
    public function setAudioSourceType($audioSourceType)
    {
        $this->container['audioSourceType'] = $audioSourceType;
        return $this;
    }

    /**
    * Gets supportedService
    *  该任务所生成的模型支持的业务类型，可多选
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null
    */
    public function getSupportedService()
    {
        return $this->container['supportedService'];
    }

    /**
    * Sets supportedService
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SupportedServiceEnum[]|null $supportedService 该任务所生成的模型支持的业务类型，可多选
    *
    * @return $this
    */
    public function setSupportedService($supportedService)
    {
        $this->container['supportedService'] = $supportedService;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

