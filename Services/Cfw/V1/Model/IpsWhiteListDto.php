<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsWhiteListDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsWhiteListDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceAddress  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * destAddress  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * ipVersion  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    * name  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * ipsId  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * description  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceAddress' => 'string',
            'destAddress' => 'string',
            'ipVersion' => 'int',
            'name' => 'string',
            'ipsId' => 'string',
            'effectiveScopes' => 'string[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceAddress  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * destAddress  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * ipVersion  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    * name  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * ipsId  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * description  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceAddress' => null,
        'destAddress' => null,
        'ipVersion' => 'int32',
        'name' => null,
        'ipsId' => null,
        'effectiveScopes' => null,
        'description' => null
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
    * sourceAddress  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * destAddress  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * ipVersion  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    * name  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * ipsId  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * description  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceAddress' => 'source_address',
            'destAddress' => 'dest_address',
            'ipVersion' => 'ip_version',
            'name' => 'name',
            'ipsId' => 'ips_id',
            'effectiveScopes' => 'effective_scopes',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceAddress  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * destAddress  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * ipVersion  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    * name  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * ipsId  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * description  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceAddress' => 'setSourceAddress',
            'destAddress' => 'setDestAddress',
            'ipVersion' => 'setIpVersion',
            'name' => 'setName',
            'ipsId' => 'setIpsId',
            'effectiveScopes' => 'setEffectiveScopes',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceAddress  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * destAddress  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    * ipVersion  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    * name  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * ipsId  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    * description  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceAddress' => 'getSourceAddress',
            'destAddress' => 'getDestAddress',
            'ipVersion' => 'getIpVersion',
            'name' => 'getName',
            'ipsId' => 'getIpsId',
            'effectiveScopes' => 'getEffectiveScopes',
            'description' => 'getDescription'
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
        $this->container['sourceAddress'] = isset($data['sourceAddress']) ? $data['sourceAddress'] : null;
        $this->container['destAddress'] = isset($data['destAddress']) ? $data['destAddress'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['effectiveScopes'] = isset($data['effectiveScopes']) ? $data['effectiveScopes'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceAddress'] === null) {
            $invalidProperties[] = "'sourceAddress' can't be null";
        }
            if ((mb_strlen($this->container['sourceAddress']) > 40)) {
                $invalidProperties[] = "invalid value for 'sourceAddress', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['sourceAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceAddress', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['destAddress'] === null) {
            $invalidProperties[] = "'destAddress' can't be null";
        }
            if ((mb_strlen($this->container['destAddress']) > 40)) {
                $invalidProperties[] = "invalid value for 'destAddress', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['destAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'destAddress', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
            if (($this->container['ipVersion'] > 6)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be smaller than or equal to 6.";
            }
            if (($this->container['ipVersion'] < 4)) {
                $invalidProperties[] = "invalid value for 'ipVersion', must be bigger than or equal to 4.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) > 9)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['ipsId']) && (mb_strlen($this->container['ipsId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipsId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipsId']) && !preg_match("/^\\d{1,9}$/", $this->container['ipsId'])) {
                $invalidProperties[] = "invalid value for 'ipsId', must be conform to the pattern /^\\d{1,9}$/.";
            }
        if ($this->container['effectiveScopes'] === null) {
            $invalidProperties[] = "'effectiveScopes' can't be null";
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
    * Gets sourceAddress
    *  **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getSourceAddress()
    {
        return $this->container['sourceAddress'];
    }

    /**
    * Sets sourceAddress
    *
    * @param string $sourceAddress **参数解释**：  源地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setSourceAddress($sourceAddress)
    {
        $this->container['sourceAddress'] = $sourceAddress;
        return $this;
    }

    /**
    * Gets destAddress
    *  **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getDestAddress()
    {
        return $this->container['destAddress'];
    }

    /**
    * Sets destAddress
    *
    * @param string $destAddress **参数解释**：  目的地址  **约束限制**：  不涉及  **取值范围**：  不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDestAddress($destAddress)
    {
        $this->container['destAddress'] = $destAddress;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion **参数解释**：  IP类型 **约束限制**：  不涉及  **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6 **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：  白名单名称  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipsId
    *  **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getIpsId()
    {
        return $this->container['ipsId'];
    }

    /**
    * Sets ipsId
    *
    * @param string|null $ipsId **参数解释**：  IPS规则ID，all代表所有IPS  **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets effectiveScopes
    *  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return string[]
    */
    public function getEffectiveScopes()
    {
        return $this->container['effectiveScopes'];
    }

    /**
    * Sets effectiveScopes
    *
    * @param string[] $effectiveScopes **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setEffectiveScopes($effectiveScopes)
    {
        $this->container['effectiveScopes'] = $effectiveScopes;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
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
    * @param string|null $description **参数解释**：  白名单描述 **约束限制**：  不涉及  **取值范围**： 不涉及  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

