<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CbcOrderResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CbcOrderResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceId  云服务ID
    * orderId  订单ID
    * subscribeResult  订购结果，1：成功；0：失败
    * resourceId  包周期资源预生成资源id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceId' => 'string',
            'orderId' => 'string',
            'subscribeResult' => 'int',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceId  云服务ID
    * orderId  订单ID
    * subscribeResult  订购结果，1：成功；0：失败
    * resourceId  包周期资源预生成资源id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceId' => null,
        'orderId' => null,
        'subscribeResult' => 'int32',
        'resourceId' => null
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
    * cloudServiceId  云服务ID
    * orderId  订单ID
    * subscribeResult  订购结果，1：成功；0：失败
    * resourceId  包周期资源预生成资源id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceId' => 'cloudServiceId',
            'orderId' => 'orderId',
            'subscribeResult' => 'subscribeResult',
            'resourceId' => 'resourceId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceId  云服务ID
    * orderId  订单ID
    * subscribeResult  订购结果，1：成功；0：失败
    * resourceId  包周期资源预生成资源id。
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceId' => 'setCloudServiceId',
            'orderId' => 'setOrderId',
            'subscribeResult' => 'setSubscribeResult',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceId  云服务ID
    * orderId  订单ID
    * subscribeResult  订购结果，1：成功；0：失败
    * resourceId  包周期资源预生成资源id。
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceId' => 'getCloudServiceId',
            'orderId' => 'getOrderId',
            'subscribeResult' => 'getSubscribeResult',
            'resourceId' => 'getResourceId'
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
        $this->container['cloudServiceId'] = isset($data['cloudServiceId']) ? $data['cloudServiceId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['subscribeResult'] = isset($data['subscribeResult']) ? $data['subscribeResult'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
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
        if ($this->container['subscribeResult'] === null) {
            $invalidProperties[] = "'subscribeResult' can't be null";
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
    * Gets cloudServiceId
    *  云服务ID
    *
    * @return string|null
    */
    public function getCloudServiceId()
    {
        return $this->container['cloudServiceId'];
    }

    /**
    * Sets cloudServiceId
    *
    * @param string|null $cloudServiceId 云服务ID
    *
    * @return $this
    */
    public function setCloudServiceId($cloudServiceId)
    {
        $this->container['cloudServiceId'] = $cloudServiceId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID
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
    * @param string $orderId 订单ID
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets subscribeResult
    *  订购结果，1：成功；0：失败
    *
    * @return int
    */
    public function getSubscribeResult()
    {
        return $this->container['subscribeResult'];
    }

    /**
    * Sets subscribeResult
    *
    * @param int $subscribeResult 订购结果，1：成功；0：失败
    *
    * @return $this
    */
    public function setSubscribeResult($subscribeResult)
    {
        $this->container['subscribeResult'] = $subscribeResult;
        return $this;
    }

    /**
    * Gets resourceId
    *  包周期资源预生成资源id。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 包周期资源预生成资源id。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

