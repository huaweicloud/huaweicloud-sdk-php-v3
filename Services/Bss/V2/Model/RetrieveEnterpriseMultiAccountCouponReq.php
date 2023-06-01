<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetrieveEnterpriseMultiAccountCouponReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetrieveEnterpriseMultiAccountCouponReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * couponId  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    * subCouponId  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'couponId' => 'string',
            'subCouponId' => 'string',
            'transId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * couponId  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    * subCouponId  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'couponId' => null,
        'subCouponId' => null,
        'transId' => null
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
    * couponId  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    * subCouponId  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'couponId' => 'coupon_id',
            'subCouponId' => 'sub_coupon_id',
            'transId' => 'trans_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * couponId  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    * subCouponId  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'couponId' => 'setCouponId',
            'subCouponId' => 'setSubCouponId',
            'transId' => 'setTransId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  企业子账号的客户ID。您可以调用查询企业子账号列表接口，获取响应参数“id”的返回值。
    * couponId  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    * subCouponId  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    * transId  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'couponId' => 'getCouponId',
            'subCouponId' => 'getSubCouponId',
            'transId' => 'getTransId'
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
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['subCouponId'] = isset($data['subCouponId']) ? $data['subCouponId'] : null;
        $this->container['transId'] = isset($data['transId']) ? $data['transId'] : null;
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
        if ($this->container['couponId'] === null) {
            $invalidProperties[] = "'couponId' can't be null";
        }
            if ((mb_strlen($this->container['couponId']) > 64)) {
                $invalidProperties[] = "invalid value for 'couponId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['couponId']) < 1)) {
                $invalidProperties[] = "invalid value for 'couponId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['subCouponId'] === null) {
            $invalidProperties[] = "'subCouponId' can't be null";
        }
            if ((mb_strlen($this->container['subCouponId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subCouponId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['subCouponId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subCouponId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transId']) && (mb_strlen($this->container['transId']) > 32)) {
                $invalidProperties[] = "invalid value for 'transId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['transId']) && (mb_strlen($this->container['transId']) < 0)) {
                $invalidProperties[] = "invalid value for 'transId', the character length must be bigger than or equal to 0.";
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
    * Gets couponId
    *  优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    *
    * @return string
    */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
    * Sets couponId
    *
    * @param string $couponId 优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“coupon_id”的返回值。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets subCouponId
    *  子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    *
    * @return string
    */
    public function getSubCouponId()
    {
        return $this->container['subCouponId'];
    }

    /**
    * Sets subCouponId
    *
    * @param string $subCouponId 子优惠券ID。您可以调用查询企业子账号可回收优惠券列表接口，获取响应参数“sub_coupon_id”的返回值。
    *
    * @return $this
    */
    public function setSubCouponId($subCouponId)
    {
        $this->container['subCouponId'] = $subCouponId;
        return $this;
    }

    /**
    * Gets transId
    *  交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
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
    * @param string|null $transId 交易序列号，用于防止重复提交。 如果接口调用方不传，则企业管理微服务后台生成如果接口调用方传入，则请采用UUID保证全局唯一 此参数不携带或携带值为null或携带值为空串时，由系统自动生成。
    *
    * @return $this
    */
    public function setTransId($transId)
    {
        $this->container['transId'] = $transId;
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

