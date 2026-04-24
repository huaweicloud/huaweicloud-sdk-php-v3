<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizingClaimMatchValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizingClaimMatchValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * claimMatchOperator  Defines the relationship between the claim field value and the value or values you're matching for.
    * claimMatchValue  claimMatchValue
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'claimMatchOperator' => 'string',
            'claimMatchValue' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\ClaimMatchValue'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * claimMatchOperator  Defines the relationship between the claim field value and the value or values you're matching for.
    * claimMatchValue  claimMatchValue
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'claimMatchOperator' => null,
        'claimMatchValue' => null
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
    * claimMatchOperator  Defines the relationship between the claim field value and the value or values you're matching for.
    * claimMatchValue  claimMatchValue
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'claimMatchOperator' => 'claim_match_operator',
            'claimMatchValue' => 'claim_match_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * claimMatchOperator  Defines the relationship between the claim field value and the value or values you're matching for.
    * claimMatchValue  claimMatchValue
    *
    * @var string[]
    */
    protected static $setters = [
            'claimMatchOperator' => 'setClaimMatchOperator',
            'claimMatchValue' => 'setClaimMatchValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * claimMatchOperator  Defines the relationship between the claim field value and the value or values you're matching for.
    * claimMatchValue  claimMatchValue
    *
    * @var string[]
    */
    protected static $getters = [
            'claimMatchOperator' => 'getClaimMatchOperator',
            'claimMatchValue' => 'getClaimMatchValue'
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
    const CLAIM_MATCH_OPERATOR_EQUALS = 'EQUALS';
    const CLAIM_MATCH_OPERATOR_CONTAINS = 'CONTAINS';
    const CLAIM_MATCH_OPERATOR_CONTAINS_ANY = 'CONTAINS_ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClaimMatchOperatorAllowableValues()
    {
        return [
            self::CLAIM_MATCH_OPERATOR_EQUALS,
            self::CLAIM_MATCH_OPERATOR_CONTAINS,
            self::CLAIM_MATCH_OPERATOR_CONTAINS_ANY,
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
        $this->container['claimMatchOperator'] = isset($data['claimMatchOperator']) ? $data['claimMatchOperator'] : null;
        $this->container['claimMatchValue'] = isset($data['claimMatchValue']) ? $data['claimMatchValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['claimMatchOperator'] === null) {
            $invalidProperties[] = "'claimMatchOperator' can't be null";
        }
            $allowedValues = $this->getClaimMatchOperatorAllowableValues();
                if (!is_null($this->container['claimMatchOperator']) && !in_array($this->container['claimMatchOperator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'claimMatchOperator', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['claimMatchValue'] === null) {
            $invalidProperties[] = "'claimMatchValue' can't be null";
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
    * Gets claimMatchOperator
    *  Defines the relationship between the claim field value and the value or values you're matching for.
    *
    * @return string
    */
    public function getClaimMatchOperator()
    {
        return $this->container['claimMatchOperator'];
    }

    /**
    * Sets claimMatchOperator
    *
    * @param string $claimMatchOperator Defines the relationship between the claim field value and the value or values you're matching for.
    *
    * @return $this
    */
    public function setClaimMatchOperator($claimMatchOperator)
    {
        $this->container['claimMatchOperator'] = $claimMatchOperator;
        return $this;
    }

    /**
    * Gets claimMatchValue
    *  claimMatchValue
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\ClaimMatchValue
    */
    public function getClaimMatchValue()
    {
        return $this->container['claimMatchValue'];
    }

    /**
    * Sets claimMatchValue
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\ClaimMatchValue $claimMatchValue claimMatchValue
    *
    * @return $this
    */
    public function setClaimMatchValue($claimMatchValue)
    {
        $this->container['claimMatchValue'] = $claimMatchValue;
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

