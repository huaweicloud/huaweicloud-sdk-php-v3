<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealTimeInfoOfMeetingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealTimeInfoOfMeetingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attendees  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    * participants  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    * confInfo  confInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attendees' => '\HuaweiCloud\SDK\Meeting\V1\Model\RealTimeAttendee[]',
            'participants' => '\HuaweiCloud\SDK\Meeting\V1\Model\RealTimeParticipant[]',
            'confInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\RealTimeConfInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attendees  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    * participants  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    * confInfo  confInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attendees' => null,
        'participants' => null,
        'confInfo' => null
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
    * attendees  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    * participants  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    * confInfo  confInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attendees' => 'attendees',
            'participants' => 'participants',
            'confInfo' => 'confInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attendees  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    * participants  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    * confInfo  confInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'attendees' => 'setAttendees',
            'participants' => 'setParticipants',
            'confInfo' => 'setConfInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attendees  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    * participants  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    * confInfo  confInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'attendees' => 'getAttendees',
            'participants' => 'getParticipants',
            'confInfo' => 'getConfInfo'
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
        $this->container['attendees'] = isset($data['attendees']) ? $data['attendees'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['confInfo'] = isset($data['confInfo']) ? $data['confInfo'] : null;
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
    * Gets attendees
    *  被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeAttendee[]|null
    */
    public function getAttendees()
    {
        return $this->container['attendees'];
    }

    /**
    * Sets attendees
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeAttendee[]|null $attendees 被邀请与会者信息，包括预约会议时邀请的与会者和会中主持人邀请的与会者，已经加入会议的和未加入会议的都返回。
    *
    * @return $this
    */
    public function setAttendees($attendees)
    {
        $this->container['attendees'] = $attendees;
        return $this;
    }

    /**
    * Gets participants
    *  在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeParticipant[]|null
    */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
    * Sets participants
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeParticipant[]|null $participants 在线与会者列表信息，包括已加入会议、被邀请正在呼叫中、正在加入会议的与会者列表等。 > * 同一个帐号用不同类型终端（手机端或者PC端等）加入会议时，是不同的在线与会者 > * 未加入或者已离会与会者，不在在线与会者列表中
    *
    * @return $this
    */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;
        return $this;
    }

    /**
    * Gets confInfo
    *  confInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeConfInfo|null
    */
    public function getConfInfo()
    {
        return $this->container['confInfo'];
    }

    /**
    * Sets confInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RealTimeConfInfo|null $confInfo confInfo
    *
    * @return $this
    */
    public function setConfInfo($confInfo)
    {
        $this->container['confInfo'] = $confInfo;
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

