<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTTSAReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTTSAReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * voiceAssetId  音色模型ID
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * parentJobId  关联父任务任务ID。
    * autoMotion  是否生成智能动作数据。
    * styleId  风格化ID。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'voiceAssetId' => 'string',
            'text' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int',
            'emotion' => 'string',
            'parentJobId' => 'string',
            'autoMotion' => 'bool',
            'styleId' => 'string',
            'cameraPosition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * voiceAssetId  音色模型ID
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * parentJobId  关联父任务任务ID。
    * autoMotion  是否生成智能动作数据。
    * styleId  风格化ID。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'voiceAssetId' => null,
        'text' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32',
        'emotion' => null,
        'parentJobId' => null,
        'autoMotion' => null,
        'styleId' => null,
        'cameraPosition' => null
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
    * voiceAssetId  音色模型ID
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * parentJobId  关联父任务任务ID。
    * autoMotion  是否生成智能动作数据。
    * styleId  风格化ID。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'voiceAssetId' => 'voice_asset_id',
            'text' => 'text',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume',
            'emotion' => 'emotion',
            'parentJobId' => 'parent_job_id',
            'autoMotion' => 'auto_motion',
            'styleId' => 'style_id',
            'cameraPosition' => 'camera_position'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * voiceAssetId  音色模型ID
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * parentJobId  关联父任务任务ID。
    * autoMotion  是否生成智能动作数据。
    * styleId  风格化ID。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @var string[]
    */
    protected static $setters = [
            'voiceAssetId' => 'setVoiceAssetId',
            'text' => 'setText',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume',
            'emotion' => 'setEmotion',
            'parentJobId' => 'setParentJobId',
            'autoMotion' => 'setAutoMotion',
            'styleId' => 'setStyleId',
            'cameraPosition' => 'setCameraPosition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * voiceAssetId  音色模型ID
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * parentJobId  关联父任务任务ID。
    * autoMotion  是否生成智能动作数据。
    * styleId  风格化ID。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @var string[]
    */
    protected static $getters = [
            'voiceAssetId' => 'getVoiceAssetId',
            'text' => 'getText',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume',
            'emotion' => 'getEmotion',
            'parentJobId' => 'getParentJobId',
            'autoMotion' => 'getAutoMotion',
            'styleId' => 'getStyleId',
            'cameraPosition' => 'getCameraPosition'
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
        $this->container['voiceAssetId'] = isset($data['voiceAssetId']) ? $data['voiceAssetId'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
        $this->container['parentJobId'] = isset($data['parentJobId']) ? $data['parentJobId'] : null;
        $this->container['autoMotion'] = isset($data['autoMotion']) ? $data['autoMotion'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['cameraPosition'] = isset($data['cameraPosition']) ? $data['cameraPosition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['voiceAssetId'] === null) {
            $invalidProperties[] = "'voiceAssetId' can't be null";
        }
            if ((mb_strlen($this->container['voiceAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['voiceAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['voiceAssetId'])) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
            }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
            if ((mb_strlen($this->container['text']) > 2048)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['text']) < 0)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] > 200)) {
                $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] < 50)) {
                $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] > 200)) {
                $invalidProperties[] = "invalid value for 'pitch', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] < 50)) {
                $invalidProperties[] = "invalid value for 'pitch', must be bigger than or equal to 50.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] > 240)) {
                $invalidProperties[] = "invalid value for 'volume', must be smaller than or equal to 240.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] < 90)) {
                $invalidProperties[] = "invalid value for 'volume', must be bigger than or equal to 90.";
            }
            if (!is_null($this->container['emotion']) && (mb_strlen($this->container['emotion']) > 64)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['emotion']) && (mb_strlen($this->container['emotion']) < 1)) {
                $invalidProperties[] = "invalid value for 'emotion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['emotion']) && !preg_match("/^[a-zA-Z0-9-_]+$/", $this->container['emotion'])) {
                $invalidProperties[] = "invalid value for 'emotion', must be conform to the pattern /^[a-zA-Z0-9-_]+$/.";
            }
            if (!is_null($this->container['parentJobId']) && (mb_strlen($this->container['parentJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentJobId']) && (mb_strlen($this->container['parentJobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentJobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cameraPosition']) && (mb_strlen($this->container['cameraPosition']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cameraPosition', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cameraPosition']) && (mb_strlen($this->container['cameraPosition']) < 1)) {
                $invalidProperties[] = "invalid value for 'cameraPosition', the character length must be bigger than or equal to 1.";
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
    * Gets voiceAssetId
    *  音色模型ID
    *
    * @return string
    */
    public function getVoiceAssetId()
    {
        return $this->container['voiceAssetId'];
    }

    /**
    * Sets voiceAssetId
    *
    * @param string $voiceAssetId 音色模型ID
    *
    * @return $this
    */
    public function setVoiceAssetId($voiceAssetId)
    {
        $this->container['voiceAssetId'] = $voiceAssetId;
        return $this;
    }

    /**
    * Gets text
    *  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    *
    * @return string
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string $text HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets speed
    *  语速。  取值范围[50,200]   默认值：100
    *
    * @return int|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param int|null $speed 语速。  取值范围[50,200]   默认值：100
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
        return $this;
    }

    /**
    * Gets pitch
    *  基频。  取值范围[50,200]  默认值：100
    *
    * @return int|null
    */
    public function getPitch()
    {
        return $this->container['pitch'];
    }

    /**
    * Sets pitch
    *
    * @param int|null $pitch 基频。  取值范围[50,200]  默认值：100
    *
    * @return $this
    */
    public function setPitch($pitch)
    {
        $this->container['pitch'] = $pitch;
        return $this;
    }

    /**
    * Gets volume
    *  音量。  取值范围[90,240]   默认值：100
    *
    * @return int|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param int|null $volume 音量。  取值范围[90,240]   默认值：100
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets emotion
    *  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
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
    * @param string|null $emotion 情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    *
    * @return $this
    */
    public function setEmotion($emotion)
    {
        $this->container['emotion'] = $emotion;
        return $this;
    }

    /**
    * Gets parentJobId
    *  关联父任务任务ID。
    *
    * @return string|null
    */
    public function getParentJobId()
    {
        return $this->container['parentJobId'];
    }

    /**
    * Sets parentJobId
    *
    * @param string|null $parentJobId 关联父任务任务ID。
    *
    * @return $this
    */
    public function setParentJobId($parentJobId)
    {
        $this->container['parentJobId'] = $parentJobId;
        return $this;
    }

    /**
    * Gets autoMotion
    *  是否生成智能动作数据。
    *
    * @return bool|null
    */
    public function getAutoMotion()
    {
        return $this->container['autoMotion'];
    }

    /**
    * Sets autoMotion
    *
    * @param bool|null $autoMotion 是否生成智能动作数据。
    *
    * @return $this
    */
    public function setAutoMotion($autoMotion)
    {
        $this->container['autoMotion'] = $autoMotion;
        return $this;
    }

    /**
    * Gets styleId
    *  风格化ID。
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
    * @param string|null $styleId 风格化ID。
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets cameraPosition
    *  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @return string|null
    */
    public function getCameraPosition()
    {
        return $this->container['cameraPosition'];
    }

    /**
    * Sets cameraPosition
    *
    * @param string|null $cameraPosition 人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    *
    * @return $this
    */
    public function setCameraPosition($cameraPosition)
    {
        $this->container['cameraPosition'] = $cameraPosition;
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

