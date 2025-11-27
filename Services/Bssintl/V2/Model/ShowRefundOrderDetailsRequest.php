<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRefundOrderDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRefundOrderDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  退订订单或者降配订单的ID。
    * customerId  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    * indirectPartnerId  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'customerId' => 'string',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  退订订单或者降配订单的ID。
    * customerId  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    * indirectPartnerId  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'customerId' => null,
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
    * orderId  退订订单或者降配订单的ID。
    * customerId  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    * indirectPartnerId  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'customerId' => 'customer_id',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  退订订单或者降配订单的ID。
    * customerId  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    * indirectPartnerId  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'customerId' => 'setCustomerId',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  退订订单或者降配订单的ID。
    * customerId  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    * indirectPartnerId  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'customerId' => 'getCustomerId',
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
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
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 0.";
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
    * Gets orderId
    *  退订订单或者降配订单的ID。
    *
    * @return string
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string $orderId 退订订单或者降配订单的ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户账号ID，非必填，范围限制:0-64，伙伴查询子客户退款订单的金额详情必须携带该字段。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
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
    * @param string|null $indirectPartnerId 云经销商ID，非必填，范围限制:0-64，如果华为云总经销商（一级经销商）需要查询云经销商的子客户退款订单的金额详情必须携带该字段。除此之外，此参数不做处理。|
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

