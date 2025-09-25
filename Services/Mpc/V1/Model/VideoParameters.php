<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoParameters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoParameters';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    * crf  视频恒定码率控制因子。  取值范围为[0, 51]
    * maxBitrate  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    * bitrate  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    * bufSize  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    * profile  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    * level  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    * preset  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    * maxIframesInterval  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    * bframesCount  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * frameRateFloat  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * width  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    * height  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    * blackCut  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'outputPolicy' => 'string',
            'codec' => 'int',
            'crf' => 'object',
            'maxBitrate' => 'int',
            'bitrate' => 'int',
            'bufSize' => 'int',
            'profile' => 'int',
            'level' => 'int',
            'preset' => 'int',
            'maxIframesInterval' => 'int',
            'bframesCount' => 'int',
            'frameRate' => 'int',
            'frameRateFloat' => 'float',
            'width' => 'int',
            'height' => 'int',
            'blackCut' => 'int',
            'streamName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    * crf  视频恒定码率控制因子。  取值范围为[0, 51]
    * maxBitrate  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    * bitrate  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    * bufSize  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    * profile  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    * level  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    * preset  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    * maxIframesInterval  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    * bframesCount  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * frameRateFloat  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * width  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    * height  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    * blackCut  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'outputPolicy' => null,
        'codec' => 'int32',
        'crf' => null,
        'maxBitrate' => 'int32',
        'bitrate' => 'int32',
        'bufSize' => 'int32',
        'profile' => 'int32',
        'level' => 'int32',
        'preset' => 'int32',
        'maxIframesInterval' => 'int32',
        'bframesCount' => 'int32',
        'frameRate' => 'int32',
        'frameRateFloat' => 'float',
        'width' => 'int32',
        'height' => 'int32',
        'blackCut' => 'int32',
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
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    * crf  视频恒定码率控制因子。  取值范围为[0, 51]
    * maxBitrate  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    * bitrate  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    * bufSize  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    * profile  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    * level  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    * preset  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    * maxIframesInterval  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    * bframesCount  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * frameRateFloat  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * width  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    * height  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    * blackCut  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'outputPolicy' => 'output_policy',
            'codec' => 'codec',
            'crf' => 'crf',
            'maxBitrate' => 'max_bitrate',
            'bitrate' => 'bitrate',
            'bufSize' => 'buf_size',
            'profile' => 'profile',
            'level' => 'level',
            'preset' => 'preset',
            'maxIframesInterval' => 'max_iframes_interval',
            'bframesCount' => 'bframes_count',
            'frameRate' => 'frame_rate',
            'frameRateFloat' => 'frame_rate_float',
            'width' => 'width',
            'height' => 'height',
            'blackCut' => 'black_cut',
            'streamName' => 'stream_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    * crf  视频恒定码率控制因子。  取值范围为[0, 51]
    * maxBitrate  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    * bitrate  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    * bufSize  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    * profile  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    * level  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    * preset  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    * maxIframesInterval  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    * bframesCount  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * frameRateFloat  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * width  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    * height  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    * blackCut  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $setters = [
            'outputPolicy' => 'setOutputPolicy',
            'codec' => 'setCodec',
            'crf' => 'setCrf',
            'maxBitrate' => 'setMaxBitrate',
            'bitrate' => 'setBitrate',
            'bufSize' => 'setBufSize',
            'profile' => 'setProfile',
            'level' => 'setLevel',
            'preset' => 'setPreset',
            'maxIframesInterval' => 'setMaxIframesInterval',
            'bframesCount' => 'setBframesCount',
            'frameRate' => 'setFrameRate',
            'frameRateFloat' => 'setFrameRateFloat',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'blackCut' => 'setBlackCut',
            'streamName' => 'setStreamName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * outputPolicy  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    * codec  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    * crf  视频恒定码率控制因子。  取值范围为[0, 51]
    * maxBitrate  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    * bitrate  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    * bufSize  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    * profile  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    * level  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    * preset  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    * maxIframesInterval  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    * bframesCount  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    * frameRate  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * frameRateFloat  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * width  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    * height  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    * blackCut  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    * streamName  流名称
    *
    * @var string[]
    */
    protected static $getters = [
            'outputPolicy' => 'getOutputPolicy',
            'codec' => 'getCodec',
            'crf' => 'getCrf',
            'maxBitrate' => 'getMaxBitrate',
            'bitrate' => 'getBitrate',
            'bufSize' => 'getBufSize',
            'profile' => 'getProfile',
            'level' => 'getLevel',
            'preset' => 'getPreset',
            'maxIframesInterval' => 'getMaxIframesInterval',
            'bframesCount' => 'getBframesCount',
            'frameRate' => 'getFrameRate',
            'frameRateFloat' => 'getFrameRateFloat',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'blackCut' => 'getBlackCut',
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
    const OUTPUT_POLICY_TRANSCODE = 'transcode';
    const OUTPUT_POLICY_DISCARD = 'discard';
    const OUTPUT_POLICY_COPY = 'copy';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOutputPolicyAllowableValues()
    {
        return [
            self::OUTPUT_POLICY_TRANSCODE,
            self::OUTPUT_POLICY_DISCARD,
            self::OUTPUT_POLICY_COPY,
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
        $this->container['outputPolicy'] = isset($data['outputPolicy']) ? $data['outputPolicy'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['crf'] = isset($data['crf']) ? $data['crf'] : null;
        $this->container['maxBitrate'] = isset($data['maxBitrate']) ? $data['maxBitrate'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['bufSize'] = isset($data['bufSize']) ? $data['bufSize'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['preset'] = isset($data['preset']) ? $data['preset'] : null;
        $this->container['maxIframesInterval'] = isset($data['maxIframesInterval']) ? $data['maxIframesInterval'] : null;
        $this->container['bframesCount'] = isset($data['bframesCount']) ? $data['bframesCount'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['frameRateFloat'] = isset($data['frameRateFloat']) ? $data['frameRateFloat'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['blackCut'] = isset($data['blackCut']) ? $data['blackCut'] : null;
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
            $allowedValues = $this->getOutputPolicyAllowableValues();
                if (!is_null($this->container['outputPolicy']) && !in_array($this->container['outputPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'outputPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['outputPolicy']) && (mb_strlen($this->container['outputPolicy']) > 64)) {
                $invalidProperties[] = "invalid value for 'outputPolicy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['outputPolicy']) && (mb_strlen($this->container['outputPolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputPolicy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codec']) && ($this->container['codec'] > 3)) {
                $invalidProperties[] = "invalid value for 'codec', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['codec']) && ($this->container['codec'] < 0)) {
                $invalidProperties[] = "invalid value for 'codec', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxBitrate']) && ($this->container['maxBitrate'] > 800000)) {
                $invalidProperties[] = "invalid value for 'maxBitrate', must be smaller than or equal to 800000.";
            }
            if (!is_null($this->container['maxBitrate']) && ($this->container['maxBitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxBitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 50000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 50000.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bufSize']) && ($this->container['bufSize'] > 800000)) {
                $invalidProperties[] = "invalid value for 'bufSize', must be smaller than or equal to 800000.";
            }
            if (!is_null($this->container['bufSize']) && ($this->container['bufSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'bufSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['profile']) && ($this->container['profile'] > 5)) {
                $invalidProperties[] = "invalid value for 'profile', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['profile']) && ($this->container['profile'] < 0)) {
                $invalidProperties[] = "invalid value for 'profile', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 16)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 0)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['preset']) && ($this->container['preset'] > 5)) {
                $invalidProperties[] = "invalid value for 'preset', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['preset']) && ($this->container['preset'] < 0)) {
                $invalidProperties[] = "invalid value for 'preset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxIframesInterval']) && ($this->container['maxIframesInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'maxIframesInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['maxIframesInterval']) && ($this->container['maxIframesInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'maxIframesInterval', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['bframesCount']) && ($this->container['bframesCount'] > 8)) {
                $invalidProperties[] = "invalid value for 'bframesCount', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['bframesCount']) && ($this->container['bframesCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'bframesCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frameRateFloat']) && ($this->container['frameRateFloat'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'frameRateFloat', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['frameRateFloat']) && ($this->container['frameRateFloat'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRateFloat', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2880)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2880.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blackCut']) && ($this->container['blackCut'] > 2)) {
                $invalidProperties[] = "invalid value for 'blackCut', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['blackCut']) && ($this->container['blackCut'] < 0)) {
                $invalidProperties[] = "invalid value for 'blackCut', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 64)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamName']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['streamName'])) {
                $invalidProperties[] = "invalid value for 'streamName', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
    * Gets outputPolicy
    *  输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    *
    * @return string|null
    */
    public function getOutputPolicy()
    {
        return $this->container['outputPolicy'];
    }

    /**
    * Sets outputPolicy
    *
    * @param string|null $outputPolicy 输出策略。  取值如下： - discard - transcode  >- 当视频参数中的“output_policy”为\"discard\"，且音频参数中的“output_policy”为“transcode”时，表示只输出音频。 >- 当视频参数中的“output_policy”为\"transcode\"，且音频参数中的“output_policy”为“discard”时，表示只输出视频。 >- 同时为\"discard\"时不合法。 >- 同时为“transcode”时，表示输出音视频。
    *
    * @return $this
    */
    public function setOutputPolicy($outputPolicy)
    {
        $this->container['outputPolicy'] = $outputPolicy;
        return $this;
    }

    /**
    * Gets codec
    *  视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @return int|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param int|null $codec 视频编码格式。  取值如下： - 1：VIDEO_CODEC_H264 - 2：VIDEO_CODEC_H265
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets crf
    *  视频恒定码率控制因子。  取值范围为[0, 51]
    *
    * @return object|null
    */
    public function getCrf()
    {
        return $this->container['crf'];
    }

    /**
    * Sets crf
    *
    * @param object|null $crf 视频恒定码率控制因子。  取值范围为[0, 51]
    *
    * @return $this
    */
    public function setCrf($crf)
    {
        $this->container['crf'] = $crf;
        return $this;
    }

    /**
    * Gets maxBitrate
    *  输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    *
    * @return int|null
    */
    public function getMaxBitrate()
    {
        return $this->container['maxBitrate'];
    }

    /**
    * Sets maxBitrate
    *
    * @param int|null $maxBitrate 输出最大码率，基于crf，设置max_bitrate字段才会开启ccrf  取值范围：0或[40,800000]之间的整数。   单位：kbit/s  带crf时使用，参考原片的平均码率进行设置（一般为1.5倍）
    *
    * @return $this
    */
    public function setMaxBitrate($maxBitrate)
    {
        $this->container['maxBitrate'] = $maxBitrate;
        return $this;
    }

    /**
    * Gets bitrate
    *  输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    *
    * @return int|null
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int|null $bitrate 输出平均码率。  取值范围：0或[40,50000]之间的整数。  单位：kbit/s  若设置为0，则输出平均码率为自适应值。
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets bufSize
    *  ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    *
    * @return int|null
    */
    public function getBufSize()
    {
        return $this->container['bufSize'];
    }

    /**
    * Sets bufSize
    *
    * @param int|null $bufSize ccrf时的缓冲区大小,建议与max_bitrate保持一致，避免编码器缓冲区溢出  取值范围：0或[40,800000]之间的整数。  单位：kbit
    *
    * @return $this
    */
    public function setBufSize($bufSize)
    {
        $this->container['bufSize'] = $bufSize;
        return $this;
    }

    /**
    * Gets profile
    *  编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    *
    * @return int|null
    */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
    * Sets profile
    *
    * @param int|null $profile 编码档次  取值如下： - 1：VIDEO_PROFILE_H264_BASE - 2：VIDEO_PROFILE_H264_MAIN - 3：VIDEO_PROFILE_H264_HIGH - 4：VIDEO_PROFILE_H265_MAIN
    *
    * @return $this
    */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;
        return $this;
    }

    /**
    * Gets level
    *  编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 编码级别  取值如下： - 1：VIDEO_LEVEL_1_0 - 2：VIDEO_LEVEL_1_1 - 3：VIDEO_LEVEL_1_2 - 4：VIDEO_LEVEL_1_3 - 5：VIDEO_LEVEL_2_0 - 6：VIDEO_LEVEL_2_1 - 7：VIDEO_LEVEL_2_2 - 8：VIDEO_LEVEL_3_0 - 9：VIDEO_LEVEL_3_1 - 10：VIDEO_LEVEL_3_2 - 11：VIDEO_LEVEL_4_0 - 12：VIDEO_LEVEL_4_1 - 13：VIDEO_LEVEL_4_2 - 14：VIDEO_LEVEL_5_0 - 15：VIDEO_LEVEL_5_1 - 16：VIDEO_LEVEL_x_x
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets preset
    *  编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    *
    * @return int|null
    */
    public function getPreset()
    {
        return $this->container['preset'];
    }

    /**
    * Sets preset
    *
    * @param int|null $preset 编码质量等级  取值如下： - 1：VIDEO_PRESET_SPEED，编码快速档位 - 3：VIDEO_PRESET_HIGHQUALITY，编码高质量档位 - 4：VIDEO_PRESET_QUALITY，编码质量档位 - 5：VIDEO_PRESET_BALANCE，编码平衡档位  默认值1。
    *
    * @return $this
    */
    public function setPreset($preset)
    {
        $this->container['preset'] = $preset;
        return $this;
    }

    /**
    * Gets maxIframesInterval
    *  I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    *
    * @return int|null
    */
    public function getMaxIframesInterval()
    {
        return $this->container['maxIframesInterval'];
    }

    /**
    * Sets maxIframesInterval
    *
    * @param int|null $maxIframesInterval I帧最大间隔  取值范围：[2，10]。  默认值：5。  单位：秒。
    *
    * @return $this
    */
    public function setMaxIframesInterval($maxIframesInterval)
    {
        $this->container['maxIframesInterval'] = $maxIframesInterval;
        return $this;
    }

    /**
    * Gets bframesCount
    *  最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    *
    * @return int|null
    */
    public function getBframesCount()
    {
        return $this->container['bframesCount'];
    }

    /**
    * Sets bframesCount
    *
    * @param int|null $bframesCount 最大B帧间隔。  取值范围： - H264：[0，7]，默认值为4。 - H265：[0，7]，默认值为7。  单位：帧。
    *
    * @return $this
    */
    public function setBframesCount($bframesCount)
    {
        $this->container['bframesCount'] = $bframesCount;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
        return $this;
    }

    /**
    * Gets frameRateFloat
    *  帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return float|null
    */
    public function getFrameRateFloat()
    {
        return $this->container['frameRateFloat'];
    }

    /**
    * Sets frameRateFloat
    *
    * @param float|null $frameRateFloat 帧率。  取值范围：0或[5,60]，0表示自适应。  单位：帧每秒。  > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return $this
    */
    public function setFrameRateFloat($frameRateFloat)
    {
        $this->container['frameRateFloat'] = $frameRateFloat;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width 视频宽度（单位：像素）  - H264：范围[32,4096]，必须为2的倍数 - H265：范围[320,4096]，必须是4的倍数
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height 视频高度（单位：像素）  - H264：范围[32,2880]，必须为2的倍数 - H265：范围[240,2880] ，必须是4的倍数
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets blackCut
    *  黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    *
    * @return int|null
    */
    public function getBlackCut()
    {
        return $this->container['blackCut'];
    }

    /**
    * Sets blackCut
    *
    * @param int|null $blackCut 黑边剪裁类型  - 0：不开启黑边剪裁 - 1：开启黑边剪裁，低复杂度算法，针对长视频（>5分钟） - 2：开启黑边剪裁，高复杂度算法，针对短视频（<=5分钟）
    *
    * @return $this
    */
    public function setBlackCut($blackCut)
    {
        $this->container['blackCut'] = $blackCut;
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

