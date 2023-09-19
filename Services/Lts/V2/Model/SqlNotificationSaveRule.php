<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlNotificationSaveRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlNotificationSaveRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  首选项对应的语言
    * timezone  首选项对应的时区信息
    * userName  用户名
    * topics  主题信息
    * templateName  消息模板名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'timezone' => 'string',
            'userName' => 'string',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]',
            'templateName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  首选项对应的语言
    * timezone  首选项对应的时区信息
    * userName  用户名
    * topics  主题信息
    * templateName  消息模板名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'timezone' => null,
        'userName' => null,
        'topics' => null,
        'templateName' => null
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
    * language  首选项对应的语言
    * timezone  首选项对应的时区信息
    * userName  用户名
    * topics  主题信息
    * templateName  消息模板名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'timezone' => 'timezone',
            'userName' => 'user_name',
            'topics' => 'topics',
            'templateName' => 'template_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  首选项对应的语言
    * timezone  首选项对应的时区信息
    * userName  用户名
    * topics  主题信息
    * templateName  消息模板名称
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'timezone' => 'setTimezone',
            'userName' => 'setUserName',
            'topics' => 'setTopics',
            'templateName' => 'setTemplateName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  首选项对应的语言
    * timezone  首选项对应的时区信息
    * userName  用户名
    * topics  主题信息
    * templateName  消息模板名称
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'timezone' => 'getTimezone',
            'userName' => 'getUserName',
            'topics' => 'getTopics',
            'templateName' => 'getTemplateName'
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
    const LANGUAGE_ZH_CN = 'zh-cn';
    const LANGUAGE_EN_US = 'en-us';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_EN_US,
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['language']) > 10)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['language']) < 0)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) < 0)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['topics'] === null) {
            $invalidProperties[] = "'topics' can't be null";
        }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
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
    * Gets language
    *  首选项对应的语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 首选项对应的语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets timezone
    *  首选项对应的时区信息
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 首选项对应的时区信息
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets topics
    *  主题信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Topics[]
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Topics[] $topics 主题信息
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets templateName
    *  消息模板名称
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 消息模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
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

