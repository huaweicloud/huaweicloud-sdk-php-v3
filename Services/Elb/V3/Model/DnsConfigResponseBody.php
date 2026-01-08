<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnsConfigResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnsConfigResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vipAddress  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    * eips  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    * globalEips  **参数解释**：负载均衡器绑定的GEIP。
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    * publicDnsZoneId  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    * publicDomainName  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    * publicDnsRecordSetTtl  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    * privateDomainNameEnable  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
    * privateDnsZoneName  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    * privateDnsZoneId  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    * privateDomainName  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vipAddress' => 'string',
            'ipv6VipAddress' => 'string',
            'eips' => '\HuaweiCloud\SDK\Elb\V3\Model\EipInfo[]',
            'globalEips' => '\HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]',
            'publicDomainNameEnable' => 'bool',
            'publicDnsZoneName' => 'string',
            'publicDnsZoneId' => 'string',
            'publicDomainName' => 'string',
            'publicDnsRecordSetTtl' => 'int',
            'privateDomainNameEnable' => 'bool',
            'privateDnsZoneName' => 'string',
            'privateDnsZoneId' => 'string',
            'privateDomainName' => 'string',
            'privateDnsZoneType' => 'string',
            'privateDnsRecordSetTtl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vipAddress  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    * eips  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    * globalEips  **参数解释**：负载均衡器绑定的GEIP。
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    * publicDnsZoneId  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    * publicDomainName  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    * publicDnsRecordSetTtl  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    * privateDomainNameEnable  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
    * privateDnsZoneName  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    * privateDnsZoneId  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    * privateDomainName  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vipAddress' => null,
        'ipv6VipAddress' => null,
        'eips' => null,
        'globalEips' => null,
        'publicDomainNameEnable' => null,
        'publicDnsZoneName' => null,
        'publicDnsZoneId' => null,
        'publicDomainName' => null,
        'publicDnsRecordSetTtl' => 'int32',
        'privateDomainNameEnable' => null,
        'privateDnsZoneName' => null,
        'privateDnsZoneId' => null,
        'privateDomainName' => null,
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
    * vipAddress  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    * eips  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    * globalEips  **参数解释**：负载均衡器绑定的GEIP。
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    * publicDnsZoneId  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    * publicDomainName  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    * publicDnsRecordSetTtl  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    * privateDomainNameEnable  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
    * privateDnsZoneName  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    * privateDnsZoneId  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    * privateDomainName  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vipAddress' => 'vip_address',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'eips' => 'eips',
            'globalEips' => 'global_eips',
            'publicDomainNameEnable' => 'public_domain_name_enable',
            'publicDnsZoneName' => 'public_dns_zone_name',
            'publicDnsZoneId' => 'public_dns_zone_id',
            'publicDomainName' => 'public_domain_name',
            'publicDnsRecordSetTtl' => 'public_dns_record_set_ttl',
            'privateDomainNameEnable' => 'private_domain_name_enable',
            'privateDnsZoneName' => 'private_dns_zone_name',
            'privateDnsZoneId' => 'private_dns_zone_id',
            'privateDomainName' => 'private_domain_name',
            'privateDnsZoneType' => 'private_dns_zone_type',
            'privateDnsRecordSetTtl' => 'private_dns_record_set_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vipAddress  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    * eips  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    * globalEips  **参数解释**：负载均衡器绑定的GEIP。
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    * publicDnsZoneId  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    * publicDomainName  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    * publicDnsRecordSetTtl  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    * privateDomainNameEnable  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
    * privateDnsZoneName  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    * privateDnsZoneId  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    * privateDomainName  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    *
    * @var string[]
    */
    protected static $setters = [
            'vipAddress' => 'setVipAddress',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'eips' => 'setEips',
            'globalEips' => 'setGlobalEips',
            'publicDomainNameEnable' => 'setPublicDomainNameEnable',
            'publicDnsZoneName' => 'setPublicDnsZoneName',
            'publicDnsZoneId' => 'setPublicDnsZoneId',
            'publicDomainName' => 'setPublicDomainName',
            'publicDnsRecordSetTtl' => 'setPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'setPrivateDomainNameEnable',
            'privateDnsZoneName' => 'setPrivateDnsZoneName',
            'privateDnsZoneId' => 'setPrivateDnsZoneId',
            'privateDomainName' => 'setPrivateDomainName',
            'privateDnsZoneType' => 'setPrivateDnsZoneType',
            'privateDnsRecordSetTtl' => 'setPrivateDnsRecordSetTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vipAddress  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    * eips  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    * globalEips  **参数解释**：负载均衡器绑定的GEIP。
    * publicDomainNameEnable  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
    * publicDnsZoneName  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    * publicDnsZoneId  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    * publicDomainName  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    * publicDnsRecordSetTtl  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    * privateDomainNameEnable  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
    * privateDnsZoneName  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    * privateDnsZoneId  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    * privateDomainName  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    * privateDnsZoneType  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
    * privateDnsRecordSetTtl  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
    *
    * @var string[]
    */
    protected static $getters = [
            'vipAddress' => 'getVipAddress',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'eips' => 'getEips',
            'globalEips' => 'getGlobalEips',
            'publicDomainNameEnable' => 'getPublicDomainNameEnable',
            'publicDnsZoneName' => 'getPublicDnsZoneName',
            'publicDnsZoneId' => 'getPublicDnsZoneId',
            'publicDomainName' => 'getPublicDomainName',
            'publicDnsRecordSetTtl' => 'getPublicDnsRecordSetTtl',
            'privateDomainNameEnable' => 'getPrivateDomainNameEnable',
            'privateDnsZoneName' => 'getPrivateDnsZoneName',
            'privateDnsZoneId' => 'getPrivateDnsZoneId',
            'privateDomainName' => 'getPrivateDomainName',
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
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['eips'] = isset($data['eips']) ? $data['eips'] : null;
        $this->container['globalEips'] = isset($data['globalEips']) ? $data['globalEips'] : null;
        $this->container['publicDomainNameEnable'] = isset($data['publicDomainNameEnable']) ? $data['publicDomainNameEnable'] : null;
        $this->container['publicDnsZoneName'] = isset($data['publicDnsZoneName']) ? $data['publicDnsZoneName'] : null;
        $this->container['publicDnsZoneId'] = isset($data['publicDnsZoneId']) ? $data['publicDnsZoneId'] : null;
        $this->container['publicDomainName'] = isset($data['publicDomainName']) ? $data['publicDomainName'] : null;
        $this->container['publicDnsRecordSetTtl'] = isset($data['publicDnsRecordSetTtl']) ? $data['publicDnsRecordSetTtl'] : null;
        $this->container['privateDomainNameEnable'] = isset($data['privateDomainNameEnable']) ? $data['privateDomainNameEnable'] : null;
        $this->container['privateDnsZoneName'] = isset($data['privateDnsZoneName']) ? $data['privateDnsZoneName'] : null;
        $this->container['privateDnsZoneId'] = isset($data['privateDnsZoneId']) ? $data['privateDnsZoneId'] : null;
        $this->container['privateDomainName'] = isset($data['privateDomainName']) ? $data['privateDomainName'] : null;
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
    * Gets vipAddress
    *  **参数解释**：负载均衡器的IPv4虚拟IP地址。
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress **参数解释**：负载均衡器的IPv4虚拟IP地址。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress **参数解释**：双栈类型负载均衡器的IPv6地址。  **约束限制**：[不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets eips
    *  **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[]|null
    */
    public function getEips()
    {
        return $this->container['eips'];
    }

    /**
    * Sets eips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[]|null $eips **参数解释**：负载均衡器绑定的EIP。  注：该字段与publicips一致。
    *
    * @return $this
    */
    public function setEips($eips)
    {
        $this->container['eips'] = $eips;
        return $this;
    }

    /**
    * Gets globalEips
    *  **参数解释**：负载均衡器绑定的GEIP。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]|null
    */
    public function getGlobalEips()
    {
        return $this->container['globalEips'];
    }

    /**
    * Sets globalEips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]|null $globalEips **参数解释**：负载均衡器绑定的GEIP。
    *
    * @return $this
    */
    public function setGlobalEips($globalEips)
    {
        $this->container['globalEips'] = $globalEips;
        return $this;
    }

    /**
    * Gets publicDomainNameEnable
    *  **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
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
    * @param bool|null $publicDomainNameEnable **参数解释**：是否配置公网域名。 **取值范围**：   true：开启公网域名   false：关闭公网域名
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
    *  **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
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
    * @param string|null $publicDnsZoneName **参数解释**：公网域名所使用的zone名称。 **约束限制**：   公网域名只能使用公网类型的zone。   当配置公网域名开关打开时，该字段不能置空。   所填的公网zone必须在云解析服务已注册过。
    *
    * @return $this
    */
    public function setPublicDnsZoneName($publicDnsZoneName)
    {
        $this->container['publicDnsZoneName'] = $publicDnsZoneName;
        return $this;
    }

    /**
    * Gets publicDnsZoneId
    *  **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    *
    * @return string|null
    */
    public function getPublicDnsZoneId()
    {
        return $this->container['publicDnsZoneId'];
    }

    /**
    * Sets publicDnsZoneId
    *
    * @param string|null $publicDnsZoneId **参数解释**：   公网域名所使用的zone对应的id。   根据传入的公网zone 名称查询得出。
    *
    * @return $this
    */
    public function setPublicDnsZoneId($publicDnsZoneId)
    {
        $this->container['publicDnsZoneId'] = $publicDnsZoneId;
        return $this;
    }

    /**
    * Gets publicDomainName
    *  **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    *
    * @return string|null
    */
    public function getPublicDomainName()
    {
        return $this->container['publicDomainName'];
    }

    /**
    * Sets publicDomainName
    *
    * @param string|null $publicDomainName **参数解释**：   负载均衡实例的公网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}.elb.{region_id}.{zone_name}
    *
    * @return $this
    */
    public function setPublicDomainName($publicDomainName)
    {
        $this->container['publicDomainName'] = $publicDomainName;
        return $this;
    }

    /**
    * Gets publicDnsRecordSetTtl
    *  参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
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
    * @param int|null $publicDnsRecordSetTtl 参数解释:   公网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
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
    *  **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
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
    * @param bool|null $privateDomainNameEnable **参数解释**：   是否配置私网域名。 **取值范围**：   true：开启私网域名   false：关闭私网域名
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
    *  **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
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
    * @param string|null $privateDnsZoneName **参数解释**：   私网域名所使用的zone的名称。 **约束限制**：   私网域名既能使用公网zone，也能使用私网zone，zone的类型在private_dns_zone_type字段中指定。   当配置私网域名开关打开时，该字段不能置空。   所填的私网zone必须在云解析服务已注册过。
    *
    * @return $this
    */
    public function setPrivateDnsZoneName($privateDnsZoneName)
    {
        $this->container['privateDnsZoneName'] = $privateDnsZoneName;
        return $this;
    }

    /**
    * Gets privateDnsZoneId
    *  **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    *
    * @return string|null
    */
    public function getPrivateDnsZoneId()
    {
        return $this->container['privateDnsZoneId'];
    }

    /**
    * Sets privateDnsZoneId
    *
    * @param string|null $privateDnsZoneId **参数解释**：   私网域名所使用的zone对应的id。 **约束限制**：   根据传入的私网zone 名称查询得出。
    *
    * @return $this
    */
    public function setPrivateDnsZoneId($privateDnsZoneId)
    {
        $this->container['privateDnsZoneId'] = $privateDnsZoneId;
        return $this;
    }

    /**
    * Gets privateDomainName
    *  **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    *
    * @return string|null
    */
    public function getPrivateDomainName()
    {
        return $this->container['privateDomainName'];
    }

    /**
    * Sets privateDomainName
    *
    * @param string|null $privateDomainName **参数解释**：负载均衡实例的私网域名。 **约束限制**：   根据负载均衡实例id，局点id和zone信息以如下格式生成：   {lb_id}-internal.elb.{region_id}.{zone_name}
    *
    * @return $this
    */
    public function setPrivateDomainName($privateDomainName)
    {
        $this->container['privateDomainName'] = $privateDomainName;
        return $this;
    }

    /**
    * Gets privateDnsZoneType
    *  **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
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
    * @param string|null $privateDnsZoneType **参数解释**：私网域名所使用的zone的类型。 **约束限制**：不涉及 **取值范围**：private public **默认取值**：private
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
    *  **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
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
    * @param int|null $privateDnsRecordSetTtl **参数解释**：   私网解析记录集超时时间。   解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。   如果您的服务地址经常更换，建议TTL值设置相对小些，反之，建议设置相对大些。 **取值范围**：   1-2147483647 **默认取值**：   300
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

