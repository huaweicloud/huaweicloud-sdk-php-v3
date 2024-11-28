<?php

namespace HuaweiCloud\SDK\MaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompletionUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompletionUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * completionTokens  表示模型生成的答案中包含的tokens的数量。
    * promptTokens  表示生成结果时使用的提示文本的tokens的数量。
    * totalTokens  对话过程中使用的tokens总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'completionTokens' => 'float',
            'promptTokens' => 'float',
            'totalTokens' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * completionTokens  表示模型生成的答案中包含的tokens的数量。
    * promptTokens  表示生成结果时使用的提示文本的tokens的数量。
    * totalTokens  对话过程中使用的tokens总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'completionTokens' => 'int32',
        'promptTokens' => 'int32',
        'totalTokens' => 'int32'
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
    * completionTokens  表示模型生成的答案中包含的tokens的数量。
    * promptTokens  表示生成结果时使用的提示文本的tokens的数量。
    * totalTokens  对话过程中使用的tokens总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'completionTokens' => 'completion_tokens',
            'promptTokens' => 'prompt_tokens',
            'totalTokens' => 'total_tokens'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * completionTokens  表示模型生成的答案中包含的tokens的数量。
    * promptTokens  表示生成结果时使用的提示文本的tokens的数量。
    * totalTokens  对话过程中使用的tokens总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'completionTokens' => 'setCompletionTokens',
            'promptTokens' => 'setPromptTokens',
            'totalTokens' => 'setTotalTokens'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * completionTokens  表示模型生成的答案中包含的tokens的数量。
    * promptTokens  表示生成结果时使用的提示文本的tokens的数量。
    * totalTokens  对话过程中使用的tokens总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'completionTokens' => 'getCompletionTokens',
            'promptTokens' => 'getPromptTokens',
            'totalTokens' => 'getTotalTokens'
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
        $this->container['completionTokens'] = isset($data['completionTokens']) ? $data['completionTokens'] : null;
        $this->container['promptTokens'] = isset($data['promptTokens']) ? $data['promptTokens'] : null;
        $this->container['totalTokens'] = isset($data['totalTokens']) ? $data['totalTokens'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['completionTokens'] === null) {
            $invalidProperties[] = "'completionTokens' can't be null";
        }
        if ($this->container['promptTokens'] === null) {
            $invalidProperties[] = "'promptTokens' can't be null";
        }
        if ($this->container['totalTokens'] === null) {
            $invalidProperties[] = "'totalTokens' can't be null";
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
    * Gets completionTokens
    *  表示模型生成的答案中包含的tokens的数量。
    *
    * @return float
    */
    public function getCompletionTokens()
    {
        return $this->container['completionTokens'];
    }

    /**
    * Sets completionTokens
    *
    * @param float $completionTokens 表示模型生成的答案中包含的tokens的数量。
    *
    * @return $this
    */
    public function setCompletionTokens($completionTokens)
    {
        $this->container['completionTokens'] = $completionTokens;
        return $this;
    }

    /**
    * Gets promptTokens
    *  表示生成结果时使用的提示文本的tokens的数量。
    *
    * @return float
    */
    public function getPromptTokens()
    {
        return $this->container['promptTokens'];
    }

    /**
    * Sets promptTokens
    *
    * @param float $promptTokens 表示生成结果时使用的提示文本的tokens的数量。
    *
    * @return $this
    */
    public function setPromptTokens($promptTokens)
    {
        $this->container['promptTokens'] = $promptTokens;
        return $this;
    }

    /**
    * Gets totalTokens
    *  对话过程中使用的tokens总数。
    *
    * @return float
    */
    public function getTotalTokens()
    {
        return $this->container['totalTokens'];
    }

    /**
    * Sets totalTokens
    *
    * @param float $totalTokens 对话过程中使用的tokens总数。
    *
    * @return $this
    */
    public function setTotalTokens($totalTokens)
    {
        $this->container['totalTokens'] = $totalTokens;
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

