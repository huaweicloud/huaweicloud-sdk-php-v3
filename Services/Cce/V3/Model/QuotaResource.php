<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaKey  资源类型
    * quotaLimit  配额值
    * used  已创建的资源个数
    * unit  单位
    * regionId  局点ID。若资源不涉及此参数，则不返回该参数。
    * availabilityZoneId  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaKey' => 'string',
            'quotaLimit' => 'int',
            'used' => 'int',
            'unit' => 'string',
            'regionId' => 'string',
            'availabilityZoneId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaKey  资源类型
    * quotaLimit  配额值
    * used  已创建的资源个数
    * unit  单位
    * regionId  局点ID。若资源不涉及此参数，则不返回该参数。
    * availabilityZoneId  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaKey' => null,
        'quotaLimit' => 'int32',
        'used' => 'int32',
        'unit' => null,
        'regionId' => null,
        'availabilityZoneId' => null
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
    * quotaKey  资源类型
    * quotaLimit  配额值
    * used  已创建的资源个数
    * unit  单位
    * regionId  局点ID。若资源不涉及此参数，则不返回该参数。
    * availabilityZoneId  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaKey' => 'quotaKey',
            'quotaLimit' => 'quotaLimit',
            'used' => 'used',
            'unit' => 'unit',
            'regionId' => 'regionId',
            'availabilityZoneId' => 'availabilityZoneId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaKey  资源类型
    * quotaLimit  配额值
    * used  已创建的资源个数
    * unit  单位
    * regionId  局点ID。若资源不涉及此参数，则不返回该参数。
    * availabilityZoneId  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaKey' => 'setQuotaKey',
            'quotaLimit' => 'setQuotaLimit',
            'used' => 'setUsed',
            'unit' => 'setUnit',
            'regionId' => 'setRegionId',
            'availabilityZoneId' => 'setAvailabilityZoneId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaKey  资源类型
    * quotaLimit  配额值
    * used  已创建的资源个数
    * unit  单位
    * regionId  局点ID。若资源不涉及此参数，则不返回该参数。
    * availabilityZoneId  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaKey' => 'getQuotaKey',
            'quotaLimit' => 'getQuotaLimit',
            'used' => 'getUsed',
            'unit' => 'getUnit',
            'regionId' => 'getRegionId',
            'availabilityZoneId' => 'getAvailabilityZoneId'
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
        $this->container['quotaKey'] = isset($data['quotaKey']) ? $data['quotaKey'] : null;
        $this->container['quotaLimit'] = isset($data['quotaLimit']) ? $data['quotaLimit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
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
    * Gets quotaKey
    *  资源类型
    *
    * @return string|null
    */
    public function getQuotaKey()
    {
        return $this->container['quotaKey'];
    }

    /**
    * Sets quotaKey
    *
    * @param string|null $quotaKey 资源类型
    *
    * @return $this
    */
    public function setQuotaKey($quotaKey)
    {
        $this->container['quotaKey'] = $quotaKey;
        return $this;
    }

    /**
    * Gets quotaLimit
    *  配额值
    *
    * @return int|null
    */
    public function getQuotaLimit()
    {
        return $this->container['quotaLimit'];
    }

    /**
    * Sets quotaLimit
    *
    * @param int|null $quotaLimit 配额值
    *
    * @return $this
    */
    public function setQuotaLimit($quotaLimit)
    {
        $this->container['quotaLimit'] = $quotaLimit;
        return $this;
    }

    /**
    * Gets used
    *  已创建的资源个数
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已创建的资源个数
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets unit
    *  单位
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets regionId
    *  局点ID。若资源不涉及此参数，则不返回该参数。
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
    * @param string|null $regionId 局点ID。若资源不涉及此参数，则不返回该参数。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId 可用区ID。若资源不涉及此参数，则不返回该参数。
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
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

