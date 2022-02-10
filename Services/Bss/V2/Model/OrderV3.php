<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  可使用折扣的订单ID。
    * orderLineItems  可使用折扣的订单项列表，具体参见表4。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'orderLineItems' => '\HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  可使用折扣的订单ID。
    * orderLineItems  可使用折扣的订单项列表，具体参见表4。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'orderLineItems' => null
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
    * orderId  可使用折扣的订单ID。
    * orderLineItems  可使用折扣的订单项列表，具体参见表4。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'orderLineItems' => 'order_line_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  可使用折扣的订单ID。
    * orderLineItems  可使用折扣的订单项列表，具体参见表4。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'orderLineItems' => 'setOrderLineItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  可使用折扣的订单ID。
    * orderLineItems  可使用折扣的订单项列表，具体参见表4。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'orderLineItems' => 'getOrderLineItems'
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
        $this->container['orderLineItems'] = isset($data['orderLineItems']) ? $data['orderLineItems'] : null;
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
        if ($this->container['orderLineItems'] === null) {
            $invalidProperties[] = "'orderLineItems' can't be null";
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
    *  可使用折扣的订单ID。
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
    * @param string $orderId 可使用折扣的订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets orderLineItems
    *  可使用折扣的订单项列表，具体参见表4。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemV3[]
    */
    public function getOrderLineItems()
    {
        return $this->container['orderLineItems'];
    }

    /**
    * Sets orderLineItems
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemV3[] $orderLineItems 可使用折扣的订单项列表，具体参见表4。
    *
    * @return $this
    */
    public function setOrderLineItems($orderLineItems)
    {
        $this->container['orderLineItems'] = $orderLineItems;
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

