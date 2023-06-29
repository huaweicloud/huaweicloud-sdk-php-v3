<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskSuccessRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskSuccessRate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  应用名称
    * successRate  成功率
    * recordCount  部署记录数
    * successRecordCount  成功的部署记录数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'successRate' => 'string',
            'recordCount' => 'int',
            'successRecordCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务id
    * taskName  应用名称
    * successRate  成功率
    * recordCount  部署记录数
    * successRecordCount  成功的部署记录数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'successRate' => null,
        'recordCount' => null,
        'successRecordCount' => null
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
    * taskId  任务id
    * taskName  应用名称
    * successRate  成功率
    * recordCount  部署记录数
    * successRecordCount  成功的部署记录数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'successRate' => 'success_rate',
            'recordCount' => 'record_count',
            'successRecordCount' => 'success_record_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务id
    * taskName  应用名称
    * successRate  成功率
    * recordCount  部署记录数
    * successRecordCount  成功的部署记录数
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'successRate' => 'setSuccessRate',
            'recordCount' => 'setRecordCount',
            'successRecordCount' => 'setSuccessRecordCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务id
    * taskName  应用名称
    * successRate  成功率
    * recordCount  部署记录数
    * successRecordCount  成功的部署记录数
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'successRate' => 'getSuccessRate',
            'recordCount' => 'getRecordCount',
            'successRecordCount' => 'getSuccessRecordCount'
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['recordCount'] = isset($data['recordCount']) ? $data['recordCount'] : null;
        $this->container['successRecordCount'] = isset($data['successRecordCount']) ? $data['successRecordCount'] : null;
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
    *  任务id
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
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  应用名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 应用名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets successRate
    *  成功率
    *
    * @return string|null
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param string|null $successRate 成功率
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets recordCount
    *  部署记录数
    *
    * @return int|null
    */
    public function getRecordCount()
    {
        return $this->container['recordCount'];
    }

    /**
    * Sets recordCount
    *
    * @param int|null $recordCount 部署记录数
    *
    * @return $this
    */
    public function setRecordCount($recordCount)
    {
        $this->container['recordCount'] = $recordCount;
        return $this;
    }

    /**
    * Gets successRecordCount
    *  成功的部署记录数
    *
    * @return int|null
    */
    public function getSuccessRecordCount()
    {
        return $this->container['successRecordCount'];
    }

    /**
    * Sets successRecordCount
    *
    * @param int|null $successRecordCount 成功的部署记录数
    *
    * @return $this
    */
    public function setSuccessRecordCount($successRecordCount)
    {
        $this->container['successRecordCount'] = $successRecordCount;
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

