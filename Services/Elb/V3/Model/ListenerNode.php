<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListenerNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListenerNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：监听器id。  **取值范围**：不涉及
    * name  **参数解释**：监听器名称。  **取值范围**：不涉及
    * protocol  **参数解释**：监听器协议。  **取值范围**：不涉及
    * protocolPort  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    * portRanges  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'protocol' => 'string',
            'protocolPort' => 'int',
            'portRanges' => '\HuaweiCloud\SDK\Elb\V3\Model\PortRange[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：监听器id。  **取值范围**：不涉及
    * name  **参数解释**：监听器名称。  **取值范围**：不涉及
    * protocol  **参数解释**：监听器协议。  **取值范围**：不涉及
    * protocolPort  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    * portRanges  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'protocol' => null,
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
    * id  **参数解释**：监听器id。  **取值范围**：不涉及
    * name  **参数解释**：监听器名称。  **取值范围**：不涉及
    * protocol  **参数解释**：监听器协议。  **取值范围**：不涉及
    * protocolPort  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    * portRanges  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'protocol' => 'protocol',
            'protocolPort' => 'protocol_port',
            'portRanges' => 'port_ranges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：监听器id。  **取值范围**：不涉及
    * name  **参数解释**：监听器名称。  **取值范围**：不涉及
    * protocol  **参数解释**：监听器协议。  **取值范围**：不涉及
    * protocolPort  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    * portRanges  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'protocol' => 'setProtocol',
            'protocolPort' => 'setProtocolPort',
            'portRanges' => 'setPortRanges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：监听器id。  **取值范围**：不涉及
    * name  **参数解释**：监听器名称。  **取值范围**：不涉及
    * protocol  **参数解释**：监听器协议。  **取值范围**：不涉及
    * protocolPort  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    * portRanges  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'protocol' => 'getProtocol',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['protocolPort'] === null) {
            $invalidProperties[] = "'protocolPort' can't be null";
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
    *  **参数解释**：监听器id。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：监听器id。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：监听器名称。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：监听器名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**：监听器协议。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol **参数解释**：监听器协议。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：监听器监听端口。  **取值范围**：不涉及
    *
    * @return int
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int $protocolPort **参数解释**：监听器监听端口。  **取值范围**：不涉及
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
    *  **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null
    */
    public function getPortRanges()
    {
        return $this->container['portRanges'];
    }

    /**
    * Sets portRanges
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null $portRanges **参数解释**：全端口监听，指定端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分 >仅当protocol_port为0时可以传入。
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

