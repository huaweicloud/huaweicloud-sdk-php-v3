<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddUserDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddUserDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * account  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    * thirdAccount  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    * phone  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * pwd  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    * email  邮箱地址。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0 * 0：正常 * 1：停用
    * function  function
    * sendNotify  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'englishName' => 'string',
            'account' => 'string',
            'thirdAccount' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'pwd' => 'string',
            'email' => 'string',
            'deptCode' => 'string',
            'signature' => 'string',
            'title' => 'string',
            'desc' => 'string',
            'status' => 'int',
            'function' => '\HuaweiCloud\SDK\Meeting\V1\Model\UserFunctionDTO',
            'sendNotify' => 'string',
            'sortLevel' => 'int',
            'hidePhone' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * account  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    * thirdAccount  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    * phone  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * pwd  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    * email  邮箱地址。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0 * 0：正常 * 1：停用
    * function  function
    * sendNotify  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'englishName' => null,
        'account' => null,
        'thirdAccount' => null,
        'phone' => null,
        'country' => null,
        'pwd' => null,
        'email' => null,
        'deptCode' => null,
        'signature' => null,
        'title' => null,
        'desc' => null,
        'status' => 'int32',
        'function' => null,
        'sendNotify' => null,
        'sortLevel' => null,
        'hidePhone' => null
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
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * account  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    * thirdAccount  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    * phone  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * pwd  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    * email  邮箱地址。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0 * 0：正常 * 1：停用
    * function  function
    * sendNotify  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'englishName' => 'englishName',
            'account' => 'account',
            'thirdAccount' => 'thirdAccount',
            'phone' => 'phone',
            'country' => 'country',
            'pwd' => 'pwd',
            'email' => 'email',
            'deptCode' => 'deptCode',
            'signature' => 'signature',
            'title' => 'title',
            'desc' => 'desc',
            'status' => 'status',
            'function' => 'function',
            'sendNotify' => 'sendNotify',
            'sortLevel' => 'sortLevel',
            'hidePhone' => 'hidePhone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * account  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    * thirdAccount  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    * phone  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * pwd  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    * email  邮箱地址。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0 * 0：正常 * 1：停用
    * function  function
    * sendNotify  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'englishName' => 'setEnglishName',
            'account' => 'setAccount',
            'thirdAccount' => 'setThirdAccount',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'pwd' => 'setPwd',
            'email' => 'setEmail',
            'deptCode' => 'setDeptCode',
            'signature' => 'setSignature',
            'title' => 'setTitle',
            'desc' => 'setDesc',
            'status' => 'setStatus',
            'function' => 'setFunction',
            'sendNotify' => 'setSendNotify',
            'sortLevel' => 'setSortLevel',
            'hidePhone' => 'setHidePhone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业用户名称。
    * englishName  企业用户的英文名称。
    * account  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    * thirdAccount  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    * phone  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * pwd  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    * email  邮箱地址。
    * deptCode  部门编码，若不携带则默认根部门。 默认值：1
    * signature  签名。
    * title  职位。
    * desc  备注。
    * status  用户状态。默认值：0 * 0：正常 * 1：停用
    * function  function
    * sendNotify  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    * sortLevel  通讯录排序等级，序号越低优先级越高。 默认值：10000
    * hidePhone  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'englishName' => 'getEnglishName',
            'account' => 'getAccount',
            'thirdAccount' => 'getThirdAccount',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'pwd' => 'getPwd',
            'email' => 'getEmail',
            'deptCode' => 'getDeptCode',
            'signature' => 'getSignature',
            'title' => 'getTitle',
            'desc' => 'getDesc',
            'status' => 'getStatus',
            'function' => 'getFunction',
            'sendNotify' => 'getSendNotify',
            'sortLevel' => 'getSortLevel',
            'hidePhone' => 'getHidePhone'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['englishName'] = isset($data['englishName']) ? $data['englishName'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['thirdAccount'] = isset($data['thirdAccount']) ? $data['thirdAccount'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['pwd'] = isset($data['pwd']) ? $data['pwd'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['sendNotify'] = isset($data['sendNotify']) ? $data['sendNotify'] : null;
        $this->container['sortLevel'] = isset($data['sortLevel']) ? $data['sortLevel'] : null;
        $this->container['hidePhone'] = isset($data['hidePhone']) ? $data['hidePhone'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) > 64)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['englishName']) && (mb_strlen($this->container['englishName']) < 0)) {
                $invalidProperties[] = "invalid value for 'englishName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) > 64)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['account']) && (mb_strlen($this->container['account']) < 0)) {
                $invalidProperties[] = "invalid value for 'account', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['thirdAccount']) && (mb_strlen($this->container['thirdAccount']) > 64)) {
                $invalidProperties[] = "invalid value for 'thirdAccount', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['thirdAccount']) && (mb_strlen($this->container['thirdAccount']) < 0)) {
                $invalidProperties[] = "invalid value for 'thirdAccount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 512)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 0)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 32)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 128)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] > 10000)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['sortLevel']) && ($this->container['sortLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'sortLevel', must be bigger than or equal to 1.";
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
    * Gets name
    *  企业用户名称。
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
    * @param string $name 企业用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets englishName
    *  企业用户的英文名称。
    *
    * @return string|null
    */
    public function getEnglishName()
    {
        return $this->container['englishName'];
    }

    /**
    * Sets englishName
    *
    * @param string|null $englishName 企业用户的英文名称。
    *
    * @return $this
    */
    public function setEnglishName($englishName)
    {
        $this->container['englishName'] = $englishName;
        return $this;
    }

    /**
    * Gets account
    *  企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    *
    * @return string|null
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string|null $account 企业用户帐号，若携带则以携带为准，否则后台自动生成。帐号整系统唯一。 帐号只能包含大小写字母、数字、_、-、.、@符号，不能为纯数字和@后面带.号。 > 帐号/密码鉴权方式时需要填写。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets thirdAccount
    *  第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    *
    * @return string|null
    */
    public function getThirdAccount()
    {
        return $this->container['thirdAccount'];
    }

    /**
    * Sets thirdAccount
    *
    * @param string|null $thirdAccount 第三方User ID。 > App ID鉴权方式时需要填写。第三方User ID需要企业内唯一。
    *
    * @return $this
    */
    public function setThirdAccount($thirdAccount)
    {
        $this->container['thirdAccount'] = $thirdAccount;
        return $this;
    }

    /**
    * Gets phone
    *  手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
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
    * @param string|null $phone 手机号，必须加上国家码。 例如中国大陆手机+86xxxxxxx。当填写手机号时 “country”参数必填。 手机号只允许输入纯数字。 说明：手机号或者邮箱至少填写一个
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets country
    *  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets pwd
    *  企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    *
    * @return string|null
    */
    public function getPwd()
    {
        return $this->container['pwd'];
    }

    /**
    * Sets pwd
    *
    * @param string|null $pwd 企业用户帐号的密码。若携带则以实际携带为准，否则后台默认生成，密码必须满足： 1、8-32位 2、不能和帐号的正序和倒序一致 3、至少包含两种字符类型：小写字母、大写字母、数字、特殊字符（` ~ ! @ # $ % ^ & * ( ) - _ = + | [ { } ] ; : \" ,’ < . > / ?）
    *
    * @return $this
    */
    public function setPwd($pwd)
    {
        $this->container['pwd'] = $pwd;
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
    * Gets deptCode
    *  部门编码，若不携带则默认根部门。 默认值：1
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码，若不携带则默认根部门。 默认值：1
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets signature
    *  签名。
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature 签名。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets title
    *  职位。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 职位。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets desc
    *  备注。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 备注。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets status
    *  用户状态。默认值：0 * 0：正常 * 1：停用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 用户状态。默认值：0 * 0：正常 * 1：停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets function
    *  function
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\UserFunctionDTO|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\UserFunctionDTO|null $function function
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets sendNotify
    *  是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    *
    * @return string|null
    */
    public function getSendNotify()
    {
        return $this->container['sendNotify'];
    }

    /**
    * Sets sendNotify
    *
    * @param string|null $sendNotify 是否发送开户的邮件和短信通知。 - 0 不发送 - 不填或者其他值就发送, 默认发送
    *
    * @return $this
    */
    public function setSendNotify($sendNotify)
    {
        $this->container['sendNotify'] = $sendNotify;
        return $this;
    }

    /**
    * Gets sortLevel
    *  通讯录排序等级，序号越低优先级越高。 默认值：10000
    *
    * @return int|null
    */
    public function getSortLevel()
    {
        return $this->container['sortLevel'];
    }

    /**
    * Sets sortLevel
    *
    * @param int|null $sortLevel 通讯录排序等级，序号越低优先级越高。 默认值：10000
    *
    * @return $this
    */
    public function setSortLevel($sortLevel)
    {
        $this->container['sortLevel'] = $sortLevel;
        return $this;
    }

    /**
    * Gets hidePhone
    *  是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @return bool|null
    */
    public function getHidePhone()
    {
        return $this->container['hidePhone'];
    }

    /**
    * Sets hidePhone
    *
    * @param bool|null $hidePhone 是否隐藏手机号码。默认值：false。 * true：在通讯录和会议中不显示手机号码 * false：在通讯录和会议中显示手机号码
    *
    * @return $this
    */
    public function setHidePhone($hidePhone)
    {
        $this->container['hidePhone'] = $hidePhone;
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

