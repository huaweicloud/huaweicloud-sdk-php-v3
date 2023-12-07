<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionSetCreateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionSetCreateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * parentId  父权限集id
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * managedRoleName  纳管角色名称（仅纳管类权限集需要）
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'parentId' => 'string',
            'description' => 'string',
            'type' => 'string',
            'managedClusterId' => 'string',
            'managedClusterName' => 'string',
            'managedRoleName' => 'string',
            'managerId' => 'string',
            'managerName' => 'string',
            'managerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * parentId  父权限集id
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * managedRoleName  纳管角色名称（仅纳管类权限集需要）
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'parentId' => null,
        'description' => null,
        'type' => null,
        'managedClusterId' => null,
        'managedClusterName' => null,
        'managedRoleName' => null,
        'managerId' => null,
        'managerName' => null,
        'managerType' => null
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
    * name  名称
    * parentId  父权限集id
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * managedRoleName  纳管角色名称（仅纳管类权限集需要）
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'parentId' => 'parent_id',
            'description' => 'description',
            'type' => 'type',
            'managedClusterId' => 'managed_cluster_id',
            'managedClusterName' => 'managed_cluster_name',
            'managedRoleName' => 'managed_role_name',
            'managerId' => 'manager_id',
            'managerName' => 'manager_name',
            'managerType' => 'manager_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * parentId  父权限集id
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * managedRoleName  纳管角色名称（仅纳管类权限集需要）
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'parentId' => 'setParentId',
            'description' => 'setDescription',
            'type' => 'setType',
            'managedClusterId' => 'setManagedClusterId',
            'managedClusterName' => 'setManagedClusterName',
            'managedRoleName' => 'setManagedRoleName',
            'managerId' => 'setManagerId',
            'managerName' => 'setManagerName',
            'managerType' => 'setManagerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * parentId  父权限集id
    * description  描述
    * type  权限集类型, COMMON, MRS_MANAGED
    * managedClusterId  纳管角色所在集群id（仅纳管类权限集需要）
    * managedClusterName  纳管角色所在集群名称（仅纳管类权限集需要）
    * managedRoleName  纳管角色名称（仅纳管类权限集需要）
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'parentId' => 'getParentId',
            'description' => 'getDescription',
            'type' => 'getType',
            'managedClusterId' => 'getManagedClusterId',
            'managedClusterName' => 'getManagedClusterName',
            'managedRoleName' => 'getManagedRoleName',
            'managerId' => 'getManagerId',
            'managerName' => 'getManagerName',
            'managerType' => 'getManagerType'
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
    const TYPE_COMMON = 'COMMON';
    const TYPE_MRS_MANAGED = 'MRS_MANAGED';
    const MANAGER_TYPE_USER = 'USER';
    const MANAGER_TYPE_USER_GROUP = 'USER_GROUP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMMON,
            self::TYPE_MRS_MANAGED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManagerTypeAllowableValues()
    {
        return [
            self::MANAGER_TYPE_USER,
            self::MANAGER_TYPE_USER_GROUP,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['managedClusterId'] = isset($data['managedClusterId']) ? $data['managedClusterId'] : null;
        $this->container['managedClusterName'] = isset($data['managedClusterName']) ? $data['managedClusterName'] : null;
        $this->container['managedRoleName'] = isset($data['managedRoleName']) ? $data['managedRoleName'] : null;
        $this->container['managerId'] = isset($data['managerId']) ? $data['managerId'] : null;
        $this->container['managerName'] = isset($data['managerName']) ? $data['managerName'] : null;
        $this->container['managerType'] = isset($data['managerType']) ? $data['managerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 10240)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['managedClusterId']) && (mb_strlen($this->container['managedClusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedClusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedClusterId']) && (mb_strlen($this->container['managedClusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedClusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managedClusterName']) && (mb_strlen($this->container['managedClusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedClusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedClusterName']) && (mb_strlen($this->container['managedClusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedClusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managedRoleName']) && (mb_strlen($this->container['managedRoleName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedRoleName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedRoleName']) && (mb_strlen($this->container['managedRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getManagerTypeAllowableValues();
                if (!is_null($this->container['managerType']) && !in_array($this->container['managerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'managerType', must be one of '%s'",
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  父权限集id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父权限集id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  权限集类型, COMMON, MRS_MANAGED
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
    * @param string|null $type 权限集类型, COMMON, MRS_MANAGED
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets managedClusterId
    *  纳管角色所在集群id（仅纳管类权限集需要）
    *
    * @return string|null
    */
    public function getManagedClusterId()
    {
        return $this->container['managedClusterId'];
    }

    /**
    * Sets managedClusterId
    *
    * @param string|null $managedClusterId 纳管角色所在集群id（仅纳管类权限集需要）
    *
    * @return $this
    */
    public function setManagedClusterId($managedClusterId)
    {
        $this->container['managedClusterId'] = $managedClusterId;
        return $this;
    }

    /**
    * Gets managedClusterName
    *  纳管角色所在集群名称（仅纳管类权限集需要）
    *
    * @return string|null
    */
    public function getManagedClusterName()
    {
        return $this->container['managedClusterName'];
    }

    /**
    * Sets managedClusterName
    *
    * @param string|null $managedClusterName 纳管角色所在集群名称（仅纳管类权限集需要）
    *
    * @return $this
    */
    public function setManagedClusterName($managedClusterName)
    {
        $this->container['managedClusterName'] = $managedClusterName;
        return $this;
    }

    /**
    * Gets managedRoleName
    *  纳管角色名称（仅纳管类权限集需要）
    *
    * @return string|null
    */
    public function getManagedRoleName()
    {
        return $this->container['managedRoleName'];
    }

    /**
    * Sets managedRoleName
    *
    * @param string|null $managedRoleName 纳管角色名称（仅纳管类权限集需要）
    *
    * @return $this
    */
    public function setManagedRoleName($managedRoleName)
    {
        $this->container['managedRoleName'] = $managedRoleName;
        return $this;
    }

    /**
    * Gets managerId
    *  管理员id
    *
    * @return string|null
    */
    public function getManagerId()
    {
        return $this->container['managerId'];
    }

    /**
    * Sets managerId
    *
    * @param string|null $managerId 管理员id
    *
    * @return $this
    */
    public function setManagerId($managerId)
    {
        $this->container['managerId'] = $managerId;
        return $this;
    }

    /**
    * Gets managerName
    *  管理员名称
    *
    * @return string|null
    */
    public function getManagerName()
    {
        return $this->container['managerName'];
    }

    /**
    * Sets managerName
    *
    * @param string|null $managerName 管理员名称
    *
    * @return $this
    */
    public function setManagerName($managerName)
    {
        $this->container['managerName'] = $managerName;
        return $this;
    }

    /**
    * Gets managerType
    *  管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @return string|null
    */
    public function getManagerType()
    {
        return $this->container['managerType'];
    }

    /**
    * Sets managerType
    *
    * @param string|null $managerType 管理员类型, 用户/用户组, USER, USER_GROUP
    *
    * @return $this
    */
    public function setManagerType($managerType)
    {
        $this->container['managerType'] = $managerType;
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

