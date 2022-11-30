<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * target  执行批量任务的目标。
    * status  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    * output  子任务执行的输出信息。
    * error  error
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'target' => 'string',
            'status' => 'string',
            'output' => 'string',
            'error' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ErrorInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * target  执行批量任务的目标。
    * status  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    * output  子任务执行的输出信息。
    * error  error
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'target' => null,
        'status' => null,
        'output' => null,
        'error' => null
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
    * target  执行批量任务的目标。
    * status  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    * output  子任务执行的输出信息。
    * error  error
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'target' => 'target',
            'status' => 'status',
            'output' => 'output',
            'error' => 'error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * target  执行批量任务的目标。
    * status  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    * output  子任务执行的输出信息。
    * error  error
    *
    * @var string[]
    */
    protected static $setters = [
            'target' => 'setTarget',
            'status' => 'setStatus',
            'output' => 'setOutput',
            'error' => 'setError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * target  执行批量任务的目标。
    * status  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    * output  子任务执行的输出信息。
    * error  error
    *
    * @var string[]
    */
    protected static $getters = [
            'target' => 'getTarget',
            'status' => 'getStatus',
            'output' => 'getOutput',
            'error' => 'getError'
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
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
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
    * Gets target
    *  执行批量任务的目标。
    *
    * @return string|null
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param string|null $target 执行批量任务的目标。
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
        return $this;
    }

    /**
    * Gets status
    *  子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
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
    * @param string|null $status 子任务的执行状态，结果范围：Processing，Success，Fail，Waitting，FailWaitRetry，Stopped。 - Waitting: 等待执行。 - Processing: 执行中。 - Success: 成功。 - Fail: 失败。 - FailWaitRetry: 失败重试。 - Stopped: 已停止。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets output
    *  子任务执行的输出信息。
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output 子任务执行的输出信息。
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets error
    *  error
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ErrorInfo|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ErrorInfo|null $error error
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
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

