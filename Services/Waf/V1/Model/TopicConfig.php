<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopicConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopicConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicName  话题名称
    * topicDescription  话题描述
    * sensitiveWords  敏感词列表
    * blackSamples  黑样本列表
    * whiteSamples  白样本列表
    * scope  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    * blockResponse  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    * customLlmId  关联的自定义大模型ID（可选）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicName' => 'string',
            'topicDescription' => 'string',
            'sensitiveWords' => 'string[]',
            'blackSamples' => 'string[]',
            'whiteSamples' => 'string[]',
            'scope' => 'string',
            'blockResponse' => 'string',
            'customLlmId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicName  话题名称
    * topicDescription  话题描述
    * sensitiveWords  敏感词列表
    * blackSamples  黑样本列表
    * whiteSamples  白样本列表
    * scope  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    * blockResponse  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    * customLlmId  关联的自定义大模型ID（可选）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicName' => null,
        'topicDescription' => null,
        'sensitiveWords' => null,
        'blackSamples' => null,
        'whiteSamples' => null,
        'scope' => null,
        'blockResponse' => null,
        'customLlmId' => null
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
    * topicName  话题名称
    * topicDescription  话题描述
    * sensitiveWords  敏感词列表
    * blackSamples  黑样本列表
    * whiteSamples  白样本列表
    * scope  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    * blockResponse  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    * customLlmId  关联的自定义大模型ID（可选）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicName' => 'topic_name',
            'topicDescription' => 'topic_description',
            'sensitiveWords' => 'sensitive_words',
            'blackSamples' => 'black_samples',
            'whiteSamples' => 'white_samples',
            'scope' => 'scope',
            'blockResponse' => 'block_response',
            'customLlmId' => 'custom_llm_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicName  话题名称
    * topicDescription  话题描述
    * sensitiveWords  敏感词列表
    * blackSamples  黑样本列表
    * whiteSamples  白样本列表
    * scope  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    * blockResponse  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    * customLlmId  关联的自定义大模型ID（可选）
    *
    * @var string[]
    */
    protected static $setters = [
            'topicName' => 'setTopicName',
            'topicDescription' => 'setTopicDescription',
            'sensitiveWords' => 'setSensitiveWords',
            'blackSamples' => 'setBlackSamples',
            'whiteSamples' => 'setWhiteSamples',
            'scope' => 'setScope',
            'blockResponse' => 'setBlockResponse',
            'customLlmId' => 'setCustomLlmId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicName  话题名称
    * topicDescription  话题描述
    * sensitiveWords  敏感词列表
    * blackSamples  黑样本列表
    * whiteSamples  白样本列表
    * scope  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    * blockResponse  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    * customLlmId  关联的自定义大模型ID（可选）
    *
    * @var string[]
    */
    protected static $getters = [
            'topicName' => 'getTopicName',
            'topicDescription' => 'getTopicDescription',
            'sensitiveWords' => 'getSensitiveWords',
            'blackSamples' => 'getBlackSamples',
            'whiteSamples' => 'getWhiteSamples',
            'scope' => 'getScope',
            'blockResponse' => 'getBlockResponse',
            'customLlmId' => 'getCustomLlmId'
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
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['topicDescription'] = isset($data['topicDescription']) ? $data['topicDescription'] : null;
        $this->container['sensitiveWords'] = isset($data['sensitiveWords']) ? $data['sensitiveWords'] : null;
        $this->container['blackSamples'] = isset($data['blackSamples']) ? $data['blackSamples'] : null;
        $this->container['whiteSamples'] = isset($data['whiteSamples']) ? $data['whiteSamples'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['blockResponse'] = isset($data['blockResponse']) ? $data['blockResponse'] : null;
        $this->container['customLlmId'] = isset($data['customLlmId']) ? $data['customLlmId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topicName'] === null) {
            $invalidProperties[] = "'topicName' can't be null";
        }
            if ((mb_strlen($this->container['topicName']) > 20)) {
                $invalidProperties[] = "invalid value for 'topicName', the character length must be smaller than or equal to 20.";
            }
        if ($this->container['topicDescription'] === null) {
            $invalidProperties[] = "'topicDescription' can't be null";
        }
            if ((mb_strlen($this->container['topicDescription']) > 500)) {
                $invalidProperties[] = "invalid value for 'topicDescription', the character length must be smaller than or equal to 500.";
            }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
            if (!is_null($this->container['blockResponse']) && (mb_strlen($this->container['blockResponse']) > 2048)) {
                $invalidProperties[] = "invalid value for 'blockResponse', the character length must be smaller than or equal to 2048.";
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
    * Gets topicName
    *  话题名称
    *
    * @return string
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string $topicName 话题名称
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets topicDescription
    *  话题描述
    *
    * @return string
    */
    public function getTopicDescription()
    {
        return $this->container['topicDescription'];
    }

    /**
    * Sets topicDescription
    *
    * @param string $topicDescription 话题描述
    *
    * @return $this
    */
    public function setTopicDescription($topicDescription)
    {
        $this->container['topicDescription'] = $topicDescription;
        return $this;
    }

    /**
    * Gets sensitiveWords
    *  敏感词列表
    *
    * @return string[]|null
    */
    public function getSensitiveWords()
    {
        return $this->container['sensitiveWords'];
    }

    /**
    * Sets sensitiveWords
    *
    * @param string[]|null $sensitiveWords 敏感词列表
    *
    * @return $this
    */
    public function setSensitiveWords($sensitiveWords)
    {
        $this->container['sensitiveWords'] = $sensitiveWords;
        return $this;
    }

    /**
    * Gets blackSamples
    *  黑样本列表
    *
    * @return string[]|null
    */
    public function getBlackSamples()
    {
        return $this->container['blackSamples'];
    }

    /**
    * Sets blackSamples
    *
    * @param string[]|null $blackSamples 黑样本列表
    *
    * @return $this
    */
    public function setBlackSamples($blackSamples)
    {
        $this->container['blackSamples'] = $blackSamples;
        return $this;
    }

    /**
    * Gets whiteSamples
    *  白样本列表
    *
    * @return string[]|null
    */
    public function getWhiteSamples()
    {
        return $this->container['whiteSamples'];
    }

    /**
    * Sets whiteSamples
    *
    * @param string[]|null $whiteSamples 白样本列表
    *
    * @return $this
    */
    public function setWhiteSamples($whiteSamples)
    {
        $this->container['whiteSamples'] = $whiteSamples;
        return $this;
    }

    /**
    * Gets scope
    *  检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    *
    * @return string
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string $scope 检测作用域，取值 request/response/request_response（值合法性由后端validateTopicConfig校验，契约层不声明enum）
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets blockResponse
    *  拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    *
    * @return string|null
    */
    public function getBlockResponse()
    {
        return $this->container['blockResponse'];
    }

    /**
    * Sets blockResponse
    *
    * @param string|null $blockResponse 拦截回包内容（仅外层action.category=block时有意义，非block落库归一化为null）
    *
    * @return $this
    */
    public function setBlockResponse($blockResponse)
    {
        $this->container['blockResponse'] = $blockResponse;
        return $this;
    }

    /**
    * Gets customLlmId
    *  关联的自定义大模型ID（可选）
    *
    * @return string|null
    */
    public function getCustomLlmId()
    {
        return $this->container['customLlmId'];
    }

    /**
    * Sets customLlmId
    *
    * @param string|null $customLlmId 关联的自定义大模型ID（可选）
    *
    * @return $this
    */
    public function setCustomLlmId($customLlmId)
    {
        $this->container['customLlmId'] = $customLlmId;
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

