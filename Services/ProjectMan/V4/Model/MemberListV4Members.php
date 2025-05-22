<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberListV4Members implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberListV4_members';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户id
    * domainName  租户名
    * userId  用户id
    * userName  用户名
    * userNumId  创建人numId
    * roleId  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    * nickName  用户昵称
    * roleName  用户角色
    * userType  用户类型, User iam用户, Federation 联邦账号,
    * forbidden  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'domainName' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'userNumId' => 'int',
            'roleId' => 'int',
            'nickName' => 'string',
            'roleName' => 'string',
            'userType' => 'string',
            'forbidden' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户id
    * domainName  租户名
    * userId  用户id
    * userName  用户名
    * userNumId  创建人numId
    * roleId  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    * nickName  用户昵称
    * roleName  用户角色
    * userType  用户类型, User iam用户, Federation 联邦账号,
    * forbidden  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'domainName' => null,
        'userId' => null,
        'userName' => null,
        'userNumId' => 'int32',
        'roleId' => 'int32',
        'nickName' => null,
        'roleName' => null,
        'userType' => null,
        'forbidden' => 'int32'
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
    * domainId  租户id
    * domainName  租户名
    * userId  用户id
    * userName  用户名
    * userNumId  创建人numId
    * roleId  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    * nickName  用户昵称
    * roleName  用户角色
    * userType  用户类型, User iam用户, Federation 联邦账号,
    * forbidden  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'userNumId' => 'user_num_id',
            'roleId' => 'role_id',
            'nickName' => 'nick_name',
            'roleName' => 'role_name',
            'userType' => 'user_type',
            'forbidden' => 'forbidden'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户id
    * domainName  租户名
    * userId  用户id
    * userName  用户名
    * userNumId  创建人numId
    * roleId  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    * nickName  用户昵称
    * roleName  用户角色
    * userType  用户类型, User iam用户, Federation 联邦账号,
    * forbidden  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'userNumId' => 'setUserNumId',
            'roleId' => 'setRoleId',
            'nickName' => 'setNickName',
            'roleName' => 'setRoleName',
            'userType' => 'setUserType',
            'forbidden' => 'setForbidden'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户id
    * domainName  租户名
    * userId  用户id
    * userName  用户名
    * userNumId  创建人numId
    * roleId  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    * nickName  用户昵称
    * roleName  用户角色
    * userType  用户类型, User iam用户, Federation 联邦账号,
    * forbidden  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'userNumId' => 'getUserNumId',
            'roleId' => 'getRoleId',
            'nickName' => 'getNickName',
            'roleName' => 'getRoleName',
            'userType' => 'getUserType',
            'forbidden' => 'getForbidden'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['forbidden'] = isset($data['forbidden']) ? $data['forbidden'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && !preg_match("/^[0-9a-z]{32}$/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            if (!is_null($this->container['userType']) && !preg_match("/User|Federation/", $this->container['userType'])) {
                $invalidProperties[] = "invalid value for 'userType', must be conform to the pattern /User|Federation/.";
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
    * Gets domainId
    *  租户id
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
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  租户名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 租户名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets userId
    *  用户id
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
    * @param string|null $userId 用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
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
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userNumId
    *  创建人numId
    *
    * @return int|null
    */
    public function getUserNumId()
    {
        return $this->container['userNumId'];
    }

    /**
    * Sets userNumId
    *
    * @param int|null $userNumId 创建人numId
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
        return $this;
    }

    /**
    * Gets roleId
    *  成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    *
    * @return int|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param int|null $roleId 成员角色, -1 项目创建者, 3 项目经理, 4 开发人员, 5 测试经理, 6 测试人员, 7 参与者, 8 浏览者, 9 运维经理
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
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
    * Gets roleName
    *  用户角色
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
    * @param string|null $roleName 用户角色
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型, User iam用户, Federation 联邦账号,
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType 用户类型, User iam用户, Federation 联邦账号,
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets forbidden
    *  是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @return int|null
    */
    public function getForbidden()
    {
        return $this->container['forbidden'];
    }

    /**
    * Sets forbidden
    *
    * @param int|null $forbidden 是否是禁用账号，1 禁用账号， 0非禁用账号
    *
    * @return $this
    */
    public function setForbidden($forbidden)
    {
        $this->container['forbidden'] = $forbidden;
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

