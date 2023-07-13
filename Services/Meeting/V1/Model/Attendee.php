<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Attendee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Attendee';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userUuid  与会者的用户UUID。
    * accountId  与会者的华为云会议帐号。
    * name  与会者名称，长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * email  邮件地址。 > 会中邀请不发会议通知，不用填写。
    * sms  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * deptUuid  部门编码。
    * deptName  部门名称。
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
            'type' => 'string',
            'deptUuid' => 'string',
            'deptName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userUuid  与会者的用户UUID。
    * accountId  与会者的华为云会议帐号。
    * name  与会者名称，长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * email  邮件地址。 > 会中邀请不发会议通知，不用填写。
    * sms  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * deptUuid  部门编码。
    * deptName  部门名称。
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
        'type' => null,
        'deptUuid' => null,
        'deptName' => null
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
    * accountId  与会者的华为云会议帐号。
    * name  与会者名称，长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * email  邮件地址。 > 会中邀请不发会议通知，不用填写。
    * sms  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * deptUuid  部门编码。
    * deptName  部门名称。
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
            'type' => 'type',
            'deptUuid' => 'deptUUID',
            'deptName' => 'deptName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userUuid  与会者的用户UUID。
    * accountId  与会者的华为云会议帐号。
    * name  与会者名称，长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * email  邮件地址。 > 会中邀请不发会议通知，不用填写。
    * sms  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * deptUuid  部门编码。
    * deptName  部门名称。
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
            'type' => 'setType',
            'deptUuid' => 'setDeptUuid',
            'deptName' => 'setDeptName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userUuid  与会者的用户UUID。
    * accountId  与会者的华为云会议帐号。
    * name  与会者名称，长度限制为96个字符。
    * role  会议中的角色。默认为普通与会者。 - 0: 普通与会者 - 1: 会议主持人
    * phone  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    * phone2  预留字段，取值类型同参数“phone”。
    * phone3  预留字段，取值类型同参数“phone”。
    * email  邮件地址。 > 会中邀请不发会议通知，不用填写。
    * sms  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    * type  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    * deptUuid  部门编码。
    * deptName  部门名称。
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
            'type' => 'getType',
            'deptUuid' => 'getDeptUuid',
            'deptName' => 'getDeptName'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : 0;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['phone3'] = isset($data['phone3']) ? $data['phone3'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deptUuid'] = isset($data['deptUuid']) ? $data['deptUuid'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 96)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 96.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['role']) && ($this->container['role'] > 2)) {
                $invalidProperties[] = "invalid value for 'role', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['role']) && ($this->container['role'] < 0)) {
                $invalidProperties[] = "invalid value for 'role', must be bigger than or equal to 0.";
            }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
            if ((mb_strlen($this->container['phone']) > 127)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 127.";
            }
            if ((mb_strlen($this->container['phone']) < 0)) {
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    *  与会者的华为云会议帐号。
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
    * @param string|null $accountId 与会者的华为云会议帐号。
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
    *  与会者名称，长度限制为96个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 与会者名称，长度限制为96个字符。
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
    *  号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
    *
    * @return string
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string $phone 号码。支持SIP号码或者手机号码。 > * 号码可以通过[[查询企业通讯](https://support.huaweicloud.com/api-meeting/meeting_21_0512.html)](tag:hws)[[查询企业通讯](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0512.html)](tag:hk)接口录获取。返回的number是SIP号码，phone是手机号码 > * 填SIP号码系统会呼叫对应的软终端或者硬终端；填手机号码系统会呼叫手机 > * 呼叫手机需要开通PSTN权限，否则无法呼叫
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
    *  预留字段，取值类型同参数“phone”。
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
    * @param string|null $phone2 预留字段，取值类型同参数“phone”。
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
    *  预留字段，取值类型同参数“phone”。
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
    * @param string|null $phone3 预留字段，取值类型同参数“phone”。
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
    *  邮件地址。 > 会中邀请不发会议通知，不用填写。
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
    * @param string|null $email 邮件地址。 > 会中邀请不发会议通知，不用填写。
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
    *  短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
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
    * @param string|null $sms 短信通知的手机号码。 > 会中邀请不发会议通知，不用填写。
    *
    * @return $this
    */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;
        return $this;
    }

    /**
    * Gets type
    *  终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 终端类型，类型枚举如下： * normal：软终端 * terminal：硬终端 * outside：外部与会人 * mobile：用户手机号码 * ideahub：ideahub * board: 电子白板（SmartRooms）。含Maxhub、海信大屏、IdeaHub B2hwvision：华为智慧屏TV
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets deptUuid
    *  部门编码。
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
    * @param string|null $deptUuid 部门编码。
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

