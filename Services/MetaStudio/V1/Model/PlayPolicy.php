<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PlayPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PlayPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repeatCount  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    * autoPlayScript  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    * playMode  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    * randomPlayMode  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    * needIndependentCaptureClient  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repeatCount' => 'int',
            'autoPlayScript' => 'bool',
            'playMode' => 'string',
            'randomPlayMode' => 'string',
            'needIndependentCaptureClient' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repeatCount  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    * autoPlayScript  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    * playMode  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    * randomPlayMode  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    * needIndependentCaptureClient  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repeatCount' => 'int32',
        'autoPlayScript' => null,
        'playMode' => null,
        'randomPlayMode' => null,
        'needIndependentCaptureClient' => null
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
    * repeatCount  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    * autoPlayScript  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    * playMode  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    * randomPlayMode  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    * needIndependentCaptureClient  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repeatCount' => 'repeat_count',
            'autoPlayScript' => 'auto_play_script',
            'playMode' => 'play_mode',
            'randomPlayMode' => 'random_play_mode',
            'needIndependentCaptureClient' => 'need_independent_capture_client'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repeatCount  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    * autoPlayScript  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    * playMode  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    * randomPlayMode  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    * needIndependentCaptureClient  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'repeatCount' => 'setRepeatCount',
            'autoPlayScript' => 'setAutoPlayScript',
            'playMode' => 'setPlayMode',
            'randomPlayMode' => 'setRandomPlayMode',
            'needIndependentCaptureClient' => 'setNeedIndependentCaptureClient'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repeatCount  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    * autoPlayScript  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    * playMode  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    * randomPlayMode  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    * needIndependentCaptureClient  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'repeatCount' => 'getRepeatCount',
            'autoPlayScript' => 'getAutoPlayScript',
            'playMode' => 'getPlayMode',
            'randomPlayMode' => 'getRandomPlayMode',
            'needIndependentCaptureClient' => 'getNeedIndependentCaptureClient'
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
    const PLAY_MODE_TEXT = 'TEXT';
    const PLAY_MODE_AUDIO = 'AUDIO';
    const PLAY_MODE_NO_PRESET = 'NO_PRESET';
    const RANDOM_PLAY_MODE_NONE = 'NONE';
    const RANDOM_PLAY_MODE_SCENE = 'SCENE';
    const RANDOM_PLAY_MODE_SCRIPT_ITEM = 'SCRIPT_ITEM';
    const RANDOM_PLAY_MODE_SCENE_AND_SCRIPT_ITEM = 'SCENE_AND_SCRIPT_ITEM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPlayModeAllowableValues()
    {
        return [
            self::PLAY_MODE_TEXT,
            self::PLAY_MODE_AUDIO,
            self::PLAY_MODE_NO_PRESET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRandomPlayModeAllowableValues()
    {
        return [
            self::RANDOM_PLAY_MODE_NONE,
            self::RANDOM_PLAY_MODE_SCENE,
            self::RANDOM_PLAY_MODE_SCRIPT_ITEM,
            self::RANDOM_PLAY_MODE_SCENE_AND_SCRIPT_ITEM,
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
        $this->container['repeatCount'] = isset($data['repeatCount']) ? $data['repeatCount'] : null;
        $this->container['autoPlayScript'] = isset($data['autoPlayScript']) ? $data['autoPlayScript'] : null;
        $this->container['playMode'] = isset($data['playMode']) ? $data['playMode'] : null;
        $this->container['randomPlayMode'] = isset($data['randomPlayMode']) ? $data['randomPlayMode'] : null;
        $this->container['needIndependentCaptureClient'] = isset($data['needIndependentCaptureClient']) ? $data['needIndependentCaptureClient'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repeatCount']) && ($this->container['repeatCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'repeatCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['repeatCount']) && ($this->container['repeatCount'] < -1)) {
                $invalidProperties[] = "invalid value for 'repeatCount', must be bigger than or equal to -1.";
            }
            $allowedValues = $this->getPlayModeAllowableValues();
                if (!is_null($this->container['playMode']) && !in_array($this->container['playMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'playMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['playMode']) && (mb_strlen($this->container['playMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'playMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['playMode']) && (mb_strlen($this->container['playMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'playMode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRandomPlayModeAllowableValues();
                if (!is_null($this->container['randomPlayMode']) && !in_array($this->container['randomPlayMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'randomPlayMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['randomPlayMode']) && (mb_strlen($this->container['randomPlayMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'randomPlayMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['randomPlayMode']) && (mb_strlen($this->container['randomPlayMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'randomPlayMode', the character length must be bigger than or equal to 0.";
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
    * Gets repeatCount
    *  **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    *
    * @return int|null
    */
    public function getRepeatCount()
    {
        return $this->container['repeatCount'];
    }

    /**
    * Sets repeatCount
    *
    * @param int|null $repeatCount **参数解释**： 剧本重复播放次数。 * -1：表示持续重复，直至人工停止。 * 0：表示不重复，仅执行一次。 * 其他值n：实际运行次数为n+1次。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setRepeatCount($repeatCount)
    {
        $this->container['repeatCount'] = $repeatCount;
        return $this;
    }

    /**
    * Gets autoPlayScript
    *  **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    *
    * @return bool|null
    */
    public function getAutoPlayScript()
    {
        return $this->container['autoPlayScript'];
    }

    /**
    * Sets autoPlayScript
    *
    * @param bool|null $autoPlayScript **参数解释**： 是否自动播放剧本。 **约束限制**： 不涉及。 **取值范围**： * true：服务完成任务初始化后，自动播放剧本。 * false：服务完成任务初始化后，等待信号后再开始播放剧本。
    *
    * @return $this
    */
    public function setAutoPlayScript($autoPlayScript)
    {
        $this->container['autoPlayScript'] = $autoPlayScript;
        return $this;
    }

    /**
    * Gets playMode
    *  **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    *
    * @return string|null
    */
    public function getPlayMode()
    {
        return $this->container['playMode'];
    }

    /**
    * Sets playMode
    *
    * @param string|null $playMode **参数解释**： 驱动方式。 **约束限制**： 不涉及。 **取值范围**： * TEXT：文本驱动，即通过TTS合成语音。 * AUDIO：语音驱动。 * NO_PRESET：无预置剧本，人工控制模式。
    *
    * @return $this
    */
    public function setPlayMode($playMode)
    {
        $this->container['playMode'] = $playMode;
        return $this;
    }

    /**
    * Gets randomPlayMode
    *  **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    *
    * @return string|null
    */
    public function getRandomPlayMode()
    {
        return $this->container['randomPlayMode'];
    }

    /**
    * Sets randomPlayMode
    *
    * @param string|null $randomPlayMode **参数解释**： 随机播报模式。 **约束限制**： 从第二轮播报开始随机。 **取值范围**： * NONE：不启动随机播报。 * SCENE：按场景随机播报。场景内段落按顺序播报。 * SCRIPT_ITEM：按段落随机播报。场景按顺序播报。 * SCENE_AND_SCRIPT_ITEM：场景和段落都随机播报。
    *
    * @return $this
    */
    public function setRandomPlayMode($randomPlayMode)
    {
        $this->container['randomPlayMode'] = $randomPlayMode;
        return $this;
    }

    /**
    * Gets needIndependentCaptureClient
    *  **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @return bool|null
    */
    public function getNeedIndependentCaptureClient()
    {
        return $this->container['needIndependentCaptureClient'];
    }

    /**
    * Sets needIndependentCaptureClient
    *
    * @param bool|null $needIndependentCaptureClient **参数解释**： 是否需要独立采集端。用于客户端播放与命令分离场景。 **约束限制**： 不涉及。 **取值范围**： * true：分配CAPTURE、PLAYER两个RTC用户。 * fasle：仅分配PLAYER一个RTC用户。
    *
    * @return $this
    */
    public function setNeedIndependentCaptureClient($needIndependentCaptureClient)
    {
        $this->container['needIndependentCaptureClient'] = $needIndependentCaptureClient;
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

