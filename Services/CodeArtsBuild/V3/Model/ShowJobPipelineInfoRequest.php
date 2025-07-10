<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobPipelineInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobPipelineInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * all  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    * checkParamUsed  移除未使用的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'all' => 'string',
            'checkParamUsed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * all  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    * checkParamUsed  移除未使用的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'all' => null,
        'checkParamUsed' => null
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
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * all  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    * checkParamUsed  移除未使用的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'all' => 'all',
            'checkParamUsed' => 'check_param_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * all  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    * checkParamUsed  移除未使用的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'all' => 'setAll',
            'checkParamUsed' => 'setCheckParamUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * all  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    * checkParamUsed  移除未使用的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'all' => 'getAll',
            'checkParamUsed' => 'getCheckParamUsed'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['checkParamUsed'] = isset($data['checkParamUsed']) ? $data['checkParamUsed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /^[0-9a-z]{32}$/.";
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
    * Gets jobId
    *  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets all
    *  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @return string|null
    */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
    * Sets all
    *
    * @param string|null $all 输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @return $this
    */
    public function setAll($all)
    {
        $this->container['all'] = $all;
        return $this;
    }

    /**
    * Gets checkParamUsed
    *  移除未使用的参数
    *
    * @return string|null
    */
    public function getCheckParamUsed()
    {
        return $this->container['checkParamUsed'];
    }

    /**
    * Sets checkParamUsed
    *
    * @param string|null $checkParamUsed 移除未使用的参数
    *
    * @return $this
    */
    public function setCheckParamUsed($checkParamUsed)
    {
        $this->container['checkParamUsed'] = $checkParamUsed;
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

