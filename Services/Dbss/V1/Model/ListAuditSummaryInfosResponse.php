<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAuditSummaryInfosResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAuditSummaryInfosResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * auditDuration  审计总时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * dataList  列表信息
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'auditDuration' => 'int',
            'totalSql' => 'int',
            'totalRisk' => 'int',
            'todaySql' => 'int',
            'todayRisk' => 'int',
            'todaySession' => 'int',
            'updateTime' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryResponseDataList[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * auditDuration  审计总时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * dataList  列表信息
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'auditDuration' => 'int64',
        'totalSql' => 'int64',
        'totalRisk' => 'int64',
        'todaySql' => 'int64',
        'todayRisk' => 'int64',
        'todaySession' => 'int64',
        'updateTime' => 'int64',
        'dataList' => null,
        'total' => 'int32'
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
    * projectId  项目ID
    * auditDuration  审计总时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * dataList  列表信息
    * total  总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'auditDuration' => 'audit_duration',
            'totalSql' => 'total_sql',
            'totalRisk' => 'total_risk',
            'todaySql' => 'today_sql',
            'todayRisk' => 'today_risk',
            'todaySession' => 'today_session',
            'updateTime' => 'update_time',
            'dataList' => 'data_list',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * auditDuration  审计总时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * dataList  列表信息
    * total  总数
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'auditDuration' => 'setAuditDuration',
            'totalSql' => 'setTotalSql',
            'totalRisk' => 'setTotalRisk',
            'todaySql' => 'setTodaySql',
            'todayRisk' => 'setTodayRisk',
            'todaySession' => 'setTodaySession',
            'updateTime' => 'setUpdateTime',
            'dataList' => 'setDataList',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * auditDuration  审计总时长
    * totalSql  语句总量
    * totalRisk  风险总量
    * todaySql  今日语句
    * todayRisk  今日风险
    * todaySession  今日会话
    * updateTime  更新时间
    * dataList  列表信息
    * total  总数
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'auditDuration' => 'getAuditDuration',
            'totalSql' => 'getTotalSql',
            'totalRisk' => 'getTotalRisk',
            'todaySql' => 'getTodaySql',
            'todayRisk' => 'getTodayRisk',
            'todaySession' => 'getTodaySession',
            'updateTime' => 'getUpdateTime',
            'dataList' => 'getDataList',
            'total' => 'getTotal'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['auditDuration'] = isset($data['auditDuration']) ? $data['auditDuration'] : null;
        $this->container['totalSql'] = isset($data['totalSql']) ? $data['totalSql'] : null;
        $this->container['totalRisk'] = isset($data['totalRisk']) ? $data['totalRisk'] : null;
        $this->container['todaySql'] = isset($data['todaySql']) ? $data['todaySql'] : null;
        $this->container['todayRisk'] = isset($data['todayRisk']) ? $data['todayRisk'] : null;
        $this->container['todaySession'] = isset($data['todaySession']) ? $data['todaySession'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets auditDuration
    *  审计总时长
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
    * @param int|null $auditDuration 审计总时长
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
    * Gets dataList
    *  列表信息
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryResponseDataList[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AuditSummaryResponseDataList[]|null $dataList 列表信息
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

