<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPluginInfoListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPluginInfoListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名称
    * port  端口
    * pluginVersion  插件版本
    * installed  是否已安装
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'port' => 'string',
            'pluginVersion' => 'string',
            'installed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名称
    * port  端口
    * pluginVersion  插件版本
    * installed  是否已安装
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'port' => null,
        'pluginVersion' => null,
        'installed' => null
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
    * pluginName  插件名称
    * port  端口
    * pluginVersion  插件版本
    * installed  是否已安装
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'port' => 'port',
            'pluginVersion' => 'plugin_version',
            'installed' => 'installed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名称
    * port  端口
    * pluginVersion  插件版本
    * installed  是否已安装
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'port' => 'setPort',
            'pluginVersion' => 'setPluginVersion',
            'installed' => 'setInstalled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名称
    * port  端口
    * pluginVersion  插件版本
    * installed  是否已安装
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'port' => 'getPort',
            'pluginVersion' => 'getPluginVersion',
            'installed' => 'getInstalled'
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
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['pluginVersion'] = isset($data['pluginVersion']) ? $data['pluginVersion'] : null;
        $this->container['installed'] = isset($data['installed']) ? $data['installed'] : null;
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
    *  插件名称
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
    * @param string|null $pluginName 插件名称
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets port
    *  端口
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets pluginVersion
    *  插件版本
    *
    * @return string|null
    */
    public function getPluginVersion()
    {
        return $this->container['pluginVersion'];
    }

    /**
    * Sets pluginVersion
    *
    * @param string|null $pluginVersion 插件版本
    *
    * @return $this
    */
    public function setPluginVersion($pluginVersion)
    {
        $this->container['pluginVersion'] = $pluginVersion;
        return $this;
    }

    /**
    * Gets installed
    *  是否已安装
    *
    * @return string|null
    */
    public function getInstalled()
    {
        return $this->container['installed'];
    }

    /**
    * Sets installed
    *
    * @param string|null $installed 是否已安装
    *
    * @return $this
    */
    public function setInstalled($installed)
    {
        $this->container['installed'] = $installed;
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

