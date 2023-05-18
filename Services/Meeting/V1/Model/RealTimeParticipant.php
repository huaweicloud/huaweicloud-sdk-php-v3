<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RealTimeParticipant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RealTimeParticipant';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pid  与会者标识。
    * name  与会者名称。
    * phone  与会者号码。
    * state  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    * video  音视频能力。 - 0: 音频 - 1: 视频
    * mute  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    * hand  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pid' => 'string',
            'name' => 'string',
            'phone' => 'string',
            'state' => 'int',
            'video' => 'int',
            'mute' => 'int',
            'hand' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pid  与会者标识。
    * name  与会者名称。
    * phone  与会者号码。
    * state  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    * video  音视频能力。 - 0: 音频 - 1: 视频
    * mute  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    * hand  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pid' => null,
        'name' => null,
        'phone' => null,
        'state' => 'int32',
        'video' => 'int32',
        'mute' => 'int32',
        'hand' => 'int32'
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
    * pid  与会者标识。
    * name  与会者名称。
    * phone  与会者号码。
    * state  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    * video  音视频能力。 - 0: 音频 - 1: 视频
    * mute  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    * hand  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pid' => 'pid',
            'name' => 'name',
            'phone' => 'phone',
            'state' => 'state',
            'video' => 'video',
            'mute' => 'mute',
            'hand' => 'hand'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pid  与会者标识。
    * name  与会者名称。
    * phone  与会者号码。
    * state  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    * video  音视频能力。 - 0: 音频 - 1: 视频
    * mute  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    * hand  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @var string[]
    */
    protected static $setters = [
            'pid' => 'setPid',
            'name' => 'setName',
            'phone' => 'setPhone',
            'state' => 'setState',
            'video' => 'setVideo',
            'mute' => 'setMute',
            'hand' => 'setHand'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pid  与会者标识。
    * name  与会者名称。
    * phone  与会者号码。
    * state  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    * video  音视频能力。 - 0: 音频 - 1: 视频
    * mute  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    * hand  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @var string[]
    */
    protected static $getters = [
            'pid' => 'getPid',
            'name' => 'getName',
            'phone' => 'getPhone',
            'state' => 'getState',
            'video' => 'getVideo',
            'mute' => 'getMute',
            'hand' => 'getHand'
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
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['mute'] = isset($data['mute']) ? $data['mute'] : null;
        $this->container['hand'] = isset($data['hand']) ? $data['hand'] : null;
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
    * Gets pid
    *  与会者标识。
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid 与会者标识。
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets name
    *  与会者名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 与会者名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
    *  与会者号码。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 与会者号码。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets state
    *  用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    *
    * @return int|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int|null $state 用户状态。 - 0: 会议中 - 1: 正在呼叫 - 2: 正在加入会议 > 若会场未入会或已离会，则不会显示于在线会场列表。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets video
    *  音视频能力。 - 0: 音频 - 1: 视频
    *
    * @return int|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param int|null $video 音视频能力。 - 0: 音频 - 1: 视频
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets mute
    *  麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    *
    * @return int|null
    */
    public function getMute()
    {
        return $this->container['mute'];
    }

    /**
    * Sets mute
    *
    * @param int|null $mute 麦克风状态。 - 0: 麦克风打开 - 1: 麦克风关闭
    *
    * @return $this
    */
    public function setMute($mute)
    {
        $this->container['mute'] = $mute;
        return $this;
    }

    /**
    * Gets hand
    *  与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @return int|null
    */
    public function getHand()
    {
        return $this->container['hand'];
    }

    /**
    * Sets hand
    *
    * @param int|null $hand 与会者举手状态。 - 0: 未举手 - 1: 举手
    *
    * @return $this
    */
    public function setHand($hand)
    {
        $this->container['hand'] = $hand;
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

