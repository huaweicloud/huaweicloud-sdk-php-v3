<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSubNetworkInterfaceOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSubNetworkInterfaceOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'securityGroups' => 'string[]',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'securityGroups' => null,
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
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'securityGroups' => 'security_groups',
            'allowedAddressPairs' => 'allowed_address_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'securityGroups' => 'setSecurityGroups',
            'allowedAddressPairs' => 'setAllowedAddressPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    * securityGroups  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    * allowedAddressPairs  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'securityGroups' => 'getSecurityGroups',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
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
    * Gets description
    *  功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 功能说明：辅助弹性网卡的描述信息 取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets securityGroups
    *  功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups 功能说明：安全组的ID列表；例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]|null $allowedAddressPairs 1. 扩展属性：IP/Mac对列表，allowed_address_pair参见“allowed_address_pair对象” 2. 使用说明: IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
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

