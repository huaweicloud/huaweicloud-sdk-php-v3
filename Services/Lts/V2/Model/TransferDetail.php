<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * obsPeriod  OBS转储时间
    * obsEncryptedId  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    * obsPrefixName  OBS转储日志文件前缀
    * obsPeriodUnit  OBS转储单位
    * obsTransferPath  OBS转储路径，指OBS日志桶中的路径
    * obsEpsId  OBS企业项目ID
    * obsBucketName  OBS日志桶名称
    * obsEncryptedEnable  OBS是否开启加密。
    * obsDirPreFixName  OBS转储自定义转储路径
    * disId  DIS转储通道ID
    * disName  DIS转储通道名称
    * kafkaId  DMS转储kafka ID
    * kafkaTopic  DMS转储kafka topic
    * obsTimeZone  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
    * obsTimeZoneId  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    * tags  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
    * ltsTags  dms转储JSON格式选填，可以转储tag字段
    * streamTags  dms转储JSON格式选填，可以转储日志流标签字段
    * structFields  dms转储JSON格式选填，可以转储结构化字段
    * invalidFieldValue  dms转储JSON格式选填，无效字段填充
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'obsPeriod' => 'int',
            'obsEncryptedId' => 'string',
            'obsPrefixName' => 'string',
            'obsPeriodUnit' => 'string',
            'obsTransferPath' => 'string',
            'obsEpsId' => 'string',
            'obsBucketName' => 'string',
            'obsEncryptedEnable' => 'bool',
            'obsDirPreFixName' => 'string',
            'disId' => 'string',
            'disName' => 'string',
            'kafkaId' => 'string',
            'kafkaTopic' => 'string',
            'obsTimeZone' => 'string',
            'obsTimeZoneId' => 'string',
            'tags' => 'string[]',
            'ltsTags' => 'string[]',
            'streamTags' => 'string[]',
            'structFields' => 'string[]',
            'invalidFieldValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * obsPeriod  OBS转储时间
    * obsEncryptedId  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    * obsPrefixName  OBS转储日志文件前缀
    * obsPeriodUnit  OBS转储单位
    * obsTransferPath  OBS转储路径，指OBS日志桶中的路径
    * obsEpsId  OBS企业项目ID
    * obsBucketName  OBS日志桶名称
    * obsEncryptedEnable  OBS是否开启加密。
    * obsDirPreFixName  OBS转储自定义转储路径
    * disId  DIS转储通道ID
    * disName  DIS转储通道名称
    * kafkaId  DMS转储kafka ID
    * kafkaTopic  DMS转储kafka topic
    * obsTimeZone  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
    * obsTimeZoneId  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    * tags  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
    * ltsTags  dms转储JSON格式选填，可以转储tag字段
    * streamTags  dms转储JSON格式选填，可以转储日志流标签字段
    * structFields  dms转储JSON格式选填，可以转储结构化字段
    * invalidFieldValue  dms转储JSON格式选填，无效字段填充
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'obsPeriod' => 'int32',
        'obsEncryptedId' => null,
        'obsPrefixName' => null,
        'obsPeriodUnit' => null,
        'obsTransferPath' => null,
        'obsEpsId' => null,
        'obsBucketName' => null,
        'obsEncryptedEnable' => null,
        'obsDirPreFixName' => null,
        'disId' => null,
        'disName' => null,
        'kafkaId' => null,
        'kafkaTopic' => null,
        'obsTimeZone' => null,
        'obsTimeZoneId' => null,
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
    * obsPeriod  OBS转储时间
    * obsEncryptedId  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    * obsPrefixName  OBS转储日志文件前缀
    * obsPeriodUnit  OBS转储单位
    * obsTransferPath  OBS转储路径，指OBS日志桶中的路径
    * obsEpsId  OBS企业项目ID
    * obsBucketName  OBS日志桶名称
    * obsEncryptedEnable  OBS是否开启加密。
    * obsDirPreFixName  OBS转储自定义转储路径
    * disId  DIS转储通道ID
    * disName  DIS转储通道名称
    * kafkaId  DMS转储kafka ID
    * kafkaTopic  DMS转储kafka topic
    * obsTimeZone  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
    * obsTimeZoneId  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    * tags  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
    * ltsTags  dms转储JSON格式选填，可以转储tag字段
    * streamTags  dms转储JSON格式选填，可以转储日志流标签字段
    * structFields  dms转储JSON格式选填，可以转储结构化字段
    * invalidFieldValue  dms转储JSON格式选填，无效字段填充
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'obsPeriod' => 'obs_period',
            'obsEncryptedId' => 'obs_encrypted_id',
            'obsPrefixName' => 'obs_prefix_name',
            'obsPeriodUnit' => 'obs_period_unit',
            'obsTransferPath' => 'obs_transfer_path',
            'obsEpsId' => 'obs_eps_id',
            'obsBucketName' => 'obs_bucket_name',
            'obsEncryptedEnable' => 'obs_encrypted_enable',
            'obsDirPreFixName' => 'obs_dir_pre_fix_name',
            'disId' => 'dis_id',
            'disName' => 'dis_name',
            'kafkaId' => 'kafka_id',
            'kafkaTopic' => 'kafka_topic',
            'obsTimeZone' => 'obs_time_zone',
            'obsTimeZoneId' => 'obs_time_zone_id',
            'tags' => 'tags',
            'ltsTags' => 'lts_tags',
            'streamTags' => 'stream_tags',
            'structFields' => 'struct_fields',
            'invalidFieldValue' => 'invalid_field_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * obsPeriod  OBS转储时间
    * obsEncryptedId  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    * obsPrefixName  OBS转储日志文件前缀
    * obsPeriodUnit  OBS转储单位
    * obsTransferPath  OBS转储路径，指OBS日志桶中的路径
    * obsEpsId  OBS企业项目ID
    * obsBucketName  OBS日志桶名称
    * obsEncryptedEnable  OBS是否开启加密。
    * obsDirPreFixName  OBS转储自定义转储路径
    * disId  DIS转储通道ID
    * disName  DIS转储通道名称
    * kafkaId  DMS转储kafka ID
    * kafkaTopic  DMS转储kafka topic
    * obsTimeZone  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
    * obsTimeZoneId  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    * tags  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
    * ltsTags  dms转储JSON格式选填，可以转储tag字段
    * streamTags  dms转储JSON格式选填，可以转储日志流标签字段
    * structFields  dms转储JSON格式选填，可以转储结构化字段
    * invalidFieldValue  dms转储JSON格式选填，无效字段填充
    *
    * @var string[]
    */
    protected static $setters = [
            'obsPeriod' => 'setObsPeriod',
            'obsEncryptedId' => 'setObsEncryptedId',
            'obsPrefixName' => 'setObsPrefixName',
            'obsPeriodUnit' => 'setObsPeriodUnit',
            'obsTransferPath' => 'setObsTransferPath',
            'obsEpsId' => 'setObsEpsId',
            'obsBucketName' => 'setObsBucketName',
            'obsEncryptedEnable' => 'setObsEncryptedEnable',
            'obsDirPreFixName' => 'setObsDirPreFixName',
            'disId' => 'setDisId',
            'disName' => 'setDisName',
            'kafkaId' => 'setKafkaId',
            'kafkaTopic' => 'setKafkaTopic',
            'obsTimeZone' => 'setObsTimeZone',
            'obsTimeZoneId' => 'setObsTimeZoneId',
            'tags' => 'setTags',
            'ltsTags' => 'setLtsTags',
            'streamTags' => 'setStreamTags',
            'structFields' => 'setStructFields',
            'invalidFieldValue' => 'setInvalidFieldValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * obsPeriod  OBS转储时间
    * obsEncryptedId  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    * obsPrefixName  OBS转储日志文件前缀
    * obsPeriodUnit  OBS转储单位
    * obsTransferPath  OBS转储路径，指OBS日志桶中的路径
    * obsEpsId  OBS企业项目ID
    * obsBucketName  OBS日志桶名称
    * obsEncryptedEnable  OBS是否开启加密。
    * obsDirPreFixName  OBS转储自定义转储路径
    * disId  DIS转储通道ID
    * disName  DIS转储通道名称
    * kafkaId  DMS转储kafka ID
    * kafkaTopic  DMS转储kafka topic
    * obsTimeZone  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
    * obsTimeZoneId  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    * tags  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
    * ltsTags  dms转储JSON格式选填，可以转储tag字段
    * streamTags  dms转储JSON格式选填，可以转储日志流标签字段
    * structFields  dms转储JSON格式选填，可以转储结构化字段
    * invalidFieldValue  dms转储JSON格式选填，无效字段填充
    *
    * @var string[]
    */
    protected static $getters = [
            'obsPeriod' => 'getObsPeriod',
            'obsEncryptedId' => 'getObsEncryptedId',
            'obsPrefixName' => 'getObsPrefixName',
            'obsPeriodUnit' => 'getObsPeriodUnit',
            'obsTransferPath' => 'getObsTransferPath',
            'obsEpsId' => 'getObsEpsId',
            'obsBucketName' => 'getObsBucketName',
            'obsEncryptedEnable' => 'getObsEncryptedEnable',
            'obsDirPreFixName' => 'getObsDirPreFixName',
            'disId' => 'getDisId',
            'disName' => 'getDisName',
            'kafkaId' => 'getKafkaId',
            'kafkaTopic' => 'getKafkaTopic',
            'obsTimeZone' => 'getObsTimeZone',
            'obsTimeZoneId' => 'getObsTimeZoneId',
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
    const OBS_PERIOD_1 = 1;
    const OBS_PERIOD_2 = 2;
    const OBS_PERIOD_3 = 3;
    const OBS_PERIOD_5 = 5;
    const OBS_PERIOD_6 = 6;
    const OBS_PERIOD_12 = 12;
    const OBS_PERIOD_30 = 30;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObsPeriodAllowableValues()
    {
        return [
            self::OBS_PERIOD_1,
            self::OBS_PERIOD_2,
            self::OBS_PERIOD_3,
            self::OBS_PERIOD_5,
            self::OBS_PERIOD_6,
            self::OBS_PERIOD_12,
            self::OBS_PERIOD_30,
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
        $this->container['obsPeriod'] = isset($data['obsPeriod']) ? $data['obsPeriod'] : null;
        $this->container['obsEncryptedId'] = isset($data['obsEncryptedId']) ? $data['obsEncryptedId'] : null;
        $this->container['obsPrefixName'] = isset($data['obsPrefixName']) ? $data['obsPrefixName'] : null;
        $this->container['obsPeriodUnit'] = isset($data['obsPeriodUnit']) ? $data['obsPeriodUnit'] : null;
        $this->container['obsTransferPath'] = isset($data['obsTransferPath']) ? $data['obsTransferPath'] : null;
        $this->container['obsEpsId'] = isset($data['obsEpsId']) ? $data['obsEpsId'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsEncryptedEnable'] = isset($data['obsEncryptedEnable']) ? $data['obsEncryptedEnable'] : null;
        $this->container['obsDirPreFixName'] = isset($data['obsDirPreFixName']) ? $data['obsDirPreFixName'] : null;
        $this->container['disId'] = isset($data['disId']) ? $data['disId'] : null;
        $this->container['disName'] = isset($data['disName']) ? $data['disName'] : null;
        $this->container['kafkaId'] = isset($data['kafkaId']) ? $data['kafkaId'] : null;
        $this->container['kafkaTopic'] = isset($data['kafkaTopic']) ? $data['kafkaTopic'] : null;
        $this->container['obsTimeZone'] = isset($data['obsTimeZone']) ? $data['obsTimeZone'] : null;
        $this->container['obsTimeZoneId'] = isset($data['obsTimeZoneId']) ? $data['obsTimeZoneId'] : null;
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
            $allowedValues = $this->getObsPeriodAllowableValues();
                if (!is_null($this->container['obsPeriod']) && !in_array($this->container['obsPeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'obsPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['obsEncryptedId']) && (mb_strlen($this->container['obsEncryptedId']) > 36)) {
                $invalidProperties[] = "invalid value for 'obsEncryptedId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['obsEncryptedId']) && (mb_strlen($this->container['obsEncryptedId']) < 36)) {
                $invalidProperties[] = "invalid value for 'obsEncryptedId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['obsPrefixName']) && (mb_strlen($this->container['obsPrefixName']) > 64)) {
                $invalidProperties[] = "invalid value for 'obsPrefixName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['obsPrefixName']) && (mb_strlen($this->container['obsPrefixName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsPrefixName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['obsPrefixName']) && !preg_match("/^[a-zA-Z0-9\\._-]*$/", $this->container['obsPrefixName'])) {
                $invalidProperties[] = "invalid value for 'obsPrefixName', must be conform to the pattern /^[a-zA-Z0-9\\._-]*$/.";
            }
        if ($this->container['obsPeriodUnit'] === null) {
            $invalidProperties[] = "'obsPeriodUnit' can't be null";
        }
            if (!is_null($this->container['obsTransferPath']) && (mb_strlen($this->container['obsTransferPath']) > 256)) {
                $invalidProperties[] = "invalid value for 'obsTransferPath', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['obsTransferPath']) && (mb_strlen($this->container['obsTransferPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'obsTransferPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['obsEpsId']) && (mb_strlen($this->container['obsEpsId']) > 128)) {
                $invalidProperties[] = "invalid value for 'obsEpsId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['obsEpsId']) && (mb_strlen($this->container['obsEpsId']) < 0)) {
                $invalidProperties[] = "invalid value for 'obsEpsId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
            if ((mb_strlen($this->container['obsBucketName']) > 63)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['obsBucketName']) < 3)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['obsDirPreFixName']) && (mb_strlen($this->container['obsDirPreFixName']) > 64)) {
                $invalidProperties[] = "invalid value for 'obsDirPreFixName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['obsDirPreFixName']) && (mb_strlen($this->container['obsDirPreFixName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsDirPreFixName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['obsDirPreFixName']) && !preg_match("/^(\/)?([a-zA-Z0-9\\._-]+)(\/[a-zA-Z0-9\\._-]+)*(\/)?$/", $this->container['obsDirPreFixName'])) {
                $invalidProperties[] = "invalid value for 'obsDirPreFixName', must be conform to the pattern /^(\/)?([a-zA-Z0-9\\._-]+)(\/[a-zA-Z0-9\\._-]+)*(\/)?$/.";
            }
            if (!is_null($this->container['disId']) && (mb_strlen($this->container['disId']) > 128)) {
                $invalidProperties[] = "invalid value for 'disId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['disId']) && (mb_strlen($this->container['disId']) < 1)) {
                $invalidProperties[] = "invalid value for 'disId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['disName']) && (mb_strlen($this->container['disName']) > 128)) {
                $invalidProperties[] = "invalid value for 'disName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['disName']) && (mb_strlen($this->container['disName']) < 1)) {
                $invalidProperties[] = "invalid value for 'disName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['kafkaId']) && (mb_strlen($this->container['kafkaId']) > 36)) {
                $invalidProperties[] = "invalid value for 'kafkaId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['kafkaId']) && (mb_strlen($this->container['kafkaId']) < 36)) {
                $invalidProperties[] = "invalid value for 'kafkaId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['kafkaTopic']) && (mb_strlen($this->container['kafkaTopic']) > 128)) {
                $invalidProperties[] = "invalid value for 'kafkaTopic', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['kafkaTopic']) && (mb_strlen($this->container['kafkaTopic']) < 1)) {
                $invalidProperties[] = "invalid value for 'kafkaTopic', the character length must be bigger than or equal to 1.";
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
    *  OBS转储时间
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
    * @param int $obsPeriod OBS转储时间
    *
    * @return $this
    */
    public function setObsPeriod($obsPeriod)
    {
        $this->container['obsPeriod'] = $obsPeriod;
        return $this;
    }

    /**
    * Gets obsEncryptedId
    *  OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
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
    * @param string|null $obsEncryptedId OBS转储KMS秘钥ID。若OBS转储未加密则不返回此字段
    *
    * @return $this
    */
    public function setObsEncryptedId($obsEncryptedId)
    {
        $this->container['obsEncryptedId'] = $obsEncryptedId;
        return $this;
    }

    /**
    * Gets obsPrefixName
    *  OBS转储日志文件前缀
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
    * @param string|null $obsPrefixName OBS转储日志文件前缀
    *
    * @return $this
    */
    public function setObsPrefixName($obsPrefixName)
    {
        $this->container['obsPrefixName'] = $obsPrefixName;
        return $this;
    }

    /**
    * Gets obsPeriodUnit
    *  OBS转储单位
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
    * @param string $obsPeriodUnit OBS转储单位
    *
    * @return $this
    */
    public function setObsPeriodUnit($obsPeriodUnit)
    {
        $this->container['obsPeriodUnit'] = $obsPeriodUnit;
        return $this;
    }

    /**
    * Gets obsTransferPath
    *  OBS转储路径，指OBS日志桶中的路径
    *
    * @return string|null
    */
    public function getObsTransferPath()
    {
        return $this->container['obsTransferPath'];
    }

    /**
    * Sets obsTransferPath
    *
    * @param string|null $obsTransferPath OBS转储路径，指OBS日志桶中的路径
    *
    * @return $this
    */
    public function setObsTransferPath($obsTransferPath)
    {
        $this->container['obsTransferPath'] = $obsTransferPath;
        return $this;
    }

    /**
    * Gets obsEpsId
    *  OBS企业项目ID
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
    * @param string|null $obsEpsId OBS企业项目ID
    *
    * @return $this
    */
    public function setObsEpsId($obsEpsId)
    {
        $this->container['obsEpsId'] = $obsEpsId;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  OBS日志桶名称
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
    * @param string $obsBucketName OBS日志桶名称
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsEncryptedEnable
    *  OBS是否开启加密。
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
    * @param bool|null $obsEncryptedEnable OBS是否开启加密。
    *
    * @return $this
    */
    public function setObsEncryptedEnable($obsEncryptedEnable)
    {
        $this->container['obsEncryptedEnable'] = $obsEncryptedEnable;
        return $this;
    }

    /**
    * Gets obsDirPreFixName
    *  OBS转储自定义转储路径
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
    * @param string|null $obsDirPreFixName OBS转储自定义转储路径
    *
    * @return $this
    */
    public function setObsDirPreFixName($obsDirPreFixName)
    {
        $this->container['obsDirPreFixName'] = $obsDirPreFixName;
        return $this;
    }

    /**
    * Gets disId
    *  DIS转储通道ID
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
    * @param string|null $disId DIS转储通道ID
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
    *  DIS转储通道名称
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
    * @param string|null $disName DIS转储通道名称
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
    *  DMS转储kafka ID
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
    * @param string|null $kafkaId DMS转储kafka ID
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
    *  DMS转储kafka topic
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
    * @param string|null $kafkaTopic DMS转储kafka topic
    *
    * @return $this
    */
    public function setKafkaTopic($kafkaTopic)
    {
        $this->container['kafkaTopic'] = $kafkaTopic;
        return $this;
    }

    /**
    * Gets obsTimeZone
    *  OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
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
    * @param string|null $obsTimeZone OBS转储时区。如果选择该参数，则必须选择obs_time_zone_id。
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
    *  OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
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
    * @param string|null $obsTimeZoneId OBS转储时区ID。参数选择参考OBS转储时区表。如果选择该参数，则必须选择obs_time_zone。
    *
    * @return $this
    */
    public function setObsTimeZoneId($obsTimeZoneId)
    {
        $this->container['obsTimeZoneId'] = $obsTimeZoneId;
        return $this;
    }

    /**
    * Gets tags
    *  若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
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
    * @param string[]|null $tags 若开启tag投递，该字段必须包含主机信息：hostIP、hostId、hostName、pathFile、collectTime；  公共字段有：logStreamName、regionName、logGroupName、projectId，为可选填；  开启转储标签：streamTag，可选填
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
    *  dms转储JSON格式选填，可以转储tag字段
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
    * @param string[]|null $ltsTags dms转储JSON格式选填，可以转储tag字段
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
    *  dms转储JSON格式选填，可以转储日志流标签字段
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
    * @param string[]|null $streamTags dms转储JSON格式选填，可以转储日志流标签字段
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
    *  dms转储JSON格式选填，可以转储结构化字段
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
    * @param string[]|null $structFields dms转储JSON格式选填，可以转储结构化字段
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
    *  dms转储JSON格式选填，无效字段填充
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
    * @param string|null $invalidFieldValue dms转储JSON格式选填，无效字段填充
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

