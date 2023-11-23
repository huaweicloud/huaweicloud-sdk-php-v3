<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesSessionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesSessionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点ID。
    * offset  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    * limit  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    * addrPrefix  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'addrPrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点ID。
    * offset  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    * limit  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    * addrPrefix  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'offset' => null,
        'limit' => null,
        'addrPrefix' => null
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
    * nodeId  节点ID。
    * offset  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    * limit  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    * addrPrefix  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'addrPrefix' => 'addr_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点ID。
    * offset  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    * limit  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    * addrPrefix  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'addrPrefix' => 'setAddrPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点ID。
    * offset  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    * limit  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    * addrPrefix  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'addrPrefix' => 'getAddrPrefix'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['addrPrefix'] = isset($data['addrPrefix']) ? $data['addrPrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
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
    * Gets nodeId
    *  节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。取值大于或等于0。不传该参数时，查询偏移量默认为0，表示从最新创建的实例节点连接开始查询。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页查询页数。不传该参数时，默认每页50条实例节点连接信息，最大100条。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets addrPrefix
    *  用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @return string|null
    */
    public function getAddrPrefix()
    {
        return $this->container['addrPrefix'];
    }

    /**
    * Sets addrPrefix
    *
    * @param string|null $addrPrefix 用户端地址前缀匹配字符串。完整的地址由ip和端口号组成。不传默认查询所有。
    *
    * @return $this
    */
    public function setAddrPrefix($addrPrefix)
    {
        $this->container['addrPrefix'] = $addrPrefix;
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

