<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAlertRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAlertRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipeId  数据管道 ID。Pipe ID.
    * ruleName  告警规则名称。Alert rule name.
    * description  描述。Description.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * alertType  告警类型。Alert type.
    * eventGrouping  告警分组。Event grouping.
    * suspression  告警抑制。Suspression.
    * simulation  模拟告警。Simulation.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * pipeName  管道名称
    * alertName  告警名称
    * alertDescription  告警描述
    * alertRemediation  修复建议
    * accumulatedTimes  执行次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipeId' => 'string',
            'ruleName' => 'string',
            'description' => 'string',
            'query' => 'string',
            'queryType' => 'string',
            'status' => 'string',
            'severity' => 'string',
            'customProperties' => 'map[string,string]',
            'alertType' => 'map[string,string]',
            'eventGrouping' => 'bool',
            'suspression' => 'bool',
            'simulation' => 'bool',
            'schedule' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Schedule',
            'triggers' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]',
            'pipeName' => 'string',
            'alertName' => 'string',
            'alertDescription' => 'string',
            'alertRemediation' => 'string',
            'accumulatedTimes' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipeId  数据管道 ID。Pipe ID.
    * ruleName  告警规则名称。Alert rule name.
    * description  描述。Description.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * alertType  告警类型。Alert type.
    * eventGrouping  告警分组。Event grouping.
    * suspression  告警抑制。Suspression.
    * simulation  模拟告警。Simulation.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * pipeName  管道名称
    * alertName  告警名称
    * alertDescription  告警描述
    * alertRemediation  修复建议
    * accumulatedTimes  执行次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipeId' => null,
        'ruleName' => null,
        'description' => null,
        'query' => null,
        'queryType' => null,
        'status' => null,
        'severity' => null,
        'customProperties' => null,
        'alertType' => null,
        'eventGrouping' => null,
        'suspression' => null,
        'simulation' => null,
        'schedule' => null,
        'triggers' => null,
        'pipeName' => null,
        'alertName' => null,
        'alertDescription' => null,
        'alertRemediation' => null,
        'accumulatedTimes' => 'int32'
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
    * pipeId  数据管道 ID。Pipe ID.
    * ruleName  告警规则名称。Alert rule name.
    * description  描述。Description.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * alertType  告警类型。Alert type.
    * eventGrouping  告警分组。Event grouping.
    * suspression  告警抑制。Suspression.
    * simulation  模拟告警。Simulation.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * pipeName  管道名称
    * alertName  告警名称
    * alertDescription  告警描述
    * alertRemediation  修复建议
    * accumulatedTimes  执行次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipeId' => 'pipe_id',
            'ruleName' => 'rule_name',
            'description' => 'description',
            'query' => 'query',
            'queryType' => 'query_type',
            'status' => 'status',
            'severity' => 'severity',
            'customProperties' => 'custom_properties',
            'alertType' => 'alert_type',
            'eventGrouping' => 'event_grouping',
            'suspression' => 'suspression',
            'simulation' => 'simulation',
            'schedule' => 'schedule',
            'triggers' => 'triggers',
            'pipeName' => 'pipe_name',
            'alertName' => 'alert_name',
            'alertDescription' => 'alert_description',
            'alertRemediation' => 'alert_remediation',
            'accumulatedTimes' => 'accumulated_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipeId  数据管道 ID。Pipe ID.
    * ruleName  告警规则名称。Alert rule name.
    * description  描述。Description.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * alertType  告警类型。Alert type.
    * eventGrouping  告警分组。Event grouping.
    * suspression  告警抑制。Suspression.
    * simulation  模拟告警。Simulation.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * pipeName  管道名称
    * alertName  告警名称
    * alertDescription  告警描述
    * alertRemediation  修复建议
    * accumulatedTimes  执行次数
    *
    * @var string[]
    */
    protected static $setters = [
            'pipeId' => 'setPipeId',
            'ruleName' => 'setRuleName',
            'description' => 'setDescription',
            'query' => 'setQuery',
            'queryType' => 'setQueryType',
            'status' => 'setStatus',
            'severity' => 'setSeverity',
            'customProperties' => 'setCustomProperties',
            'alertType' => 'setAlertType',
            'eventGrouping' => 'setEventGrouping',
            'suspression' => 'setSuspression',
            'simulation' => 'setSimulation',
            'schedule' => 'setSchedule',
            'triggers' => 'setTriggers',
            'pipeName' => 'setPipeName',
            'alertName' => 'setAlertName',
            'alertDescription' => 'setAlertDescription',
            'alertRemediation' => 'setAlertRemediation',
            'accumulatedTimes' => 'setAccumulatedTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipeId  数据管道 ID。Pipe ID.
    * ruleName  告警规则名称。Alert rule name.
    * description  描述。Description.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * alertType  告警类型。Alert type.
    * eventGrouping  告警分组。Event grouping.
    * suspression  告警抑制。Suspression.
    * simulation  模拟告警。Simulation.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * pipeName  管道名称
    * alertName  告警名称
    * alertDescription  告警描述
    * alertRemediation  修复建议
    * accumulatedTimes  执行次数
    *
    * @var string[]
    */
    protected static $getters = [
            'pipeId' => 'getPipeId',
            'ruleName' => 'getRuleName',
            'description' => 'getDescription',
            'query' => 'getQuery',
            'queryType' => 'getQueryType',
            'status' => 'getStatus',
            'severity' => 'getSeverity',
            'customProperties' => 'getCustomProperties',
            'alertType' => 'getAlertType',
            'eventGrouping' => 'getEventGrouping',
            'suspression' => 'getSuspression',
            'simulation' => 'getSimulation',
            'schedule' => 'getSchedule',
            'triggers' => 'getTriggers',
            'pipeName' => 'getPipeName',
            'alertName' => 'getAlertName',
            'alertDescription' => 'getAlertDescription',
            'alertRemediation' => 'getAlertRemediation',
            'accumulatedTimes' => 'getAccumulatedTimes'
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
    const QUERY_TYPE_SQL = 'SQL';
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';
    const SEVERITY_TIPS = 'TIPS';
    const SEVERITY_LOW = 'LOW';
    const SEVERITY_MEDIUM = 'MEDIUM';
    const SEVERITY_HIGH = 'HIGH';
    const SEVERITY_FATAL = 'FATAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryTypeAllowableValues()
    {
        return [
            self::QUERY_TYPE_SQL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
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
            self::SEVERITY_TIPS,
            self::SEVERITY_LOW,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_HIGH,
            self::SEVERITY_FATAL,
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
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['customProperties'] = isset($data['customProperties']) ? $data['customProperties'] : null;
        $this->container['alertType'] = isset($data['alertType']) ? $data['alertType'] : null;
        $this->container['eventGrouping'] = isset($data['eventGrouping']) ? $data['eventGrouping'] : null;
        $this->container['suspression'] = isset($data['suspression']) ? $data['suspression'] : null;
        $this->container['simulation'] = isset($data['simulation']) ? $data['simulation'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['alertName'] = isset($data['alertName']) ? $data['alertName'] : null;
        $this->container['alertDescription'] = isset($data['alertDescription']) ? $data['alertDescription'] : null;
        $this->container['alertRemediation'] = isset($data['alertRemediation']) ? $data['alertRemediation'] : null;
        $this->container['accumulatedTimes'] = isset($data['accumulatedTimes']) ? $data['accumulatedTimes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pipeId'] === null) {
            $invalidProperties[] = "'pipeId' can't be null";
        }
            if ((mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
            if ((mb_strlen($this->container['ruleName']) > 255)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
            if ((mb_strlen($this->container['query']) > 1024)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getQueryTypeAllowableValues();
                if (!is_null($this->container['queryType']) && !in_array($this->container['queryType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) > 255)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['queryType']) && (mb_strlen($this->container['queryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryType', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 1)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['schedule'] === null) {
            $invalidProperties[] = "'schedule' can't be null";
        }
        if ($this->container['triggers'] === null) {
            $invalidProperties[] = "'triggers' can't be null";
        }
        if ($this->container['pipeName'] === null) {
            $invalidProperties[] = "'pipeName' can't be null";
        }
        if ($this->container['alertName'] === null) {
            $invalidProperties[] = "'alertName' can't be null";
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
    * Gets pipeId
    *  数据管道 ID。Pipe ID.
    *
    * @return string
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string $pipeId 数据管道 ID。Pipe ID.
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets ruleName
    *  告警规则名称。Alert rule name.
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 告警规则名称。Alert rule name.
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets description
    *  描述。Description.
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
    * @param string|null $description 描述。Description.
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets query
    *  查询语句。Query.
    *
    * @return string
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string $query 查询语句。Query.
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets queryType
    *  查询语法，SQL。Query type. SQL.
    *
    * @return string|null
    */
    public function getQueryType()
    {
        return $this->container['queryType'];
    }

    /**
    * Sets queryType
    *
    * @param string|null $queryType 查询语法，SQL。Query type. SQL.
    *
    * @return $this
    */
    public function setQueryType($queryType)
    {
        $this->container['queryType'] = $queryType;
        return $this;
    }

    /**
    * Gets status
    *  启用状态，启用、停用。Status, enabled, disabled.
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 启用状态，启用、停用。Status, enabled, disabled.
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets severity
    *  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
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
    * @param string|null $severity 严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets customProperties
    *  自定义扩展信息。Custom properties.
    *
    * @return map[string,string]|null
    */
    public function getCustomProperties()
    {
        return $this->container['customProperties'];
    }

    /**
    * Sets customProperties
    *
    * @param map[string,string]|null $customProperties 自定义扩展信息。Custom properties.
    *
    * @return $this
    */
    public function setCustomProperties($customProperties)
    {
        $this->container['customProperties'] = $customProperties;
        return $this;
    }

    /**
    * Gets alertType
    *  告警类型。Alert type.
    *
    * @return map[string,string]|null
    */
    public function getAlertType()
    {
        return $this->container['alertType'];
    }

    /**
    * Sets alertType
    *
    * @param map[string,string]|null $alertType 告警类型。Alert type.
    *
    * @return $this
    */
    public function setAlertType($alertType)
    {
        $this->container['alertType'] = $alertType;
        return $this;
    }

    /**
    * Gets eventGrouping
    *  告警分组。Event grouping.
    *
    * @return bool|null
    */
    public function getEventGrouping()
    {
        return $this->container['eventGrouping'];
    }

    /**
    * Sets eventGrouping
    *
    * @param bool|null $eventGrouping 告警分组。Event grouping.
    *
    * @return $this
    */
    public function setEventGrouping($eventGrouping)
    {
        $this->container['eventGrouping'] = $eventGrouping;
        return $this;
    }

    /**
    * Gets suspression
    *  告警抑制。Suspression.
    *
    * @return bool|null
    */
    public function getSuspression()
    {
        return $this->container['suspression'];
    }

    /**
    * Sets suspression
    *
    * @param bool|null $suspression 告警抑制。Suspression.
    *
    * @return $this
    */
    public function setSuspression($suspression)
    {
        $this->container['suspression'] = $suspression;
        return $this;
    }

    /**
    * Gets simulation
    *  模拟告警。Simulation.
    *
    * @return bool|null
    */
    public function getSimulation()
    {
        return $this->container['simulation'];
    }

    /**
    * Sets simulation
    *
    * @param bool|null $simulation 模拟告警。Simulation.
    *
    * @return $this
    */
    public function setSimulation($simulation)
    {
        $this->container['simulation'] = $simulation;
        return $this;
    }

    /**
    * Gets schedule
    *  schedule
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Schedule
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Schedule $schedule schedule
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets triggers
    *  告警触发规则。Alert triggers.
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[] $triggers 告警触发规则。Alert triggers.
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets alertName
    *  告警名称
    *
    * @return string
    */
    public function getAlertName()
    {
        return $this->container['alertName'];
    }

    /**
    * Sets alertName
    *
    * @param string $alertName 告警名称
    *
    * @return $this
    */
    public function setAlertName($alertName)
    {
        $this->container['alertName'] = $alertName;
        return $this;
    }

    /**
    * Gets alertDescription
    *  告警描述
    *
    * @return string|null
    */
    public function getAlertDescription()
    {
        return $this->container['alertDescription'];
    }

    /**
    * Sets alertDescription
    *
    * @param string|null $alertDescription 告警描述
    *
    * @return $this
    */
    public function setAlertDescription($alertDescription)
    {
        $this->container['alertDescription'] = $alertDescription;
        return $this;
    }

    /**
    * Gets alertRemediation
    *  修复建议
    *
    * @return string|null
    */
    public function getAlertRemediation()
    {
        return $this->container['alertRemediation'];
    }

    /**
    * Sets alertRemediation
    *
    * @param string|null $alertRemediation 修复建议
    *
    * @return $this
    */
    public function setAlertRemediation($alertRemediation)
    {
        $this->container['alertRemediation'] = $alertRemediation;
        return $this;
    }

    /**
    * Gets accumulatedTimes
    *  执行次数
    *
    * @return int|null
    */
    public function getAccumulatedTimes()
    {
        return $this->container['accumulatedTimes'];
    }

    /**
    * Sets accumulatedTimes
    *
    * @param int|null $accumulatedTimes 执行次数
    *
    * @return $this
    */
    public function setAccumulatedTimes($accumulatedTimes)
    {
        $this->container['accumulatedTimes'] = $accumulatedTimes;
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

