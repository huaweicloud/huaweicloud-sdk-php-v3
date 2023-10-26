<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionResultList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'execution_result_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  流程节点ID。
    * beginTime  节点开始执行时间。
    * endTime  节点执行结束时间。
    * functionExecutionId  FunctionGraph的执行id。
    * output  节点输出。
    * status  节点状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'functionExecutionId' => 'string',
            'output' => 'object',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  流程节点ID。
    * beginTime  节点开始执行时间。
    * endTime  节点执行结束时间。
    * functionExecutionId  FunctionGraph的执行id。
    * output  节点输出。
    * status  节点状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'functionExecutionId' => null,
        'output' => null,
        'status' => null
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
    * nodeId  流程节点ID。
    * beginTime  节点开始执行时间。
    * endTime  节点执行结束时间。
    * functionExecutionId  FunctionGraph的执行id。
    * output  节点输出。
    * status  节点状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'functionExecutionId' => 'function_execution_id',
            'output' => 'output',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  流程节点ID。
    * beginTime  节点开始执行时间。
    * endTime  节点执行结束时间。
    * functionExecutionId  FunctionGraph的执行id。
    * output  节点输出。
    * status  节点状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'functionExecutionId' => 'setFunctionExecutionId',
            'output' => 'setOutput',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  流程节点ID。
    * beginTime  节点开始执行时间。
    * endTime  节点执行结束时间。
    * functionExecutionId  FunctionGraph的执行id。
    * output  节点输出。
    * status  节点状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'functionExecutionId' => 'getFunctionExecutionId',
            'output' => 'getOutput',
            'status' => 'getStatus'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['functionExecutionId'] = isset($data['functionExecutionId']) ? $data['functionExecutionId'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['functionExecutionId']) && (mb_strlen($this->container['functionExecutionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'functionExecutionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['functionExecutionId']) && (mb_strlen($this->container['functionExecutionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'functionExecutionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets nodeId
    *  流程节点ID。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 流程节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets beginTime
    *  节点开始执行时间。
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 节点开始执行时间。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  节点执行结束时间。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 节点执行结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets functionExecutionId
    *  FunctionGraph的执行id。
    *
    * @return string|null
    */
    public function getFunctionExecutionId()
    {
        return $this->container['functionExecutionId'];
    }

    /**
    * Sets functionExecutionId
    *
    * @param string|null $functionExecutionId FunctionGraph的执行id。
    *
    * @return $this
    */
    public function setFunctionExecutionId($functionExecutionId)
    {
        $this->container['functionExecutionId'] = $functionExecutionId;
        return $this;
    }

    /**
    * Gets output
    *  节点输出。
    *
    * @return object|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param object|null $output 节点输出。
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets status
    *  节点状态。
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
    * @param string|null $status 节点状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

