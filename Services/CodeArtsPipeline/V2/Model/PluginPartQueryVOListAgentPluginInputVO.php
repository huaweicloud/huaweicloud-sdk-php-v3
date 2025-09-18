<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginPartQueryVOListAgentPluginInputVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginPartQueryVOListAgentPluginInputVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    * data  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'displayName' => 'string',
            'data' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    * data  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'displayName' => null,
        'data' => null
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
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    * data  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    * data  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    * data  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'data' => 'getData'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    *  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
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
    * @param string|null $pluginName **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
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
    *  **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**： 扩展插件展示名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets data
    *  **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginPartQueryVOListAgentPluginInputVOData[]|null $data **参数解释**： 插件输入项详细信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

