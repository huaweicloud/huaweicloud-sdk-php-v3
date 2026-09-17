<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowProcessNodeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowProcessNodeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点ID
    * category  节点类别
    * processInstanceId  工作流实例ID
    * workflowActivityId  工作流活动ID
    * code  节点编码
    * config  config
    * enableSuspend  是否允许挂起
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'category' => 'string',
            'processInstanceId' => 'string',
            'workflowActivityId' => 'string',
            'code' => 'string',
            'config' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowNodeConfigVO',
            'enableSuspend' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点ID
    * category  节点类别
    * processInstanceId  工作流实例ID
    * workflowActivityId  工作流活动ID
    * code  节点编码
    * config  config
    * enableSuspend  是否允许挂起
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'category' => null,
        'processInstanceId' => null,
        'workflowActivityId' => null,
        'code' => null,
        'config' => null,
        'enableSuspend' => null
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
    * id  节点ID
    * category  节点类别
    * processInstanceId  工作流实例ID
    * workflowActivityId  工作流活动ID
    * code  节点编码
    * config  config
    * enableSuspend  是否允许挂起
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'category' => 'category',
            'processInstanceId' => 'process_instance_id',
            'workflowActivityId' => 'workflow_activity_id',
            'code' => 'code',
            'config' => 'config',
            'enableSuspend' => 'enable_suspend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点ID
    * category  节点类别
    * processInstanceId  工作流实例ID
    * workflowActivityId  工作流活动ID
    * code  节点编码
    * config  config
    * enableSuspend  是否允许挂起
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'category' => 'setCategory',
            'processInstanceId' => 'setProcessInstanceId',
            'workflowActivityId' => 'setWorkflowActivityId',
            'code' => 'setCode',
            'config' => 'setConfig',
            'enableSuspend' => 'setEnableSuspend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点ID
    * category  节点类别
    * processInstanceId  工作流实例ID
    * workflowActivityId  工作流活动ID
    * code  节点编码
    * config  config
    * enableSuspend  是否允许挂起
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'category' => 'getCategory',
            'processInstanceId' => 'getProcessInstanceId',
            'workflowActivityId' => 'getWorkflowActivityId',
            'code' => 'getCode',
            'config' => 'getConfig',
            'enableSuspend' => 'getEnableSuspend'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['processInstanceId'] = isset($data['processInstanceId']) ? $data['processInstanceId'] : null;
        $this->container['workflowActivityId'] = isset($data['workflowActivityId']) ? $data['workflowActivityId'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['enableSuspend'] = isset($data['enableSuspend']) ? $data['enableSuspend'] : null;
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
    * Gets id
    *  节点ID
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
    * @param string|null $id 节点ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets category
    *  节点类别
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 节点类别
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets processInstanceId
    *  工作流实例ID
    *
    * @return string|null
    */
    public function getProcessInstanceId()
    {
        return $this->container['processInstanceId'];
    }

    /**
    * Sets processInstanceId
    *
    * @param string|null $processInstanceId 工作流实例ID
    *
    * @return $this
    */
    public function setProcessInstanceId($processInstanceId)
    {
        $this->container['processInstanceId'] = $processInstanceId;
        return $this;
    }

    /**
    * Gets workflowActivityId
    *  工作流活动ID
    *
    * @return string|null
    */
    public function getWorkflowActivityId()
    {
        return $this->container['workflowActivityId'];
    }

    /**
    * Sets workflowActivityId
    *
    * @param string|null $workflowActivityId 工作流活动ID
    *
    * @return $this
    */
    public function setWorkflowActivityId($workflowActivityId)
    {
        $this->container['workflowActivityId'] = $workflowActivityId;
        return $this;
    }

    /**
    * Gets code
    *  节点编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 节点编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets config
    *  config
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowNodeConfigVO|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowNodeConfigVO|null $config config
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
        return $this;
    }

    /**
    * Gets enableSuspend
    *  是否允许挂起
    *
    * @return bool|null
    */
    public function getEnableSuspend()
    {
        return $this->container['enableSuspend'];
    }

    /**
    * Sets enableSuspend
    *
    * @param bool|null $enableSuspend 是否允许挂起
    *
    * @return $this
    */
    public function setEnableSuspend($enableSuspend)
    {
        $this->container['enableSuspend'] = $enableSuspend;
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

