<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * recordDuration  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    * recordFormat  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
    * recordType  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    * recordLocation  录制位置vod， 默认vod（目前暂只支持vod）
    * recordPrefix  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    * obsAddr  obsAddr
    * createTime  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'recordDuration' => 'int',
            'recordFormat' => 'string',
            'recordType' => 'string',
            'recordLocation' => 'string',
            'recordPrefix' => 'string',
            'obsAddr' => '\HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * recordDuration  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    * recordFormat  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
    * recordType  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    * recordLocation  录制位置vod， 默认vod（目前暂只支持vod）
    * recordPrefix  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    * obsAddr  obsAddr
    * createTime  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'recordDuration' => 'int32',
        'recordFormat' => null,
        'recordType' => null,
        'recordLocation' => null,
        'recordPrefix' => null,
        'obsAddr' => null,
        'createTime' => null
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
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * recordDuration  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    * recordFormat  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
    * recordType  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    * recordLocation  录制位置vod， 默认vod（目前暂只支持vod）
    * recordPrefix  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    * obsAddr  obsAddr
    * createTime  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'recordDuration' => 'record_duration',
            'recordFormat' => 'record_format',
            'recordType' => 'record_type',
            'recordLocation' => 'record_location',
            'recordPrefix' => 'record_prefix',
            'obsAddr' => 'obs_addr',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * recordDuration  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    * recordFormat  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
    * recordType  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    * recordLocation  录制位置vod， 默认vod（目前暂只支持vod）
    * recordPrefix  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    * obsAddr  obsAddr
    * createTime  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'recordDuration' => 'setRecordDuration',
            'recordFormat' => 'setRecordFormat',
            'recordType' => 'setRecordType',
            'recordLocation' => 'setRecordLocation',
            'recordPrefix' => 'setRecordPrefix',
            'obsAddr' => 'setObsAddr',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播播放域名
    * appName  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    * recordDuration  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    * recordFormat  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
    * recordType  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    * recordLocation  录制位置vod， 默认vod（目前暂只支持vod）
    * recordPrefix  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    * obsAddr  obsAddr
    * createTime  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'recordDuration' => 'getRecordDuration',
            'recordFormat' => 'getRecordFormat',
            'recordType' => 'getRecordType',
            'recordLocation' => 'getRecordLocation',
            'recordPrefix' => 'getRecordPrefix',
            'obsAddr' => 'getObsAddr',
            'createTime' => 'getCreateTime'
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
    const RECORD_FORMAT_FLV = 'flv';
    const RECORD_FORMAT_HLS = 'hls';
    const RECORD_FORMAT_MP4 = 'mp4';
    const RECORD_TYPE_CONFIGER_RECORD = 'configer_record';
    const RECORD_LOCATION_VOD = 'vod';
    const RECORD_LOCATION_OBS = 'obs';
    

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
            self::RECORD_TYPE_CONFIGER_RECORD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecordLocationAllowableValues()
    {
        return [
            self::RECORD_LOCATION_VOD,
            self::RECORD_LOCATION_OBS,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['recordDuration'] = isset($data['recordDuration']) ? $data['recordDuration'] : null;
        $this->container['recordFormat'] = isset($data['recordFormat']) ? $data['recordFormat'] : 'flv';
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : 'configer_record';
        $this->container['recordLocation'] = isset($data['recordLocation']) ? $data['recordLocation'] : 'vod';
        $this->container['recordPrefix'] = isset($data['recordPrefix']) ? $data['recordPrefix'] : '{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}';
        $this->container['obsAddr'] = isset($data['obsAddr']) ? $data['obsAddr'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appName'] === null) {
            $invalidProperties[] = "'appName' can't be null";
        }
            if ((mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
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

            $allowedValues = $this->getRecordLocationAllowableValues();
                if (!is_null($this->container['recordLocation']) && !in_array($this->container['recordLocation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recordLocation', must be one of '%s'",
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
    * Gets domain
    *  直播播放域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 直播播放域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return string
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string $appName 应用名称。 默认为“live”，若您需要自定义应用名称，请先提交工单申请。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets recordDuration
    *  秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    *
    * @return int|null
    */
    public function getRecordDuration()
    {
        return $this->container['recordDuration'];
    }

    /**
    * Sets recordDuration
    *
    * @param int|null $recordDuration 秒，周期录制时常，最小15分钟，最大6小时，默认1小时
    *
    * @return $this
    */
    public function setRecordDuration($recordDuration)
    {
        $this->container['recordDuration'] = $recordDuration;
        return $this;
    }

    /**
    * Gets recordFormat
    *  录制格式flv，hls，mp4，默认flv（目前仅支持flv）
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
    * @param string|null $recordFormat 录制格式flv，hls，mp4，默认flv（目前仅支持flv）
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
    *  录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
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
    * @param string|null $recordType 录制类型，configer_record，默认configer_record。表示录制配置好后，只要有流就录制
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets recordLocation
    *  录制位置vod， 默认vod（目前暂只支持vod）
    *
    * @return string|null
    */
    public function getRecordLocation()
    {
        return $this->container['recordLocation'];
    }

    /**
    * Sets recordLocation
    *
    * @param string|null $recordLocation 录制位置vod， 默认vod（目前暂只支持vod）
    *
    * @return $this
    */
    public function setRecordLocation($recordLocation)
    {
        $this->container['recordLocation'] = $recordLocation;
        return $this;
    }

    /**
    * Gets recordPrefix
    *  录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    *
    * @return string|null
    */
    public function getRecordPrefix()
    {
        return $this->container['recordPrefix'];
    }

    /**
    * Sets recordPrefix
    *
    * @param string|null $recordPrefix 录制文件前缀， DomainName，AppName，StreamName必须，默认{DomainName}/{AppName}/{StreamName}/{StartTime}-{EndTime}
    *
    * @return $this
    */
    public function setRecordPrefix($recordPrefix)
    {
        $this->container['recordPrefix'] = $recordPrefix;
        return $this;
    }

    /**
    * Gets obsAddr
    *  obsAddr
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr|null
    */
    public function getObsAddr()
    {
        return $this->container['obsAddr'];
    }

    /**
    * Sets obsAddr
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr|null $obsAddr obsAddr
    *
    * @return $this
    */
    public function setObsAddr($obsAddr)
    {
        $this->container['obsAddr'] = $obsAddr;
        return $this;
    }

    /**
    * Gets createTime
    *  录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
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
    * @param string|null $createTime 录制配置创建时间，样例2020-02-14T10:45:16.947+08:00
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

