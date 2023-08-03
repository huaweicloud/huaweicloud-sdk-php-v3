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
    * templateName  模板名称。
    * quality  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
    * pvc  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
    * hdlb  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
    * codec  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
    * width  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
    * height  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
    * bitrate  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
    * videoFrameRate  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
    * iFrameInterval  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
    * gop  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
            'gop' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  模板名称。
    * quality  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
    * pvc  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
    * hdlb  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
    * codec  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
    * width  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
    * height  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
    * bitrate  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
    * videoFrameRate  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
    * iFrameInterval  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
    * gop  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
        'gop' => 'int32'
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
    * templateName  模板名称。
    * quality  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
    * pvc  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
    * hdlb  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
    * codec  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
    * width  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
    * height  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
    * bitrate  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
    * videoFrameRate  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
    * iFrameInterval  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
    * gop  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
            'gop' => 'gop'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  模板名称。
    * quality  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
    * pvc  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
    * hdlb  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
    * codec  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
    * width  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
    * height  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
    * bitrate  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
    * videoFrameRate  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
    * iFrameInterval  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
    * gop  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
            'gop' => 'setGop'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  模板名称。
    * quality  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
    * pvc  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
    * hdlb  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
    * codec  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
    * width  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
    * height  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
    * bitrate  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
    * videoFrameRate  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
    * protocol  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
    * iFrameInterval  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
    * gop  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
            'gop' => 'getGop'
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
    *  模板名称。
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
    * @param string|null $templateName 模板名称。
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
    *  包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
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
    * @param string $quality 包含如下取值： - FHD： 超高清，系统缺省名称 - HD： 高清，系统缺省名称 - SD： 标清，系统缺省名称 - LD： 流畅，系统缺省名称 - XXX： 租户自定义名称。用户自定义名称不能与系统缺省名称冲突；多个自定义名称不能重复
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
    *  是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
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
    * @param string|null $pvc 是否使用窄带高清转码，模板组里不同模板的PVC选项必须相同。 - on：启用。 - off：不启用。 默认为off
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
    *  是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
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
    * @param string|null $hdlb 是否启用高清低码，较PVC相比画质增强。 - on：启用。 - off：不启用。 默认为off。
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
    *  视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
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
    * @param string|null $codec 视频编码格式，模板组里不同模板的编码格式必须相同。 - H264：使用H.264。 - H265：使用H.265。 默认为H264。
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
    *  视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
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
    * @param int|null $width 视频宽度（单位：像素） - H264   取值范围：32-3840，必须为2的倍数 。 - H265   取值范围：320-3840 ，必须为4的倍数。
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
    *  视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
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
    * @param int|null $height 视频高度（单位：像素） - H264   取值范围：32-2160，必须为2的倍数。 - H265   取值范围：240-2160，必须为4的倍数。
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
    *  转码视频的码率（单位：Kbps）。 取值范围：40-30000。
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
    * @param int $bitrate 转码视频的码率（单位：Kbps）。 取值范围：40-30000。
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
    *  转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
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
    * @param int|null $videoFrameRate 转码视频帧率（单位：fps）。 取值范围：0-30，0表示保持帧率不变。
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
    *  转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
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
    * @param string|null $protocol 转码输出支持的协议类型。当前只支持RTMP和HLS，且模板组里不同模板的输出协议类型必须相同。 - RTMP - HLS - DASH  默认为RTMP。
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
    *  I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
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
    * @param int|null $iFrameInterval I帧间隔（单位：帧）。  取值范围：0-500。  默认为25。
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
    *  按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
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
    * @param int|null $gop 按时间设置I帧间隔，与“iFrameInterval”选择一个设置即可。  取值范围：[0,10]  默认值：4
    *
    * @return $this
    */
    public function setGop($gop)
    {
        $this->container['gop'] = $gop;
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

