<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchCpcsTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchCpcsTokenResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roles  角色列表
    * ak  ak
    * expiredAt  过期时间
    * issuedAt  签发时间
    * user  user
    * xCpcsToken  xCpcsToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roles' => 'string[]',
            'ak' => '\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseAk',
            'expiredAt' => 'string',
            'issuedAt' => 'string',
            'user' => '\HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseUser',
            'xCpcsToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roles  角色列表
    * ak  ak
    * expiredAt  过期时间
    * issuedAt  签发时间
    * user  user
    * xCpcsToken  xCpcsToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roles' => null,
        'ak' => null,
        'expiredAt' => null,
        'issuedAt' => null,
        'user' => null,
        'xCpcsToken' => null
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
    * roles  角色列表
    * ak  ak
    * expiredAt  过期时间
    * issuedAt  签发时间
    * user  user
    * xCpcsToken  xCpcsToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roles' => 'roles',
            'ak' => 'ak',
            'expiredAt' => 'expired_at',
            'issuedAt' => 'issued_at',
            'user' => 'user',
            'xCpcsToken' => 'X-CPCS-Token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roles  角色列表
    * ak  ak
    * expiredAt  过期时间
    * issuedAt  签发时间
    * user  user
    * xCpcsToken  xCpcsToken
    *
    * @var string[]
    */
    protected static $setters = [
            'roles' => 'setRoles',
            'ak' => 'setAk',
            'expiredAt' => 'setExpiredAt',
            'issuedAt' => 'setIssuedAt',
            'user' => 'setUser',
            'xCpcsToken' => 'setXCpcsToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roles  角色列表
    * ak  ak
    * expiredAt  过期时间
    * issuedAt  签发时间
    * user  user
    * xCpcsToken  xCpcsToken
    *
    * @var string[]
    */
    protected static $getters = [
            'roles' => 'getRoles',
            'ak' => 'getAk',
            'expiredAt' => 'getExpiredAt',
            'issuedAt' => 'getIssuedAt',
            'user' => 'getUser',
            'xCpcsToken' => 'getXCpcsToken'
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
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['expiredAt'] = isset($data['expiredAt']) ? $data['expiredAt'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['xCpcsToken'] = isset($data['xCpcsToken']) ? $data['xCpcsToken'] : null;
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
    * Gets roles
    *  角色列表
    *
    * @return string[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param string[]|null $roles 角色列表
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets ak
    *  ak
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseAk|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseAk|null $ak ak
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets expiredAt
    *  过期时间
    *
    * @return string|null
    */
    public function getExpiredAt()
    {
        return $this->container['expiredAt'];
    }

    /**
    * Sets expiredAt
    *
    * @param string|null $expiredAt 过期时间
    *
    * @return $this
    */
    public function setExpiredAt($expiredAt)
    {
        $this->container['expiredAt'] = $expiredAt;
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
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseUser|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\SwitchTokenResponseUser|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets xCpcsToken
    *  xCpcsToken
    *
    * @return string|null
    */
    public function getXCpcsToken()
    {
        return $this->container['xCpcsToken'];
    }

    /**
    * Sets xCpcsToken
    *
    * @param string|null $xCpcsToken xCpcsToken
    *
    * @return $this
    */
    public function setXCpcsToken($xCpcsToken)
    {
        $this->container['xCpcsToken'] = $xCpcsToken;
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

