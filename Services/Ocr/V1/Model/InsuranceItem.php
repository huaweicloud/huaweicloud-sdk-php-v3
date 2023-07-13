<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InsuranceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InsuranceItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * insuranceName  insuranceName
    * insurancePeriod  insurancePeriod
    * insuranceAmount  insuranceAmount
    * paymentFrequency  paymentFrequency
    * paymentPeriod  paymentPeriod
    * paymentAmount  paymentAmount
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'insuranceName' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insurancePeriod' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'insuranceAmount' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'paymentFrequency' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'paymentPeriod' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail',
            'paymentAmount' => '\HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * insuranceName  insuranceName
    * insurancePeriod  insurancePeriod
    * insuranceAmount  insuranceAmount
    * paymentFrequency  paymentFrequency
    * paymentPeriod  paymentPeriod
    * paymentAmount  paymentAmount
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'insuranceName' => null,
        'insurancePeriod' => null,
        'insuranceAmount' => null,
        'paymentFrequency' => null,
        'paymentPeriod' => null,
        'paymentAmount' => null
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
    * insuranceName  insuranceName
    * insurancePeriod  insurancePeriod
    * insuranceAmount  insuranceAmount
    * paymentFrequency  paymentFrequency
    * paymentPeriod  paymentPeriod
    * paymentAmount  paymentAmount
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'insuranceName' => 'insurance_name',
            'insurancePeriod' => 'insurance_period',
            'insuranceAmount' => 'insurance_amount',
            'paymentFrequency' => 'payment_frequency',
            'paymentPeriod' => 'payment_period',
            'paymentAmount' => 'payment_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * insuranceName  insuranceName
    * insurancePeriod  insurancePeriod
    * insuranceAmount  insuranceAmount
    * paymentFrequency  paymentFrequency
    * paymentPeriod  paymentPeriod
    * paymentAmount  paymentAmount
    *
    * @var string[]
    */
    protected static $setters = [
            'insuranceName' => 'setInsuranceName',
            'insurancePeriod' => 'setInsurancePeriod',
            'insuranceAmount' => 'setInsuranceAmount',
            'paymentFrequency' => 'setPaymentFrequency',
            'paymentPeriod' => 'setPaymentPeriod',
            'paymentAmount' => 'setPaymentAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * insuranceName  insuranceName
    * insurancePeriod  insurancePeriod
    * insuranceAmount  insuranceAmount
    * paymentFrequency  paymentFrequency
    * paymentPeriod  paymentPeriod
    * paymentAmount  paymentAmount
    *
    * @var string[]
    */
    protected static $getters = [
            'insuranceName' => 'getInsuranceName',
            'insurancePeriod' => 'getInsurancePeriod',
            'insuranceAmount' => 'getInsuranceAmount',
            'paymentFrequency' => 'getPaymentFrequency',
            'paymentPeriod' => 'getPaymentPeriod',
            'paymentAmount' => 'getPaymentAmount'
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
        $this->container['insuranceName'] = isset($data['insuranceName']) ? $data['insuranceName'] : null;
        $this->container['insurancePeriod'] = isset($data['insurancePeriod']) ? $data['insurancePeriod'] : null;
        $this->container['insuranceAmount'] = isset($data['insuranceAmount']) ? $data['insuranceAmount'] : null;
        $this->container['paymentFrequency'] = isset($data['paymentFrequency']) ? $data['paymentFrequency'] : null;
        $this->container['paymentPeriod'] = isset($data['paymentPeriod']) ? $data['paymentPeriod'] : null;
        $this->container['paymentAmount'] = isset($data['paymentAmount']) ? $data['paymentAmount'] : null;
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
    * Gets insuranceName
    *  insuranceName
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsuranceName()
    {
        return $this->container['insuranceName'];
    }

    /**
    * Sets insuranceName
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insuranceName insuranceName
    *
    * @return $this
    */
    public function setInsuranceName($insuranceName)
    {
        $this->container['insuranceName'] = $insuranceName;
        return $this;
    }

    /**
    * Gets insurancePeriod
    *  insurancePeriod
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsurancePeriod()
    {
        return $this->container['insurancePeriod'];
    }

    /**
    * Sets insurancePeriod
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insurancePeriod insurancePeriod
    *
    * @return $this
    */
    public function setInsurancePeriod($insurancePeriod)
    {
        $this->container['insurancePeriod'] = $insurancePeriod;
        return $this;
    }

    /**
    * Gets insuranceAmount
    *  insuranceAmount
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getInsuranceAmount()
    {
        return $this->container['insuranceAmount'];
    }

    /**
    * Sets insuranceAmount
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $insuranceAmount insuranceAmount
    *
    * @return $this
    */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->container['insuranceAmount'] = $insuranceAmount;
        return $this;
    }

    /**
    * Gets paymentFrequency
    *  paymentFrequency
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getPaymentFrequency()
    {
        return $this->container['paymentFrequency'];
    }

    /**
    * Sets paymentFrequency
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $paymentFrequency paymentFrequency
    *
    * @return $this
    */
    public function setPaymentFrequency($paymentFrequency)
    {
        $this->container['paymentFrequency'] = $paymentFrequency;
        return $this;
    }

    /**
    * Gets paymentPeriod
    *  paymentPeriod
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getPaymentPeriod()
    {
        return $this->container['paymentPeriod'];
    }

    /**
    * Sets paymentPeriod
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $paymentPeriod paymentPeriod
    *
    * @return $this
    */
    public function setPaymentPeriod($paymentPeriod)
    {
        $this->container['paymentPeriod'] = $paymentPeriod;
        return $this;
    }

    /**
    * Gets paymentAmount
    *  paymentAmount
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null
    */
    public function getPaymentAmount()
    {
        return $this->container['paymentAmount'];
    }

    /**
    * Sets paymentAmount
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\InsurancePolicyDetail|null $paymentAmount paymentAmount
    *
    * @return $this
    */
    public function setPaymentAmount($paymentAmount)
    {
        $this->container['paymentAmount'] = $paymentAmount;
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

