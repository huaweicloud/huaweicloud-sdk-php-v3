<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrashArtifactModelForDelete implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrashArtifactModelForDelete';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  仓库id
    * fomat  仓库类型
    * uri  URI
    * status  状态
    * includePattern  路径白名单
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fomat' => 'string',
            'uri' => 'string',
            'status' => 'string',
            'includePattern' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  仓库id
    * fomat  仓库类型
    * uri  URI
    * status  状态
    * includePattern  路径白名单
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fomat' => null,
        'uri' => null,
        'status' => null,
        'includePattern' => null
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
    * id  仓库id
    * fomat  仓库类型
    * uri  URI
    * status  状态
    * includePattern  路径白名单
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fomat' => 'fomat',
            'uri' => 'uri',
            'status' => 'status',
            'includePattern' => 'include_pattern'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  仓库id
    * fomat  仓库类型
    * uri  URI
    * status  状态
    * includePattern  路径白名单
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fomat' => 'setFomat',
            'uri' => 'setUri',
            'status' => 'setStatus',
            'includePattern' => 'setIncludePattern'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  仓库id
    * fomat  仓库类型
    * uri  URI
    * status  状态
    * includePattern  路径白名单
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fomat' => 'getFomat',
            'uri' => 'getUri',
            'status' => 'getStatus',
            'includePattern' => 'getIncludePattern'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['fomat'] = isset($data['fomat']) ? $data['fomat'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['includePattern'] = isset($data['includePattern']) ? $data['includePattern'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['fomat'] === null) {
            $invalidProperties[] = "'fomat' can't be null";
        }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets id
    *  仓库id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 仓库id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fomat
    *  仓库类型
    *
    * @return string
    */
    public function getFomat()
    {
        return $this->container['fomat'];
    }

    /**
    * Sets fomat
    *
    * @param string $fomat 仓库类型
    *
    * @return $this
    */
    public function setFomat($fomat)
    {
        $this->container['fomat'] = $fomat;
        return $this;
    }

    /**
    * Gets uri
    *  URI
    *
    * @return string
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string $uri URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets includePattern
    *  路径白名单
    *
    * @return string|null
    */
    public function getIncludePattern()
    {
        return $this->container['includePattern'];
    }

    /**
    * Sets includePattern
    *
    * @param string|null $includePattern 路径白名单
    *
    * @return $this
    */
    public function setIncludePattern($includePattern)
    {
        $this->container['includePattern'] = $includePattern;
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

