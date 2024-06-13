<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VoiceCapability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VoiceCapability';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSupportPhoneme  是否支持多音字。
    * isSupportBreakTime  是否支持停顿。
    * isSupportBreakStrength  是否支持韵律。
    * isSupportSpeed  是否支持全局语速。
    * isSupportProsody  是否支持局部语速。
    * isSupportSsmlSayAs  是否支持SSML的say-as标签。
    * isSupportSsmlSub  是否支持SSML的sub标签。
    * isSupportWord  是否支持连读。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSupportPhoneme' => 'bool',
            'isSupportBreakTime' => 'bool',
            'isSupportBreakStrength' => 'bool',
            'isSupportSpeed' => 'bool',
            'isSupportProsody' => 'bool',
            'isSupportSsmlSayAs' => 'bool',
            'isSupportSsmlSub' => 'bool',
            'isSupportWord' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSupportPhoneme  是否支持多音字。
    * isSupportBreakTime  是否支持停顿。
    * isSupportBreakStrength  是否支持韵律。
    * isSupportSpeed  是否支持全局语速。
    * isSupportProsody  是否支持局部语速。
    * isSupportSsmlSayAs  是否支持SSML的say-as标签。
    * isSupportSsmlSub  是否支持SSML的sub标签。
    * isSupportWord  是否支持连读。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSupportPhoneme' => null,
        'isSupportBreakTime' => null,
        'isSupportBreakStrength' => null,
        'isSupportSpeed' => null,
        'isSupportProsody' => null,
        'isSupportSsmlSayAs' => null,
        'isSupportSsmlSub' => null,
        'isSupportWord' => null
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
    * isSupportPhoneme  是否支持多音字。
    * isSupportBreakTime  是否支持停顿。
    * isSupportBreakStrength  是否支持韵律。
    * isSupportSpeed  是否支持全局语速。
    * isSupportProsody  是否支持局部语速。
    * isSupportSsmlSayAs  是否支持SSML的say-as标签。
    * isSupportSsmlSub  是否支持SSML的sub标签。
    * isSupportWord  是否支持连读。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSupportPhoneme' => 'is_support_phoneme',
            'isSupportBreakTime' => 'is_support_break_time',
            'isSupportBreakStrength' => 'is_support_break_strength',
            'isSupportSpeed' => 'is_support_speed',
            'isSupportProsody' => 'is_support_prosody',
            'isSupportSsmlSayAs' => 'is_support_ssml_say_as',
            'isSupportSsmlSub' => 'is_support_ssml_sub',
            'isSupportWord' => 'is_support_word'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSupportPhoneme  是否支持多音字。
    * isSupportBreakTime  是否支持停顿。
    * isSupportBreakStrength  是否支持韵律。
    * isSupportSpeed  是否支持全局语速。
    * isSupportProsody  是否支持局部语速。
    * isSupportSsmlSayAs  是否支持SSML的say-as标签。
    * isSupportSsmlSub  是否支持SSML的sub标签。
    * isSupportWord  是否支持连读。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSupportPhoneme' => 'setIsSupportPhoneme',
            'isSupportBreakTime' => 'setIsSupportBreakTime',
            'isSupportBreakStrength' => 'setIsSupportBreakStrength',
            'isSupportSpeed' => 'setIsSupportSpeed',
            'isSupportProsody' => 'setIsSupportProsody',
            'isSupportSsmlSayAs' => 'setIsSupportSsmlSayAs',
            'isSupportSsmlSub' => 'setIsSupportSsmlSub',
            'isSupportWord' => 'setIsSupportWord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSupportPhoneme  是否支持多音字。
    * isSupportBreakTime  是否支持停顿。
    * isSupportBreakStrength  是否支持韵律。
    * isSupportSpeed  是否支持全局语速。
    * isSupportProsody  是否支持局部语速。
    * isSupportSsmlSayAs  是否支持SSML的say-as标签。
    * isSupportSsmlSub  是否支持SSML的sub标签。
    * isSupportWord  是否支持连读。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSupportPhoneme' => 'getIsSupportPhoneme',
            'isSupportBreakTime' => 'getIsSupportBreakTime',
            'isSupportBreakStrength' => 'getIsSupportBreakStrength',
            'isSupportSpeed' => 'getIsSupportSpeed',
            'isSupportProsody' => 'getIsSupportProsody',
            'isSupportSsmlSayAs' => 'getIsSupportSsmlSayAs',
            'isSupportSsmlSub' => 'getIsSupportSsmlSub',
            'isSupportWord' => 'getIsSupportWord'
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
        $this->container['isSupportPhoneme'] = isset($data['isSupportPhoneme']) ? $data['isSupportPhoneme'] : null;
        $this->container['isSupportBreakTime'] = isset($data['isSupportBreakTime']) ? $data['isSupportBreakTime'] : null;
        $this->container['isSupportBreakStrength'] = isset($data['isSupportBreakStrength']) ? $data['isSupportBreakStrength'] : null;
        $this->container['isSupportSpeed'] = isset($data['isSupportSpeed']) ? $data['isSupportSpeed'] : null;
        $this->container['isSupportProsody'] = isset($data['isSupportProsody']) ? $data['isSupportProsody'] : null;
        $this->container['isSupportSsmlSayAs'] = isset($data['isSupportSsmlSayAs']) ? $data['isSupportSsmlSayAs'] : null;
        $this->container['isSupportSsmlSub'] = isset($data['isSupportSsmlSub']) ? $data['isSupportSsmlSub'] : null;
        $this->container['isSupportWord'] = isset($data['isSupportWord']) ? $data['isSupportWord'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets isSupportPhoneme
    *  是否支持多音字。
    *
    * @return bool|null
    */
    public function getIsSupportPhoneme()
    {
        return $this->container['isSupportPhoneme'];
    }

    /**
    * Sets isSupportPhoneme
    *
    * @param bool|null $isSupportPhoneme 是否支持多音字。
    *
    * @return $this
    */
    public function setIsSupportPhoneme($isSupportPhoneme)
    {
        $this->container['isSupportPhoneme'] = $isSupportPhoneme;
        return $this;
    }

    /**
    * Gets isSupportBreakTime
    *  是否支持停顿。
    *
    * @return bool|null
    */
    public function getIsSupportBreakTime()
    {
        return $this->container['isSupportBreakTime'];
    }

    /**
    * Sets isSupportBreakTime
    *
    * @param bool|null $isSupportBreakTime 是否支持停顿。
    *
    * @return $this
    */
    public function setIsSupportBreakTime($isSupportBreakTime)
    {
        $this->container['isSupportBreakTime'] = $isSupportBreakTime;
        return $this;
    }

    /**
    * Gets isSupportBreakStrength
    *  是否支持韵律。
    *
    * @return bool|null
    */
    public function getIsSupportBreakStrength()
    {
        return $this->container['isSupportBreakStrength'];
    }

    /**
    * Sets isSupportBreakStrength
    *
    * @param bool|null $isSupportBreakStrength 是否支持韵律。
    *
    * @return $this
    */
    public function setIsSupportBreakStrength($isSupportBreakStrength)
    {
        $this->container['isSupportBreakStrength'] = $isSupportBreakStrength;
        return $this;
    }

    /**
    * Gets isSupportSpeed
    *  是否支持全局语速。
    *
    * @return bool|null
    */
    public function getIsSupportSpeed()
    {
        return $this->container['isSupportSpeed'];
    }

    /**
    * Sets isSupportSpeed
    *
    * @param bool|null $isSupportSpeed 是否支持全局语速。
    *
    * @return $this
    */
    public function setIsSupportSpeed($isSupportSpeed)
    {
        $this->container['isSupportSpeed'] = $isSupportSpeed;
        return $this;
    }

    /**
    * Gets isSupportProsody
    *  是否支持局部语速。
    *
    * @return bool|null
    */
    public function getIsSupportProsody()
    {
        return $this->container['isSupportProsody'];
    }

    /**
    * Sets isSupportProsody
    *
    * @param bool|null $isSupportProsody 是否支持局部语速。
    *
    * @return $this
    */
    public function setIsSupportProsody($isSupportProsody)
    {
        $this->container['isSupportProsody'] = $isSupportProsody;
        return $this;
    }

    /**
    * Gets isSupportSsmlSayAs
    *  是否支持SSML的say-as标签。
    *
    * @return bool|null
    */
    public function getIsSupportSsmlSayAs()
    {
        return $this->container['isSupportSsmlSayAs'];
    }

    /**
    * Sets isSupportSsmlSayAs
    *
    * @param bool|null $isSupportSsmlSayAs 是否支持SSML的say-as标签。
    *
    * @return $this
    */
    public function setIsSupportSsmlSayAs($isSupportSsmlSayAs)
    {
        $this->container['isSupportSsmlSayAs'] = $isSupportSsmlSayAs;
        return $this;
    }

    /**
    * Gets isSupportSsmlSub
    *  是否支持SSML的sub标签。
    *
    * @return bool|null
    */
    public function getIsSupportSsmlSub()
    {
        return $this->container['isSupportSsmlSub'];
    }

    /**
    * Sets isSupportSsmlSub
    *
    * @param bool|null $isSupportSsmlSub 是否支持SSML的sub标签。
    *
    * @return $this
    */
    public function setIsSupportSsmlSub($isSupportSsmlSub)
    {
        $this->container['isSupportSsmlSub'] = $isSupportSsmlSub;
        return $this;
    }

    /**
    * Gets isSupportWord
    *  是否支持连读。
    *
    * @return bool|null
    */
    public function getIsSupportWord()
    {
        return $this->container['isSupportWord'];
    }

    /**
    * Sets isSupportWord
    *
    * @param bool|null $isSupportWord 是否支持连读。
    *
    * @return $this
    */
    public function setIsSupportWord($isSupportWord)
    {
        $this->container['isSupportWord'] = $isSupportWord;
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

