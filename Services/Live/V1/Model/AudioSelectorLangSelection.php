<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioSelectorLangSelection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioSelectorLangSelection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * languageCode  语言简称，输入2或3个小写字母的语言代码。
    * languageSelectionPolicy  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'languageCode' => 'string',
            'languageSelectionPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * languageCode  语言简称，输入2或3个小写字母的语言代码。
    * languageSelectionPolicy  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'languageCode' => null,
        'languageSelectionPolicy' => null
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
    * languageCode  语言简称，输入2或3个小写字母的语言代码。
    * languageSelectionPolicy  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'languageCode' => 'language_code',
            'languageSelectionPolicy' => 'language_selection_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * languageCode  语言简称，输入2或3个小写字母的语言代码。
    * languageSelectionPolicy  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @var string[]
    */
    protected static $setters = [
            'languageCode' => 'setLanguageCode',
            'languageSelectionPolicy' => 'setLanguageSelectionPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * languageCode  语言简称，输入2或3个小写字母的语言代码。
    * languageSelectionPolicy  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @var string[]
    */
    protected static $getters = [
            'languageCode' => 'getLanguageCode',
            'languageSelectionPolicy' => 'getLanguageSelectionPolicy'
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
    const LANGUAGE_SELECTION_POLICY_LOOSE = 'LOOSE';
    const LANGUAGE_SELECTION_POLICY_STRICT = 'STRICT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageSelectionPolicyAllowableValues()
    {
        return [
            self::LANGUAGE_SELECTION_POLICY_LOOSE,
            self::LANGUAGE_SELECTION_POLICY_STRICT,
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
        $this->container['languageCode'] = isset($data['languageCode']) ? $data['languageCode'] : null;
        $this->container['languageSelectionPolicy'] = isset($data['languageSelectionPolicy']) ? $data['languageSelectionPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['languageCode'] === null) {
            $invalidProperties[] = "'languageCode' can't be null";
        }
            if ((mb_strlen($this->container['languageCode']) > 3)) {
                $invalidProperties[] = "invalid value for 'languageCode', the character length must be smaller than or equal to 3.";
            }
            if ((mb_strlen($this->container['languageCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'languageCode', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getLanguageSelectionPolicyAllowableValues();
                if (!is_null($this->container['languageSelectionPolicy']) && !in_array($this->container['languageSelectionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'languageSelectionPolicy', must be one of '%s'",
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
    * Gets languageCode
    *  语言简称，输入2或3个小写字母的语言代码。
    *
    * @return string
    */
    public function getLanguageCode()
    {
        return $this->container['languageCode'];
    }

    /**
    * Sets languageCode
    *
    * @param string $languageCode 语言简称，输入2或3个小写字母的语言代码。
    *
    * @return $this
    */
    public function setLanguageCode($languageCode)
    {
        $this->container['languageCode'] = $languageCode;
        return $this;
    }

    /**
    * Gets languageSelectionPolicy
    *  语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @return string|null
    */
    public function getLanguageSelectionPolicy()
    {
        return $this->container['languageSelectionPolicy'];
    }

    /**
    * Sets languageSelectionPolicy
    *
    * @param string|null $languageSelectionPolicy 语言输出策略。  取值如下： - LOOSE：宽松匹配，示例“eng”会优先匹配源流中语言为English的音轨，如果匹配不到，则选择PID最小的音轨。 - STRICT：严格匹配，示例“eng”会严格匹配源流中语言为English的音轨，如果匹配不到，媒体直播服务会自动补齐一个静音分片，当终端使用此音频选择器播放视频时，会静音播放。
    *
    * @return $this
    */
    public function setLanguageSelectionPolicy($languageSelectionPolicy)
    {
        $this->container['languageSelectionPolicy'] = $languageSelectionPolicy;
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

