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
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天
    * encryptionMethod  加密方式
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * drmContentId  客户生成的DRM内容ID
    * systemIds  system_id枚举值
    * authInfo  增加到请求消息体header中的鉴权信息
    * kmUrl  获取密钥的DRM地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyRotationIntervalSeconds' => 'int',
            'encryptionMethod' => 'string',
            'level' => 'string',
            'drmContentId' => 'string',
            'systemIds' => 'string[]',
            'authInfo' => 'string',
            'kmUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天
    * encryptionMethod  加密方式
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * drmContentId  客户生成的DRM内容ID
    * systemIds  system_id枚举值
    * authInfo  增加到请求消息体header中的鉴权信息
    * kmUrl  获取密钥的DRM地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyRotationIntervalSeconds' => 'int32',
        'encryptionMethod' => null,
        'level' => null,
        'drmContentId' => null,
        'systemIds' => null,
        'authInfo' => null,
        'kmUrl' => null
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
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天
    * encryptionMethod  加密方式
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * drmContentId  客户生成的DRM内容ID
    * systemIds  system_id枚举值
    * authInfo  增加到请求消息体header中的鉴权信息
    * kmUrl  获取密钥的DRM地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyRotationIntervalSeconds' => 'key_rotation_interval_seconds',
            'encryptionMethod' => 'encryption_method',
            'level' => 'level',
            'drmContentId' => 'drm_content_id',
            'systemIds' => 'system_ids',
            'authInfo' => 'auth_info',
            'kmUrl' => 'km_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天
    * encryptionMethod  加密方式
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * drmContentId  客户生成的DRM内容ID
    * systemIds  system_id枚举值
    * authInfo  增加到请求消息体header中的鉴权信息
    * kmUrl  获取密钥的DRM地址
    *
    * @var string[]
    */
    protected static $setters = [
            'keyRotationIntervalSeconds' => 'setKeyRotationIntervalSeconds',
            'encryptionMethod' => 'setEncryptionMethod',
            'level' => 'setLevel',
            'drmContentId' => 'setDrmContentId',
            'systemIds' => 'setSystemIds',
            'authInfo' => 'setAuthInfo',
            'kmUrl' => 'setKmUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyRotationIntervalSeconds  密钥缓存时间。如果密钥不变，默认缓存七天
    * encryptionMethod  加密方式
    * level  取值如下： - content：一个频道对应一个密钥 - profile：一个码率对应一个密钥  默认值：content
    * drmContentId  客户生成的DRM内容ID
    * systemIds  system_id枚举值
    * authInfo  增加到请求消息体header中的鉴权信息
    * kmUrl  获取密钥的DRM地址
    *
    * @var string[]
    */
    protected static $getters = [
            'keyRotationIntervalSeconds' => 'getKeyRotationIntervalSeconds',
            'encryptionMethod' => 'getEncryptionMethod',
            'level' => 'getLevel',
            'drmContentId' => 'getDrmContentId',
            'systemIds' => 'getSystemIds',
            'authInfo' => 'getAuthInfo',
            'kmUrl' => 'getKmUrl'
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
        $this->container['drmContentId'] = isset($data['drmContentId']) ? $data['drmContentId'] : null;
        $this->container['systemIds'] = isset($data['systemIds']) ? $data['systemIds'] : null;
        $this->container['authInfo'] = isset($data['authInfo']) ? $data['authInfo'] : null;
        $this->container['kmUrl'] = isset($data['kmUrl']) ? $data['kmUrl'] : null;
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
        if ($this->container['drmContentId'] === null) {
            $invalidProperties[] = "'drmContentId' can't be null";
        }
            if ((mb_strlen($this->container['drmContentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'drmContentId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['drmContentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'drmContentId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['systemIds'] === null) {
            $invalidProperties[] = "'systemIds' can't be null";
        }
        if ($this->container['authInfo'] === null) {
            $invalidProperties[] = "'authInfo' can't be null";
        }
            if ((mb_strlen($this->container['authInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'authInfo', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['authInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'authInfo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['kmUrl'] === null) {
            $invalidProperties[] = "'kmUrl' can't be null";
        }
            if ((mb_strlen($this->container['kmUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'kmUrl', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['kmUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'kmUrl', the character length must be bigger than or equal to 1.";
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
    *  密钥缓存时间。如果密钥不变，默认缓存七天
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
    * @param int|null $keyRotationIntervalSeconds 密钥缓存时间。如果密钥不变，默认缓存七天
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
    *  加密方式
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
    * @param string|null $encryptionMethod 加密方式
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
    * Gets drmContentId
    *  客户生成的DRM内容ID
    *
    * @return string
    */
    public function getDrmContentId()
    {
        return $this->container['drmContentId'];
    }

    /**
    * Sets drmContentId
    *
    * @param string $drmContentId 客户生成的DRM内容ID
    *
    * @return $this
    */
    public function setDrmContentId($drmContentId)
    {
        $this->container['drmContentId'] = $drmContentId;
        return $this;
    }

    /**
    * Gets systemIds
    *  system_id枚举值
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
    * @param string[] $systemIds system_id枚举值
    *
    * @return $this
    */
    public function setSystemIds($systemIds)
    {
        $this->container['systemIds'] = $systemIds;
        return $this;
    }

    /**
    * Gets authInfo
    *  增加到请求消息体header中的鉴权信息
    *
    * @return string
    */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
    * Sets authInfo
    *
    * @param string $authInfo 增加到请求消息体header中的鉴权信息
    *
    * @return $this
    */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;
        return $this;
    }

    /**
    * Gets kmUrl
    *  获取密钥的DRM地址
    *
    * @return string
    */
    public function getKmUrl()
    {
        return $this->container['kmUrl'];
    }

    /**
    * Sets kmUrl
    *
    * @param string $kmUrl 获取密钥的DRM地址
    *
    * @return $this
    */
    public function setKmUrl($kmUrl)
    {
        $this->container['kmUrl'] = $kmUrl;
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

