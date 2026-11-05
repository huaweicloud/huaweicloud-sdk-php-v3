<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSupabaseApplicationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSupabaseApplicationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  订单ID（包周期时返回）。
    * jobId  应用创建任务ID。
    * applicationId  Supabase应用ID。
    * instanceId  数据库实例ID。
    * instanceJobId  实例创建任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'jobId' => 'string',
            'applicationId' => 'string',
            'instanceId' => 'string',
            'instanceJobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  订单ID（包周期时返回）。
    * jobId  应用创建任务ID。
    * applicationId  Supabase应用ID。
    * instanceId  数据库实例ID。
    * instanceJobId  实例创建任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'jobId' => null,
        'applicationId' => null,
        'instanceId' => null,
        'instanceJobId' => null
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
    * orderId  订单ID（包周期时返回）。
    * jobId  应用创建任务ID。
    * applicationId  Supabase应用ID。
    * instanceId  数据库实例ID。
    * instanceJobId  实例创建任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'jobId' => 'job_id',
            'applicationId' => 'application_id',
            'instanceId' => 'instance_id',
            'instanceJobId' => 'instance_job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  订单ID（包周期时返回）。
    * jobId  应用创建任务ID。
    * applicationId  Supabase应用ID。
    * instanceId  数据库实例ID。
    * instanceJobId  实例创建任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'jobId' => 'setJobId',
            'applicationId' => 'setApplicationId',
            'instanceId' => 'setInstanceId',
            'instanceJobId' => 'setInstanceJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  订单ID（包周期时返回）。
    * jobId  应用创建任务ID。
    * applicationId  Supabase应用ID。
    * instanceId  数据库实例ID。
    * instanceJobId  实例创建任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'jobId' => 'getJobId',
            'applicationId' => 'getApplicationId',
            'instanceId' => 'getInstanceId',
            'instanceJobId' => 'getInstanceJobId'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceJobId'] = isset($data['instanceJobId']) ? $data['instanceJobId'] : null;
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
    * Gets orderId
    *  订单ID（包周期时返回）。
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
    * @param string|null $orderId 订单ID（包周期时返回）。
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
    *  应用创建任务ID。
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
    * @param string|null $jobId 应用创建任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets applicationId
    *  Supabase应用ID。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId Supabase应用ID。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets instanceId
    *  数据库实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 数据库实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceJobId
    *  实例创建任务ID。
    *
    * @return string|null
    */
    public function getInstanceJobId()
    {
        return $this->container['instanceJobId'];
    }

    /**
    * Sets instanceJobId
    *
    * @param string|null $instanceJobId 实例创建任务ID。
    *
    * @return $this
    */
    public function setInstanceJobId($instanceJobId)
    {
        $this->container['instanceJobId'] = $instanceJobId;
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

