<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * getAllParams  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'getAllParams' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * getAllParams  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'getAllParams' => null
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
    * getAllParams  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'getAllParams' => 'get_all_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * getAllParams  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'getAllParams' => 'setGetAllParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * getAllParams  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'getAllParams' => 'getGetAllParams'
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
        $this->container['getAllParams'] = isset($data['getAllParams']) ? $data['getAllParams'] : null;
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
    * Gets getAllParams
    *  输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @return string|null
    */
    public function getGetAllParams()
    {
        return $this->container['getAllParams'];
    }

    /**
    * Sets getAllParams
    *
    * @param string|null $getAllParams 输入\"true\"或者\"false\"来控制返回参数是不是完整的
    *
    * @return $this
    */
    public function setGetAllParams($getAllParams)
    {
        $this->container['getAllParams'] = $getAllParams;
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

