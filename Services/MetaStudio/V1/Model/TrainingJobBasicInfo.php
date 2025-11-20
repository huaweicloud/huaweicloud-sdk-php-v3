<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrainingJobBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrainingJobBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者的手机号。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * isLiveCopy  是否是直播间复刻任务
    * isFastFlexus  是否极速版flexus
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * optionalTrainingLocation  可选训练region
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * isOndemandResource  是否按需任务
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
            'isLiveCopy' => 'bool',
            'isFastFlexus' => 'bool',
            'isOnlyHumanModel' => 'bool',
            'optionalTrainingLocation' => 'string[]',
            'isBackgroundReplacement' => 'bool',
            'isOndemandResource' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者的手机号。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * isLiveCopy  是否是直播间复刻任务
    * isFastFlexus  是否极速版flexus
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * optionalTrainingLocation  可选训练region
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * isOndemandResource  是否按需任务
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
        'isLiveCopy' => null,
        'isFastFlexus' => null,
        'isOnlyHumanModel' => null,
        'optionalTrainingLocation' => null,
        'isBackgroundReplacement' => null,
        'isOndemandResource' => null
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
    * state  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者的手机号。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * isLiveCopy  是否是直播间复刻任务
    * isFastFlexus  是否极速版flexus
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * optionalTrainingLocation  可选训练region
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * isOndemandResource  是否按需任务
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
            'isLiveCopy' => 'is_live_copy',
            'isFastFlexus' => 'is_fast_flexus',
            'isOnlyHumanModel' => 'is_only_human_model',
            'optionalTrainingLocation' => 'optional_training_location',
            'isBackgroundReplacement' => 'is_background_replacement',
            'isOndemandResource' => 'is_ondemand_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者的手机号。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * isLiveCopy  是否是直播间复刻任务
    * isFastFlexus  是否极速版flexus
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * optionalTrainingLocation  可选训练region
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * isOndemandResource  是否按需任务
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
            'isLiveCopy' => 'setIsLiveCopy',
            'isFastFlexus' => 'setIsFastFlexus',
            'isOnlyHumanModel' => 'setIsOnlyHumanModel',
            'optionalTrainingLocation' => 'setOptionalTrainingLocation',
            'isBackgroundReplacement' => 'setIsBackgroundReplacement',
            'isOndemandResource' => 'setIsOndemandResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * name  分身数字人模型名称。该名称会作为资产库中分身数字人模型资产名称。
    * state  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
    * assetId  模型资产ID。
    * projectId  模型资产所属项目ID。
    * coverDownloadUrl  分身数字人模型封面下载URL。URL有效期24小时。
    * lastUpdateTime  用户最近一次更新任务的时间（包括租户创建或者重新提交），格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * createTime  创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * contact  分身数字人训练任务创建者的手机号。
    * batchName  分身数字人训练任务的批次名称。
    * tags  分身数字人训练任务标签。
    * modelVersion  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
    * mattingType  抠图类型。默认是AI。 * AI：AI抠图 * MANUAL：人工抠图
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * appUserId  自定义用户id（如创建任务时设置了X-App-UserId则会携带）。
    * isFlexus  是否是基础版的形象训练
    * isLiveCopy  是否是直播间复刻任务
    * isFastFlexus  是否极速版flexus
    * isOnlyHumanModel  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    * optionalTrainingLocation  可选训练region
    * isBackgroundReplacement  分身数字人是否需要背景替换。需要背景替换的分身数字人训练视频需要绿幕拍摄。
    * isOndemandResource  是否按需任务
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
            'isLiveCopy' => 'getIsLiveCopy',
            'isFastFlexus' => 'getIsFastFlexus',
            'isOnlyHumanModel' => 'getIsOnlyHumanModel',
            'optionalTrainingLocation' => 'getOptionalTrainingLocation',
            'isBackgroundReplacement' => 'getIsBackgroundReplacement',
            'isOndemandResource' => 'getIsOndemandResource'
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
    const STATE_WAIT_ASSET_SYNC = 'WAIT_ASSET_SYNC';
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
    const STATE_WAIT_TEST_VIDEO_CHECK = 'WAIT_TEST_VIDEO_CHECK';
    const STATE_TEST_VIDEO_CHECK_PROCESSING = 'TEST_VIDEO_CHECK_PROCESSING';
    const STATE_TEST_VIDEO_CHECK_SUCCESS = 'TEST_VIDEO_CHECK_SUCCESS';
    const STATE_TEST_VIDEO_CHECK_FAILED = 'TEST_VIDEO_CHECK_FAILED';
    const STATE_VIDEO_ANALYZE_PROCESSING = 'VIDEO_ANALYZE_PROCESSING';
    const STATE_VIDEO_ANALYZE_SUCCESS = 'VIDEO_ANALYZE_SUCCESS';
    const STATE_VIDEO_ANALYZE_FAILED = 'VIDEO_ANALYZE_FAILED';
    const STATE_ACTION_MARKING = 'ACTION_MARKING';
    const STATE_ACTION_MARK_SUCCESS = 'ACTION_MARK_SUCCESS';
    const STATE_ACTION_MARK_FAILED = 'ACTION_MARK_FAILED';
    const STATE_ACTION_MARK_UPLOADED = 'ACTION_MARK_UPLOADED';
    const STATE_WAIT_GENERATE_ACTION_MARK = 'WAIT_GENERATE_ACTION_MARK';
    const STATE_MANUL_STOP_ACTION_MARK = 'MANUL_STOP_ACTION_MARK';
    const MODEL_VERSION_V2 = 'V2';
    const MODEL_VERSION_V3 = 'V3';
    const MODEL_VERSION_V3_2 = 'V3.2';
    const MODEL_VERSION_V3_3 = 'V3.3';
    const MATTING_TYPE_AI = 'AI';
    const MATTING_TYPE_MANUAL = 'MANUAL';
    

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
            self::STATE_WAIT_ASSET_SYNC,
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
            self::STATE_WAIT_TEST_VIDEO_CHECK,
            self::STATE_TEST_VIDEO_CHECK_PROCESSING,
            self::STATE_TEST_VIDEO_CHECK_SUCCESS,
            self::STATE_TEST_VIDEO_CHECK_FAILED,
            self::STATE_VIDEO_ANALYZE_PROCESSING,
            self::STATE_VIDEO_ANALYZE_SUCCESS,
            self::STATE_VIDEO_ANALYZE_FAILED,
            self::STATE_ACTION_MARKING,
            self::STATE_ACTION_MARK_SUCCESS,
            self::STATE_ACTION_MARK_FAILED,
            self::STATE_ACTION_MARK_UPLOADED,
            self::STATE_WAIT_GENERATE_ACTION_MARK,
            self::STATE_MANUL_STOP_ACTION_MARK,
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
            self::MODEL_VERSION_V3_3,
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
        $this->container['isLiveCopy'] = isset($data['isLiveCopy']) ? $data['isLiveCopy'] : null;
        $this->container['isFastFlexus'] = isset($data['isFastFlexus']) ? $data['isFastFlexus'] : null;
        $this->container['isOnlyHumanModel'] = isset($data['isOnlyHumanModel']) ? $data['isOnlyHumanModel'] : null;
        $this->container['optionalTrainingLocation'] = isset($data['optionalTrainingLocation']) ? $data['optionalTrainingLocation'] : null;
        $this->container['isBackgroundReplacement'] = isset($data['isBackgroundReplacement']) ? $data['isBackgroundReplacement'] : null;
        $this->container['isOndemandResource'] = isset($data['isOndemandResource']) ? $data['isOndemandResource'] : null;
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
            if (!is_null($this->container['contact']) && (mb_strlen($this->container['contact']) < 0)) {
                $invalidProperties[] = "invalid value for 'contact', the character length must be bigger than or equal to 0.";
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
    *  任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
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
    * @param string $state 任务的状态。  与MetaStudio Console上用户看到的状态映射关系如下：  - 待提交   * WAIT_FILE_UPLOAD: 待上传文件  - 系统审核中   * AUTO_VERIFYING: 自动审核中   * MANUAL_VERIFYING: 人工审核中  - 系统审核未通过   * AUTO_VERIFY_FAILED: 自动审核失败   * MANUAL_VERIFY_FAILED: 人工审核失败  - 算法训练中   > 算法训练中的状态仅管理员需要处理，普通用户仅需要显示“算法训练中”即可。   * MANUAL_VERIFY_SUCCESS: 审核通过，等待预处理资源   * WAIT_TRAINING_DATA_PREPROCESS: 等待训练数据预处理   * TRAINING_DATA_PREPROCESSING: 训练数据预处理中   * TRAINING_DATA_PREPROCESS_FAILED: 训练数据预处理失败   * TRAINING_DATA_PREPROCESS_SUCCESS: 训练数据预处理完成，等待训练资源中   * TRAINING: 训练中   * TRAIN_FAILED: 训练失败   * TRAIN_SUCCESS: 训练完成，等待预处理资源   * INFERENCE_DATA_PREPROCESSING: 推理数据预处理中   * INFERENCE_DATA_PREPROCESS_FAILED: 推理数据预处理失败   * WAIT_MAIN_FILE_UPLOAD: 等待主文件上传   * MANUAL_STOP_INFERENCE_DATA_PREPROCESS: 人工中止推理预处理   * MANUAL_STOP_TRAIN: 人工中止训练   * MANUAL_STOP_TRAINING_DATA_PREPROCESS: 人工中止训练预处理   * WAIT_ADMIN_CONFIRM: 等待管理员审核   * WAIT_COMPILE: 等待转编译   * COMPILING: 转编译中   * COMPILE_FAILED: 转编译失败   * WAIT_GENERATE_ACTION: 等待原子动作生成   * WAIT_ARRANGE: 等待编排   * ACTION_GENERATE_DATA_PROCESSING: 原子动作生成中   * MANUAL_STOP_ACTION_GENERATE_DATA_PROCESSING: 人工中止动作生成   * MANUAL_STOP_ACTION_GENERATE_ORI_PROCESSING: 人工中止动作编排   * ACTION_GENERATE_ORI_PROCESSING: 动作编排中   * ACTION_GENERATE_DATA_FAILED: 动作生成失败   * ACTION_GENERATE_ORI_FAILED: 生成动作编排资产失败   * ACTION_GENERATE_ORI_SUCCESS: 动作编排成功   * GENERATE_ACTION_PREPROCESS_FAILED: 生成动作编排原子动作失败   * WAIT_ADMIN_CALIBRATION: 等待管理员确认动作信息   * WAIT_ASSET_SYNC: 等待资产同步   * WAIT_GENERATE_ACTION_MARK 等待动作标定   * ACTION_MARKING: 动作标定生成 - 待用户审核，仅NA白名单用户有该状态   * WAIT_USER_CONFIRM: 等待用户确认训练效果  - 用户驳回，仅NA白名单用户有该状态   * JOB_REJECT: 驳回任务  - 已完成   * JOB_SUCCESS: 训练任务完成（普通用户任务的完成状态，此时用户已经可以使用模型）   * JOB_FINISH: 任务结束，是最终状态，不支持修改此状态(NA用户任务的完成状态，并且此状态表明模型效果已通过用户的验收)  - 挂起，仅NA白名单用户有该状态   * JOB_PENDING: 挂起任务   * WAIT_TEST_VIDEO_CHECK: 等待进行测试视频推理任务  * TEST_VIDEO_CHECK_PROCESSING：测试视频推理质量检测中  * TEST_VIDEO_CHECK_SUCCESS：测试视频推理质量检测通过  * TEST_VIDEO_CHECK_FAILED：测试视频推理质量检测未通过  * VIDEO_ANALYZE_PROCESSING：视频检测中  * VIDEO_ANALYZE_SUCCESS：视频检测通过  * VIDEO_ANALYZE_FAILED：视频检测未通过  * ACTION_MARKING：动作标定中  * ACTION_MARK_SUCCESS：动作标定成功  * ACTION_MARK_FAILED：动作标定失败  * ACTION_MARK_UPLOADED：动作标定文件上传成功  * MANUL_STOP_ACTION_MARK：中止动作标定
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
    *  分身数字人训练任务创建者的手机号。
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
    * @param string|null $contact 分身数字人训练任务创建者的手机号。
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
    *  分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
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
    * @param string|null $modelVersion 分身数字人模型版本。默认是V3.2版本模型。 * V3.2：V3.2版本模型 * V3.3: 极速版flexus用的训练模型 > * V3和V2版本已废弃不用
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
    * Gets isLiveCopy
    *  是否是直播间复刻任务
    *
    * @return bool|null
    */
    public function getIsLiveCopy()
    {
        return $this->container['isLiveCopy'];
    }

    /**
    * Sets isLiveCopy
    *
    * @param bool|null $isLiveCopy 是否是直播间复刻任务
    *
    * @return $this
    */
    public function setIsLiveCopy($isLiveCopy)
    {
        $this->container['isLiveCopy'] = $isLiveCopy;
        return $this;
    }

    /**
    * Gets isFastFlexus
    *  是否极速版flexus
    *
    * @return bool|null
    */
    public function getIsFastFlexus()
    {
        return $this->container['isFastFlexus'];
    }

    /**
    * Sets isFastFlexus
    *
    * @param bool|null $isFastFlexus 是否极速版flexus
    *
    * @return $this
    */
    public function setIsFastFlexus($isFastFlexus)
    {
        $this->container['isFastFlexus'] = $isFastFlexus;
        return $this;
    }

    /**
    * Gets isOnlyHumanModel
    *  是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    *
    * @return bool|null
    */
    public function getIsOnlyHumanModel()
    {
        return $this->container['isOnlyHumanModel'];
    }

    /**
    * Sets isOnlyHumanModel
    *
    * @param bool|null $isOnlyHumanModel 是否只训练形象模型，不训练声音模型。仅Flexus版本时有效，默认false。
    *
    * @return $this
    */
    public function setIsOnlyHumanModel($isOnlyHumanModel)
    {
        $this->container['isOnlyHumanModel'] = $isOnlyHumanModel;
        return $this;
    }

    /**
    * Gets optionalTrainingLocation
    *  可选训练region
    *
    * @return string[]|null
    */
    public function getOptionalTrainingLocation()
    {
        return $this->container['optionalTrainingLocation'];
    }

    /**
    * Sets optionalTrainingLocation
    *
    * @param string[]|null $optionalTrainingLocation 可选训练region
    *
    * @return $this
    */
    public function setOptionalTrainingLocation($optionalTrainingLocation)
    {
        $this->container['optionalTrainingLocation'] = $optionalTrainingLocation;
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
    * Gets isOndemandResource
    *  是否按需任务
    *
    * @return bool|null
    */
    public function getIsOndemandResource()
    {
        return $this->container['isOndemandResource'];
    }

    /**
    * Sets isOndemandResource
    *
    * @param bool|null $isOndemandResource 是否按需任务
    *
    * @return $this
    */
    public function setIsOndemandResource($isOndemandResource)
    {
        $this->container['isOndemandResource'] = $isOndemandResource;
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

