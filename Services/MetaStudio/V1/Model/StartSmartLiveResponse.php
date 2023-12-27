<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartSmartLiveResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartSmartLiveResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  直播任务ID。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveWarningInfo  开播风险告警列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'rtcRoomInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList',
            'liveEventReportUrl' => 'string',
            'liveEventCallbackConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig',
            'liveWarningInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveWarningItem[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  直播任务ID。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveWarningInfo  开播风险告警列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'rtcRoomInfo' => null,
        'liveEventReportUrl' => null,
        'liveEventCallbackConfig' => null,
        'liveWarningInfo' => null,
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
    * jobId  直播任务ID。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveWarningInfo  开播风险告警列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'rtcRoomInfo' => 'rtc_room_info',
            'liveEventReportUrl' => 'live_event_report_url',
            'liveEventCallbackConfig' => 'live_event_callback_config',
            'liveWarningInfo' => 'live_warning_info',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  直播任务ID。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveWarningInfo  开播风险告警列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'rtcRoomInfo' => 'setRtcRoomInfo',
            'liveEventReportUrl' => 'setLiveEventReportUrl',
            'liveEventCallbackConfig' => 'setLiveEventCallbackConfig',
            'liveWarningInfo' => 'setLiveWarningInfo',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  直播任务ID。
    * rtcRoomInfo  rtcRoomInfo
    * liveEventReportUrl  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    * liveEventCallbackConfig  liveEventCallbackConfig
    * liveWarningInfo  开播风险告警列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'rtcRoomInfo' => 'getRtcRoomInfo',
            'liveEventReportUrl' => 'getLiveEventReportUrl',
            'liveEventCallbackConfig' => 'getLiveEventCallbackConfig',
            'liveWarningInfo' => 'getLiveWarningInfo',
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
        $this->container['rtcRoomInfo'] = isset($data['rtcRoomInfo']) ? $data['rtcRoomInfo'] : null;
        $this->container['liveEventReportUrl'] = isset($data['liveEventReportUrl']) ? $data['liveEventReportUrl'] : null;
        $this->container['liveEventCallbackConfig'] = isset($data['liveEventCallbackConfig']) ? $data['liveEventCallbackConfig'] : null;
        $this->container['liveWarningInfo'] = isset($data['liveWarningInfo']) ? $data['liveWarningInfo'] : null;
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
            if (!is_null($this->container['liveEventReportUrl']) && (mb_strlen($this->container['liveEventReportUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'liveEventReportUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['liveEventReportUrl']) && (mb_strlen($this->container['liveEventReportUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveEventReportUrl', the character length must be bigger than or equal to 0.";
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
    *  直播任务ID。
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
    * @param string|null $jobId 直播任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets rtcRoomInfo
    *  rtcRoomInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null
    */
    public function getRtcRoomInfo()
    {
        return $this->container['rtcRoomInfo'];
    }

    /**
    * Sets rtcRoomInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RTCRoomInfoList|null $rtcRoomInfo rtcRoomInfo
    *
    * @return $this
    */
    public function setRtcRoomInfo($rtcRoomInfo)
    {
        $this->container['rtcRoomInfo'] = $rtcRoomInfo;
        return $this;
    }

    /**
    * Gets liveEventReportUrl
    *  直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    *
    * @return string|null
    */
    public function getLiveEventReportUrl()
    {
        return $this->container['liveEventReportUrl'];
    }

    /**
    * Sets liveEventReportUrl
    *
    * @param string|null $liveEventReportUrl 直播事件上报地址。用户将自行获取的直播间事件上报到此地址，用于触发智能互动，自动回复话术。
    *
    * @return $this
    */
    public function setLiveEventReportUrl($liveEventReportUrl)
    {
        $this->container['liveEventReportUrl'] = $liveEventReportUrl;
        return $this;
    }

    /**
    * Gets liveEventCallbackConfig
    *  liveEventCallbackConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null
    */
    public function getLiveEventCallbackConfig()
    {
        return $this->container['liveEventCallbackConfig'];
    }

    /**
    * Sets liveEventCallbackConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveEventCallBackConfig|null $liveEventCallbackConfig liveEventCallbackConfig
    *
    * @return $this
    */
    public function setLiveEventCallbackConfig($liveEventCallbackConfig)
    {
        $this->container['liveEventCallbackConfig'] = $liveEventCallbackConfig;
        return $this;
    }

    /**
    * Gets liveWarningInfo
    *  开播风险告警列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveWarningItem[]|null
    */
    public function getLiveWarningInfo()
    {
        return $this->container['liveWarningInfo'];
    }

    /**
    * Sets liveWarningInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveWarningItem[]|null $liveWarningInfo 开播风险告警列表。
    *
    * @return $this
    */
    public function setLiveWarningInfo($liveWarningInfo)
    {
        $this->container['liveWarningInfo'] = $liveWarningInfo;
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

