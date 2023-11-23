<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSyncTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSyncTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶名
    * srcAk  源端桶的AK（最大长度100个字符）。
    * srcSk  源端桶的SK（最大长度100个字符）。
    * dstAk  目的端桶的AK（最大长度100个字符）。
    * dstSk  目的端桶的SK（最大长度100个字符）。
    * dstRegion  目的端region
    * dstBucket  目的端桶名
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableKms  是否开启KMS加密，默认不开启。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcCloudType' => 'string',
            'srcRegion' => 'string',
            'srcBucket' => 'string',
            'srcAk' => 'string',
            'srcSk' => 'string',
            'dstAk' => 'string',
            'dstSk' => 'string',
            'dstRegion' => 'string',
            'dstBucket' => 'string',
            'description' => 'string',
            'enableMetadataMigration' => 'bool',
            'enableKms' => 'bool',
            'enableRestore' => 'bool',
            'appId' => 'string',
            'sourceCdn' => '\HuaweiCloud\SDK\Oms\V2\Model\SourceCdnReq',
            'consistencyCheck' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶名
    * srcAk  源端桶的AK（最大长度100个字符）。
    * srcSk  源端桶的SK（最大长度100个字符）。
    * dstAk  目的端桶的AK（最大长度100个字符）。
    * dstSk  目的端桶的SK（最大长度100个字符）。
    * dstRegion  目的端region
    * dstBucket  目的端桶名
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableKms  是否开启KMS加密，默认不开启。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcCloudType' => null,
        'srcRegion' => null,
        'srcBucket' => null,
        'srcAk' => null,
        'srcSk' => null,
        'dstAk' => null,
        'dstSk' => null,
        'dstRegion' => null,
        'dstBucket' => null,
        'description' => null,
        'enableMetadataMigration' => null,
        'enableKms' => null,
        'enableRestore' => null,
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
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶名
    * srcAk  源端桶的AK（最大长度100个字符）。
    * srcSk  源端桶的SK（最大长度100个字符）。
    * dstAk  目的端桶的AK（最大长度100个字符）。
    * dstSk  目的端桶的SK（最大长度100个字符）。
    * dstRegion  目的端region
    * dstBucket  目的端桶名
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableKms  是否开启KMS加密，默认不开启。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcCloudType' => 'src_cloud_type',
            'srcRegion' => 'src_region',
            'srcBucket' => 'src_bucket',
            'srcAk' => 'src_ak',
            'srcSk' => 'src_sk',
            'dstAk' => 'dst_ak',
            'dstSk' => 'dst_sk',
            'dstRegion' => 'dst_region',
            'dstBucket' => 'dst_bucket',
            'description' => 'description',
            'enableMetadataMigration' => 'enable_metadata_migration',
            'enableKms' => 'enable_kms',
            'enableRestore' => 'enable_restore',
            'appId' => 'app_id',
            'sourceCdn' => 'source_cdn',
            'consistencyCheck' => 'consistency_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶名
    * srcAk  源端桶的AK（最大长度100个字符）。
    * srcSk  源端桶的SK（最大长度100个字符）。
    * dstAk  目的端桶的AK（最大长度100个字符）。
    * dstSk  目的端桶的SK（最大长度100个字符）。
    * dstRegion  目的端region
    * dstBucket  目的端桶名
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableKms  是否开启KMS加密，默认不开启。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $setters = [
            'srcCloudType' => 'setSrcCloudType',
            'srcRegion' => 'setSrcRegion',
            'srcBucket' => 'setSrcBucket',
            'srcAk' => 'setSrcAk',
            'srcSk' => 'setSrcSk',
            'dstAk' => 'setDstAk',
            'dstSk' => 'setDstSk',
            'dstRegion' => 'setDstRegion',
            'dstBucket' => 'setDstBucket',
            'description' => 'setDescription',
            'enableMetadataMigration' => 'setEnableMetadataMigration',
            'enableKms' => 'setEnableKms',
            'enableRestore' => 'setEnableRestore',
            'appId' => 'setAppId',
            'sourceCdn' => 'setSourceCdn',
            'consistencyCheck' => 'setConsistencyCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcCloudType  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
    * srcRegion  源端桶所处的区域
    * srcBucket  源端桶名
    * srcAk  源端桶的AK（最大长度100个字符）。
    * srcSk  源端桶的SK（最大长度100个字符）。
    * dstAk  目的端桶的AK（最大长度100个字符）。
    * dstSk  目的端桶的SK（最大长度100个字符）。
    * dstRegion  目的端region
    * dstBucket  目的端桶名
    * description  任务描述，不能超过255个字符，且不能包含<>()\"'&等特殊字符。
    * enableMetadataMigration  是否启用元数据迁移，默认否。不启用时，为保证迁移任务正常运行，仍将为您迁移ContentType元数据。
    * enableKms  是否开启KMS加密，默认不开启。
    * enableRestore  是否自动解冻归档数据，默认否。  开启后，如果遇到归档类型数据，会自动解冻再进行迁移。
    * appId  当源端为腾讯云时，需要填写此参数。
    * sourceCdn  sourceCdn
    * consistencyCheck  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
    *
    * @var string[]
    */
    protected static $getters = [
            'srcCloudType' => 'getSrcCloudType',
            'srcRegion' => 'getSrcRegion',
            'srcBucket' => 'getSrcBucket',
            'srcAk' => 'getSrcAk',
            'srcSk' => 'getSrcSk',
            'dstAk' => 'getDstAk',
            'dstSk' => 'getDstSk',
            'dstRegion' => 'getDstRegion',
            'dstBucket' => 'getDstBucket',
            'description' => 'getDescription',
            'enableMetadataMigration' => 'getEnableMetadataMigration',
            'enableKms' => 'getEnableKms',
            'enableRestore' => 'getEnableRestore',
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
    const CONSISTENCY_CHECK_SIZE_LAST_MODIFIED = 'size_last_modified';
    const CONSISTENCY_CHECK_CRC64 = 'crc64';
    const CONSISTENCY_CHECK_TRANSMISSION = 'transmission';
    

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
            self::CONSISTENCY_CHECK_TRANSMISSION,
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
        $this->container['srcCloudType'] = isset($data['srcCloudType']) ? $data['srcCloudType'] : null;
        $this->container['srcRegion'] = isset($data['srcRegion']) ? $data['srcRegion'] : null;
        $this->container['srcBucket'] = isset($data['srcBucket']) ? $data['srcBucket'] : null;
        $this->container['srcAk'] = isset($data['srcAk']) ? $data['srcAk'] : null;
        $this->container['srcSk'] = isset($data['srcSk']) ? $data['srcSk'] : null;
        $this->container['dstAk'] = isset($data['dstAk']) ? $data['dstAk'] : null;
        $this->container['dstSk'] = isset($data['dstSk']) ? $data['dstSk'] : null;
        $this->container['dstRegion'] = isset($data['dstRegion']) ? $data['dstRegion'] : null;
        $this->container['dstBucket'] = isset($data['dstBucket']) ? $data['dstBucket'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableMetadataMigration'] = isset($data['enableMetadataMigration']) ? $data['enableMetadataMigration'] : null;
        $this->container['enableKms'] = isset($data['enableKms']) ? $data['enableKms'] : null;
        $this->container['enableRestore'] = isset($data['enableRestore']) ? $data['enableRestore'] : null;
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
            if (!is_null($this->container['srcCloudType']) && !preg_match("/^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|UCloud)$/", $this->container['srcCloudType'])) {
                $invalidProperties[] = "invalid value for 'srcCloudType', must be conform to the pattern /^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|UCloud)$/.";
            }
        if ($this->container['srcRegion'] === null) {
            $invalidProperties[] = "'srcRegion' can't be null";
        }
            if ((mb_strlen($this->container['srcRegion']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcRegion', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['srcRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcRegion', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcRegion'])) {
                $invalidProperties[] = "invalid value for 'srcRegion', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['srcBucket'] === null) {
            $invalidProperties[] = "'srcBucket' can't be null";
        }
            if ((mb_strlen($this->container['srcBucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'srcBucket', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['srcBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcBucket', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcBucket'])) {
                $invalidProperties[] = "invalid value for 'srcBucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['srcAk'] === null) {
            $invalidProperties[] = "'srcAk' can't be null";
        }
            if ((mb_strlen($this->container['srcAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['srcAk']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcAk'])) {
                $invalidProperties[] = "invalid value for 'srcAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['srcSk'] === null) {
            $invalidProperties[] = "'srcSk' can't be null";
        }
            if ((mb_strlen($this->container['srcSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['srcSk']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcSk'])) {
                $invalidProperties[] = "invalid value for 'srcSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstAk'] === null) {
            $invalidProperties[] = "'dstAk' can't be null";
        }
            if ((mb_strlen($this->container['dstAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstAk']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstAk'])) {
                $invalidProperties[] = "invalid value for 'dstAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstSk'] === null) {
            $invalidProperties[] = "'dstSk' can't be null";
        }
            if ((mb_strlen($this->container['dstSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstSk']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstSk'])) {
                $invalidProperties[] = "invalid value for 'dstSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstRegion'] === null) {
            $invalidProperties[] = "'dstRegion' can't be null";
        }
            if ((mb_strlen($this->container['dstRegion']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstRegion', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['dstRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstRegion', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstRegion'])) {
                $invalidProperties[] = "invalid value for 'dstRegion', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['dstBucket'] === null) {
            $invalidProperties[] = "'dstBucket' can't be null";
        }
            if ((mb_strlen($this->container['dstBucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'dstBucket', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['dstBucket']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstBucket', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstBucket'])) {
                $invalidProperties[] = "invalid value for 'dstBucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets srcCloudType
    *  源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
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
    * @param string|null $srcCloudType 源端云服务提供商。  可选值有AWS、Azure、Aliyun、Tencent、HuaweiCloud、QingCloud、KingsoftCloud、Baidu、Qiniu、Cloud。默认值为Aliyun。
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
    * @return string
    */
    public function getSrcRegion()
    {
        return $this->container['srcRegion'];
    }

    /**
    * Sets srcRegion
    *
    * @param string $srcRegion 源端桶所处的区域
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
    *  源端桶名
    *
    * @return string
    */
    public function getSrcBucket()
    {
        return $this->container['srcBucket'];
    }

    /**
    * Sets srcBucket
    *
    * @param string $srcBucket 源端桶名
    *
    * @return $this
    */
    public function setSrcBucket($srcBucket)
    {
        $this->container['srcBucket'] = $srcBucket;
        return $this;
    }

    /**
    * Gets srcAk
    *  源端桶的AK（最大长度100个字符）。
    *
    * @return string
    */
    public function getSrcAk()
    {
        return $this->container['srcAk'];
    }

    /**
    * Sets srcAk
    *
    * @param string $srcAk 源端桶的AK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setSrcAk($srcAk)
    {
        $this->container['srcAk'] = $srcAk;
        return $this;
    }

    /**
    * Gets srcSk
    *  源端桶的SK（最大长度100个字符）。
    *
    * @return string
    */
    public function getSrcSk()
    {
        return $this->container['srcSk'];
    }

    /**
    * Sets srcSk
    *
    * @param string $srcSk 源端桶的SK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setSrcSk($srcSk)
    {
        $this->container['srcSk'] = $srcSk;
        return $this;
    }

    /**
    * Gets dstAk
    *  目的端桶的AK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstAk()
    {
        return $this->container['dstAk'];
    }

    /**
    * Sets dstAk
    *
    * @param string $dstAk 目的端桶的AK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstAk($dstAk)
    {
        $this->container['dstAk'] = $dstAk;
        return $this;
    }

    /**
    * Gets dstSk
    *  目的端桶的SK（最大长度100个字符）。
    *
    * @return string
    */
    public function getDstSk()
    {
        return $this->container['dstSk'];
    }

    /**
    * Sets dstSk
    *
    * @param string $dstSk 目的端桶的SK（最大长度100个字符）。
    *
    * @return $this
    */
    public function setDstSk($dstSk)
    {
        $this->container['dstSk'] = $dstSk;
        return $this;
    }

    /**
    * Gets dstRegion
    *  目的端region
    *
    * @return string
    */
    public function getDstRegion()
    {
        return $this->container['dstRegion'];
    }

    /**
    * Sets dstRegion
    *
    * @param string $dstRegion 目的端region
    *
    * @return $this
    */
    public function setDstRegion($dstRegion)
    {
        $this->container['dstRegion'] = $dstRegion;
        return $this;
    }

    /**
    * Gets dstBucket
    *  目的端桶名
    *
    * @return string
    */
    public function getDstBucket()
    {
        return $this->container['dstBucket'];
    }

    /**
    * Sets dstBucket
    *
    * @param string $dstBucket 目的端桶名
    *
    * @return $this
    */
    public function setDstBucket($dstBucket)
    {
        $this->container['dstBucket'] = $dstBucket;
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
    * Gets consistencyCheck
    *  一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
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
    * @param string|null $consistencyCheck 一致性校验方式，用于迁移前/后校验对象是否一致，所有校验方式需满足源端/目的端对象的加密状态一致，具体校验方式和校验结果可通过对象列表查看。默认size_last_modified。 size_last_modified：默认配置。迁移前后，通过对比源端和目的端对象大小+最后修改时间，判断对象是否已存在或迁移后数据是否完整。源端与目的端同名对象大小相同，且目的端对象最后修改时间晚于源端对象最后修改时间，则代表该对象已存在/迁移成功。 crc64：目前仅支持华为/阿里/腾讯。迁移前后，通过对比源端和目的端对象元数据中CRC64值是否相同，判断对象是否已存在/迁移完成。如果源端与目的端对象元数据中不存在CRC64值，则系统会默认使用大小/最后修改时间校验方式来校验。 transmission：目前仅支持HTTP/HTTPS数据源。当源端对象无法通过标准http协议中content-length字段获取数据大小时，默认数据下载成功即迁移成功，不对数据做额外校验，且迁移时源端对象默认覆盖目的端同名对象。当源端对象能正常通过标准http协议中content-length字段获取数据大小时，则采用大小/最后修改时间校验方式来校验。
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

