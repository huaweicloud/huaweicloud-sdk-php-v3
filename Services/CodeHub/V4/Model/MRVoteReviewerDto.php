<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MRVoteReviewerDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MRVoteReviewerDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    * serviceLicenseStatus  服务级权限状态 0：停用 1：启用
    * avatarUrl  用户头像url
    * avatarPath  用户头像路径
    * email  用户邮箱
    * nameCn  用户中文名称
    * webUrl  用户个人首页
    * nickName  用户昵称
    * tenantName  租户名称
    * errorMessage  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    * isCommitter  **参数解释：** 是否为committer。
    * isVerified  **参数解释：** 是否为认证committer。
    * hasPermission  **参数解释：** 是否有相关权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'username' => 'string',
            'state' => 'string',
            'serviceLicenseStatus' => 'int',
            'avatarUrl' => 'string',
            'avatarPath' => 'string',
            'email' => 'string',
            'nameCn' => 'string',
            'webUrl' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'errorMessage' => 'string',
            'isCommitter' => 'bool',
            'isVerified' => 'bool',
            'hasPermission' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    * serviceLicenseStatus  服务级权限状态 0：停用 1：启用
    * avatarUrl  用户头像url
    * avatarPath  用户头像路径
    * email  用户邮箱
    * nameCn  用户中文名称
    * webUrl  用户个人首页
    * nickName  用户昵称
    * tenantName  租户名称
    * errorMessage  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    * isCommitter  **参数解释：** 是否为committer。
    * isVerified  **参数解释：** 是否为认证committer。
    * hasPermission  **参数解释：** 是否有相关权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'username' => null,
        'state' => null,
        'serviceLicenseStatus' => null,
        'avatarUrl' => null,
        'avatarPath' => null,
        'email' => null,
        'nameCn' => null,
        'webUrl' => null,
        'nickName' => null,
        'tenantName' => null,
        'errorMessage' => null,
        'isCommitter' => null,
        'isVerified' => null,
        'hasPermission' => null
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
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    * serviceLicenseStatus  服务级权限状态 0：停用 1：启用
    * avatarUrl  用户头像url
    * avatarPath  用户头像路径
    * email  用户邮箱
    * nameCn  用户中文名称
    * webUrl  用户个人首页
    * nickName  用户昵称
    * tenantName  租户名称
    * errorMessage  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    * isCommitter  **参数解释：** 是否为committer。
    * isVerified  **参数解释：** 是否为认证committer。
    * hasPermission  **参数解释：** 是否有相关权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'username' => 'username',
            'state' => 'state',
            'serviceLicenseStatus' => 'service_license_status',
            'avatarUrl' => 'avatar_url',
            'avatarPath' => 'avatar_path',
            'email' => 'email',
            'nameCn' => 'name_cn',
            'webUrl' => 'web_url',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'errorMessage' => 'error_message',
            'isCommitter' => 'is_committer',
            'isVerified' => 'is_verified',
            'hasPermission' => 'has_permission'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    * serviceLicenseStatus  服务级权限状态 0：停用 1：启用
    * avatarUrl  用户头像url
    * avatarPath  用户头像路径
    * email  用户邮箱
    * nameCn  用户中文名称
    * webUrl  用户个人首页
    * nickName  用户昵称
    * tenantName  租户名称
    * errorMessage  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    * isCommitter  **参数解释：** 是否为committer。
    * isVerified  **参数解释：** 是否为认证committer。
    * hasPermission  **参数解释：** 是否有相关权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'username' => 'setUsername',
            'state' => 'setState',
            'serviceLicenseStatus' => 'setServiceLicenseStatus',
            'avatarUrl' => 'setAvatarUrl',
            'avatarPath' => 'setAvatarPath',
            'email' => 'setEmail',
            'nameCn' => 'setNameCn',
            'webUrl' => 'setWebUrl',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'errorMessage' => 'setErrorMessage',
            'isCommitter' => 'setIsCommitter',
            'isVerified' => 'setIsVerified',
            'hasPermission' => 'setHasPermission'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。
    * username  **参数解释：** 用户名。
    * state  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    * serviceLicenseStatus  服务级权限状态 0：停用 1：启用
    * avatarUrl  用户头像url
    * avatarPath  用户头像路径
    * email  用户邮箱
    * nameCn  用户中文名称
    * webUrl  用户个人首页
    * nickName  用户昵称
    * tenantName  租户名称
    * errorMessage  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    * isCommitter  **参数解释：** 是否为committer。
    * isVerified  **参数解释：** 是否为认证committer。
    * hasPermission  **参数解释：** 是否有相关权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'username' => 'getUsername',
            'state' => 'getState',
            'serviceLicenseStatus' => 'getServiceLicenseStatus',
            'avatarUrl' => 'getAvatarUrl',
            'avatarPath' => 'getAvatarPath',
            'email' => 'getEmail',
            'nameCn' => 'getNameCn',
            'webUrl' => 'getWebUrl',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'errorMessage' => 'getErrorMessage',
            'isCommitter' => 'getIsCommitter',
            'isVerified' => 'getIsVerified',
            'hasPermission' => 'getHasPermission'
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
    const STATE_ACTIVE = 'active';
    const STATE_BLOCKED = 'blocked';
    const STATE_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_BLOCKED,
            self::STATE_ERROR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['serviceLicenseStatus'] = isset($data['serviceLicenseStatus']) ? $data['serviceLicenseStatus'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['avatarPath'] = isset($data['avatarPath']) ? $data['avatarPath'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['isCommitter'] = isset($data['isCommitter']) ? $data['isCommitter'] : null;
        $this->container['isVerified'] = isset($data['isVerified']) ? $data['isVerified'] : null;
        $this->container['hasPermission'] = isset($data['hasPermission']) ? $data['hasPermission'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 255)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
    * Gets id
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户id。
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
    *  **参数解释：** 用户名称。
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
    * @param string|null $name **参数解释：** 用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释：** 用户名。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 用户名。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释：** 用户状态。 **取值范围：** - active: 可用账户。 - blocked: 被锁定用户。 - error: 未查询到该用户。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets serviceLicenseStatus
    *  服务级权限状态 0：停用 1：启用
    *
    * @return int|null
    */
    public function getServiceLicenseStatus()
    {
        return $this->container['serviceLicenseStatus'];
    }

    /**
    * Sets serviceLicenseStatus
    *
    * @param int|null $serviceLicenseStatus 服务级权限状态 0：停用 1：启用
    *
    * @return $this
    */
    public function setServiceLicenseStatus($serviceLicenseStatus)
    {
        $this->container['serviceLicenseStatus'] = $serviceLicenseStatus;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  用户头像url
    *
    * @return string|null
    */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
    * Sets avatarUrl
    *
    * @param string|null $avatarUrl 用户头像url
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
        return $this;
    }

    /**
    * Gets avatarPath
    *  用户头像路径
    *
    * @return string|null
    */
    public function getAvatarPath()
    {
        return $this->container['avatarPath'];
    }

    /**
    * Sets avatarPath
    *
    * @param string|null $avatarPath 用户头像路径
    *
    * @return $this
    */
    public function setAvatarPath($avatarPath)
    {
        $this->container['avatarPath'] = $avatarPath;
        return $this;
    }

    /**
    * Gets email
    *  用户邮箱
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 用户邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets nameCn
    *  用户中文名称
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 用户中文名称
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets webUrl
    *  用户个人首页
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl 用户个人首页
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets tenantName
    *  租户名称
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName 租户名称
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets errorMessage
    *  **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage **参数解释：** 部分查询接口校验到传参里的用户权限不足或不存在时，返回该用户但该字段不为空用于提示。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets isCommitter
    *  **参数解释：** 是否为committer。
    *
    * @return bool|null
    */
    public function getIsCommitter()
    {
        return $this->container['isCommitter'];
    }

    /**
    * Sets isCommitter
    *
    * @param bool|null $isCommitter **参数解释：** 是否为committer。
    *
    * @return $this
    */
    public function setIsCommitter($isCommitter)
    {
        $this->container['isCommitter'] = $isCommitter;
        return $this;
    }

    /**
    * Gets isVerified
    *  **参数解释：** 是否为认证committer。
    *
    * @return bool|null
    */
    public function getIsVerified()
    {
        return $this->container['isVerified'];
    }

    /**
    * Sets isVerified
    *
    * @param bool|null $isVerified **参数解释：** 是否为认证committer。
    *
    * @return $this
    */
    public function setIsVerified($isVerified)
    {
        $this->container['isVerified'] = $isVerified;
        return $this;
    }

    /**
    * Gets hasPermission
    *  **参数解释：** 是否有相关权限。
    *
    * @return bool|null
    */
    public function getHasPermission()
    {
        return $this->container['hasPermission'];
    }

    /**
    * Sets hasPermission
    *
    * @param bool|null $hasPermission **参数解释：** 是否有相关权限。
    *
    * @return $this
    */
    public function setHasPermission($hasPermission)
    {
        $this->container['hasPermission'] = $hasPermission;
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

