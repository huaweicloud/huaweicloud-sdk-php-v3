<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    * recordId  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    * name  告警规则名称
    * alarmType  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    * status  告警规则状态, ok为正常，alarm为告警，invalid为已失效
    * level  告警级别, 1为紧急，2为重要，3为次要，4为提示
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * from  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    * to  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    * offset  分页偏移量
    * limit  分页大小
    * orderBy  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'recordId' => 'string',
            'name' => 'string',
            'alarmType' => 'string',
            'status' => 'string',
            'level' => 'int',
            'namespace' => 'string',
            'resourceId' => 'string',
            'from' => 'string',
            'to' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    * recordId  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    * name  告警规则名称
    * alarmType  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    * status  告警规则状态, ok为正常，alarm为告警，invalid为已失效
    * level  告警级别, 1为紧急，2为重要，3为次要，4为提示
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * from  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    * to  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    * offset  分页偏移量
    * limit  分页大小
    * orderBy  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'recordId' => null,
        'name' => null,
        'alarmType' => null,
        'status' => null,
        'level' => null,
        'namespace' => null,
        'resourceId' => null,
        'from' => null,
        'to' => null,
        'offset' => null,
        'limit' => null,
        'orderBy' => null
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
    * alarmId  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    * recordId  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    * name  告警规则名称
    * alarmType  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    * status  告警规则状态, ok为正常，alarm为告警，invalid为已失效
    * level  告警级别, 1为紧急，2为重要，3为次要，4为提示
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * from  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    * to  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    * offset  分页偏移量
    * limit  分页大小
    * orderBy  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'recordId' => 'record_id',
            'name' => 'name',
            'alarmType' => 'alarm_type',
            'status' => 'status',
            'level' => 'level',
            'namespace' => 'namespace',
            'resourceId' => 'resource_id',
            'from' => 'from',
            'to' => 'to',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    * recordId  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    * name  告警规则名称
    * alarmType  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    * status  告警规则状态, ok为正常，alarm为告警，invalid为已失效
    * level  告警级别, 1为紧急，2为重要，3为次要，4为提示
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * from  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    * to  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    * offset  分页偏移量
    * limit  分页大小
    * orderBy  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'recordId' => 'setRecordId',
            'name' => 'setName',
            'alarmType' => 'setAlarmType',
            'status' => 'setStatus',
            'level' => 'setLevel',
            'namespace' => 'setNamespace',
            'resourceId' => 'setResourceId',
            'from' => 'setFrom',
            'to' => 'setTo',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    * recordId  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    * name  告警规则名称
    * alarmType  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    * status  告警规则状态, ok为正常，alarm为告警，invalid为已失效
    * level  告警级别, 1为紧急，2为重要，3为次要，4为提示
    * namespace  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * from  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    * to  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    * offset  分页偏移量
    * limit  分页大小
    * orderBy  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'recordId' => 'getRecordId',
            'name' => 'getName',
            'alarmType' => 'getAlarmType',
            'status' => 'getStatus',
            'level' => 'getLevel',
            'namespace' => 'getNamespace',
            'resourceId' => 'getResourceId',
            'from' => 'getFrom',
            'to' => 'getTo',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderBy' => 'getOrderBy'
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
    const ALARM_TYPE_EVENT = 'event';
    const ALARM_TYPE_METRIC = 'metric';
    const ORDER_BY_FIRST_ALARM_TIME = 'first_alarm_time';
    const ORDER_BY_UPDATE_TIME = 'update_time';
    const ORDER_BY_ALARM_LEVEL = 'alarm_level';
    const ORDER_BY_RECORD_ID = 'record_id';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_EVENT,
            self::ALARM_TYPE_METRIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_FIRST_ALARM_TIME,
            self::ORDER_BY_UPDATE_TIME,
            self::ORDER_BY_ALARM_LEVEL,
            self::ORDER_BY_RECORD_ID,
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) > 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) < 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(ok|alarm|invalid)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(ok|alarm|invalid)$/.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] > 4)) {
                $invalidProperties[] = "invalid value for 'level', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['level']) && ($this->container['level'] < 1)) {
                $invalidProperties[] = "invalid value for 'level', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 2048)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 64)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 0)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) > 64)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) < 0)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
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
    * Gets alarmId
    *  告警ID,以al开头，后跟22位由字母或数字组成的字符串
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警ID,以al开头，后跟22位由字母或数字组成的字符串
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets recordId
    *  告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 告警记录ID,以ah开头，后跟22位由字母或数字组成的字符串
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets name
    *  告警规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 告警规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets alarmType
    *  告警类型，event：查询事件类型告警，metric：查询指标类型告警
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType 告警类型，event：查询事件类型告警，metric：查询指标类型告警
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets status
    *  告警规则状态, ok为正常，alarm为告警，invalid为已失效
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
    * @param string|null $status 告警规则状态, ok为正常，alarm为告警，invalid为已失效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets level
    *  告警级别, 1为紧急，2为重要，3为次要，4为提示
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 告警级别, 1为紧急，2为重要，3为次要，4为提示
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets namespace
    *  查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 查询服务的命名空间，各服务命名空间请参考[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets resourceId
    *  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets from
    *  查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from 查询告警记录的起始时间，例如：2022-02-10T10:05:46+08:00
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to 查询告警记录的截止时间，例如：2022-02-10T10:05:47+08:00
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量
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
    * @param int|null $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页大小
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orderBy
    *  按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 按关键字排序, 默认为update_time, {first_alarm_time: 告警产生时间, update_time: 更新时间, alarm_level: 告警级别, record_id：表记录主键}
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
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

