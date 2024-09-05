<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAuthRandomResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAuthRandomResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * random  鉴权随机数
    * subject  会议主题
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * webinar  是否为网络研讨会
    * needPassword  是否需要密码
    * supportApplets  是否支持小程序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'random' => 'string',
            'subject' => 'string',
            'confMode' => 'string',
            'webinar' => 'bool',
            'needPassword' => 'bool',
            'supportApplets' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * random  鉴权随机数
    * subject  会议主题
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * webinar  是否为网络研讨会
    * needPassword  是否需要密码
    * supportApplets  是否支持小程序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'random' => null,
        'subject' => null,
        'confMode' => null,
        'webinar' => null,
        'needPassword' => null,
        'supportApplets' => null
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
    * random  鉴权随机数
    * subject  会议主题
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * webinar  是否为网络研讨会
    * needPassword  是否需要密码
    * supportApplets  是否支持小程序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'random' => 'random',
            'subject' => 'subject',
            'confMode' => 'conf_mode',
            'webinar' => 'webinar',
            'needPassword' => 'need_password',
            'supportApplets' => 'support_applets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * random  鉴权随机数
    * subject  会议主题
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * webinar  是否为网络研讨会
    * needPassword  是否需要密码
    * supportApplets  是否支持小程序
    *
    * @var string[]
    */
    protected static $setters = [
            'random' => 'setRandom',
            'subject' => 'setSubject',
            'confMode' => 'setConfMode',
            'webinar' => 'setWebinar',
            'needPassword' => 'setNeedPassword',
            'supportApplets' => 'setSupportApplets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * random  鉴权随机数
    * subject  会议主题
    * confMode  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    * webinar  是否为网络研讨会
    * needPassword  是否需要密码
    * supportApplets  是否支持小程序
    *
    * @var string[]
    */
    protected static $getters = [
            'random' => 'getRandom',
            'subject' => 'getSubject',
            'confMode' => 'getConfMode',
            'webinar' => 'getWebinar',
            'needPassword' => 'getNeedPassword',
            'supportApplets' => 'getSupportApplets'
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
    const CONF_MODE_COMMON = 'COMMON';
    const CONF_MODE_RTC = 'RTC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfModeAllowableValues()
    {
        return [
            self::CONF_MODE_COMMON,
            self::CONF_MODE_RTC,
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
        $this->container['random'] = isset($data['random']) ? $data['random'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['confMode'] = isset($data['confMode']) ? $data['confMode'] : null;
        $this->container['webinar'] = isset($data['webinar']) ? $data['webinar'] : null;
        $this->container['needPassword'] = isset($data['needPassword']) ? $data['needPassword'] : null;
        $this->container['supportApplets'] = isset($data['supportApplets']) ? $data['supportApplets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['random']) && (mb_strlen($this->container['random']) > 15)) {
                $invalidProperties[] = "invalid value for 'random', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['random']) && (mb_strlen($this->container['random']) < 0)) {
                $invalidProperties[] = "invalid value for 'random', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 512)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
                $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getConfModeAllowableValues();
                if (!is_null($this->container['confMode']) && !in_array($this->container['confMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'confMode', must be one of '%s'",
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
    * Gets random
    *  鉴权随机数
    *
    * @return string|null
    */
    public function getRandom()
    {
        return $this->container['random'];
    }

    /**
    * Sets random
    *
    * @param string|null $random 鉴权随机数
    *
    * @return $this
    */
    public function setRandom($random)
    {
        $this->container['random'] = $random;
        return $this;
    }

    /**
    * Gets subject
    *  会议主题
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 会议主题
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets confMode
    *  会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    *
    * @return string|null
    */
    public function getConfMode()
    {
        return $this->container['confMode'];
    }

    /**
    * Sets confMode
    *
    * @param string|null $confMode 会议类型模型。 * COMMON：MCU会议 * RTC：MMR会议
    *
    * @return $this
    */
    public function setConfMode($confMode)
    {
        $this->container['confMode'] = $confMode;
        return $this;
    }

    /**
    * Gets webinar
    *  是否为网络研讨会
    *
    * @return bool|null
    */
    public function getWebinar()
    {
        return $this->container['webinar'];
    }

    /**
    * Sets webinar
    *
    * @param bool|null $webinar 是否为网络研讨会
    *
    * @return $this
    */
    public function setWebinar($webinar)
    {
        $this->container['webinar'] = $webinar;
        return $this;
    }

    /**
    * Gets needPassword
    *  是否需要密码
    *
    * @return bool|null
    */
    public function getNeedPassword()
    {
        return $this->container['needPassword'];
    }

    /**
    * Sets needPassword
    *
    * @param bool|null $needPassword 是否需要密码
    *
    * @return $this
    */
    public function setNeedPassword($needPassword)
    {
        $this->container['needPassword'] = $needPassword;
        return $this;
    }

    /**
    * Gets supportApplets
    *  是否支持小程序
    *
    * @return bool|null
    */
    public function getSupportApplets()
    {
        return $this->container['supportApplets'];
    }

    /**
    * Sets supportApplets
    *
    * @param bool|null $supportApplets 是否支持小程序
    *
    * @return $this
    */
    public function setSupportApplets($supportApplets)
    {
        $this->container['supportApplets'] = $supportApplets;
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

