<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginBasicVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginBasicVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    * uniqueId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * opUser  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    * opTime  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    * pluginAttribution  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    * workspaceId  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    * businessType  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    * maintainers  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    * referCount  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    * usageCount  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * active  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    * versionState  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * creator  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'displayName' => 'string',
            'dbRecordName' => 'string',
            'version' => 'string',
            'versionDescription' => 'string',
            'description' => 'string',
            'versionAttribution' => 'string',
            'uniqueId' => 'string',
            'opUser' => 'string',
            'opTime' => 'string',
            'pluginCompositionType' => 'string',
            'pluginAttribution' => 'string',
            'workspaceId' => 'string',
            'businessType' => 'string',
            'businessTypeDisplayName' => 'string',
            'maintainers' => 'string',
            'iconUrl' => 'string',
            'referCount' => 'int',
            'usageCount' => 'int',
            'runtimeAttribution' => 'string',
            'active' => 'int',
            'versionState' => 'string',
            'publisherUniqueId' => 'string',
            'creator' => 'string',
            'createTime' => 'string',
            'manifestVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    * uniqueId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * opUser  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    * opTime  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    * pluginAttribution  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    * workspaceId  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    * businessType  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    * maintainers  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    * referCount  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    * usageCount  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * active  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    * versionState  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * creator  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'displayName' => null,
        'dbRecordName' => null,
        'version' => null,
        'versionDescription' => null,
        'description' => null,
        'versionAttribution' => null,
        'uniqueId' => null,
        'opUser' => null,
        'opTime' => null,
        'pluginCompositionType' => null,
        'pluginAttribution' => null,
        'workspaceId' => null,
        'businessType' => null,
        'businessTypeDisplayName' => null,
        'maintainers' => null,
        'iconUrl' => null,
        'referCount' => 'int32',
        'usageCount' => 'int32',
        'runtimeAttribution' => null,
        'active' => 'int32',
        'versionState' => null,
        'publisherUniqueId' => null,
        'creator' => null,
        'createTime' => null,
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
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    * uniqueId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * opUser  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    * opTime  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    * pluginAttribution  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    * workspaceId  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    * businessType  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    * maintainers  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    * referCount  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    * usageCount  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * active  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    * versionState  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * creator  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'dbRecordName' => 'db_record_name',
            'version' => 'version',
            'versionDescription' => 'version_description',
            'description' => 'description',
            'versionAttribution' => 'version_attribution',
            'uniqueId' => 'unique_id',
            'opUser' => 'op_user',
            'opTime' => 'op_time',
            'pluginCompositionType' => 'plugin_composition_type',
            'pluginAttribution' => 'plugin_attribution',
            'workspaceId' => 'workspace_id',
            'businessType' => 'business_type',
            'businessTypeDisplayName' => 'business_type_display_name',
            'maintainers' => 'maintainers',
            'iconUrl' => 'icon_url',
            'referCount' => 'refer_count',
            'usageCount' => 'usage_count',
            'runtimeAttribution' => 'runtime_attribution',
            'active' => 'active',
            'versionState' => 'version_state',
            'publisherUniqueId' => 'publisher_unique_id',
            'creator' => 'creator',
            'createTime' => 'create_time',
            'manifestVersion' => 'manifest_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    * uniqueId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * opUser  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    * opTime  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    * pluginAttribution  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    * workspaceId  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    * businessType  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    * maintainers  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    * referCount  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    * usageCount  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * active  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    * versionState  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * creator  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'dbRecordName' => 'setDbRecordName',
            'version' => 'setVersion',
            'versionDescription' => 'setVersionDescription',
            'description' => 'setDescription',
            'versionAttribution' => 'setVersionAttribution',
            'uniqueId' => 'setUniqueId',
            'opUser' => 'setOpUser',
            'opTime' => 'setOpTime',
            'pluginCompositionType' => 'setPluginCompositionType',
            'pluginAttribution' => 'setPluginAttribution',
            'workspaceId' => 'setWorkspaceId',
            'businessType' => 'setBusinessType',
            'businessTypeDisplayName' => 'setBusinessTypeDisplayName',
            'maintainers' => 'setMaintainers',
            'iconUrl' => 'setIconUrl',
            'referCount' => 'setReferCount',
            'usageCount' => 'setUsageCount',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'active' => 'setActive',
            'versionState' => 'setVersionState',
            'publisherUniqueId' => 'setPublisherUniqueId',
            'creator' => 'setCreator',
            'createTime' => 'setCreateTime',
            'manifestVersion' => 'setManifestVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  **参数解释**： 扩展插件名称。 **取值范围**： 1到50位字符。
    * displayName  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    * dbRecordName  **参数解释**： 插件记录展示名称。 **取值范围**： 不涉及。
    * version  **参数解释**： 扩展插件版本号。 **取值范围**： 不涉及。
    * versionDescription  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    * description  **参数解释**： 扩展插件描述。 **取值范围**： 不涉及。
    * versionAttribution  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    * uniqueId  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    * opUser  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    * opTime  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    * pluginCompositionType  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    * pluginAttribution  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    * workspaceId  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    * businessType  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    * maintainers  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    * iconUrl  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    * referCount  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    * usageCount  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **取值范围**： - agent：运行基于流水线agent。 - agentLess：运行无需流水线agent。
    * active  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    * versionState  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    * publisherUniqueId  **参数解释**： 发布商ID。 **取值范围**： 不涉及。
    * creator  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    * createTime  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * manifestVersion  **参数解释**： 插件版本标识符。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'dbRecordName' => 'getDbRecordName',
            'version' => 'getVersion',
            'versionDescription' => 'getVersionDescription',
            'description' => 'getDescription',
            'versionAttribution' => 'getVersionAttribution',
            'uniqueId' => 'getUniqueId',
            'opUser' => 'getOpUser',
            'opTime' => 'getOpTime',
            'pluginCompositionType' => 'getPluginCompositionType',
            'pluginAttribution' => 'getPluginAttribution',
            'workspaceId' => 'getWorkspaceId',
            'businessType' => 'getBusinessType',
            'businessTypeDisplayName' => 'getBusinessTypeDisplayName',
            'maintainers' => 'getMaintainers',
            'iconUrl' => 'getIconUrl',
            'referCount' => 'getReferCount',
            'usageCount' => 'getUsageCount',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'active' => 'getActive',
            'versionState' => 'getVersionState',
            'publisherUniqueId' => 'getPublisherUniqueId',
            'creator' => 'getCreator',
            'createTime' => 'getCreateTime',
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dbRecordName'] = isset($data['dbRecordName']) ? $data['dbRecordName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['versionAttribution'] = isset($data['versionAttribution']) ? $data['versionAttribution'] : null;
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['opUser'] = isset($data['opUser']) ? $data['opUser'] : null;
        $this->container['opTime'] = isset($data['opTime']) ? $data['opTime'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['pluginAttribution'] = isset($data['pluginAttribution']) ? $data['pluginAttribution'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['businessTypeDisplayName'] = isset($data['businessTypeDisplayName']) ? $data['businessTypeDisplayName'] : null;
        $this->container['maintainers'] = isset($data['maintainers']) ? $data['maintainers'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['referCount'] = isset($data['referCount']) ? $data['referCount'] : null;
        $this->container['usageCount'] = isset($data['usageCount']) ? $data['usageCount'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['versionState'] = isset($data['versionState']) ? $data['versionState'] : null;
        $this->container['publisherUniqueId'] = isset($data['publisherUniqueId']) ? $data['publisherUniqueId'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    *  **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
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
    * @param string|null $displayName **参数解释**： 扩展插件名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
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
    * Gets versionDescription
    *  **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
    * Sets versionDescription
    *
    * @param string|null $versionDescription **参数解释**： 扩展插件版本号说明。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
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
    *  **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
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
    * @param string|null $versionAttribution **参数解释**： 扩展插件版本属性。 **取值范围**： - draft：草稿版本。 - formal：正式版本。
    *
    * @return $this
    */
    public function setVersionAttribution($versionAttribution)
    {
        $this->container['versionAttribution'] = $versionAttribution;
        return $this;
    }

    /**
    * Gets uniqueId
    *  **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
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
    * @param string|null $uniqueId **参数解释**： 扩展插件唯一ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets opUser
    *  **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOpUser()
    {
        return $this->container['opUser'];
    }

    /**
    * Sets opUser
    *
    * @param string|null $opUser **参数解释**： 扩展插件最后更新人。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOpUser($opUser)
    {
        $this->container['opUser'] = $opUser;
        return $this;
    }

    /**
    * Gets opTime
    *  **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOpTime()
    {
        return $this->container['opTime'];
    }

    /**
    * Sets opTime
    *
    * @param string|null $opTime **参数解释**： 扩展插件最后更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOpTime($opTime)
    {
        $this->container['opTime'] = $opTime;
        return $this;
    }

    /**
    * Gets pluginCompositionType
    *  **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
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
    * @param string|null $pluginCompositionType **参数解释**： 用于标识插件是否为多个step组成的组合插件。 **取值范围**： - multi：组合插件。 - single：非组合插件。
    *
    * @return $this
    */
    public function setPluginCompositionType($pluginCompositionType)
    {
        $this->container['pluginCompositionType'] = $pluginCompositionType;
        return $this;
    }

    /**
    * Gets pluginAttribution
    *  **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
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
    * @param string|null $pluginAttribution **参数解释**： 扩展插件属性。 **取值范围**： - custom：自定义插件。 - official：官方插件。 - published：已发布的发布商插件。
    *
    * @return $this
    */
    public function setPluginAttribution($pluginAttribution)
    {
        $this->container['pluginAttribution'] = $pluginAttribution;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
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
    * @param string|null $workspaceId **参数解释**： 租户ID，用户的domainId。 **取值范围**： 32位字符，仅由数字和字母组成。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets businessType
    *  **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType **参数解释**： 扩展插件业务类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets businessTypeDisplayName
    *  **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBusinessTypeDisplayName()
    {
        return $this->container['businessTypeDisplayName'];
    }

    /**
    * Sets businessTypeDisplayName
    *
    * @param string|null $businessTypeDisplayName **参数解释**： 扩展插件业务类型展示名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBusinessTypeDisplayName($businessTypeDisplayName)
    {
        $this->container['businessTypeDisplayName'] = $businessTypeDisplayName;
        return $this;
    }

    /**
    * Gets maintainers
    *  **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMaintainers()
    {
        return $this->container['maintainers'];
    }

    /**
    * Sets maintainers
    *
    * @param string|null $maintainers **参数解释**： 扩展插件维护人。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaintainers($maintainers)
    {
        $this->container['maintainers'] = $maintainers;
        return $this;
    }

    /**
    * Gets iconUrl
    *  **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
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
    * @param string|null $iconUrl **参数解释**： 扩展插件图标地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets referCount
    *  **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getReferCount()
    {
        return $this->container['referCount'];
    }

    /**
    * Sets referCount
    *
    * @param int|null $referCount **参数解释**： 扩展插件被流水线引用次数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReferCount($referCount)
    {
        $this->container['referCount'] = $referCount;
        return $this;
    }

    /**
    * Gets usageCount
    *  **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getUsageCount()
    {
        return $this->container['usageCount'];
    }

    /**
    * Sets usageCount
    *
    * @param int|null $usageCount **参数解释**： 扩展插件被流水线使用次数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUsageCount($usageCount)
    {
        $this->container['usageCount'] = $usageCount;
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
    * Gets active
    *  **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    *
    * @return int|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param int|null $active **参数解释**： 扩展插件是否激活。 **取值范围**： - true：激活。 - false：未激活。
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets versionState
    *  **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVersionState()
    {
        return $this->container['versionState'];
    }

    /**
    * Sets versionState
    *
    * @param string|null $versionState **参数解释**： 当前插件版本状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersionState($versionState)
    {
        $this->container['versionState'] = $versionState;
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
    * Gets creator
    *  **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator **参数解释**： 创建者名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

