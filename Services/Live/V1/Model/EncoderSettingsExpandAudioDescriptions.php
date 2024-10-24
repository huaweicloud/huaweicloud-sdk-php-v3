<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncoderSettingsExpandAudioDescriptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncoderSettingsExpand_audio_descriptions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    * audioSelectorName  音频选择器名称
    * languageCodeControl  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    * languageCode  语言代码，输入2或3个小写字母。
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'audioSelectorName' => 'string',
            'languageCodeControl' => 'string',
            'languageCode' => 'string',
            'streamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    * audioSelectorName  音频选择器名称
    * languageCodeControl  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    * languageCode  语言代码，输入2或3个小写字母。
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'audioSelectorName' => null,
        'languageCodeControl' => null,
        'languageCode' => null,
        'streamName' => null
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
    * name  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    * audioSelectorName  音频选择器名称
    * languageCodeControl  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    * languageCode  语言代码，输入2或3个小写字母。
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'audioSelectorName' => 'audio_selector_name',
            'languageCodeControl' => 'language_code_control',
            'languageCode' => 'language_code',
            'streamName' => 'stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    * audioSelectorName  音频选择器名称
    * languageCodeControl  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    * languageCode  语言代码，输入2或3个小写字母。
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'audioSelectorName' => 'setAudioSelectorName',
            'languageCodeControl' => 'setLanguageCodeControl',
            'languageCode' => 'setLanguageCode',
            'streamName' => 'setStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    * audioSelectorName  音频选择器名称
    * languageCodeControl  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    * languageCode  语言代码，输入2或3个小写字母。
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'audioSelectorName' => 'getAudioSelectorName',
            'languageCodeControl' => 'getLanguageCodeControl',
            'languageCode' => 'getLanguageCode',
            'streamName' => 'getStreamName'
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
    const LANGUAGE_CODE_CONTROL_FOLLOW_INPUT = 'FOLLOW_INPUT';
    const LANGUAGE_CODE_CONTROL_USE_CONFIGURED = 'USE_CONFIGURED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageCodeControlAllowableValues()
    {
        return [
            self::LANGUAGE_CODE_CONTROL_FOLLOW_INPUT,
            self::LANGUAGE_CODE_CONTROL_USE_CONFIGURED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['audioSelectorName'] = isset($data['audioSelectorName']) ? $data['audioSelectorName'] : null;
        $this->container['languageCodeControl'] = isset($data['languageCodeControl']) ? $data['languageCodeControl'] : null;
        $this->container['languageCode'] = isset($data['languageCode']) ? $data['languageCode'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['audioSelectorName'] === null) {
            $invalidProperties[] = "'audioSelectorName' can't be null";
        }
            if ((mb_strlen($this->container['audioSelectorName']) > 255)) {
                $invalidProperties[] = "invalid value for 'audioSelectorName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['audioSelectorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioSelectorName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getLanguageCodeControlAllowableValues();
                if (!is_null($this->container['languageCodeControl']) && !in_array($this->container['languageCodeControl'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'languageCodeControl', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['languageCode']) && (mb_strlen($this->container['languageCode']) > 3)) {
                $invalidProperties[] = "invalid value for 'languageCode', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['languageCode']) && (mb_strlen($this->container['languageCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'languageCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 255)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 0)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 音频输出配置的名称。仅支持大小写字母，数字，中划线（-），下划线（_）。  同一个频道不同的音频输出配置名称，不允许重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets audioSelectorName
    *  音频选择器名称
    *
    * @return string
    */
    public function getAudioSelectorName()
    {
        return $this->container['audioSelectorName'];
    }

    /**
    * Sets audioSelectorName
    *
    * @param string $audioSelectorName 音频选择器名称
    *
    * @return $this
    */
    public function setAudioSelectorName($audioSelectorName)
    {
        $this->container['audioSelectorName'] = $audioSelectorName;
        return $this;
    }

    /**
    * Gets languageCodeControl
    *  语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    *
    * @return string|null
    */
    public function getLanguageCodeControl()
    {
        return $this->container['languageCodeControl'];
    }

    /**
    * Sets languageCodeControl
    *
    * @param string|null $languageCodeControl 语言代码控制。这里的设置不会修改音频实际的语言，只会修改音频对外展示的语言。  包含如下选项： - FOLLOW_INPUT：如果所选音频选择器对应的输出音频有语言，则与其保持一致，否则会以这里配置的语言代码和流名称进行兜底。推荐当前选项，为默认值。 - USE_CONFIGURED：用户根据实际情况自定义输出音频的语言和流名称。
    *
    * @return $this
    */
    public function setLanguageCodeControl($languageCodeControl)
    {
        $this->container['languageCodeControl'] = $languageCodeControl;
        return $this;
    }

    /**
    * Gets languageCode
    *  语言代码，输入2或3个小写字母。
    *
    * @return string|null
    */
    public function getLanguageCode()
    {
        return $this->container['languageCode'];
    }

    /**
    * Sets languageCode
    *
    * @param string|null $languageCode 语言代码，输入2或3个小写字母。
    *
    * @return $this
    */
    public function setLanguageCode($languageCode)
    {
        $this->container['languageCode'] = $languageCode;
        return $this;
    }

    /**
    * Gets streamName
    *  流名称
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 流名称
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
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

