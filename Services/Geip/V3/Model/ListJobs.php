<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Job的ID
    * action  处理规则
    * status  状态
    * errorTask  error_task
    * errorCode  error_code
    * errorMessage  error_message
    * startTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'action' => 'string',
            'status' => 'string',
            'errorTask' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'startTime' => '\DateTime',
            'endTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Job的ID
    * action  处理规则
    * status  状态
    * errorTask  error_task
    * errorCode  error_code
    * errorMessage  error_message
    * startTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'action' => null,
        'status' => null,
        'errorTask' => null,
        'errorCode' => null,
        'errorMessage' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time'
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
    * id  Job的ID
    * action  处理规则
    * status  状态
    * errorTask  error_task
    * errorCode  error_code
    * errorMessage  error_message
    * startTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'action' => 'action',
            'status' => 'status',
            'errorTask' => 'error_task',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Job的ID
    * action  处理规则
    * status  状态
    * errorTask  error_task
    * errorCode  error_code
    * errorMessage  error_message
    * startTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'action' => 'setAction',
            'status' => 'setStatus',
            'errorTask' => 'setErrorTask',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Job的ID
    * action  处理规则
    * status  状态
    * errorTask  error_task
    * errorCode  error_code
    * errorMessage  error_message
    * startTime  起始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'action' => 'getAction',
            'status' => 'getStatus',
            'errorTask' => 'getErrorTask',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorTask'] = isset($data['errorTask']) ? $data['errorTask'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    *  Job的ID
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
    * @param string|null $id Job的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets action
    *  处理规则
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
    * @param string|null $action 处理规则
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorTask
    *  error_task
    *
    * @return string|null
    */
    public function getErrorTask()
    {
        return $this->container['errorTask'];
    }

    /**
    * Sets errorTask
    *
    * @param string|null $errorTask error_task
    *
    * @return $this
    */
    public function setErrorTask($errorTask)
    {
        $this->container['errorTask'] = $errorTask;
        return $this;
    }

    /**
    * Gets errorCode
    *  error_code
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode error_code
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  error_message
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
    * @param string|null $errorMessage error_message
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets startTime
    *  起始时间
    *
    * @return \DateTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \DateTime|null $startTime 起始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

