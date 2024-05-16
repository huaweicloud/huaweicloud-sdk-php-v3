<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Permission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Permission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  权限ID。
    * name  权限名称。
    * resourceType  资源类型。
    * content  权限的影响和行为。
    * isResourceTypeDefault  该权限是否是此资源类型的默认权限。
    * createdAt  权限的创建时间。
    * updatedAt  最后一次更新权限的时间。
    * permissionUrn  权限URN。
    * permissionType  权限类型。
    * defaultVersion  此权限是否为默认版本。
    * version  权限版本。
    * status  权限的状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'resourceType' => 'string',
            'content' => 'string',
            'isResourceTypeDefault' => 'bool',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'permissionUrn' => 'string',
            'permissionType' => 'string',
            'defaultVersion' => 'bool',
            'version' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  权限ID。
    * name  权限名称。
    * resourceType  资源类型。
    * content  权限的影响和行为。
    * isResourceTypeDefault  该权限是否是此资源类型的默认权限。
    * createdAt  权限的创建时间。
    * updatedAt  最后一次更新权限的时间。
    * permissionUrn  权限URN。
    * permissionType  权限类型。
    * defaultVersion  此权限是否为默认版本。
    * version  权限版本。
    * status  权限的状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'resourceType' => null,
        'content' => null,
        'isResourceTypeDefault' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'permissionUrn' => null,
        'permissionType' => null,
        'defaultVersion' => null,
        'version' => 'int32',
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
    * id  权限ID。
    * name  权限名称。
    * resourceType  资源类型。
    * content  权限的影响和行为。
    * isResourceTypeDefault  该权限是否是此资源类型的默认权限。
    * createdAt  权限的创建时间。
    * updatedAt  最后一次更新权限的时间。
    * permissionUrn  权限URN。
    * permissionType  权限类型。
    * defaultVersion  此权限是否为默认版本。
    * version  权限版本。
    * status  权限的状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'resourceType' => 'resource_type',
            'content' => 'content',
            'isResourceTypeDefault' => 'is_resource_type_default',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'permissionUrn' => 'permission_urn',
            'permissionType' => 'permission_type',
            'defaultVersion' => 'default_version',
            'version' => 'version',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  权限ID。
    * name  权限名称。
    * resourceType  资源类型。
    * content  权限的影响和行为。
    * isResourceTypeDefault  该权限是否是此资源类型的默认权限。
    * createdAt  权限的创建时间。
    * updatedAt  最后一次更新权限的时间。
    * permissionUrn  权限URN。
    * permissionType  权限类型。
    * defaultVersion  此权限是否为默认版本。
    * version  权限版本。
    * status  权限的状态
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'resourceType' => 'setResourceType',
            'content' => 'setContent',
            'isResourceTypeDefault' => 'setIsResourceTypeDefault',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'permissionUrn' => 'setPermissionUrn',
            'permissionType' => 'setPermissionType',
            'defaultVersion' => 'setDefaultVersion',
            'version' => 'setVersion',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  权限ID。
    * name  权限名称。
    * resourceType  资源类型。
    * content  权限的影响和行为。
    * isResourceTypeDefault  该权限是否是此资源类型的默认权限。
    * createdAt  权限的创建时间。
    * updatedAt  最后一次更新权限的时间。
    * permissionUrn  权限URN。
    * permissionType  权限类型。
    * defaultVersion  此权限是否为默认版本。
    * version  权限版本。
    * status  权限的状态
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'resourceType' => 'getResourceType',
            'content' => 'getContent',
            'isResourceTypeDefault' => 'getIsResourceTypeDefault',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'permissionUrn' => 'getPermissionUrn',
            'permissionType' => 'getPermissionType',
            'defaultVersion' => 'getDefaultVersion',
            'version' => 'getVersion',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['isResourceTypeDefault'] = isset($data['isResourceTypeDefault']) ? $data['isResourceTypeDefault'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['permissionUrn'] = isset($data['permissionUrn']) ? $data['permissionUrn'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['defaultVersion'] = isset($data['defaultVersion']) ? $data['defaultVersion'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 65535)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isResourceTypeDefault'] === null) {
            $invalidProperties[] = "'isResourceTypeDefault' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if (!is_null($this->container['permissionUrn']) && (mb_strlen($this->container['permissionUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'permissionUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['permissionUrn']) && (mb_strlen($this->container['permissionUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionUrn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionType']) && (mb_strlen($this->container['permissionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'permissionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['permissionType']) && (mb_strlen($this->container['permissionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
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
    * Gets id
    *  权限ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 权限ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  权限名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 权限名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets content
    *  权限的影响和行为。
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 权限的影响和行为。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets isResourceTypeDefault
    *  该权限是否是此资源类型的默认权限。
    *
    * @return bool
    */
    public function getIsResourceTypeDefault()
    {
        return $this->container['isResourceTypeDefault'];
    }

    /**
    * Sets isResourceTypeDefault
    *
    * @param bool $isResourceTypeDefault 该权限是否是此资源类型的默认权限。
    *
    * @return $this
    */
    public function setIsResourceTypeDefault($isResourceTypeDefault)
    {
        $this->container['isResourceTypeDefault'] = $isResourceTypeDefault;
        return $this;
    }

    /**
    * Gets createdAt
    *  权限的创建时间。
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
    * @param \DateTime $createdAt 权限的创建时间。
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
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 最后一次更新权限的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets permissionUrn
    *  权限URN。
    *
    * @return string|null
    */
    public function getPermissionUrn()
    {
        return $this->container['permissionUrn'];
    }

    /**
    * Sets permissionUrn
    *
    * @param string|null $permissionUrn 权限URN。
    *
    * @return $this
    */
    public function setPermissionUrn($permissionUrn)
    {
        $this->container['permissionUrn'] = $permissionUrn;
        return $this;
    }

    /**
    * Gets permissionType
    *  权限类型。
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 权限类型。
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
        return $this;
    }

    /**
    * Gets defaultVersion
    *  此权限是否为默认版本。
    *
    * @return bool|null
    */
    public function getDefaultVersion()
    {
        return $this->container['defaultVersion'];
    }

    /**
    * Sets defaultVersion
    *
    * @param bool|null $defaultVersion 此权限是否为默认版本。
    *
    * @return $this
    */
    public function setDefaultVersion($defaultVersion)
    {
        $this->container['defaultVersion'] = $defaultVersion;
        return $this;
    }

    /**
    * Gets version
    *  权限版本。
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 权限版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets status
    *  权限的状态
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
    * @param string|null $status 权限的状态
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

