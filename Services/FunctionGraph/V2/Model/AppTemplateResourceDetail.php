<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppTemplateResourceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppTemplateResourceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  资源名称
    * icon  图标文件（base64编码）
    * href  超链接地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'icon' => 'string',
            'href' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  资源名称
    * icon  图标文件（base64编码）
    * href  超链接地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'icon' => null,
        'href' => null
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
    * resourceName  资源名称
    * icon  图标文件（base64编码）
    * href  超链接地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'icon' => 'icon',
            'href' => 'href'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  资源名称
    * icon  图标文件（base64编码）
    * href  超链接地址
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'icon' => 'setIcon',
            'href' => 'setHref'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  资源名称
    * icon  图标文件（base64编码）
    * href  超链接地址
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'icon' => 'getIcon',
            'href' => 'getHref'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
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
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets icon
    *  图标文件（base64编码）
    *
    * @return string|null
    */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
    * Sets icon
    *
    * @param string|null $icon 图标文件（base64编码）
    *
    * @return $this
    */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;
        return $this;
    }

    /**
    * Gets href
    *  超链接地址
    *
    * @return string|null
    */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
    * Sets href
    *
    * @param string|null $href 超链接地址
    *
    * @return $this
    */
    public function setHref($href)
    {
        $this->container['href'] = $href;
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

