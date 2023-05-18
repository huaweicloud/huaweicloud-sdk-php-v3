<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestConfConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestConfConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSendNotify  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isSendSms  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    * isSendCalendar  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isAutoMute  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isHardTerminalAutoMute  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isGuestFreePwd  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    * guestPwd  来宾密码（4-16位长度的纯数字）。
    * vmrIdType  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    * prolongLength  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    * enableWaitingRoom  开启或者关闭等候室。 * true：开启 * false：不开启
    * isHostCameraOn  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    * isGuestCameraOn  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSendNotify' => 'bool',
            'isSendSms' => 'bool',
            'isSendCalendar' => 'bool',
            'isAutoMute' => 'bool',
            'isHardTerminalAutoMute' => 'bool',
            'isGuestFreePwd' => 'bool',
            'callInRestriction' => 'int',
            'allowGuestStartConf' => 'bool',
            'guestPwd' => 'string',
            'vmrIdType' => 'int',
            'prolongLength' => 'int',
            'enableWaitingRoom' => 'bool',
            'isHostCameraOn' => 'bool',
            'isGuestCameraOn' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSendNotify  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isSendSms  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    * isSendCalendar  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isAutoMute  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isHardTerminalAutoMute  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isGuestFreePwd  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    * guestPwd  来宾密码（4-16位长度的纯数字）。
    * vmrIdType  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    * prolongLength  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    * enableWaitingRoom  开启或者关闭等候室。 * true：开启 * false：不开启
    * isHostCameraOn  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    * isGuestCameraOn  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSendNotify' => null,
        'isSendSms' => null,
        'isSendCalendar' => null,
        'isAutoMute' => null,
        'isHardTerminalAutoMute' => null,
        'isGuestFreePwd' => null,
        'callInRestriction' => 'int32',
        'allowGuestStartConf' => null,
        'guestPwd' => null,
        'vmrIdType' => 'int32',
        'prolongLength' => 'int32',
        'enableWaitingRoom' => null,
        'isHostCameraOn' => null,
        'isGuestCameraOn' => null
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
    * isSendNotify  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isSendSms  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    * isSendCalendar  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isAutoMute  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isHardTerminalAutoMute  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isGuestFreePwd  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    * guestPwd  来宾密码（4-16位长度的纯数字）。
    * vmrIdType  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    * prolongLength  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    * enableWaitingRoom  开启或者关闭等候室。 * true：开启 * false：不开启
    * isHostCameraOn  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    * isGuestCameraOn  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSendNotify' => 'isSendNotify',
            'isSendSms' => 'isSendSms',
            'isSendCalendar' => 'isSendCalendar',
            'isAutoMute' => 'isAutoMute',
            'isHardTerminalAutoMute' => 'isHardTerminalAutoMute',
            'isGuestFreePwd' => 'isGuestFreePwd',
            'callInRestriction' => 'callInRestriction',
            'allowGuestStartConf' => 'allowGuestStartConf',
            'guestPwd' => 'guestPwd',
            'vmrIdType' => 'vmrIDType',
            'prolongLength' => 'prolongLength',
            'enableWaitingRoom' => 'enableWaitingRoom',
            'isHostCameraOn' => 'isHostCameraOn',
            'isGuestCameraOn' => 'isGuestCameraOn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSendNotify  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isSendSms  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    * isSendCalendar  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isAutoMute  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isHardTerminalAutoMute  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isGuestFreePwd  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    * guestPwd  来宾密码（4-16位长度的纯数字）。
    * vmrIdType  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    * prolongLength  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    * enableWaitingRoom  开启或者关闭等候室。 * true：开启 * false：不开启
    * isHostCameraOn  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    * isGuestCameraOn  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'isSendNotify' => 'setIsSendNotify',
            'isSendSms' => 'setIsSendSms',
            'isSendCalendar' => 'setIsSendCalendar',
            'isAutoMute' => 'setIsAutoMute',
            'isHardTerminalAutoMute' => 'setIsHardTerminalAutoMute',
            'isGuestFreePwd' => 'setIsGuestFreePwd',
            'callInRestriction' => 'setCallInRestriction',
            'allowGuestStartConf' => 'setAllowGuestStartConf',
            'guestPwd' => 'setGuestPwd',
            'vmrIdType' => 'setVmrIdType',
            'prolongLength' => 'setProlongLength',
            'enableWaitingRoom' => 'setEnableWaitingRoom',
            'isHostCameraOn' => 'setIsHostCameraOn',
            'isGuestCameraOn' => 'setIsGuestCameraOn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSendNotify  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isSendSms  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    * isSendCalendar  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    * isAutoMute  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isHardTerminalAutoMute  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    * isGuestFreePwd  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowGuestStartConf  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    * guestPwd  来宾密码（4-16位长度的纯数字）。
    * vmrIdType  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    * prolongLength  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    * enableWaitingRoom  开启或者关闭等候室。 * true：开启 * false：不开启
    * isHostCameraOn  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    * isGuestCameraOn  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'isSendNotify' => 'getIsSendNotify',
            'isSendSms' => 'getIsSendSms',
            'isSendCalendar' => 'getIsSendCalendar',
            'isAutoMute' => 'getIsAutoMute',
            'isHardTerminalAutoMute' => 'getIsHardTerminalAutoMute',
            'isGuestFreePwd' => 'getIsGuestFreePwd',
            'callInRestriction' => 'getCallInRestriction',
            'allowGuestStartConf' => 'getAllowGuestStartConf',
            'guestPwd' => 'getGuestPwd',
            'vmrIdType' => 'getVmrIdType',
            'prolongLength' => 'getProlongLength',
            'enableWaitingRoom' => 'getEnableWaitingRoom',
            'isHostCameraOn' => 'getIsHostCameraOn',
            'isGuestCameraOn' => 'getIsGuestCameraOn'
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
        $this->container['isSendNotify'] = isset($data['isSendNotify']) ? $data['isSendNotify'] : null;
        $this->container['isSendSms'] = isset($data['isSendSms']) ? $data['isSendSms'] : null;
        $this->container['isSendCalendar'] = isset($data['isSendCalendar']) ? $data['isSendCalendar'] : null;
        $this->container['isAutoMute'] = isset($data['isAutoMute']) ? $data['isAutoMute'] : null;
        $this->container['isHardTerminalAutoMute'] = isset($data['isHardTerminalAutoMute']) ? $data['isHardTerminalAutoMute'] : null;
        $this->container['isGuestFreePwd'] = isset($data['isGuestFreePwd']) ? $data['isGuestFreePwd'] : null;
        $this->container['callInRestriction'] = isset($data['callInRestriction']) ? $data['callInRestriction'] : 0;
        $this->container['allowGuestStartConf'] = isset($data['allowGuestStartConf']) ? $data['allowGuestStartConf'] : null;
        $this->container['guestPwd'] = isset($data['guestPwd']) ? $data['guestPwd'] : null;
        $this->container['vmrIdType'] = isset($data['vmrIdType']) ? $data['vmrIdType'] : null;
        $this->container['prolongLength'] = isset($data['prolongLength']) ? $data['prolongLength'] : null;
        $this->container['enableWaitingRoom'] = isset($data['enableWaitingRoom']) ? $data['enableWaitingRoom'] : null;
        $this->container['isHostCameraOn'] = isset($data['isHostCameraOn']) ? $data['isHostCameraOn'] : null;
        $this->container['isGuestCameraOn'] = isset($data['isGuestCameraOn']) ? $data['isGuestCameraOn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vmrIdType']) && ($this->container['vmrIdType'] > 1)) {
                $invalidProperties[] = "invalid value for 'vmrIdType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['vmrIdType']) && ($this->container['vmrIdType'] < 0)) {
                $invalidProperties[] = "invalid value for 'vmrIdType', must be bigger than or equal to 0.";
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
    * Gets isSendNotify
    *  是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    *
    * @return bool|null
    */
    public function getIsSendNotify()
    {
        return $this->container['isSendNotify'];
    }

    /**
    * Sets isSendNotify
    *
    * @param bool|null $isSendNotify 是否需要发送会议邮件通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    *
    * @return $this
    */
    public function setIsSendNotify($isSendNotify)
    {
        $this->container['isSendNotify'] = $isSendNotify;
        return $this;
    }

    /**
    * Gets isSendSms
    *  是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    *
    * @return bool|null
    */
    public function getIsSendSms()
    {
        return $this->container['isSendSms'];
    }

    /**
    * Sets isSendSms
    *
    * @param bool|null $isSendSms 是否需要发送会议短信通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要 > 只有正式商用企业才有发送会议短信通知的权限，免费企业即使isSendSms设置成true也不会发送会议短信通知。
    *
    * @return $this
    */
    public function setIsSendSms($isSendSms)
    {
        $this->container['isSendSms'] = $isSendSms;
        return $this;
    }

    /**
    * Gets isSendCalendar
    *  是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    *
    * @return bool|null
    */
    public function getIsSendCalendar()
    {
        return $this->container['isSendCalendar'];
    }

    /**
    * Sets isSendCalendar
    *
    * @param bool|null $isSendCalendar 是否需要发送会议邮件日历通知。默认值由企业级配置决定。 - true: 需要 - false: 不需要
    *
    * @return $this
    */
    public function setIsSendCalendar($isSendCalendar)
    {
        $this->container['isSendCalendar'] = $isSendCalendar;
        return $this;
    }

    /**
    * Gets isAutoMute
    *  来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    *
    * @return bool|null
    */
    public function getIsAutoMute()
    {
        return $this->container['isAutoMute'];
    }

    /**
    * Sets isAutoMute
    *
    * @param bool|null $isAutoMute 来宾入会,软终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    *
    * @return $this
    */
    public function setIsAutoMute($isAutoMute)
    {
        $this->container['isAutoMute'] = $isAutoMute;
        return $this;
    }

    /**
    * Gets isHardTerminalAutoMute
    *  来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    *
    * @return bool|null
    */
    public function getIsHardTerminalAutoMute()
    {
        return $this->container['isHardTerminalAutoMute'];
    }

    /**
    * Sets isHardTerminalAutoMute
    *
    * @param bool|null $isHardTerminalAutoMute 来宾入会,硬终端是否自动静音。默认值由企业级配置决定。 - true: 自动静音 - false: 不自动静音
    *
    * @return $this
    */
    public function setIsHardTerminalAutoMute($isHardTerminalAutoMute)
    {
        $this->container['isHardTerminalAutoMute'] = $isHardTerminalAutoMute;
        return $this;
    }

    /**
    * Gets isGuestFreePwd
    *  是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    *
    * @return bool|null
    */
    public function getIsGuestFreePwd()
    {
        return $this->container['isGuestFreePwd'];
    }

    /**
    * Sets isGuestFreePwd
    *
    * @param bool|null $isGuestFreePwd 是否来宾免密。 - true: 免密 - false: 需要密码 > 仅随机会议ID的会议生效。
    *
    * @return $this
    */
    public function setIsGuestFreePwd($isGuestFreePwd)
    {
        $this->container['isGuestFreePwd'] = $isGuestFreePwd;
        return $this;
    }

    /**
    * Gets callInRestriction
    *  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return int|null
    */
    public function getCallInRestriction()
    {
        return $this->container['callInRestriction'];
    }

    /**
    * Sets callInRestriction
    *
    * @param int|null $callInRestriction 允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return $this
    */
    public function setCallInRestriction($callInRestriction)
    {
        $this->container['callInRestriction'] = $callInRestriction;
        return $this;
    }

    /**
    * Gets allowGuestStartConf
    *  是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    *
    * @return bool|null
    */
    public function getAllowGuestStartConf()
    {
        return $this->container['allowGuestStartConf'];
    }

    /**
    * Sets allowGuestStartConf
    *
    * @param bool|null $allowGuestStartConf 是否允许来宾启动会议。 - true: 允许来宾启动会议 - false: 禁止来宾启动会议 > 仅随机会议ID的会议生效。
    *
    * @return $this
    */
    public function setAllowGuestStartConf($allowGuestStartConf)
    {
        $this->container['allowGuestStartConf'] = $allowGuestStartConf;
        return $this;
    }

    /**
    * Gets guestPwd
    *  来宾密码（4-16位长度的纯数字）。
    *
    * @return string|null
    */
    public function getGuestPwd()
    {
        return $this->container['guestPwd'];
    }

    /**
    * Sets guestPwd
    *
    * @param string|null $guestPwd 来宾密码（4-16位长度的纯数字）。
    *
    * @return $this
    */
    public function setGuestPwd($guestPwd)
    {
        $this->container['guestPwd'] = $guestPwd;
        return $this;
    }

    /**
    * Gets vmrIdType
    *  云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    *
    * @return int|null
    */
    public function getVmrIdType()
    {
        return $this->container['vmrIdType'];
    }

    /**
    * Sets vmrIdType
    *
    * @param int|null $vmrIdType 云会议室的会议ID模式。 * 0：固定会议ID * 1：随机会议ID
    *
    * @return $this
    */
    public function setVmrIdType($vmrIdType)
    {
        $this->container['vmrIdType'] = $vmrIdType;
        return $this;
    }

    /**
    * Gets prolongLength
    *  自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    *
    * @return int|null
    */
    public function getProlongLength()
    {
        return $this->container['prolongLength'];
    }

    /**
    * Sets prolongLength
    *
    * @param int|null $prolongLength 自动延长会议时长（取值范围0-60）。 * 0：表示会议到点自动结束，不延长会议 * 其他：表示自动延长的时长 > * 自动结束会议是按照会议时长计算。比如预定的会议是9:00开始11:00结束，会议时长2个小时，如果与会者8:00就加入会议了，那会议在10:00就会自动结束 > * 设置成其他值时，只要会中还有与会者，会议自动多次延长
    *
    * @return $this
    */
    public function setProlongLength($prolongLength)
    {
        $this->container['prolongLength'] = $prolongLength;
        return $this;
    }

    /**
    * Gets enableWaitingRoom
    *  开启或者关闭等候室。 * true：开启 * false：不开启
    *
    * @return bool|null
    */
    public function getEnableWaitingRoom()
    {
        return $this->container['enableWaitingRoom'];
    }

    /**
    * Sets enableWaitingRoom
    *
    * @param bool|null $enableWaitingRoom 开启或者关闭等候室。 * true：开启 * false：不开启
    *
    * @return $this
    */
    public function setEnableWaitingRoom($enableWaitingRoom)
    {
        $this->container['enableWaitingRoom'] = $enableWaitingRoom;
        return $this;
    }

    /**
    * Gets isHostCameraOn
    *  主持人入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @return bool|null
    */
    public function getIsHostCameraOn()
    {
        return $this->container['isHostCameraOn'];
    }

    /**
    * Sets isHostCameraOn
    *
    * @param bool|null $isHostCameraOn 主持人入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @return $this
    */
    public function setIsHostCameraOn($isHostCameraOn)
    {
        $this->container['isHostCameraOn'] = $isHostCameraOn;
        return $this;
    }

    /**
    * Gets isGuestCameraOn
    *  来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @return bool|null
    */
    public function getIsGuestCameraOn()
    {
        return $this->container['isGuestCameraOn'];
    }

    /**
    * Sets isGuestCameraOn
    *
    * @param bool|null $isGuestCameraOn 来宾入会是否开启摄像头。 * true：开启 * false：不开启
    *
    * @return $this
    */
    public function setIsGuestCameraOn($isGuestCameraOn)
    {
        $this->container['isGuestCameraOn'] = $isGuestCameraOn;
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

