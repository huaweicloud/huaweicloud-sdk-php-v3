<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RTCLiveEventCallBackConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RTCLiveEventCallBackConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rtcCallbackEventType  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rtcCallbackEventType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rtcCallbackEventType  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rtcCallbackEventType' => null
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
    * rtcCallbackEventType  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rtcCallbackEventType' => 'rtc_callback_event_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rtcCallbackEventType  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @var string[]
    */
    protected static $setters = [
            'rtcCallbackEventType' => 'setRtcCallbackEventType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rtcCallbackEventType  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @var string[]
    */
    protected static $getters = [
            'rtcCallbackEventType' => 'getRtcCallbackEventType'
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
        $this->container['rtcCallbackEventType'] = isset($data['rtcCallbackEventType']) ? $data['rtcCallbackEventType'] : null;
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
    * Gets rtcCallbackEventType
    *  RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @return string[]|null
    */
    public function getRtcCallbackEventType()
    {
        return $this->container['rtcCallbackEventType'];
    }

    /**
    * Sets rtcCallbackEventType
    *
    * @param string[]|null $rtcCallbackEventType RTC回调的直播事件类型列表。  当前仅支持如下取值： * LIVE_PROGRESS：直播剧本进度通知。  * REPLY_COMMAND_FINISH：回复播放完成通知。  回调事件结构体定义： * message_type：消息类型。 * data：消息描述。   - LIVE_PROGRESS事件回调定义如下：     ```json     {         \"message_type\": \"live_progress_notify\",         \"data\": {             \"script_name\": \"场景一\",             \"shoot_script_sequence_no\": 2,             \"shoot_script_title\": \"引导语\",             \"offset\": \"247\",             \"reply_id\": \"e87104f76d7546ce8a46ac6b04c49c3c\"         }     }     ```   - REPLY_COMMAND_FINISH回调定义如下：     ```json     {       \"message_type\": \"reply_command_finish_notify\",       \"data\":\"{         \"reply_id\":\"e87104f76d7546ce8a46ac6b04c49c3c\"       }\"     }     ```
    *
    * @return $this
    */
    public function setRtcCallbackEventType($rtcCallbackEventType)
    {
        $this->container['rtcCallbackEventType'] = $rtcCallbackEventType;
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

