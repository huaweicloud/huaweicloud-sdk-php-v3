<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareTaskListResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareTaskListResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compareTaskList  对比任务列表。
    * compareTaskListCount  对比任务列表总数。
    * errorMsg  错误信息
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compareTaskList' => '\HuaweiCloud\SDK\Drs\V3\Model\CompareTaskList[]',
            'compareTaskListCount' => 'int',
            'errorMsg' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compareTaskList  对比任务列表。
    * compareTaskListCount  对比任务列表总数。
    * errorMsg  错误信息
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compareTaskList' => null,
        'compareTaskListCount' => 'int32',
        'errorMsg' => null,
        'errorCode' => null
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
    * compareTaskList  对比任务列表。
    * compareTaskListCount  对比任务列表总数。
    * errorMsg  错误信息
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compareTaskList' => 'compare_task_list',
            'compareTaskListCount' => 'compare_task_list_count',
            'errorMsg' => 'error_msg',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compareTaskList  对比任务列表。
    * compareTaskListCount  对比任务列表总数。
    * errorMsg  错误信息
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $setters = [
            'compareTaskList' => 'setCompareTaskList',
            'compareTaskListCount' => 'setCompareTaskListCount',
            'errorMsg' => 'setErrorMsg',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compareTaskList  对比任务列表。
    * compareTaskListCount  对比任务列表总数。
    * errorMsg  错误信息
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $getters = [
            'compareTaskList' => 'getCompareTaskList',
            'compareTaskListCount' => 'getCompareTaskListCount',
            'errorMsg' => 'getErrorMsg',
            'errorCode' => 'getErrorCode'
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
        $this->container['compareTaskList'] = isset($data['compareTaskList']) ? $data['compareTaskList'] : null;
        $this->container['compareTaskListCount'] = isset($data['compareTaskListCount']) ? $data['compareTaskListCount'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
    * Gets compareTaskList
    *  对比任务列表。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\CompareTaskList[]|null
    */
    public function getCompareTaskList()
    {
        return $this->container['compareTaskList'];
    }

    /**
    * Sets compareTaskList
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\CompareTaskList[]|null $compareTaskList 对比任务列表。
    *
    * @return $this
    */
    public function setCompareTaskList($compareTaskList)
    {
        $this->container['compareTaskList'] = $compareTaskList;
        return $this;
    }

    /**
    * Gets compareTaskListCount
    *  对比任务列表总数。
    *
    * @return int|null
    */
    public function getCompareTaskListCount()
    {
        return $this->container['compareTaskListCount'];
    }

    /**
    * Sets compareTaskListCount
    *
    * @param int|null $compareTaskListCount 对比任务列表总数。
    *
    * @return $this
    */
    public function setCompareTaskListCount($compareTaskListCount)
    {
        $this->container['compareTaskListCount'] = $compareTaskListCount;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码。
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
    * @param string|null $errorCode 错误码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

