<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAddressDtoForRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAddressDtoForRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
    * addressType  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
    * address  IP地址信息，当type为0手动输入类型时不能为空
    * addressSetId  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * addressSetName  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * domainAddressName  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
    * regionListJson  规则地域列表json值
    * regionList  规则地域列表
    * domainSetId  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * domainSetName  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * ipAddress  IP地址列表，当type为5（多对象）时不能为空。
    * addressSetType  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    * addressGroup  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
            'addressSetType' => 'int',
            'predefinedGroup' => 'string[]',
            'addressGroup' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
    * addressType  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
    * address  IP地址信息，当type为0手动输入类型时不能为空
    * addressSetId  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * addressSetName  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * domainAddressName  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
    * regionListJson  规则地域列表json值
    * regionList  规则地域列表
    * domainSetId  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * domainSetName  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * ipAddress  IP地址列表，当type为5（多对象）时不能为空。
    * addressSetType  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    * addressGroup  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
        'addressSetType' => 'int32',
        'predefinedGroup' => null,
        'addressGroup' => null
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
    * type  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
    * addressType  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
    * address  IP地址信息，当type为0手动输入类型时不能为空
    * addressSetId  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * addressSetName  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * domainAddressName  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
    * regionListJson  规则地域列表json值
    * regionList  规则地域列表
    * domainSetId  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * domainSetName  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * ipAddress  IP地址列表，当type为5（多对象）时不能为空。
    * addressSetType  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    * addressGroup  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
            'addressSetType' => 'address_set_type',
            'predefinedGroup' => 'predefined_group',
            'addressGroup' => 'address_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
    * addressType  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
    * address  IP地址信息，当type为0手动输入类型时不能为空
    * addressSetId  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * addressSetName  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * domainAddressName  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
    * regionListJson  规则地域列表json值
    * regionList  规则地域列表
    * domainSetId  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * domainSetName  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * ipAddress  IP地址列表，当type为5（多对象）时不能为空。
    * addressSetType  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    * addressGroup  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
            'addressSetType' => 'setAddressSetType',
            'predefinedGroup' => 'setPredefinedGroup',
            'addressGroup' => 'setAddressGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
    * addressType  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
    * address  IP地址信息，当type为0手动输入类型时不能为空
    * addressSetId  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * addressSetName  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * domainAddressName  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
    * regionListJson  规则地域列表json值
    * regionList  规则地域列表
    * domainSetId  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
    * domainSetName  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
    * ipAddress  IP地址列表，当type为5（多对象）时不能为空。
    * addressSetType  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    * addressGroup  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
            'addressSetType' => 'getAddressSetType',
            'predefinedGroup' => 'getPredefinedGroup',
            'addressGroup' => 'getAddressGroup'
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
        $this->container['addressSetType'] = isset($data['addressSetType']) ? $data['addressSetType'] : null;
        $this->container['predefinedGroup'] = isset($data['predefinedGroup']) ? $data['predefinedGroup'] : null;
        $this->container['addressGroup'] = isset($data['addressGroup']) ? $data['addressGroup'] : null;
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
    *  输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
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
    * @param int $type 输入类型0手工输入，1关联IP地址组，2域名，3地理位置，4域名组，5多对象，6域名组-网络型，7域名组-应用型。
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
    *  地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
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
    * @param int|null $addressType 地址类型0 ipv4，1 ipv6，当type为0手动输入类型时不能为空
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
    *  IP地址信息，当type为0手动输入类型时不能为空
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
    * @param string|null $address IP地址信息，当type为0手动输入类型时不能为空
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
    *  关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
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
    * @param string|null $addressSetId 关联IP地址组ID，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
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
    *  关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
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
    * @param string|null $addressSetName 关联IP地址组名称，当type为1关联IP地址组类型时不能为空，可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
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
    *  type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
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
    * @param string|null $domainAddressName type为2（域名）和7（应用域名组）具体内容根据type中7修改后的类型名称
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
    *  规则地域列表json值
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
    * @param string|null $regionListJson 规则地域列表json值
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
    *  规则地域列表
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
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpRegionDto[]|null $regionList 规则地域列表
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
    *  域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
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
    * @param string|null $domainSetId 域名组id，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。
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
    *  域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
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
    * @param string|null $domainSetName 域名组名称，type为4（域名组）或7（域名组-应用型）时不能为空。可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。
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
    *  IP地址列表，当type为5（多对象）时不能为空。
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
    * @param string[]|null $ipAddress IP地址列表，当type为5（多对象）时不能为空。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets addressSetType
    *  地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
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
    * @param int|null $addressSetType 地址组类型，当type为1（关联IP地址组）时不能为空。0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    *
    * @return $this
    */
    public function setAddressSetType($addressSetType)
    {
        $this->container['addressSetType'] = $addressSetType;
        return $this;
    }

    /**
    * Gets predefinedGroup
    *  预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    *
    * @return string[]|null
    */
    public function getPredefinedGroup()
    {
        return $this->container['predefinedGroup'];
    }

    /**
    * Sets predefinedGroup
    *
    * @param string[]|null $predefinedGroup 预定义地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为1预定义地址组。
    *
    * @return $this
    */
    public function setPredefinedGroup($predefinedGroup)
    {
        $this->container['predefinedGroup'] = $predefinedGroup;
        return $this;
    }

    /**
    * Gets addressGroup
    *  地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
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
    * @param string[]|null $addressGroup 地址组id列表，当type为5（多对象）时不能为空。地址组id可通过[查询地址组列表接口](ListAddressSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。查询条件中query_address_set_type需要设置为0自定义地址组。
    *
    * @return $this
    */
    public function setAddressGroup($addressGroup)
    {
        $this->container['addressGroup'] = $addressGroup;
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

