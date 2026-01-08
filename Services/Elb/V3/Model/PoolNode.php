<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **取值范围**：后端服务器组id。  **取值范围**：不涉及
    * name  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
    * protocol  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    * type  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    * lbAlgorithm  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'protocol' => 'string',
            'type' => 'string',
            'lbAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **取值范围**：后端服务器组id。  **取值范围**：不涉及
    * name  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
    * protocol  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    * type  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    * lbAlgorithm  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'protocol' => null,
        'type' => null,
        'lbAlgorithm' => null
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
    * id  **取值范围**：后端服务器组id。  **取值范围**：不涉及
    * name  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
    * protocol  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    * type  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    * lbAlgorithm  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'protocol' => 'protocol',
            'type' => 'type',
            'lbAlgorithm' => 'lb_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **取值范围**：后端服务器组id。  **取值范围**：不涉及
    * name  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
    * protocol  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    * type  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    * lbAlgorithm  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'protocol' => 'setProtocol',
            'type' => 'setType',
            'lbAlgorithm' => 'setLbAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **取值范围**：后端服务器组id。  **取值范围**：不涉及
    * name  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
    * protocol  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    * type  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    * lbAlgorithm  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'protocol' => 'getProtocol',
            'type' => 'getType',
            'lbAlgorithm' => 'getLbAlgorithm'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['lbAlgorithm'] === null) {
            $invalidProperties[] = "'lbAlgorithm' can't be null";
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
    *  **取值范围**：后端服务器组id。  **取值范围**：不涉及
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
    * @param string $id **取值范围**：后端服务器组id。  **取值范围**：不涉及
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
    *  **取值范围**：后端服务器组名称。  **取值范围**：不涉及
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
    * @param string $name **取值范围**：后端服务器组名称。  **取值范围**：不涉及
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
    *  **取值范围**：后端服务器组协议。  **取值范围**：不涉及
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
    * @param string $protocol **取值范围**：后端服务器组协议。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets type
    *  **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **取值范围**：后端服务器组类型。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string $lbAlgorithm **取值范围**：后端服务器组负载均衡算法。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
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

