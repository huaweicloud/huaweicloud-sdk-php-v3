<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PointStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PointStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  taskType
    * taskId  升级任务项ID
    * status  status
    * startTimeStamp  升级任务开始时间
    * endTimeStamp  升级任务结束时间
    * expireTimeStamp  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => '\HuaweiCloud\SDK\Cce\V3\Model\TaskType',
            'taskId' => 'string',
            'status' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeWorkflowTaskStatus',
            'startTimeStamp' => 'string',
            'endTimeStamp' => 'string',
            'expireTimeStamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  taskType
    * taskId  升级任务项ID
    * status  status
    * startTimeStamp  升级任务开始时间
    * endTimeStamp  升级任务结束时间
    * expireTimeStamp  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'taskId' => null,
        'status' => null,
        'startTimeStamp' => null,
        'endTimeStamp' => null,
        'expireTimeStamp' => null
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
    * taskType  taskType
    * taskId  升级任务项ID
    * status  status
    * startTimeStamp  升级任务开始时间
    * endTimeStamp  升级任务结束时间
    * expireTimeStamp  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'taskType',
            'taskId' => 'taskID',
            'status' => 'status',
            'startTimeStamp' => 'startTimeStamp',
            'endTimeStamp' => 'endTimeStamp',
            'expireTimeStamp' => 'expireTimeStamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  taskType
    * taskId  升级任务项ID
    * status  status
    * startTimeStamp  升级任务开始时间
    * endTimeStamp  升级任务结束时间
    * expireTimeStamp  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'startTimeStamp' => 'setStartTimeStamp',
            'endTimeStamp' => 'setEndTimeStamp',
            'expireTimeStamp' => 'setExpireTimeStamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  taskType
    * taskId  升级任务项ID
    * status  status
    * startTimeStamp  升级任务开始时间
    * endTimeStamp  升级任务结束时间
    * expireTimeStamp  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'startTimeStamp' => 'getStartTimeStamp',
            'endTimeStamp' => 'getEndTimeStamp',
            'expireTimeStamp' => 'getExpireTimeStamp'
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTimeStamp'] = isset($data['startTimeStamp']) ? $data['startTimeStamp'] : null;
        $this->container['endTimeStamp'] = isset($data['endTimeStamp']) ? $data['endTimeStamp'] : null;
        $this->container['expireTimeStamp'] = isset($data['expireTimeStamp']) ? $data['expireTimeStamp'] : null;
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
    * Gets taskType
    *  taskType
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TaskType|null $taskType taskType
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskId
    *  升级任务项ID
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
    * @param string|null $taskId 升级任务项ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeWorkflowTaskStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeWorkflowTaskStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTimeStamp
    *  升级任务开始时间
    *
    * @return string|null
    */
    public function getStartTimeStamp()
    {
        return $this->container['startTimeStamp'];
    }

    /**
    * Sets startTimeStamp
    *
    * @param string|null $startTimeStamp 升级任务开始时间
    *
    * @return $this
    */
    public function setStartTimeStamp($startTimeStamp)
    {
        $this->container['startTimeStamp'] = $startTimeStamp;
        return $this;
    }

    /**
    * Gets endTimeStamp
    *  升级任务结束时间
    *
    * @return string|null
    */
    public function getEndTimeStamp()
    {
        return $this->container['endTimeStamp'];
    }

    /**
    * Sets endTimeStamp
    *
    * @param string|null $endTimeStamp 升级任务结束时间
    *
    * @return $this
    */
    public function setEndTimeStamp($endTimeStamp)
    {
        $this->container['endTimeStamp'] = $endTimeStamp;
        return $this;
    }

    /**
    * Gets expireTimeStamp
    *  升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @return string|null
    */
    public function getExpireTimeStamp()
    {
        return $this->container['expireTimeStamp'];
    }

    /**
    * Sets expireTimeStamp
    *
    * @param string|null $expireTimeStamp 升级任务过期时间（当前仅升级前检查任务适用）
    *
    * @return $this
    */
    public function setExpireTimeStamp($expireTimeStamp)
    {
        $this->container['expireTimeStamp'] = $expireTimeStamp;
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

