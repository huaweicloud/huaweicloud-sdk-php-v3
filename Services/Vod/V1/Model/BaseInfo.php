<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  媒资标题。  长度不超过128个字节，UTF8编码。
    * videoName  媒资文件名。
    * description  媒资描述。  长度不超过1024个字节。
    * categoryId  媒资分类id。
    * categoryName  媒资分类名称。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * lastModified  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * videoType  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    * tags  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * metaData  metaData
    * videoUrl  原始视频文件的访问地址。
    * signUrl  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    * coverInfoArray  封面信息。
    * subtitleInfo  字幕信息数组
    * sourcePath  sourcePath
    * outputPath  outputPath
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'videoName' => 'string',
            'description' => 'string',
            'categoryId' => 'int',
            'categoryName' => 'string',
            'createTime' => 'string',
            'lastModified' => 'string',
            'videoType' => 'string',
            'tags' => 'string',
            'metaData' => '\HuaweiCloud\SDK\Vod\V1\Model\MetaData',
            'videoUrl' => 'string',
            'signUrl' => 'string',
            'coverInfoArray' => '\HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]',
            'subtitleInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\SubtitleInfo[]',
            'sourcePath' => '\HuaweiCloud\SDK\Vod\V1\Model\FileAddr',
            'outputPath' => '\HuaweiCloud\SDK\Vod\V1\Model\FileAddr'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  媒资标题。  长度不超过128个字节，UTF8编码。
    * videoName  媒资文件名。
    * description  媒资描述。  长度不超过1024个字节。
    * categoryId  媒资分类id。
    * categoryName  媒资分类名称。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * lastModified  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * videoType  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    * tags  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * metaData  metaData
    * videoUrl  原始视频文件的访问地址。
    * signUrl  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    * coverInfoArray  封面信息。
    * subtitleInfo  字幕信息数组
    * sourcePath  sourcePath
    * outputPath  outputPath
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'videoName' => null,
        'description' => null,
        'categoryId' => 'int64',
        'categoryName' => null,
        'createTime' => null,
        'lastModified' => null,
        'videoType' => null,
        'tags' => null,
        'metaData' => null,
        'videoUrl' => null,
        'signUrl' => null,
        'coverInfoArray' => null,
        'subtitleInfo' => null,
        'sourcePath' => null,
        'outputPath' => null
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
    * title  媒资标题。  长度不超过128个字节，UTF8编码。
    * videoName  媒资文件名。
    * description  媒资描述。  长度不超过1024个字节。
    * categoryId  媒资分类id。
    * categoryName  媒资分类名称。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * lastModified  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * videoType  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    * tags  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * metaData  metaData
    * videoUrl  原始视频文件的访问地址。
    * signUrl  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    * coverInfoArray  封面信息。
    * subtitleInfo  字幕信息数组
    * sourcePath  sourcePath
    * outputPath  outputPath
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'videoName' => 'video_name',
            'description' => 'description',
            'categoryId' => 'category_id',
            'categoryName' => 'category_name',
            'createTime' => 'create_time',
            'lastModified' => 'last_modified',
            'videoType' => 'video_type',
            'tags' => 'tags',
            'metaData' => 'meta_data',
            'videoUrl' => 'video_url',
            'signUrl' => 'sign_url',
            'coverInfoArray' => 'cover_info_array',
            'subtitleInfo' => 'subtitle_info',
            'sourcePath' => 'source_path',
            'outputPath' => 'output_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  媒资标题。  长度不超过128个字节，UTF8编码。
    * videoName  媒资文件名。
    * description  媒资描述。  长度不超过1024个字节。
    * categoryId  媒资分类id。
    * categoryName  媒资分类名称。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * lastModified  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * videoType  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    * tags  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * metaData  metaData
    * videoUrl  原始视频文件的访问地址。
    * signUrl  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    * coverInfoArray  封面信息。
    * subtitleInfo  字幕信息数组
    * sourcePath  sourcePath
    * outputPath  outputPath
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'videoName' => 'setVideoName',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId',
            'categoryName' => 'setCategoryName',
            'createTime' => 'setCreateTime',
            'lastModified' => 'setLastModified',
            'videoType' => 'setVideoType',
            'tags' => 'setTags',
            'metaData' => 'setMetaData',
            'videoUrl' => 'setVideoUrl',
            'signUrl' => 'setSignUrl',
            'coverInfoArray' => 'setCoverInfoArray',
            'subtitleInfo' => 'setSubtitleInfo',
            'sourcePath' => 'setSourcePath',
            'outputPath' => 'setOutputPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  媒资标题。  长度不超过128个字节，UTF8编码。
    * videoName  媒资文件名。
    * description  媒资描述。  长度不超过1024个字节。
    * categoryId  媒资分类id。
    * categoryName  媒资分类名称。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * lastModified  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * videoType  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    * tags  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    * metaData  metaData
    * videoUrl  原始视频文件的访问地址。
    * signUrl  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    * coverInfoArray  封面信息。
    * subtitleInfo  字幕信息数组
    * sourcePath  sourcePath
    * outputPath  outputPath
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'videoName' => 'getVideoName',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId',
            'categoryName' => 'getCategoryName',
            'createTime' => 'getCreateTime',
            'lastModified' => 'getLastModified',
            'videoType' => 'getVideoType',
            'tags' => 'getTags',
            'metaData' => 'getMetaData',
            'videoUrl' => 'getVideoUrl',
            'signUrl' => 'getSignUrl',
            'coverInfoArray' => 'getCoverInfoArray',
            'subtitleInfo' => 'getSubtitleInfo',
            'sourcePath' => 'getSourcePath',
            'outputPath' => 'getOutputPath'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['videoName'] = isset($data['videoName']) ? $data['videoName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['videoUrl'] = isset($data['videoUrl']) ? $data['videoUrl'] : null;
        $this->container['signUrl'] = isset($data['signUrl']) ? $data['signUrl'] : null;
        $this->container['coverInfoArray'] = isset($data['coverInfoArray']) ? $data['coverInfoArray'] : null;
        $this->container['subtitleInfo'] = isset($data['subtitleInfo']) ? $data['subtitleInfo'] : null;
        $this->container['sourcePath'] = isset($data['sourcePath']) ? $data['sourcePath'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  媒资标题。  长度不超过128个字节，UTF8编码。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 媒资标题。  长度不超过128个字节，UTF8编码。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets videoName
    *  媒资文件名。
    *
    * @return string|null
    */
    public function getVideoName()
    {
        return $this->container['videoName'];
    }

    /**
    * Sets videoName
    *
    * @param string|null $videoName 媒资文件名。
    *
    * @return $this
    */
    public function setVideoName($videoName)
    {
        $this->container['videoName'] = $videoName;
        return $this;
    }

    /**
    * Gets description
    *  媒资描述。  长度不超过1024个字节。
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
    * @param string|null $description 媒资描述。  长度不超过1024个字节。
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
    *  媒资分类id。
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
    * @param int|null $categoryId 媒资分类id。
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets categoryName
    *  媒资分类名称。
    *
    * @return string|null
    */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
    * Sets categoryName
    *
    * @param string|null $categoryName 媒资分类名称。
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
        return $this;
    }

    /**
    * Gets createTime
    *  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastModified
    *  媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    *
    * @return string|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param string|null $lastModified 媒资最近修改时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets videoType
    *  音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    *
    * @return string|null
    */
    public function getVideoType()
    {
        return $this->container['videoType'];
    }

    /**
    * Sets videoType
    *
    * @param string|null $videoType 音视频文件类型。  取值如下： - 视频文件：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV。 - 音频文件：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets tags
    *  媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
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
    * @param string|null $tags 媒资标签。  单个标签不超过16个字节，最多不超过16个标签。  多个用逗号分隔，UTF8编码。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\MetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\MetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets videoUrl
    *  原始视频文件的访问地址。
    *
    * @return string|null
    */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
    * Sets videoUrl
    *
    * @param string|null $videoUrl 原始视频文件的访问地址。
    *
    * @return $this
    */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;
        return $this;
    }

    /**
    * Gets signUrl
    *  原视频文件的OBS临时访问地址,仅媒资详情接口生效
    *
    * @return string|null
    */
    public function getSignUrl()
    {
        return $this->container['signUrl'];
    }

    /**
    * Sets signUrl
    *
    * @param string|null $signUrl 原视频文件的OBS临时访问地址,仅媒资详情接口生效
    *
    * @return $this
    */
    public function setSignUrl($signUrl)
    {
        $this->container['signUrl'] = $signUrl;
        return $this;
    }

    /**
    * Gets coverInfoArray
    *  封面信息。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]|null
    */
    public function getCoverInfoArray()
    {
        return $this->container['coverInfoArray'];
    }

    /**
    * Sets coverInfoArray
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]|null $coverInfoArray 封面信息。
    *
    * @return $this
    */
    public function setCoverInfoArray($coverInfoArray)
    {
        $this->container['coverInfoArray'] = $coverInfoArray;
        return $this;
    }

    /**
    * Gets subtitleInfo
    *  字幕信息数组
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\SubtitleInfo[]|null
    */
    public function getSubtitleInfo()
    {
        return $this->container['subtitleInfo'];
    }

    /**
    * Sets subtitleInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\SubtitleInfo[]|null $subtitleInfo 字幕信息数组
    *
    * @return $this
    */
    public function setSubtitleInfo($subtitleInfo)
    {
        $this->container['subtitleInfo'] = $subtitleInfo;
        return $this;
    }

    /**
    * Gets sourcePath
    *  sourcePath
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null
    */
    public function getSourcePath()
    {
        return $this->container['sourcePath'];
    }

    /**
    * Sets sourcePath
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null $sourcePath sourcePath
    *
    * @return $this
    */
    public function setSourcePath($sourcePath)
    {
        $this->container['sourcePath'] = $sourcePath;
        return $this;
    }

    /**
    * Gets outputPath
    *  outputPath
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null
    */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /**
    * Sets outputPath
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\FileAddr|null $outputPath outputPath
    *
    * @return $this
    */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;
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

