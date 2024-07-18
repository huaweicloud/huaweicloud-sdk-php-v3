<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntervalAlarmActionsV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntervalAlarmActionsV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * lowerBound  lowerBound
    * upperBound  upperBound
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'limits' => 'int',
            'size' => 'int',
            'lowerBound' => 'double',
            'upperBound' => 'double',
            'percentage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * lowerBound  lowerBound
    * upperBound  upperBound
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'limits' => 'int32',
        'size' => 'int32',
        'lowerBound' => 'double',
        'upperBound' => 'double',
        'percentage' => 'int32'
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
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * lowerBound  lowerBound
    * upperBound  upperBound
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'limits' => 'limits',
            'size' => 'size',
            'lowerBound' => 'lower_bound',
            'upperBound' => 'upper_bound',
            'percentage' => 'percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * lowerBound  lowerBound
    * upperBound  upperBound
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'limits' => 'setLimits',
            'size' => 'setSize',
            'lowerBound' => 'setLowerBound',
            'upperBound' => 'setUpperBound',
            'percentage' => 'setPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * lowerBound  lowerBound
    * upperBound  upperBound
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'limits' => 'getLimits',
            'size' => 'getSize',
            'lowerBound' => 'getLowerBound',
            'upperBound' => 'getUpperBound',
            'percentage' => 'getPercentage'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['lowerBound'] = isset($data['lowerBound']) ? $data['lowerBound'] : null;
        $this->container['upperBound'] = isset($data['upperBound']) ? $data['upperBound'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
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
    * Gets operation
    *  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： ADD：增加 REMOVE/REDUCE：减少 SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： ADD：增加 REDUCE：减少
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets limits
    *  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @return int|null
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param int|null $limits 操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
        return $this;
    }

    /**
    * Gets size
    *  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets lowerBound
    *  lowerBound
    *
    * @return double|null
    */
    public function getLowerBound()
    {
        return $this->container['lowerBound'];
    }

    /**
    * Sets lowerBound
    *
    * @param double|null $lowerBound lowerBound
    *
    * @return $this
    */
    public function setLowerBound($lowerBound)
    {
        $this->container['lowerBound'] = $lowerBound;
        return $this;
    }

    /**
    * Gets upperBound
    *  upperBound
    *
    * @return double|null
    */
    public function getUpperBound()
    {
        return $this->container['upperBound'];
    }

    /**
    * Sets upperBound
    *
    * @param double|null $upperBound upperBound
    *
    * @return $this
    */
    public function setUpperBound($upperBound)
    {
        $this->container['upperBound'] = $upperBound;
        return $this;
    }

    /**
    * Gets percentage
    *  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @return int|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param int|null $percentage 操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
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

