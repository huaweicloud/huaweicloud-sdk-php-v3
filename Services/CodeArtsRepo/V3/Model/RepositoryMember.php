<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoryMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepositoryMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  仓库成员描述
    * domainId  租户id
    * domainName  租户名
    * email  邮箱地址
    * enabled  成员是否可用
    * name  用户名
    * role  仓库用户权限，取值范围：30->普通成员，40->管理员
    * userId  用户id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'email' => 'string',
            'enabled' => 'string',
            'name' => 'string',
            'role' => 'int',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  仓库成员描述
    * domainId  租户id
    * domainName  租户名
    * email  邮箱地址
    * enabled  成员是否可用
    * name  用户名
    * role  仓库用户权限，取值范围：30->普通成员，40->管理员
    * userId  用户id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'domainId' => null,
        'domainName' => null,
        'email' => null,
        'enabled' => null,
        'name' => null,
        'role' => 'int32',
        'userId' => null
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
    * description  仓库成员描述
    * domainId  租户id
    * domainName  租户名
    * email  邮箱地址
    * enabled  成员是否可用
    * name  用户名
    * role  仓库用户权限，取值范围：30->普通成员，40->管理员
    * userId  用户id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'email' => 'email',
            'enabled' => 'enabled',
            'name' => 'name',
            'role' => 'role',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  仓库成员描述
    * domainId  租户id
    * domainName  租户名
    * email  邮箱地址
    * enabled  成员是否可用
    * name  用户名
    * role  仓库用户权限，取值范围：30->普通成员，40->管理员
    * userId  用户id
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'email' => 'setEmail',
            'enabled' => 'setEnabled',
            'name' => 'setName',
            'role' => 'setRole',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  仓库成员描述
    * domainId  租户id
    * domainName  租户名
    * email  邮箱地址
    * enabled  成员是否可用
    * name  用户名
    * role  仓库用户权限，取值范围：30->普通成员，40->管理员
    * userId  用户id
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'email' => 'getEmail',
            'enabled' => 'getEnabled',
            'name' => 'getName',
            'role' => 'getRole',
            'userId' => 'getUserId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
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
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 8)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 32)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 4)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 4.";
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
    * Gets description
    *  仓库成员描述
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
    * @param string|null $description 仓库成员描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
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
    * Gets email
    *  邮箱地址
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
    * @param string|null $email 邮箱地址
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets enabled
    *  成员是否可用
    *
    * @return string|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string|null $enabled 成员是否可用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets name
    *  用户名
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
    * @param string|null $name 用户名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  仓库用户权限，取值范围：30->普通成员，40->管理员
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role 仓库用户权限，取值范围：30->普通成员，40->管理员
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
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

