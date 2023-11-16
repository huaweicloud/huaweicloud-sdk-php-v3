<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFuncReservedInstanceMetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFuncReservedInstanceMetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceNum  弹性实例指标
    * reservedInstanceNum  预留实例指标
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceNum' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'reservedInstanceNum' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceNum  弹性实例指标
    * reservedInstanceNum  预留实例指标
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceNum' => null,
        'reservedInstanceNum' => null
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
    * instanceNum  弹性实例指标
    * reservedInstanceNum  预留实例指标
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceNum' => 'instanceNum',
            'reservedInstanceNum' => 'reservedInstanceNum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceNum  弹性实例指标
    * reservedInstanceNum  预留实例指标
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceNum' => 'setInstanceNum',
            'reservedInstanceNum' => 'setReservedInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceNum  弹性实例指标
    * reservedInstanceNum  预留实例指标
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceNum' => 'getInstanceNum',
            'reservedInstanceNum' => 'getReservedInstanceNum'
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
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['reservedInstanceNum'] = isset($data['reservedInstanceNum']) ? $data['reservedInstanceNum'] : null;
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
    * Gets instanceNum
    *  弹性实例指标
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $instanceNum 弹性实例指标
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets reservedInstanceNum
    *  预留实例指标
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getReservedInstanceNum()
    {
        return $this->container['reservedInstanceNum'];
    }

    /**
    * Sets reservedInstanceNum
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $reservedInstanceNum 预留实例指标
    *
    * @return $this
    */
    public function setReservedInstanceNum($reservedInstanceNum)
    {
        $this->container['reservedInstanceNum'] = $reservedInstanceNum;
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

