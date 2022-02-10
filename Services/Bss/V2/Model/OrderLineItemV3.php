<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderLineItemV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderLineItemV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderLineItemIds  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    * discountMode  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    * discountAmount  订单可用的折扣金额（即减免金额）。
    * discountRatio  订单可用的折扣比例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderLineItemIds' => 'string[]',
            'discountMode' => 'int',
            'discountAmount' => 'double',
            'discountRatio' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderLineItemIds  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    * discountMode  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    * discountAmount  订单可用的折扣金额（即减免金额）。
    * discountRatio  订单可用的折扣比例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderLineItemIds' => null,
        'discountMode' => 'int32',
        'discountAmount' => 'double',
        'discountRatio' => 'double'
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
    * orderLineItemIds  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    * discountMode  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    * discountAmount  订单可用的折扣金额（即减免金额）。
    * discountRatio  订单可用的折扣比例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderLineItemIds' => 'order_line_item_ids',
            'discountMode' => 'discount_mode',
            'discountAmount' => 'discount_amount',
            'discountRatio' => 'discount_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderLineItemIds  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    * discountMode  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    * discountAmount  订单可用的折扣金额（即减免金额）。
    * discountRatio  订单可用的折扣比例。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderLineItemIds' => 'setOrderLineItemIds',
            'discountMode' => 'setDiscountMode',
            'discountAmount' => 'setDiscountAmount',
            'discountRatio' => 'setDiscountRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderLineItemIds  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    * discountMode  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    * discountAmount  订单可用的折扣金额（即减免金额）。
    * discountRatio  订单可用的折扣比例。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderLineItemIds' => 'getOrderLineItemIds',
            'discountMode' => 'getDiscountMode',
            'discountAmount' => 'getDiscountAmount',
            'discountRatio' => 'getDiscountRatio'
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
        $this->container['orderLineItemIds'] = isset($data['orderLineItemIds']) ? $data['orderLineItemIds'] : null;
        $this->container['discountMode'] = isset($data['discountMode']) ? $data['discountMode'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountRatio'] = isset($data['discountRatio']) ? $data['discountRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['orderLineItemIds'] === null) {
            $invalidProperties[] = "'orderLineItemIds' can't be null";
        }
        if ($this->container['discountMode'] === null) {
            $invalidProperties[] = "'discountMode' can't be null";
        }
        if ($this->container['discountAmount'] === null) {
            $invalidProperties[] = "'discountAmount' can't be null";
        }
        if ($this->container['discountRatio'] === null) {
            $invalidProperties[] = "'discountRatio' can't be null";
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
    * Gets orderLineItemIds
    *  可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    *
    * @return string[]
    */
    public function getOrderLineItemIds()
    {
        return $this->container['orderLineItemIds'];
    }

    /**
    * Sets orderLineItemIds
    *
    * @param string[] $orderLineItemIds 可使用相同折扣的订单项合并后的订单项ID列表。 相同产品、相同规格（对于线性产品）、相同最终价格（例如，严选产品改价）的订单项将进行合并。
    *
    * @return $this
    */
    public function setOrderLineItemIds($orderLineItemIds)
    {
        $this->container['orderLineItemIds'] = $orderLineItemIds;
        return $this;
    }

    /**
    * Gets discountMode
    *  订单可用折扣的模式 。 0：折扣1：一口价2：满减
    *
    * @return int
    */
    public function getDiscountMode()
    {
        return $this->container['discountMode'];
    }

    /**
    * Sets discountMode
    *
    * @param int $discountMode 订单可用折扣的模式 。 0：折扣1：一口价2：满减
    *
    * @return $this
    */
    public function setDiscountMode($discountMode)
    {
        $this->container['discountMode'] = $discountMode;
        return $this;
    }

    /**
    * Gets discountAmount
    *  订单可用的折扣金额（即减免金额）。
    *
    * @return double
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param double $discountAmount 订单可用的折扣金额（即减免金额）。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets discountRatio
    *  订单可用的折扣比例。
    *
    * @return double
    */
    public function getDiscountRatio()
    {
        return $this->container['discountRatio'];
    }

    /**
    * Sets discountRatio
    *
    * @param double $discountRatio 订单可用的折扣比例。
    *
    * @return $this
    */
    public function setDiscountRatio($discountRatio)
    {
        $this->container['discountRatio'] = $discountRatio;
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

