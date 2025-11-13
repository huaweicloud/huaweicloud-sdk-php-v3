<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlRequestResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlRequestResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStreamId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logGroupId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * sql  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    * sqlRequestTitle  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    * searchTimeRange  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    * searchTimeRangeUnit  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    * customDate  customDate
    * isTimeRangeRelative  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'sql' => 'string',
            'sqlRequestTitle' => 'string',
            'searchTimeRange' => 'int',
            'searchTimeRangeUnit' => 'string',
            'customDate' => '\HuaweiCloud\SDK\Lts\V2\Model\CustomDate',
            'isTimeRangeRelative' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStreamId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logGroupId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * sql  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    * sqlRequestTitle  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    * searchTimeRange  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    * searchTimeRangeUnit  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    * customDate  customDate
    * isTimeRangeRelative  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStreamId' => null,
        'logStreamName' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'sql' => null,
        'sqlRequestTitle' => null,
        'searchTimeRange' => 'int32',
        'searchTimeRangeUnit' => null,
        'customDate' => null,
        'isTimeRangeRelative' => null
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
    * logStreamId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logGroupId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * sql  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    * sqlRequestTitle  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    * searchTimeRange  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    * searchTimeRangeUnit  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    * customDate  customDate
    * isTimeRangeRelative  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'sql' => 'sql',
            'sqlRequestTitle' => 'sql_request_title',
            'searchTimeRange' => 'search_time_range',
            'searchTimeRangeUnit' => 'search_time_range_unit',
            'customDate' => 'custom_date',
            'isTimeRangeRelative' => 'is_time_range_relative'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStreamId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logGroupId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * sql  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    * sqlRequestTitle  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    * searchTimeRange  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    * searchTimeRangeUnit  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    * customDate  customDate
    * isTimeRangeRelative  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @var string[]
    */
    protected static $setters = [
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'sql' => 'setSql',
            'sqlRequestTitle' => 'setSqlRequestTitle',
            'searchTimeRange' => 'setSearchTimeRange',
            'searchTimeRangeUnit' => 'setSearchTimeRangeUnit',
            'customDate' => 'setCustomDate',
            'isTimeRangeRelative' => 'setIsTimeRangeRelative'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStreamId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logStreamName  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    * logGroupId  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    * logGroupName  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    * sql  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    * sqlRequestTitle  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    * searchTimeRange  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    * searchTimeRangeUnit  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    * customDate  customDate
    * isTimeRangeRelative  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @var string[]
    */
    protected static $getters = [
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'sql' => 'getSql',
            'sqlRequestTitle' => 'getSqlRequestTitle',
            'searchTimeRange' => 'getSearchTimeRange',
            'searchTimeRangeUnit' => 'getSearchTimeRangeUnit',
            'customDate' => 'getCustomDate',
            'isTimeRangeRelative' => 'getIsTimeRangeRelative'
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
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlRequestTitle'] = isset($data['sqlRequestTitle']) ? $data['sqlRequestTitle'] : null;
        $this->container['searchTimeRange'] = isset($data['searchTimeRange']) ? $data['searchTimeRange'] : null;
        $this->container['searchTimeRangeUnit'] = isset($data['searchTimeRangeUnit']) ? $data['searchTimeRangeUnit'] : null;
        $this->container['customDate'] = isset($data['customDate']) ? $data['customDate'] : null;
        $this->container['isTimeRangeRelative'] = isset($data['isTimeRangeRelative']) ? $data['isTimeRangeRelative'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['sqlRequestTitle'] === null) {
            $invalidProperties[] = "'sqlRequestTitle' can't be null";
        }
        if ($this->container['searchTimeRange'] === null) {
            $invalidProperties[] = "'searchTimeRange' can't be null";
        }
        if ($this->container['searchTimeRangeUnit'] === null) {
            $invalidProperties[] = "'searchTimeRangeUnit' can't be null";
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
    * Gets logStreamId
    *  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName **参数解释：** 日志流名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets logGroupId
    *  **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId **参数解释：** 日志流ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName **参数解释：** 日志组名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets sql
    *  **参数解释：** SQL语句。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql **参数解释：** SQL语句。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlRequestTitle
    *  **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getSqlRequestTitle()
    {
        return $this->container['sqlRequestTitle'];
    }

    /**
    * Sets sqlRequestTitle
    *
    * @param string $sqlRequestTitle **参数解释：** 配置告警关联的图表名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSqlRequestTitle($sqlRequestTitle)
    {
        $this->container['sqlRequestTitle'] = $sqlRequestTitle;
        return $this;
    }

    /**
    * Gets searchTimeRange
    *  **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    *
    * @return int
    */
    public function getSearchTimeRange()
    {
        return $this->container['searchTimeRange'];
    }

    /**
    * Sets searchTimeRange
    *
    * @param int $searchTimeRange **参数解释：** 查询执行告警任务时最近数据的时间范围。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSearchTimeRange($searchTimeRange)
    {
        $this->container['searchTimeRange'] = $searchTimeRange;
        return $this;
    }

    /**
    * Gets searchTimeRangeUnit
    *  **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    *
    * @return string
    */
    public function getSearchTimeRangeUnit()
    {
        return $this->container['searchTimeRangeUnit'];
    }

    /**
    * Sets searchTimeRangeUnit
    *
    * @param string $searchTimeRangeUnit **参数解释：** 查询告警时间范围单位。 **取值范围：** - minute - hour
    *
    * @return $this
    */
    public function setSearchTimeRangeUnit($searchTimeRangeUnit)
    {
        $this->container['searchTimeRangeUnit'] = $searchTimeRangeUnit;
        return $this;
    }

    /**
    * Gets customDate
    *  customDate
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CustomDate|null
    */
    public function getCustomDate()
    {
        return $this->container['customDate'];
    }

    /**
    * Sets customDate
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CustomDate|null $customDate customDate
    *
    * @return $this
    */
    public function setCustomDate($customDate)
    {
        $this->container['customDate'] = $customDate;
        return $this;
    }

    /**
    * Gets isTimeRangeRelative
    *  **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @return bool|null
    */
    public function getIsTimeRangeRelative()
    {
        return $this->container['isTimeRangeRelative'];
    }

    /**
    * Sets isTimeRangeRelative
    *
    * @param bool|null $isTimeRangeRelative **参数解释：** 告警查询日志的时间区间为相对时间还是整点时间。 **约束限制：** 不涉及。 **取值范围：** - true: 相对时间。 - false: 整点时间。 **默认取值：** true
    *
    * @return $this
    */
    public function setIsTimeRangeRelative($isTimeRangeRelative)
    {
        $this->container['isTimeRangeRelative'] = $isTimeRangeRelative;
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

