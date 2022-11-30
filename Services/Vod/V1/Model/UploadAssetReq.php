<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadAssetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadAssetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * videoName  视频文件名。  文件名后缀为可选。
    * videoType  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    * coverId  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    * coverType  封面图片格式类型。  取值如下： - JPG - PNG
    * coverMd5  封面文件的MD5值。
    * subtitles  字幕文件信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'videoMd5' => 'string',
            'videoName' => 'string',
            'videoType' => 'string',
            'coverId' => 'int',
            'coverType' => 'string',
            'coverMd5' => 'string',
            'subtitles' => '\HuaweiCloud\SDK\Vod\V1\Model\Subtitle[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * videoName  视频文件名。  文件名后缀为可选。
    * videoType  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    * coverId  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    * coverType  封面图片格式类型。  取值如下： - JPG - PNG
    * coverMd5  封面文件的MD5值。
    * subtitles  字幕文件信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'videoMd5' => null,
        'videoName' => null,
        'videoType' => null,
        'coverId' => null,
        'coverType' => null,
        'coverMd5' => null,
        'subtitles' => null
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
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * videoName  视频文件名。  文件名后缀为可选。
    * videoType  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    * coverId  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    * coverType  封面图片格式类型。  取值如下： - JPG - PNG
    * coverMd5  封面文件的MD5值。
    * subtitles  字幕文件信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'videoMd5' => 'video_md5',
            'videoName' => 'video_name',
            'videoType' => 'video_type',
            'coverId' => 'cover_id',
            'coverType' => 'cover_type',
            'coverMd5' => 'cover_md5',
            'subtitles' => 'subtitles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * videoName  视频文件名。  文件名后缀为可选。
    * videoType  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    * coverId  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    * coverType  封面图片格式类型。  取值如下： - JPG - PNG
    * coverMd5  封面文件的MD5值。
    * subtitles  字幕文件信息
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'videoMd5' => 'setVideoMd5',
            'videoName' => 'setVideoName',
            'videoType' => 'setVideoType',
            'coverId' => 'setCoverId',
            'coverType' => 'setCoverType',
            'coverMd5' => 'setCoverMd5',
            'subtitles' => 'setSubtitles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID。
    * videoMd5  视频文件MD5值。  建议参考[媒资上传和更新](https://support.huaweicloud.com/api-vod/vod_04_0212.html)生成对应的MD5值。
    * videoName  视频文件名。  文件名后缀为可选。
    * videoType  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    * coverId  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    * coverType  封面图片格式类型。  取值如下： - JPG - PNG
    * coverMd5  封面文件的MD5值。
    * subtitles  字幕文件信息
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'videoMd5' => 'getVideoMd5',
            'videoName' => 'getVideoName',
            'videoType' => 'getVideoType',
            'coverId' => 'getCoverId',
            'coverType' => 'getCoverType',
            'coverMd5' => 'getCoverMd5',
            'subtitles' => 'getSubtitles'
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
    const VIDEO_TYPE_HLS = 'HLS';
    const VIDEO_TYPE_MP3 = 'MP3';
    const VIDEO_TYPE_WMA = 'WMA';
    const VIDEO_TYPE_APE = 'APE';
    const VIDEO_TYPE_FLAC = 'FLAC';
    const VIDEO_TYPE_AAC = 'AAC';
    const VIDEO_TYPE_AC3 = 'AC3';
    const VIDEO_TYPE_MMF = 'MMF';
    const VIDEO_TYPE_AMR = 'AMR';
    const VIDEO_TYPE_M4_A = 'M4A';
    const VIDEO_TYPE_M4_R = 'M4R';
    const VIDEO_TYPE_OGG = 'OGG';
    const VIDEO_TYPE_WAV = 'WAV';
    const VIDEO_TYPE_WV = 'WV';
    const VIDEO_TYPE_MP2 = 'MP2';
    const VIDEO_TYPE_AVI = 'AVI';
    const VIDEO_TYPE_F4_V = 'F4V';
    const VIDEO_TYPE_M4_V = 'M4V';
    const VIDEO_TYPE_MPEG = 'MPEG';
    const VIDEO_TYPE_UNKNOW = 'UNKNOW';
    const COVER_TYPE_JPG = 'JPG';
    const COVER_TYPE_PNG = 'PNG';
    

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
            self::VIDEO_TYPE_HLS,
            self::VIDEO_TYPE_MP3,
            self::VIDEO_TYPE_WMA,
            self::VIDEO_TYPE_APE,
            self::VIDEO_TYPE_FLAC,
            self::VIDEO_TYPE_AAC,
            self::VIDEO_TYPE_AC3,
            self::VIDEO_TYPE_MMF,
            self::VIDEO_TYPE_AMR,
            self::VIDEO_TYPE_M4_A,
            self::VIDEO_TYPE_M4_R,
            self::VIDEO_TYPE_OGG,
            self::VIDEO_TYPE_WAV,
            self::VIDEO_TYPE_WV,
            self::VIDEO_TYPE_MP2,
            self::VIDEO_TYPE_AVI,
            self::VIDEO_TYPE_F4_V,
            self::VIDEO_TYPE_M4_V,
            self::VIDEO_TYPE_MPEG,
            self::VIDEO_TYPE_UNKNOW,
        ];
    }

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
        $this->container['videoMd5'] = isset($data['videoMd5']) ? $data['videoMd5'] : null;
        $this->container['videoName'] = isset($data['videoName']) ? $data['videoName'] : null;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : null;
        $this->container['coverId'] = isset($data['coverId']) ? $data['coverId'] : null;
        $this->container['coverType'] = isset($data['coverType']) ? $data['coverType'] : null;
        $this->container['coverMd5'] = isset($data['coverMd5']) ? $data['coverMd5'] : null;
        $this->container['subtitles'] = isset($data['subtitles']) ? $data['subtitles'] : null;
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
            $allowedValues = $this->getVideoTypeAllowableValues();
                if (!is_null($this->container['videoType']) && !in_array($this->container['videoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCoverTypeAllowableValues();
                if (!is_null($this->container['coverType']) && !in_array($this->container['coverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'coverType', must be one of '%s'",
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
    * Gets videoName
    *  视频文件名。  文件名后缀为可选。
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
    * @param string|null $videoName 视频文件名。  文件名后缀为可选。
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
    *  视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
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
    * @param string|null $videoType 视频文件类型。 取值为MP4、TS、MOV、MXF、MPG、FLV、WMV、AVI、M4V、F4V、MPEG、3GP、ASF、MKV
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets coverId
    *  封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    *
    * @return int|null
    */
    public function getCoverId()
    {
        return $this->container['coverId'];
    }

    /**
    * Sets coverId
    *
    * @param int|null $coverId 封面ID。  取值范围：[0,7]。  当前只支持一张封面，只能设置为0。
    *
    * @return $this
    */
    public function setCoverId($coverId)
    {
        $this->container['coverId'] = $coverId;
        return $this;
    }

    /**
    * Gets coverType
    *  封面图片格式类型。  取值如下： - JPG - PNG
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
    * @param string|null $coverType 封面图片格式类型。  取值如下： - JPG - PNG
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
    *  封面文件的MD5值。
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
    * @param string|null $coverMd5 封面文件的MD5值。
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

