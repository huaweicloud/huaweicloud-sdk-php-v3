<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleServiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleServiceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'protocol' => 'int',
            'sourcePort' => 'string',
            'destPort' => 'string',
            'serviceSetId' => 'string',
            'serviceSetName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'protocol' => null,
        'sourcePort' => null,
        'destPort' => null,
        'serviceSetId' => null,
        'serviceSetName' => null
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
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'protocol' => 'protocol',
            'sourcePort' => 'source_port',
            'destPort' => 'dest_port',
            'serviceSetId' => 'service_set_id',
            'serviceSetName' => 'service_set_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'sourcePort' => 'setSourcePort',
            'destPort' => 'setDestPort',
            'serviceSetId' => 'setServiceSetId',
            'serviceSetName' => 'setServiceSetName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  服务输入类型，0为手动输入类型，1为自动输入类型
    * protocol  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    * sourcePort  源端口
    * destPort  目的端口
    * serviceSetId  服务组id，手动类型为空，自动类型为非空
    * serviceSetName  服务组名称
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'sourcePort' => 'getSourcePort',
            'destPort' => 'getDestPort',
            'serviceSetId' => 'getServiceSetId',
            'serviceSetName' => 'getServiceSetName'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['serviceSetId'] = isset($data['serviceSetId']) ? $data['serviceSetId'] : null;
        $this->container['serviceSetName'] = isset($data['serviceSetName']) ? $data['serviceSetName'] : null;
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
            if (!is_null($this->container['serviceSetId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['serviceSetId'])) {
                $invalidProperties[] = "invalid value for 'serviceSetId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
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
    *  服务输入类型，0为手动输入类型，1为自动输入类型
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
    * @param int $type 服务输入类型，0为手动输入类型，1为自动输入类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol 协议类型:TCP为6, UDP为17,ICMP为1,ICMPV6为58,ANY为-1,手动类型不为空，自动类型为空
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
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort 源端口
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
    * @return string|null
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string|null $destPort 目的端口
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets serviceSetId
    *  服务组id，手动类型为空，自动类型为非空
    *
    * @return string|null
    */
    public function getServiceSetId()
    {
        return $this->container['serviceSetId'];
    }

    /**
    * Sets serviceSetId
    *
    * @param string|null $serviceSetId 服务组id，手动类型为空，自动类型为非空
    *
    * @return $this
    */
    public function setServiceSetId($serviceSetId)
    {
        $this->container['serviceSetId'] = $serviceSetId;
        return $this;
    }

    /**
    * Gets serviceSetName
    *  服务组名称
    *
    * @return string|null
    */
    public function getServiceSetName()
    {
        return $this->container['serviceSetName'];
    }

    /**
    * Sets serviceSetName
    *
    * @param string|null $serviceSetName 服务组名称
    *
    * @return $this
    */
    public function setServiceSetName($serviceSetName)
    {
        $this->container['serviceSetName'] = $serviceSetName;
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

