<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareFaceByFileRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareFaceByFileRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image1File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    * image2File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image1File' => '\SplFileObject',
            'image2File' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image1File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    * image2File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image1File' => 'binary',
        'image2File' => 'binary'
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
    * image1File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    * image2File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image1File' => 'image1_file',
            'image2File' => 'image2_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image1File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    * image2File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @var string[]
    */
    protected static $setters = [
            'image1File' => 'setImage1File',
            'image2File' => 'setImage2File'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image1File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    * image2File  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @var string[]
    */
    protected static $getters = [
            'image1File' => 'getImage1File',
            'image2File' => 'getImage2File'
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
        $this->container['image1File'] = isset($data['image1File']) ? $data['image1File'] : null;
        $this->container['image2File'] = isset($data['image2File']) ? $data['image2File'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['image1File'] === null) {
            $invalidProperties[] = "'image1File' can't be null";
        }
        if ($this->container['image2File'] === null) {
            $invalidProperties[] = "'image2File' can't be null";
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
    * Gets image1File
    *  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @return \SplFileObject
    */
    public function getImage1File()
    {
        return $this->container['image1File'];
    }

    /**
    * Sets image1File
    *
    * @param \SplFileObject $image1File 本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @return $this
    */
    public function setImage1File($image1File)
    {
        $this->container['image1File'] = $image1File;
        return $this;
    }

    /**
    * Gets image2File
    *  本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @return \SplFileObject
    */
    public function getImage2File()
    {
        return $this->container['image2File'];
    }

    /**
    * Sets image2File
    *
    * @param \SplFileObject $image2File 本地图片文件，图片不能超过8MB，建议小于1MB。上传文件时，请求格式为multipart。
    *
    * @return $this
    */
    public function setImage2File($image2File)
    {
        $this->container['image2File'] = $image2File;
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

