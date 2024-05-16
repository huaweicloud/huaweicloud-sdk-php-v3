<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatedPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatedPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionId  权限的ID。
    * permissionName  共享资源权限的名称。
    * resourceType  权限适用的资源类型。
    * status  权限的当前状态。
    * createdAt  创建权限的时间。
    * updatedAt  最后一次更新权限的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionId' => 'string',
            'permissionName' => 'string',
            'resourceType' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionId  权限的ID。
    * permissionName  共享资源权限的名称。
    * resourceType  权限适用的资源类型。
    * status  权限的当前状态。
    * createdAt  创建权限的时间。
    * updatedAt  最后一次更新权限的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionId' => null,
        'permissionName' => null,
        'resourceType' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * permissionId  权限的ID。
    * permissionName  共享资源权限的名称。
    * resourceType  权限适用的资源类型。
    * status  权限的当前状态。
    * createdAt  创建权限的时间。
    * updatedAt  最后一次更新权限的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionId' => 'permission_id',
            'permissionName' => 'permission_name',
            'resourceType' => 'resource_type',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionId  权限的ID。
    * permissionName  共享资源权限的名称。
    * resourceType  权限适用的资源类型。
    * status  权限的当前状态。
    * createdAt  创建权限的时间。
    * updatedAt  最后一次更新权限的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionId' => 'setPermissionId',
            'permissionName' => 'setPermissionName',
            'resourceType' => 'setResourceType',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionId  权限的ID。
    * permissionName  共享资源权限的名称。
    * resourceType  权限适用的资源类型。
    * status  权限的当前状态。
    * createdAt  创建权限的时间。
    * updatedAt  最后一次更新权限的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionId' => 'getPermissionId',
            'permissionName' => 'getPermissionName',
            'resourceType' => 'getResourceType',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['permissionId'] = isset($data['permissionId']) ? $data['permissionId'] : null;
        $this->container['permissionName'] = isset($data['permissionName']) ? $data['permissionName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['permissionId']) && (mb_strlen($this->container['permissionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['permissionId']) && (mb_strlen($this->container['permissionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionName']) && (mb_strlen($this->container['permissionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets permissionId
    *  权限的ID。
    *
    * @return string|null
    */
    public function getPermissionId()
    {
        return $this->container['permissionId'];
    }

    /**
    * Sets permissionId
    *
    * @param string|null $permissionId 权限的ID。
    *
    * @return $this
    */
    public function setPermissionId($permissionId)
    {
        $this->container['permissionId'] = $permissionId;
        return $this;
    }

    /**
    * Gets permissionName
    *  共享资源权限的名称。
    *
    * @return string|null
    */
    public function getPermissionName()
    {
        return $this->container['permissionName'];
    }

    /**
    * Sets permissionName
    *
    * @param string|null $permissionName 共享资源权限的名称。
    *
    * @return $this
    */
    public function setPermissionName($permissionName)
    {
        $this->container['permissionName'] = $permissionName;
        return $this;
    }

    /**
    * Gets resourceType
    *  权限适用的资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 权限适用的资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets status
    *  权限的当前状态。
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
    * @param string|null $status 权限的当前状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建权限的时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建权限的时间。
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
    *  最后一次更新权限的时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 最后一次更新权限的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

