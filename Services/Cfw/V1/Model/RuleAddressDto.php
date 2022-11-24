<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAddressDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAddressDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  源类型0手工输入,1关联IP地址组,2域名
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'addressType' => 'int',
            'address' => 'string',
            'addressSetId' => 'string',
            'addressSetName' => 'string',
            'domainAddressName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  源类型0手工输入,1关联IP地址组,2域名
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'addressType' => null,
        'address' => null,
        'addressSetId' => null,
        'addressSetName' => null,
        'domainAddressName' => null
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
    * type  源类型0手工输入,1关联IP地址组,2域名
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'addressType' => 'address_type',
            'address' => 'address',
            'addressSetId' => 'address_set_id',
            'addressSetName' => 'address_set_name',
            'domainAddressName' => 'domain_address_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  源类型0手工输入,1关联IP地址组,2域名
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'addressType' => 'setAddressType',
            'address' => 'setAddress',
            'addressSetId' => 'setAddressSetId',
            'addressSetName' => 'setAddressSetName',
            'domainAddressName' => 'setDomainAddressName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  源类型0手工输入,1关联IP地址组,2域名
    * addressType  源类型0 ipv4,1 ipv6
    * address  源IP，手动类型不能为空，自动及domain类型为空
    * addressSetId  关联IP地址组ID，自动类型不能为空，手动类型合domain类型为空
    * addressSetName  地址组名称
    * domainAddressName  域名地址名称，域名类型时不能为空，手动类型及自动类型时为空
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'addressType' => 'getAddressType',
            'address' => 'getAddress',
            'addressSetId' => 'getAddressSetId',
            'addressSetName' => 'getAddressSetName',
            'domainAddressName' => 'getDomainAddressName'
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
    *  源类型0手工输入,1关联IP地址组,2域名
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
    * @param int $type 源类型0手工输入,1关联IP地址组,2域名
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

