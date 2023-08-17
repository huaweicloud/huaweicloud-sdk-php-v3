<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomVariable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomVariable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * name  自定义参数名称
    * sequence  自定义参数顺序
    * type  自定义参数类型
    * value  自定义参数默认值
    * isSecret  是否私密参数
    * description  自定义参数描述
    * isRuntime  是否运行时设置
    * limits  参数限制
    * isReset  是否重置
    * latestValue  最近一次参数值
    * runtimeValue  运行时传入值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'name' => 'string',
            'sequence' => 'int',
            'type' => 'string',
            'value' => 'string',
            'isSecret' => 'bool',
            'description' => 'string',
            'isRuntime' => 'bool',
            'limits' => 'object[]',
            'isReset' => 'bool',
            'latestValue' => 'string',
            'runtimeValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * name  自定义参数名称
    * sequence  自定义参数顺序
    * type  自定义参数类型
    * value  自定义参数默认值
    * isSecret  是否私密参数
    * description  自定义参数描述
    * isRuntime  是否运行时设置
    * limits  参数限制
    * isReset  是否重置
    * latestValue  最近一次参数值
    * runtimeValue  运行时传入值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'name' => null,
        'sequence' => 'int32',
        'type' => null,
        'value' => null,
        'isSecret' => null,
        'description' => null,
        'isRuntime' => null,
        'limits' => null,
        'isReset' => null,
        'latestValue' => null,
        'runtimeValue' => null
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
    * pipelineId  流水线ID
    * name  自定义参数名称
    * sequence  自定义参数顺序
    * type  自定义参数类型
    * value  自定义参数默认值
    * isSecret  是否私密参数
    * description  自定义参数描述
    * isRuntime  是否运行时设置
    * limits  参数限制
    * isReset  是否重置
    * latestValue  最近一次参数值
    * runtimeValue  运行时传入值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'name' => 'name',
            'sequence' => 'sequence',
            'type' => 'type',
            'value' => 'value',
            'isSecret' => 'is_secret',
            'description' => 'description',
            'isRuntime' => 'is_runtime',
            'limits' => 'limits',
            'isReset' => 'is_reset',
            'latestValue' => 'latest_value',
            'runtimeValue' => 'runtime_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线ID
    * name  自定义参数名称
    * sequence  自定义参数顺序
    * type  自定义参数类型
    * value  自定义参数默认值
    * isSecret  是否私密参数
    * description  自定义参数描述
    * isRuntime  是否运行时设置
    * limits  参数限制
    * isReset  是否重置
    * latestValue  最近一次参数值
    * runtimeValue  运行时传入值
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'name' => 'setName',
            'sequence' => 'setSequence',
            'type' => 'setType',
            'value' => 'setValue',
            'isSecret' => 'setIsSecret',
            'description' => 'setDescription',
            'isRuntime' => 'setIsRuntime',
            'limits' => 'setLimits',
            'isReset' => 'setIsReset',
            'latestValue' => 'setLatestValue',
            'runtimeValue' => 'setRuntimeValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线ID
    * name  自定义参数名称
    * sequence  自定义参数顺序
    * type  自定义参数类型
    * value  自定义参数默认值
    * isSecret  是否私密参数
    * description  自定义参数描述
    * isRuntime  是否运行时设置
    * limits  参数限制
    * isReset  是否重置
    * latestValue  最近一次参数值
    * runtimeValue  运行时传入值
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'name' => 'getName',
            'sequence' => 'getSequence',
            'type' => 'getType',
            'value' => 'getValue',
            'isSecret' => 'getIsSecret',
            'description' => 'getDescription',
            'isRuntime' => 'getIsRuntime',
            'limits' => 'getLimits',
            'isReset' => 'getIsReset',
            'latestValue' => 'getLatestValue',
            'runtimeValue' => 'getRuntimeValue'
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
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['isSecret'] = isset($data['isSecret']) ? $data['isSecret'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isRuntime'] = isset($data['isRuntime']) ? $data['isRuntime'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['isReset'] = isset($data['isReset']) ? $data['isReset'] : null;
        $this->container['latestValue'] = isset($data['latestValue']) ? $data['latestValue'] : null;
        $this->container['runtimeValue'] = isset($data['runtimeValue']) ? $data['runtimeValue'] : null;
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
    * Gets pipelineId
    *  流水线ID
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets name
    *  自定义参数名称
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
    * @param string|null $name 自定义参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sequence
    *  自定义参数顺序
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 自定义参数顺序
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
        return $this;
    }

    /**
    * Gets type
    *  自定义参数类型
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
    * @param string|null $type 自定义参数类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  自定义参数默认值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 自定义参数默认值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets isSecret
    *  是否私密参数
    *
    * @return bool|null
    */
    public function getIsSecret()
    {
        return $this->container['isSecret'];
    }

    /**
    * Sets isSecret
    *
    * @param bool|null $isSecret 是否私密参数
    *
    * @return $this
    */
    public function setIsSecret($isSecret)
    {
        $this->container['isSecret'] = $isSecret;
        return $this;
    }

    /**
    * Gets description
    *  自定义参数描述
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
    * @param string|null $description 自定义参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isRuntime
    *  是否运行时设置
    *
    * @return bool|null
    */
    public function getIsRuntime()
    {
        return $this->container['isRuntime'];
    }

    /**
    * Sets isRuntime
    *
    * @param bool|null $isRuntime 是否运行时设置
    *
    * @return $this
    */
    public function setIsRuntime($isRuntime)
    {
        $this->container['isRuntime'] = $isRuntime;
        return $this;
    }

    /**
    * Gets limits
    *  参数限制
    *
    * @return object[]|null
    */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
    * Sets limits
    *
    * @param object[]|null $limits 参数限制
    *
    * @return $this
    */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;
        return $this;
    }

    /**
    * Gets isReset
    *  是否重置
    *
    * @return bool|null
    */
    public function getIsReset()
    {
        return $this->container['isReset'];
    }

    /**
    * Sets isReset
    *
    * @param bool|null $isReset 是否重置
    *
    * @return $this
    */
    public function setIsReset($isReset)
    {
        $this->container['isReset'] = $isReset;
        return $this;
    }

    /**
    * Gets latestValue
    *  最近一次参数值
    *
    * @return string|null
    */
    public function getLatestValue()
    {
        return $this->container['latestValue'];
    }

    /**
    * Sets latestValue
    *
    * @param string|null $latestValue 最近一次参数值
    *
    * @return $this
    */
    public function setLatestValue($latestValue)
    {
        $this->container['latestValue'] = $latestValue;
        return $this;
    }

    /**
    * Gets runtimeValue
    *  运行时传入值
    *
    * @return string|null
    */
    public function getRuntimeValue()
    {
        return $this->container['runtimeValue'];
    }

    /**
    * Sets runtimeValue
    *
    * @param string|null $runtimeValue 运行时传入值
    *
    * @return $this
    */
    public function setRuntimeValue($runtimeValue)
    {
        $this->container['runtimeValue'] = $runtimeValue;
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

