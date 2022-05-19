<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadMetaDataByUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadMetaDataByUrl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * url  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    * description  视频描述，长度不超过1024个字节。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoType' => 'string',
            'title' => 'string',
            'url' => 'string',
            'description' => 'string',
            'categoryId' => 'int',
            'tags' => 'string',
            'autoPublish' => 'int',
            'templateGroupName' => 'string',
            'autoEncrypt' => 'int',
            'autoPreheat' => 'int',
            'thumbnail' => '\HuaweiCloud\SDK\Vod\V1\Model\Thumbnail',
            'review' => '\HuaweiCloud\SDK\Vod\V1\Model\Review',
            'workflowName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * url  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    * description  视频描述，长度不超过1024个字节。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoType' => null,
        'title' => null,
        'url' => null,
        'description' => null,
        'categoryId' => 'int32',
        'tags' => null,
        'autoPublish' => 'int32',
        'templateGroupName' => null,
        'autoEncrypt' => 'int32',
        'autoPreheat' => 'int32',
        'thumbnail' => null,
        'review' => null,
        'workflowName' => null
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
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * url  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    * description  视频描述，长度不超过1024个字节。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoType' => 'video_type',
            'title' => 'title',
            'url' => 'url',
            'description' => 'description',
            'categoryId' => 'category_id',
            'tags' => 'tags',
            'autoPublish' => 'auto_publish',
            'templateGroupName' => 'template_group_name',
            'autoEncrypt' => 'auto_encrypt',
            'autoPreheat' => 'auto_preheat',
            'thumbnail' => 'thumbnail',
            'review' => 'review',
            'workflowName' => 'workflow_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * url  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    * description  视频描述，长度不超过1024个字节。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoType' => 'setVideoType',
            'title' => 'setTitle',
            'url' => 'setUrl',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId',
            'tags' => 'setTags',
            'autoPublish' => 'setAutoPublish',
            'templateGroupName' => 'setTemplateGroupName',
            'autoEncrypt' => 'setAutoEncrypt',
            'autoPreheat' => 'setAutoPreheat',
            'thumbnail' => 'setThumbnail',
            'review' => 'setReview',
            'workflowName' => 'setWorkflowName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * url  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    * description  视频描述，长度不超过1024个字节。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoType' => 'getVideoType',
            'title' => 'getTitle',
            'url' => 'getUrl',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId',
            'tags' => 'getTags',
            'autoPublish' => 'getAutoPublish',
            'templateGroupName' => 'getTemplateGroupName',
            'autoEncrypt' => 'getAutoEncrypt',
            'autoPreheat' => 'getAutoPreheat',
            'thumbnail' => 'getThumbnail',
            'review' => 'getReview',
            'workflowName' => 'getWorkflowName'
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
    const VIDEO_TYPE_MP4 = 'MP4';
    const VIDEO_TYPE_TS = 'TS';
    const VIDEO_TYPE_MOV = 'MOV';
    const VIDEO_TYPE_MXF = 'MXF';
    const VIDEO_TYPE_MPG = 'MPG';
    const VIDEO_TYPE_FLV = 'FLV';
    const VIDEO_TYPE_WMV = 'WMV';
    const VIDEO_TYPE_AVI = 'AVI';
    const VIDEO_TYPE_M4_V = 'M4V';
    const VIDEO_TYPE_F4_V = 'F4V';
    const VIDEO_TYPE_MPEG = 'MPEG';
    const VIDEO_TYPE__3_GP = '3GP';
    const VIDEO_TYPE_ASF = 'ASF';
    const VIDEO_TYPE_MKV = 'MKV';
    const VIDEO_TYPE_MP3 = 'MP3';
    const VIDEO_TYPE_OGG = 'OGG';
    const VIDEO_TYPE_WAV = 'WAV';
    const VIDEO_TYPE_WMA = 'WMA';
    const VIDEO_TYPE_APE = 'APE';
    const VIDEO_TYPE_FLAC = 'FLAC';
    const VIDEO_TYPE_AAC = 'AAC';
    const VIDEO_TYPE_AC3 = 'AC3';
    const VIDEO_TYPE_MMF = 'MMF';
    const VIDEO_TYPE_AMR = 'AMR';
    const VIDEO_TYPE_M4_A = 'M4A';
    const VIDEO_TYPE_M4_R = 'M4R';
    const VIDEO_TYPE_WV = 'WV';
    const VIDEO_TYPE_MP2 = 'MP2';
    const VIDEO_TYPE_M3_U8 = 'M3U8';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTypeAllowableValues()
    {
        return [
            self::VIDEO_TYPE_MP4,
            self::VIDEO_TYPE_TS,
            self::VIDEO_TYPE_MOV,
            self::VIDEO_TYPE_MXF,
            self::VIDEO_TYPE_MPG,
            self::VIDEO_TYPE_FLV,
            self::VIDEO_TYPE_WMV,
            self::VIDEO_TYPE_AVI,
            self::VIDEO_TYPE_M4_V,
            self::VIDEO_TYPE_F4_V,
            self::VIDEO_TYPE_MPEG,
            self::VIDEO_TYPE__3_GP,
            self::VIDEO_TYPE_ASF,
            self::VIDEO_TYPE_MKV,
            self::VIDEO_TYPE_MP3,
            self::VIDEO_TYPE_OGG,
            self::VIDEO_TYPE_WAV,
            self::VIDEO_TYPE_WMA,
            self::VIDEO_TYPE_APE,
            self::VIDEO_TYPE_FLAC,
            self::VIDEO_TYPE_AAC,
            self::VIDEO_TYPE_AC3,
            self::VIDEO_TYPE_MMF,
            self::VIDEO_TYPE_AMR,
            self::VIDEO_TYPE_M4_A,
            self::VIDEO_TYPE_M4_R,
            self::VIDEO_TYPE_WV,
            self::VIDEO_TYPE_MP2,
            self::VIDEO_TYPE_M3_U8,
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
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['autoPublish'] = isset($data['autoPublish']) ? $data['autoPublish'] : null;
        $this->container['templateGroupName'] = isset($data['templateGroupName']) ? $data['templateGroupName'] : null;
        $this->container['autoEncrypt'] = isset($data['autoEncrypt']) ? $data['autoEncrypt'] : null;
        $this->container['autoPreheat'] = isset($data['autoPreheat']) ? $data['autoPreheat'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['review'] = isset($data['review']) ? $data['review'] : null;
        $this->container['workflowName'] = isset($data['workflowName']) ? $data['workflowName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['videoType'] === null) {
            $invalidProperties[] = "'videoType' can't be null";
        }
            $allowedValues = $this->getVideoTypeAllowableValues();
                if (!is_null($this->container['videoType']) && !in_array($this->container['videoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
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
    * Gets videoType
    *  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    *
    * @return string
    */
    public function getVideoType()
    {
        return $this->container['videoType'];
    }

    /**
    * Sets videoType
    *
    * @param string $videoType 上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、M3U8 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets title
    *  媒资标题，长度不超过128个字节，UTF-8编码。
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string $title 媒资标题，长度不超过128个字节，UTF-8编码。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets url
    *  音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
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
    * @param string $url 音视频源文件URL。   > URL必须以扩展名结尾，暂只支持http和https协议。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets description
    *  视频描述，长度不超过1024个字节。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 视频描述，长度不超过1024个字节。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets categoryId
    *  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets tags
    *  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets autoPublish
    *  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    *
    * @return int|null
    */
    public function getAutoPublish()
    {
        return $this->container['autoPublish'];
    }

    /**
    * Sets autoPublish
    *
    * @param int|null $autoPublish 是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    *
    * @return $this
    */
    public function setAutoPublish($autoPublish)
    {
        $this->container['autoPublish'] = $autoPublish;
        return $this;
    }

    /**
    * Gets templateGroupName
    *  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    *
    * @return string|null
    */
    public function getTemplateGroupName()
    {
        return $this->container['templateGroupName'];
    }

    /**
    * Sets templateGroupName
    *
    * @param string|null $templateGroupName 转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  >若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    *
    * @return $this
    */
    public function setTemplateGroupName($templateGroupName)
    {
        $this->container['templateGroupName'] = $templateGroupName;
        return $this;
    }

    /**
    * Gets autoEncrypt
    *  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    *
    * @return int|null
    */
    public function getAutoEncrypt()
    {
        return $this->container['autoEncrypt'];
    }

    /**
    * Sets autoEncrypt
    *
    * @param int|null $autoEncrypt 是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。若设置为需要加密，则必须配置转码模板，且转码的输出格式是HLS。
    *
    * @return $this
    */
    public function setAutoEncrypt($autoEncrypt)
    {
        $this->container['autoEncrypt'] = $autoEncrypt;
        return $this;
    }

    /**
    * Gets autoPreheat
    *  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    *
    * @return int|null
    */
    public function getAutoPreheat()
    {
        return $this->container['autoPreheat'];
    }

    /**
    * Sets autoPreheat
    *
    * @param int|null $autoPreheat 是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    *
    * @return $this
    */
    public function setAutoPreheat($autoPreheat)
    {
        $this->container['autoPreheat'] = $autoPreheat;
        return $this;
    }

    /**
    * Gets thumbnail
    *  thumbnail
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null
    */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
    * Sets thumbnail
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Thumbnail|null $thumbnail thumbnail
    *
    * @return $this
    */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;
        return $this;
    }

    /**
    * Gets review
    *  review
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Review|null
    */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
    * Sets review
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Review|null $review review
    *
    * @return $this
    */
    public function setReview($review)
    {
        $this->container['review'] = $review;
        return $this;
    }

    /**
    * Gets workflowName
    *  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @return string|null
    */
    public function getWorkflowName()
    {
        return $this->container['workflowName'];
    }

    /**
    * Sets workflowName
    *
    * @param string|null $workflowName 工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @return $this
    */
    public function setWorkflowName($workflowName)
    {
        $this->container['workflowName'] = $workflowName;
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

