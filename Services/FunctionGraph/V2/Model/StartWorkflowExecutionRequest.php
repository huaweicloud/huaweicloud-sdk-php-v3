<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartWorkflowExecutionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartWorkflowExecutionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  函数流定义ID
    * xCreateTime  workflowRun task create time
    * xWorkflowRunId  workflowRun id
    * xWorkflowRunMergeFnParameters  Combines the output of the previous node with the input of the next node into an input.
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'xCreateTime' => 'string',
            'xWorkflowRunId' => 'string',
            'xWorkflowRunMergeFnParameters' => 'string',
            'body' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FlowExecuteBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  函数流定义ID
    * xCreateTime  workflowRun task create time
    * xWorkflowRunId  workflowRun id
    * xWorkflowRunMergeFnParameters  Combines the output of the previous node with the input of the next node into an input.
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'xCreateTime' => null,
        'xWorkflowRunId' => null,
        'xWorkflowRunMergeFnParameters' => null,
        'body' => null
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
    * workflowId  函数流定义ID
    * xCreateTime  workflowRun task create time
    * xWorkflowRunId  workflowRun id
    * xWorkflowRunMergeFnParameters  Combines the output of the previous node with the input of the next node into an input.
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'xCreateTime' => 'X-Create-Time',
            'xWorkflowRunId' => 'X-WorkflowRun-ID',
            'xWorkflowRunMergeFnParameters' => 'X-WorkflowRun-MergeFnParameters',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  函数流定义ID
    * xCreateTime  workflowRun task create time
    * xWorkflowRunId  workflowRun id
    * xWorkflowRunMergeFnParameters  Combines the output of the previous node with the input of the next node into an input.
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'xCreateTime' => 'setXCreateTime',
            'xWorkflowRunId' => 'setXWorkflowRunId',
            'xWorkflowRunMergeFnParameters' => 'setXWorkflowRunMergeFnParameters',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  函数流定义ID
    * xCreateTime  workflowRun task create time
    * xWorkflowRunId  workflowRun id
    * xWorkflowRunMergeFnParameters  Combines the output of the previous node with the input of the next node into an input.
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'xCreateTime' => 'getXCreateTime',
            'xWorkflowRunId' => 'getXWorkflowRunId',
            'xWorkflowRunMergeFnParameters' => 'getXWorkflowRunMergeFnParameters',
            'body' => 'getBody'
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['xCreateTime'] = isset($data['xCreateTime']) ? $data['xCreateTime'] : null;
        $this->container['xWorkflowRunId'] = isset($data['xWorkflowRunId']) ? $data['xWorkflowRunId'] : null;
        $this->container['xWorkflowRunMergeFnParameters'] = isset($data['xWorkflowRunMergeFnParameters']) ? $data['xWorkflowRunMergeFnParameters'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workflowId'] === null) {
            $invalidProperties[] = "'workflowId' can't be null";
        }
            if ((mb_strlen($this->container['workflowId']) > 512)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
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
    * Gets workflowId
    *  函数流定义ID
    *
    * @return string
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string $workflowId 函数流定义ID
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets xCreateTime
    *  workflowRun task create time
    *
    * @return string|null
    */
    public function getXCreateTime()
    {
        return $this->container['xCreateTime'];
    }

    /**
    * Sets xCreateTime
    *
    * @param string|null $xCreateTime workflowRun task create time
    *
    * @return $this
    */
    public function setXCreateTime($xCreateTime)
    {
        $this->container['xCreateTime'] = $xCreateTime;
        return $this;
    }

    /**
    * Gets xWorkflowRunId
    *  workflowRun id
    *
    * @return string|null
    */
    public function getXWorkflowRunId()
    {
        return $this->container['xWorkflowRunId'];
    }

    /**
    * Sets xWorkflowRunId
    *
    * @param string|null $xWorkflowRunId workflowRun id
    *
    * @return $this
    */
    public function setXWorkflowRunId($xWorkflowRunId)
    {
        $this->container['xWorkflowRunId'] = $xWorkflowRunId;
        return $this;
    }

    /**
    * Gets xWorkflowRunMergeFnParameters
    *  Combines the output of the previous node with the input of the next node into an input.
    *
    * @return string|null
    */
    public function getXWorkflowRunMergeFnParameters()
    {
        return $this->container['xWorkflowRunMergeFnParameters'];
    }

    /**
    * Sets xWorkflowRunMergeFnParameters
    *
    * @param string|null $xWorkflowRunMergeFnParameters Combines the output of the previous node with the input of the next node into an input.
    *
    * @return $this
    */
    public function setXWorkflowRunMergeFnParameters($xWorkflowRunMergeFnParameters)
    {
        $this->container['xWorkflowRunMergeFnParameters'] = $xWorkflowRunMergeFnParameters;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FlowExecuteBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FlowExecuteBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

