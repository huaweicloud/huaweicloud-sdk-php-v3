<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Encryption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Encryption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    * encryptionMethod  加密方式。  请注意：目前为保留字段，不支持配置。
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * resourceId  客户生成的DRM内容ID
    * systemIds  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    * url  获取密钥的DRM地址
    * spekeVersion  drm speke 版本号 当前只支持1.0
    * requestMode  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    * httpHeaders  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    * urn  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyRotationIntervalSeconds' => 'int',
            'encryptionMethod' => 'string',
            'level' => 'string',
            'resourceId' => 'string',
            'systemIds' => 'string[]',
            'url' => 'string',
            'spekeVersion' => 'string',
            'requestMode' => 'string',
            'httpHeaders' => '\HuaweiCloud\SDK\Live\V1\Model\HttpHeader[]',
            'urn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    * encryptionMethod  加密方式。  请注意：目前为保留字段，不支持配置。
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * resourceId  客户生成的DRM内容ID
    * systemIds  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    * url  获取密钥的DRM地址
    * spekeVersion  drm speke 版本号 当前只支持1.0
    * requestMode  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    * httpHeaders  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    * urn  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyRotationIntervalSeconds' => 'int32',
        'encryptionMethod' => null,
        'level' => null,
        'resourceId' => null,
        'systemIds' => null,
        'url' => null,
        'spekeVersion' => null,
        'requestMode' => null,
        'httpHeaders' => null,
        'urn' => null
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
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    * encryptionMethod  加密方式。  请注意：目前为保留字段，不支持配置。
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * resourceId  客户生成的DRM内容ID
    * systemIds  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    * url  获取密钥的DRM地址
    * spekeVersion  drm speke 版本号 当前只支持1.0
    * requestMode  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    * httpHeaders  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    * urn  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyRotationIntervalSeconds' => 'key_rotation_interval_seconds',
            'encryptionMethod' => 'encryption_method',
            'level' => 'level',
            'resourceId' => 'resource_id',
            'systemIds' => 'system_ids',
            'url' => 'url',
            'spekeVersion' => 'speke_version',
            'requestMode' => 'request_mode',
            'httpHeaders' => 'http_headers',
            'urn' => 'urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    * encryptionMethod  加密方式。  请注意：目前为保留字段，不支持配置。
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * resourceId  客户生成的DRM内容ID
    * systemIds  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    * url  获取密钥的DRM地址
    * spekeVersion  drm speke 版本号 当前只支持1.0
    * requestMode  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    * httpHeaders  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    * urn  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyRotationIntervalSeconds' => 'setKeyRotationIntervalSeconds',
            'encryptionMethod' => 'setEncryptionMethod',
            'level' => 'setLevel',
            'resourceId' => 'setResourceId',
            'systemIds' => 'setSystemIds',
            'url' => 'setUrl',
            'spekeVersion' => 'setSpekeVersion',
            'requestMode' => 'setRequestMode',
            'httpHeaders' => 'setHttpHeaders',
            'urn' => 'setUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    * encryptionMethod  加密方式。  请注意：目前为保留字段，不支持配置。
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * resourceId  客户生成的DRM内容ID
    * systemIds  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    * url  获取密钥的DRM地址
    * spekeVersion  drm speke 版本号 当前只支持1.0
    * requestMode  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    * httpHeaders  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    * urn  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyRotationIntervalSeconds' => 'getKeyRotationIntervalSeconds',
            'encryptionMethod' => 'getEncryptionMethod',
            'level' => 'getLevel',
            'resourceId' => 'getResourceId',
            'systemIds' => 'getSystemIds',
            'url' => 'getUrl',
            'spekeVersion' => 'getSpekeVersion',
            'requestMode' => 'getRequestMode',
            'httpHeaders' => 'getHttpHeaders',
            'urn' => 'getUrn'
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
    const ENCRYPTION_METHOD_SAMPLE_AES = 'SAMPLE-AES';
    const ENCRYPTION_METHOD_AES_128 = 'AES-128';
    const LEVEL_CONTENT = 'content';
    const LEVEL_PROFILE = 'profile';
    const SYSTEM_IDS_WIDEVINE = 'Widevine';
    const SYSTEM_IDS_PLAY_READY = 'PlayReady';
    const SYSTEM_IDS_FAIR_PLAY = 'FairPlay';
    const SPEKE_VERSION__1_0 = '1.0';
    const REQUEST_MODE_DIRECT_HTTP = 'direct_http';
    const REQUEST_MODE_FUNCTIONGRAPH_PROXY = 'functiongraph_proxy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncryptionMethodAllowableValues()
    {
        return [
            self::ENCRYPTION_METHOD_SAMPLE_AES,
            self::ENCRYPTION_METHOD_AES_128,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_CONTENT,
            self::LEVEL_PROFILE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSystemIdsAllowableValues()
    {
        return [
            self::SYSTEM_IDS_WIDEVINE,
            self::SYSTEM_IDS_PLAY_READY,
            self::SYSTEM_IDS_FAIR_PLAY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpekeVersionAllowableValues()
    {
        return [
            self::SPEKE_VERSION__1_0,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRequestModeAllowableValues()
    {
        return [
            self::REQUEST_MODE_DIRECT_HTTP,
            self::REQUEST_MODE_FUNCTIONGRAPH_PROXY,
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
        $this->container['keyRotationIntervalSeconds'] = isset($data['keyRotationIntervalSeconds']) ? $data['keyRotationIntervalSeconds'] : null;
        $this->container['encryptionMethod'] = isset($data['encryptionMethod']) ? $data['encryptionMethod'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['systemIds'] = isset($data['systemIds']) ? $data['systemIds'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['spekeVersion'] = isset($data['spekeVersion']) ? $data['spekeVersion'] : null;
        $this->container['requestMode'] = isset($data['requestMode']) ? $data['requestMode'] : null;
        $this->container['httpHeaders'] = isset($data['httpHeaders']) ? $data['httpHeaders'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyRotationIntervalSeconds']) && ($this->container['keyRotationIntervalSeconds'] > 604800)) {
                $invalidProperties[] = "invalid value for 'keyRotationIntervalSeconds', must be smaller than or equal to 604800.";
            }
            if (!is_null($this->container['keyRotationIntervalSeconds']) && ($this->container['keyRotationIntervalSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'keyRotationIntervalSeconds', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getEncryptionMethodAllowableValues();
                if (!is_null($this->container['encryptionMethod']) && !in_array($this->container['encryptionMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encryptionMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['encryptionMethod']) && (mb_strlen($this->container['encryptionMethod']) > 12)) {
                $invalidProperties[] = "invalid value for 'encryptionMethod', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['encryptionMethod']) && (mb_strlen($this->container['encryptionMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'encryptionMethod', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 12)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['systemIds'] === null) {
            $invalidProperties[] = "'systemIds' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 2048)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['spekeVersion'] === null) {
            $invalidProperties[] = "'spekeVersion' can't be null";
        }
            $allowedValues = $this->getSpekeVersionAllowableValues();
                if (!is_null($this->container['spekeVersion']) && !in_array($this->container['spekeVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spekeVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['requestMode'] === null) {
            $invalidProperties[] = "'requestMode' can't be null";
        }
            $allowedValues = $this->getRequestModeAllowableValues();
                if (!is_null($this->container['requestMode']) && !in_array($this->container['requestMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'requestMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) > 512)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['urn']) && (mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
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
    * Gets keyRotationIntervalSeconds
    *  密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    *
    * @return int|null
    */
    public function getKeyRotationIntervalSeconds()
    {
        return $this->container['keyRotationIntervalSeconds'];
    }

    /**
    * Sets keyRotationIntervalSeconds
    *
    * @param int|null $keyRotationIntervalSeconds 密钥缓存时间。如果密钥不变，默认缓存七天。  请注意：目前为保留字段，不支持配置。
    *
    * @return $this
    */
    public function setKeyRotationIntervalSeconds($keyRotationIntervalSeconds)
    {
        $this->container['keyRotationIntervalSeconds'] = $keyRotationIntervalSeconds;
        return $this;
    }

    /**
    * Gets encryptionMethod
    *  加密方式。  请注意：目前为保留字段，不支持配置。
    *
    * @return string|null
    */
    public function getEncryptionMethod()
    {
        return $this->container['encryptionMethod'];
    }

    /**
    * Sets encryptionMethod
    *
    * @param string|null $encryptionMethod 加密方式。  请注意：目前为保留字段，不支持配置。
    *
    * @return $this
    */
    public function setEncryptionMethod($encryptionMethod)
    {
        $this->container['encryptionMethod'] = $encryptionMethod;
        return $this;
    }

    /**
    * Gets level
    *  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets resourceId
    *  客户生成的DRM内容ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 客户生成的DRM内容ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets systemIds
    *  system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    *
    * @return string[]
    */
    public function getSystemIds()
    {
        return $this->container['systemIds'];
    }

    /**
    * Sets systemIds
    *
    * @param string[] $systemIds system_id枚举值。  取值如下： * HLS：FairPlay * DASH：Widevine、PlayReady * MSS：PlayReady
    *
    * @return $this
    */
    public function setSystemIds($systemIds)
    {
        $this->container['systemIds'] = $systemIds;
        return $this;
    }

    /**
    * Gets url
    *  获取密钥的DRM地址
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 获取密钥的DRM地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets spekeVersion
    *  drm speke 版本号 当前只支持1.0
    *
    * @return string
    */
    public function getSpekeVersion()
    {
        return $this->container['spekeVersion'];
    }

    /**
    * Sets spekeVersion
    *
    * @param string $spekeVersion drm speke 版本号 当前只支持1.0
    *
    * @return $this
    */
    public function setSpekeVersion($spekeVersion)
    {
        $this->container['spekeVersion'] = $spekeVersion;
        return $this;
    }

    /**
    * Gets requestMode
    *  请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    *
    * @return string
    */
    public function getRequestMode()
    {
        return $this->container['requestMode'];
    }

    /**
    * Sets requestMode
    *
    * @param string $requestMode 请求模式。  取值如下： * direct_http：HTTP(S)直接访问DRM。 * functiongraph_proxy：FunctionGraph代理访问DRM。
    *
    * @return $this
    */
    public function setRequestMode($requestMode)
    {
        $this->container['requestMode'] = $requestMode;
        return $this;
    }

    /**
    * Gets httpHeaders
    *  需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\HttpHeader[]|null
    */
    public function getHttpHeaders()
    {
        return $this->container['httpHeaders'];
    }

    /**
    * Sets httpHeaders
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\HttpHeader[]|null $httpHeaders 需要添加在drm请求头中的鉴权信息。最多支持配置5个。  仅direct_http请求模式支持配置http_headers。
    *
    * @return $this
    */
    public function setHttpHeaders($httpHeaders)
    {
        $this->container['httpHeaders'] = $httpHeaders;
        return $this;
    }

    /**
    * Gets urn
    *  functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn functiongraph_proxy请求模式需要提供functiongraph的urn。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
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

