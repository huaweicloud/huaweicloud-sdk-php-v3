<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchTokenResponseToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchTokenResponse_token';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  app
    * expiresAt  过期时间
    * roles  角色列表
    * issuedAt  签发时间
    * user  user
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => '\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenApp',
            'expiresAt' => 'string',
            'roles' => '\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenRoles[]',
            'issuedAt' => 'string',
            'user' => '\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenUser'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  app
    * expiresAt  过期时间
    * roles  角色列表
    * issuedAt  签发时间
    * user  user
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'expiresAt' => null,
        'roles' => null,
        'issuedAt' => null,
        'user' => null
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
    * app  app
    * expiresAt  过期时间
    * roles  角色列表
    * issuedAt  签发时间
    * user  user
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'expiresAt' => 'expires_at',
            'roles' => 'roles',
            'issuedAt' => 'issued_at',
            'user' => 'user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  app
    * expiresAt  过期时间
    * roles  角色列表
    * issuedAt  签发时间
    * user  user
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'expiresAt' => 'setExpiresAt',
            'roles' => 'setRoles',
            'issuedAt' => 'setIssuedAt',
            'user' => 'setUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  app
    * expiresAt  过期时间
    * roles  角色列表
    * issuedAt  签发时间
    * user  user
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'expiresAt' => 'getExpiresAt',
            'roles' => 'getRoles',
            'issuedAt' => 'getIssuedAt',
            'user' => 'getUser'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
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
    * Gets app
    *  app
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenApp|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenApp|null $app app
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets expiresAt
    *  过期时间
    *
    * @return string|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string|null $expiresAt 过期时间
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets roles
    *  角色列表
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenRoles[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenRoles[]|null $roles 角色列表
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets issuedAt
    *  签发时间
    *
    * @return string|null
    */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
    * Sets issuedAt
    *
    * @param string|null $issuedAt 签发时间
    *
    * @return $this
    */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;
        return $this;
    }

    /**
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseTokenUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
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

