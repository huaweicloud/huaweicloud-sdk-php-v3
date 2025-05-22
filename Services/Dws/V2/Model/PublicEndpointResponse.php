<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicEndpointResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicEndpointResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * port  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    * enabled  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    * ipId  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * ipBandwidth  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    * domainNameSuffix  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * zoneName  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * domainNameTtl  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    * domainNameStatus  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    * ipStatus  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'port' => 'int',
            'enabled' => 'bool',
            'ipId' => 'string',
            'ipBandwidth' => 'string',
            'domainName' => 'string',
            'domainNameSuffix' => 'string',
            'zoneName' => 'string',
            'domainNameTtl' => 'int',
            'domainNameStatus' => 'string',
            'ipStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * port  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    * enabled  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    * ipId  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * ipBandwidth  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    * domainNameSuffix  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * zoneName  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * domainNameTtl  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    * domainNameStatus  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    * ipStatus  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'port' => 'int32',
        'enabled' => null,
        'ipId' => null,
        'ipBandwidth' => null,
        'domainName' => null,
        'domainNameSuffix' => null,
        'zoneName' => null,
        'domainNameTtl' => 'int32',
        'domainNameStatus' => null,
        'ipStatus' => null
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
    * ip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * port  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    * enabled  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    * ipId  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * ipBandwidth  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    * domainNameSuffix  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * zoneName  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * domainNameTtl  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    * domainNameStatus  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    * ipStatus  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'port' => 'port',
            'enabled' => 'enabled',
            'ipId' => 'ip_id',
            'ipBandwidth' => 'ip_bandwidth',
            'domainName' => 'domain_name',
            'domainNameSuffix' => 'domain_name_suffix',
            'zoneName' => 'zone_name',
            'domainNameTtl' => 'domain_name_ttl',
            'domainNameStatus' => 'domain_name_status',
            'ipStatus' => 'ip_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * port  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    * enabled  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    * ipId  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * ipBandwidth  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    * domainNameSuffix  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * zoneName  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * domainNameTtl  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    * domainNameStatus  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    * ipStatus  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'port' => 'setPort',
            'enabled' => 'setEnabled',
            'ipId' => 'setIpId',
            'ipBandwidth' => 'setIpBandwidth',
            'domainName' => 'setDomainName',
            'domainNameSuffix' => 'setDomainNameSuffix',
            'zoneName' => 'setZoneName',
            'domainNameTtl' => 'setDomainNameTtl',
            'domainNameStatus' => 'setDomainNameStatus',
            'ipStatus' => 'setIpStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    * port  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    * enabled  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    * ipId  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    * ipBandwidth  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    * domainName  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    * domainNameSuffix  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * zoneName  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    * domainNameTtl  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    * domainNameStatus  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    * ipStatus  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'port' => 'getPort',
            'enabled' => 'getEnabled',
            'ipId' => 'getIpId',
            'ipBandwidth' => 'getIpBandwidth',
            'domainName' => 'getDomainName',
            'domainNameSuffix' => 'getDomainNameSuffix',
            'zoneName' => 'getZoneName',
            'domainNameTtl' => 'getDomainNameTtl',
            'domainNameStatus' => 'getDomainNameStatus',
            'ipStatus' => 'getIpStatus'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['ipId'] = isset($data['ipId']) ? $data['ipId'] : null;
        $this->container['ipBandwidth'] = isset($data['ipBandwidth']) ? $data['ipBandwidth'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['domainNameSuffix'] = isset($data['domainNameSuffix']) ? $data['domainNameSuffix'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['domainNameTtl'] = isset($data['domainNameTtl']) ? $data['domainNameTtl'] : null;
        $this->container['domainNameStatus'] = isset($data['domainNameStatus']) ? $data['domainNameStatus'] : null;
        $this->container['ipStatus'] = isset($data['ipStatus']) ? $data['ipStatus'] : null;
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
    * Gets ip
    *  **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**： 公网IP信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port **参数解释**： 端口信息，创建集群时如果未指定端口则默认8000。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释**： 当前局点是否支持公网域名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets ipId
    *  **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
    * Sets ipId
    *
    * @param string|null $ipId **参数解释**： 公网IP的ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;
        return $this;
    }

    /**
    * Gets ipBandwidth
    *  **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIpBandwidth()
    {
        return $this->container['ipBandwidth'];
    }

    /**
    * Sets ipBandwidth
    *
    * @param string|null $ipBandwidth **参数解释**： 公网IP的带宽信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIpBandwidth($ipBandwidth)
    {
        $this->container['ipBandwidth'] = $ipBandwidth;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
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
    * @param string|null $domainName **参数解释**： 公网域名子域名信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets domainNameSuffix
    *  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainNameSuffix()
    {
        return $this->container['domainNameSuffix'];
    }

    /**
    * Sets domainNameSuffix
    *
    * @param string|null $domainNameSuffix **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainNameSuffix($domainNameSuffix)
    {
        $this->container['domainNameSuffix'] = $domainNameSuffix;
        return $this;
    }

    /**
    * Gets zoneName
    *  **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName **参数解释**： 公网域名后缀信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets domainNameTtl
    *  **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDomainNameTtl()
    {
        return $this->container['domainNameTtl'];
    }

    /**
    * Sets domainNameTtl
    *
    * @param int|null $domainNameTtl **参数解释**： 公网域名TTL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainNameTtl($domainNameTtl)
    {
        $this->container['domainNameTtl'] = $domainNameTtl;
        return $this;
    }

    /**
    * Gets domainNameStatus
    *  **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDomainNameStatus()
    {
        return $this->container['domainNameStatus'];
    }

    /**
    * Sets domainNameStatus
    *
    * @param string|null $domainNameStatus **参数解释**： 公网域名状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDomainNameStatus($domainNameStatus)
    {
        $this->container['domainNameStatus'] = $domainNameStatus;
        return $this;
    }

    /**
    * Gets ipStatus
    *  **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIpStatus()
    {
        return $this->container['ipStatus'];
    }

    /**
    * Sets ipStatus
    *
    * @param string|null $ipStatus **参数解释**： 公网IP状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIpStatus($ipStatus)
    {
        $this->container['ipStatus'] = $ipStatus;
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

