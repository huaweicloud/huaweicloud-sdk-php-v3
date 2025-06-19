<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteTaskVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteTaskVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flag  标志
    * uri  URI
    * taskResultVo  taskResultVo
    * updateCaseUriList  更新用例
    * testCaseResultList  用例结果列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flag' => 'bool',
            'uri' => 'string',
            'taskResultVo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo',
            'updateCaseUriList' => 'string[]',
            'testCaseResultList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestResultVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flag  标志
    * uri  URI
    * taskResultVo  taskResultVo
    * updateCaseUriList  更新用例
    * testCaseResultList  用例结果列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flag' => null,
        'uri' => null,
        'taskResultVo' => null,
        'updateCaseUriList' => null,
        'testCaseResultList' => null
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
    * flag  标志
    * uri  URI
    * taskResultVo  taskResultVo
    * updateCaseUriList  更新用例
    * testCaseResultList  用例结果列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flag' => 'flag',
            'uri' => 'uri',
            'taskResultVo' => 'task_result_vo',
            'updateCaseUriList' => 'update_case_uri_list',
            'testCaseResultList' => 'test_case_result_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flag  标志
    * uri  URI
    * taskResultVo  taskResultVo
    * updateCaseUriList  更新用例
    * testCaseResultList  用例结果列表
    *
    * @var string[]
    */
    protected static $setters = [
            'flag' => 'setFlag',
            'uri' => 'setUri',
            'taskResultVo' => 'setTaskResultVo',
            'updateCaseUriList' => 'setUpdateCaseUriList',
            'testCaseResultList' => 'setTestCaseResultList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flag  标志
    * uri  URI
    * taskResultVo  taskResultVo
    * updateCaseUriList  更新用例
    * testCaseResultList  用例结果列表
    *
    * @var string[]
    */
    protected static $getters = [
            'flag' => 'getFlag',
            'uri' => 'getUri',
            'taskResultVo' => 'getTaskResultVo',
            'updateCaseUriList' => 'getUpdateCaseUriList',
            'testCaseResultList' => 'getTestCaseResultList'
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
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['taskResultVo'] = isset($data['taskResultVo']) ? $data['taskResultVo'] : null;
        $this->container['updateCaseUriList'] = isset($data['updateCaseUriList']) ? $data['updateCaseUriList'] : null;
        $this->container['testCaseResultList'] = isset($data['testCaseResultList']) ? $data['testCaseResultList'] : null;
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
    * Gets flag
    *  标志
    *
    * @return bool|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param bool|null $flag 标志
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets uri
    *  URI
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri URI
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets taskResultVo
    *  taskResultVo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo|null
    */
    public function getTaskResultVo()
    {
        return $this->container['taskResultVo'];
    }

    /**
    * Sets taskResultVo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskResultVo|null $taskResultVo taskResultVo
    *
    * @return $this
    */
    public function setTaskResultVo($taskResultVo)
    {
        $this->container['taskResultVo'] = $taskResultVo;
        return $this;
    }

    /**
    * Gets updateCaseUriList
    *  更新用例
    *
    * @return string[]|null
    */
    public function getUpdateCaseUriList()
    {
        return $this->container['updateCaseUriList'];
    }

    /**
    * Sets updateCaseUriList
    *
    * @param string[]|null $updateCaseUriList 更新用例
    *
    * @return $this
    */
    public function setUpdateCaseUriList($updateCaseUriList)
    {
        $this->container['updateCaseUriList'] = $updateCaseUriList;
        return $this;
    }

    /**
    * Gets testCaseResultList
    *  用例结果列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestResultVo[]|null
    */
    public function getTestCaseResultList()
    {
        return $this->container['testCaseResultList'];
    }

    /**
    * Sets testCaseResultList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestResultVo[]|null $testCaseResultList 用例结果列表
    *
    * @return $this
    */
    public function setTestCaseResultList($testCaseResultList)
    {
        $this->container['testCaseResultList'] = $testCaseResultList;
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

