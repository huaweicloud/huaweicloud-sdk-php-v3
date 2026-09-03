<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePolicyEngineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePolicyEngineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyEngineId  System-generated unique identifier for the policy engine.
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyEngineId' => 'string',
            'body' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdatePolicyEngineReqBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyEngineId  System-generated unique identifier for the policy engine.
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyEngineId' => null,
        'body' => null
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
    * policyEngineId  System-generated unique identifier for the policy engine.
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyEngineId' => 'policy_engine_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyEngineId  System-generated unique identifier for the policy engine.
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'policyEngineId' => 'setPolicyEngineId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyEngineId  System-generated unique identifier for the policy engine.
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'policyEngineId' => 'getPolicyEngineId',
            'body' => 'getBody'
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
        $this->container['policyEngineId'] = isset($data['policyEngineId']) ? $data['policyEngineId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyEngineId'] === null) {
            $invalidProperties[] = "'policyEngineId' can't be null";
        }
            if ((mb_strlen($this->container['policyEngineId']) > 59)) {
                $invalidProperties[] = "invalid value for 'policyEngineId', the character length must be smaller than or equal to 59.";
            }
            if ((mb_strlen($this->container['policyEngineId']) < 12)) {
                $invalidProperties[] = "invalid value for 'policyEngineId', the character length must be bigger than or equal to 12.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-_]+$/", $this->container['policyEngineId'])) {
                $invalidProperties[] = "invalid value for 'policyEngineId', must be conform to the pattern /^[a-zA-Z0-9\\-_]+$/.";
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
    * Gets policyEngineId
    *  System-generated unique identifier for the policy engine.
    *
    * @return string
    */
    public function getPolicyEngineId()
    {
        return $this->container['policyEngineId'];
    }

    /**
    * Sets policyEngineId
    *
    * @param string $policyEngineId System-generated unique identifier for the policy engine.
    *
    * @return $this
    */
    public function setPolicyEngineId($policyEngineId)
    {
        $this->container['policyEngineId'] = $policyEngineId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdatePolicyEngineReqBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\UpdatePolicyEngineReqBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

