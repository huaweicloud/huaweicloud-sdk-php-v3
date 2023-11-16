<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginPartQueryVOListAgentPluginInputVOData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginPartQueryVOListAgentPluginInputVO_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * name  名称
    * defaultValue  默认值
    * pluginName  插件名
    * version  版本
    * type  类型
    * workspaceId  租户ID
    * validation  validation
    * layoutContent  样式信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'name' => 'string',
            'defaultValue' => 'string',
            'pluginName' => 'string',
            'version' => 'string',
            'type' => 'string',
            'workspaceId' => 'string',
            'validation' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation',
            'layoutContent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  唯一ID
    * name  名称
    * defaultValue  默认值
    * pluginName  插件名
    * version  版本
    * type  类型
    * workspaceId  租户ID
    * validation  validation
    * layoutContent  样式信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'name' => null,
        'defaultValue' => null,
        'pluginName' => null,
        'version' => null,
        'type' => null,
        'workspaceId' => null,
        'validation' => null,
        'layoutContent' => null
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
    * uniqueId  唯一ID
    * name  名称
    * defaultValue  默认值
    * pluginName  插件名
    * version  版本
    * type  类型
    * workspaceId  租户ID
    * validation  validation
    * layoutContent  样式信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'name' => 'name',
            'defaultValue' => 'default_value',
            'pluginName' => 'plugin_name',
            'version' => 'version',
            'type' => 'type',
            'workspaceId' => 'workspace_id',
            'validation' => 'validation',
            'layoutContent' => 'layout_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  唯一ID
    * name  名称
    * defaultValue  默认值
    * pluginName  插件名
    * version  版本
    * type  类型
    * workspaceId  租户ID
    * validation  validation
    * layoutContent  样式信息
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'name' => 'setName',
            'defaultValue' => 'setDefaultValue',
            'pluginName' => 'setPluginName',
            'version' => 'setVersion',
            'type' => 'setType',
            'workspaceId' => 'setWorkspaceId',
            'validation' => 'setValidation',
            'layoutContent' => 'setLayoutContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  唯一ID
    * name  名称
    * defaultValue  默认值
    * pluginName  插件名
    * version  版本
    * type  类型
    * workspaceId  租户ID
    * validation  validation
    * layoutContent  样式信息
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'name' => 'getName',
            'defaultValue' => 'getDefaultValue',
            'pluginName' => 'getPluginName',
            'version' => 'getVersion',
            'type' => 'getType',
            'workspaceId' => 'getWorkspaceId',
            'validation' => 'getValidation',
            'layoutContent' => 'getLayoutContent'
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
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['layoutContent'] = isset($data['layoutContent']) ? $data['layoutContent'] : null;
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
    * Gets uniqueId
    *  唯一ID
    *
    * @return string|null
    */
    public function getUniqueId()
    {
        return $this->container['uniqueId'];
    }

    /**
    * Sets uniqueId
    *
    * @param string|null $uniqueId 唯一ID
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
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
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets workspaceId
    *  租户ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 租户ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets validation
    *  validation
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation|null
    */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
    * Sets validation
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionValidation|null $validation validation
    *
    * @return $this
    */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;
        return $this;
    }

    /**
    * Gets layoutContent
    *  样式信息
    *
    * @return string|null
    */
    public function getLayoutContent()
    {
        return $this->container['layoutContent'];
    }

    /**
    * Sets layoutContent
    *
    * @param string|null $layoutContent 样式信息
    *
    * @return $this
    */
    public function setLayoutContent($layoutContent)
    {
        $this->container['layoutContent'] = $layoutContent;
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

