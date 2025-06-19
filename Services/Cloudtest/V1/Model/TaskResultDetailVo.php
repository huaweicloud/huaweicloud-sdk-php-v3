<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskResultDetailVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskResultDetailVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  处理人名称
    * caseResultStatics  用例结果统计信息
    * taskResult  taskResult
    * testResultList  实际的数据类型：单个对象，集合 或 NULL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => 'string',
            'caseResultStatics' => 'object',
            'taskResult' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo',
            'testResultList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  处理人名称
    * caseResultStatics  用例结果统计信息
    * taskResult  taskResult
    * testResultList  实际的数据类型：单个对象，集合 或 NULL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'caseResultStatics' => null,
        'taskResult' => null,
        'testResultList' => null
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
    * owner  处理人名称
    * caseResultStatics  用例结果统计信息
    * taskResult  taskResult
    * testResultList  实际的数据类型：单个对象，集合 或 NULL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'caseResultStatics' => 'case_result_statics',
            'taskResult' => 'task_result',
            'testResultList' => 'test_result_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  处理人名称
    * caseResultStatics  用例结果统计信息
    * taskResult  taskResult
    * testResultList  实际的数据类型：单个对象，集合 或 NULL
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'caseResultStatics' => 'setCaseResultStatics',
            'taskResult' => 'setTaskResult',
            'testResultList' => 'setTestResultList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  处理人名称
    * caseResultStatics  用例结果统计信息
    * taskResult  taskResult
    * testResultList  实际的数据类型：单个对象，集合 或 NULL
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'caseResultStatics' => 'getCaseResultStatics',
            'taskResult' => 'getTaskResult',
            'testResultList' => 'getTestResultList'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['caseResultStatics'] = isset($data['caseResultStatics']) ? $data['caseResultStatics'] : null;
        $this->container['taskResult'] = isset($data['taskResult']) ? $data['taskResult'] : null;
        $this->container['testResultList'] = isset($data['testResultList']) ? $data['testResultList'] : null;
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
    * Gets owner
    *  处理人名称
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 处理人名称
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets caseResultStatics
    *  用例结果统计信息
    *
    * @return object|null
    */
    public function getCaseResultStatics()
    {
        return $this->container['caseResultStatics'];
    }

    /**
    * Sets caseResultStatics
    *
    * @param object|null $caseResultStatics 用例结果统计信息
    *
    * @return $this
    */
    public function setCaseResultStatics($caseResultStatics)
    {
        $this->container['caseResultStatics'] = $caseResultStatics;
        return $this;
    }

    /**
    * Gets taskResult
    *  taskResult
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo|null
    */
    public function getTaskResult()
    {
        return $this->container['taskResult'];
    }

    /**
    * Sets taskResult
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo|null $taskResult taskResult
    *
    * @return $this
    */
    public function setTaskResult($taskResult)
    {
        $this->container['taskResult'] = $taskResult;
        return $this;
    }

    /**
    * Gets testResultList
    *  实际的数据类型：单个对象，集合 或 NULL
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo[]|null
    */
    public function getTestResultList()
    {
        return $this->container['testResultList'];
    }

    /**
    * Sets testResultList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo[]|null $testResultList 实际的数据类型：单个对象，集合 或 NULL
    *
    * @return $this
    */
    public function setTestResultList($testResultList)
    {
        $this->container['testResultList'] = $testResultList;
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

