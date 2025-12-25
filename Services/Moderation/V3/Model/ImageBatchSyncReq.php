<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageBatchSyncReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageBatchSyncReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
    * categories  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    * imageTextConfig  imageTextConfig
    * urls  图片url列表。
    * language  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    * bizType  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'categories' => 'string[]',
            'imageTextConfig' => '\HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqImageTextConfig',
            'urls' => '\HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqUrls[]',
            'language' => 'string',
            'bizType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
    * categories  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    * imageTextConfig  imageTextConfig
    * urls  图片url列表。
    * language  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    * bizType  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'categories' => null,
        'imageTextConfig' => null,
        'urls' => null,
        'language' => null,
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
    * eventType  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
    * categories  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    * imageTextConfig  imageTextConfig
    * urls  图片url列表。
    * language  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    * bizType  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'categories' => 'categories',
            'imageTextConfig' => 'image_text_config',
            'urls' => 'urls',
            'language' => 'language',
            'bizType' => 'biz_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
    * categories  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    * imageTextConfig  imageTextConfig
    * urls  图片url列表。
    * language  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    * bizType  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'categories' => 'setCategories',
            'imageTextConfig' => 'setImageTextConfig',
            'urls' => 'setUrls',
            'language' => 'setLanguage',
            'bizType' => 'setBizType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
    * categories  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    * imageTextConfig  imageTextConfig
    * urls  图片url列表。
    * language  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    * bizType  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'categories' => 'getCategories',
            'imageTextConfig' => 'getImageTextConfig',
            'urls' => 'getUrls',
            'language' => 'getLanguage',
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
        $this->container['imageTextConfig'] = isset($data['imageTextConfig']) ? $data['imageTextConfig'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
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
        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
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
    *  事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
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
    * @param string|null $eventType 事件类型。可选值如下： - head_image：头像 - album：相册 - dynamic：动态 - article：帖子 - comment：评论 - room_cover：房间封面 - group_message：群聊图片 - message：私聊图片 - product：商品图片
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
    *  检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
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
    * @param string[]|null $categories 检测场景。可添加的检测场景如下： - terrorism：暴恐元素的检测。 - porn：涉黄元素的检测。 - politics：涉政人物的检测。 - image_text：广告图文的检测。 可通过配置上述场景，来完对应场景元素的检测。每个检测场景的检测次数会分类统计。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets imageTextConfig
    *  imageTextConfig
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqImageTextConfig|null
    */
    public function getImageTextConfig()
    {
        return $this->container['imageTextConfig'];
    }

    /**
    * Sets imageTextConfig
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqImageTextConfig|null $imageTextConfig imageTextConfig
    *
    * @return $this
    */
    public function setImageTextConfig($imageTextConfig)
    {
        $this->container['imageTextConfig'] = $imageTextConfig;
        return $this;
    }

    /**
    * Gets urls
    *  图片url列表。
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqUrls[]
    */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
    * Sets urls
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncReqUrls[] $urls 图片url列表。
    *
    * @return $this
    */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
        return $this;
    }

    /**
    * Gets language
    *  指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
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
    * @param string|null $language 指定图片中文字语种类型。 - zh: 中文 默认值为zh，中国站仅支持zh。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets bizType
    *  用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
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
    * @param string|null $bizType 用户在控制台界面创建的自定义审核策略名称。 - 如果请求参数中包含biz_type则优先使用biztype。 - 如果未传biz_type则event_type和categories为必传参数。
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

