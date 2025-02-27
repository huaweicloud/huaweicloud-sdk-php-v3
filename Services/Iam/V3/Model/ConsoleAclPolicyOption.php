<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsoleAclPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsoleAclPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allowAddressNetmasks  允许访问的IP地址或网段。
    * allowIpRanges  允许访问的IP地址区间。
    * allowAddressNetmasksIpv6  允许访问的IPv6地址或网段。
    * allowIpRangesIpv6  允许访问的IPv6地址区间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allowAddressNetmasks' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOption[]',
            'allowIpRanges' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOption[]',
            'allowAddressNetmasksIpv6' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOptionIPv6[]',
            'allowIpRangesIpv6' => '\HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOptionIPv6[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allowAddressNetmasks  允许访问的IP地址或网段。
    * allowIpRanges  允许访问的IP地址区间。
    * allowAddressNetmasksIpv6  允许访问的IPv6地址或网段。
    * allowIpRangesIpv6  允许访问的IPv6地址区间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allowAddressNetmasks' => null,
        'allowIpRanges' => null,
        'allowAddressNetmasksIpv6' => null,
        'allowIpRangesIpv6' => null
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
    * allowAddressNetmasks  允许访问的IP地址或网段。
    * allowIpRanges  允许访问的IP地址区间。
    * allowAddressNetmasksIpv6  允许访问的IPv6地址或网段。
    * allowIpRangesIpv6  允许访问的IPv6地址区间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allowAddressNetmasks' => 'allow_address_netmasks',
            'allowIpRanges' => 'allow_ip_ranges',
            'allowAddressNetmasksIpv6' => 'allow_address_netmasks_ipv6',
            'allowIpRangesIpv6' => 'allow_ip_ranges_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allowAddressNetmasks  允许访问的IP地址或网段。
    * allowIpRanges  允许访问的IP地址区间。
    * allowAddressNetmasksIpv6  允许访问的IPv6地址或网段。
    * allowIpRangesIpv6  允许访问的IPv6地址区间。
    *
    * @var string[]
    */
    protected static $setters = [
            'allowAddressNetmasks' => 'setAllowAddressNetmasks',
            'allowIpRanges' => 'setAllowIpRanges',
            'allowAddressNetmasksIpv6' => 'setAllowAddressNetmasksIpv6',
            'allowIpRangesIpv6' => 'setAllowIpRangesIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allowAddressNetmasks  允许访问的IP地址或网段。
    * allowIpRanges  允许访问的IP地址区间。
    * allowAddressNetmasksIpv6  允许访问的IPv6地址或网段。
    * allowIpRangesIpv6  允许访问的IPv6地址区间。
    *
    * @var string[]
    */
    protected static $getters = [
            'allowAddressNetmasks' => 'getAllowAddressNetmasks',
            'allowIpRanges' => 'getAllowIpRanges',
            'allowAddressNetmasksIpv6' => 'getAllowAddressNetmasksIpv6',
            'allowIpRangesIpv6' => 'getAllowIpRangesIpv6'
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
        $this->container['allowAddressNetmasks'] = isset($data['allowAddressNetmasks']) ? $data['allowAddressNetmasks'] : null;
        $this->container['allowIpRanges'] = isset($data['allowIpRanges']) ? $data['allowIpRanges'] : null;
        $this->container['allowAddressNetmasksIpv6'] = isset($data['allowAddressNetmasksIpv6']) ? $data['allowAddressNetmasksIpv6'] : null;
        $this->container['allowIpRangesIpv6'] = isset($data['allowIpRangesIpv6']) ? $data['allowIpRangesIpv6'] : null;
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
    * Gets allowAddressNetmasks
    *  允许访问的IP地址或网段。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOption[]|null
    */
    public function getAllowAddressNetmasks()
    {
        return $this->container['allowAddressNetmasks'];
    }

    /**
    * Sets allowAddressNetmasks
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOption[]|null $allowAddressNetmasks 允许访问的IP地址或网段。
    *
    * @return $this
    */
    public function setAllowAddressNetmasks($allowAddressNetmasks)
    {
        $this->container['allowAddressNetmasks'] = $allowAddressNetmasks;
        return $this;
    }

    /**
    * Gets allowIpRanges
    *  允许访问的IP地址区间。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOption[]|null
    */
    public function getAllowIpRanges()
    {
        return $this->container['allowIpRanges'];
    }

    /**
    * Sets allowIpRanges
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOption[]|null $allowIpRanges 允许访问的IP地址区间。
    *
    * @return $this
    */
    public function setAllowIpRanges($allowIpRanges)
    {
        $this->container['allowIpRanges'] = $allowIpRanges;
        return $this;
    }

    /**
    * Gets allowAddressNetmasksIpv6
    *  允许访问的IPv6地址或网段。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOptionIPv6[]|null
    */
    public function getAllowAddressNetmasksIpv6()
    {
        return $this->container['allowAddressNetmasksIpv6'];
    }

    /**
    * Sets allowAddressNetmasksIpv6
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowAddressNetmasksOptionIPv6[]|null $allowAddressNetmasksIpv6 允许访问的IPv6地址或网段。
    *
    * @return $this
    */
    public function setAllowAddressNetmasksIpv6($allowAddressNetmasksIpv6)
    {
        $this->container['allowAddressNetmasksIpv6'] = $allowAddressNetmasksIpv6;
        return $this;
    }

    /**
    * Gets allowIpRangesIpv6
    *  允许访问的IPv6地址区间。
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOptionIPv6[]|null
    */
    public function getAllowIpRangesIpv6()
    {
        return $this->container['allowIpRangesIpv6'];
    }

    /**
    * Sets allowIpRangesIpv6
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\AllowIpRangesOptionIPv6[]|null $allowIpRangesIpv6 允许访问的IPv6地址区间。
    *
    * @return $this
    */
    public function setAllowIpRangesIpv6($allowIpRangesIpv6)
    {
        $this->container['allowIpRangesIpv6'] = $allowIpRangesIpv6;
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

