<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetOperationRecordRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetOperationRecordRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    * projectId  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * jobType  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    * jobId  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    * userId  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    * assetId  **参数解释**：资产ID。 **取值范围**：不涉及。
    * service  **参数解释**：来源服务。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产编码。 **取值范围**：不涉及。
    * assetName  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：不涉及。
    * createdAt  **参数解释**：操作记录创建时间。
    * updatedAt  **参数解释**：操作记录更新时间。
    * isDeleted  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    * details  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    * recordExtendMessage  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'jobType' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'jobStatus' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'assetId' => 'string',
            'service' => 'string',
            'assetCode' => 'string',
            'assetName' => 'string',
            'assetVersion' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'isDeleted' => 'bool',
            'details' => 'string',
            'recordExtendMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    * projectId  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * jobType  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    * jobId  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    * userId  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    * assetId  **参数解释**：资产ID。 **取值范围**：不涉及。
    * service  **参数解释**：来源服务。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产编码。 **取值范围**：不涉及。
    * assetName  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：不涉及。
    * createdAt  **参数解释**：操作记录创建时间。
    * updatedAt  **参数解释**：操作记录更新时间。
    * isDeleted  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    * details  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    * recordExtendMessage  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'projectId' => null,
        'workspaceId' => null,
        'jobType' => null,
        'jobId' => null,
        'jobName' => null,
        'jobStatus' => null,
        'userId' => null,
        'userName' => null,
        'assetId' => null,
        'service' => null,
        'assetCode' => null,
        'assetName' => null,
        'assetVersion' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'isDeleted' => null,
        'details' => null,
        'recordExtendMessage' => null
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
    * recordId  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    * projectId  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * jobType  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    * jobId  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    * userId  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    * assetId  **参数解释**：资产ID。 **取值范围**：不涉及。
    * service  **参数解释**：来源服务。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产编码。 **取值范围**：不涉及。
    * assetName  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：不涉及。
    * createdAt  **参数解释**：操作记录创建时间。
    * updatedAt  **参数解释**：操作记录更新时间。
    * isDeleted  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    * details  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    * recordExtendMessage  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'jobType' => 'job_type',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'jobStatus' => 'job_status',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'assetId' => 'asset_id',
            'service' => 'service',
            'assetCode' => 'asset_code',
            'assetName' => 'asset_name',
            'assetVersion' => 'asset_version',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'isDeleted' => 'is_deleted',
            'details' => 'details',
            'recordExtendMessage' => 'record_extend_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    * projectId  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * jobType  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    * jobId  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    * userId  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    * assetId  **参数解释**：资产ID。 **取值范围**：不涉及。
    * service  **参数解释**：来源服务。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产编码。 **取值范围**：不涉及。
    * assetName  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：不涉及。
    * createdAt  **参数解释**：操作记录创建时间。
    * updatedAt  **参数解释**：操作记录更新时间。
    * isDeleted  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    * details  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    * recordExtendMessage  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'jobType' => 'setJobType',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'jobStatus' => 'setJobStatus',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'assetId' => 'setAssetId',
            'service' => 'setService',
            'assetCode' => 'setAssetCode',
            'assetName' => 'setAssetName',
            'assetVersion' => 'setAssetVersion',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'isDeleted' => 'setIsDeleted',
            'details' => 'setDetails',
            'recordExtendMessage' => 'setRecordExtendMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    * projectId  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    * jobType  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    * jobId  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    * jobName  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    * jobStatus  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    * userId  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    * userName  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    * assetId  **参数解释**：资产ID。 **取值范围**：不涉及。
    * service  **参数解释**：来源服务。 **取值范围**：不涉及。
    * assetCode  **参数解释**：资产编码。 **取值范围**：不涉及。
    * assetName  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    * assetVersion  **参数解释**：资产版本。 **取值范围**：不涉及。
    * createdAt  **参数解释**：操作记录创建时间。
    * updatedAt  **参数解释**：操作记录更新时间。
    * isDeleted  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    * details  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    * recordExtendMessage  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'jobType' => 'getJobType',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'jobStatus' => 'getJobStatus',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'assetId' => 'getAssetId',
            'service' => 'getService',
            'assetCode' => 'getAssetCode',
            'assetName' => 'getAssetName',
            'assetVersion' => 'getAssetVersion',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'isDeleted' => 'getIsDeleted',
            'details' => 'getDetails',
            'recordExtendMessage' => 'getRecordExtendMessage'
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
    const JOB_TYPE_PRETRAIN = 'PRETRAIN';
    const JOB_TYPE_SFT = 'SFT';
    const JOB_TYPE_RFT = 'RFT';
    const JOB_TYPE_RLHF = 'RLHF';
    const JOB_TYPE_QUANTIZATION = 'QUANTIZATION';
    const JOB_TYPE_MANUAL_EVALUATION = 'MANUAL-EVALUATION';
    const JOB_TYPE_AUTO_EVALUATION = 'AUTO-EVALUATION';
    const JOB_TYPE_ONLINE_DEPLOY = 'ONLINE-DEPLOY';
    const JOB_TYPE_EDGE_DEPLOY = 'EDGE-DEPLOY';
    const JOB_TYPE_LORA = 'LORA';
    const JOB_TYPE_QLORA = 'QLORA';
    const JOB_TYPE_DATA_CLEANING = 'DATA-CLEANING';
    const JOB_TYPE_DATA_IMPORT = 'DATA-IMPORT';
    const JOB_TYPE_DATA_ANNOTATION = 'DATA-ANNOTATION';
    const JOB_STATUS_INIT = 'INIT';
    const JOB_STATUS_RUNNING = 'RUNNING';
    const JOB_STATUS_STOPPED = 'STOPPED';
    const JOB_STATUS_FAILED = 'FAILED';
    const JOB_STATUS_SUCCEED = 'SUCCEED';
    const JOB_STATUS_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_PRETRAIN,
            self::JOB_TYPE_SFT,
            self::JOB_TYPE_RFT,
            self::JOB_TYPE_RLHF,
            self::JOB_TYPE_QUANTIZATION,
            self::JOB_TYPE_MANUAL_EVALUATION,
            self::JOB_TYPE_AUTO_EVALUATION,
            self::JOB_TYPE_ONLINE_DEPLOY,
            self::JOB_TYPE_EDGE_DEPLOY,
            self::JOB_TYPE_LORA,
            self::JOB_TYPE_QLORA,
            self::JOB_TYPE_DATA_CLEANING,
            self::JOB_TYPE_DATA_IMPORT,
            self::JOB_TYPE_DATA_ANNOTATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobStatusAllowableValues()
    {
        return [
            self::JOB_STATUS_INIT,
            self::JOB_STATUS_RUNNING,
            self::JOB_STATUS_STOPPED,
            self::JOB_STATUS_FAILED,
            self::JOB_STATUS_SUCCEED,
            self::JOB_STATUS_DELETED,
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['assetCode'] = isset($data['assetCode']) ? $data['assetCode'] : null;
        $this->container['assetName'] = isset($data['assetName']) ? $data['assetName'] : null;
        $this->container['assetVersion'] = isset($data['assetVersion']) ? $data['assetVersion'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['recordExtendMessage'] = isset($data['recordExtendMessage']) ? $data['recordExtendMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if ((mb_strlen($this->container['jobId']) > 40)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if ((mb_strlen($this->container['jobName']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['jobStatus'] === null) {
            $invalidProperties[] = "'jobStatus' can't be null";
        }
            $allowedValues = $this->getJobStatusAllowableValues();
                if (!is_null($this->container['jobStatus']) && !in_array($this->container['jobStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 512)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            if ((mb_strlen($this->container['assetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
            if ((mb_strlen($this->container['service']) > 128)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['service']) < 1)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) > 60)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['assetCode']) && (mb_strlen($this->container['assetCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetName']) && (mb_strlen($this->container['assetName']) < 2)) {
                $invalidProperties[] = "invalid value for 'assetName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) > 100)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['assetVersion']) && (mb_strlen($this->container['assetVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetVersion', the character length must be bigger than or equal to 0.";
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
    * Gets recordId
    *  **参数解释**：操作记录ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId **参数解释**：操作记录ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
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
    * @param string|null $projectId **参数解释**：华为云项目ID，获取方法请参见[获取项目ID和名称](modelarts_03_0147.xml)。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
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
    * @param string|null $workspaceId **参数解释**：工作空间ID，[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。]未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets jobType
    *  **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType **参数解释**：作业类型。 **取值范围**：枚举值: - PRETRAIN: 预训练 - SFT: 全量微调 - RFT: 强化微调 - RLHF: 强化学习 - QUANTIZATION: 量化 - MANUAL-EVALUATION: 人工评测 - AUTO-EVALUATION: 自动评测 - ONLINE-DEPLOY: 在线部署 - EDGE-DEPLOY: 边缘部署 - LORA: LoRA微调 - QLORA: Q-LoRA微调 - DATA-CLEANING: 数据清洗 - DATA-IMPORT: 数据导入 - DATA-ANNOTATION: 数据标注
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释**：关联任务ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId **参数解释**：关联任务ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  **参数解释**：关联任务名称。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName **参数解释**：关联任务名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobStatus
    *  **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    *
    * @return string
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string $jobStatus **参数解释**：关联任务状态。 **取值范围**：枚举值: - INIT: 初始化 - RUNNING: 运行中 - STOPPED: 已停止 - FAILED: 失败 - SUCCEED: 成功 - DELETED: 已删除
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**：操作用户ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId **参数解释**：操作用户ID。 **取值范围**：不涉及。
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
    *  **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName **参数解释**：操作用户的用户名。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets assetId
    *  **参数解释**：资产ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId **参数解释**：资产ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets service
    *  **参数解释**：来源服务。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service **参数解释**：来源服务。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets assetCode
    *  **参数解释**：资产编码。 **取值范围**：不涉及。
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
    * @param string|null $assetCode **参数解释**：资产编码。 **取值范围**：不涉及。
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
    *  **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
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
    * @param string|null $assetName **参数解释**：资产名称，支持英文字母，数字，中划线，下划线，点，空格，中文汉字。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetName($assetName)
    {
        $this->container['assetName'] = $assetName;
        return $this;
    }

    /**
    * Gets assetVersion
    *  **参数解释**：资产版本。 **取值范围**：不涉及。
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
    * @param string|null $assetVersion **参数解释**：资产版本。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setAssetVersion($assetVersion)
    {
        $this->container['assetVersion'] = $assetVersion;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：操作记录创建时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt **参数解释**：操作记录创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：操作记录更新时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt **参数解释**：操作记录更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets isDeleted
    *  **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
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
    * @param bool|null $isDeleted **参数解释**：任务是否删除（true: 已删除，false: 未删除）。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets details
    *  **参数解释**：服务操作详情。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param string|null $details **参数解释**：服务操作详情。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
        return $this;
    }

    /**
    * Gets recordExtendMessage
    *  **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getRecordExtendMessage()
    {
        return $this->container['recordExtendMessage'];
    }

    /**
    * Sets recordExtendMessage
    *
    * @param string|null $recordExtendMessage **参数解释**：预留扩展信息字段。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setRecordExtendMessage($recordExtendMessage)
    {
        $this->container['recordExtendMessage'] = $recordExtendMessage;
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

