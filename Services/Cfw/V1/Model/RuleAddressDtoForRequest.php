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
    * type  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    * regionListJson  规则region列表json值
    * regionList  规则region列表
    * domainSetId  域名组id
    * domainSetName  域名组名称
    * ipAddress  IP地址列表
    * addressSetType  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组列表
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
            'predefinedGroup' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    * regionListJson  规则region列表json值
    * regionList  规则region列表
    * domainSetId  域名组id
    * domainSetName  域名组名称
    * ipAddress  IP地址列表
    * addressSetType  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组列表
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
        'predefinedGroup' => null
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
    * type  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    * regionListJson  规则region列表json值
    * regionList  规则region列表
    * domainSetId  域名组id
    * domainSetName  域名组名称
    * ipAddress  IP地址列表
    * addressSetType  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组列表
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
            'predefinedGroup' => 'predefined_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    * regionListJson  规则region列表json值
    * regionList  规则region列表
    * domainSetId  域名组id
    * domainSetName  域名组名称
    * ipAddress  IP地址列表
    * addressSetType  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组列表
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
            'predefinedGroup' => 'setPredefinedGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    * regionListJson  规则region列表json值
    * regionList  规则region列表
    * domainSetId  域名组id
    * domainSetName  域名组名称
    * ipAddress  IP地址列表
    * addressSetType  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
    * predefinedGroup  预定义地址组列表
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
            'predefinedGroup' => 'getPredefinedGroup'
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
    *  源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
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
    * @param int $type 源类型0手工输入,1关联IP地址组,2域名，3地理位置，4域名组，5多对象，6域名组-DNS解析，7域名组-URL过滤。
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
    *  源类型0 ipv4,1 ipv6
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
    * @param int|null $addressType 源类型0 ipv4,1 ipv6
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
    *  源IP，手动类型不能为空，自动及domain类型为空
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
    * @param string|null $address 源IP，手动类型不能为空，自动及domain类型为空
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
    *  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
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
    * @param string|null $addressSetId 关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
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
    *  地址组名称
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
    * @param string|null $addressSetName 地址组名称
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
    *  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
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
    * @param string|null $domainAddressName 域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
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
    *  规则region列表json值
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
    * @param string|null $regionListJson 规则region列表json值
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
    *  规则region列表
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
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpRegionDto[]|null $regionList 规则region列表
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
    *  域名组id
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
    * @param string|null $domainSetId 域名组id
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
    *  域名组名称
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
    * @param string|null $domainSetName 域名组名称
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
    *  IP地址列表
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
    * @param string[]|null $ipAddress IP地址列表
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
    *  地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
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
    * @param int|null $addressSetType 地址组类型，0表示自定义地址组，1表示WAF回源IP地址组，2表示DDoS回源IP地址组，3表示NAT64转换地址组
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
    *  预定义地址组列表
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
    * @param string[]|null $predefinedGroup 预定义地址组列表
    *
    * @return $this
    */
    public function setPredefinedGroup($predefinedGroup)
    {
        $this->container['predefinedGroup'] = $predefinedGroup;
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

