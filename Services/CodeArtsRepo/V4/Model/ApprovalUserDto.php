<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApprovalUserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApprovalUserDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户id
    * username  用户名称
    * name  用户名称
    * nickName  用户昵称
    * nameCn  中文名称
    * email  电子邮箱
    * state  状态
    * updatedAt  更新时间
    * avatarUrl  头像url
    * tenantName  租户名称
    * approverComment  审核意见
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'username' => 'string',
            'name' => 'string',
            'nickName' => 'string',
            'nameCn' => 'string',
            'email' => 'string',
            'state' => 'string',
            'updatedAt' => 'string',
            'avatarUrl' => 'string',
            'tenantName' => 'string',
            'approverComment' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户id
    * username  用户名称
    * name  用户名称
    * nickName  用户昵称
    * nameCn  中文名称
    * email  电子邮箱
    * state  状态
    * updatedAt  更新时间
    * avatarUrl  头像url
    * tenantName  租户名称
    * approverComment  审核意见
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'username' => null,
        'name' => null,
        'nickName' => null,
        'nameCn' => null,
        'email' => null,
        'state' => null,
        'updatedAt' => 'yyyy-MM-dd'T'HH:mm:ss.SSSXXX',
        'avatarUrl' => null,
        'tenantName' => null,
        'approverComment' => null
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
    * id  用户id
    * username  用户名称
    * name  用户名称
    * nickName  用户昵称
    * nameCn  中文名称
    * email  电子邮箱
    * state  状态
    * updatedAt  更新时间
    * avatarUrl  头像url
    * tenantName  租户名称
    * approverComment  审核意见
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'username' => 'username',
            'name' => 'name',
            'nickName' => 'nick_name',
            'nameCn' => 'name_cn',
            'email' => 'email',
            'state' => 'state',
            'updatedAt' => 'updated_at',
            'avatarUrl' => 'avatar_url',
            'tenantName' => 'tenant_name',
            'approverComment' => 'approver_comment'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户id
    * username  用户名称
    * name  用户名称
    * nickName  用户昵称
    * nameCn  中文名称
    * email  电子邮箱
    * state  状态
    * updatedAt  更新时间
    * avatarUrl  头像url
    * tenantName  租户名称
    * approverComment  审核意见
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'username' => 'setUsername',
            'name' => 'setName',
            'nickName' => 'setNickName',
            'nameCn' => 'setNameCn',
            'email' => 'setEmail',
            'state' => 'setState',
            'updatedAt' => 'setUpdatedAt',
            'avatarUrl' => 'setAvatarUrl',
            'tenantName' => 'setTenantName',
            'approverComment' => 'setApproverComment'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户id
    * username  用户名称
    * name  用户名称
    * nickName  用户昵称
    * nameCn  中文名称
    * email  电子邮箱
    * state  状态
    * updatedAt  更新时间
    * avatarUrl  头像url
    * tenantName  租户名称
    * approverComment  审核意见
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'username' => 'getUsername',
            'name' => 'getName',
            'nickName' => 'getNickName',
            'nameCn' => 'getNameCn',
            'email' => 'getEmail',
            'state' => 'getState',
            'updatedAt' => 'getUpdatedAt',
            'avatarUrl' => 'getAvatarUrl',
            'tenantName' => 'getTenantName',
            'approverComment' => 'getApproverComment'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['approverComment'] = isset($data['approverComment']) ? $data['approverComment'] : null;
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
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 100000)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 100000)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100000)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 100000)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['avatarUrl']) && (mb_strlen($this->container['avatarUrl']) > 100000)) {
                $invalidProperties[] = "invalid value for 'avatarUrl', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['avatarUrl']) && (mb_strlen($this->container['avatarUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'avatarUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['approverComment']) && (mb_strlen($this->container['approverComment']) > 100000)) {
                $invalidProperties[] = "invalid value for 'approverComment', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['approverComment']) && (mb_strlen($this->container['approverComment']) < 1)) {
                $invalidProperties[] = "invalid value for 'approverComment', the character length must be bigger than or equal to 1.";
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
    *  用户id
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
    * @param int|null $id 用户id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets username
    *  用户名称
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
    * @param string|null $username 用户名称
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets name
    *  用户名称
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
    * @param string|null $name 用户名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets nameCn
    *  中文名称
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
    * @param string|null $nameCn 中文名称
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets email
    *  电子邮箱
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
    * @param string|null $email 电子邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets state
    *  状态
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
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
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
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets avatarUrl
    *  头像url
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
    * @param string|null $avatarUrl 头像url
    *
    * @return $this
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;
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
    * Gets approverComment
    *  审核意见
    *
    * @return string|null
    */
    public function getApproverComment()
    {
        return $this->container['approverComment'];
    }

    /**
    * Sets approverComment
    *
    * @param string|null $approverComment 审核意见
    *
    * @return $this
    */
    public function setApproverComment($approverComment)
    {
        $this->container['approverComment'] = $approverComment;
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

