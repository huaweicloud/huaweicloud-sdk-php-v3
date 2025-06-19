<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTestCaseResultBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTestCaseResultBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testcaseId  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    * executeId  注册服务执行id，该值不允许重复，不超过32位字符
    * resultId  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    * endTime  用例结束执行的时间戳，在执行结束时该字段必传
    * duration  执行用例持续时长ms，更新状态时改字段必传
    * description  用于记录该次结果执行的备注信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testcaseId' => 'string',
            'executeId' => 'string',
            'resultId' => 'string',
            'endTime' => 'int',
            'duration' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testcaseId  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    * executeId  注册服务执行id，该值不允许重复，不超过32位字符
    * resultId  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    * endTime  用例结束执行的时间戳，在执行结束时该字段必传
    * duration  执行用例持续时长ms，更新状态时改字段必传
    * description  用于记录该次结果执行的备注信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testcaseId' => null,
        'executeId' => null,
        'resultId' => null,
        'endTime' => 'int64',
        'duration' => 'int64',
        'description' => null
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
    * testcaseId  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    * executeId  注册服务执行id，该值不允许重复，不超过32位字符
    * resultId  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    * endTime  用例结束执行的时间戳，在执行结束时该字段必传
    * duration  执行用例持续时长ms，更新状态时改字段必传
    * description  用于记录该次结果执行的备注信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testcaseId' => 'testcase_id',
            'executeId' => 'execute_id',
            'resultId' => 'result_id',
            'endTime' => 'end_time',
            'duration' => 'duration',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testcaseId  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    * executeId  注册服务执行id，该值不允许重复，不超过32位字符
    * resultId  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    * endTime  用例结束执行的时间戳，在执行结束时该字段必传
    * duration  执行用例持续时长ms，更新状态时改字段必传
    * description  用于记录该次结果执行的备注信息
    *
    * @var string[]
    */
    protected static $setters = [
            'testcaseId' => 'setTestcaseId',
            'executeId' => 'setExecuteId',
            'resultId' => 'setResultId',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testcaseId  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    * executeId  注册服务执行id，该值不允许重复，不超过32位字符
    * resultId  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    * endTime  用例结束执行的时间戳，在执行结束时该字段必传
    * duration  执行用例持续时长ms，更新状态时改字段必传
    * description  用于记录该次结果执行的备注信息
    *
    * @var string[]
    */
    protected static $getters = [
            'testcaseId' => 'getTestcaseId',
            'executeId' => 'getExecuteId',
            'resultId' => 'getResultId',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'description' => 'getDescription'
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
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['executeId'] = isset($data['executeId']) ? $data['executeId'] : null;
        $this->container['resultId'] = isset($data['resultId']) ? $data['resultId'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['testcaseId'] === null) {
            $invalidProperties[] = "'testcaseId' can't be null";
        }
        if ($this->container['executeId'] === null) {
            $invalidProperties[] = "'executeId' can't be null";
        }
        if ($this->container['resultId'] === null) {
            $invalidProperties[] = "'resultId' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets testcaseId
    *  测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    *
    * @return string
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string $testcaseId 测试用例唯一标识，列表中不允许存在重复的id，固定长度32位字符
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets executeId
    *  注册服务执行id，该值不允许重复，不超过32位字符
    *
    * @return string
    */
    public function getExecuteId()
    {
        return $this->container['executeId'];
    }

    /**
    * Sets executeId
    *
    * @param string $executeId 注册服务执行id，该值不允许重复，不超过32位字符
    *
    * @return $this
    */
    public function setExecuteId($executeId)
    {
        $this->container['executeId'] = $executeId;
        return $this;
    }

    /**
    * Gets resultId
    *  测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    *
    * @return string
    */
    public function getResultId()
    {
        return $this->container['resultId'];
    }

    /**
    * Sets resultId
    *
    * @param string $resultId 测试用例结果，（0-成功，1-失败，5-执行中，6-停止）
    *
    * @return $this
    */
    public function setResultId($resultId)
    {
        $this->container['resultId'] = $resultId;
        return $this;
    }

    /**
    * Gets endTime
    *  用例结束执行的时间戳，在执行结束时该字段必传
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 用例结束执行的时间戳，在执行结束时该字段必传
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  执行用例持续时长ms，更新状态时改字段必传
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 执行用例持续时长ms，更新状态时改字段必传
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets description
    *  用于记录该次结果执行的备注信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 用于记录该次结果执行的备注信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

