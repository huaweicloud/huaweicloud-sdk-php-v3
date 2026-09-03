<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFtDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFtDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id。
    * taskId  训练任务id。
    * taskName  训练任务名称。
    * taskDesc  训练任务描述信息。
    * metadata  metadata
    * spec  spec
    * modelAssetId  模型id。
    * modelType  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    * modelSource  模型来源
    * trainType  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    * checkpointConfig  断点续训相关配置。
    * taskParameters  训练任参数信息。
    * createTime  创建时间。
    * updateTime  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    * trainProcess  训练任务进度。
    * datasetsConfig  该训练任务数据集相关的配置。
    * status  status
    * autoPublishConfig  自动发布配置信息
    * assetCode  模型资产名
    * assetName  资产名称
    * assetDesc  模型资产描述信息
    * assetSeries  模型系列
    * assetVersion  资产版本
    * assetType  资产类型
    * assetSource  资产来源
    * assetGroupId  资产组id
    * subAssetType  资产子类型
    * category  资产类别
    * apiVersion  资产API版本
    * rootAssetId  根资产ID
    * trainCostTime  训练任务耗时
    * workspaceId  任务所属工作空间名称
    * userId  用户id
    * userName  用户名称
    * poolType  资源池类型
    * poolId  资源池ID
    * poolNodeCount  使用的资源池实例数
    * flavorId  使用的资源池卡数
    * priority  优先级
    * trainingInfo  训练预估时长
    * trainOutputPath  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  训练模型类型
    * continueTask  continueTask
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'taskDesc' => 'string',
            'metadata' => '\HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse',
            'spec' => '\HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse',
            'modelAssetId' => 'string',
            'modelType' => 'string',
            'modelSource' => 'string',
            'trainType' => 'string',
            'checkpointConfig' => 'string',
            'taskParameters' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'trainProcess' => 'double',
            'datasetsConfig' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DatasetConfig[]',
            'status' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Status',
            'autoPublishConfig' => 'string',
            'assetCode' => 'string',
            'assetName' => 'string',
            'assetDesc' => 'string',
            'assetSeries' => 'string',
            'assetVersion' => 'string',
            'assetType' => 'string',
            'assetSource' => 'string',
            'assetGroupId' => 'string',
            'subAssetType' => 'string',
            'category' => 'string',
            'apiVersion' => 'string',
            'rootAssetId' => 'string',
            'trainCostTime' => 'int',
            'workspaceId' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'poolType' => 'string',
            'poolId' => 'string',
            'poolNodeCount' => 'string',
            'flavorId' => 'string',
            'priority' => 'int',
            'trainingInfo' => 'string',
            'trainOutputPath' => 'string',
            'assetCapabilities' => 'string[]',
            'continueTask' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTask'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id。
    * taskId  训练任务id。
    * taskName  训练任务名称。
    * taskDesc  训练任务描述信息。
    * metadata  metadata
    * spec  spec
    * modelAssetId  模型id。
    * modelType  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    * modelSource  模型来源
    * trainType  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    * checkpointConfig  断点续训相关配置。
    * taskParameters  训练任参数信息。
    * createTime  创建时间。
    * updateTime  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    * trainProcess  训练任务进度。
    * datasetsConfig  该训练任务数据集相关的配置。
    * status  status
    * autoPublishConfig  自动发布配置信息
    * assetCode  模型资产名
    * assetName  资产名称
    * assetDesc  模型资产描述信息
    * assetSeries  模型系列
    * assetVersion  资产版本
    * assetType  资产类型
    * assetSource  资产来源
    * assetGroupId  资产组id
    * subAssetType  资产子类型
    * category  资产类别
    * apiVersion  资产API版本
    * rootAssetId  根资产ID
    * trainCostTime  训练任务耗时
    * workspaceId  任务所属工作空间名称
    * userId  用户id
    * userName  用户名称
    * poolType  资源池类型
    * poolId  资源池ID
    * poolNodeCount  使用的资源池实例数
    * flavorId  使用的资源池卡数
    * priority  优先级
    * trainingInfo  训练预估时长
    * trainOutputPath  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  训练模型类型
    * continueTask  continueTask
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'taskId' => null,
        'taskName' => null,
        'taskDesc' => null,
        'metadata' => null,
        'spec' => null,
        'modelAssetId' => null,
        'modelType' => null,
        'modelSource' => null,
        'trainType' => null,
        'checkpointConfig' => null,
        'taskParameters' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'trainProcess' => 'double',
        'datasetsConfig' => null,
        'status' => null,
        'autoPublishConfig' => null,
        'assetCode' => null,
        'assetName' => null,
        'assetDesc' => null,
        'assetSeries' => null,
        'assetVersion' => null,
        'assetType' => null,
        'assetSource' => null,
        'assetGroupId' => null,
        'subAssetType' => null,
        'category' => null,
        'apiVersion' => null,
        'rootAssetId' => null,
        'trainCostTime' => 'int64',
        'workspaceId' => null,
        'userId' => null,
        'userName' => null,
        'poolType' => null,
        'poolId' => null,
        'poolNodeCount' => null,
        'flavorId' => null,
        'priority' => 'int32',
        'trainingInfo' => null,
        'trainOutputPath' => null,
        'assetCapabilities' => null,
        'continueTask' => null
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
    * projectId  项目id。
    * taskId  训练任务id。
    * taskName  训练任务名称。
    * taskDesc  训练任务描述信息。
    * metadata  metadata
    * spec  spec
    * modelAssetId  模型id。
    * modelType  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    * modelSource  模型来源
    * trainType  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    * checkpointConfig  断点续训相关配置。
    * taskParameters  训练任参数信息。
    * createTime  创建时间。
    * updateTime  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    * trainProcess  训练任务进度。
    * datasetsConfig  该训练任务数据集相关的配置。
    * status  status
    * autoPublishConfig  自动发布配置信息
    * assetCode  模型资产名
    * assetName  资产名称
    * assetDesc  模型资产描述信息
    * assetSeries  模型系列
    * assetVersion  资产版本
    * assetType  资产类型
    * assetSource  资产来源
    * assetGroupId  资产组id
    * subAssetType  资产子类型
    * category  资产类别
    * apiVersion  资产API版本
    * rootAssetId  根资产ID
    * trainCostTime  训练任务耗时
    * workspaceId  任务所属工作空间名称
    * userId  用户id
    * userName  用户名称
    * poolType  资源池类型
    * poolId  资源池ID
    * poolNodeCount  使用的资源池实例数
    * flavorId  使用的资源池卡数
    * priority  优先级
    * trainingInfo  训练预估时长
    * trainOutputPath  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  训练模型类型
    * continueTask  continueTask
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'taskDesc' => 'task_desc',
            'metadata' => 'metadata',
            'spec' => 'spec',
            'modelAssetId' => 'model_asset_id',
            'modelType' => 'model_type',
            'modelSource' => 'model_source',
            'trainType' => 'train_type',
            'checkpointConfig' => 'checkpoint_config',
            'taskParameters' => 'task_parameters',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'trainProcess' => 'train_process',
            'datasetsConfig' => 'datasets_config',
            'status' => 'status',
            'autoPublishConfig' => 'auto_publish_config',
            'assetCode' => 'asset_code',
            'assetName' => 'asset_name',
            'assetDesc' => 'asset_desc',
            'assetSeries' => 'asset_series',
            'assetVersion' => 'asset_version',
            'assetType' => 'asset_type',
            'assetSource' => 'asset_source',
            'assetGroupId' => 'asset_group_id',
            'subAssetType' => 'sub_asset_type',
            'category' => 'category',
            'apiVersion' => 'api_version',
            'rootAssetId' => 'root_asset_id',
            'trainCostTime' => 'train_cost_time',
            'workspaceId' => 'workspace_id',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'poolType' => 'pool_type',
            'poolId' => 'pool_id',
            'poolNodeCount' => 'pool_node_count',
            'flavorId' => 'flavor_id',
            'priority' => 'priority',
            'trainingInfo' => 'training_info',
            'trainOutputPath' => 'train_output_path',
            'assetCapabilities' => 'asset_capabilities',
            'continueTask' => 'continue_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id。
    * taskId  训练任务id。
    * taskName  训练任务名称。
    * taskDesc  训练任务描述信息。
    * metadata  metadata
    * spec  spec
    * modelAssetId  模型id。
    * modelType  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    * modelSource  模型来源
    * trainType  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    * checkpointConfig  断点续训相关配置。
    * taskParameters  训练任参数信息。
    * createTime  创建时间。
    * updateTime  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    * trainProcess  训练任务进度。
    * datasetsConfig  该训练任务数据集相关的配置。
    * status  status
    * autoPublishConfig  自动发布配置信息
    * assetCode  模型资产名
    * assetName  资产名称
    * assetDesc  模型资产描述信息
    * assetSeries  模型系列
    * assetVersion  资产版本
    * assetType  资产类型
    * assetSource  资产来源
    * assetGroupId  资产组id
    * subAssetType  资产子类型
    * category  资产类别
    * apiVersion  资产API版本
    * rootAssetId  根资产ID
    * trainCostTime  训练任务耗时
    * workspaceId  任务所属工作空间名称
    * userId  用户id
    * userName  用户名称
    * poolType  资源池类型
    * poolId  资源池ID
    * poolNodeCount  使用的资源池实例数
    * flavorId  使用的资源池卡数
    * priority  优先级
    * trainingInfo  训练预估时长
    * trainOutputPath  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  训练模型类型
    * continueTask  continueTask
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'taskDesc' => 'setTaskDesc',
            'metadata' => 'setMetadata',
            'spec' => 'setSpec',
            'modelAssetId' => 'setModelAssetId',
            'modelType' => 'setModelType',
            'modelSource' => 'setModelSource',
            'trainType' => 'setTrainType',
            'checkpointConfig' => 'setCheckpointConfig',
            'taskParameters' => 'setTaskParameters',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'trainProcess' => 'setTrainProcess',
            'datasetsConfig' => 'setDatasetsConfig',
            'status' => 'setStatus',
            'autoPublishConfig' => 'setAutoPublishConfig',
            'assetCode' => 'setAssetCode',
            'assetName' => 'setAssetName',
            'assetDesc' => 'setAssetDesc',
            'assetSeries' => 'setAssetSeries',
            'assetVersion' => 'setAssetVersion',
            'assetType' => 'setAssetType',
            'assetSource' => 'setAssetSource',
            'assetGroupId' => 'setAssetGroupId',
            'subAssetType' => 'setSubAssetType',
            'category' => 'setCategory',
            'apiVersion' => 'setApiVersion',
            'rootAssetId' => 'setRootAssetId',
            'trainCostTime' => 'setTrainCostTime',
            'workspaceId' => 'setWorkspaceId',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'poolType' => 'setPoolType',
            'poolId' => 'setPoolId',
            'poolNodeCount' => 'setPoolNodeCount',
            'flavorId' => 'setFlavorId',
            'priority' => 'setPriority',
            'trainingInfo' => 'setTrainingInfo',
            'trainOutputPath' => 'setTrainOutputPath',
            'assetCapabilities' => 'setAssetCapabilities',
            'continueTask' => 'setContinueTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id。
    * taskId  训练任务id。
    * taskName  训练任务名称。
    * taskDesc  训练任务描述信息。
    * metadata  metadata
    * spec  spec
    * modelAssetId  模型id。
    * modelType  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    * modelSource  模型来源
    * trainType  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    * checkpointConfig  断点续训相关配置。
    * taskParameters  训练任参数信息。
    * createTime  创建时间。
    * updateTime  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    * trainProcess  训练任务进度。
    * datasetsConfig  该训练任务数据集相关的配置。
    * status  status
    * autoPublishConfig  自动发布配置信息
    * assetCode  模型资产名
    * assetName  资产名称
    * assetDesc  模型资产描述信息
    * assetSeries  模型系列
    * assetVersion  资产版本
    * assetType  资产类型
    * assetSource  资产来源
    * assetGroupId  资产组id
    * subAssetType  资产子类型
    * category  资产类别
    * apiVersion  资产API版本
    * rootAssetId  根资产ID
    * trainCostTime  训练任务耗时
    * workspaceId  任务所属工作空间名称
    * userId  用户id
    * userName  用户名称
    * poolType  资源池类型
    * poolId  资源池ID
    * poolNodeCount  使用的资源池实例数
    * flavorId  使用的资源池卡数
    * priority  优先级
    * trainingInfo  训练预估时长
    * trainOutputPath  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * assetCapabilities  训练模型类型
    * continueTask  continueTask
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'taskDesc' => 'getTaskDesc',
            'metadata' => 'getMetadata',
            'spec' => 'getSpec',
            'modelAssetId' => 'getModelAssetId',
            'modelType' => 'getModelType',
            'modelSource' => 'getModelSource',
            'trainType' => 'getTrainType',
            'checkpointConfig' => 'getCheckpointConfig',
            'taskParameters' => 'getTaskParameters',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'trainProcess' => 'getTrainProcess',
            'datasetsConfig' => 'getDatasetsConfig',
            'status' => 'getStatus',
            'autoPublishConfig' => 'getAutoPublishConfig',
            'assetCode' => 'getAssetCode',
            'assetName' => 'getAssetName',
            'assetDesc' => 'getAssetDesc',
            'assetSeries' => 'getAssetSeries',
            'assetVersion' => 'getAssetVersion',
            'assetType' => 'getAssetType',
            'assetSource' => 'getAssetSource',
            'assetGroupId' => 'getAssetGroupId',
            'subAssetType' => 'getSubAssetType',
            'category' => 'getCategory',
            'apiVersion' => 'getApiVersion',
            'rootAssetId' => 'getRootAssetId',
            'trainCostTime' => 'getTrainCostTime',
            'workspaceId' => 'getWorkspaceId',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'poolType' => 'getPoolType',
            'poolId' => 'getPoolId',
            'poolNodeCount' => 'getPoolNodeCount',
            'flavorId' => 'getFlavorId',
            'priority' => 'getPriority',
            'trainingInfo' => 'getTrainingInfo',
            'trainOutputPath' => 'getTrainOutputPath',
            'assetCapabilities' => 'getAssetCapabilities',
            'continueTask' => 'getContinueTask'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskDesc'] = isset($data['taskDesc']) ? $data['taskDesc'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['modelType'] = isset($data['modelType']) ? $data['modelType'] : null;
        $this->container['modelSource'] = isset($data['modelSource']) ? $data['modelSource'] : null;
        $this->container['trainType'] = isset($data['trainType']) ? $data['trainType'] : null;
        $this->container['checkpointConfig'] = isset($data['checkpointConfig']) ? $data['checkpointConfig'] : null;
        $this->container['taskParameters'] = isset($data['taskParameters']) ? $data['taskParameters'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['trainProcess'] = isset($data['trainProcess']) ? $data['trainProcess'] : null;
        $this->container['datasetsConfig'] = isset($data['datasetsConfig']) ? $data['datasetsConfig'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['autoPublishConfig'] = isset($data['autoPublishConfig']) ? $data['autoPublishConfig'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetDesc'] = isset($data['assetDesc']) ? $data['assetDesc'] : null;
        $this->container['assetSeries'] = isset($data['assetSeries']) ? $data['assetSeries'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetSource'] = isset($data['assetSource']) ? $data['assetSource'] : null;
        $this->container['assetGroupId'] = isset($data['assetGroupId']) ? $data['assetGroupId'] : null;
        $this->container['subAssetType'] = isset($data['subAssetType']) ? $data['subAssetType'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['apiVersion'] = isset($data['apiVersion']) ? $data['apiVersion'] : null;
        $this->container['rootAssetId'] = isset($data['rootAssetId']) ? $data['rootAssetId'] : null;
        $this->container['trainCostTime'] = isset($data['trainCostTime']) ? $data['trainCostTime'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['poolType'] = isset($data['poolType']) ? $data['poolType'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['poolNodeCount'] = isset($data['poolNodeCount']) ? $data['poolNodeCount'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['trainingInfo'] = isset($data['trainingInfo']) ? $data['trainingInfo'] : null;
        $this->container['trainOutputPath'] = isset($data['trainOutputPath']) ? $data['trainOutputPath'] : null;
        $this->container['assetCapabilities'] = isset($data['assetCapabilities']) ? $data['assetCapabilities'] : null;
        $this->container['continueTask'] = isset($data['continueTask']) ? $data['continueTask'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 100)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 100)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskDesc']) && (mb_strlen($this->container['taskDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskDesc']) && (mb_strlen($this->container['taskDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 100)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) > 100)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelSource']) && (mb_strlen($this->container['modelSource']) > 100)) {
                $invalidProperties[] = "invalid value for 'modelSource', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['modelSource']) && (mb_strlen($this->container['modelSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainType']) && (mb_strlen($this->container['trainType']) > 100)) {
                $invalidProperties[] = "invalid value for 'trainType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['trainType']) && (mb_strlen($this->container['trainType']) < 0)) {
                $invalidProperties[] = "invalid value for 'trainType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkpointConfig']) && (mb_strlen($this->container['checkpointConfig']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'checkpointConfig', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['checkpointConfig']) && (mb_strlen($this->container['checkpointConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkpointConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskParameters']) && (mb_strlen($this->container['taskParameters']) > 1000)) {
                $invalidProperties[] = "invalid value for 'taskParameters', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['taskParameters']) && (mb_strlen($this->container['taskParameters']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskParameters', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] > 1)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['trainProcess']) && ($this->container['trainProcess'] < 0)) {
                $invalidProperties[] = "invalid value for 'trainProcess', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoPublishConfig']) && (mb_strlen($this->container['autoPublishConfig']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoPublishConfig', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoPublishConfig']) && (mb_strlen($this->container['autoPublishConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'autoPublishConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetDesc']) && (mb_strlen($this->container['assetDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'assetDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['assetDesc']) && (mb_strlen($this->container['assetDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetSeries']) && (mb_strlen($this->container['assetSeries']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetSeries', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetSeries']) && (mb_strlen($this->container['assetSeries']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetSeries', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetType']) && (mb_strlen($this->container['assetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetSource']) && (mb_strlen($this->container['assetSource']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetSource', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetSource']) && (mb_strlen($this->container['assetSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetGroupId']) && (mb_strlen($this->container['assetGroupId']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetGroupId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetGroupId']) && (mb_strlen($this->container['assetGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subAssetType']) && (mb_strlen($this->container['subAssetType']) > 100)) {
                $invalidProperties[] = "invalid value for 'subAssetType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['subAssetType']) && (mb_strlen($this->container['subAssetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'subAssetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 100)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) > 100)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['apiVersion']) && (mb_strlen($this->container['apiVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'apiVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rootAssetId']) && (mb_strlen($this->container['rootAssetId']) > 100)) {
                $invalidProperties[] = "invalid value for 'rootAssetId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['rootAssetId']) && (mb_strlen($this->container['rootAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'rootAssetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainCostTime']) && ($this->container['trainCostTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trainCostTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trainCostTime']) && ($this->container['trainCostTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'trainCostTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 100)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 100)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['poolType']) && (mb_strlen($this->container['poolType']) > 100)) {
                $invalidProperties[] = "invalid value for 'poolType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['poolType']) && (mb_strlen($this->container['poolType']) < 0)) {
                $invalidProperties[] = "invalid value for 'poolType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['poolId']) && (mb_strlen($this->container['poolId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'poolId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['poolId']) && (mb_strlen($this->container['poolId']) < 0)) {
                $invalidProperties[] = "invalid value for 'poolId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['poolNodeCount']) && (mb_strlen($this->container['poolNodeCount']) > 100)) {
                $invalidProperties[] = "invalid value for 'poolNodeCount', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['poolNodeCount']) && (mb_strlen($this->container['poolNodeCount']) < 0)) {
                $invalidProperties[] = "invalid value for 'poolNodeCount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flavorId']) && (mb_strlen($this->container['flavorId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'flavorId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['flavorId']) && (mb_strlen($this->container['flavorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'flavorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 3)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainingInfo']) && (mb_strlen($this->container['trainingInfo']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trainingInfo', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trainingInfo']) && (mb_strlen($this->container['trainingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'trainingInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['trainOutputPath']) && (mb_strlen($this->container['trainOutputPath']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'trainOutputPath', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['trainOutputPath']) && (mb_strlen($this->container['trainOutputPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'trainOutputPath', the character length must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目id。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets taskId
    *  训练任务id。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 训练任务id。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  训练任务名称。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 训练任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskDesc
    *  训练任务描述信息。
    *
    * @return string|null
    */
    public function getTaskDesc()
    {
        return $this->container['taskDesc'];
    }

    /**
    * Sets taskDesc
    *
    * @param string|null $taskDesc 训练任务描述信息。
    *
    * @return $this
    */
    public function setTaskDesc($taskDesc)
    {
        $this->container['taskDesc'] = $taskDesc;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\JobMetadataResponse|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets spec
    *  spec
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\SpecResponse|null $spec spec
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  模型id。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 模型id。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets modelType
    *  **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getModelType()
    {
        return $this->container['modelType'];
    }

    /**
    * Sets modelType
    *
    * @param string|null $modelType **参数解释：** 模型类型，取值为TextGeneration|ImageUnderstanding，依次为：文本生成、图像理解。 **约束限制：** 不涉及 **取值范围：** TextGeneration|ImageUnderstanding **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setModelType($modelType)
    {
        $this->container['modelType'] = $modelType;
        return $this;
    }

    /**
    * Gets modelSource
    *  模型来源
    *
    * @return string|null
    */
    public function getModelSource()
    {
        return $this->container['modelSource'];
    }

    /**
    * Sets modelSource
    *
    * @param string|null $modelSource 模型来源
    *
    * @return $this
    */
    public function setModelSource($modelSource)
    {
        $this->container['modelSource'] = $modelSource;
        return $this;
    }

    /**
    * Gets trainType
    *  **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    *
    * @return string|null
    */
    public function getTrainType()
    {
        return $this->container['trainType'];
    }

    /**
    * Sets trainType
    *
    * @param string|null $trainType **参数解释：** 训练类型，支持SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习）。 **约束限制：** 不涉及 **取值范围：** SFT（全量微调）、PRETRAIN（预训练）、LORA（lora微调）、DPO（dpo强化学习）、RFT（rft强化学习） 默认取值： SFT
    *
    * @return $this
    */
    public function setTrainType($trainType)
    {
        $this->container['trainType'] = $trainType;
        return $this;
    }

    /**
    * Gets checkpointConfig
    *  断点续训相关配置。
    *
    * @return string|null
    */
    public function getCheckpointConfig()
    {
        return $this->container['checkpointConfig'];
    }

    /**
    * Sets checkpointConfig
    *
    * @param string|null $checkpointConfig 断点续训相关配置。
    *
    * @return $this
    */
    public function setCheckpointConfig($checkpointConfig)
    {
        $this->container['checkpointConfig'] = $checkpointConfig;
        return $this;
    }

    /**
    * Gets taskParameters
    *  训练任参数信息。
    *
    * @return string|null
    */
    public function getTaskParameters()
    {
        return $this->container['taskParameters'];
    }

    /**
    * Sets taskParameters
    *
    * @param string|null $taskParameters 训练任参数信息。
    *
    * @return $this
    */
    public function setTaskParameters($taskParameters)
    {
        $this->container['taskParameters'] = $taskParameters;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 训练任务更新时间，当修改、或者训练任务状态发生变化时进行更新。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets trainProcess
    *  训练任务进度。
    *
    * @return double|null
    */
    public function getTrainProcess()
    {
        return $this->container['trainProcess'];
    }

    /**
    * Sets trainProcess
    *
    * @param double|null $trainProcess 训练任务进度。
    *
    * @return $this
    */
    public function setTrainProcess($trainProcess)
    {
        $this->container['trainProcess'] = $trainProcess;
        return $this;
    }

    /**
    * Gets datasetsConfig
    *  该训练任务数据集相关的配置。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DatasetConfig[]|null
    */
    public function getDatasetsConfig()
    {
        return $this->container['datasetsConfig'];
    }

    /**
    * Sets datasetsConfig
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DatasetConfig[]|null $datasetsConfig 该训练任务数据集相关的配置。
    *
    * @return $this
    */
    public function setDatasetsConfig($datasetsConfig)
    {
        $this->container['datasetsConfig'] = $datasetsConfig;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Status|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Status|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets autoPublishConfig
    *  自动发布配置信息
    *
    * @return string|null
    */
    public function getAutoPublishConfig()
    {
        return $this->container['autoPublishConfig'];
    }

    /**
    * Sets autoPublishConfig
    *
    * @param string|null $autoPublishConfig 自动发布配置信息
    *
    * @return $this
    */
    public function setAutoPublishConfig($autoPublishConfig)
    {
        $this->container['autoPublishConfig'] = $autoPublishConfig;
        return $this;
    }

    /**
    * Gets assetCode
    *  模型资产名
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
    * @param string|null $assetCode 模型资产名
    *
    * @return $this
    */
    public function setAssetCode($assetCode)
    {
        $this->container['assetCode'] = $assetCode;
        return $this;
    }

    /**
    * Gets assetName
    *  资产名称
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
    * @param string|null $assetName 资产名称
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetDesc
    *  模型资产描述信息
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
    * @param string|null $assetDesc 模型资产描述信息
    *
    * @return $this
    */
    public function setAssetDesc($assetDesc)
    {
        $this->container['assetDesc'] = $assetDesc;
        return $this;
    }

    /**
    * Gets assetSeries
    *  模型系列
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
    * @param string|null $assetSeries 模型系列
    *
    * @return $this
    */
    public function setAssetSeries($assetSeries)
    {
        $this->container['assetSeries'] = $assetSeries;
        return $this;
    }

    /**
    * Gets assetVersion
    *  资产版本
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
    * @param string|null $assetVersion 资产版本
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets assetType
    *  资产类型
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
    * @param string|null $assetType 资产类型
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
    *  资产来源
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
    * @param string|null $assetSource 资产来源
    *
    * @return $this
    */
    public function setAssetSource($assetSource)
    {
        $this->container['assetSource'] = $assetSource;
        return $this;
    }

    /**
    * Gets assetGroupId
    *  资产组id
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
    * @param string|null $assetGroupId 资产组id
    *
    * @return $this
    */
    public function setAssetGroupId($assetGroupId)
    {
        $this->container['assetGroupId'] = $assetGroupId;
        return $this;
    }

    /**
    * Gets subAssetType
    *  资产子类型
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
    * @param string|null $subAssetType 资产子类型
    *
    * @return $this
    */
    public function setSubAssetType($subAssetType)
    {
        $this->container['subAssetType'] = $subAssetType;
        return $this;
    }

    /**
    * Gets category
    *  资产类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 资产类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets apiVersion
    *  资产API版本
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
    * @param string|null $apiVersion 资产API版本
    *
    * @return $this
    */
    public function setApiVersion($apiVersion)
    {
        $this->container['apiVersion'] = $apiVersion;
        return $this;
    }

    /**
    * Gets rootAssetId
    *  根资产ID
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
    * @param string|null $rootAssetId 根资产ID
    *
    * @return $this
    */
    public function setRootAssetId($rootAssetId)
    {
        $this->container['rootAssetId'] = $rootAssetId;
        return $this;
    }

    /**
    * Gets trainCostTime
    *  训练任务耗时
    *
    * @return int|null
    */
    public function getTrainCostTime()
    {
        return $this->container['trainCostTime'];
    }

    /**
    * Sets trainCostTime
    *
    * @param int|null $trainCostTime 训练任务耗时
    *
    * @return $this
    */
    public function setTrainCostTime($trainCostTime)
    {
        $this->container['trainCostTime'] = $trainCostTime;
        return $this;
    }

    /**
    * Gets workspaceId
    *  任务所属工作空间名称
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
    * @param string|null $workspaceId 任务所属工作空间名称
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets poolType
    *  资源池类型
    *
    * @return string|null
    */
    public function getPoolType()
    {
        return $this->container['poolType'];
    }

    /**
    * Sets poolType
    *
    * @param string|null $poolType 资源池类型
    *
    * @return $this
    */
    public function setPoolType($poolType)
    {
        $this->container['poolType'] = $poolType;
        return $this;
    }

    /**
    * Gets poolId
    *  资源池ID
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 资源池ID
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets poolNodeCount
    *  使用的资源池实例数
    *
    * @return string|null
    */
    public function getPoolNodeCount()
    {
        return $this->container['poolNodeCount'];
    }

    /**
    * Sets poolNodeCount
    *
    * @param string|null $poolNodeCount 使用的资源池实例数
    *
    * @return $this
    */
    public function setPoolNodeCount($poolNodeCount)
    {
        $this->container['poolNodeCount'] = $poolNodeCount;
        return $this;
    }

    /**
    * Gets flavorId
    *  使用的资源池卡数
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 使用的资源池卡数
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets priority
    *  优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets trainingInfo
    *  训练预估时长
    *
    * @return string|null
    */
    public function getTrainingInfo()
    {
        return $this->container['trainingInfo'];
    }

    /**
    * Sets trainingInfo
    *
    * @param string|null $trainingInfo 训练预估时长
    *
    * @return $this
    */
    public function setTrainingInfo($trainingInfo)
    {
        $this->container['trainingInfo'] = $trainingInfo;
        return $this;
    }

    /**
    * Gets trainOutputPath
    *  **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getTrainOutputPath()
    {
        return $this->container['trainOutputPath'];
    }

    /**
    * Sets trainOutputPath
    *
    * @param string|null $trainOutputPath **参数解释**：训练产物输出路径，如\"obs://yyy/test/\"。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTrainOutputPath($trainOutputPath)
    {
        $this->container['trainOutputPath'] = $trainOutputPath;
        return $this;
    }

    /**
    * Gets assetCapabilities
    *  训练模型类型
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
    * @param string[]|null $assetCapabilities 训练模型类型
    *
    * @return $this
    */
    public function setAssetCapabilities($assetCapabilities)
    {
        $this->container['assetCapabilities'] = $assetCapabilities;
        return $this;
    }

    /**
    * Gets continueTask
    *  continueTask
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTask|null
    */
    public function getContinueTask()
    {
        return $this->container['continueTask'];
    }

    /**
    * Sets continueTask
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ContinueTask|null $continueTask continueTask
    *
    * @return $this
    */
    public function setContinueTask($continueTask)
    {
        $this->container['continueTask'] = $continueTask;
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

