<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Networks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Networks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子网的网络id。
    * ipv6Enable  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    * ipv6Bandwidth  ipv6Bandwidth
    * allowedAddressPairs  是否开启源/目的检查开关。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ipv6Enable' => 'bool',
            'ipv6Bandwidth' => '\HuaweiCloud\SDK\_As\V1\Model\Ipv6Bandwidth',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\_As\V1\Model\AllowedAddressPair[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子网的网络id。
    * ipv6Enable  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    * ipv6Bandwidth  ipv6Bandwidth
    * allowedAddressPairs  是否开启源/目的检查开关。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ipv6Enable' => null,
        'ipv6Bandwidth' => null,
        'allowedAddressPairs' => null
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
    * id  子网的网络id。
    * ipv6Enable  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    * ipv6Bandwidth  ipv6Bandwidth
    * allowedAddressPairs  是否开启源/目的检查开关。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ipv6Enable' => 'ipv6_enable',
            'ipv6Bandwidth' => 'ipv6_bandwidth',
            'allowedAddressPairs' => 'allowed_address_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子网的网络id。
    * ipv6Enable  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    * ipv6Bandwidth  ipv6Bandwidth
    * allowedAddressPairs  是否开启源/目的检查开关。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ipv6Enable' => 'setIpv6Enable',
            'ipv6Bandwidth' => 'setIpv6Bandwidth',
            'allowedAddressPairs' => 'setAllowedAddressPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子网的网络id。
    * ipv6Enable  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    * ipv6Bandwidth  ipv6Bandwidth
    * allowedAddressPairs  是否开启源/目的检查开关。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ipv6Enable' => 'getIpv6Enable',
            'ipv6Bandwidth' => 'getIpv6Bandwidth',
            'allowedAddressPairs' => 'getAllowedAddressPairs'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['ipv6Bandwidth'] = isset($data['ipv6Bandwidth']) ? $data['ipv6Bandwidth'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets id
    *  子网的网络id。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 子网的网络id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否启用IPv6。取值为true时，标识此网卡已启用IPv6。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets ipv6Bandwidth
    *  ipv6Bandwidth
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\Ipv6Bandwidth|null
    */
    public function getIpv6Bandwidth()
    {
        return $this->container['ipv6Bandwidth'];
    }

    /**
    * Sets ipv6Bandwidth
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\Ipv6Bandwidth|null $ipv6Bandwidth ipv6Bandwidth
    *
    * @return $this
    */
    public function setIpv6Bandwidth($ipv6Bandwidth)
    {
        $this->container['ipv6Bandwidth'] = $ipv6Bandwidth;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  是否开启源/目的检查开关。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\AllowedAddressPair[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\AllowedAddressPair[]|null $allowedAddressPairs 是否开启源/目的检查开关。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
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

