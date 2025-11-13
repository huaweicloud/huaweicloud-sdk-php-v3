<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowZoneNameServerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowZoneNameServerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allHwDns  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    * includeHwDns  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    * dnsServers  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    * expectedDnsServers  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    * domainName  **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allHwDns' => 'bool',
            'includeHwDns' => 'bool',
            'dnsServers' => 'string[]',
            'expectedDnsServers' => 'string[]',
            'domainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allHwDns  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    * includeHwDns  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    * dnsServers  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    * expectedDnsServers  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    * domainName  **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allHwDns' => null,
        'includeHwDns' => null,
        'dnsServers' => null,
        'expectedDnsServers' => null,
        'domainName' => null
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
    * allHwDns  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    * includeHwDns  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    * dnsServers  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    * expectedDnsServers  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    * domainName  **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allHwDns' => 'all_hw_dns',
            'includeHwDns' => 'include_hw_dns',
            'dnsServers' => 'dns_servers',
            'expectedDnsServers' => 'expected_dns_servers',
            'domainName' => 'domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allHwDns  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    * includeHwDns  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    * dnsServers  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    * expectedDnsServers  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    * domainName  **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'allHwDns' => 'setAllHwDns',
            'includeHwDns' => 'setIncludeHwDns',
            'dnsServers' => 'setDnsServers',
            'expectedDnsServers' => 'setExpectedDnsServers',
            'domainName' => 'setDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allHwDns  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    * includeHwDns  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    * dnsServers  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    * expectedDnsServers  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    * domainName  **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'allHwDns' => 'getAllHwDns',
            'includeHwDns' => 'getIncludeHwDns',
            'dnsServers' => 'getDnsServers',
            'expectedDnsServers' => 'getExpectedDnsServers',
            'domainName' => 'getDomainName'
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
        $this->container['allHwDns'] = isset($data['allHwDns']) ? $data['allHwDns'] : null;
        $this->container['includeHwDns'] = isset($data['includeHwDns']) ? $data['includeHwDns'] : null;
        $this->container['dnsServers'] = isset($data['dnsServers']) ? $data['dnsServers'] : null;
        $this->container['expectedDnsServers'] = isset($data['expectedDnsServers']) ? $data['expectedDnsServers'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
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
    * Gets allHwDns
    *  **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getAllHwDns()
    {
        return $this->container['allHwDns'];
    }

    /**
    * Sets allHwDns
    *
    * @param bool|null $allHwDns **参数解释：** 是否全部为华为云DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setAllHwDns($allHwDns)
    {
        $this->container['allHwDns'] = $allHwDns;
        return $this;
    }

    /**
    * Gets includeHwDns
    *  **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    *
    * @return bool|null
    */
    public function getIncludeHwDns()
    {
        return $this->container['includeHwDns'];
    }

    /**
    * Sets includeHwDns
    *
    * @param bool|null $includeHwDns **参数解释：** 是否包含华为云DNS服务器地址。  **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setIncludeHwDns($includeHwDns)
    {
        $this->container['includeHwDns'] = $includeHwDns;
        return $this;
    }

    /**
    * Gets dnsServers
    *  **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getDnsServers()
    {
        return $this->container['dnsServers'];
    }

    /**
    * Sets dnsServers
    *
    * @param string[]|null $dnsServers **参数解释：** DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDnsServers($dnsServers)
    {
        $this->container['dnsServers'] = $dnsServers;
        return $this;
    }

    /**
    * Gets expectedDnsServers
    *  **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return string[]|null
    */
    public function getExpectedDnsServers()
    {
        return $this->container['expectedDnsServers'];
    }

    /**
    * Sets expectedDnsServers
    *
    * @param string[]|null $expectedDnsServers **参数解释：** 期望的DNS服务器地址。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setExpectedDnsServers($expectedDnsServers)
    {
        $this->container['expectedDnsServers'] = $expectedDnsServers;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释：** 公网域名。 **取值范围：** 不涉及。
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
    * @param string|null $domainName **参数解释：** 公网域名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
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

