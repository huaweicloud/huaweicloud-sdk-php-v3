<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMergeRequestDiscussionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMergeRequestDiscussionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 检视意见id(主评论和回复共用)。
    * individualNote  **参数解释：** 个人检视意见(不需要解决)。
    * notes  **参数解释：** 评论列表(主评+回复)。
    * repositoryId  **参数解释：** 仓库id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * repositoryFullPath  **参数解释：** 仓库路径。
    * aMode  **参数解释：** 文件旧权限(默认100644)。
    * bMode  **参数解释：** 文件新权限(默认100644)。
    * deletedFile  **参数解释：** 是否为删除文件。
    * newFile  **参数解释：** 是否为新增文件。
    * resolved  **参数解释：** 是否已解决。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 意见模块。
    * severity  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
    * severityCn  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    * diffFile  **参数解释：** 变更页检视意见的代码片段。
    * addedLines  **参数解释：** 检视意见所在文件的新增行数量。
    * removedLines  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'individualNote' => 'bool',
            'notes' => '\HuaweiCloud\SDK\CodeHub\V4\Model\NoteDto[]',
            'repositoryId' => 'int',
            'noteableType' => 'string',
            'commitId' => 'string',
            'repositoryFullPath' => 'string',
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
            'assignee' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'proposer' => '\HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto',
            'mergeRequestVersionParams' => '\HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVersionParamsDto',
            'diffFile' => 'string',
            'addedLines' => 'int',
            'removedLines' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 检视意见id(主评论和回复共用)。
    * individualNote  **参数解释：** 个人检视意见(不需要解决)。
    * notes  **参数解释：** 评论列表(主评+回复)。
    * repositoryId  **参数解释：** 仓库id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * repositoryFullPath  **参数解释：** 仓库路径。
    * aMode  **参数解释：** 文件旧权限(默认100644)。
    * bMode  **参数解释：** 文件新权限(默认100644)。
    * deletedFile  **参数解释：** 是否为删除文件。
    * newFile  **参数解释：** 是否为新增文件。
    * resolved  **参数解释：** 是否已解决。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 意见模块。
    * severity  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
    * severityCn  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    * diffFile  **参数解释：** 变更页检视意见的代码片段。
    * addedLines  **参数解释：** 检视意见所在文件的新增行数量。
    * removedLines  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'individualNote' => null,
        'notes' => null,
        'repositoryId' => 'int32',
        'noteableType' => null,
        'commitId' => null,
        'repositoryFullPath' => null,
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
        'mergeRequestVersionParams' => null,
        'diffFile' => null,
        'addedLines' => 'int32',
        'removedLines' => 'int32'
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
    * id  **参数解释：** 检视意见id(主评论和回复共用)。
    * individualNote  **参数解释：** 个人检视意见(不需要解决)。
    * notes  **参数解释：** 评论列表(主评+回复)。
    * repositoryId  **参数解释：** 仓库id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * repositoryFullPath  **参数解释：** 仓库路径。
    * aMode  **参数解释：** 文件旧权限(默认100644)。
    * bMode  **参数解释：** 文件新权限(默认100644)。
    * deletedFile  **参数解释：** 是否为删除文件。
    * newFile  **参数解释：** 是否为新增文件。
    * resolved  **参数解释：** 是否已解决。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 意见模块。
    * severity  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
    * severityCn  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    * diffFile  **参数解释：** 变更页检视意见的代码片段。
    * addedLines  **参数解释：** 检视意见所在文件的新增行数量。
    * removedLines  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'individualNote' => 'individual_note',
            'notes' => 'notes',
            'repositoryId' => 'repository_id',
            'noteableType' => 'noteable_type',
            'commitId' => 'commit_id',
            'repositoryFullPath' => 'repository_full_path',
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
            'mergeRequestVersionParams' => 'merge_request_version_params',
            'diffFile' => 'diff_file',
            'addedLines' => 'added_lines',
            'removedLines' => 'removed_lines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 检视意见id(主评论和回复共用)。
    * individualNote  **参数解释：** 个人检视意见(不需要解决)。
    * notes  **参数解释：** 评论列表(主评+回复)。
    * repositoryId  **参数解释：** 仓库id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * repositoryFullPath  **参数解释：** 仓库路径。
    * aMode  **参数解释：** 文件旧权限(默认100644)。
    * bMode  **参数解释：** 文件新权限(默认100644)。
    * deletedFile  **参数解释：** 是否为删除文件。
    * newFile  **参数解释：** 是否为新增文件。
    * resolved  **参数解释：** 是否已解决。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 意见模块。
    * severity  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
    * severityCn  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    * diffFile  **参数解释：** 变更页检视意见的代码片段。
    * addedLines  **参数解释：** 检视意见所在文件的新增行数量。
    * removedLines  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'individualNote' => 'setIndividualNote',
            'notes' => 'setNotes',
            'repositoryId' => 'setRepositoryId',
            'noteableType' => 'setNoteableType',
            'commitId' => 'setCommitId',
            'repositoryFullPath' => 'setRepositoryFullPath',
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
            'mergeRequestVersionParams' => 'setMergeRequestVersionParams',
            'diffFile' => 'setDiffFile',
            'addedLines' => 'setAddedLines',
            'removedLines' => 'setRemovedLines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 检视意见id(主评论和回复共用)。
    * individualNote  **参数解释：** 个人检视意见(不需要解决)。
    * notes  **参数解释：** 评论列表(主评+回复)。
    * repositoryId  **参数解释：** 仓库id。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
    * commitId  **参数解释：** 提交记录id。
    * repositoryFullPath  **参数解释：** 仓库路径。
    * aMode  **参数解释：** 文件旧权限(默认100644)。
    * bMode  **参数解释：** 文件新权限(默认100644)。
    * deletedFile  **参数解释：** 是否为删除文件。
    * newFile  **参数解释：** 是否为新增文件。
    * resolved  **参数解释：** 是否已解决。
    * archived  **参数解释：** 是否已归档。
    * reviewCategories  **参数解释：** 意见分类key。
    * reviewCategoriesCn  **参数解释：** 意见分类中文。
    * reviewCategoriesEn  **参数解释：** 意见分类英文。
    * reviewModules  **参数解释：** 意见模块。
    * severity  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
    * severityCn  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
    * severityEn  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
    * assignee  assignee
    * proposer  proposer
    * mergeRequestVersionParams  mergeRequestVersionParams
    * diffFile  **参数解释：** 变更页检视意见的代码片段。
    * addedLines  **参数解释：** 检视意见所在文件的新增行数量。
    * removedLines  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'individualNote' => 'getIndividualNote',
            'notes' => 'getNotes',
            'repositoryId' => 'getRepositoryId',
            'noteableType' => 'getNoteableType',
            'commitId' => 'getCommitId',
            'repositoryFullPath' => 'getRepositoryFullPath',
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
            'mergeRequestVersionParams' => 'getMergeRequestVersionParams',
            'diffFile' => 'getDiffFile',
            'addedLines' => 'getAddedLines',
            'removedLines' => 'getRemovedLines'
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
    const NOTEABLE_TYPE_MERGE_REQUEST = 'MergeRequest';
    const NOTEABLE_TYPE_COMMIT = 'Commit';
    const SEVERITY_SUGGESTION = 'suggestion';
    const SEVERITY_MINOR = 'minor';
    const SEVERITY_MAJOR = 'major';
    const SEVERITY_FATAL = 'fatal';
    const SEVERITY_EN_SUGGESTION = 'Suggestion';
    const SEVERITY_EN_MINOR = 'Minor';
    const SEVERITY_EN_MAJOR = 'Major';
    const SEVERITY_EN_FATAL = 'Fatal';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoteableTypeAllowableValues()
    {
        return [
            self::NOTEABLE_TYPE_MERGE_REQUEST,
            self::NOTEABLE_TYPE_COMMIT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_SUGGESTION,
            self::SEVERITY_MINOR,
            self::SEVERITY_MAJOR,
            self::SEVERITY_FATAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityEnAllowableValues()
    {
        return [
            self::SEVERITY_EN_SUGGESTION,
            self::SEVERITY_EN_MINOR,
            self::SEVERITY_EN_MAJOR,
            self::SEVERITY_EN_FATAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['individualNote'] = isset($data['individualNote']) ? $data['individualNote'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['repositoryFullPath'] = isset($data['repositoryFullPath']) ? $data['repositoryFullPath'] : null;
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
        $this->container['diffFile'] = isset($data['diffFile']) ? $data['diffFile'] : null;
        $this->container['addedLines'] = isset($data['addedLines']) ? $data['addedLines'] : null;
        $this->container['removedLines'] = isset($data['removedLines']) ? $data['removedLines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 40)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 40)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['repositoryId']) && ($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getNoteableTypeAllowableValues();
                if (!is_null($this->container['noteableType']) && !in_array($this->container['noteableType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noteableType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) > 40)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be smaller than or equal to 40.";
            }
            if (!is_null($this->container['commitId']) && (mb_strlen($this->container['commitId']) < 40)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['repositoryFullPath']) && (mb_strlen($this->container['repositoryFullPath']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repositoryFullPath', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repositoryFullPath']) && (mb_strlen($this->container['repositoryFullPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryFullPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['aMode']) && (mb_strlen($this->container['aMode']) > 100000)) {
                $invalidProperties[] = "invalid value for 'aMode', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['aMode']) && (mb_strlen($this->container['aMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'aMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bMode']) && (mb_strlen($this->container['bMode']) > 100000)) {
                $invalidProperties[] = "invalid value for 'bMode', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['bMode']) && (mb_strlen($this->container['bMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'bMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategoriesCn']) && (mb_strlen($this->container['reviewCategoriesCn']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesCn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategoriesCn']) && (mb_strlen($this->container['reviewCategoriesCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewCategoriesEn']) && (mb_strlen($this->container['reviewCategoriesEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesEn', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategoriesEn']) && (mb_strlen($this->container['reviewCategoriesEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategoriesEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSeverityEnAllowableValues();
                if (!is_null($this->container['severityEn']) && !in_array($this->container['severityEn'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severityEn', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['diffFile']) && (mb_strlen($this->container['diffFile']) > 100000)) {
                $invalidProperties[] = "invalid value for 'diffFile', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['diffFile']) && (mb_strlen($this->container['diffFile']) < 1)) {
                $invalidProperties[] = "invalid value for 'diffFile', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['addedLines']) && ($this->container['addedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'addedLines', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['removedLines']) && ($this->container['removedLines'] < 0)) {
                $invalidProperties[] = "invalid value for 'removedLines', must be bigger than or equal to 0.";
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
    *  **参数解释：** 检视意见id(主评论和回复共用)。
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
    * @param string|null $id **参数解释：** 检视意见id(主评论和回复共用)。
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
    *  **参数解释：** 个人检视意见(不需要解决)。
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
    * @param bool|null $individualNote **参数解释：** 个人检视意见(不需要解决)。
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
    *  **参数解释：** 评论列表(主评+回复)。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\NoteDto[]|null
    */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
    * Sets notes
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\NoteDto[]|null $notes **参数解释：** 评论列表(主评+回复)。
    *
    * @return $this
    */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;
        return $this;
    }

    /**
    * Gets repositoryId
    *  **参数解释：** 仓库id。
    *
    * @return int|null
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int|null $repositoryId **参数解释：** 仓库id。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets noteableType
    *  **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
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
    * @param string|null $noteableType **参数解释：** 意见类型。 **取值范围：** - MergeRequest: 合并请求下提的检视意见。 - Commit: 代码页或提交记录下提的检视意见。
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
    *  **参数解释：** 提交记录id。
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
    * @param string|null $commitId **参数解释：** 提交记录id。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets repositoryFullPath
    *  **参数解释：** 仓库路径。
    *
    * @return string|null
    */
    public function getRepositoryFullPath()
    {
        return $this->container['repositoryFullPath'];
    }

    /**
    * Sets repositoryFullPath
    *
    * @param string|null $repositoryFullPath **参数解释：** 仓库路径。
    *
    * @return $this
    */
    public function setRepositoryFullPath($repositoryFullPath)
    {
        $this->container['repositoryFullPath'] = $repositoryFullPath;
        return $this;
    }

    /**
    * Gets aMode
    *  **参数解释：** 文件旧权限(默认100644)。
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
    * @param string|null $aMode **参数解释：** 文件旧权限(默认100644)。
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
    *  **参数解释：** 文件新权限(默认100644)。
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
    * @param string|null $bMode **参数解释：** 文件新权限(默认100644)。
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
    *  **参数解释：** 是否为删除文件。
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
    * @param bool|null $deletedFile **参数解释：** 是否为删除文件。
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
    *  **参数解释：** 是否为新增文件。
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
    * @param bool|null $newFile **参数解释：** 是否为新增文件。
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
    *  **参数解释：** 是否已解决。
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
    * @param bool|null $resolved **参数解释：** 是否已解决。
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
    *  **参数解释：** 是否已归档。
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
    * @param bool|null $archived **参数解释：** 是否已归档。
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
    *  **参数解释：** 意见分类key。
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
    * @param string|null $reviewCategories **参数解释：** 意见分类key。
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
    *  **参数解释：** 意见分类中文。
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
    * @param string|null $reviewCategoriesCn **参数解释：** 意见分类中文。
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
    *  **参数解释：** 意见分类英文。
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
    * @param string|null $reviewCategoriesEn **参数解释：** 意见分类英文。
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
    *  **参数解释：** 意见模块。
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
    * @param string|null $reviewModules **参数解释：** 意见模块。
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
    *  **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
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
    * @param string|null $severity **参数解释：** 严重程度key。 **取值范围：** - suggestion: 建议。 - minor: 一般。 - major: 严重。 - fatal: 致命。
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
    *  **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
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
    * @param string|null $severityCn **参数解释：** 严重程度中文。 **取值范围：** - 建议 - 一般 - 严重 - 致命
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
    *  **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
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
    * @param string|null $severityEn **参数解释：** 严重程度英文。 **取值范围：** - Suggestion: 建议。 - Minor: 一般。 - major: 严重。 - fatal: 致命。
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
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
    * Sets assignee
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $assignee assignee
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
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null
    */
    public function getProposer()
    {
        return $this->container['proposer'];
    }

    /**
    * Sets proposer
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\UserBasicDto|null $proposer proposer
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
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVersionParamsDto|null
    */
    public function getMergeRequestVersionParams()
    {
        return $this->container['mergeRequestVersionParams'];
    }

    /**
    * Sets mergeRequestVersionParams
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVersionParamsDto|null $mergeRequestVersionParams mergeRequestVersionParams
    *
    * @return $this
    */
    public function setMergeRequestVersionParams($mergeRequestVersionParams)
    {
        $this->container['mergeRequestVersionParams'] = $mergeRequestVersionParams;
        return $this;
    }

    /**
    * Gets diffFile
    *  **参数解释：** 变更页检视意见的代码片段。
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
    * @param string|null $diffFile **参数解释：** 变更页检视意见的代码片段。
    *
    * @return $this
    */
    public function setDiffFile($diffFile)
    {
        $this->container['diffFile'] = $diffFile;
        return $this;
    }

    /**
    * Gets addedLines
    *  **参数解释：** 检视意见所在文件的新增行数量。
    *
    * @return int|null
    */
    public function getAddedLines()
    {
        return $this->container['addedLines'];
    }

    /**
    * Sets addedLines
    *
    * @param int|null $addedLines **参数解释：** 检视意见所在文件的新增行数量。
    *
    * @return $this
    */
    public function setAddedLines($addedLines)
    {
        $this->container['addedLines'] = $addedLines;
        return $this;
    }

    /**
    * Gets removedLines
    *  **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @return int|null
    */
    public function getRemovedLines()
    {
        return $this->container['removedLines'];
    }

    /**
    * Sets removedLines
    *
    * @param int|null $removedLines **参数解释：** 检视意见所在文件的删除行数量。
    *
    * @return $this
    */
    public function setRemovedLines($removedLines)
    {
        $this->container['removedLines'] = $removedLines;
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

