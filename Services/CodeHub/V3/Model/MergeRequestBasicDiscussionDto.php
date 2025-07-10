<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestBasicDiscussionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestBasicDiscussionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  评论id
    * individualNote  individual_note
    * notes  主评和回复列表
    * projectId  仓库id
    * noteableType  目标类型
    * commitId  关联的提交id
    * projectFullPath  仓库路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * deletedFile  此次变更是否删除文件
    * newFile  此次变更是否新增文件
    * resolved  检视意见是否解决
    * archived  检视意见是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'individualNote' => 'bool',
            'notes' => '\HuaweiCloud\SDK\CodeHub\V3\Model\NoteDto[]',
            'projectId' => 'int',
            'noteableType' => 'string',
            'commitId' => 'string',
            'projectFullPath' => 'string',
            'aMode' => 'string',
            'bMode' => 'string',
            'deletedFile' => 'bool',
            'newFile' => 'bool',
            'resolved' => 'bool',
            'archived' => 'bool',
            'reviewCategories' => 'string',
            'reviewCategoriesCn' => 'string',
            'reviewCategoriesEn' => 'string',
            'reviewModules' => 'string',
            'severity' => 'string',
            'severityCn' => 'string',
            'severityEn' => 'string',
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'proposer' => '\HuaweiCloud\SDK\CodeHub\V3\Model\UserBasicDto',
            'mergeRequestVersionParams' => '\HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestVersionParamsDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  评论id
    * individualNote  individual_note
    * notes  主评和回复列表
    * projectId  仓库id
    * noteableType  目标类型
    * commitId  关联的提交id
    * projectFullPath  仓库路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * deletedFile  此次变更是否删除文件
    * newFile  此次变更是否新增文件
    * resolved  检视意见是否解决
    * archived  检视意见是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'individualNote' => null,
        'notes' => null,
        'projectId' => 'int32',
        'noteableType' => null,
        'commitId' => null,
        'projectFullPath' => null,
        'aMode' => null,
        'bMode' => null,
        'deletedFile' => null,
        'newFile' => null,
        'resolved' => null,
        'archived' => null,
        'reviewCategories' => null,
        'reviewCategoriesCn' => null,
        'reviewCategoriesEn' => null,
        'reviewModules' => null,
        'severity' => null,
        'severityCn' => null,
        'severityEn' => null,
        'assignee' => null,
        'proposer' => null,
        'mergeRequestVersionParams' => null
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
    * id  评论id
    * individualNote  individual_note
    * notes  主评和回复列表
    * projectId  仓库id
    * noteableType  目标类型
    * commitId  关联的提交id
    * projectFullPath  仓库路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * deletedFile  此次变更是否删除文件
    * newFile  此次变更是否新增文件
    * resolved  检视意见是否解决
    * archived  检视意见是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'individualNote' => 'individual_note',
            'notes' => 'notes',
            'projectId' => 'project_id',
            'noteableType' => 'noteable_type',
            'commitId' => 'commit_id',
            'projectFullPath' => 'project_full_path',
            'aMode' => 'a_mode',
            'bMode' => 'b_mode',
            'deletedFile' => 'deleted_file',
            'newFile' => 'new_file',
            'resolved' => 'resolved',
            'archived' => 'archived',
            'reviewCategories' => 'review_categories',
            'reviewCategoriesCn' => 'review_categories_cn',
            'reviewCategoriesEn' => 'review_categories_en',
            'reviewModules' => 'review_modules',
            'severity' => 'severity',
            'severityCn' => 'severity_cn',
            'severityEn' => 'severity_en',
            'assignee' => 'assignee',
            'proposer' => 'proposer',
            'mergeRequestVersionParams' => 'merge_request_version_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  评论id
    * individualNote  individual_note
    * notes  主评和回复列表
    * projectId  仓库id
    * noteableType  目标类型
    * commitId  关联的提交id
    * projectFullPath  仓库路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * deletedFile  此次变更是否删除文件
    * newFile  此次变更是否新增文件
    * resolved  检视意见是否解决
    * archived  检视意见是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'individualNote' => 'setIndividualNote',
            'notes' => 'setNotes',
            'projectId' => 'setProjectId',
            'noteableType' => 'setNoteableType',
            'commitId' => 'setCommitId',
            'projectFullPath' => 'setProjectFullPath',
            'aMode' => 'setAMode',
            'bMode' => 'setBMode',
            'deletedFile' => 'setDeletedFile',
            'newFile' => 'setNewFile',
            'resolved' => 'setResolved',
            'archived' => 'setArchived',
            'reviewCategories' => 'setReviewCategories',
            'reviewCategoriesCn' => 'setReviewCategoriesCn',
            'reviewCategoriesEn' => 'setReviewCategoriesEn',
            'reviewModules' => 'setReviewModules',
            'severity' => 'setSeverity',
            'severityCn' => 'setSeverityCn',
            'severityEn' => 'setSeverityEn',
            'assignee' => 'setAssignee',
            'proposer' => 'setProposer',
            'mergeRequestVersionParams' => 'setMergeRequestVersionParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  评论id
    * individualNote  individual_note
    * notes  主评和回复列表
    * projectId  仓库id
    * noteableType  目标类型
    * commitId  关联的提交id
    * projectFullPath  仓库路径
    * aMode  变更前文件模式
    * bMode  变更后文件模式
    * deletedFile  此次变更是否删除文件
    * newFile  此次变更是否新增文件
    * resolved  检视意见是否解决
    * archived  检视意见是否存档
    * reviewCategories  检视意见分类
    * reviewCategoriesCn  检视意见分类中文名
    * reviewCategoriesEn  检视意见分类英文名
    * reviewModules  检视意见模块
    * severity  严重程度
    * severityCn  严重程度中文名
    * severityEn  严重程度英文名
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'individualNote' => 'getIndividualNote',
            'notes' => 'getNotes',
            'projectId' => 'getProjectId',
            'noteableType' => 'getNoteableType',
            'commitId' => 'getCommitId',
            'projectFullPath' => 'getProjectFullPath',
            'aMode' => 'getAMode',
            'bMode' => 'getBMode',
            'deletedFile' => 'getDeletedFile',
            'newFile' => 'getNewFile',
            'resolved' => 'getResolved',
            'archived' => 'getArchived',
            'reviewCategories' => 'getReviewCategories',
            'reviewCategoriesCn' => 'getReviewCategoriesCn',
            'reviewCategoriesEn' => 'getReviewCategoriesEn',
            'reviewModules' => 'getReviewModules',
            'severity' => 'getSeverity',
            'severityCn' => 'getSeverityCn',
            'severityEn' => 'getSeverityEn',
            'assignee' => 'getAssignee',
            'proposer' => 'getProposer',
            'mergeRequestVersionParams' => 'getMergeRequestVersionParams'
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
        $this->container['individualNote'] = isset($data['individualNote']) ? $data['individualNote'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['projectFullPath'] = isset($data['projectFullPath']) ? $data['projectFullPath'] : null;
        $this->container['aMode'] = isset($data['aMode']) ? $data['aMode'] : null;
        $this->container['bMode'] = isset($data['bMode']) ? $data['bMode'] : null;
        $this->container['deletedFile'] = isset($data['deletedFile']) ? $data['deletedFile'] : null;
        $this->container['newFile'] = isset($data['newFile']) ? $data['newFile'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewCategoriesCn'] = isset($data['reviewCategoriesCn']) ? $data['reviewCategoriesCn'] : null;
        $this->container['reviewCategoriesEn'] = isset($data['reviewCategoriesEn']) ? $data['reviewCategoriesEn'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['severityCn'] = isset($data['severityCn']) ? $data['severityCn'] : null;
        $this->container['severityEn'] = isset($data['severityEn']) ? $data['severityEn'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['proposer'] = isset($data['proposer']) ? $data['proposer'] : null;
        $this->container['mergeRequestVersionParams'] = isset($data['mergeRequestVersionParams']) ? $data['mergeRequestVersionParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && ($this->container['projectId'] < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', must be bigger than or equal to 1.";
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
    *  评论id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 评论id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets individualNote
    *  individual_note
    *
    * @return bool|null
    */
    public function getIndividualNote()
    {
        return $this->container['individualNote'];
    }

    /**
    * Sets individualNote
    *
    * @param bool|null $individualNote individual_note
    *
    * @return $this
    */
    public function setIndividualNote($individualNote)
    {
        $this->container['individualNote'] = $individualNote;
        return $this;
    }

    /**
    * Gets notes
    *  主评和回复列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\NoteDto[]|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\NoteDto[]|null $notes 主评和回复列表
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets projectId
    *  仓库id
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 仓库id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets projectFullPath
    *  仓库路径
    *
    * @return string|null
    */
    public function getProjectFullPath()
    {
        return $this->container['projectFullPath'];
    }

    /**
    * Sets projectFullPath
    *
    * @param string|null $projectFullPath 仓库路径
    *
    * @return $this
    */
    public function setProjectFullPath($projectFullPath)
    {
        $this->container['projectFullPath'] = $projectFullPath;
        return $this;
    }

    /**
    * Gets aMode
    *  变更前文件模式
    *
    * @return string|null
    */
    public function getAMode()
    {
        return $this->container['aMode'];
    }

    /**
    * Sets aMode
    *
    * @param string|null $aMode 变更前文件模式
    *
    * @return $this
    */
    public function setAMode($aMode)
    {
        $this->container['aMode'] = $aMode;
        return $this;
    }

    /**
    * Gets bMode
    *  变更后文件模式
    *
    * @return string|null
    */
    public function getBMode()
    {
        return $this->container['bMode'];
    }

    /**
    * Sets bMode
    *
    * @param string|null $bMode 变更后文件模式
    *
    * @return $this
    */
    public function setBMode($bMode)
    {
        $this->container['bMode'] = $bMode;
        return $this;
    }

    /**
    * Gets deletedFile
    *  此次变更是否删除文件
    *
    * @return bool|null
    */
    public function getDeletedFile()
    {
        return $this->container['deletedFile'];
    }

    /**
    * Sets deletedFile
    *
    * @param bool|null $deletedFile 此次变更是否删除文件
    *
    * @return $this
    */
    public function setDeletedFile($deletedFile)
    {
        $this->container['deletedFile'] = $deletedFile;
        return $this;
    }

    /**
    * Gets newFile
    *  此次变更是否新增文件
    *
    * @return bool|null
    */
    public function getNewFile()
    {
        return $this->container['newFile'];
    }

    /**
    * Sets newFile
    *
    * @param bool|null $newFile 此次变更是否新增文件
    *
    * @return $this
    */
    public function setNewFile($newFile)
    {
        $this->container['newFile'] = $newFile;
        return $this;
    }

    /**
    * Gets resolved
    *  检视意见是否解决
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
    * @param bool|null $resolved 检视意见是否解决
    *
    * @return $this
    */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;
        return $this;
    }

    /**
    * Gets archived
    *  检视意见是否存档
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
    * @param bool|null $archived 检视意见是否存档
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
    * Gets mergeRequestVersionParams
    *  mergeRequestVersionParams
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestVersionParamsDto|null
    */
    public function getMergeRequestVersionParams()
    {
        return $this->container['mergeRequestVersionParams'];
    }

    /**
    * Sets mergeRequestVersionParams
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestVersionParamsDto|null $mergeRequestVersionParams mergeRequestVersionParams
    *
    * @return $this
    */
    public function setMergeRequestVersionParams($mergeRequestVersionParams)
    {
        $this->container['mergeRequestVersionParams'] = $mergeRequestVersionParams;
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

