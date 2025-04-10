<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键id
    * action  动作
    * status  操作状态
    * message  信息
    * entityId  实体id
    * entityType  实体类型
    * jobId  工作流id
    * instanceId  实例id
    * createdAt  创建时间
    * updatedAt  更新时间
    * extendedInfo  扩展信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'action' => 'string',
            'status' => 'string',
            'message' => 'string',
            'entityId' => 'string',
            'entityType' => 'string',
            'jobId' => 'string',
            'instanceId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'extendedInfo' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键id
    * action  动作
    * status  操作状态
    * message  信息
    * entityId  实体id
    * entityType  实体类型
    * jobId  工作流id
    * instanceId  实例id
    * createdAt  创建时间
    * updatedAt  更新时间
    * extendedInfo  扩展信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'action' => null,
        'status' => null,
        'message' => null,
        'entityId' => null,
        'entityType' => null,
        'jobId' => null,
        'instanceId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'extendedInfo' => null
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
    * id  主键id
    * action  动作
    * status  操作状态
    * message  信息
    * entityId  实体id
    * entityType  实体类型
    * jobId  工作流id
    * instanceId  实例id
    * createdAt  创建时间
    * updatedAt  更新时间
    * extendedInfo  扩展信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'action' => 'action',
            'status' => 'status',
            'message' => 'message',
            'entityId' => 'entity_id',
            'entityType' => 'entity_type',
            'jobId' => 'job_id',
            'instanceId' => 'instance_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'extendedInfo' => 'extended_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键id
    * action  动作
    * status  操作状态
    * message  信息
    * entityId  实体id
    * entityType  实体类型
    * jobId  工作流id
    * instanceId  实例id
    * createdAt  创建时间
    * updatedAt  更新时间
    * extendedInfo  扩展信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'action' => 'setAction',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'entityId' => 'setEntityId',
            'entityType' => 'setEntityType',
            'jobId' => 'setJobId',
            'instanceId' => 'setInstanceId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'extendedInfo' => 'setExtendedInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键id
    * action  动作
    * status  操作状态
    * message  信息
    * entityId  实体id
    * entityType  实体类型
    * jobId  工作流id
    * instanceId  实例id
    * createdAt  创建时间
    * updatedAt  更新时间
    * extendedInfo  扩展信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'action' => 'getAction',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'entityId' => 'getEntityId',
            'entityType' => 'getEntityType',
            'jobId' => 'getJobId',
            'instanceId' => 'getInstanceId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'extendedInfo' => 'getExtendedInfo'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['extendedInfo'] = isset($data['extendedInfo']) ? $data['extendedInfo'] : null;
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
    *  主键id
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
    * @param string|null $id 主键id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets action
    *  动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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
    * Gets message
    *  信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets entityId
    *  实体id
    *
    * @return string|null
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string|null $entityId 实体id
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets entityType
    *  实体类型
    *
    * @return string|null
    */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
    * Sets entityType
    *
    * @param string|null $entityType 实体类型
    *
    * @return $this
    */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;
        return $this;
    }

    /**
    * Gets jobId
    *  工作流id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 工作流id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets extendedInfo
    *  扩展信息
    *
    * @return object|null
    */
    public function getExtendedInfo()
    {
        return $this->container['extendedInfo'];
    }

    /**
    * Sets extendedInfo
    *
    * @param object|null $extendedInfo 扩展信息
    *
    * @return $this
    */
    public function setExtendedInfo($extendedInfo)
    {
        $this->container['extendedInfo'] = $extendedInfo;
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

