<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAssetByFileUploadReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAssetByFileUploadReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * description  视频描述，长度不超过1024个字节。
    * videoName  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * coverType  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    * coverMd5  封面文件MD5值
    * subtitles  字幕文件信息
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'description' => 'string',
            'videoName' => 'string',
            'videoType' => 'string',
            'categoryId' => 'string',
            'videoMd5' => 'string',
            'coverType' => 'string',
            'coverMd5' => 'string',
            'subtitles' => '\HuaweiCloud\SDK\Vod\V1\Model\Subtitle[]',
            'tags' => 'string',
            'autoPublish' => 'int',
            'templateGroupName' => 'string',
            'autoEncrypt' => 'int',
            'autoPreheat' => 'string',
            'thumbnail' => '\HuaweiCloud\SDK\Vod\V1\Model\Thumbnail',
            'review' => '\HuaweiCloud\SDK\Vod\V1\Model\Review',
            'workflowName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * description  视频描述，长度不超过1024个字节。
    * videoName  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * coverType  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    * coverMd5  封面文件MD5值
    * subtitles  字幕文件信息
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'videoName' => null,
        'videoType' => null,
        'categoryId' => null,
        'videoMd5' => null,
        'coverType' => null,
        'coverMd5' => null,
        'subtitles' => null,
        'tags' => null,
        'autoPublish' => 'int32',
        'templateGroupName' => null,
        'autoEncrypt' => null,
        'autoPreheat' => null,
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
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * description  视频描述，长度不超过1024个字节。
    * videoName  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * coverType  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    * coverMd5  封面文件MD5值
    * subtitles  字幕文件信息
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'description' => 'description',
            'videoName' => 'video_name',
            'videoType' => 'video_type',
            'categoryId' => 'category_id',
            'videoMd5' => 'video_md5',
            'coverType' => 'cover_type',
            'coverMd5' => 'cover_md5',
            'subtitles' => 'subtitles',
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
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * description  视频描述，长度不超过1024个字节。
    * videoName  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * coverType  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    * coverMd5  封面文件MD5值
    * subtitles  字幕文件信息
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'description' => 'setDescription',
            'videoName' => 'setVideoName',
            'videoType' => 'setVideoType',
            'categoryId' => 'setCategoryId',
            'videoMd5' => 'setVideoMd5',
            'coverType' => 'setCoverType',
            'coverMd5' => 'setCoverMd5',
            'subtitles' => 'setSubtitles',
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
    * title  媒资标题，长度不超过128个字节，UTF-8编码。
    * description  视频描述，长度不超过1024个字节。
    * videoName  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    * videoType  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    * categoryId  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * coverType  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    * coverMd5  封面文件MD5值
    * subtitles  字幕文件信息
    * tags  视频标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * autoPublish  是否自动发布。  取值如下： - 0：表示不自动发布。 - 1：表示自动发布。  默认值：0。
    * templateGroupName  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
    * autoEncrypt  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
    * autoPreheat  是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
    * thumbnail  thumbnail
    * review  review
    * workflowName  工作流名称。  若不为空，则使用指定的工作流对上传的音视频进行处理，您可以在视频点播控制台配置工作流，具体请参见[工作流设置](https://support.huaweicloud.com/usermanual-vod/vod010041.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'description' => 'getDescription',
            'videoName' => 'getVideoName',
            'videoType' => 'getVideoType',
            'categoryId' => 'getCategoryId',
            'videoMd5' => 'getVideoMd5',
            'coverType' => 'getCoverType',
            'coverMd5' => 'getCoverMd5',
            'subtitles' => 'getSubtitles',
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
    const COVER_TYPE_JPG = 'JPG';
    const COVER_TYPE_PNG = 'PNG';
    const AUTO_PUBLISH_0 = 0;
    const AUTO_PUBLISH_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCoverTypeAllowableValues()
    {
        return [
            self::COVER_TYPE_JPG,
            self::COVER_TYPE_PNG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoPublishAllowableValues()
    {
        return [
            self::AUTO_PUBLISH_0,
            self::AUTO_PUBLISH_1,
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['videoName'] = isset($data['videoName']) ? $data['videoName'] : null;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['videoMd5'] = isset($data['videoMd5']) ? $data['videoMd5'] : null;
        $this->container['coverType'] = isset($data['coverType']) ? $data['coverType'] : null;
        $this->container['coverMd5'] = isset($data['coverMd5']) ? $data['coverMd5'] : null;
        $this->container['subtitles'] = isset($data['subtitles']) ? $data['subtitles'] : null;
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
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['videoName'] === null) {
            $invalidProperties[] = "'videoName' can't be null";
        }
            if ((mb_strlen($this->container['videoName']) > 128)) {
                $invalidProperties[] = "invalid value for 'videoName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['videoName']) < 1)) {
                $invalidProperties[] = "invalid value for 'videoName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['videoType'] === null) {
            $invalidProperties[] = "'videoType' can't be null";
        }
            $allowedValues = $this->getCoverTypeAllowableValues();
                if (!is_null($this->container['coverType']) && !in_array($this->container['coverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'coverType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAutoPublishAllowableValues();
                if (!is_null($this->container['autoPublish']) && !in_array($this->container['autoPublish'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoPublish', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets videoName
    *  音视频文件名，长度不超过128个字节。  文件名后缀可选。
    *
    * @return string
    */
    public function getVideoName()
    {
        return $this->container['videoName'];
    }

    /**
    * Sets videoName
    *
    * @param string $videoName 音视频文件名，长度不超过128个字节。  文件名后缀可选。
    *
    * @return $this
    */
    public function setVideoName($videoName)
    {
        $this->container['videoName'] = $videoName;
        return $this;
    }

    /**
    * Gets videoType
    *  上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
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
    * @param string $videoType 上传音视频文件的格式。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV、HLS - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2  若上传格式为音频文件，则不支持转码、添加水印和字幕。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets categoryId
    *  媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 媒资分类ID。  您可以调用[创建媒资分类](https://support.huaweicloud.com/api-vod/vod_04_0028.html)接口或在点播控制台的[分类设置](https://support.huaweicloud.com/usermanual-vod/vod010006.html)中创建对应的媒资分类，并获取分类ID。  > 若不设置或者设置为-1，则上传的音视频归类到系统预置的“其它”分类中。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets videoMd5
    *  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    *
    * @return string|null
    */
    public function getVideoMd5()
    {
        return $this->container['videoMd5'];
    }

    /**
    * Sets videoMd5
    *
    * @param string|null $videoMd5 视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    *
    * @return $this
    */
    public function setVideoMd5($videoMd5)
    {
        $this->container['videoMd5'] = $videoMd5;
        return $this;
    }

    /**
    * Gets coverType
    *  封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    *
    * @return string|null
    */
    public function getCoverType()
    {
        return $this->container['coverType'];
    }

    /**
    * Sets coverType
    *
    * @param string|null $coverType 封面图片文件类型。  取值如下： - JPG - PNG  上传后的封面名称是固定的，后缀名为封面类型缩写。例如cover0.jpg，cover1.png 若不指定类型，则封面文件无后缀名。  > 如果设置了图片格式，则不会执行首帧截图作为封面动作，需自行上传封面。
    *
    * @return $this
    */
    public function setCoverType($coverType)
    {
        $this->container['coverType'] = $coverType;
        return $this;
    }

    /**
    * Gets coverMd5
    *  封面文件MD5值
    *
    * @return string|null
    */
    public function getCoverMd5()
    {
        return $this->container['coverMd5'];
    }

    /**
    * Sets coverMd5
    *
    * @param string|null $coverMd5 封面文件MD5值
    *
    * @return $this
    */
    public function setCoverMd5($coverMd5)
    {
        $this->container['coverMd5'] = $coverMd5;
        return $this;
    }

    /**
    * Gets subtitles
    *  字幕文件信息
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\Subtitle[]|null
    */
    public function getSubtitles()
    {
        return $this->container['subtitles'];
    }

    /**
    * Sets subtitles
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\Subtitle[]|null $subtitles 字幕文件信息
    *
    * @return $this
    */
    public function setSubtitles($subtitles)
    {
        $this->container['subtitles'] = $subtitles;
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
    *  转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
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
    * @param string|null $templateGroupName 转码模板组名称。  若不为空，则使用指定的转码模板对上传的音视频进行转码，您可以在视频点播控制台配置转码模板，具体请参见[转码设置](https://support.huaweicloud.com/usermanual-vod/vod_01_0072.html)。  > 若同时设置了“**template_group_name**”和“**workflow_name**”字段，则“**template_group_name**”字段生效。
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
    *  是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
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
    * @param int|null $autoEncrypt 是否自动加密。  取值如下： - 0：表示不加密。 - 1：表示需要加密。  默认值：0。  加密与转码必须要一起进行，当需要加密时，转码参数不能为空，且转码输出格式必须要为HLS。
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
    * @return string|null
    */
    public function getAutoPreheat()
    {
        return $this->container['autoPreheat'];
    }

    /**
    * Sets autoPreheat
    *
    * @param string|null $autoPreheat 是否自动预热到CDN。  取值如下： - 0：表示不自动预热。 - 1：表示自动预热。  默认值：0。
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

