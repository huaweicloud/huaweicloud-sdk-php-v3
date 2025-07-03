<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmDataListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmDataListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * page  页码。
    * pageSize  每页数量。
    * region  region英文名称。
    * appName  组件环境名称。
    * businessId  应用id。
    * monitorItemId  监控项id。
    * status  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    * alarmLevel  告警级别  COMMON：轻微  CRITICAL：严重。
    * keyword  关键字。
    * alarmStartTime  告警开始时间。
    * alarmEndTime  告警结束时间。
    * collectorId  采集器id。
    * ipAddress  实例ip地址。
    * envList  环境集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'page' => 'int',
            'pageSize' => 'int',
            'region' => 'string',
            'appName' => 'string',
            'businessId' => 'int',
            'monitorItemId' => 'int',
            'status' => 'string',
            'alarmLevel' => 'string',
            'keyword' => 'string',
            'alarmStartTime' => 'string',
            'alarmEndTime' => 'string',
            'collectorId' => 'int',
            'ipAddress' => 'string',
            'envList' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * page  页码。
    * pageSize  每页数量。
    * region  region英文名称。
    * appName  组件环境名称。
    * businessId  应用id。
    * monitorItemId  监控项id。
    * status  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    * alarmLevel  告警级别  COMMON：轻微  CRITICAL：严重。
    * keyword  关键字。
    * alarmStartTime  告警开始时间。
    * alarmEndTime  告警结束时间。
    * collectorId  采集器id。
    * ipAddress  实例ip地址。
    * envList  环境集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'page' => 'int32',
        'pageSize' => 'int32',
        'region' => null,
        'appName' => null,
        'businessId' => 'int64',
        'monitorItemId' => 'int64',
        'status' => null,
        'alarmLevel' => null,
        'keyword' => null,
        'alarmStartTime' => null,
        'alarmEndTime' => null,
        'collectorId' => 'int32',
        'ipAddress' => null,
        'envList' => 'int64'
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
    * page  页码。
    * pageSize  每页数量。
    * region  region英文名称。
    * appName  组件环境名称。
    * businessId  应用id。
    * monitorItemId  监控项id。
    * status  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    * alarmLevel  告警级别  COMMON：轻微  CRITICAL：严重。
    * keyword  关键字。
    * alarmStartTime  告警开始时间。
    * alarmEndTime  告警结束时间。
    * collectorId  采集器id。
    * ipAddress  实例ip地址。
    * envList  环境集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'page' => 'page',
            'pageSize' => 'page_size',
            'region' => 'region',
            'appName' => 'app_name',
            'businessId' => 'business_id',
            'monitorItemId' => 'monitor_item_id',
            'status' => 'status',
            'alarmLevel' => 'alarm_level',
            'keyword' => 'keyword',
            'alarmStartTime' => 'alarm_start_time',
            'alarmEndTime' => 'alarm_end_time',
            'collectorId' => 'collector_id',
            'ipAddress' => 'ip_address',
            'envList' => 'env_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * page  页码。
    * pageSize  每页数量。
    * region  region英文名称。
    * appName  组件环境名称。
    * businessId  应用id。
    * monitorItemId  监控项id。
    * status  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    * alarmLevel  告警级别  COMMON：轻微  CRITICAL：严重。
    * keyword  关键字。
    * alarmStartTime  告警开始时间。
    * alarmEndTime  告警结束时间。
    * collectorId  采集器id。
    * ipAddress  实例ip地址。
    * envList  环境集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'region' => 'setRegion',
            'appName' => 'setAppName',
            'businessId' => 'setBusinessId',
            'monitorItemId' => 'setMonitorItemId',
            'status' => 'setStatus',
            'alarmLevel' => 'setAlarmLevel',
            'keyword' => 'setKeyword',
            'alarmStartTime' => 'setAlarmStartTime',
            'alarmEndTime' => 'setAlarmEndTime',
            'collectorId' => 'setCollectorId',
            'ipAddress' => 'setIpAddress',
            'envList' => 'setEnvList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * page  页码。
    * pageSize  每页数量。
    * region  region英文名称。
    * appName  组件环境名称。
    * businessId  应用id。
    * monitorItemId  监控项id。
    * status  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    * alarmLevel  告警级别  COMMON：轻微  CRITICAL：严重。
    * keyword  关键字。
    * alarmStartTime  告警开始时间。
    * alarmEndTime  告警结束时间。
    * collectorId  采集器id。
    * ipAddress  实例ip地址。
    * envList  环境集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'region' => 'getRegion',
            'appName' => 'getAppName',
            'businessId' => 'getBusinessId',
            'monitorItemId' => 'getMonitorItemId',
            'status' => 'getStatus',
            'alarmLevel' => 'getAlarmLevel',
            'keyword' => 'getKeyword',
            'alarmStartTime' => 'getAlarmStartTime',
            'alarmEndTime' => 'getAlarmEndTime',
            'collectorId' => 'getCollectorId',
            'ipAddress' => 'getIpAddress',
            'envList' => 'getEnvList'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['monitorItemId'] = isset($data['monitorItemId']) ? $data['monitorItemId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['alarmStartTime'] = isset($data['alarmStartTime']) ? $data['alarmStartTime'] : null;
        $this->container['alarmEndTime'] = isset($data['alarmEndTime']) ? $data['alarmEndTime'] : null;
        $this->container['collectorId'] = isset($data['collectorId']) ? $data['collectorId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['envList'] = isset($data['envList']) ? $data['envList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['businessId'] === null) {
            $invalidProperties[] = "'businessId' can't be null";
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
    * Gets page
    *  页码。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页数量。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets region
    *  region英文名称。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region英文名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets appName
    *  组件环境名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 组件环境名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets monitorItemId
    *  监控项id。
    *
    * @return int|null
    */
    public function getMonitorItemId()
    {
        return $this->container['monitorItemId'];
    }

    /**
    * Sets monitorItemId
    *
    * @param int|null $monitorItemId 监控项id。
    *
    * @return $this
    */
    public function setMonitorItemId($monitorItemId)
    {
        $this->container['monitorItemId'] = $monitorItemId;
        return $this;
    }

    /**
    * Gets status
    *  告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
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
    * @param string|null $status 告警状态  RECOVER：已恢复 ABNORMAL：异常 ALERT：告警中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别  COMMON：轻微  CRITICAL：严重。
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 告警级别  COMMON：轻微  CRITICAL：严重。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets alarmStartTime
    *  告警开始时间。
    *
    * @return string|null
    */
    public function getAlarmStartTime()
    {
        return $this->container['alarmStartTime'];
    }

    /**
    * Sets alarmStartTime
    *
    * @param string|null $alarmStartTime 告警开始时间。
    *
    * @return $this
    */
    public function setAlarmStartTime($alarmStartTime)
    {
        $this->container['alarmStartTime'] = $alarmStartTime;
        return $this;
    }

    /**
    * Gets alarmEndTime
    *  告警结束时间。
    *
    * @return string|null
    */
    public function getAlarmEndTime()
    {
        return $this->container['alarmEndTime'];
    }

    /**
    * Sets alarmEndTime
    *
    * @param string|null $alarmEndTime 告警结束时间。
    *
    * @return $this
    */
    public function setAlarmEndTime($alarmEndTime)
    {
        $this->container['alarmEndTime'] = $alarmEndTime;
        return $this;
    }

    /**
    * Gets collectorId
    *  采集器id。
    *
    * @return int|null
    */
    public function getCollectorId()
    {
        return $this->container['collectorId'];
    }

    /**
    * Sets collectorId
    *
    * @param int|null $collectorId 采集器id。
    *
    * @return $this
    */
    public function setCollectorId($collectorId)
    {
        $this->container['collectorId'] = $collectorId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  实例ip地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 实例ip地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets envList
    *  环境集合。
    *
    * @return int[]|null
    */
    public function getEnvList()
    {
        return $this->container['envList'];
    }

    /**
    * Sets envList
    *
    * @param int[]|null $envList 环境集合。
    *
    * @return $this
    */
    public function setEnvList($envList)
    {
        $this->container['envList'] = $envList;
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

