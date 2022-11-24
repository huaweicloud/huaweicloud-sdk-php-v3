<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingPolicyActionV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingPolicyActionV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'size' => 'int',
            'percentage' => 'int',
            'limits' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'size' => null,
        'percentage' => null,
        'limits' => 'int32'
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
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'size' => 'size',
            'percentage' => 'percentage',
            'limits' => 'limits'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'size' => 'setSize',
            'percentage' => 'setPercentage',
            'limits' => 'setLimits'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    * size  操作大小，取值范围为0到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size为实例个数,取值范围为0-300的整数，默认为1。当scaling_resource_type为BANDWIDTH时，size表示带宽大小，单位为Mbit/s，取值范围为1到300的整数，默认为1。当scaling_resource_type为SCALING_GROUP时，size和percentage参数只能选其中一个进行配置。
    * percentage  操作百分比，取值为0到20000的整数。当scaling_resource_type为SCALING_GROUP时，size和instance_percentage参数均无配置，则size默认为1。当scaling_resource_type为BANDWIDTH时，不支持配置instance_percentage参数。
    * limits  操作限制。当scaling_resource_type为BANDWIDTH，且operation不为SET时，limits参数生效，单位为Mbit/s。此时，当operation为ADD时，limits表示带宽可调整的上限；当operation为REDUCE时，limits表示带宽可调整的下限。
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'size' => 'getSize',
            'percentage' => 'getPercentage',
            'limits' => 'getLimits'
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
    const OPERATION_ADD = 'ADD';
    const OPERATION_REMOVE = 'REMOVE';
    const OPERATION_REDUCE = 'REDUCE';
    const OPERATION_SET = 'SET';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_ADD,
            self::OPERATION_REMOVE,
            self::OPERATION_REDUCE,
            self::OPERATION_SET,
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getOperationAllowableValues();
                if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['size']) && ($this->container['size'] > 300)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 20000)) {
                $invalidProperties[] = "invalid value for 'percentage', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'percentage', must be bigger than or equal to 0.";
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
    * Gets operation
    *  操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
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
    * @param string|null $operation 操作选项，默认为ADD。 当scaling_resource_type为SCALING_GROUP，支持如下操作： - ADD：增加 - REMOVE/REDUCE：减少 - SET：设置为 当scaling_resource_type为BANDWIDTH，支持如下操作： - ADD：增加 - REDUCE：减少 - SET：设置为
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
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

