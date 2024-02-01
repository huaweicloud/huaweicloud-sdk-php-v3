<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncTaskId  同步任务ID
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶
    * createTime  同步任务创建时间（Unix时间戳，毫秒）
    * lastStartTime  最近启动同步任务时间（Unix时间戳，毫秒）
    * dstBucket  目的端桶。
    * dstRegion  目的端region
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * status  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    * enableKms  是否开启KMS加密，默认不开启。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncTaskId' => 'string',
            'srcCloudType' => 'string',
            'srcRegion' => 'string',
            'srcBucket' => 'string',
            'createTime' => 'int',
            'lastStartTime' => 'int',
            'dstBucket' => 'string',
            'dstRegion' => 'string',
            'description' => 'string',
            'status' => 'string',
            'enableKms' => 'bool',
            'enableMetadataMigration' => 'bool',
            'enableRestore' => 'bool',
            'objectOverwriteMode' => 'string',
            'dstStoragePolicy' => 'string',
            'appId' => 'string',
            'sourceCdn' => '\HuaweiCloud\SDK\Oms\V2\Model\SourceCdnResp',
            'consistencyCheck' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncTaskId  同步任务ID
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶
    * createTime  同步任务创建时间（Unix时间戳，毫秒）
    * lastStartTime  最近启动同步任务时间（Unix时间戳，毫秒）
    * dstBucket  目的端桶。
    * dstRegion  目的端region
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * status  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    * enableKms  是否开启KMS加密，默认不开启。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncTaskId' => null,
        'srcCloudType' => null,
        'srcRegion' => null,
        'srcBucket' => null,
        'createTime' => 'int64',
        'lastStartTime' => 'int64',
        'dstBucket' => null,
        'dstRegion' => null,
        'description' => null,
        'status' => null,
        'enableKms' => null,
        'enableMetadataMigration' => null,
        'enableRestore' => null,
        'objectOverwriteMode' => null,
        'dstStoragePolicy' => null,
        'appId' => null,
        'sourceCdn' => null,
        'consistencyCheck' => null
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
    * syncTaskId  同步任务ID
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶
    * createTime  同步任务创建时间（Unix时间戳，毫秒）
    * lastStartTime  最近启动同步任务时间（Unix时间戳，毫秒）
    * dstBucket  目的端桶。
    * dstRegion  目的端region
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * status  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    * enableKms  是否开启KMS加密，默认不开启。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncTaskId' => 'sync_task_id',
            'srcCloudType' => 'src_cloud_type',
            'srcRegion' => 'src_region',
            'srcBucket' => 'src_bucket',
            'createTime' => 'create_time',
            'lastStartTime' => 'last_start_time',
            'dstBucket' => 'dst_bucket',
            'dstRegion' => 'dst_region',
            'description' => 'description',
            'status' => 'status',
            'enableKms' => 'enable_kms',
            'enableMetadataMigration' => 'enable_metadata_migration',
            'enableRestore' => 'enable_restore',
            'objectOverwriteMode' => 'object_overwrite_mode',
            'dstStoragePolicy' => 'dst_storage_policy',
            'appId' => 'app_id',
            'sourceCdn' => 'source_cdn',
            'consistencyCheck' => 'consistency_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncTaskId  同步任务ID
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶
    * createTime  同步任务创建时间（Unix时间戳，毫秒）
    * lastStartTime  最近启动同步任务时间（Unix时间戳，毫秒）
    * dstBucket  目的端桶。
    * dstRegion  目的端region
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * status  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    * enableKms  是否开启KMS加密，默认不开启。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $setters = [
            'syncTaskId' => 'setSyncTaskId',
            'srcCloudType' => 'setSrcCloudType',
            'srcRegion' => 'setSrcRegion',
            'srcBucket' => 'setSrcBucket',
            'createTime' => 'setCreateTime',
            'lastStartTime' => 'setLastStartTime',
            'dstBucket' => 'setDstBucket',
            'dstRegion' => 'setDstRegion',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'enableKms' => 'setEnableKms',
            'enableMetadataMigration' => 'setEnableMetadataMigration',
            'enableRestore' => 'setEnableRestore',
            'objectOverwriteMode' => 'setObjectOverwriteMode',
            'dstStoragePolicy' => 'setDstStoragePolicy',
            'appId' => 'setAppId',
            'sourceCdn' => 'setSourceCdn',
            'consistencyCheck' => 'setConsistencyCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncTaskId  同步任务ID
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶
    * createTime  同步任务创建时间（Unix时间戳，毫秒）
    * lastStartTime  最近启动同步任务时间（Unix时间戳，毫秒）
    * dstBucket  目的端桶。
    * dstRegion  目的端region
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * status  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    * enableKms  是否开启KMS加密，默认不开启。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * dstStoragePolicy  目的端存储类型设置，当且仅当目的端为华为云OBS时需要，默认为标准存储 STANDARD：华为云OBS标准存储 IA：华为云OBS低频存储 ARCHIVE：华为云OBS归档存储 DEEP_ARCHIVE：华为云OBS深度归档存储 SRC_STORAGE_MAPPING：保留源端存储类型，将源端存储类型映射为华为云OBS存储类型
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $getters = [
            'syncTaskId' => 'getSyncTaskId',
            'srcCloudType' => 'getSrcCloudType',
            'srcRegion' => 'getSrcRegion',
            'srcBucket' => 'getSrcBucket',
            'createTime' => 'getCreateTime',
            'lastStartTime' => 'getLastStartTime',
            'dstBucket' => 'getDstBucket',
            'dstRegion' => 'getDstRegion',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'enableKms' => 'getEnableKms',
            'enableMetadataMigration' => 'getEnableMetadataMigration',
            'enableRestore' => 'getEnableRestore',
            'objectOverwriteMode' => 'getObjectOverwriteMode',
            'dstStoragePolicy' => 'getDstStoragePolicy',
            'appId' => 'getAppId',
            'sourceCdn' => 'getSourceCdn',
            'consistencyCheck' => 'getConsistencyCheck'
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
    const SRC_CLOUD_TYPE_AWS = 'AWS';
    const SRC_CLOUD_TYPE_AZURE = 'Azure';
    const SRC_CLOUD_TYPE_ALIYUN = 'Aliyun';
    const SRC_CLOUD_TYPE_TENCENT = 'Tencent';
    const SRC_CLOUD_TYPE_HUAWEI_CLOUD = 'HuaweiCloud';
    const SRC_CLOUD_TYPE_QING_CLOUD = 'QingCloud';
    const SRC_CLOUD_TYPE_KINGSOFT_CLOUD = 'KingsoftCloud';
    const SRC_CLOUD_TYPE_BAIDU = 'Baidu';
    const SRC_CLOUD_TYPE_QINIU = 'Qiniu';
    const SRC_CLOUD_TYPE_U_CLOUD = 'UCloud';
    const STATUS_SYNCHRONIZING = 'SYNCHRONIZING';
    const STATUS_STOPPED = 'STOPPED';
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
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSrcCloudTypeAllowableValues()
    {
        return [
            self::SRC_CLOUD_TYPE_AWS,
            self::SRC_CLOUD_TYPE_AZURE,
            self::SRC_CLOUD_TYPE_ALIYUN,
            self::SRC_CLOUD_TYPE_TENCENT,
            self::SRC_CLOUD_TYPE_HUAWEI_CLOUD,
            self::SRC_CLOUD_TYPE_QING_CLOUD,
            self::SRC_CLOUD_TYPE_KINGSOFT_CLOUD,
            self::SRC_CLOUD_TYPE_BAIDU,
            self::SRC_CLOUD_TYPE_QINIU,
            self::SRC_CLOUD_TYPE_U_CLOUD,
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
            self::STATUS_SYNCHRONIZING,
            self::STATUS_STOPPED,
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
        $this->container['syncTaskId'] = isset($data['syncTaskId']) ? $data['syncTaskId'] : null;
        $this->container['srcCloudType'] = isset($data['srcCloudType']) ? $data['srcCloudType'] : null;
        $this->container['srcRegion'] = isset($data['srcRegion']) ? $data['srcRegion'] : null;
        $this->container['srcBucket'] = isset($data['srcBucket']) ? $data['srcBucket'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastStartTime'] = isset($data['lastStartTime']) ? $data['lastStartTime'] : null;
        $this->container['dstBucket'] = isset($data['dstBucket']) ? $data['dstBucket'] : null;
        $this->container['dstRegion'] = isset($data['dstRegion']) ? $data['dstRegion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enableKms'] = isset($data['enableKms']) ? $data['enableKms'] : null;
        $this->container['enableMetadataMigration'] = isset($data['enableMetadataMigration']) ? $data['enableMetadataMigration'] : null;
        $this->container['enableRestore'] = isset($data['enableRestore']) ? $data['enableRestore'] : null;
        $this->container['objectOverwriteMode'] = isset($data['objectOverwriteMode']) ? $data['objectOverwriteMode'] : null;
        $this->container['dstStoragePolicy'] = isset($data['dstStoragePolicy']) ? $data['dstStoragePolicy'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['sourceCdn'] = isset($data['sourceCdn']) ? $data['sourceCdn'] : null;
        $this->container['consistencyCheck'] = isset($data['consistencyCheck']) ? $data['consistencyCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['syncTaskId']) && (mb_strlen($this->container['syncTaskId']) > 255)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['syncTaskId']) && (mb_strlen($this->container['syncTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'syncTaskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['syncTaskId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['syncTaskId'])) {
                $invalidProperties[] = "invalid value for 'syncTaskId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            $allowedValues = $this->getSrcCloudTypeAllowableValues();
                if (!is_null($this->container['srcCloudType']) && !in_array($this->container['srcCloudType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'srcCloudType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['srcRegion']) && (mb_strlen($this->container['srcRegion']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcRegion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['srcRegion']) && (mb_strlen($this->container['srcRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcRegion']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcRegion'])) {
                $invalidProperties[] = "invalid value for 'srcRegion', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['srcBucket']) && (mb_strlen($this->container['srcBucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'srcBucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['srcBucket']) && (mb_strlen($this->container['srcBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcBucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcBucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcBucket'])) {
                $invalidProperties[] = "invalid value for 'srcBucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastStartTime']) && ($this->container['lastStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastStartTime']) && ($this->container['lastStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstBucket']) && (mb_strlen($this->container['dstBucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'dstBucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['dstBucket']) && (mb_strlen($this->container['dstBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstBucket', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstBucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstBucket'])) {
                $invalidProperties[] = "invalid value for 'dstBucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['dstRegion']) && (mb_strlen($this->container['dstRegion']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstRegion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dstRegion']) && (mb_strlen($this->container['dstRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstRegion']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstRegion'])) {
                $invalidProperties[] = "invalid value for 'dstRegion', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 255)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets syncTaskId
    *  同步任务ID
    *
    * @return string|null
    */
    public function getSyncTaskId()
    {
        return $this->container['syncTaskId'];
    }

    /**
    * Sets syncTaskId
    *
    * @param string|null $syncTaskId 同步任务ID
    *
    * @return $this
    */
    public function setSyncTaskId($syncTaskId)
    {
        $this->container['syncTaskId'] = $syncTaskId;
        return $this;
    }

    /**
    * Gets srcCloudType
    *  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    *
    * @return string|null
    */
    public function getSrcCloudType()
    {
        return $this->container['srcCloudType'];
    }

    /**
    * Sets srcCloudType
    *
    * @param string|null $srcCloudType 源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、UCloud。默认值为Aliyun。
    *
    * @return $this
    */
    public function setSrcCloudType($srcCloudType)
    {
        $this->container['srcCloudType'] = $srcCloudType;
        return $this;
    }

    /**
    * Gets srcRegion
    *  源端桶所处的区域
    *
    * @return string|null
    */
    public function getSrcRegion()
    {
        return $this->container['srcRegion'];
    }

    /**
    * Sets srcRegion
    *
    * @param string|null $srcRegion 源端桶所处的区域
    *
    * @return $this
    */
    public function setSrcRegion($srcRegion)
    {
        $this->container['srcRegion'] = $srcRegion;
        return $this;
    }

    /**
    * Gets srcBucket
    *  源端桶
    *
    * @return string|null
    */
    public function getSrcBucket()
    {
        return $this->container['srcBucket'];
    }

    /**
    * Sets srcBucket
    *
    * @param string|null $srcBucket 源端桶
    *
    * @return $this
    */
    public function setSrcBucket($srcBucket)
    {
        $this->container['srcBucket'] = $srcBucket;
        return $this;
    }

    /**
    * Gets createTime
    *  同步任务创建时间（Unix时间戳，毫秒）
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 同步任务创建时间（Unix时间戳，毫秒）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastStartTime
    *  最近启动同步任务时间（Unix时间戳，毫秒）
    *
    * @return int|null
    */
    public function getLastStartTime()
    {
        return $this->container['lastStartTime'];
    }

    /**
    * Sets lastStartTime
    *
    * @param int|null $lastStartTime 最近启动同步任务时间（Unix时间戳，毫秒）
    *
    * @return $this
    */
    public function setLastStartTime($lastStartTime)
    {
        $this->container['lastStartTime'] = $lastStartTime;
        return $this;
    }

    /**
    * Gets dstBucket
    *  目的端桶。
    *
    * @return string|null
    */
    public function getDstBucket()
    {
        return $this->container['dstBucket'];
    }

    /**
    * Sets dstBucket
    *
    * @param string|null $dstBucket 目的端桶。
    *
    * @return $this
    */
    public function setDstBucket($dstBucket)
    {
        $this->container['dstBucket'] = $dstBucket;
        return $this;
    }

    /**
    * Gets dstRegion
    *  目的端region
    *
    * @return string|null
    */
    public function getDstRegion()
    {
        return $this->container['dstRegion'];
    }

    /**
    * Sets dstRegion
    *
    * @param string|null $dstRegion 目的端region
    *
    * @return $this
    */
    public function setDstRegion($dstRegion)
    {
        $this->container['dstRegion'] = $dstRegion;
        return $this;
    }

    /**
    * Gets description
    *  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
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
    * @param string|null $description 任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 同步任务状态 SYNCHRONIZING：同步中 STOPPED：已停止
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enableKms
    *  是否开启KMS加密，默认不开启。
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
    * @param bool|null $enableKms 是否开启KMS加密，默认不开启。
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
    *  是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
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
    * @param bool|null $enableRestore 是否自动解冻归档数据，默认否。 开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    *
    * @return $this
    */
    public function setEnableRestore($enableRestore)
    {
        $this->container['enableRestore'] = $enableRestore;
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
    * Gets appId
    *  当源端为腾讯云时，需要填写此参数。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 当源端为腾讯云时，需要填写此参数。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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
    * Gets consistencyCheck
    *  迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
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
    * @param string|null $consistencyCheck 迁移后对象一致性校验方式，用于迁移后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移后，通过对比源端和目的端对象大小和最后修改时间，判断对象迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @return $this
    */
    public function setConsistencyCheck($consistencyCheck)
    {
        $this->container['consistencyCheck'] = $consistencyCheck;
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

