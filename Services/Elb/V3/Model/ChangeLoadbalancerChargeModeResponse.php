<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeLoadbalancerChargeModeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeLoadbalancerChargeModeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipIdList  转包周期下单成功的EIP ID列表
    * loadbalancerIdList  转包周期下单成功的LB ID列表
    * orderId  转包周期订单号
    * requestId  请求的UUIID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipIdList' => 'string[]',
            'loadbalancerIdList' => 'string[]',
            'orderId' => 'string',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipIdList  转包周期下单成功的EIP ID列表
    * loadbalancerIdList  转包周期下单成功的LB ID列表
    * orderId  转包周期订单号
    * requestId  请求的UUIID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipIdList' => null,
        'loadbalancerIdList' => null,
        'orderId' => null,
        'requestId' => null
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
    * eipIdList  转包周期下单成功的EIP ID列表
    * loadbalancerIdList  转包周期下单成功的LB ID列表
    * orderId  转包周期订单号
    * requestId  请求的UUIID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipIdList' => 'eip_id_list',
            'loadbalancerIdList' => 'loadbalancer_id_list',
            'orderId' => 'order_id',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipIdList  转包周期下单成功的EIP ID列表
    * loadbalancerIdList  转包周期下单成功的LB ID列表
    * orderId  转包周期订单号
    * requestId  请求的UUIID
    *
    * @var string[]
    */
    protected static $setters = [
            'eipIdList' => 'setEipIdList',
            'loadbalancerIdList' => 'setLoadbalancerIdList',
            'orderId' => 'setOrderId',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipIdList  转包周期下单成功的EIP ID列表
    * loadbalancerIdList  转包周期下单成功的LB ID列表
    * orderId  转包周期订单号
    * requestId  请求的UUIID
    *
    * @var string[]
    */
    protected static $getters = [
            'eipIdList' => 'getEipIdList',
            'loadbalancerIdList' => 'getLoadbalancerIdList',
            'orderId' => 'getOrderId',
            'requestId' => 'getRequestId'
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
        $this->container['eipIdList'] = isset($data['eipIdList']) ? $data['eipIdList'] : null;
        $this->container['loadbalancerIdList'] = isset($data['loadbalancerIdList']) ? $data['loadbalancerIdList'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
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
    * Gets eipIdList
    *  转包周期下单成功的EIP ID列表
    *
    * @return string[]|null
    */
    public function getEipIdList()
    {
        return $this->container['eipIdList'];
    }

    /**
    * Sets eipIdList
    *
    * @param string[]|null $eipIdList 转包周期下单成功的EIP ID列表
    *
    * @return $this
    */
    public function setEipIdList($eipIdList)
    {
        $this->container['eipIdList'] = $eipIdList;
        return $this;
    }

    /**
    * Gets loadbalancerIdList
    *  转包周期下单成功的LB ID列表
    *
    * @return string[]|null
    */
    public function getLoadbalancerIdList()
    {
        return $this->container['loadbalancerIdList'];
    }

    /**
    * Sets loadbalancerIdList
    *
    * @param string[]|null $loadbalancerIdList 转包周期下单成功的LB ID列表
    *
    * @return $this
    */
    public function setLoadbalancerIdList($loadbalancerIdList)
    {
        $this->container['loadbalancerIdList'] = $loadbalancerIdList;
        return $this;
    }

    /**
    * Gets orderId
    *  转包周期订单号
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
    * @param string|null $orderId 转包周期订单号
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets requestId
    *  请求的UUIID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求的UUIID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
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

