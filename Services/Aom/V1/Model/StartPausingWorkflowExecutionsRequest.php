<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartPausingWorkflowExecutionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartPausingWorkflowExecutionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  工作流ID，唯一标识，根据project_id和workflow_name生成。
    * executionId  工作流执行ID。
    * action  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    * nodeId  当前节点的id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'executionId' => 'string',
            'action' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  工作流ID，唯一标识，根据project_id和workflow_name生成。
    * executionId  工作流执行ID。
    * action  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    * nodeId  当前节点的id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'executionId' => null,
        'action' => null,
        'nodeId' => null
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
    * workflowId  工作流ID，唯一标识，根据project_id和workflow_name生成。
    * executionId  工作流执行ID。
    * action  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    * nodeId  当前节点的id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'executionId' => 'execution_id',
            'action' => 'action',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  工作流ID，唯一标识，根据project_id和workflow_name生成。
    * executionId  工作流执行ID。
    * action  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    * nodeId  当前节点的id。
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'executionId' => 'setExecutionId',
            'action' => 'setAction',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  工作流ID，唯一标识，根据project_id和workflow_name生成。
    * executionId  工作流执行ID。
    * action  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    * nodeId  当前节点的id。
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'executionId' => 'getExecutionId',
            'action' => 'getAction',
            'nodeId' => 'getNodeId'
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
    const ACTION_RESTART = 'restart';
    const ACTION_SKIP = 'skip';
    const ACTION__CONTINUE = 'continue';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_RESTART,
            self::ACTION_SKIP,
            self::ACTION__CONTINUE,
        ];
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
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
            if ((mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['executionId'] === null) {
            $invalidProperties[] = "'executionId' can't be null";
        }
            if ((mb_strlen($this->container['executionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['executionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['action']) > 10)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
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
    *  工作流ID，唯一标识，根据project_id和workflow_name生成。
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
    * @param string $workflowId 工作流ID，唯一标识，根据project_id和workflow_name生成。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets executionId
    *  工作流执行ID。
    *
    * @return string
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string $executionId 工作流执行ID。
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets action
    *  对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 对当前节点的操作：失败重试，失败跳过，暂停继续。 restart可重新执行失败的节点，skip可跳过失败的节点进入下个节点的执行，continue可通过暂停节点进入下一个节点。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets nodeId
    *  当前节点的id。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 当前节点的id。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

