<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetrieveEnterpriseMultiAccountReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetrieveEnterpriseMultiAccountReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * amount  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    * balanceType  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * expireTime  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'amount' => 'string',
            'transId' => 'string',
            'balanceType' => 'string',
            'expireTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * amount  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    * balanceType  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * expireTime  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'amount' => null,
        'transId' => null,
        'balanceType' => null,
        'expireTime' => null
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
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * amount  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    * balanceType  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * expireTime  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'amount' => 'amount',
            'transId' => 'trans_id',
            'balanceType' => 'balance_type',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * amount  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    * balanceType  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * expireTime  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'amount' => 'setAmount',
            'transId' => 'setTransId',
            'balanceType' => 'setBalanceType',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * amount  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    * balanceType  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    * expireTime  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'amount' => 'getAmount',
            'transId' => 'getTransId',
            'balanceType' => 'getBalanceType',
            'expireTime' => 'getExpireTime'
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
        $this->container['transId'] = isset($data['transId']) ? $data['transId'] : null;
        $this->container['balanceType'] = isset($data['balanceType']) ? $data['balanceType'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
            if ((mb_strlen($this->container['amount']) > 32)) {
                $invalidProperties[] = "invalid value for 'amount', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['amount']) < 1)) {
                $invalidProperties[] = "invalid value for 'amount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transId']) && (mb_strlen($this->container['transId']) > 32)) {
                $invalidProperties[] = "invalid value for 'transId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['transId']) && (mb_strlen($this->container['transId']) < 0)) {
                $invalidProperties[] = "invalid value for 'transId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['balanceType']) && (mb_strlen($this->container['balanceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'balanceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['balanceType']) && (mb_strlen($this->container['balanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'balanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
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
    *  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
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
    * @param string $customerId 企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
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
    *  总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    *
    * @return string
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string $amount 总回收金额。 金额单位为货币标准单位，如人民币则单位为元。取值大于0且精确到小数点后2位。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets transId
    *  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    *
    * @return string|null
    */
    public function getTransId()
    {
        return $this->container['transId'];
    }

    /**
    * Sets transId
    *
    * @param string|null $transId 交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一
    *
    * @return $this
    */
    public function setTransId($transId)
    {
        $this->container['transId'] = $transId;
        return $this;
    }

    /**
    * Gets balanceType
    *  账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    *
    * @return string|null
    */
    public function getBalanceType()
    {
        return $this->container['balanceType'];
    }

    /**
    * Sets balanceType
    *
    * @param string|null $balanceType 账户类型： BALANCE_TYPE_DEBIT：余额账户（默认）BALANCE_TYPE_CREDIT：信用账户
    *
    * @return $this
    */
    public function setBalanceType($balanceType)
    {
        $this->container['balanceType'] = $balanceType;
        return $this;
    }

    /**
    * Gets expireTime
    *  账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
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
    * @param string|null $expireTime 账户到期时间，UTC时间，格式为：2016-03-28T14:45:38Z。 暂只对信用账户有效，用于限制针对有效期到期时间等于该时间的信用账户余额进行回收。如果查询信用账户可回收余额的查询结果没有失效时间，表示永久有效，对于这种账本回收的情况无需填写。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

