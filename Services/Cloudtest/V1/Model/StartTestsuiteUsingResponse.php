<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartTestsuiteUsingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartTestsuiteUsingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * error  error
    * etTraceId  etTraceId
    * result  result
    * status  status
    * warn  warn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'error' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Error',
            'etTraceId' => 'string',
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskBasicInfoVo',
            'status' => 'string',
            'warn' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Warn'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * error  error
    * etTraceId  etTraceId
    * result  result
    * status  status
    * warn  warn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'error' => null,
        'etTraceId' => null,
        'result' => null,
        'status' => null,
        'warn' => null
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
    * error  error
    * etTraceId  etTraceId
    * result  result
    * status  status
    * warn  warn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'error' => 'error',
            'etTraceId' => 'et_trace_id',
            'result' => 'result',
            'status' => 'status',
            'warn' => 'warn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * error  error
    * etTraceId  etTraceId
    * result  result
    * status  status
    * warn  warn
    *
    * @var string[]
    */
    protected static $setters = [
            'error' => 'setError',
            'etTraceId' => 'setEtTraceId',
            'result' => 'setResult',
            'status' => 'setStatus',
            'warn' => 'setWarn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * error  error
    * etTraceId  etTraceId
    * result  result
    * status  status
    * warn  warn
    *
    * @var string[]
    */
    protected static $getters = [
            'error' => 'getError',
            'etTraceId' => 'getEtTraceId',
            'result' => 'getResult',
            'status' => 'getStatus',
            'warn' => 'getWarn'
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
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['etTraceId'] = isset($data['etTraceId']) ? $data['etTraceId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['warn'] = isset($data['warn']) ? $data['warn'] : null;
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
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Error|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Error|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets etTraceId
    *  etTraceId
    *
    * @return string|null
    */
    public function getEtTraceId()
    {
        return $this->container['etTraceId'];
    }

    /**
    * Sets etTraceId
    *
    * @param string|null $etTraceId etTraceId
    *
    * @return $this
    */
    public function setEtTraceId($etTraceId)
    {
        $this->container['etTraceId'] = $etTraceId;
        return $this;
    }

    /**
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskBasicInfoVo|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskBasicInfoVo|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets warn
    *  warn
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Warn|null
    */
    public function getWarn()
    {
        return $this->container['warn'];
    }

    /**
    * Sets warn
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Warn|null $warn warn
    *
    * @return $this
    */
    public function setWarn($warn)
    {
        $this->container['warn'] = $warn;
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

