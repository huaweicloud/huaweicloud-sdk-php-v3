<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogTransferDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'log_transfer_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsPeriod  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    * obsPeriodUnit  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    * obsBucketName  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    * obsEncryptedId  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    * obsDirPreFixName  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsPrefixName  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsTimeZone  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    * obsTimeZoneId  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    * disId  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * disName  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * kafkaId  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * kafkaTopic  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * obsEpsId  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    * obsEncryptedEnable  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    * tags  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    * ltsTags  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    * streamTags  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    * structFields  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    * invalidFieldValue  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsPeriod' => 'int',
            'obsPeriodUnit' => 'string',
            'obsBucketName' => 'string',
            'obsEncryptedId' => 'string',
            'obsDirPreFixName' => 'string',
            'obsPrefixName' => 'string',
            'obsTimeZone' => 'string',
            'obsTimeZoneId' => 'string',
            'disId' => 'string',
            'disName' => 'string',
            'kafkaId' => 'string',
            'kafkaTopic' => 'string',
            'obsEpsId' => 'string',
            'obsEncryptedEnable' => 'bool',
            'tags' => 'string[]',
            'ltsTags' => 'string[]',
            'streamTags' => 'string[]',
            'structFields' => 'string[]',
            'invalidFieldValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsPeriod  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    * obsPeriodUnit  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    * obsBucketName  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    * obsEncryptedId  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    * obsDirPreFixName  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsPrefixName  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsTimeZone  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    * obsTimeZoneId  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    * disId  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * disName  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * kafkaId  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * kafkaTopic  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * obsEpsId  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    * obsEncryptedEnable  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    * tags  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    * ltsTags  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    * streamTags  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    * structFields  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    * invalidFieldValue  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsPeriod' => 'int32',
        'obsPeriodUnit' => null,
        'obsBucketName' => null,
        'obsEncryptedId' => null,
        'obsDirPreFixName' => null,
        'obsPrefixName' => null,
        'obsTimeZone' => null,
        'obsTimeZoneId' => null,
        'disId' => null,
        'disName' => null,
        'kafkaId' => null,
        'kafkaTopic' => null,
        'obsEpsId' => null,
        'obsEncryptedEnable' => null,
        'tags' => null,
        'ltsTags' => null,
        'streamTags' => null,
        'structFields' => null,
        'invalidFieldValue' => null
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
    * obsPeriod  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    * obsPeriodUnit  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    * obsBucketName  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    * obsEncryptedId  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    * obsDirPreFixName  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsPrefixName  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsTimeZone  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    * obsTimeZoneId  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    * disId  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * disName  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * kafkaId  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * kafkaTopic  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * obsEpsId  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    * obsEncryptedEnable  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    * tags  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    * ltsTags  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    * streamTags  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    * structFields  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    * invalidFieldValue  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsPeriod' => 'obs_period',
            'obsPeriodUnit' => 'obs_period_unit',
            'obsBucketName' => 'obs_bucket_name',
            'obsEncryptedId' => 'obs_encrypted_id',
            'obsDirPreFixName' => 'obs_dir_pre_fix_name',
            'obsPrefixName' => 'obs_prefix_name',
            'obsTimeZone' => 'obs_time_zone',
            'obsTimeZoneId' => 'obs_time_zone_id',
            'disId' => 'dis_id',
            'disName' => 'dis_name',
            'kafkaId' => 'kafka_id',
            'kafkaTopic' => 'kafka_topic',
            'obsEpsId' => 'obs_eps_id',
            'obsEncryptedEnable' => 'obs_encrypted_enable',
            'tags' => 'tags',
            'ltsTags' => 'lts_tags',
            'streamTags' => 'stream_tags',
            'structFields' => 'struct_fields',
            'invalidFieldValue' => 'invalid_field_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsPeriod  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    * obsPeriodUnit  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    * obsBucketName  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    * obsEncryptedId  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    * obsDirPreFixName  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsPrefixName  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsTimeZone  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    * obsTimeZoneId  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    * disId  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * disName  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * kafkaId  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * kafkaTopic  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * obsEpsId  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    * obsEncryptedEnable  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    * tags  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    * ltsTags  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    * streamTags  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    * structFields  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    * invalidFieldValue  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'obsPeriod' => 'setObsPeriod',
            'obsPeriodUnit' => 'setObsPeriodUnit',
            'obsBucketName' => 'setObsBucketName',
            'obsEncryptedId' => 'setObsEncryptedId',
            'obsDirPreFixName' => 'setObsDirPreFixName',
            'obsPrefixName' => 'setObsPrefixName',
            'obsTimeZone' => 'setObsTimeZone',
            'obsTimeZoneId' => 'setObsTimeZoneId',
            'disId' => 'setDisId',
            'disName' => 'setDisName',
            'kafkaId' => 'setKafkaId',
            'kafkaTopic' => 'setKafkaTopic',
            'obsEpsId' => 'setObsEpsId',
            'obsEncryptedEnable' => 'setObsEncryptedEnable',
            'tags' => 'setTags',
            'ltsTags' => 'setLtsTags',
            'streamTags' => 'setStreamTags',
            'structFields' => 'setStructFields',
            'invalidFieldValue' => 'setInvalidFieldValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsPeriod  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    * obsPeriodUnit  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    * obsBucketName  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    * obsEncryptedId  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    * obsDirPreFixName  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsPrefixName  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    * obsTimeZone  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    * obsTimeZoneId  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    * disId  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * disName  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    * kafkaId  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * kafkaTopic  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    * obsEpsId  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    * obsEncryptedEnable  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    * tags  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    * ltsTags  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    * streamTags  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    * structFields  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    * invalidFieldValue  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'obsPeriod' => 'getObsPeriod',
            'obsPeriodUnit' => 'getObsPeriodUnit',
            'obsBucketName' => 'getObsBucketName',
            'obsEncryptedId' => 'getObsEncryptedId',
            'obsDirPreFixName' => 'getObsDirPreFixName',
            'obsPrefixName' => 'getObsPrefixName',
            'obsTimeZone' => 'getObsTimeZone',
            'obsTimeZoneId' => 'getObsTimeZoneId',
            'disId' => 'getDisId',
            'disName' => 'getDisName',
            'kafkaId' => 'getKafkaId',
            'kafkaTopic' => 'getKafkaTopic',
            'obsEpsId' => 'getObsEpsId',
            'obsEncryptedEnable' => 'getObsEncryptedEnable',
            'tags' => 'getTags',
            'ltsTags' => 'getLtsTags',
            'streamTags' => 'getStreamTags',
            'structFields' => 'getStructFields',
            'invalidFieldValue' => 'getInvalidFieldValue'
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
        $this->container['obsPeriod'] = isset($data['obsPeriod']) ? $data['obsPeriod'] : null;
        $this->container['obsPeriodUnit'] = isset($data['obsPeriodUnit']) ? $data['obsPeriodUnit'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsEncryptedId'] = isset($data['obsEncryptedId']) ? $data['obsEncryptedId'] : null;
        $this->container['obsDirPreFixName'] = isset($data['obsDirPreFixName']) ? $data['obsDirPreFixName'] : null;
        $this->container['obsPrefixName'] = isset($data['obsPrefixName']) ? $data['obsPrefixName'] : null;
        $this->container['obsTimeZone'] = isset($data['obsTimeZone']) ? $data['obsTimeZone'] : null;
        $this->container['obsTimeZoneId'] = isset($data['obsTimeZoneId']) ? $data['obsTimeZoneId'] : null;
        $this->container['disId'] = isset($data['disId']) ? $data['disId'] : null;
        $this->container['disName'] = isset($data['disName']) ? $data['disName'] : null;
        $this->container['kafkaId'] = isset($data['kafkaId']) ? $data['kafkaId'] : null;
        $this->container['kafkaTopic'] = isset($data['kafkaTopic']) ? $data['kafkaTopic'] : null;
        $this->container['obsEpsId'] = isset($data['obsEpsId']) ? $data['obsEpsId'] : null;
        $this->container['obsEncryptedEnable'] = isset($data['obsEncryptedEnable']) ? $data['obsEncryptedEnable'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['ltsTags'] = isset($data['ltsTags']) ? $data['ltsTags'] : null;
        $this->container['streamTags'] = isset($data['streamTags']) ? $data['streamTags'] : null;
        $this->container['structFields'] = isset($data['structFields']) ? $data['structFields'] : null;
        $this->container['invalidFieldValue'] = isset($data['invalidFieldValue']) ? $data['invalidFieldValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['obsPeriod'] === null) {
            $invalidProperties[] = "'obsPeriod' can't be null";
        }
        if ($this->container['obsPeriodUnit'] === null) {
            $invalidProperties[] = "'obsPeriodUnit' can't be null";
        }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
            if (!is_null($this->container['obsDirPreFixName']) && !preg_match("/^(\/)?([a-zA-Z0-9\\._-]+)(\/[a-zA-Z0-9\\._-]+)*(\/)?$/", $this->container['obsDirPreFixName'])) {
                $invalidProperties[] = "invalid value for 'obsDirPreFixName', must be conform to the pattern /^(\/)?([a-zA-Z0-9\\._-]+)(\/[a-zA-Z0-9\\._-]+)*(\/)?$/.";
            }
            if (!is_null($this->container['obsPrefixName']) && !preg_match("/^[a-zA-Z0-9\\._-]*$/", $this->container['obsPrefixName'])) {
                $invalidProperties[] = "invalid value for 'obsPrefixName', must be conform to the pattern /^[a-zA-Z0-9\\._-]*$/.";
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
    * Gets obsPeriod
    *  **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    *
    * @return int
    */
    public function getObsPeriod()
    {
        return $this->container['obsPeriod'];
    }

    /**
    * Sets obsPeriod
    *
    * @param int $obsPeriod **参数解释：**  OBS转储时间。当创建OBS转储时，必填此参数。与obs_period_unit组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  1,2,3,5,6,12,30
    *
    * @return $this
    */
    public function setObsPeriod($obsPeriod)
    {
        $this->container['obsPeriod'] = $obsPeriod;
        return $this;
    }

    /**
    * Gets obsPeriodUnit
    *  **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    *
    * @return string
    */
    public function getObsPeriodUnit()
    {
        return $this->container['obsPeriodUnit'];
    }

    /**
    * Sets obsPeriodUnit
    *
    * @param string $obsPeriodUnit **参数解释：**  OBS转储单位。当创建OBS转储时，必填此参数。与obs_period组合，即\"obs_period\"+\"obs_period_unit\"，必须是\"2min\", \"5min\", \"30min\", \"1hour\", \"3hour\", \"6hour\",\"12hour\"。 **约束限制：**  不涉及。  **取值范围：**  min,hour
    *
    * @return $this
    */
    public function setObsPeriodUnit($obsPeriodUnit)
    {
        $this->container['obsPeriodUnit'] = $obsPeriodUnit;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName **参数解释：**  OBS转储日志桶名称。当创建OBS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsEncryptedId
    *  **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsEncryptedId()
    {
        return $this->container['obsEncryptedId'];
    }

    /**
    * Sets obsEncryptedId
    *
    * @param string|null $obsEncryptedId **参数解释：**  OBS转储KMS密钥ID。根据OBS转储日志桶是否加密判断，若OBS转储日志加密桶则必须填写该参数，若OBS转储日志桶则不需要此参数 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsEncryptedId($obsEncryptedId)
    {
        $this->container['obsEncryptedId'] = $obsEncryptedId;
        return $this;
    }

    /**
    * Gets obsDirPreFixName
    *  **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsDirPreFixName()
    {
        return $this->container['obsDirPreFixName'];
    }

    /**
    * Sets obsDirPreFixName
    *
    * @param string|null $obsDirPreFixName **参数解释：**  OBS转储自定义转储路径。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsDirPreFixName($obsDirPreFixName)
    {
        $this->container['obsDirPreFixName'] = $obsDirPreFixName;
        return $this;
    }

    /**
    * Gets obsPrefixName
    *  **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsPrefixName()
    {
        return $this->container['obsPrefixName'];
    }

    /**
    * Sets obsPrefixName
    *
    * @param string|null $obsPrefixName **参数解释：**  OBS转储日志文件前缀。当创建OBS转储时，根据需要选填此参数。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsPrefixName($obsPrefixName)
    {
        $this->container['obsPrefixName'] = $obsPrefixName;
        return $this;
    }

    /**
    * Gets obsTimeZone
    *  **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsTimeZone()
    {
        return $this->container['obsTimeZone'];
    }

    /**
    * Sets obsTimeZone
    *
    * @param string|null $obsTimeZone **参数解释：**  OBS转储时区。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone_id。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsTimeZone($obsTimeZone)
    {
        $this->container['obsTimeZone'] = $obsTimeZone;
        return $this;
    }

    /**
    * Gets obsTimeZoneId
    *  **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsTimeZoneId()
    {
        return $this->container['obsTimeZoneId'];
    }

    /**
    * Sets obsTimeZoneId
    *
    * @param string|null $obsTimeZoneId **参数解释：**  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsTimeZoneId($obsTimeZoneId)
    {
        $this->container['obsTimeZoneId'] = $obsTimeZoneId;
        return $this;
    }

    /**
    * Gets disId
    *  **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getDisId()
    {
        return $this->container['disId'];
    }

    /**
    * Sets disId
    *
    * @param string|null $disId **参数解释：**  DIS转储通道ID。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setDisId($disId)
    {
        $this->container['disId'] = $disId;
        return $this;
    }

    /**
    * Gets disName
    *  **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getDisName()
    {
        return $this->container['disName'];
    }

    /**
    * Sets disName
    *
    * @param string|null $disName **参数解释：**  DIS转储通道名称。当创建DIS转储时，必填此参数。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setDisName($disName)
    {
        $this->container['disName'] = $disName;
        return $this;
    }

    /**
    * Gets kafkaId
    *  **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getKafkaId()
    {
        return $this->container['kafkaId'];
    }

    /**
    * Sets kafkaId
    *
    * @param string|null $kafkaId **参数解释：**  DMS转储kafka ID。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setKafkaId($kafkaId)
    {
        $this->container['kafkaId'] = $kafkaId;
        return $this;
    }

    /**
    * Gets kafkaTopic
    *  **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getKafkaTopic()
    {
        return $this->container['kafkaTopic'];
    }

    /**
    * Sets kafkaTopic
    *
    * @param string|null $kafkaTopic **参数解释：**  DMS转储kafka topic。当创建DMS转储时，必填此参数。创建DMS转储前，需要使用kafka ID以及kafka Topic进行实例注册。详情见接口注册DMSkafka实例 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setKafkaTopic($kafkaTopic)
    {
        $this->container['kafkaTopic'] = $kafkaTopic;
        return $this;
    }

    /**
    * Gets obsEpsId
    *  **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getObsEpsId()
    {
        return $this->container['obsEpsId'];
    }

    /**
    * Sets obsEpsId
    *
    * @param string|null $obsEpsId **参数解释：**  OBS企业项目ID。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsEpsId($obsEpsId)
    {
        $this->container['obsEpsId'] = $obsEpsId;
        return $this;
    }

    /**
    * Gets obsEncryptedEnable
    *  **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    *
    * @return bool|null
    */
    public function getObsEncryptedEnable()
    {
        return $this->container['obsEncryptedEnable'];
    }

    /**
    * Sets obsEncryptedEnable
    *
    * @param bool|null $obsEncryptedEnable **参数解释：**  OBS是否开启加密。 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setObsEncryptedEnable($obsEncryptedEnable)
    {
        $this->container['obsEncryptedEnable'] = $obsEncryptedEnable;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
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
    * @param string[]|null $tags **参数解释：**  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime； 公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；开启转储标签：streamTag，可选填 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets ltsTags
    *  **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    *
    * @return string[]|null
    */
    public function getLtsTags()
    {
        return $this->container['ltsTags'];
    }

    /**
    * Sets ltsTags
    *
    * @param string[]|null $ltsTags **参数解释：**  dms转储JSON格式选填，可以转储tag字段 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setLtsTags($ltsTags)
    {
        $this->container['ltsTags'] = $ltsTags;
        return $this;
    }

    /**
    * Gets streamTags
    *  **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    *
    * @return string[]|null
    */
    public function getStreamTags()
    {
        return $this->container['streamTags'];
    }

    /**
    * Sets streamTags
    *
    * @param string[]|null $streamTags **参数解释：**  dms转储JSON格式选填，可以转储日志流标签字段 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setStreamTags($streamTags)
    {
        $this->container['streamTags'] = $streamTags;
        return $this;
    }

    /**
    * Gets structFields
    *  **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    *
    * @return string[]|null
    */
    public function getStructFields()
    {
        return $this->container['structFields'];
    }

    /**
    * Sets structFields
    *
    * @param string[]|null $structFields **参数解释：**  dms转储JSON格式选填，可以转储结构化字段 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setStructFields($structFields)
    {
        $this->container['structFields'] = $structFields;
        return $this;
    }

    /**
    * Gets invalidFieldValue
    *  **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @return string|null
    */
    public function getInvalidFieldValue()
    {
        return $this->container['invalidFieldValue'];
    }

    /**
    * Sets invalidFieldValue
    *
    * @param string|null $invalidFieldValue **参数解释：**  dms转储JSON格式选填，无效字段填充 **约束限制：**  不涉及
    *
    * @return $this
    */
    public function setInvalidFieldValue($invalidFieldValue)
    {
        $this->container['invalidFieldValue'] = $invalidFieldValue;
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

