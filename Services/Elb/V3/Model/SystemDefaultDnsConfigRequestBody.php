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
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicDnsRecordSetTtl' => 'int',
            'privateDomainNameEnable' => 'bool',
            'publicDomainNameEnable' => 'bool',
            'privateDnsRecordSetTtl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicDnsRecordSetTtl' => 'int32',
        'privateDomainNameEnable' => null,
        'publicDomainNameEnable' => null,
        'privateDnsRecordSetTtl' => 'int32'
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
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicDnsRecordSetTtl' => 'public_dns_record_set_ttl',
            'privateDomainNameEnable' => 'private_domain_name_enable',
            'publicDomainNameEnable' => 'public_domain_name_enable',
            'privateDnsRecordSetTtl' => 'private_dns_record_set_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $setters = [
            'publicDnsRecordSetTtl' => 'setPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'setPrivateDomainNameEnable',
            'publicDomainNameEnable' => 'setPublicDomainNameEnable',
            'privateDnsRecordSetTtl' => 'setPrivateDnsRecordSetTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $getters = [
            'publicDnsRecordSetTtl' => 'getPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'getPrivateDomainNameEnable',
            'publicDomainNameEnable' => 'getPublicDomainNameEnable',
            'privateDnsRecordSetTtl' => 'getPrivateDnsRecordSetTtl'
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
        $this->container['publicDnsRecordSetTtl'] = isset($data['publicDnsRecordSetTtl']) ? $data['publicDnsRecordSetTtl'] : null;
        $this->container['privateDomainNameEnable'] = isset($data['privateDomainNameEnable']) ? $data['privateDomainNameEnable'] : null;
        $this->container['publicDomainNameEnable'] = isset($data['publicDomainNameEnable']) ? $data['publicDomainNameEnable'] : null;
        $this->container['privateDnsRecordSetTtl'] = isset($data['privateDnsRecordSetTtl']) ? $data['privateDnsRecordSetTtl'] : null;
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
    * Gets publicDnsRecordSetTtl
    *  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
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
    * @param int|null $publicDnsRecordSetTtl **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return $this
    */
    public function setPublicDnsRecordSetTtl($publicDnsRecordSetTtl)
    {
        $this->container['publicDnsRecordSetTtl'] = $publicDnsRecordSetTtl;
        return $this;
    }

    /**
    * Gets privateDomainNameEnable
    *  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
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
    * @param bool|null $privateDomainNameEnable **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    *
    * @return $this
    */
    public function setPrivateDomainNameEnable($privateDomainNameEnable)
    {
        $this->container['privateDomainNameEnable'] = $privateDomainNameEnable;
        return $this;
    }

    /**
    * Gets publicDomainNameEnable
    *  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
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
    * @param bool|null $publicDomainNameEnable **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    *
    * @return $this
    */
    public function setPublicDomainNameEnable($publicDomainNameEnable)
    {
        $this->container['publicDomainNameEnable'] = $publicDomainNameEnable;
        return $this;
    }

    /**
    * Gets privateDnsRecordSetTtl
    *  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
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
    * @param int|null $privateDnsRecordSetTtl **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @return $this
    */
    public function setPrivateDnsRecordSetTtl($privateDnsRecordSetTtl)
    {
        $this->container['privateDnsRecordSetTtl'] = $privateDnsRecordSetTtl;
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

