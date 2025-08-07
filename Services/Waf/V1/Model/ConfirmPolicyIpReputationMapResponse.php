<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfirmPolicyIpReputationMapResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfirmPolicyIpReputationMapResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipReputationMap  ipReputationMap
    * locale  locale
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipReputationMap' => '\HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyIpReputationMap',
            'locale' => '\HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyLocale'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipReputationMap  ipReputationMap
    * locale  locale
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipReputationMap' => null,
        'locale' => null
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
    * ipReputationMap  ipReputationMap
    * locale  locale
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipReputationMap' => 'ip_reputation_map',
            'locale' => 'locale'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipReputationMap  ipReputationMap
    * locale  locale
    *
    * @var string[]
    */
    protected static $setters = [
            'ipReputationMap' => 'setIpReputationMap',
            'locale' => 'setLocale'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipReputationMap  ipReputationMap
    * locale  locale
    *
    * @var string[]
    */
    protected static $getters = [
            'ipReputationMap' => 'getIpReputationMap',
            'locale' => 'getLocale'
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
        $this->container['ipReputationMap'] = isset($data['ipReputationMap']) ? $data['ipReputationMap'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
    * Gets ipReputationMap
    *  ipReputationMap
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyIpReputationMap|null
    */
    public function getIpReputationMap()
    {
        return $this->container['ipReputationMap'];
    }

    /**
    * Sets ipReputationMap
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyIpReputationMap|null $ipReputationMap ipReputationMap
    *
    * @return $this
    */
    public function setIpReputationMap($ipReputationMap)
    {
        $this->container['ipReputationMap'] = $ipReputationMap;
        return $this;
    }

    /**
    * Gets locale
    *  locale
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyLocale|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IpReputationMapResponseBodyLocale|null $locale locale
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
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

