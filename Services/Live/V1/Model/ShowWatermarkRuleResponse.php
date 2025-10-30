<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWatermarkRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWatermarkRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    * templateId  水印模板ID，只包含数字字母中划线，创建模板时生成
    * domain  域名
    * app  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
    * stream  流名OTT场景下，可以不填
    * location  location
    * channelId  OTT场景使用，填对应频道的频ID
    * transcodeTemplateName  OTT场景时，填频道对应的转码模板名称
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'templateId' => 'string',
            'domain' => 'string',
            'app' => 'string',
            'stream' => 'string',
            'location' => '\HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation',
            'channelId' => 'string',
            'transcodeTemplateName' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    * templateId  水印模板ID，只包含数字字母中划线，创建模板时生成
    * domain  域名
    * app  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
    * stream  流名OTT场景下，可以不填
    * location  location
    * channelId  OTT场景使用，填对应频道的频ID
    * transcodeTemplateName  OTT场景时，填频道对应的转码模板名称
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'templateId' => null,
        'domain' => null,
        'app' => null,
        'stream' => null,
        'location' => null,
        'channelId' => null,
        'transcodeTemplateName' => null,
        'xRequestId' => null
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
    * ruleName  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    * templateId  水印模板ID，只包含数字字母中划线，创建模板时生成
    * domain  域名
    * app  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
    * stream  流名OTT场景下，可以不填
    * location  location
    * channelId  OTT场景使用，填对应频道的频ID
    * transcodeTemplateName  OTT场景时，填频道对应的转码模板名称
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'templateId' => 'template_id',
            'domain' => 'domain',
            'app' => 'app',
            'stream' => 'stream',
            'location' => 'location',
            'channelId' => 'channel_id',
            'transcodeTemplateName' => 'transcode_template_name',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    * templateId  水印模板ID，只包含数字字母中划线，创建模板时生成
    * domain  域名
    * app  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
    * stream  流名OTT场景下，可以不填
    * location  location
    * channelId  OTT场景使用，填对应频道的频ID
    * transcodeTemplateName  OTT场景时，填频道对应的转码模板名称
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'templateId' => 'setTemplateId',
            'domain' => 'setDomain',
            'app' => 'setApp',
            'stream' => 'setStream',
            'location' => 'setLocation',
            'channelId' => 'setChannelId',
            'transcodeTemplateName' => 'setTranscodeTemplateName',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    * templateId  水印模板ID，只包含数字字母中划线，创建模板时生成
    * domain  域名
    * app  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
    * stream  流名OTT场景下，可以不填
    * location  location
    * channelId  OTT场景使用，填对应频道的频ID
    * transcodeTemplateName  OTT场景时，填频道对应的转码模板名称
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'templateId' => 'getTemplateId',
            'domain' => 'getDomain',
            'app' => 'getApp',
            'stream' => 'getStream',
            'location' => 'getLocation',
            'channelId' => 'getChannelId',
            'transcodeTemplateName' => 'getTranscodeTemplateName',
            'xRequestId' => 'getXRequestId'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['stream'] = isset($data['stream']) ? $data['stream'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['transcodeTemplateName'] = isset($data['transcodeTemplateName']) ? $data['transcodeTemplateName'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 255)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 255)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
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
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) > 255)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['stream']) && (mb_strlen($this->container['stream']) < 1)) {
                $invalidProperties[] = "invalid value for 'stream', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) > 64)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['channelId']) && (mb_strlen($this->container['channelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'channelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transcodeTemplateName']) && (mb_strlen($this->container['transcodeTemplateName']) > 255)) {
                $invalidProperties[] = "invalid value for 'transcodeTemplateName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['transcodeTemplateName']) && (mb_strlen($this->container['transcodeTemplateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'transcodeTemplateName', the character length must be bigger than or equal to 1.";
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
    * Gets ruleName
    *  水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 水印规则名称，如果不填会使用默认名称。默认名称的构造规则为“域名:应用名:流名”，示例“example.com:live:stream”。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets templateId
    *  水印模板ID，只包含数字字母中划线，创建模板时生成
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 水印模板ID，只包含数字字母中划线，创建模板时生成
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets domain
    *  域名
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
    * @param string|null $domain 域名
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
    *  APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
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
    * @param string|null $app APP名。须知：云直播场景是可选配置，媒体直播场景为必选配置。
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
    *  流名OTT场景下，可以不填
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
    * @param string|null $stream 流名OTT场景下，可以不填
    *
    * @return $this
    */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;
        return $this;
    }

    /**
    * Gets location
    *  location
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation|null $location location
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets channelId
    *  OTT场景使用，填对应频道的频ID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId OTT场景使用，填对应频道的频ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets transcodeTemplateName
    *  OTT场景时，填频道对应的转码模板名称
    *
    * @return string|null
    */
    public function getTranscodeTemplateName()
    {
        return $this->container['transcodeTemplateName'];
    }

    /**
    * Sets transcodeTemplateName
    *
    * @param string|null $transcodeTemplateName OTT场景时，填频道对应的转码模板名称
    *
    * @return $this
    */
    public function setTranscodeTemplateName($transcodeTemplateName)
    {
        $this->container['transcodeTemplateName'] = $transcodeTemplateName;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

