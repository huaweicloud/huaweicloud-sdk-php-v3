<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UCSJobSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UCSJobSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskList  任务列表
    * domainId  用户的domainID
    * operation  操作，create和retry二选一
    * waitTimeOut  Job等待时间，单位：秒
    * type  Job类别
    * relatedObjects  相关目标
    * extendParam  额外参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskList' => '\HuaweiCloud\SDK\Ucs\V1\Model\UCSTask[]',
            'domainId' => 'string',
            'operation' => 'string',
            'waitTimeOut' => 'int',
            'type' => 'string',
            'relatedObjects' => 'map[string,string]',
            'extendParam' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskList  任务列表
    * domainId  用户的domainID
    * operation  操作，create和retry二选一
    * waitTimeOut  Job等待时间，单位：秒
    * type  Job类别
    * relatedObjects  相关目标
    * extendParam  额外参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskList' => null,
        'domainId' => null,
        'operation' => null,
        'waitTimeOut' => 'int32',
        'type' => null,
        'relatedObjects' => null,
        'extendParam' => null
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
    * taskList  任务列表
    * domainId  用户的domainID
    * operation  操作，create和retry二选一
    * waitTimeOut  Job等待时间，单位：秒
    * type  Job类别
    * relatedObjects  相关目标
    * extendParam  额外参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskList' => 'taskList',
            'domainId' => 'domainID',
            'operation' => 'operation',
            'waitTimeOut' => 'waitTimeOut',
            'type' => 'type',
            'relatedObjects' => 'relatedObjects',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskList  任务列表
    * domainId  用户的domainID
    * operation  操作，create和retry二选一
    * waitTimeOut  Job等待时间，单位：秒
    * type  Job类别
    * relatedObjects  相关目标
    * extendParam  额外参数
    *
    * @var string[]
    */
    protected static $setters = [
            'taskList' => 'setTaskList',
            'domainId' => 'setDomainId',
            'operation' => 'setOperation',
            'waitTimeOut' => 'setWaitTimeOut',
            'type' => 'setType',
            'relatedObjects' => 'setRelatedObjects',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskList  任务列表
    * domainId  用户的domainID
    * operation  操作，create和retry二选一
    * waitTimeOut  Job等待时间，单位：秒
    * type  Job类别
    * relatedObjects  相关目标
    * extendParam  额外参数
    *
    * @var string[]
    */
    protected static $getters = [
            'taskList' => 'getTaskList',
            'domainId' => 'getDomainId',
            'operation' => 'getOperation',
            'waitTimeOut' => 'getWaitTimeOut',
            'type' => 'getType',
            'relatedObjects' => 'getRelatedObjects',
            'extendParam' => 'getExtendParam'
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
        $this->container['taskList'] = isset($data['taskList']) ? $data['taskList'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['waitTimeOut'] = isset($data['waitTimeOut']) ? $data['waitTimeOut'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['relatedObjects'] = isset($data['relatedObjects']) ? $data['relatedObjects'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
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
    * Gets taskList
    *  任务列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\UCSTask[]|null
    */
    public function getTaskList()
    {
        return $this->container['taskList'];
    }

    /**
    * Sets taskList
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\UCSTask[]|null $taskList 任务列表
    *
    * @return $this
    */
    public function setTaskList($taskList)
    {
        $this->container['taskList'] = $taskList;
        return $this;
    }

    /**
    * Gets domainId
    *  用户的domainID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 用户的domainID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets operation
    *  操作，create和retry二选一
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作，create和retry二选一
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets waitTimeOut
    *  Job等待时间，单位：秒
    *
    * @return int|null
    */
    public function getWaitTimeOut()
    {
        return $this->container['waitTimeOut'];
    }

    /**
    * Sets waitTimeOut
    *
    * @param int|null $waitTimeOut Job等待时间，单位：秒
    *
    * @return $this
    */
    public function setWaitTimeOut($waitTimeOut)
    {
        $this->container['waitTimeOut'] = $waitTimeOut;
        return $this;
    }

    /**
    * Gets type
    *  Job类别
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type Job类别
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets relatedObjects
    *  相关目标
    *
    * @return map[string,string]|null
    */
    public function getRelatedObjects()
    {
        return $this->container['relatedObjects'];
    }

    /**
    * Sets relatedObjects
    *
    * @param map[string,string]|null $relatedObjects 相关目标
    *
    * @return $this
    */
    public function setRelatedObjects($relatedObjects)
    {
        $this->container['relatedObjects'] = $relatedObjects;
        return $this;
    }

    /**
    * Gets extendParam
    *  额外参数
    *
    * @return map[string,object]|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param map[string,object]|null $extendParam 额外参数
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

