<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TokenAuthIdentity implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TokenAuthIdentity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'methods' => 'string[]',
            'token' => '\HuaweiCloud\SDK\Iam\V3\Model\IdentityToken',
            'policy' => '\HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'methods' => null,
        'token' => null,
        'policy' => null
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
            'methods' => 'methods',
            'token' => 'token',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'methods' => 'setMethods',
            'token' => 'setToken',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'methods' => 'getMethods',
            'token' => 'getToken',
            'policy' => 'getPolicy'
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
    const METHODS_TOKEN = 'token';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMethodsAllowableValues()
    {
        return [
            self::METHODS_TOKEN,
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
        $this->container['methods'] = isset($data['methods']) ? $data['methods'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['methods'] === null) {
            $invalidProperties[] = "'methods' can't be null";
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
    * Gets methods
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
    * @param string[] $methods 认证方法，该字段内容为[\"token\"]。
    *
    * @return $this
    */
    public function setMethods($methods)
    {
            $allowedValues = $this->getMethodsAllowableValues();
                if (array_diff($methods, $allowedValues)) {
                    throw new \InvalidArgumentException(
                        sprintf(
                            "Invalid value for 'methods', must be one of '%s'",
                            implode("', '", $allowedValues)
                        )
                    );
                }
        $this->container['methods'] = $methods;
        return $this;
    }

    /**
    * Gets token
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\IdentityToken|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\IdentityToken|null $token token
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets policy
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\ServicePolicy|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

