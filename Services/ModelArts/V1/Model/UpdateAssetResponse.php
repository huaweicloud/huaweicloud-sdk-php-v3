<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAssetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAssetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  **参数解释**：资产id。 **取值范围**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **取值范围**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **取值范围**：不涉及。
    * apiVersion  **参数解释**：资产API版本。 **取值范围**：v1,v2。
    * assetName  **参数解释**：资产名称。 **取值范围**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    * assetType  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    * subAssetType  **参数解释**：资产子类型。 **取值范围**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * status  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
    * datasetUsage  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'parentAssetId' => 'string',
            'rootAssetId' => 'string',
            'apiVersion' => 'string',
            'assetName' => 'string',
            'assetGroupId' => 'string',
            'workspaceId' => 'string',
            'assetType' => 'string',
            'subAssetType' => 'string',
            'assetDesc' => 'string',
            'assetCode' => 'string',
            'assetVersion' => 'string',
            'tags' => 'map[string,string[]]',
            'supportActions' => 'object',
            'assetLocation' => 'string',
            'actions' => '\HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionRsp[]',
            'status' => 'string',
            'datasetUsage' => 'string',
            'datasetFileFormats' => 'string[]',
            'datasetType' => 'string',
            'datasetSubType' => 'string',
            'datasetSchemaFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  **参数解释**：资产id。 **取值范围**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **取值范围**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **取值范围**：不涉及。
    * apiVersion  **参数解释**：资产API版本。 **取值范围**：v1,v2。
    * assetName  **参数解释**：资产名称。 **取值范围**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    * assetType  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    * subAssetType  **参数解释**：资产子类型。 **取值范围**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * status  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
    * datasetUsage  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'parentAssetId' => null,
        'rootAssetId' => null,
        'apiVersion' => null,
        'assetName' => null,
        'assetGroupId' => null,
        'workspaceId' => null,
        'assetType' => null,
        'subAssetType' => null,
        'assetDesc' => null,
        'assetCode' => null,
        'assetVersion' => null,
        'tags' => null,
        'supportActions' => null,
        'assetLocation' => null,
        'actions' => null,
        'status' => null,
        'datasetUsage' => null,
        'datasetFileFormats' => null,
        'datasetType' => null,
        'datasetSubType' => null,
        'datasetSchemaFormat' => null
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
    * assetId  **参数解释**：资产id。 **取值范围**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **取值范围**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **取值范围**：不涉及。
    * apiVersion  **参数解释**：资产API版本。 **取值范围**：v1,v2。
    * assetName  **参数解释**：资产名称。 **取值范围**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    * assetType  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    * subAssetType  **参数解释**：资产子类型。 **取值范围**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * status  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
    * datasetUsage  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'parentAssetId' => 'parent_asset_id',
            'rootAssetId' => 'root_asset_id',
            'apiVersion' => 'api_version',
            'assetName' => 'asset_name',
            'assetGroupId' => 'asset_group_id',
            'workspaceId' => 'workspace_id',
            'assetType' => 'asset_type',
            'subAssetType' => 'sub_asset_type',
            'assetDesc' => 'asset_desc',
            'assetCode' => 'asset_code',
            'assetVersion' => 'asset_version',
            'tags' => 'tags',
            'supportActions' => 'support_actions',
            'assetLocation' => 'asset_location',
            'actions' => 'actions',
            'status' => 'status',
            'datasetUsage' => 'dataset_usage',
            'datasetFileFormats' => 'dataset_file_formats',
            'datasetType' => 'dataset_type',
            'datasetSubType' => 'dataset_sub_type',
            'datasetSchemaFormat' => 'dataset_schema_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  **参数解释**：资产id。 **取值范围**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **取值范围**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **取值范围**：不涉及。
    * apiVersion  **参数解释**：资产API版本。 **取值范围**：v1,v2。
    * assetName  **参数解释**：资产名称。 **取值范围**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    * assetType  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    * subAssetType  **参数解释**：资产子类型。 **取值范围**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * status  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
    * datasetUsage  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'parentAssetId' => 'setParentAssetId',
            'rootAssetId' => 'setRootAssetId',
            'apiVersion' => 'setApiVersion',
            'assetName' => 'setAssetName',
            'assetGroupId' => 'setAssetGroupId',
            'workspaceId' => 'setWorkspaceId',
            'assetType' => 'setAssetType',
            'subAssetType' => 'setSubAssetType',
            'assetDesc' => 'setAssetDesc',
            'assetCode' => 'setAssetCode',
            'assetVersion' => 'setAssetVersion',
            'tags' => 'setTags',
            'supportActions' => 'setSupportActions',
            'assetLocation' => 'setAssetLocation',
            'actions' => 'setActions',
            'status' => 'setStatus',
            'datasetUsage' => 'setDatasetUsage',
            'datasetFileFormats' => 'setDatasetFileFormats',
            'datasetType' => 'setDatasetType',
            'datasetSubType' => 'setDatasetSubType',
            'datasetSchemaFormat' => 'setDatasetSchemaFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  **参数解释**：资产id。 **取值范围**：不涉及。
    * parentAssetId  **参数解释**：父资产id。 **取值范围**：不涉及。
    * rootAssetId  **参数解释**：根资产id。 **取值范围**：不涉及。
    * apiVersion  **参数解释**：资产API版本。 **取值范围**：v1,v2。
    * assetName  **参数解释**：资产名称。 **取值范围**：不涉及。
    * assetGroupId  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    * assetType  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    * subAssetType  **参数解释**：资产子类型。 **取值范围**：不涉及。
    * assetDesc  **参数解释**：资产描述。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    * tags  **参数解释**：资产tag。 **约束限制**：不涉及。
    * supportActions  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    * assetLocation  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    * actions  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    * status  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
    * datasetUsage  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
    * datasetFileFormats  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
    * datasetType  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
    * datasetSubType  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
    * datasetSchemaFormat  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'parentAssetId' => 'getParentAssetId',
            'rootAssetId' => 'getRootAssetId',
            'apiVersion' => 'getApiVersion',
            'assetName' => 'getAssetName',
            'assetGroupId' => 'getAssetGroupId',
            'workspaceId' => 'getWorkspaceId',
            'assetType' => 'getAssetType',
            'subAssetType' => 'getSubAssetType',
            'assetDesc' => 'getAssetDesc',
            'assetCode' => 'getAssetCode',
            'assetVersion' => 'getAssetVersion',
            'tags' => 'getTags',
            'supportActions' => 'getSupportActions',
            'assetLocation' => 'getAssetLocation',
            'actions' => 'getActions',
            'status' => 'getStatus',
            'datasetUsage' => 'getDatasetUsage',
            'datasetFileFormats' => 'getDatasetFileFormats',
            'datasetType' => 'getDatasetType',
            'datasetSubType' => 'getDatasetSubType',
            'datasetSchemaFormat' => 'getDatasetSchemaFormat'
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
    const STATUS_ONLINE = 'online';
    const STATUS_OFFLINE = 'offline';
    const STATUS_WAITING = 'waiting';
    

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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['parentAssetId'] = isset($data['parentAssetId']) ? $data['parentAssetId'] : null;
        $this->container['rootAssetId'] = isset($data['rootAssetId']) ? $data['rootAssetId'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetGroupId'] = isset($data['assetGroupId']) ? $data['assetGroupId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['subAssetType'] = isset($data['subAssetType']) ? $data['subAssetType'] : null;
        $this->container['assetDesc'] = isset($data['assetDesc']) ? $data['assetDesc'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['supportActions'] = isset($data['supportActions']) ? $data['supportActions'] : null;
        $this->container['assetLocation'] = isset($data['assetLocation']) ? $data['assetLocation'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['datasetUsage'] = isset($data['datasetUsage']) ? $data['datasetUsage'] : null;
        $this->container['datasetFileFormats'] = isset($data['datasetFileFormats']) ? $data['datasetFileFormats'] : null;
        $this->container['datasetType'] = isset($data['datasetType']) ? $data['datasetType'] : null;
        $this->container['datasetSubType'] = isset($data['datasetSubType']) ? $data['datasetSubType'] : null;
        $this->container['datasetSchemaFormat'] = isset($data['datasetSchemaFormat']) ? $data['datasetSchemaFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
            if (!is_null($this->container['datasetType']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetType'])) {
                $invalidProperties[] = "invalid value for 'datasetType', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['datasetSubType']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetSubType'])) {
                $invalidProperties[] = "invalid value for 'datasetSubType', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
            }
            if (!is_null($this->container['datasetSchemaFormat']) && !preg_match("/^[a-zA-Z0-9-_]{1,40}$/", $this->container['datasetSchemaFormat'])) {
                $invalidProperties[] = "invalid value for 'datasetSchemaFormat', must be conform to the pattern /^[a-zA-Z0-9-_]{1,40}$/.";
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
    * Gets assetId
    *  **参数解释**：资产id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId **参数解释**：资产id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets parentAssetId
    *  **参数解释**：父资产id。 **取值范围**：不涉及。
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
    * @param string|null $parentAssetId **参数解释**：父资产id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setParentAssetId($parentAssetId)
    {
        $this->container['parentAssetId'] = $parentAssetId;
        return $this;
    }

    /**
    * Gets rootAssetId
    *  **参数解释**：根资产id。 **取值范围**：不涉及。
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
    * @param string|null $rootAssetId **参数解释**：根资产id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRootAssetId($rootAssetId)
    {
        $this->container['rootAssetId'] = $rootAssetId;
        return $this;
    }

    /**
    * Gets apiVersion
    *  **参数解释**：资产API版本。 **取值范围**：v1,v2。
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
    * @param string|null $apiVersion **参数解释**：资产API版本。 **取值范围**：v1,v2。
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
    *  **参数解释**：资产名称。 **取值范围**：不涉及。
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
    * @param string|null $assetName **参数解释**：资产名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetGroupId
    *  **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
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
    * @param string|null $assetGroupId **参数解释**：需要加入的资产组id。 **取值范围**：0-36位字符，已存在的组id。
    *
    * @return $this
    */
    public function setAssetGroupId($assetGroupId)
    {
        $this->container['assetGroupId'] = $assetGroupId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：1-32位字母，数字。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets assetType
    *  **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
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
    * @param string|null $assetType **参数解释**：资产类型。 **取值范围**：枚举值： - TEMPLATE: 模板资产 - DATASET: 数据集资产 - WORKFLOW: 工作流资产 - IMAGE: 镜像资产 - ALGORITHM：算法资产 - MODEL: 模型资产 - DATASET_TEMPLATE: 数据集模板资产
    *
    * @return $this
    */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;
        return $this;
    }

    /**
    * Gets subAssetType
    *  **参数解释**：资产子类型。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getSubAssetType()
    {
        return $this->container['subAssetType'];
    }

    /**
    * Sets subAssetType
    *
    * @param string|null $subAssetType **参数解释**：资产子类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setSubAssetType($subAssetType)
    {
        $this->container['subAssetType'] = $subAssetType;
        return $this;
    }

    /**
    * Gets assetDesc
    *  **参数解释**：资产描述。 **取值范围**：不涉及。
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
    * @param string|null $assetDesc **参数解释**：资产描述。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetDesc($assetDesc)
    {
        $this->container['assetDesc'] = $assetDesc;
        return $this;
    }

    /**
    * Gets assetCode
    *  **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
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
    * @param string|null $assetCode **参数解释**：资产code。 **取值范围**：1-60字符，英文字母，数字，中划线，下划线，点。
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
    *  **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
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
    * @param string|null $assetVersion **参数解释**：资产版本。 **取值范围**：数字或格式为x.y.z，x,y,z为数字。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：资产tag。 **约束限制**：不涉及。
    *
    * @return map[string,string[]]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string[]]|null $tags **参数解释**：资产tag。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets supportActions
    *  **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
    *
    * @return object|null
    */
    public function getSupportActions()
    {
        return $this->container['supportActions'];
    }

    /**
    * Sets supportActions
    *
    * @param object|null $supportActions **参数解释**：资产支持的操作列表，例如监督微调:SFT,LORA微调:LORA,在线部署:ONLINE-DEPLOY,强化学习:AgenticRL。 **约束限制**：不涉及。
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
    *  **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
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
    * @param string|null $assetLocation **参数解释**：资产文件存储地址,支持OBS（对象存储服务）协议的URL和相对路径。 **取值范围**：0-1024位字符。
    *
    * @return $this
    */
    public function setAssetLocation($assetLocation)
    {
        $this->container['assetLocation'] = $assetLocation;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionRsp[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\AssetActionRsp[]|null $actions **参数解释**：资产可执行操作详情配置。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
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
    * @param string|null $status **参数解释**：资产状态。 **取值范围**：枚举值: - online: 上线 - offline: 下线 - waiting: 等待中
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
    *  **参数解释**：数据集用途。 **取值范围**：1-40位字符。
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
    * @param string|null $datasetUsage **参数解释**：数据集用途。 **取值范围**：1-40位字符。
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
    *  **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
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
    * @param string[]|null $datasetFileFormats **参数解释**：数据集存储格式，例如JSONL，TXT，MOBI，EPUB，DOCX，PDF。 **约束限制**：1-40位字符。
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
    *  **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
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
    * @param string|null $datasetType **参数解释**：数据集模态划分，如音频，图像，视频。 **取值范围**：1-40位字符。
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
    *  **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
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
    * @param string|null $datasetSubType **参数解释**：数据集模态细分值，如语义分割。 **取值范围**：1-40位字符。
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
    *  **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
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
    * @param string|null $datasetSchemaFormat **参数解释**：数据集逻辑规范，如盘古格式。 **取值范围**：1-40位字符。
    *
    * @return $this
    */
    public function setDatasetSchemaFormat($datasetSchemaFormat)
    {
        $this->container['datasetSchemaFormat'] = $datasetSchemaFormat;
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

