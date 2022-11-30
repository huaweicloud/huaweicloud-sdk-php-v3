<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnscopedTokenInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnscopedTokenInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expiresAt  过期时间。
    * methods  token获取方式，联邦认证默认为mapped。
    * issuedAt  生成时间。
    * user  user
    * roles  roles信息。
    * catalog  catalog信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expiresAt' => 'string',
            'methods' => 'string[]',
            'issuedAt' => 'string',
            'user' => '\HuaweiCloud\SDK\Iam\V3\Model\FederationUserBody',
            'roles' => '\HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoRoles[]',
            'catalog' => '\HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoCatalog[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expiresAt  过期时间。
    * methods  token获取方式，联邦认证默认为mapped。
    * issuedAt  生成时间。
    * user  user
    * roles  roles信息。
    * catalog  catalog信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expiresAt' => null,
        'methods' => null,
        'issuedAt' => null,
        'user' => null,
        'roles' => null,
        'catalog' => null
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
    * expiresAt  过期时间。
    * methods  token获取方式，联邦认证默认为mapped。
    * issuedAt  生成时间。
    * user  user
    * roles  roles信息。
    * catalog  catalog信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expiresAt' => 'expires_at',
            'methods' => 'methods',
            'issuedAt' => 'issued_at',
            'user' => 'user',
            'roles' => 'roles',
            'catalog' => 'catalog'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expiresAt  过期时间。
    * methods  token获取方式，联邦认证默认为mapped。
    * issuedAt  生成时间。
    * user  user
    * roles  roles信息。
    * catalog  catalog信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'expiresAt' => 'setExpiresAt',
            'methods' => 'setMethods',
            'issuedAt' => 'setIssuedAt',
            'user' => 'setUser',
            'roles' => 'setRoles',
            'catalog' => 'setCatalog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expiresAt  过期时间。
    * methods  token获取方式，联邦认证默认为mapped。
    * issuedAt  生成时间。
    * user  user
    * roles  roles信息。
    * catalog  catalog信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'expiresAt' => 'getExpiresAt',
            'methods' => 'getMethods',
            'issuedAt' => 'getIssuedAt',
            'user' => 'getUser',
            'roles' => 'getRoles',
            'catalog' => 'getCatalog'
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
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
    * Gets expiresAt
    *  过期时间。
    *
    * @return string
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param string $expiresAt 过期时间。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets methods
    *  token获取方式，联邦认证默认为mapped。
    *
    * @return string[]
    */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
    * Sets methods
    *
    * @param string[] $methods token获取方式，联邦认证默认为mapped。
    *
    * @return $this
    */
    public function setMethods($methods)
    {
        $this->container['methods'] = $methods;
        return $this;
    }

    /**
    * Gets issuedAt
    *  生成时间。
    *
    * @return string
    */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
    * Sets issuedAt
    *
    * @param string $issuedAt 生成时间。
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
    * @return \HuaweiCloud\SDK\Iam\V3\Model\FederationUserBody
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\FederationUserBody $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets roles
    *  roles信息。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoRoles[]|null
    */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
    * Sets roles
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoRoles[]|null $roles roles信息。
    *
    * @return $this
    */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;
        return $this;
    }

    /**
    * Gets catalog
    *  catalog信息。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoCatalog[]|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\UnscopedTokenInfoCatalog[]|null $catalog catalog信息。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
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

