<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentMount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentMount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  挂载路径
    * subPath  挂载路径的子路径
    * readOnly  是否只读
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'subPath' => 'string',
            'readOnly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  挂载路径
    * subPath  挂载路径的子路径
    * readOnly  是否只读
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'subPath' => null,
        'readOnly' => null
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
    * path  挂载路径
    * subPath  挂载路径的子路径
    * readOnly  是否只读
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'subPath' => 'subPath',
            'readOnly' => 'readOnly'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  挂载路径
    * subPath  挂载路径的子路径
    * readOnly  是否只读
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'subPath' => 'setSubPath',
            'readOnly' => 'setReadOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  挂载路径
    * subPath  挂载路径的子路径
    * readOnly  是否只读
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'subPath' => 'getSubPath',
            'readOnly' => 'getReadOnly'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['subPath'] = isset($data['subPath']) ? $data['subPath'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['readOnly'] === null) {
            $invalidProperties[] = "'readOnly' can't be null";
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
    * Gets path
    *  挂载路径
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 挂载路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets subPath
    *  挂载路径的子路径
    *
    * @return string|null
    */
    public function getSubPath()
    {
        return $this->container['subPath'];
    }

    /**
    * Sets subPath
    *
    * @param string|null $subPath 挂载路径的子路径
    *
    * @return $this
    */
    public function setSubPath($subPath)
    {
        $this->container['subPath'] = $subPath;
        return $this;
    }

    /**
    * Gets readOnly
    *  是否只读
    *
    * @return bool
    */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
    * Sets readOnly
    *
    * @param bool $readOnly 是否只读
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
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

