<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelateTaskTestCasesVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelateTaskTestCasesVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testCaseNum  用例编号
    * testCaseName  用例名
    * testCaseUri  用例uri
    * taskUri  任务uri
    * taskName  任务名
    * taskNum  任务编号
    * taskCreator  任务创建人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testCaseNum' => 'string',
            'testCaseName' => 'string',
            'testCaseUri' => 'string',
            'taskUri' => 'string',
            'taskName' => 'string',
            'taskNum' => 'string',
            'taskCreator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testCaseNum  用例编号
    * testCaseName  用例名
    * testCaseUri  用例uri
    * taskUri  任务uri
    * taskName  任务名
    * taskNum  任务编号
    * taskCreator  任务创建人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testCaseNum' => null,
        'testCaseName' => null,
        'testCaseUri' => null,
        'taskUri' => null,
        'taskName' => null,
        'taskNum' => null,
        'taskCreator' => null
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
    * testCaseNum  用例编号
    * testCaseName  用例名
    * testCaseUri  用例uri
    * taskUri  任务uri
    * taskName  任务名
    * taskNum  任务编号
    * taskCreator  任务创建人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testCaseNum' => 'test_case_num',
            'testCaseName' => 'test_case_name',
            'testCaseUri' => 'test_case_uri',
            'taskUri' => 'task_uri',
            'taskName' => 'task_name',
            'taskNum' => 'task_num',
            'taskCreator' => 'task_creator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testCaseNum  用例编号
    * testCaseName  用例名
    * testCaseUri  用例uri
    * taskUri  任务uri
    * taskName  任务名
    * taskNum  任务编号
    * taskCreator  任务创建人
    *
    * @var string[]
    */
    protected static $setters = [
            'testCaseNum' => 'setTestCaseNum',
            'testCaseName' => 'setTestCaseName',
            'testCaseUri' => 'setTestCaseUri',
            'taskUri' => 'setTaskUri',
            'taskName' => 'setTaskName',
            'taskNum' => 'setTaskNum',
            'taskCreator' => 'setTaskCreator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testCaseNum  用例编号
    * testCaseName  用例名
    * testCaseUri  用例uri
    * taskUri  任务uri
    * taskName  任务名
    * taskNum  任务编号
    * taskCreator  任务创建人
    *
    * @var string[]
    */
    protected static $getters = [
            'testCaseNum' => 'getTestCaseNum',
            'testCaseName' => 'getTestCaseName',
            'testCaseUri' => 'getTestCaseUri',
            'taskUri' => 'getTaskUri',
            'taskName' => 'getTaskName',
            'taskNum' => 'getTaskNum',
            'taskCreator' => 'getTaskCreator'
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
        $this->container['testCaseNum'] = isset($data['testCaseNum']) ? $data['testCaseNum'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['testCaseUri'] = isset($data['testCaseUri']) ? $data['testCaseUri'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskNum'] = isset($data['taskNum']) ? $data['taskNum'] : null;
        $this->container['taskCreator'] = isset($data['taskCreator']) ? $data['taskCreator'] : null;
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
    * Gets testCaseNum
    *  用例编号
    *
    * @return string|null
    */
    public function getTestCaseNum()
    {
        return $this->container['testCaseNum'];
    }

    /**
    * Sets testCaseNum
    *
    * @param string|null $testCaseNum 用例编号
    *
    * @return $this
    */
    public function setTestCaseNum($testCaseNum)
    {
        $this->container['testCaseNum'] = $testCaseNum;
        return $this;
    }

    /**
    * Gets testCaseName
    *  用例名
    *
    * @return string|null
    */
    public function getTestCaseName()
    {
        return $this->container['testCaseName'];
    }

    /**
    * Sets testCaseName
    *
    * @param string|null $testCaseName 用例名
    *
    * @return $this
    */
    public function setTestCaseName($testCaseName)
    {
        $this->container['testCaseName'] = $testCaseName;
        return $this;
    }

    /**
    * Gets testCaseUri
    *  用例uri
    *
    * @return string|null
    */
    public function getTestCaseUri()
    {
        return $this->container['testCaseUri'];
    }

    /**
    * Sets testCaseUri
    *
    * @param string|null $testCaseUri 用例uri
    *
    * @return $this
    */
    public function setTestCaseUri($testCaseUri)
    {
        $this->container['testCaseUri'] = $testCaseUri;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务uri
    *
    * @return string|null
    */
    public function getTaskUri()
    {
        return $this->container['taskUri'];
    }

    /**
    * Sets taskUri
    *
    * @param string|null $taskUri 任务uri
    *
    * @return $this
    */
    public function setTaskUri($taskUri)
    {
        $this->container['taskUri'] = $taskUri;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名
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
    * @param string|null $taskName 任务名
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskNum
    *  任务编号
    *
    * @return string|null
    */
    public function getTaskNum()
    {
        return $this->container['taskNum'];
    }

    /**
    * Sets taskNum
    *
    * @param string|null $taskNum 任务编号
    *
    * @return $this
    */
    public function setTaskNum($taskNum)
    {
        $this->container['taskNum'] = $taskNum;
        return $this;
    }

    /**
    * Gets taskCreator
    *  任务创建人
    *
    * @return string|null
    */
    public function getTaskCreator()
    {
        return $this->container['taskCreator'];
    }

    /**
    * Sets taskCreator
    *
    * @param string|null $taskCreator 任务创建人
    *
    * @return $this
    */
    public function setTaskCreator($taskCreator)
    {
        $this->container['taskCreator'] = $taskCreator;
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

