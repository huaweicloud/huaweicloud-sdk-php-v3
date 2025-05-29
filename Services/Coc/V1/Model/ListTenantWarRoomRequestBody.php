<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTenantWarRoomRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTenantWarRoomRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  limit
    * offset  查询数量 最小值0 最大值1000
    * currentUsers  用户id
    * warRoomNums  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    * incidentNum  事件单号 精确查询
    * title  WarRoom名称 模糊查询
    * regionCodeList  区域 多选
    * incidentLevels  事件级别 多选
    * impactedApplicationIds  影响应用id
    * admin  WarRoom管理员
    * status  WarRoom状态
    * triggeredStartTime  拉起开始时间 默认前30天
    * triggeredEndTime  拉起结束时间 默认当前时间
    * occurStartTime  发生开始时间
    * occurEndTime  发生结束时间
    * recoverStartTime  恢复开始时间
    * recoverEndTime  恢复结束时间
    * notificationLevel  通报级别
    * enterpriseProjectIds  企业项目id
    * warRoomNum  WarRoom 单号 前端使用
    * statisticFlag  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'currentUsers' => 'string[]',
            'warRoomNums' => 'string[]',
            'incidentNum' => 'string',
            'title' => 'string',
            'regionCodeList' => 'string[]',
            'incidentLevels' => 'string[]',
            'impactedApplicationIds' => 'string[]',
            'admin' => 'string[]',
            'status' => 'string[]',
            'triggeredStartTime' => 'int',
            'triggeredEndTime' => 'int',
            'occurStartTime' => 'int',
            'occurEndTime' => 'int',
            'recoverStartTime' => 'int',
            'recoverEndTime' => 'int',
            'notificationLevel' => 'string[]',
            'enterpriseProjectIds' => 'string[]',
            'warRoomNum' => 'string',
            'statisticFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  limit
    * offset  查询数量 最小值0 最大值1000
    * currentUsers  用户id
    * warRoomNums  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    * incidentNum  事件单号 精确查询
    * title  WarRoom名称 模糊查询
    * regionCodeList  区域 多选
    * incidentLevels  事件级别 多选
    * impactedApplicationIds  影响应用id
    * admin  WarRoom管理员
    * status  WarRoom状态
    * triggeredStartTime  拉起开始时间 默认前30天
    * triggeredEndTime  拉起结束时间 默认当前时间
    * occurStartTime  发生开始时间
    * occurEndTime  发生结束时间
    * recoverStartTime  恢复开始时间
    * recoverEndTime  恢复结束时间
    * notificationLevel  通报级别
    * enterpriseProjectIds  企业项目id
    * warRoomNum  WarRoom 单号 前端使用
    * statisticFlag  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int64',
        'offset' => 'int64',
        'currentUsers' => null,
        'warRoomNums' => null,
        'incidentNum' => null,
        'title' => null,
        'regionCodeList' => null,
        'incidentLevels' => null,
        'impactedApplicationIds' => null,
        'admin' => null,
        'status' => null,
        'triggeredStartTime' => 'int64',
        'triggeredEndTime' => 'int64',
        'occurStartTime' => 'int64',
        'occurEndTime' => 'int64',
        'recoverStartTime' => 'int64',
        'recoverEndTime' => 'int64',
        'notificationLevel' => null,
        'enterpriseProjectIds' => null,
        'warRoomNum' => null,
        'statisticFlag' => null
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
    * limit  limit
    * offset  查询数量 最小值0 最大值1000
    * currentUsers  用户id
    * warRoomNums  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    * incidentNum  事件单号 精确查询
    * title  WarRoom名称 模糊查询
    * regionCodeList  区域 多选
    * incidentLevels  事件级别 多选
    * impactedApplicationIds  影响应用id
    * admin  WarRoom管理员
    * status  WarRoom状态
    * triggeredStartTime  拉起开始时间 默认前30天
    * triggeredEndTime  拉起结束时间 默认当前时间
    * occurStartTime  发生开始时间
    * occurEndTime  发生结束时间
    * recoverStartTime  恢复开始时间
    * recoverEndTime  恢复结束时间
    * notificationLevel  通报级别
    * enterpriseProjectIds  企业项目id
    * warRoomNum  WarRoom 单号 前端使用
    * statisticFlag  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'currentUsers' => 'current_users',
            'warRoomNums' => 'war_room_nums',
            'incidentNum' => 'incident_num',
            'title' => 'title',
            'regionCodeList' => 'region_code_list',
            'incidentLevels' => 'incident_levels',
            'impactedApplicationIds' => 'impacted_application_ids',
            'admin' => 'admin',
            'status' => 'status',
            'triggeredStartTime' => 'triggered_start_time',
            'triggeredEndTime' => 'triggered_end_time',
            'occurStartTime' => 'occur_start_time',
            'occurEndTime' => 'occur_end_time',
            'recoverStartTime' => 'recover_start_time',
            'recoverEndTime' => 'recover_end_time',
            'notificationLevel' => 'notification_level',
            'enterpriseProjectIds' => 'enterprise_project_ids',
            'warRoomNum' => 'war_room_num',
            'statisticFlag' => 'statistic_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  limit
    * offset  查询数量 最小值0 最大值1000
    * currentUsers  用户id
    * warRoomNums  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    * incidentNum  事件单号 精确查询
    * title  WarRoom名称 模糊查询
    * regionCodeList  区域 多选
    * incidentLevels  事件级别 多选
    * impactedApplicationIds  影响应用id
    * admin  WarRoom管理员
    * status  WarRoom状态
    * triggeredStartTime  拉起开始时间 默认前30天
    * triggeredEndTime  拉起结束时间 默认当前时间
    * occurStartTime  发生开始时间
    * occurEndTime  发生结束时间
    * recoverStartTime  恢复开始时间
    * recoverEndTime  恢复结束时间
    * notificationLevel  通报级别
    * enterpriseProjectIds  企业项目id
    * warRoomNum  WarRoom 单号 前端使用
    * statisticFlag  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'currentUsers' => 'setCurrentUsers',
            'warRoomNums' => 'setWarRoomNums',
            'incidentNum' => 'setIncidentNum',
            'title' => 'setTitle',
            'regionCodeList' => 'setRegionCodeList',
            'incidentLevels' => 'setIncidentLevels',
            'impactedApplicationIds' => 'setImpactedApplicationIds',
            'admin' => 'setAdmin',
            'status' => 'setStatus',
            'triggeredStartTime' => 'setTriggeredStartTime',
            'triggeredEndTime' => 'setTriggeredEndTime',
            'occurStartTime' => 'setOccurStartTime',
            'occurEndTime' => 'setOccurEndTime',
            'recoverStartTime' => 'setRecoverStartTime',
            'recoverEndTime' => 'setRecoverEndTime',
            'notificationLevel' => 'setNotificationLevel',
            'enterpriseProjectIds' => 'setEnterpriseProjectIds',
            'warRoomNum' => 'setWarRoomNum',
            'statisticFlag' => 'setStatisticFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  limit
    * offset  查询数量 最小值0 最大值1000
    * currentUsers  用户id
    * warRoomNums  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    * incidentNum  事件单号 精确查询
    * title  WarRoom名称 模糊查询
    * regionCodeList  区域 多选
    * incidentLevels  事件级别 多选
    * impactedApplicationIds  影响应用id
    * admin  WarRoom管理员
    * status  WarRoom状态
    * triggeredStartTime  拉起开始时间 默认前30天
    * triggeredEndTime  拉起结束时间 默认当前时间
    * occurStartTime  发生开始时间
    * occurEndTime  发生结束时间
    * recoverStartTime  恢复开始时间
    * recoverEndTime  恢复结束时间
    * notificationLevel  通报级别
    * enterpriseProjectIds  企业项目id
    * warRoomNum  WarRoom 单号 前端使用
    * statisticFlag  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'currentUsers' => 'getCurrentUsers',
            'warRoomNums' => 'getWarRoomNums',
            'incidentNum' => 'getIncidentNum',
            'title' => 'getTitle',
            'regionCodeList' => 'getRegionCodeList',
            'incidentLevels' => 'getIncidentLevels',
            'impactedApplicationIds' => 'getImpactedApplicationIds',
            'admin' => 'getAdmin',
            'status' => 'getStatus',
            'triggeredStartTime' => 'getTriggeredStartTime',
            'triggeredEndTime' => 'getTriggeredEndTime',
            'occurStartTime' => 'getOccurStartTime',
            'occurEndTime' => 'getOccurEndTime',
            'recoverStartTime' => 'getRecoverStartTime',
            'recoverEndTime' => 'getRecoverEndTime',
            'notificationLevel' => 'getNotificationLevel',
            'enterpriseProjectIds' => 'getEnterpriseProjectIds',
            'warRoomNum' => 'getWarRoomNum',
            'statisticFlag' => 'getStatisticFlag'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['currentUsers'] = isset($data['currentUsers']) ? $data['currentUsers'] : null;
        $this->container['warRoomNums'] = isset($data['warRoomNums']) ? $data['warRoomNums'] : null;
        $this->container['incidentNum'] = isset($data['incidentNum']) ? $data['incidentNum'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['regionCodeList'] = isset($data['regionCodeList']) ? $data['regionCodeList'] : null;
        $this->container['incidentLevels'] = isset($data['incidentLevels']) ? $data['incidentLevels'] : null;
        $this->container['impactedApplicationIds'] = isset($data['impactedApplicationIds']) ? $data['impactedApplicationIds'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggeredStartTime'] = isset($data['triggeredStartTime']) ? $data['triggeredStartTime'] : null;
        $this->container['triggeredEndTime'] = isset($data['triggeredEndTime']) ? $data['triggeredEndTime'] : null;
        $this->container['occurStartTime'] = isset($data['occurStartTime']) ? $data['occurStartTime'] : null;
        $this->container['occurEndTime'] = isset($data['occurEndTime']) ? $data['occurEndTime'] : null;
        $this->container['recoverStartTime'] = isset($data['recoverStartTime']) ? $data['recoverStartTime'] : null;
        $this->container['recoverEndTime'] = isset($data['recoverEndTime']) ? $data['recoverEndTime'] : null;
        $this->container['notificationLevel'] = isset($data['notificationLevel']) ? $data['notificationLevel'] : null;
        $this->container['enterpriseProjectIds'] = isset($data['enterpriseProjectIds']) ? $data['enterpriseProjectIds'] : null;
        $this->container['warRoomNum'] = isset($data['warRoomNum']) ? $data['warRoomNum'] : null;
        $this->container['statisticFlag'] = isset($data['statisticFlag']) ? $data['statisticFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['incidentNum']) && (mb_strlen($this->container['incidentNum']) > 64)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['incidentNum']) && (mb_strlen($this->container['incidentNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'incidentNum', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1000)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggeredStartTime']) && ($this->container['triggeredStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'triggeredStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['triggeredStartTime']) && ($this->container['triggeredStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'triggeredStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['triggeredEndTime']) && ($this->container['triggeredEndTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'triggeredEndTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['triggeredEndTime']) && ($this->container['triggeredEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'triggeredEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurStartTime']) && ($this->container['occurStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurStartTime']) && ($this->container['occurStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['occurEndTime']) && ($this->container['occurEndTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'occurEndTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['occurEndTime']) && ($this->container['occurEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'occurEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recoverStartTime']) && ($this->container['recoverStartTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recoverStartTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recoverStartTime']) && ($this->container['recoverStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recoverStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['recoverEndTime']) && ($this->container['recoverEndTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'recoverEndTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['recoverEndTime']) && ($this->container['recoverEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'recoverEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['warRoomNum']) && (mb_strlen($this->container['warRoomNum']) > 255)) {
                $invalidProperties[] = "invalid value for 'warRoomNum', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['warRoomNum']) && (mb_strlen($this->container['warRoomNum']) < 0)) {
                $invalidProperties[] = "invalid value for 'warRoomNum', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
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
    *  查询数量 最小值0 最大值1000
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
    * @param int|null $offset 查询数量 最小值0 最大值1000
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets currentUsers
    *  用户id
    *
    * @return string[]|null
    */
    public function getCurrentUsers()
    {
        return $this->container['currentUsers'];
    }

    /**
    * Sets currentUsers
    *
    * @param string[]|null $currentUsers 用户id
    *
    * @return $this
    */
    public function setCurrentUsers($currentUsers)
    {
        $this->container['currentUsers'] = $currentUsers;
        return $this;
    }

    /**
    * Gets warRoomNums
    *  WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    *
    * @return string[]|null
    */
    public function getWarRoomNums()
    {
        return $this->container['warRoomNums'];
    }

    /**
    * Sets warRoomNums
    *
    * @param string[]|null $warRoomNums WarRoom单号，当有这个筛选条件时，其他筛选条件忽略
    *
    * @return $this
    */
    public function setWarRoomNums($warRoomNums)
    {
        $this->container['warRoomNums'] = $warRoomNums;
        return $this;
    }

    /**
    * Gets incidentNum
    *  事件单号 精确查询
    *
    * @return string|null
    */
    public function getIncidentNum()
    {
        return $this->container['incidentNum'];
    }

    /**
    * Sets incidentNum
    *
    * @param string|null $incidentNum 事件单号 精确查询
    *
    * @return $this
    */
    public function setIncidentNum($incidentNum)
    {
        $this->container['incidentNum'] = $incidentNum;
        return $this;
    }

    /**
    * Gets title
    *  WarRoom名称 模糊查询
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title WarRoom名称 模糊查询
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets regionCodeList
    *  区域 多选
    *
    * @return string[]|null
    */
    public function getRegionCodeList()
    {
        return $this->container['regionCodeList'];
    }

    /**
    * Sets regionCodeList
    *
    * @param string[]|null $regionCodeList 区域 多选
    *
    * @return $this
    */
    public function setRegionCodeList($regionCodeList)
    {
        $this->container['regionCodeList'] = $regionCodeList;
        return $this;
    }

    /**
    * Gets incidentLevels
    *  事件级别 多选
    *
    * @return string[]|null
    */
    public function getIncidentLevels()
    {
        return $this->container['incidentLevels'];
    }

    /**
    * Sets incidentLevels
    *
    * @param string[]|null $incidentLevels 事件级别 多选
    *
    * @return $this
    */
    public function setIncidentLevels($incidentLevels)
    {
        $this->container['incidentLevels'] = $incidentLevels;
        return $this;
    }

    /**
    * Gets impactedApplicationIds
    *  影响应用id
    *
    * @return string[]|null
    */
    public function getImpactedApplicationIds()
    {
        return $this->container['impactedApplicationIds'];
    }

    /**
    * Sets impactedApplicationIds
    *
    * @param string[]|null $impactedApplicationIds 影响应用id
    *
    * @return $this
    */
    public function setImpactedApplicationIds($impactedApplicationIds)
    {
        $this->container['impactedApplicationIds'] = $impactedApplicationIds;
        return $this;
    }

    /**
    * Gets admin
    *  WarRoom管理员
    *
    * @return string[]|null
    */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
    * Sets admin
    *
    * @param string[]|null $admin WarRoom管理员
    *
    * @return $this
    */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;
        return $this;
    }

    /**
    * Gets status
    *  WarRoom状态
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status WarRoom状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggeredStartTime
    *  拉起开始时间 默认前30天
    *
    * @return int|null
    */
    public function getTriggeredStartTime()
    {
        return $this->container['triggeredStartTime'];
    }

    /**
    * Sets triggeredStartTime
    *
    * @param int|null $triggeredStartTime 拉起开始时间 默认前30天
    *
    * @return $this
    */
    public function setTriggeredStartTime($triggeredStartTime)
    {
        $this->container['triggeredStartTime'] = $triggeredStartTime;
        return $this;
    }

    /**
    * Gets triggeredEndTime
    *  拉起结束时间 默认当前时间
    *
    * @return int|null
    */
    public function getTriggeredEndTime()
    {
        return $this->container['triggeredEndTime'];
    }

    /**
    * Sets triggeredEndTime
    *
    * @param int|null $triggeredEndTime 拉起结束时间 默认当前时间
    *
    * @return $this
    */
    public function setTriggeredEndTime($triggeredEndTime)
    {
        $this->container['triggeredEndTime'] = $triggeredEndTime;
        return $this;
    }

    /**
    * Gets occurStartTime
    *  发生开始时间
    *
    * @return int|null
    */
    public function getOccurStartTime()
    {
        return $this->container['occurStartTime'];
    }

    /**
    * Sets occurStartTime
    *
    * @param int|null $occurStartTime 发生开始时间
    *
    * @return $this
    */
    public function setOccurStartTime($occurStartTime)
    {
        $this->container['occurStartTime'] = $occurStartTime;
        return $this;
    }

    /**
    * Gets occurEndTime
    *  发生结束时间
    *
    * @return int|null
    */
    public function getOccurEndTime()
    {
        return $this->container['occurEndTime'];
    }

    /**
    * Sets occurEndTime
    *
    * @param int|null $occurEndTime 发生结束时间
    *
    * @return $this
    */
    public function setOccurEndTime($occurEndTime)
    {
        $this->container['occurEndTime'] = $occurEndTime;
        return $this;
    }

    /**
    * Gets recoverStartTime
    *  恢复开始时间
    *
    * @return int|null
    */
    public function getRecoverStartTime()
    {
        return $this->container['recoverStartTime'];
    }

    /**
    * Sets recoverStartTime
    *
    * @param int|null $recoverStartTime 恢复开始时间
    *
    * @return $this
    */
    public function setRecoverStartTime($recoverStartTime)
    {
        $this->container['recoverStartTime'] = $recoverStartTime;
        return $this;
    }

    /**
    * Gets recoverEndTime
    *  恢复结束时间
    *
    * @return int|null
    */
    public function getRecoverEndTime()
    {
        return $this->container['recoverEndTime'];
    }

    /**
    * Sets recoverEndTime
    *
    * @param int|null $recoverEndTime 恢复结束时间
    *
    * @return $this
    */
    public function setRecoverEndTime($recoverEndTime)
    {
        $this->container['recoverEndTime'] = $recoverEndTime;
        return $this;
    }

    /**
    * Gets notificationLevel
    *  通报级别
    *
    * @return string[]|null
    */
    public function getNotificationLevel()
    {
        return $this->container['notificationLevel'];
    }

    /**
    * Sets notificationLevel
    *
    * @param string[]|null $notificationLevel 通报级别
    *
    * @return $this
    */
    public function setNotificationLevel($notificationLevel)
    {
        $this->container['notificationLevel'] = $notificationLevel;
        return $this;
    }

    /**
    * Gets enterpriseProjectIds
    *  企业项目id
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectIds()
    {
        return $this->container['enterpriseProjectIds'];
    }

    /**
    * Sets enterpriseProjectIds
    *
    * @param string[]|null $enterpriseProjectIds 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectIds($enterpriseProjectIds)
    {
        $this->container['enterpriseProjectIds'] = $enterpriseProjectIds;
        return $this;
    }

    /**
    * Gets warRoomNum
    *  WarRoom 单号 前端使用
    *
    * @return string|null
    */
    public function getWarRoomNum()
    {
        return $this->container['warRoomNum'];
    }

    /**
    * Sets warRoomNum
    *
    * @param string|null $warRoomNum WarRoom 单号 前端使用
    *
    * @return $this
    */
    public function setWarRoomNum($warRoomNum)
    {
        $this->container['warRoomNum'] = $warRoomNum;
        return $this;
    }

    /**
    * Gets statisticFlag
    *  是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @return bool|null
    */
    public function getStatisticFlag()
    {
        return $this->container['statisticFlag'];
    }

    /**
    * Sets statisticFlag
    *
    * @param bool|null $statisticFlag 是否统计,false 返回基本信息;true接口只返回统计结果：total_num,running_num,closed_num
    *
    * @return $this
    */
    public function setStatisticFlag($statisticFlag)
    {
        $this->container['statisticFlag'] = $statisticFlag;
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

