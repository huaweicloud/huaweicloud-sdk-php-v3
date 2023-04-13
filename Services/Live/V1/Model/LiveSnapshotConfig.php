<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveSnapshotConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveSnapshotConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播推流域名
    * appName  应用名称
    * authKey  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    * timeInterval  截图频率  取值范围：[5-3600]  单位：秒
    * objectWriteMode  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    * obsLocation  obsLocation
    * callBackEnable  是否启用回调通知 - on：启用。 - off：不启用。
    * callBackUrl  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    * callBackArea  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    * callBackSslVerify  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    * callBackSslCa  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    * imageObjectFormat  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'appName' => 'string',
            'authKey' => 'string',
            'timeInterval' => 'int',
            'objectWriteMode' => 'int',
            'obsLocation' => '\HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr',
            'callBackEnable' => 'string',
            'callBackUrl' => 'string',
            'callBackArea' => 'string',
            'callBackSslVerify' => 'bool',
            'callBackSslCa' => 'string',
            'imageObjectFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播推流域名
    * appName  应用名称
    * authKey  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    * timeInterval  截图频率  取值范围：[5-3600]  单位：秒
    * objectWriteMode  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    * obsLocation  obsLocation
    * callBackEnable  是否启用回调通知 - on：启用。 - off：不启用。
    * callBackUrl  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    * callBackArea  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    * callBackSslVerify  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    * callBackSslCa  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    * imageObjectFormat  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'appName' => null,
        'authKey' => null,
        'timeInterval' => null,
        'objectWriteMode' => null,
        'obsLocation' => null,
        'callBackEnable' => null,
        'callBackUrl' => null,
        'callBackArea' => null,
        'callBackSslVerify' => null,
        'callBackSslCa' => null,
        'imageObjectFormat' => null
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
    * domain  直播推流域名
    * appName  应用名称
    * authKey  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    * timeInterval  截图频率  取值范围：[5-3600]  单位：秒
    * objectWriteMode  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    * obsLocation  obsLocation
    * callBackEnable  是否启用回调通知 - on：启用。 - off：不启用。
    * callBackUrl  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    * callBackArea  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    * callBackSslVerify  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    * callBackSslCa  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    * imageObjectFormat  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'appName' => 'app_name',
            'authKey' => 'auth_key',
            'timeInterval' => 'time_interval',
            'objectWriteMode' => 'object_write_mode',
            'obsLocation' => 'obs_location',
            'callBackEnable' => 'call_back_enable',
            'callBackUrl' => 'call_back_url',
            'callBackArea' => 'call_back_area',
            'callBackSslVerify' => 'call_back_ssl_verify',
            'callBackSslCa' => 'call_back_ssl_ca',
            'imageObjectFormat' => 'image_object_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播推流域名
    * appName  应用名称
    * authKey  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    * timeInterval  截图频率  取值范围：[5-3600]  单位：秒
    * objectWriteMode  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    * obsLocation  obsLocation
    * callBackEnable  是否启用回调通知 - on：启用。 - off：不启用。
    * callBackUrl  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    * callBackArea  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    * callBackSslVerify  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    * callBackSslCa  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    * imageObjectFormat  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'appName' => 'setAppName',
            'authKey' => 'setAuthKey',
            'timeInterval' => 'setTimeInterval',
            'objectWriteMode' => 'setObjectWriteMode',
            'obsLocation' => 'setObsLocation',
            'callBackEnable' => 'setCallBackEnable',
            'callBackUrl' => 'setCallBackUrl',
            'callBackArea' => 'setCallBackArea',
            'callBackSslVerify' => 'setCallBackSslVerify',
            'callBackSslCa' => 'setCallBackSslCa',
            'imageObjectFormat' => 'setImageObjectFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播推流域名
    * appName  应用名称
    * authKey  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    * timeInterval  截图频率  取值范围：[5-3600]  单位：秒
    * objectWriteMode  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    * obsLocation  obsLocation
    * callBackEnable  是否启用回调通知 - on：启用。 - off：不启用。
    * callBackUrl  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    * callBackArea  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    * callBackSslVerify  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    * callBackSslCa  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    * imageObjectFormat  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'appName' => 'getAppName',
            'authKey' => 'getAuthKey',
            'timeInterval' => 'getTimeInterval',
            'objectWriteMode' => 'getObjectWriteMode',
            'obsLocation' => 'getObsLocation',
            'callBackEnable' => 'getCallBackEnable',
            'callBackUrl' => 'getCallBackUrl',
            'callBackArea' => 'getCallBackArea',
            'callBackSslVerify' => 'getCallBackSslVerify',
            'callBackSslCa' => 'getCallBackSslCa',
            'imageObjectFormat' => 'getImageObjectFormat'
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
    const CALL_BACK_ENABLE_ON = 'on';
    const CALL_BACK_ENABLE_OFF = 'off';
    const CALL_BACK_AREA_MAINLAND_CHINA = 'mainland_china';
    const CALL_BACK_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCallBackEnableAllowableValues()
    {
        return [
            self::CALL_BACK_ENABLE_ON,
            self::CALL_BACK_ENABLE_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCallBackAreaAllowableValues()
    {
        return [
            self::CALL_BACK_AREA_MAINLAND_CHINA,
            self::CALL_BACK_AREA_OUTSIDE_MAINLAND_CHINA,
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
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : null;
        $this->container['timeInterval'] = isset($data['timeInterval']) ? $data['timeInterval'] : null;
        $this->container['objectWriteMode'] = isset($data['objectWriteMode']) ? $data['objectWriteMode'] : null;
        $this->container['obsLocation'] = isset($data['obsLocation']) ? $data['obsLocation'] : null;
        $this->container['callBackEnable'] = isset($data['callBackEnable']) ? $data['callBackEnable'] : null;
        $this->container['callBackUrl'] = isset($data['callBackUrl']) ? $data['callBackUrl'] : null;
        $this->container['callBackArea'] = isset($data['callBackArea']) ? $data['callBackArea'] : null;
        $this->container['callBackSslVerify'] = isset($data['callBackSslVerify']) ? $data['callBackSslVerify'] : false;
        $this->container['callBackSslCa'] = isset($data['callBackSslCa']) ? $data['callBackSslCa'] : null;
        $this->container['imageObjectFormat'] = isset($data['imageObjectFormat']) ? $data['imageObjectFormat'] : null;
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
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
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
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) < 32)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['timeInterval'] === null) {
            $invalidProperties[] = "'timeInterval' can't be null";
        }
        if ($this->container['objectWriteMode'] === null) {
            $invalidProperties[] = "'objectWriteMode' can't be null";
        }
        if ($this->container['obsLocation'] === null) {
            $invalidProperties[] = "'obsLocation' can't be null";
        }
            $allowedValues = $this->getCallBackEnableAllowableValues();
                if (!is_null($this->container['callBackEnable']) && !in_array($this->container['callBackEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'callBackEnable', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCallBackAreaAllowableValues();
                if (!is_null($this->container['callBackArea']) && !in_array($this->container['callBackArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'callBackArea', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['callBackSslCa']) && (mb_strlen($this->container['callBackSslCa']) > 8192)) {
                $invalidProperties[] = "invalid value for 'callBackSslCa', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['callBackSslCa']) && (mb_strlen($this->container['callBackSslCa']) < 0)) {
                $invalidProperties[] = "invalid value for 'callBackSslCa', the character length must be bigger than or equal to 0.";
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
    *  直播推流域名
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
    * @param string $domain 直播推流域名
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
    *  应用名称
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
    * @param string $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets authKey
    *  回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    *
    * @return string|null
    */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
    * Sets authKey
    *
    * @param string|null $authKey 回调鉴权密钥值  长度范围：[32-128]  若需要使用回调鉴权功能，请配置鉴权密钥，否则，留空即可。
    *
    * @return $this
    */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;
        return $this;
    }

    /**
    * Gets timeInterval
    *  截图频率  取值范围：[5-3600]  单位：秒
    *
    * @return int
    */
    public function getTimeInterval()
    {
        return $this->container['timeInterval'];
    }

    /**
    * Sets timeInterval
    *
    * @param int $timeInterval 截图频率  取值范围：[5-3600]  单位：秒
    *
    * @return $this
    */
    public function setTimeInterval($timeInterval)
    {
        $this->container['timeInterval'] = $timeInterval;
        return $this;
    }

    /**
    * Gets objectWriteMode
    *  在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    *
    * @return int
    */
    public function getObjectWriteMode()
    {
        return $this->container['objectWriteMode'];
    }

    /**
    * Sets objectWriteMode
    *
    * @param int $objectWriteMode 在OBS桶存储截图的方式：  - 0：实时截图，以时间戳命名截图文件，保存所有截图文件到OBS桶。例：snapshot/{domain}/{app_name}/{stream_name}/{UnixTimestamp}.jpg  - 1：覆盖截图，只保存最新的截图文件，新的截图会覆盖原来的截图文件。例：snapshot/{domain}/{app_name}/{stream_name}.jpg
    *
    * @return $this
    */
    public function setObjectWriteMode($objectWriteMode)
    {
        $this->container['objectWriteMode'] = $objectWriteMode;
        return $this;
    }

    /**
    * Gets obsLocation
    *  obsLocation
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr
    */
    public function getObsLocation()
    {
        return $this->container['obsLocation'];
    }

    /**
    * Sets obsLocation
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\ObsFileAddr $obsLocation obsLocation
    *
    * @return $this
    */
    public function setObsLocation($obsLocation)
    {
        $this->container['obsLocation'] = $obsLocation;
        return $this;
    }

    /**
    * Gets callBackEnable
    *  是否启用回调通知 - on：启用。 - off：不启用。
    *
    * @return string|null
    */
    public function getCallBackEnable()
    {
        return $this->container['callBackEnable'];
    }

    /**
    * Sets callBackEnable
    *
    * @param string|null $callBackEnable 是否启用回调通知 - on：启用。 - off：不启用。
    *
    * @return $this
    */
    public function setCallBackEnable($callBackEnable)
    {
        $this->container['callBackEnable'] = $callBackEnable;
        return $this;
    }

    /**
    * Gets callBackUrl
    *  通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    *
    * @return string|null
    */
    public function getCallBackUrl()
    {
        return $this->container['callBackUrl'];
    }

    /**
    * Sets callBackUrl
    *
    * @param string|null $callBackUrl 通知服务器地址，必须是合法的URL且携带协议，协议支持http和https。截图完成后直播服务会向此地址推送截图状态信息。
    *
    * @return $this
    */
    public function setCallBackUrl($callBackUrl)
    {
        $this->container['callBackUrl'] = $callBackUrl;
        return $this;
    }

    /**
    * Gets callBackArea
    *  通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    *
    * @return string|null
    */
    public function getCallBackArea()
    {
        return $this->container['callBackArea'];
    }

    /**
    * Sets callBackArea
    *
    * @param string|null $callBackArea 通知服务器区域。 - mainland_china：表示中国大陆区域 - outside_mainland_china：表示中国大陆以外区域  为空则按默认处理。
    *
    * @return $this
    */
    public function setCallBackArea($callBackArea)
    {
        $this->container['callBackArea'] = $callBackArea;
        return $this;
    }

    /**
    * Gets callBackSslVerify
    *  是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    *
    * @return bool|null
    */
    public function getCallBackSslVerify()
    {
        return $this->container['callBackSslVerify'];
    }

    /**
    * Sets callBackSslVerify
    *
    * @param bool|null $callBackSslVerify 是否开启ssl校验服务服务端证书，仅当回调url使用https协议时有效
    *
    * @return $this
    */
    public function setCallBackSslVerify($callBackSslVerify)
    {
        $this->container['callBackSslVerify'] = $callBackSslVerify;
        return $this;
    }

    /**
    * Gets callBackSslCa
    *  客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    *
    * @return string|null
    */
    public function getCallBackSslCa()
    {
        return $this->container['callBackSslCa'];
    }

    /**
    * Sets callBackSslCa
    *
    * @param string|null $callBackSslCa 客户端校验服务端的受信证书，call_back_ssl_verify为ture时必需
    *
    * @return $this
    */
    public function setCallBackSslCa($callBackSslCa)
    {
        $this->container['callBackSslCa'] = $callBackSslCa;
        return $this;
    }

    /**
    * Gets imageObjectFormat
    *  截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @return string|null
    */
    public function getImageObjectFormat()
    {
        return $this->container['imageObjectFormat'];
    }

    /**
    * Sets imageObjectFormat
    *
    * @param string|null $imageObjectFormat 截图存储文件命名规则， 仅支持jpg格式 包含 - '{obs_object}' OBS存储路径，即obs_location.object的值  - '{domain}' 域名 - '{app}' 应用名 - '{stream}'  流名  其中实时截图模式下  - '{unix_time}'  时间戳，秒 - '{unix_time_milli}'  时间戳，毫秒 - '{fmt_time_utc}'   格式化UTC时间, 格式：YYYYMMDDhhmmss, 如20060102070405 - '{fmt_time_local}'  格式化本地时间, 格式：YYYYMMDDhhmmss，如20060102150405 必选一个时间类型模板
    *
    * @return $this
    */
    public function setImageObjectFormat($imageObjectFormat)
    {
        $this->container['imageObjectFormat'] = $imageObjectFormat;
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

