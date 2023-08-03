<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordContentInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordContentInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * fileName  录制文件名
    * app  应用名
    * stream  录制的流名
    * recordFormat  录制格式flv，hls，mp4
    * recordType  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * obsAddr  obsAddr
    * vodInfo  vodInfo
    * downloadUrl  OBS下载地址
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * duration  该录制文件时长，单位为秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'fileName' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'recordFormat' => 'string',
            'recordType' => 'string',
            'obsAddr' => '\HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr',
            'vodInfo' => '\HuaweiCloud\SDK\Live\V1\Model\VodInfoV2',
            'downloadUrl' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime',
            'duration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * fileName  录制文件名
    * app  应用名
    * stream  录制的流名
    * recordFormat  录制格式flv，hls，mp4
    * recordType  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * obsAddr  obsAddr
    * vodInfo  vodInfo
    * downloadUrl  OBS下载地址
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * duration  该录制文件时长，单位为秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'fileName' => null,
        'app' => null,
        'stream' => null,
        'recordFormat' => null,
        'recordType' => null,
        'obsAddr' => null,
        'vodInfo' => null,
        'downloadUrl' => null,
        'startTime' => 'date',
        'endTime' => 'date',
        'duration' => null
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
    * publishDomain  直播推流域名
    * fileName  录制文件名
    * app  应用名
    * stream  录制的流名
    * recordFormat  录制格式flv，hls，mp4
    * recordType  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * obsAddr  obsAddr
    * vodInfo  vodInfo
    * downloadUrl  OBS下载地址
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * duration  该录制文件时长，单位为秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'fileName' => 'file_name',
            'app' => 'app',
            'stream' => 'stream',
            'recordFormat' => 'record_format',
            'recordType' => 'record_type',
            'obsAddr' => 'obs_addr',
            'vodInfo' => 'vod_info',
            'downloadUrl' => 'download_url',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'duration' => 'duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  直播推流域名
    * fileName  录制文件名
    * app  应用名
    * stream  录制的流名
    * recordFormat  录制格式flv，hls，mp4
    * recordType  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * obsAddr  obsAddr
    * vodInfo  vodInfo
    * downloadUrl  OBS下载地址
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * duration  该录制文件时长，单位为秒
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'fileName' => 'setFileName',
            'app' => 'setApp',
            'stream' => 'setStream',
            'recordFormat' => 'setRecordFormat',
            'recordType' => 'setRecordType',
            'obsAddr' => 'setObsAddr',
            'vodInfo' => 'setVodInfo',
            'downloadUrl' => 'setDownloadUrl',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  直播推流域名
    * fileName  录制文件名
    * app  应用名
    * stream  录制的流名
    * recordFormat  录制格式flv，hls，mp4
    * recordType  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    * obsAddr  obsAddr
    * vodInfo  vodInfo
    * downloadUrl  OBS下载地址
    * startTime  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * endTime  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    * duration  该录制文件时长，单位为秒
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'fileName' => 'getFileName',
            'app' => 'getApp',
            'stream' => 'getStream',
            'recordFormat' => 'getRecordFormat',
            'recordType' => 'getRecordType',
            'obsAddr' => 'getObsAddr',
            'vodInfo' => 'getVodInfo',
            'downloadUrl' => 'getDownloadUrl',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration'
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
    const RECORD_FORMAT_FLV = 'FLV';
    const RECORD_FORMAT_HLS = 'HLS';
    const RECORD_FORMAT_MP4 = 'MP4';
    const RECORD_TYPE_CONTINUOUS_RECORD = 'CONTINUOUS_RECORD';
    const RECORD_TYPE_COMMAND_RECORD = 'COMMAND_RECORD';
    const RECORD_TYPE_PLAN_RECORD = 'PLAN_RECORD';
    const RECORD_TYPE_ON_DEMAND_RECORD = 'ON_DEMAND_RECORD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordFormatAllowableValues()
    {
        return [
            self::RECORD_FORMAT_FLV,
            self::RECORD_FORMAT_HLS,
            self::RECORD_FORMAT_MP4,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordTypeAllowableValues()
    {
        return [
            self::RECORD_TYPE_CONTINUOUS_RECORD,
            self::RECORD_TYPE_COMMAND_RECORD,
            self::RECORD_TYPE_PLAN_RECORD,
            self::RECORD_TYPE_ON_DEMAND_RECORD,
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['recordFormat'] = isset($data['recordFormat']) ? $data['recordFormat'] : null;
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['obsAddr'] = isset($data['obsAddr']) ? $data['obsAddr'] : null;
        $this->container['vodInfo'] = isset($data['vodInfo']) ? $data['vodInfo'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) > 256)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publishDomain']) && (mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 128)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRecordFormatAllowableValues();
                if (!is_null($this->container['recordFormat']) && !in_array($this->container['recordFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recordFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRecordTypeAllowableValues();
                if (!is_null($this->container['recordType']) && !in_array($this->container['recordType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recordType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['downloadUrl']) && (mb_strlen($this->container['downloadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'downloadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 43200)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
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
    * Gets publishDomain
    *  直播推流域名
    *
    * @return string|null
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string|null $publishDomain 直播推流域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets fileName
    *  录制文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 录制文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets app
    *  应用名
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用名
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets stream
    *  录制的流名
    *
    * @return string|null
    */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
    * Sets stream
    *
    * @param string|null $stream 录制的流名
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets recordFormat
    *  录制格式flv，hls，mp4
    *
    * @return string|null
    */
    public function getRecordFormat()
    {
        return $this->container['recordFormat'];
    }

    /**
    * Sets recordFormat
    *
    * @param string|null $recordFormat 录制格式flv，hls，mp4
    *
    * @return $this
    */
    public function setRecordFormat($recordFormat)
    {
        $this->container['recordFormat'] = $recordFormat;
        return $this;
    }

    /**
    * Gets recordType
    *  录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 录制类型，CONTINUOUS_RECORD，COMMAND_RECORD，PLAN_RECORD, ON_DEMAND_RECORD。默认CONTINUOUS_RECORD。 - CONTINUOUS_RECORD：持续录制，在该规则类型配置后，只要有流到推送到录制系统，就触发录制。 - COMMAND_RECORD：命令录制，在该规则类型配置后，在流推送到录制系统后，租户需要通过命令控制该流的录制开始和结束。 - PLAN_RECORD：计划录制，在该规则类型配置后，推的流如果在计划录制的时间区间则触发录制。 - ON_DEMAND_RECORD：按需录制，在该规则类型配置后，录制系统收到推流后，需要调用租户提供的接口查询录制规则，并根据规则录制。
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets obsAddr
    *  obsAddr
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr|null
    */
    public function getObsAddr()
    {
        return $this->container['obsAddr'];
    }

    /**
    * Sets obsAddr
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\RecordObsFileAddr|null $obsAddr obsAddr
    *
    * @return $this
    */
    public function setObsAddr($obsAddr)
    {
        $this->container['obsAddr'] = $obsAddr;
        return $this;
    }

    /**
    * Gets vodInfo
    *  vodInfo
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\VodInfoV2|null
    */
    public function getVodInfo()
    {
        return $this->container['vodInfo'];
    }

    /**
    * Sets vodInfo
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\VodInfoV2|null $vodInfo vodInfo
    *
    * @return $this
    */
    public function setVodInfo($vodInfo)
    {
        $this->container['vodInfo'] = $vodInfo;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  OBS下载地址
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl OBS下载地址
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
        return $this;
    }

    /**
    * Gets startTime
    *  录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 录制开始时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 录制结束时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。对record_type为PLAN_RECORD有效
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  该录制文件时长，单位为秒
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 该录制文件时长，单位为秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
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

