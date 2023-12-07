<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AnimationAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AnimationAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * styleId  数字人模型风格ID。
    * duration  动作动画时长。
    * autoAnalysis  动作是否需要自动解析。
    * voiceDelay  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    * animationInsertRestriction  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'styleId' => 'string',
            'duration' => 'float',
            'autoAnalysis' => 'bool',
            'voiceDelay' => 'float',
            'animationInsertRestriction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * styleId  数字人模型风格ID。
    * duration  动作动画时长。
    * autoAnalysis  动作是否需要自动解析。
    * voiceDelay  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    * animationInsertRestriction  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'styleId' => null,
        'duration' => 'float',
        'autoAnalysis' => null,
        'voiceDelay' => 'float',
        'animationInsertRestriction' => null
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
    * styleId  数字人模型风格ID。
    * duration  动作动画时长。
    * autoAnalysis  动作是否需要自动解析。
    * voiceDelay  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    * animationInsertRestriction  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'styleId' => 'style_id',
            'duration' => 'duration',
            'autoAnalysis' => 'auto_analysis',
            'voiceDelay' => 'voice_delay',
            'animationInsertRestriction' => 'animation_insert_restriction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * styleId  数字人模型风格ID。
    * duration  动作动画时长。
    * autoAnalysis  动作是否需要自动解析。
    * voiceDelay  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    * animationInsertRestriction  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @var string[]
    */
    protected static $setters = [
            'styleId' => 'setStyleId',
            'duration' => 'setDuration',
            'autoAnalysis' => 'setAutoAnalysis',
            'voiceDelay' => 'setVoiceDelay',
            'animationInsertRestriction' => 'setAnimationInsertRestriction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * styleId  数字人模型风格ID。
    * duration  动作动画时长。
    * autoAnalysis  动作是否需要自动解析。
    * voiceDelay  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    * animationInsertRestriction  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @var string[]
    */
    protected static $getters = [
            'styleId' => 'getStyleId',
            'duration' => 'getDuration',
            'autoAnalysis' => 'getAutoAnalysis',
            'voiceDelay' => 'getVoiceDelay',
            'animationInsertRestriction' => 'getAnimationInsertRestriction'
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
    const ANIMATION_INSERT_RESTRICTION_ONLY_BEGINNING = 'ONLY_BEGINNING';
    const ANIMATION_INSERT_RESTRICTION_ONLY_END = 'ONLY_END';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAnimationInsertRestrictionAllowableValues()
    {
        return [
            self::ANIMATION_INSERT_RESTRICTION_ONLY_BEGINNING,
            self::ANIMATION_INSERT_RESTRICTION_ONLY_END,
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
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['autoAnalysis'] = isset($data['autoAnalysis']) ? $data['autoAnalysis'] : null;
        $this->container['voiceDelay'] = isset($data['voiceDelay']) ? $data['voiceDelay'] : null;
        $this->container['animationInsertRestriction'] = isset($data['animationInsertRestriction']) ? $data['animationInsertRestriction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 32767)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 32767.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['voiceDelay']) && ($this->container['voiceDelay'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'voiceDelay', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['voiceDelay']) && ($this->container['voiceDelay'] < 0)) {
                $invalidProperties[] = "invalid value for 'voiceDelay', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAnimationInsertRestrictionAllowableValues();
                if (!is_null($this->container['animationInsertRestriction']) && !in_array($this->container['animationInsertRestriction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'animationInsertRestriction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['animationInsertRestriction']) && (mb_strlen($this->container['animationInsertRestriction']) > 128)) {
                $invalidProperties[] = "invalid value for 'animationInsertRestriction', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['animationInsertRestriction']) && (mb_strlen($this->container['animationInsertRestriction']) < 0)) {
                $invalidProperties[] = "invalid value for 'animationInsertRestriction', the character length must be bigger than or equal to 0.";
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
    * Gets styleId
    *  数字人模型风格ID。
    *
    * @return string|null
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string|null $styleId 数字人模型风格ID。
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets duration
    *  动作动画时长。
    *
    * @return float|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param float|null $duration 动作动画时长。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets autoAnalysis
    *  动作是否需要自动解析。
    *
    * @return bool|null
    */
    public function getAutoAnalysis()
    {
        return $this->container['autoAnalysis'];
    }

    /**
    * Sets autoAnalysis
    *
    * @param bool|null $autoAnalysis 动作是否需要自动解析。
    *
    * @return $this
    */
    public function setAutoAnalysis($autoAnalysis)
    {
        $this->container['autoAnalysis'] = $autoAnalysis;
        return $this;
    }

    /**
    * Gets voiceDelay
    *  语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    *
    * @return float|null
    */
    public function getVoiceDelay()
    {
        return $this->container['voiceDelay'];
    }

    /**
    * Sets voiceDelay
    *
    * @param float|null $voiceDelay 语音延迟播放时长。  单位秒。  使用场景举例：入场动画3秒，voice_delay设置成4秒，则语音从入场动画开始后第4秒开始播放。
    *
    * @return $this
    */
    public function setVoiceDelay($voiceDelay)
    {
        $this->container['voiceDelay'] = $voiceDelay;
        return $this;
    }

    /**
    * Gets animationInsertRestriction
    *  动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @return string|null
    */
    public function getAnimationInsertRestriction()
    {
        return $this->container['animationInsertRestriction'];
    }

    /**
    * Sets animationInsertRestriction
    *
    * @param string|null $animationInsertRestriction 动画插入位置限制。 * ONLY_BEGINNING：视频制作时，动画只允许出现在起始位置。 * ONLY_END：视频制作时，动画只允许出现在结束位置。
    *
    * @return $this
    */
    public function setAnimationInsertRestriction($animationInsertRestriction)
    {
        $this->container['animationInsertRestriction'] = $animationInsertRestriction;
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

