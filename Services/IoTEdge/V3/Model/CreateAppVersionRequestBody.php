<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAppVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAppVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chart  chart包。当前仅支持tgz文件格式。
    * images  应用包含的镜像列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chart' => '\SplFileObject',
            'images' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chart  chart包。当前仅支持tgz文件格式。
    * images  应用包含的镜像列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chart' => 'binary',
        'images' => null
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
    * chart  chart包。当前仅支持tgz文件格式。
    * images  应用包含的镜像列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chart' => 'chart',
            'images' => 'images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chart  chart包。当前仅支持tgz文件格式。
    * images  应用包含的镜像列表
    *
    * @var string[]
    */
    protected static $setters = [
            'chart' => 'setChart',
            'images' => 'setImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chart  chart包。当前仅支持tgz文件格式。
    * images  应用包含的镜像列表
    *
    * @var string[]
    */
    protected static $getters = [
            'chart' => 'getChart',
            'images' => 'getImages'
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
        $this->container['chart'] = isset($data['chart']) ? $data['chart'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chart'] === null) {
            $invalidProperties[] = "'chart' can't be null";
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
    * Gets chart
    *  chart包。当前仅支持tgz文件格式。
    *
    * @return \SplFileObject
    */
    public function getChart()
    {
        return $this->container['chart'];
    }

    /**
    * Sets chart
    *
    * @param \SplFileObject $chart chart包。当前仅支持tgz文件格式。
    *
    * @return $this
    */
    public function setChart($chart)
    {
        $this->container['chart'] = $chart;
        return $this;
    }

    /**
    * Gets images
    *  应用包含的镜像列表
    *
    * @return string|null
    */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
    * Sets images
    *
    * @param string|null $images 应用包含的镜像列表
    *
    * @return $this
    */
    public function setImages($images)
    {
        $this->container['images'] = $images;
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

