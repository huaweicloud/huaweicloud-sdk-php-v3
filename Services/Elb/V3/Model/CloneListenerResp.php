<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloneListenerResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloneListenerResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * loadbalancerId  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * protocolPort  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    * portRanges  **参数解释**：端口监听范围（闭区间)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'loadbalancerId' => 'string',
            'protocolPort' => 'int',
            'portRanges' => '\HuaweiCloud\SDK\Elb\V3\Model\ResPortRange[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * loadbalancerId  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * protocolPort  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    * portRanges  **参数解释**：端口监听范围（闭区间)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'loadbalancerId' => null,
        'protocolPort' => 'int32',
        'portRanges' => null
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
    * id  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * loadbalancerId  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * protocolPort  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    * portRanges  **参数解释**：端口监听范围（闭区间)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'loadbalancerId' => 'loadbalancer_id',
            'protocolPort' => 'protocol_port',
            'portRanges' => 'port_ranges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * loadbalancerId  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * protocolPort  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    * portRanges  **参数解释**：端口监听范围（闭区间)。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'loadbalancerId' => 'setLoadbalancerId',
            'protocolPort' => 'setProtocolPort',
            'portRanges' => 'setPortRanges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * loadbalancerId  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    * protocolPort  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    * portRanges  **参数解释**：端口监听范围（闭区间)。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'loadbalancerId' => 'getLoadbalancerId',
            'protocolPort' => 'getProtocolPort',
            'portRanges' => 'getPortRanges'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['portRanges'] = isset($data['portRanges']) ? $data['portRanges'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：新监听器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId **参数解释**：目的负载均衡器ID。 **取值范围**：标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort **参数解释**：新监听器监听端口。 **取值范围**：1-65535
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets portRanges
    *  **参数解释**：端口监听范围（闭区间)。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ResPortRange[]|null
    */
    public function getPortRanges()
    {
        return $this->container['portRanges'];
    }

    /**
    * Sets portRanges
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ResPortRange[]|null $portRanges **参数解释**：端口监听范围（闭区间)。
    *
    * @return $this
    */
    public function setPortRanges($portRanges)
    {
        $this->container['portRanges'] = $portRanges;
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

