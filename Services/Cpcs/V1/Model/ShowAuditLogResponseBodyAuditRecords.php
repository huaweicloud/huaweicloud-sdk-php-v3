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
    * status  操作状态
    * failureMessage  操作失败消息
    * verification  操作验证信息
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
            'status' => 'string',
            'failureMessage' => 'string',
            'verification' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * status  操作状态
    * failureMessage  操作失败消息
    * verification  操作验证信息
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
        'status' => null,
        'failureMessage' => null,
        'verification' => null
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
    * status  操作状态
    * failureMessage  操作失败消息
    * verification  操作验证信息
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
            'status' => 'status',
            'failureMessage' => 'failure_message',
            'verification' => 'verification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * status  操作状态
    * failureMessage  操作失败消息
    * verification  操作验证信息
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
            'status' => 'setStatus',
            'failureMessage' => 'setFailureMessage',
            'verification' => 'setVerification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  日志ID
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterType  集群类型
    * operation  操作
    * time  时间
    * status  操作状态
    * failureMessage  操作失败消息
    * verification  操作验证信息
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
            'status' => 'getStatus',
            'failureMessage' => 'getFailureMessage',
            'verification' => 'getVerification'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['failureMessage'] = isset($data['failureMessage']) ? $data['failureMessage'] : null;
        $this->container['verification'] = isset($data['verification']) ? $data['verification'] : null;
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
    * Gets status
    *  操作状态
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
    * @param string|null $status 操作状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets failureMessage
    *  操作失败消息
    *
    * @return string|null
    */
    public function getFailureMessage()
    {
        return $this->container['failureMessage'];
    }

    /**
    * Sets failureMessage
    *
    * @param string|null $failureMessage 操作失败消息
    *
    * @return $this
    */
    public function setFailureMessage($failureMessage)
    {
        $this->container['failureMessage'] = $failureMessage;
        return $this;
    }

    /**
    * Gets verification
    *  操作验证信息
    *
    * @return string|null
    */
    public function getVerification()
    {
        return $this->container['verification'];
    }

    /**
    * Sets verification
    *
    * @param string|null $verification 操作验证信息
    *
    * @return $this
    */
    public function setVerification($verification)
    {
        $this->container['verification'] = $verification;
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

