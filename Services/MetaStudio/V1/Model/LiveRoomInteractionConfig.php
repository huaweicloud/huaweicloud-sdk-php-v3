<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveRoomInteractionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveRoomInteractionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * playType  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    * ignoreCurrentSentence  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'playType' => 'string',
            'ignoreCurrentSentence' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * playType  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    * ignoreCurrentSentence  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'playType' => null,
        'ignoreCurrentSentence' => null
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
    * playType  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    * ignoreCurrentSentence  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'playType' => 'play_type',
            'ignoreCurrentSentence' => 'ignore_current_sentence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * playType  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    * ignoreCurrentSentence  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @var string[]
    */
    protected static $setters = [
            'playType' => 'setPlayType',
            'ignoreCurrentSentence' => 'setIgnoreCurrentSentence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * playType  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    * ignoreCurrentSentence  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @var string[]
    */
    protected static $getters = [
            'playType' => 'getPlayType',
            'ignoreCurrentSentence' => 'getIgnoreCurrentSentence'
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
    const PLAY_TYPE_APPEND = 'APPEND';
    const PLAY_TYPE_INSERT = 'INSERT';
    const PLAY_TYPE_PLAY_NOW = 'PLAY_NOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPlayTypeAllowableValues()
    {
        return [
            self::PLAY_TYPE_APPEND,
            self::PLAY_TYPE_INSERT,
            self::PLAY_TYPE_PLAY_NOW,
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
        $this->container['playType'] = isset($data['playType']) ? $data['playType'] : null;
        $this->container['ignoreCurrentSentence'] = isset($data['ignoreCurrentSentence']) ? $data['ignoreCurrentSentence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPlayTypeAllowableValues();
                if (!is_null($this->container['playType']) && !in_array($this->container['playType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'playType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['playType']) && (mb_strlen($this->container['playType']) > 32)) {
                $invalidProperties[] = "invalid value for 'playType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['playType']) && (mb_strlen($this->container['playType']) < 0)) {
                $invalidProperties[] = "invalid value for 'playType', the character length must be bigger than or equal to 0.";
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
    * Gets playType
    *  播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    *
    * @return string|null
    */
    public function getPlayType()
    {
        return $this->container['playType'];
    }

    /**
    * Sets playType
    *
    * @param string|null $playType 播放类型。 - APPEND：追加，放置在场景播放队列尾部 - INSERT： 插入，在两个音频文件，或者文本句末添加。 - PLAY_NOW : 立即插入，收到指令后，立即播放，无需等待句末。
    *
    * @return $this
    */
    public function setPlayType($playType)
    {
        $this->container['playType'] = $playType;
        return $this;
    }

    /**
    * Gets ignoreCurrentSentence
    *  忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @return bool|null
    */
    public function getIgnoreCurrentSentence()
    {
        return $this->container['ignoreCurrentSentence'];
    }

    /**
    * Sets ignoreCurrentSentence
    *
    * @param bool|null $ignoreCurrentSentence 忽略互动回复中断句子后半句不再播放。用于立即中断场景。默认不忽略。
    *
    * @return $this
    */
    public function setIgnoreCurrentSentence($ignoreCurrentSentence)
    {
        $this->container['ignoreCurrentSentence'] = $ignoreCurrentSentence;
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

