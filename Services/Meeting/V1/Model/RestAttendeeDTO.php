<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestAttendeeDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestAttendeeDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userUuid  与会者的用户UUID。
    * accountId  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    * name  与会者名称。长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同phone。
    * phone3  预留字段，取值类型同phone。
    * email  邮箱地址。需要发邮件通知时填写。
    * sms  短信通知的手机号码。需要发短信通知时填写。
    * isMute  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    * type  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    * address  预留字段，终端所在会议室信息。
    * deptUuid  部门ID。
    * deptName  部门名称。最大不超过128个字符。
    * appId  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * uniqueType  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userUuid' => 'string',
            'accountId' => 'string',
            'name' => 'string',
            'role' => 'int',
            'phone' => 'string',
            'phone2' => 'string',
            'phone3' => 'string',
            'email' => 'string',
            'sms' => 'string',
            'isMute' => 'int',
            'isAutoInvite' => 'int',
            'type' => 'string',
            'address' => 'string',
            'deptUuid' => 'string',
            'deptName' => 'string',
            'appId' => 'string',
            'uniqueType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userUuid  与会者的用户UUID。
    * accountId  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    * name  与会者名称。长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同phone。
    * phone3  预留字段，取值类型同phone。
    * email  邮箱地址。需要发邮件通知时填写。
    * sms  短信通知的手机号码。需要发短信通知时填写。
    * isMute  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    * type  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    * address  预留字段，终端所在会议室信息。
    * deptUuid  部门ID。
    * deptName  部门名称。最大不超过128个字符。
    * appId  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * uniqueType  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userUuid' => null,
        'accountId' => null,
        'name' => null,
        'role' => 'int32',
        'phone' => null,
        'phone2' => null,
        'phone3' => null,
        'email' => null,
        'sms' => null,
        'isMute' => 'int32',
        'isAutoInvite' => 'int32',
        'type' => null,
        'address' => null,
        'deptUuid' => null,
        'deptName' => null,
        'appId' => null,
        'uniqueType' => 'int32'
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
    * userUuid  与会者的用户UUID。
    * accountId  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    * name  与会者名称。长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同phone。
    * phone3  预留字段，取值类型同phone。
    * email  邮箱地址。需要发邮件通知时填写。
    * sms  短信通知的手机号码。需要发短信通知时填写。
    * isMute  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    * type  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    * address  预留字段，终端所在会议室信息。
    * deptUuid  部门ID。
    * deptName  部门名称。最大不超过128个字符。
    * appId  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * uniqueType  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userUuid' => 'userUUID',
            'accountId' => 'accountId',
            'name' => 'name',
            'role' => 'role',
            'phone' => 'phone',
            'phone2' => 'phone2',
            'phone3' => 'phone3',
            'email' => 'email',
            'sms' => 'sms',
            'isMute' => 'isMute',
            'isAutoInvite' => 'isAutoInvite',
            'type' => 'type',
            'address' => 'address',
            'deptUuid' => 'deptUUID',
            'deptName' => 'deptName',
            'appId' => 'appId',
            'uniqueType' => 'uniqueType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userUuid  与会者的用户UUID。
    * accountId  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    * name  与会者名称。长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同phone。
    * phone3  预留字段，取值类型同phone。
    * email  邮箱地址。需要发邮件通知时填写。
    * sms  短信通知的手机号码。需要发短信通知时填写。
    * isMute  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    * type  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    * address  预留字段，终端所在会议室信息。
    * deptUuid  部门ID。
    * deptName  部门名称。最大不超过128个字符。
    * appId  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * uniqueType  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @var string[]
    */
    protected static $setters = [
            'userUuid' => 'setUserUuid',
            'accountId' => 'setAccountId',
            'name' => 'setName',
            'role' => 'setRole',
            'phone' => 'setPhone',
            'phone2' => 'setPhone2',
            'phone3' => 'setPhone3',
            'email' => 'setEmail',
            'sms' => 'setSms',
            'isMute' => 'setIsMute',
            'isAutoInvite' => 'setIsAutoInvite',
            'type' => 'setType',
            'address' => 'setAddress',
            'deptUuid' => 'setDeptUuid',
            'deptName' => 'setDeptName',
            'appId' => 'setAppId',
            'uniqueType' => 'setUniqueType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userUuid  与会者的用户UUID。
    * accountId  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    * name  与会者名称。长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同phone。
    * phone3  预留字段，取值类型同phone。
    * email  邮箱地址。需要发邮件通知时填写。
    * sms  短信通知的手机号码。需要发短信通知时填写。
    * isMute  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    * type  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    * address  预留字段，终端所在会议室信息。
    * deptUuid  部门ID。
    * deptName  部门名称。最大不超过128个字符。
    * appId  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * uniqueType  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @var string[]
    */
    protected static $getters = [
            'userUuid' => 'getUserUuid',
            'accountId' => 'getAccountId',
            'name' => 'getName',
            'role' => 'getRole',
            'phone' => 'getPhone',
            'phone2' => 'getPhone2',
            'phone3' => 'getPhone3',
            'email' => 'getEmail',
            'sms' => 'getSms',
            'isMute' => 'getIsMute',
            'isAutoInvite' => 'getIsAutoInvite',
            'type' => 'getType',
            'address' => 'getAddress',
            'deptUuid' => 'getDeptUuid',
            'deptName' => 'getDeptName',
            'appId' => 'getAppId',
            'uniqueType' => 'getUniqueType'
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
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['phone3'] = isset($data['phone3']) ? $data['phone3'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['isMute'] = isset($data['isMute']) ? $data['isMute'] : null;
        $this->container['isAutoInvite'] = isset($data['isAutoInvite']) ? $data['isAutoInvite'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['deptUuid'] = isset($data['deptUuid']) ? $data['deptUuid'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['uniqueType'] = isset($data['uniqueType']) ? $data['uniqueType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 96)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['role']) && ($this->container['role'] > 2)) {
                $invalidProperties[] = "invalid value for 'role', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['role']) && ($this->container['role'] < 0)) {
                $invalidProperties[] = "invalid value for 'role', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 127)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 0)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phone2']) && (mb_strlen($this->container['phone2']) > 127)) {
                $invalidProperties[] = "invalid value for 'phone2', the character length must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['phone2']) && (mb_strlen($this->container['phone2']) < 0)) {
                $invalidProperties[] = "invalid value for 'phone2', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['phone3']) && (mb_strlen($this->container['phone3']) > 127)) {
                $invalidProperties[] = "invalid value for 'phone3', the character length must be smaller than or equal to 127.";
            }
            if (!is_null($this->container['phone3']) && (mb_strlen($this->container['phone3']) < 0)) {
                $invalidProperties[] = "invalid value for 'phone3', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sms']) && (mb_strlen($this->container['sms']) > 32)) {
                $invalidProperties[] = "invalid value for 'sms', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sms']) && (mb_strlen($this->container['sms']) < 0)) {
                $invalidProperties[] = "invalid value for 'sms', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isMute']) && ($this->container['isMute'] > 1)) {
                $invalidProperties[] = "invalid value for 'isMute', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isMute']) && ($this->container['isMute'] < 0)) {
                $invalidProperties[] = "invalid value for 'isMute', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isAutoInvite']) && ($this->container['isAutoInvite'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoInvite', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoInvite']) && ($this->container['isAutoInvite'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoInvite', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptUuid']) && (mb_strlen($this->container['deptUuid']) > 64)) {
                $invalidProperties[] = "invalid value for 'deptUuid', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deptUuid']) && (mb_strlen($this->container['deptUuid']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptUuid', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) > 128)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['deptName']) && (mb_strlen($this->container['deptName']) < 0)) {
                $invalidProperties[] = "invalid value for 'deptName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['uniqueType']) && ($this->container['uniqueType'] > 1)) {
                $invalidProperties[] = "invalid value for 'uniqueType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['uniqueType']) && ($this->container['uniqueType'] < 0)) {
                $invalidProperties[] = "invalid value for 'uniqueType', must be bigger than or equal to 0.";
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
    * Gets userUuid
    *  与会者的用户UUID。
    *
    * @return string|null
    */
    public function getUserUuid()
    {
        return $this->container['userUuid'];
    }

    /**
    * Sets userUuid
    *
    * @param string|null $userUuid 与会者的用户UUID。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets accountId
    *  与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 与会者的帐号。 * 如果是帐号/密码鉴权场景：选填，表示华为云会议帐号 * 如果是APPID鉴权场景：必填，表示第三方的User ID，同时需要携带参数appId
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets name
    *  与会者名称。长度限制为96个字符。
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
    * @param string|null $name 与会者名称。长度限制为96个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    *
    * @return int|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param int|null $role 会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets phone
    *  号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
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
    * @param string|null $phone 号码。支持SIP号码或者手机号码。 * 如果是帐号/密码鉴权场景：必填 * 如果是APP ID鉴权场景：选填 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets phone2
    *  预留字段，取值类型同phone。
    *
    * @return string|null
    */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
    * Sets phone2
    *
    * @param string|null $phone2 预留字段，取值类型同phone。
    *
    * @return $this
    */
    public function setPhone2($phone2)
    {
        $this->container['phone2'] = $phone2;
        return $this;
    }

    /**
    * Gets phone3
    *  预留字段，取值类型同phone。
    *
    * @return string|null
    */
    public function getPhone3()
    {
        return $this->container['phone3'];
    }

    /**
    * Sets phone3
    *
    * @param string|null $phone3 预留字段，取值类型同phone。
    *
    * @return $this
    */
    public function setPhone3($phone3)
    {
        $this->container['phone3'] = $phone3;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址。需要发邮件通知时填写。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱地址。需要发邮件通知时填写。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets sms
    *  短信通知的手机号码。需要发短信通知时填写。
    *
    * @return string|null
    */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
    * Sets sms
    *
    * @param string|null $sms 短信通知的手机号码。需要发短信通知时填写。
    *
    * @return $this
    */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;
        return $this;
    }

    /**
    * Gets isMute
    *  用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    *
    * @return int|null
    */
    public function getIsMute()
    {
        return $this->container['isMute'];
    }

    /**
    * Sets isMute
    *
    * @param int|null $isMute 用户入会时是否需要自动静音。默认不静音。 - 0: 不需要静音 - 1: 需要静音 > 仅会中邀请与会者时生效。
    *
    * @return $this
    */
    public function setIsMute($isMute)
    {
        $this->container['isMute'] = $isMute;
        return $this;
    }

    /**
    * Gets isAutoInvite
    *  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    *
    * @return int|null
    */
    public function getIsAutoInvite()
    {
        return $this->container['isAutoInvite'];
    }

    /**
    * Sets isAutoInvite
    *
    * @param int|null $isAutoInvite 会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 - 0: 不自动邀请 - 1: 自动邀请 > 仅并发会议资源的随机会议ID会议才生效。
    *
    * @return $this
    */
    public function setIsAutoInvite($isAutoInvite)
    {
        $this->container['isAutoInvite'] = $isAutoInvite;
        return $this;
    }

    /**
    * Gets type
    *  终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 终端类型，类型枚举如下： * normal: 软终端 * terminal: 会议室或硬终端 * outside: 外部与会人 * mobile: 用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms），含Maxhub、海信大屏、IdeaHub B2 * hwvision：华为智慧屏TV
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets address
    *  预留字段，终端所在会议室信息。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 预留字段，终端所在会议室信息。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets deptUuid
    *  部门ID。
    *
    * @return string|null
    */
    public function getDeptUuid()
    {
        return $this->container['deptUuid'];
    }

    /**
    * Sets deptUuid
    *
    * @param string|null $deptUuid 部门ID。
    *
    * @return $this
    */
    public function setDeptUuid($deptUuid)
    {
        $this->container['deptUuid'] = $deptUuid;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。最大不超过128个字符。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 部门名称。最大不超过128个字符。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets appId
    *  App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId App ID。如果是APP ID鉴权场景，此项必填。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets uniqueType
    *  企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @return int|null
    */
    public function getUniqueType()
    {
        return $this->container['uniqueType'];
    }

    /**
    * Sets uniqueType
    *
    * @param int|null $uniqueType 企业内唯一会场标识, 0标识为普通与会者，1标识为企业内唯一会场; uniqueType 为1， 同时type要指定为customnumber
    *
    * @return $this
    */
    public function setUniqueType($uniqueType)
    {
        $this->container['uniqueType'] = $uniqueType;
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

