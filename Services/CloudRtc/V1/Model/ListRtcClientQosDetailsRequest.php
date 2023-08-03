<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRtcClientQosDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRtcClientQosDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * domain  域名
    * appId  应用id
    * roomId  房间ID
    * userId  发送端用户
    * peerId  需查询接收端用户id
    * streamId  流号
    * direction  判断上下行数据
    * mid  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    * startTime  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    * endTime  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    * timeType  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    * limit  查询结果限制
    * offset  查询偏移量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'domain' => 'string',
            'appId' => 'string',
            'roomId' => 'string',
            'userId' => 'string',
            'peerId' => 'string',
            'streamId' => 'string',
            'direction' => 'string',
            'mid' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'timeType' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * domain  域名
    * appId  应用id
    * roomId  房间ID
    * userId  发送端用户
    * peerId  需查询接收端用户id
    * streamId  流号
    * direction  判断上下行数据
    * mid  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    * startTime  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    * endTime  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    * timeType  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    * limit  查询结果限制
    * offset  查询偏移量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'domain' => null,
        'appId' => null,
        'roomId' => null,
        'userId' => null,
        'peerId' => null,
        'streamId' => null,
        'direction' => null,
        'mid' => null,
        'startTime' => null,
        'endTime' => null,
        'timeType' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * domain  域名
    * appId  应用id
    * roomId  房间ID
    * userId  发送端用户
    * peerId  需查询接收端用户id
    * streamId  流号
    * direction  判断上下行数据
    * mid  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    * startTime  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    * endTime  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    * timeType  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    * limit  查询结果限制
    * offset  查询偏移量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'domain' => 'domain',
            'appId' => 'app_id',
            'roomId' => 'room_id',
            'userId' => 'user_id',
            'peerId' => 'peer_id',
            'streamId' => 'stream_id',
            'direction' => 'direction',
            'mid' => 'mid',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'timeType' => 'time_type',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * domain  域名
    * appId  应用id
    * roomId  房间ID
    * userId  发送端用户
    * peerId  需查询接收端用户id
    * streamId  流号
    * direction  判断上下行数据
    * mid  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    * startTime  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    * endTime  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    * timeType  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    * limit  查询结果限制
    * offset  查询偏移量
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'domain' => 'setDomain',
            'appId' => 'setAppId',
            'roomId' => 'setRoomId',
            'userId' => 'setUserId',
            'peerId' => 'setPeerId',
            'streamId' => 'setStreamId',
            'direction' => 'setDirection',
            'mid' => 'setMid',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'timeType' => 'setTimeType',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    * domain  域名
    * appId  应用id
    * roomId  房间ID
    * userId  发送端用户
    * peerId  需查询接收端用户id
    * streamId  流号
    * direction  判断上下行数据
    * mid  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    * startTime  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    * endTime  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    * timeType  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    * limit  查询结果限制
    * offset  查询偏移量
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'domain' => 'getDomain',
            'appId' => 'getAppId',
            'roomId' => 'getRoomId',
            'userId' => 'getUserId',
            'peerId' => 'getPeerId',
            'streamId' => 'getStreamId',
            'direction' => 'getDirection',
            'mid' => 'getMid',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'timeType' => 'getTimeType',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const MID_APPCPU = 'appcpu';
    const MID_SYSCPU = 'syscpu';
    const MID_ABIT = 'abit';
    const MID_ABLOCK = 'ablock';
    const MID_VBIT = 'vbit';
    const MID_DBIT = 'dbit';
    const MID_VFPS = 'vfps';
    const MID_DFPS = 'dfps';
    const MID_VBLOCK = 'vblock';
    const MID_DBLOCK = 'dblock';
    const MID_ALOSS = 'aloss';
    const MID_VLOSS = 'vloss';
    const MID_DLOSS = 'dloss';
    const MID_VWIDTH = 'vwidth';
    const MID_VHEIGHT = 'vheight';
    const MID_DWIDTH = 'dwidth';
    const MID_DHEIGHT = 'dheight';
    const MID_AJITTER = 'ajitter';
    const MID_ARTT = 'artt';
    const MID_VJITTER = 'vjitter';
    const MID_VRTT = 'vrtt';
    const MID_DJITTER = 'djitter';
    const MID_DRTT = 'drtt';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMidAllowableValues()
    {
        return [
            self::MID_APPCPU,
            self::MID_SYSCPU,
            self::MID_ABIT,
            self::MID_ABLOCK,
            self::MID_VBIT,
            self::MID_DBIT,
            self::MID_VFPS,
            self::MID_DFPS,
            self::MID_VBLOCK,
            self::MID_DBLOCK,
            self::MID_ALOSS,
            self::MID_VLOSS,
            self::MID_DLOSS,
            self::MID_VWIDTH,
            self::MID_VHEIGHT,
            self::MID_DWIDTH,
            self::MID_DHEIGHT,
            self::MID_AJITTER,
            self::MID_ARTT,
            self::MID_VJITTER,
            self::MID_VRTT,
            self::MID_DJITTER,
            self::MID_DRTT,
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['peerId'] = isset($data['peerId']) ? $data['peerId'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['timeType'] = isset($data['timeType']) ? $data['timeType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 256)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if ((mb_strlen($this->container['appId']) > 256)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['roomId']) < 0)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 256)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['peerId']) && (mb_strlen($this->container['peerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'peerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['peerId']) && (mb_strlen($this->container['peerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'peerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) > 256)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['direction']) && (mb_strlen($this->container['direction']) > 256)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['direction']) && (mb_strlen($this->container['direction']) < 1)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['mid'] === null) {
            $invalidProperties[] = "'mid' can't be null";
        }
            $allowedValues = $this->getMidAllowableValues();
                if (!is_null($this->container['mid']) && !in_array($this->container['mid'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mid', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if ((mb_strlen($this->container['startTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['startTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if ((mb_strlen($this->container['endTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['endTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息，与路径参数中的项目ID相同。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets domain
    *  域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets roomId
    *  房间ID
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
    * @param string $roomId 房间ID
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
    *  发送端用户
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 发送端用户
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets peerId
    *  需查询接收端用户id
    *
    * @return string|null
    */
    public function getPeerId()
    {
        return $this->container['peerId'];
    }

    /**
    * Sets peerId
    *
    * @param string|null $peerId 需查询接收端用户id
    *
    * @return $this
    */
    public function setPeerId($peerId)
    {
        $this->container['peerId'] = $peerId;
        return $this;
    }

    /**
    * Gets streamId
    *  流号
    *
    * @return string|null
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string|null $streamId 流号
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets direction
    *  判断上下行数据
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 判断上下行数据
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets mid
    *  需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    *
    * @return string
    */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
    * Sets mid
    *
    * @param string $mid 需查询的指标，填all则返回所有指标。多个指标使用','分割 - appcpu：端侧APP CPU使用率（appCpu） - syscpu：端侧系统 CPU使用率（deviceCpu） - abit：端侧音频码率kpbs（bitrate） - vbit：端侧视频码率kbps（bitRate） - dbit：端侧辅流码率kbps（bitRate） - vfps：端侧视频帧率fps（actFrameRate） - dfps：端侧辅流帧率fps（actFrameRate） - vblock：端侧视频卡顿率（统计大于等于600ms视频卡顿） - dblock：端侧辅流卡顿率（统计大于等于600ms辅流卡顿） - aloss：端侧音频丢包率（pktLoss） - vloss：端侧视频丢包率（pktLoss） - dloss：端侧辅流丢包率（pktLoss） - vwidth：端侧视频分辨率宽（actPicW） - vheight：端侧视频分辨率高（actPicH） - dwidth：端侧辅流分辨率宽（actPicW） - dheight：端侧辅流分辨率高（actPicH） - ajitter：端侧音频抖动率（jitter） - artt：端侧音频时延（rtt） - vjitter：端侧视频抖动率（jitter） - vrtt：端侧视频时延（rtt） - djitter：端侧辅流抖动率（jitter） - drtt：端侧辅流时延（rtt）
    *
    * @return $this
    */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;
        return $this;
    }

    /**
    * Gets startTime
    *  查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 查询起始时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T06:00:00Z
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 查询结束时间。UTC时间，格式：yyyy-mm-ddThh:mm:ssZ，如2020-04-23T07:00:00Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets timeType
    *  查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    *
    * @return string|null
    */
    public function getTimeType()
    {
        return $this->container['timeType'];
    }

    /**
    * Sets timeType
    *
    * @param string|null $timeType 查询的时间类型取值：stime 数据库打点时间，不填默认ctime查询
    *
    * @return $this
    */
    public function setTimeType($timeType)
    {
        $this->container['timeType'] = $timeType;
        return $this;
    }

    /**
    * Gets limit
    *  查询结果限制
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询结果限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 查询偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

