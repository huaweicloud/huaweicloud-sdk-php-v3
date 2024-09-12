<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Update2dModelTrainingJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Update2dModelTrainingJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * trainingVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * actionVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * audioUploadUrl  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    * coverUploadUrl  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    * idCardImage1UploadUrl  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * idCardImage2UploadUrl  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * grantFileUploadUrl  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'trainingVideoUploadUrl' => 'string[]',
            'actionVideoUploadUrl' => 'string[]',
            'audioUploadUrl' => 'string',
            'coverUploadUrl' => 'string',
            'idCardImage1UploadUrl' => 'string',
            'idCardImage2UploadUrl' => 'string',
            'grantFileUploadUrl' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * trainingVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * actionVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * audioUploadUrl  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    * coverUploadUrl  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    * idCardImage1UploadUrl  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * idCardImage2UploadUrl  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * grantFileUploadUrl  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'trainingVideoUploadUrl' => null,
        'actionVideoUploadUrl' => null,
        'audioUploadUrl' => null,
        'coverUploadUrl' => null,
        'idCardImage1UploadUrl' => null,
        'idCardImage2UploadUrl' => null,
        'grantFileUploadUrl' => null,
        'xRequestId' => null
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
    * jobId  任务ID。
    * trainingVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * actionVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * audioUploadUrl  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    * coverUploadUrl  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    * idCardImage1UploadUrl  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * idCardImage2UploadUrl  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * grantFileUploadUrl  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'trainingVideoUploadUrl' => 'training_video_upload_url',
            'actionVideoUploadUrl' => 'action_video_upload_url',
            'audioUploadUrl' => 'audio_upload_url',
            'coverUploadUrl' => 'cover_upload_url',
            'idCardImage1UploadUrl' => 'id_card_image1_upload_url',
            'idCardImage2UploadUrl' => 'id_card_image2_upload_url',
            'grantFileUploadUrl' => 'grant_file_upload_url',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * trainingVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * actionVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * audioUploadUrl  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    * coverUploadUrl  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    * idCardImage1UploadUrl  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * idCardImage2UploadUrl  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * grantFileUploadUrl  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'trainingVideoUploadUrl' => 'setTrainingVideoUploadUrl',
            'actionVideoUploadUrl' => 'setActionVideoUploadUrl',
            'audioUploadUrl' => 'setAudioUploadUrl',
            'coverUploadUrl' => 'setCoverUploadUrl',
            'idCardImage1UploadUrl' => 'setIdCardImage1UploadUrl',
            'idCardImage2UploadUrl' => 'setIdCardImage2UploadUrl',
            'grantFileUploadUrl' => 'setGrantFileUploadUrl',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * trainingVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * actionVideoUploadUrl  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    * audioUploadUrl  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    * coverUploadUrl  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    * idCardImage1UploadUrl  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * idCardImage2UploadUrl  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * grantFileUploadUrl  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'trainingVideoUploadUrl' => 'getTrainingVideoUploadUrl',
            'actionVideoUploadUrl' => 'getActionVideoUploadUrl',
            'audioUploadUrl' => 'getAudioUploadUrl',
            'coverUploadUrl' => 'getCoverUploadUrl',
            'idCardImage1UploadUrl' => 'getIdCardImage1UploadUrl',
            'idCardImage2UploadUrl' => 'getIdCardImage2UploadUrl',
            'grantFileUploadUrl' => 'getGrantFileUploadUrl',
            'xRequestId' => 'getXRequestId'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['trainingVideoUploadUrl'] = isset($data['trainingVideoUploadUrl']) ? $data['trainingVideoUploadUrl'] : null;
        $this->container['actionVideoUploadUrl'] = isset($data['actionVideoUploadUrl']) ? $data['actionVideoUploadUrl'] : null;
        $this->container['audioUploadUrl'] = isset($data['audioUploadUrl']) ? $data['audioUploadUrl'] : null;
        $this->container['coverUploadUrl'] = isset($data['coverUploadUrl']) ? $data['coverUploadUrl'] : null;
        $this->container['idCardImage1UploadUrl'] = isset($data['idCardImage1UploadUrl']) ? $data['idCardImage1UploadUrl'] : null;
        $this->container['idCardImage2UploadUrl'] = isset($data['idCardImage2UploadUrl']) ? $data['idCardImage2UploadUrl'] : null;
        $this->container['grantFileUploadUrl'] = isset($data['grantFileUploadUrl']) ? $data['grantFileUploadUrl'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioUploadUrl']) && (mb_strlen($this->container['audioUploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioUploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioUploadUrl']) && (mb_strlen($this->container['audioUploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioUploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coverUploadUrl']) && (mb_strlen($this->container['coverUploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'coverUploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['coverUploadUrl']) && (mb_strlen($this->container['coverUploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'coverUploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['idCardImage1UploadUrl']) && (mb_strlen($this->container['idCardImage1UploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'idCardImage1UploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['idCardImage1UploadUrl']) && (mb_strlen($this->container['idCardImage1UploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'idCardImage1UploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['idCardImage2UploadUrl']) && (mb_strlen($this->container['idCardImage2UploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'idCardImage2UploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['idCardImage2UploadUrl']) && (mb_strlen($this->container['idCardImage2UploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'idCardImage2UploadUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['grantFileUploadUrl']) && (mb_strlen($this->container['grantFileUploadUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'grantFileUploadUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['grantFileUploadUrl']) && (mb_strlen($this->container['grantFileUploadUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'grantFileUploadUrl', the character length must be bigger than or equal to 1.";
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
    * Gets jobId
    *  任务ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets trainingVideoUploadUrl
    *  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    *
    * @return string[]|null
    */
    public function getTrainingVideoUploadUrl()
    {
        return $this->container['trainingVideoUploadUrl'];
    }

    /**
    * Sets trainingVideoUploadUrl
    *
    * @param string[]|null $trainingVideoUploadUrl 分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    *
    * @return $this
    */
    public function setTrainingVideoUploadUrl($trainingVideoUploadUrl)
    {
        $this->container['trainingVideoUploadUrl'] = $trainingVideoUploadUrl;
        return $this;
    }

    /**
    * Gets actionVideoUploadUrl
    *  分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    *
    * @return string[]|null
    */
    public function getActionVideoUploadUrl()
    {
        return $this->container['actionVideoUploadUrl'];
    }

    /**
    * Sets actionVideoUploadUrl
    *
    * @param string[]|null $actionVideoUploadUrl 分身数字人训练视频上传URL。该url在文件上传成功后失效，只能上传一次。注意：视频必须是1080p或者4K分辨率（横、竖屏皆可）的mp4格式，视频长度须大于等于3分钟且小于等于10分钟，否则审核会不通过。
    *
    * @return $this
    */
    public function setActionVideoUploadUrl($actionVideoUploadUrl)
    {
        $this->container['actionVideoUploadUrl'] = $actionVideoUploadUrl;
        return $this;
    }

    /**
    * Gets audioUploadUrl
    *  音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    *
    * @return string|null
    */
    public function getAudioUploadUrl()
    {
        return $this->container['audioUploadUrl'];
    }

    /**
    * Sets audioUploadUrl
    *
    * @param string|null $audioUploadUrl 音频数据训练上传URL。该url在文件上传成功后失效，只能上传一次
    *
    * @return $this
    */
    public function setAudioUploadUrl($audioUploadUrl)
    {
        $this->container['audioUploadUrl'] = $audioUploadUrl;
        return $this;
    }

    /**
    * Gets coverUploadUrl
    *  模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    *
    * @return string|null
    */
    public function getCoverUploadUrl()
    {
        return $this->container['coverUploadUrl'];
    }

    /**
    * Sets coverUploadUrl
    *
    * @param string|null $coverUploadUrl 模型封面上传URL。该URL在文件上传成功后失效，只能上传一次。
    *
    * @return $this
    */
    public function setCoverUploadUrl($coverUploadUrl)
    {
        $this->container['coverUploadUrl'] = $coverUploadUrl;
        return $this;
    }

    /**
    * Gets idCardImage1UploadUrl
    *  身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return string|null
    */
    public function getIdCardImage1UploadUrl()
    {
        return $this->container['idCardImage1UploadUrl'];
    }

    /**
    * Sets idCardImage1UploadUrl
    *
    * @param string|null $idCardImage1UploadUrl 身份证正面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return $this
    */
    public function setIdCardImage1UploadUrl($idCardImage1UploadUrl)
    {
        $this->container['idCardImage1UploadUrl'] = $idCardImage1UploadUrl;
        return $this;
    }

    /**
    * Gets idCardImage2UploadUrl
    *  身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return string|null
    */
    public function getIdCardImage2UploadUrl()
    {
        return $this->container['idCardImage2UploadUrl'];
    }

    /**
    * Sets idCardImage2UploadUrl
    *
    * @param string|null $idCardImage2UploadUrl 身份证反面照片上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return $this
    */
    public function setIdCardImage2UploadUrl($idCardImage2UploadUrl)
    {
        $this->container['idCardImage2UploadUrl'] = $idCardImage2UploadUrl;
        return $this;
    }

    /**
    * Gets grantFileUploadUrl
    *  授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return string|null
    */
    public function getGrantFileUploadUrl()
    {
        return $this->container['grantFileUploadUrl'];
    }

    /**
    * Sets grantFileUploadUrl
    *
    * @param string|null $grantFileUploadUrl 授权书上传URL。该URL在文件上传成功后失效，只能上传一次。注意：非NA用户必须上传，否则审核会不通过。
    *
    * @return $this
    */
    public function setGrantFileUploadUrl($grantFileUploadUrl)
    {
        $this->container['grantFileUploadUrl'] = $grantFileUploadUrl;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

