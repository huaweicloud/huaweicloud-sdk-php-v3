<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsWhiteListVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsWhiteListVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceAddress  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    * destAddress  **参数解释**：  目的地址  **取值范围**：  不涉及
    * name  **参数解释**：  白名单名称  **取值范围**： 不涉及
    * listId  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    * ipsId  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    * ipVersion  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    * description  **参数解释**：  白名单描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceAddress' => 'string',
            'destAddress' => 'string',
            'name' => 'string',
            'listId' => 'string',
            'effectiveScopes' => 'string[]',
            'ipsId' => 'string',
            'ipVersion' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceAddress  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    * destAddress  **参数解释**：  目的地址  **取值范围**：  不涉及
    * name  **参数解释**：  白名单名称  **取值范围**： 不涉及
    * listId  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    * ipsId  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    * ipVersion  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    * description  **参数解释**：  白名单描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceAddress' => null,
        'destAddress' => null,
        'name' => null,
        'listId' => null,
        'effectiveScopes' => null,
        'ipsId' => null,
        'ipVersion' => 'int32',
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
    * sourceAddress  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    * destAddress  **参数解释**：  目的地址  **取值范围**：  不涉及
    * name  **参数解释**：  白名单名称  **取值范围**： 不涉及
    * listId  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    * ipsId  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    * ipVersion  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    * description  **参数解释**：  白名单描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceAddress' => 'source_address',
            'destAddress' => 'dest_address',
            'name' => 'name',
            'listId' => 'list_id',
            'effectiveScopes' => 'effective_scopes',
            'ipsId' => 'ips_id',
            'ipVersion' => 'ip_version',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceAddress  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    * destAddress  **参数解释**：  目的地址  **取值范围**：  不涉及
    * name  **参数解释**：  白名单名称  **取值范围**： 不涉及
    * listId  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    * ipsId  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    * ipVersion  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    * description  **参数解释**：  白名单描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceAddress' => 'setSourceAddress',
            'destAddress' => 'setDestAddress',
            'name' => 'setName',
            'listId' => 'setListId',
            'effectiveScopes' => 'setEffectiveScopes',
            'ipsId' => 'setIpsId',
            'ipVersion' => 'setIpVersion',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceAddress  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    * destAddress  **参数解释**：  目的地址  **取值范围**：  不涉及
    * name  **参数解释**：  白名单名称  **取值范围**： 不涉及
    * listId  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    * effectiveScopes  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    * ipsId  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    * ipVersion  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    * description  **参数解释**：  白名单描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceAddress' => 'getSourceAddress',
            'destAddress' => 'getDestAddress',
            'name' => 'getName',
            'listId' => 'getListId',
            'effectiveScopes' => 'getEffectiveScopes',
            'ipsId' => 'getIpsId',
            'ipVersion' => 'getIpVersion',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['listId'] = isset($data['listId']) ? $data['listId'] : null;
        $this->container['effectiveScopes'] = isset($data['effectiveScopes']) ? $data['effectiveScopes'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
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
    *  **参数解释**： 白名单源地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSourceAddress()
    {
        return $this->container['sourceAddress'];
    }

    /**
    * Sets sourceAddress
    *
    * @param string|null $sourceAddress **参数解释**： 白名单源地址 **取值范围**： 不涉及
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
    *  **参数解释**：  目的地址  **取值范围**：  不涉及
    *
    * @return string|null
    */
    public function getDestAddress()
    {
        return $this->container['destAddress'];
    }

    /**
    * Sets destAddress
    *
    * @param string|null $destAddress **参数解释**：  目的地址  **取值范围**：  不涉及
    *
    * @return $this
    */
    public function setDestAddress($destAddress)
    {
        $this->container['destAddress'] = $destAddress;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  白名单名称  **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：  白名单名称  **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets listId
    *  **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getListId()
    {
        return $this->container['listId'];
    }

    /**
    * Sets listId
    *
    * @param string|null $listId **参数解释**：  IPS白名单ID  **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setListId($listId)
    {
        $this->container['listId'] = $listId;
        return $this;
    }

    /**
    * Gets effectiveScopes
    *  **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getEffectiveScopes()
    {
        return $this->container['effectiveScopes'];
    }

    /**
    * Sets effectiveScopes
    *
    * @param string[]|null $effectiveScopes **参数解释**：  生效范围：NAT EIP VPC HCS场景中还有VGW信息  **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEffectiveScopes($effectiveScopes)
    {
        $this->container['effectiveScopes'] = $effectiveScopes;
        return $this;
    }

    /**
    * Gets ipsId
    *  **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
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
    * @param string|null $ipsId **参数解释**：  生效范围：IPS规则ID，all代表所有IPS **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion **参数解释**：  IP类型 **取值范围**：  4：表示IP类型为IPv4 6：表示IP类型为IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  白名单描述 **取值范围**： 不涉及
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
    * @param string|null $description **参数解释**：  白名单描述 **取值范围**： 不涉及
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

