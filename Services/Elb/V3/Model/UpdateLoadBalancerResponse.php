<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLoadBalancerResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLoadBalancerResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    * loadbalancerId  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * orderId  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * requestId  请求ID。  注：自动生成 。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancer' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancer',
            'loadbalancerId' => 'string',
            'orderId' => 'string',
            'requestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    * loadbalancerId  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * orderId  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * requestId  请求ID。  注：自动生成 。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancer' => null,
        'loadbalancerId' => null,
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
    * loadbalancer  loadbalancer
    * loadbalancerId  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * orderId  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * requestId  请求ID。  注：自动生成 。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancer' => 'loadbalancer',
            'loadbalancerId' => 'loadbalancer_id',
            'orderId' => 'order_id',
            'requestId' => 'request_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancer  loadbalancer
    * loadbalancerId  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * orderId  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * requestId  请求ID。  注：自动生成 。
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancer' => 'setLoadbalancer',
            'loadbalancerId' => 'setLoadbalancerId',
            'orderId' => 'setOrderId',
            'requestId' => 'setRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancer  loadbalancer
    * loadbalancerId  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * orderId  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * requestId  请求ID。  注：自动生成 。
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancer' => 'getLoadbalancer',
            'loadbalancerId' => 'getLoadbalancerId',
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
        $this->container['loadbalancer'] = isset($data['loadbalancer']) ? $data['loadbalancer'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
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
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 36)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
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
    * Gets loadbalancer
    *  loadbalancer
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancer|null
    */
    public function getLoadbalancer()
    {
        return $this->container['loadbalancer'];
    }

    /**
    * Sets loadbalancer
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancer|null $loadbalancer loadbalancer
    *
    * @return $this
    */
    public function setLoadbalancer($loadbalancer)
    {
        $this->container['loadbalancer'] = $loadbalancer;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 负载均衡器的id（包周期场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
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
    * @param string|null $orderId 订单号（包周期规格变更场景返回该字段）  [不支持该字段，请勿使用](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
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
    *  请求ID。  注：自动生成 。
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
    * @param string|null $requestId 请求ID。  注：自动生成 。
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

