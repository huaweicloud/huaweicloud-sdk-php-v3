<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnsIpResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnsIpResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    * ipAddress  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    * type  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    * domainName  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    * createdAt  **参数解释**：创建时间。  **取值范围**：不涉及
    * updatedAt  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'ipAddress' => 'string',
            'type' => 'string',
            'domainName' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    * ipAddress  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    * type  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    * domainName  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    * createdAt  **参数解释**：创建时间。  **取值范围**：不涉及
    * updatedAt  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'ipAddress' => null,
        'type' => null,
        'domainName' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * enable  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    * ipAddress  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    * type  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    * domainName  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    * createdAt  **参数解释**：创建时间。  **取值范围**：不涉及
    * updatedAt  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'ipAddress' => 'ip_address',
            'type' => 'type',
            'domainName' => 'domain_name',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    * ipAddress  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    * type  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    * domainName  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    * createdAt  **参数解释**：创建时间。  **取值范围**：不涉及
    * updatedAt  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'ipAddress' => 'setIpAddress',
            'type' => 'setType',
            'domainName' => 'setDomainName',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    * ipAddress  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    * type  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    * domainName  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    * createdAt  **参数解释**：创建时间。  **取值范围**：不涉及
    * updatedAt  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'ipAddress' => 'getIpAddress',
            'type' => 'getType',
            'domainName' => 'getDomainName',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets enable
    *  **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable **参数解释**：是否已加入到域名解析。  **取值范围**： true：已加入域名解析。 false：未加入域名解析。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets ipAddress
    *  **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress **参数解释**：IPv4或IPv6地址。  **约束限制**：必须是当前负载均衡器绑定的私网地址或者公网地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：IP地址类型。  **取值范围**： vip：私网IP。 eip：公网IP。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释**：当前IP地址关联的负载均衡实例域名。  **约束限制**： - 如果IP为私网类型，则这里为负载均衡实例的私网域名。 - 如果IP为公网类型，则这里为负载均衡实例的公网域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释**：创建时间。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释**：更新时间。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

