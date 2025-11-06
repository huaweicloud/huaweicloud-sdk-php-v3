<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupSettingsInheritCfgResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupSettingsInheritCfgResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canUpdate  **参数解释：** 是否可用。
    * id  **参数解释：** 记录id。
    * productId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * namespaceId  **参数解释：** 代码组id。
    * parentId  **参数解释：** 父id。
    * ownership  **参数解释：** 排序id。
    * pbi  **参数解释：** 排序id。
    * protectedBranches  **参数解释：** 保护分支策略。
    * protectedTags  **参数解释：** 保护tag策略。
    * pushRules  **参数解释：** 推送规则策略。
    * changeRequests  **参数解释：** cr策略。
    * customCtrlItems  **参数解释：** 排序id。
    * reviews  **参数解释：** 排序id。
    * issues  **参数解释：** issue继承模式。
    * crEvaluation  **参数解释：** 排序id。
    * e2eSettings  **参数解释：** e2e策略。
    * committerSettings  **参数解释：** 提交策略。
    * webhookSettings  **参数解释：** webhook策略。
    * streamEventSettings  **参数解释：** 排序id。
    * pipelineSettings  **参数解释：** 排序id。
    * issueTemplates  **参数解释：** issue模板继承模式。
    * crCommentTemplates  **参数解释：** 排序id。
    * mergeRequests  **参数解释：** 排序id。
    * mrBranchPolicies  **参数解释：** 合并请求策略。
    * repositorySettings  **参数解释：** 仓库策略。
    * deployKeys  **参数解释：** 部署密钥策略。
    * watermark  **参数解释：** 水印策略。
    * createdAt  **参数解释：** 创建时间。
    * updateAt  **参数解释：** 更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canUpdate' => 'bool',
            'id' => 'int',
            'productId' => 'string',
            'namespaceId' => 'int',
            'parentId' => 'int',
            'ownership' => 'int',
            'pbi' => 'int',
            'protectedBranches' => 'int',
            'protectedTags' => 'int',
            'pushRules' => 'int',
            'changeRequests' => 'int',
            'customCtrlItems' => 'int',
            'reviews' => 'int',
            'issues' => 'int',
            'crEvaluation' => 'int',
            'e2eSettings' => 'int',
            'committerSettings' => 'int',
            'webhookSettings' => 'int',
            'streamEventSettings' => 'int',
            'pipelineSettings' => 'int',
            'issueTemplates' => 'int',
            'crCommentTemplates' => 'int',
            'mergeRequests' => 'int',
            'mrBranchPolicies' => 'int',
            'repositorySettings' => 'int',
            'deployKeys' => 'int',
            'watermark' => 'int',
            'createdAt' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canUpdate  **参数解释：** 是否可用。
    * id  **参数解释：** 记录id。
    * productId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * namespaceId  **参数解释：** 代码组id。
    * parentId  **参数解释：** 父id。
    * ownership  **参数解释：** 排序id。
    * pbi  **参数解释：** 排序id。
    * protectedBranches  **参数解释：** 保护分支策略。
    * protectedTags  **参数解释：** 保护tag策略。
    * pushRules  **参数解释：** 推送规则策略。
    * changeRequests  **参数解释：** cr策略。
    * customCtrlItems  **参数解释：** 排序id。
    * reviews  **参数解释：** 排序id。
    * issues  **参数解释：** issue继承模式。
    * crEvaluation  **参数解释：** 排序id。
    * e2eSettings  **参数解释：** e2e策略。
    * committerSettings  **参数解释：** 提交策略。
    * webhookSettings  **参数解释：** webhook策略。
    * streamEventSettings  **参数解释：** 排序id。
    * pipelineSettings  **参数解释：** 排序id。
    * issueTemplates  **参数解释：** issue模板继承模式。
    * crCommentTemplates  **参数解释：** 排序id。
    * mergeRequests  **参数解释：** 排序id。
    * mrBranchPolicies  **参数解释：** 合并请求策略。
    * repositorySettings  **参数解释：** 仓库策略。
    * deployKeys  **参数解释：** 部署密钥策略。
    * watermark  **参数解释：** 水印策略。
    * createdAt  **参数解释：** 创建时间。
    * updateAt  **参数解释：** 更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canUpdate' => null,
        'id' => 'int32',
        'productId' => null,
        'namespaceId' => 'int32',
        'parentId' => 'int32',
        'ownership' => 'int32',
        'pbi' => 'int32',
        'protectedBranches' => 'int32',
        'protectedTags' => 'int32',
        'pushRules' => 'int32',
        'changeRequests' => 'int32',
        'customCtrlItems' => 'int32',
        'reviews' => 'int32',
        'issues' => 'int32',
        'crEvaluation' => 'int32',
        'e2eSettings' => 'int32',
        'committerSettings' => 'int32',
        'webhookSettings' => 'int32',
        'streamEventSettings' => 'int32',
        'pipelineSettings' => 'int32',
        'issueTemplates' => 'int32',
        'crCommentTemplates' => 'int32',
        'mergeRequests' => 'int32',
        'mrBranchPolicies' => 'int32',
        'repositorySettings' => 'int32',
        'deployKeys' => 'int32',
        'watermark' => 'int32',
        'createdAt' => null,
        'updateAt' => null
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
    * canUpdate  **参数解释：** 是否可用。
    * id  **参数解释：** 记录id。
    * productId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * namespaceId  **参数解释：** 代码组id。
    * parentId  **参数解释：** 父id。
    * ownership  **参数解释：** 排序id。
    * pbi  **参数解释：** 排序id。
    * protectedBranches  **参数解释：** 保护分支策略。
    * protectedTags  **参数解释：** 保护tag策略。
    * pushRules  **参数解释：** 推送规则策略。
    * changeRequests  **参数解释：** cr策略。
    * customCtrlItems  **参数解释：** 排序id。
    * reviews  **参数解释：** 排序id。
    * issues  **参数解释：** issue继承模式。
    * crEvaluation  **参数解释：** 排序id。
    * e2eSettings  **参数解释：** e2e策略。
    * committerSettings  **参数解释：** 提交策略。
    * webhookSettings  **参数解释：** webhook策略。
    * streamEventSettings  **参数解释：** 排序id。
    * pipelineSettings  **参数解释：** 排序id。
    * issueTemplates  **参数解释：** issue模板继承模式。
    * crCommentTemplates  **参数解释：** 排序id。
    * mergeRequests  **参数解释：** 排序id。
    * mrBranchPolicies  **参数解释：** 合并请求策略。
    * repositorySettings  **参数解释：** 仓库策略。
    * deployKeys  **参数解释：** 部署密钥策略。
    * watermark  **参数解释：** 水印策略。
    * createdAt  **参数解释：** 创建时间。
    * updateAt  **参数解释：** 更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canUpdate' => 'can_update',
            'id' => 'id',
            'productId' => 'product_id',
            'namespaceId' => 'namespace_id',
            'parentId' => 'parent_id',
            'ownership' => 'ownership',
            'pbi' => 'pbi',
            'protectedBranches' => 'protected_branches',
            'protectedTags' => 'protected_tags',
            'pushRules' => 'push_rules',
            'changeRequests' => 'change_requests',
            'customCtrlItems' => 'custom_ctrl_items',
            'reviews' => 'reviews',
            'issues' => 'issues',
            'crEvaluation' => 'cr_evaluation',
            'e2eSettings' => 'e2e_settings',
            'committerSettings' => 'committer_settings',
            'webhookSettings' => 'webhook_settings',
            'streamEventSettings' => 'stream_event_settings',
            'pipelineSettings' => 'pipeline_settings',
            'issueTemplates' => 'issue_templates',
            'crCommentTemplates' => 'cr_comment_templates',
            'mergeRequests' => 'merge_requests',
            'mrBranchPolicies' => 'mr_branch_policies',
            'repositorySettings' => 'repository_settings',
            'deployKeys' => 'deploy_keys',
            'watermark' => 'watermark',
            'createdAt' => 'created_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canUpdate  **参数解释：** 是否可用。
    * id  **参数解释：** 记录id。
    * productId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * namespaceId  **参数解释：** 代码组id。
    * parentId  **参数解释：** 父id。
    * ownership  **参数解释：** 排序id。
    * pbi  **参数解释：** 排序id。
    * protectedBranches  **参数解释：** 保护分支策略。
    * protectedTags  **参数解释：** 保护tag策略。
    * pushRules  **参数解释：** 推送规则策略。
    * changeRequests  **参数解释：** cr策略。
    * customCtrlItems  **参数解释：** 排序id。
    * reviews  **参数解释：** 排序id。
    * issues  **参数解释：** issue继承模式。
    * crEvaluation  **参数解释：** 排序id。
    * e2eSettings  **参数解释：** e2e策略。
    * committerSettings  **参数解释：** 提交策略。
    * webhookSettings  **参数解释：** webhook策略。
    * streamEventSettings  **参数解释：** 排序id。
    * pipelineSettings  **参数解释：** 排序id。
    * issueTemplates  **参数解释：** issue模板继承模式。
    * crCommentTemplates  **参数解释：** 排序id。
    * mergeRequests  **参数解释：** 排序id。
    * mrBranchPolicies  **参数解释：** 合并请求策略。
    * repositorySettings  **参数解释：** 仓库策略。
    * deployKeys  **参数解释：** 部署密钥策略。
    * watermark  **参数解释：** 水印策略。
    * createdAt  **参数解释：** 创建时间。
    * updateAt  **参数解释：** 更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'canUpdate' => 'setCanUpdate',
            'id' => 'setId',
            'productId' => 'setProductId',
            'namespaceId' => 'setNamespaceId',
            'parentId' => 'setParentId',
            'ownership' => 'setOwnership',
            'pbi' => 'setPbi',
            'protectedBranches' => 'setProtectedBranches',
            'protectedTags' => 'setProtectedTags',
            'pushRules' => 'setPushRules',
            'changeRequests' => 'setChangeRequests',
            'customCtrlItems' => 'setCustomCtrlItems',
            'reviews' => 'setReviews',
            'issues' => 'setIssues',
            'crEvaluation' => 'setCrEvaluation',
            'e2eSettings' => 'setE2eSettings',
            'committerSettings' => 'setCommitterSettings',
            'webhookSettings' => 'setWebhookSettings',
            'streamEventSettings' => 'setStreamEventSettings',
            'pipelineSettings' => 'setPipelineSettings',
            'issueTemplates' => 'setIssueTemplates',
            'crCommentTemplates' => 'setCrCommentTemplates',
            'mergeRequests' => 'setMergeRequests',
            'mrBranchPolicies' => 'setMrBranchPolicies',
            'repositorySettings' => 'setRepositorySettings',
            'deployKeys' => 'setDeployKeys',
            'watermark' => 'setWatermark',
            'createdAt' => 'setCreatedAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canUpdate  **参数解释：** 是否可用。
    * id  **参数解释：** 记录id。
    * productId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * namespaceId  **参数解释：** 代码组id。
    * parentId  **参数解释：** 父id。
    * ownership  **参数解释：** 排序id。
    * pbi  **参数解释：** 排序id。
    * protectedBranches  **参数解释：** 保护分支策略。
    * protectedTags  **参数解释：** 保护tag策略。
    * pushRules  **参数解释：** 推送规则策略。
    * changeRequests  **参数解释：** cr策略。
    * customCtrlItems  **参数解释：** 排序id。
    * reviews  **参数解释：** 排序id。
    * issues  **参数解释：** issue继承模式。
    * crEvaluation  **参数解释：** 排序id。
    * e2eSettings  **参数解释：** e2e策略。
    * committerSettings  **参数解释：** 提交策略。
    * webhookSettings  **参数解释：** webhook策略。
    * streamEventSettings  **参数解释：** 排序id。
    * pipelineSettings  **参数解释：** 排序id。
    * issueTemplates  **参数解释：** issue模板继承模式。
    * crCommentTemplates  **参数解释：** 排序id。
    * mergeRequests  **参数解释：** 排序id。
    * mrBranchPolicies  **参数解释：** 合并请求策略。
    * repositorySettings  **参数解释：** 仓库策略。
    * deployKeys  **参数解释：** 部署密钥策略。
    * watermark  **参数解释：** 水印策略。
    * createdAt  **参数解释：** 创建时间。
    * updateAt  **参数解释：** 更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'canUpdate' => 'getCanUpdate',
            'id' => 'getId',
            'productId' => 'getProductId',
            'namespaceId' => 'getNamespaceId',
            'parentId' => 'getParentId',
            'ownership' => 'getOwnership',
            'pbi' => 'getPbi',
            'protectedBranches' => 'getProtectedBranches',
            'protectedTags' => 'getProtectedTags',
            'pushRules' => 'getPushRules',
            'changeRequests' => 'getChangeRequests',
            'customCtrlItems' => 'getCustomCtrlItems',
            'reviews' => 'getReviews',
            'issues' => 'getIssues',
            'crEvaluation' => 'getCrEvaluation',
            'e2eSettings' => 'getE2eSettings',
            'committerSettings' => 'getCommitterSettings',
            'webhookSettings' => 'getWebhookSettings',
            'streamEventSettings' => 'getStreamEventSettings',
            'pipelineSettings' => 'getPipelineSettings',
            'issueTemplates' => 'getIssueTemplates',
            'crCommentTemplates' => 'getCrCommentTemplates',
            'mergeRequests' => 'getMergeRequests',
            'mrBranchPolicies' => 'getMrBranchPolicies',
            'repositorySettings' => 'getRepositorySettings',
            'deployKeys' => 'getDeployKeys',
            'watermark' => 'getWatermark',
            'createdAt' => 'getCreatedAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['canUpdate'] = isset($data['canUpdate']) ? $data['canUpdate'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['ownership'] = isset($data['ownership']) ? $data['ownership'] : null;
        $this->container['pbi'] = isset($data['pbi']) ? $data['pbi'] : null;
        $this->container['protectedBranches'] = isset($data['protectedBranches']) ? $data['protectedBranches'] : null;
        $this->container['protectedTags'] = isset($data['protectedTags']) ? $data['protectedTags'] : null;
        $this->container['pushRules'] = isset($data['pushRules']) ? $data['pushRules'] : null;
        $this->container['changeRequests'] = isset($data['changeRequests']) ? $data['changeRequests'] : null;
        $this->container['customCtrlItems'] = isset($data['customCtrlItems']) ? $data['customCtrlItems'] : null;
        $this->container['reviews'] = isset($data['reviews']) ? $data['reviews'] : null;
        $this->container['issues'] = isset($data['issues']) ? $data['issues'] : null;
        $this->container['crEvaluation'] = isset($data['crEvaluation']) ? $data['crEvaluation'] : null;
        $this->container['e2eSettings'] = isset($data['e2eSettings']) ? $data['e2eSettings'] : null;
        $this->container['committerSettings'] = isset($data['committerSettings']) ? $data['committerSettings'] : null;
        $this->container['webhookSettings'] = isset($data['webhookSettings']) ? $data['webhookSettings'] : null;
        $this->container['streamEventSettings'] = isset($data['streamEventSettings']) ? $data['streamEventSettings'] : null;
        $this->container['pipelineSettings'] = isset($data['pipelineSettings']) ? $data['pipelineSettings'] : null;
        $this->container['issueTemplates'] = isset($data['issueTemplates']) ? $data['issueTemplates'] : null;
        $this->container['crCommentTemplates'] = isset($data['crCommentTemplates']) ? $data['crCommentTemplates'] : null;
        $this->container['mergeRequests'] = isset($data['mergeRequests']) ? $data['mergeRequests'] : null;
        $this->container['mrBranchPolicies'] = isset($data['mrBranchPolicies']) ? $data['mrBranchPolicies'] : null;
        $this->container['repositorySettings'] = isset($data['repositorySettings']) ? $data['repositorySettings'] : null;
        $this->container['deployKeys'] = isset($data['deployKeys']) ? $data['deployKeys'] : null;
        $this->container['watermark'] = isset($data['watermark']) ? $data['watermark'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespaceId']) && ($this->container['namespaceId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'namespaceId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['namespaceId']) && ($this->container['namespaceId'] < 1)) {
                $invalidProperties[] = "invalid value for 'namespaceId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'parentId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['parentId']) && ($this->container['parentId'] < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownership']) && ($this->container['ownership'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ownership', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ownership']) && ($this->container['ownership'] < 1)) {
                $invalidProperties[] = "invalid value for 'ownership', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pbi']) && ($this->container['pbi'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pbi', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pbi']) && ($this->container['pbi'] < 1)) {
                $invalidProperties[] = "invalid value for 'pbi', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectedBranches']) && ($this->container['protectedBranches'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedBranches', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedBranches']) && ($this->container['protectedBranches'] < 1)) {
                $invalidProperties[] = "invalid value for 'protectedBranches', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectedTags']) && ($this->container['protectedTags'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectedTags', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectedTags']) && ($this->container['protectedTags'] < 1)) {
                $invalidProperties[] = "invalid value for 'protectedTags', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pushRules']) && ($this->container['pushRules'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pushRules', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pushRules']) && ($this->container['pushRules'] < 1)) {
                $invalidProperties[] = "invalid value for 'pushRules', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['changeRequests']) && ($this->container['changeRequests'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'changeRequests', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['changeRequests']) && ($this->container['changeRequests'] < 1)) {
                $invalidProperties[] = "invalid value for 'changeRequests', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['customCtrlItems']) && ($this->container['customCtrlItems'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'customCtrlItems', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['customCtrlItems']) && ($this->container['customCtrlItems'] < 1)) {
                $invalidProperties[] = "invalid value for 'customCtrlItems', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviews']) && ($this->container['reviews'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'reviews', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['reviews']) && ($this->container['reviews'] < 1)) {
                $invalidProperties[] = "invalid value for 'reviews', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['issues']) && ($this->container['issues'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'issues', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['issues']) && ($this->container['issues'] < 1)) {
                $invalidProperties[] = "invalid value for 'issues', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['crEvaluation']) && ($this->container['crEvaluation'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'crEvaluation', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['crEvaluation']) && ($this->container['crEvaluation'] < 1)) {
                $invalidProperties[] = "invalid value for 'crEvaluation', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['e2eSettings']) && ($this->container['e2eSettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'e2eSettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['e2eSettings']) && ($this->container['e2eSettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'e2eSettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['committerSettings']) && ($this->container['committerSettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'committerSettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['committerSettings']) && ($this->container['committerSettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'committerSettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['webhookSettings']) && ($this->container['webhookSettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webhookSettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webhookSettings']) && ($this->container['webhookSettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'webhookSettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamEventSettings']) && ($this->container['streamEventSettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'streamEventSettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['streamEventSettings']) && ($this->container['streamEventSettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'streamEventSettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pipelineSettings']) && ($this->container['pipelineSettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pipelineSettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pipelineSettings']) && ($this->container['pipelineSettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'pipelineSettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['issueTemplates']) && ($this->container['issueTemplates'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'issueTemplates', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['issueTemplates']) && ($this->container['issueTemplates'] < 1)) {
                $invalidProperties[] = "invalid value for 'issueTemplates', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['crCommentTemplates']) && ($this->container['crCommentTemplates'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'crCommentTemplates', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['crCommentTemplates']) && ($this->container['crCommentTemplates'] < 1)) {
                $invalidProperties[] = "invalid value for 'crCommentTemplates', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequests']) && ($this->container['mergeRequests'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequests', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequests']) && ($this->container['mergeRequests'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequests', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mrBranchPolicies']) && ($this->container['mrBranchPolicies'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mrBranchPolicies', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mrBranchPolicies']) && ($this->container['mrBranchPolicies'] < 1)) {
                $invalidProperties[] = "invalid value for 'mrBranchPolicies', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositorySettings']) && ($this->container['repositorySettings'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositorySettings', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositorySettings']) && ($this->container['repositorySettings'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositorySettings', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deployKeys']) && ($this->container['deployKeys'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'deployKeys', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['deployKeys']) && ($this->container['deployKeys'] < 1)) {
                $invalidProperties[] = "invalid value for 'deployKeys', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['watermark']) && ($this->container['watermark'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'watermark', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['watermark']) && ($this->container['watermark'] < 1)) {
                $invalidProperties[] = "invalid value for 'watermark', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updateAt']) && (mb_strlen($this->container['updateAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateAt', the character length must be bigger than or equal to 0.";
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
    * Gets canUpdate
    *  **参数解释：** 是否可用。
    *
    * @return bool|null
    */
    public function getCanUpdate()
    {
        return $this->container['canUpdate'];
    }

    /**
    * Sets canUpdate
    *
    * @param bool|null $canUpdate **参数解释：** 是否可用。
    *
    * @return $this
    */
    public function setCanUpdate($canUpdate)
    {
        $this->container['canUpdate'] = $canUpdate;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 记录id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets namespaceId
    *  **参数解释：** 代码组id。
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId **参数解释：** 代码组id。
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：** 父id。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId **参数解释：** 父id。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets ownership
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
    * Sets ownership
    *
    * @param int|null $ownership **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setOwnership($ownership)
    {
        $this->container['ownership'] = $ownership;
        return $this;
    }

    /**
    * Gets pbi
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getPbi()
    {
        return $this->container['pbi'];
    }

    /**
    * Sets pbi
    *
    * @param int|null $pbi **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setPbi($pbi)
    {
        $this->container['pbi'] = $pbi;
        return $this;
    }

    /**
    * Gets protectedBranches
    *  **参数解释：** 保护分支策略。
    *
    * @return int|null
    */
    public function getProtectedBranches()
    {
        return $this->container['protectedBranches'];
    }

    /**
    * Sets protectedBranches
    *
    * @param int|null $protectedBranches **参数解释：** 保护分支策略。
    *
    * @return $this
    */
    public function setProtectedBranches($protectedBranches)
    {
        $this->container['protectedBranches'] = $protectedBranches;
        return $this;
    }

    /**
    * Gets protectedTags
    *  **参数解释：** 保护tag策略。
    *
    * @return int|null
    */
    public function getProtectedTags()
    {
        return $this->container['protectedTags'];
    }

    /**
    * Sets protectedTags
    *
    * @param int|null $protectedTags **参数解释：** 保护tag策略。
    *
    * @return $this
    */
    public function setProtectedTags($protectedTags)
    {
        $this->container['protectedTags'] = $protectedTags;
        return $this;
    }

    /**
    * Gets pushRules
    *  **参数解释：** 推送规则策略。
    *
    * @return int|null
    */
    public function getPushRules()
    {
        return $this->container['pushRules'];
    }

    /**
    * Sets pushRules
    *
    * @param int|null $pushRules **参数解释：** 推送规则策略。
    *
    * @return $this
    */
    public function setPushRules($pushRules)
    {
        $this->container['pushRules'] = $pushRules;
        return $this;
    }

    /**
    * Gets changeRequests
    *  **参数解释：** cr策略。
    *
    * @return int|null
    */
    public function getChangeRequests()
    {
        return $this->container['changeRequests'];
    }

    /**
    * Sets changeRequests
    *
    * @param int|null $changeRequests **参数解释：** cr策略。
    *
    * @return $this
    */
    public function setChangeRequests($changeRequests)
    {
        $this->container['changeRequests'] = $changeRequests;
        return $this;
    }

    /**
    * Gets customCtrlItems
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getCustomCtrlItems()
    {
        return $this->container['customCtrlItems'];
    }

    /**
    * Sets customCtrlItems
    *
    * @param int|null $customCtrlItems **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setCustomCtrlItems($customCtrlItems)
    {
        $this->container['customCtrlItems'] = $customCtrlItems;
        return $this;
    }

    /**
    * Gets reviews
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getReviews()
    {
        return $this->container['reviews'];
    }

    /**
    * Sets reviews
    *
    * @param int|null $reviews **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setReviews($reviews)
    {
        $this->container['reviews'] = $reviews;
        return $this;
    }

    /**
    * Gets issues
    *  **参数解释：** issue继承模式。
    *
    * @return int|null
    */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
    * Sets issues
    *
    * @param int|null $issues **参数解释：** issue继承模式。
    *
    * @return $this
    */
    public function setIssues($issues)
    {
        $this->container['issues'] = $issues;
        return $this;
    }

    /**
    * Gets crEvaluation
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getCrEvaluation()
    {
        return $this->container['crEvaluation'];
    }

    /**
    * Sets crEvaluation
    *
    * @param int|null $crEvaluation **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setCrEvaluation($crEvaluation)
    {
        $this->container['crEvaluation'] = $crEvaluation;
        return $this;
    }

    /**
    * Gets e2eSettings
    *  **参数解释：** e2e策略。
    *
    * @return int|null
    */
    public function getE2eSettings()
    {
        return $this->container['e2eSettings'];
    }

    /**
    * Sets e2eSettings
    *
    * @param int|null $e2eSettings **参数解释：** e2e策略。
    *
    * @return $this
    */
    public function setE2eSettings($e2eSettings)
    {
        $this->container['e2eSettings'] = $e2eSettings;
        return $this;
    }

    /**
    * Gets committerSettings
    *  **参数解释：** 提交策略。
    *
    * @return int|null
    */
    public function getCommitterSettings()
    {
        return $this->container['committerSettings'];
    }

    /**
    * Sets committerSettings
    *
    * @param int|null $committerSettings **参数解释：** 提交策略。
    *
    * @return $this
    */
    public function setCommitterSettings($committerSettings)
    {
        $this->container['committerSettings'] = $committerSettings;
        return $this;
    }

    /**
    * Gets webhookSettings
    *  **参数解释：** webhook策略。
    *
    * @return int|null
    */
    public function getWebhookSettings()
    {
        return $this->container['webhookSettings'];
    }

    /**
    * Sets webhookSettings
    *
    * @param int|null $webhookSettings **参数解释：** webhook策略。
    *
    * @return $this
    */
    public function setWebhookSettings($webhookSettings)
    {
        $this->container['webhookSettings'] = $webhookSettings;
        return $this;
    }

    /**
    * Gets streamEventSettings
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getStreamEventSettings()
    {
        return $this->container['streamEventSettings'];
    }

    /**
    * Sets streamEventSettings
    *
    * @param int|null $streamEventSettings **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setStreamEventSettings($streamEventSettings)
    {
        $this->container['streamEventSettings'] = $streamEventSettings;
        return $this;
    }

    /**
    * Gets pipelineSettings
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getPipelineSettings()
    {
        return $this->container['pipelineSettings'];
    }

    /**
    * Sets pipelineSettings
    *
    * @param int|null $pipelineSettings **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setPipelineSettings($pipelineSettings)
    {
        $this->container['pipelineSettings'] = $pipelineSettings;
        return $this;
    }

    /**
    * Gets issueTemplates
    *  **参数解释：** issue模板继承模式。
    *
    * @return int|null
    */
    public function getIssueTemplates()
    {
        return $this->container['issueTemplates'];
    }

    /**
    * Sets issueTemplates
    *
    * @param int|null $issueTemplates **参数解释：** issue模板继承模式。
    *
    * @return $this
    */
    public function setIssueTemplates($issueTemplates)
    {
        $this->container['issueTemplates'] = $issueTemplates;
        return $this;
    }

    /**
    * Gets crCommentTemplates
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getCrCommentTemplates()
    {
        return $this->container['crCommentTemplates'];
    }

    /**
    * Sets crCommentTemplates
    *
    * @param int|null $crCommentTemplates **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setCrCommentTemplates($crCommentTemplates)
    {
        $this->container['crCommentTemplates'] = $crCommentTemplates;
        return $this;
    }

    /**
    * Gets mergeRequests
    *  **参数解释：** 排序id。
    *
    * @return int|null
    */
    public function getMergeRequests()
    {
        return $this->container['mergeRequests'];
    }

    /**
    * Sets mergeRequests
    *
    * @param int|null $mergeRequests **参数解释：** 排序id。
    *
    * @return $this
    */
    public function setMergeRequests($mergeRequests)
    {
        $this->container['mergeRequests'] = $mergeRequests;
        return $this;
    }

    /**
    * Gets mrBranchPolicies
    *  **参数解释：** 合并请求策略。
    *
    * @return int|null
    */
    public function getMrBranchPolicies()
    {
        return $this->container['mrBranchPolicies'];
    }

    /**
    * Sets mrBranchPolicies
    *
    * @param int|null $mrBranchPolicies **参数解释：** 合并请求策略。
    *
    * @return $this
    */
    public function setMrBranchPolicies($mrBranchPolicies)
    {
        $this->container['mrBranchPolicies'] = $mrBranchPolicies;
        return $this;
    }

    /**
    * Gets repositorySettings
    *  **参数解释：** 仓库策略。
    *
    * @return int|null
    */
    public function getRepositorySettings()
    {
        return $this->container['repositorySettings'];
    }

    /**
    * Sets repositorySettings
    *
    * @param int|null $repositorySettings **参数解释：** 仓库策略。
    *
    * @return $this
    */
    public function setRepositorySettings($repositorySettings)
    {
        $this->container['repositorySettings'] = $repositorySettings;
        return $this;
    }

    /**
    * Gets deployKeys
    *  **参数解释：** 部署密钥策略。
    *
    * @return int|null
    */
    public function getDeployKeys()
    {
        return $this->container['deployKeys'];
    }

    /**
    * Sets deployKeys
    *
    * @param int|null $deployKeys **参数解释：** 部署密钥策略。
    *
    * @return $this
    */
    public function setDeployKeys($deployKeys)
    {
        $this->container['deployKeys'] = $deployKeys;
        return $this;
    }

    /**
    * Gets watermark
    *  **参数解释：** 水印策略。
    *
    * @return int|null
    */
    public function getWatermark()
    {
        return $this->container['watermark'];
    }

    /**
    * Sets watermark
    *
    * @param int|null $watermark **参数解释：** 水印策略。
    *
    * @return $this
    */
    public function setWatermark($watermark)
    {
        $this->container['watermark'] = $watermark;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 更新时间。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 更新时间。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

