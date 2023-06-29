<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MbTasksReportReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MbTasksReportReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
    * status  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    * taskName  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    * retry  失败任务是否重试。
    * parameter  parameter
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'status' => 'string',
            'taskName' => 'string',
            'retry' => 'bool',
            'parameter' => '\HuaweiCloud\SDK\Mpc\V1\Model\MbTaskParameter'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
    * status  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    * taskName  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    * retry  失败任务是否重试。
    * parameter  parameter
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'status' => null,
        'taskName' => null,
        'retry' => null,
        'parameter' => null
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
    * taskId  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
    * status  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    * taskName  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    * retry  失败任务是否重试。
    * parameter  parameter
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'status' => 'status',
            'taskName' => 'task_name',
            'retry' => 'retry',
            'parameter' => 'parameter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
    * status  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    * taskName  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    * retry  失败任务是否重试。
    * parameter  parameter
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'status' => 'setStatus',
            'taskName' => 'setTaskName',
            'retry' => 'setRetry',
            'parameter' => 'setParameter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
    * status  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    * taskName  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    * retry  失败任务是否重试。
    * parameter  parameter
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'status' => 'getStatus',
            'taskName' => 'getTaskName',
            'retry' => 'getRetry',
            'parameter' => 'getParameter'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['retry'] = isset($data['retry']) ? $data['retry'] : false;
        $this->container['parameter'] = isset($data['parameter']) ? $data['parameter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 0.";
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
    *  任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
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
    * @param string|null $taskId 任务ID。 如果返回值为200 OK，为接受任务后产生的任务ID。
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
    *  任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务执行状态。 取值为RUNNING/FINISHED/FAILED。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
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
    * @param string|null $taskName 任务名称。 取值为RESET_TRACKS/MERGE_CHANNELS。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets retry
    *  失败任务是否重试。
    *
    * @return bool|null
    */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
    * Sets retry
    *
    * @param bool|null $retry 失败任务是否重试。
    *
    * @return $this
    */
    public function setRetry($retry)
    {
        $this->container['retry'] = $retry;
        return $this;
    }

    /**
    * Gets parameter
    *  parameter
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\MbTaskParameter|null
    */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
    * Sets parameter
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\MbTaskParameter|null $parameter parameter
    *
    * @return $this
    */
    public function setParameter($parameter)
    {
        $this->container['parameter'] = $parameter;
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

