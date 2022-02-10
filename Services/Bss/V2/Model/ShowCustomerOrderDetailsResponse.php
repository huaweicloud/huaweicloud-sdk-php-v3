<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCustomerOrderDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCustomerOrderDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  订单项个数。
    * orderInfo  orderInfo
    * orderLineItems  订单对应的订单项。 具体请参见表5。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'orderInfo' => '\HuaweiCloud\SDK\Bss\V2\Model\CustomerOrderV3',
            'orderLineItems' => '\HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemEntityV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  订单项个数。
    * orderInfo  orderInfo
    * orderLineItems  订单对应的订单项。 具体请参见表5。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'orderInfo' => null,
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
    * totalCount  订单项个数。
    * orderInfo  orderInfo
    * orderLineItems  订单对应的订单项。 具体请参见表5。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'orderInfo' => 'order_info',
            'orderLineItems' => 'order_line_items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  订单项个数。
    * orderInfo  orderInfo
    * orderLineItems  订单对应的订单项。 具体请参见表5。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'orderInfo' => 'setOrderInfo',
            'orderLineItems' => 'setOrderLineItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  订单项个数。
    * orderInfo  orderInfo
    * orderLineItems  订单对应的订单项。 具体请参见表5。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'orderInfo' => 'getOrderInfo',
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['orderInfo'] = isset($data['orderInfo']) ? $data['orderInfo'] : null;
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
    * Gets totalCount
    *  订单项个数。
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
    * @param int|null $totalCount 订单项个数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets orderInfo
    *  orderInfo
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CustomerOrderV3|null
    */
    public function getOrderInfo()
    {
        return $this->container['orderInfo'];
    }

    /**
    * Sets orderInfo
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CustomerOrderV3|null $orderInfo orderInfo
    *
    * @return $this
    */
    public function setOrderInfo($orderInfo)
    {
        $this->container['orderInfo'] = $orderInfo;
        return $this;
    }

    /**
    * Gets orderLineItems
    *  订单对应的订单项。 具体请参见表5。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemEntityV2[]|null
    */
    public function getOrderLineItems()
    {
        return $this->container['orderLineItems'];
    }

    /**
    * Sets orderLineItems
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\OrderLineItemEntityV2[]|null $orderLineItems 订单对应的订单项。 具体请参见表5。
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

