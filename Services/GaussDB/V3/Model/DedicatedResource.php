<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DedicatedResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DedicatedResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  专属资源池ID。
    * resourceName  专属资源池名称
    * engineName  数据库引擎名称
    * architecture  CPU架构
    * status  专属资源池状态
    * capacity  capacity
    * availabilityZone  专属资源池可用区信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceName' => 'string',
            'engineName' => 'string',
            'architecture' => 'string',
            'status' => 'string',
            'capacity' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedResourceCapacity',
            'availabilityZone' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  专属资源池ID。
    * resourceName  专属资源池名称
    * engineName  数据库引擎名称
    * architecture  CPU架构
    * status  专属资源池状态
    * capacity  capacity
    * availabilityZone  专属资源池可用区信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceName' => null,
        'engineName' => null,
        'architecture' => null,
        'status' => null,
        'capacity' => null,
        'availabilityZone' => null
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
    * id  专属资源池ID。
    * resourceName  专属资源池名称
    * engineName  数据库引擎名称
    * architecture  CPU架构
    * status  专属资源池状态
    * capacity  capacity
    * availabilityZone  专属资源池可用区信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceName' => 'resource_name',
            'engineName' => 'engine_name',
            'architecture' => 'architecture',
            'status' => 'status',
            'capacity' => 'capacity',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  专属资源池ID。
    * resourceName  专属资源池名称
    * engineName  数据库引擎名称
    * architecture  CPU架构
    * status  专属资源池状态
    * capacity  capacity
    * availabilityZone  专属资源池可用区信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceName' => 'setResourceName',
            'engineName' => 'setEngineName',
            'architecture' => 'setArchitecture',
            'status' => 'setStatus',
            'capacity' => 'setCapacity',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  专属资源池ID。
    * resourceName  专属资源池名称
    * engineName  数据库引擎名称
    * architecture  CPU架构
    * status  专属资源池状态
    * capacity  capacity
    * availabilityZone  专属资源池可用区信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceName' => 'getResourceName',
            'engineName' => 'getEngineName',
            'architecture' => 'getArchitecture',
            'status' => 'getStatus',
            'capacity' => 'getCapacity',
            'availabilityZone' => 'getAvailabilityZone'
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
    const STATUS_NORMAL = 'NORMAL';
    const STATUS_BUILDING = 'BUILDING';
    const STATUS_EXTENDING = 'EXTENDING';
    const STATUS_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NORMAL,
            self::STATUS_BUILDING,
            self::STATUS_EXTENDING,
            self::STATUS_DELETED,
        ];
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
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  专属资源池ID。
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
    * @param string|null $id 专属资源池ID。
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
    *  专属资源池名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 专属资源池名称
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
    *  数据库引擎名称
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 数据库引擎名称
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets architecture
    *  CPU架构
    *
    * @return string|null
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string|null $architecture CPU架构
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets status
    *  专属资源池状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 专属资源池状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets capacity
    *  capacity
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedResourceCapacity|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedResourceCapacity|null $capacity capacity
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  专属资源池可用区信息。
    *
    * @return string[]|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string[]|null $availabilityZone 专属资源池可用区信息。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

