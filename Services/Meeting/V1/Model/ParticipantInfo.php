<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParticipantInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParticipantInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantId  与会者的号码。
    * name  与会者的名称。
    * subscriberId  与会者的号码（预留字段）。
    * role  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    * state  用户状态。目前固定返回MEETTING。
    * address  终端所在会议室信息（预留字段）。
    * attendeeType  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    * accountId  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    * phone2  预留字段。
    * phone3  预留字段。
    * email  邮箱地址。
    * sms  短信通知的手机号码。
    * deptName  部门名称。
    * userUuid  预订者的用户UUID。
    * appId  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantId' => 'string',
            'name' => 'string',
            'subscriberId' => 'string',
            'role' => 'int',
            'state' => 'string',
            'address' => 'string',
            'attendeeType' => 'string',
            'accountId' => 'string',
            'phone2' => 'string',
            'phone3' => 'string',
            'email' => 'string',
            'sms' => 'string',
            'deptName' => 'string',
            'userUuid' => 'string',
            'appId' => 'string',
            'isAutoInvite' => 'int',
            'isNotOverlayPidName' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantId  与会者的号码。
    * name  与会者的名称。
    * subscriberId  与会者的号码（预留字段）。
    * role  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    * state  用户状态。目前固定返回MEETTING。
    * address  终端所在会议室信息（预留字段）。
    * attendeeType  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    * accountId  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    * phone2  预留字段。
    * phone3  预留字段。
    * email  邮箱地址。
    * sms  短信通知的手机号码。
    * deptName  部门名称。
    * userUuid  预订者的用户UUID。
    * appId  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantId' => null,
        'name' => null,
        'subscriberId' => null,
        'role' => 'int32',
        'state' => null,
        'address' => null,
        'attendeeType' => null,
        'accountId' => null,
        'phone2' => null,
        'phone3' => null,
        'email' => null,
        'sms' => null,
        'deptName' => null,
        'userUuid' => null,
        'appId' => null,
        'isAutoInvite' => 'int32',
        'isNotOverlayPidName' => null
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
    * participantId  与会者的号码。
    * name  与会者的名称。
    * subscriberId  与会者的号码（预留字段）。
    * role  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    * state  用户状态。目前固定返回MEETTING。
    * address  终端所在会议室信息（预留字段）。
    * attendeeType  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    * accountId  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    * phone2  预留字段。
    * phone3  预留字段。
    * email  邮箱地址。
    * sms  短信通知的手机号码。
    * deptName  部门名称。
    * userUuid  预订者的用户UUID。
    * appId  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantId' => 'participantID',
            'name' => 'name',
            'subscriberId' => 'subscriberID',
            'role' => 'role',
            'state' => 'state',
            'address' => 'address',
            'attendeeType' => 'attendeeType',
            'accountId' => 'accountId',
            'phone2' => 'phone2',
            'phone3' => 'phone3',
            'email' => 'email',
            'sms' => 'sms',
            'deptName' => 'deptName',
            'userUuid' => 'userUUID',
            'appId' => 'appId',
            'isAutoInvite' => 'isAutoInvite',
            'isNotOverlayPidName' => 'isNotOverlayPidName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantId  与会者的号码。
    * name  与会者的名称。
    * subscriberId  与会者的号码（预留字段）。
    * role  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    * state  用户状态。目前固定返回MEETTING。
    * address  终端所在会议室信息（预留字段）。
    * attendeeType  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    * accountId  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    * phone2  预留字段。
    * phone3  预留字段。
    * email  邮箱地址。
    * sms  短信通知的手机号码。
    * deptName  部门名称。
    * userUuid  预订者的用户UUID。
    * appId  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $setters = [
            'participantId' => 'setParticipantId',
            'name' => 'setName',
            'subscriberId' => 'setSubscriberId',
            'role' => 'setRole',
            'state' => 'setState',
            'address' => 'setAddress',
            'attendeeType' => 'setAttendeeType',
            'accountId' => 'setAccountId',
            'phone2' => 'setPhone2',
            'phone3' => 'setPhone3',
            'email' => 'setEmail',
            'sms' => 'setSms',
            'deptName' => 'setDeptName',
            'userUuid' => 'setUserUuid',
            'appId' => 'setAppId',
            'isAutoInvite' => 'setIsAutoInvite',
            'isNotOverlayPidName' => 'setIsNotOverlayPidName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantId  与会者的号码。
    * name  与会者的名称。
    * subscriberId  与会者的号码（预留字段）。
    * role  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    * state  用户状态。目前固定返回MEETTING。
    * address  终端所在会议室信息（预留字段）。
    * attendeeType  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    * accountId  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    * phone2  预留字段。
    * phone3  预留字段。
    * email  邮箱地址。
    * sms  短信通知的手机号码。
    * deptName  部门名称。
    * userUuid  预订者的用户UUID。
    * appId  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    * isAutoInvite  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    * isNotOverlayPidName  是否不叠加会场名（VDC场景下适用）。
    *
    * @var string[]
    */
    protected static $getters = [
            'participantId' => 'getParticipantId',
            'name' => 'getName',
            'subscriberId' => 'getSubscriberId',
            'role' => 'getRole',
            'state' => 'getState',
            'address' => 'getAddress',
            'attendeeType' => 'getAttendeeType',
            'accountId' => 'getAccountId',
            'phone2' => 'getPhone2',
            'phone3' => 'getPhone3',
            'email' => 'getEmail',
            'sms' => 'getSms',
            'deptName' => 'getDeptName',
            'userUuid' => 'getUserUuid',
            'appId' => 'getAppId',
            'isAutoInvite' => 'getIsAutoInvite',
            'isNotOverlayPidName' => 'getIsNotOverlayPidName'
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
        $this->container['participantId'] = isset($data['participantId']) ? $data['participantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['attendeeType'] = isset($data['attendeeType']) ? $data['attendeeType'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['phone3'] = isset($data['phone3']) ? $data['phone3'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['userUuid'] = isset($data['userUuid']) ? $data['userUuid'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['isAutoInvite'] = isset($data['isAutoInvite']) ? $data['isAutoInvite'] : null;
        $this->container['isNotOverlayPidName'] = isset($data['isNotOverlayPidName']) ? $data['isNotOverlayPidName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['isAutoInvite']) && ($this->container['isAutoInvite'] > 1)) {
                $invalidProperties[] = "invalid value for 'isAutoInvite', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['isAutoInvite']) && ($this->container['isAutoInvite'] < 0)) {
                $invalidProperties[] = "invalid value for 'isAutoInvite', must be bigger than or equal to 0.";
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
    * Gets participantId
    *  与会者的号码。
    *
    * @return string|null
    */
    public function getParticipantId()
    {
        return $this->container['participantId'];
    }

    /**
    * Sets participantId
    *
    * @param string|null $participantId 与会者的号码。
    *
    * @return $this
    */
    public function setParticipantId($participantId)
    {
        $this->container['participantId'] = $participantId;
        return $this;
    }

    /**
    * Gets name
    *  与会者的名称。
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
    * @param string|null $name 与会者的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets subscriberId
    *  与会者的号码（预留字段）。
    *
    * @return string|null
    */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
    * Sets subscriberId
    *
    * @param string|null $subscriberId 与会者的号码（预留字段）。
    *
    * @return $this
    */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;
        return $this;
    }

    /**
    * Gets role
    *  与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
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
    * @param int|null $role 与会者的角色。 - 1: 会议主持人 - 0: 普通与会者
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets state
    *  用户状态。目前固定返回MEETTING。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 用户状态。目前固定返回MEETTING。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets address
    *  终端所在会议室信息（预留字段）。
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
    * @param string|null $address 终端所在会议室信息（预留字段）。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets attendeeType
    *  与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    *
    * @return string|null
    */
    public function getAttendeeType()
    {
        return $this->container['attendeeType'];
    }

    /**
    * Sets attendeeType
    *
    * @param string|null $attendeeType 与会者终端类型。 - normal: 软终端。 - terminal: 会议室或硬终端。 - outside: 外部与会人。 - mobile: 用户手机号码。
    *
    * @return $this
    */
    public function setAttendeeType($attendeeType)
    {
        $this->container['attendeeType'] = $attendeeType;
        return $this;
    }

    /**
    * Gets accountId
    *  预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
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
    * @param string|null $accountId 预订者的帐号。 * 如果是帐号/密码鉴权场景，表示华为云会议帐号 * 如果是APP ID鉴权场景，表示第三方的User ID
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets phone2
    *  预留字段。
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
    * @param string|null $phone2 预留字段。
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
    *  预留字段。
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
    * @param string|null $phone3 预留字段。
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
    *  邮箱地址。
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
    * @param string|null $email 邮箱地址。
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
    *  短信通知的手机号码。
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
    * @param string|null $sms 短信通知的手机号码。
    *
    * @return $this
    */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
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
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets userUuid
    *  预订者的用户UUID。
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
    * @param string|null $userUuid 预订者的用户UUID。
    *
    * @return $this
    */
    public function setUserUuid($userUuid)
    {
        $this->container['userUuid'] = $userUuid;
        return $this;
    }

    /**
    * Gets appId
    *  App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
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
    * @param string|null $appId App ID。参考[[App ID的申请](https://support.huaweicloud.com/devg-meeting/meeting_20_0011.html#section1)](tag:hws)[[App ID的申请](https://support.huaweicloud.com/intl/zh-cn/devg-meeting/meeting_20_0011.html#section1)](tag:hk)。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets isAutoInvite
    *  会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
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
    * @param int|null $isAutoInvite 会议开始时是否自动邀请该与会者。默认值由企业级配置决定。 * 0： 不自动邀请 * 1： 自动邀请
    *
    * @return $this
    */
    public function setIsAutoInvite($isAutoInvite)
    {
        $this->container['isAutoInvite'] = $isAutoInvite;
        return $this;
    }

    /**
    * Gets isNotOverlayPidName
    *  是否不叠加会场名（VDC场景下适用）。
    *
    * @return bool|null
    */
    public function getIsNotOverlayPidName()
    {
        return $this->container['isNotOverlayPidName'];
    }

    /**
    * Sets isNotOverlayPidName
    *
    * @param bool|null $isNotOverlayPidName 是否不叠加会场名（VDC场景下适用）。
    *
    * @return $this
    */
    public function setIsNotOverlayPidName($isNotOverlayPidName)
    {
        $this->container['isNotOverlayPidName'] = $isNotOverlayPidName;
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

