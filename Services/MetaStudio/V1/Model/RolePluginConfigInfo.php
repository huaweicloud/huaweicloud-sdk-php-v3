<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RolePluginConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RolePluginConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginType  pluginType
    * pluginSource  pluginSource
    * pluginConfigId  插件配置ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum',
            'pluginSource' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\PluginSourceEnum',
            'pluginConfigId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginType  pluginType
    * pluginSource  pluginSource
    * pluginConfigId  插件配置ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginType' => null,
        'pluginSource' => null,
        'pluginConfigId' => null
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
    * pluginSource  pluginSource
    * pluginConfigId  插件配置ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginType' => 'plugin_type',
            'pluginSource' => 'plugin_source',
            'pluginConfigId' => 'plugin_config_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginType  pluginType
    * pluginSource  pluginSource
    * pluginConfigId  插件配置ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginType' => 'setPluginType',
            'pluginSource' => 'setPluginSource',
            'pluginConfigId' => 'setPluginConfigId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginType  pluginType
    * pluginSource  pluginSource
    * pluginConfigId  插件配置ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginType' => 'getPluginType',
            'pluginSource' => 'getPluginSource',
            'pluginConfigId' => 'getPluginConfigId'
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
        $this->container['pluginSource'] = isset($data['pluginSource']) ? $data['pluginSource'] : null;
        $this->container['pluginConfigId'] = isset($data['pluginConfigId']) ? $data['pluginConfigId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pluginType'] === null) {
            $invalidProperties[] = "'pluginType' can't be null";
        }
        if ($this->container['pluginSource'] === null) {
            $invalidProperties[] = "'pluginSource' can't be null";
        }
            if (!is_null($this->container['pluginConfigId']) && (mb_strlen($this->container['pluginConfigId']) > 64)) {
                $invalidProperties[] = "invalid value for 'pluginConfigId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pluginConfigId']) && (mb_strlen($this->container['pluginConfigId']) < 0)) {
                $invalidProperties[] = "invalid value for 'pluginConfigId', the character length must be bigger than or equal to 0.";
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
    * Gets pluginType
    *  pluginType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum
    */
    public function getPluginType()
    {
        return $this->container['pluginType'];
    }

    /**
    * Sets pluginType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginTypeEnum $pluginType pluginType
    *
    * @return $this
    */
    public function setPluginType($pluginType)
    {
        $this->container['pluginType'] = $pluginType;
        return $this;
    }

    /**
    * Gets pluginSource
    *  pluginSource
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginSourceEnum
    */
    public function getPluginSource()
    {
        return $this->container['pluginSource'];
    }

    /**
    * Sets pluginSource
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\PluginSourceEnum $pluginSource pluginSource
    *
    * @return $this
    */
    public function setPluginSource($pluginSource)
    {
        $this->container['pluginSource'] = $pluginSource;
        return $this;
    }

    /**
    * Gets pluginConfigId
    *  插件配置ID。
    *
    * @return string|null
    */
    public function getPluginConfigId()
    {
        return $this->container['pluginConfigId'];
    }

    /**
    * Sets pluginConfigId
    *
    * @param string|null $pluginConfigId 插件配置ID。
    *
    * @return $this
    */
    public function setPluginConfigId($pluginConfigId)
    {
        $this->container['pluginConfigId'] = $pluginConfigId;
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

