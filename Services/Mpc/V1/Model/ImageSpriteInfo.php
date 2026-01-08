<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageSpriteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageSpriteInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rowCount  雪碧图中小图的行数。
    * columnCount  雪碧图中小图的列数。
    * totalCount  雪碧图中小图数量。
    * width  雪碧图小图宽度
    * height  雪碧图小图高度
    * outputImageName  每一张雪碧图大图的路径。
    * outputWebvttName  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rowCount' => 'int',
            'columnCount' => 'int',
            'totalCount' => 'int',
            'width' => 'int',
            'height' => 'int',
            'outputImageName' => 'string[]',
            'outputWebvttName' => 'string',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rowCount  雪碧图中小图的行数。
    * columnCount  雪碧图中小图的列数。
    * totalCount  雪碧图中小图数量。
    * width  雪碧图小图宽度
    * height  雪碧图小图高度
    * outputImageName  每一张雪碧图大图的路径。
    * outputWebvttName  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rowCount' => null,
        'columnCount' => null,
        'totalCount' => null,
        'width' => null,
        'height' => null,
        'outputImageName' => null,
        'outputWebvttName' => null,
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
    * rowCount  雪碧图中小图的行数。
    * columnCount  雪碧图中小图的列数。
    * totalCount  雪碧图中小图数量。
    * width  雪碧图小图宽度
    * height  雪碧图小图高度
    * outputImageName  每一张雪碧图大图的路径。
    * outputWebvttName  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rowCount' => 'row_count',
            'columnCount' => 'column_count',
            'totalCount' => 'total_count',
            'width' => 'width',
            'height' => 'height',
            'outputImageName' => 'output_image_name',
            'outputWebvttName' => 'output_webvtt_name',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rowCount  雪碧图中小图的行数。
    * columnCount  雪碧图中小图的列数。
    * totalCount  雪碧图中小图数量。
    * width  雪碧图小图宽度
    * height  雪碧图小图高度
    * outputImageName  每一张雪碧图大图的路径。
    * outputWebvttName  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'rowCount' => 'setRowCount',
            'columnCount' => 'setColumnCount',
            'totalCount' => 'setTotalCount',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'outputImageName' => 'setOutputImageName',
            'outputWebvttName' => 'setOutputWebvttName',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rowCount  雪碧图中小图的行数。
    * columnCount  雪碧图中小图的列数。
    * totalCount  雪碧图中小图数量。
    * width  雪碧图小图宽度
    * height  雪碧图小图高度
    * outputImageName  每一张雪碧图大图的路径。
    * outputWebvttName  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'rowCount' => 'getRowCount',
            'columnCount' => 'getColumnCount',
            'totalCount' => 'getTotalCount',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'outputImageName' => 'getOutputImageName',
            'outputWebvttName' => 'getOutputWebvttName',
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
        $this->container['rowCount'] = isset($data['rowCount']) ? $data['rowCount'] : null;
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['outputImageName'] = isset($data['outputImageName']) ? $data['outputImageName'] : null;
        $this->container['outputWebvttName'] = isset($data['outputWebvttName']) ? $data['outputWebvttName'] : null;
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
            if (!is_null($this->container['rowCount']) && ($this->container['rowCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'rowCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['rowCount']) && ($this->container['rowCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'rowCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['columnCount']) && ($this->container['columnCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'columnCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['columnCount']) && ($this->container['columnCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'columnCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputWebvttName']) && (mb_strlen($this->container['outputWebvttName']) > 256)) {
                $invalidProperties[] = "invalid value for 'outputWebvttName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['outputWebvttName']) && (mb_strlen($this->container['outputWebvttName']) < 0)) {
                $invalidProperties[] = "invalid value for 'outputWebvttName', the character length must be bigger than or equal to 0.";
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
    * Gets rowCount
    *  雪碧图中小图的行数。
    *
    * @return int|null
    */
    public function getRowCount()
    {
        return $this->container['rowCount'];
    }

    /**
    * Sets rowCount
    *
    * @param int|null $rowCount 雪碧图中小图的行数。
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
    *  雪碧图中小图的列数。
    *
    * @return int|null
    */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /**
    * Sets columnCount
    *
    * @param int|null $columnCount 雪碧图中小图的列数。
    *
    * @return $this
    */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;
        return $this;
    }

    /**
    * Gets totalCount
    *  雪碧图中小图数量。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 雪碧图中小图数量。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets width
    *  雪碧图小图宽度
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
    * @param int|null $width 雪碧图小图宽度
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
    *  雪碧图小图高度
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
    * @param int|null $height 雪碧图小图高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets outputImageName
    *  每一张雪碧图大图的路径。
    *
    * @return string[]|null
    */
    public function getOutputImageName()
    {
        return $this->container['outputImageName'];
    }

    /**
    * Sets outputImageName
    *
    * @param string[]|null $outputImageName 每一张雪碧图大图的路径。
    *
    * @return $this
    */
    public function setOutputImageName($outputImageName)
    {
        $this->container['outputImageName'] = $outputImageName;
        return $this;
    }

    /**
    * Gets outputWebvttName
    *  雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    *
    * @return string|null
    */
    public function getOutputWebvttName()
    {
        return $this->container['outputWebvttName'];
    }

    /**
    * Sets outputWebvttName
    *
    * @param string|null $outputWebvttName 雪碧图子图位置与时间关系的 WebVtt 文件路径。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。
    *
    * @return $this
    */
    public function setOutputWebvttName($outputWebvttName)
    {
        $this->container['outputWebvttName'] = $outputWebvttName;
        return $this;
    }

    /**
    * Gets output
    *  output
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo|null $output output
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

