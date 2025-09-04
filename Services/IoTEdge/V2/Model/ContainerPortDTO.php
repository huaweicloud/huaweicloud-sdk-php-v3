<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerPortDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerPortDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerPort  构成一堆映射的容器端口
    * hostPort  构成一对映射的物理机对应网卡端口
    * hostIp  对应网卡地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerPort' => 'int',
            'hostPort' => 'int',
            'hostIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerPort  构成一堆映射的容器端口
    * hostPort  构成一对映射的物理机对应网卡端口
    * hostIp  对应网卡地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerPort' => 'int32',
        'hostPort' => 'int32',
        'hostIp' => null
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
    * containerPort  构成一堆映射的容器端口
    * hostPort  构成一对映射的物理机对应网卡端口
    * hostIp  对应网卡地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerPort' => 'container_port',
            'hostPort' => 'host_port',
            'hostIp' => 'host_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerPort  构成一堆映射的容器端口
    * hostPort  构成一对映射的物理机对应网卡端口
    * hostIp  对应网卡地址
    *
    * @var string[]
    */
    protected static $setters = [
            'containerPort' => 'setContainerPort',
            'hostPort' => 'setHostPort',
            'hostIp' => 'setHostIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerPort  构成一堆映射的容器端口
    * hostPort  构成一对映射的物理机对应网卡端口
    * hostIp  对应网卡地址
    *
    * @var string[]
    */
    protected static $getters = [
            'containerPort' => 'getContainerPort',
            'hostPort' => 'getHostPort',
            'hostIp' => 'getHostIp'
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
        $this->container['containerPort'] = isset($data['containerPort']) ? $data['containerPort'] : null;
        $this->container['hostPort'] = isset($data['hostPort']) ? $data['hostPort'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerPort']) && ($this->container['containerPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'containerPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['containerPort']) && ($this->container['containerPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'containerPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostPort']) && ($this->container['hostPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'hostPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['hostPort']) && ($this->container['hostPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'hostPort', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
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
    * Gets containerPort
    *  构成一堆映射的容器端口
    *
    * @return int|null
    */
    public function getContainerPort()
    {
        return $this->container['containerPort'];
    }

    /**
    * Sets containerPort
    *
    * @param int|null $containerPort 构成一堆映射的容器端口
    *
    * @return $this
    */
    public function setContainerPort($containerPort)
    {
        $this->container['containerPort'] = $containerPort;
        return $this;
    }

    /**
    * Gets hostPort
    *  构成一对映射的物理机对应网卡端口
    *
    * @return int|null
    */
    public function getHostPort()
    {
        return $this->container['hostPort'];
    }

    /**
    * Sets hostPort
    *
    * @param int|null $hostPort 构成一对映射的物理机对应网卡端口
    *
    * @return $this
    */
    public function setHostPort($hostPort)
    {
        $this->container['hostPort'] = $hostPort;
        return $this;
    }

    /**
    * Gets hostIp
    *  对应网卡地址
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 对应网卡地址
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
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

