<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    * srcNode  srcNode
    * dstNode  dstNode
    * enableKms  是否开启KMS加密，默认不开启。
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * migrateSince  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * sourceCdn  sourceCdn
    * smnConfig  smnConfig
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * enableFailedObjectRecording  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'srcNode' => '\HuaweiCloud\SDK\Oms\V2\Model\SrcNodeReq',
            'dstNode' => '\HuaweiCloud\SDK\Oms\V2\Model\DstNodeReq',
            'enableKms' => 'bool',
            'description' => 'string',
            'migrateSince' => 'int',
            'bandwidthPolicy' => '\HuaweiCloud\SDK\Oms\V2\Model\BandwidthPolicyDto[]',
            'sourceCdn' => '\HuaweiCloud\SDK\Oms\V2\Model\SourceCdnReq',
            'smnConfig' => '\HuaweiCloud\SDK\Oms\V2\Model\SmnConfig',
            'enableMetadataMigration' => 'bool',
            'enableRestore' => 'bool',
            'enableFailedObjectRecording' => 'bool',
            'objectOverwriteMode' => 'string',
            'consistencyCheck' => 'string',
            'enableRequesterPays' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    * srcNode  srcNode
    * dstNode  dstNode
    * enableKms  是否开启KMS加密，默认不开启。
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * migrateSince  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * sourceCdn  sourceCdn
    * smnConfig  smnConfig
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * enableFailedObjectRecording  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'srcNode' => null,
        'dstNode' => null,
        'enableKms' => null,
        'description' => null,
        'migrateSince' => 'int64',
        'bandwidthPolicy' => null,
        'sourceCdn' => null,
        'smnConfig' => null,
        'enableMetadataMigration' => null,
        'enableRestore' => null,
        'enableFailedObjectRecording' => null,
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
    * taskType  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    * srcNode  srcNode
    * dstNode  dstNode
    * enableKms  是否开启KMS加密，默认不开启。
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * migrateSince  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * sourceCdn  sourceCdn
    * smnConfig  smnConfig
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * enableFailedObjectRecording  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'srcNode' => 'src_node',
            'dstNode' => 'dst_node',
            'enableKms' => 'enable_kms',
            'description' => 'description',
            'migrateSince' => 'migrate_since',
            'bandwidthPolicy' => 'bandwidth_policy',
            'sourceCdn' => 'source_cdn',
            'smnConfig' => 'smn_config',
            'enableMetadataMigration' => 'enable_metadata_migration',
            'enableRestore' => 'enable_restore',
            'enableFailedObjectRecording' => 'enable_failed_object_recording',
            'objectOverwriteMode' => 'object_overwrite_mode',
            'consistencyCheck' => 'consistency_check',
            'enableRequesterPays' => 'enable_requester_pays'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    * srcNode  srcNode
    * dstNode  dstNode
    * enableKms  是否开启KMS加密，默认不开启。
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * migrateSince  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * sourceCdn  sourceCdn
    * smnConfig  smnConfig
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * enableFailedObjectRecording  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'srcNode' => 'setSrcNode',
            'dstNode' => 'setDstNode',
            'enableKms' => 'setEnableKms',
            'description' => 'setDescription',
            'migrateSince' => 'setMigrateSince',
            'bandwidthPolicy' => 'setBandwidthPolicy',
            'sourceCdn' => 'setSourceCdn',
            'smnConfig' => 'setSmnConfig',
            'enableMetadataMigration' => 'setEnableMetadataMigration',
            'enableRestore' => 'setEnableRestore',
            'enableFailedObjectRecording' => 'setEnableFailedObjectRecording',
            'objectOverwriteMode' => 'setObjectOverwriteMode',
            'consistencyCheck' => 'setConsistencyCheck',
            'enableRequesterPays' => 'setEnableRequesterPays'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    * srcNode  srcNode
    * dstNode  dstNode
    * enableKms  是否开启KMS加密，默认不开启。
    * description  任务描述，不能超过255个字符，且不能包含^<>&\"'等特殊字符。
    * migrateSince  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    * bandwidthPolicy  配置流量控制策略。数组中一个元素对应一个时段的最大带宽，最多允许5个时段，且时段不能重叠。
    * sourceCdn  sourceCdn
    * smnConfig  smnConfig
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * enableFailedObjectRecording  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    * objectOverwriteMode  迁移前同名对象覆盖方式，用于迁移前判断源端与目的端有同名对象时，覆盖目的端或跳过迁移。默认SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE。 NO_OVERWRITE：不覆盖。迁移前源端对象与目的端对象同名时，不做对比直接跳过迁移。 SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE：大小/最后修改时间对比覆盖。默认配置。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象大小和最后修改时间，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。源端与目的端同名对象大小不相同，或目的端对象的最后修改时间晚于源端对象的最后修改时间(源端较新)，覆盖目的端。 CRC64_COMPARISON_OVERWRITE：CRC64对比覆盖。目前仅支持华为/阿里/腾讯。迁移前源端对象与目的端对象同名时，通过对比源端和目的端对象元数据中CRC64值是否相同，判断是否覆盖目的端，需满足源端/目的端对象的加密状态一致。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用SIZE_LAST_MODIFIED_COMPARISON_OVERWRITE(大小/最后修改时间对比覆盖)来对比进行覆盖判断。 FULL_OVERWRITE：全覆盖。迁移前源端对象与目的端对象同名时，不做对比覆盖目的端。
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象的最后修改时间不早于源端对象的最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 no_check：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    * enableRequesterPays  是否开启请求者付款，在启用后，请求者支付请求和数据传输费用。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'srcNode' => 'getSrcNode',
            'dstNode' => 'getDstNode',
            'enableKms' => 'getEnableKms',
            'description' => 'getDescription',
            'migrateSince' => 'getMigrateSince',
            'bandwidthPolicy' => 'getBandwidthPolicy',
            'sourceCdn' => 'getSourceCdn',
            'smnConfig' => 'getSmnConfig',
            'enableMetadataMigration' => 'getEnableMetadataMigration',
            'enableRestore' => 'getEnableRestore',
            'enableFailedObjectRecording' => 'getEnableFailedObjectRecording',
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
    const TASK_TYPE__LIST = 'list';
    const TASK_TYPE_URL_LIST = 'url_list';
    const TASK_TYPE_OBJECT = 'object';
    const TASK_TYPE_PREFIX = 'prefix';
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
            self::TASK_TYPE_OBJECT,
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : 'object';
        $this->container['srcNode'] = isset($data['srcNode']) ? $data['srcNode'] : null;
        $this->container['dstNode'] = isset($data['dstNode']) ? $data['dstNode'] : null;
        $this->container['enableKms'] = isset($data['enableKms']) ? $data['enableKms'] : false;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['migrateSince'] = isset($data['migrateSince']) ? $data['migrateSince'] : 0;
        $this->container['bandwidthPolicy'] = isset($data['bandwidthPolicy']) ? $data['bandwidthPolicy'] : null;
        $this->container['sourceCdn'] = isset($data['sourceCdn']) ? $data['sourceCdn'] : null;
        $this->container['smnConfig'] = isset($data['smnConfig']) ? $data['smnConfig'] : null;
        $this->container['enableMetadataMigration'] = isset($data['enableMetadataMigration']) ? $data['enableMetadataMigration'] : false;
        $this->container['enableRestore'] = isset($data['enableRestore']) ? $data['enableRestore'] : false;
        $this->container['enableFailedObjectRecording'] = isset($data['enableFailedObjectRecording']) ? $data['enableFailedObjectRecording'] : true;
        $this->container['objectOverwriteMode'] = isset($data['objectOverwriteMode']) ? $data['objectOverwriteMode'] : null;
        $this->container['consistencyCheck'] = isset($data['consistencyCheck']) ? $data['consistencyCheck'] : 'size_last_modified';
        $this->container['enableRequesterPays'] = isset($data['enableRequesterPays']) ? $data['enableRequesterPays'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['srcNode'] === null) {
            $invalidProperties[] = "'srcNode' can't be null";
        }
        if ($this->container['dstNode'] === null) {
            $invalidProperties[] = "'dstNode' can't be null";
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
            if (!is_null($this->container['migrateSince']) && ($this->container['migrateSince'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'migrateSince', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['migrateSince']) && ($this->container['migrateSince'] < 0)) {
                $invalidProperties[] = "invalid value for 'migrateSince', must be bigger than or equal to 0.";
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
    * Gets taskType
    *  任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
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
    * @param string|null $taskType 任务类型，默认为object。  list：对象列表迁移 url_list：URL列表迁移 object：文件/文件夹迁移，默认 prefix：对象前缀迁移
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets srcNode
    *  srcNode
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SrcNodeReq
    */
    public function getSrcNode()
    {
        return $this->container['srcNode'];
    }

    /**
    * Sets srcNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SrcNodeReq $srcNode srcNode
    *
    * @return $this
    */
    public function setSrcNode($srcNode)
    {
        $this->container['srcNode'] = $srcNode;
        return $this;
    }

    /**
    * Gets dstNode
    *  dstNode
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\DstNodeReq
    */
    public function getDstNode()
    {
        return $this->container['dstNode'];
    }

    /**
    * Sets dstNode
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\DstNodeReq $dstNode dstNode
    *
    * @return $this
    */
    public function setDstNode($dstNode)
    {
        $this->container['dstNode'] = $dstNode;
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
    * Gets migrateSince
    *  以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
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
    * @param int|null $migrateSince 以时间戳方式表示的迁移指定时间（单位：秒），表示仅迁移在指定时间之后修改的源端待迁移对象。默认不设置迁移指定时间。
    *
    * @return $this
    */
    public function setMigrateSince($migrateSince)
    {
        $this->container['migrateSince'] = $migrateSince;
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
    * Gets sourceCdn
    *  sourceCdn
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SourceCdnReq|null
    */
    public function getSourceCdn()
    {
        return $this->container['sourceCdn'];
    }

    /**
    * Sets sourceCdn
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SourceCdnReq|null $sourceCdn sourceCdn
    *
    * @return $this
    */
    public function setSourceCdn($sourceCdn)
    {
        $this->container['sourceCdn'] = $sourceCdn;
        return $this;
    }

    /**
    * Gets smnConfig
    *  smnConfig
    *
    * @return \HuaweiCloud\SDK\Oms\V2\Model\SmnConfig|null
    */
    public function getSmnConfig()
    {
        return $this->container['smnConfig'];
    }

    /**
    * Sets smnConfig
    *
    * @param \HuaweiCloud\SDK\Oms\V2\Model\SmnConfig|null $smnConfig smnConfig
    *
    * @return $this
    */
    public function setSmnConfig($smnConfig)
    {
        $this->container['smnConfig'] = $smnConfig;
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
    *  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
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
    * @param bool|null $enableRestore 是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    *
    * @return $this
    */
    public function setEnableRestore($enableRestore)
    {
        $this->container['enableRestore'] = $enableRestore;
        return $this;
    }

    /**
    * Gets enableFailedObjectRecording
    *  是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
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
    * @param bool|null $enableFailedObjectRecording 是否记录失败对象，默认开启。  开启后，如果有迁移失败对象，会在目的端存储失败对象信息。
    *
    * @return $this
    */
    public function setEnableFailedObjectRecording($enableFailedObjectRecording)
    {
        $this->container['enableFailedObjectRecording'] = $enableFailedObjectRecording;
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

