<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiscountInfoV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiscountInfoV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discountId  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    * discountValue  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    * discountType  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    * orders  可使用折扣的订单列表。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discountId' => 'string',
            'discountValue' => 'string',
            'discountType' => 'int',
            'orders' => '\HuaweiCloud\SDK\Bssintl\V2\Model\OrderV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discountId  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    * discountValue  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    * discountType  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    * orders  可使用折扣的订单列表。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discountId' => null,
        'discountValue' => null,
        'discountType' => 'int32',
        'orders' => null
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
    * discountId  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    * discountValue  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    * discountType  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    * orders  可使用折扣的订单列表。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discountId' => 'discount_id',
            'discountValue' => 'discount_value',
            'discountType' => 'discount_type',
            'orders' => 'orders'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discountId  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    * discountValue  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    * discountType  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    * orders  可使用折扣的订单列表。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'discountId' => 'setDiscountId',
            'discountValue' => 'setDiscountValue',
            'discountType' => 'setDiscountType',
            'orders' => 'setOrders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discountId  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    * discountValue  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    * discountType  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    * orders  可使用折扣的订单列表。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'discountId' => 'getDiscountId',
            'discountValue' => 'getDiscountValue',
            'discountType' => 'getDiscountType',
            'orders' => 'getOrders'
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
        $this->container['discountId'] = isset($data['discountId']) ? $data['discountId'] : null;
        $this->container['discountValue'] = isset($data['discountValue']) ? $data['discountValue'] : null;
        $this->container['discountType'] = isset($data['discountType']) ? $data['discountType'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['discountId'] === null) {
            $invalidProperties[] = "'discountId' can't be null";
        }
        if ($this->container['discountValue'] === null) {
            $invalidProperties[] = "'discountValue' can't be null";
        }
        if ($this->container['discountType'] === null) {
            $invalidProperties[] = "'discountType' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
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
    * Gets discountId
    *  订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    *
    * @return string
    */
    public function getDiscountId()
    {
        return $this->container['discountId'];
    }

    /**
    * Sets discountId
    *
    * @param string $discountId 订单的可用折扣ID。 支付订单时，输入该参数的值，即可使用折扣。
    *
    * @return $this
    */
    public function setDiscountId($discountId)
    {
        $this->container['discountId'] = $discountId;
        return $this;
    }

    /**
    * Gets discountValue
    *  折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    *
    * @return string
    */
    public function getDiscountValue()
    {
        return $this->container['discountValue'];
    }

    /**
    * Sets discountValue
    *
    * @param string $discountValue 折扣率或者满减值，如果折扣模式是一口价，这个值为空。
    *
    * @return $this
    */
    public function setDiscountValue($discountValue)
    {
        $this->container['discountValue'] = $discountValue;
        return $this;
    }

    /**
    * Gets discountType
    *  折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    *
    * @return int
    */
    public function getDiscountType()
    {
        return $this->container['discountType'];
    }

    /**
    * Sets discountType
    *
    * @param int $discountType 折扣类型，取值为 0：促销折扣1：合同折扣2：商务优惠3：合作伙伴授予折扣609：订单调价折扣
    *
    * @return $this
    */
    public function setDiscountType($discountType)
    {
        $this->container['discountType'] = $discountType;
        return $this;
    }

    /**
    * Gets orders
    *  可使用折扣的订单列表。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\OrderV3[]
    */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
    * Sets orders
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\OrderV3[] $orders 可使用折扣的订单列表。 具体请参见表3。
    *
    * @return $this
    */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;
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

