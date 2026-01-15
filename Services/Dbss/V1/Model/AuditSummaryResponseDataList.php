<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSummaryResponseDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSummaryResponse_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * status  状态 - 1：success - 2：failure
    * projectId  项目ID
    * instanceId  实例ID
    * instanceName  实例名称
    * auditDuration  审计时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * reserve1  保留字1
    * reserve2  保留字2
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'status' => 'string',
            'projectId' => 'string',
            'instanceId' => 'int',
            'instanceName' => 'string',
            'auditDuration' => 'int',
            'totalSql' => 'int',
            'totalRisk' => 'int',
            'todaySql' => 'int',
            'todayRisk' => 'int',
            'todaySession' => 'int',
            'updateTime' => 'int',
            'reserve1' => 'string',
            'reserve2' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * status  状态 - 1：success - 2：failure
    * projectId  项目ID
    * instanceId  实例ID
    * instanceName  实例名称
    * auditDuration  审计时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * reserve1  保留字1
    * reserve2  保留字2
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'status' => null,
        'projectId' => null,
        'instanceId' => 'int64',
        'instanceName' => null,
        'auditDuration' => 'int64',
        'totalSql' => 'int64',
        'totalRisk' => 'int64',
        'todaySql' => 'int64',
        'todayRisk' => 'int64',
        'todaySession' => 'int64',
        'updateTime' => 'int64',
        'reserve1' => null,
        'reserve2' => null
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
    * id  ID
    * status  状态 - 1：success - 2：failure
    * projectId  项目ID
    * instanceId  实例ID
    * instanceName  实例名称
    * auditDuration  审计时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * reserve1  保留字1
    * reserve2  保留字2
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'auditDuration' => 'audit_duration',
            'totalSql' => 'total_sql',
            'totalRisk' => 'total_risk',
            'todaySql' => 'today_sql',
            'todayRisk' => 'today_risk',
            'todaySession' => 'today_session',
            'updateTime' => 'update_time',
            'reserve1' => 'reserve1',
            'reserve2' => 'reserve2'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * status  状态 - 1：success - 2：failure
    * projectId  项目ID
    * instanceId  实例ID
    * instanceName  实例名称
    * auditDuration  审计时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * reserve1  保留字1
    * reserve2  保留字2
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'auditDuration' => 'setAuditDuration',
            'totalSql' => 'setTotalSql',
            'totalRisk' => 'setTotalRisk',
            'todaySql' => 'setTodaySql',
            'todayRisk' => 'setTodayRisk',
            'todaySession' => 'setTodaySession',
            'updateTime' => 'setUpdateTime',
            'reserve1' => 'setReserve1',
            'reserve2' => 'setReserve2'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * status  状态 - 1：success - 2：failure
    * projectId  项目ID
    * instanceId  实例ID
    * instanceName  实例名称
    * auditDuration  审计时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * reserve1  保留字1
    * reserve2  保留字2
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'auditDuration' => 'getAuditDuration',
            'totalSql' => 'getTotalSql',
            'totalRisk' => 'getTotalRisk',
            'todaySql' => 'getTodaySql',
            'todayRisk' => 'getTodayRisk',
            'todaySession' => 'getTodaySession',
            'updateTime' => 'getUpdateTime',
            'reserve1' => 'getReserve1',
            'reserve2' => 'getReserve2'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['auditDuration'] = isset($data['auditDuration']) ? $data['auditDuration'] : null;
        $this->container['totalSql'] = isset($data['totalSql']) ? $data['totalSql'] : null;
        $this->container['totalRisk'] = isset($data['totalRisk']) ? $data['totalRisk'] : null;
        $this->container['todaySql'] = isset($data['todaySql']) ? $data['todaySql'] : null;
        $this->container['todayRisk'] = isset($data['todayRisk']) ? $data['todayRisk'] : null;
        $this->container['todaySession'] = isset($data['todaySession']) ? $data['todaySession'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['reserve1'] = isset($data['reserve1']) ? $data['reserve1'] : null;
        $this->container['reserve2'] = isset($data['reserve2']) ? $data['reserve2'] : null;
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
    * Gets id
    *  ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  状态 - 1：success - 2：failure
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
    * @param string|null $status 状态 - 1：success - 2：failure
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return int|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param int|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets auditDuration
    *  审计时长
    *
    * @return int|null
    */
    public function getAuditDuration()
    {
        return $this->container['auditDuration'];
    }

    /**
    * Sets auditDuration
    *
    * @param int|null $auditDuration 审计时长
    *
    * @return $this
    */
    public function setAuditDuration($auditDuration)
    {
        $this->container['auditDuration'] = $auditDuration;
        return $this;
    }

    /**
    * Gets totalSql
    *  语句总量
    *
    * @return int|null
    */
    public function getTotalSql()
    {
        return $this->container['totalSql'];
    }

    /**
    * Sets totalSql
    *
    * @param int|null $totalSql 语句总量
    *
    * @return $this
    */
    public function setTotalSql($totalSql)
    {
        $this->container['totalSql'] = $totalSql;
        return $this;
    }

    /**
    * Gets totalRisk
    *  风险总量
    *
    * @return int|null
    */
    public function getTotalRisk()
    {
        return $this->container['totalRisk'];
    }

    /**
    * Sets totalRisk
    *
    * @param int|null $totalRisk 风险总量
    *
    * @return $this
    */
    public function setTotalRisk($totalRisk)
    {
        $this->container['totalRisk'] = $totalRisk;
        return $this;
    }

    /**
    * Gets todaySql
    *  今日语句
    *
    * @return int|null
    */
    public function getTodaySql()
    {
        return $this->container['todaySql'];
    }

    /**
    * Sets todaySql
    *
    * @param int|null $todaySql 今日语句
    *
    * @return $this
    */
    public function setTodaySql($todaySql)
    {
        $this->container['todaySql'] = $todaySql;
        return $this;
    }

    /**
    * Gets todayRisk
    *  今日风险
    *
    * @return int|null
    */
    public function getTodayRisk()
    {
        return $this->container['todayRisk'];
    }

    /**
    * Sets todayRisk
    *
    * @param int|null $todayRisk 今日风险
    *
    * @return $this
    */
    public function setTodayRisk($todayRisk)
    {
        $this->container['todayRisk'] = $todayRisk;
        return $this;
    }

    /**
    * Gets todaySession
    *  今日会话
    *
    * @return int|null
    */
    public function getTodaySession()
    {
        return $this->container['todaySession'];
    }

    /**
    * Sets todaySession
    *
    * @param int|null $todaySession 今日会话
    *
    * @return $this
    */
    public function setTodaySession($todaySession)
    {
        $this->container['todaySession'] = $todaySession;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
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
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets reserve1
    *  保留字1
    *
    * @return string|null
    */
    public function getReserve1()
    {
        return $this->container['reserve1'];
    }

    /**
    * Sets reserve1
    *
    * @param string|null $reserve1 保留字1
    *
    * @return $this
    */
    public function setReserve1($reserve1)
    {
        $this->container['reserve1'] = $reserve1;
        return $this;
    }

    /**
    * Gets reserve2
    *  保留字2
    *
    * @return string|null
    */
    public function getReserve2()
    {
        return $this->container['reserve2'];
    }

    /**
    * Sets reserve2
    *
    * @param string|null $reserve2 保留字2
    *
    * @return $this
    */
    public function setReserve2($reserve2)
    {
        $this->container['reserve2'] = $reserve2;
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

