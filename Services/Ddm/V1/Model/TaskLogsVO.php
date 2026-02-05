<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskLogsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskLogsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    * ddmInstanceId  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    * level  **参数解释**：  等级。  **参数范围**：  不涉及。
    * createdTime  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    * message  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'ddmInstanceId' => 'string',
            'level' => 'string',
            'createdTime' => 'float',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    * ddmInstanceId  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    * level  **参数解释**：  等级。  **参数范围**：  不涉及。
    * createdTime  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    * message  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'ddmInstanceId' => null,
        'level' => null,
        'createdTime' => null,
        'message' => null
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
    * taskId  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    * ddmInstanceId  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    * level  **参数解释**：  等级。  **参数范围**：  不涉及。
    * createdTime  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    * message  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'ddmInstanceId' => 'ddm_instance_id',
            'level' => 'level',
            'createdTime' => 'created_time',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    * ddmInstanceId  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    * level  **参数解释**：  等级。  **参数范围**：  不涉及。
    * createdTime  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    * message  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'ddmInstanceId' => 'setDdmInstanceId',
            'level' => 'setLevel',
            'createdTime' => 'setCreatedTime',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    * ddmInstanceId  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    * level  **参数解释**：  等级。  **参数范围**：  不涉及。
    * createdTime  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    * message  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'ddmInstanceId' => 'getDdmInstanceId',
            'level' => 'getLevel',
            'createdTime' => 'getCreatedTime',
            'message' => 'getMessage'
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
        $this->container['ddmInstanceId'] = isset($data['ddmInstanceId']) ? $data['ddmInstanceId'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ddmInstanceId']) && (mb_strlen($this->container['ddmInstanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ddmInstanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ddmInstanceId']) && (mb_strlen($this->container['ddmInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ddmInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdTime']) && ($this->container['createdTime'] > 9.223372036854775E+18)) {
                $invalidProperties[] = "invalid value for 'createdTime', must be smaller than or equal to 9.223372036854775E+18.";
            }
            if (!is_null($this->container['createdTime']) && ($this->container['createdTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createdTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
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
    * @param string|null $taskId **参数解释**：  分片变更任务ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets ddmInstanceId
    *  **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDdmInstanceId()
    {
        return $this->container['ddmInstanceId'];
    }

    /**
    * Sets ddmInstanceId
    *
    * @param string|null $ddmInstanceId **参数解释**：  DDM实例ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setDdmInstanceId($ddmInstanceId)
    {
        $this->container['ddmInstanceId'] = $ddmInstanceId;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**：  等级。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**：  等级。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**：  创建时间。  **参数范围**：  不涉及。
    *
    * @return float|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param float|null $createdTime **参数解释**：  创建时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：  消息。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

