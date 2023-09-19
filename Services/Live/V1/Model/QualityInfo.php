<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualityInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualityInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    * quality  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    * pvc  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    * hdlb  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    * codec  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    * width  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * height  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * bitrate  转码视频的码率  单位：Kbps  取值范围：40-30000
    * videoFrameRate  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    * iFrameInterval  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    * gop  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    * bitrateAdaptive  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    * iFramePolicy  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'quality' => 'string',
            'pvc' => 'string',
            'hdlb' => 'string',
            'codec' => 'string',
            'width' => 'int',
            'height' => 'int',
            'bitrate' => 'int',
            'videoFrameRate' => 'int',
            'protocol' => 'string',
            'iFrameInterval' => 'int',
            'gop' => 'int',
            'bitrateAdaptive' => 'string',
            'iFramePolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    * quality  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    * pvc  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    * hdlb  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    * codec  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    * width  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * height  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * bitrate  转码视频的码率  单位：Kbps  取值范围：40-30000
    * videoFrameRate  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    * iFrameInterval  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    * gop  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    * bitrateAdaptive  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    * iFramePolicy  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'quality' => null,
        'pvc' => null,
        'hdlb' => null,
        'codec' => null,
        'width' => 'int32',
        'height' => 'int32',
        'bitrate' => 'int32',
        'videoFrameRate' => 'int32',
        'protocol' => null,
        'iFrameInterval' => 'int32',
        'gop' => 'int32',
        'bitrateAdaptive' => null,
        'iFramePolicy' => null
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
    * templateName  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    * quality  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    * pvc  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    * hdlb  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    * codec  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    * width  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * height  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * bitrate  转码视频的码率  单位：Kbps  取值范围：40-30000
    * videoFrameRate  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    * iFrameInterval  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    * gop  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    * bitrateAdaptive  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    * iFramePolicy  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'templateName',
            'quality' => 'quality',
            'pvc' => 'PVC',
            'hdlb' => 'hdlb',
            'codec' => 'codec',
            'width' => 'width',
            'height' => 'height',
            'bitrate' => 'bitrate',
            'videoFrameRate' => 'video_frame_rate',
            'protocol' => 'protocol',
            'iFrameInterval' => 'iFrameInterval',
            'gop' => 'gop',
            'bitrateAdaptive' => 'bitrate_adaptive',
            'iFramePolicy' => 'i_frame_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    * quality  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    * pvc  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    * hdlb  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    * codec  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    * width  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * height  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * bitrate  转码视频的码率  单位：Kbps  取值范围：40-30000
    * videoFrameRate  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    * iFrameInterval  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    * gop  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    * bitrateAdaptive  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    * iFramePolicy  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'quality' => 'setQuality',
            'pvc' => 'setPvc',
            'hdlb' => 'setHdlb',
            'codec' => 'setCodec',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'bitrate' => 'setBitrate',
            'videoFrameRate' => 'setVideoFrameRate',
            'protocol' => 'setProtocol',
            'iFrameInterval' => 'setIFrameInterval',
            'gop' => 'setGop',
            'bitrateAdaptive' => 'setBitrateAdaptive',
            'iFramePolicy' => 'setIFramePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    * quality  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    * pvc  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    * hdlb  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    * codec  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    * width  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * height  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    * bitrate  转码视频的码率  单位：Kbps  取值范围：40-30000
    * videoFrameRate  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    * iFrameInterval  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    * gop  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    * bitrateAdaptive  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    * iFramePolicy  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'quality' => 'getQuality',
            'pvc' => 'getPvc',
            'hdlb' => 'getHdlb',
            'codec' => 'getCodec',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'bitrate' => 'getBitrate',
            'videoFrameRate' => 'getVideoFrameRate',
            'protocol' => 'getProtocol',
            'iFrameInterval' => 'getIFrameInterval',
            'gop' => 'getGop',
            'bitrateAdaptive' => 'getBitrateAdaptive',
            'iFramePolicy' => 'getIFramePolicy'
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
    const PVC_ON = 'on';
    const PVC_OFF = 'off';
    const HDLB_ON = 'on';
    const HDLB_OFF = 'off';
    const CODEC_H264 = 'H264';
    const CODEC_H265 = 'H265';
    const PROTOCOL_RTMP = 'RTMP';
    const PROTOCOL_HLS = 'HLS';
    const PROTOCOL_DASH = 'DASH';
    const BITRATE_ADAPTIVE_MINIMUM = 'minimum';
    const BITRATE_ADAPTIVE_ADAPTIVE = 'adaptive';
    const I_FRAME_POLICY_AUTO = 'auto';
    const I_FRAME_POLICY_STRICT_SYNC = 'strictSync';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPvcAllowableValues()
    {
        return [
            self::PVC_ON,
            self::PVC_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHdlbAllowableValues()
    {
        return [
            self::HDLB_ON,
            self::HDLB_OFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodecAllowableValues()
    {
        return [
            self::CODEC_H264,
            self::CODEC_H265,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_RTMP,
            self::PROTOCOL_HLS,
            self::PROTOCOL_DASH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBitrateAdaptiveAllowableValues()
    {
        return [
            self::BITRATE_ADAPTIVE_MINIMUM,
            self::BITRATE_ADAPTIVE_ADAPTIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIFramePolicyAllowableValues()
    {
        return [
            self::I_FRAME_POLICY_AUTO,
            self::I_FRAME_POLICY_STRICT_SYNC,
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['pvc'] = isset($data['pvc']) ? $data['pvc'] : null;
        $this->container['hdlb'] = isset($data['hdlb']) ? $data['hdlb'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['videoFrameRate'] = isset($data['videoFrameRate']) ? $data['videoFrameRate'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['iFrameInterval'] = isset($data['iFrameInterval']) ? $data['iFrameInterval'] : null;
        $this->container['gop'] = isset($data['gop']) ? $data['gop'] : null;
        $this->container['bitrateAdaptive'] = isset($data['bitrateAdaptive']) ? $data['bitrateAdaptive'] : null;
        $this->container['iFramePolicy'] = isset($data['iFramePolicy']) ? $data['iFramePolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
        }
            $allowedValues = $this->getPvcAllowableValues();
                if (!is_null($this->container['pvc']) && !in_array($this->container['pvc'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pvc', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHdlbAllowableValues();
                if (!is_null($this->container['hdlb']) && !in_array($this->container['hdlb'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hdlb', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hdlb']) && (mb_strlen($this->container['hdlb']) > 64)) {
                $invalidProperties[] = "invalid value for 'hdlb', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hdlb']) && (mb_strlen($this->container['hdlb']) < 1)) {
                $invalidProperties[] = "invalid value for 'hdlb', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getCodecAllowableValues();
                if (!is_null($this->container['codec']) && !in_array($this->container['codec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['width']) && ($this->container['width'] > 3840)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 32)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 3840)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 32)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 32.";
            }
        if ($this->container['bitrate'] === null) {
            $invalidProperties[] = "'bitrate' can't be null";
        }
            if (($this->container['bitrate'] > 30000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 30000.";
            }
            if (($this->container['bitrate'] < 40)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['videoFrameRate']) && ($this->container['videoFrameRate'] > 30)) {
                $invalidProperties[] = "invalid value for 'videoFrameRate', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['videoFrameRate']) && ($this->container['videoFrameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoFrameRate', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['iFrameInterval']) && ($this->container['iFrameInterval'] > 500)) {
                $invalidProperties[] = "invalid value for 'iFrameInterval', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['iFrameInterval']) && ($this->container['iFrameInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'iFrameInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gop']) && ($this->container['gop'] > 10)) {
                $invalidProperties[] = "invalid value for 'gop', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['gop']) && ($this->container['gop'] < 0)) {
                $invalidProperties[] = "invalid value for 'gop', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBitrateAdaptiveAllowableValues();
                if (!is_null($this->container['bitrateAdaptive']) && !in_array($this->container['bitrateAdaptive'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bitrateAdaptive', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bitrateAdaptive']) && (mb_strlen($this->container['bitrateAdaptive']) > 32)) {
                $invalidProperties[] = "invalid value for 'bitrateAdaptive', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['bitrateAdaptive']) && (mb_strlen($this->container['bitrateAdaptive']) < 0)) {
                $invalidProperties[] = "invalid value for 'bitrateAdaptive', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIFramePolicyAllowableValues();
                if (!is_null($this->container['iFramePolicy']) && !in_array($this->container['iFramePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'iFramePolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['iFramePolicy']) && (mb_strlen($this->container['iFramePolicy']) > 32)) {
                $invalidProperties[] = "invalid value for 'iFramePolicy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['iFramePolicy']) && (mb_strlen($this->container['iFramePolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'iFramePolicy', the character length must be bigger than or equal to 0.";
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
    * Gets templateName
    *  自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 自定义模板名称。 - 若需要自定义模板名称，请将quality参数设置为userdefine； - 多个自定义模板名称之间不能重复； - 自定义模板名称不能与其他模板的quality参数重复； - 若quality不为userdefine，请勿填写此字段。
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets quality
    *  包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    *
    * @return string
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param string $quality 包含如下取值： - lud： 超高清，系统缺省名称； - lhd： 高清，系统缺省名称； - lsd： 标清，系统缺省名称； - lld： 流畅，系统缺省名称； - userdefine： 视频质量自定义。填写userdefine时，templateName字段不能为空。
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets pvc
    *  是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    *
    * @return string|null
    */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
    * Sets pvc
    *
    * @param string|null $pvc 是否使用窄带高清转码。默认值：off。  注意：该字段已不再维护，建议使用hdlb。  包含如下取值： - off：不启用。 - on：启用。
    *
    * @return $this
    */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;
        return $this;
    }

    /**
    * Gets hdlb
    *  是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    *
    * @return string|null
    */
    public function getHdlb()
    {
        return $this->container['hdlb'];
    }

    /**
    * Sets hdlb
    *
    * @param string|null $hdlb 是否启用高清低码，较PVC相比画质增强。默认值：off。  提示：使用hdlb字段开启高清低码时，PVC字段不生效。  包含如下取值： - off：不开启高清低码； - on：开启高清低码。
    *
    * @return $this
    */
    public function setHdlb($hdlb)
    {
        $this->container['hdlb'] = $hdlb;
        return $this;
    }

    /**
    * Gets codec
    *  视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    *
    * @return string|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string|null $codec 视频编码格式。默认为H264。 - H264：使用H.264。 - H265：使用H.265。
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets width
    *  视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
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
    * @param int|null $width 视频长边（横屏的宽，竖屏的高）  单位：像素；默认值：0 - H264 建议取值范围：32-3840，必须为2的倍数 。 - H265 建议取值范围：320-3840 ，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
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
    *  视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
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
    * @param int|null $height 视频短边（横屏的高，竖屏的宽）  单位：像素；默认值：0 - H264 建议取值范围：32-2160，必须为2的倍数。 - H265 建议取值范围：240-2160，必须为2的倍数。  注意：width和height全为0，则输出分辨率和源一致；width和height只有一个为0， 则分辨率按非0项的比例缩放。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets bitrate
    *  转码视频的码率  单位：Kbps  取值范围：40-30000
    *
    * @return int
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int $bitrate 转码视频的码率  单位：Kbps  取值范围：40-30000
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets videoFrameRate
    *  转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    *
    * @return int|null
    */
    public function getVideoFrameRate()
    {
        return $this->container['videoFrameRate'];
    }

    /**
    * Sets videoFrameRate
    *
    * @param int|null $videoFrameRate 转码视频帧率  单位：fps  默认值：0  取值范围：0-60，0表示保持帧率不变。
    *
    * @return $this
    */
    public function setVideoFrameRate($videoFrameRate)
    {
        $this->container['videoFrameRate'] = $videoFrameRate;
        return $this;
    }

    /**
    * Gets protocol
    *  转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 转码输出支持的协议类型。默认为RTMP。当前只支持RTMP。  包含如下取值： - RTMP
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets iFrameInterval
    *  最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    *
    * @return int|null
    */
    public function getIFrameInterval()
    {
        return $this->container['iFrameInterval'];
    }

    /**
    * Sets iFrameInterval
    *
    * @param int|null $iFrameInterval 最大I帧间隔  单位：帧数  取值范围：[0, 500]，默认值：50  注意：若希望通过iFrameInterval设置i帧间隔，请将gop设为0，或不传gop参数。
    *
    * @return $this
    */
    public function setIFrameInterval($iFrameInterval)
    {
        $this->container['iFrameInterval'] = $iFrameInterval;
        return $this;
    }

    /**
    * Gets gop
    *  按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    *
    * @return int|null
    */
    public function getGop()
    {
        return $this->container['gop'];
    }

    /**
    * Sets gop
    *
    * @param int|null $gop 按时间设置I帧间隔  单位：秒  取值范围：[0,10]，默认值：2  注意：gop不为0时，则以gop设置i帧间隔，iFrameInterval字段不生效。
    *
    * @return $this
    */
    public function setGop($gop)
    {
        $this->container['gop'] = $gop;
        return $this;
    }

    /**
    * Gets bitrateAdaptive
    *  自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    *
    * @return string|null
    */
    public function getBitrateAdaptive()
    {
        return $this->container['bitrateAdaptive'];
    }

    /**
    * Sets bitrateAdaptive
    *
    * @param string|null $bitrateAdaptive 自适应码率参数，默认值：off。  包含如下取值： - off：关闭码率自适应，目标码率按设定的码率输出； - minimum：目标码率按设定码率和源文件码率最小值输出（即码率不上扬）； - adaptive：目标码率按源文件码率自适应输出。
    *
    * @return $this
    */
    public function setBitrateAdaptive($bitrateAdaptive)
    {
        $this->container['bitrateAdaptive'] = $bitrateAdaptive;
        return $this;
    }

    /**
    * Gets iFramePolicy
    *  编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @return string|null
    */
    public function getIFramePolicy()
    {
        return $this->container['iFramePolicy'];
    }

    /**
    * Sets iFramePolicy
    *
    * @param string|null $iFramePolicy 编码输出I帧策略，默认值：auto。  包含如下取值： - auto：I帧按设置的gop时长输出； - strictSync：编码输出I帧完全和源保持一致（源是I帧则编码输出I帧，源不是I帧则编码非I帧），设置该参数后gop时长设置无效。
    *
    * @return $this
    */
    public function setIFramePolicy($iFramePolicy)
    {
        $this->container['iFramePolicy'] = $iFramePolicy;
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

