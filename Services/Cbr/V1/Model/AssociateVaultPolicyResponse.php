<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateVaultPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateVaultPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * associatePolicy  associatePolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'associatePolicy' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultPolicyResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * associatePolicy  associatePolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'associatePolicy' => null
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
    * associatePolicy  associatePolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'associatePolicy' => 'associate_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * associatePolicy  associatePolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'associatePolicy' => 'setAssociatePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * associatePolicy  associatePolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'associatePolicy' => 'getAssociatePolicy'
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
        $this->container['associatePolicy'] = isset($data['associatePolicy']) ? $data['associatePolicy'] : null;
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
    * Gets associatePolicy
    *  associatePolicy
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultPolicyResp|null
    */
    public function getAssociatePolicy()
    {
        return $this->container['associatePolicy'];
    }

    /**
    * Sets associatePolicy
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultPolicyResp|null $associatePolicy associatePolicy
    *
    * @return $this
    */
    public function setAssociatePolicy($associatePolicy)
    {
        $this->container['associatePolicy'] = $associatePolicy;
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

