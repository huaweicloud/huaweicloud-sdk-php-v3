<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoEnlargeStrategyForConsoleApi implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoEnlargeStrategyForConsoleApi';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * option  是否开启自动扩容。
    * limitSize  扩容上限，单位GB。“option”为true时，该参数必填。
    * triggerAvailablePercent  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    * stepPercent  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'option' => 'bool',
            'limitSize' => 'int',
            'triggerAvailablePercent' => 'int',
            'stepPercent' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * option  是否开启自动扩容。
    * limitSize  扩容上限，单位GB。“option”为true时，该参数必填。
    * triggerAvailablePercent  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    * stepPercent  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'option' => null,
        'limitSize' => 'int64',
        'triggerAvailablePercent' => 'int64',
        'stepPercent' => 'int64'
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
    * option  是否开启自动扩容。
    * limitSize  扩容上限，单位GB。“option”为true时，该参数必填。
    * triggerAvailablePercent  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    * stepPercent  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'option' => 'option',
            'limitSize' => 'limitSize',
            'triggerAvailablePercent' => 'triggerAvailablePercent',
            'stepPercent' => 'stepPercent'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * option  是否开启自动扩容。
    * limitSize  扩容上限，单位GB。“option”为true时，该参数必填。
    * triggerAvailablePercent  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    * stepPercent  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
    *
    * @var string[]
    */
    protected static $setters = [
            'option' => 'setOption',
            'limitSize' => 'setLimitSize',
            'triggerAvailablePercent' => 'setTriggerAvailablePercent',
            'stepPercent' => 'setStepPercent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * option  是否开启自动扩容。
    * limitSize  扩容上限，单位GB。“option”为true时，该参数必填。
    * triggerAvailablePercent  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    * stepPercent  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
    *
    * @var string[]
    */
    protected static $getters = [
            'option' => 'getOption',
            'limitSize' => 'getLimitSize',
            'triggerAvailablePercent' => 'getTriggerAvailablePercent',
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
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['limitSize'] = isset($data['limitSize']) ? $data['limitSize'] : null;
        $this->container['triggerAvailablePercent'] = isset($data['triggerAvailablePercent']) ? $data['triggerAvailablePercent'] : null;
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
    * Gets option
    *  是否开启自动扩容。
    *
    * @return bool|null
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param bool|null $option 是否开启自动扩容。
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
        return $this;
    }

    /**
    * Gets limitSize
    *  扩容上限，单位GB。“option”为true时，该参数必填。
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
    * @param int|null $limitSize 扩容上限，单位GB。“option”为true时，该参数必填。
    *
    * @return $this
    */
    public function setLimitSize($limitSize)
    {
        $this->container['limitSize'] = $limitSize;
        return $this;
    }

    /**
    * Gets triggerAvailablePercent
    *  可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    *
    * @return int|null
    */
    public function getTriggerAvailablePercent()
    {
        return $this->container['triggerAvailablePercent'];
    }

    /**
    * Sets triggerAvailablePercent
    *
    * @param int|null $triggerAvailablePercent 可用存储空间百分比，小于等于此值或者为10GB时触发扩容。“option”为true时，该参数必填。
    *
    * @return $this
    */
    public function setTriggerAvailablePercent($triggerAvailablePercent)
    {
        $this->container['triggerAvailablePercent'] = $triggerAvailablePercent;
        return $this;
    }

    /**
    * Gets stepPercent
    *  每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
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
    * @param int|null $stepPercent 每次自动扩容的步长，单位为百分比，即每次自动扩容当前存储空间的百分比。取值范围为5%~50%。
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

