<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerModifyAutoEnlargePolicyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerModifyAutoEnlargePolicyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switchOption  是否开启自动扩容,true为开启,false为关闭
    * limitSize  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    * triggerThreshold  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    * stepPercent  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switchOption' => 'bool',
            'limitSize' => 'int',
            'triggerThreshold' => 'int',
            'stepPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switchOption  是否开启自动扩容,true为开启,false为关闭
    * limitSize  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    * triggerThreshold  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    * stepPercent  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switchOption' => null,
        'limitSize' => 'int32',
        'triggerThreshold' => 'int32',
        'stepPercent' => 'int32'
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
    * switchOption  是否开启自动扩容,true为开启,false为关闭
    * limitSize  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    * triggerThreshold  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    * stepPercent  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switchOption' => 'switch_option',
            'limitSize' => 'limit_size',
            'triggerThreshold' => 'trigger_threshold',
            'stepPercent' => 'step_percent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switchOption  是否开启自动扩容,true为开启,false为关闭
    * limitSize  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    * triggerThreshold  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    * stepPercent  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @var string[]
    */
    protected static $setters = [
            'switchOption' => 'setSwitchOption',
            'limitSize' => 'setLimitSize',
            'triggerThreshold' => 'setTriggerThreshold',
            'stepPercent' => 'setStepPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switchOption  是否开启自动扩容,true为开启,false为关闭
    * limitSize  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    * triggerThreshold  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    * stepPercent  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @var string[]
    */
    protected static $getters = [
            'switchOption' => 'getSwitchOption',
            'limitSize' => 'getLimitSize',
            'triggerThreshold' => 'getTriggerThreshold',
            'stepPercent' => 'getStepPercent'
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
    const TRIGGER_THRESHOLD_10 = 10;
    const TRIGGER_THRESHOLD_15 = 15;
    const TRIGGER_THRESHOLD_20 = 20;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerThresholdAllowableValues()
    {
        return [
            self::TRIGGER_THRESHOLD_10,
            self::TRIGGER_THRESHOLD_15,
            self::TRIGGER_THRESHOLD_20,
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
        $this->container['switchOption'] = isset($data['switchOption']) ? $data['switchOption'] : null;
        $this->container['limitSize'] = isset($data['limitSize']) ? $data['limitSize'] : null;
        $this->container['triggerThreshold'] = isset($data['triggerThreshold']) ? $data['triggerThreshold'] : null;
        $this->container['stepPercent'] = isset($data['stepPercent']) ? $data['stepPercent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['switchOption'] === null) {
            $invalidProperties[] = "'switchOption' can't be null";
        }
            $allowedValues = $this->getTriggerThresholdAllowableValues();
                if (!is_null($this->container['triggerThreshold']) && !in_array($this->container['triggerThreshold'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerThreshold', must be one of '%s'",
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
    * Gets switchOption
    *  是否开启自动扩容,true为开启,false为关闭
    *
    * @return bool
    */
    public function getSwitchOption()
    {
        return $this->container['switchOption'];
    }

    /**
    * Sets switchOption
    *
    * @param bool $switchOption 是否开启自动扩容,true为开启,false为关闭
    *
    * @return $this
    */
    public function setSwitchOption($switchOption)
    {
        $this->container['switchOption'] = $switchOption;
        return $this;
    }

    /**
    * Gets limitSize
    *  扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    *
    * @return int|null
    */
    public function getLimitSize()
    {
        return $this->container['limitSize'];
    }

    /**
    * Sets limitSize
    *
    * @param int|null $limitSize 扩容上限，单位GB, 取值范围40~4000，需要大于等于实例当前存储空间总大小，switch_option为true必填
    *
    * @return $this
    */
    public function setLimitSize($limitSize)
    {
        $this->container['limitSize'] = $limitSize;
        return $this;
    }

    /**
    * Gets triggerThreshold
    *  可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    *
    * @return int|null
    */
    public function getTriggerThreshold()
    {
        return $this->container['triggerThreshold'];
    }

    /**
    * Sets triggerThreshold
    *
    * @param int|null $triggerThreshold 可用存储空间百分比，小于等于此值或者10GB时触发扩容，switch_option为true时必填
    *
    * @return $this
    */
    public function setTriggerThreshold($triggerThreshold)
    {
        $this->container['triggerThreshold'] = $triggerThreshold;
        return $this;
    }

    /**
    * Gets stepPercent
    *  每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @return int|null
    */
    public function getStepPercent()
    {
        return $this->container['stepPercent'];
    }

    /**
    * Sets stepPercent
    *
    * @param int|null $stepPercent 每次自动扩容的百分比步长，取值范围5~50，开启自定义步长功能时必填
    *
    * @return $this
    */
    public function setStepPercent($stepPercent)
    {
        $this->container['stepPercent'] = $stepPercent;
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

