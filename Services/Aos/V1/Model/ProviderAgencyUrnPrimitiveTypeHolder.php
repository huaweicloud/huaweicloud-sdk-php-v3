<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProviderAgencyUrnPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProviderAgencyUrnPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerAgencyUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerAgencyUrn' => null
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
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerAgencyUrn' => 'provider_agency_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'providerAgencyUrn' => 'setProviderAgencyUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerAgencyUrn  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'providerAgencyUrn' => 'getProviderAgencyUrn'
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
        $this->container['providerAgencyUrn'] = isset($data['providerAgencyUrn']) ? $data['providerAgencyUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['providerAgencyUrn']) && !preg_match("/^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/", $this->container['providerAgencyUrn'])) {
                $invalidProperties[] = "invalid value for 'providerAgencyUrn', must be conform to the pattern /^(iam:\\*?:[A-Za-z0-9-]{1,64}:agency:.{1,64})?$/.";
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
    * Gets providerAgencyUrn
    *  自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return string|null
    */
    public function getProviderAgencyUrn()
    {
        return $this->container['providerAgencyUrn'];
    }

    /**
    * Sets providerAgencyUrn
    *
    * @param string|null $providerAgencyUrn 自定义provider所绑定的IAM委托URN，provider_agency_name和provider_agency_urn最多只能提供一个。
    *
    * @return $this
    */
    public function setProviderAgencyUrn($providerAgencyUrn)
    {
        $this->container['providerAgencyUrn'] = $providerAgencyUrn;
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

