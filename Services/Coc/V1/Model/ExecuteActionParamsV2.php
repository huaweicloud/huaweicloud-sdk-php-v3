<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteActionParamsV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteActionParamsV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * action  动作名称
    * params  动作信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'action' => 'string',
            'params' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * action  动作名称
    * params  动作信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * taskId  任务ID
    * action  动作名称
    * params  动作信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'action' => 'action',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * action  动作名称
    * params  动作信息
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'action' => 'setAction',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * action  动作名称
    * params  动作信息
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if ((mb_strlen($this->container['taskId']) > 100)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 100)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
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
    * Gets taskId
    *  任务ID
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 任务ID
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
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 动作名称
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
    *  动作信息
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
    * @param object|null $params 动作信息
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

