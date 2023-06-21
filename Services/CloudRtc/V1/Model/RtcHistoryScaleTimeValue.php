<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RtcHistoryScaleTimeValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RtcHistoryScaleTimeValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * userCount  通话人数，指总的uid个数
    * sessionCount  通话人次，指总的session个数
    * roomCount  房间数
    * maxOnlineUserCount  最大同时在线人数
    * maxOnlineRoomCount  最大同时在线房间数
    * communicationDuration  音视频通话总时长，单位秒
    * videoCommunicationDuration  视频通话总时长，单位秒
    * audioCommunicationDuration  音频通话总时长，单位秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'userCount' => 'int',
            'sessionCount' => 'int',
            'roomCount' => 'int',
            'maxOnlineUserCount' => 'int',
            'maxOnlineRoomCount' => 'int',
            'communicationDuration' => 'int',
            'videoCommunicationDuration' => 'int',
            'audioCommunicationDuration' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * userCount  通话人数，指总的uid个数
    * sessionCount  通话人次，指总的session个数
    * roomCount  房间数
    * maxOnlineUserCount  最大同时在线人数
    * maxOnlineRoomCount  最大同时在线房间数
    * communicationDuration  音视频通话总时长，单位秒
    * videoCommunicationDuration  视频通话总时长，单位秒
    * audioCommunicationDuration  音频通话总时长，单位秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'userCount' => 'int64',
        'sessionCount' => 'int64',
        'roomCount' => 'int64',
        'maxOnlineUserCount' => 'int64',
        'maxOnlineRoomCount' => 'int64',
        'communicationDuration' => 'int64',
        'videoCommunicationDuration' => 'int64',
        'audioCommunicationDuration' => 'int64'
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
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * userCount  通话人数，指总的uid个数
    * sessionCount  通话人次，指总的session个数
    * roomCount  房间数
    * maxOnlineUserCount  最大同时在线人数
    * maxOnlineRoomCount  最大同时在线房间数
    * communicationDuration  音视频通话总时长，单位秒
    * videoCommunicationDuration  视频通话总时长，单位秒
    * audioCommunicationDuration  音频通话总时长，单位秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'userCount' => 'user_count',
            'sessionCount' => 'session_count',
            'roomCount' => 'room_count',
            'maxOnlineUserCount' => 'max_online_user_count',
            'maxOnlineRoomCount' => 'max_online_room_count',
            'communicationDuration' => 'communication_duration',
            'videoCommunicationDuration' => 'video_communication_duration',
            'audioCommunicationDuration' => 'audio_communication_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * userCount  通话人数，指总的uid个数
    * sessionCount  通话人次，指总的session个数
    * roomCount  房间数
    * maxOnlineUserCount  最大同时在线人数
    * maxOnlineRoomCount  最大同时在线房间数
    * communicationDuration  音视频通话总时长，单位秒
    * videoCommunicationDuration  视频通话总时长，单位秒
    * audioCommunicationDuration  音频通话总时长，单位秒
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'userCount' => 'setUserCount',
            'sessionCount' => 'setSessionCount',
            'roomCount' => 'setRoomCount',
            'maxOnlineUserCount' => 'setMaxOnlineUserCount',
            'maxOnlineRoomCount' => 'setMaxOnlineRoomCount',
            'communicationDuration' => 'setCommunicationDuration',
            'videoCommunicationDuration' => 'setVideoCommunicationDuration',
            'audioCommunicationDuration' => 'setAudioCommunicationDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    * userCount  通话人数，指总的uid个数
    * sessionCount  通话人次，指总的session个数
    * roomCount  房间数
    * maxOnlineUserCount  最大同时在线人数
    * maxOnlineRoomCount  最大同时在线房间数
    * communicationDuration  音视频通话总时长，单位秒
    * videoCommunicationDuration  视频通话总时长，单位秒
    * audioCommunicationDuration  音频通话总时长，单位秒
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'userCount' => 'getUserCount',
            'sessionCount' => 'getSessionCount',
            'roomCount' => 'getRoomCount',
            'maxOnlineUserCount' => 'getMaxOnlineUserCount',
            'maxOnlineRoomCount' => 'getMaxOnlineRoomCount',
            'communicationDuration' => 'getCommunicationDuration',
            'videoCommunicationDuration' => 'getVideoCommunicationDuration',
            'audioCommunicationDuration' => 'getAudioCommunicationDuration'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['userCount'] = isset($data['userCount']) ? $data['userCount'] : null;
        $this->container['sessionCount'] = isset($data['sessionCount']) ? $data['sessionCount'] : null;
        $this->container['roomCount'] = isset($data['roomCount']) ? $data['roomCount'] : null;
        $this->container['maxOnlineUserCount'] = isset($data['maxOnlineUserCount']) ? $data['maxOnlineUserCount'] : null;
        $this->container['maxOnlineRoomCount'] = isset($data['maxOnlineRoomCount']) ? $data['maxOnlineRoomCount'] : null;
        $this->container['communicationDuration'] = isset($data['communicationDuration']) ? $data['communicationDuration'] : null;
        $this->container['videoCommunicationDuration'] = isset($data['videoCommunicationDuration']) ? $data['videoCommunicationDuration'] : null;
        $this->container['audioCommunicationDuration'] = isset($data['audioCommunicationDuration']) ? $data['audioCommunicationDuration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) > 10)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['date']) && (mb_strlen($this->container['date']) < 10)) {
                $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['userCount']) && ($this->container['userCount'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'userCount', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['userCount']) && ($this->container['userCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'userCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionCount']) && ($this->container['sessionCount'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'sessionCount', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['sessionCount']) && ($this->container['sessionCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'sessionCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['roomCount']) && ($this->container['roomCount'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'roomCount', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['roomCount']) && ($this->container['roomCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'roomCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxOnlineUserCount']) && ($this->container['maxOnlineUserCount'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'maxOnlineUserCount', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['maxOnlineUserCount']) && ($this->container['maxOnlineUserCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxOnlineUserCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxOnlineRoomCount']) && ($this->container['maxOnlineRoomCount'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'maxOnlineRoomCount', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['maxOnlineRoomCount']) && ($this->container['maxOnlineRoomCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxOnlineRoomCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['communicationDuration']) && ($this->container['communicationDuration'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'communicationDuration', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['communicationDuration']) && ($this->container['communicationDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'communicationDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoCommunicationDuration']) && ($this->container['videoCommunicationDuration'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'videoCommunicationDuration', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['videoCommunicationDuration']) && ($this->container['videoCommunicationDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'videoCommunicationDuration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioCommunicationDuration']) && ($this->container['audioCommunicationDuration'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'audioCommunicationDuration', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['audioCommunicationDuration']) && ($this->container['audioCommunicationDuration'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioCommunicationDuration', must be bigger than or equal to 0.";
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
    * Gets date
    *  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DD
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets userCount
    *  通话人数，指总的uid个数
    *
    * @return int|null
    */
    public function getUserCount()
    {
        return $this->container['userCount'];
    }

    /**
    * Sets userCount
    *
    * @param int|null $userCount 通话人数，指总的uid个数
    *
    * @return $this
    */
    public function setUserCount($userCount)
    {
        $this->container['userCount'] = $userCount;
        return $this;
    }

    /**
    * Gets sessionCount
    *  通话人次，指总的session个数
    *
    * @return int|null
    */
    public function getSessionCount()
    {
        return $this->container['sessionCount'];
    }

    /**
    * Sets sessionCount
    *
    * @param int|null $sessionCount 通话人次，指总的session个数
    *
    * @return $this
    */
    public function setSessionCount($sessionCount)
    {
        $this->container['sessionCount'] = $sessionCount;
        return $this;
    }

    /**
    * Gets roomCount
    *  房间数
    *
    * @return int|null
    */
    public function getRoomCount()
    {
        return $this->container['roomCount'];
    }

    /**
    * Sets roomCount
    *
    * @param int|null $roomCount 房间数
    *
    * @return $this
    */
    public function setRoomCount($roomCount)
    {
        $this->container['roomCount'] = $roomCount;
        return $this;
    }

    /**
    * Gets maxOnlineUserCount
    *  最大同时在线人数
    *
    * @return int|null
    */
    public function getMaxOnlineUserCount()
    {
        return $this->container['maxOnlineUserCount'];
    }

    /**
    * Sets maxOnlineUserCount
    *
    * @param int|null $maxOnlineUserCount 最大同时在线人数
    *
    * @return $this
    */
    public function setMaxOnlineUserCount($maxOnlineUserCount)
    {
        $this->container['maxOnlineUserCount'] = $maxOnlineUserCount;
        return $this;
    }

    /**
    * Gets maxOnlineRoomCount
    *  最大同时在线房间数
    *
    * @return int|null
    */
    public function getMaxOnlineRoomCount()
    {
        return $this->container['maxOnlineRoomCount'];
    }

    /**
    * Sets maxOnlineRoomCount
    *
    * @param int|null $maxOnlineRoomCount 最大同时在线房间数
    *
    * @return $this
    */
    public function setMaxOnlineRoomCount($maxOnlineRoomCount)
    {
        $this->container['maxOnlineRoomCount'] = $maxOnlineRoomCount;
        return $this;
    }

    /**
    * Gets communicationDuration
    *  音视频通话总时长，单位秒
    *
    * @return int|null
    */
    public function getCommunicationDuration()
    {
        return $this->container['communicationDuration'];
    }

    /**
    * Sets communicationDuration
    *
    * @param int|null $communicationDuration 音视频通话总时长，单位秒
    *
    * @return $this
    */
    public function setCommunicationDuration($communicationDuration)
    {
        $this->container['communicationDuration'] = $communicationDuration;
        return $this;
    }

    /**
    * Gets videoCommunicationDuration
    *  视频通话总时长，单位秒
    *
    * @return int|null
    */
    public function getVideoCommunicationDuration()
    {
        return $this->container['videoCommunicationDuration'];
    }

    /**
    * Sets videoCommunicationDuration
    *
    * @param int|null $videoCommunicationDuration 视频通话总时长，单位秒
    *
    * @return $this
    */
    public function setVideoCommunicationDuration($videoCommunicationDuration)
    {
        $this->container['videoCommunicationDuration'] = $videoCommunicationDuration;
        return $this;
    }

    /**
    * Gets audioCommunicationDuration
    *  音频通话总时长，单位秒
    *
    * @return int|null
    */
    public function getAudioCommunicationDuration()
    {
        return $this->container['audioCommunicationDuration'];
    }

    /**
    * Sets audioCommunicationDuration
    *
    * @param int|null $audioCommunicationDuration 音频通话总时长，单位秒
    *
    * @return $this
    */
    public function setAudioCommunicationDuration($audioCommunicationDuration)
    {
        $this->container['audioCommunicationDuration'] = $audioCommunicationDuration;
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

