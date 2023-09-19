<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cluster  cluster
    * orderId  订单号。若创建的是包周期集群，则只返回ordeld参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cluster' => '\HuaweiCloud\SDK\Css\V1\Model\CreateClusterClusterResponse',
            'orderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cluster  cluster
    * orderId  订单号。若创建的是包周期集群，则只返回ordeld参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cluster' => null,
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
    * cluster  cluster
    * orderId  订单号。若创建的是包周期集群，则只返回ordeld参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cluster' => 'cluster',
            'orderId' => 'orderId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cluster  cluster
    * orderId  订单号。若创建的是包周期集群，则只返回ordeld参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'cluster' => 'setCluster',
            'orderId' => 'setOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cluster  cluster
    * orderId  订单号。若创建的是包周期集群，则只返回ordeld参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'cluster' => 'getCluster',
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
        $this->container['cluster'] = isset($data['cluster']) ? $data['cluster'] : null;
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
    * Gets cluster
    *  cluster
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\CreateClusterClusterResponse|null
    */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
    * Sets cluster
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\CreateClusterClusterResponse|null $cluster cluster
    *
    * @return $this
    */
    public function setCluster($cluster)
    {
        $this->container['cluster'] = $cluster;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号。若创建的是包周期集群，则只返回ordeld参数。
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
    * @param string|null $orderId 订单号。若创建的是包周期集群，则只返回ordeld参数。
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

