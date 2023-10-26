<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowImageWatermarkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowImageWatermarkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * file  待提取暗水印的图片文件。
    * markLen  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'file' => '\SplFileObject',
            'markLen' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * file  待提取暗水印的图片文件。
    * markLen  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'file' => 'binary',
        'markLen' => null
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
    * file  待提取暗水印的图片文件。
    * markLen  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'file' => 'file',
            'markLen' => 'mark_len'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * file  待提取暗水印的图片文件。
    * markLen  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @var string[]
    */
    protected static $setters = [
            'file' => 'setFile',
            'markLen' => 'setMarkLen'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * file  待提取暗水印的图片文件。
    * markLen  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @var string[]
    */
    protected static $getters = [
            'file' => 'getFile',
            'markLen' => 'getMarkLen'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['markLen'] = isset($data['markLen']) ? $data['markLen'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
            if (!is_null($this->container['markLen']) && (mb_strlen($this->container['markLen']) > 32)) {
                $invalidProperties[] = "invalid value for 'markLen', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['markLen']) && (mb_strlen($this->container['markLen']) < 0)) {
                $invalidProperties[] = "invalid value for 'markLen', the character length must be bigger than or equal to 0.";
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
    * Gets file
    *  待提取暗水印的图片文件。
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file 待提取暗水印的图片文件。
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets markLen
    *  指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @return string|null
    */
    public function getMarkLen()
    {
        return $this->container['markLen'];
    }

    /**
    * Sets markLen
    *
    * @param string|null $markLen 指定待提取水印的长度，mark_len长度大于0，小于32。设置后可以提升水印提取性能
    *
    * @return $this
    */
    public function setMarkLen($markLen)
    {
        $this->container['markLen'] = $markLen;
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

