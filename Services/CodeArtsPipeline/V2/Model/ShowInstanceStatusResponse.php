<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  流水线创建实例ID
    * taskStatus  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * pipelineUrl  流水线详情页面url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskStatus' => 'string',
            'pipelineId' => 'string',
            'pipelineName' => 'string',
            'pipelineUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  流水线创建实例ID
    * taskStatus  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * pipelineUrl  流水线详情页面url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskStatus' => null,
        'pipelineId' => null,
        'pipelineName' => null,
        'pipelineUrl' => null
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
    * taskId  流水线创建实例ID
    * taskStatus  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * pipelineUrl  流水线详情页面url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskStatus' => 'task_status',
            'pipelineId' => 'pipeline_id',
            'pipelineName' => 'pipeline_name',
            'pipelineUrl' => 'pipeline_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  流水线创建实例ID
    * taskStatus  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * pipelineUrl  流水线详情页面url
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskStatus' => 'setTaskStatus',
            'pipelineId' => 'setPipelineId',
            'pipelineName' => 'setPipelineName',
            'pipelineUrl' => 'setPipelineUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  流水线创建实例ID
    * taskStatus  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    * pipelineId  流水线ID
    * pipelineName  流水线名称
    * pipelineUrl  流水线详情页面url
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskStatus' => 'getTaskStatus',
            'pipelineId' => 'getPipelineId',
            'pipelineName' => 'getPipelineName',
            'pipelineUrl' => 'getPipelineUrl'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
        $this->container['pipelineUrl'] = isset($data['pipelineUrl']) ? $data['pipelineUrl'] : null;
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
    * Gets taskId
    *  流水线创建实例ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 流水线创建实例ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 实例创建状态，取值和含义：initializing：初始化中；processing：处理中；finished：已完成；succeeded：成功
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线ID
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineName
    *  流水线名称
    *
    * @return string|null
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string|null $pipelineName 流水线名称
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
        return $this;
    }

    /**
    * Gets pipelineUrl
    *  流水线详情页面url
    *
    * @return string|null
    */
    public function getPipelineUrl()
    {
        return $this->container['pipelineUrl'];
    }

    /**
    * Sets pipelineUrl
    *
    * @param string|null $pipelineUrl 流水线详情页面url
    *
    * @return $this
    */
    public function setPipelineUrl($pipelineUrl)
    {
        $this->container['pipelineUrl'] = $pipelineUrl;
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

