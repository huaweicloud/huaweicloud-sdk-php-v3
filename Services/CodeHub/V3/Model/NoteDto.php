<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NoteDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NoteDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  note id
    * type  note类型
    * body  检视意见内容
    * attachment  附件
    * author  author
    * createdAt  创建时间
    * updatedAt  更新时间
    * system  是否是系统生成的日志
    * noteableId  目标id
    * noteableType  目标类型
    * commitId  关联的提交id
    * resolvable  是否可解决
    * isReply  是否是回复
    * resolvedBy  resolvedBy
    * noteableIid  目标iid
    * discussionId  讨论id
    * project  所属项目
    * diffFile  变更文件
    * diff  变更内容
    * archived  是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * filePath  文件路径
    * line  行号
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  是否解决
    * isOutdated  是否过时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'type' => 'string',
            'body' => 'string',
            'attachment' => 'string',
            'author' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'system' => 'bool',
            'noteableId' => 'int',
            'noteableType' => 'string',
            'commitId' => 'string',
            'resolvable' => 'bool',
            'isReply' => 'bool',
            'resolvedBy' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'noteableIid' => 'int',
            'discussionId' => 'string',
            'project' => 'string',
            'diffFile' => 'string',
            'diff' => 'string',
            'archived' => 'bool',
            'reviewCategories' => 'string',
            'reviewCategoriesCn' => 'string',
            'reviewCategoriesEn' => 'string',
            'reviewModules' => 'string',
            'severity' => 'string',
            'severityCn' => 'string',
            'severityEn' => 'string',
            'filePath' => 'string',
            'line' => 'string',
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'proposer' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'position' => '\HuaweiCloud\SDK\CodeHub\V3\Model\PositionDto',
            'resolved' => 'bool',
            'isOutdated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  note id
    * type  note类型
    * body  检视意见内容
    * attachment  附件
    * author  author
    * createdAt  创建时间
    * updatedAt  更新时间
    * system  是否是系统生成的日志
    * noteableId  目标id
    * noteableType  目标类型
    * commitId  关联的提交id
    * resolvable  是否可解决
    * isReply  是否是回复
    * resolvedBy  resolvedBy
    * noteableIid  目标iid
    * discussionId  讨论id
    * project  所属项目
    * diffFile  变更文件
    * diff  变更内容
    * archived  是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * filePath  文件路径
    * line  行号
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  是否解决
    * isOutdated  是否过时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'type' => null,
        'body' => null,
        'attachment' => null,
        'author' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'system' => null,
        'noteableId' => 'int32',
        'noteableType' => null,
        'commitId' => null,
        'resolvable' => null,
        'isReply' => null,
        'resolvedBy' => null,
        'noteableIid' => 'int32',
        'discussionId' => null,
        'project' => null,
        'diffFile' => null,
        'diff' => null,
        'archived' => null,
        'reviewCategories' => null,
        'reviewCategoriesCn' => null,
        'reviewCategoriesEn' => null,
        'reviewModules' => null,
        'severity' => null,
        'severityCn' => null,
        'severityEn' => null,
        'filePath' => null,
        'line' => null,
        'assignee' => null,
        'proposer' => null,
        'position' => null,
        'resolved' => null,
        'isOutdated' => null
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
    * id  note id
    * type  note类型
    * body  检视意见内容
    * attachment  附件
    * author  author
    * createdAt  创建时间
    * updatedAt  更新时间
    * system  是否是系统生成的日志
    * noteableId  目标id
    * noteableType  目标类型
    * commitId  关联的提交id
    * resolvable  是否可解决
    * isReply  是否是回复
    * resolvedBy  resolvedBy
    * noteableIid  目标iid
    * discussionId  讨论id
    * project  所属项目
    * diffFile  变更文件
    * diff  变更内容
    * archived  是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * filePath  文件路径
    * line  行号
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  是否解决
    * isOutdated  是否过时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'body' => 'body',
            'attachment' => 'attachment',
            'author' => 'author',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'system' => 'system',
            'noteableId' => 'noteable_id',
            'noteableType' => 'noteable_type',
            'commitId' => 'commit_id',
            'resolvable' => 'resolvable',
            'isReply' => 'is_reply',
            'resolvedBy' => 'resolved_by',
            'noteableIid' => 'noteable_iid',
            'discussionId' => 'discussion_id',
            'project' => 'project',
            'diffFile' => 'diff_file',
            'diff' => 'diff',
            'archived' => 'archived',
            'reviewCategories' => 'review_categories',
            'reviewCategoriesCn' => 'review_categories_cn',
            'reviewCategoriesEn' => 'review_categories_en',
            'reviewModules' => 'review_modules',
            'severity' => 'severity',
            'severityCn' => 'severity_cn',
            'severityEn' => 'severity_en',
            'filePath' => 'file_path',
            'line' => 'line',
            'assignee' => 'assignee',
            'proposer' => 'proposer',
            'position' => 'position',
            'resolved' => 'resolved',
            'isOutdated' => 'is_outdated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  note id
    * type  note类型
    * body  检视意见内容
    * attachment  附件
    * author  author
    * createdAt  创建时间
    * updatedAt  更新时间
    * system  是否是系统生成的日志
    * noteableId  目标id
    * noteableType  目标类型
    * commitId  关联的提交id
    * resolvable  是否可解决
    * isReply  是否是回复
    * resolvedBy  resolvedBy
    * noteableIid  目标iid
    * discussionId  讨论id
    * project  所属项目
    * diffFile  变更文件
    * diff  变更内容
    * archived  是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * filePath  文件路径
    * line  行号
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  是否解决
    * isOutdated  是否过时
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'body' => 'setBody',
            'attachment' => 'setAttachment',
            'author' => 'setAuthor',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'system' => 'setSystem',
            'noteableId' => 'setNoteableId',
            'noteableType' => 'setNoteableType',
            'commitId' => 'setCommitId',
            'resolvable' => 'setResolvable',
            'isReply' => 'setIsReply',
            'resolvedBy' => 'setResolvedBy',
            'noteableIid' => 'setNoteableIid',
            'discussionId' => 'setDiscussionId',
            'project' => 'setProject',
            'diffFile' => 'setDiffFile',
            'diff' => 'setDiff',
            'archived' => 'setArchived',
            'reviewCategories' => 'setReviewCategories',
            'reviewCategoriesCn' => 'setReviewCategoriesCn',
            'reviewCategoriesEn' => 'setReviewCategoriesEn',
            'reviewModules' => 'setReviewModules',
            'severity' => 'setSeverity',
            'severityCn' => 'setSeverityCn',
            'severityEn' => 'setSeverityEn',
            'filePath' => 'setFilePath',
            'line' => 'setLine',
            'assignee' => 'setAssignee',
            'proposer' => 'setProposer',
            'position' => 'setPosition',
            'resolved' => 'setResolved',
            'isOutdated' => 'setIsOutdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  note id
    * type  note类型
    * body  检视意见内容
    * attachment  附件
    * author  author
    * createdAt  创建时间
    * updatedAt  更新时间
    * system  是否是系统生成的日志
    * noteableId  目标id
    * noteableType  目标类型
    * commitId  关联的提交id
    * resolvable  是否可解决
    * isReply  是否是回复
    * resolvedBy  resolvedBy
    * noteableIid  目标iid
    * discussionId  讨论id
    * project  所属项目
    * diffFile  变更文件
    * diff  变更内容
    * archived  是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * filePath  文件路径
    * line  行号
    * assignee  assignee
    * proposer  proposer
    * position  position
    * resolved  是否解决
    * isOutdated  是否过时
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'body' => 'getBody',
            'attachment' => 'getAttachment',
            'author' => 'getAuthor',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'system' => 'getSystem',
            'noteableId' => 'getNoteableId',
            'noteableType' => 'getNoteableType',
            'commitId' => 'getCommitId',
            'resolvable' => 'getResolvable',
            'isReply' => 'getIsReply',
            'resolvedBy' => 'getResolvedBy',
            'noteableIid' => 'getNoteableIid',
            'discussionId' => 'getDiscussionId',
            'project' => 'getProject',
            'diffFile' => 'getDiffFile',
            'diff' => 'getDiff',
            'archived' => 'getArchived',
            'reviewCategories' => 'getReviewCategories',
            'reviewCategoriesCn' => 'getReviewCategoriesCn',
            'reviewCategoriesEn' => 'getReviewCategoriesEn',
            'reviewModules' => 'getReviewModules',
            'severity' => 'getSeverity',
            'severityCn' => 'getSeverityCn',
            'severityEn' => 'getSeverityEn',
            'filePath' => 'getFilePath',
            'line' => 'getLine',
            'assignee' => 'getAssignee',
            'proposer' => 'getProposer',
            'position' => 'getPosition',
            'resolved' => 'getResolved',
            'isOutdated' => 'getIsOutdated'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['noteableId'] = isset($data['noteableId']) ? $data['noteableId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['resolvable'] = isset($data['resolvable']) ? $data['resolvable'] : null;
        $this->container['isReply'] = isset($data['isReply']) ? $data['isReply'] : null;
        $this->container['resolvedBy'] = isset($data['resolvedBy']) ? $data['resolvedBy'] : null;
        $this->container['noteableIid'] = isset($data['noteableIid']) ? $data['noteableIid'] : null;
        $this->container['discussionId'] = isset($data['discussionId']) ? $data['discussionId'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['diffFile'] = isset($data['diffFile']) ? $data['diffFile'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewCategoriesCn'] = isset($data['reviewCategoriesCn']) ? $data['reviewCategoriesCn'] : null;
        $this->container['reviewCategoriesEn'] = isset($data['reviewCategoriesEn']) ? $data['reviewCategoriesEn'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['severityCn'] = isset($data['severityCn']) ? $data['severityCn'] : null;
        $this->container['severityEn'] = isset($data['severityEn']) ? $data['severityEn'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['proposer'] = isset($data['proposer']) ? $data['proposer'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['isOutdated'] = isset($data['isOutdated']) ? $data['isOutdated'] : null;
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
            if (!is_null($this->container['noteableId']) && ($this->container['noteableId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'noteableId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['noteableId']) && ($this->container['noteableId'] < 1)) {
                $invalidProperties[] = "invalid value for 'noteableId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['noteableIid']) && ($this->container['noteableIid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'noteableIid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['noteableIid']) && ($this->container['noteableIid'] < 1)) {
                $invalidProperties[] = "invalid value for 'noteableIid', must be bigger than or equal to 1.";
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
    * Gets id
    *  note id
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
    * @param int|null $id note id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  note类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type note类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets body
    *  检视意见内容
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 检视意见内容
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets attachment
    *  附件
    *
    * @return string|null
    */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
    * Sets attachment
    *
    * @param string|null $attachment 附件
    *
    * @return $this
    */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
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
    * Gets system
    *  是否是系统生成的日志
    *
    * @return bool|null
    */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
    * Sets system
    *
    * @param bool|null $system 是否是系统生成的日志
    *
    * @return $this
    */
    public function setSystem($system)
    {
        $this->container['system'] = $system;
        return $this;
    }

    /**
    * Gets noteableId
    *  目标id
    *
    * @return int|null
    */
    public function getNoteableId()
    {
        return $this->container['noteableId'];
    }

    /**
    * Sets noteableId
    *
    * @param int|null $noteableId 目标id
    *
    * @return $this
    */
    public function setNoteableId($noteableId)
    {
        $this->container['noteableId'] = $noteableId;
        return $this;
    }

    /**
    * Gets noteableType
    *  目标类型
    *
    * @return string|null
    */
    public function getNoteableType()
    {
        return $this->container['noteableType'];
    }

    /**
    * Sets noteableType
    *
    * @param string|null $noteableType 目标类型
    *
    * @return $this
    */
    public function setNoteableType($noteableType)
    {
        $this->container['noteableType'] = $noteableType;
        return $this;
    }

    /**
    * Gets commitId
    *  关联的提交id
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId 关联的提交id
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets resolvable
    *  是否可解决
    *
    * @return bool|null
    */
    public function getResolvable()
    {
        return $this->container['resolvable'];
    }

    /**
    * Sets resolvable
    *
    * @param bool|null $resolvable 是否可解决
    *
    * @return $this
    */
    public function setResolvable($resolvable)
    {
        $this->container['resolvable'] = $resolvable;
        return $this;
    }

    /**
    * Gets isReply
    *  是否是回复
    *
    * @return bool|null
    */
    public function getIsReply()
    {
        return $this->container['isReply'];
    }

    /**
    * Sets isReply
    *
    * @param bool|null $isReply 是否是回复
    *
    * @return $this
    */
    public function setIsReply($isReply)
    {
        $this->container['isReply'] = $isReply;
        return $this;
    }

    /**
    * Gets resolvedBy
    *  resolvedBy
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null
    */
    public function getResolvedBy()
    {
        return $this->container['resolvedBy'];
    }

    /**
    * Sets resolvedBy
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null $resolvedBy resolvedBy
    *
    * @return $this
    */
    public function setResolvedBy($resolvedBy)
    {
        $this->container['resolvedBy'] = $resolvedBy;
        return $this;
    }

    /**
    * Gets noteableIid
    *  目标iid
    *
    * @return int|null
    */
    public function getNoteableIid()
    {
        return $this->container['noteableIid'];
    }

    /**
    * Sets noteableIid
    *
    * @param int|null $noteableIid 目标iid
    *
    * @return $this
    */
    public function setNoteableIid($noteableIid)
    {
        $this->container['noteableIid'] = $noteableIid;
        return $this;
    }

    /**
    * Gets discussionId
    *  讨论id
    *
    * @return string|null
    */
    public function getDiscussionId()
    {
        return $this->container['discussionId'];
    }

    /**
    * Sets discussionId
    *
    * @param string|null $discussionId 讨论id
    *
    * @return $this
    */
    public function setDiscussionId($discussionId)
    {
        $this->container['discussionId'] = $discussionId;
        return $this;
    }

    /**
    * Gets project
    *  所属项目
    *
    * @return string|null
    */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
    * Sets project
    *
    * @param string|null $project 所属项目
    *
    * @return $this
    */
    public function setProject($project)
    {
        $this->container['project'] = $project;
        return $this;
    }

    /**
    * Gets diffFile
    *  变更文件
    *
    * @return string|null
    */
    public function getDiffFile()
    {
        return $this->container['diffFile'];
    }

    /**
    * Sets diffFile
    *
    * @param string|null $diffFile 变更文件
    *
    * @return $this
    */
    public function setDiffFile($diffFile)
    {
        $this->container['diffFile'] = $diffFile;
        return $this;
    }

    /**
    * Gets diff
    *  变更内容
    *
    * @return string|null
    */
    public function getDiff()
    {
        return $this->container['diff'];
    }

    /**
    * Sets diff
    *
    * @param string|null $diff 变更内容
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets archived
    *  是否存档
    *
    * @return bool|null
    */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
    * Sets archived
    *
    * @param bool|null $archived 是否存档
    *
    * @return $this
    */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;
        return $this;
    }

    /**
    * Gets reviewCategories
    *  检视意见分类
    *
    * @return string|null
    */
    public function getReviewCategories()
    {
        return $this->container['reviewCategories'];
    }

    /**
    * Sets reviewCategories
    *
    * @param string|null $reviewCategories 检视意见分类
    *
    * @return $this
    */
    public function setReviewCategories($reviewCategories)
    {
        $this->container['reviewCategories'] = $reviewCategories;
        return $this;
    }

    /**
    * Gets reviewCategoriesCn
    *  检视意见分类中文名
    *
    * @return string|null
    */
    public function getReviewCategoriesCn()
    {
        return $this->container['reviewCategoriesCn'];
    }

    /**
    * Sets reviewCategoriesCn
    *
    * @param string|null $reviewCategoriesCn 检视意见分类中文名
    *
    * @return $this
    */
    public function setReviewCategoriesCn($reviewCategoriesCn)
    {
        $this->container['reviewCategoriesCn'] = $reviewCategoriesCn;
        return $this;
    }

    /**
    * Gets reviewCategoriesEn
    *  检视意见分类英文名
    *
    * @return string|null
    */
    public function getReviewCategoriesEn()
    {
        return $this->container['reviewCategoriesEn'];
    }

    /**
    * Sets reviewCategoriesEn
    *
    * @param string|null $reviewCategoriesEn 检视意见分类英文名
    *
    * @return $this
    */
    public function setReviewCategoriesEn($reviewCategoriesEn)
    {
        $this->container['reviewCategoriesEn'] = $reviewCategoriesEn;
        return $this;
    }

    /**
    * Gets reviewModules
    *  检视意见模块
    *
    * @return string|null
    */
    public function getReviewModules()
    {
        return $this->container['reviewModules'];
    }

    /**
    * Sets reviewModules
    *
    * @param string|null $reviewModules 检视意见模块
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets severity
    *  严重程度
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 严重程度
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets severityCn
    *  严重程度中文名
    *
    * @return string|null
    */
    public function getSeverityCn()
    {
        return $this->container['severityCn'];
    }

    /**
    * Sets severityCn
    *
    * @param string|null $severityCn 严重程度中文名
    *
    * @return $this
    */
    public function setSeverityCn($severityCn)
    {
        $this->container['severityCn'] = $severityCn;
        return $this;
    }

    /**
    * Gets severityEn
    *  严重程度英文名
    *
    * @return string|null
    */
    public function getSeverityEn()
    {
        return $this->container['severityEn'];
    }

    /**
    * Sets severityEn
    *
    * @param string|null $severityEn 严重程度英文名
    *
    * @return $this
    */
    public function setSeverityEn($severityEn)
    {
        $this->container['severityEn'] = $severityEn;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets line
    *  行号
    *
    * @return string|null
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string|null $line 行号
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets assignee
    *  assignee
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null $assignee assignee
    *
    * @return $this
    */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;
        return $this;
    }

    /**
    * Gets proposer
    *  proposer
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null
    */
    public function getProposer()
    {
        return $this->container['proposer'];
    }

    /**
    * Sets proposer
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto|null $proposer proposer
    *
    * @return $this
    */
    public function setProposer($proposer)
    {
        $this->container['proposer'] = $proposer;
        return $this;
    }

    /**
    * Gets position
    *  position
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\PositionDto|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\PositionDto|null $position position
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets resolved
    *  是否解决
    *
    * @return bool|null
    */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
    * Sets resolved
    *
    * @param bool|null $resolved 是否解决
    *
    * @return $this
    */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;
        return $this;
    }

    /**
    * Gets isOutdated
    *  是否过时
    *
    * @return bool|null
    */
    public function getIsOutdated()
    {
        return $this->container['isOutdated'];
    }

    /**
    * Sets isOutdated
    *
    * @param bool|null $isOutdated 是否过时
    *
    * @return $this
    */
    public function setIsOutdated($isOutdated)
    {
        $this->container['isOutdated'] = $isOutdated;
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

