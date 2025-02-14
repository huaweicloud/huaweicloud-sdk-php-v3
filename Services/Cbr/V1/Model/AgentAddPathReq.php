<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentAddPathReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentAddPathReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addPath  增加备份路径详情
    * excludePath  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addPath' => 'string[]',
            'excludePath' => '\HuaweiCloud\SDK\Cbr\V1\Model\ExcludePath[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addPath  增加备份路径详情
    * excludePath  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addPath' => null,
        'excludePath' => null
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
    * addPath  增加备份路径详情
    * excludePath  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addPath' => 'add_path',
            'excludePath' => 'exclude_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addPath  增加备份路径详情
    * excludePath  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'addPath' => 'setAddPath',
            'excludePath' => 'setExcludePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addPath  增加备份路径详情
    * excludePath  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'addPath' => 'getAddPath',
            'excludePath' => 'getExcludePath'
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
        $this->container['addPath'] = isset($data['addPath']) ? $data['addPath'] : null;
        $this->container['excludePath'] = isset($data['excludePath']) ? $data['excludePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addPath'] === null) {
            $invalidProperties[] = "'addPath' can't be null";
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
    * Gets addPath
    *  增加备份路径详情
    *
    * @return string[]
    */
    public function getAddPath()
    {
        return $this->container['addPath'];
    }

    /**
    * Sets addPath
    *
    * @param string[] $addPath 增加备份路径详情
    *
    * @return $this
    */
    public function setAddPath($addPath)
    {
        $this->container['addPath'] = $addPath;
        return $this;
    }

    /**
    * Gets excludePath
    *  增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\ExcludePath[]|null
    */
    public function getExcludePath()
    {
        return $this->container['excludePath'];
    }

    /**
    * Sets excludePath
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\ExcludePath[]|null $excludePath 增加排除目录 > 该特性目前处于公测阶段，部分region可能无法使用。
    *
    * @return $this
    */
    public function setExcludePath($excludePath)
    {
        $this->container['excludePath'] = $excludePath;
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

