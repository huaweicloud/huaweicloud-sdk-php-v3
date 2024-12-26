<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpsUpdateTimeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpsUpdateTimeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * errorCode  errorCode
    * errorDescription  errorDescription
    * failReason  failReason
    * jobId  jobId
    * orderId  orderId
    * traceId  traceId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleUpdateTimeVO[]',
            'errorCode' => 'string',
            'errorDescription' => 'string',
            'failReason' => 'string',
            'jobId' => 'string',
            'orderId' => 'string',
            'traceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * errorCode  errorCode
    * errorDescription  errorDescription
    * failReason  failReason
    * jobId  jobId
    * orderId  orderId
    * traceId  traceId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'errorCode' => null,
        'errorDescription' => null,
        'failReason' => null,
        'jobId' => null,
        'orderId' => null,
        'traceId' => null
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
    * data  data
    * errorCode  errorCode
    * errorDescription  errorDescription
    * failReason  failReason
    * jobId  jobId
    * orderId  orderId
    * traceId  traceId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'errorCode' => 'error_code',
            'errorDescription' => 'error_description',
            'failReason' => 'fail_reason',
            'jobId' => 'job_id',
            'orderId' => 'order_id',
            'traceId' => 'trace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * errorCode  errorCode
    * errorDescription  errorDescription
    * failReason  failReason
    * jobId  jobId
    * orderId  orderId
    * traceId  traceId
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'errorCode' => 'setErrorCode',
            'errorDescription' => 'setErrorDescription',
            'failReason' => 'setFailReason',
            'jobId' => 'setJobId',
            'orderId' => 'setOrderId',
            'traceId' => 'setTraceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * errorCode  errorCode
    * errorDescription  errorDescription
    * failReason  failReason
    * jobId  jobId
    * orderId  orderId
    * traceId  traceId
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'errorCode' => 'getErrorCode',
            'errorDescription' => 'getErrorDescription',
            'failReason' => 'getFailReason',
            'jobId' => 'getJobId',
            'orderId' => 'getOrderId',
            'traceId' => 'getTraceId'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorDescription'] = isset($data['errorDescription']) ? $data['errorDescription'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
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
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleUpdateTimeVO[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleUpdateTimeVO[]|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets errorCode
    *  errorCode
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode errorCode
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorDescription
    *  errorDescription
    *
    * @return string|null
    */
    public function getErrorDescription()
    {
        return $this->container['errorDescription'];
    }

    /**
    * Sets errorDescription
    *
    * @param string|null $errorDescription errorDescription
    *
    * @return $this
    */
    public function setErrorDescription($errorDescription)
    {
        $this->container['errorDescription'] = $errorDescription;
        return $this;
    }

    /**
    * Gets failReason
    *  failReason
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason failReason
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets jobId
    *  jobId
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
    * @param string|null $jobId jobId
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
    *  orderId
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
    * @param string|null $orderId orderId
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets traceId
    *  traceId
    *
    * @return string|null
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string|null $traceId traceId
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
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

