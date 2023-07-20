<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadGroupPackageReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadGroupPackageReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paths  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    * group  所属资源分组名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paths' => 'string[]',
            'group' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paths  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    * group  所属资源分组名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paths' => null,
        'group' => null
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
    * paths  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    * group  所属资源分组名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paths' => 'paths',
            'group' => 'group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paths  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    * group  所属资源分组名。
    *
    * @var string[]
    */
    protected static $setters = [
            'paths' => 'setPaths',
            'group' => 'setGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paths  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    * group  所属资源分组名。
    *
    * @var string[]
    */
    protected static $getters = [
            'paths' => 'getPaths',
            'group' => 'getGroup'
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
        $this->container['paths'] = isset($data['paths']) ? $data['paths'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['paths'] === null) {
            $invalidProperties[] = "'paths' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
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
    * Gets paths
    *  用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    *
    * @return string[]
    */
    public function getPaths()
    {
        return $this->container['paths'];
    }

    /**
    * Sets paths
    *
    * @param string[] $paths 用户OBS对象路径列表，OBS对象路径为OBS对象URL。
    *
    * @return $this
    */
    public function setPaths($paths)
    {
        $this->container['paths'] = $paths;
        return $this;
    }

    /**
    * Gets group
    *  所属资源分组名。
    *
    * @return string
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string $group 所属资源分组名。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
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

