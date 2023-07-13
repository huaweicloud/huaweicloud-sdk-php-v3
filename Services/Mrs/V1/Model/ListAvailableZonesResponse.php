<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailableZonesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailableZonesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableZones  可用区列表
    * defaultAzCode  默认可用区编码
    * supportPhysicalAzGroup  支持的物理可用区分组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableZones' => '\HuaweiCloud\SDK\Mrs\V1\Model\AvailableZoneV2[]',
            'defaultAzCode' => 'string',
            'supportPhysicalAzGroup' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableZones  可用区列表
    * defaultAzCode  默认可用区编码
    * supportPhysicalAzGroup  支持的物理可用区分组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableZones' => null,
        'defaultAzCode' => null,
        'supportPhysicalAzGroup' => null
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
    * availableZones  可用区列表
    * defaultAzCode  默认可用区编码
    * supportPhysicalAzGroup  支持的物理可用区分组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableZones' => 'available_zones',
            'defaultAzCode' => 'default_az_code',
            'supportPhysicalAzGroup' => 'support_physical_az_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableZones  可用区列表
    * defaultAzCode  默认可用区编码
    * supportPhysicalAzGroup  支持的物理可用区分组
    *
    * @var string[]
    */
    protected static $setters = [
            'availableZones' => 'setAvailableZones',
            'defaultAzCode' => 'setDefaultAzCode',
            'supportPhysicalAzGroup' => 'setSupportPhysicalAzGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableZones  可用区列表
    * defaultAzCode  默认可用区编码
    * supportPhysicalAzGroup  支持的物理可用区分组
    *
    * @var string[]
    */
    protected static $getters = [
            'availableZones' => 'getAvailableZones',
            'defaultAzCode' => 'getDefaultAzCode',
            'supportPhysicalAzGroup' => 'getSupportPhysicalAzGroup'
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
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['defaultAzCode'] = isset($data['defaultAzCode']) ? $data['defaultAzCode'] : null;
        $this->container['supportPhysicalAzGroup'] = isset($data['supportPhysicalAzGroup']) ? $data['supportPhysicalAzGroup'] : null;
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
    * Gets availableZones
    *  可用区列表
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\AvailableZoneV2[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\AvailableZoneV2[]|null $availableZones 可用区列表
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets defaultAzCode
    *  默认可用区编码
    *
    * @return string|null
    */
    public function getDefaultAzCode()
    {
        return $this->container['defaultAzCode'];
    }

    /**
    * Sets defaultAzCode
    *
    * @param string|null $defaultAzCode 默认可用区编码
    *
    * @return $this
    */
    public function setDefaultAzCode($defaultAzCode)
    {
        $this->container['defaultAzCode'] = $defaultAzCode;
        return $this;
    }

    /**
    * Gets supportPhysicalAzGroup
    *  支持的物理可用区分组
    *
    * @return bool|null
    */
    public function getSupportPhysicalAzGroup()
    {
        return $this->container['supportPhysicalAzGroup'];
    }

    /**
    * Sets supportPhysicalAzGroup
    *
    * @param bool|null $supportPhysicalAzGroup 支持的物理可用区分组
    *
    * @return $this
    */
    public function setSupportPhysicalAzGroup($supportPhysicalAzGroup)
    {
        $this->container['supportPhysicalAzGroup'] = $supportPhysicalAzGroup;
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

