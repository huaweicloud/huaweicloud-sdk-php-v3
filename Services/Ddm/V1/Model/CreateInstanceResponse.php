<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID，创建按需付费实例时返回该参数。
    * orderId  订单号，创建包年/包月实例时返回该参数。
    * jobId  任务id，创建按需付费实例时返回该参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'orderId' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID，创建按需付费实例时返回该参数。
    * orderId  订单号，创建包年/包月实例时返回该参数。
    * jobId  任务id，创建按需付费实例时返回该参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'orderId' => null,
        'jobId' => null
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
    * id  实例ID，创建按需付费实例时返回该参数。
    * orderId  订单号，创建包年/包月实例时返回该参数。
    * jobId  任务id，创建按需付费实例时返回该参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'orderId' => 'order_id',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID，创建按需付费实例时返回该参数。
    * orderId  订单号，创建包年/包月实例时返回该参数。
    * jobId  任务id，创建按需付费实例时返回该参数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'orderId' => 'setOrderId',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID，创建按需付费实例时返回该参数。
    * orderId  订单号，创建包年/包月实例时返回该参数。
    * jobId  任务id，创建按需付费实例时返回该参数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'orderId' => 'getOrderId',
            'jobId' => 'getJobId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && !preg_match("/[A-Za-z0-9-]*$/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /[A-Za-z0-9-]*$/.";
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
    * Gets id
    *  实例ID，创建按需付费实例时返回该参数。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID，创建按需付费实例时返回该参数。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号，创建包年/包月实例时返回该参数。
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
    * @param string|null $orderId 订单号，创建包年/包月实例时返回该参数。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id，创建按需付费实例时返回该参数
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
    * @param string|null $jobId 任务id，创建按需付费实例时返回该参数
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

