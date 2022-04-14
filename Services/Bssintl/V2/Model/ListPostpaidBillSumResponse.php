<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPostpaidBillSumResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPostpaidBillSumResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billCycle  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    * initialAmountDue  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    * consumeAmount  账单中的消费金额。
    * refunds  账单中的退款金额。
    * adjustments  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    * taxAmount  账单中的销项税金额，销项税不计入应还金额。
    * currency  只有成功才返回这个参数。 美金：USD
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billCycle' => 'string',
            'initialAmountDue' => 'double',
            'consumeAmount' => 'double',
            'refunds' => 'double',
            'adjustments' => 'double',
            'taxAmount' => 'double',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billCycle  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    * initialAmountDue  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    * consumeAmount  账单中的消费金额。
    * refunds  账单中的退款金额。
    * adjustments  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    * taxAmount  账单中的销项税金额，销项税不计入应还金额。
    * currency  只有成功才返回这个参数。 美金：USD
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billCycle' => null,
        'initialAmountDue' => 'double',
        'consumeAmount' => 'double',
        'refunds' => 'double',
        'adjustments' => 'double',
        'taxAmount' => 'double',
        'currency' => null
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
    * billCycle  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    * initialAmountDue  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    * consumeAmount  账单中的消费金额。
    * refunds  账单中的退款金额。
    * adjustments  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    * taxAmount  账单中的销项税金额，销项税不计入应还金额。
    * currency  只有成功才返回这个参数。 美金：USD
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billCycle' => 'bill_cycle',
            'initialAmountDue' => 'initial_amount_due',
            'consumeAmount' => 'consume_amount',
            'refunds' => 'refunds',
            'adjustments' => 'adjustments',
            'taxAmount' => 'tax_amount',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billCycle  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    * initialAmountDue  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    * consumeAmount  账单中的消费金额。
    * refunds  账单中的退款金额。
    * adjustments  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    * taxAmount  账单中的销项税金额，销项税不计入应还金额。
    * currency  只有成功才返回这个参数。 美金：USD
    *
    * @var string[]
    */
    protected static $setters = [
            'billCycle' => 'setBillCycle',
            'initialAmountDue' => 'setInitialAmountDue',
            'consumeAmount' => 'setConsumeAmount',
            'refunds' => 'setRefunds',
            'adjustments' => 'setAdjustments',
            'taxAmount' => 'setTaxAmount',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billCycle  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    * initialAmountDue  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    * consumeAmount  账单中的消费金额。
    * refunds  账单中的退款金额。
    * adjustments  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    * taxAmount  账单中的销项税金额，销项税不计入应还金额。
    * currency  只有成功才返回这个参数。 美金：USD
    *
    * @var string[]
    */
    protected static $getters = [
            'billCycle' => 'getBillCycle',
            'initialAmountDue' => 'getInitialAmountDue',
            'consumeAmount' => 'getConsumeAmount',
            'refunds' => 'getRefunds',
            'adjustments' => 'getAdjustments',
            'taxAmount' => 'getTaxAmount',
            'currency' => 'getCurrency'
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
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['initialAmountDue'] = isset($data['initialAmountDue']) ? $data['initialAmountDue'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['adjustments'] = isset($data['adjustments']) ? $data['adjustments'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
    * Gets billCycle
    *  账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    *
    * @return string|null
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string|null $billCycle 账单所归属的月份。只有成功才返回这个参数。 格式：YYYY-MM
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets initialAmountDue
    *  账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    *
    * @return double|null
    */
    public function getInitialAmountDue()
    {
        return $this->container['initialAmountDue'];
    }

    /**
    * Sets initialAmountDue
    *
    * @param double|null $initialAmountDue 账单中的应还金额（含税）。 应还金额（包含销项税）=消费金额+退款金额+调账金额
    *
    * @return $this
    */
    public function setInitialAmountDue($initialAmountDue)
    {
        $this->container['initialAmountDue'] = $initialAmountDue;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  账单中的消费金额。
    *
    * @return double|null
    */
    public function getConsumeAmount()
    {
        return $this->container['consumeAmount'];
    }

    /**
    * Sets consumeAmount
    *
    * @param double|null $consumeAmount 账单中的消费金额。
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets refunds
    *  账单中的退款金额。
    *
    * @return double|null
    */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
    * Sets refunds
    *
    * @param double|null $refunds 账单中的退款金额。
    *
    * @return $this
    */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;
        return $this;
    }

    /**
    * Gets adjustments
    *  账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    *
    * @return double|null
    */
    public function getAdjustments()
    {
        return $this->container['adjustments'];
    }

    /**
    * Sets adjustments
    *
    * @param double|null $adjustments 账单中的调账金额，即伙伴在账期内的调账信息如：欠款核销金额等。
    *
    * @return $this
    */
    public function setAdjustments($adjustments)
    {
        $this->container['adjustments'] = $adjustments;
        return $this;
    }

    /**
    * Gets taxAmount
    *  账单中的销项税金额，销项税不计入应还金额。
    *
    * @return double|null
    */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
    * Sets taxAmount
    *
    * @param double|null $taxAmount 账单中的销项税金额，销项税不计入应还金额。
    *
    * @return $this
    */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;
        return $this;
    }

    /**
    * Gets currency
    *  只有成功才返回这个参数。 美金：USD
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 只有成功才返回这个参数。 美金：USD
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
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

