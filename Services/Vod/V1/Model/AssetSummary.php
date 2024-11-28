<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * title  媒资标题。长度不超过128个字节，UTF-8编码。
    * description  媒资描述。长度不超过1024个字节。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资大小。  单位：字节。
    * originalUrl  原始播放url。
    * category  媒资分类名称。
    * covers  封面信息。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * assetStatus  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    * reviewStatus  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    * execDesc  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    * mediaType  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'title' => 'string',
            'description' => 'string',
            'duration' => 'int',
            'durationMs' => 'int',
            'size' => 'int',
            'originalUrl' => 'string',
            'category' => 'string',
            'covers' => '\HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]',
            'createTime' => 'string',
            'assetStatus' => 'string',
            'transcodeStatus' => 'string',
            'thumbnailStatus' => 'string',
            'reviewStatus' => 'string',
            'execDesc' => 'string',
            'mediaType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * title  媒资标题。长度不超过128个字节，UTF-8编码。
    * description  媒资描述。长度不超过1024个字节。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资大小。  单位：字节。
    * originalUrl  原始播放url。
    * category  媒资分类名称。
    * covers  封面信息。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * assetStatus  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    * reviewStatus  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    * execDesc  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    * mediaType  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'title' => null,
        'description' => null,
        'duration' => null,
        'durationMs' => 'int64',
        'size' => 'int64',
        'originalUrl' => null,
        'category' => null,
        'covers' => null,
        'createTime' => null,
        'assetStatus' => null,
        'transcodeStatus' => null,
        'thumbnailStatus' => null,
        'reviewStatus' => null,
        'execDesc' => null,
        'mediaType' => null
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
    * assetId  媒资ID。
    * title  媒资标题。长度不超过128个字节，UTF-8编码。
    * description  媒资描述。长度不超过1024个字节。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资大小。  单位：字节。
    * originalUrl  原始播放url。
    * category  媒资分类名称。
    * covers  封面信息。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * assetStatus  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    * reviewStatus  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    * execDesc  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    * mediaType  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'title' => 'title',
            'description' => 'description',
            'duration' => 'duration',
            'durationMs' => 'duration_ms',
            'size' => 'size',
            'originalUrl' => 'original_url',
            'category' => 'category',
            'covers' => 'covers',
            'createTime' => 'create_time',
            'assetStatus' => 'asset_status',
            'transcodeStatus' => 'transcode_status',
            'thumbnailStatus' => 'thumbnail_status',
            'reviewStatus' => 'review_status',
            'execDesc' => 'exec_desc',
            'mediaType' => 'media_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * title  媒资标题。长度不超过128个字节，UTF-8编码。
    * description  媒资描述。长度不超过1024个字节。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资大小。  单位：字节。
    * originalUrl  原始播放url。
    * category  媒资分类名称。
    * covers  封面信息。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * assetStatus  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    * reviewStatus  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    * execDesc  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    * mediaType  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'title' => 'setTitle',
            'description' => 'setDescription',
            'duration' => 'setDuration',
            'durationMs' => 'setDurationMs',
            'size' => 'setSize',
            'originalUrl' => 'setOriginalUrl',
            'category' => 'setCategory',
            'covers' => 'setCovers',
            'createTime' => 'setCreateTime',
            'assetStatus' => 'setAssetStatus',
            'transcodeStatus' => 'setTranscodeStatus',
            'thumbnailStatus' => 'setThumbnailStatus',
            'reviewStatus' => 'setReviewStatus',
            'execDesc' => 'setExecDesc',
            'mediaType' => 'setMediaType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * title  媒资标题。长度不超过128个字节，UTF-8编码。
    * description  媒资描述。长度不超过1024个字节。
    * duration  媒资时长。  单位：秒。
    * durationMs  视频时长，单位毫秒。
    * size  媒资大小。  单位：字节。
    * originalUrl  原始播放url。
    * category  媒资分类名称。
    * covers  封面信息。
    * createTime  媒资创建时间。  格式为yyyymmddhhmmss。必须是与时区无关的UTC时间。
    * assetStatus  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    * transcodeStatus  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    * thumbnailStatus  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    * reviewStatus  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    * execDesc  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    * mediaType  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'title' => 'getTitle',
            'description' => 'getDescription',
            'duration' => 'getDuration',
            'durationMs' => 'getDurationMs',
            'size' => 'getSize',
            'originalUrl' => 'getOriginalUrl',
            'category' => 'getCategory',
            'covers' => 'getCovers',
            'createTime' => 'getCreateTime',
            'assetStatus' => 'getAssetStatus',
            'transcodeStatus' => 'getTranscodeStatus',
            'thumbnailStatus' => 'getThumbnailStatus',
            'reviewStatus' => 'getReviewStatus',
            'execDesc' => 'getExecDesc',
            'mediaType' => 'getMediaType'
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
    const ASSET_STATUS_CREATING = 'CREATING';
    const ASSET_STATUS_FAILED = 'FAILED';
    const ASSET_STATUS_CREATED = 'CREATED';
    const ASSET_STATUS_PUBLISHED = 'PUBLISHED';
    const ASSET_STATUS_DELETED = 'DELETED';
    const TRANSCODE_STATUS_UN_TRANSCODE = 'UN_TRANSCODE';
    const TRANSCODE_STATUS_WAITING_TRANSCODE = 'WAITING_TRANSCODE';
    const TRANSCODE_STATUS_TRANSCODING = 'TRANSCODING';
    const TRANSCODE_STATUS_TRANSCODE_SUCCEED = 'TRANSCODE_SUCCEED';
    const TRANSCODE_STATUS_TRANSCODE_FAILED = 'TRANSCODE_FAILED';
    const THUMBNAIL_STATUS_UN_THUMBNAIL = 'UN_THUMBNAIL';
    const THUMBNAIL_STATUS_THUMBNAILING = 'THUMBNAILING';
    const THUMBNAIL_STATUS_THUMBNAIL_SUCCEED = 'THUMBNAIL_SUCCEED';
    const THUMBNAIL_STATUS_THUMBNAIL_FAILED = 'THUMBNAIL_FAILED';
    const REVIEW_STATUS_UN_REVIEW = 'UN_REVIEW';
    const REVIEW_STATUS_REVIEWING = 'REVIEWING';
    const REVIEW_STATUS_REVIEW_SUSPICIOUS = 'REVIEW_SUSPICIOUS';
    const REVIEW_STATUS_REVIEW_PASSED = 'REVIEW_PASSED';
    const REVIEW_STATUS_REVIEW_FAILED = 'REVIEW_FAILED';
    const REVIEW_STATUS_REVIEW_BLOCKED = 'REVIEW_BLOCKED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssetStatusAllowableValues()
    {
        return [
            self::ASSET_STATUS_CREATING,
            self::ASSET_STATUS_FAILED,
            self::ASSET_STATUS_CREATED,
            self::ASSET_STATUS_PUBLISHED,
            self::ASSET_STATUS_DELETED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTranscodeStatusAllowableValues()
    {
        return [
            self::TRANSCODE_STATUS_UN_TRANSCODE,
            self::TRANSCODE_STATUS_WAITING_TRANSCODE,
            self::TRANSCODE_STATUS_TRANSCODING,
            self::TRANSCODE_STATUS_TRANSCODE_SUCCEED,
            self::TRANSCODE_STATUS_TRANSCODE_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getThumbnailStatusAllowableValues()
    {
        return [
            self::THUMBNAIL_STATUS_UN_THUMBNAIL,
            self::THUMBNAIL_STATUS_THUMBNAILING,
            self::THUMBNAIL_STATUS_THUMBNAIL_SUCCEED,
            self::THUMBNAIL_STATUS_THUMBNAIL_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReviewStatusAllowableValues()
    {
        return [
            self::REVIEW_STATUS_UN_REVIEW,
            self::REVIEW_STATUS_REVIEWING,
            self::REVIEW_STATUS_REVIEW_SUSPICIOUS,
            self::REVIEW_STATUS_REVIEW_PASSED,
            self::REVIEW_STATUS_REVIEW_FAILED,
            self::REVIEW_STATUS_REVIEW_BLOCKED,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['originalUrl'] = isset($data['originalUrl']) ? $data['originalUrl'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['covers'] = isset($data['covers']) ? $data['covers'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['assetStatus'] = isset($data['assetStatus']) ? $data['assetStatus'] : null;
        $this->container['transcodeStatus'] = isset($data['transcodeStatus']) ? $data['transcodeStatus'] : null;
        $this->container['thumbnailStatus'] = isset($data['thumbnailStatus']) ? $data['thumbnailStatus'] : null;
        $this->container['reviewStatus'] = isset($data['reviewStatus']) ? $data['reviewStatus'] : null;
        $this->container['execDesc'] = isset($data['execDesc']) ? $data['execDesc'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
            if ((mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['assetStatus'] === null) {
            $invalidProperties[] = "'assetStatus' can't be null";
        }
            $allowedValues = $this->getAssetStatusAllowableValues();
                if (!is_null($this->container['assetStatus']) && !in_array($this->container['assetStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'assetStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTranscodeStatusAllowableValues();
                if (!is_null($this->container['transcodeStatus']) && !in_array($this->container['transcodeStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'transcodeStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getThumbnailStatusAllowableValues();
                if (!is_null($this->container['thumbnailStatus']) && !in_array($this->container['thumbnailStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'thumbnailStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getReviewStatusAllowableValues();
                if (!is_null($this->container['reviewStatus']) && !in_array($this->container['reviewStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reviewStatus', must be one of '%s'",
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
    * Gets assetId
    *  媒资ID。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 媒资ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets title
    *  媒资标题。长度不超过128个字节，UTF-8编码。
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
    * @param string $title 媒资标题。长度不超过128个字节，UTF-8编码。
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
    *  媒资描述。长度不超过1024个字节。
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
    * @param string|null $description 媒资描述。长度不超过1024个字节。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets duration
    *  媒资时长。  单位：秒。
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration 媒资时长。  单位：秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets durationMs
    *  视频时长，单位毫秒。
    *
    * @return int|null
    */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
    * Sets durationMs
    *
    * @param int|null $durationMs 视频时长，单位毫秒。
    *
    * @return $this
    */
    public function setDurationMs($durationMs)
    {
        $this->container['durationMs'] = $durationMs;
        return $this;
    }

    /**
    * Gets size
    *  媒资大小。  单位：字节。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 媒资大小。  单位：字节。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets originalUrl
    *  原始播放url。
    *
    * @return string|null
    */
    public function getOriginalUrl()
    {
        return $this->container['originalUrl'];
    }

    /**
    * Sets originalUrl
    *
    * @param string|null $originalUrl 原始播放url。
    *
    * @return $this
    */
    public function setOriginalUrl($originalUrl)
    {
        $this->container['originalUrl'] = $originalUrl;
        return $this;
    }

    /**
    * Gets category
    *  媒资分类名称。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 媒资分类名称。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets covers
    *  封面信息。
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]|null
    */
    public function getCovers()
    {
        return $this->container['covers'];
    }

    /**
    * Sets covers
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\CoverInfo[]|null $covers 封面信息。
    *
    * @return $this
    */
    public function setCovers($covers)
    {
        $this->container['covers'] = $covers;
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
    * Gets assetStatus
    *  媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    *
    * @return string
    */
    public function getAssetStatus()
    {
        return $this->container['assetStatus'];
    }

    /**
    * Sets assetStatus
    *
    * @param string $assetStatus 媒资状态。  取值如下： - CREATING：上传中。 - FAILED：上传失败。 - CREATED：上传成功。 - PUBLISHED：已发布。 - DELETED：已删除。
    *
    * @return $this
    */
    public function setAssetStatus($assetStatus)
    {
        $this->container['assetStatus'] = $assetStatus;
        return $this;
    }

    /**
    * Gets transcodeStatus
    *  转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    *
    * @return string|null
    */
    public function getTranscodeStatus()
    {
        return $this->container['transcodeStatus'];
    }

    /**
    * Sets transcodeStatus
    *
    * @param string|null $transcodeStatus 转码状态。  取值如下： - UN_TRANSCODE：未转码。 - WAITING_TRANSCODE：待转码 - TRANSCODING：转码中。 - TRANSCODE_SUCCEED：转码成功。 - TRANSCODE_FAILED：转码失败。
    *
    * @return $this
    */
    public function setTranscodeStatus($transcodeStatus)
    {
        $this->container['transcodeStatus'] = $transcodeStatus;
        return $this;
    }

    /**
    * Gets thumbnailStatus
    *  截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    *
    * @return string|null
    */
    public function getThumbnailStatus()
    {
        return $this->container['thumbnailStatus'];
    }

    /**
    * Sets thumbnailStatus
    *
    * @param string|null $thumbnailStatus 截图状态。  取值如下： - UN_THUMBNAIL：未截图。 - THUMBNAILING：截图中。 - THUMBNAIL_SUCCEED：截图成功。 - THUMBNAIL_FAILED：截图失败。
    *
    * @return $this
    */
    public function setThumbnailStatus($thumbnailStatus)
    {
        $this->container['thumbnailStatus'] = $thumbnailStatus;
        return $this;
    }

    /**
    * Gets reviewStatus
    *  内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @return string|null
    */
    public function getReviewStatus()
    {
        return $this->container['reviewStatus'];
    }

    /**
    * Sets reviewStatus
    *
    * @param string|null $reviewStatus 内容审核状态  取值如下： - UN_REVIEW：未审核。 - REVIEWING：审核中。 - REVIEW_SUSPICIOUS：审核可疑，需要人工复审。 - REVIEW_PASSED：审核通过。 - REVIEW_FAILED：审核失败。 - REVIEW_BLOCKED：已屏蔽。
    *
    * @return $this
    */
    public function setReviewStatus($reviewStatus)
    {
        $this->container['reviewStatus'] = $reviewStatus;
        return $this;
    }

    /**
    * Gets execDesc
    *  媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    *
    * @return string|null
    */
    public function getExecDesc()
    {
        return $this->container['execDesc'];
    }

    /**
    * Sets execDesc
    *
    * @param string|null $execDesc 媒资的任务执行描述汇总。  示例： - asset_exec_desc: upload success，媒资任务执行描述信息。 - transcode_exec_desc: transcode success，转码任务执行描述信息。 - thumbnail_exec_desc: thumbnail failed，截图任务执行描述信息。 - review_exec_desc: review pass，审核任务执行描述信息。
    *
    * @return $this
    */
    public function setExecDesc($execDesc)
    {
        $this->container['execDesc'] = $execDesc;
        return $this;
    }

    /**
    * Gets mediaType
    *  音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @return string|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string|null $mediaType 音视频文件的格式。  取值如下： - 视频文件格式：MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG - 音频文件格式：MP3、OGG、WAV、WMA、APE、FLAC、AAC、AC3、MMF、AMR、M4A、M4R、WV、MP2
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
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

