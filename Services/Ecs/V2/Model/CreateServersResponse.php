<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServersResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServersResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    * orderId  订单号，创建包年包月的弹性云服务器时返回该参数。
    * serverIds  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'orderId' => 'string',
            'serverIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    * orderId  订单号，创建包年包月的弹性云服务器时返回该参数。
    * serverIds  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'orderId' => null,
        'serverIds' => null
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
    * jobId  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    * orderId  订单号，创建包年包月的弹性云服务器时返回该参数。
    * serverIds  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'orderId' => 'order_id',
            'serverIds' => 'serverIds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    * orderId  订单号，创建包年包月的弹性云服务器时返回该参数。
    * serverIds  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'orderId' => 'setOrderId',
            'serverIds' => 'setServerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    * orderId  订单号，创建包年包月的弹性云服务器时返回该参数。
    * serverIds  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'orderId' => 'getOrderId',
            'serverIds' => 'getServerIds'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['serverIds'] = isset($data['serverIds']) ? $data['serverIds'] : null;
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
    * Gets jobId
    *  提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 提交任务成功后返回的任务ID，用户可以使用该ID对任务执行情况进行查询。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号，创建包年包月的弹性云服务器时返回该参数。
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
    * @param string|null $orderId 订单号，创建包年包月的弹性云服务器时返回该参数。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets serverIds
    *  云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @return string[]|null
    */
    public function getServerIds()
    {
        return $this->container['serverIds'];
    }

    /**
    * Sets serverIds
    *
    * @param string[]|null $serverIds 云服务器ID列表。  通过云服务器ID查询云服务器详情 ，若返回404 可能云服务器还在创建或者已经创建失败。
    *
    * @return $this
    */
    public function setServerIds($serverIds)
    {
        $this->container['serverIds'] = $serverIds;
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

