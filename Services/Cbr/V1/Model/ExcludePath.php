<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExcludePath implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExcludePath';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pathName  备份目录
    * excludePathName  排除目录列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pathName' => 'string',
            'excludePathName' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pathName  备份目录
    * excludePathName  排除目录列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pathName' => null,
        'excludePathName' => null
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
    * pathName  备份目录
    * excludePathName  排除目录列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pathName' => 'path_name',
            'excludePathName' => 'exclude_path_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pathName  备份目录
    * excludePathName  排除目录列表
    *
    * @var string[]
    */
    protected static $setters = [
            'pathName' => 'setPathName',
            'excludePathName' => 'setExcludePathName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pathName  备份目录
    * excludePathName  排除目录列表
    *
    * @var string[]
    */
    protected static $getters = [
            'pathName' => 'getPathName',
            'excludePathName' => 'getExcludePathName'
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
        $this->container['pathName'] = isset($data['pathName']) ? $data['pathName'] : null;
        $this->container['excludePathName'] = isset($data['excludePathName']) ? $data['excludePathName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets pathName
    *  备份目录
    *
    * @return string|null
    */
    public function getPathName()
    {
        return $this->container['pathName'];
    }

    /**
    * Sets pathName
    *
    * @param string|null $pathName 备份目录
    *
    * @return $this
    */
    public function setPathName($pathName)
    {
        $this->container['pathName'] = $pathName;
        return $this;
    }

    /**
    * Gets excludePathName
    *  排除目录列表
    *
    * @return string[]|null
    */
    public function getExcludePathName()
    {
        return $this->container['excludePathName'];
    }

    /**
    * Sets excludePathName
    *
    * @param string[]|null $excludePathName 排除目录列表
    *
    * @return $this
    */
    public function setExcludePathName($excludePathName)
    {
        $this->container['excludePathName'] = $excludePathName;
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

