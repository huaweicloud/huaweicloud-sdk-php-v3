<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCustomerMonthlySumResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCustomerMonthlySumResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  总条数，必须大于等于0。
    * billSums  账单记录，具体参考表2。
    * consumeAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * writeoffAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'billSums' => '\HuaweiCloud\SDK\Bss\V2\Model\BillSumRecordInfoV2[]',
            'consumeAmount' => 'double',
            'debtAmount' => 'double',
            'couponAmount' => 'double',
            'flexipurchaseCouponAmount' => 'double',
            'storedValueCardAmount' => 'double',
            'cashAmount' => 'double',
            'creditAmount' => 'double',
            'writeoffAmount' => 'double',
            'measureId' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  总条数，必须大于等于0。
    * billSums  账单记录，具体参考表2。
    * consumeAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * writeoffAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'billSums' => null,
        'consumeAmount' => 'double',
        'debtAmount' => 'double',
        'couponAmount' => 'double',
        'flexipurchaseCouponAmount' => 'double',
        'storedValueCardAmount' => 'double',
        'cashAmount' => 'double',
        'creditAmount' => 'double',
        'writeoffAmount' => 'double',
        'measureId' => 'int32',
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
    * totalCount  总条数，必须大于等于0。
    * billSums  账单记录，具体参考表2。
    * consumeAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * writeoffAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'billSums' => 'bill_sums',
            'consumeAmount' => 'consume_amount',
            'debtAmount' => 'debt_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedValueCardAmount' => 'stored_value_card_amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'writeoffAmount' => 'writeoff_amount',
            'measureId' => 'measure_id',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  总条数，必须大于等于0。
    * billSums  账单记录，具体参考表2。
    * consumeAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * writeoffAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'billSums' => 'setBillSums',
            'consumeAmount' => 'setConsumeAmount',
            'debtAmount' => 'setDebtAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'setStoredValueCardAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'writeoffAmount' => 'setWriteoffAmount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  总条数，必须大于等于0。
    * billSums  账单记录，具体参考表2。
    * consumeAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * writeoffAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * currency  币种。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'billSums' => 'getBillSums',
            'consumeAmount' => 'getConsumeAmount',
            'debtAmount' => 'getDebtAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'getStoredValueCardAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'writeoffAmount' => 'getWriteoffAmount',
            'measureId' => 'getMeasureId',
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['billSums'] = isset($data['billSums']) ? $data['billSums'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedValueCardAmount'] = isset($data['storedValueCardAmount']) ? $data['storedValueCardAmount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['writeoffAmount'] = isset($data['writeoffAmount']) ? $data['writeoffAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
    * Gets totalCount
    *  总条数，必须大于等于0。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总条数，必须大于等于0。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets billSums
    *  账单记录，具体参考表2。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\BillSumRecordInfoV2[]|null
    */
    public function getBillSums()
    {
        return $this->container['billSums'];
    }

    /**
    * Sets billSums
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\BillSumRecordInfoV2[]|null $billSums 账单记录，具体参考表2。
    *
    * @return $this
    */
    public function setBillSums($billSums)
    {
        $this->container['billSums'] = $billSums;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  总金额（包含退订）。
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
    * @param double|null $consumeAmount 总金额（包含退订）。
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets debtAmount
    *  总欠费金额。
    *
    * @return double|null
    */
    public function getDebtAmount()
    {
        return $this->container['debtAmount'];
    }

    /**
    * Sets debtAmount
    *
    * @param double|null $debtAmount 总欠费金额。
    *
    * @return $this
    */
    public function setDebtAmount($debtAmount)
    {
        $this->container['debtAmount'] = $debtAmount;
        return $this;
    }

    /**
    * Gets couponAmount
    *  代金券金额。
    *
    * @return double|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param double|null $couponAmount 代金券金额。
    *
    * @return $this
    */
    public function setCouponAmount($couponAmount)
    {
        $this->container['couponAmount'] = $couponAmount;
        return $this;
    }

    /**
    * Gets flexipurchaseCouponAmount
    *  现金券金额，预留。
    *
    * @return double|null
    */
    public function getFlexipurchaseCouponAmount()
    {
        return $this->container['flexipurchaseCouponAmount'];
    }

    /**
    * Sets flexipurchaseCouponAmount
    *
    * @param double|null $flexipurchaseCouponAmount 现金券金额，预留。
    *
    * @return $this
    */
    public function setFlexipurchaseCouponAmount($flexipurchaseCouponAmount)
    {
        $this->container['flexipurchaseCouponAmount'] = $flexipurchaseCouponAmount;
        return $this;
    }

    /**
    * Gets storedValueCardAmount
    *  储值卡金额，预留。
    *
    * @return double|null
    */
    public function getStoredValueCardAmount()
    {
        return $this->container['storedValueCardAmount'];
    }

    /**
    * Sets storedValueCardAmount
    *
    * @param double|null $storedValueCardAmount 储值卡金额，预留。
    *
    * @return $this
    */
    public function setStoredValueCardAmount($storedValueCardAmount)
    {
        $this->container['storedValueCardAmount'] = $storedValueCardAmount;
        return $this;
    }

    /**
    * Gets cashAmount
    *  现金账户金额。
    *
    * @return double|null
    */
    public function getCashAmount()
    {
        return $this->container['cashAmount'];
    }

    /**
    * Sets cashAmount
    *
    * @param double|null $cashAmount 现金账户金额。
    *
    * @return $this
    */
    public function setCashAmount($cashAmount)
    {
        $this->container['cashAmount'] = $cashAmount;
        return $this;
    }

    /**
    * Gets creditAmount
    *  信用账户金额。
    *
    * @return double|null
    */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
    * Sets creditAmount
    *
    * @param double|null $creditAmount 信用账户金额。
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets writeoffAmount
    *  欠费核销金额。
    *
    * @return double|null
    */
    public function getWriteoffAmount()
    {
        return $this->container['writeoffAmount'];
    }

    /**
    * Sets writeoffAmount
    *
    * @param double|null $writeoffAmount 欠费核销金额。
    *
    * @return $this
    */
    public function setWriteoffAmount($writeoffAmount)
    {
        $this->container['writeoffAmount'] = $writeoffAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位。 1：元
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 金额单位。 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets currency
    *  币种。 CNY：人民币。
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
    * @param string|null $currency 币种。 CNY：人民币。
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

