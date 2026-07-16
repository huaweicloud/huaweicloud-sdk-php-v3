<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SystemDefaultDnsConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SystemDefaultDnsConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateDomainNameEnable  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * publicDomainNameEnable  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    * publicDnsRecordSetTtl  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateDomainNameEnable' => 'bool',
            'privateDnsRecordSetTtl' => 'int',
            'publicDomainNameEnable' => 'bool',
            'publicDnsRecordSetTtl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateDomainNameEnable  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * publicDomainNameEnable  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    * publicDnsRecordSetTtl  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateDomainNameEnable' => null,
        'privateDnsRecordSetTtl' => 'int32',
        'publicDomainNameEnable' => null,
        'publicDnsRecordSetTtl' => 'int32'
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
    * privateDomainNameEnable  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * publicDomainNameEnable  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    * publicDnsRecordSetTtl  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateDomainNameEnable' => 'private_domain_name_enable',
            'privateDnsRecordSetTtl' => 'private_dns_record_set_ttl',
            'publicDomainNameEnable' => 'public_domain_name_enable',
            'publicDnsRecordSetTtl' => 'public_dns_record_set_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateDomainNameEnable  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * publicDomainNameEnable  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    * publicDnsRecordSetTtl  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $setters = [
            'privateDomainNameEnable' => 'setPrivateDomainNameEnable',
            'privateDnsRecordSetTtl' => 'setPrivateDnsRecordSetTtl',
            'publicDomainNameEnable' => 'setPublicDomainNameEnable',
            'publicDnsRecordSetTtl' => 'setPublicDnsRecordSetTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateDomainNameEnable  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * publicDomainNameEnable  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    * publicDnsRecordSetTtl  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $getters = [
            'privateDomainNameEnable' => 'getPrivateDomainNameEnable',
            'privateDnsRecordSetTtl' => 'getPrivateDnsRecordSetTtl',
            'publicDomainNameEnable' => 'getPublicDomainNameEnable',
            'publicDnsRecordSetTtl' => 'getPublicDnsRecordSetTtl'
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
        $this->container['privateDomainNameEnable'] = isset($data['privateDomainNameEnable']) ? $data['privateDomainNameEnable'] : null;
        $this->container['privateDnsRecordSetTtl'] = isset($data['privateDnsRecordSetTtl']) ? $data['privateDnsRecordSetTtl'] : null;
        $this->container['publicDomainNameEnable'] = isset($data['publicDomainNameEnable']) ? $data['publicDomainNameEnable'] : null;
        $this->container['publicDnsRecordSetTtl'] = isset($data['publicDnsRecordSetTtl']) ? $data['publicDnsRecordSetTtl'] : null;
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
    * Gets privateDomainNameEnable
    *  **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPrivateDomainNameEnable()
    {
        return $this->container['privateDomainNameEnable'];
    }

    /**
    * Sets privateDomainNameEnable
    *
    * @param bool|null $privateDomainNameEnable **参数解释**：是否启用私网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启私网域名解析。 - false：关闭私网域名解析。  **默认取值**：false
    *
    * @return $this
    */
    public function setPrivateDomainNameEnable($privateDomainNameEnable)
    {
        $this->container['privateDomainNameEnable'] = $privateDomainNameEnable;
        return $this;
    }

    /**
    * Gets privateDnsRecordSetTtl
    *  **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return int|null
    */
    public function getPrivateDnsRecordSetTtl()
    {
        return $this->container['privateDnsRecordSetTtl'];
    }

    /**
    * Sets privateDnsRecordSetTtl
    *
    * @param int|null $privateDnsRecordSetTtl **参数解释**：私网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return $this
    */
    public function setPrivateDnsRecordSetTtl($privateDnsRecordSetTtl)
    {
        $this->container['privateDnsRecordSetTtl'] = $privateDnsRecordSetTtl;
        return $this;
    }

    /**
    * Gets publicDomainNameEnable
    *  **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPublicDomainNameEnable()
    {
        return $this->container['publicDomainNameEnable'];
    }

    /**
    * Sets publicDomainNameEnable
    *
    * @param bool|null $publicDomainNameEnable **参数解释**：是否启用公网域名解析。  **约束限制**：不涉及  **取值范围**： - true：开启公网域名解析。 - false：关闭公网域名解析。  **默认取值**：false
    *
    * @return $this
    */
    public function setPublicDomainNameEnable($publicDomainNameEnable)
    {
        $this->container['publicDomainNameEnable'] = $publicDomainNameEnable;
        return $this;
    }

    /**
    * Gets publicDnsRecordSetTtl
    *  **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return int|null
    */
    public function getPublicDnsRecordSetTtl()
    {
        return $this->container['publicDnsRecordSetTtl'];
    }

    /**
    * Sets publicDnsRecordSetTtl
    *
    * @param int|null $publicDnsRecordSetTtl **参数解释**：公网域名解析记录在本地DNS服务器的缓存超时时间，单位：秒。域名解析信息更新后，需要等待DNS服务器上的缓存超时才会生效。如果您的域名解析信息经常变更，建议TTL值设置相对小些，反之建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return $this
    */
    public function setPublicDnsRecordSetTtl($publicDnsRecordSetTtl)
    {
        $this->container['publicDnsRecordSetTtl'] = $publicDnsRecordSetTtl;
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

