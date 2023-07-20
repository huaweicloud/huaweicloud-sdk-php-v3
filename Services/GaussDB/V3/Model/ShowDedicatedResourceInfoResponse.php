<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDedicatedResourceInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDedicatedResourceInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  专属资源池ID。
    * name  专属资源池名称。
    * engineName  引擎名称。
    * availabilityZoneIds  可用区。
    * architecture  资源规格类型。
    * status  专属资源池状态。
    * dedicatedComputeInfo  dedicatedComputeInfo
    * dedicatedStorageInfo  dedicatedStorageInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'engineName' => 'string',
            'availabilityZoneIds' => 'string[]',
            'architecture' => 'string',
            'status' => 'string',
            'dedicatedComputeInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedComputeInfo',
            'dedicatedStorageInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedStorageInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  专属资源池ID。
    * name  专属资源池名称。
    * engineName  引擎名称。
    * availabilityZoneIds  可用区。
    * architecture  资源规格类型。
    * status  专属资源池状态。
    * dedicatedComputeInfo  dedicatedComputeInfo
    * dedicatedStorageInfo  dedicatedStorageInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'engineName' => null,
        'availabilityZoneIds' => null,
        'architecture' => null,
        'status' => null,
        'dedicatedComputeInfo' => null,
        'dedicatedStorageInfo' => null
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
    * name  专属资源池名称。
    * engineName  引擎名称。
    * availabilityZoneIds  可用区。
    * architecture  资源规格类型。
    * status  专属资源池状态。
    * dedicatedComputeInfo  dedicatedComputeInfo
    * dedicatedStorageInfo  dedicatedStorageInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'engineName' => 'engine_name',
            'availabilityZoneIds' => 'availability_zone_ids',
            'architecture' => 'architecture',
            'status' => 'status',
            'dedicatedComputeInfo' => 'dedicated_compute_info',
            'dedicatedStorageInfo' => 'dedicated_storage_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  专属资源池ID。
    * name  专属资源池名称。
    * engineName  引擎名称。
    * availabilityZoneIds  可用区。
    * architecture  资源规格类型。
    * status  专属资源池状态。
    * dedicatedComputeInfo  dedicatedComputeInfo
    * dedicatedStorageInfo  dedicatedStorageInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'engineName' => 'setEngineName',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'architecture' => 'setArchitecture',
            'status' => 'setStatus',
            'dedicatedComputeInfo' => 'setDedicatedComputeInfo',
            'dedicatedStorageInfo' => 'setDedicatedStorageInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  专属资源池ID。
    * name  专属资源池名称。
    * engineName  引擎名称。
    * availabilityZoneIds  可用区。
    * architecture  资源规格类型。
    * status  专属资源池状态。
    * dedicatedComputeInfo  dedicatedComputeInfo
    * dedicatedStorageInfo  dedicatedStorageInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'engineName' => 'getEngineName',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'architecture' => 'getArchitecture',
            'status' => 'getStatus',
            'dedicatedComputeInfo' => 'getDedicatedComputeInfo',
            'dedicatedStorageInfo' => 'getDedicatedStorageInfo'
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dedicatedComputeInfo'] = isset($data['dedicatedComputeInfo']) ? $data['dedicatedComputeInfo'] : null;
        $this->container['dedicatedStorageInfo'] = isset($data['dedicatedStorageInfo']) ? $data['dedicatedStorageInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  专属资源池名称。
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
    * @param string|null $name 专属资源池名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
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
    * @param string|null $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  可用区。
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[]|null $availabilityZoneIds 可用区。
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets architecture
    *  资源规格类型。
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
    * @param string|null $architecture 资源规格类型。
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
    *  专属资源池状态。
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
    * @param string|null $status 专属资源池状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dedicatedComputeInfo
    *  dedicatedComputeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedComputeInfo|null
    */
    public function getDedicatedComputeInfo()
    {
        return $this->container['dedicatedComputeInfo'];
    }

    /**
    * Sets dedicatedComputeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedComputeInfo|null $dedicatedComputeInfo dedicatedComputeInfo
    *
    * @return $this
    */
    public function setDedicatedComputeInfo($dedicatedComputeInfo)
    {
        $this->container['dedicatedComputeInfo'] = $dedicatedComputeInfo;
        return $this;
    }

    /**
    * Gets dedicatedStorageInfo
    *  dedicatedStorageInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedStorageInfo|null
    */
    public function getDedicatedStorageInfo()
    {
        return $this->container['dedicatedStorageInfo'];
    }

    /**
    * Sets dedicatedStorageInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DedicatedStorageInfo|null $dedicatedStorageInfo dedicatedStorageInfo
    *
    * @return $this
    */
    public function setDedicatedStorageInfo($dedicatedStorageInfo)
    {
        $this->container['dedicatedStorageInfo'] = $dedicatedStorageInfo;
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

