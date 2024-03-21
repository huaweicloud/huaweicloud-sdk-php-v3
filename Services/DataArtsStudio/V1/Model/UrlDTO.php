<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  url路径名称
    * contains  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'contains' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  url路径名称
    * contains  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'contains' => null
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
    * name  url路径名称
    * contains  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'contains' => 'contains'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  url路径名称
    * contains  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'contains' => 'setContains'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  url路径名称
    * contains  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'contains' => 'getContains'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contains'] = isset($data['contains']) ? $data['contains'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 65535)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  url路径名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name url路径名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets contains
    *  父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @return bool|null
    */
    public function getContains()
    {
        return $this->container['contains'];
    }

    /**
    * Sets contains
    *
    * @param bool|null $contains 父权限集是否包含此权限, true包含, false不包含, null未检测
    *
    * @return $this
    */
    public function setContains($contains)
    {
        $this->container['contains'] = $contains;
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

