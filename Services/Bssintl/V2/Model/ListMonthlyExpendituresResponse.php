<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMonthlyExpendituresResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMonthlyExpendituresResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorCode  返回码
    * errorMsg  返回码描述
    * currency  货币单位代码 USD：美元
    * totalCount  总条数
    * totalAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * cashcouponAmount  现金券金额，预留。
    * storedcardAmount  储值卡金额，预留。
    * debitAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billSums  账单记录，具体参考表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'currency' => 'string',
            'totalCount' => 'int',
            'totalAmount' => 'float',
            'debtAmount' => 'float',
            'couponAmount' => 'float',
            'cashcouponAmount' => 'float',
            'storedcardAmount' => 'float',
            'debitAmount' => 'float',
            'creditAmount' => 'float',
            'measureId' => 'int',
            'billSums' => '\HuaweiCloud\SDK\Bssintl\V2\Model\BillSumRecordInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorCode  返回码
    * errorMsg  返回码描述
    * currency  货币单位代码 USD：美元
    * totalCount  总条数
    * totalAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * cashcouponAmount  现金券金额，预留。
    * storedcardAmount  储值卡金额，预留。
    * debitAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billSums  账单记录，具体参考表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorCode' => null,
        'errorMsg' => null,
        'currency' => null,
        'totalCount' => 'int32',
        'totalAmount' => 'bigdecimal',
        'debtAmount' => 'bigdecimal',
        'couponAmount' => 'bigdecimal',
        'cashcouponAmount' => 'bigdecimal',
        'storedcardAmount' => 'bigdecimal',
        'debitAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'measureId' => 'int32',
        'billSums' => null
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
    * errorCode  返回码
    * errorMsg  返回码描述
    * currency  货币单位代码 USD：美元
    * totalCount  总条数
    * totalAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * cashcouponAmount  现金券金额，预留。
    * storedcardAmount  储值卡金额，预留。
    * debitAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billSums  账单记录，具体参考表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'currency' => 'currency',
            'totalCount' => 'total_count',
            'totalAmount' => 'total_amount',
            'debtAmount' => 'debt_amount',
            'couponAmount' => 'coupon_amount',
            'cashcouponAmount' => 'cashcoupon_amount',
            'storedcardAmount' => 'storedcard_amount',
            'debitAmount' => 'debit_amount',
            'creditAmount' => 'credit_amount',
            'measureId' => 'measure_id',
            'billSums' => 'bill_sums'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorCode  返回码
    * errorMsg  返回码描述
    * currency  货币单位代码 USD：美元
    * totalCount  总条数
    * totalAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * cashcouponAmount  现金券金额，预留。
    * storedcardAmount  储值卡金额，预留。
    * debitAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billSums  账单记录，具体参考表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'currency' => 'setCurrency',
            'totalCount' => 'setTotalCount',
            'totalAmount' => 'setTotalAmount',
            'debtAmount' => 'setDebtAmount',
            'couponAmount' => 'setCouponAmount',
            'cashcouponAmount' => 'setCashcouponAmount',
            'storedcardAmount' => 'setStoredcardAmount',
            'debitAmount' => 'setDebitAmount',
            'creditAmount' => 'setCreditAmount',
            'measureId' => 'setMeasureId',
            'billSums' => 'setBillSums'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorCode  返回码
    * errorMsg  返回码描述
    * currency  货币单位代码 USD：美元
    * totalCount  总条数
    * totalAmount  总金额（包含退订）。
    * debtAmount  总欠费金额。
    * couponAmount  代金券金额。
    * cashcouponAmount  现金券金额，预留。
    * storedcardAmount  储值卡金额，预留。
    * debitAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billSums  账单记录，具体参考表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'currency' => 'getCurrency',
            'totalCount' => 'getTotalCount',
            'totalAmount' => 'getTotalAmount',
            'debtAmount' => 'getDebtAmount',
            'couponAmount' => 'getCouponAmount',
            'cashcouponAmount' => 'getCashcouponAmount',
            'storedcardAmount' => 'getStoredcardAmount',
            'debitAmount' => 'getDebitAmount',
            'creditAmount' => 'getCreditAmount',
            'measureId' => 'getMeasureId',
            'billSums' => 'getBillSums'
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['cashcouponAmount'] = isset($data['cashcouponAmount']) ? $data['cashcouponAmount'] : null;
        $this->container['storedcardAmount'] = isset($data['storedcardAmount']) ? $data['storedcardAmount'] : null;
        $this->container['debitAmount'] = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['billSums'] = isset($data['billSums']) ? $data['billSums'] : null;
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
    * Gets errorCode
    *  返回码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 返回码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  返回码描述
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 返回码描述
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets currency
    *  货币单位代码 USD：美元
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
    * @param string|null $currency 货币单位代码 USD：美元
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets totalCount
    *  总条数
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
    * @param int|null $totalCount 总条数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets totalAmount
    *  总金额（包含退订）。
    *
    * @return float|null
    */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
    * Sets totalAmount
    *
    * @param float|null $totalAmount 总金额（包含退订）。
    *
    * @return $this
    */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;
        return $this;
    }

    /**
    * Gets debtAmount
    *  总欠费金额。
    *
    * @return float|null
    */
    public function getDebtAmount()
    {
        return $this->container['debtAmount'];
    }

    /**
    * Sets debtAmount
    *
    * @param float|null $debtAmount 总欠费金额。
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
    * @return float|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param float|null $couponAmount 代金券金额。
    *
    * @return $this
    */
    public function setCouponAmount($couponAmount)
    {
        $this->container['couponAmount'] = $couponAmount;
        return $this;
    }

    /**
    * Gets cashcouponAmount
    *  现金券金额，预留。
    *
    * @return float|null
    */
    public function getCashcouponAmount()
    {
        return $this->container['cashcouponAmount'];
    }

    /**
    * Sets cashcouponAmount
    *
    * @param float|null $cashcouponAmount 现金券金额，预留。
    *
    * @return $this
    */
    public function setCashcouponAmount($cashcouponAmount)
    {
        $this->container['cashcouponAmount'] = $cashcouponAmount;
        return $this;
    }

    /**
    * Gets storedcardAmount
    *  储值卡金额，预留。
    *
    * @return float|null
    */
    public function getStoredcardAmount()
    {
        return $this->container['storedcardAmount'];
    }

    /**
    * Sets storedcardAmount
    *
    * @param float|null $storedcardAmount 储值卡金额，预留。
    *
    * @return $this
    */
    public function setStoredcardAmount($storedcardAmount)
    {
        $this->container['storedcardAmount'] = $storedcardAmount;
        return $this;
    }

    /**
    * Gets debitAmount
    *  现金账户金额。
    *
    * @return float|null
    */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
    * Sets debitAmount
    *
    * @param float|null $debitAmount 现金账户金额。
    *
    * @return $this
    */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;
        return $this;
    }

    /**
    * Gets creditAmount
    *  信用账户金额。
    *
    * @return float|null
    */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
    * Sets creditAmount
    *
    * @param float|null $creditAmount 信用账户金额。
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位。 1：元3：分 默认值为3。
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
    * @param int|null $measureId 金额单位。 1：元3：分 默认值为3。
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets billSums
    *  账单记录，具体参考表3。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\BillSumRecordInfo[]|null
    */
    public function getBillSums()
    {
        return $this->container['billSums'];
    }

    /**
    * Sets billSums
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\BillSumRecordInfo[]|null $billSums 账单记录，具体参考表3。
    *
    * @return $this
    */
    public function setBillSums($billSums)
    {
        $this->container['billSums'] = $billSums;
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

