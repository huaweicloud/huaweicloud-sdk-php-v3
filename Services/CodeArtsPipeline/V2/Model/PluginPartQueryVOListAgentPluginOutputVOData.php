<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginPartQueryVOListAgentPluginOutputVOData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginPartQueryVOListAgentPluginOutputVO_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * workspaceId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * outputKey  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    * outputValue  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'pluginName' => 'string',
            'version' => 'string',
            'workspaceId' => 'string',
            'outputKey' => 'string',
            'outputValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * workspaceId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * outputKey  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    * outputValue  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'pluginName' => null,
        'version' => null,
        'workspaceId' => null,
        'outputKey' => null,
        'outputValue' => null
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
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * workspaceId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * outputKey  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    * outputValue  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'pluginName' => 'plugin_name',
            'version' => 'version',
            'workspaceId' => 'workspace_id',
            'outputKey' => 'output_key',
            'outputValue' => 'output_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * workspaceId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * outputKey  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    * outputValue  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'pluginName' => 'setPluginName',
            'version' => 'setVersion',
            'workspaceId' => 'setWorkspaceId',
            'outputKey' => 'setOutputKey',
            'outputValue' => 'setOutputValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * workspaceId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * outputKey  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    * outputValue  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'pluginName' => 'getPluginName',
            'version' => 'getVersion',
            'workspaceId' => 'getWorkspaceId',
            'outputKey' => 'getOutputKey',
            'outputValue' => 'getOutputValue'
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['outputKey'] = isset($data['outputKey']) ? $data['outputKey'] : null;
        $this->container['outputValue'] = isset($data['outputValue']) ? $data['outputValue'] : null;
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
    *  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
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
    * @param string|null $uniqueId **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets pluginName
    *  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
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
    * @param string|null $pluginName **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
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
    * @param string|null $version **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
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
    * @param string|null $workspaceId **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets outputKey
    *  **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOutputKey()
    {
        return $this->container['outputKey'];
    }

    /**
    * Sets outputKey
    *
    * @param string|null $outputKey **参数解释**： 定义的插件输出名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOutputKey($outputKey)
    {
        $this->container['outputKey'] = $outputKey;
        return $this;
    }

    /**
    * Gets outputValue
    *  **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOutputValue()
    {
        return $this->container['outputValue'];
    }

    /**
    * Sets outputValue
    *
    * @param string|null $outputValue **参数解释**： 定义的插件输出内容。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOutputValue($outputValue)
    {
        $this->container['outputValue'] = $outputValue;
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

