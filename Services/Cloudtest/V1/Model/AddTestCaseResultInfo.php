<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTestCaseResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTestCaseResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  主键
    * name  结果名字
    * description  描述
    * result  用例结果
    * status  任务状态
    * preparation  前置条件
    * steps  用例步骤结果信息
    * releaseDev  版本号
    * taskUri  任务URI
    * taskResultUri  测试套结果URI
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'description' => 'string',
            'result' => 'string',
            'status' => 'string',
            'preparation' => 'string',
            'steps' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepResultInfo[]',
            'releaseDev' => 'string',
            'taskUri' => 'string',
            'taskResultUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  主键
    * name  结果名字
    * description  描述
    * result  用例结果
    * status  任务状态
    * preparation  前置条件
    * steps  用例步骤结果信息
    * releaseDev  版本号
    * taskUri  任务URI
    * taskResultUri  测试套结果URI
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'description' => null,
        'result' => null,
        'status' => null,
        'preparation' => null,
        'steps' => null,
        'releaseDev' => null,
        'taskUri' => null,
        'taskResultUri' => null
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
    * uri  主键
    * name  结果名字
    * description  描述
    * result  用例结果
    * status  任务状态
    * preparation  前置条件
    * steps  用例步骤结果信息
    * releaseDev  版本号
    * taskUri  任务URI
    * taskResultUri  测试套结果URI
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'description' => 'description',
            'result' => 'result',
            'status' => 'status',
            'preparation' => 'preparation',
            'steps' => 'steps',
            'releaseDev' => 'release_dev',
            'taskUri' => 'task_uri',
            'taskResultUri' => 'task_result_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  主键
    * name  结果名字
    * description  描述
    * result  用例结果
    * status  任务状态
    * preparation  前置条件
    * steps  用例步骤结果信息
    * releaseDev  版本号
    * taskUri  任务URI
    * taskResultUri  测试套结果URI
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'description' => 'setDescription',
            'result' => 'setResult',
            'status' => 'setStatus',
            'preparation' => 'setPreparation',
            'steps' => 'setSteps',
            'releaseDev' => 'setReleaseDev',
            'taskUri' => 'setTaskUri',
            'taskResultUri' => 'setTaskResultUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  主键
    * name  结果名字
    * description  描述
    * result  用例结果
    * status  任务状态
    * preparation  前置条件
    * steps  用例步骤结果信息
    * releaseDev  版本号
    * taskUri  任务URI
    * taskResultUri  测试套结果URI
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'description' => 'getDescription',
            'result' => 'getResult',
            'status' => 'getStatus',
            'preparation' => 'getPreparation',
            'steps' => 'getSteps',
            'releaseDev' => 'getReleaseDev',
            'taskUri' => 'getTaskUri',
            'taskResultUri' => 'getTaskResultUri'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['preparation'] = isset($data['preparation']) ? $data['preparation'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['releaseDev'] = isset($data['releaseDev']) ? $data['releaseDev'] : null;
        $this->container['taskUri'] = isset($data['taskUri']) ? $data['taskUri'] : null;
        $this->container['taskResultUri'] = isset($data['taskResultUri']) ? $data['taskResultUri'] : null;
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
    * Gets uri
    *  主键
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
    * @param string|null $uri 主键
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  结果名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 结果名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets result
    *  用例结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 用例结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets preparation
    *  前置条件
    *
    * @return string|null
    */
    public function getPreparation()
    {
        return $this->container['preparation'];
    }

    /**
    * Sets preparation
    *
    * @param string|null $preparation 前置条件
    *
    * @return $this
    */
    public function setPreparation($preparation)
    {
        $this->container['preparation'] = $preparation;
        return $this;
    }

    /**
    * Gets steps
    *  用例步骤结果信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepResultInfo[]|null
    */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
    * Sets steps
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseStepResultInfo[]|null $steps 用例步骤结果信息
    *
    * @return $this
    */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;
        return $this;
    }

    /**
    * Gets releaseDev
    *  版本号
    *
    * @return string|null
    */
    public function getReleaseDev()
    {
        return $this->container['releaseDev'];
    }

    /**
    * Sets releaseDev
    *
    * @param string|null $releaseDev 版本号
    *
    * @return $this
    */
    public function setReleaseDev($releaseDev)
    {
        $this->container['releaseDev'] = $releaseDev;
        return $this;
    }

    /**
    * Gets taskUri
    *  任务URI
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
    * @param string|null $taskUri 任务URI
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

