<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectThumbnailTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectThumbnailTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    * percent  根据视频时长百分比间隔采样时的百分比值。
    * dots  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    * outputFilename  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    * format  截图文件格式 取值如下：jpg、png
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * width  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
    * height  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'percent' => 'int',
            'dots' => 'int[]',
            'outputFilename' => 'string',
            'format' => 'string',
            'fillType' => 'string',
            'width' => 'int',
            'height' => 'int',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    * percent  根据视频时长百分比间隔采样时的百分比值。
    * dots  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    * outputFilename  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    * format  截图文件格式 取值如下：jpg、png
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * width  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
    * height  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'percent' => null,
        'dots' => null,
        'outputFilename' => null,
        'format' => null,
        'fillType' => null,
        'width' => null,
        'height' => null,
        'output' => null
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
    * type  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    * percent  根据视频时长百分比间隔采样时的百分比值。
    * dots  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    * outputFilename  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    * format  截图文件格式 取值如下：jpg、png
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * width  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
    * height  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'percent' => 'percent',
            'dots' => 'dots',
            'outputFilename' => 'output_filename',
            'format' => 'format',
            'fillType' => 'fill_type',
            'width' => 'width',
            'height' => 'height',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    * percent  根据视频时长百分比间隔采样时的百分比值。
    * dots  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    * outputFilename  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    * format  截图文件格式 取值如下：jpg、png
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * width  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
    * height  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'percent' => 'setPercent',
            'dots' => 'setDots',
            'outputFilename' => 'setOutputFilename',
            'format' => 'setFormat',
            'fillType' => 'setFillType',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    * percent  根据视频时长百分比间隔采样时的百分比值。
    * dots  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    * outputFilename  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    * format  截图文件格式 取值如下：jpg、png
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * width  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
    * height  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'percent' => 'getPercent',
            'dots' => 'getDots',
            'outputFilename' => 'getOutputFilename',
            'format' => 'getFormat',
            'fillType' => 'getFillType',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'output' => 'getOutput'
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
    const TYPE_PERCENT = 'PERCENT';
    const TYPE_DOTS = 'DOTS';
    const FORMAT_JPG = 'jpg';
    const FORMAT_PNG = 'png';
    const FILL_TYPE_STRETCH = 'stretch';
    const FILL_TYPE_BLACK = 'black';
    const FILL_TYPE_WHITE = 'white';
    const FILL_TYPE_GAUSS = 'gauss';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PERCENT,
            self::TYPE_DOTS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JPG,
            self::FORMAT_PNG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFillTypeAllowableValues()
    {
        return [
            self::FILL_TYPE_STRETCH,
            self::FILL_TYPE_BLACK,
            self::FILL_TYPE_WHITE,
            self::FILL_TYPE_GAUSS,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['dots'] = isset($data['dots']) ? $data['dots'] : null;
        $this->container['outputFilename'] = isset($data['outputFilename']) ? $data['outputFilename'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['fillType'] = isset($data['fillType']) ? $data['fillType'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['percent']) && ($this->container['percent'] > 100)) {
                $invalidProperties[] = "invalid value for 'percent', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['percent']) && ($this->container['percent'] < 0)) {
                $invalidProperties[] = "invalid value for 'percent', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFillTypeAllowableValues();
                if (!is_null($this->container['fillType']) && !in_array($this->container['fillType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fillType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['width']) && ($this->container['width'] > 3840)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2160)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2160.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
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
    * Gets type
    *  采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 采样类型。 取值如下： PERCENT：根据视频时长百分比间隔采样时的百分比值。 DOTS：指定时间点截图。选择同步截图时，需指定此类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets percent
    *  根据视频时长百分比间隔采样时的百分比值。
    *
    * @return int|null
    */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
    * Sets percent
    *
    * @param int|null $percent 根据视频时长百分比间隔采样时的百分比值。
    *
    * @return $this
    */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;
        return $this;
    }

    /**
    * Gets dots
    *  指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    *
    * @return int[]|null
    */
    public function getDots()
    {
        return $this->container['dots'];
    }

    /**
    * Sets dots
    *
    * @param int[]|null $dots 指定时间截图的时间点数组 例如输入[1,3,5]，分别截取视频第1秒、第3秒、第5秒位置的图像帧 最多支持10个时间点
    *
    * @return $this
    */
    public function setDots($dots)
    {
        $this->container['dots'] = $dots;
        return $this;
    }

    /**
    * Gets outputFilename
    *  截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    *
    * @return string|null
    */
    public function getOutputFilename()
    {
        return $this->container['outputFilename'];
    }

    /**
    * Sets outputFilename
    *
    * @param string|null $outputFilename 截图输出文件名。 - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。 - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。 - 如果按照PERCENT截图则按照output_filename_0.jpg,output_filename_1.jpg顺序命名
    *
    * @return $this
    */
    public function setOutputFilename($outputFilename)
    {
        $this->container['outputFilename'] = $outputFilename;
        return $this;
    }

    /**
    * Gets format
    *  截图文件格式 取值如下：jpg、png
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 截图文件格式 取值如下：jpg、png
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets fillType
    *  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    *
    * @return string|null
    */
    public function getFillType()
    {
        return $this->container['fillType'];
    }

    /**
    * Sets fillType
    *
    * @param string|null $fillType 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    *
    * @return $this
    */
    public function setFillType($fillType)
    {
        $this->container['fillType'] = $fillType;
        return $this;
    }

    /**
    * Gets width
    *  图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
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
    * @param int|null $width 图片宽度 取值范围： - [96,3840] - 0：自适应，保持原有宽高 单位：px
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
    *  图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
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
    * @param int|null $height 图片高度 取值范围： - [96,2160] - 0：自适应，保持原有宽高 单位：px
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo|null $output output
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
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

