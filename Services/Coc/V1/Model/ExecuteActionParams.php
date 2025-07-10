<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteActionParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteActionParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketId  执行当前操作的工单单号。
    * taskId  任务ID
    * action  动作名称
    * params  当前执行的动作信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketId' => 'string',
            'taskId' => 'string',
            'action' => 'string',
            'params' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketId  执行当前操作的工单单号。
    * taskId  任务ID
    * action  动作名称
    * params  当前执行的动作信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketId' => null,
        'taskId' => null,
        'action' => null,
        'params' => null
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
    * ticketId  执行当前操作的工单单号。
    * taskId  任务ID
    * action  动作名称
    * params  当前执行的动作信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketId' => 'ticket_id',
            'taskId' => 'task_id',
            'action' => 'action',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketId  执行当前操作的工单单号。
    * taskId  任务ID
    * action  动作名称
    * params  当前执行的动作信息
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketId' => 'setTicketId',
            'taskId' => 'setTaskId',
            'action' => 'setAction',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketId  执行当前操作的工单单号。
    * taskId  任务ID
    * action  动作名称
    * params  当前执行的动作信息
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketId' => 'getTicketId',
            'taskId' => 'getTaskId',
            'action' => 'getAction',
            'params' => 'getParams'
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
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
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
    * Gets ticketId
    *  执行当前操作的工单单号。
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 执行当前操作的工单单号。
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets action
    *  动作名称
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作名称
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets params
    *  当前执行的动作信息
    *
    * @return object|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param object|null $params 当前执行的动作信息
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

