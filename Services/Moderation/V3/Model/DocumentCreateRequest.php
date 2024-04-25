<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    * imageCategories  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * textCategories  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    * videoImageCategories  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * audioCategories  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    * callback  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    * seed  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\DocumentCreateRequestData',
            'eventType' => 'string',
            'imageCategories' => 'string[]',
            'textCategories' => 'string[]',
            'videoImageCategories' => 'string[]',
            'audioCategories' => 'string[]',
            'callback' => 'string',
            'seed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    * imageCategories  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * textCategories  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    * videoImageCategories  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * audioCategories  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    * callback  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    * seed  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'eventType' => null,
        'imageCategories' => null,
        'textCategories' => null,
        'videoImageCategories' => null,
        'audioCategories' => null,
        'callback' => null,
        'seed' => null
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
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    * imageCategories  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * textCategories  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    * videoImageCategories  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * audioCategories  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    * callback  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    * seed  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'eventType' => 'event_type',
            'imageCategories' => 'image_categories',
            'textCategories' => 'text_categories',
            'videoImageCategories' => 'video_image_categories',
            'audioCategories' => 'audio_categories',
            'callback' => 'callback',
            'seed' => 'seed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    * imageCategories  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * textCategories  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    * videoImageCategories  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * audioCategories  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    * callback  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    * seed  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'eventType' => 'setEventType',
            'imageCategories' => 'setImageCategories',
            'textCategories' => 'setTextCategories',
            'videoImageCategories' => 'setVideoImageCategories',
            'audioCategories' => 'setAudioCategories',
            'callback' => 'setCallback',
            'seed' => 'setSeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    * imageCategories  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * textCategories  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    * videoImageCategories  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    * audioCategories  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    * callback  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    * seed  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'eventType' => 'getEventType',
            'imageCategories' => 'getImageCategories',
            'textCategories' => 'getTextCategories',
            'videoImageCategories' => 'getVideoImageCategories',
            'audioCategories' => 'getAudioCategories',
            'callback' => 'getCallback',
            'seed' => 'getSeed'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['imageCategories'] = isset($data['imageCategories']) ? $data['imageCategories'] : null;
        $this->container['textCategories'] = isset($data['textCategories']) ? $data['textCategories'] : null;
        $this->container['videoImageCategories'] = isset($data['videoImageCategories']) ? $data['videoImageCategories'] : null;
        $this->container['audioCategories'] = isset($data['audioCategories']) ? $data['audioCategories'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
        $this->container['seed'] = isset($data['seed']) ? $data['seed'] : null;
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
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
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
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\DocumentCreateRequestData
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\DocumentCreateRequestData $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
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
    * @param string $eventType 事件类型，可选值如下： default：默认事件 liberal_arts_education：文科教育 sciences_education：理科教育 news：新闻 forums：论坛 novels：小说
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets imageCategories
    *  文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    *
    * @return string[]|null
    */
    public function getImageCategories()
    {
        return $this->container['imageCategories'];
    }

    /**
    * Sets imageCategories
    *
    * @param string[]|null $imageCategories 文档中图片需要检测的风险类型，不传或为空时表示不审核图片内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    *
    * @return $this
    */
    public function setImageCategories($imageCategories)
    {
        $this->container['imageCategories'] = $imageCategories;
        return $this;
    }

    /**
    * Gets textCategories
    *  文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    *
    * @return string[]|null
    */
    public function getTextCategories()
    {
        return $this->container['textCategories'];
    }

    /**
    * Sets textCategories
    *
    * @param string[]|null $textCategories 文档中文本需要检测的风险类型，不传或为空时表示不审核文本内容， 可取值如下： default: 检测涉政、暴恐、违禁、色情、辱骂、广告等违规内容
    *
    * @return $this
    */
    public function setTextCategories($textCategories)
    {
        $this->container['textCategories'] = $textCategories;
        return $this;
    }

    /**
    * Gets videoImageCategories
    *  网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    *
    * @return string[]|null
    */
    public function getVideoImageCategories()
    {
        return $this->container['videoImageCategories'];
    }

    /**
    * Sets videoImageCategories
    *
    * @param string[]|null $videoImageCategories 网页视频中图片需要检测的风险类型，不传或为空时表示不审核网页视频内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 terrorism: 暴恐检测 bad_scene: 不良场景检测 image_text: 图文检测
    *
    * @return $this
    */
    public function setVideoImageCategories($videoImageCategories)
    {
        $this->container['videoImageCategories'] = $videoImageCategories;
        return $this;
    }

    /**
    * Gets audioCategories
    *  网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    *
    * @return string[]|null
    */
    public function getAudioCategories()
    {
        return $this->container['audioCategories'];
    }

    /**
    * Sets audioCategories
    *
    * @param string[]|null $audioCategories 网页视频中音频需要检测的风险类型，不传或为空时表示不审核网页视频中音频的内容， 可取值如下： politics: 涉政检测 porn：涉黄检测 ad：广告检测 abuse：辱骂检测 moan：娇喘检测
    *
    * @return $this
    */
    public function setAudioCategories($audioCategories)
    {
        $this->container['audioCategories'] = $audioCategories;
        return $this;
    }

    /**
    * Gets callback
    *  回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    *
    * @return string|null
    */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
    * Sets callback
    *
    * @param string|null $callback 回调http接口：当该字段非空时，服务将根据该字段回调通知用户审核结果。
    *
    * @return $this
    */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;
        return $this;
    }

    /**
    * Gets seed
    *  用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @return string|null
    */
    public function getSeed()
    {
        return $this->container['seed'];
    }

    /**
    * Sets seed
    *
    * @param string|null $seed 用于回调通知时校验请求由华为云内容安全服务发起，由您自定义。随机字符串，由英文字母、数字、下划线组成，不超过64个字符。 说明：当seed非空时，headers中将包含X-Auth-Signature字段，字段的值使用HmacSHA256算法生成，待加密字符串由create_time、job_id、request_id、seed按照顺序拼接而成，密钥为seed。
    *
    * @return $this
    */
    public function setSeed($seed)
    {
        $this->container['seed'] = $seed;
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

