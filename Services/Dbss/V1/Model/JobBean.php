<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * status  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    * jobType  类型[废弃，未使用]
    * serverId  虚拟机ID
    * serverName  虚拟机名称
    * resourceId  资源ID
    * beginTime  开始时间
    * endTime  结束时间
    * chargeMode  计费模式 - Period：包周期计费 - Demand：按需计费
    * errorCode  错误码
    * failReason  失败原因
    * haId  防护实例ID,该字段已废弃
    * haName  防护实例名称，该字段已废弃
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'status' => 'string',
            'jobType' => 'string',
            'serverId' => 'string',
            'serverName' => 'string',
            'resourceId' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'chargeMode' => 'string',
            'errorCode' => 'string',
            'failReason' => 'string',
            'haId' => 'string',
            'haName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * status  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    * jobType  类型[废弃，未使用]
    * serverId  虚拟机ID
    * serverName  虚拟机名称
    * resourceId  资源ID
    * beginTime  开始时间
    * endTime  结束时间
    * chargeMode  计费模式 - Period：包周期计费 - Demand：按需计费
    * errorCode  错误码
    * failReason  失败原因
    * haId  防护实例ID,该字段已废弃
    * haName  防护实例名称，该字段已废弃
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'status' => null,
        'jobType' => null,
        'serverId' => null,
        'serverName' => null,
        'resourceId' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'chargeMode' => null,
        'errorCode' => null,
        'failReason' => null,
        'haId' => null,
        'haName' => null
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
    * jobId  任务ID。
    * status  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    * jobType  类型[废弃，未使用]
    * serverId  虚拟机ID
    * serverName  虚拟机名称
    * resourceId  资源ID
    * beginTime  开始时间
    * endTime  结束时间
    * chargeMode  计费模式 - Period：包周期计费 - Demand：按需计费
    * errorCode  错误码
    * failReason  失败原因
    * haId  防护实例ID,该字段已废弃
    * haName  防护实例名称，该字段已废弃
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'status' => 'status',
            'jobType' => 'job_type',
            'serverId' => 'server_id',
            'serverName' => 'server_name',
            'resourceId' => 'resource_id',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'chargeMode' => 'charge_mode',
            'errorCode' => 'error_code',
            'failReason' => 'fail_reason',
            'haId' => 'ha_id',
            'haName' => 'ha_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * status  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    * jobType  类型[废弃，未使用]
    * serverId  虚拟机ID
    * serverName  虚拟机名称
    * resourceId  资源ID
    * beginTime  开始时间
    * endTime  结束时间
    * chargeMode  计费模式 - Period：包周期计费 - Demand：按需计费
    * errorCode  错误码
    * failReason  失败原因
    * haId  防护实例ID,该字段已废弃
    * haName  防护实例名称，该字段已废弃
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'jobType' => 'setJobType',
            'serverId' => 'setServerId',
            'serverName' => 'setServerName',
            'resourceId' => 'setResourceId',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'chargeMode' => 'setChargeMode',
            'errorCode' => 'setErrorCode',
            'failReason' => 'setFailReason',
            'haId' => 'setHaId',
            'haName' => 'setHaName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * status  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    * jobType  类型[废弃，未使用]
    * serverId  虚拟机ID
    * serverName  虚拟机名称
    * resourceId  资源ID
    * beginTime  开始时间
    * endTime  结束时间
    * chargeMode  计费模式 - Period：包周期计费 - Demand：按需计费
    * errorCode  错误码
    * failReason  失败原因
    * haId  防护实例ID,该字段已废弃
    * haName  防护实例名称，该字段已废弃
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'jobType' => 'getJobType',
            'serverId' => 'getServerId',
            'serverName' => 'getServerName',
            'resourceId' => 'getResourceId',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'chargeMode' => 'getChargeMode',
            'errorCode' => 'getErrorCode',
            'failReason' => 'getFailReason',
            'haId' => 'getHaId',
            'haName' => 'getHaName'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['haId'] = isset($data['haId']) ? $data['haId'] : null;
        $this->container['haName'] = isset($data['haName']) ? $data['haName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
        if ($this->container['serverName'] === null) {
            $invalidProperties[] = "'serverName' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
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
    * Gets jobId
    *  任务ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 任务状态 - SUCCESS：成功 - RUNNING：运行中 - FAIL：失败 - INIT：初始化 - READY：就绪
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobType
    *  类型[废弃，未使用]
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 类型[废弃，未使用]
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets serverId
    *  虚拟机ID
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 虚拟机ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverName
    *  虚拟机名称
    *
    * @return string
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string $serverName 虚拟机名称
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间
    *
    * @return int
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int $beginTime 开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
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
    * @param int $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式 - Period：包周期计费 - Demand：按需计费
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 计费模式 - Period：包周期计费 - Demand：按需计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets haId
    *  防护实例ID,该字段已废弃
    *
    * @return string|null
    */
    public function getHaId()
    {
        return $this->container['haId'];
    }

    /**
    * Sets haId
    *
    * @param string|null $haId 防护实例ID,该字段已废弃
    *
    * @return $this
    */
    public function setHaId($haId)
    {
        $this->container['haId'] = $haId;
        return $this;
    }

    /**
    * Gets haName
    *  防护实例名称，该字段已废弃
    *
    * @return string|null
    */
    public function getHaName()
    {
        return $this->container['haName'];
    }

    /**
    * Sets haName
    *
    * @param string|null $haName 防护实例名称，该字段已废弃
    *
    * @return $this
    */
    public function setHaName($haName)
    {
        $this->container['haName'] = $haName;
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

