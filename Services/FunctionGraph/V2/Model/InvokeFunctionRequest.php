<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvokeFunctionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvokeFunctionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * xCffLogType  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    * xCffRequestVersion  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    * xCffInstanceMemory  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    * body  执行函数请求体，为json格式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'functionUrn' => 'string',
            'xCffLogType' => 'string',
            'xCffRequestVersion' => 'string',
            'xCffInstanceMemory' => 'string',
            'body' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * xCffLogType  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    * xCffRequestVersion  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    * xCffInstanceMemory  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    * body  执行函数请求体，为json格式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'functionUrn' => null,
        'xCffLogType' => null,
        'xCffRequestVersion' => null,
        'xCffInstanceMemory' => null,
        'body' => null
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
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * xCffLogType  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    * xCffRequestVersion  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    * xCffInstanceMemory  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    * body  执行函数请求体，为json格式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'functionUrn' => 'function_urn',
            'xCffLogType' => 'X-Cff-Log-Type',
            'xCffRequestVersion' => 'X-CFF-Request-Version',
            'xCffInstanceMemory' => 'X-Cff-Instance-Memory',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * xCffLogType  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    * xCffRequestVersion  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    * xCffInstanceMemory  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    * body  执行函数请求体，为json格式。
    *
    * @var string[]
    */
    protected static $setters = [
            'functionUrn' => 'setFunctionUrn',
            'xCffLogType' => 'setXCffLogType',
            'xCffRequestVersion' => 'setXCffRequestVersion',
            'xCffInstanceMemory' => 'setXCffInstanceMemory',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * functionUrn  函数的URN，详细解释见FunctionGraph函数模型的描述。
    * xCffLogType  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    * xCffRequestVersion  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    * xCffInstanceMemory  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    * body  执行函数请求体，为json格式。
    *
    * @var string[]
    */
    protected static $getters = [
            'functionUrn' => 'getFunctionUrn',
            'xCffLogType' => 'getXCffLogType',
            'xCffRequestVersion' => 'getXCffRequestVersion',
            'xCffInstanceMemory' => 'getXCffInstanceMemory',
            'body' => 'getBody'
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
        $this->container['functionUrn'] = isset($data['functionUrn']) ? $data['functionUrn'] : null;
        $this->container['xCffLogType'] = isset($data['xCffLogType']) ? $data['xCffLogType'] : null;
        $this->container['xCffRequestVersion'] = isset($data['xCffRequestVersion']) ? $data['xCffRequestVersion'] : null;
        $this->container['xCffInstanceMemory'] = isset($data['xCffInstanceMemory']) ? $data['xCffInstanceMemory'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['functionUrn'] === null) {
            $invalidProperties[] = "'functionUrn' can't be null";
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
    * Gets functionUrn
    *  函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return string
    */
    public function getFunctionUrn()
    {
        return $this->container['functionUrn'];
    }

    /**
    * Sets functionUrn
    *
    * @param string $functionUrn 函数的URN，详细解释见FunctionGraph函数模型的描述。
    *
    * @return $this
    */
    public function setFunctionUrn($functionUrn)
    {
        $this->container['functionUrn'] = $functionUrn;
        return $this;
    }

    /**
    * Gets xCffLogType
    *  取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    *
    * @return string|null
    */
    public function getXCffLogType()
    {
        return $this->container['xCffLogType'];
    }

    /**
    * Sets xCffLogType
    *
    * @param string|null $xCffLogType 取值为：tail（返回函数执行后的4K日志），或者为空（不返回日志）。
    *
    * @return $this
    */
    public function setXCffLogType($xCffLogType)
    {
        $this->container['xCffLogType'] = $xCffLogType;
        return $this;
    }

    /**
    * Gets xCffRequestVersion
    *  返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    *
    * @return string|null
    */
    public function getXCffRequestVersion()
    {
        return $this->container['xCffRequestVersion'];
    }

    /**
    * Sets xCffRequestVersion
    *
    * @param string|null $xCffRequestVersion 返回体格式，取值v0,v1。 v0:默认返回文本格式 v1:默认返回json格式，sdk需要使用此值。
    *
    * @return $this
    */
    public function setXCffRequestVersion($xCffRequestVersion)
    {
        $this->container['xCffRequestVersion'] = $xCffRequestVersion;
        return $this;
    }

    /**
    * Gets xCffInstanceMemory
    *  设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    *
    * @return string|null
    */
    public function getXCffInstanceMemory()
    {
        return $this->container['xCffInstanceMemory'];
    }

    /**
    * Sets xCffInstanceMemory
    *
    * @param string|null $xCffInstanceMemory 设置本次执行函数使用的内存规格,取值： 128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096、8192、10240
    *
    * @return $this
    */
    public function setXCffInstanceMemory($xCffInstanceMemory)
    {
        $this->container['xCffInstanceMemory'] = $xCffInstanceMemory;
        return $this;
    }

    /**
    * Gets body
    *  执行函数请求体，为json格式。
    *
    * @return map[string,object]|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param map[string,object]|null $body 执行函数请求体，为json格式。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

