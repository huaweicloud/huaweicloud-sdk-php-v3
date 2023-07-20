<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDedicatedResourceResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDedicatedResourceResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  专属资源ID。
    * resourceName  专属资源的名称。
    * engineName  引擎名称。
    * availabilityZone  可用区信息。
    * architecture  专属资源的计算架构。
    * capacity  capacity
    * status  专属资源的状态信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceName' => 'string',
            'engineName' => 'string',
            'availabilityZone' => 'string',
            'architecture' => 'string',
            'capacity' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DedicatedResourceCapacity',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  专属资源ID。
    * resourceName  专属资源的名称。
    * engineName  引擎名称。
    * availabilityZone  可用区信息。
    * architecture  专属资源的计算架构。
    * capacity  capacity
    * status  专属资源的状态信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceName' => null,
        'engineName' => null,
        'availabilityZone' => null,
        'architecture' => null,
        'capacity' => null,
        'status' => null
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
    * id  专属资源ID。
    * resourceName  专属资源的名称。
    * engineName  引擎名称。
    * availabilityZone  可用区信息。
    * architecture  专属资源的计算架构。
    * capacity  capacity
    * status  专属资源的状态信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceName' => 'resource_name',
            'engineName' => 'engine_name',
            'availabilityZone' => 'availability_zone',
            'architecture' => 'architecture',
            'capacity' => 'capacity',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  专属资源ID。
    * resourceName  专属资源的名称。
    * engineName  引擎名称。
    * availabilityZone  可用区信息。
    * architecture  专属资源的计算架构。
    * capacity  capacity
    * status  专属资源的状态信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceName' => 'setResourceName',
            'engineName' => 'setEngineName',
            'availabilityZone' => 'setAvailabilityZone',
            'architecture' => 'setArchitecture',
            'capacity' => 'setCapacity',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  专属资源ID。
    * resourceName  专属资源的名称。
    * engineName  引擎名称。
    * availabilityZone  可用区信息。
    * architecture  专属资源的计算架构。
    * capacity  capacity
    * status  专属资源的状态信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceName' => 'getResourceName',
            'engineName' => 'getEngineName',
            'availabilityZone' => 'getAvailabilityZone',
            'architecture' => 'getArchitecture',
            'capacity' => 'getCapacity',
            'status' => 'getStatus'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
        if ($this->container['engineName'] === null) {
            $invalidProperties[] = "'engineName' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['architecture'] === null) {
            $invalidProperties[] = "'architecture' can't be null";
        }
        if ($this->container['capacity'] === null) {
            $invalidProperties[] = "'capacity' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    *  专属资源ID。
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
    * @param string $id 专属资源ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets resourceName
    *  专属资源的名称。
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName 专属资源的名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
    *
    * @return string
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  可用区信息。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 可用区信息。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets architecture
    *  专属资源的计算架构。
    *
    * @return string
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string $architecture 专属资源的计算架构。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets capacity
    *  capacity
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DedicatedResourceCapacity
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\DedicatedResourceCapacity $capacity capacity
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets status
    *  专属资源的状态信息。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 专属资源的状态信息。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

