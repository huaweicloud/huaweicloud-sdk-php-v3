<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordInfoResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordInfoResponseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 主键id。 **取值范围**: 不涉及。
    * action  **参数解释**: 动作。 **取值范围**: 不涉及。
    * status  **参数解释**: 操作状态。 **取值范围**: 不涉及。
    * message  **参数解释**: 信息。 **取值范围**: 不涉及。
    * entityId  **参数解释**: 实体id。 **取值范围**: 不涉及。
    * entityType  **参数解释**: 实体类型。 **取值范围**: 不涉及。
    * jobId  **参数解释**: 工作流id。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例id。 **取值范围**: 不涉及。
    * createdAt  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updatedAt  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * extendedInfo  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    * id  **参数解释**: 主键id。 **取值范围**: 不涉及。
    * action  **参数解释**: 动作。 **取值范围**: 不涉及。
    * status  **参数解释**: 操作状态。 **取值范围**: 不涉及。
    * message  **参数解释**: 信息。 **取值范围**: 不涉及。
    * entityId  **参数解释**: 实体id。 **取值范围**: 不涉及。
    * entityType  **参数解释**: 实体类型。 **取值范围**: 不涉及。
    * jobId  **参数解释**: 工作流id。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例id。 **取值范围**: 不涉及。
    * createdAt  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updatedAt  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * extendedInfo  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    * id  **参数解释**: 主键id。 **取值范围**: 不涉及。
    * action  **参数解释**: 动作。 **取值范围**: 不涉及。
    * status  **参数解释**: 操作状态。 **取值范围**: 不涉及。
    * message  **参数解释**: 信息。 **取值范围**: 不涉及。
    * entityId  **参数解释**: 实体id。 **取值范围**: 不涉及。
    * entityType  **参数解释**: 实体类型。 **取值范围**: 不涉及。
    * jobId  **参数解释**: 工作流id。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例id。 **取值范围**: 不涉及。
    * createdAt  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updatedAt  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * extendedInfo  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    * id  **参数解释**: 主键id。 **取值范围**: 不涉及。
    * action  **参数解释**: 动作。 **取值范围**: 不涉及。
    * status  **参数解释**: 操作状态。 **取值范围**: 不涉及。
    * message  **参数解释**: 信息。 **取值范围**: 不涉及。
    * entityId  **参数解释**: 实体id。 **取值范围**: 不涉及。
    * entityType  **参数解释**: 实体类型。 **取值范围**: 不涉及。
    * jobId  **参数解释**: 工作流id。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例id。 **取值范围**: 不涉及。
    * createdAt  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updatedAt  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * extendedInfo  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    * id  **参数解释**: 主键id。 **取值范围**: 不涉及。
    * action  **参数解释**: 动作。 **取值范围**: 不涉及。
    * status  **参数解释**: 操作状态。 **取值范围**: 不涉及。
    * message  **参数解释**: 信息。 **取值范围**: 不涉及。
    * entityId  **参数解释**: 实体id。 **取值范围**: 不涉及。
    * entityType  **参数解释**: 实体类型。 **取值范围**: 不涉及。
    * jobId  **参数解释**: 工作流id。 **取值范围**: 不涉及。
    * instanceId  **参数解释**: 实例id。 **取值范围**: 不涉及。
    * createdAt  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * updatedAt  **参数解释**: 更新时间。 **取值范围**: 不涉及。
    * extendedInfo  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    *  **参数解释**: 主键id。 **取值范围**: 不涉及。
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
    * @param string|null $id **参数解释**: 主键id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 动作。 **取值范围**: 不涉及。
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
    * @param string|null $action **参数解释**: 动作。 **取值范围**: 不涉及。
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
    *  **参数解释**: 操作状态。 **取值范围**: 不涉及。
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
    * @param string|null $status **参数解释**: 操作状态。 **取值范围**: 不涉及。
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
    *  **参数解释**: 信息。 **取值范围**: 不涉及。
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
    * @param string|null $message **参数解释**: 信息。 **取值范围**: 不涉及。
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
    *  **参数解释**: 实体id。 **取值范围**: 不涉及。
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
    * @param string|null $entityId **参数解释**: 实体id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 实体类型。 **取值范围**: 不涉及。
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
    * @param string|null $entityType **参数解释**: 实体类型。 **取值范围**: 不涉及。
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
    *  **参数解释**: 工作流id。 **取值范围**: 不涉及。
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
    * @param string|null $jobId **参数解释**: 工作流id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 实例id。 **取值范围**: 不涉及。
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
    * @param string|null $instanceId **参数解释**: 实例id。 **取值范围**: 不涉及。
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
    *  **参数解释**: 创建时间。 **取值范围**: 不涉及。
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
    * @param string|null $createdAt **参数解释**: 创建时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 更新时间。 **取值范围**: 不涉及。
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
    * @param string|null $updatedAt **参数解释**: 更新时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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
    * @param object|null $extendedInfo **参数解释**: 扩展信息。 **取值范围**: 不涉及。
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

