<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThumbnailPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThumbnailPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    * time  采样截图的时间间隔值。  默认值：12。  单位：秒
    * startTime  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    * duration  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    * dots  指定时间截图时的时间点数组，最多支持10个。
    * outputFilename  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
    * format  截图文件格式。  取值如下：  1：表示jpg格式
    * width  图片宽度  取值范围：(96,3840]  单位：px
    * height  图片高度  取值范围：(96,2160]  单位：px
    * maxLength  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'time' => 'int',
            'startTime' => 'int',
            'duration' => 'int',
            'dots' => 'int[]',
            'outputFilename' => 'string',
            'format' => 'int',
            'width' => 'int',
            'height' => 'int',
            'maxLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    * time  采样截图的时间间隔值。  默认值：12。  单位：秒
    * startTime  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    * duration  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    * dots  指定时间截图时的时间点数组，最多支持10个。
    * outputFilename  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
    * format  截图文件格式。  取值如下：  1：表示jpg格式
    * width  图片宽度  取值范围：(96,3840]  单位：px
    * height  图片高度  取值范围：(96,2160]  单位：px
    * maxLength  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'time' => 'int32',
        'startTime' => 'int32',
        'duration' => 'int32',
        'dots' => null,
        'outputFilename' => null,
        'format' => 'int32',
        'width' => null,
        'height' => null,
        'maxLength' => 'int32'
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
    * type  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    * time  采样截图的时间间隔值。  默认值：12。  单位：秒
    * startTime  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    * duration  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    * dots  指定时间截图时的时间点数组，最多支持10个。
    * outputFilename  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
    * format  截图文件格式。  取值如下：  1：表示jpg格式
    * width  图片宽度  取值范围：(96,3840]  单位：px
    * height  图片高度  取值范围：(96,2160]  单位：px
    * maxLength  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'time' => 'time',
            'startTime' => 'start_time',
            'duration' => 'duration',
            'dots' => 'dots',
            'outputFilename' => 'output_filename',
            'format' => 'format',
            'width' => 'width',
            'height' => 'height',
            'maxLength' => 'max_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    * time  采样截图的时间间隔值。  默认值：12。  单位：秒
    * startTime  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    * duration  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    * dots  指定时间截图时的时间点数组，最多支持10个。
    * outputFilename  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
    * format  截图文件格式。  取值如下：  1：表示jpg格式
    * width  图片宽度  取值范围：(96,3840]  单位：px
    * height  图片高度  取值范围：(96,2160]  单位：px
    * maxLength  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'time' => 'setTime',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'dots' => 'setDots',
            'outputFilename' => 'setOutputFilename',
            'format' => 'setFormat',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'maxLength' => 'setMaxLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    * time  采样截图的时间间隔值。  默认值：12。  单位：秒
    * startTime  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    * duration  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    * dots  指定时间截图时的时间点数组，最多支持10个。
    * outputFilename  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
    * format  截图文件格式。  取值如下：  1：表示jpg格式
    * width  图片宽度  取值范围：(96,3840]  单位：px
    * height  图片高度  取值范围：(96,2160]  单位：px
    * maxLength  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'time' => 'getTime',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'dots' => 'getDots',
            'outputFilename' => 'getOutputFilename',
            'format' => 'getFormat',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'maxLength' => 'getMaxLength'
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
    const TYPE_TIME = 'TIME';
    const TYPE_DOTS = 'DOTS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PERCENT,
            self::TYPE_TIME,
            self::TYPE_DOTS,
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['dots'] = isset($data['dots']) ? $data['dots'] : null;
        $this->container['outputFilename'] = isset($data['outputFilename']) ? $data['outputFilename'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['time']) && ($this->container['time'] > 100)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['time']) && ($this->container['time'] < 1)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['outputFilename']) && (mb_strlen($this->container['outputFilename']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputFilename', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['format']) && ($this->container['format'] > 100)) {
                $invalidProperties[] = "invalid value for 'format', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['format']) && ($this->container['format'] < 0)) {
                $invalidProperties[] = "invalid value for 'format', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['maxLength']) && ($this->container['maxLength'] > 3840)) {
                $invalidProperties[] = "invalid value for 'maxLength', must be smaller than or equal to 3840.";
            }
            if (!is_null($this->container['maxLength']) && ($this->container['maxLength'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxLength', must be bigger than or equal to 0.";
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
    *  采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 采样类型。  取值如下： - \"TIME\"：根据时间间隔采样截图。 - \"DOTS\"：指定时间点截图。选择同步截图时，需指定此类型。  默认值：\"TIME\"
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets time
    *  采样截图的时间间隔值。  默认值：12。  单位：秒
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 采样截图的时间间隔值。  默认值：12。  单位：秒
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets startTime
    *  采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 采样类型为“TIME”模式的开始时间，和“time”配合使用。  默认值：0。  单位：秒。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 采样类型为“TIME”模式的持续时间，和“time”、“start_time”配合使用，表示从视频文件的第“start_time”开始，持续时间为“duration”，每间隔“time”生成一张截图。 取值范围：[数字，ToEND]。“ToEND”表示持续到视频结束。  默认值： ToEND。  单位：秒。 > “duration”必须大于等0，若设置为0，则截图持续时间从“start_time”到视频结束。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets dots
    *  指定时间截图时的时间点数组，最多支持10个。
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
    * @param int[]|null $dots 指定时间截图时的时间点数组，最多支持10个。
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
    *  截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
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
    * @param string|null $outputFilename 截图输出文件名。  - 如果只抽一张图（即：按DOTS方式，指定1个时间点）则按该指定文件名输出图片。  - 如果抽多张图（即：按DOTS方式指定多个时间点或按TIME间隔截图）则输出图片名在该指定文件名基础上在增加时间点（示例：output_filename_10.jpg）。  - 如果指定了压缩抽帧图片生成tar包，则tar包按该指定文件名输出。
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
    *  截图文件格式。  取值如下：  1：表示jpg格式
    *
    * @return int|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param int|null $format 截图文件格式。  取值如下：  1：表示jpg格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets width
    *  图片宽度  取值范围：(96,3840]  单位：px
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
    * @param int|null $width 图片宽度  取值范围：(96,3840]  单位：px
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
    *  图片高度  取值范围：(96,2160]  单位：px
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
    * @param int|null $height 图片高度  取值范围：(96,2160]  单位：px
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets maxLength
    *  截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength 截图最长边的尺寸。宽边尺寸按照该尺寸与原始视频像素等比缩放计算。   取值范围：[240,3840]  默认值：480  单位：像素  > 该参数和width/height选择使用，以width/height优先，若width/height都不等于0，则图片尺寸按width/height得出；反之，则图片尺寸按 max_length 得出。  > 若该参数和width/height都未选择，则按源片源宽高输出截图
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
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

