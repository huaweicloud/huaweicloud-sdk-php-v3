<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisassociateServerVirtualIpOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisassociateServerVirtualIpOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    * ipAddress  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    * reverseBinding  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'ipAddress' => 'string',
            'reverseBinding' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    * ipAddress  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    * reverseBinding  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'ipAddress' => null,
        'reverseBinding' => null
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
    * subnetId  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    * ipAddress  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    * reverseBinding  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'ipAddress' => 'ip_address',
            'reverseBinding' => 'reverse_binding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    * ipAddress  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    * reverseBinding  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'ipAddress' => 'setIpAddress',
            'reverseBinding' => 'setReverseBinding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    * ipAddress  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    * reverseBinding  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'ipAddress' => 'getIpAddress',
            'reverseBinding' => 'getReverseBinding'
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
    const SUBNET_ID_EMPTY = '';
    const IP_ADDRESS_EMPTY = '';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubnetIdAllowableValues()
    {
        return [
            self::SUBNET_ID_EMPTY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpAddressAllowableValues()
    {
        return [
            self::IP_ADDRESS_EMPTY,
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : '';
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : '';
        $this->container['reverseBinding'] = isset($data['reverseBinding']) ? $data['reverseBinding'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            $allowedValues = $this->getSubnetIdAllowableValues();
                if (!is_null($this->container['subnetId']) && !in_array($this->container['subnetId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subnetId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
        }
            $allowedValues = $this->getIpAddressAllowableValues();
                if (!is_null($this->container['ipAddress']) && !in_array($this->container['ipAddress'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipAddress', must be one of '%s'",
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
    * Gets subnetId
    *  云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 云服务器添加网卡的信息。  约束：解绑虚拟IP时，subnet_id为空字符串
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    *
    * @return string
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string $ipAddress 网卡即将配置的虚拟IP的地址。  约束：解绑虚拟IP时，ip_address为空字符串
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets reverseBinding
    *  虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @return bool|null
    */
    public function getReverseBinding()
    {
        return $this->container['reverseBinding'];
    }

    /**
    * Sets reverseBinding
    *
    * @param bool|null $reverseBinding 虚拟IP的allowed_address_pairs属性是否添加网卡的IP/Mac对。
    *
    * @return $this
    */
    public function setReverseBinding($reverseBinding)
    {
        $this->container['reverseBinding'] = $reverseBinding;
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

