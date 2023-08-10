<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Region implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Region';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域ID。
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * supportedEndpointTypes  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'area' => 'string',
            'supportedEndpointTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域ID。
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * supportedEndpointTypes  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'area' => null,
        'supportedEndpointTypes' => null
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
    * regionId  区域ID。
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * supportedEndpointTypes  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'area' => 'area',
            'supportedEndpointTypes' => 'supported_endpoint_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域ID。
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * supportedEndpointTypes  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'area' => 'setArea',
            'supportedEndpointTypes' => 'setSupportedEndpointTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域ID。
    * area  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    * supportedEndpointTypes  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'area' => 'getArea',
            'supportedEndpointTypes' => 'getSupportedEndpointTypes'
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
    const SUPPORTED_ENDPOINT_TYPES_EIP = 'EIP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportedEndpointTypesAllowableValues()
    {
        return [
            self::SUPPORTED_ENDPOINT_TYPES_EIP,
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['supportedEndpointTypes'] = isset($data['supportedEndpointTypes']) ? $data['supportedEndpointTypes'] : null;
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
    * Gets regionId
    *  区域ID。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets area
    *  区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    *
    * @return string|null
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param string|null $area 区域所属地区，取值： - OUTOFCM： 中国大陆以外 - CM：中国大陆
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets supportedEndpointTypes
    *  区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @return string[]|null
    */
    public function getSupportedEndpointTypes()
    {
        return $this->container['supportedEndpointTypes'];
    }

    /**
    * Sets supportedEndpointTypes
    *
    * @param string[]|null $supportedEndpointTypes 区域支持的终端节点类型。取值： EIP：弹性公网IP
    *
    * @return $this
    */
    public function setSupportedEndpointTypes($supportedEndpointTypes)
    {
        $this->container['supportedEndpointTypes'] = $supportedEndpointTypes;
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
