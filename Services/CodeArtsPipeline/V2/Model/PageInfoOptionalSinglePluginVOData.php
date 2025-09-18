<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageInfoOptionalSinglePluginVOData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageInfoOptionalSinglePluginVO_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * publisherId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'displayName' => 'string',
            'pluginAttribution' => 'string',
            'iconUrl' => 'string',
            'description' => 'string',
            'publisherId' => 'string',
            'manifestVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * publisherId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'displayName' => null,
        'pluginAttribution' => null,
        'iconUrl' => null,
        'description' => null,
        'publisherId' => null,
        'manifestVersion' => null
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
    * name  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * publisherId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'displayName' => 'display_name',
            'pluginAttribution' => 'plugin_attribution',
            'iconUrl' => 'icon_url',
            'description' => 'description',
            'publisherId' => 'publisher_id',
            'manifestVersion' => 'manifest_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * publisherId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'pluginAttribution' => 'setPluginAttribution',
            'iconUrl' => 'setIconUrl',
            'description' => 'setDescription',
            'publisherId' => 'setPublisherId',
            'manifestVersion' => 'setManifestVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * publisherId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'pluginAttribution' => 'getPluginAttribution',
            'iconUrl' => 'getIconUrl',
            'description' => 'getDescription',
            'publisherId' => 'getPublisherId',
            'manifestVersion' => 'getManifestVersion'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['publisherId'] = isset($data['publisherId']) ? $data['publisherId'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
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
    * Gets name
    *  **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 扩展插件唯一标识。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
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
    * @param string|null $displayName **参数解释**： 扩展插件在插件市场和流水线显示的名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPluginAttribution()
    {
        return $this->container['pluginAttribution'];
    }

    /**
    * Sets pluginAttribution
    *
    * @param string|null $pluginAttribution **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets iconUrl
    *  **参数解释**： 图标URL。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
    * Sets iconUrl
    *
    * @param string|null $iconUrl **参数解释**： 图标URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 插件描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets publisherId
    *  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublisherId()
    {
        return $this->container['publisherId'];
    }

    /**
    * Sets publisherId
    *
    * @param string|null $publisherId **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublisherId($publisherId)
    {
        $this->container['publisherId'] = $publisherId;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion **参数解释**： 版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
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

