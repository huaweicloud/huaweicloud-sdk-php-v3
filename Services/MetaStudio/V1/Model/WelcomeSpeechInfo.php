<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WelcomeSpeechInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WelcomeSpeechInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * welcomeSpeechId  欢迎词ID。
    * welcomeSpeech  欢迎词。
    * enableWelcomeSpeech  欢迎词功能开关。
    * language  language
    * robotId  应用ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'welcomeSpeechId' => 'string',
            'welcomeSpeech' => 'string',
            'enableWelcomeSpeech' => 'bool',
            'language' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum',
            'robotId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * welcomeSpeechId  欢迎词ID。
    * welcomeSpeech  欢迎词。
    * enableWelcomeSpeech  欢迎词功能开关。
    * language  language
    * robotId  应用ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'welcomeSpeechId' => null,
        'welcomeSpeech' => null,
        'enableWelcomeSpeech' => null,
        'language' => null,
        'robotId' => null,
        'createTime' => null,
        'updateTime' => null
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
    * welcomeSpeechId  欢迎词ID。
    * welcomeSpeech  欢迎词。
    * enableWelcomeSpeech  欢迎词功能开关。
    * language  language
    * robotId  应用ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'welcomeSpeechId' => 'welcome_speech_id',
            'welcomeSpeech' => 'welcome_speech',
            'enableWelcomeSpeech' => 'enable_welcome_speech',
            'language' => 'language',
            'robotId' => 'robot_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * welcomeSpeechId  欢迎词ID。
    * welcomeSpeech  欢迎词。
    * enableWelcomeSpeech  欢迎词功能开关。
    * language  language
    * robotId  应用ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'welcomeSpeechId' => 'setWelcomeSpeechId',
            'welcomeSpeech' => 'setWelcomeSpeech',
            'enableWelcomeSpeech' => 'setEnableWelcomeSpeech',
            'language' => 'setLanguage',
            'robotId' => 'setRobotId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * welcomeSpeechId  欢迎词ID。
    * welcomeSpeech  欢迎词。
    * enableWelcomeSpeech  欢迎词功能开关。
    * language  language
    * robotId  应用ID。
    * createTime  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'welcomeSpeechId' => 'getWelcomeSpeechId',
            'welcomeSpeech' => 'getWelcomeSpeech',
            'enableWelcomeSpeech' => 'getEnableWelcomeSpeech',
            'language' => 'getLanguage',
            'robotId' => 'getRobotId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['welcomeSpeechId'] = isset($data['welcomeSpeechId']) ? $data['welcomeSpeechId'] : null;
        $this->container['welcomeSpeech'] = isset($data['welcomeSpeech']) ? $data['welcomeSpeech'] : null;
        $this->container['enableWelcomeSpeech'] = isset($data['enableWelcomeSpeech']) ? $data['enableWelcomeSpeech'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['robotId'] = isset($data['robotId']) ? $data['robotId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['welcomeSpeechId']) && (mb_strlen($this->container['welcomeSpeechId']) > 64)) {
                $invalidProperties[] = "invalid value for 'welcomeSpeechId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['welcomeSpeechId']) && (mb_strlen($this->container['welcomeSpeechId']) < 1)) {
                $invalidProperties[] = "invalid value for 'welcomeSpeechId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['welcomeSpeech']) && (mb_strlen($this->container['welcomeSpeech']) > 512)) {
                $invalidProperties[] = "invalid value for 'welcomeSpeech', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['welcomeSpeech']) && (mb_strlen($this->container['welcomeSpeech']) < 1)) {
                $invalidProperties[] = "invalid value for 'welcomeSpeech', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) > 64)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['robotId']) && (mb_strlen($this->container['robotId']) < 1)) {
                $invalidProperties[] = "invalid value for 'robotId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets welcomeSpeechId
    *  欢迎词ID。
    *
    * @return string|null
    */
    public function getWelcomeSpeechId()
    {
        return $this->container['welcomeSpeechId'];
    }

    /**
    * Sets welcomeSpeechId
    *
    * @param string|null $welcomeSpeechId 欢迎词ID。
    *
    * @return $this
    */
    public function setWelcomeSpeechId($welcomeSpeechId)
    {
        $this->container['welcomeSpeechId'] = $welcomeSpeechId;
        return $this;
    }

    /**
    * Gets welcomeSpeech
    *  欢迎词。
    *
    * @return string|null
    */
    public function getWelcomeSpeech()
    {
        return $this->container['welcomeSpeech'];
    }

    /**
    * Sets welcomeSpeech
    *
    * @param string|null $welcomeSpeech 欢迎词。
    *
    * @return $this
    */
    public function setWelcomeSpeech($welcomeSpeech)
    {
        $this->container['welcomeSpeech'] = $welcomeSpeech;
        return $this;
    }

    /**
    * Gets enableWelcomeSpeech
    *  欢迎词功能开关。
    *
    * @return bool|null
    */
    public function getEnableWelcomeSpeech()
    {
        return $this->container['enableWelcomeSpeech'];
    }

    /**
    * Sets enableWelcomeSpeech
    *
    * @param bool|null $enableWelcomeSpeech 欢迎词功能开关。
    *
    * @return $this
    */
    public function setEnableWelcomeSpeech($enableWelcomeSpeech)
    {
        $this->container['enableWelcomeSpeech'] = $enableWelcomeSpeech;
        return $this;
    }

    /**
    * Gets language
    *  language
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LanguageEnum|null $language language
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets robotId
    *  应用ID。
    *
    * @return string|null
    */
    public function getRobotId()
    {
        return $this->container['robotId'];
    }

    /**
    * Sets robotId
    *
    * @param string|null $robotId 应用ID。
    *
    * @return $this
    */
    public function setRobotId($robotId)
    {
        $this->container['robotId'] = $robotId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
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
    * @param string|null $createTime 创建时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

