<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioStreamCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioStreamCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
    * categories  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\AudioStreamCreateRequestData',
            'eventType' => 'string',
            'categories' => 'string[]',
            'callback' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
    * categories  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'eventType' => null,
        'categories' => null,
        'callback' => null
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
    * eventType  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
    * categories  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'eventType' => 'event_type',
            'categories' => 'categories',
            'callback' => 'callback'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
    * categories  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'eventType' => 'setEventType',
            'categories' => 'setCategories',
            'callback' => 'setCallback'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
    * categories  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'eventType' => 'getEventType',
            'categories' => 'getCategories',
            'callback' => 'getCallback'
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
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['callback'] = isset($data['callback']) ? $data['callback'] : null;
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
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
        }
        if ($this->container['callback'] === null) {
            $invalidProperties[] = "'callback' can't be null";
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
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\AudioStreamCreateRequestData
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\AudioStreamCreateRequestData $data data
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
    *  事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
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
    * @param string $eventType 事件类型，可选值如下： default：默认事件 audiobook：有声书 education：教育音频 game：游戏语音房 live：秀场直播 ecommerce：电商直播 voiceroom：交友语音房 private：私密语音聊天
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
    *  需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    *
    * @return string[]
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[] $categories 需要检测的风险类型，列表不能为空。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets callback
    *  回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @return string
    */
    public function getCallback()
    {
        return $this->container['callback'];
    }

    /**
    * Sets callback
    *
    * @param string $callback 回调http接口，服务将根据该字段回调通知用户审核结果，流未结束时，回调审核违规内容，流结束时，审核片段违规或不违规都将回调客户端。 回调内容如下： ``` {     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"create_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"details\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"start_time\":\"2022-07-30T08:57:11.011Z\", // 当前音频片段开始的绝对时间                 \"end_time\":\"2022-07-30T08:57:21.011Z\",     // 当前音频片段结束的绝对时间                 \"segments\":[                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     },                     {                         \"segment\":\"xxx\"                     }                 ]             }         ],         \"request_params\":{             \"event_type\":\"default\",             \"data\":{                 \"url\":\"rtmp://xxxx\"             },             \"callback\":\"http://xxx\",             \"categories\":[                 \"porn\",                 \"ad\"             ]         }     } }
    *
    * @return $this
    */
    public function setCallback($callback)
    {
        $this->container['callback'] = $callback;
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

