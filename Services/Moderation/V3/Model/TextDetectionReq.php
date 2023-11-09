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
    * categories  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    * glossaryNames  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    * bizType  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'categories' => 'string[]',
            'glossaryNames' => 'string[]',
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\TextDetectionDataReq',
            'whiteGlossaryNames' => 'string[]',
            'bizType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * categories  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    * glossaryNames  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    * bizType  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'categories' => null,
        'glossaryNames' => null,
        'data' => null,
        'whiteGlossaryNames' => null,
        'bizType' => null
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
    * categories  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    * glossaryNames  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    * bizType  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'categories' => 'categories',
            'glossaryNames' => 'glossary_names',
            'data' => 'data',
            'whiteGlossaryNames' => 'white_glossary_names',
            'bizType' => 'biz_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * categories  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    * glossaryNames  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    * bizType  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'categories' => 'setCategories',
            'glossaryNames' => 'setGlossaryNames',
            'data' => 'setData',
            'whiteGlossaryNames' => 'setWhiteGlossaryNames',
            'bizType' => 'setBizType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    * categories  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    * glossaryNames  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
    * data  data
    * whiteGlossaryNames  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    * bizType  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'categories' => 'getCategories',
            'glossaryNames' => 'getGlossaryNames',
            'data' => 'getData',
            'whiteGlossaryNames' => 'getWhiteGlossaryNames',
            'bizType' => 'getBizType'
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
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['glossaryNames'] = isset($data['glossaryNames']) ? $data['glossaryNames'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['whiteGlossaryNames'] = isset($data['whiteGlossaryNames']) ? $data['whiteGlossaryNames'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型。  可选值如下：  nickname: 昵称  title: 标题  article: 帖⼦  comment: 评论  barrage: 弹幕  search: 搜索栏  profile: 个⼈简介
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets categories
    *  文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    *
    * @return string[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[]|null $categories 文本审核场景，可选值如下： terrorism: 暴恐 porn: 色情 ban: 违禁 abuse: 辱骂 ad: 广告 当categories缺省或为空时，默认审核terrorism、porn、ban、abuse、ad。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets glossaryNames
    *  检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
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
    * @param string[]|null $glossaryNames 检测时使用的自定义黑名单词库列表。自定义黑词库的创建和使用请参见[配置定义黑名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section12400140132318)。
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
    *  检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
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
    * @param string[]|null $whiteGlossaryNames 检测时使用的自定义白名单词库列表。自定义白词库的创建和使用请参见[配置定义白名单词库](https://support.huaweicloud.com/api-moderation/moderation_03_0027.html#moderation_03_0027__section178844141394)。
    *
    * @return $this
    */
    public function setWhiteGlossaryNames($whiteGlossaryNames)
    {
        $this->container['whiteGlossaryNames'] = $whiteGlossaryNames;
        return $this;
    }

    /**
    * Gets bizType
    *  自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @return string|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param string|null $bizType 自定义审核策略名称，可在控制台配置;如果请求参数中传了biz_type则优先使用biz_type,如果用户没传biz_type则event_type必须传。
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
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

