<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdjustAccountReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdjustAccountReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'amount' => 'float',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'amount' => 'bigdecimal',
        'indirectPartnerId' => null
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
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'amount' => 'amount',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'amount' => 'setAmount',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'amount' => 'getAmount',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if ((mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['customerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
            if (($this->container['amount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['amount'] < 0)) {
                $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets customerId
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets amount
    *  拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    *
    * @return float
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float $amount 拨款金额。 单位：元。取值大于0且精确到小数点后2位。 注意该值不能大于“查询伙伴账户余额”接口响应消息表2中参数amount - designated_amount的值。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 云经销商（二级经销商）给子客户拨款时，需携带该参数。除此之外，该参数不做处理。  说明： 该参数存在的情况下，如果结果返回余额不足，表示对应的二级经销商的余额不足。如果该参数不存在，则余额不足表示调用的伙伴自身账号的余额不足。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

