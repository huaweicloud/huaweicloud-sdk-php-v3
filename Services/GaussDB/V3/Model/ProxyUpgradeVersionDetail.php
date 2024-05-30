<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyUpgradeVersionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyUpgradeVersionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id.
    * workflowId  工作流Id。
    * state  agent返回的升级下发状态码，默认返回。
    * errorMessage  错误消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'workflowId' => 'string',
            'state' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id.
    * workflowId  工作流Id。
    * state  agent返回的升级下发状态码，默认返回。
    * errorMessage  错误消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'workflowId' => null,
        'state' => null,
        'errorMessage' => null
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
    * instanceId  实例id.
    * workflowId  工作流Id。
    * state  agent返回的升级下发状态码，默认返回。
    * errorMessage  错误消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'workflowId' => 'workflow_id',
            'state' => 'state',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id.
    * workflowId  工作流Id。
    * state  agent返回的升级下发状态码，默认返回。
    * errorMessage  错误消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'workflowId' => 'setWorkflowId',
            'state' => 'setState',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id.
    * workflowId  工作流Id。
    * state  agent返回的升级下发状态码，默认返回。
    * errorMessage  错误消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'workflowId' => 'getWorkflowId',
            'state' => 'getState',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets instanceId
    *  实例id.
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
    * @param string|null $instanceId 实例id.
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets workflowId
    *  工作流Id。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId 工作流Id。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets state
    *  agent返回的升级下发状态码，默认返回。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state agent返回的升级下发状态码，默认返回。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误消息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误消息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

