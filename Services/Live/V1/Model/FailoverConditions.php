<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FailoverConditions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FailoverConditions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputLossThresholdMsec  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    * inputPreference  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputLossThresholdMsec' => 'int',
            'inputPreference' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputLossThresholdMsec  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    * inputPreference  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputLossThresholdMsec' => null,
        'inputPreference' => null
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
    * inputLossThresholdMsec  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    * inputPreference  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputLossThresholdMsec' => 'input_loss_threshold_msec',
            'inputPreference' => 'input_preference'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputLossThresholdMsec  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    * inputPreference  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @var string[]
    */
    protected static $setters = [
            'inputLossThresholdMsec' => 'setInputLossThresholdMsec',
            'inputPreference' => 'setInputPreference'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputLossThresholdMsec  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    * inputPreference  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @var string[]
    */
    protected static $getters = [
            'inputLossThresholdMsec' => 'getInputLossThresholdMsec',
            'inputPreference' => 'getInputPreference'
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
    const INPUT_PREFERENCE_EQUAL = 'EQUAL';
    const INPUT_PREFERENCE_PRIMARY = 'PRIMARY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInputPreferenceAllowableValues()
    {
        return [
            self::INPUT_PREFERENCE_EQUAL,
            self::INPUT_PREFERENCE_PRIMARY,
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
        $this->container['inputLossThresholdMsec'] = isset($data['inputLossThresholdMsec']) ? $data['inputLossThresholdMsec'] : null;
        $this->container['inputPreference'] = isset($data['inputPreference']) ? $data['inputPreference'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['inputLossThresholdMsec']) && ($this->container['inputLossThresholdMsec'] > 3600000)) {
                $invalidProperties[] = "invalid value for 'inputLossThresholdMsec', must be smaller than or equal to 3600000.";
            }
            if (!is_null($this->container['inputLossThresholdMsec']) && ($this->container['inputLossThresholdMsec'] < 0)) {
                $invalidProperties[] = "invalid value for 'inputLossThresholdMsec', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInputPreferenceAllowableValues();
                if (!is_null($this->container['inputPreference']) && !in_array($this->container['inputPreference'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'inputPreference', must be one of '%s'",
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
    * Gets inputLossThresholdMsec
    *  入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    *
    * @return int|null
    */
    public function getInputLossThresholdMsec()
    {
        return $this->container['inputLossThresholdMsec'];
    }

    /**
    * Sets inputLossThresholdMsec
    *
    * @param int|null $inputLossThresholdMsec 入流停止的时长阈值。到达此阈值后，自动触发主备切换。  单位：毫秒，取值范围：0 - 3600000。  非必填，默认填2000ms。
    *
    * @return $this
    */
    public function setInputLossThresholdMsec($inputLossThresholdMsec)
    {
        $this->container['inputLossThresholdMsec'] = $inputLossThresholdMsec;
        return $this;
    }

    /**
    * Gets inputPreference
    *  以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @return string|null
    */
    public function getInputPreference()
    {
        return $this->container['inputPreference'];
    }

    /**
    * Sets inputPreference
    *
    * @param string|null $inputPreference 以主入流URL为第一优先级（PRIMARY）或主备URL平等切换（EQUAL）。  如果是平等切换时，使用的是备URL，不会自动切换至主URL。  非必填，默认值为EQUAL。
    *
    * @return $this
    */
    public function setInputPreference($inputPreference)
    {
        $this->container['inputPreference'] = $inputPreference;
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

