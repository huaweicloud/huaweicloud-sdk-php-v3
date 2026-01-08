<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserDefinedDnsConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserDefinedDnsConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * privateDnsZoneName  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicDomainNameEnable' => 'bool',
            'publicDnsZoneName' => 'string',
            'publicDnsRecordSetTtl' => 'int',
            'privateDomainNameEnable' => 'bool',
            'privateDnsZoneName' => 'string',
            'privateDnsZoneType' => 'string',
            'privateDnsRecordSetTtl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * privateDnsZoneName  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicDomainNameEnable' => null,
        'publicDnsZoneName' => null,
        'publicDnsRecordSetTtl' => 'int32',
        'privateDomainNameEnable' => null,
        'privateDnsZoneName' => null,
        'privateDnsZoneType' => null,
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
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * privateDnsZoneName  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicDomainNameEnable' => 'public_domain_name_enable',
            'publicDnsZoneName' => 'public_dns_zone_name',
            'publicDnsRecordSetTtl' => 'public_dns_record_set_ttl',
            'privateDomainNameEnable' => 'private_domain_name_enable',
            'privateDnsZoneName' => 'private_dns_zone_name',
            'privateDnsZoneType' => 'private_dns_zone_type',
            'privateDnsRecordSetTtl' => 'private_dns_record_set_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * privateDnsZoneName  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $setters = [
            'publicDomainNameEnable' => 'setPublicDomainNameEnable',
            'publicDnsZoneName' => 'setPublicDnsZoneName',
            'publicDnsRecordSetTtl' => 'setPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'setPrivateDomainNameEnable',
            'privateDnsZoneName' => 'setPrivateDnsZoneName',
            'privateDnsZoneType' => 'setPrivateDnsZoneType',
            'privateDnsRecordSetTtl' => 'setPrivateDnsRecordSetTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。  **约束限制**：不涉及  **取值范围**： true：开启公网域名 false：关闭公网域名  **默认取值**：false
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    * publicDnsRecordSetTtl  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    * privateDomainNameEnable  **参数解释**：是否配置私网域名。  **约束限制**：不涉及  **取值范围**： true：开启私网域名 false：关闭私网域名  **默认取值**：false
    * privateDnsZoneName  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：私网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
    *
    * @var string[]
    */
    protected static $getters = [
            'publicDomainNameEnable' => 'getPublicDomainNameEnable',
            'publicDnsZoneName' => 'getPublicDnsZoneName',
            'publicDnsRecordSetTtl' => 'getPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'getPrivateDomainNameEnable',
            'privateDnsZoneName' => 'getPrivateDnsZoneName',
            'privateDnsZoneType' => 'getPrivateDnsZoneType',
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
        $this->container['publicDomainNameEnable'] = isset($data['publicDomainNameEnable']) ? $data['publicDomainNameEnable'] : null;
        $this->container['publicDnsZoneName'] = isset($data['publicDnsZoneName']) ? $data['publicDnsZoneName'] : null;
        $this->container['publicDnsRecordSetTtl'] = isset($data['publicDnsRecordSetTtl']) ? $data['publicDnsRecordSetTtl'] : null;
        $this->container['privateDomainNameEnable'] = isset($data['privateDomainNameEnable']) ? $data['privateDomainNameEnable'] : null;
        $this->container['privateDnsZoneName'] = isset($data['privateDnsZoneName']) ? $data['privateDnsZoneName'] : null;
        $this->container['privateDnsZoneType'] = isset($data['privateDnsZoneType']) ? $data['privateDnsZoneType'] : null;
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
    * Gets publicDnsZoneName
    *  **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getPublicDnsZoneName()
    {
        return $this->container['publicDnsZoneName'];
    }

    /**
    * Sets publicDnsZoneName
    *
    * @param string|null $publicDnsZoneName **参数解释**：公网域名所使用的zone名称。  **约束限制**：公网域名只能使用公网类型的zone，当配置公网域名开关打开时，该字段不能置空，所填的公网zone必须在云解析服务已注册过。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPublicDnsZoneName($publicDnsZoneName)
    {
        $this->container['publicDnsZoneName'] = $publicDnsZoneName;
        return $this;
    }

    /**
    * Gets publicDnsRecordSetTtl
    *  **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
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
    * @param int|null $publicDnsRecordSetTtl **参数解释**：公网解析记录集超时时间。解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。  **约束限制**：不涉及  **取值范围**：1-2147483647  **默认取值**：300
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
    * Gets privateDnsZoneName
    *  **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getPrivateDnsZoneName()
    {
        return $this->container['privateDnsZoneName'];
    }

    /**
    * Sets privateDnsZoneName
    *
    * @param string|null $privateDnsZoneName **参数解释**：私网域名所使用的zone的名称。  **约束限制**：   只有当private_domain_name_enable打开时，该字段才有效。   当private_domain_name_enable打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPrivateDnsZoneName($privateDnsZoneName)
    {
        $this->container['privateDnsZoneName'] = $privateDnsZoneName;
        return $this;
    }

    /**
    * Gets privateDnsZoneType
    *  **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    *
    * @return string|null
    */
    public function getPrivateDnsZoneType()
    {
        return $this->container['privateDnsZoneType'];
    }

    /**
    * Sets privateDnsZoneType
    *
    * @param string|null $privateDnsZoneType **参数解释**：私网域名所使用的zone的类型。  **约束限制**：不涉及  **取值范围**： private: 使用私网zone public: 使用公网zone  **默认取值**：private
    *
    * @return $this
    */
    public function setPrivateDnsZoneType($privateDnsZoneType)
    {
        $this->container['privateDnsZoneType'] = $privateDnsZoneType;
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

