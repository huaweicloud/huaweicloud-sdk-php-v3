<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CouponQuotaV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CouponQuotaV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaId  优惠券额度ID。
    * quotaType  优惠券额度的类型： 0：代金券额度1：现金券额度
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUpdateTime  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * quotaValue  优惠券额度的值，精确到小数点后2位。
    * quotaStatus  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    * balance  剩余的优惠券额度，精确到小数点后2位。
    * measureId  面额单位。 1：元。
    * currency  币种。 CNY：人民币
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * limitInfos  优惠券额度上的限制属性，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaId' => 'string',
            'quotaType' => 'int',
            'createTime' => 'string',
            'lastUpdateTime' => 'string',
            'quotaValue' => 'float',
            'quotaStatus' => 'int',
            'balance' => 'float',
            'measureId' => 'int',
            'currency' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'limitInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\QuotaLimitInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaId  优惠券额度ID。
    * quotaType  优惠券额度的类型： 0：代金券额度1：现金券额度
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUpdateTime  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * quotaValue  优惠券额度的值，精确到小数点后2位。
    * quotaStatus  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    * balance  剩余的优惠券额度，精确到小数点后2位。
    * measureId  面额单位。 1：元。
    * currency  币种。 CNY：人民币
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * limitInfos  优惠券额度上的限制属性，具体参见表2。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaId' => null,
        'quotaType' => 'int32',
        'createTime' => null,
        'lastUpdateTime' => null,
        'quotaValue' => 'bigdecimal',
        'quotaStatus' => 'int32',
        'balance' => 'bigdecimal',
        'measureId' => 'int32',
        'currency' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'limitInfos' => null
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
    * quotaId  优惠券额度ID。
    * quotaType  优惠券额度的类型： 0：代金券额度1：现金券额度
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUpdateTime  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * quotaValue  优惠券额度的值，精确到小数点后2位。
    * quotaStatus  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    * balance  剩余的优惠券额度，精确到小数点后2位。
    * measureId  面额单位。 1：元。
    * currency  币种。 CNY：人民币
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * limitInfos  优惠券额度上的限制属性，具体参见表2。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaId' => 'quota_id',
            'quotaType' => 'quota_type',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'quotaValue' => 'quota_value',
            'quotaStatus' => 'quota_status',
            'balance' => 'balance',
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'limitInfos' => 'limit_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaId  优惠券额度ID。
    * quotaType  优惠券额度的类型： 0：代金券额度1：现金券额度
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUpdateTime  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * quotaValue  优惠券额度的值，精确到小数点后2位。
    * quotaStatus  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    * balance  剩余的优惠券额度，精确到小数点后2位。
    * measureId  面额单位。 1：元。
    * currency  币种。 CNY：人民币
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * limitInfos  优惠券额度上的限制属性，具体参见表2。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaId' => 'setQuotaId',
            'quotaType' => 'setQuotaType',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'quotaValue' => 'setQuotaValue',
            'quotaStatus' => 'setQuotaStatus',
            'balance' => 'setBalance',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'limitInfos' => 'setLimitInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaId  优惠券额度ID。
    * quotaType  优惠券额度的类型： 0：代金券额度1：现金券额度
    * createTime  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * lastUpdateTime  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * quotaValue  优惠券额度的值，精确到小数点后2位。
    * quotaStatus  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    * balance  剩余的优惠券额度，精确到小数点后2位。
    * measureId  面额单位。 1：元。
    * currency  币种。 CNY：人民币
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * limitInfos  优惠券额度上的限制属性，具体参见表2。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaId' => 'getQuotaId',
            'quotaType' => 'getQuotaType',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'quotaValue' => 'getQuotaValue',
            'quotaStatus' => 'getQuotaStatus',
            'balance' => 'getBalance',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'limitInfos' => 'getLimitInfos'
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
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['quotaValue'] = isset($data['quotaValue']) ? $data['quotaValue'] : null;
        $this->container['quotaStatus'] = isset($data['quotaStatus']) ? $data['quotaStatus'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['limitInfos'] = isset($data['limitInfos']) ? $data['limitInfos'] : null;
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
    * Gets quotaId
    *  优惠券额度ID。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 优惠券额度ID。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets quotaType
    *  优惠券额度的类型： 0：代金券额度1：现金券额度
    *
    * @return int|null
    */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
    * Sets quotaType
    *
    * @param int|null $quotaType 优惠券额度的类型： 0：代金券额度1：现金券额度
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime 最后一次更新时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets quotaValue
    *  优惠券额度的值，精确到小数点后2位。
    *
    * @return float|null
    */
    public function getQuotaValue()
    {
        return $this->container['quotaValue'];
    }

    /**
    * Sets quotaValue
    *
    * @param float|null $quotaValue 优惠券额度的值，精确到小数点后2位。
    *
    * @return $this
    */
    public function setQuotaValue($quotaValue)
    {
        $this->container['quotaValue'] = $quotaValue;
        return $this;
    }

    /**
    * Gets quotaStatus
    *  优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    *
    * @return int|null
    */
    public function getQuotaStatus()
    {
        return $this->container['quotaStatus'];
    }

    /**
    * Sets quotaStatus
    *
    * @param int|null $quotaStatus 优惠券额度的状态： 0：正常3：失效（过期失效和人工设置失效）4：额度调整中（伙伴可以查看该额度，但不能使用该额度发放优惠券）5：冻结
    *
    * @return $this
    */
    public function setQuotaStatus($quotaStatus)
    {
        $this->container['quotaStatus'] = $quotaStatus;
        return $this;
    }

    /**
    * Gets balance
    *  剩余的优惠券额度，精确到小数点后2位。
    *
    * @return float|null
    */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
    * Sets balance
    *
    * @param float|null $balance 剩余的优惠券额度，精确到小数点后2位。
    *
    * @return $this
    */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;
        return $this;
    }

    /**
    * Gets measureId
    *  面额单位。 1：元。
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
    * @param int|null $measureId 面额单位。 1：元。
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
    *  币种。 CNY：人民币
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
    * @param string|null $currency 币种。 CNY：人民币
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets limitInfos
    *  优惠券额度上的限制属性，具体参见表2。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\QuotaLimitInfo[]|null
    */
    public function getLimitInfos()
    {
        return $this->container['limitInfos'];
    }

    /**
    * Sets limitInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\QuotaLimitInfo[]|null $limitInfos 优惠券额度上的限制属性，具体参见表2。
    *
    * @return $this
    */
    public function setLimitInfos($limitInfos)
    {
        $this->container['limitInfos'] = $limitInfos;
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

