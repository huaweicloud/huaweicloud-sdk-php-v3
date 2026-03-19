<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespHostProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespHostProperty';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * vcpus  专属主机的vCPUs个数。
    * cores  专属主机的物理核数。
    * sockets  专属主机的物理套接字数量。
    * memory  专属主机的物理内存大小。
    * availableInstanceCapacities  专属主机上创建的云服务器规格。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostType' => 'string',
            'hostTypeName' => 'string',
            'vcpus' => 'int',
            'cores' => 'int',
            'sockets' => 'int',
            'memory' => 'int',
            'availableInstanceCapacities' => '\HuaweiCloud\SDK\DeH\V1\Model\RespInstanceCapacity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * vcpus  专属主机的vCPUs个数。
    * cores  专属主机的物理核数。
    * sockets  专属主机的物理套接字数量。
    * memory  专属主机的物理内存大小。
    * availableInstanceCapacities  专属主机上创建的云服务器规格。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostType' => null,
        'hostTypeName' => null,
        'vcpus' => 'int32',
        'cores' => 'int32',
        'sockets' => 'int32',
        'memory' => 'int32',
        'availableInstanceCapacities' => null
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
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * vcpus  专属主机的vCPUs个数。
    * cores  专属主机的物理核数。
    * sockets  专属主机的物理套接字数量。
    * memory  专属主机的物理内存大小。
    * availableInstanceCapacities  专属主机上创建的云服务器规格。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostType' => 'host_type',
            'hostTypeName' => 'host_type_name',
            'vcpus' => 'vcpus',
            'cores' => 'cores',
            'sockets' => 'sockets',
            'memory' => 'memory',
            'availableInstanceCapacities' => 'available_instance_capacities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * vcpus  专属主机的vCPUs个数。
    * cores  专属主机的物理核数。
    * sockets  专属主机的物理套接字数量。
    * memory  专属主机的物理内存大小。
    * availableInstanceCapacities  专属主机上创建的云服务器规格。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostType' => 'setHostType',
            'hostTypeName' => 'setHostTypeName',
            'vcpus' => 'setVcpus',
            'cores' => 'setCores',
            'sockets' => 'setSockets',
            'memory' => 'setMemory',
            'availableInstanceCapacities' => 'setAvailableInstanceCapacities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostType  专属主机类型。
    * hostTypeName  专属主机类型的名称。
    * vcpus  专属主机的vCPUs个数。
    * cores  专属主机的物理核数。
    * sockets  专属主机的物理套接字数量。
    * memory  专属主机的物理内存大小。
    * availableInstanceCapacities  专属主机上创建的云服务器规格。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostType' => 'getHostType',
            'hostTypeName' => 'getHostTypeName',
            'vcpus' => 'getVcpus',
            'cores' => 'getCores',
            'sockets' => 'getSockets',
            'memory' => 'getMemory',
            'availableInstanceCapacities' => 'getAvailableInstanceCapacities'
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
        $this->container['hostType'] = isset($data['hostType']) ? $data['hostType'] : null;
        $this->container['hostTypeName'] = isset($data['hostTypeName']) ? $data['hostTypeName'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['cores'] = isset($data['cores']) ? $data['cores'] : null;
        $this->container['sockets'] = isset($data['sockets']) ? $data['sockets'] : null;
        $this->container['memory'] = isset($data['memory']) ? $data['memory'] : null;
        $this->container['availableInstanceCapacities'] = isset($data['availableInstanceCapacities']) ? $data['availableInstanceCapacities'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostType'] === null) {
            $invalidProperties[] = "'hostType' can't be null";
        }
        if ($this->container['hostTypeName'] === null) {
            $invalidProperties[] = "'hostTypeName' can't be null";
        }
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['cores'] === null) {
            $invalidProperties[] = "'cores' can't be null";
        }
        if ($this->container['sockets'] === null) {
            $invalidProperties[] = "'sockets' can't be null";
        }
        if ($this->container['memory'] === null) {
            $invalidProperties[] = "'memory' can't be null";
        }
        if ($this->container['availableInstanceCapacities'] === null) {
            $invalidProperties[] = "'availableInstanceCapacities' can't be null";
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
    * Gets hostType
    *  专属主机类型。
    *
    * @return string
    */
    public function getHostType()
    {
        return $this->container['hostType'];
    }

    /**
    * Sets hostType
    *
    * @param string $hostType 专属主机类型。
    *
    * @return $this
    */
    public function setHostType($hostType)
    {
        $this->container['hostType'] = $hostType;
        return $this;
    }

    /**
    * Gets hostTypeName
    *  专属主机类型的名称。
    *
    * @return string
    */
    public function getHostTypeName()
    {
        return $this->container['hostTypeName'];
    }

    /**
    * Sets hostTypeName
    *
    * @param string $hostTypeName 专属主机类型的名称。
    *
    * @return $this
    */
    public function setHostTypeName($hostTypeName)
    {
        $this->container['hostTypeName'] = $hostTypeName;
        return $this;
    }

    /**
    * Gets vcpus
    *  专属主机的vCPUs个数。
    *
    * @return int
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param int $vcpus 专属主机的vCPUs个数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets cores
    *  专属主机的物理核数。
    *
    * @return int
    */
    public function getCores()
    {
        return $this->container['cores'];
    }

    /**
    * Sets cores
    *
    * @param int $cores 专属主机的物理核数。
    *
    * @return $this
    */
    public function setCores($cores)
    {
        $this->container['cores'] = $cores;
        return $this;
    }

    /**
    * Gets sockets
    *  专属主机的物理套接字数量。
    *
    * @return int
    */
    public function getSockets()
    {
        return $this->container['sockets'];
    }

    /**
    * Sets sockets
    *
    * @param int $sockets 专属主机的物理套接字数量。
    *
    * @return $this
    */
    public function setSockets($sockets)
    {
        $this->container['sockets'] = $sockets;
        return $this;
    }

    /**
    * Gets memory
    *  专属主机的物理内存大小。
    *
    * @return int
    */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
    * Sets memory
    *
    * @param int $memory 专属主机的物理内存大小。
    *
    * @return $this
    */
    public function setMemory($memory)
    {
        $this->container['memory'] = $memory;
        return $this;
    }

    /**
    * Gets availableInstanceCapacities
    *  专属主机上创建的云服务器规格。
    *
    * @return \HuaweiCloud\SDK\DeH\V1\Model\RespInstanceCapacity[]
    */
    public function getAvailableInstanceCapacities()
    {
        return $this->container['availableInstanceCapacities'];
    }

    /**
    * Sets availableInstanceCapacities
    *
    * @param \HuaweiCloud\SDK\DeH\V1\Model\RespInstanceCapacity[] $availableInstanceCapacities 专属主机上创建的云服务器规格。
    *
    * @return $this
    */
    public function setAvailableInstanceCapacities($availableInstanceCapacities)
    {
        $this->container['availableInstanceCapacities'] = $availableInstanceCapacities;
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

