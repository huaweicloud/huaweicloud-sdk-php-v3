<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * apiVersion  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSource  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * sourceOperation  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobName  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobId  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetUsage  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * importFileSource  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentAssetId' => 'string',
            'apiVersion' => 'string',
            'assetName' => 'string',
            'assetSource' => 'string',
            'assetSourceType' => 'string',
            'assetCode' => 'string',
            'assetDesc' => 'string',
            'assetGroupDesc' => 'string',
            'assetVersion' => 'string',
            'supportActions' => 'string[]',
            'assetLocation' => 'string',
            'assetType' => 'string',
            'assetGroupId' => 'string',
            'assetSeries' => 'string',
            'assetCapabilities' => 'string[]',
            'actions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionReq[]',
            'sourceOperation' => 'string',
            'sourceJobName' => 'string',
            'sourceJobId' => 'string',
            'status' => 'string',
            'datasetUsage' => 'string',
            'datasetFileFormats' => 'string[]',
            'datasetType' => 'string',
            'datasetSubType' => 'string',
            'datasetSchemaFormat' => 'string',
            'importFileSource' => 'string',
            'dataSourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * apiVersion  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSource  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * sourceOperation  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobName  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobId  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetUsage  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * importFileSource  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentAssetId' => null,
        'apiVersion' => null,
        'assetName' => null,
        'assetSource' => null,
        'assetSourceType' => null,
        'assetCode' => null,
        'assetDesc' => null,
        'assetGroupDesc' => null,
        'assetVersion' => null,
        'supportActions' => null,
        'assetLocation' => null,
        'assetType' => null,
        'assetGroupId' => null,
        'assetSeries' => null,
        'assetCapabilities' => null,
        'actions' => null,
        'sourceOperation' => null,
        'sourceJobName' => null,
        'sourceJobId' => null,
        'status' => null,
        'datasetUsage' => null,
        'datasetFileFormats' => null,
        'datasetType' => null,
        'datasetSubType' => null,
        'datasetSchemaFormat' => null,
        'importFileSource' => null,
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
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * apiVersion  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSource  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * sourceOperation  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobName  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobId  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetUsage  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * importFileSource  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentAssetId' => 'parent_asset_id',
            'apiVersion' => 'api_version',
            'assetName' => 'asset_name',
            'assetSource' => 'asset_source',
            'assetSourceType' => 'asset_source_type',
            'assetCode' => 'asset_code',
            'assetDesc' => 'asset_desc',
            'assetGroupDesc' => 'asset_group_desc',
            'assetVersion' => 'asset_version',
            'supportActions' => 'support_actions',
            'assetLocation' => 'asset_location',
            'assetType' => 'asset_type',
            'assetGroupId' => 'asset_group_id',
            'assetSeries' => 'asset_series',
            'assetCapabilities' => 'asset_capabilities',
            'actions' => 'actions',
            'sourceOperation' => 'source_operation',
            'sourceJobName' => 'source_job_name',
            'sourceJobId' => 'source_job_id',
            'status' => 'status',
            'datasetUsage' => 'dataset_usage',
            'datasetFileFormats' => 'dataset_file_formats',
            'datasetType' => 'dataset_type',
            'datasetSubType' => 'dataset_sub_type',
            'datasetSchemaFormat' => 'dataset_schema_format',
            'importFileSource' => 'import_file_source',
            'dataSourceId' => 'data_source_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * apiVersion  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSource  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * sourceOperation  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobName  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobId  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetUsage  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * importFileSource  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'parentAssetId' => 'setParentAssetId',
            'apiVersion' => 'setApiVersion',
            'assetName' => 'setAssetName',
            'assetSource' => 'setAssetSource',
            'assetSourceType' => 'setAssetSourceType',
            'assetCode' => 'setAssetCode',
            'assetDesc' => 'setAssetDesc',
            'assetGroupDesc' => 'setAssetGroupDesc',
            'assetVersion' => 'setAssetVersion',
            'supportActions' => 'setSupportActions',
            'assetLocation' => 'setAssetLocation',
            'assetType' => 'setAssetType',
            'assetGroupId' => 'setAssetGroupId',
            'assetSeries' => 'setAssetSeries',
            'assetCapabilities' => 'setAssetCapabilities',
            'actions' => 'setActions',
            'sourceOperation' => 'setSourceOperation',
            'sourceJobName' => 'setSourceJobName',
            'sourceJobId' => 'setSourceJobId',
            'status' => 'setStatus',
            'datasetUsage' => 'setDatasetUsage',
            'datasetFileFormats' => 'setDatasetFileFormats',
            'datasetType' => 'setDatasetType',
            'datasetSubType' => 'setDatasetSubType',
            'datasetSchemaFormat' => 'setDatasetSchemaFormat',
            'importFileSource' => 'setImportFileSource',
            'dataSourceId' => 'setDataSourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentAssetId  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * apiVersion  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    * assetName  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSource  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
    * assetSourceType  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
    * assetCode  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetGroupDesc  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetVersion  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetType  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetSeries  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * sourceOperation  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobName  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sourceJobId  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * status  **参数解释**：资产状态。 **约束限制**：不涉及。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中 **默认取值**：不涉及。
    * datasetUsage  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * importFileSource  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    * dataSourceId  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'parentAssetId' => 'getParentAssetId',
            'apiVersion' => 'getApiVersion',
            'assetName' => 'getAssetName',
            'assetSource' => 'getAssetSource',
            'assetSourceType' => 'getAssetSourceType',
            'assetCode' => 'getAssetCode',
            'assetDesc' => 'getAssetDesc',
            'assetGroupDesc' => 'getAssetGroupDesc',
            'assetVersion' => 'getAssetVersion',
            'supportActions' => 'getSupportActions',
            'assetLocation' => 'getAssetLocation',
            'assetType' => 'getAssetType',
            'assetGroupId' => 'getAssetGroupId',
            'assetSeries' => 'getAssetSeries',
            'assetCapabilities' => 'getAssetCapabilities',
            'actions' => 'getActions',
            'sourceOperation' => 'getSourceOperation',
            'sourceJobName' => 'getSourceJobName',
            'sourceJobId' => 'getSourceJobId',
            'status' => 'getStatus',
            'datasetUsage' => 'getDatasetUsage',
            'datasetFileFormats' => 'getDatasetFileFormats',
            'datasetType' => 'getDatasetType',
            'datasetSubType' => 'getDatasetSubType',
            'datasetSchemaFormat' => 'getDatasetSchemaFormat',
            'importFileSource' => 'getImportFileSource',
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
    const ASSET_SOURCE_PUBLISH = 'Publish';
    const ASSET_SOURCE_IMPORT = 'Import';
    const ASSET_SOURCE_TYPE_PRESET_TRAIN = 'preset_train';
    const ASSET_SOURCE_TYPE_CUSTOM_TRAIN = 'custom_train';
    const ASSET_SOURCE_TYPE_AGENTIC_RL = 'AgenticRL';
    const ASSET_SOURCE_TYPE_DATA_CLEANING = 'DATA_CLEANING';
    const ASSET_SOURCE_TYPE_DATA_IMPORT = 'DATA_IMPORT';
    const ASSET_SOURCE_TYPE_DATA_ANNOTATION = 'DATA_ANNOTATION';
    const ASSET_TYPE_MODEL = 'MODEL';
    const ASSET_TYPE_DATASET = 'DATASET';
    const ASSET_TYPE_TEMPLATE = 'TEMPLATE';
    const ASSET_TYPE_WORKFLOW = 'WORKFLOW';
    const ASSET_TYPE_IMAGE = 'IMAGE';
    const ASSET_TYPE_ALGORITHM = 'ALGORITHM';
    const ASSET_TYPE_DATASET_TEMPLATE = 'DATASET_TEMPLATE';
    const ASSET_TYPE_DATA_OPERATOR = 'DATA_OPERATOR';
    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';
    const STATUS_WAITING = 'waiting';
    const IMPORT_FILE_SOURCE_OBS = 'OBS';
    const IMPORT_FILE_SOURCE_LOCAL = 'LOCAL';
    const IMPORT_FILE_SOURCE_AIDATALAKE = 'AIDATALAKE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetSourceAllowableValues()
    {
        return [
            self::ASSET_SOURCE_PUBLISH,
            self::ASSET_SOURCE_IMPORT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetSourceTypeAllowableValues()
    {
        return [
            self::ASSET_SOURCE_TYPE_PRESET_TRAIN,
            self::ASSET_SOURCE_TYPE_CUSTOM_TRAIN,
            self::ASSET_SOURCE_TYPE_AGENTIC_RL,
            self::ASSET_SOURCE_TYPE_DATA_CLEANING,
            self::ASSET_SOURCE_TYPE_DATA_IMPORT,
            self::ASSET_SOURCE_TYPE_DATA_ANNOTATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetTypeAllowableValues()
    {
        return [
            self::ASSET_TYPE_MODEL,
            self::ASSET_TYPE_DATASET,
            self::ASSET_TYPE_TEMPLATE,
            self::ASSET_TYPE_WORKFLOW,
            self::ASSET_TYPE_IMAGE,
            self::ASSET_TYPE_ALGORITHM,
            self::ASSET_TYPE_DATASET_TEMPLATE,
            self::ASSET_TYPE_DATA_OPERATOR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ONLINE,
            self::STATUS_OFFLINE,
            self::STATUS_WAITING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImportFileSourceAllowableValues()
    {
        return [
            self::IMPORT_FILE_SOURCE_OBS,
            self::IMPORT_FILE_SOURCE_LOCAL,
            self::IMPORT_FILE_SOURCE_AIDATALAKE,
        ];
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
        $this->container['parentAssetId'] = isset($data['parentAssetId']) ? $data['parentAssetId'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetSource'] = isset($data['assetSource']) ? $data['assetSource'] : null;
        $this->container['assetSourceType'] = isset($data['assetSourceType']) ? $data['assetSourceType'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetDesc'] = isset($data['assetDesc']) ? $data['assetDesc'] : null;
        $this->container['assetGroupDesc'] = isset($data['assetGroupDesc']) ? $data['assetGroupDesc'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['supportActions'] = isset($data['supportActions']) ? $data['supportActions'] : null;
        $this->container['assetLocation'] = isset($data['assetLocation']) ? $data['assetLocation'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetGroupId'] = isset($data['assetGroupId']) ? $data['assetGroupId'] : null;
        $this->container['assetSeries'] = isset($data['assetSeries']) ? $data['assetSeries'] : null;
        $this->container['assetCapabilities'] = isset($data['assetCapabilities']) ? $data['assetCapabilities'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['sourceOperation'] = isset($data['sourceOperation']) ? $data['sourceOperation'] : null;
        $this->container['sourceJobName'] = isset($data['sourceJobName']) ? $data['sourceJobName'] : null;
        $this->container['sourceJobId'] = isset($data['sourceJobId']) ? $data['sourceJobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datasetUsage'] = isset($data['datasetUsage']) ? $data['datasetUsage'] : null;
        $this->container['datasetFileFormats'] = isset($data['datasetFileFormats']) ? $data['datasetFileFormats'] : null;
        $this->container['datasetType'] = isset($data['datasetType']) ? $data['datasetType'] : null;
        $this->container['datasetSubType'] = isset($data['datasetSubType']) ? $data['datasetSubType'] : null;
        $this->container['datasetSchemaFormat'] = isset($data['datasetSchemaFormat']) ? $data['datasetSchemaFormat'] : null;
        $this->container['importFileSource'] = isset($data['importFileSource']) ? $data['importFileSource'] : null;
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
            if (!is_null($this->container['parentAssetId']) && !preg_match("/^[a-zA-Z0-9-]{1,36}$/", $this->container['parentAssetId'])) {
                $invalidProperties[] = "invalid value for 'parentAssetId', must be conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['apiVersion']) && !preg_match("/^v\\d{1,2}$/", $this->container['apiVersion'])) {
                $invalidProperties[] = "invalid value for 'apiVersion', must be conform to the pattern /^v\\d{1,2}$/.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_-]+$/", $this->container['assetName'])) {
                $invalidProperties[] = "invalid value for 'assetName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_-]+$/.";
            }
            $allowedValues = $this->getAssetSourceAllowableValues();
                if (!is_null($this->container['assetSource']) && !in_array($this->container['assetSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAssetSourceTypeAllowableValues();
                if (!is_null($this->container['assetSourceType']) && !in_array($this->container['assetSourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetSourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetCode']) && !preg_match("/^[a-zA-Z0-9-_.]{1,60}$/", $this->container['assetCode'])) {
                $invalidProperties[] = "invalid value for 'assetCode', must be conform to the pattern /^[a-zA-Z0-9-_.]{1,60}$/.";
            }
            if (!is_null($this->container['assetDesc']) && (mb_strlen($this->container['assetDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'assetDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['assetDesc']) && !preg_match("/^[^<>]*$/", $this->container['assetDesc'])) {
                $invalidProperties[] = "invalid value for 'assetDesc', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['assetGroupDesc']) && (mb_strlen($this->container['assetGroupDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'assetGroupDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['assetGroupDesc']) && !preg_match("/^[^<>]*$/", $this->container['assetGroupDesc'])) {
                $invalidProperties[] = "invalid value for 'assetGroupDesc', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['assetVersion'] === null) {
            $invalidProperties[] = "'assetVersion' can't be null";
        }
            if (!preg_match("/^\\d{1,2}$/", $this->container['assetVersion'])) {
                $invalidProperties[] = "invalid value for 'assetVersion', must be conform to the pattern /^\\d{1,2}$/.";
            }
            if (!is_null($this->container['assetLocation']) && (mb_strlen($this->container['assetLocation']) > 1024)) {
                $invalidProperties[] = "invalid value for 'assetLocation', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['assetLocation']) && (mb_strlen($this->container['assetLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetLocation', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssetTypeAllowableValues();
                if (!is_null($this->container['assetType']) && !in_array($this->container['assetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['assetGroupId']) && !preg_match("/^[a-zA-Z0-9-]{1,36}$/", $this->container['assetGroupId'])) {
                $invalidProperties[] = "invalid value for 'assetGroupId', must be conform to the pattern /^[a-zA-Z0-9-]{1,36}$/.";
            }
            if (!is_null($this->container['assetSeries']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['assetSeries'])) {
                $invalidProperties[] = "invalid value for 'assetSeries', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['datasetUsage']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetUsage'])) {
                $invalidProperties[] = "invalid value for 'datasetUsage', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
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
            if (!is_null($this->container['datasetSubType']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetSubType'])) {
                $invalidProperties[] = "invalid value for 'datasetSubType', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['datasetSchemaFormat']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetSchemaFormat'])) {
                $invalidProperties[] = "invalid value for 'datasetSchemaFormat', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            $allowedValues = $this->getImportFileSourceAllowableValues();
                if (!is_null($this->container['importFileSource']) && !in_array($this->container['importFileSource'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'importFileSource', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets parentAssetId
    *  **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $parentAssetId **参数解释**：父资产id。 **约束限制**：1-36位字符，英文字母，数字，中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setParentAssetId($parentAssetId)
    {
        $this->container['parentAssetId'] = $parentAssetId;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    *
    * @return string|null
    */
    public function getApiVersion()
    {
        return $this->container['apiVersion'];
    }

    /**
    * Sets apiVersion
    *
    * @param string|null $apiVersion **参数解释**：资产API版本，固定v2。 **约束限制**：固定v2。 **取值范围**：v2。 **默认取值**：v2。
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets assetName
    *  **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $assetName **参数解释**：资产名称。 **约束限制**：1-128位字符，只包含中文、字母、数字、中划线、下划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetSource
    *  **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
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
    * @param string|null $assetSource **参数解释**：用户资产来源。 **约束限制**：不涉及。 **取值范围**：枚举值： - Publish：发布 - Import：导入 **默认取值**：不涉及。
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
    *  **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
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
    * @param string|null $assetSourceType **参数解释**：用户资产来源类型。 **约束限制**：不涉及。 **取值范围**：枚举值： - preset_train：预训练 - custom_train：用户训练 - AgenticRL：强化学习 - DATA_CLEANING：数据清洗 - DATA_IMPORT：数据导入 - DATA_ANNOTATION：数据标注 **默认取值**：不涉及。
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
    *  **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $assetCode **参数解释**：资产code。 **约束限制**：1-60字符，英文字母，数字，中划线，下划线，点。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets assetDesc
    *  **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetDesc()
    {
        return $this->container['assetDesc'];
    }

    /**
    * Sets assetDesc
    *
    * @param string|null $assetDesc **参数解释**：资产描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetDesc($assetDesc)
    {
        $this->container['assetDesc'] = $assetDesc;
        return $this;
    }

    /**
    * Gets assetGroupDesc
    *  **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetGroupDesc()
    {
        return $this->container['assetGroupDesc'];
    }

    /**
    * Sets assetGroupDesc
    *
    * @param string|null $assetGroupDesc **参数解释**：资产组描述。 **约束限制**：0-512位字符，不能包含英文尖括号（即 < 或 >）。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetGroupDesc($assetGroupDesc)
    {
        $this->container['assetGroupDesc'] = $assetGroupDesc;
        return $this;
    }

    /**
    * Gets assetVersion
    *  **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getAssetVersion()
    {
        return $this->container['assetVersion'];
    }

    /**
    * Sets assetVersion
    *
    * @param string $assetVersion **参数解释**：资产版本号。 **约束限制**：0-99数字字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets supportActions
    *  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
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
    * @param string[]|null $supportActions **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setSupportActions($supportActions)
    {
        $this->container['supportActions'] = $supportActions;
        return $this;
    }

    /**
    * Gets assetLocation
    *  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetLocation()
    {
        return $this->container['assetLocation'];
    }

    /**
    * Sets assetLocation
    *
    * @param string|null $assetLocation **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **约束限制**：0-1024位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetLocation($assetLocation)
    {
        $this->container['assetLocation'] = $assetLocation;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
    * Sets assetType
    *
    * @param string|null $assetType **参数解释**：资产类型。 **约束限制**：当不传parent_asset_id时必填。 **取值范围**：枚举值: - MODEL: 模型资产 - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - DATASET_TEMPLATE: 数据集模板资产 - DATA_OPERATOR：算子镜像资产 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets assetGroupId
    *  **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $assetGroupId **参数解释**：需要加入的资产组id。 **约束限制**：1-36位字符，已存在的组id。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAssetGroupId($assetGroupId)
    {
        $this->container['assetGroupId'] = $assetGroupId;
        return $this;
    }

    /**
    * Gets assetSeries
    *  **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $assetSeries **参数解释**：资产品牌，例如DeepSeek,Qwen,Wan,GPT,Llama,GLM,ERNIE,Mistral,Kimi,Other。 **约束限制**：1-40位字符，仅支持英文字母、数字、下划线和中划线。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
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
    * @param string[]|null $assetCapabilities **参数解释**：资产能力，为自由文本字符串列表(非严格枚举)。推荐使用以下约定值：例如TextGeneration,ImageUnderstanding,ImageGeneration,VideoGeneration,Other。 **约束限制**：每个元素1-40位字符，仅支持英文字母、数字、下划线和中划线；最多10个元素。
    *
    * @return $this
    */
    public function setAssetCapabilities($assetCapabilities)
    {
        $this->container['assetCapabilities'] = $assetCapabilities;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionReq[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionReq[]|null $actions **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets sourceOperation
    *  **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSourceOperation()
    {
        return $this->container['sourceOperation'];
    }

    /**
    * Sets sourceOperation
    *
    * @param string|null $sourceOperation **参数解释**：模型来源于哪个操作。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSourceOperation($sourceOperation)
    {
        $this->container['sourceOperation'] = $sourceOperation;
        return $this;
    }

    /**
    * Gets sourceJobName
    *  **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSourceJobName()
    {
        return $this->container['sourceJobName'];
    }

    /**
    * Sets sourceJobName
    *
    * @param string|null $sourceJobName **参数解释**：模型来源作业的名称。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSourceJobName($sourceJobName)
    {
        $this->container['sourceJobName'] = $sourceJobName;
        return $this;
    }

    /**
    * Gets sourceJobId
    *  **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSourceJobId()
    {
        return $this->container['sourceJobId'];
    }

    /**
    * Sets sourceJobId
    *
    * @param string|null $sourceJobId **参数解释**：模型来源作业的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSourceJobId($sourceJobId)
    {
        $this->container['sourceJobId'] = $sourceJobId;
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
    * Gets datasetUsage
    *  **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $datasetUsage **参数解释**：数据集用途。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetUsage($datasetUsage)
    {
        $this->container['datasetUsage'] = $datasetUsage;
        return $this;
    }

    /**
    * Gets datasetFileFormats
    *  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
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
    * @param string[]|null $datasetFileFormats **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：0-40位字符。
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
    *  **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $datasetType **参数解释**：数据集模态划分，如音频，图像，视频。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    *  **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $datasetSchemaFormat **参数解释**：数据集逻辑规范，如盘古格式。 **约束限制**：1-40位字符。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetSchemaFormat($datasetSchemaFormat)
    {
        $this->container['datasetSchemaFormat'] = $datasetSchemaFormat;
        return $this;
    }

    /**
    * Gets importFileSource
    *  **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getImportFileSource()
    {
        return $this->container['importFileSource'];
    }

    /**
    * Sets importFileSource
    *
    * @param string|null $importFileSource **参数解释**：导入文件来源。 **约束限制**：数据集资产导入时需要。 **取值范围**：枚举值: - OBS: 从OBS导入 - LOCAL: 从本地导入 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImportFileSource($importFileSource)
    {
        $this->container['importFileSource'] = $importFileSource;
        return $this;
    }

    /**
    * Gets dataSourceId
    *  **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string|null $dataSourceId **参数解释**：数据集资产数据源的ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
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

