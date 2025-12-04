<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthPolicy  流量控制策略，每个任务最多可设置5条限速策略。
    * completeSize  任务迁移完成大小（Byte）。
    * description  任务描述，没有设置时为空字符串。
    * dstNode  dstNode
    * enableFailedObjectRecording  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * enableKms  存储入OBS时是否使用KMS加密。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * errorReason  errorReason
    * failedNum  迁移失败对象数量。
    * failedObjectRecord  failedObjectRecord
    * groupId  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    * id  任务ID。
    * isQueryOver  迁移任务是否完成源端对象统计数据扫描。
    * leftTime  任务剩余时间（毫秒）。
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务迁移速度（Byte/s）。
    * name  任务名称。
    * progress  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    * realSize  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    * skippedNum  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    * srcNode  srcNode
    * startTime  任务启动时间（Unix时间戳，毫秒）。
    * status  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    * successfulNum  迁移成功对象数量。
    * taskType  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    * groupType  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    * totalNum  迁移任务对象总数量。
    * totalSize  任务迁移总大小（Byte）。
    * totalTime  任务总耗时（毫秒）。
    * smnInfo  smnInfo
    * sourceCdn  sourceCdn
    * successRecordErrorReason  迁移成功对象列表记录失败错误码，记录成功时为空
    * skipRecordErrorReason  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    * taskPriority  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthPolicy' => '\HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]',
            'completeSize' => 'int',
            'description' => 'string',
            'dstNode' => '\HuaweiCloud\SDK\Oms\V2\Model\DstNodeResp',
            'enableFailedObjectRecording' => 'bool',
            'enableKms' => 'bool',
            'enableMetadataMigration' => 'bool',
            'enableRestore' => 'bool',
            'errorReason' => '\HuaweiCloud\SDK\Oms\V2\Model\ErrorReasonResp',
            'failedNum' => 'int',
            'failedObjectRecord' => '\HuaweiCloud\SDK\Oms\V2\Model\FailedObjectRecordDto',
            'groupId' => 'string',
            'id' => 'int',
            'isQueryOver' => 'bool',
            'leftTime' => 'int',
            'migrateSince' => 'int',
            'migrateSpeed' => 'int',
            'name' => 'string',
            'progress' => 'double',
            'realSize' => 'int',
            'skippedNum' => 'int',
            'srcNode' => '\HuaweiCloud\SDK\Oms\V2\Model\SrcNodeResp',
            'startTime' => 'int',
            'status' => 'int',
            'successfulNum' => 'int',
            'taskType' => 'string',
            'groupType' => 'string',
            'totalNum' => 'int',
            'totalSize' => 'int',
            'totalTime' => 'int',
            'smnInfo' => '\HuaweiCloud\SDK\Oms\V2\Model\SmnInfo',
            'sourceCdn' => '\HuaweiCloud\SDK\Oms\V2\Model\SourceCdnResp',
            'successRecordErrorReason' => 'string',
            'skipRecordErrorReason' => 'string',
            'objectOverwriteMode' => 'string',
            'dstStoragePolicy' => 'string',
            'consistencyCheck' => 'string',
            'enableRequesterPays' => 'bool',
            'taskPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthPolicy  流量控制策略，每个任务最多可设置5条限速策略。
    * completeSize  任务迁移完成大小（Byte）。
    * description  任务描述，没有设置时为空字符串。
    * dstNode  dstNode
    * enableFailedObjectRecording  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * enableKms  存储入OBS时是否使用KMS加密。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * errorReason  errorReason
    * failedNum  迁移失败对象数量。
    * failedObjectRecord  failedObjectRecord
    * groupId  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    * id  任务ID。
    * isQueryOver  迁移任务是否完成源端对象统计数据扫描。
    * leftTime  任务剩余时间（毫秒）。
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务迁移速度（Byte/s）。
    * name  任务名称。
    * progress  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    * realSize  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    * skippedNum  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    * srcNode  srcNode
    * startTime  任务启动时间（Unix时间戳，毫秒）。
    * status  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    * successfulNum  迁移成功对象数量。
    * taskType  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    * groupType  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    * totalNum  迁移任务对象总数量。
    * totalSize  任务迁移总大小（Byte）。
    * totalTime  任务总耗时（毫秒）。
    * smnInfo  smnInfo
    * sourceCdn  sourceCdn
    * successRecordErrorReason  迁移成功对象列表记录失败错误码，记录成功时为空
    * skipRecordErrorReason  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    * taskPriority  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthPolicy' => null,
        'completeSize' => 'int64',
        'description' => null,
        'dstNode' => null,
        'enableFailedObjectRecording' => null,
        'enableKms' => null,
        'enableMetadataMigration' => null,
        'enableRestore' => null,
        'errorReason' => null,
        'failedNum' => 'int64',
        'failedObjectRecord' => null,
        'groupId' => null,
        'id' => 'int64',
        'isQueryOver' => null,
        'leftTime' => 'int64',
        'migrateSince' => 'int64',
        'migrateSpeed' => 'int64',
        'name' => null,
        'progress' => 'double',
        'realSize' => 'int64',
        'skippedNum' => 'int64',
        'srcNode' => null,
        'startTime' => 'int64',
        'status' => 'int32',
        'successfulNum' => 'int64',
        'taskType' => null,
        'groupType' => null,
        'totalNum' => 'int64',
        'totalSize' => 'int64',
        'totalTime' => 'int64',
        'smnInfo' => null,
        'sourceCdn' => null,
        'successRecordErrorReason' => null,
        'skipRecordErrorReason' => null,
        'objectOverwriteMode' => null,
        'dstStoragePolicy' => null,
        'consistencyCheck' => null,
        'enableRequesterPays' => null,
        'taskPriority' => null
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
    * bandwidthPolicy  流量控制策略，每个任务最多可设置5条限速策略。
    * completeSize  任务迁移完成大小（Byte）。
    * description  任务描述，没有设置时为空字符串。
    * dstNode  dstNode
    * enableFailedObjectRecording  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * enableKms  存储入OBS时是否使用KMS加密。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * errorReason  errorReason
    * failedNum  迁移失败对象数量。
    * failedObjectRecord  failedObjectRecord
    * groupId  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    * id  任务ID。
    * isQueryOver  迁移任务是否完成源端对象统计数据扫描。
    * leftTime  任务剩余时间（毫秒）。
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务迁移速度（Byte/s）。
    * name  任务名称。
    * progress  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    * realSize  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    * skippedNum  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    * srcNode  srcNode
    * startTime  任务启动时间（Unix时间戳，毫秒）。
    * status  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    * successfulNum  迁移成功对象数量。
    * taskType  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    * groupType  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    * totalNum  迁移任务对象总数量。
    * totalSize  任务迁移总大小（Byte）。
    * totalTime  任务总耗时（毫秒）。
    * smnInfo  smnInfo
    * sourceCdn  sourceCdn
    * successRecordErrorReason  迁移成功对象列表记录失败错误码，记录成功时为空
    * skipRecordErrorReason  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    * taskPriority  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthPolicy' => 'bandwidth_policy',
            'completeSize' => 'complete_size',
            'description' => 'description',
            'dstNode' => 'dst_node',
            'enableFailedObjectRecording' => 'enable_failed_object_recording',
            'enableKms' => 'enable_kms',
            'enableMetadataMigration' => 'enable_metadata_migration',
            'enableRestore' => 'enable_restore',
            'errorReason' => 'error_reason',
            'failedNum' => 'failed_num',
            'failedObjectRecord' => 'failed_object_record',
            'groupId' => 'group_id',
            'id' => 'id',
            'isQueryOver' => 'is_query_over',
            'leftTime' => 'left_time',
            'migrateSince' => 'migrate_since',
            'migrateSpeed' => 'migrate_speed',
            'name' => 'name',
            'progress' => 'progress',
            'realSize' => 'real_size',
            'skippedNum' => 'skipped_num',
            'srcNode' => 'src_node',
            'startTime' => 'start_time',
            'status' => 'status',
            'successfulNum' => 'successful_num',
            'taskType' => 'task_type',
            'groupType' => 'group_type',
            'totalNum' => 'total_num',
            'totalSize' => 'total_size',
            'totalTime' => 'total_time',
            'smnInfo' => 'smn_info',
            'sourceCdn' => 'source_cdn',
            'successRecordErrorReason' => 'success_record_error_reason',
            'skipRecordErrorReason' => 'skip_record_error_reason',
            'objectOverwriteMode' => 'object_overwrite_mode',
            'dstStoragePolicy' => 'dst_storage_policy',
            'consistencyCheck' => 'consistency_check',
            'enableRequesterPays' => 'enable_requester_pays',
            'taskPriority' => 'task_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthPolicy  流量控制策略，每个任务最多可设置5条限速策略。
    * completeSize  任务迁移完成大小（Byte）。
    * description  任务描述，没有设置时为空字符串。
    * dstNode  dstNode
    * enableFailedObjectRecording  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * enableKms  存储入OBS时是否使用KMS加密。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * errorReason  errorReason
    * failedNum  迁移失败对象数量。
    * failedObjectRecord  failedObjectRecord
    * groupId  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    * id  任务ID。
    * isQueryOver  迁移任务是否完成源端对象统计数据扫描。
    * leftTime  任务剩余时间（毫秒）。
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务迁移速度（Byte/s）。
    * name  任务名称。
    * progress  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    * realSize  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    * skippedNum  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    * srcNode  srcNode
    * startTime  任务启动时间（Unix时间戳，毫秒）。
    * status  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    * successfulNum  迁移成功对象数量。
    * taskType  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    * groupType  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    * totalNum  迁移任务对象总数量。
    * totalSize  任务迁移总大小（Byte）。
    * totalTime  任务总耗时（毫秒）。
    * smnInfo  smnInfo
    * sourceCdn  sourceCdn
    * successRecordErrorReason  迁移成功对象列表记录失败错误码，记录成功时为空
    * skipRecordErrorReason  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    * taskPriority  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthPolicy' => 'setBandwidthPolicy',
            'completeSize' => 'setCompleteSize',
            'description' => 'setDescription',
            'dstNode' => 'setDstNode',
            'enableFailedObjectRecording' => 'setEnableFailedObjectRecording',
            'enableKms' => 'setEnableKms',
            'enableMetadataMigration' => 'setEnableMetadataMigration',
            'enableRestore' => 'setEnableRestore',
            'errorReason' => 'setErrorReason',
            'failedNum' => 'setFailedNum',
            'failedObjectRecord' => 'setFailedObjectRecord',
            'groupId' => 'setGroupId',
            'id' => 'setId',
            'isQueryOver' => 'setIsQueryOver',
            'leftTime' => 'setLeftTime',
            'migrateSince' => 'setMigrateSince',
            'migrateSpeed' => 'setMigrateSpeed',
            'name' => 'setName',
            'progress' => 'setProgress',
            'realSize' => 'setRealSize',
            'skippedNum' => 'setSkippedNum',
            'srcNode' => 'setSrcNode',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'successfulNum' => 'setSuccessfulNum',
            'taskType' => 'setTaskType',
            'groupType' => 'setGroupType',
            'totalNum' => 'setTotalNum',
            'totalSize' => 'setTotalSize',
            'totalTime' => 'setTotalTime',
            'smnInfo' => 'setSmnInfo',
            'sourceCdn' => 'setSourceCdn',
            'successRecordErrorReason' => 'setSuccessRecordErrorReason',
            'skipRecordErrorReason' => 'setSkipRecordErrorReason',
            'objectOverwriteMode' => 'setObjectOverwriteMode',
            'dstStoragePolicy' => 'setDstStoragePolicy',
            'consistencyCheck' => 'setConsistencyCheck',
            'enableRequesterPays' => 'setEnableRequesterPays',
            'taskPriority' => 'setTaskPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthPolicy  流量控制策略，每个任务最多可设置5条限速策略。
    * completeSize  任务迁移完成大小（Byte）。
    * description  任务描述，没有设置时为空字符串。
    * dstNode  dstNode
    * enableFailedObjectRecording  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * enableKms  存储入OBS时是否使用KMS加密。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    * errorReason  errorReason
    * failedNum  迁移失败对象数量。
    * failedObjectRecord  failedObjectRecord
    * groupId  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    * id  任务ID。
    * isQueryOver  迁移任务是否完成源端对象统计数据扫描。
    * leftTime  任务剩余时间（毫秒）。
    * migrateSince  迁移指定时间（时间戳，毫秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认为0，表示不设置迁移指定时间。
    * migrateSpeed  任务迁移速度（Byte/s）。
    * name  任务名称。
    * progress  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    * realSize  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    * skippedNum  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    * srcNode  srcNode
    * startTime  任务启动时间（Unix时间戳，毫秒）。
    * status  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    * successfulNum  迁移成功对象数量。
    * taskType  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    * groupType  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    * totalNum  迁移任务对象总数量。
    * totalSize  任务迁移总大小（Byte）。
    * totalTime  任务总耗时（毫秒）。
    * smnInfo  smnInfo
    * sourceCdn  sourceCdn
    * successRecordErrorReason  迁移成功对象列表记录失败错误码，记录成功时为空
    * skipRecordErrorReason  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    * taskPriority  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthPolicy' => 'getBandwidthPolicy',
            'completeSize' => 'getCompleteSize',
            'description' => 'getDescription',
            'dstNode' => 'getDstNode',
            'enableFailedObjectRecording' => 'getEnableFailedObjectRecording',
            'enableKms' => 'getEnableKms',
            'enableMetadataMigration' => 'getEnableMetadataMigration',
            'enableRestore' => 'getEnableRestore',
            'errorReason' => 'getErrorReason',
            'failedNum' => 'getFailedNum',
            'failedObjectRecord' => 'getFailedObjectRecord',
            'groupId' => 'getGroupId',
            'id' => 'getId',
            'isQueryOver' => 'getIsQueryOver',
            'leftTime' => 'getLeftTime',
            'migrateSince' => 'getMigrateSince',
            'migrateSpeed' => 'getMigrateSpeed',
            'name' => 'getName',
            'progress' => 'getProgress',
            'realSize' => 'getRealSize',
            'skippedNum' => 'getSkippedNum',
            'srcNode' => 'getSrcNode',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'successfulNum' => 'getSuccessfulNum',
            'taskType' => 'getTaskType',
            'groupType' => 'getGroupType',
            'totalNum' => 'getTotalNum',
            'totalSize' => 'getTotalSize',
            'totalTime' => 'getTotalTime',
            'smnInfo' => 'getSmnInfo',
            'sourceCdn' => 'getSourceCdn',
            'successRecordErrorReason' => 'getSuccessRecordErrorReason',
            'skipRecordErrorReason' => 'getSkipRecordErrorReason',
            'objectOverwriteMode' => 'getObjectOverwriteMode',
            'dstStoragePolicy' => 'getDstStoragePolicy',
            'consistencyCheck' => 'getConsistencyCheck',
            'enableRequesterPays' => 'getEnableRequesterPays',
            'taskPriority' => 'getTaskPriority'
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
    const TASK_TYPE__LIST = 'list';
    const TASK_TYPE_OBJECT = 'object';
    const TASK_TYPE_PREFIX = 'prefix';
    const TASK_TYPE_URL_LIST = 'url_list';
    const GROUP_TYPE_NORMAL_TASK = 'NORMAL_TASK';
    const GROUP_TYPE_SYNC_TASK = 'SYNC_TASK';
    const GROUP_TYPE_GROUP_TASK = 'GROUP_TASK';
    const OBJECT_OVERWRITE_MODE_NO_OVERWRITE = 'NO_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE = 'SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_CRC64_COMPARISON_OVERWRITE = 'CRC64_COMPARISON_OVERWRITE';
    const OBJECT_OVERWRITE_MODE_FULL_OVERWRITE = 'FULL_OVERWRITE';
    const DST_STORAGE_POLICY_STANDARD = 'STANDARD';
    const DST_STORAGE_POLICY_IA = 'IA';
    const DST_STORAGE_POLICY_ARCHIVE = 'ARCHIVE';
    const DST_STORAGE_POLICY_DEEP_ARCHIVE = 'DEEP_ARCHIVE';
    const DST_STORAGE_POLICY_SRC_STORAGE_MAPPING = 'SRC_STORAGE_MAPPING';
    const CONSISTENCY_CHECK_SIZE_LAST_MODIFIED = 'size_last_modified';
    const CONSISTENCY_CHECK_CRC64 = 'crc64';
    const CONSISTENCY_CHECK_NO_CHECK = 'no_check';
    const TASK_PRIORITY_HIGH = 'HIGH';
    const TASK_PRIORITY_MEDIUM = 'MEDIUM';
    const TASK_PRIORITY_LOW = 'LOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE__LIST,
            self::TASK_TYPE_OBJECT,
            self::TASK_TYPE_PREFIX,
            self::TASK_TYPE_URL_LIST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE_NORMAL_TASK,
            self::GROUP_TYPE_SYNC_TASK,
            self::GROUP_TYPE_GROUP_TASK,
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
    public function getDstStoragePolicyAllowableValues()
    {
        return [
            self::DST_STORAGE_POLICY_STANDARD,
            self::DST_STORAGE_POLICY_IA,
            self::DST_STORAGE_POLICY_ARCHIVE,
            self::DST_STORAGE_POLICY_DEEP_ARCHIVE,
            self::DST_STORAGE_POLICY_SRC_STORAGE_MAPPING,
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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskPriorityAllowableValues()
    {
        return [
            self::TASK_PRIORITY_HIGH,
            self::TASK_PRIORITY_MEDIUM,
            self::TASK_PRIORITY_LOW,
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
        $this->container['bandwidthPolicy'] = isset($data['bandwidthPolicy']) ? $data['bandwidthPolicy'] : null;
        $this->container['completeSize'] = isset($data['completeSize']) ? $data['completeSize'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dstNode'] = isset($data['dstNode']) ? $data['dstNode'] : null;
        $this->container['enableFailedObjectRecording'] = isset($data['enableFailedObjectRecording']) ? $data['enableFailedObjectRecording'] : null;
        $this->container['enableKms'] = isset($data['enableKms']) ? $data['enableKms'] : null;
        $this->container['enableMetadataMigration'] = isset($data['enableMetadataMigration']) ? $data['enableMetadataMigration'] : null;
        $this->container['enableRestore'] = isset($data['enableRestore']) ? $data['enableRestore'] : null;
        $this->container['errorReason'] = isset($data['errorReason']) ? $data['errorReason'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['failedObjectRecord'] = isset($data['failedObjectRecord']) ? $data['failedObjectRecord'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isQueryOver'] = isset($data['isQueryOver']) ? $data['isQueryOver'] : null;
        $this->container['leftTime'] = isset($data['leftTime']) ? $data['leftTime'] : null;
        $this->container['migrateSince'] = isset($data['migrateSince']) ? $data['migrateSince'] : null;
        $this->container['migrateSpeed'] = isset($data['migrateSpeed']) ? $data['migrateSpeed'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['realSize'] = isset($data['realSize']) ? $data['realSize'] : null;
        $this->container['skippedNum'] = isset($data['skippedNum']) ? $data['skippedNum'] : null;
        $this->container['srcNode'] = isset($data['srcNode']) ? $data['srcNode'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['successfulNum'] = isset($data['successfulNum']) ? $data['successfulNum'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['smnInfo'] = isset($data['smnInfo']) ? $data['smnInfo'] : null;
        $this->container['sourceCdn'] = isset($data['sourceCdn']) ? $data['sourceCdn'] : null;
        $this->container['successRecordErrorReason'] = isset($data['successRecordErrorReason']) ? $data['successRecordErrorReason'] : null;
        $this->container['skipRecordErrorReason'] = isset($data['skipRecordErrorReason']) ? $data['skipRecordErrorReason'] : null;
        $this->container['objectOverwriteMode'] = isset($data['objectOverwriteMode']) ? $data['objectOverwriteMode'] : null;
        $this->container['dstStoragePolicy'] = isset($data['dstStoragePolicy']) ? $data['dstStoragePolicy'] : null;
        $this->container['consistencyCheck'] = isset($data['consistencyCheck']) ? $data['consistencyCheck'] : null;
        $this->container['enableRequesterPays'] = isset($data['enableRequesterPays']) ? $data['enableRequesterPays'] : null;
        $this->container['taskPriority'] = isset($data['taskPriority']) ? $data['taskPriority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['completeSize']) && ($this->container['completeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'completeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['completeSize']) && ($this->container['completeSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'completeSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 999999999999999)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 999999999999999.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['leftTime']) && ($this->container['leftTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'leftTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['leftTime']) && ($this->container['leftTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'leftTime', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 10240)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] > 1)) {
                $invalidProperties[] = "invalid value for 'progress', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['progress']) && ($this->container['progress'] < 0)) {
                $invalidProperties[] = "invalid value for 'progress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['realSize']) && ($this->container['realSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'realSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['realSize']) && ($this->container['realSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'realSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skippedNum']) && ($this->container['skippedNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'skippedNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['skippedNum']) && ($this->container['skippedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'skippedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 7)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['successfulNum']) && ($this->container['successfulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'successfulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['successfulNum']) && ($this->container['successfulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successfulNum', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getGroupTypeAllowableValues();
                if (!is_null($this->container['groupType']) && !in_array($this->container['groupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'groupType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalSize']) && ($this->container['totalSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['totalTime']) && ($this->container['totalTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successRecordErrorReason']) && (mb_strlen($this->container['successRecordErrorReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'successRecordErrorReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['successRecordErrorReason']) && (mb_strlen($this->container['successRecordErrorReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'successRecordErrorReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['skipRecordErrorReason']) && (mb_strlen($this->container['skipRecordErrorReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'skipRecordErrorReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['skipRecordErrorReason']) && (mb_strlen($this->container['skipRecordErrorReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'skipRecordErrorReason', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getObjectOverwriteModeAllowableValues();
                if (!is_null($this->container['objectOverwriteMode']) && !in_array($this->container['objectOverwriteMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectOverwriteMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDstStoragePolicyAllowableValues();
                if (!is_null($this->container['dstStoragePolicy']) && !in_array($this->container['dstStoragePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dstStoragePolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dstStoragePolicy']) && (mb_strlen($this->container['dstStoragePolicy']) > 128)) {
                $invalidProperties[] = "invalid value for 'dstStoragePolicy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dstStoragePolicy']) && (mb_strlen($this->container['dstStoragePolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstStoragePolicy', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getConsistencyCheckAllowableValues();
                if (!is_null($this->container['consistencyCheck']) && !in_array($this->container['consistencyCheck'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consistencyCheck', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskPriorityAllowableValues();
                if (!is_null($this->container['taskPriority']) && !in_array($this->container['taskPriority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskPriority', must be one of '%s'",
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
    * Gets bandwidthPolicy
    *  流量控制策略，每个任务最多可设置5条限速策略。
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
    * @param \HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]|null $bandwidthPolicy 流量控制策略，每个任务最多可设置5条限速策略。
    *
    * @return $this
    */
    public function setBandwidthPolicy($bandwidthPolicy)
    {
        $this->container['bandwidthPolicy'] = $bandwidthPolicy;
        return $this;
    }

    /**
    * Gets completeSize
    *  任务迁移完成大小（Byte）。
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
    * @param int|null $completeSize 任务迁移完成大小（Byte）。
    *
    * @return $this
    */
    public function setCompleteSize($completeSize)
    {
        $this->container['completeSize'] = $completeSize;
        return $this;
    }

    /**
    * Gets description
    *  任务描述，没有设置时为空字符串。
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
    * @param string|null $description 任务描述，没有设置时为空字符串。
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
    * @return \HuaweiCloud\SDK\Oms\V2\Model\DstNodeResp|null
    */
    public function getDstNode()
    {
        return $this->container['dstNode'];
    }

    /**
    * Sets dstNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\DstNodeResp|null $dstNode dstNode
    *
    * @return $this
    */
    public function setDstNode($dstNode)
    {
        $this->container['dstNode'] = $dstNode;
        return $this;
    }

    /**
    * Gets enableFailedObjectRecording
    *  是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
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
    * @param bool|null $enableFailedObjectRecording 是否记录失败对象。开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    *
    * @return $this
    */
    public function setEnableFailedObjectRecording($enableFailedObjectRecording)
    {
        $this->container['enableFailedObjectRecording'] = $enableFailedObjectRecording;
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
    * Gets enableRestore
    *  是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
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
    * @param bool|null $enableRestore 是否自动解冻归档数据，（由于对象存储解冻需要源端存储等待一定时间，开启自动解冻会对迁移速度有较大影响，建议先完成归档存储数据解冻后再启动迁移）。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移；关闭后，如果遇到归档类型的对象直接跳过相应对象，系统默认对象迁移失败并记录相关信息到失败对象列表中。
    *
    * @return $this
    */
    public function setEnableRestore($enableRestore)
    {
        $this->container['enableRestore'] = $enableRestore;
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
    * Gets failedNum
    *  迁移失败对象数量。
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum 迁移失败对象数量。
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
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
    * Gets groupId
    *  迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
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
    * @param string|null $groupId 迁移任务组ID，当任务由迁移任务组创建时会包含迁移任务组的id信息。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets id
    *  任务ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isQueryOver
    *  迁移任务是否完成源端对象统计数据扫描。
    *
    * @return bool|null
    */
    public function getIsQueryOver()
    {
        return $this->container['isQueryOver'];
    }

    /**
    * Sets isQueryOver
    *
    * @param bool|null $isQueryOver 迁移任务是否完成源端对象统计数据扫描。
    *
    * @return $this
    */
    public function setIsQueryOver($isQueryOver)
    {
        $this->container['isQueryOver'] = $isQueryOver;
        return $this;
    }

    /**
    * Gets leftTime
    *  任务剩余时间（毫秒）。
    *
    * @return int|null
    */
    public function getLeftTime()
    {
        return $this->container['leftTime'];
    }

    /**
    * Sets leftTime
    *
    * @param int|null $leftTime 任务剩余时间（毫秒）。
    *
    * @return $this
    */
    public function setLeftTime($leftTime)
    {
        $this->container['leftTime'] = $leftTime;
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
    *  任务迁移速度（Byte/s）。
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
    * @param int|null $migrateSpeed 任务迁移速度（Byte/s）。
    *
    * @return $this
    */
    public function setMigrateSpeed($migrateSpeed)
    {
        $this->container['migrateSpeed'] = $migrateSpeed;
        return $this;
    }

    /**
    * Gets name
    *  任务名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets progress
    *  任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    *
    * @return double|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param double|null $progress 任务进度，例如：0.522代表任务进度为52.2%，1代表任务进度为100%。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets realSize
    *  实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    *
    * @return int|null
    */
    public function getRealSize()
    {
        return $this->container['realSize'];
    }

    /**
    * Sets realSize
    *
    * @param int|null $realSize 实际迁移对象总大小（Byte），忽略对象的大小不会统计在内。
    *
    * @return $this
    */
    public function setRealSize($realSize)
    {
        $this->container['realSize'] = $realSize;
        return $this;
    }

    /**
    * Gets skippedNum
    *  迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    *
    * @return int|null
    */
    public function getSkippedNum()
    {
        return $this->container['skippedNum'];
    }

    /**
    * Sets skippedNum
    *
    * @param int|null $skippedNum 迁移忽略对象数（存在以下两种情况会自动跳过：1.源端对象最后修改时间在迁移指定时间前；2.目的端已有该对象。）
    *
    * @return $this
    */
    public function setSkippedNum($skippedNum)
    {
        $this->container['skippedNum'] = $skippedNum;
        return $this;
    }

    /**
    * Gets srcNode
    *  srcNode
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SrcNodeResp|null
    */
    public function getSrcNode()
    {
        return $this->container['srcNode'];
    }

    /**
    * Sets srcNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SrcNodeResp|null $srcNode srcNode
    *
    * @return $this
    */
    public function setSrcNode($srcNode)
    {
        $this->container['srcNode'] = $srcNode;
        return $this;
    }

    /**
    * Gets startTime
    *  任务启动时间（Unix时间戳，毫秒）。
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
    * @param int|null $startTime 任务启动时间（Unix时间戳，毫秒）。
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
    *  任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
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
    * @param int|null $status 任务状态。 1：等待调度 2：正在执行 3：停止 4：失败 5：成功 6：重试中 7：暂停中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets successfulNum
    *  迁移成功对象数量。
    *
    * @return int|null
    */
    public function getSuccessfulNum()
    {
        return $this->container['successfulNum'];
    }

    /**
    * Sets successfulNum
    *
    * @param int|null $successfulNum 迁移成功对象数量。
    *
    * @return $this
    */
    public function setSuccessfulNum($successfulNum)
    {
        $this->container['successfulNum'] = $successfulNum;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
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
    * @param string|null $taskType 任务类型，为空默认设置为object。 list：对象列表迁移 object：文件/文件夹迁移 prefix：对象前缀迁移 url_list: url对象列表
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets groupType
    *  分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 分组类型 NORMAL_TASK：一般迁移任务 SYNC_TASK：同步任务所属迁移任务 GROUP_TASK：任务组所属迁移任务
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets totalNum
    *  迁移任务对象总数量。
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
    * @param int|null $totalNum 迁移任务对象总数量。
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets totalSize
    *  任务迁移总大小（Byte）。
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
    * @param int|null $totalSize 任务迁移总大小（Byte）。
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets totalTime
    *  任务总耗时（毫秒）。
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
    * @param int|null $totalTime 任务总耗时（毫秒）。
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets smnInfo
    *  smnInfo
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SmnInfo|null
    */
    public function getSmnInfo()
    {
        return $this->container['smnInfo'];
    }

    /**
    * Sets smnInfo
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SmnInfo|null $smnInfo smnInfo
    *
    * @return $this
    */
    public function setSmnInfo($smnInfo)
    {
        $this->container['smnInfo'] = $smnInfo;
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
    * Gets successRecordErrorReason
    *  迁移成功对象列表记录失败错误码，记录成功时为空
    *
    * @return string|null
    */
    public function getSuccessRecordErrorReason()
    {
        return $this->container['successRecordErrorReason'];
    }

    /**
    * Sets successRecordErrorReason
    *
    * @param string|null $successRecordErrorReason 迁移成功对象列表记录失败错误码，记录成功时为空
    *
    * @return $this
    */
    public function setSuccessRecordErrorReason($successRecordErrorReason)
    {
        $this->container['successRecordErrorReason'] = $successRecordErrorReason;
        return $this;
    }

    /**
    * Gets skipRecordErrorReason
    *  迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    *
    * @return string|null
    */
    public function getSkipRecordErrorReason()
    {
        return $this->container['skipRecordErrorReason'];
    }

    /**
    * Sets skipRecordErrorReason
    *
    * @param string|null $skipRecordErrorReason 迁移忽略对象列表记录失败错误码,记录记录成功时为空。
    *
    * @return $this
    */
    public function setSkipRecordErrorReason($skipRecordErrorReason)
    {
        $this->container['skipRecordErrorReason'] = $skipRecordErrorReason;
        return $this;
    }

    /**
    * Gets objectOverwriteMode
    *  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
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
    * @param string|null $objectOverwriteMode 迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。  CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    *
    * @return $this
    */
    public function setObjectOverwriteMode($objectOverwriteMode)
    {
        $this->container['objectOverwriteMode'] = $objectOverwriteMode;
        return $this;
    }

    /**
    * Gets dstStoragePolicy
    *  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    *
    * @return string|null
    */
    public function getDstStoragePolicy()
    {
        return $this->container['dstStoragePolicy'];
    }

    /**
    * Sets dstStoragePolicy
    *
    * @param string|null $dstStoragePolicy 目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    *
    * @return $this
    */
    public function setDstStoragePolicy($dstStoragePolicy)
    {
        $this->container['dstStoragePolicy'] = $dstStoragePolicy;
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
    * Gets taskPriority
    *  HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @return string|null
    */
    public function getTaskPriority()
    {
        return $this->container['taskPriority'];
    }

    /**
    * Sets taskPriority
    *
    * @param string|null $taskPriority HIGH：高优先级 MEDIUM：中优先级 LOW：低优先级
    *
    * @return $this
    */
    public function setTaskPriority($taskPriority)
    {
        $this->container['taskPriority'] = $taskPriority;
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

