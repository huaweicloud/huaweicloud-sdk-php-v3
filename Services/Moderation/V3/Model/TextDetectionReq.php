<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextDetectionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextDetectionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * glossaryNames  检测时使用的自定义黑名单词库列表。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'glossaryNames' => 'string[]',
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\TextDetectionDataReq',
            'whiteGlossaryNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * glossaryNames  检测时使用的自定义黑名单词库列表。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'glossaryNames' => null,
        'data' => null,
        'whiteGlossaryNames' => null
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
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * glossaryNames  检测时使用的自定义黑名单词库列表。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'glossaryNames' => 'glossary_names',
            'data' => 'data',
            'whiteGlossaryNames' => 'white_glossary_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * glossaryNames  检测时使用的自定义黑名单词库列表。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'glossaryNames' => 'setGlossaryNames',
            'data' => 'setData',
            'whiteGlossaryNames' => 'setWhiteGlossaryNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * glossaryNames  检测时使用的自定义黑名单词库列表。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'glossaryNames' => 'getGlossaryNames',
            'data' => 'getData',
            'whiteGlossaryNames' => 'getWhiteGlossaryNames'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['glossaryNames'] = isset($data['glossaryNames']) ? $data['glossaryNames'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['whiteGlossaryNames'] = isset($data['whiteGlossaryNames']) ? $data['whiteGlossaryNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
    * Gets eventType
    *  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets glossaryNames
    *  检测时使用的自定义黑名单词库列表。
    *
    * @return string[]|null
    */
    public function getGlossaryNames()
    {
        return $this->container['glossaryNames'];
    }

    /**
    * Sets glossaryNames
    *
    * @param string[]|null $glossaryNames 检测时使用的自定义黑名单词库列表。
    *
    * @return $this
    */
    public function setGlossaryNames($glossaryNames)
    {
        $this->container['glossaryNames'] = $glossaryNames;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\TextDetectionDataReq
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\TextDetectionDataReq $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets whiteGlossaryNames
    *  检测时使用的自定义白名单词库列表。
    *
    * @return string[]|null
    */
    public function getWhiteGlossaryNames()
    {
        return $this->container['whiteGlossaryNames'];
    }

    /**
    * Sets whiteGlossaryNames
    *
    * @param string[]|null $whiteGlossaryNames 检测时使用的自定义白名单词库列表。
    *
    * @return $this
    */
    public function setWhiteGlossaryNames($whiteGlossaryNames)
    {
        $this->container['whiteGlossaryNames'] = $whiteGlossaryNames;
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

