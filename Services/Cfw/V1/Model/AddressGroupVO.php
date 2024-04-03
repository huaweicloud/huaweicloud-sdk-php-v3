<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressGroupVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressGroupVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setId  地址组id
    * name  地址组名称
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setId' => 'string',
            'name' => 'string',
            'protocols' => 'int[]',
            'serviceSetType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setId  地址组id
    * name  地址组名称
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setId' => null,
        'name' => null,
        'protocols' => 'int32',
        'serviceSetType' => 'int32'
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
    * setId  地址组id
    * name  地址组名称
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setId' => 'set_id',
            'name' => 'name',
            'protocols' => 'protocols',
            'serviceSetType' => 'service_set_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setId  地址组id
    * name  地址组名称
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $setters = [
            'setId' => 'setSetId',
            'name' => 'setName',
            'protocols' => 'setProtocols',
            'serviceSetType' => 'setServiceSetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setId  地址组id
    * name  地址组名称
    * protocols  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @var string[]
    */
    protected static $getters = [
            'setId' => 'getSetId',
            'name' => 'getName',
            'protocols' => 'getProtocols',
            'serviceSetType' => 'getServiceSetType'
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
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['serviceSetType'] = isset($data['serviceSetType']) ? $data['serviceSetType'] : null;
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
    * Gets setId
    *  地址组id
    *
    * @return string|null
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string|null $setId 地址组id
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
        return $this;
    }

    /**
    * Gets name
    *  地址组名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 地址组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocols
    *  协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return int[]|null
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param int[]|null $protocols 协议列表，协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets serviceSetType
    *  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return int|null
    */
    public function getServiceSetType()
    {
        return $this->container['serviceSetType'];
    }

    /**
    * Sets serviceSetType
    *
    * @param int|null $serviceSetType 服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return $this
    */
    public function setServiceSetType($serviceSetType)
    {
        $this->container['serviceSetType'] = $serviceSetType;
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

