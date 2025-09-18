<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * iconUrl  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * displayName  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessType  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    * description  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPrivate  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    * region  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainers  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * pluginCompositionType  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * versionDescription  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executionInfo  executionInfo
    * outputInfo  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * inputInfo  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uniqueId' => 'string',
            'iconUrl' => 'string',
            'runtimeAttribution' => 'string',
            'pluginName' => 'string',
            'displayName' => 'string',
            'businessType' => 'string',
            'businessTypeDisplayName' => 'string',
            'description' => 'string',
            'isPrivate' => 'int',
            'region' => 'string',
            'maintainers' => 'string',
            'pluginCompositionType' => 'string',
            'manifestVersion' => 'string',
            'version' => 'string',
            'versionDescription' => 'string',
            'executionInfo' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfo',
            'outputInfo' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOOutputInfo[]',
            'inputInfo' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOInputInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uniqueId  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * iconUrl  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * displayName  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessType  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    * description  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPrivate  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    * region  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainers  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * pluginCompositionType  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * versionDescription  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executionInfo  executionInfo
    * outputInfo  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * inputInfo  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uniqueId' => null,
        'iconUrl' => null,
        'runtimeAttribution' => null,
        'pluginName' => null,
        'displayName' => null,
        'businessType' => null,
        'businessTypeDisplayName' => null,
        'description' => null,
        'isPrivate' => 'int32',
        'region' => null,
        'maintainers' => null,
        'pluginCompositionType' => null,
        'manifestVersion' => null,
        'version' => null,
        'versionDescription' => null,
        'executionInfo' => null,
        'outputInfo' => null,
        'inputInfo' => null
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
    * uniqueId  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * iconUrl  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * displayName  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessType  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    * description  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPrivate  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    * region  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainers  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * pluginCompositionType  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * versionDescription  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executionInfo  executionInfo
    * outputInfo  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * inputInfo  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uniqueId' => 'unique_id',
            'iconUrl' => 'icon_url',
            'runtimeAttribution' => 'runtime_attribution',
            'pluginName' => 'plugin_name',
            'displayName' => 'display_name',
            'businessType' => 'business_type',
            'businessTypeDisplayName' => 'business_type_display_name',
            'description' => 'description',
            'isPrivate' => 'is_private',
            'region' => 'region',
            'maintainers' => 'maintainers',
            'pluginCompositionType' => 'plugin_composition_type',
            'manifestVersion' => 'manifest_version',
            'version' => 'version',
            'versionDescription' => 'version_description',
            'executionInfo' => 'execution_info',
            'outputInfo' => 'output_info',
            'inputInfo' => 'input_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uniqueId  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * iconUrl  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * displayName  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessType  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    * description  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPrivate  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    * region  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainers  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * pluginCompositionType  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * versionDescription  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executionInfo  executionInfo
    * outputInfo  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * inputInfo  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'uniqueId' => 'setUniqueId',
            'iconUrl' => 'setIconUrl',
            'runtimeAttribution' => 'setRuntimeAttribution',
            'pluginName' => 'setPluginName',
            'displayName' => 'setDisplayName',
            'businessType' => 'setBusinessType',
            'businessTypeDisplayName' => 'setBusinessTypeDisplayName',
            'description' => 'setDescription',
            'isPrivate' => 'setIsPrivate',
            'region' => 'setRegion',
            'maintainers' => 'setMaintainers',
            'pluginCompositionType' => 'setPluginCompositionType',
            'manifestVersion' => 'setManifestVersion',
            'version' => 'setVersion',
            'versionDescription' => 'setVersionDescription',
            'executionInfo' => 'setExecutionInfo',
            'outputInfo' => 'setOutputInfo',
            'inputInfo' => 'setInputInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uniqueId  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    * iconUrl  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * runtimeAttribution  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    * pluginName  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * displayName  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessType  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    * businessTypeDisplayName  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    * description  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * isPrivate  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    * region  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainers  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * pluginCompositionType  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * manifestVersion  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * version  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * versionDescription  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * executionInfo  executionInfo
    * outputInfo  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * inputInfo  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'uniqueId' => 'getUniqueId',
            'iconUrl' => 'getIconUrl',
            'runtimeAttribution' => 'getRuntimeAttribution',
            'pluginName' => 'getPluginName',
            'displayName' => 'getDisplayName',
            'businessType' => 'getBusinessType',
            'businessTypeDisplayName' => 'getBusinessTypeDisplayName',
            'description' => 'getDescription',
            'isPrivate' => 'getIsPrivate',
            'region' => 'getRegion',
            'maintainers' => 'getMaintainers',
            'pluginCompositionType' => 'getPluginCompositionType',
            'manifestVersion' => 'getManifestVersion',
            'version' => 'getVersion',
            'versionDescription' => 'getVersionDescription',
            'executionInfo' => 'getExecutionInfo',
            'outputInfo' => 'getOutputInfo',
            'inputInfo' => 'getInputInfo'
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
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['runtimeAttribution'] = isset($data['runtimeAttribution']) ? $data['runtimeAttribution'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['businessTypeDisplayName'] = isset($data['businessTypeDisplayName']) ? $data['businessTypeDisplayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['maintainers'] = isset($data['maintainers']) ? $data['maintainers'] : null;
        $this->container['pluginCompositionType'] = isset($data['pluginCompositionType']) ? $data['pluginCompositionType'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['versionDescription'] = isset($data['versionDescription']) ? $data['versionDescription'] : null;
        $this->container['executionInfo'] = isset($data['executionInfo']) ? $data['executionInfo'] : null;
        $this->container['outputInfo'] = isset($data['outputInfo']) ? $data['outputInfo'] : null;
        $this->container['inputInfo'] = isset($data['inputInfo']) ? $data['inputInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['runtimeAttribution'] === null) {
            $invalidProperties[] = "'runtimeAttribution' can't be null";
        }
        if ($this->container['pluginName'] === null) {
            $invalidProperties[] = "'pluginName' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['businessType'] === null) {
            $invalidProperties[] = "'businessType' can't be null";
        }
        if ($this->container['businessTypeDisplayName'] === null) {
            $invalidProperties[] = "'businessTypeDisplayName' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['executionInfo'] === null) {
            $invalidProperties[] = "'executionInfo' can't be null";
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
    * Gets uniqueId
    *  **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
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
    * @param string|null $uniqueId **参数解释**： 扩展插件唯一ID。可以通过[查询插件版本详情](ShowPluginVersion.xml)接口，获取响应参数中unique_id。 **约束限制**： 不涉及。 **取值范围**： 32位字符，由数字和字母组成。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets iconUrl
    *  **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $iconUrl **参数解释**： 插件展示图标URL。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;
        return $this;
    }

    /**
    * Gets runtimeAttribution
    *  **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getRuntimeAttribution()
    {
        return $this->container['runtimeAttribution'];
    }

    /**
    * Sets runtimeAttribution
    *
    * @param string $runtimeAttribution **参数解释**： 运行属性。 **约束限制**： 不涉及。 **取值范围**： - agent：基于agent运行。 - agentless：无需agent运行。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRuntimeAttribution($runtimeAttribution)
    {
        $this->container['runtimeAttribution'] = $runtimeAttribution;
        return $this;
    }

    /**
    * Gets pluginName
    *  **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string $pluginName **参数解释**： 插件名。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
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
    *  **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName **参数解释**： 展示名。 **约束限制**： 仅支持输入大小写英文字母、中文、空格、数字、'-'、'_'、'.'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets businessType
    *  **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string $businessType **参数解释**： 业务类型。 **约束限制**： 仅支持输入大小写英文字母、数字、'-'、'_'。 **取值范围**： 1到50位字符。 **默认取值**： 不涉及。
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
    *  **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getBusinessTypeDisplayName()
    {
        return $this->container['businessTypeDisplayName'];
    }

    /**
    * Sets businessTypeDisplayName
    *
    * @param string $businessTypeDisplayName **参数解释**： 插件业务类型展示名。 **约束限制**： 不涉及。 **取值范围**： - 构建。 - 代码检查。 - 部署。 - 测试。 - 通用。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBusinessTypeDisplayName($businessTypeDisplayName)
    {
        $this->container['businessTypeDisplayName'] = $businessTypeDisplayName;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**： 插件描述。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isPrivate
    *  **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    *
    * @return int|null
    */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
    * Sets isPrivate
    *
    * @param int|null $isPrivate **参数解释**： 是否私有插件。 **约束限制**： 不涉及。 **取值范围**： - 1：私有插件。 - 0：公开插件。 **默认取值**： 0。
    *
    * @return $this
    */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 局点。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets maintainers
    *  **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $maintainers **参数解释**： 插件维护者。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaintainers($maintainers)
    {
        $this->container['maintainers'] = $maintainers;
        return $this;
    }

    /**
    * Gets pluginCompositionType
    *  **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $pluginCompositionType **参数解释**： 插件的组合类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPluginCompositionType($pluginCompositionType)
    {
        $this->container['pluginCompositionType'] = $pluginCompositionType;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $manifestVersion **参数解释**： 用于区分新旧版数据版本。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version **参数解释**： 插件版本号。 **约束限制**： 必须是类似 x.xx.xx（例如：1.0.2） 的格式，其中：x 是 1 到 2 位的数字（范围 0 到 99）。xx 是点后跟随的数字部分，且每部分可以是 1 位或 2 位数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $versionDescription **参数解释**： 插件小版本版本号说明。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;
        return $this;
    }

    /**
    * Gets executionInfo
    *  executionInfo
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfo
    */
    public function getExecutionInfo()
    {
        return $this->container['executionInfo'];
    }

    /**
    * Sets executionInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOExecutionInfo $executionInfo executionInfo
    *
    * @return $this
    */
    public function setExecutionInfo($executionInfo)
    {
        $this->container['executionInfo'] = $executionInfo;
        return $this;
    }

    /**
    * Gets outputInfo
    *  **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOOutputInfo[]|null
    */
    public function getOutputInfo()
    {
        return $this->container['outputInfo'];
    }

    /**
    * Sets outputInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOOutputInfo[]|null $outputInfo **参数解释**： 插件输出相关内容。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOutputInfo($outputInfo)
    {
        $this->container['outputInfo'] = $outputInfo;
        return $this;
    }

    /**
    * Gets inputInfo
    *  **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOInputInfo[]|null
    */
    public function getInputInfo()
    {
        return $this->container['inputInfo'];
    }

    /**
    * Sets inputInfo
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PluginDTOInputInfo[]|null $inputInfo **参数解释**： 输入信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInputInfo($inputInfo)
    {
        $this->container['inputInfo'] = $inputInfo;
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

