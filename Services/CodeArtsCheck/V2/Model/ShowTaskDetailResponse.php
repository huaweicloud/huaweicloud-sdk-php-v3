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
    * taskId  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
    * lastCheckTime  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * codeLineTotal  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
    * codeLine  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
    * codeQuality  **参数解释：** 代码质量。 **取值范围：** 不涉及。
    * issueCount  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
    * riskCoefficient  **参数解释：** 危险系数。 **取值范围：** 不涉及。
    * duplicationRatio  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
    * complexityCount  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
    * duplicatedLines  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
    * commentLines  **参数解释：** 注释行数。 **取值范围：** 不涉及。
    * commentRatio  **参数解释：** 注释率。 **取值范围：** 不涉及。
    * duplicatedBlocks  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
    * lastExecTime  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * checkType  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerMethod  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerFile  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
    * criticalCount  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * majorCount  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * minorCount  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * suggestionCount  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * isAccess  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    * reviewResult  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    * triggerType  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
    * fileDuplicationRatio  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    * newCount  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * solveCount  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    * dismissedCount  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    * duplicatedFiles  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    * newCriticalCount  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMajorCount  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMinorCount  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newSuggestionCount  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
            'reviewResult' => 'string',
            'triggerType' => 'string',
            'fileDuplicationRatio' => 'string',
            'newCount' => 'int',
            'solveCount' => 'int',
            'dismissedCount' => 'int',
            'duplicatedFiles' => 'int',
            'newCriticalCount' => 'string',
            'newMajorCount' => 'string',
            'newMinorCount' => 'string',
            'newSuggestionCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
    * lastCheckTime  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * codeLineTotal  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
    * codeLine  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
    * codeQuality  **参数解释：** 代码质量。 **取值范围：** 不涉及。
    * issueCount  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
    * riskCoefficient  **参数解释：** 危险系数。 **取值范围：** 不涉及。
    * duplicationRatio  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
    * complexityCount  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
    * duplicatedLines  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
    * commentLines  **参数解释：** 注释行数。 **取值范围：** 不涉及。
    * commentRatio  **参数解释：** 注释率。 **取值范围：** 不涉及。
    * duplicatedBlocks  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
    * lastExecTime  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * checkType  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerMethod  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerFile  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
    * criticalCount  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * majorCount  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * minorCount  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * suggestionCount  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * isAccess  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    * reviewResult  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    * triggerType  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
    * fileDuplicationRatio  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    * newCount  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * solveCount  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    * dismissedCount  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    * duplicatedFiles  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    * newCriticalCount  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMajorCount  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMinorCount  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newSuggestionCount  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
        'reviewResult' => null,
        'triggerType' => null,
        'fileDuplicationRatio' => null,
        'newCount' => null,
        'solveCount' => null,
        'dismissedCount' => null,
        'duplicatedFiles' => null,
        'newCriticalCount' => null,
        'newMajorCount' => null,
        'newMinorCount' => null,
        'newSuggestionCount' => null
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
    * taskId  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
    * lastCheckTime  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * codeLineTotal  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
    * codeLine  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
    * codeQuality  **参数解释：** 代码质量。 **取值范围：** 不涉及。
    * issueCount  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
    * riskCoefficient  **参数解释：** 危险系数。 **取值范围：** 不涉及。
    * duplicationRatio  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
    * complexityCount  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
    * duplicatedLines  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
    * commentLines  **参数解释：** 注释行数。 **取值范围：** 不涉及。
    * commentRatio  **参数解释：** 注释率。 **取值范围：** 不涉及。
    * duplicatedBlocks  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
    * lastExecTime  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * checkType  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerMethod  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerFile  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
    * criticalCount  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * majorCount  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * minorCount  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * suggestionCount  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * isAccess  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    * reviewResult  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    * triggerType  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
    * fileDuplicationRatio  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    * newCount  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * solveCount  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    * dismissedCount  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    * duplicatedFiles  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    * newCriticalCount  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMajorCount  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMinorCount  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newSuggestionCount  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
            'reviewResult' => 'review_result',
            'triggerType' => 'trigger_type',
            'fileDuplicationRatio' => 'file_duplication_ratio',
            'newCount' => 'new_count',
            'solveCount' => 'solve_count',
            'dismissedCount' => 'dismissed_count',
            'duplicatedFiles' => 'duplicated_files',
            'newCriticalCount' => 'new_critical_count',
            'newMajorCount' => 'new_major_count',
            'newMinorCount' => 'new_minor_count',
            'newSuggestionCount' => 'new_suggestion_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
    * lastCheckTime  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * codeLineTotal  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
    * codeLine  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
    * codeQuality  **参数解释：** 代码质量。 **取值范围：** 不涉及。
    * issueCount  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
    * riskCoefficient  **参数解释：** 危险系数。 **取值范围：** 不涉及。
    * duplicationRatio  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
    * complexityCount  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
    * duplicatedLines  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
    * commentLines  **参数解释：** 注释行数。 **取值范围：** 不涉及。
    * commentRatio  **参数解释：** 注释率。 **取值范围：** 不涉及。
    * duplicatedBlocks  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
    * lastExecTime  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * checkType  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerMethod  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerFile  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
    * criticalCount  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * majorCount  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * minorCount  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * suggestionCount  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * isAccess  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    * reviewResult  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    * triggerType  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
    * fileDuplicationRatio  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    * newCount  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * solveCount  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    * dismissedCount  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    * duplicatedFiles  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    * newCriticalCount  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMajorCount  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMinorCount  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newSuggestionCount  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
            'reviewResult' => 'setReviewResult',
            'triggerType' => 'setTriggerType',
            'fileDuplicationRatio' => 'setFileDuplicationRatio',
            'newCount' => 'setNewCount',
            'solveCount' => 'setSolveCount',
            'dismissedCount' => 'setDismissedCount',
            'duplicatedFiles' => 'setDuplicatedFiles',
            'newCriticalCount' => 'setNewCriticalCount',
            'newMajorCount' => 'setNewMajorCount',
            'newMinorCount' => 'setNewMinorCount',
            'newSuggestionCount' => 'setNewSuggestionCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
    * taskName  **参数解释：** 任务名称。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
    * gitUrl  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
    * gitBranch  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
    * lastCheckTime  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * codeLineTotal  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
    * codeLine  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
    * codeQuality  **参数解释：** 代码质量。 **取值范围：** 不涉及。
    * issueCount  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
    * riskCoefficient  **参数解释：** 危险系数。 **取值范围：** 不涉及。
    * duplicationRatio  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
    * complexityCount  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
    * duplicatedLines  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
    * commentLines  **参数解释：** 注释行数。 **取值范围：** 不涉及。
    * commentRatio  **参数解释：** 注释率。 **取值范围：** 不涉及。
    * duplicatedBlocks  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
    * lastExecTime  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * checkType  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerMethod  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
    * cyclomaticComplexityPerFile  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
    * criticalCount  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * majorCount  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * minorCount  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * suggestionCount  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * isAccess  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    * reviewResult  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    * triggerType  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
    * fileDuplicationRatio  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    * newCount  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * solveCount  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    * dismissedCount  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    * duplicatedFiles  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    * newCriticalCount  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMajorCount  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newMinorCount  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    * newSuggestionCount  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
            'reviewResult' => 'getReviewResult',
            'triggerType' => 'getTriggerType',
            'fileDuplicationRatio' => 'getFileDuplicationRatio',
            'newCount' => 'getNewCount',
            'solveCount' => 'getSolveCount',
            'dismissedCount' => 'getDismissedCount',
            'duplicatedFiles' => 'getDuplicatedFiles',
            'newCriticalCount' => 'getNewCriticalCount',
            'newMajorCount' => 'getNewMajorCount',
            'newMinorCount' => 'getNewMinorCount',
            'newSuggestionCount' => 'getNewSuggestionCount'
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
        $this->container['reviewResult'] = isset($data['reviewResult']) ? $data['reviewResult'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['fileDuplicationRatio'] = isset($data['fileDuplicationRatio']) ? $data['fileDuplicationRatio'] : null;
        $this->container['newCount'] = isset($data['newCount']) ? $data['newCount'] : null;
        $this->container['solveCount'] = isset($data['solveCount']) ? $data['solveCount'] : null;
        $this->container['dismissedCount'] = isset($data['dismissedCount']) ? $data['dismissedCount'] : null;
        $this->container['duplicatedFiles'] = isset($data['duplicatedFiles']) ? $data['duplicatedFiles'] : null;
        $this->container['newCriticalCount'] = isset($data['newCriticalCount']) ? $data['newCriticalCount'] : null;
        $this->container['newMajorCount'] = isset($data['newMajorCount']) ? $data['newMajorCount'] : null;
        $this->container['newMinorCount'] = isset($data['newMinorCount']) ? $data['newMinorCount'] : null;
        $this->container['newSuggestionCount'] = isset($data['newSuggestionCount']) ? $data['newSuggestionCount'] : null;
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
    *  **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
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
    * @param string|null $taskId **参数解释：** 旧版任务ID。即新建检查任务接口的返回值，每个代码检查任务及其下的分支任务、通过API创建的增量任务都有唯一的任务ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 任务名称。 **取值范围：** 不涉及。
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
    * @param string|null $taskName **参数解释：** 任务名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
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
    * @param string|null $creatorId **参数解释：** 任务创建者用户ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
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
    * @param string|null $gitUrl **参数解释：** 代码仓地址。 **取值范围：** 不涉及。
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
    *  **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
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
    * @param string|null $gitBranch **参数解释：** 代码仓分支，如果是MR模式，为源分支。 **取值范围：** 不涉及。
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
    *  **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    * @param string|null $lastCheckTime **参数解释：** 上一次检查时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    *  **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
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
    * @param int|null $codeLineTotal **参数解释：** 原始代码行数，包含空行和注释行。 **取值范围：** 不涉及。
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
    *  **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
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
    * @param int|null $codeLine **参数解释：** 有效代码行数，不包含空行和注释行。 **取值范围：** 不涉及。
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
    *  **参数解释：** 代码质量。 **取值范围：** 不涉及。
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
    * @param float|null $codeQuality **参数解释：** 代码质量。 **取值范围：** 不涉及。
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
    *  **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
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
    * @param int|null $issueCount **参数解释：** [待处理问题数。](tag:hws,hws_hk)[待处理和重新打开（需打开忽略审核开关）问题数。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) **取值范围：** 不涉及。
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
    *  **参数解释：** 危险系数。 **取值范围：** 不涉及。
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
    * @param float|null $riskCoefficient **参数解释：** 危险系数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 代码重复率。 **取值范围：** 不涉及。
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
    * @param string|null $duplicationRatio **参数解释：** 代码重复率。 **取值范围：** 不涉及。
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
    *  **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
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
    * @param int|null $complexityCount **参数解释：** 圈复杂度总数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
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
    * @param int|null $duplicatedLines **参数解释：** 重复行数总数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 注释行数。 **取值范围：** 不涉及。
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
    * @param int|null $commentLines **参数解释：** 注释行数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 注释率。 **取值范围：** 不涉及。
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
    * @param string|null $commentRatio **参数解释：** 注释率。 **取值范围：** 不涉及。
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
    *  **参数解释：** 重复块个数。 **取值范围：** 不涉及。
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
    * @param int|null $duplicatedBlocks **参数解释：** 重复块个数。 **取值范围：** 不涉及。
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
    *  **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    * @param string|null $lastExecTime **参数解释：** 上一次执行时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    *  **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
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
    * @param string|null $checkType **参数解释：** 废弃字段。 **约束限制：** 不涉及。 **取值范围：** 不涉及。
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
    *  **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 创建时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    *  **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
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
    * @param string|null $cyclomaticComplexityPerMethod **参数解释：** 平均圈复杂度（方法）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
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
    * @param string|null $cyclomaticComplexityPerFile **参数解释：** 平均圈复杂度（文件）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    * @param string|null $criticalCount **参数解释：** 致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    *  **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    * @param string|null $majorCount **参数解释：** 严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    *  **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    * @param string|null $minorCount **参数解释：** 一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    *  **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    * @param string|null $suggestionCount **参数解释：** 提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
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
    *  **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
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
    * @param string|null $isAccess **参数解释：** 门禁质量是否通过。 **取值范围：** - 1：门禁通过。 - 0：门禁不通过。
    *
    * @return $this
    */
    public function setIsAccess($isAccess)
    {
        $this->container['isAccess'] = $isAccess;
        return $this;
    }

    /**
    * Gets reviewResult
    *  **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getReviewResult()
    {
        return $this->container['reviewResult'];
    }

    /**
    * Sets reviewResult
    *
    * @param string|null $reviewResult **参数解释：** 门禁质量是否通过。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setReviewResult($reviewResult)
    {
        $this->container['reviewResult'] = $reviewResult;
        return $this;
    }

    /**
    * Gets triggerType
    *  **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
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
    * @param string|null $triggerType **参数解释：** 任务触发方式。 **取值范围：** - 0：手动触发。 - 1：定时触发。 - 2：代码提交触发。 - 3：合并请求触发。
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
    *  **参数解释：** 文件重复率。 **取值范围：** 不涉及。
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
    * @param string|null $fileDuplicationRatio **参数解释：** 文件重复率。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFileDuplicationRatio($fileDuplicationRatio)
    {
        $this->container['fileDuplicationRatio'] = $fileDuplicationRatio;
        return $this;
    }

    /**
    * Gets newCount
    *  **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getNewCount()
    {
        return $this->container['newCount'];
    }

    /**
    * Sets newCount
    *
    * @param int|null $newCount **参数解释：** 新发现问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNewCount($newCount)
    {
        $this->container['newCount'] = $newCount;
        return $this;
    }

    /**
    * Gets solveCount
    *  **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getSolveCount()
    {
        return $this->container['solveCount'];
    }

    /**
    * Sets solveCount
    *
    * @param int|null $solveCount **参数解释：** 已解决和已修复问题数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSolveCount($solveCount)
    {
        $this->container['solveCount'] = $solveCount;
        return $this;
    }

    /**
    * Gets dismissedCount
    *  **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDismissedCount()
    {
        return $this->container['dismissedCount'];
    }

    /**
    * Sets dismissedCount
    *
    * @param int|null $dismissedCount **参数解释：** 已忽略问题数。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDismissedCount($dismissedCount)
    {
        $this->container['dismissedCount'] = $dismissedCount;
        return $this;
    }

    /**
    * Gets duplicatedFiles
    *  **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getDuplicatedFiles()
    {
        return $this->container['duplicatedFiles'];
    }

    /**
    * Sets duplicatedFiles
    *
    * @param int|null $duplicatedFiles **参数解释：** 重复文件数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDuplicatedFiles($duplicatedFiles)
    {
        $this->container['duplicatedFiles'] = $duplicatedFiles;
        return $this;
    }

    /**
    * Gets newCriticalCount
    *  **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNewCriticalCount()
    {
        return $this->container['newCriticalCount'];
    }

    /**
    * Sets newCriticalCount
    *
    * @param string|null $newCriticalCount **参数解释：** 新增致命问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNewCriticalCount($newCriticalCount)
    {
        $this->container['newCriticalCount'] = $newCriticalCount;
        return $this;
    }

    /**
    * Gets newMajorCount
    *  **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNewMajorCount()
    {
        return $this->container['newMajorCount'];
    }

    /**
    * Sets newMajorCount
    *
    * @param string|null $newMajorCount **参数解释：** 新增严重问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNewMajorCount($newMajorCount)
    {
        $this->container['newMajorCount'] = $newMajorCount;
        return $this;
    }

    /**
    * Gets newMinorCount
    *  **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNewMinorCount()
    {
        return $this->container['newMinorCount'];
    }

    /**
    * Sets newMinorCount
    *
    * @param string|null $newMinorCount **参数解释：** 新增一般问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNewMinorCount($newMinorCount)
    {
        $this->container['newMinorCount'] = $newMinorCount;
        return $this;
    }

    /**
    * Gets newSuggestionCount
    *  **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getNewSuggestionCount()
    {
        return $this->container['newSuggestionCount'];
    }

    /**
    * Sets newSuggestionCount
    *
    * @param string|null $newSuggestionCount **参数解释：** 新增提示问题数。不包括已忽略和已修复问题。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNewSuggestionCount($newSuggestionCount)
    {
        $this->container['newSuggestionCount'] = $newSuggestionCount;
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

