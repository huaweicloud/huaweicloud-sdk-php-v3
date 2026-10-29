<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefectInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefectInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defectId  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    * defectCheckerName  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    * defectOwner  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    * ruleSystemTags  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    * ruleId  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    * ruleName  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * lineNumber  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * defectContent  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * defectLevel  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    * filePath  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * issueKey  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * fragment  **参数解释：** 代码片段内容。
    * events  **参数解释：** 调用链信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defectId' => 'string',
            'defectCheckerName' => 'string',
            'defectStatus' => 'string',
            'defectOwner' => 'string',
            'ruleSystemTags' => 'string',
            'ruleId' => 'string',
            'ruleName' => 'string',
            'lineNumber' => 'string',
            'defectContent' => 'string',
            'defectLevel' => 'string',
            'filePath' => 'string',
            'createdAt' => 'string',
            'issueKey' => 'string',
            'fragment' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectFragmentV2[]',
            'events' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defectId  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    * defectCheckerName  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    * defectOwner  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    * ruleSystemTags  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    * ruleId  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    * ruleName  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * lineNumber  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * defectContent  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * defectLevel  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    * filePath  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * issueKey  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * fragment  **参数解释：** 代码片段内容。
    * events  **参数解释：** 调用链信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defectId' => null,
        'defectCheckerName' => null,
        'defectStatus' => null,
        'defectOwner' => null,
        'ruleSystemTags' => null,
        'ruleId' => null,
        'ruleName' => null,
        'lineNumber' => null,
        'defectContent' => null,
        'defectLevel' => null,
        'filePath' => null,
        'createdAt' => null,
        'issueKey' => null,
        'fragment' => null,
        'events' => null
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
    * defectId  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    * defectCheckerName  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    * defectOwner  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    * ruleSystemTags  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    * ruleId  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    * ruleName  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * lineNumber  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * defectContent  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * defectLevel  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    * filePath  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * issueKey  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * fragment  **参数解释：** 代码片段内容。
    * events  **参数解释：** 调用链信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defectId' => 'defect_id',
            'defectCheckerName' => 'defect_checker_name',
            'defectStatus' => 'defect_status',
            'defectOwner' => 'defect_owner',
            'ruleSystemTags' => 'rule_system_tags',
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'lineNumber' => 'line_number',
            'defectContent' => 'defect_content',
            'defectLevel' => 'defect_level',
            'filePath' => 'file_path',
            'createdAt' => 'created_at',
            'issueKey' => 'issue_key',
            'fragment' => 'fragment',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defectId  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    * defectCheckerName  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    * defectOwner  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    * ruleSystemTags  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    * ruleId  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    * ruleName  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * lineNumber  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * defectContent  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * defectLevel  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    * filePath  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * issueKey  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * fragment  **参数解释：** 代码片段内容。
    * events  **参数解释：** 调用链信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'defectId' => 'setDefectId',
            'defectCheckerName' => 'setDefectCheckerName',
            'defectStatus' => 'setDefectStatus',
            'defectOwner' => 'setDefectOwner',
            'ruleSystemTags' => 'setRuleSystemTags',
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'lineNumber' => 'setLineNumber',
            'defectContent' => 'setDefectContent',
            'defectLevel' => 'setDefectLevel',
            'filePath' => 'setFilePath',
            'createdAt' => 'setCreatedAt',
            'issueKey' => 'setIssueKey',
            'fragment' => 'setFragment',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defectId  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    * defectCheckerName  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * defectStatus  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    * defectOwner  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    * ruleSystemTags  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    * ruleId  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    * ruleName  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    * lineNumber  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    * defectContent  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    * defectLevel  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    * filePath  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    * createdAt  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    * issueKey  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * fragment  **参数解释：** 代码片段内容。
    * events  **参数解释：** 调用链信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'defectId' => 'getDefectId',
            'defectCheckerName' => 'getDefectCheckerName',
            'defectStatus' => 'getDefectStatus',
            'defectOwner' => 'getDefectOwner',
            'ruleSystemTags' => 'getRuleSystemTags',
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'lineNumber' => 'getLineNumber',
            'defectContent' => 'getDefectContent',
            'defectLevel' => 'getDefectLevel',
            'filePath' => 'getFilePath',
            'createdAt' => 'getCreatedAt',
            'issueKey' => 'getIssueKey',
            'fragment' => 'getFragment',
            'events' => 'getEvents'
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
        $this->container['defectId'] = isset($data['defectId']) ? $data['defectId'] : null;
        $this->container['defectCheckerName'] = isset($data['defectCheckerName']) ? $data['defectCheckerName'] : null;
        $this->container['defectStatus'] = isset($data['defectStatus']) ? $data['defectStatus'] : null;
        $this->container['defectOwner'] = isset($data['defectOwner']) ? $data['defectOwner'] : null;
        $this->container['ruleSystemTags'] = isset($data['ruleSystemTags']) ? $data['ruleSystemTags'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['lineNumber'] = isset($data['lineNumber']) ? $data['lineNumber'] : null;
        $this->container['defectContent'] = isset($data['defectContent']) ? $data['defectContent'] : null;
        $this->container['defectLevel'] = isset($data['defectLevel']) ? $data['defectLevel'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['issueKey'] = isset($data['issueKey']) ? $data['issueKey'] : null;
        $this->container['fragment'] = isset($data['fragment']) ? $data['fragment'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
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
    * Gets defectId
    *  **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectId()
    {
        return $this->container['defectId'];
    }

    /**
    * Sets defectId
    *
    * @param string|null $defectId **参数解释：** MergeKey，问题ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDefectId($defectId)
    {
        $this->container['defectId'] = $defectId;
        return $this;
    }

    /**
    * Gets defectCheckerName
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectCheckerName()
    {
        return $this->container['defectCheckerName'];
    }

    /**
    * Sets defectCheckerName
    *
    * @param string|null $defectCheckerName **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDefectCheckerName($defectCheckerName)
    {
        $this->container['defectCheckerName'] = $defectCheckerName;
        return $this;
    }

    /**
    * Gets defectStatus
    *  **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    *
    * @return string|null
    */
    public function getDefectStatus()
    {
        return $this->container['defectStatus'];
    }

    /**
    * Sets defectStatus
    *
    * @param string|null $defectStatus **参数解释：** 问题状态。 **取值范围：** - 0：待处理。 - 1：已解决。 - 2：已忽略。 [- 3：重新打开（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm) [- 4：待审核（需打开忽略审核开关）。](tag:fcs,hcs,hcs_sm,hcs_site,hcs_sitesm)
    *
    * @return $this
    */
    public function setDefectStatus($defectStatus)
    {
        $this->container['defectStatus'] = $defectStatus;
        return $this;
    }

    /**
    * Gets defectOwner
    *  **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectOwner()
    {
        return $this->container['defectOwner'];
    }

    /**
    * Sets defectOwner
    *
    * @param string|null $defectOwner **参数解释：** 问题责任人。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDefectOwner($defectOwner)
    {
        $this->container['defectOwner'] = $defectOwner;
        return $this;
    }

    /**
    * Gets ruleSystemTags
    *  **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRuleSystemTags()
    {
        return $this->container['ruleSystemTags'];
    }

    /**
    * Sets ruleSystemTags
    *
    * @param string|null $ruleSystemTags **参数解释：** 标签，多个标签用逗号隔开。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRuleSystemTags($ruleSystemTags)
    {
        $this->container['ruleSystemTags'] = $ruleSystemTags;
        return $this;
    }

    /**
    * Gets ruleId
    *  **参数解释：** 规则ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId **参数解释：** 规则ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  **参数解释：** 规则名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数解释：** 规则名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets lineNumber
    *  **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
    * Sets lineNumber
    *
    * @param string|null $lineNumber **参数解释：** 问题所在文件行号。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLineNumber($lineNumber)
    {
        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
    * Gets defectContent
    *  **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDefectContent()
    {
        return $this->container['defectContent'];
    }

    /**
    * Sets defectContent
    *
    * @param string|null $defectContent **参数解释：** 问题详细描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDefectContent($defectContent)
    {
        $this->container['defectContent'] = $defectContent;
        return $this;
    }

    /**
    * Gets defectLevel
    *  **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    *
    * @return string|null
    */
    public function getDefectLevel()
    {
        return $this->container['defectLevel'];
    }

    /**
    * Sets defectLevel
    *
    * @param string|null $defectLevel **参数解释：** 问题级别。 **取值范围：** - 0：致命。 - 1：严重。 - 2：一般。 - 3：提示。
    *
    * @return $this
    */
    public function setDefectLevel($defectLevel)
    {
        $this->container['defectLevel'] = $defectLevel;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
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
    * @param string|null $filePath **参数解释：** 问题文件路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
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
    * @param string|null $createdAt **参数解释：** 问题发现时间。使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ。例如：2020-09-25T12:05:00Z。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets issueKey
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getIssueKey()
    {
        return $this->container['issueKey'];
    }

    /**
    * Sets issueKey
    *
    * @param string|null $issueKey **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIssueKey($issueKey)
    {
        $this->container['issueKey'] = $issueKey;
        return $this;
    }

    /**
    * Gets fragment
    *  **参数解释：** 代码片段内容。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectFragmentV2[]|null
    */
    public function getFragment()
    {
        return $this->container['fragment'];
    }

    /**
    * Sets fragment
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectFragmentV2[]|null $fragment **参数解释：** 代码片段内容。
    *
    * @return $this
    */
    public function setFragment($fragment)
    {
        $this->container['fragment'] = $fragment;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释：** 调用链信息。
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\DefectEvents[]|null $events **参数解释：** 调用链信息。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
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

