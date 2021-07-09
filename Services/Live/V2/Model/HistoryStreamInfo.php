<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HistoryStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HistoryStreamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    * app  应用名称。
    * stream  流名。
    * type  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式。
    * clientIp  主播ip。
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'type' => 'int',
            'videoCodec' => 'string',
            'audioCodec' => 'string',
            'clientIp' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    * app  应用名称。
    * stream  流名。
    * type  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式。
    * clientIp  主播ip。
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'app' => null,
        'stream' => null,
        'type' => null,
        'videoCodec' => null,
        'audioCodec' => null,
        'clientIp' => null,
        'startTime' => null,
        'endTime' => null
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
    * domain  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    * app  应用名称。
    * stream  流名。
    * type  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式。
    * clientIp  主播ip。
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'app' => 'app',
            'stream' => 'stream',
            'type' => 'type',
            'videoCodec' => 'video_codec',
            'audioCodec' => 'audio_codec',
            'clientIp' => 'client_ip',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    * app  应用名称。
    * stream  流名。
    * type  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式。
    * clientIp  主播ip。
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'type' => 'setType',
            'videoCodec' => 'setVideoCodec',
            'audioCodec' => 'setAudioCodec',
            'clientIp' => 'setClientIp',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    * app  应用名称。
    * stream  流名。
    * type  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    * videoCodec  视频编码格式。
    * audioCodec  音频编码格式。
    * clientIp  主播ip。
    * startTime  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    * endTime  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'type' => 'getType',
            'videoCodec' => 'getVideoCodec',
            'audioCodec' => 'getAudioCodec',
            'clientIp' => 'getClientIp',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['videoCodec'] = isset($data['videoCodec']) ? $data['videoCodec'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 64)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 256)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] > 1)) {
                $invalidProperties[] = "invalid value for 'type', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['type']) && ($this->container['type'] < 0)) {
                $invalidProperties[] = "invalid value for 'type', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) > 64)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientIp']) && (mb_strlen($this->container['clientIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientIp']) && (mb_strlen($this->container['clientIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
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
    *  推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 推流域名。  - type为0表主播推流域名。  - type为1表示第三方推流域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets app
    *  应用名称。
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
    * @param string|null $app 应用名称。
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
    *  流名。
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
    * @param string|null $stream 流名。
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets type
    *  推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 推流类型，取值如下：  - 0：表示主播推流  - 1：表示第三方推流
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets videoCodec
    *  视频编码格式。
    *
    * @return string|null
    */
    public function getVideoCodec()
    {
        return $this->container['videoCodec'];
    }

    /**
    * Sets videoCodec
    *
    * @param string|null $videoCodec 视频编码格式。
    *
    * @return $this
    */
    public function setVideoCodec($videoCodec)
    {
        $this->container['videoCodec'] = $videoCodec;
        return $this;
    }

    /**
    * Gets audioCodec
    *  音频编码格式。
    *
    * @return string|null
    */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
    * Sets audioCodec
    *
    * @param string|null $audioCodec 音频编码格式。
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets clientIp
    *  主播ip。
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp 主播ip。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets startTime
    *  采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 采样开始时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
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
    *  采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 采样结束时间。日期格式按照ISO8601表示法，并使用UTC时间。 格式为：YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

