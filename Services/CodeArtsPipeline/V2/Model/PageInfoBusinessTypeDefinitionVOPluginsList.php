<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageInfoBusinessTypeDefinitionVOPluginsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageInfoBusinessTypeDefinitionVO_plugins_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    * groupName  **参数解释**： 组名。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 组类型。 **取值范围**： 不涉及。
    * standard  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    * dbRecordName  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 插件属性。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    * location  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'displayName' => 'string',
            'pluginName' => 'string',
            'disabled' => 'bool',
            'groupName' => 'string',
            'groupType' => 'string',
            'standard' => 'bool',
            'dbRecordName' => 'string',
            'pluginAttribution' => 'string',
            'pluginCompositionType' => 'string',
            'runtimeAttribution' => 'string',
            'allSteps' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PageInfoBusinessTypeDefinitionVOAllSteps[]',
            'description' => 'string',
            'versionAttribution' => 'string',
            'iconUrl' => 'string',
            'multiStepEditable' => 'int',
            'location' => 'string',
            'publisherUniqueId' => 'string',
            'manifestVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    * groupName  **参数解释**： 组名。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 组类型。 **取值范围**： 不涉及。
    * standard  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    * dbRecordName  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 插件属性。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    * location  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'displayName' => null,
        'pluginName' => null,
        'disabled' => null,
        'groupName' => null,
        'groupType' => null,
        'standard' => null,
        'dbRecordName' => null,
        'pluginAttribution' => null,
        'pluginCompositionType' => null,
        'runtimeAttribution' => null,
        'allSteps' => null,
        'description' => null,
        'versionAttribution' => null,
        'iconUrl' => null,
        'multiStepEditable' => 'int32',
        'location' => null,
        'publisherUniqueId' => null,
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
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    * groupName  **参数解释**： 组名。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 组类型。 **取值范围**： 不涉及。
    * standard  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    * dbRecordName  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 插件属性。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    * location  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'displayName' => 'display_name',
            'pluginName' => 'plugin_name',
            'disabled' => 'disabled',
            'groupName' => 'group_name',
            'groupType' => 'group_type',
            'standard' => 'standard',
            'dbRecordName' => 'db_record_name',
            'pluginAttribution' => 'plugin_attribution',
            'pluginCompositionType' => 'plugin_composition_type',
            'runtimeAttribution' => 'runtime_attribution',
            'allSteps' => 'all_steps',
            'description' => 'description',
            'versionAttribution' => 'version_attribution',
            'iconUrl' => 'icon_url',
            'multiStepEditable' => 'multi_step_editable',
            'location' => 'location',
            'publisherUniqueId' => 'publisher_unique_id',
            'manifestVersion' => 'manifest_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    * groupName  **参数解释**： 组名。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 组类型。 **取值范围**： 不涉及。
    * standard  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    * dbRecordName  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 插件属性。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    * location  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'displayName' => 'setDisplayName',
            'pluginName' => 'setPluginName',
            'disabled' => 'setDisabled',
            'groupName' => 'setGroupName',
            'groupType' => 'setGroupType',
            'standard' => 'setStandard',
            'dbRecordName' => 'setDbRecordName',
            'pluginAttribution' => 'setPluginAttribution',
            'pluginCompositionType' => 'setPluginCompositionType',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'allSteps' => 'setAllSteps',
            'description' => 'setDescription',
            'versionAttribution' => 'setVersionAttribution',
            'iconUrl' => 'setIconUrl',
            'multiStepEditable' => 'setMultiStepEditable',
            'location' => 'setLocation',
            'publisherUniqueId' => 'setPublisherUniqueId',
            'manifestVersion' => 'setManifestVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    * groupName  **参数解释**： 组名。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 组类型。 **取值范围**： 不涉及。
    * standard  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    * dbRecordName  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 插件属性。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    * location  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'displayName' => 'getDisplayName',
            'pluginName' => 'getPluginName',
            'disabled' => 'getDisabled',
            'groupName' => 'getGroupName',
            'groupType' => 'getGroupType',
            'standard' => 'getStandard',
            'dbRecordName' => 'getDbRecordName',
            'pluginAttribution' => 'getPluginAttribution',
            'pluginCompositionType' => 'getPluginCompositionType',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'allSteps' => 'getAllSteps',
            'description' => 'getDescription',
            'versionAttribution' => 'getVersionAttribution',
            'iconUrl' => 'getIconUrl',
            'multiStepEditable' => 'getMultiStepEditable',
            'location' => 'getLocation',
            'publisherUniqueId' => 'getPublisherUniqueId',
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
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['dbRecordName'] = isset($data['dbRecordName']) ? $data['dbRecordName'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['allSteps'] = isset($data['allSteps']) ? $data['allSteps'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['multiStepEditable'] = isset($data['multiStepEditable']) ? $data['multiStepEditable'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['publisherUniqueId'] = isset($data['publisherUniqueId']) ? $data['publisherUniqueId'] : null;
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
    * Gets displayName
    *  **参数解释**： 展示名。 **取值范围**： 不涉及。
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
    * @param string|null $displayName **参数解释**： 展示名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets pluginName
    *  **参数解释**： 插件名。 **取值范围**： 不涉及。
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
    * @param string|null $pluginName **参数解释**： 插件名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets disabled
    *  **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled **参数解释**： 是否禁用。 **取值范围**： - true：禁用。 - false：未禁用。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 组名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**： 组名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupType
    *  **参数解释**： 组类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType **参数解释**： 组类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param bool|null $standard **参数解释**： 是否标准化的插件。 **取值范围**： - true：是。 - false：否。
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets dbRecordName
    *  **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbRecordName()
    {
        return $this->container['dbRecordName'];
    }

    /**
    * Sets dbRecordName
    *
    * @param string|null $dbRecordName **参数解释**： 插件记录名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbRecordName($dbRecordName)
    {
        $this->container['dbRecordName'] = $dbRecordName;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  **参数解释**： 插件属性。 **取值范围**： 不涉及。
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
    * @param string|null $pluginAttribution **参数解释**： 插件属性。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets pluginCompositionType
    *  **参数解释**： 组合插件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPluginCompositionType()
    {
        return $this->container['pluginCompositionType'];
    }

    /**
    * Sets pluginCompositionType
    *
    * @param string|null $pluginCompositionType **参数解释**： 组合插件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPluginCompositionType($pluginCompositionType)
    {
        $this->container['pluginCompositionType'] = $pluginCompositionType;
        return $this;
    }

    /**
    * Gets runtimeAttribution
    *  **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRuntimeAttribution()
    {
        return $this->container['runtimeAttribution'];
    }

    /**
    * Sets runtimeAttribution
    *
    * @param string|null $runtimeAttribution **参数解释**： 插件运行属性。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRuntimeAttribution($runtimeAttribution)
    {
        $this->container['runtimeAttribution'] = $runtimeAttribution;
        return $this;
    }

    /**
    * Gets allSteps
    *  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PageInfoBusinessTypeDefinitionVOAllSteps[]|null
    */
    public function getAllSteps()
    {
        return $this->container['allSteps'];
    }

    /**
    * Sets allSteps
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PageInfoBusinessTypeDefinitionVOAllSteps[]|null $allSteps **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAllSteps($allSteps)
    {
        $this->container['allSteps'] = $allSteps;
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
    * Gets versionAttribution
    *  **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
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
    * @param string|null $versionAttribution **参数解释**： 插件版本属性。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersionAttribution($versionAttribution)
    {
        $this->container['versionAttribution'] = $versionAttribution;
        return $this;
    }

    /**
    * Gets iconUrl
    *  **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
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
    * @param string|null $iconUrl **参数解释**： 插件图标URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets multiStepEditable
    *  **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMultiStepEditable()
    {
        return $this->container['multiStepEditable'];
    }

    /**
    * Sets multiStepEditable
    *
    * @param int|null $multiStepEditable **参数解释**： 插件可编辑。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMultiStepEditable($multiStepEditable)
    {
        $this->container['multiStepEditable'] = $multiStepEditable;
        return $this;
    }

    /**
    * Gets location
    *  **参数解释**： 插件地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location **参数解释**： 插件地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets publisherUniqueId
    *  **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
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
    * @param string|null $publisherUniqueId **参数解释**： 插件发布商ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublisherUniqueId($publisherUniqueId)
    {
        $this->container['publisherUniqueId'] = $publisherUniqueId;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 插件版本。 **取值范围**： 不涉及。
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
    * @param string|null $manifestVersion **参数解释**： 插件版本。 **取值范围**： 不涉及。
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

