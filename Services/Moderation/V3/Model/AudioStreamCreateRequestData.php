<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioStreamCreateRequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioStreamCreateRequest_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    * language  指定音频流中语种类型 zh: 中文,默认值为zh
    * returnAllResults  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'language' => 'string',
            'returnAllResults' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    * language  指定音频流中语种类型 zh: 中文,默认值为zh
    * returnAllResults  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'language' => null,
        'returnAllResults' => null
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
    * url  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    * language  指定音频流中语种类型 zh: 中文,默认值为zh
    * returnAllResults  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'language' => 'language',
            'returnAllResults' => 'return_all_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    * language  指定音频流中语种类型 zh: 中文,默认值为zh
    * returnAllResults  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'language' => 'setLanguage',
            'returnAllResults' => 'setReturnAllResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    * language  指定音频流中语种类型 zh: 中文,默认值为zh
    * returnAllResults  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'language' => 'getLanguage',
            'returnAllResults' => 'getReturnAllResults'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['returnAllResults'] = isset($data['returnAllResults']) ? $data['returnAllResults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
    * Gets url
    *  音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 音频流url地址，支持rtmp、rtmps、hls、http、https等主流协议。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets language
    *  指定音频流中语种类型 zh: 中文,默认值为zh
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 指定音频流中语种类型 zh: 中文,默认值为zh
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets returnAllResults
    *  返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @return bool|null
    */
    public function getReturnAllResults()
    {
        return $this->container['returnAllResults'];
    }

    /**
    * Sets returnAllResults
    *
    * @param bool|null $returnAllResults 返回音频片段结果的策略。可选值如下： false：返回风险等级为非pass的音频片段结果 true：返回所有风险等级的音频片段结果 说明： 1. 默认值为false； 2. 每隔10秒返回一次最近10秒音频流的审核结果。
    *
    * @return $this
    */
    public function setReturnAllResults($returnAllResults)
    {
        $this->container['returnAllResults'] = $returnAllResults;
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

