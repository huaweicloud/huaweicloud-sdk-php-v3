<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingPolicyActionV1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingPolicyActionV1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    * instanceNumber  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    * instancePercentage  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'instanceNumber' => 'int',
            'instancePercentage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    * instanceNumber  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    * instancePercentage  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'instanceNumber' => 'int32',
        'instancePercentage' => null
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
    * operation  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    * instanceNumber  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    * instancePercentage  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'instanceNumber' => 'instance_number',
            'instancePercentage' => 'instance_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    * instanceNumber  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    * instancePercentage  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'instanceNumber' => 'setInstanceNumber',
            'instancePercentage' => 'setInstancePercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    * instanceNumber  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    * instancePercentage  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'instanceNumber' => 'getInstanceNumber',
            'instancePercentage' => 'getInstancePercentage'
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
        $this->container['instanceNumber'] = isset($data['instanceNumber']) ? $data['instanceNumber'] : null;
        $this->container['instancePercentage'] = isset($data['instancePercentage']) ? $data['instancePercentage'] : null;
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

            if (!is_null($this->container['instancePercentage']) && ($this->container['instancePercentage'] > 100)) {
                $invalidProperties[] = "invalid value for 'instancePercentage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['instancePercentage']) && ($this->container['instancePercentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'instancePercentage', must be bigger than or equal to 0.";
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
    *  操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
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
    * @param string|null $operation 操作选项。ADD：添加实例。REMOVE/REDUCE：移除实例。SET：设置实例数为
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets instanceNumber
    *  操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @return int|null
    */
    public function getInstanceNumber()
    {
        return $this->container['instanceNumber'];
    }

    /**
    * Sets instanceNumber
    *
    * @param int|null $instanceNumber 操作实例个数，默认为1。当配额为默认配额时，取值范围如下：  operation为SET时，取值范围为：0~300。 operation为ADD或REMOVE/REDUCE时，取值范围为：1~300。 说明： 配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @return $this
    */
    public function setInstanceNumber($instanceNumber)
    {
        $this->container['instanceNumber'] = $instanceNumber;
        return $this;
    }

    /**
    * Gets instancePercentage
    *  操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @return int|null
    */
    public function getInstancePercentage()
    {
        return $this->container['instancePercentage'];
    }

    /**
    * Sets instancePercentage
    *
    * @param int|null $instancePercentage 操作实例百分比，将伸缩组容量增加、减少或设置为伸缩组当前实例个数的百分比。操作为ADD或REMOVE/REDUCE时取值范围为1到20000的整数，操作为SET时取值范围为0到20000的整数。当instance_number和instance_percentage参数均无配置时，则操作实例个数为1。配置参数时，instance_number和instance_percentage参数只能选其中一个进行配置。
    *
    * @return $this
    */
    public function setInstancePercentage($instancePercentage)
    {
        $this->container['instancePercentage'] = $instancePercentage;
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

