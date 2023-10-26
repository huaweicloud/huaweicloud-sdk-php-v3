<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoStreamCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoStreamCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件
    * imageCategories  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    * audioCategories  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoStreamCreateRequestData',
            'eventType' => 'string',
            'imageCategories' => 'string[]',
            'audioCategories' => 'string[]',
            'callback' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件
    * imageCategories  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    * audioCategories  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'eventType' => null,
        'imageCategories' => null,
        'audioCategories' => null,
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
    * eventType  事件类型，可选值如下： default：默认事件
    * imageCategories  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    * audioCategories  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'eventType' => 'event_type',
            'imageCategories' => 'image_categories',
            'audioCategories' => 'audio_categories',
            'callback' => 'callback'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件
    * imageCategories  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    * audioCategories  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'eventType' => 'setEventType',
            'imageCategories' => 'setImageCategories',
            'audioCategories' => 'setAudioCategories',
            'callback' => 'setCallback'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  data
    * eventType  事件类型，可选值如下： default：默认事件
    * imageCategories  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    * audioCategories  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
    * callback  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'eventType' => 'getEventType',
            'imageCategories' => 'getImageCategories',
            'audioCategories' => 'getAudioCategories',
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
    const EVENT_TYPE__DEFAULT = 'default';
    const IMAGE_CATEGORIES_PORN = 'porn';
    const IMAGE_CATEGORIES_POLITICS = 'politics';
    const IMAGE_CATEGORIES_TERRORISM = 'terrorism';
    const IMAGE_CATEGORIES_IMAGE_TEXT = 'image_text';
    const AUDIO_CATEGORIES_PORN = 'porn';
    const AUDIO_CATEGORIES_AD = 'ad';
    const AUDIO_CATEGORIES_POLITICS = 'politics';
    const AUDIO_CATEGORIES_MOAN = 'moan';
    const AUDIO_CATEGORIES_ABUSE = 'abuse';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE__DEFAULT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImageCategoriesAllowableValues()
    {
        return [
            self::IMAGE_CATEGORIES_PORN,
            self::IMAGE_CATEGORIES_POLITICS,
            self::IMAGE_CATEGORIES_TERRORISM,
            self::IMAGE_CATEGORIES_IMAGE_TEXT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioCategoriesAllowableValues()
    {
        return [
            self::AUDIO_CATEGORIES_PORN,
            self::AUDIO_CATEGORIES_AD,
            self::AUDIO_CATEGORIES_POLITICS,
            self::AUDIO_CATEGORIES_MOAN,
            self::AUDIO_CATEGORIES_ABUSE,
        ];
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
        $this->container['audioCategories'] = isset($data['audioCategories']) ? $data['audioCategories'] : null;
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
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['imageCategories'] === null) {
            $invalidProperties[] = "'imageCategories' can't be null";
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
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoStreamCreateRequestData
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoStreamCreateRequestData $data data
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
    *  事件类型，可选值如下： default：默认事件
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
    * @param string $eventType 事件类型，可选值如下： default：默认事件
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
    *  视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    *
    * @return string[]
    */
    public function getImageCategories()
    {
        return $this->container['imageCategories'];
    }

    /**
    * Sets imageCategories
    *
    * @param string[] $imageCategories 视频流中画面需要检测的风险类型，列表不能为空。 porn：鉴黄内容的检测 terrorism：涉政暴恐内容的检测 politics：政治敏感人物内容的检测 image_text：图文违规内容的检测（检测图片中出现的广告、色情、暴恐、涉政的文字违规内容以及二维码内容）
    *
    * @return $this
    */
    public function setImageCategories($imageCategories)
    {
        $this->container['imageCategories'] = $imageCategories;
        return $this;
    }

    /**
    * Gets audioCategories
    *  视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
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
    * @param string[]|null $audioCategories 视频流中音频需要检测的风险类型，不传或为空时表示不审核音频维度。 porn：涉黄检测 politics: 涉政检测 abuse: 辱骂检测 ad: 广告检测 moan: 娇喘检测
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
    *  回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
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
    * @param string $callback 回调http接口，回调内容如下： ```{     \"job_id\":\"xxxxxx\",     \"status\":\"running\", //running - 审核中，succeeded - 审核完成，failed - 审核失败     \"request_id\":\"2419446b1fe14203f64e4018d12db3dd\",     \"craete_time\":\"2022-07-30T08:57:11.011Z\",     \"update_time\":\"2022-07-30T08:57:14.014Z\",     \"result\":{         \"suggestion\":\"block\",         \"audio_detail\":[             {                 \"suggestion\":\"block\",                 \"label\":\"politics\",                 \"audio_text\":\"xxxx\",                 \"detail\":[                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"segments\":[                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xxx\"                             }                         ]                     }                 ]             }         ],         \"image_detail\":[             {                 \"suggestion\":\"block\",                 \"category\":\"xxx\",                 \"time\":\"xxx\", // 视频流截帧图片发生的绝对时间                 \"detail\":[                     {                         \"face_location\":{                             \"bottom_right_x\":247,                             \"bottom_right_y\":191,                             \"top_left_y\":79,                             \"top_left_x\":160                         },                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"xxx\",                         \"category\":\"xxx\"                     },                     {                         \"qr_content\":\"xxx\",                         \"confidence\":\"xxx\",                         \"suggestion\":\"xxx\",                         \"label\":\"xxx\",                         \"category\":\"xxx\",                         \"qr_location\":{                             \"bottom_right_x\":554,                             \"bottom_right_y\":842,                             \"top_left_y\":426,                             \"top_left_x\":140                         }                     },                     {                         \"confidence\":1,                         \"suggestion\":\"block\",                         \"label\":\"politics\",                         \"category\":\"image_text\",                         \"segments\":[                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxx\"                             },                             {                                 \"segment\":\"xx\"                             },                             {                                 \"segment\":\"x\"                             },                             {                                 \"segment\":\"xxxx\"                             }                         ]                     }                 ]             }         ]     },     \"request_params\":{         \"data\":{             \"url\":\"rtmp://xxxx\",             \"frame_interval\":3         },         \"event_type\":\"default\",         \"image_categories\":[             \"politics\",             \"porn\",             \"image_text\",             \"terrorism\"         ],         \"audio_categories\":[             \"porn\",             \"ad\",             \"politics\",             \"moan\",             \"abuse\"         ],         \"callback\":\"http://xxx/callback\"     } }
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

