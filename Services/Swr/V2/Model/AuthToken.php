<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthToken';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间
    * enable  是否启用
    * expireDate  过期时间
    * instanceId  实例ID
    * name  访问凭证名称
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    * userProfile  用户访问凭据信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'enable' => 'bool',
            'expireDate' => 'string',
            'instanceId' => 'string',
            'name' => 'string',
            'tokenId' => 'string',
            'userId' => 'string',
            'userProfile' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间
    * enable  是否启用
    * expireDate  过期时间
    * instanceId  实例ID
    * name  访问凭证名称
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    * userProfile  用户访问凭据信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'enable' => null,
        'expireDate' => null,
        'instanceId' => null,
        'name' => null,
        'tokenId' => null,
        'userId' => null,
        'userProfile' => null
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
    * createdAt  创建时间
    * enable  是否启用
    * expireDate  过期时间
    * instanceId  实例ID
    * name  访问凭证名称
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    * userProfile  用户访问凭据信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'enable' => 'enable',
            'expireDate' => 'expire_date',
            'instanceId' => 'instance_id',
            'name' => 'name',
            'tokenId' => 'token_id',
            'userId' => 'user_id',
            'userProfile' => 'user_profile'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间
    * enable  是否启用
    * expireDate  过期时间
    * instanceId  实例ID
    * name  访问凭证名称
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    * userProfile  用户访问凭据信息
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'enable' => 'setEnable',
            'expireDate' => 'setExpireDate',
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'tokenId' => 'setTokenId',
            'userId' => 'setUserId',
            'userProfile' => 'setUserProfile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间
    * enable  是否启用
    * expireDate  过期时间
    * instanceId  实例ID
    * name  访问凭证名称
    * tokenId  访问凭证ID
    * userId  访问凭证用户名
    * userProfile  用户访问凭据信息
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'enable' => 'getEnable',
            'expireDate' => 'getExpireDate',
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'tokenId' => 'getTokenId',
            'userId' => 'getUserId',
            'userProfile' => 'getUserProfile'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tokenId'] = isset($data['tokenId']) ? $data['tokenId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userProfile'] = isset($data['userProfile']) ? $data['userProfile'] : null;
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
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets enable
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否启用
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets expireDate
    *  过期时间
    *
    * @return string|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param string|null $expireDate 过期时间
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  访问凭证名称
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
    * @param string|null $name 访问凭证名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tokenId
    *  访问凭证ID
    *
    * @return string|null
    */
    public function getTokenId()
    {
        return $this->container['tokenId'];
    }

    /**
    * Sets tokenId
    *
    * @param string|null $tokenId 访问凭证ID
    *
    * @return $this
    */
    public function setTokenId($tokenId)
    {
        $this->container['tokenId'] = $tokenId;
        return $this;
    }

    /**
    * Gets userId
    *  访问凭证用户名
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
    * @param string|null $userId 访问凭证用户名
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userProfile
    *  用户访问凭据信息
    *
    * @return string|null
    */
    public function getUserProfile()
    {
        return $this->container['userProfile'];
    }

    /**
    * Sets userProfile
    *
    * @param string|null $userProfile 用户访问凭据信息
    *
    * @return $this
    */
    public function setUserProfile($userProfile)
    {
        $this->container['userProfile'] = $userProfile;
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

