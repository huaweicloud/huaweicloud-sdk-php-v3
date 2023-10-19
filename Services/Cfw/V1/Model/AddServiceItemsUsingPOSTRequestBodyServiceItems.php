<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddServiceItemsUsingPOSTRequestBodyServiceItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddServiceItemsUsingPOSTRequestBody_service_items';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  服务成员id
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * name  服务成员名称
    * description  服务成员描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'protocol' => 'int',
            'sourcePort' => 'string',
            'destPort' => 'string',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  服务成员id
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * name  服务成员名称
    * description  服务成员描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'protocol' => null,
        'sourcePort' => null,
        'destPort' => null,
        'name' => null,
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
    * itemId  服务成员id
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * name  服务成员名称
    * description  服务成员描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'protocol' => 'protocol',
            'sourcePort' => 'source_port',
            'destPort' => 'dest_port',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  服务成员id
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * name  服务成员名称
    * description  服务成员描述
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'protocol' => 'setProtocol',
            'sourcePort' => 'setSourcePort',
            'destPort' => 'setDestPort',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  服务成员id
    * protocol  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * name  服务成员名称
    * description  服务成员描述
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'protocol' => 'getProtocol',
            'sourcePort' => 'getSourcePort',
            'destPort' => 'getDestPort',
            'name' => 'getName',
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['sourcePort'] === null) {
            $invalidProperties[] = "'sourcePort' can't be null";
        }
        if ($this->container['destPort'] === null) {
            $invalidProperties[] = "'destPort' can't be null";
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
    * Gets itemId
    *  服务成员id
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId 服务成员id
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
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
    * @param int $protocol 协议类型:TCP为6，UDP为17，ICMP为1，ICMPV6为58，ANY为-1，手动类型不为空，自动类型为空
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets sourcePort
    *  源端口
    *
    * @return string
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string $sourcePort 源端口
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets destPort
    *  目的端口
    *
    * @return string
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string $destPort 目的端口
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets name
    *  服务成员名称
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
    * @param string|null $name 服务成员名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  服务成员描述
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
    * @param string|null $description 服务成员描述
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

