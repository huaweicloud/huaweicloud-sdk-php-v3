<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateUserReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateUserReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * password  全局密码。
    * list  用户迁移信息，迁移用户时必填
    * userRoles  角色迁移信息，迁移用户时必填
    * isSetPassword  是否设置密码
    * isMigrateUser  是否迁移用户
    * isSyncObjectPrivilege  是否同步权限，不填默认为false，PG同步使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'password' => 'string',
            'list' => '\HuaweiCloud\SDK\Drs\V3\Model\UserAccountVO[]',
            'userRoles' => '\HuaweiCloud\SDK\Drs\V3\Model\UserRoleVO[]',
            'isSetPassword' => 'bool',
            'isMigrateUser' => 'bool',
            'isSyncObjectPrivilege' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * password  全局密码。
    * list  用户迁移信息，迁移用户时必填
    * userRoles  角色迁移信息，迁移用户时必填
    * isSetPassword  是否设置密码
    * isMigrateUser  是否迁移用户
    * isSyncObjectPrivilege  是否同步权限，不填默认为false，PG同步使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'password' => null,
        'list' => null,
        'userRoles' => null,
        'isSetPassword' => null,
        'isMigrateUser' => null,
        'isSyncObjectPrivilege' => null
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
    * jobId  任务ID
    * password  全局密码。
    * list  用户迁移信息，迁移用户时必填
    * userRoles  角色迁移信息，迁移用户时必填
    * isSetPassword  是否设置密码
    * isMigrateUser  是否迁移用户
    * isSyncObjectPrivilege  是否同步权限，不填默认为false，PG同步使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'password' => 'password',
            'list' => 'list',
            'userRoles' => 'user_roles',
            'isSetPassword' => 'is_set_password',
            'isMigrateUser' => 'is_migrate_user',
            'isSyncObjectPrivilege' => 'is_sync_object_privilege'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * password  全局密码。
    * list  用户迁移信息，迁移用户时必填
    * userRoles  角色迁移信息，迁移用户时必填
    * isSetPassword  是否设置密码
    * isMigrateUser  是否迁移用户
    * isSyncObjectPrivilege  是否同步权限，不填默认为false，PG同步使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'password' => 'setPassword',
            'list' => 'setList',
            'userRoles' => 'setUserRoles',
            'isSetPassword' => 'setIsSetPassword',
            'isMigrateUser' => 'setIsMigrateUser',
            'isSyncObjectPrivilege' => 'setIsSyncObjectPrivilege'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * password  全局密码。
    * list  用户迁移信息，迁移用户时必填
    * userRoles  角色迁移信息，迁移用户时必填
    * isSetPassword  是否设置密码
    * isMigrateUser  是否迁移用户
    * isSyncObjectPrivilege  是否同步权限，不填默认为false，PG同步使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'password' => 'getPassword',
            'list' => 'getList',
            'userRoles' => 'getUserRoles',
            'isSetPassword' => 'getIsSetPassword',
            'isMigrateUser' => 'getIsMigrateUser',
            'isSyncObjectPrivilege' => 'getIsSyncObjectPrivilege'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['userRoles'] = isset($data['userRoles']) ? $data['userRoles'] : null;
        $this->container['isSetPassword'] = isset($data['isSetPassword']) ? $data['isSetPassword'] : null;
        $this->container['isMigrateUser'] = isset($data['isMigrateUser']) ? $data['isMigrateUser'] : null;
        $this->container['isSyncObjectPrivilege'] = isset($data['isSyncObjectPrivilege']) ? $data['isSyncObjectPrivilege'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['isSetPassword'] === null) {
            $invalidProperties[] = "'isSetPassword' can't be null";
        }
        if ($this->container['isMigrateUser'] === null) {
            $invalidProperties[] = "'isMigrateUser' can't be null";
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
    * Gets jobId
    *  任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets password
    *  全局密码。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 全局密码。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets list
    *  用户迁移信息，迁移用户时必填
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\UserAccountVO[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\UserAccountVO[]|null $list 用户迁移信息，迁移用户时必填
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets userRoles
    *  角色迁移信息，迁移用户时必填
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\UserRoleVO[]|null
    */
    public function getUserRoles()
    {
        return $this->container['userRoles'];
    }

    /**
    * Sets userRoles
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\UserRoleVO[]|null $userRoles 角色迁移信息，迁移用户时必填
    *
    * @return $this
    */
    public function setUserRoles($userRoles)
    {
        $this->container['userRoles'] = $userRoles;
        return $this;
    }

    /**
    * Gets isSetPassword
    *  是否设置密码
    *
    * @return bool
    */
    public function getIsSetPassword()
    {
        return $this->container['isSetPassword'];
    }

    /**
    * Sets isSetPassword
    *
    * @param bool $isSetPassword 是否设置密码
    *
    * @return $this
    */
    public function setIsSetPassword($isSetPassword)
    {
        $this->container['isSetPassword'] = $isSetPassword;
        return $this;
    }

    /**
    * Gets isMigrateUser
    *  是否迁移用户
    *
    * @return bool
    */
    public function getIsMigrateUser()
    {
        return $this->container['isMigrateUser'];
    }

    /**
    * Sets isMigrateUser
    *
    * @param bool $isMigrateUser 是否迁移用户
    *
    * @return $this
    */
    public function setIsMigrateUser($isMigrateUser)
    {
        $this->container['isMigrateUser'] = $isMigrateUser;
        return $this;
    }

    /**
    * Gets isSyncObjectPrivilege
    *  是否同步权限，不填默认为false，PG同步使用。
    *
    * @return bool|null
    */
    public function getIsSyncObjectPrivilege()
    {
        return $this->container['isSyncObjectPrivilege'];
    }

    /**
    * Sets isSyncObjectPrivilege
    *
    * @param bool|null $isSyncObjectPrivilege 是否同步权限，不填默认为false，PG同步使用。
    *
    * @return $this
    */
    public function setIsSyncObjectPrivilege($isSyncObjectPrivilege)
    {
        $this->container['isSyncObjectPrivilege'] = $isSyncObjectPrivilege;
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

