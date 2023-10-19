<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeInstanceNetworkResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeInstanceNetworkResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  状态
    * securityGrpStatus  安全组
    * firewallStatus  防火墙状态
    * publicEipStatus  公共EIP状态
    * nics  防火墙状态(兼容)
    * publicEipStatu  公共EIP状态(兼容)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'securityGrpStatus' => 'string',
            'firewallStatus' => 'bool',
            'publicEipStatus' => 'bool',
            'nics' => 'bool',
            'publicEipStatu' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  状态
    * securityGrpStatus  安全组
    * firewallStatus  防火墙状态
    * publicEipStatus  公共EIP状态
    * nics  防火墙状态(兼容)
    * publicEipStatu  公共EIP状态(兼容)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'securityGrpStatus' => null,
        'firewallStatus' => null,
        'publicEipStatus' => null,
        'nics' => null,
        'publicEipStatu' => null
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
    * status  状态
    * securityGrpStatus  安全组
    * firewallStatus  防火墙状态
    * publicEipStatus  公共EIP状态
    * nics  防火墙状态(兼容)
    * publicEipStatu  公共EIP状态(兼容)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'securityGrpStatus' => 'security_grp_status',
            'firewallStatus' => 'firewall_status',
            'publicEipStatus' => 'public_eip_status',
            'nics' => 'nics',
            'publicEipStatu' => 'public_eip_statu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  状态
    * securityGrpStatus  安全组
    * firewallStatus  防火墙状态
    * publicEipStatus  公共EIP状态
    * nics  防火墙状态(兼容)
    * publicEipStatu  公共EIP状态(兼容)
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'securityGrpStatus' => 'setSecurityGrpStatus',
            'firewallStatus' => 'setFirewallStatus',
            'publicEipStatus' => 'setPublicEipStatus',
            'nics' => 'setNics',
            'publicEipStatu' => 'setPublicEipStatu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  状态
    * securityGrpStatus  安全组
    * firewallStatus  防火墙状态
    * publicEipStatus  公共EIP状态
    * nics  防火墙状态(兼容)
    * publicEipStatu  公共EIP状态(兼容)
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'securityGrpStatus' => 'getSecurityGrpStatus',
            'firewallStatus' => 'getFirewallStatus',
            'publicEipStatus' => 'getPublicEipStatus',
            'nics' => 'getNics',
            'publicEipStatu' => 'getPublicEipStatu'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['securityGrpStatus'] = isset($data['securityGrpStatus']) ? $data['securityGrpStatus'] : null;
        $this->container['firewallStatus'] = isset($data['firewallStatus']) ? $data['firewallStatus'] : null;
        $this->container['publicEipStatus'] = isset($data['publicEipStatus']) ? $data['publicEipStatus'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['publicEipStatu'] = isset($data['publicEipStatu']) ? $data['publicEipStatu'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGrpStatus']) && (mb_strlen($this->container['securityGrpStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityGrpStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['securityGrpStatus']) && (mb_strlen($this->container['securityGrpStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGrpStatus', the character length must be bigger than or equal to 0.";
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
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets securityGrpStatus
    *  安全组
    *
    * @return string|null
    */
    public function getSecurityGrpStatus()
    {
        return $this->container['securityGrpStatus'];
    }

    /**
    * Sets securityGrpStatus
    *
    * @param string|null $securityGrpStatus 安全组
    *
    * @return $this
    */
    public function setSecurityGrpStatus($securityGrpStatus)
    {
        $this->container['securityGrpStatus'] = $securityGrpStatus;
        return $this;
    }

    /**
    * Gets firewallStatus
    *  防火墙状态
    *
    * @return bool|null
    */
    public function getFirewallStatus()
    {
        return $this->container['firewallStatus'];
    }

    /**
    * Sets firewallStatus
    *
    * @param bool|null $firewallStatus 防火墙状态
    *
    * @return $this
    */
    public function setFirewallStatus($firewallStatus)
    {
        $this->container['firewallStatus'] = $firewallStatus;
        return $this;
    }

    /**
    * Gets publicEipStatus
    *  公共EIP状态
    *
    * @return bool|null
    */
    public function getPublicEipStatus()
    {
        return $this->container['publicEipStatus'];
    }

    /**
    * Sets publicEipStatus
    *
    * @param bool|null $publicEipStatus 公共EIP状态
    *
    * @return $this
    */
    public function setPublicEipStatus($publicEipStatus)
    {
        $this->container['publicEipStatus'] = $publicEipStatus;
        return $this;
    }

    /**
    * Gets nics
    *  防火墙状态(兼容)
    *
    * @return bool|null
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param bool|null $nics 防火墙状态(兼容)
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets publicEipStatu
    *  公共EIP状态(兼容)
    *
    * @return bool|null
    */
    public function getPublicEipStatu()
    {
        return $this->container['publicEipStatu'];
    }

    /**
    * Sets publicEipStatu
    *
    * @param bool|null $publicEipStatu 公共EIP状态(兼容)
    *
    * @return $this
    */
    public function setPublicEipStatu($publicEipStatu)
    {
        $this->container['publicEipStatu'] = $publicEipStatu;
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

