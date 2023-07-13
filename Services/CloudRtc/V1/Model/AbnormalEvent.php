<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AbnormalEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AbnormalEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    * uid  出现异常的用户ID
    * roomId  出现异常的房间ID
    * stage  出现异常的环节 - join_room：加入房间 - communication：通话中
    * location  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    * peerUid  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    * abnormalType  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    * abnormalTypeDesc  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    * abnormalFactor  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    * abnormalFactorDesc  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'uid' => 'string',
            'roomId' => 'string',
            'stage' => 'string',
            'location' => 'string',
            'peerUid' => 'string',
            'abnormalType' => 'int',
            'abnormalTypeDesc' => 'string',
            'abnormalFactor' => 'int',
            'abnormalFactorDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    * uid  出现异常的用户ID
    * roomId  出现异常的房间ID
    * stage  出现异常的环节 - join_room：加入房间 - communication：通话中
    * location  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    * peerUid  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    * abnormalType  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    * abnormalTypeDesc  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    * abnormalFactor  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    * abnormalFactorDesc  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'uid' => null,
        'roomId' => null,
        'stage' => null,
        'location' => null,
        'peerUid' => null,
        'abnormalType' => null,
        'abnormalTypeDesc' => null,
        'abnormalFactor' => null,
        'abnormalFactorDesc' => null
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
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    * uid  出现异常的用户ID
    * roomId  出现异常的房间ID
    * stage  出现异常的环节 - join_room：加入房间 - communication：通话中
    * location  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    * peerUid  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    * abnormalType  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    * abnormalTypeDesc  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    * abnormalFactor  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    * abnormalFactorDesc  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'uid' => 'uid',
            'roomId' => 'room_id',
            'stage' => 'stage',
            'location' => 'location',
            'peerUid' => 'peer_uid',
            'abnormalType' => 'abnormal_type',
            'abnormalTypeDesc' => 'abnormal_type_desc',
            'abnormalFactor' => 'abnormal_factor',
            'abnormalFactorDesc' => 'abnormal_factor_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    * uid  出现异常的用户ID
    * roomId  出现异常的房间ID
    * stage  出现异常的环节 - join_room：加入房间 - communication：通话中
    * location  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    * peerUid  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    * abnormalType  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    * abnormalTypeDesc  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    * abnormalFactor  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    * abnormalFactorDesc  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'uid' => 'setUid',
            'roomId' => 'setRoomId',
            'stage' => 'setStage',
            'location' => 'setLocation',
            'peerUid' => 'setPeerUid',
            'abnormalType' => 'setAbnormalType',
            'abnormalTypeDesc' => 'setAbnormalTypeDesc',
            'abnormalFactor' => 'setAbnormalFactor',
            'abnormalFactorDesc' => 'setAbnormalFactorDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    * uid  出现异常的用户ID
    * roomId  出现异常的房间ID
    * stage  出现异常的环节 - join_room：加入房间 - communication：通话中
    * location  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    * peerUid  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    * abnormalType  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    * abnormalTypeDesc  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    * abnormalFactor  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    * abnormalFactorDesc  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'uid' => 'getUid',
            'roomId' => 'getRoomId',
            'stage' => 'getStage',
            'location' => 'getLocation',
            'peerUid' => 'getPeerUid',
            'abnormalType' => 'getAbnormalType',
            'abnormalTypeDesc' => 'getAbnormalTypeDesc',
            'abnormalFactor' => 'getAbnormalFactor',
            'abnormalFactorDesc' => 'getAbnormalFactorDesc'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['peerUid'] = isset($data['peerUid']) ? $data['peerUid'] : null;
        $this->container['abnormalType'] = isset($data['abnormalType']) ? $data['abnormalType'] : null;
        $this->container['abnormalTypeDesc'] = isset($data['abnormalTypeDesc']) ? $data['abnormalTypeDesc'] : null;
        $this->container['abnormalFactor'] = isset($data['abnormalFactor']) ? $data['abnormalFactor'] : null;
        $this->container['abnormalFactorDesc'] = isset($data['abnormalFactorDesc']) ? $data['abnormalFactorDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            if ((mb_strlen($this->container['time']) > 20)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['time']) < 20)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 20.";
            }
        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
            if ((mb_strlen($this->container['uid']) > 256)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['uid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['stage'] === null) {
            $invalidProperties[] = "'stage' can't be null";
        }
            if ((mb_strlen($this->container['stage']) > 256)) {
                $invalidProperties[] = "invalid value for 'stage', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['stage']) < 1)) {
                $invalidProperties[] = "invalid value for 'stage', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            if ((mb_strlen($this->container['location']) > 256)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['peerUid'] === null) {
            $invalidProperties[] = "'peerUid' can't be null";
        }
            if ((mb_strlen($this->container['peerUid']) > 256)) {
                $invalidProperties[] = "invalid value for 'peerUid', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['peerUid']) < 1)) {
                $invalidProperties[] = "invalid value for 'peerUid', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['abnormalType'] === null) {
            $invalidProperties[] = "'abnormalType' can't be null";
        }
            if (($this->container['abnormalType'] > 15)) {
                $invalidProperties[] = "invalid value for 'abnormalType', must be smaller than or equal to 15.";
            }
            if (($this->container['abnormalType'] < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalType', must be bigger than or equal to 0.";
            }
        if ($this->container['abnormalTypeDesc'] === null) {
            $invalidProperties[] = "'abnormalTypeDesc' can't be null";
        }
            if ((mb_strlen($this->container['abnormalTypeDesc']) > 32384)) {
                $invalidProperties[] = "invalid value for 'abnormalTypeDesc', the character length must be smaller than or equal to 32384.";
            }
            if ((mb_strlen($this->container['abnormalTypeDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'abnormalTypeDesc', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['abnormalFactor'] === null) {
            $invalidProperties[] = "'abnormalFactor' can't be null";
        }
            if (($this->container['abnormalFactor'] > 15)) {
                $invalidProperties[] = "invalid value for 'abnormalFactor', must be smaller than or equal to 15.";
            }
            if (($this->container['abnormalFactor'] < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalFactor', must be bigger than or equal to 0.";
            }
        if ($this->container['abnormalFactorDesc'] === null) {
            $invalidProperties[] = "'abnormalFactorDesc' can't be null";
        }
            if ((mb_strlen($this->container['abnormalFactorDesc']) > 32384)) {
                $invalidProperties[] = "invalid value for 'abnormalFactorDesc', the character length must be smaller than or equal to 32384.";
            }
            if ((mb_strlen($this->container['abnormalFactorDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'abnormalFactorDesc', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 采样时间。日期格式按照ISO8601表示法，并使用UTC时间。格式为YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets uid
    *  出现异常的用户ID
    *
    * @return string
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string $uid 出现异常的用户ID
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets roomId
    *  出现异常的房间ID
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
    * @param string $roomId 出现异常的房间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets stage
    *  出现异常的环节 - join_room：加入房间 - communication：通话中
    *
    * @return string
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string $stage 出现异常的环节 - join_room：加入房间 - communication：通话中
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets location
    *  事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    *
    * @return string
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string $location 事件发生位置 - local：事件发生在客户端本地 - remote：事件发生在远端
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets peerUid
    *  如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    *
    * @return string
    */
    public function getPeerUid()
    {
        return $this->container['peerUid'];
    }

    /**
    * Sets peerUid
    *
    * @param string $peerUid 如果根因来自远端用户，则peerid为远端用户的用户ID。如果根因来自自身，则peerid为空字符串
    *
    * @return $this
    */
    public function setPeerUid($peerUid)
    {
        $this->container['peerUid'] = $peerUid;
        return $this;
    }

    /**
    * Gets abnormalType
    *  异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    *
    * @return int
    */
    public function getAbnormalType()
    {
        return $this->container['abnormalType'];
    }

    /**
    * Sets abnormalType
    *
    * @param int $abnormalType 异常类型： - 1：进房慢(5s加入房间失败) - 2：视频卡顿 - 3：音频卡顿
    *
    * @return $this
    */
    public function setAbnormalType($abnormalType)
    {
        $this->container['abnormalType'] = $abnormalType;
        return $this;
    }

    /**
    * Gets abnormalTypeDesc
    *  异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    *
    * @return string
    */
    public function getAbnormalTypeDesc()
    {
        return $this->container['abnormalTypeDesc'];
    }

    /**
    * Sets abnormalTypeDesc
    *
    * @param string $abnormalTypeDesc 异常类型描述与异常类型对应，支持国际化，取值范围为： - 进房慢(5s加入房间失败) - 视频卡顿 - 音频卡顿
    *
    * @return $this
    */
    public function setAbnormalTypeDesc($abnormalTypeDesc)
    {
        $this->container['abnormalTypeDesc'] = $abnormalTypeDesc;
        return $this;
    }

    /**
    * Gets abnormalFactor
    *  异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    *
    * @return int
    */
    public function getAbnormalFactor()
    {
        return $this->container['abnormalFactor'];
    }

    /**
    * Sets abnormalFactor
    *
    * @param int $abnormalFactor 异常因素 当异常类型为1时，异常因素取值范围为： - 1：建链失败 - 2：房间非空闲 - 3：服务器异常 - 4：服务器反馈503 - 5：鉴权失败 - 6：鉴权重试 - 7：时钟同步失败 - 8：url错误 - 9：终端内部异常 - 90000004：SDK发出的加入房间信令响应超时 - 90100009：web侧没有收到MSP下发的配置信息 - 90100008：websocket链路建链失败 - 10000001：服务侧返回的异常信息 - 31000003：服务侧返回的异常信息 - 32000030：服务侧返回的异常信息 - 15：浏览器设置sdp异常 当异常类型为2或者3时，异常因素取值范围为： - 1：系统CPU占用高 - 2：App CPU占用高 - 3：音频上行网络延时 - 4：音频上行网络抖动 - 5：视频上行网络延时 - 6：视频上行网络抖动 - 7：音频下行网络延时 - 8：音频下行网络抖动 - 9：视频下行网络延时 - 10：视频下行网络抖动 - 11：上行音频丢包 - 12：上行视频丢包 - 13：下行音频丢包 - 14：下行视频丢包 - 15：下行音频无声音 - 16：其他 - 17：对端用户离线 - 18：对端用户无码流 - 19：对端用户无帧率 - 20：本端服务器下行无码流 - 21：本端服务器下行无帧率
    *
    * @return $this
    */
    public function setAbnormalFactor($abnormalFactor)
    {
        $this->container['abnormalFactor'] = $abnormalFactor;
        return $this;
    }

    /**
    * Gets abnormalFactorDesc
    *  异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @return string
    */
    public function getAbnormalFactorDesc()
    {
        return $this->container['abnormalFactorDesc'];
    }

    /**
    * Sets abnormalFactorDesc
    *
    * @param string $abnormalFactorDesc 异常因素描述，支持国际化 当异常类型为1时，异常因素描述与异常因素对应，取值范围为： - 建链失败 - 房间非空闲 - 服务器异常 - 服务器反馈503 - 鉴权失败 - 鉴权重试 - 时钟同步失败 - url错误 - 终端内部异常 - SDK发出的加入房间信令响应超时 - web侧没有收到MSP下发的配置信息 - websocket链路建链失败 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 服务侧返回的异常信息 - 浏览器设置sdp异常 当异常类型为2或者3时，异常因素描述与异常因素对应，取值范围为： - 系统CPU占用高 - App CPU占用高 - 音频上行网络延时 - 音频上行网络抖动 - 视频上行网络延时 - 视频上行网络抖动 - 音频下行网络延时 - 音频下行网络抖动 - 视频下行网络延时 - 视频下行网络抖动 - 上行音频丢包 - 上行视频丢包 - 下行音频丢包 - 下行视频丢包 - 下行音频无声音 - 其他 - 对端用户离线 - 对端用户无码流 - 对端用户无帧率 - 本端服务器下行无码流 - 本端服务器下行无帧率 其他情况，异常因素描述为：其他
    *
    * @return $this
    */
    public function setAbnormalFactorDesc($abnormalFactorDesc)
    {
        $this->container['abnormalFactorDesc'] = $abnormalFactorDesc;
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

