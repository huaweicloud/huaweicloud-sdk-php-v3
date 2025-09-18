<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullStagePluginsRelationVOPluginsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullStagePluginsRelationVO_plugins_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
    * location  **参数解释**： 使用位置。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    * standard  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'displayName' => 'string',
            'pluginName' => 'string',
            'disabled' => 'bool',
            'dbRecordName' => 'string',
            'groupName' => 'string',
            'groupType' => 'string',
            'pluginAttribution' => 'string',
            'pluginCompositionType' => 'string',
            'runtimeAttribution' => 'string',
            'allSteps' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]',
            'description' => 'string',
            'versionAttribution' => 'string',
            'iconUrl' => 'string',
            'multiStepEditable' => 'int',
            'location' => 'string',
            'publisherUniqueId' => 'string',
            'manifestVersion' => 'string',
            'standard' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
    * location  **参数解释**： 使用位置。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    * standard  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'displayName' => null,
        'pluginName' => null,
        'disabled' => null,
        'dbRecordName' => null,
        'groupName' => null,
        'groupType' => null,
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
        'manifestVersion' => null,
        'standard' => null
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
    * disabled  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
    * location  **参数解释**： 使用位置。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    * standard  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'displayName' => 'display_name',
            'pluginName' => 'plugin_name',
            'disabled' => 'disabled',
            'dbRecordName' => 'db_record_name',
            'groupName' => 'group_name',
            'groupType' => 'group_type',
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
            'manifestVersion' => 'manifest_version',
            'standard' => 'standard'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
    * location  **参数解释**： 使用位置。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    * standard  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'displayName' => 'setDisplayName',
            'pluginName' => 'setPluginName',
            'disabled' => 'setDisabled',
            'dbRecordName' => 'setDbRecordName',
            'groupName' => 'setGroupName',
            'groupType' => 'setGroupType',
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
            'manifestVersion' => 'setManifestVersion',
            'standard' => 'setStandard'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  **参数解释**： 唯一ID。 **取值范围**： 不涉及。
    * displayName  **参数解释**： 展示名。 **取值范围**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **取值范围**： 不涉及。
    * disabled  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * groupName  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
    * groupType  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    * pluginAttribution  **参数解释**： 标识是否为官方插件。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * allSteps  **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
    * multiStepEditable  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
    * location  **参数解释**： 使用位置。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    * standard  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'displayName' => 'getDisplayName',
            'pluginName' => 'getPluginName',
            'disabled' => 'getDisabled',
            'dbRecordName' => 'getDbRecordName',
            'groupName' => 'getGroupName',
            'groupType' => 'getGroupType',
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
            'manifestVersion' => 'getManifestVersion',
            'standard' => 'getStandard'
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
        $this->container['dbRecordName'] = isset($data['dbRecordName']) ? $data['dbRecordName'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
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
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
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
    *  **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
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
    * @param bool|null $disabled **参数解释**： 当前插件对后续选择使用的流水线是否为禁用状态，默认为false。 **取值范围**： - true：被禁用。 - false：未被禁用。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets dbRecordName
    *  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
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
    * @param string|null $dbRecordName **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbRecordName($dbRecordName)
    {
        $this->container['dbRecordName'] = $dbRecordName;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
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
    * @param string|null $groupName **参数解释**： 流水线stage下的分组名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
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
    * @param string|null $groupType **参数解释**： 流水线stage下的分组类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
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
    * Gets pluginCompositionType
    *  **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
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
    * @param string|null $pluginCompositionType **参数解释**： 标识是否为多个step组成的组。 **取值范围**： - single：单step插件。 - multi：组合插件。
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
    *  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
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
    * @param string|null $runtimeAttribution **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
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
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]|null
    */
    public function getAllSteps()
    {
        return $this->container['allSteps'];
    }

    /**
    * Sets allSteps
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\FullStagePluginsRelationVOAllSteps[]|null $allSteps **参数解释**： 基础插件列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
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
    *  **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
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
    * @param string|null $versionAttribution **参数解释**： 标识是否为一个草稿。 **取值范围**： 不涉及。
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
    *  **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
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
    * @param string|null $iconUrl **参数解释**： 扩展插件图标URL。 **取值范围**： 不涉及。
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
    *  **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
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
    * @param int|null $multiStepEditable **参数解释**： 标识是否可继续进行添加步骤，默认是1，可进行添加。 **取值范围**： - 0：不可继续进行添加步骤。 - 1：可继续进行添加步骤。
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
    *  **参数解释**： 使用位置。 **取值范围**： 不涉及。
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
    * @param string|null $location **参数解释**： 使用位置。 **取值范围**： 不涉及。
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
    *  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
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
    * @param string|null $publisherUniqueId **参数解释**： 发布商ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
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
    * @param string|null $manifestVersion **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
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
    * @param bool|null $standard **参数解释**： 标识是否为标准化的插件。 **取值范围**： - true：是标准化的插件。 - false：不是标准化的插件。
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
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

