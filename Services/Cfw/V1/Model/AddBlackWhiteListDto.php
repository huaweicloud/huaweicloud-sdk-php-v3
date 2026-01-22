<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddBlackWhiteListDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddBlackWhiteListDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * listType  黑白名单类型4：黑名单，5：白名单
    * direction  地址方向0：源地址1：目的地址
    * addressType  IP地址类型 0：ipv4，1:ipv6
    * address  IP地址
    * protocol  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    * port  目的端口
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'listType' => 'int',
            'direction' => 'int',
            'addressType' => 'int',
            'address' => 'string',
            'protocol' => 'int',
            'port' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * listType  黑白名单类型4：黑名单，5：白名单
    * direction  地址方向0：源地址1：目的地址
    * addressType  IP地址类型 0：ipv4，1:ipv6
    * address  IP地址
    * protocol  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    * port  目的端口
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'listType' => null,
        'direction' => null,
        'addressType' => null,
        'address' => null,
        'protocol' => null,
        'port' => null,
        'description' => null
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
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * listType  黑白名单类型4：黑名单，5：白名单
    * direction  地址方向0：源地址1：目的地址
    * addressType  IP地址类型 0：ipv4，1:ipv6
    * address  IP地址
    * protocol  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    * port  目的端口
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'listType' => 'list_type',
            'direction' => 'direction',
            'addressType' => 'address_type',
            'address' => 'address',
            'protocol' => 'protocol',
            'port' => 'port',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * listType  黑白名单类型4：黑名单，5：白名单
    * direction  地址方向0：源地址1：目的地址
    * addressType  IP地址类型 0：ipv4，1:ipv6
    * address  IP地址
    * protocol  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    * port  目的端口
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'listType' => 'setListType',
            'direction' => 'setDirection',
            'addressType' => 'setAddressType',
            'address' => 'setAddress',
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * listType  黑白名单类型4：黑名单，5：白名单
    * direction  地址方向0：源地址1：目的地址
    * addressType  IP地址类型 0：ipv4，1:ipv6
    * address  IP地址
    * protocol  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    * port  目的端口
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'listType' => 'getListType',
            'direction' => 'getDirection',
            'addressType' => 'getAddressType',
            'address' => 'getAddress',
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'description' => 'getDescription'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['listType'] = isset($data['listType']) ? $data['listType'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['listType'] === null) {
            $invalidProperties[] = "'listType' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        if ($this->container['addressType'] === null) {
            $invalidProperties[] = "'addressType' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
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
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，type为0时，object_id为互联网边界防护对象ID，type为1时，object_id为VPC边界防护对象ID，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets listType
    *  黑白名单类型4：黑名单，5：白名单
    *
    * @return int
    */
    public function getListType()
    {
        return $this->container['listType'];
    }

    /**
    * Sets listType
    *
    * @param int $listType 黑白名单类型4：黑名单，5：白名单
    *
    * @return $this
    */
    public function setListType($listType)
    {
        $this->container['listType'] = $listType;
        return $this;
    }

    /**
    * Gets direction
    *  地址方向0：源地址1：目的地址
    *
    * @return int
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int $direction 地址方向0：源地址1：目的地址
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets addressType
    *  IP地址类型 0：ipv4，1:ipv6
    *
    * @return int
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int $addressType IP地址类型 0：ipv4，1:ipv6
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
    *  IP地址
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address IP地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    *
    * @return int
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int $protocol 协议类型：TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1,手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets port
    *  目的端口
    *
    * @return string
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string $port 目的端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

