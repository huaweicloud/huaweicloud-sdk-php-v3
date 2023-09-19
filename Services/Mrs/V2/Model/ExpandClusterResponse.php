<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandClusterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    * orderId  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    * orderId  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'orderId' => null
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
    * result  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    * orderId  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'orderId' => 'order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    * orderId  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    * orderId  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'orderId' => 'getOrderId'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
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
    * Gets result
    *  请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 请求操作结果，succeeded为操作成功，failed为操作失败。非包周期节点组扩容请求下发成功时，会包含该字段且内容为success。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
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
    * @param string|null $orderId 订单ID。对包周期节点组进行扩容时，会返回本次扩容产生的订单ID，需要客户到订单支付页面进行自主支付才能真正触发扩容。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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

