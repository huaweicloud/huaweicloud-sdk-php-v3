<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowChargeModesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowChargeModesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productType  加速类型，base（基础加速）
    * status  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    * serviceArea  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productType' => 'string',
            'status' => 'string',
            'serviceArea' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productType  加速类型，base（基础加速）
    * status  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    * serviceArea  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productType' => null,
        'status' => null,
        'serviceArea' => null
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
    * productType  加速类型，base（基础加速）
    * status  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    * serviceArea  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productType' => 'product_type',
            'status' => 'status',
            'serviceArea' => 'service_area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productType  加速类型，base（基础加速）
    * status  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    * serviceArea  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @var string[]
    */
    protected static $setters = [
            'productType' => 'setProductType',
            'status' => 'setStatus',
            'serviceArea' => 'setServiceArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productType  加速类型，base（基础加速）
    * status  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    * serviceArea  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @var string[]
    */
    protected static $getters = [
            'productType' => 'getProductType',
            'status' => 'getStatus',
            'serviceArea' => 'getServiceArea'
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
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['productType'] === null) {
            $invalidProperties[] = "'productType' can't be null";
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
    * Gets productType
    *  加速类型，base（基础加速）
    *
    * @return string
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string $productType 加速类型，base（基础加速）
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets status
    *  查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
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
    * @param string|null $status 查询计费模式状态，active（已生效），upcoming（待生效），不传默认为active(已生效)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets serviceArea
    *  服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea 服务区域，mainland_china（国内），outside_mainland_china（海外），不传默认为mainland_china(国内)
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
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

