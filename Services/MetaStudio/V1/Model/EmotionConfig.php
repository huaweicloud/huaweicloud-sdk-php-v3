<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmotionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmotionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * emotion  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'emotion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * emotion  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'emotion' => 'string'
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
    * emotion  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'emotion' => 'emotion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * emotion  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @var string[]
    */
    protected static $setters = [
            'emotion' => 'setEmotion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * emotion  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @var string[]
    */
    protected static $getters = [
            'emotion' => 'getEmotion'
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
    const EMOTION_HAPPY = 'HAPPY';
    const EMOTION_SAD = 'SAD';
    const EMOTION_CALM = 'CALM';
    const EMOTION_ANGER = 'ANGER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEmotionAllowableValues()
    {
        return [
            self::EMOTION_HAPPY,
            self::EMOTION_SAD,
            self::EMOTION_CALM,
            self::EMOTION_ANGER,
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
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEmotionAllowableValues();
                if (!is_null($this->container['emotion']) && !in_array($this->container['emotion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'emotion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['emotion']) && (mb_strlen($this->container['emotion']) > 64)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['emotion']) && (mb_strlen($this->container['emotion']) < 1)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be bigger than or equal to 1.";
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
    * Gets emotion
    *  情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @return string|null
    */
    public function getEmotion()
    {
        return $this->container['emotion'];
    }

    /**
    * Sets emotion
    *
    * @param string|null $emotion 情感标签配置。 * HAPPY：开心 * SAD：悲伤 * CALM：平静 * ANGER：愤怒  默认HAPPY。
    *
    * @return $this
    */
    public function setEmotion($emotion)
    {
        $this->container['emotion'] = $emotion;
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

