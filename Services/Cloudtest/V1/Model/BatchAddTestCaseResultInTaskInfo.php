<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddTestCaseResultInTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddTestCaseResultInTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  result
    * taskUri  任务uri
    * taskResultUri  测试套结果URI
    * testCaseUris  用例uri
    * isAsyn  是否异步执行
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseResultInfo',
            'taskUri' => 'string',
            'taskResultUri' => 'string',
            'testCaseUris' => 'string',
            'isAsyn' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  result
    * taskUri  任务uri
    * taskResultUri  测试套结果URI
    * testCaseUris  用例uri
    * isAsyn  是否异步执行
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'taskUri' => null,
        'taskResultUri' => null,
        'testCaseUris' => null,
        'isAsyn' => null
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
    * result  result
    * taskUri  任务uri
    * taskResultUri  测试套结果URI
    * testCaseUris  用例uri
    * isAsyn  是否异步执行
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'taskUri' => 'task_uri',
            'taskResultUri' => 'task_result_uri',
            'testCaseUris' => 'test_case_uris',
            'isAsyn' => 'isAsyn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  result
    * taskUri  任务uri
    * taskResultUri  测试套结果URI
    * testCaseUris  用例uri
    * isAsyn  是否异步执行
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'taskUri' => 'setTaskUri',
            'taskResultUri' => 'setTaskResultUri',
            'testCaseUris' => 'setTestCaseUris',
            'isAsyn' => 'setIsAsyn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  result
    * taskUri  任务uri
    * taskResultUri  测试套结果URI
    * testCaseUris  用例uri
    * isAsyn  是否异步执行
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'taskUri' => 'getTaskUri',
            'taskResultUri' => 'getTaskResultUri',
            'testCaseUris' => 'getTestCaseUris',
            'isAsyn' => 'getIsAsyn'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['taskResultUri'] = isset($data['taskResultUri']) ? $data['taskResultUri'] : null;
        $this->container['testCaseUris'] = isset($data['testCaseUris']) ? $data['testCaseUris'] : null;
        $this->container['isAsyn'] = isset($data['isAsyn']) ? $data['isAsyn'] : null;
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
    * Gets result
    *  result
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseResultInfo|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AddTestCaseResultInfo|null $result result
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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
    * Gets taskResultUri
    *  测试套结果URI
    *
    * @return string|null
    */
    public function getTaskResultUri()
    {
        return $this->container['taskResultUri'];
    }

    /**
    * Sets taskResultUri
    *
    * @param string|null $taskResultUri 测试套结果URI
    *
    * @return $this
    */
    public function setTaskResultUri($taskResultUri)
    {
        $this->container['taskResultUri'] = $taskResultUri;
        return $this;
    }

    /**
    * Gets testCaseUris
    *  用例uri
    *
    * @return string|null
    */
    public function getTestCaseUris()
    {
        return $this->container['testCaseUris'];
    }

    /**
    * Sets testCaseUris
    *
    * @param string|null $testCaseUris 用例uri
    *
    * @return $this
    */
    public function setTestCaseUris($testCaseUris)
    {
        $this->container['testCaseUris'] = $testCaseUris;
        return $this;
    }

    /**
    * Gets isAsyn
    *  是否异步执行
    *
    * @return bool|null
    */
    public function getIsAsyn()
    {
        return $this->container['isAsyn'];
    }

    /**
    * Sets isAsyn
    *
    * @param bool|null $isAsyn 是否异步执行
    *
    * @return $this
    */
    public function setIsAsyn($isAsyn)
    {
        $this->container['isAsyn'] = $isAsyn;
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

