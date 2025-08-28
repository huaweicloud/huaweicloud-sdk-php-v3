<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefaultPluginInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefaultPluginInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginType  pluginType
    * supportDefault  支持默认插件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum',
            'supportDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginType  pluginType
    * supportDefault  支持默认插件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginType' => null,
        'supportDefault' => null
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
    * pluginType  pluginType
    * supportDefault  支持默认插件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginType' => 'plugin_type',
            'supportDefault' => 'support_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginType  pluginType
    * supportDefault  支持默认插件。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginType' => 'setPluginType',
            'supportDefault' => 'setSupportDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginType  pluginType
    * supportDefault  支持默认插件。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginType' => 'getPluginType',
            'supportDefault' => 'getSupportDefault'
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
        $this->container['pluginType'] = isset($data['pluginType']) ? $data['pluginType'] : null;
        $this->container['supportDefault'] = isset($data['supportDefault']) ? $data['supportDefault'] : null;
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
    * Gets pluginType
    *  pluginType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum|null
    */
    public function getPluginType()
    {
        return $this->container['pluginType'];
    }

    /**
    * Sets pluginType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum|null $pluginType pluginType
    *
    * @return $this
    */
    public function setPluginType($pluginType)
    {
        $this->container['pluginType'] = $pluginType;
        return $this;
    }

    /**
    * Gets supportDefault
    *  支持默认插件。
    *
    * @return bool|null
    */
    public function getSupportDefault()
    {
        return $this->container['supportDefault'];
    }

    /**
    * Sets supportDefault
    *
    * @param bool|null $supportDefault 支持默认插件。
    *
    * @return $this
    */
    public function setSupportDefault($supportDefault)
    {
        $this->container['supportDefault'] = $supportDefault;
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

