<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAlertRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAlertRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  告警规则 ID。Alert rule ID.
    * pipeId  数据管道 ID。Pipe ID.
    * pipeName  数据管道名称。Pipe name.
    * createBy  创建人。Create by.
    * createTime  创建时间。Create time.
    * updateBy  更新人。Update by.
    * updateTime  更新时间。Update time.
    * deleteTime  删除时间。Delete time.
    * ruleName  告警规则名称。Alert rule name.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'createBy' => 'string',
            'createTime' => 'int',
            'updateBy' => 'string',
            'updateTime' => 'int',
            'deleteTime' => 'int',
            'ruleName' => 'string',
            'query' => 'string',
            'queryType' => 'string',
            'status' => 'string',
            'severity' => 'string',
            'customProperties' => 'map[string,string]',
            'eventGrouping' => 'bool',
            'schedule' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Schedule',
            'triggers' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  告警规则 ID。Alert rule ID.
    * pipeId  数据管道 ID。Pipe ID.
    * pipeName  数据管道名称。Pipe name.
    * createBy  创建人。Create by.
    * createTime  创建时间。Create time.
    * updateBy  更新人。Update by.
    * updateTime  更新时间。Update time.
    * deleteTime  删除时间。Delete time.
    * ruleName  告警规则名称。Alert rule name.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'pipeId' => null,
        'pipeName' => null,
        'createBy' => null,
        'createTime' => 'int64',
        'updateBy' => null,
        'updateTime' => 'int64',
        'deleteTime' => 'int64',
        'ruleName' => null,
        'query' => null,
        'queryType' => null,
        'status' => null,
        'severity' => null,
        'customProperties' => null,
        'eventGrouping' => null,
        'schedule' => null,
        'triggers' => null,
        'xRequestId' => null
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
    * ruleId  告警规则 ID。Alert rule ID.
    * pipeId  数据管道 ID。Pipe ID.
    * pipeName  数据管道名称。Pipe name.
    * createBy  创建人。Create by.
    * createTime  创建时间。Create time.
    * updateBy  更新人。Update by.
    * updateTime  更新时间。Update time.
    * deleteTime  删除时间。Delete time.
    * ruleName  告警规则名称。Alert rule name.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'createBy' => 'create_by',
            'createTime' => 'create_time',
            'updateBy' => 'update_by',
            'updateTime' => 'update_time',
            'deleteTime' => 'delete_time',
            'ruleName' => 'rule_name',
            'query' => 'query',
            'queryType' => 'query_type',
            'status' => 'status',
            'severity' => 'severity',
            'customProperties' => 'custom_properties',
            'eventGrouping' => 'event_grouping',
            'schedule' => 'schedule',
            'triggers' => 'triggers',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  告警规则 ID。Alert rule ID.
    * pipeId  数据管道 ID。Pipe ID.
    * pipeName  数据管道名称。Pipe name.
    * createBy  创建人。Create by.
    * createTime  创建时间。Create time.
    * updateBy  更新人。Update by.
    * updateTime  更新时间。Update time.
    * deleteTime  删除时间。Delete time.
    * ruleName  告警规则名称。Alert rule name.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'createBy' => 'setCreateBy',
            'createTime' => 'setCreateTime',
            'updateBy' => 'setUpdateBy',
            'updateTime' => 'setUpdateTime',
            'deleteTime' => 'setDeleteTime',
            'ruleName' => 'setRuleName',
            'query' => 'setQuery',
            'queryType' => 'setQueryType',
            'status' => 'setStatus',
            'severity' => 'setSeverity',
            'customProperties' => 'setCustomProperties',
            'eventGrouping' => 'setEventGrouping',
            'schedule' => 'setSchedule',
            'triggers' => 'setTriggers',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  告警规则 ID。Alert rule ID.
    * pipeId  数据管道 ID。Pipe ID.
    * pipeName  数据管道名称。Pipe name.
    * createBy  创建人。Create by.
    * createTime  创建时间。Create time.
    * updateBy  更新人。Update by.
    * updateTime  更新时间。Update time.
    * deleteTime  删除时间。Delete time.
    * ruleName  告警规则名称。Alert rule name.
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * status  启用状态，启用、停用。Status, enabled, disabled.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'createBy' => 'getCreateBy',
            'createTime' => 'getCreateTime',
            'updateBy' => 'getUpdateBy',
            'updateTime' => 'getUpdateTime',
            'deleteTime' => 'getDeleteTime',
            'ruleName' => 'getRuleName',
            'query' => 'getQuery',
            'queryType' => 'getQueryType',
            'status' => 'getStatus',
            'severity' => 'getSeverity',
            'customProperties' => 'getCustomProperties',
            'eventGrouping' => 'getEventGrouping',
            'schedule' => 'getSchedule',
            'triggers' => 'getTriggers',
            'xRequestId' => 'getXRequestId'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['customProperties'] = isset($data['customProperties']) ? $data['customProperties'] : null;
        $this->container['eventGrouping'] = isset($data['eventGrouping']) ? $data['eventGrouping'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ruleId']) && (mb_strlen($this->container['ruleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 5)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 255)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) > 255)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['updateBy']) && (mb_strlen($this->container['updateBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updateBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 255)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 1024)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
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
    * Gets ruleId
    *  告警规则 ID。Alert rule ID.
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
    * @param string|null $ruleId 告警规则 ID。Alert rule ID.
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets pipeId
    *  数据管道 ID。Pipe ID.
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 数据管道 ID。Pipe ID.
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  数据管道名称。Pipe name.
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 数据管道名称。Pipe name.
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。Create by.
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。Create by.
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。Create time.
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。Create time.
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人。Update by.
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人。Update by.
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。Update time.
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。Update time.
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  删除时间。Delete time.
    *
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime 删除时间。Delete time.
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets ruleName
    *  告警规则名称。Alert rule name.
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
    * @param string|null $ruleName 告警规则名称。Alert rule name.
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets query
    *  查询语句。Query.
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 查询语句。Query.
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
    * Gets schedule
    *  schedule
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\Schedule|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\Schedule|null $schedule schedule
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
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]|null
    */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
    * Sets triggers
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]|null $triggers 告警触发规则。Alert triggers.
    *
    * @return $this
    */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

