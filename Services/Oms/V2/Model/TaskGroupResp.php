<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskGroupResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskGroupResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  任务组id
    * status  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    * errorReason  errorReason
    * srcNode  srcNode
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * dstNode  dstNode
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableFailedObjectRecording  是否开启记录失败对象
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * enableKms  存储入OBS时是否使用KMS加密。
    * taskType  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * smnConfig  smnConfig
    * sourceCdn  sourceCdn
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务组迁移速度（Byte/s）
    * totalTime  迁移任务组总耗时(毫秒)
    * startTime  迁移任务组的启动时间(Unix时间戳，毫秒)
    * totalTaskNum  任务组包含的迁移任务总数
    * createTaskNum  已创建的迁移任务数
    * failedTaskNum  失败的迁移任务数
    * completeTaskNum  已完成的迁移任务数
    * pausedTaskNum  暂停的迁移任务数
    * executingTaskNum  正在运行的迁移任务数
    * waitingTaskNum  等待中的迁移任务数
    * totalNum  迁移任务组包含的对象总数量
    * createCompleteNum  任务创建的对象总数量
    * successNum  成功的对象数量
    * failNum  失败的对象数量
    * skipNum  忽略的对象数量
    * totalSize  任务迁移总大小(Byte)
    * createCompleteSize  已创建迁移任务包含的对象总大小(Byte)
    * completeSize  已迁移成功的对象总大小(Byte)
    * failedObjectRecord  failedObjectRecord
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'status' => 'int',
            'errorReason' => '\HuaweiCloud\SDK\Oms\V2\Model\ErrorReasonResp',
            'srcNode' => '\HuaweiCloud\SDK\Oms\V2\Model\TaskGroupSrcNodeResp',
            'description' => 'string',
            'dstNode' => '\HuaweiCloud\SDK\Oms\V2\Model\TaskGroupDstNodeResp',
            'enableMetadataMigration' => 'bool',
            'enableFailedObjectRecording' => 'bool',
            'enableRestore' => 'bool',
            'enableKms' => 'bool',
            'taskType' => 'string',
            'bandwidthPolicy' => '\HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]',
            'smnConfig' => '\HuaweiCloud\SDK\Oms\V2\Model\SmnInfo',
            'sourceCdn' => '\HuaweiCloud\SDK\Oms\V2\Model\SourceCdnResp',
            'migrateSince' => 'int',
            'migrateSpeed' => 'int',
            'totalTime' => 'int',
            'startTime' => 'int',
            'totalTaskNum' => 'int',
            'createTaskNum' => 'int',
            'failedTaskNum' => 'int',
            'completeTaskNum' => 'int',
            'pausedTaskNum' => 'int',
            'executingTaskNum' => 'int',
            'waitingTaskNum' => 'int',
            'totalNum' => 'int',
            'createCompleteNum' => 'int',
            'successNum' => 'int',
            'failNum' => 'int',
            'skipNum' => 'int',
            'totalSize' => 'int',
            'createCompleteSize' => 'int',
            'completeSize' => 'int',
            'failedObjectRecord' => '\HuaweiCloud\SDK\Oms\V2\Model\FailedObjectRecordDto',
            'objectOverwriteMode' => 'string',
            'consistencyCheck' => 'string',
            'enableRequesterPays' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  任务组id
    * status  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    * errorReason  errorReason
    * srcNode  srcNode
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * dstNode  dstNode
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableFailedObjectRecording  是否开启记录失败对象
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * enableKms  存储入OBS时是否使用KMS加密。
    * taskType  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * smnConfig  smnConfig
    * sourceCdn  sourceCdn
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务组迁移速度（Byte/s）
    * totalTime  迁移任务组总耗时(毫秒)
    * startTime  迁移任务组的启动时间(Unix时间戳，毫秒)
    * totalTaskNum  任务组包含的迁移任务总数
    * createTaskNum  已创建的迁移任务数
    * failedTaskNum  失败的迁移任务数
    * completeTaskNum  已完成的迁移任务数
    * pausedTaskNum  暂停的迁移任务数
    * executingTaskNum  正在运行的迁移任务数
    * waitingTaskNum  等待中的迁移任务数
    * totalNum  迁移任务组包含的对象总数量
    * createCompleteNum  任务创建的对象总数量
    * successNum  成功的对象数量
    * failNum  失败的对象数量
    * skipNum  忽略的对象数量
    * totalSize  任务迁移总大小(Byte)
    * createCompleteSize  已创建迁移任务包含的对象总大小(Byte)
    * completeSize  已迁移成功的对象总大小(Byte)
    * failedObjectRecord  failedObjectRecord
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'status' => 'int32',
        'errorReason' => null,
        'srcNode' => null,
        'description' => null,
        'dstNode' => null,
        'enableMetadataMigration' => null,
        'enableFailedObjectRecording' => null,
        'enableRestore' => null,
        'enableKms' => null,
        'taskType' => null,
        'bandwidthPolicy' => null,
        'smnConfig' => null,
        'sourceCdn' => null,
        'migrateSince' => 'int64',
        'migrateSpeed' => 'int64',
        'totalTime' => 'int64',
        'startTime' => 'int64',
        'totalTaskNum' => 'int64',
        'createTaskNum' => 'int64',
        'failedTaskNum' => 'int64',
        'completeTaskNum' => 'int64',
        'pausedTaskNum' => 'int64',
        'executingTaskNum' => 'int64',
        'waitingTaskNum' => 'int64',
        'totalNum' => 'int64',
        'createCompleteNum' => 'int64',
        'successNum' => 'int64',
        'failNum' => 'int64',
        'skipNum' => 'int64',
        'totalSize' => 'int64',
        'createCompleteSize' => 'int64',
        'completeSize' => 'int64',
        'failedObjectRecord' => null,
        'objectOverwriteMode' => null,
        'consistencyCheck' => null,
        'enableRequesterPays' => null
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
    * groupId  任务组id
    * status  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    * errorReason  errorReason
    * srcNode  srcNode
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * dstNode  dstNode
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableFailedObjectRecording  是否开启记录失败对象
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * enableKms  存储入OBS时是否使用KMS加密。
    * taskType  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * smnConfig  smnConfig
    * sourceCdn  sourceCdn
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务组迁移速度（Byte/s）
    * totalTime  迁移任务组总耗时(毫秒)
    * startTime  迁移任务组的启动时间(Unix时间戳，毫秒)
    * totalTaskNum  任务组包含的迁移任务总数
    * createTaskNum  已创建的迁移任务数
    * failedTaskNum  失败的迁移任务数
    * completeTaskNum  已完成的迁移任务数
    * pausedTaskNum  暂停的迁移任务数
    * executingTaskNum  正在运行的迁移任务数
    * waitingTaskNum  等待中的迁移任务数
    * totalNum  迁移任务组包含的对象总数量
    * createCompleteNum  任务创建的对象总数量
    * successNum  成功的对象数量
    * failNum  失败的对象数量
    * skipNum  忽略的对象数量
    * totalSize  任务迁移总大小(Byte)
    * createCompleteSize  已创建迁移任务包含的对象总大小(Byte)
    * completeSize  已迁移成功的对象总大小(Byte)
    * failedObjectRecord  failedObjectRecord
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'status' => 'status',
            'errorReason' => 'error_reason',
            'srcNode' => 'src_node',
            'description' => 'description',
            'dstNode' => 'dst_node',
            'enableMetadataMigration' => 'enable_metadata_migration',
            'enableFailedObjectRecording' => 'enable_failed_object_recording',
            'enableRestore' => 'enable_restore',
            'enableKms' => 'enable_kms',
            'taskType' => 'task_type',
            'bandwidthPolicy' => 'bandwidth_policy',
            'smnConfig' => 'smn_config',
            'sourceCdn' => 'source_cdn',
            'migrateSince' => 'migrate_since',
            'migrateSpeed' => 'migrate_speed',
            'totalTime' => 'total_time',
            'startTime' => 'start_time',
            'totalTaskNum' => 'total_task_num',
            'createTaskNum' => 'create_task_num',
            'failedTaskNum' => 'failed_task_num',
            'completeTaskNum' => 'complete_task_num',
            'pausedTaskNum' => 'paused_task_num',
            'executingTaskNum' => 'executing_task_num',
            'waitingTaskNum' => 'waiting_task_num',
            'totalNum' => 'total_num',
            'createCompleteNum' => 'create_complete_num',
            'successNum' => 'success_num',
            'failNum' => 'fail_num',
            'skipNum' => 'skip_num',
            'totalSize' => 'total_size',
            'createCompleteSize' => 'create_complete_size',
            'completeSize' => 'complete_size',
            'failedObjectRecord' => 'failed_object_record',
            'objectOverwriteMode' => 'object_overwrite_mode',
            'consistencyCheck' => 'consistency_check',
            'enableRequesterPays' => 'enable_requester_pays'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  任务组id
    * status  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    * errorReason  errorReason
    * srcNode  srcNode
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * dstNode  dstNode
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableFailedObjectRecording  是否开启记录失败对象
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * enableKms  存储入OBS时是否使用KMS加密。
    * taskType  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * smnConfig  smnConfig
    * sourceCdn  sourceCdn
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务组迁移速度（Byte/s）
    * totalTime  迁移任务组总耗时(毫秒)
    * startTime  迁移任务组的启动时间(Unix时间戳，毫秒)
    * totalTaskNum  任务组包含的迁移任务总数
    * createTaskNum  已创建的迁移任务数
    * failedTaskNum  失败的迁移任务数
    * completeTaskNum  已完成的迁移任务数
    * pausedTaskNum  暂停的迁移任务数
    * executingTaskNum  正在运行的迁移任务数
    * waitingTaskNum  等待中的迁移任务数
    * totalNum  迁移任务组包含的对象总数量
    * createCompleteNum  任务创建的对象总数量
    * successNum  成功的对象数量
    * failNum  失败的对象数量
    * skipNum  忽略的对象数量
    * totalSize  任务迁移总大小(Byte)
    * createCompleteSize  已创建迁移任务包含的对象总大小(Byte)
    * completeSize  已迁移成功的对象总大小(Byte)
    * failedObjectRecord  failedObjectRecord
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'status' => 'setStatus',
            'errorReason' => 'setErrorReason',
            'srcNode' => 'setSrcNode',
            'description' => 'setDescription',
            'dstNode' => 'setDstNode',
            'enableMetadataMigration' => 'setEnableMetadataMigration',
            'enableFailedObjectRecording' => 'setEnableFailedObjectRecording',
            'enableRestore' => 'setEnableRestore',
            'enableKms' => 'setEnableKms',
            'taskType' => 'setTaskType',
            'bandwidthPolicy' => 'setBandwidthPolicy',
            'smnConfig' => 'setSmnConfig',
            'sourceCdn' => 'setSourceCdn',
            'migrateSince' => 'setMigrateSince',
            'migrateSpeed' => 'setMigrateSpeed',
            'totalTime' => 'setTotalTime',
            'startTime' => 'setStartTime',
            'totalTaskNum' => 'setTotalTaskNum',
            'createTaskNum' => 'setCreateTaskNum',
            'failedTaskNum' => 'setFailedTaskNum',
            'completeTaskNum' => 'setCompleteTaskNum',
            'pausedTaskNum' => 'setPausedTaskNum',
            'executingTaskNum' => 'setExecutingTaskNum',
            'waitingTaskNum' => 'setWaitingTaskNum',
            'totalNum' => 'setTotalNum',
            'createCompleteNum' => 'setCreateCompleteNum',
            'successNum' => 'setSuccessNum',
            'failNum' => 'setFailNum',
            'skipNum' => 'setSkipNum',
            'totalSize' => 'setTotalSize',
            'createCompleteSize' => 'setCreateCompleteSize',
            'completeSize' => 'setCompleteSize',
            'failedObjectRecord' => 'setFailedObjectRecord',
            'objectOverwriteMode' => 'setObjectOverwriteMode',
            'consistencyCheck' => 'setConsistencyCheck',
            'enableRequesterPays' => 'setEnableRequesterPays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  任务组id
    * status  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    * errorReason  errorReason
    * srcNode  srcNode
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * dstNode  dstNode
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableFailedObjectRecording  是否开启记录失败对象
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * enableKms  存储入OBS时是否使用KMS加密。
    * taskType  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * smnConfig  smnConfig
    * sourceCdn  sourceCdn
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务组迁移速度（Byte/s）
    * totalTime  迁移任务组总耗时(毫秒)
    * startTime  迁移任务组的启动时间(Unix时间戳，毫秒)
    * totalTaskNum  任务组包含的迁移任务总数
    * createTaskNum  已创建的迁移任务数
    * failedTaskNum  失败的迁移任务数
    * completeTaskNum  已完成的迁移任务数
    * pausedTaskNum  暂停的迁移任务数
    * executingTaskNum  正在运行的迁移任务数
    * waitingTaskNum  等待中的迁移任务数
    * totalNum  迁移任务组包含的对象总数量
    * createCompleteNum  任务创建的对象总数量
    * successNum  成功的对象数量
    * failNum  失败的对象数量
    * skipNum  忽略的对象数量
    * totalSize  任务迁移总大小(Byte)
    * createCompleteSize  已创建迁移任务包含的对象总大小(Byte)
    * completeSize  已迁移成功的对象总大小(Byte)
    * failedObjectRecord  failedObjectRecord
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'status' => 'getStatus',
            'errorReason' => 'getErrorReason',
            'srcNode' => 'getSrcNode',
            'description' => 'getDescription',
            'dstNode' => 'getDstNode',
            'enableMetadataMigration' => 'getEnableMetadataMigration',
            'enableFailedObjectRecording' => 'getEnableFailedObjectRecording',
            'enableRestore' => 'getEnableRestore',
            'enableKms' => 'getEnableKms',
            'taskType' => 'getTaskType',
            'bandwidthPolicy' => 'getBandwidthPolicy',
            'smnConfig' => 'getSmnConfig',
            'sourceCdn' => 'getSourceCdn',
            'migrateSince' => 'getMigrateSince',
            'migrateSpeed' => 'getMigrateSpeed',
            'totalTime' => 'getTotalTime',
            'startTime' => 'getStartTime',
            'totalTaskNum' => 'getTotalTaskNum',
            'createTaskNum' => 'getCreateTaskNum',
            'failedTaskNum' => 'getFailedTaskNum',
            'completeTaskNum' => 'getCompleteTaskNum',
            'pausedTaskNum' => 'getPausedTaskNum',
            'executingTaskNum' => 'getExecutingTaskNum',
            'waitingTaskNum' => 'getWaitingTaskNum',
            'totalNum' => 'getTotalNum',
            'createCompleteNum' => 'getCreateCompleteNum',
            'successNum' => 'getSuccessNum',
            'failNum' => 'getFailNum',
            'skipNum' => 'getSkipNum',
            'totalSize' => 'getTotalSize',
            'createCompleteSize' => 'getCreateCompleteSize',
            'completeSize' => 'getCompleteSize',
            'failedObjectRecord' => 'getFailedObjectRecord',
            'objectOverwriteMode' => 'getObjectOverwriteMode',
            'consistencyCheck' => 'getConsistencyCheck',
            'enableRequesterPays' => 'getEnableRequesterPays'
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
    const TASK_TYPE__LIST = 'LIST';
    const TASK_TYPE_URL_LIST = 'URL_LIST';
    const TASK_TYPE_PREFIX = 'PREFIX';
    const OBJECT_OVERWRITE_MODE_NO_OVERWRITE = 'NO_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE = 'SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_CRC64_COMPARISON_OVERWRITE = 'CRC64_COMPARISON_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_FULL_OVERWRITE = 'FULL_OVERWRITE';
    const CONSISTENCY_CHECK_SIZE_LAST_MODIFIED = 'size_last_modified';
    const CONSISTENCY_CHECK_CRC64 = 'crc64';
    const CONSISTENCY_CHECK_NO_CHECK = 'no_check';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE__LIST,
            self::TASK_TYPE_URL_LIST,
            self::TASK_TYPE_PREFIX,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectOverwriteModeAllowableValues()
    {
        return [
            self::OBJECT_OVERWRITE_MODE_NO_OVERWRITE,
            self::OBJECT_OVERWRITE_MODE_SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE,
            self::OBJECT_OVERWRITE_MODE_CRC64_COMPARISON_OVERWRITE,
            self::OBJECT_OVERWRITE_MODE_FULL_OVERWRITE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsistencyCheckAllowableValues()
    {
        return [
            self::CONSISTENCY_CHECK_SIZE_LAST_MODIFIED,
            self::CONSISTENCY_CHECK_CRC64,
            self::CONSISTENCY_CHECK_NO_CHECK,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorReason'] = isset($data['errorReason']) ? $data['errorReason'] : null;
        $this->container['srcNode'] = isset($data['srcNode']) ? $data['srcNode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dstNode'] = isset($data['dstNode']) ? $data['dstNode'] : null;
        $this->container['enableMetadataMigration'] = isset($data['enableMetadataMigration']) ? $data['enableMetadataMigration'] : null;
        $this->container['enableFailedObjectRecording'] = isset($data['enableFailedObjectRecording']) ? $data['enableFailedObjectRecording'] : null;
        $this->container['enableRestore'] = isset($data['enableRestore']) ? $data['enableRestore'] : null;
        $this->container['enableKms'] = isset($data['enableKms']) ? $data['enableKms'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['bandwidthPolicy'] = isset($data['bandwidthPolicy']) ? $data['bandwidthPolicy'] : null;
        $this->container['smnConfig'] = isset($data['smnConfig']) ? $data['smnConfig'] : null;
        $this->container['sourceCdn'] = isset($data['sourceCdn']) ? $data['sourceCdn'] : null;
        $this->container['migrateSince'] = isset($data['migrateSince']) ? $data['migrateSince'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['totalTaskNum'] = isset($data['totalTaskNum']) ? $data['totalTaskNum'] : null;
        $this->container['createTaskNum'] = isset($data['createTaskNum']) ? $data['createTaskNum'] : null;
        $this->container['failedTaskNum'] = isset($data['failedTaskNum']) ? $data['failedTaskNum'] : null;
        $this->container['completeTaskNum'] = isset($data['completeTaskNum']) ? $data['completeTaskNum'] : null;
        $this->container['pausedTaskNum'] = isset($data['pausedTaskNum']) ? $data['pausedTaskNum'] : null;
        $this->container['executingTaskNum'] = isset($data['executingTaskNum']) ? $data['executingTaskNum'] : null;
        $this->container['waitingTaskNum'] = isset($data['waitingTaskNum']) ? $data['waitingTaskNum'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['createCompleteNum'] = isset($data['createCompleteNum']) ? $data['createCompleteNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['skipNum'] = isset($data['skipNum']) ? $data['skipNum'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['createCompleteSize'] = isset($data['createCompleteSize']) ? $data['createCompleteSize'] : null;
        $this->container['completeSize'] = isset($data['completeSize']) ? $data['completeSize'] : null;
        $this->container['failedObjectRecord'] = isset($data['failedObjectRecord']) ? $data['failedObjectRecord'] : null;
        $this->container['objectOverwriteMode'] = isset($data['objectOverwriteMode']) ? $data['objectOverwriteMode'] : null;
        $this->container['consistencyCheck'] = isset($data['consistencyCheck']) ? $data['consistencyCheck'] : null;
        $this->container['enableRequesterPays'] = isset($data['enableRequesterPays']) ? $data['enableRequesterPays'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 100)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 9)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['migrateSince']) && ($this->container['migrateSince'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'migrateSince', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['migrateSince']) && ($this->container['migrateSince'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrateSince', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['migrateSpeed']) && ($this->container['migrateSpeed'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrateSpeed', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTaskNum']) && ($this->container['totalTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalTaskNum']) && ($this->container['totalTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTaskNum']) && ($this->container['createTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTaskNum']) && ($this->container['createTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedTaskNum']) && ($this->container['failedTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'failedTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['failedTaskNum']) && ($this->container['failedTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['completeTaskNum']) && ($this->container['completeTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'completeTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['completeTaskNum']) && ($this->container['completeTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'completeTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pausedTaskNum']) && ($this->container['pausedTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'pausedTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['pausedTaskNum']) && ($this->container['pausedTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'pausedTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executingTaskNum']) && ($this->container['executingTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'executingTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['executingTaskNum']) && ($this->container['executingTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'executingTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['waitingTaskNum']) && ($this->container['waitingTaskNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'waitingTaskNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['waitingTaskNum']) && ($this->container['waitingTaskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'waitingTaskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createCompleteNum']) && ($this->container['createCompleteNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createCompleteNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createCompleteNum']) && ($this->container['createCompleteNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'createCompleteNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'successNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failNum']) && ($this->container['failNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'failNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['failNum']) && ($this->container['failNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skipNum']) && ($this->container['skipNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'skipNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['skipNum']) && ($this->container['skipNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'skipNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createCompleteSize']) && ($this->container['createCompleteSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createCompleteSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createCompleteSize']) && ($this->container['createCompleteSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'createCompleteSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['completeSize']) && ($this->container['completeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'completeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['completeSize']) && ($this->container['completeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'completeSize', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getObjectOverwriteModeAllowableValues();
                if (!is_null($this->container['objectOverwriteMode']) && !in_array($this->container['objectOverwriteMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectOverwriteMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConsistencyCheckAllowableValues();
                if (!is_null($this->container['consistencyCheck']) && !in_array($this->container['consistencyCheck'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consistencyCheck', must be one of '%s'",
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
    * Gets groupId
    *  任务组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 任务组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets status
    *  迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 迁移组任务状态。 0 – 等待中 1 – 执行中/创建中 2 – 监控任务执行 3 – 暂停 4 – 创建任务失败 5 – 迁移失败 6 – 迁移完成 7 – 暂停中 8 – 等待删除中 9 – 删除
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorReason
    *  errorReason
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\ErrorReasonResp|null
    */
    public function getErrorReason()
    {
        return $this->container['errorReason'];
    }

    /**
    * Sets errorReason
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\ErrorReasonResp|null $errorReason errorReason
    *
    * @return $this
    */
    public function setErrorReason($errorReason)
    {
        $this->container['errorReason'] = $errorReason;
        return $this;
    }

    /**
    * Gets srcNode
    *  srcNode
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\TaskGroupSrcNodeResp|null
    */
    public function getSrcNode()
    {
        return $this->container['srcNode'];
    }

    /**
    * Sets srcNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\TaskGroupSrcNodeResp|null $srcNode srcNode
    *
    * @return $this
    */
    public function setSrcNode($srcNode)
    {
        $this->container['srcNode'] = $srcNode;
        return $this;
    }

    /**
    * Gets description
    *  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
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
    * @param string|null $description 任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dstNode
    *  dstNode
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\TaskGroupDstNodeResp|null
    */
    public function getDstNode()
    {
        return $this->container['dstNode'];
    }

    /**
    * Sets dstNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\TaskGroupDstNodeResp|null $dstNode dstNode
    *
    * @return $this
    */
    public function setDstNode($dstNode)
    {
        $this->container['dstNode'] = $dstNode;
        return $this;
    }

    /**
    * Gets enableMetadataMigration
    *  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    *
    * @return bool|null
    */
    public function getEnableMetadataMigration()
    {
        return $this->container['enableMetadataMigration'];
    }

    /**
    * Sets enableMetadataMigration
    *
    * @param bool|null $enableMetadataMigration 是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    *
    * @return $this
    */
    public function setEnableMetadataMigration($enableMetadataMigration)
    {
        $this->container['enableMetadataMigration'] = $enableMetadataMigration;
        return $this;
    }

    /**
    * Gets enableFailedObjectRecording
    *  是否开启记录失败对象
    *
    * @return bool|null
    */
    public function getEnableFailedObjectRecording()
    {
        return $this->container['enableFailedObjectRecording'];
    }

    /**
    * Sets enableFailedObjectRecording
    *
    * @param bool|null $enableFailedObjectRecording 是否开启记录失败对象
    *
    * @return $this
    */
    public function setEnableFailedObjectRecording($enableFailedObjectRecording)
    {
        $this->container['enableFailedObjectRecording'] = $enableFailedObjectRecording;
        return $this;
    }

    /**
    * Gets enableRestore
    *  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    *
    * @return bool|null
    */
    public function getEnableRestore()
    {
        return $this->container['enableRestore'];
    }

    /**
    * Sets enableRestore
    *
    * @param bool|null $enableRestore 是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    *
    * @return $this
    */
    public function setEnableRestore($enableRestore)
    {
        $this->container['enableRestore'] = $enableRestore;
        return $this;
    }

    /**
    * Gets enableKms
    *  存储入OBS时是否使用KMS加密。
    *
    * @return bool|null
    */
    public function getEnableKms()
    {
        return $this->container['enableKms'];
    }

    /**
    * Sets enableKms
    *
    * @param bool|null $enableKms 存储入OBS时是否使用KMS加密。
    *
    * @return $this
    */
    public function setEnableKms($enableKms)
    {
        $this->container['enableKms'] = $enableKms;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型，默认为PREFIX。 LIST：对象列表迁移 URL_LIST：URL列表迁移， PREFIX：对象前缀迁移
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets bandwidthPolicy
    *  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]|null
    */
    public function getBandwidthPolicy()
    {
        return $this->container['bandwidthPolicy'];
    }

    /**
    * Sets bandwidthPolicy
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]|null $bandwidthPolicy 配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    *
    * @return $this
    */
    public function setBandwidthPolicy($bandwidthPolicy)
    {
        $this->container['bandwidthPolicy'] = $bandwidthPolicy;
        return $this;
    }

    /**
    * Gets smnConfig
    *  smnConfig
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SmnInfo|null
    */
    public function getSmnConfig()
    {
        return $this->container['smnConfig'];
    }

    /**
    * Sets smnConfig
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SmnInfo|null $smnConfig smnConfig
    *
    * @return $this
    */
    public function setSmnConfig($smnConfig)
    {
        $this->container['smnConfig'] = $smnConfig;
        return $this;
    }

    /**
    * Gets sourceCdn
    *  sourceCdn
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SourceCdnResp|null
    */
    public function getSourceCdn()
    {
        return $this->container['sourceCdn'];
    }

    /**
    * Sets sourceCdn
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SourceCdnResp|null $sourceCdn sourceCdn
    *
    * @return $this
    */
    public function setSourceCdn($sourceCdn)
    {
        $this->container['sourceCdn'] = $sourceCdn;
        return $this;
    }

    /**
    * Gets migrateSince
    *  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    *
    * @return int|null
    */
    public function getMigrateSince()
    {
        return $this->container['migrateSince'];
    }

    /**
    * Sets migrateSince
    *
    * @param int|null $migrateSince 迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    *
    * @return $this
    */
    public function setMigrateSince($migrateSince)
    {
        $this->container['migrateSince'] = $migrateSince;
        return $this;
    }

    /**
    * Gets migrateSpeed
    *  任务组迁移速度（Byte/s）
    *
    * @return int|null
    */
    public function getMigrateSpeed()
    {
        return $this->container['migrateSpeed'];
    }

    /**
    * Sets migrateSpeed
    *
    * @param int|null $migrateSpeed 任务组迁移速度（Byte/s）
    *
    * @return $this
    */
    public function setMigrateSpeed($migrateSpeed)
    {
        $this->container['migrateSpeed'] = $migrateSpeed;
        return $this;
    }

    /**
    * Gets totalTime
    *  迁移任务组总耗时(毫秒)
    *
    * @return int|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param int|null $totalTime 迁移任务组总耗时(毫秒)
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets startTime
    *  迁移任务组的启动时间(Unix时间戳，毫秒)
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 迁移任务组的启动时间(Unix时间戳，毫秒)
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets totalTaskNum
    *  任务组包含的迁移任务总数
    *
    * @return int|null
    */
    public function getTotalTaskNum()
    {
        return $this->container['totalTaskNum'];
    }

    /**
    * Sets totalTaskNum
    *
    * @param int|null $totalTaskNum 任务组包含的迁移任务总数
    *
    * @return $this
    */
    public function setTotalTaskNum($totalTaskNum)
    {
        $this->container['totalTaskNum'] = $totalTaskNum;
        return $this;
    }

    /**
    * Gets createTaskNum
    *  已创建的迁移任务数
    *
    * @return int|null
    */
    public function getCreateTaskNum()
    {
        return $this->container['createTaskNum'];
    }

    /**
    * Sets createTaskNum
    *
    * @param int|null $createTaskNum 已创建的迁移任务数
    *
    * @return $this
    */
    public function setCreateTaskNum($createTaskNum)
    {
        $this->container['createTaskNum'] = $createTaskNum;
        return $this;
    }

    /**
    * Gets failedTaskNum
    *  失败的迁移任务数
    *
    * @return int|null
    */
    public function getFailedTaskNum()
    {
        return $this->container['failedTaskNum'];
    }

    /**
    * Sets failedTaskNum
    *
    * @param int|null $failedTaskNum 失败的迁移任务数
    *
    * @return $this
    */
    public function setFailedTaskNum($failedTaskNum)
    {
        $this->container['failedTaskNum'] = $failedTaskNum;
        return $this;
    }

    /**
    * Gets completeTaskNum
    *  已完成的迁移任务数
    *
    * @return int|null
    */
    public function getCompleteTaskNum()
    {
        return $this->container['completeTaskNum'];
    }

    /**
    * Sets completeTaskNum
    *
    * @param int|null $completeTaskNum 已完成的迁移任务数
    *
    * @return $this
    */
    public function setCompleteTaskNum($completeTaskNum)
    {
        $this->container['completeTaskNum'] = $completeTaskNum;
        return $this;
    }

    /**
    * Gets pausedTaskNum
    *  暂停的迁移任务数
    *
    * @return int|null
    */
    public function getPausedTaskNum()
    {
        return $this->container['pausedTaskNum'];
    }

    /**
    * Sets pausedTaskNum
    *
    * @param int|null $pausedTaskNum 暂停的迁移任务数
    *
    * @return $this
    */
    public function setPausedTaskNum($pausedTaskNum)
    {
        $this->container['pausedTaskNum'] = $pausedTaskNum;
        return $this;
    }

    /**
    * Gets executingTaskNum
    *  正在运行的迁移任务数
    *
    * @return int|null
    */
    public function getExecutingTaskNum()
    {
        return $this->container['executingTaskNum'];
    }

    /**
    * Sets executingTaskNum
    *
    * @param int|null $executingTaskNum 正在运行的迁移任务数
    *
    * @return $this
    */
    public function setExecutingTaskNum($executingTaskNum)
    {
        $this->container['executingTaskNum'] = $executingTaskNum;
        return $this;
    }

    /**
    * Gets waitingTaskNum
    *  等待中的迁移任务数
    *
    * @return int|null
    */
    public function getWaitingTaskNum()
    {
        return $this->container['waitingTaskNum'];
    }

    /**
    * Sets waitingTaskNum
    *
    * @param int|null $waitingTaskNum 等待中的迁移任务数
    *
    * @return $this
    */
    public function setWaitingTaskNum($waitingTaskNum)
    {
        $this->container['waitingTaskNum'] = $waitingTaskNum;
        return $this;
    }

    /**
    * Gets totalNum
    *  迁移任务组包含的对象总数量
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 迁移任务组包含的对象总数量
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets createCompleteNum
    *  任务创建的对象总数量
    *
    * @return int|null
    */
    public function getCreateCompleteNum()
    {
        return $this->container['createCompleteNum'];
    }

    /**
    * Sets createCompleteNum
    *
    * @param int|null $createCompleteNum 任务创建的对象总数量
    *
    * @return $this
    */
    public function setCreateCompleteNum($createCompleteNum)
    {
        $this->container['createCompleteNum'] = $createCompleteNum;
        return $this;
    }

    /**
    * Gets successNum
    *  成功的对象数量
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum 成功的对象数量
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failNum
    *  失败的对象数量
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum 失败的对象数量
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets skipNum
    *  忽略的对象数量
    *
    * @return int|null
    */
    public function getSkipNum()
    {
        return $this->container['skipNum'];
    }

    /**
    * Sets skipNum
    *
    * @param int|null $skipNum 忽略的对象数量
    *
    * @return $this
    */
    public function setSkipNum($skipNum)
    {
        $this->container['skipNum'] = $skipNum;
        return $this;
    }

    /**
    * Gets totalSize
    *  任务迁移总大小(Byte)
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 任务迁移总大小(Byte)
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets createCompleteSize
    *  已创建迁移任务包含的对象总大小(Byte)
    *
    * @return int|null
    */
    public function getCreateCompleteSize()
    {
        return $this->container['createCompleteSize'];
    }

    /**
    * Sets createCompleteSize
    *
    * @param int|null $createCompleteSize 已创建迁移任务包含的对象总大小(Byte)
    *
    * @return $this
    */
    public function setCreateCompleteSize($createCompleteSize)
    {
        $this->container['createCompleteSize'] = $createCompleteSize;
        return $this;
    }

    /**
    * Gets completeSize
    *  已迁移成功的对象总大小(Byte)
    *
    * @return int|null
    */
    public function getCompleteSize()
    {
        return $this->container['completeSize'];
    }

    /**
    * Sets completeSize
    *
    * @param int|null $completeSize 已迁移成功的对象总大小(Byte)
    *
    * @return $this
    */
    public function setCompleteSize($completeSize)
    {
        $this->container['completeSize'] = $completeSize;
        return $this;
    }

    /**
    * Gets failedObjectRecord
    *  failedObjectRecord
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\FailedObjectRecordDto|null
    */
    public function getFailedObjectRecord()
    {
        return $this->container['failedObjectRecord'];
    }

    /**
    * Sets failedObjectRecord
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\FailedObjectRecordDto|null $failedObjectRecord failedObjectRecord
    *
    * @return $this
    */
    public function setFailedObjectRecord($failedObjectRecord)
    {
        $this->container['failedObjectRecord'] = $failedObjectRecord;
        return $this;
    }

    /**
    * Gets objectOverwriteMode
    *  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    *
    * @return string|null
    */
    public function getObjectOverwriteMode()
    {
        return $this->container['objectOverwriteMode'];
    }

    /**
    * Sets objectOverwriteMode
    *
    * @param string|null $objectOverwriteMode 迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    *
    * @return $this
    */
    public function setObjectOverwriteMode($objectOverwriteMode)
    {
        $this->container['objectOverwriteMode'] = $objectOverwriteMode;
        return $this;
    }

    /**
    * Gets consistencyCheck
    *  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @return string|null
    */
    public function getConsistencyCheck()
    {
        return $this->container['consistencyCheck'];
    }

    /**
    * Sets consistencyCheck
    *
    * @param string|null $consistencyCheck 一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @return $this
    */
    public function setConsistencyCheck($consistencyCheck)
    {
        $this->container['consistencyCheck'] = $consistencyCheck;
        return $this;
    }

    /**
    * Gets enableRequesterPays
    *  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @return bool|null
    */
    public function getEnableRequesterPays()
    {
        return $this->container['enableRequesterPays'];
    }

    /**
    * Sets enableRequesterPays
    *
    * @param bool|null $enableRequesterPays 是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @return $this
    */
    public function setEnableRequesterPays($enableRequesterPays)
    {
        $this->container['enableRequesterPays'] = $enableRequesterPays;
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

