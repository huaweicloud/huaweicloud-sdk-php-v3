<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAddressDtoForResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAddressDtoForResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    * address  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetId  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetName  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainAddressName  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionListJson  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionList  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    * domainSetId  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetName  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipAddress  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroup  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroupNames  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    * addressSetType  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'addressType' => 'int',
            'address' => 'string',
            'addressSetId' => 'string',
            'addressSetName' => 'string',
            'domainAddressName' => 'string',
            'regionListJson' => 'string',
            'regionList' => '\HuaweiCloud\SDK\Cfw\V1\Model\IpRegionDto[]',
            'domainSetId' => 'string',
            'domainSetName' => 'string',
            'ipAddress' => 'string[]',
            'addressGroup' => 'string[]',
            'addressGroupNames' => '\HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]',
            'addressSetType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    * address  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetId  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetName  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainAddressName  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionListJson  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionList  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    * domainSetId  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetName  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipAddress  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroup  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroupNames  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    * addressSetType  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'addressType' => null,
        'address' => null,
        'addressSetId' => null,
        'addressSetName' => null,
        'domainAddressName' => null,
        'regionListJson' => null,
        'regionList' => null,
        'domainSetId' => null,
        'domainSetName' => null,
        'ipAddress' => null,
        'addressGroup' => null,
        'addressGroupNames' => null,
        'addressSetType' => 'int32'
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
    * type  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    * address  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetId  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetName  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainAddressName  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionListJson  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionList  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    * domainSetId  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetName  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipAddress  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroup  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroupNames  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    * addressSetType  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'addressType' => 'address_type',
            'address' => 'address',
            'addressSetId' => 'address_set_id',
            'addressSetName' => 'address_set_name',
            'domainAddressName' => 'domain_address_name',
            'regionListJson' => 'region_list_json',
            'regionList' => 'region_list',
            'domainSetId' => 'domain_set_id',
            'domainSetName' => 'domain_set_name',
            'ipAddress' => 'ip_address',
            'addressGroup' => 'address_group',
            'addressGroupNames' => 'address_group_names',
            'addressSetType' => 'address_set_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    * address  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetId  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetName  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainAddressName  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionListJson  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionList  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    * domainSetId  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetName  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipAddress  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroup  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroupNames  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    * addressSetType  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'addressType' => 'setAddressType',
            'address' => 'setAddress',
            'addressSetId' => 'setAddressSetId',
            'addressSetName' => 'setAddressSetName',
            'domainAddressName' => 'setDomainAddressName',
            'regionListJson' => 'setRegionListJson',
            'regionList' => 'setRegionList',
            'domainSetId' => 'setDomainSetId',
            'domainSetName' => 'setDomainSetName',
            'ipAddress' => 'setIpAddress',
            'addressGroup' => 'setAddressGroup',
            'addressGroupNames' => 'setAddressGroupNames',
            'addressSetType' => 'setAddressSetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    * address  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetId  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressSetName  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainAddressName  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionListJson  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * regionList  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    * domainSetId  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetName  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ipAddress  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroup  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressGroupNames  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    * addressSetType  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'addressType' => 'getAddressType',
            'address' => 'getAddress',
            'addressSetId' => 'getAddressSetId',
            'addressSetName' => 'getAddressSetName',
            'domainAddressName' => 'getDomainAddressName',
            'regionListJson' => 'getRegionListJson',
            'regionList' => 'getRegionList',
            'domainSetId' => 'getDomainSetId',
            'domainSetName' => 'getDomainSetName',
            'ipAddress' => 'getIpAddress',
            'addressGroup' => 'getAddressGroup',
            'addressGroupNames' => 'getAddressGroupNames',
            'addressSetType' => 'getAddressSetType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addressSetId'] = isset($data['addressSetId']) ? $data['addressSetId'] : null;
        $this->container['addressSetName'] = isset($data['addressSetName']) ? $data['addressSetName'] : null;
        $this->container['domainAddressName'] = isset($data['domainAddressName']) ? $data['domainAddressName'] : null;
        $this->container['regionListJson'] = isset($data['regionListJson']) ? $data['regionListJson'] : null;
        $this->container['regionList'] = isset($data['regionList']) ? $data['regionList'] : null;
        $this->container['domainSetId'] = isset($data['domainSetId']) ? $data['domainSetId'] : null;
        $this->container['domainSetName'] = isset($data['domainSetName']) ? $data['domainSetName'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['addressGroup'] = isset($data['addressGroup']) ? $data['addressGroup'] : null;
        $this->container['addressGroupNames'] = isset($data['addressGroupNames']) ? $data['addressGroupNames'] : null;
        $this->container['addressSetType'] = isset($data['addressSetType']) ? $data['addressSetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets type
    *  **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type **参数解释**： 地址输入类型，用于区分不同的输入类型 **约束限制**： 不涉及 **取值范围**： 0手动输入，1关联IP地址组，2域名，3地理位置，4域名组-应用型，5多对象，6域名组-网络型，7域名-应用型。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets addressType
    *  **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType **参数解释**： IP地址互联网协议类型，用于区分不同互联网协议 **约束限制**： 不涉及 **取值范围**： 地址类型0 IPv4，1 IPv6。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address **参数解释**： IP地址信息，用于明确规则IP地址 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets addressSetId
    *  **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAddressSetId()
    {
        return $this->container['addressSetId'];
    }

    /**
    * Sets addressSetId
    *
    * @param string|null $addressSetId **参数解释**： 关联IP地址组ID，用于明确规则IP地址组id，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressSetId($addressSetId)
    {
        $this->container['addressSetId'] = $addressSetId;
        return $this;
    }

    /**
    * Gets addressSetName
    *  **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAddressSetName()
    {
        return $this->container['addressSetName'];
    }

    /**
    * Sets addressSetName
    *
    * @param string|null $addressSetName **参数解释**： 关联IP地址组名称，用于明确规则IP地址组名称，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressSetName($addressSetName)
    {
        $this->container['addressSetName'] = $addressSetName;
        return $this;
    }

    /**
    * Gets domainAddressName
    *  **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDomainAddressName()
    {
        return $this->container['domainAddressName'];
    }

    /**
    * Sets domainAddressName
    *
    * @param string|null $domainAddressName **参数解释**： 域名名称或引用域名组名称，用于明确规则引用域名或域名组名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainAddressName($domainAddressName)
    {
        $this->container['domainAddressName'] = $domainAddressName;
        return $this;
    }

    /**
    * Gets regionListJson
    *  **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getRegionListJson()
    {
        return $this->container['regionListJson'];
    }

    /**
    * Sets regionListJson
    *
    * @param string|null $regionListJson **参数解释**： 规则地域列表json值，用于明确规则引用地域名称列表 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRegionListJson($regionListJson)
    {
        $this->container['regionListJson'] = $regionListJson;
        return $this;
    }

    /**
    * Gets regionList
    *  **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\IpRegionDto[]|null
    */
    public function getRegionList()
    {
        return $this->container['regionList'];
    }

    /**
    * Sets regionList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpRegionDto[]|null $regionList **参数解释**： 规则地域列表传输值 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setRegionList($regionList)
    {
        $this->container['regionList'] = $regionList;
        return $this;
    }

    /**
    * Gets domainSetId
    *  **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDomainSetId()
    {
        return $this->container['domainSetId'];
    }

    /**
    * Sets domainSetId
    *
    * @param string|null $domainSetId **参数解释**： 域名组id，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainSetId($domainSetId)
    {
        $this->container['domainSetId'] = $domainSetId;
        return $this;
    }

    /**
    * Gets domainSetName
    *  **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDomainSetName()
    {
        return $this->container['domainSetName'];
    }

    /**
    * Sets domainSetName
    *
    * @param string|null $domainSetName **参数解释**： 域名组名称，用于明确规则引用域名组。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainSetName($domainSetName)
    {
        $this->container['domainSetName'] = $domainSetName;
        return $this;
    }

    /**
    * Gets ipAddress
    *  **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string[]|null $ipAddress **参数解释**： IP地址列表，用于明确规则引用IP地址列表。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets addressGroup
    *  **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getAddressGroup()
    {
        return $this->container['addressGroup'];
    }

    /**
    * Sets addressGroup
    *
    * @param string[]|null $addressGroup **参数解释**： 地址组id列表，用于明确规则引用地址组id列表。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressGroup($addressGroup)
    {
        $this->container['addressGroup'] = $addressGroup;
        return $this;
    }

    /**
    * Gets addressGroupNames
    *  **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]|null
    */
    public function getAddressGroupNames()
    {
        return $this->container['addressGroupNames'];
    }

    /**
    * Sets addressGroupNames
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AddressGroupVO[]|null $addressGroupNames **参数解释**： 地址组名称列表 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setAddressGroupNames($addressGroupNames)
    {
        $this->container['addressGroupNames'] = $addressGroupNames;
        return $this;
    }

    /**
    * Gets addressSetType
    *  **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAddressSetType()
    {
        return $this->container['addressSetType'];
    }

    /**
    * Sets addressSetType
    *
    * @param int|null $addressSetType **参数解释**： 地址组类型，用于明确规则引用地址组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义地址组，1表示WAF回源IP地址组，3表示NAT64转换地址组 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressSetType($addressSetType)
    {
        $this->container['addressSetType'] = $addressSetType;
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

