<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

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
    * voiceAssetId  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * styleId  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    * jobType  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'voiceAssetId' => 'string',
            'scriptType' => 'string',
            'text' => 'string',
            'audioFileDownloadUrl' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int',
            'emotion' => 'string',
            'styleId' => 'string',
            'cameraPosition' => 'string',
            'jobType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * voiceAssetId  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * styleId  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    * jobType  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'voiceAssetId' => null,
        'scriptType' => null,
        'text' => null,
        'audioFileDownloadUrl' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32',
        'emotion' => null,
        'styleId' => null,
        'cameraPosition' => null,
        'jobType' => null
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
    * voiceAssetId  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * styleId  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    * jobType  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'voiceAssetId' => 'voice_asset_id',
            'scriptType' => 'script_type',
            'text' => 'text',
            'audioFileDownloadUrl' => 'audio_file_download_url',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume',
            'emotion' => 'emotion',
            'styleId' => 'style_id',
            'cameraPosition' => 'camera_position',
            'jobType' => 'job_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * voiceAssetId  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * styleId  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    * jobType  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @var string[]
    */
    protected static $setters = [
            'voiceAssetId' => 'setVoiceAssetId',
            'scriptType' => 'setScriptType',
            'text' => 'setText',
            'audioFileDownloadUrl' => 'setAudioFileDownloadUrl',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume',
            'emotion' => 'setEmotion',
            'styleId' => 'setStyleId',
            'cameraPosition' => 'setCameraPosition',
            'jobType' => 'setJobType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * voiceAssetId  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    * scriptType  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    * text  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    * audioFileDownloadUrl  语音驱动音频文件下载URL。
    * speed  语速。  取值范围[50,200]   默认值：100
    * pitch  基频。  取值范围[50,200]  默认值：100
    * volume  音量。  取值范围[90,240]   默认值：100
    * emotion  情感标签。 * ANGER：愤怒 * HAPPY：开心 * SAD：悲伤 * CALM：平静
    * styleId  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    * cameraPosition  人位置及相机位置。由如下4组浮点数组成的字符：人位置的X/Y/Z值，人角度的Pitch/Yaw/Roll值；相机位置的X/Y/Z值，相机角度的Pitch/Yaw/Roll值。
    * jobType  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @var string[]
    */
    protected static $getters = [
            'voiceAssetId' => 'getVoiceAssetId',
            'scriptType' => 'getScriptType',
            'text' => 'getText',
            'audioFileDownloadUrl' => 'getAudioFileDownloadUrl',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume',
            'emotion' => 'getEmotion',
            'styleId' => 'getStyleId',
            'cameraPosition' => 'getCameraPosition',
            'jobType' => 'getJobType'
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
    const SCRIPT_TYPE_TEXT = 'TEXT';
    const SCRIPT_TYPE_AUDIO = 'AUDIO';
    const JOB_TYPE_REAL_JOB = 'REAL_JOB';
    const JOB_TYPE_UNREAL_JOB = 'UNREAL_JOB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScriptTypeAllowableValues()
    {
        return [
            self::SCRIPT_TYPE_TEXT,
            self::SCRIPT_TYPE_AUDIO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_REAL_JOB,
            self::JOB_TYPE_UNREAL_JOB,
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
        $this->container['voiceAssetId'] = isset($data['voiceAssetId']) ? $data['voiceAssetId'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['audioFileDownloadUrl'] = isset($data['audioFileDownloadUrl']) ? $data['audioFileDownloadUrl'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['emotion'] = isset($data['emotion']) ? $data['emotion'] : null;
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['cameraPosition'] = isset($data['cameraPosition']) ? $data['cameraPosition'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
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
            $allowedValues = $this->getScriptTypeAllowableValues();
                if (!is_null($this->container['scriptType']) && !in_array($this->container['scriptType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scriptType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 131072)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 0)) {
                $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioFileDownloadUrl']) && (mb_strlen($this->container['audioFileDownloadUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioFileDownloadUrl', the character length must be bigger than or equal to 0.";
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
        if ($this->container['styleId'] === null) {
            $invalidProperties[] = "'styleId' can't be null";
        }
            if ((mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['styleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cameraPosition']) && (mb_strlen($this->container['cameraPosition']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cameraPosition', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cameraPosition']) && (mb_strlen($this->container['cameraPosition']) < 1)) {
                $invalidProperties[] = "invalid value for 'cameraPosition', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 1.";
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
    *  音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
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
    * @param string $voiceAssetId 音色模型ID。需要使用MetaStudio的数字资产管理相关接口从资产库查出。
    *
    * @return $this
    */
    public function setVoiceAssetId($voiceAssetId)
    {
        $this->container['voiceAssetId'] = $voiceAssetId;
        return $this;
    }

    /**
    * Gets scriptType
    *  脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return string|null
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param string|null $scriptType 脚本类型，即视频制作的驱动方式。默认TEXT * TEXT: 文本驱动，即通过TTS合成语音 * AUDIO: 语音驱动
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets text
    *  HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text HTML格式的台词，可包含动作。最多2048个字符。 > * HTML格式举例：\\<speak>大家好<insert-action id=\\\"14cc7bbcde4982aab82f9d9af9e0f743\\\"/>，非常高兴给大家介绍MetaStudio。\\</speak> > * insert-action id通过查询资产列表接口获取，查询时asset_type=ANIMATION > * 多音字标签：\\<phoneme ph=\\\"拼音\\\">汉字\\</phoneme>，南京\\<phoneme ph=\\\"shi4 zhang3\\\">市长\\</phoneme>江大桥。 > * 停顿标签：\\<break/>，中方一贯主张\\<break/>维护国家主权平等，不干涉他国内政\\<break time=\\\"300ms\\\"/>是联合国宪章\\<break time=\\\"500ms\\\"/>最重要的原则。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets audioFileDownloadUrl
    *  语音驱动音频文件下载URL。
    *
    * @return string|null
    */
    public function getAudioFileDownloadUrl()
    {
        return $this->container['audioFileDownloadUrl'];
    }

    /**
    * Sets audioFileDownloadUrl
    *
    * @param string|null $audioFileDownloadUrl 语音驱动音频文件下载URL。
    *
    * @return $this
    */
    public function setAudioFileDownloadUrl($audioFileDownloadUrl)
    {
        $this->container['audioFileDownloadUrl'] = $audioFileDownloadUrl;
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
    * Gets styleId
    *  风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
    *
    * @return string
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string $styleId 风格化ID。需要调用数字人风格管理相关接口，从系统中查得。
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
    * Gets jobType
    *  任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 任务类型。 * REAL_JOB：实时任务。如数字人交互。 * UNREAL_JOB：非实时任务。如数字人视频制作
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
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

