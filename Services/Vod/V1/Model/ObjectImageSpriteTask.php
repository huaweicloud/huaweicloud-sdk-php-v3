<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectImageSpriteTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectImageSpriteTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sampleType  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    * sampleInterval  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    * rowCount  雪碧图中小图的行数，行数*列数不得超过 100。
    * columnCount  雪碧图中小图的列数，行数*列数不得超过 100。
    * width  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
    * height  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * resolutionAdaptive  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * format  图片格式，取值为 jpg、png。默认为 jpg。
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sampleType' => 'string',
            'sampleInterval' => 'int',
            'rowCount' => 'int',
            'columnCount' => 'int',
            'width' => 'int',
            'height' => 'int',
            'resolutionAdaptive' => 'string',
            'fillType' => 'string',
            'format' => 'string',
            'outputObjectName' => 'string',
            'webvttObjectName' => 'string',
            'output' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sampleType  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    * sampleInterval  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    * rowCount  雪碧图中小图的行数，行数*列数不得超过 100。
    * columnCount  雪碧图中小图的列数，行数*列数不得超过 100。
    * width  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
    * height  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * resolutionAdaptive  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * format  图片格式，取值为 jpg、png。默认为 jpg。
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sampleType' => null,
        'sampleInterval' => null,
        'rowCount' => null,
        'columnCount' => null,
        'width' => null,
        'height' => null,
        'resolutionAdaptive' => null,
        'fillType' => null,
        'format' => null,
        'outputObjectName' => null,
        'webvttObjectName' => null,
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
    * sampleType  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    * sampleInterval  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    * rowCount  雪碧图中小图的行数，行数*列数不得超过 100。
    * columnCount  雪碧图中小图的列数，行数*列数不得超过 100。
    * width  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
    * height  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * resolutionAdaptive  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * format  图片格式，取值为 jpg、png。默认为 jpg。
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sampleType' => 'sample_type',
            'sampleInterval' => 'sample_interval',
            'rowCount' => 'row_count',
            'columnCount' => 'column_count',
            'width' => 'width',
            'height' => 'height',
            'resolutionAdaptive' => 'resolution_adaptive',
            'fillType' => 'fill_type',
            'format' => 'format',
            'outputObjectName' => 'output_object_name',
            'webvttObjectName' => 'webvtt_object_name',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sampleType  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    * sampleInterval  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    * rowCount  雪碧图中小图的行数，行数*列数不得超过 100。
    * columnCount  雪碧图中小图的列数，行数*列数不得超过 100。
    * width  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
    * height  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * resolutionAdaptive  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * format  图片格式，取值为 jpg、png。默认为 jpg。
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'sampleType' => 'setSampleType',
            'sampleInterval' => 'setSampleInterval',
            'rowCount' => 'setRowCount',
            'columnCount' => 'setColumnCount',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'resolutionAdaptive' => 'setResolutionAdaptive',
            'fillType' => 'setFillType',
            'format' => 'setFormat',
            'outputObjectName' => 'setOutputObjectName',
            'webvttObjectName' => 'setWebvttObjectName',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sampleType  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    * sampleInterval  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    * rowCount  雪碧图中小图的行数，行数*列数不得超过 100。
    * columnCount  雪碧图中小图的列数，行数*列数不得超过 100。
    * width  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
    * height  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    * resolutionAdaptive  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    * fillType  填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式： - stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“； - black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。 - white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。
    * format  图片格式，取值为 jpg、png。默认为 jpg。
    * outputObjectName  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    * webvttObjectName  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'sampleType' => 'getSampleType',
            'sampleInterval' => 'getSampleInterval',
            'rowCount' => 'getRowCount',
            'columnCount' => 'getColumnCount',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'resolutionAdaptive' => 'getResolutionAdaptive',
            'fillType' => 'getFillType',
            'format' => 'getFormat',
            'outputObjectName' => 'getOutputObjectName',
            'webvttObjectName' => 'getWebvttObjectName',
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
    const SAMPLE_TYPE_PERCENT = 'PERCENT';
    const SAMPLE_TYPE_TIME = 'TIME';
    const RESOLUTION_ADAPTIVE_OPEN = 'open';
    const RESOLUTION_ADAPTIVE_CLOSE = 'close';
    const FILL_TYPE_STRETCH = 'stretch';
    const FILL_TYPE_BLACK = 'black';
    const FILL_TYPE_WHITE = 'white';
    const FILL_TYPE_GAUSS = 'gauss';
    const FORMAT_JPG = 'jpg';
    const FORMAT_PNG = 'png';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSampleTypeAllowableValues()
    {
        return [
            self::SAMPLE_TYPE_PERCENT,
            self::SAMPLE_TYPE_TIME,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResolutionAdaptiveAllowableValues()
    {
        return [
            self::RESOLUTION_ADAPTIVE_OPEN,
            self::RESOLUTION_ADAPTIVE_CLOSE,
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
        $this->container['sampleType'] = isset($data['sampleType']) ? $data['sampleType'] : null;
        $this->container['sampleInterval'] = isset($data['sampleInterval']) ? $data['sampleInterval'] : null;
        $this->container['rowCount'] = isset($data['rowCount']) ? $data['rowCount'] : null;
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['resolutionAdaptive'] = isset($data['resolutionAdaptive']) ? $data['resolutionAdaptive'] : null;
        $this->container['fillType'] = isset($data['fillType']) ? $data['fillType'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['outputObjectName'] = isset($data['outputObjectName']) ? $data['outputObjectName'] : null;
        $this->container['webvttObjectName'] = isset($data['webvttObjectName']) ? $data['webvttObjectName'] : null;
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
        if ($this->container['sampleType'] === null) {
            $invalidProperties[] = "'sampleType' can't be null";
        }
            $allowedValues = $this->getSampleTypeAllowableValues();
                if (!is_null($this->container['sampleType']) && !in_array($this->container['sampleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sampleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sampleInterval'] === null) {
            $invalidProperties[] = "'sampleInterval' can't be null";
        }
            if (($this->container['sampleInterval'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sampleInterval', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['sampleInterval'] < 1)) {
                $invalidProperties[] = "invalid value for 'sampleInterval', must be bigger than or equal to 1.";
            }
        if ($this->container['rowCount'] === null) {
            $invalidProperties[] = "'rowCount' can't be null";
        }
            if (($this->container['rowCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'rowCount', must be smaller than or equal to 100.";
            }
            if (($this->container['rowCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'rowCount', must be bigger than or equal to 1.";
            }
        if ($this->container['columnCount'] === null) {
            $invalidProperties[] = "'columnCount' can't be null";
        }
            if (($this->container['columnCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'columnCount', must be smaller than or equal to 100.";
            }
            if (($this->container['columnCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'columnCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 4096)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResolutionAdaptiveAllowableValues();
                if (!is_null($this->container['resolutionAdaptive']) && !in_array($this->container['resolutionAdaptive'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resolutionAdaptive', must be one of '%s'",
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

            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['outputObjectName']) && (mb_strlen($this->container['outputObjectName']) > 180)) {
                $invalidProperties[] = "invalid value for 'outputObjectName', the character length must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['outputObjectName']) && (mb_strlen($this->container['outputObjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputObjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webvttObjectName']) && (mb_strlen($this->container['webvttObjectName']) > 180)) {
                $invalidProperties[] = "invalid value for 'webvttObjectName', the character length must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['webvttObjectName']) && (mb_strlen($this->container['webvttObjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'webvttObjectName', the character length must be bigger than or equal to 0.";
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
    * Gets sampleType
    *  采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    *
    * @return string
    */
    public function getSampleType()
    {
        return $this->container['sampleType'];
    }

    /**
    * Sets sampleType
    *
    * @param string $sampleType 采样类型，取值： - PERCENT：按百分比 - TIME：按时间间隔
    *
    * @return $this
    */
    public function setSampleType($sampleType)
    {
        $this->container['sampleType'] = $sampleType;
        return $this;
    }

    /**
    * Gets sampleInterval
    *  采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    *
    * @return int
    */
    public function getSampleInterval()
    {
        return $this->container['sampleInterval'];
    }

    /**
    * Sets sampleInterval
    *
    * @param int $sampleInterval 采样间隔。 -当 sample_type 为 PERCENT 时，指定采样间隔的百分比，(0<sample_interval<=100)。 -当 sample_type 为 TIME 时，指定采样间隔的时间，单位为秒(>0)。
    *
    * @return $this
    */
    public function setSampleInterval($sampleInterval)
    {
        $this->container['sampleInterval'] = $sampleInterval;
        return $this;
    }

    /**
    * Gets rowCount
    *  雪碧图中小图的行数，行数*列数不得超过 100。
    *
    * @return int
    */
    public function getRowCount()
    {
        return $this->container['rowCount'];
    }

    /**
    * Sets rowCount
    *
    * @param int $rowCount 雪碧图中小图的行数，行数*列数不得超过 100。
    *
    * @return $this
    */
    public function setRowCount($rowCount)
    {
        $this->container['rowCount'] = $rowCount;
        return $this;
    }

    /**
    * Gets columnCount
    *  雪碧图中小图的列数，行数*列数不得超过 100。
    *
    * @return int
    */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /**
    * Sets columnCount
    *
    * @param int $columnCount 雪碧图中小图的列数，行数*列数不得超过 100。
    *
    * @return $this
    */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;
        return $this;
    }

    /**
    * Gets width
    *  雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
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
    * @param int|null $width 雪碧图中小图的宽度（或长边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，Height 非 0，则 Width 按比例缩放； - 当 width 非 0，Height 为 0，则 Height 按比例缩放； - 当 width、Height 均非 0，则分辨率按用户指定
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
    *  雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
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
    * @param int|null $height 雪碧图中小图的高度（或短边）的最大值，取值范围：0 和 [96, 4096]，单位：px。 - 当 width、height 均为 0，则分辨率同源； - 当 width 为 0，height 非 0，则 width 按比例缩放； - 当 width 非 0，height 为 0，则 height 按比例缩放； - 当 width、height 均非 0，则分辨率按用户指定。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets resolutionAdaptive
    *  分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    *
    * @return string|null
    */
    public function getResolutionAdaptive()
    {
        return $this->container['resolutionAdaptive'];
    }

    /**
    * Sets resolutionAdaptive
    *
    * @param string|null $resolutionAdaptive 分辨率自适应，可选值： - open：开启，此时，Width 代表视频的长边，Height 表示视频的短边； - close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。
    *
    * @return $this
    */
    public function setResolutionAdaptive($resolutionAdaptive)
    {
        $this->container['resolutionAdaptive'] = $resolutionAdaptive;
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
    * Gets format
    *  图片格式，取值为 jpg、png。默认为 jpg。
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
    * @param string|null $format 图片格式，取值为 jpg、png。默认为 jpg。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets outputObjectName
    *  截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    *
    * @return string|null
    */
    public function getOutputObjectName()
    {
        return $this->container['outputObjectName'];
    }

    /**
    * Sets outputObjectName
    *
    * @param string|null $outputObjectName 截取雪碧图后，雪碧图图片文件的输出文件名，如果不填，则默认为：{inputName}_imageSprite_{雪碧图id}_{number}.{format}.{雪碧图id}和{number}从0开始递增
    *
    * @return $this
    */
    public function setOutputObjectName($outputObjectName)
    {
        $this->container['outputObjectName'] = $outputObjectName;
        return $this;
    }

    /**
    * Gets webvttObjectName
    *  截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @return string|null
    */
    public function getWebvttObjectName()
    {
        return $this->container['webvttObjectName'];
    }

    /**
    * Sets webvttObjectName
    *
    * @param string|null $webvttObjectName 截取雪碧图后，Web VTT 文件的输出路径，只能为相对路径。如果不填，则默认为相对路径：{inputName}_imageSprite_{雪碧图_id}.vtt
    *
    * @return $this
    */
    public function setWebvttObjectName($webvttObjectName)
    {
        $this->container['webvttObjectName'] = $webvttObjectName;
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

