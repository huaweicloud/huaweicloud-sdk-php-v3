<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支,如果是MR模式，为源分支
    * lastCheckTime  上一次检查时间
    * codeLineTotal  代码总行数
    * codeLine  代码有效行数
    * codeQuality  代码质量
    * issueCount  问题数
    * riskCoefficient  危险系数
    * duplicationRatio  重复比例
    * complexityCount  复杂度
    * duplicatedLines  重复行数
    * commentLines  注释行数
    * commentRatio  注释比例
    * duplicatedBlocks  重复块
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * cyclomaticComplexityPerMethod  代码平均复杂度
    * cyclomaticComplexityPerFile  代码平均复杂度(文件)
    * criticalCount  致命问题数
    * majorCount  严重问题数
    * minorCount  一般问题数
    * suggestionCount  提示问题数
    * isAccess  门禁质量是否通过
    * triggerType  任务触发方式
    * fileDuplicationRatio  文件重复率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'creatorId' => 'string',
            'gitUrl' => 'string',
            'gitBranch' => 'string',
            'lastCheckTime' => 'string',
            'codeLineTotal' => 'int',
            'codeLine' => 'int',
            'codeQuality' => 'float',
            'issueCount' => 'int',
            'riskCoefficient' => 'float',
            'duplicationRatio' => 'string',
            'complexityCount' => 'int',
            'duplicatedLines' => 'int',
            'commentLines' => 'int',
            'commentRatio' => 'string',
            'duplicatedBlocks' => 'int',
            'lastExecTime' => 'string',
            'checkType' => 'string',
            'createdAt' => 'string',
            'cyclomaticComplexityPerMethod' => 'string',
            'cyclomaticComplexityPerFile' => 'string',
            'criticalCount' => 'string',
            'majorCount' => 'string',
            'minorCount' => 'string',
            'suggestionCount' => 'string',
            'isAccess' => 'string',
            'triggerType' => 'string',
            'fileDuplicationRatio' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支,如果是MR模式，为源分支
    * lastCheckTime  上一次检查时间
    * codeLineTotal  代码总行数
    * codeLine  代码有效行数
    * codeQuality  代码质量
    * issueCount  问题数
    * riskCoefficient  危险系数
    * duplicationRatio  重复比例
    * complexityCount  复杂度
    * duplicatedLines  重复行数
    * commentLines  注释行数
    * commentRatio  注释比例
    * duplicatedBlocks  重复块
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * cyclomaticComplexityPerMethod  代码平均复杂度
    * cyclomaticComplexityPerFile  代码平均复杂度(文件)
    * criticalCount  致命问题数
    * majorCount  严重问题数
    * minorCount  一般问题数
    * suggestionCount  提示问题数
    * isAccess  门禁质量是否通过
    * triggerType  任务触发方式
    * fileDuplicationRatio  文件重复率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'creatorId' => null,
        'gitUrl' => null,
        'gitBranch' => null,
        'lastCheckTime' => null,
        'codeLineTotal' => null,
        'codeLine' => null,
        'codeQuality' => null,
        'issueCount' => null,
        'riskCoefficient' => null,
        'duplicationRatio' => null,
        'complexityCount' => null,
        'duplicatedLines' => null,
        'commentLines' => null,
        'commentRatio' => null,
        'duplicatedBlocks' => null,
        'lastExecTime' => null,
        'checkType' => null,
        'createdAt' => null,
        'cyclomaticComplexityPerMethod' => null,
        'cyclomaticComplexityPerFile' => null,
        'criticalCount' => null,
        'majorCount' => null,
        'minorCount' => null,
        'suggestionCount' => null,
        'isAccess' => null,
        'triggerType' => null,
        'fileDuplicationRatio' => null
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
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支,如果是MR模式，为源分支
    * lastCheckTime  上一次检查时间
    * codeLineTotal  代码总行数
    * codeLine  代码有效行数
    * codeQuality  代码质量
    * issueCount  问题数
    * riskCoefficient  危险系数
    * duplicationRatio  重复比例
    * complexityCount  复杂度
    * duplicatedLines  重复行数
    * commentLines  注释行数
    * commentRatio  注释比例
    * duplicatedBlocks  重复块
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * cyclomaticComplexityPerMethod  代码平均复杂度
    * cyclomaticComplexityPerFile  代码平均复杂度(文件)
    * criticalCount  致命问题数
    * majorCount  严重问题数
    * minorCount  一般问题数
    * suggestionCount  提示问题数
    * isAccess  门禁质量是否通过
    * triggerType  任务触发方式
    * fileDuplicationRatio  文件重复率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'creatorId' => 'creator_id',
            'gitUrl' => 'git_url',
            'gitBranch' => 'git_branch',
            'lastCheckTime' => 'last_check_time',
            'codeLineTotal' => 'code_line_total',
            'codeLine' => 'code_line',
            'codeQuality' => 'code_quality',
            'issueCount' => 'issue_count',
            'riskCoefficient' => 'risk_coefficient',
            'duplicationRatio' => 'duplication_ratio',
            'complexityCount' => 'complexity_count',
            'duplicatedLines' => 'duplicated_lines',
            'commentLines' => 'comment_lines',
            'commentRatio' => 'comment_ratio',
            'duplicatedBlocks' => 'duplicated_blocks',
            'lastExecTime' => 'last_exec_time',
            'checkType' => 'check_type',
            'createdAt' => 'created_at',
            'cyclomaticComplexityPerMethod' => 'cyclomatic_complexity_per_method',
            'cyclomaticComplexityPerFile' => 'cyclomatic_complexity_per_file',
            'criticalCount' => 'critical_count',
            'majorCount' => 'major_count',
            'minorCount' => 'minor_count',
            'suggestionCount' => 'suggestion_count',
            'isAccess' => 'is_access',
            'triggerType' => 'trigger_type',
            'fileDuplicationRatio' => 'file_duplication_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支,如果是MR模式，为源分支
    * lastCheckTime  上一次检查时间
    * codeLineTotal  代码总行数
    * codeLine  代码有效行数
    * codeQuality  代码质量
    * issueCount  问题数
    * riskCoefficient  危险系数
    * duplicationRatio  重复比例
    * complexityCount  复杂度
    * duplicatedLines  重复行数
    * commentLines  注释行数
    * commentRatio  注释比例
    * duplicatedBlocks  重复块
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * cyclomaticComplexityPerMethod  代码平均复杂度
    * cyclomaticComplexityPerFile  代码平均复杂度(文件)
    * criticalCount  致命问题数
    * majorCount  严重问题数
    * minorCount  一般问题数
    * suggestionCount  提示问题数
    * isAccess  门禁质量是否通过
    * triggerType  任务触发方式
    * fileDuplicationRatio  文件重复率
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'creatorId' => 'setCreatorId',
            'gitUrl' => 'setGitUrl',
            'gitBranch' => 'setGitBranch',
            'lastCheckTime' => 'setLastCheckTime',
            'codeLineTotal' => 'setCodeLineTotal',
            'codeLine' => 'setCodeLine',
            'codeQuality' => 'setCodeQuality',
            'issueCount' => 'setIssueCount',
            'riskCoefficient' => 'setRiskCoefficient',
            'duplicationRatio' => 'setDuplicationRatio',
            'complexityCount' => 'setComplexityCount',
            'duplicatedLines' => 'setDuplicatedLines',
            'commentLines' => 'setCommentLines',
            'commentRatio' => 'setCommentRatio',
            'duplicatedBlocks' => 'setDuplicatedBlocks',
            'lastExecTime' => 'setLastExecTime',
            'checkType' => 'setCheckType',
            'createdAt' => 'setCreatedAt',
            'cyclomaticComplexityPerMethod' => 'setCyclomaticComplexityPerMethod',
            'cyclomaticComplexityPerFile' => 'setCyclomaticComplexityPerFile',
            'criticalCount' => 'setCriticalCount',
            'majorCount' => 'setMajorCount',
            'minorCount' => 'setMinorCount',
            'suggestionCount' => 'setSuggestionCount',
            'isAccess' => 'setIsAccess',
            'triggerType' => 'setTriggerType',
            'fileDuplicationRatio' => 'setFileDuplicationRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * taskName  任务名字
    * creatorId  创建者id
    * gitUrl  代码仓地址
    * gitBranch  代码仓分支,如果是MR模式，为源分支
    * lastCheckTime  上一次检查时间
    * codeLineTotal  代码总行数
    * codeLine  代码有效行数
    * codeQuality  代码质量
    * issueCount  问题数
    * riskCoefficient  危险系数
    * duplicationRatio  重复比例
    * complexityCount  复杂度
    * duplicatedLines  重复行数
    * commentLines  注释行数
    * commentRatio  注释比例
    * duplicatedBlocks  重复块
    * lastExecTime  上次执行时间
    * checkType  检查类型
    * createdAt  创建时间
    * cyclomaticComplexityPerMethod  代码平均复杂度
    * cyclomaticComplexityPerFile  代码平均复杂度(文件)
    * criticalCount  致命问题数
    * majorCount  严重问题数
    * minorCount  一般问题数
    * suggestionCount  提示问题数
    * isAccess  门禁质量是否通过
    * triggerType  任务触发方式
    * fileDuplicationRatio  文件重复率
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'creatorId' => 'getCreatorId',
            'gitUrl' => 'getGitUrl',
            'gitBranch' => 'getGitBranch',
            'lastCheckTime' => 'getLastCheckTime',
            'codeLineTotal' => 'getCodeLineTotal',
            'codeLine' => 'getCodeLine',
            'codeQuality' => 'getCodeQuality',
            'issueCount' => 'getIssueCount',
            'riskCoefficient' => 'getRiskCoefficient',
            'duplicationRatio' => 'getDuplicationRatio',
            'complexityCount' => 'getComplexityCount',
            'duplicatedLines' => 'getDuplicatedLines',
            'commentLines' => 'getCommentLines',
            'commentRatio' => 'getCommentRatio',
            'duplicatedBlocks' => 'getDuplicatedBlocks',
            'lastExecTime' => 'getLastExecTime',
            'checkType' => 'getCheckType',
            'createdAt' => 'getCreatedAt',
            'cyclomaticComplexityPerMethod' => 'getCyclomaticComplexityPerMethod',
            'cyclomaticComplexityPerFile' => 'getCyclomaticComplexityPerFile',
            'criticalCount' => 'getCriticalCount',
            'majorCount' => 'getMajorCount',
            'minorCount' => 'getMinorCount',
            'suggestionCount' => 'getSuggestionCount',
            'isAccess' => 'getIsAccess',
            'triggerType' => 'getTriggerType',
            'fileDuplicationRatio' => 'getFileDuplicationRatio'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['lastCheckTime'] = isset($data['lastCheckTime']) ? $data['lastCheckTime'] : null;
        $this->container['codeLineTotal'] = isset($data['codeLineTotal']) ? $data['codeLineTotal'] : null;
        $this->container['codeLine'] = isset($data['codeLine']) ? $data['codeLine'] : null;
        $this->container['codeQuality'] = isset($data['codeQuality']) ? $data['codeQuality'] : null;
        $this->container['issueCount'] = isset($data['issueCount']) ? $data['issueCount'] : null;
        $this->container['riskCoefficient'] = isset($data['riskCoefficient']) ? $data['riskCoefficient'] : null;
        $this->container['duplicationRatio'] = isset($data['duplicationRatio']) ? $data['duplicationRatio'] : null;
        $this->container['complexityCount'] = isset($data['complexityCount']) ? $data['complexityCount'] : null;
        $this->container['duplicatedLines'] = isset($data['duplicatedLines']) ? $data['duplicatedLines'] : null;
        $this->container['commentLines'] = isset($data['commentLines']) ? $data['commentLines'] : null;
        $this->container['commentRatio'] = isset($data['commentRatio']) ? $data['commentRatio'] : null;
        $this->container['duplicatedBlocks'] = isset($data['duplicatedBlocks']) ? $data['duplicatedBlocks'] : null;
        $this->container['lastExecTime'] = isset($data['lastExecTime']) ? $data['lastExecTime'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['cyclomaticComplexityPerMethod'] = isset($data['cyclomaticComplexityPerMethod']) ? $data['cyclomaticComplexityPerMethod'] : null;
        $this->container['cyclomaticComplexityPerFile'] = isset($data['cyclomaticComplexityPerFile']) ? $data['cyclomaticComplexityPerFile'] : null;
        $this->container['criticalCount'] = isset($data['criticalCount']) ? $data['criticalCount'] : null;
        $this->container['majorCount'] = isset($data['majorCount']) ? $data['majorCount'] : null;
        $this->container['minorCount'] = isset($data['minorCount']) ? $data['minorCount'] : null;
        $this->container['suggestionCount'] = isset($data['suggestionCount']) ? $data['suggestionCount'] : null;
        $this->container['isAccess'] = isset($data['isAccess']) ? $data['isAccess'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['fileDuplicationRatio'] = isset($data['fileDuplicationRatio']) ? $data['fileDuplicationRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets taskId
    *  任务id
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
    * @param string|null $taskId 任务id
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
    *  任务名字
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
    * @param string|null $taskName 任务名字
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者id
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建者id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets gitUrl
    *  代码仓地址
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl 代码仓地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitBranch
    *  代码仓分支,如果是MR模式，为源分支
    *
    * @return string|null
    */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
    * Sets gitBranch
    *
    * @param string|null $gitBranch 代码仓分支,如果是MR模式，为源分支
    *
    * @return $this
    */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;
        return $this;
    }

    /**
    * Gets lastCheckTime
    *  上一次检查时间
    *
    * @return string|null
    */
    public function getLastCheckTime()
    {
        return $this->container['lastCheckTime'];
    }

    /**
    * Sets lastCheckTime
    *
    * @param string|null $lastCheckTime 上一次检查时间
    *
    * @return $this
    */
    public function setLastCheckTime($lastCheckTime)
    {
        $this->container['lastCheckTime'] = $lastCheckTime;
        return $this;
    }

    /**
    * Gets codeLineTotal
    *  代码总行数
    *
    * @return int|null
    */
    public function getCodeLineTotal()
    {
        return $this->container['codeLineTotal'];
    }

    /**
    * Sets codeLineTotal
    *
    * @param int|null $codeLineTotal 代码总行数
    *
    * @return $this
    */
    public function setCodeLineTotal($codeLineTotal)
    {
        $this->container['codeLineTotal'] = $codeLineTotal;
        return $this;
    }

    /**
    * Gets codeLine
    *  代码有效行数
    *
    * @return int|null
    */
    public function getCodeLine()
    {
        return $this->container['codeLine'];
    }

    /**
    * Sets codeLine
    *
    * @param int|null $codeLine 代码有效行数
    *
    * @return $this
    */
    public function setCodeLine($codeLine)
    {
        $this->container['codeLine'] = $codeLine;
        return $this;
    }

    /**
    * Gets codeQuality
    *  代码质量
    *
    * @return float|null
    */
    public function getCodeQuality()
    {
        return $this->container['codeQuality'];
    }

    /**
    * Sets codeQuality
    *
    * @param float|null $codeQuality 代码质量
    *
    * @return $this
    */
    public function setCodeQuality($codeQuality)
    {
        $this->container['codeQuality'] = $codeQuality;
        return $this;
    }

    /**
    * Gets issueCount
    *  问题数
    *
    * @return int|null
    */
    public function getIssueCount()
    {
        return $this->container['issueCount'];
    }

    /**
    * Sets issueCount
    *
    * @param int|null $issueCount 问题数
    *
    * @return $this
    */
    public function setIssueCount($issueCount)
    {
        $this->container['issueCount'] = $issueCount;
        return $this;
    }

    /**
    * Gets riskCoefficient
    *  危险系数
    *
    * @return float|null
    */
    public function getRiskCoefficient()
    {
        return $this->container['riskCoefficient'];
    }

    /**
    * Sets riskCoefficient
    *
    * @param float|null $riskCoefficient 危险系数
    *
    * @return $this
    */
    public function setRiskCoefficient($riskCoefficient)
    {
        $this->container['riskCoefficient'] = $riskCoefficient;
        return $this;
    }

    /**
    * Gets duplicationRatio
    *  重复比例
    *
    * @return string|null
    */
    public function getDuplicationRatio()
    {
        return $this->container['duplicationRatio'];
    }

    /**
    * Sets duplicationRatio
    *
    * @param string|null $duplicationRatio 重复比例
    *
    * @return $this
    */
    public function setDuplicationRatio($duplicationRatio)
    {
        $this->container['duplicationRatio'] = $duplicationRatio;
        return $this;
    }

    /**
    * Gets complexityCount
    *  复杂度
    *
    * @return int|null
    */
    public function getComplexityCount()
    {
        return $this->container['complexityCount'];
    }

    /**
    * Sets complexityCount
    *
    * @param int|null $complexityCount 复杂度
    *
    * @return $this
    */
    public function setComplexityCount($complexityCount)
    {
        $this->container['complexityCount'] = $complexityCount;
        return $this;
    }

    /**
    * Gets duplicatedLines
    *  重复行数
    *
    * @return int|null
    */
    public function getDuplicatedLines()
    {
        return $this->container['duplicatedLines'];
    }

    /**
    * Sets duplicatedLines
    *
    * @param int|null $duplicatedLines 重复行数
    *
    * @return $this
    */
    public function setDuplicatedLines($duplicatedLines)
    {
        $this->container['duplicatedLines'] = $duplicatedLines;
        return $this;
    }

    /**
    * Gets commentLines
    *  注释行数
    *
    * @return int|null
    */
    public function getCommentLines()
    {
        return $this->container['commentLines'];
    }

    /**
    * Sets commentLines
    *
    * @param int|null $commentLines 注释行数
    *
    * @return $this
    */
    public function setCommentLines($commentLines)
    {
        $this->container['commentLines'] = $commentLines;
        return $this;
    }

    /**
    * Gets commentRatio
    *  注释比例
    *
    * @return string|null
    */
    public function getCommentRatio()
    {
        return $this->container['commentRatio'];
    }

    /**
    * Sets commentRatio
    *
    * @param string|null $commentRatio 注释比例
    *
    * @return $this
    */
    public function setCommentRatio($commentRatio)
    {
        $this->container['commentRatio'] = $commentRatio;
        return $this;
    }

    /**
    * Gets duplicatedBlocks
    *  重复块
    *
    * @return int|null
    */
    public function getDuplicatedBlocks()
    {
        return $this->container['duplicatedBlocks'];
    }

    /**
    * Sets duplicatedBlocks
    *
    * @param int|null $duplicatedBlocks 重复块
    *
    * @return $this
    */
    public function setDuplicatedBlocks($duplicatedBlocks)
    {
        $this->container['duplicatedBlocks'] = $duplicatedBlocks;
        return $this;
    }

    /**
    * Gets lastExecTime
    *  上次执行时间
    *
    * @return string|null
    */
    public function getLastExecTime()
    {
        return $this->container['lastExecTime'];
    }

    /**
    * Sets lastExecTime
    *
    * @param string|null $lastExecTime 上次执行时间
    *
    * @return $this
    */
    public function setLastExecTime($lastExecTime)
    {
        $this->container['lastExecTime'] = $lastExecTime;
        return $this;
    }

    /**
    * Gets checkType
    *  检查类型
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType 检查类型
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
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
    * Gets cyclomaticComplexityPerMethod
    *  代码平均复杂度
    *
    * @return string|null
    */
    public function getCyclomaticComplexityPerMethod()
    {
        return $this->container['cyclomaticComplexityPerMethod'];
    }

    /**
    * Sets cyclomaticComplexityPerMethod
    *
    * @param string|null $cyclomaticComplexityPerMethod 代码平均复杂度
    *
    * @return $this
    */
    public function setCyclomaticComplexityPerMethod($cyclomaticComplexityPerMethod)
    {
        $this->container['cyclomaticComplexityPerMethod'] = $cyclomaticComplexityPerMethod;
        return $this;
    }

    /**
    * Gets cyclomaticComplexityPerFile
    *  代码平均复杂度(文件)
    *
    * @return string|null
    */
    public function getCyclomaticComplexityPerFile()
    {
        return $this->container['cyclomaticComplexityPerFile'];
    }

    /**
    * Sets cyclomaticComplexityPerFile
    *
    * @param string|null $cyclomaticComplexityPerFile 代码平均复杂度(文件)
    *
    * @return $this
    */
    public function setCyclomaticComplexityPerFile($cyclomaticComplexityPerFile)
    {
        $this->container['cyclomaticComplexityPerFile'] = $cyclomaticComplexityPerFile;
        return $this;
    }

    /**
    * Gets criticalCount
    *  致命问题数
    *
    * @return string|null
    */
    public function getCriticalCount()
    {
        return $this->container['criticalCount'];
    }

    /**
    * Sets criticalCount
    *
    * @param string|null $criticalCount 致命问题数
    *
    * @return $this
    */
    public function setCriticalCount($criticalCount)
    {
        $this->container['criticalCount'] = $criticalCount;
        return $this;
    }

    /**
    * Gets majorCount
    *  严重问题数
    *
    * @return string|null
    */
    public function getMajorCount()
    {
        return $this->container['majorCount'];
    }

    /**
    * Sets majorCount
    *
    * @param string|null $majorCount 严重问题数
    *
    * @return $this
    */
    public function setMajorCount($majorCount)
    {
        $this->container['majorCount'] = $majorCount;
        return $this;
    }

    /**
    * Gets minorCount
    *  一般问题数
    *
    * @return string|null
    */
    public function getMinorCount()
    {
        return $this->container['minorCount'];
    }

    /**
    * Sets minorCount
    *
    * @param string|null $minorCount 一般问题数
    *
    * @return $this
    */
    public function setMinorCount($minorCount)
    {
        $this->container['minorCount'] = $minorCount;
        return $this;
    }

    /**
    * Gets suggestionCount
    *  提示问题数
    *
    * @return string|null
    */
    public function getSuggestionCount()
    {
        return $this->container['suggestionCount'];
    }

    /**
    * Sets suggestionCount
    *
    * @param string|null $suggestionCount 提示问题数
    *
    * @return $this
    */
    public function setSuggestionCount($suggestionCount)
    {
        $this->container['suggestionCount'] = $suggestionCount;
        return $this;
    }

    /**
    * Gets isAccess
    *  门禁质量是否通过
    *
    * @return string|null
    */
    public function getIsAccess()
    {
        return $this->container['isAccess'];
    }

    /**
    * Sets isAccess
    *
    * @param string|null $isAccess 门禁质量是否通过
    *
    * @return $this
    */
    public function setIsAccess($isAccess)
    {
        $this->container['isAccess'] = $isAccess;
        return $this;
    }

    /**
    * Gets triggerType
    *  任务触发方式
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 任务触发方式
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets fileDuplicationRatio
    *  文件重复率
    *
    * @return string|null
    */
    public function getFileDuplicationRatio()
    {
        return $this->container['fileDuplicationRatio'];
    }

    /**
    * Sets fileDuplicationRatio
    *
    * @param string|null $fileDuplicationRatio 文件重复率
    *
    * @return $this
    */
    public function setFileDuplicationRatio($fileDuplicationRatio)
    {
        $this->container['fileDuplicationRatio'] = $fileDuplicationRatio;
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

