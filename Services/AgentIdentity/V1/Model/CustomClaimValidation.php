<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomClaimValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomClaimValidation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizingClaimMatchValue  authorizingClaimMatchValue
    * inboundTokenClaimName  The name of the custom claim field to check.
    * inboundTokenClaimValueType  The data type of the claim value to check for.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizingClaimMatchValue' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizingClaimMatchValue',
            'inboundTokenClaimName' => 'string',
            'inboundTokenClaimValueType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizingClaimMatchValue  authorizingClaimMatchValue
    * inboundTokenClaimName  The name of the custom claim field to check.
    * inboundTokenClaimValueType  The data type of the claim value to check for.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizingClaimMatchValue' => null,
        'inboundTokenClaimName' => null,
        'inboundTokenClaimValueType' => null
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
    * authorizingClaimMatchValue  authorizingClaimMatchValue
    * inboundTokenClaimName  The name of the custom claim field to check.
    * inboundTokenClaimValueType  The data type of the claim value to check for.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizingClaimMatchValue' => 'authorizing_claim_match_value',
            'inboundTokenClaimName' => 'inbound_token_claim_name',
            'inboundTokenClaimValueType' => 'inbound_token_claim_value_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizingClaimMatchValue  authorizingClaimMatchValue
    * inboundTokenClaimName  The name of the custom claim field to check.
    * inboundTokenClaimValueType  The data type of the claim value to check for.
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizingClaimMatchValue' => 'setAuthorizingClaimMatchValue',
            'inboundTokenClaimName' => 'setInboundTokenClaimName',
            'inboundTokenClaimValueType' => 'setInboundTokenClaimValueType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizingClaimMatchValue  authorizingClaimMatchValue
    * inboundTokenClaimName  The name of the custom claim field to check.
    * inboundTokenClaimValueType  The data type of the claim value to check for.
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizingClaimMatchValue' => 'getAuthorizingClaimMatchValue',
            'inboundTokenClaimName' => 'getInboundTokenClaimName',
            'inboundTokenClaimValueType' => 'getInboundTokenClaimValueType'
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
    const INBOUND_TOKEN_CLAIM_VALUE_TYPE_STRING = 'STRING';
    const INBOUND_TOKEN_CLAIM_VALUE_TYPE_STRING_ARRAY = 'STRING_ARRAY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInboundTokenClaimValueTypeAllowableValues()
    {
        return [
            self::INBOUND_TOKEN_CLAIM_VALUE_TYPE_STRING,
            self::INBOUND_TOKEN_CLAIM_VALUE_TYPE_STRING_ARRAY,
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
        $this->container['authorizingClaimMatchValue'] = isset($data['authorizingClaimMatchValue']) ? $data['authorizingClaimMatchValue'] : null;
        $this->container['inboundTokenClaimName'] = isset($data['inboundTokenClaimName']) ? $data['inboundTokenClaimName'] : null;
        $this->container['inboundTokenClaimValueType'] = isset($data['inboundTokenClaimValueType']) ? $data['inboundTokenClaimValueType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authorizingClaimMatchValue'] === null) {
            $invalidProperties[] = "'authorizingClaimMatchValue' can't be null";
        }
        if ($this->container['inboundTokenClaimName'] === null) {
            $invalidProperties[] = "'inboundTokenClaimName' can't be null";
        }
            if ((mb_strlen($this->container['inboundTokenClaimName']) > 255)) {
                $invalidProperties[] = "invalid value for 'inboundTokenClaimName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['inboundTokenClaimName']) < 1)) {
                $invalidProperties[] = "invalid value for 'inboundTokenClaimName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9_.\\-:]+$/", $this->container['inboundTokenClaimName'])) {
                $invalidProperties[] = "invalid value for 'inboundTokenClaimName', must be conform to the pattern /^[A-Za-z0-9_.\\-:]+$/.";
            }
        if ($this->container['inboundTokenClaimValueType'] === null) {
            $invalidProperties[] = "'inboundTokenClaimValueType' can't be null";
        }
            $allowedValues = $this->getInboundTokenClaimValueTypeAllowableValues();
                if (!is_null($this->container['inboundTokenClaimValueType']) && !in_array($this->container['inboundTokenClaimValueType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'inboundTokenClaimValueType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets authorizingClaimMatchValue
    *  authorizingClaimMatchValue
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizingClaimMatchValue
    */
    public function getAuthorizingClaimMatchValue()
    {
        return $this->container['authorizingClaimMatchValue'];
    }

    /**
    * Sets authorizingClaimMatchValue
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizingClaimMatchValue $authorizingClaimMatchValue authorizingClaimMatchValue
    *
    * @return $this
    */
    public function setAuthorizingClaimMatchValue($authorizingClaimMatchValue)
    {
        $this->container['authorizingClaimMatchValue'] = $authorizingClaimMatchValue;
        return $this;
    }

    /**
    * Gets inboundTokenClaimName
    *  The name of the custom claim field to check.
    *
    * @return string
    */
    public function getInboundTokenClaimName()
    {
        return $this->container['inboundTokenClaimName'];
    }

    /**
    * Sets inboundTokenClaimName
    *
    * @param string $inboundTokenClaimName The name of the custom claim field to check.
    *
    * @return $this
    */
    public function setInboundTokenClaimName($inboundTokenClaimName)
    {
        $this->container['inboundTokenClaimName'] = $inboundTokenClaimName;
        return $this;
    }

    /**
    * Gets inboundTokenClaimValueType
    *  The data type of the claim value to check for.
    *
    * @return string
    */
    public function getInboundTokenClaimValueType()
    {
        return $this->container['inboundTokenClaimValueType'];
    }

    /**
    * Sets inboundTokenClaimValueType
    *
    * @param string $inboundTokenClaimValueType The data type of the claim value to check for.
    *
    * @return $this
    */
    public function setInboundTokenClaimValueType($inboundTokenClaimValueType)
    {
        $this->container['inboundTokenClaimValueType'] = $inboundTokenClaimValueType;
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

