<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Credential implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Credential';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expiresAt' => 'string',
            'access' => 'string',
            'secret' => 'string',
            'securitytoken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expiresAt' => null,
        'access' => null,
        'secret' => null,
        'securitytoken' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expiresAt' => 'expires_at',
            'access' => 'access',
            'secret' => 'secret',
            'securitytoken' => 'securitytoken'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'expiresAt' => 'setExpiresAt',
            'access' => 'setAccess',
            'secret' => 'setSecret',
            'securitytoken' => 'setSecuritytoken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'expiresAt' => 'getExpiresAt',
            'access' => 'getAccess',
            'secret' => 'getSecret',
            'securitytoken' => 'getSecuritytoken'
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
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['securitytoken'] = isset($data['securitytoken']) ? $data['securitytoken'] : null;
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
        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalidProperties[] = "'secret' can't be null";
        }
        if ($this->container['securitytoken'] === null) {
            $invalidProperties[] = "'securitytoken' can't be null";
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
    * @param string $expiresAt AK/SK和securitytoken的过期时间。
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets access
    *
    * @return string
    */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
    * Sets access
    *
    * @param string $access 获取的AK。
    *
    * @return $this
    */
    public function setAccess($access)
    {
        $this->container['access'] = $access;
        return $this;
    }

    /**
    * Gets secret
    *
    * @return string
    */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
    * Sets secret
    *
    * @param string $secret 获取的SK。
    *
    * @return $this
    */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;
        return $this;
    }

    /**
    * Gets securitytoken
    *
    * @return string
    */
    public function getSecuritytoken()
    {
        return $this->container['securitytoken'];
    }

    /**
    * Sets securitytoken
    *
    * @param string $securitytoken securitytoken是将所获的AK、SK等信息进行加密后的字符串。
    *
    * @return $this
    */
    public function setSecuritytoken($securitytoken)
    {
        $this->container['securitytoken'] = $securitytoken;
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

