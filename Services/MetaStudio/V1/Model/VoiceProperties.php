<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VoiceProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VoiceProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobTag  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    * sex  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    * language  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobTag' => 'string',
            'sex' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobTag  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    * sex  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    * language  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobTag' => null,
        'sex' => null,
        'language' => null
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
    * jobTag  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    * sex  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    * language  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobTag' => 'job_tag',
            'sex' => 'sex',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobTag  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    * sex  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    * language  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @var string[]
    */
    protected static $setters = [
            'jobTag' => 'setJobTag',
            'sex' => 'setSex',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobTag  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    * sex  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    * language  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @var string[]
    */
    protected static $getters = [
            'jobTag' => 'getJobTag',
            'sex' => 'getSex',
            'language' => 'getLanguage'
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
    const JOB_TAG_ECOMMERCE = 'ECOMMERCE';
    const JOB_TAG_NEWS = 'NEWS';
    const JOB_TAG_MARKETING = 'MARKETING';
    const SEX_FEMALE = 'FEMALE';
    const SEX_MALE = 'MALE';
    const LANGUAGE_CN = 'CN';
    const LANGUAGE_EN = 'EN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTagAllowableValues()
    {
        return [
            self::JOB_TAG_ECOMMERCE,
            self::JOB_TAG_NEWS,
            self::JOB_TAG_MARKETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_FEMALE,
            self::SEX_MALE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_CN,
            self::LANGUAGE_EN,
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
        $this->container['jobTag'] = isset($data['jobTag']) ? $data['jobTag'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobTag'] === null) {
            $invalidProperties[] = "'jobTag' can't be null";
        }
            $allowedValues = $this->getJobTagAllowableValues();
                if (!is_null($this->container['jobTag']) && !in_array($this->container['jobTag'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobTag', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sex'] === null) {
            $invalidProperties[] = "'sex' can't be null";
        }
            $allowedValues = $this->getSexAllowableValues();
                if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets jobTag
    *  任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    *
    * @return string
    */
    public function getJobTag()
    {
        return $this->container['jobTag'];
    }

    /**
    * Sets jobTag
    *
    * @param string $jobTag 任务标签，为Flexus版声音的配置。   * ECOMMERCE: 电商   * NEWS: 新闻   * MARKETING: 营销
    *
    * @return $this
    */
    public function setJobTag($jobTag)
    {
        $this->container['jobTag'] = $jobTag;
        return $this;
    }

    /**
    * Gets sex
    *  语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    *
    * @return string
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string $sex 语音性别，是男性声音还是女性声音，为Flexus版声音的配置。 * FEMALE: 女性 * MALE: 男性
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets language
    *  训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
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
    * @param string $language 训练语言，当前仅支持中文，为Flexus版声音的配置。 * CN: 中文 * EN: 英文
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

