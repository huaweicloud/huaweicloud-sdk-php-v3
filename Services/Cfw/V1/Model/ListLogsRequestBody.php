<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filters  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    * logId  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    * nextDate  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    * startTime  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * endTime  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * type  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filters' => '\HuaweiCloud\SDK\Cfw\V1\Model\Filter[]',
            'limit' => 'int',
            'offset' => 'int',
            'logId' => 'string',
            'nextDate' => 'int',
            'startTime' => 'int',
            'endTime' => 'int',
            'logType' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filters  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    * logId  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    * nextDate  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    * startTime  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * endTime  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * type  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filters' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'logId' => null,
        'nextDate' => 'int64',
        'startTime' => 'int64',
        'endTime' => 'int64',
        'logType' => null,
        'type' => null
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
    * filters  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    * logId  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    * nextDate  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    * startTime  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * endTime  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * type  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filters' => 'filters',
            'limit' => 'limit',
            'offset' => 'offset',
            'logId' => 'log_id',
            'nextDate' => 'next_date',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'logType' => 'log_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filters  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    * logId  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    * nextDate  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    * startTime  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * endTime  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * type  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'filters' => 'setFilters',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'logId' => 'setLogId',
            'nextDate' => 'setNextDate',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'logType' => 'setLogType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filters  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * limit  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    * logId  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    * nextDate  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    * startTime  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * endTime  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    * logType  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    * type  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'filters' => 'getFilters',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'logId' => 'getLogId',
            'nextDate' => 'getNextDate',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'logType' => 'getLogType',
            'type' => 'getType'
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
    const LOG_TYPE_INTERNET = 'internet';
    const LOG_TYPE_NAT = 'nat';
    const LOG_TYPE_VPC = 'vpc';
    const LOG_TYPE_VGW = 'vgw';
    const TYPE_ATTACK = 'attack';
    const TYPE_ACL = 'acl';
    const TYPE_FLOW = 'flow';
    const TYPE_URL = 'url';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTypeAllowableValues()
    {
        return [
            self::LOG_TYPE_INTERNET,
            self::LOG_TYPE_NAT,
            self::LOG_TYPE_VPC,
            self::LOG_TYPE_VGW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ATTACK,
            self::TYPE_ACL,
            self::TYPE_FLOW,
            self::TYPE_URL,
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
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['nextDate'] = isset($data['nextDate']) ? $data['nextDate'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 1024)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1024.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < -10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to -10000.";
            }
            if (!is_null($this->container['logId']) && (mb_strlen($this->container['logId']) > 255)) {
                $invalidProperties[] = "invalid value for 'logId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logId']) && (mb_strlen($this->container['logId']) < 1)) {
                $invalidProperties[] = "invalid value for 'logId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nextDate']) && ($this->container['nextDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'nextDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['nextDate']) && ($this->container['nextDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'nextDate', must be bigger than or equal to 0.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
        }
            $allowedValues = $this->getLogTypeAllowableValues();
                if (!is_null($this->container['logType']) && !in_array($this->container['logType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets filters
    *  **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Filter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Filter[]|null $filters **参数解释**： 过滤条件 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**： 每页显示个数 **约束限制**： 不涉及 **取值范围**： 1-1024 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 偏移量 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 相对于上一页的偏移量 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets logId
    *  **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId **参数解释**： 文档ID **约束限制**： 第一页为空，其他页不为空 **取值范围**： 上一次查询最后一条数据的log_id **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets nextDate
    *  **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getNextDate()
    {
        return $this->container['nextDate'];
    }

    /**
    * Sets nextDate
    *
    * @param int|null $nextDate **参数解释**： 下个日期 **约束限制**： 第一页为空，其他页不为空 **取值范围**： 查询流量日志时为上一次查询最后一条数据的end_time **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setNextDate($nextDate)
    {
        $this->container['nextDate'] = $nextDate;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime **参数解释**： 开始时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime **参数解释**： 结束时间 **约束限制**： 不涉及 **取值范围**： 毫秒级时间戳 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets logType
    *  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： internet为南北向日志、nat为nat场景日志，vpc为东西向日志，vgw为vgw场景日志 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 日志类型 **约束限制**： 不涉及 **取值范围**： attack为攻击日志、acl 访问控制日志，flow 流量日志，url url日志 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

