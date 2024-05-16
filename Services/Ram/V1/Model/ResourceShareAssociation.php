<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceShareAssociation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceShareAssociation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associatedEntity  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    * associationType  绑定中包含的实体类型。
    * createdAt  绑定被创建的时间。
    * updatedAt  最后一次更新绑定的时间。
    * external  标识资源使用者是否和共享的拥有者属于同一个组织
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * status  绑定的当前状态。
    * statusMessage  绑定的当前状态的描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associatedEntity' => 'string',
            'associationType' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'external' => 'bool',
            'resourceShareId' => 'string',
            'resourceShareName' => 'string',
            'status' => 'string',
            'statusMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associatedEntity  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    * associationType  绑定中包含的实体类型。
    * createdAt  绑定被创建的时间。
    * updatedAt  最后一次更新绑定的时间。
    * external  标识资源使用者是否和共享的拥有者属于同一个组织
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * status  绑定的当前状态。
    * statusMessage  绑定的当前状态的描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associatedEntity' => null,
        'associationType' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'external' => null,
        'resourceShareId' => null,
        'resourceShareName' => null,
        'status' => null,
        'statusMessage' => null
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
    * associatedEntity  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    * associationType  绑定中包含的实体类型。
    * createdAt  绑定被创建的时间。
    * updatedAt  最后一次更新绑定的时间。
    * external  标识资源使用者是否和共享的拥有者属于同一个组织
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * status  绑定的当前状态。
    * statusMessage  绑定的当前状态的描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associatedEntity' => 'associated_entity',
            'associationType' => 'association_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'external' => 'external',
            'resourceShareId' => 'resource_share_id',
            'resourceShareName' => 'resource_share_name',
            'status' => 'status',
            'statusMessage' => 'status_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associatedEntity  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    * associationType  绑定中包含的实体类型。
    * createdAt  绑定被创建的时间。
    * updatedAt  最后一次更新绑定的时间。
    * external  标识资源使用者是否和共享的拥有者属于同一个组织
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * status  绑定的当前状态。
    * statusMessage  绑定的当前状态的描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'associatedEntity' => 'setAssociatedEntity',
            'associationType' => 'setAssociationType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'external' => 'setExternal',
            'resourceShareId' => 'setResourceShareId',
            'resourceShareName' => 'setResourceShareName',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associatedEntity  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    * associationType  绑定中包含的实体类型。
    * createdAt  绑定被创建的时间。
    * updatedAt  最后一次更新绑定的时间。
    * external  标识资源使用者是否和共享的拥有者属于同一个组织
    * resourceShareId  资源共享实例的ID。
    * resourceShareName  资源共享实例的名称。
    * status  绑定的当前状态。
    * statusMessage  绑定的当前状态的描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'associatedEntity' => 'getAssociatedEntity',
            'associationType' => 'getAssociationType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'external' => 'getExternal',
            'resourceShareId' => 'getResourceShareId',
            'resourceShareName' => 'getResourceShareName',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage'
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
        $this->container['associatedEntity'] = isset($data['associatedEntity']) ? $data['associatedEntity'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['external'] = isset($data['external']) ? $data['external'] : null;
        $this->container['resourceShareId'] = isset($data['resourceShareId']) ? $data['resourceShareId'] : null;
        $this->container['resourceShareName'] = isset($data['resourceShareName']) ? $data['resourceShareName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['associatedEntity'] === null) {
            $invalidProperties[] = "'associatedEntity' can't be null";
        }
            if ((mb_strlen($this->container['associatedEntity']) > 1500)) {
                $invalidProperties[] = "invalid value for 'associatedEntity', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['associatedEntity']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedEntity', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['associationType'] === null) {
            $invalidProperties[] = "'associationType' can't be null";
        }
            if ((mb_strlen($this->container['associationType']) > 36)) {
                $invalidProperties[] = "invalid value for 'associationType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['associationType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associationType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['resourceShareId'] === null) {
            $invalidProperties[] = "'resourceShareId' can't be null";
        }
            if ((mb_strlen($this->container['resourceShareId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceShareId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['resourceShareName'] === null) {
            $invalidProperties[] = "'resourceShareName' can't be null";
        }
            if ((mb_strlen($this->container['resourceShareName']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceShareName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceShareName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceShareName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['statusMessage']) && (mb_strlen($this->container['statusMessage']) > 65535)) {
                $invalidProperties[] = "invalid value for 'statusMessage', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['statusMessage']) && (mb_strlen($this->container['statusMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusMessage', the character length must be bigger than or equal to 0.";
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
    * Gets associatedEntity
    *  绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    *
    * @return string
    */
    public function getAssociatedEntity()
    {
        return $this->container['associatedEntity'];
    }

    /**
    * Sets associatedEntity
    *
    * @param string $associatedEntity 绑定的实体。这可以是共享资源的URN、账号ID、组织根的URN或OU的URN之一。
    *
    * @return $this
    */
    public function setAssociatedEntity($associatedEntity)
    {
        $this->container['associatedEntity'] = $associatedEntity;
        return $this;
    }

    /**
    * Gets associationType
    *  绑定中包含的实体类型。
    *
    * @return string
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string $associationType 绑定中包含的实体类型。
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
        return $this;
    }

    /**
    * Gets createdAt
    *  绑定被创建的时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 绑定被创建的时间。
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
    *  最后一次更新绑定的时间。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 最后一次更新绑定的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets external
    *  标识资源使用者是否和共享的拥有者属于同一个组织
    *
    * @return bool|null
    */
    public function getExternal()
    {
        return $this->container['external'];
    }

    /**
    * Sets external
    *
    * @param bool|null $external 标识资源使用者是否和共享的拥有者属于同一个组织
    *
    * @return $this
    */
    public function setExternal($external)
    {
        $this->container['external'] = $external;
        return $this;
    }

    /**
    * Gets resourceShareId
    *  资源共享实例的ID。
    *
    * @return string
    */
    public function getResourceShareId()
    {
        return $this->container['resourceShareId'];
    }

    /**
    * Sets resourceShareId
    *
    * @param string $resourceShareId 资源共享实例的ID。
    *
    * @return $this
    */
    public function setResourceShareId($resourceShareId)
    {
        $this->container['resourceShareId'] = $resourceShareId;
        return $this;
    }

    /**
    * Gets resourceShareName
    *  资源共享实例的名称。
    *
    * @return string
    */
    public function getResourceShareName()
    {
        return $this->container['resourceShareName'];
    }

    /**
    * Sets resourceShareName
    *
    * @param string $resourceShareName 资源共享实例的名称。
    *
    * @return $this
    */
    public function setResourceShareName($resourceShareName)
    {
        $this->container['resourceShareName'] = $resourceShareName;
        return $this;
    }

    /**
    * Gets status
    *  绑定的当前状态。
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
    * @param string $status 绑定的当前状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  绑定的当前状态的描述。
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 绑定的当前状态的描述。
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
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

