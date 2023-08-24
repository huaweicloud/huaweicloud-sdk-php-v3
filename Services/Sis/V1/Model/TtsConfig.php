<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TtsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TtsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：16000、8000 默认：8000
    * property  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    * speed  语速。 取值范围：[-500,500]  默认值：0
    * pitch  音高。 取值范围： [-500,500]  默认值：0
    * volume  音量。 取值范围：[0, 100]  默认值：50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFormat' => 'string',
            'sampleRate' => 'string',
            'property' => 'string',
            'speed' => 'int',
            'pitch' => 'int',
            'volume' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：16000、8000 默认：8000
    * property  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    * speed  语速。 取值范围：[-500,500]  默认值：0
    * pitch  音高。 取值范围： [-500,500]  默认值：0
    * volume  音量。 取值范围：[0, 100]  默认值：50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFormat' => null,
        'sampleRate' => null,
        'property' => null,
        'speed' => 'int32',
        'pitch' => 'int32',
        'volume' => 'int32'
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
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：16000、8000 默认：8000
    * property  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    * speed  语速。 取值范围：[-500,500]  默认值：0
    * pitch  音高。 取值范围： [-500,500]  默认值：0
    * volume  音量。 取值范围：[0, 100]  默认值：50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFormat' => 'audio_format',
            'sampleRate' => 'sample_rate',
            'property' => 'property',
            'speed' => 'speed',
            'pitch' => 'pitch',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：16000、8000 默认：8000
    * property  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    * speed  语速。 取值范围：[-500,500]  默认值：0
    * pitch  音高。 取值范围： [-500,500]  默认值：0
    * volume  音量。 取值范围：[0, 100]  默认值：50
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFormat' => 'setAudioFormat',
            'sampleRate' => 'setSampleRate',
            'property' => 'setProperty',
            'speed' => 'setSpeed',
            'pitch' => 'setPitch',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFormat  语音格式头：wav、mp3、pcm。 默认：wav
    * sampleRate  采样率：16000、8000 默认：8000
    * property  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    * speed  语速。 取值范围：[-500,500]  默认值：0
    * pitch  音高。 取值范围： [-500,500]  默认值：0
    * volume  音量。 取值范围：[0, 100]  默认值：50
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFormat' => 'getAudioFormat',
            'sampleRate' => 'getSampleRate',
            'property' => 'getProperty',
            'speed' => 'getSpeed',
            'pitch' => 'getPitch',
            'volume' => 'getVolume'
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
    const AUDIO_FORMAT_WAV = 'wav';
    const AUDIO_FORMAT_MP3 = 'mp3';
    const AUDIO_FORMAT_PCM = 'pcm';
    const SAMPLE_RATE__16000 = '16000';
    const SAMPLE_RATE__8000 = '8000';
    const PROPERTY_CHINESE_XIAOQI_COMMON = 'chinese_xiaoqi_common';
    const PROPERTY_CHINESE_XIAOYU_COMMON = 'chinese_xiaoyu_common';
    const PROPERTY_CHINESE_XIAOYAN_COMMON = 'chinese_xiaoyan_common';
    const PROPERTY_CHINESE_XIAOXIA_COMMON = 'chinese_xiaoxia_common';
    const PROPERTY_CHINESE_XIAODAI_COMMON = 'chinese_xiaodai_common';
    const PROPERTY_CHINESE_XIAOQIAN_COMMON = 'chinese_xiaoqian_common';
    const PROPERTY_CHINESE_XIAOWANG_COMMON = 'chinese_xiaowang_common';
    const PROPERTY_CHINESE_XIAOWEN_COMMON = 'chinese_xiaowen_common';
    const PROPERTY_CHINESE_XIAOJING_COMMON = 'chinese_xiaojing_common';
    const PROPERTY_CHINESE_XIAOSONG_COMMON = 'chinese_xiaosong_common';
    const PROPERTY_ENGLISH_CAMEAL_COMMON = 'english_cameal_common';
    const PROPERTY_CHINESE_HUAXIAOXIA_COMMON = 'chinese_huaxiaoxia_common';
    const PROPERTY_CHINESE_HUAXIAOGANG_COMMON = 'chinese_huaxiaogang_common';
    const PROPERTY_CHINESE_HUAXIAOLU_COMMON = 'chinese_huaxiaolu_common';
    const PROPERTY_CHINESE_HUAXIAOSHU_COMMON = 'chinese_huaxiaoshu_common';
    const PROPERTY_CHINESE_HUAXIAOWEI_COMMON = 'chinese_huaxiaowei_common';
    const PROPERTY_CHINESE_HUAXIAOLIANG_COMMON = 'chinese_huaxiaoliang_common';
    const PROPERTY_CHINESE_HUAXIAODONG_COMMON = 'chinese_huaxiaodong_common';
    const PROPERTY_CHINESE_HUAXIAOYAN_COMMON = 'chinese_huaxiaoyan_common';
    const PROPERTY_CHINESE_HUAXIAOXUAN_COMMON = 'chinese_huaxiaoxuan_common';
    const PROPERTY_CHINESE_HUAXIAOWEN_COMMON = 'chinese_huaxiaowen_common';
    const PROPERTY_CHINESE_HUAXIAOYANG_COMMON = 'chinese_huaxiaoyang_common';
    const PROPERTY_CHINESE_HUAXIAOMIN_COMMON = 'chinese_huaxiaomin_common';
    const PROPERTY_CHINESE_HUANVXIA_LITERATURE = 'chinese_huanvxia_literature';
    const PROPERTY_CHINESE_HUAXIAOXUAN_LITERATURE = 'chinese_huaxiaoxuan_literature';
    const PROPERTY_CHINESE_HUAXIAOMEI_COMMON = 'chinese_huaxiaomei_common';
    const PROPERTY_CHINESE_HUAXIAOFEI_COMMON = 'chinese_huaxiaofei_common';
    const PROPERTY_CHINESE_HUAXIAOLONG_COMMON = 'chinese_huaxiaolong_common';
    const PROPERTY_CHINESE_HUAXIAORUI_COMMON = 'chinese_huaxiaorui_common';
    const PROPERTY_CHINESE_HUAXIAORU_COMMON = 'chinese_huaxiaoru_common';
    const PROPERTY_CHINESE_HUAXIAOHAN_COMMON = 'chinese_huaxiaohan_common';
    const PROPERTY_CHINESE_HUAXIAONING_COMMON = 'chinese_huaxiaoning_common';
    const PROPERTY_CHINESE_HUAXIAOZHEN_COMMON = 'chinese_huaxiaozhen_common';
    const PROPERTY_CHINESE_HUAXIAOMAN_COMMON = 'chinese_huaxiaoman_common';
    const PROPERTY_CHINESE_HUAXIAOFANG_COMMON = 'chinese_huaxiaofang_common';
    const PROPERTY_CHINESE_HUAXIAOJUN_COMMON = 'chinese_huaxiaojun_common';
    const PROPERTY_ENGLISH_ALVIN_COMMON = 'english_alvin_common';
    const PROPERTY_ENGLISH_AMY_COMMON = 'english_amy_common';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_WAV,
            self::AUDIO_FORMAT_MP3,
            self::AUDIO_FORMAT_PCM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSampleRateAllowableValues()
    {
        return [
            self::SAMPLE_RATE__16000,
            self::SAMPLE_RATE__8000,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPropertyAllowableValues()
    {
        return [
            self::PROPERTY_CHINESE_XIAOQI_COMMON,
            self::PROPERTY_CHINESE_XIAOYU_COMMON,
            self::PROPERTY_CHINESE_XIAOYAN_COMMON,
            self::PROPERTY_CHINESE_XIAOXIA_COMMON,
            self::PROPERTY_CHINESE_XIAODAI_COMMON,
            self::PROPERTY_CHINESE_XIAOQIAN_COMMON,
            self::PROPERTY_CHINESE_XIAOWANG_COMMON,
            self::PROPERTY_CHINESE_XIAOWEN_COMMON,
            self::PROPERTY_CHINESE_XIAOJING_COMMON,
            self::PROPERTY_CHINESE_XIAOSONG_COMMON,
            self::PROPERTY_ENGLISH_CAMEAL_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOXIA_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOGANG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOLU_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOSHU_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOWEI_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOLIANG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAODONG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOYAN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOXUAN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOWEN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOYANG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOMIN_COMMON,
            self::PROPERTY_CHINESE_HUANVXIA_LITERATURE,
            self::PROPERTY_CHINESE_HUAXIAOXUAN_LITERATURE,
            self::PROPERTY_CHINESE_HUAXIAOMEI_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOFEI_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOLONG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAORUI_COMMON,
            self::PROPERTY_CHINESE_HUAXIAORU_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOHAN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAONING_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOZHEN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOMAN_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOFANG_COMMON,
            self::PROPERTY_CHINESE_HUAXIAOJUN_COMMON,
            self::PROPERTY_ENGLISH_ALVIN_COMMON,
            self::PROPERTY_ENGLISH_AMY_COMMON,
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
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['sampleRate'] = isset($data['sampleRate']) ? $data['sampleRate'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['pitch'] = isset($data['pitch']) ? $data['pitch'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAudioFormatAllowableValues();
                if (!is_null($this->container['audioFormat']) && !in_array($this->container['audioFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['audioFormat']) && (mb_strlen($this->container['audioFormat']) > 500)) {
                $invalidProperties[] = "invalid value for 'audioFormat', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['audioFormat']) && (mb_strlen($this->container['audioFormat']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioFormat', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSampleRateAllowableValues();
                if (!is_null($this->container['sampleRate']) && !in_array($this->container['sampleRate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sampleRate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPropertyAllowableValues();
                if (!is_null($this->container['property']) && !in_array($this->container['property'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'property', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['speed']) && ($this->container['speed'] > 500)) {
                $invalidProperties[] = "invalid value for 'speed', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['speed']) && ($this->container['speed'] < -500)) {
                $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to -500.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] > 500)) {
                $invalidProperties[] = "invalid value for 'pitch', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['pitch']) && ($this->container['pitch'] < -500)) {
                $invalidProperties[] = "invalid value for 'pitch', must be bigger than or equal to -500.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] > 100)) {
                $invalidProperties[] = "invalid value for 'volume', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] < 0)) {
                $invalidProperties[] = "invalid value for 'volume', must be bigger than or equal to 0.";
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
    * Gets audioFormat
    *  语音格式头：wav、mp3、pcm。 默认：wav
    *
    * @return string|null
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string|null $audioFormat 语音格式头：wav、mp3、pcm。 默认：wav
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets sampleRate
    *  采样率：16000、8000 默认：8000
    *
    * @return string|null
    */
    public function getSampleRate()
    {
        return $this->container['sampleRate'];
    }

    /**
    * Sets sampleRate
    *
    * @param string|null $sampleRate 采样率：16000、8000 默认：8000
    *
    * @return $this
    */
    public function setSampleRate($sampleRate)
    {
        $this->container['sampleRate'] = $sampleRate;
        return $this;
    }

    /**
    * Gets property
    *  语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 语音合成特征字符串，组成形式为{language}_{speaker}_{domain}，即“语种_人员标识_领域”。发音人分为普通发音人和精品发音人。  普通发音人每100字计一次调用，取值范围如下：   chinese_xiaoqi_common  小琪，标准女声发音人。  chinese_xiaoyu_common  小宇，标准男声发音人。  chinese_xiaoyan_common  小燕，温柔女声发音人。  chinese_xiaowang_common  小王，童声发音人。  chinese_xiaowen_common   小雯，柔美女声发音人。  chinese_xiaojing_common 小婧，俏皮女声发音人。  chinese_xiaosong_common  小宋，激昂男声发音人。  chinese_xiaoxia_common   小夏，热情女声发音人。  chinese_xiaodai_common   小呆，呆萌童声发音人。  chinese_xiaoqian_common  小倩，成熟女声发音人。  english_cameal_common    cameal，柔美女声英文发音人。   精品发音人每50字计一次调用，区域仅支持cn-north-4，cn-east-3，暂时不支持音高调节，取值范围如下：  chinese_huaxiaoxia_common  华小夏，热情女声发音人。  chinese_huaxiaogang_common  华晓刚，利落男声发音人。  chinese_huaxiaolu_common  华小璐，知性女声发音人。  chinese_huaxiaoshu_common  华小舒，舒缓女声发音人。  chinese_huaxiaowei_common  华小唯，嗲柔女声发音人。  chinese_huaxiaoliang_common  华小靓，嘹亮女声发音人。  chinese_huaxiaodong_common  华晓东，成熟男声发音人。  chinese_huaxiaoyan_common  华小颜，严厉女声发音人。  chinese_huaxiaoxuan_common  华小萱，台湾女声发音人。  chinese_huaxiaowen_common  华小雯，柔美女声发音人。  chinese_huaxiaoyang_common  华晓阳，朝气男声发音人。  chinese_huaxiaomin_common  华小闽，闽南女声发音人。  chinese_huanvxia_literature 华女侠，武侠女生发音人，只支持16k的采样率。  chinese_huaxiaoxuan_literature 华晓悬，悬疑男声发音人，只支持16k的采样率。  chinese_huaxiaomei_common 华小美，温柔女声发音人。  chinese_huaxiaofei_common 华小飞，朝气男声发音人。  chinese_huaxiaolong_common 华小龙，朝气男声发音人。  chinese_huaxiaorui_common 华小蕊，知性女声发音人。  chinese_huaxiaoru_common 华小汝，柔美女声发音人(中英混)。  chinese_huaxiaohan_common 华小涵，知性女声发音人(中英混)。  chinese_huaxiaoning_common 华小宁，沉稳男声发言人(中英混)。  chinese_huaxiaozhen_common 华小珍，温柔女声发音人(中英混)。  chinese_huaxiaoman_common 华小曼，温柔女声发音人(中英混)。  chinese_huaxiaofang_common 华小芳，朝气女声发音人(中英混)。  chinese_huaxiaojun_common 华小筠，成熟女声发音人(中英混)。  english_alvin_common alvin，成熟男声纯英文发音人。  english_amy_common amy amy，成熟女声纯英文发音人。  默认：chinese_xiaoyan_common
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets speed
    *  语速。 取值范围：[-500,500]  默认值：0
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
    * @param int|null $speed 语速。 取值范围：[-500,500]  默认值：0
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
    *  音高。 取值范围： [-500,500]  默认值：0
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
    * @param int|null $pitch 音高。 取值范围： [-500,500]  默认值：0
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
    *  音量。 取值范围：[0, 100]  默认值：50
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
    * @param int|null $volume 音量。 取值范围：[0, 100]  默认值：50
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

