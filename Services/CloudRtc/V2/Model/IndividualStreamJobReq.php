<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndividualStreamJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndividualStreamJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'userId' => 'string',
            'isRecordAudio' => 'bool',
            'videoType' => 'string',
            'selectStreamType' => 'string',
            'maxIdleTime' => 'int',
            'recordParam' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'userId' => null,
        'isRecordAudio' => null,
        'videoType' => null,
        'selectStreamType' => null,
        'maxIdleTime' => null,
        'recordParam' => null
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
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'userId' => 'user_id',
            'isRecordAudio' => 'is_record_audio',
            'videoType' => 'video_type',
            'selectStreamType' => 'select_stream_type',
            'maxIdleTime' => 'max_idle_time',
            'recordParam' => 'record_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'userId' => 'setUserId',
            'isRecordAudio' => 'setIsRecordAudio',
            'videoType' => 'setVideoType',
            'selectStreamType' => 'setSelectStreamType',
            'maxIdleTime' => 'setMaxIdleTime',
            'recordParam' => 'setRecordParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  房间id
    * userId  选看的用户id，单个录制任务内保证唯一
    * isRecordAudio  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * selectStreamType  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * recordParam  recordParam
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'userId' => 'getUserId',
            'isRecordAudio' => 'getIsRecordAudio',
            'videoType' => 'getVideoType',
            'selectStreamType' => 'getSelectStreamType',
            'maxIdleTime' => 'getMaxIdleTime',
            'recordParam' => 'getRecordParam'
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
    const VIDEO_TYPE_CAMERASTREAM = 'CAMERASTREAM';
    const VIDEO_TYPE_SCREENSTREAM = 'SCREENSTREAM';
    const SELECT_STREAM_TYPE_LD = 'LD';
    const SELECT_STREAM_TYPE_SD = 'SD';
    const SELECT_STREAM_TYPE_HD = 'HD';
    const SELECT_STREAM_TYPE_FHD = 'FHD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTypeAllowableValues()
    {
        return [
            self::VIDEO_TYPE_CAMERASTREAM,
            self::VIDEO_TYPE_SCREENSTREAM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSelectStreamTypeAllowableValues()
    {
        return [
            self::SELECT_STREAM_TYPE_LD,
            self::SELECT_STREAM_TYPE_SD,
            self::SELECT_STREAM_TYPE_HD,
            self::SELECT_STREAM_TYPE_FHD,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['isRecordAudio'] = isset($data['isRecordAudio']) ? $data['isRecordAudio'] : null;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : null;
        $this->container['selectStreamType'] = isset($data['selectStreamType']) ? $data['selectStreamType'] : null;
        $this->container['maxIdleTime'] = isset($data['maxIdleTime']) ? $data['maxIdleTime'] : null;
        $this->container['recordParam'] = isset($data['recordParam']) ? $data['recordParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getVideoTypeAllowableValues();
                if (!is_null($this->container['videoType']) && !in_array($this->container['videoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSelectStreamTypeAllowableValues();
                if (!is_null($this->container['selectStreamType']) && !in_array($this->container['selectStreamType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'selectStreamType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['selectStreamType']) && (mb_strlen($this->container['selectStreamType']) > 64)) {
                $invalidProperties[] = "invalid value for 'selectStreamType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['selectStreamType']) && (mb_strlen($this->container['selectStreamType']) < 0)) {
                $invalidProperties[] = "invalid value for 'selectStreamType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] > 43200)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] < 5)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be bigger than or equal to 5.";
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
    * Gets roomId
    *  房间id
    *
    * @return string
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string $roomId 房间id
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets userId
    *  选看的用户id，单个录制任务内保证唯一
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 选看的用户id，单个录制任务内保证唯一
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets isRecordAudio
    *  是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    *
    * @return bool|null
    */
    public function getIsRecordAudio()
    {
        return $this->container['isRecordAudio'];
    }

    /**
    * Sets isRecordAudio
    *
    * @param bool|null $isRecordAudio 是否录制音频。  - true：录制音频 - false：不录制音频  缺省为true。
    *
    * @return $this
    */
    public function setIsRecordAudio($isRecordAudio)
    {
        $this->container['isRecordAudio'] = $isRecordAudio;
        return $this;
    }

    /**
    * Gets videoType
    *  标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
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
    * @param string|null $videoType 标识视频流的类型，可选摄像头流或者屏幕分享流，未填写表示不录制视频。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets selectStreamType
    *  指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    *
    * @return string|null
    */
    public function getSelectStreamType()
    {
        return $this->container['selectStreamType'];
    }

    /**
    * Sets selectStreamType
    *
    * @param string|null $selectStreamType 指定窗口拉取的分辨率档位。  - LD - SD - HD - FHD  缺省为FHD。
    *
    * @return $this
    */
    public function setSelectStreamType($selectStreamType)
    {
        $this->container['selectStreamType'] = $selectStreamType;
        return $this;
    }

    /**
    * Gets maxIdleTime
    *  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return int|null
    */
    public function getMaxIdleTime()
    {
        return $this->container['maxIdleTime'];
    }

    /**
    * Sets maxIdleTime
    *
    * @param int|null $maxIdleTime 最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return $this
    */
    public function setMaxIdleTime($maxIdleTime)
    {
        $this->container['maxIdleTime'] = $maxIdleTime;
        return $this;
    }

    /**
    * Gets recordParam
    *  recordParam
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null
    */
    public function getRecordParam()
    {
        return $this->container['recordParam'];
    }

    /**
    * Sets recordParam
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\RecordParam|null $recordParam recordParam
    *
    * @return $this
    */
    public function setRecordParam($recordParam)
    {
        $this->container['recordParam'] = $recordParam;
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

