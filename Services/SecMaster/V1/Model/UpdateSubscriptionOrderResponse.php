<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSubscriptionOrderResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSubscriptionOrderResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    * orderStatus  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'orderStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    * orderStatus  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'orderStatus' => 'int32'
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
    * orderId  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    * orderStatus  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'orderStatus' => 'order_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    * orderStatus  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'orderStatus' => 'setOrderStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    * orderStatus  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'orderStatus' => 'getOrderStatus'
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
    const ORDER_STATUS_1 = 1;
    const ORDER_STATUS_5 = 5;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_1,
            self::ORDER_STATUS_5,
        ];
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
        $this->container['orderStatus'] = isset($data['orderStatus']) ? $data['orderStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 2)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getOrderStatusAllowableValues();
                if (!is_null($this->container['orderStatus']) && !in_array($this->container['orderStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  创建或变更订单ID，只有scene为PREPAID时返回有此数据
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 创建或变更订单ID，只有scene为PREPAID时返回有此数据
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets orderStatus
    *  订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @return int|null
    */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
    * Sets orderStatus
    *
    * @param int|null $orderStatus 订单更新状态，1：变更订单成功，5，订单变更失败
    *
    * @return $this
    */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;
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

