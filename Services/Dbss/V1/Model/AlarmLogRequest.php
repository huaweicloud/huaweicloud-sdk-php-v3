<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  time
    * risk  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    * type  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    * status  告警确认状态 - DONE：已确认 - UNDO：未确认
    * page  页码
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => '\HuaweiCloud\SDK\Dbss\V1\Model\AlarmLogRequestTime',
            'risk' => 'string[]',
            'type' => 'string',
            'status' => 'string',
            'page' => 'int',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  time
    * risk  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    * type  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    * status  告警确认状态 - DONE：已确认 - UNDO：未确认
    * page  页码
    * size  每页条数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'risk' => null,
        'type' => null,
        'status' => null,
        'page' => 'int32',
        'size' => 'int32'
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
    * time  time
    * risk  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    * type  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    * status  告警确认状态 - DONE：已确认 - UNDO：未确认
    * page  页码
    * size  每页条数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'risk' => 'risk',
            'type' => 'type',
            'status' => 'status',
            'page' => 'page',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  time
    * risk  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    * type  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    * status  告警确认状态 - DONE：已确认 - UNDO：未确认
    * page  页码
    * size  每页条数
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'risk' => 'setRisk',
            'type' => 'setType',
            'status' => 'setStatus',
            'page' => 'setPage',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  time
    * risk  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    * type  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    * status  告警确认状态 - DONE：已确认 - UNDO：未确认
    * page  页码
    * size  每页条数
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'risk' => 'getRisk',
            'type' => 'getType',
            'status' => 'getStatus',
            'page' => 'getPage',
            'size' => 'getSize'
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
    const STATUS_DONE = 'DONE';
    const STATUS_UNDO = 'UNDO';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DONE,
            self::STATUS_UNDO,
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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
    * Gets time
    *  time
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\AlarmLogRequestTime
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\AlarmLogRequestTime $time time
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets risk
    *  风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    *
    * @return string[]|null
    */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
    * Sets risk
    *
    * @param string[]|null $risk 风险级别 - LOW：低 - MEDIUM：中 - HIGH：高
    *
    * @return $this
    */
    public function setRisk($risk)
    {
        $this->container['risk'] = $risk;
        return $this;
    }

    /**
    * Gets type
    *  告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 告警类型 - RISK_RULE：风险规则 - RISK_CPU：CPU超限 - RISK_MEMORY：内存超限 - RISK_DISK：磁盘超限 - RISK_DISK_CAPACITY：磁盘容量不足六个月 - RISK_BACKUP：备份失败 - AUDIT_QPS_OVERFLOW：流量超限入库延迟告警 - RISK_AGENT：Agent异常 - AUDIT_BACKUP_FAILED：实例备份失败(运维侧)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  告警确认状态 - DONE：已确认 - UNDO：未确认
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
    * @param string|null $status 告警确认状态 - DONE：已确认 - UNDO：未确认
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets page
    *  页码
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 页码
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  每页条数
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 每页条数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

