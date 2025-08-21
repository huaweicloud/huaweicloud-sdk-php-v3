<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportMrParamsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportMrParamsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iid  合并请求iid
    * sourceUniqKey  导入唯一标识
    * authorId  作者id
    * state  状态
    * title  标题
    * description  描述
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库
    * labels  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    * mergedAt  合并时间
    * closedAt  关闭时间
    * approvers  审核人列表
    * diffRefs  合并请求变更commit列表
    * squash  squash合并
    * removeSourceBranch  合并mr后删除源分支
    * branchIsDeleted  源分支是否被删除
    * fork  源合并请求是否是fork合并请求
    * importSourceFrom  导入来源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iid' => 'int',
            'sourceUniqKey' => 'string',
            'authorId' => 'int',
            'state' => 'string',
            'title' => 'string',
            'description' => 'string',
            'sourceBranch' => 'string',
            'targetBranch' => 'string',
            'targetRepositoryId' => 'string',
            'labels' => 'object',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'mergedAt' => 'string',
            'closedAt' => 'string',
            'approvers' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ApproverParamDto[]',
            'diffRefs' => '\HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsParamDto[]',
            'squash' => 'bool',
            'removeSourceBranch' => 'bool',
            'branchIsDeleted' => 'bool',
            'fork' => 'bool',
            'importSourceFrom' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iid  合并请求iid
    * sourceUniqKey  导入唯一标识
    * authorId  作者id
    * state  状态
    * title  标题
    * description  描述
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库
    * labels  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    * mergedAt  合并时间
    * closedAt  关闭时间
    * approvers  审核人列表
    * diffRefs  合并请求变更commit列表
    * squash  squash合并
    * removeSourceBranch  合并mr后删除源分支
    * branchIsDeleted  源分支是否被删除
    * fork  源合并请求是否是fork合并请求
    * importSourceFrom  导入来源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iid' => 'int32',
        'sourceUniqKey' => null,
        'authorId' => null,
        'state' => null,
        'title' => null,
        'description' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'targetRepositoryId' => null,
        'labels' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'mergedAt' => null,
        'closedAt' => null,
        'approvers' => null,
        'diffRefs' => null,
        'squash' => null,
        'removeSourceBranch' => null,
        'branchIsDeleted' => null,
        'fork' => null,
        'importSourceFrom' => null
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
    * iid  合并请求iid
    * sourceUniqKey  导入唯一标识
    * authorId  作者id
    * state  状态
    * title  标题
    * description  描述
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库
    * labels  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    * mergedAt  合并时间
    * closedAt  关闭时间
    * approvers  审核人列表
    * diffRefs  合并请求变更commit列表
    * squash  squash合并
    * removeSourceBranch  合并mr后删除源分支
    * branchIsDeleted  源分支是否被删除
    * fork  源合并请求是否是fork合并请求
    * importSourceFrom  导入来源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iid' => 'iid',
            'sourceUniqKey' => 'source_uniq_key',
            'authorId' => 'author_id',
            'state' => 'state',
            'title' => 'title',
            'description' => 'description',
            'sourceBranch' => 'source_branch',
            'targetBranch' => 'target_branch',
            'targetRepositoryId' => 'target_repository_id',
            'labels' => 'labels',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'mergedAt' => 'merged_at',
            'closedAt' => 'closed_at',
            'approvers' => 'approvers',
            'diffRefs' => 'diff_refs',
            'squash' => 'squash',
            'removeSourceBranch' => 'remove_source_branch',
            'branchIsDeleted' => 'branch_is_deleted',
            'fork' => 'fork',
            'importSourceFrom' => 'import_source_from'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iid  合并请求iid
    * sourceUniqKey  导入唯一标识
    * authorId  作者id
    * state  状态
    * title  标题
    * description  描述
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库
    * labels  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    * mergedAt  合并时间
    * closedAt  关闭时间
    * approvers  审核人列表
    * diffRefs  合并请求变更commit列表
    * squash  squash合并
    * removeSourceBranch  合并mr后删除源分支
    * branchIsDeleted  源分支是否被删除
    * fork  源合并请求是否是fork合并请求
    * importSourceFrom  导入来源
    *
    * @var string[]
    */
    protected static $setters = [
            'iid' => 'setIid',
            'sourceUniqKey' => 'setSourceUniqKey',
            'authorId' => 'setAuthorId',
            'state' => 'setState',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'sourceBranch' => 'setSourceBranch',
            'targetBranch' => 'setTargetBranch',
            'targetRepositoryId' => 'setTargetRepositoryId',
            'labels' => 'setLabels',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'mergedAt' => 'setMergedAt',
            'closedAt' => 'setClosedAt',
            'approvers' => 'setApprovers',
            'diffRefs' => 'setDiffRefs',
            'squash' => 'setSquash',
            'removeSourceBranch' => 'setRemoveSourceBranch',
            'branchIsDeleted' => 'setBranchIsDeleted',
            'fork' => 'setFork',
            'importSourceFrom' => 'setImportSourceFrom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iid  合并请求iid
    * sourceUniqKey  导入唯一标识
    * authorId  作者id
    * state  状态
    * title  标题
    * description  描述
    * sourceBranch  源分支
    * targetBranch  目标分支
    * targetRepositoryId  目标仓库
    * labels  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    * mergedAt  合并时间
    * closedAt  关闭时间
    * approvers  审核人列表
    * diffRefs  合并请求变更commit列表
    * squash  squash合并
    * removeSourceBranch  合并mr后删除源分支
    * branchIsDeleted  源分支是否被删除
    * fork  源合并请求是否是fork合并请求
    * importSourceFrom  导入来源
    *
    * @var string[]
    */
    protected static $getters = [
            'iid' => 'getIid',
            'sourceUniqKey' => 'getSourceUniqKey',
            'authorId' => 'getAuthorId',
            'state' => 'getState',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'sourceBranch' => 'getSourceBranch',
            'targetBranch' => 'getTargetBranch',
            'targetRepositoryId' => 'getTargetRepositoryId',
            'labels' => 'getLabels',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'mergedAt' => 'getMergedAt',
            'closedAt' => 'getClosedAt',
            'approvers' => 'getApprovers',
            'diffRefs' => 'getDiffRefs',
            'squash' => 'getSquash',
            'removeSourceBranch' => 'getRemoveSourceBranch',
            'branchIsDeleted' => 'getBranchIsDeleted',
            'fork' => 'getFork',
            'importSourceFrom' => 'getImportSourceFrom'
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
    const STATE_OPENED = 'opened';
    const STATE_CLOSED = 'closed';
    const STATE_MERGED = 'merged';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OPENED,
            self::STATE_CLOSED,
            self::STATE_MERGED,
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['sourceUniqKey'] = isset($data['sourceUniqKey']) ? $data['sourceUniqKey'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['targetRepositoryId'] = isset($data['targetRepositoryId']) ? $data['targetRepositoryId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['closedAt'] = isset($data['closedAt']) ? $data['closedAt'] : null;
        $this->container['approvers'] = isset($data['approvers']) ? $data['approvers'] : null;
        $this->container['diffRefs'] = isset($data['diffRefs']) ? $data['diffRefs'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['removeSourceBranch'] = isset($data['removeSourceBranch']) ? $data['removeSourceBranch'] : null;
        $this->container['branchIsDeleted'] = isset($data['branchIsDeleted']) ? $data['branchIsDeleted'] : null;
        $this->container['fork'] = isset($data['fork']) ? $data['fork'] : null;
        $this->container['importSourceFrom'] = isset($data['importSourceFrom']) ? $data['importSourceFrom'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['iid'] === null) {
            $invalidProperties[] = "'iid' can't be null";
        }
            if (($this->container['iid'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'iid', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['iid'] < 1)) {
                $invalidProperties[] = "invalid value for 'iid', must be bigger than or equal to 1.";
            }
        if ($this->container['sourceUniqKey'] === null) {
            $invalidProperties[] = "'sourceUniqKey' can't be null";
        }
            if (!is_null($this->container['authorId']) && ($this->container['authorId'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'authorId', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['authorId']) && ($this->container['authorId'] < 1)) {
                $invalidProperties[] = "invalid value for 'authorId', must be bigger than or equal to 1.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceBranch'] === null) {
            $invalidProperties[] = "'sourceBranch' can't be null";
        }
        if ($this->container['targetBranch'] === null) {
            $invalidProperties[] = "'targetBranch' can't be null";
        }
        if ($this->container['targetRepositoryId'] === null) {
            $invalidProperties[] = "'targetRepositoryId' can't be null";
        }
        if ($this->container['diffRefs'] === null) {
            $invalidProperties[] = "'diffRefs' can't be null";
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
    * Gets iid
    *  合并请求iid
    *
    * @return int
    */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
    * Sets iid
    *
    * @param int $iid 合并请求iid
    *
    * @return $this
    */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;
        return $this;
    }

    /**
    * Gets sourceUniqKey
    *  导入唯一标识
    *
    * @return string
    */
    public function getSourceUniqKey()
    {
        return $this->container['sourceUniqKey'];
    }

    /**
    * Sets sourceUniqKey
    *
    * @param string $sourceUniqKey 导入唯一标识
    *
    * @return $this
    */
    public function setSourceUniqKey($sourceUniqKey)
    {
        $this->container['sourceUniqKey'] = $sourceUniqKey;
        return $this;
    }

    /**
    * Gets authorId
    *  作者id
    *
    * @return int|null
    */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
    * Sets authorId
    *
    * @param int|null $authorId 作者id
    *
    * @return $this
    */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets title
    *  标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  源分支
    *
    * @return string
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string $sourceBranch 源分支
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets targetBranch
    *  目标分支
    *
    * @return string
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string $targetBranch 目标分支
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets targetRepositoryId
    *  目标仓库
    *
    * @return string
    */
    public function getTargetRepositoryId()
    {
        return $this->container['targetRepositoryId'];
    }

    /**
    * Sets targetRepositoryId
    *
    * @param string $targetRepositoryId 目标仓库
    *
    * @return $this
    */
    public function setTargetRepositoryId($targetRepositoryId)
    {
        $this->container['targetRepositoryId'] = $targetRepositoryId;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return object|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
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
    * @param string|null $createdAt 创建时间
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
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets mergedAt
    *  合并时间
    *
    * @return string|null
    */
    public function getMergedAt()
    {
        return $this->container['mergedAt'];
    }

    /**
    * Sets mergedAt
    *
    * @param string|null $mergedAt 合并时间
    *
    * @return $this
    */
    public function setMergedAt($mergedAt)
    {
        $this->container['mergedAt'] = $mergedAt;
        return $this;
    }

    /**
    * Gets closedAt
    *  关闭时间
    *
    * @return string|null
    */
    public function getClosedAt()
    {
        return $this->container['closedAt'];
    }

    /**
    * Sets closedAt
    *
    * @param string|null $closedAt 关闭时间
    *
    * @return $this
    */
    public function setClosedAt($closedAt)
    {
        $this->container['closedAt'] = $closedAt;
        return $this;
    }

    /**
    * Gets approvers
    *  审核人列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ApproverParamDto[]|null
    */
    public function getApprovers()
    {
        return $this->container['approvers'];
    }

    /**
    * Sets approvers
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ApproverParamDto[]|null $approvers 审核人列表
    *
    * @return $this
    */
    public function setApprovers($approvers)
    {
        $this->container['approvers'] = $approvers;
        return $this;
    }

    /**
    * Gets diffRefs
    *  合并请求变更commit列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsParamDto[]
    */
    public function getDiffRefs()
    {
        return $this->container['diffRefs'];
    }

    /**
    * Sets diffRefs
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\DiffRefsParamDto[] $diffRefs 合并请求变更commit列表
    *
    * @return $this
    */
    public function setDiffRefs($diffRefs)
    {
        $this->container['diffRefs'] = $diffRefs;
        return $this;
    }

    /**
    * Gets squash
    *  squash合并
    *
    * @return bool|null
    */
    public function getSquash()
    {
        return $this->container['squash'];
    }

    /**
    * Sets squash
    *
    * @param bool|null $squash squash合并
    *
    * @return $this
    */
    public function setSquash($squash)
    {
        $this->container['squash'] = $squash;
        return $this;
    }

    /**
    * Gets removeSourceBranch
    *  合并mr后删除源分支
    *
    * @return bool|null
    */
    public function getRemoveSourceBranch()
    {
        return $this->container['removeSourceBranch'];
    }

    /**
    * Sets removeSourceBranch
    *
    * @param bool|null $removeSourceBranch 合并mr后删除源分支
    *
    * @return $this
    */
    public function setRemoveSourceBranch($removeSourceBranch)
    {
        $this->container['removeSourceBranch'] = $removeSourceBranch;
        return $this;
    }

    /**
    * Gets branchIsDeleted
    *  源分支是否被删除
    *
    * @return bool|null
    */
    public function getBranchIsDeleted()
    {
        return $this->container['branchIsDeleted'];
    }

    /**
    * Sets branchIsDeleted
    *
    * @param bool|null $branchIsDeleted 源分支是否被删除
    *
    * @return $this
    */
    public function setBranchIsDeleted($branchIsDeleted)
    {
        $this->container['branchIsDeleted'] = $branchIsDeleted;
        return $this;
    }

    /**
    * Gets fork
    *  源合并请求是否是fork合并请求
    *
    * @return bool|null
    */
    public function getFork()
    {
        return $this->container['fork'];
    }

    /**
    * Sets fork
    *
    * @param bool|null $fork 源合并请求是否是fork合并请求
    *
    * @return $this
    */
    public function setFork($fork)
    {
        $this->container['fork'] = $fork;
        return $this;
    }

    /**
    * Gets importSourceFrom
    *  导入来源
    *
    * @return string|null
    */
    public function getImportSourceFrom()
    {
        return $this->container['importSourceFrom'];
    }

    /**
    * Sets importSourceFrom
    *
    * @param string|null $importSourceFrom 导入来源
    *
    * @return $this
    */
    public function setImportSourceFrom($importSourceFrom)
    {
        $this->container['importSourceFrom'] = $importSourceFrom;
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

