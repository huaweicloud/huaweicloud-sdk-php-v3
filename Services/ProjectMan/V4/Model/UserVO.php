<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户ID。
    * userNumId  用户短ID。
    * userName  用户名称。
    * domainId  用户所属域ID。
    * domainName  租户名称。
    * nickName  用户昵称。
    * roleId  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
    * roleName  用户角色名称，多个角色用英文逗号分隔。
    * roleCode  用户角色编码，多个角色用英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'userNumId' => 'int',
            'userName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'nickName' => 'string',
            'roleId' => 'string',
            'roleName' => 'string',
            'roleCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户ID。
    * userNumId  用户短ID。
    * userName  用户名称。
    * domainId  用户所属域ID。
    * domainName  租户名称。
    * nickName  用户昵称。
    * roleId  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
    * roleName  用户角色名称，多个角色用英文逗号分隔。
    * roleCode  用户角色编码，多个角色用英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'userNumId' => 'int32',
        'userName' => null,
        'domainId' => null,
        'domainName' => null,
        'nickName' => null,
        'roleId' => null,
        'roleName' => null,
        'roleCode' => null
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
    * userId  用户ID。
    * userNumId  用户短ID。
    * userName  用户名称。
    * domainId  用户所属域ID。
    * domainName  租户名称。
    * nickName  用户昵称。
    * roleId  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
    * roleName  用户角色名称，多个角色用英文逗号分隔。
    * roleCode  用户角色编码，多个角色用英文逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userNumId' => 'user_num_id',
            'userName' => 'user_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'nickName' => 'nick_name',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'roleCode' => 'role_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户ID。
    * userNumId  用户短ID。
    * userName  用户名称。
    * domainId  用户所属域ID。
    * domainName  租户名称。
    * nickName  用户昵称。
    * roleId  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
    * roleName  用户角色名称，多个角色用英文逗号分隔。
    * roleCode  用户角色编码，多个角色用英文逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userNumId' => 'setUserNumId',
            'userName' => 'setUserName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'nickName' => 'setNickName',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'roleCode' => 'setRoleCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户ID。
    * userNumId  用户短ID。
    * userName  用户名称。
    * domainId  用户所属域ID。
    * domainName  租户名称。
    * nickName  用户昵称。
    * roleId  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
    * roleName  用户角色名称，多个角色用英文逗号分隔。
    * roleCode  用户角色编码，多个角色用英文逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userNumId' => 'getUserNumId',
            'userName' => 'getUserName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'nickName' => 'getNickName',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'roleCode' => 'getRoleCode'
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
        $this->container['userNumId'] = isset($data['userNumId']) ? $data['userNumId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleCode'] = isset($data['roleCode']) ? $data['roleCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['userNumId']) && ($this->container['userNumId'] > 99999999)) {
                $invalidProperties[] = "invalid value for 'userNumId', must be smaller than or equal to 99999999.";
            }
            if (!is_null($this->container['userNumId']) && ($this->container['userNumId'] < 0)) {
                $invalidProperties[] = "invalid value for 'userNumId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 64)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 2)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 2)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 64)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 1056)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 1056.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 32)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) > 1056)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be smaller than or equal to 1056.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) < 2)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['roleCode']) && (mb_strlen($this->container['roleCode']) > 1056)) {
                $invalidProperties[] = "invalid value for 'roleCode', the character length must be smaller than or equal to 1056.";
            }
            if (!is_null($this->container['roleCode']) && (mb_strlen($this->container['roleCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'roleCode', the character length must be bigger than or equal to 2.";
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
    * Gets userId
    *  用户ID。
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
    * @param string|null $userId 用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userNumId
    *  用户短ID。
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
    * @param int|null $userNumId 用户短ID。
    *
    * @return $this
    */
    public function setUserNumId($userNumId)
    {
        $this->container['userNumId'] = $userNumId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称。
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
    * @param string|null $userName 用户名称。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets domainId
    *  用户所属域ID。
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
    * @param string|null $domainId 用户所属域ID。
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
    *  租户名称。
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
    * @param string|null $domainName 租户名称。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称。
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
    * @param string|null $nickName 用户昵称。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets roleId
    *  角色ID，用户在项目中具有多个角色时用英文逗号分隔。
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
    * @param string|null $roleId 角色ID，用户在项目中具有多个角色时用英文逗号分隔。
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
    *  用户角色名称，多个角色用英文逗号分隔。
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
    * @param string|null $roleName 用户角色名称，多个角色用英文逗号分隔。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets roleCode
    *  用户角色编码，多个角色用英文逗号分隔。
    *
    * @return string|null
    */
    public function getRoleCode()
    {
        return $this->container['roleCode'];
    }

    /**
    * Sets roleCode
    *
    * @param string|null $roleCode 用户角色编码，多个角色用英文逗号分隔。
    *
    * @return $this
    */
    public function setRoleCode($roleCode)
    {
        $this->container['roleCode'] = $roleCode;
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

