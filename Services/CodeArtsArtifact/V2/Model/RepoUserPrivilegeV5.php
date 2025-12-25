<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoUserPrivilegeV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoUserPrivilegeV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * repoId  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * privilege  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色id。 **取值范围**: 不涉及。
    * roleName  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'domainId' => 'string',
            'userName' => 'string',
            'repoId' => 'string',
            'privilege' => 'string',
            'roleId' => 'string',
            'roleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * repoId  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * privilege  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色id。 **取值范围**: 不涉及。
    * roleName  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'domainId' => null,
        'userName' => null,
        'repoId' => null,
        'privilege' => null,
        'roleId' => null,
        'roleName' => null
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
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * repoId  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * privilege  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色id。 **取值范围**: 不涉及。
    * roleName  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'domainId' => 'domain_id',
            'userName' => 'user_name',
            'repoId' => 'repo_id',
            'privilege' => 'privilege',
            'roleId' => 'role_id',
            'roleName' => 'role_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * repoId  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * privilege  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色id。 **取值范围**: 不涉及。
    * roleName  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'domainId' => 'setDomainId',
            'userName' => 'setUserName',
            'repoId' => 'setRepoId',
            'privilege' => 'setPrivilege',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  **参数解释**: 用户id。 **取值范围**: 不涉及。
    * domainId  **参数解释**: 租户id。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * repoId  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    * privilege  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    * roleId  **参数解释**: 角色id。 **取值范围**: 不涉及。
    * roleName  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'domainId' => 'getDomainId',
            'userName' => 'getUserName',
            'repoId' => 'getRepoId',
            'privilege' => 'getPrivilege',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['privilege'] = isset($data['privilege']) ? $data['privilege'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
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
    * Gets userId
    *  **参数解释**: 用户id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**: 用户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**: 租户id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets repoId
    *  **参数解释**: 仓库id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId **参数解释**: 仓库id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets privilege
    *  **参数解释**: 权限信息。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPrivilege()
    {
        return $this->container['privilege'];
    }

    /**
    * Sets privilege
    *
    * @param string|null $privilege **参数解释**: 权限信息。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPrivilege($privilege)
    {
        $this->container['privilege'] = $privilege;
        return $this;
    }

    /**
    * Gets roleId
    *  **参数解释**: 角色id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId **参数解释**: 角色id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets roleName
    *  **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
    * Sets roleName
    *
    * @param string|null $roleName **参数解释**: 角色名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
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

