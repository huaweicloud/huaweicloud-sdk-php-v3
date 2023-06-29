<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentAmb implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentAmb';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  组件ID。
    * componentName  组件名称。
    * componentVersion  组件版本。
    * componentDesc  组件描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'componentName' => 'string',
            'componentVersion' => 'string',
            'componentDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  组件ID。
    * componentName  组件名称。
    * componentVersion  组件版本。
    * componentDesc  组件描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'componentName' => null,
        'componentVersion' => null,
        'componentDesc' => null
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
    * componentId  组件ID。
    * componentName  组件名称。
    * componentVersion  组件版本。
    * componentDesc  组件描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'componentId',
            'componentName' => 'componentName',
            'componentVersion' => 'componentVersion',
            'componentDesc' => 'componentDesc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  组件ID。
    * componentName  组件名称。
    * componentVersion  组件版本。
    * componentDesc  组件描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'componentVersion' => 'setComponentVersion',
            'componentDesc' => 'setComponentDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  组件ID。
    * componentName  组件名称。
    * componentVersion  组件版本。
    * componentDesc  组件描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'componentVersion' => 'getComponentVersion',
            'componentDesc' => 'getComponentDesc'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['componentVersion'] = isset($data['componentVersion']) ? $data['componentVersion'] : null;
        $this->container['componentDesc'] = isset($data['componentDesc']) ? $data['componentDesc'] : null;
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
    * Gets componentId
    *  组件ID。
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件ID。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称。
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名称。
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets componentVersion
    *  组件版本。
    *
    * @return string|null
    */
    public function getComponentVersion()
    {
        return $this->container['componentVersion'];
    }

    /**
    * Sets componentVersion
    *
    * @param string|null $componentVersion 组件版本。
    *
    * @return $this
    */
    public function setComponentVersion($componentVersion)
    {
        $this->container['componentVersion'] = $componentVersion;
        return $this;
    }

    /**
    * Gets componentDesc
    *  组件描述信息。
    *
    * @return string|null
    */
    public function getComponentDesc()
    {
        return $this->container['componentDesc'];
    }

    /**
    * Sets componentDesc
    *
    * @param string|null $componentDesc 组件描述信息。
    *
    * @return $this
    */
    public function setComponentDesc($componentDesc)
    {
        $this->container['componentDesc'] = $componentDesc;
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

