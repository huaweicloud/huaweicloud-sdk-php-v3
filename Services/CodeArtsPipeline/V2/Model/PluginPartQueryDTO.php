<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginPartQueryDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginPartQueryDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * version  版本号
    * pluginAttribution  插件属性,custom/official
    * versionAttribution  版本属性,draft/formal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'displayName' => 'string',
            'version' => 'string',
            'pluginAttribution' => 'string',
            'versionAttribution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名
    * displayName  展示名
    * version  版本号
    * pluginAttribution  插件属性,custom/official
    * versionAttribution  版本属性,draft/formal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'displayName' => null,
        'version' => null,
        'pluginAttribution' => null,
        'versionAttribution' => null
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
    * displayName  展示名
    * version  版本号
    * pluginAttribution  插件属性,custom/official
    * versionAttribution  版本属性,draft/formal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'version' => 'version',
            'pluginAttribution' => 'plugin_attribution',
            'versionAttribution' => 'version_attribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名
    * displayName  展示名
    * version  版本号
    * pluginAttribution  插件属性,custom/official
    * versionAttribution  版本属性,draft/formal
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'version' => 'setVersion',
            'pluginAttribution' => 'setPluginAttribution',
            'versionAttribution' => 'setVersionAttribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名
    * displayName  展示名
    * version  版本号
    * pluginAttribution  插件属性,custom/official
    * versionAttribution  版本属性,draft/formal
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'version' => 'getVersion',
            'pluginAttribution' => 'getPluginAttribution',
            'versionAttribution' => 'getVersionAttribution'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pluginName'] === null) {
            $invalidProperties[] = "'pluginName' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['pluginAttribution'] === null) {
            $invalidProperties[] = "'pluginAttribution' can't be null";
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
    * Gets pluginName
    *  插件名
    *
    * @return string
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string $pluginName 插件名
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets displayName
    *  展示名
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 展示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets version
    *  版本号
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  插件属性,custom/official
    *
    * @return string
    */
    public function getPluginAttribution()
    {
        return $this->container['pluginAttribution'];
    }

    /**
    * Sets pluginAttribution
    *
    * @param string $pluginAttribution 插件属性,custom/official
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets versionAttribution
    *  版本属性,draft/formal
    *
    * @return string|null
    */
    public function getVersionAttribution()
    {
        return $this->container['versionAttribution'];
    }

    /**
    * Sets versionAttribution
    *
    * @param string|null $versionAttribution 版本属性,draft/formal
    *
    * @return $this
    */
    public function setVersionAttribution($versionAttribution)
    {
        $this->container['versionAttribution'] = $versionAttribution;
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

