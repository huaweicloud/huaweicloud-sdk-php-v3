<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertRuleTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertRuleTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  告警规则模板 ID。Alert rule template ID.
    * updateTime  更新时间。Update time.
    * templateName  告警规则模板名称。Alert rule template name.
    * dataSource  数据源。Data source.
    * version  版本。Version
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'updateTime' => 'int',
            'templateName' => 'string',
            'dataSource' => 'string',
            'version' => 'string',
            'query' => 'string',
            'queryType' => 'string',
            'severity' => 'string',
            'customProperties' => 'map[string,string]',
            'eventGrouping' => 'bool',
            'schedule' => '\HuaweiCloud\SDK\SecMaster\V2\Model\Schedule',
            'triggers' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertRuleTrigger[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  告警规则模板 ID。Alert rule template ID.
    * updateTime  更新时间。Update time.
    * templateName  告警规则模板名称。Alert rule template name.
    * dataSource  数据源。Data source.
    * version  版本。Version
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'updateTime' => 'int64',
        'templateName' => null,
        'dataSource' => null,
        'version' => null,
        'query' => null,
        'queryType' => null,
        'severity' => null,
        'customProperties' => null,
        'eventGrouping' => null,
        'schedule' => null,
        'triggers' => null
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
    * templateId  告警规则模板 ID。Alert rule template ID.
    * updateTime  更新时间。Update time.
    * templateName  告警规则模板名称。Alert rule template name.
    * dataSource  数据源。Data source.
    * version  版本。Version
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'updateTime' => 'update_time',
            'templateName' => 'template_name',
            'dataSource' => 'data_source',
            'version' => 'version',
            'query' => 'query',
            'queryType' => 'query_type',
            'severity' => 'severity',
            'customProperties' => 'custom_properties',
            'eventGrouping' => 'event_grouping',
            'schedule' => 'schedule',
            'triggers' => 'triggers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  告警规则模板 ID。Alert rule template ID.
    * updateTime  更新时间。Update time.
    * templateName  告警规则模板名称。Alert rule template name.
    * dataSource  数据源。Data source.
    * version  版本。Version
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'updateTime' => 'setUpdateTime',
            'templateName' => 'setTemplateName',
            'dataSource' => 'setDataSource',
            'version' => 'setVersion',
            'query' => 'setQuery',
            'queryType' => 'setQueryType',
            'severity' => 'setSeverity',
            'customProperties' => 'setCustomProperties',
            'eventGrouping' => 'setEventGrouping',
            'schedule' => 'setSchedule',
            'triggers' => 'setTriggers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  告警规则模板 ID。Alert rule template ID.
    * updateTime  更新时间。Update time.
    * templateName  告警规则模板名称。Alert rule template name.
    * dataSource  数据源。Data source.
    * version  版本。Version
    * query  查询语句。Query.
    * queryType  查询语法，SQL。Query type. SQL.
    * severity  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    * customProperties  自定义扩展信息。Custom properties.
    * eventGrouping  告警分组。Event grouping.
    * schedule  schedule
    * triggers  告警触发规则。Alert triggers.
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'updateTime' => 'getUpdateTime',
            'templateName' => 'getTemplateName',
            'dataSource' => 'getDataSource',
            'version' => 'getVersion',
            'query' => 'getQuery',
            'queryType' => 'getQueryType',
            'severity' => 'getSeverity',
            'customProperties' => 'getCustomProperties',
            'eventGrouping' => 'getEventGrouping',
            'schedule' => 'getSchedule',
            'triggers' => 'getTriggers'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryType'] = isset($data['queryType']) ? $data['queryType'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['customProperties'] = isset($data['customProperties']) ? $data['customProperties'] : null;
        $this->container['eventGrouping'] = isset($data['eventGrouping']) ? $data['eventGrouping'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['triggers'] = isset($data['triggers']) ? $data['triggers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if ((mb_strlen($this->container['templateId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['templateId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
            if (($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 255)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['dataSource'] === null) {
            $invalidProperties[] = "'dataSource' can't be null";
        }
            if ((mb_strlen($this->container['dataSource']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataSource', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dataSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataSource', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 255)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
        if ($this->container['severity'] === null) {
            $invalidProperties[] = "'severity' can't be null";
        }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['severity']) > 255)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['severity']) < 1)) {
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
    * Gets templateId
    *  告警规则模板 ID。Alert rule template ID.
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 告警规则模板 ID。Alert rule template ID.
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。Update time.
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间。Update time.
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets templateName
    *  告警规则模板名称。Alert rule template name.
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 告警规则模板名称。Alert rule template name.
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets dataSource
    *  数据源。Data source.
    *
    * @return string
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param string $dataSource 数据源。Data source.
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets version
    *  版本。Version
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 版本。Version
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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
    * Gets severity
    *  严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
    *
    * @return string
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string $severity 严重程度，提示、低危、中危、高危、致命。Severity. TIPS, LOW, MEDIUM, HIGH, FATAL
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

