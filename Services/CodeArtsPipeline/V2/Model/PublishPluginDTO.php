<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublishPluginDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublishPluginDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名
    * version  版本
    * publisherUniqueId  发布商ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'version' => 'string',
            'publisherUniqueId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名
    * version  版本
    * publisherUniqueId  发布商ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'version' => null,
        'publisherUniqueId' => null
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
    * pluginName  插件名
    * version  版本
    * publisherUniqueId  发布商ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'version' => 'version',
            'publisherUniqueId' => 'publisher_unique_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名
    * version  版本
    * publisherUniqueId  发布商ID
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'version' => 'setVersion',
            'publisherUniqueId' => 'setPublisherUniqueId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名
    * version  版本
    * publisherUniqueId  发布商ID
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'version' => 'getVersion',
            'publisherUniqueId' => 'getPublisherUniqueId'
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['publisherUniqueId'] = isset($data['publisherUniqueId']) ? $data['publisherUniqueId'] : null;
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
    * Gets pluginName
    *  插件名
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets publisherUniqueId
    *  发布商ID
    *
    * @return string|null
    */
    public function getPublisherUniqueId()
    {
        return $this->container['publisherUniqueId'];
    }

    /**
    * Sets publisherUniqueId
    *
    * @param string|null $publisherUniqueId 发布商ID
    *
    * @return $this
    */
    public function setPublisherUniqueId($publisherUniqueId)
    {
        $this->container['publisherUniqueId'] = $publisherUniqueId;
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

