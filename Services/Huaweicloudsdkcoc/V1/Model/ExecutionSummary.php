<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  工单Id
    * jobId  脚本执行Id
    * reportTime  报告时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'jobId' => 'string',
            'reportTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  工单Id
    * jobId  脚本执行Id
    * reportTime  报告时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'jobId' => null,
        'reportTime' => 'int64'
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
    * orderId  工单Id
    * jobId  脚本执行Id
    * reportTime  报告时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'jobId' => 'job_id',
            'reportTime' => 'report_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  工单Id
    * jobId  脚本执行Id
    * reportTime  报告时间
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'jobId' => 'setJobId',
            'reportTime' => 'setReportTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  工单Id
    * jobId  脚本执行Id
    * reportTime  报告时间
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'jobId' => 'getJobId',
            'reportTime' => 'getReportTime'
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
        $this->container['reportTime'] = isset($data['reportTime']) ? $data['reportTime'] : null;
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
    *  工单Id
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
    * @param string|null $orderId 工单Id
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
    *  脚本执行Id
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
    * @param string|null $jobId 脚本执行Id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets reportTime
    *  报告时间
    *
    * @return int|null
    */
    public function getReportTime()
    {
        return $this->container['reportTime'];
    }

    /**
    * Sets reportTime
    *
    * @param int|null $reportTime 报告时间
    *
    * @return $this
    */
    public function setReportTime($reportTime)
    {
        $this->container['reportTime'] = $reportTime;
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

