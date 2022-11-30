<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgencyTokenAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgencyTokenAuth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identity  identity
    * scope  scope
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identity' => '\HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenIdentity',
            'scope' => '\HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenScope'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identity  identity
    * scope  scope
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identity' => null,
        'scope' => null
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
    * identity  identity
    * scope  scope
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identity' => 'identity',
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identity  identity
    * scope  scope
    *
    * @var string[]
    */
    protected static $setters = [
            'identity' => 'setIdentity',
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identity  identity
    * scope  scope
    *
    * @var string[]
    */
    protected static $getters = [
            'identity' => 'getIdentity',
            'scope' => 'getScope'
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
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identity'] === null) {
            $invalidProperties[] = "'identity' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
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
    * Gets identity
    *  identity
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenIdentity
    */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
    * Sets identity
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenIdentity $identity identity
    *
    * @return $this
    */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;
        return $this;
    }

    /**
    * Gets scope
    *  scope
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenScope
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AgencyTokenScope $scope scope
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

