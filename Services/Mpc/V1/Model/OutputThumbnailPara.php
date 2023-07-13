<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputThumbnailPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputThumbnailPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalPictures  抽帧图片张数
    * width  抽帧图片宽度
    * height  抽帧图片高度
    * fileName  抽帧文件名
    * output  output
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalPictures' => 'int',
            'width' => 'int',
            'height' => 'int',
            'fileName' => 'string',
            'output' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalPictures  抽帧图片张数
    * width  抽帧图片宽度
    * height  抽帧图片高度
    * fileName  抽帧文件名
    * output  output
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalPictures' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'fileName' => null,
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
    * totalPictures  抽帧图片张数
    * width  抽帧图片宽度
    * height  抽帧图片高度
    * fileName  抽帧文件名
    * output  output
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalPictures' => 'total_pictures',
            'width' => 'width',
            'height' => 'height',
            'fileName' => 'file_name',
            'output' => 'output'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalPictures  抽帧图片张数
    * width  抽帧图片宽度
    * height  抽帧图片高度
    * fileName  抽帧文件名
    * output  output
    *
    * @var string[]
    */
    protected static $setters = [
            'totalPictures' => 'setTotalPictures',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'fileName' => 'setFileName',
            'output' => 'setOutput'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalPictures  抽帧图片张数
    * width  抽帧图片宽度
    * height  抽帧图片高度
    * fileName  抽帧文件名
    * output  output
    *
    * @var string[]
    */
    protected static $getters = [
            'totalPictures' => 'getTotalPictures',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'fileName' => 'getFileName',
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
        $this->container['totalPictures'] = isset($data['totalPictures']) ? $data['totalPictures'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
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
            if (!is_null($this->container['totalPictures']) && ($this->container['totalPictures'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalPictures', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalPictures']) && ($this->container['totalPictures'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalPictures', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
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
    * Gets totalPictures
    *  抽帧图片张数
    *
    * @return int|null
    */
    public function getTotalPictures()
    {
        return $this->container['totalPictures'];
    }

    /**
    * Sets totalPictures
    *
    * @param int|null $totalPictures 抽帧图片张数
    *
    * @return $this
    */
    public function setTotalPictures($totalPictures)
    {
        $this->container['totalPictures'] = $totalPictures;
        return $this;
    }

    /**
    * Gets width
    *  抽帧图片宽度
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
    * @param int|null $width 抽帧图片宽度
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
    *  抽帧图片高度
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
    * @param int|null $height 抽帧图片高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets fileName
    *  抽帧文件名
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 抽帧文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
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

