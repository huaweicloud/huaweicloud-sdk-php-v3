<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditLogResponseBodyAuditRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditLogResponseBody_audit_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * operateStatus  操作状态
    * operateMessage  操作结果消息
    * auditStatus  审计状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'operation' => 'string',
            'time' => 'int',
            'operateStatus' => 'int',
            'operateMessage' => 'string',
            'auditStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * operateStatus  操作状态
    * operateMessage  操作结果消息
    * auditStatus  审计状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'clusterId' => null,
        'clusterType' => null,
        'operation' => null,
        'time' => 'int64',
        'operateStatus' => 'int32',
        'operateMessage' => null,
        'auditStatus' => 'int32'
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
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * operateStatus  操作状态
    * operateMessage  操作结果消息
    * auditStatus  审计状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'operation' => 'operation',
            'time' => 'time',
            'operateStatus' => 'operate_status',
            'operateMessage' => 'operate_message',
            'auditStatus' => 'audit_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * operateStatus  操作状态
    * operateMessage  操作结果消息
    * auditStatus  审计状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'operation' => 'setOperation',
            'time' => 'setTime',
            'operateStatus' => 'setOperateStatus',
            'operateMessage' => 'setOperateMessage',
            'auditStatus' => 'setAuditStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * operateStatus  操作状态
    * operateMessage  操作结果消息
    * auditStatus  审计状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'operation' => 'getOperation',
            'time' => 'getTime',
            'operateStatus' => 'getOperateStatus',
            'operateMessage' => 'getOperateMessage',
            'auditStatus' => 'getAuditStatus'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['operateStatus'] = isset($data['operateStatus']) ? $data['operateStatus'] : null;
        $this->container['operateMessage'] = isset($data['operateMessage']) ? $data['operateMessage'] : null;
        $this->container['auditStatus'] = isset($data['auditStatus']) ? $data['auditStatus'] : null;
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
    *  日志ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 日志ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets operation
    *  操作
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets time
    *  时间
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets operateStatus
    *  操作状态
    *
    * @return int|null
    */
    public function getOperateStatus()
    {
        return $this->container['operateStatus'];
    }

    /**
    * Sets operateStatus
    *
    * @param int|null $operateStatus 操作状态
    *
    * @return $this
    */
    public function setOperateStatus($operateStatus)
    {
        $this->container['operateStatus'] = $operateStatus;
        return $this;
    }

    /**
    * Gets operateMessage
    *  操作结果消息
    *
    * @return string|null
    */
    public function getOperateMessage()
    {
        return $this->container['operateMessage'];
    }

    /**
    * Sets operateMessage
    *
    * @param string|null $operateMessage 操作结果消息
    *
    * @return $this
    */
    public function setOperateMessage($operateMessage)
    {
        $this->container['operateMessage'] = $operateMessage;
        return $this;
    }

    /**
    * Gets auditStatus
    *  审计状态
    *
    * @return int|null
    */
    public function getAuditStatus()
    {
        return $this->container['auditStatus'];
    }

    /**
    * Sets auditStatus
    *
    * @param int|null $auditStatus 审计状态
    *
    * @return $this
    */
    public function setAuditStatus($auditStatus)
    {
        $this->container['auditStatus'] = $auditStatus;
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

