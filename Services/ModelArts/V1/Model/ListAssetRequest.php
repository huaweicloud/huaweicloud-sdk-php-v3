<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetName  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    * assetSource  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * filterAllVersion  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * supportActions  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * tag  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    * isMine  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * withActions  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    * assetScenes  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * assetIds  **参数解释**：资产id。 **约束限制**：0-100个。
    * tagMode  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    * datasetUsage  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creator  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sortDir' => 'string',
            'sortKey' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'workspaceId' => 'string',
            'assetName' => 'string',
            'assetType' => 'string[]',
            'assetSource' => 'string',
            'assetSourceType' => 'string',
            'assetCode' => 'string',
            'assetVersion' => 'string',
            'assetGroupId' => 'string',
            'filterAllVersion' => 'bool',
            'supportActions' => 'string[]',
            'tag' => 'string[]',
            'isMine' => 'bool',
            'withActions' => 'bool',
            'assetSeries' => 'string',
            'assetCapabilities' => 'string[]',
            'assetScenes' => 'string[]',
            'rootAssetId' => 'string',
            'parentAssetId' => 'string',
            'isDeleted' => 'bool',
            'assetIds' => 'string[]',
            'tagMode' => 'string',
            'datasetUsage' => 'string',
            'status' => 'string',
            'datasetFileFormats' => 'string[]',
            'datasetType' => 'string',
            'datasetSubType' => 'string',
            'datasetSchemaFormat' => 'string',
            'creator' => 'string',
            'dataSourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetName  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    * assetSource  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * filterAllVersion  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * supportActions  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * tag  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    * isMine  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * withActions  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    * assetScenes  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * assetIds  **参数解释**：资产id。 **约束限制**：0-100个。
    * tagMode  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    * datasetUsage  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creator  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sortDir' => null,
        'sortKey' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'workspaceId' => null,
        'assetName' => null,
        'assetType' => null,
        'assetSource' => null,
        'assetSourceType' => null,
        'assetCode' => null,
        'assetVersion' => null,
        'assetGroupId' => null,
        'filterAllVersion' => null,
        'supportActions' => null,
        'tag' => null,
        'isMine' => null,
        'withActions' => null,
        'assetSeries' => null,
        'assetCapabilities' => null,
        'assetScenes' => null,
        'rootAssetId' => null,
        'parentAssetId' => null,
        'isDeleted' => null,
        'assetIds' => null,
        'tagMode' => null,
        'datasetUsage' => null,
        'status' => null,
        'datasetFileFormats' => null,
        'datasetType' => null,
        'datasetSubType' => null,
        'datasetSchemaFormat' => null,
        'creator' => null,
        'dataSourceId' => null
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
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetName  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    * assetSource  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * filterAllVersion  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * supportActions  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * tag  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    * isMine  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * withActions  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    * assetScenes  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * assetIds  **参数解释**：资产id。 **约束限制**：0-100个。
    * tagMode  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    * datasetUsage  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creator  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'limit' => 'limit',
            'offset' => 'offset',
            'workspaceId' => 'workspace_id',
            'assetName' => 'asset_name',
            'assetType' => 'asset_type',
            'assetSource' => 'asset_source',
            'assetSourceType' => 'asset_source_type',
            'assetCode' => 'asset_code',
            'assetVersion' => 'asset_version',
            'assetGroupId' => 'asset_group_id',
            'filterAllVersion' => 'filter_all_version',
            'supportActions' => 'support_actions',
            'tag' => 'tag',
            'isMine' => 'is_mine',
            'withActions' => 'with_actions',
            'assetSeries' => 'asset_series',
            'assetCapabilities' => 'asset_capabilities',
            'assetScenes' => 'asset_scenes',
            'rootAssetId' => 'root_asset_id',
            'parentAssetId' => 'parent_asset_id',
            'isDeleted' => 'is_deleted',
            'assetIds' => 'asset_ids',
            'tagMode' => 'tag_mode',
            'datasetUsage' => 'dataset_usage',
            'status' => 'status',
            'datasetFileFormats' => 'dataset_file_formats',
            'datasetType' => 'dataset_type',
            'datasetSubType' => 'dataset_sub_type',
            'datasetSchemaFormat' => 'dataset_schema_format',
            'creator' => 'creator',
            'dataSourceId' => 'data_source_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetName  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    * assetSource  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * filterAllVersion  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * supportActions  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * tag  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    * isMine  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * withActions  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    * assetScenes  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * assetIds  **参数解释**：资产id。 **约束限制**：0-100个。
    * tagMode  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    * datasetUsage  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creator  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'workspaceId' => 'setWorkspaceId',
            'assetName' => 'setAssetName',
            'assetType' => 'setAssetType',
            'assetSource' => 'setAssetSource',
            'assetSourceType' => 'setAssetSourceType',
            'assetCode' => 'setAssetCode',
            'assetVersion' => 'setAssetVersion',
            'assetGroupId' => 'setAssetGroupId',
            'filterAllVersion' => 'setFilterAllVersion',
            'supportActions' => 'setSupportActions',
            'tag' => 'setTag',
            'isMine' => 'setIsMine',
            'withActions' => 'setWithActions',
            'assetSeries' => 'setAssetSeries',
            'assetCapabilities' => 'setAssetCapabilities',
            'assetScenes' => 'setAssetScenes',
            'rootAssetId' => 'setRootAssetId',
            'parentAssetId' => 'setParentAssetId',
            'isDeleted' => 'setIsDeleted',
            'assetIds' => 'setAssetIds',
            'tagMode' => 'setTagMode',
            'datasetUsage' => 'setDatasetUsage',
            'status' => 'setStatus',
            'datasetFileFormats' => 'setDatasetFileFormats',
            'datasetType' => 'setDatasetType',
            'datasetSubType' => 'setDatasetSubType',
            'datasetSchemaFormat' => 'setDatasetSchemaFormat',
            'creator' => 'setCreator',
            'dataSourceId' => 'setDataSourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sortDir  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    * sortKey  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    * limit  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    * offset  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * assetName  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    * assetSource  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * filterAllVersion  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * supportActions  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * tag  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    * isMine  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * withActions  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    * assetScenes  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * isDeleted  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    * assetIds  **参数解释**：资产id。 **约束限制**：0-100个。
    * tagMode  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    * datasetUsage  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creator  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'workspaceId' => 'getWorkspaceId',
            'assetName' => 'getAssetName',
            'assetType' => 'getAssetType',
            'assetSource' => 'getAssetSource',
            'assetSourceType' => 'getAssetSourceType',
            'assetCode' => 'getAssetCode',
            'assetVersion' => 'getAssetVersion',
            'assetGroupId' => 'getAssetGroupId',
            'filterAllVersion' => 'getFilterAllVersion',
            'supportActions' => 'getSupportActions',
            'tag' => 'getTag',
            'isMine' => 'getIsMine',
            'withActions' => 'getWithActions',
            'assetSeries' => 'getAssetSeries',
            'assetCapabilities' => 'getAssetCapabilities',
            'assetScenes' => 'getAssetScenes',
            'rootAssetId' => 'getRootAssetId',
            'parentAssetId' => 'getParentAssetId',
            'isDeleted' => 'getIsDeleted',
            'assetIds' => 'getAssetIds',
            'tagMode' => 'getTagMode',
            'datasetUsage' => 'getDatasetUsage',
            'status' => 'getStatus',
            'datasetFileFormats' => 'getDatasetFileFormats',
            'datasetType' => 'getDatasetType',
            'datasetSubType' => 'getDatasetSubType',
            'datasetSchemaFormat' => 'getDatasetSchemaFormat',
            'creator' => 'getCreator',
            'dataSourceId' => 'getDataSourceId'
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
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetSource'] = isset($data['assetSource']) ? $data['assetSource'] : null;
        $this->container['assetSourceType'] = isset($data['assetSourceType']) ? $data['assetSourceType'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['assetGroupId'] = isset($data['assetGroupId']) ? $data['assetGroupId'] : null;
        $this->container['filterAllVersion'] = isset($data['filterAllVersion']) ? $data['filterAllVersion'] : null;
        $this->container['supportActions'] = isset($data['supportActions']) ? $data['supportActions'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['isMine'] = isset($data['isMine']) ? $data['isMine'] : null;
        $this->container['withActions'] = isset($data['withActions']) ? $data['withActions'] : null;
        $this->container['assetSeries'] = isset($data['assetSeries']) ? $data['assetSeries'] : null;
        $this->container['assetCapabilities'] = isset($data['assetCapabilities']) ? $data['assetCapabilities'] : null;
        $this->container['assetScenes'] = isset($data['assetScenes']) ? $data['assetScenes'] : null;
        $this->container['rootAssetId'] = isset($data['rootAssetId']) ? $data['rootAssetId'] : null;
        $this->container['parentAssetId'] = isset($data['parentAssetId']) ? $data['parentAssetId'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['tagMode'] = isset($data['tagMode']) ? $data['tagMode'] : null;
        $this->container['datasetUsage'] = isset($data['datasetUsage']) ? $data['datasetUsage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datasetFileFormats'] = isset($data['datasetFileFormats']) ? $data['datasetFileFormats'] : null;
        $this->container['datasetType'] = isset($data['datasetType']) ? $data['datasetType'] : null;
        $this->container['datasetSubType'] = isset($data['datasetSubType']) ? $data['datasetSubType'] : null;
        $this->container['datasetSchemaFormat'] = isset($data['datasetSchemaFormat']) ? $data['datasetSchemaFormat'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['dataSourceId'] = isset($data['dataSourceId']) ? $data['dataSourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sortDir']) && !preg_match("/ASC|DESC/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /ASC|DESC/.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/created_at|updated_at/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /created_at|updated_at/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && !preg_match("/^[a-zA-Z0-9\\u4e00-\\u9fa5\\-_\\\\. ]{1,128}$/", $this->container['assetName'])) {
                $invalidProperties[] = "invalid value for 'assetName', must be conform to the pattern /^[a-zA-Z0-9\\u4e00-\\u9fa5\\-_\\\\. ]{1,128}$/.";
            }
            if (!is_null($this->container['assetSource']) && !preg_match("/Preset|Publish|Import/", $this->container['assetSource'])) {
                $invalidProperties[] = "invalid value for 'assetSource', must be conform to the pattern /Preset|Publish|Import/.";
            }
            if (!is_null($this->container['assetSourceType']) && !preg_match("/^[a-zA-Z0-9-_]{1,60}$/", $this->container['assetSourceType'])) {
                $invalidProperties[] = "invalid value for 'assetSourceType', must be conform to the pattern /^[a-zA-Z0-9-_]{1,60}$/.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) > 60)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetCode']) && !preg_match("/^[a-zA-Z0-9-_.]{1,60}$/", $this->container['assetCode'])) {
                $invalidProperties[] = "invalid value for 'assetCode', must be conform to the pattern /^[a-zA-Z0-9-_.]{1,60}$/.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetVersion']) && !preg_match("/^(\\d+(\\.\\d+){2}|\\d+)$/", $this->container['assetVersion'])) {
                $invalidProperties[] = "invalid value for 'assetVersion', must be conform to the pattern /^(\\d+(\\.\\d+){2}|\\d+)$/.";
            }
            if (!is_null($this->container['assetGroupId']) && !preg_match("/^[a-zA-Z0-9-_]{1,36}$/", $this->container['assetGroupId'])) {
                $invalidProperties[] = "invalid value for 'assetGroupId', must be conform to the pattern /^[a-zA-Z0-9-_]{1,36}$/.";
            }
            if (!is_null($this->container['assetSeries']) && (mb_strlen($this->container['assetSeries']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetSeries', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetSeries']) && (mb_strlen($this->container['assetSeries']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetSeries', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootAssetId']) && (mb_strlen($this->container['rootAssetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'rootAssetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['rootAssetId']) && (mb_strlen($this->container['rootAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rootAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rootAssetId']) && !preg_match("/^[a-zA-Z0-9-_]{1,36}$/", $this->container['rootAssetId'])) {
                $invalidProperties[] = "invalid value for 'rootAssetId', must be conform to the pattern /^[a-zA-Z0-9-_]{1,36}$/.";
            }
            if (!is_null($this->container['parentAssetId']) && (mb_strlen($this->container['parentAssetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'parentAssetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['parentAssetId']) && (mb_strlen($this->container['parentAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentAssetId']) && !preg_match("/^[a-zA-Z0-9-_]{1,36}$/", $this->container['parentAssetId'])) {
                $invalidProperties[] = "invalid value for 'parentAssetId', must be conform to the pattern /^[a-zA-Z0-9-_]{1,36}$/.";
            }
            if (!is_null($this->container['tagMode']) && !preg_match("/and|or/", $this->container['tagMode'])) {
                $invalidProperties[] = "invalid value for 'tagMode', must be conform to the pattern /and|or/.";
            }
            if (!is_null($this->container['datasetUsage']) && (mb_strlen($this->container['datasetUsage']) > 40)) {
                $invalidProperties[] = "invalid value for 'datasetUsage', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['datasetUsage']) && (mb_strlen($this->container['datasetUsage']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasetUsage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasetUsage']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetUsage'])) {
                $invalidProperties[] = "invalid value for 'datasetUsage', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/online|offline|waiting/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /online|offline|waiting/.";
            }
            if (!is_null($this->container['datasetType']) && (mb_strlen($this->container['datasetType']) > 40)) {
                $invalidProperties[] = "invalid value for 'datasetType', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['datasetType']) && (mb_strlen($this->container['datasetType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasetType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasetType']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetType'])) {
                $invalidProperties[] = "invalid value for 'datasetType', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['datasetSubType']) && (mb_strlen($this->container['datasetSubType']) > 40)) {
                $invalidProperties[] = "invalid value for 'datasetSubType', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['datasetSubType']) && (mb_strlen($this->container['datasetSubType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasetSubType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasetSchemaFormat']) && (mb_strlen($this->container['datasetSchemaFormat']) > 40)) {
                $invalidProperties[] = "invalid value for 'datasetSchemaFormat', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['datasetSchemaFormat']) && (mb_strlen($this->container['datasetSchemaFormat']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasetSchemaFormat', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['datasetSchemaFormat']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetSchemaFormat'])) {
                $invalidProperties[] = "invalid value for 'datasetSchemaFormat', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) > 512)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['creator']) && (mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataSourceId']) && (mb_strlen($this->container['dataSourceId']) > 40)) {
                $invalidProperties[] = "invalid value for 'dataSourceId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['dataSourceId']) && (mb_strlen($this->container['dataSourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataSourceId', the character length must be bigger than or equal to 1.";
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
    * Gets sortDir
    *  **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**：排序方向。 **约束限制**：不涉及。 **取值范围**： 枚举值： - ASC: 升序 - DESC: 降序。 **默认取值**：DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**：排序字段。 **约束限制**：不涉及。 **取值范围**：枚举值： - created_at: 创建时间 - updated_at: 更新时间。 **默认取值**：created_at。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：限制量，单次查询总量，必须由数字组成。 **约束限制**：不涉及。 **取值范围**：1-1000。 **默认取值**：100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：偏移量，查询起始偏移，必须由数字组成。 **约束限制**：不涉及。 **取值范围**0-100000000。 **默认取值**：0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
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
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets assetName
    *  **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetName()
    {
        return $this->container['assetName'];
    }

    /**
    * Sets assetName
    *
    * @param string|null $assetName **参数解释**：资产名称,支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **约束限制**：1-128位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    *
    * @return string[]|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string[]|null $assetType **参数解释**: 资产类型。 **约束限制**: 枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM: 算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR: 算子镜像资产 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets assetSource
    *  **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetSource()
    {
        return $this->container['assetSource'];
    }

    /**
    * Sets assetSource
    *
    * @param string|null $assetSource **参数解释**：资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值: - Preset: 预置资产 - Publish: 用户发布资产 - Import: 用户导入资产 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetSource($assetSource)
    {
        $this->container['assetSource'] = $assetSource;
        return $this;
    }

    /**
    * Gets assetSourceType
    *  **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetSourceType()
    {
        return $this->container['assetSourceType'];
    }

    /**
    * Sets assetSourceType
    *
    * @param string|null $assetSourceType **参数解释**：用户资产来源。 **约束限制**：1-60位字符，英文字母，数字，下划线、中划线。 **取值范围**：preset_train：精调，custom_train：自定义训练，AgenticRL：强化学习。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetSourceType($assetSourceType)
    {
        $this->container['assetSourceType'] = $assetSourceType;
        return $this;
    }

    /**
    * Gets assetCode
    *  **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetCode()
    {
        return $this->container['assetCode'];
    }

    /**
    * Sets assetCode
    *
    * @param string|null $assetCode **参数解释**：资产编码。 **约束限制**：1-60字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets assetVersion
    *  **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetVersion()
    {
        return $this->container['assetVersion'];
    }

    /**
    * Sets assetVersion
    *
    * @param string|null $assetVersion **参数解释**：资产版本。 **约束限制**：数字或格式为x.y.z，x,y,z为数字。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets assetGroupId
    *  **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetGroupId()
    {
        return $this->container['assetGroupId'];
    }

    /**
    * Sets assetGroupId
    *
    * @param string|null $assetGroupId **参数解释**：资产归属的资产组id，带有该字段将在同一个资产库中所有版本进行条件筛选，否则会筛选所有资产库中的主版本。 **约束限制**：1-36字母数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetGroupId($assetGroupId)
    {
        $this->container['assetGroupId'] = $assetGroupId;
        return $this;
    }

    /**
    * Gets filterAllVersion
    *  **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    *
    * @return bool|null
    */
    public function getFilterAllVersion()
    {
        return $this->container['filterAllVersion'];
    }

    /**
    * Sets filterAllVersion
    *
    * @param bool|null $filterAllVersion **参数解释**：是否过滤所有版本。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    *
    * @return $this
    */
    public function setFilterAllVersion($filterAllVersion)
    {
        $this->container['filterAllVersion'] = $filterAllVersion;
        return $this;
    }

    /**
    * Gets supportActions
    *  **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getSupportActions()
    {
        return $this->container['supportActions'];
    }

    /**
    * Sets supportActions
    *
    * @param string[]|null $supportActions **参数解释**：资产支持的操作列表，例如SFT：监督微调，LORA微调:LORA，在线部署：ONLINE-DEPLOY，强化学习：AgenticRL。 **约束限制**：每个元素1-30位字符，英文字母，数字，下划线，中划线；最多10个元素。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSupportActions($supportActions)
    {
        $this->container['supportActions'] = $supportActions;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    *
    * @return string[]|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string[]|null $tag **参数解释**：检索资产时的标签，根据不同资产类型，条件可能不同。 - 需要匹配一个key对应一个value时格式为key=value - 需要匹配一个key对应多个value中的任意一个时格式为key=value1|value2|value3 - 需要匹配多个条件同时满足时key1=value1,key2=value2 - 如果需要实现模糊匹配格式为key1%=value2（右匹配）key2=%value2（左匹配） **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets isMine
    *  **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getIsMine()
    {
        return $this->container['isMine'];
    }

    /**
    * Sets isMine
    *
    * @param bool|null $isMine **参数解释**：过滤我创建的资产，boolean类型，取值true：查询我创建的资产，取值false：查询所有资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsMine($isMine)
    {
        $this->container['isMine'] = $isMine;
        return $this;
    }

    /**
    * Gets withActions
    *  **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return bool|null
    */
    public function getWithActions()
    {
        return $this->container['withActions'];
    }

    /**
    * Sets withActions
    *
    * @param bool|null $withActions **参数解释**：列表查询是否包含action。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setWithActions($withActions)
    {
        $this->container['withActions'] = $withActions;
        return $this;
    }

    /**
    * Gets assetSeries
    *  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetSeries()
    {
        return $this->container['assetSeries'];
    }

    /**
    * Sets assetSeries
    *
    * @param string|null $assetSeries **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：不涉及。 **取值范围**：0-100位。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetSeries($assetSeries)
    {
        $this->container['assetSeries'] = $assetSeries;
        return $this;
    }

    /**
    * Gets assetCapabilities
    *  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    *
    * @return string[]|null
    */
    public function getAssetCapabilities()
    {
        return $this->container['assetCapabilities'];
    }

    /**
    * Sets assetCapabilities
    *
    * @param string[]|null $assetCapabilities **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,AgenticRL,Other。 **约束限制**：每个元素为1-40位字符；最多10个元素。
    *
    * @return $this
    */
    public function setAssetCapabilities($assetCapabilities)
    {
        $this->container['assetCapabilities'] = $assetCapabilities;
        return $this;
    }

    /**
    * Gets assetScenes
    *  **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    *
    * @return string[]|null
    */
    public function getAssetScenes()
    {
        return $this->container['assetScenes'];
    }

    /**
    * Sets assetScenes
    *
    * @param string[]|null $assetScenes **参数解释**：资产场景，如DeepThinking。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setAssetScenes($assetScenes)
    {
        $this->container['assetScenes'] = $assetScenes;
        return $this;
    }

    /**
    * Gets rootAssetId
    *  **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getRootAssetId()
    {
        return $this->container['rootAssetId'];
    }

    /**
    * Sets rootAssetId
    *
    * @param string|null $rootAssetId **参数解释**：根资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRootAssetId($rootAssetId)
    {
        $this->container['rootAssetId'] = $rootAssetId;
        return $this;
    }

    /**
    * Gets parentAssetId
    *  **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getParentAssetId()
    {
        return $this->container['parentAssetId'];
    }

    /**
    * Sets parentAssetId
    *
    * @param string|null $parentAssetId **参数解释**：父资产id。 **约束限制**：1-36个字符，英文字母，数字，中划线，下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setParentAssetId($parentAssetId)
    {
        $this->container['parentAssetId'] = $parentAssetId;
        return $this;
    }

    /**
    * Gets isDeleted
    *  **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted **参数解释**：是否返回软删除的资产。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：false。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets assetIds
    *  **参数解释**：资产id。 **约束限制**：0-100个。
    *
    * @return string[]|null
    */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
    * Sets assetIds
    *
    * @param string[]|null $assetIds **参数解释**：资产id。 **约束限制**：0-100个。
    *
    * @return $this
    */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;
        return $this;
    }

    /**
    * Gets tagMode
    *  **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    *
    * @return string|null
    */
    public function getTagMode()
    {
        return $this->container['tagMode'];
    }

    /**
    * Sets tagMode
    *
    * @param string|null $tagMode **参数解释**：tag组合方式 **约束限制**：不涉及。 **取值范围**：and：与，or：或。 **默认取值**：and。
    *
    * @return $this
    */
    public function setTagMode($tagMode)
    {
        $this->container['tagMode'] = $tagMode;
        return $this;
    }

    /**
    * Gets datasetUsage
    *  **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDatasetUsage()
    {
        return $this->container['datasetUsage'];
    }

    /**
    * Sets datasetUsage
    *
    * @param string|null $datasetUsage **参数解释**：数据集用途，例如 GENERAL：通用数据集、EVAL：评测集。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetUsage($datasetUsage)
    {
        $this->container['datasetUsage'] = $datasetUsage;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets datasetFileFormats
    *  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    *
    * @return string[]|null
    */
    public function getDatasetFileFormats()
    {
        return $this->container['datasetFileFormats'];
    }

    /**
    * Sets datasetFileFormats
    *
    * @param string[]|null $datasetFileFormats **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setDatasetFileFormats($datasetFileFormats)
    {
        $this->container['datasetFileFormats'] = $datasetFileFormats;
        return $this;
    }

    /**
    * Gets datasetType
    *  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDatasetType()
    {
        return $this->container['datasetType'];
    }

    /**
    * Sets datasetType
    *
    * @param string|null $datasetType **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetType($datasetType)
    {
        $this->container['datasetType'] = $datasetType;
        return $this;
    }

    /**
    * Gets datasetSubType
    *  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDatasetSubType()
    {
        return $this->container['datasetSubType'];
    }

    /**
    * Sets datasetSubType
    *
    * @param string|null $datasetSubType **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetSubType($datasetSubType)
    {
        $this->container['datasetSubType'] = $datasetSubType;
        return $this;
    }

    /**
    * Gets datasetSchemaFormat
    *  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDatasetSchemaFormat()
    {
        return $this->container['datasetSchemaFormat'];
    }

    /**
    * Sets datasetSchemaFormat
    *
    * @param string|null $datasetSchemaFormat **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符，英文字母，数字，下划线，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetSchemaFormat($datasetSchemaFormat)
    {
        $this->container['datasetSchemaFormat'] = $datasetSchemaFormat;
        return $this;
    }

    /**
    * Gets creator
    *  **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $creator **参数解释**：资产创建者。 **约束限制**：1-512位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets dataSourceId
    *  **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDataSourceId()
    {
        return $this->container['dataSourceId'];
    }

    /**
    * Sets dataSourceId
    *
    * @param string|null $dataSourceId **参数解释**：数据源的ID信息。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDataSourceId($dataSourceId)
    {
        $this->container['dataSourceId'] = $dataSourceId;
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

