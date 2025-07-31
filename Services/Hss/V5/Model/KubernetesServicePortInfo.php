<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KubernetesServicePortInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KubernetesServicePortInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * serviceId  关联服务 ID
    * name  端口名
    * protocol  服务协议
    * port  端口号
    * targetPort  后端容器端口
    * nodePort  节点端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'serviceId' => 'string',
            'name' => 'string',
            'protocol' => 'string',
            'port' => 'int',
            'targetPort' => 'string',
            'nodePort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * serviceId  关联服务 ID
    * name  端口名
    * protocol  服务协议
    * port  端口号
    * targetPort  后端容器端口
    * nodePort  节点端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'serviceId' => null,
        'name' => null,
        'protocol' => null,
        'port' => null,
        'targetPort' => null,
        'nodePort' => null
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
    * id  ID
    * serviceId  关联服务 ID
    * name  端口名
    * protocol  服务协议
    * port  端口号
    * targetPort  后端容器端口
    * nodePort  节点端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'serviceId' => 'service_id',
            'name' => 'name',
            'protocol' => 'protocol',
            'port' => 'port',
            'targetPort' => 'target_port',
            'nodePort' => 'node_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * serviceId  关联服务 ID
    * name  端口名
    * protocol  服务协议
    * port  端口号
    * targetPort  后端容器端口
    * nodePort  节点端口
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'serviceId' => 'setServiceId',
            'name' => 'setName',
            'protocol' => 'setProtocol',
            'port' => 'setPort',
            'targetPort' => 'setTargetPort',
            'nodePort' => 'setNodePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * serviceId  关联服务 ID
    * name  端口名
    * protocol  服务协议
    * port  端口号
    * targetPort  后端容器端口
    * nodePort  节点端口
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'serviceId' => 'getServiceId',
            'name' => 'getName',
            'protocol' => 'getProtocol',
            'port' => 'getPort',
            'targetPort' => 'getTargetPort',
            'nodePort' => 'getNodePort'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
        $this->container['nodePort'] = isset($data['nodePort']) ? $data['nodePort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceId']) && (mb_strlen($this->container['serviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 256)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 256)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetPort']) && (mb_strlen($this->container['targetPort']) > 256)) {
                $invalidProperties[] = "invalid value for 'targetPort', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['targetPort']) && (mb_strlen($this->container['targetPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetPort', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodePort']) && ($this->container['nodePort'] > 256)) {
                $invalidProperties[] = "invalid value for 'nodePort', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nodePort']) && ($this->container['nodePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodePort', must be bigger than or equal to 0.";
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
    *  ID
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
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serviceId
    *  关联服务 ID
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 关联服务 ID
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets name
    *  端口名
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
    * @param string|null $name 端口名
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
    *  服务协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 服务协议
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
    *  端口号
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口号
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets targetPort
    *  后端容器端口
    *
    * @return string|null
    */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
    * Sets targetPort
    *
    * @param string|null $targetPort 后端容器端口
    *
    * @return $this
    */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;
        return $this;
    }

    /**
    * Gets nodePort
    *  节点端口
    *
    * @return int|null
    */
    public function getNodePort()
    {
        return $this->container['nodePort'];
    }

    /**
    * Sets nodePort
    *
    * @param int|null $nodePort 节点端口
    *
    * @return $this
    */
    public function setNodePort($nodePort)
    {
        $this->container['nodePort'] = $nodePort;
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

