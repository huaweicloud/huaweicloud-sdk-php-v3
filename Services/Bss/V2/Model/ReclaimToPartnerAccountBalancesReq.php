<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReclaimToPartnerAccountBalancesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReclaimToPartnerAccountBalancesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'amount' => 'double',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * amount  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'amount' => 'double',
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
    * amount  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
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
    * amount  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
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
    * amount  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
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
    *  回收的金额。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @return double
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param double $amount 回收的金额。 单位：元。取值大于0且精确到小数点后2位。
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
    *  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
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
    * @param string|null $indirectPartnerId 精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。 华为云伙伴能力中心（一级经销商）回收精英服务商（二级经销商）的子客户账户余额时，需携带此参数；否则只能回收自己的子客户账户余额。
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

