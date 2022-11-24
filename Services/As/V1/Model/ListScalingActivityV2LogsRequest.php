<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScalingActivityV2LogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScalingActivityV2LogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * logId  伸缩活动日志ID
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * type  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
    * status  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupId' => 'string',
            'logId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'startNumber' => 'int',
            'limit' => 'int',
            'type' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * logId  伸缩活动日志ID
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * type  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
    * status  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupId' => null,
        'logId' => null,
        'startTime' => null,
        'endTime' => null,
        'startNumber' => null,
        'limit' => null,
        'type' => null,
        'status' => null
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
    * scalingGroupId  伸缩组ID。
    * logId  伸缩活动日志ID
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * type  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
    * status  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupId' => 'scaling_group_id',
            'logId' => 'log_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'startNumber' => 'start_number',
            'limit' => 'limit',
            'type' => 'type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupId  伸缩组ID。
    * logId  伸缩活动日志ID
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * type  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
    * status  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupId' => 'setScalingGroupId',
            'logId' => 'setLogId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit',
            'type' => 'setType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupId  伸缩组ID。
    * logId  伸缩活动日志ID
    * startTime  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * endTime  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    * startNumber  查询的起始行号，默认为0。
    * limit  查询记录数，默认20，最大100。
    * type  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
    * status  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupId' => 'getScalingGroupId',
            'logId' => 'getLogId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit',
            'type' => 'getType',
            'status' => 'getStatus'
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
    const TYPE_NORMAL = 'NORMAL';
    const TYPE_MANNUAL_REMOVE = 'MANNUAL_REMOVE';
    const TYPE_MANNUAL_DELETE = 'MANNUAL_DELETE';
    const TYPE_MANNUAL_ADD = 'MANNUAL_ADD';
    const TYPE_ELB_CHECK_DELETE = 'ELB_CHECK_DELETE';
    const TYPE_AUDIT_CHECK_DELETE = 'AUDIT_CHECK_DELETE';
    const TYPE_MODIFY_ELB = 'MODIFY_ELB';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    const STATUS_DOING = 'DOING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_MANNUAL_REMOVE,
            self::TYPE_MANNUAL_DELETE,
            self::TYPE_MANNUAL_ADD,
            self::TYPE_ELB_CHECK_DELETE,
            self::TYPE_AUDIT_CHECK_DELETE,
            self::TYPE_MODIFY_ELB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
            self::STATUS_DOING,
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
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 20;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scalingGroupId'] === null) {
            $invalidProperties[] = "'scalingGroupId' can't be null";
        }
            if (!is_null($this->container['startNumber']) && ($this->container['startNumber'] > 32768)) {
                $invalidProperties[] = "invalid value for 'startNumber', must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets scalingGroupId
    *  伸缩组ID。
    *
    * @return string
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string $scalingGroupId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets logId
    *  伸缩活动日志ID
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
    * @param string|null $logId 伸缩活动日志ID
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets startTime
    *  查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 查询的起始时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
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
    *  查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 查询的截止时间，格式是“yyyy-MM-ddThh:mm:ssZ”。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号，默认为0。
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 查询的起始行号，默认为0。
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数，默认20，最大100。
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
    * @param int|null $limit 查询记录数，默认20，最大100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets type
    *  查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
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
    * @param string|null $type 查询的伸缩活动类型（查询多类型使用逗号分隔）： - NORMAL：普通伸缩活动 - MANNUAL_REMOVE：从伸缩组手动移除实例 - MANNUAL_DELETE：从伸缩组手动移除并删除实例 - MANNUAL_ADD：实例手动加入伸缩组。 - ELB_CHECK_DELETE：ELB检查移除并删除实例。 - AUDIT_CHECK_DELETE：通过审计openstack移除并删除实例。 - DIFF：期望实例数与实际实例数不一致。 - MODIFY_ELB：LB迁移。 - ENTER_STANDBY：实例转入备用。 - EXIT_STANDBY：实例移出备用。
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
    *  查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
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
    * @param string|null $status 查询的伸缩活动状态：SUCCESS：成功；FAIL：失败；DOING：伸缩中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

