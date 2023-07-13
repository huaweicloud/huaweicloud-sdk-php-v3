<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OfficialWebsiteRatingResultV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OfficialWebsiteRatingResultV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * officialWebsiteAmount  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'officialWebsiteAmount' => 'string',
            'installmentOfficialWebsiteAmount' => 'string',
            'installmentPeriodType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * officialWebsiteAmount  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'officialWebsiteAmount' => null,
        'installmentOfficialWebsiteAmount' => null,
        'installmentPeriodType' => 'int32'
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
    * officialWebsiteAmount  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'officialWebsiteAmount' => 'official_website_amount',
            'installmentOfficialWebsiteAmount' => 'installment_official_website_amount',
            'installmentPeriodType' => 'installment_period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * officialWebsiteAmount  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $setters = [
            'officialWebsiteAmount' => 'setOfficialWebsiteAmount',
            'installmentOfficialWebsiteAmount' => 'setInstallmentOfficialWebsiteAmount',
            'installmentPeriodType' => 'setInstallmentPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * officialWebsiteAmount  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    * installmentOfficialWebsiteAmount  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    * installmentPeriodType  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @var string[]
    */
    protected static $getters = [
            'officialWebsiteAmount' => 'getOfficialWebsiteAmount',
            'installmentOfficialWebsiteAmount' => 'getInstallmentOfficialWebsiteAmount',
            'installmentPeriodType' => 'getInstallmentPeriodType'
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
        $this->container['officialWebsiteAmount'] = isset($data['officialWebsiteAmount']) ? $data['officialWebsiteAmount'] : null;
        $this->container['installmentOfficialWebsiteAmount'] = isset($data['installmentOfficialWebsiteAmount']) ? $data['installmentOfficialWebsiteAmount'] : null;
        $this->container['installmentPeriodType'] = isset($data['installmentPeriodType']) ? $data['installmentPeriodType'] : null;
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
    * Gets officialWebsiteAmount
    *  |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    *
    * @return string|null
    */
    public function getOfficialWebsiteAmount()
    {
        return $this->container['officialWebsiteAmount'];
    }

    /**
    * Sets officialWebsiteAmount
    *
    * @param string|null $officialWebsiteAmount |参数名称：官网价格。单位为元| |参数约束及描述：官网价格。单位为元|
    *
    * @return $this
    */
    public function setOfficialWebsiteAmount($officialWebsiteAmount)
    {
        $this->container['officialWebsiteAmount'] = $officialWebsiteAmount;
        return $this;
    }

    /**
    * Gets installmentOfficialWebsiteAmount
    *  |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    *
    * @return string|null
    */
    public function getInstallmentOfficialWebsiteAmount()
    {
        return $this->container['installmentOfficialWebsiteAmount'];
    }

    /**
    * Sets installmentOfficialWebsiteAmount
    *
    * @param string|null $installmentOfficialWebsiteAmount |参数名称：分期金额的官网价。单位为元| |参数约束及描述：分期金额的官网价。单位为元|
    *
    * @return $this
    */
    public function setInstallmentOfficialWebsiteAmount($installmentOfficialWebsiteAmount)
    {
        $this->container['installmentOfficialWebsiteAmount'] = $installmentOfficialWebsiteAmount;
        return $this;
    }

    /**
    * Gets installmentPeriodType
    *  |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @return int|null
    */
    public function getInstallmentPeriodType()
    {
        return $this->container['installmentPeriodType'];
    }

    /**
    * Sets installmentPeriodType
    *
    * @param int|null $installmentPeriodType |参数名称：分期付款的周期类型。2：月| |参数的约束及描述：分期付款的周期类型。2：月|
    *
    * @return $this
    */
    public function setInstallmentPeriodType($installmentPeriodType)
    {
        $this->container['installmentPeriodType'] = $installmentPeriodType;
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

