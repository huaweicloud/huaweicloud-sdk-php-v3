<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateUserReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateUserReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * passwordMode  初始化密码方式，一次性密码/邮箱
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addresses' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\AddressDto[]',
            'displayName' => 'string',
            'emails' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EmailDto[]',
            'locale' => 'string',
            'name' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\NameDto',
            'nickname' => 'string',
            'phoneNumbers' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\PhoneNumberDto[]',
            'preferredLanguage' => 'string',
            'profileUrl' => 'string',
            'timezone' => 'string',
            'title' => 'string',
            'userName' => 'string',
            'userType' => 'string',
            'passwordMode' => 'string',
            'enterprise' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EnterpriseDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * passwordMode  初始化密码方式，一次性密码/邮箱
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addresses' => null,
        'displayName' => null,
        'emails' => null,
        'locale' => null,
        'name' => null,
        'nickname' => null,
        'phoneNumbers' => null,
        'preferredLanguage' => null,
        'profileUrl' => null,
        'timezone' => null,
        'title' => null,
        'userName' => null,
        'userType' => null,
        'passwordMode' => null,
        'enterprise' => null
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
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * passwordMode  初始化密码方式，一次性密码/邮箱
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addresses' => 'addresses',
            'displayName' => 'display_name',
            'emails' => 'emails',
            'locale' => 'locale',
            'name' => 'name',
            'nickname' => 'nickname',
            'phoneNumbers' => 'phone_numbers',
            'preferredLanguage' => 'preferred_language',
            'profileUrl' => 'profile_url',
            'timezone' => 'timezone',
            'title' => 'title',
            'userName' => 'user_name',
            'userType' => 'user_type',
            'passwordMode' => 'password_mode',
            'enterprise' => 'enterprise'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * passwordMode  初始化密码方式，一次性密码/邮箱
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $setters = [
            'addresses' => 'setAddresses',
            'displayName' => 'setDisplayName',
            'emails' => 'setEmails',
            'locale' => 'setLocale',
            'name' => 'setName',
            'nickname' => 'setNickname',
            'phoneNumbers' => 'setPhoneNumbers',
            'preferredLanguage' => 'setPreferredLanguage',
            'profileUrl' => 'setProfileUrl',
            'timezone' => 'setTimezone',
            'title' => 'setTitle',
            'userName' => 'setUserName',
            'userType' => 'setUserType',
            'passwordMode' => 'setPasswordMode',
            'enterprise' => 'setEnterprise'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * passwordMode  初始化密码方式，一次性密码/邮箱
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $getters = [
            'addresses' => 'getAddresses',
            'displayName' => 'getDisplayName',
            'emails' => 'getEmails',
            'locale' => 'getLocale',
            'name' => 'getName',
            'nickname' => 'getNickname',
            'phoneNumbers' => 'getPhoneNumbers',
            'preferredLanguage' => 'getPreferredLanguage',
            'profileUrl' => 'getProfileUrl',
            'timezone' => 'getTimezone',
            'title' => 'getTitle',
            'userName' => 'getUserName',
            'userType' => 'getUserType',
            'passwordMode' => 'getPasswordMode',
            'enterprise' => 'getEnterprise'
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
    const PASSWORD_MODE_OTP = 'OTP';
    const PASSWORD_MODE_EMAIL = 'EMAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPasswordModeAllowableValues()
    {
        return [
            self::PASSWORD_MODE_OTP,
            self::PASSWORD_MODE_EMAIL,
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['preferredLanguage'] = isset($data['preferredLanguage']) ? $data['preferredLanguage'] : null;
        $this->container['profileUrl'] = isset($data['profileUrl']) ? $data['profileUrl'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['passwordMode'] = isset($data['passwordMode']) ? $data['passwordMode'] : null;
        $this->container['enterprise'] = isset($data['enterprise']) ? $data['enterprise'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
            if ((mb_strlen($this->container['displayName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['displayName'])) {
                $invalidProperties[] = "invalid value for 'displayName', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['emails'] === null) {
            $invalidProperties[] = "'emails' can't be null";
        }
            if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) > 1024)) {
                $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) < 1)) {
                $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['locale']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['locale'])) {
                $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!is_null($this->container['nickname']) && (mb_strlen($this->container['nickname']) > 1024)) {
                $invalidProperties[] = "invalid value for 'nickname', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['nickname']) && (mb_strlen($this->container['nickname']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickname', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickname']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['nickname'])) {
                $invalidProperties[] = "invalid value for 'nickname', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['preferredLanguage']) && (mb_strlen($this->container['preferredLanguage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'preferredLanguage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['preferredLanguage']) && (mb_strlen($this->container['preferredLanguage']) < 1)) {
                $invalidProperties[] = "invalid value for 'preferredLanguage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['preferredLanguage']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['preferredLanguage'])) {
                $invalidProperties[] = "invalid value for 'preferredLanguage', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['profileUrl']) && (mb_strlen($this->container['profileUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'profileUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['profileUrl']) && (mb_strlen($this->container['profileUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'profileUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['profileUrl']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['profileUrl'])) {
                $invalidProperties[] = "invalid value for 'profileUrl', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['timezone']) && (mb_strlen($this->container['timezone']) < 1)) {
                $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timezone']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['timezone'])) {
                $invalidProperties[] = "invalid value for 'timezone', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1024)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['userName']) < 2)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/[\\w+=,.@-]+/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /[\\w+=,.@-]+/.";
            }
            if (!is_null($this->container['userType']) && (mb_strlen($this->container['userType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'userType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['userType']) && (mb_strlen($this->container['userType']) < 1)) {
                $invalidProperties[] = "invalid value for 'userType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userType']) && !preg_match("/[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/", $this->container['userType'])) {
                $invalidProperties[] = "invalid value for 'userType', must be conform to the pattern /[\\p{L}\\p{M}\\p{S}\\p{N}\\p{P}\\t\\n\\r  　]+/.";
            }
        if ($this->container['passwordMode'] === null) {
            $invalidProperties[] = "'passwordMode' can't be null";
        }
            $allowedValues = $this->getPasswordModeAllowableValues();
                if (!is_null($this->container['passwordMode']) && !in_array($this->container['passwordMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'passwordMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets addresses
    *  用户的地址信息列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\AddressDto[]|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\AddressDto[]|null $addresses 用户的地址信息列表
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets displayName
    *  用户的显示名称
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 用户的显示名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets emails
    *  用户的电子邮箱信息列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EmailDto[]
    */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
    * Sets emails
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EmailDto[] $emails 用户的电子邮箱信息列表
    *
    * @return $this
    */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;
        return $this;
    }

    /**
    * Gets locale
    *  用户的地理区域或位置信息
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale 用户的地理区域或位置信息
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets name
    *  name
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\NameDto
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\NameDto $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nickname
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
    * Sets nickname
    *
    * @param string|null $nickname 用户昵称
    *
    * @return $this
    */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;
        return $this;
    }

    /**
    * Gets phoneNumbers
    *  用户的电话号码信息列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\PhoneNumberDto[]|null
    */
    public function getPhoneNumbers()
    {
        return $this->container['phoneNumbers'];
    }

    /**
    * Sets phoneNumbers
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\PhoneNumberDto[]|null $phoneNumbers 用户的电话号码信息列表
    *
    * @return $this
    */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->container['phoneNumbers'] = $phoneNumbers;
        return $this;
    }

    /**
    * Gets preferredLanguage
    *  用户语言首选项
    *
    * @return string|null
    */
    public function getPreferredLanguage()
    {
        return $this->container['preferredLanguage'];
    }

    /**
    * Sets preferredLanguage
    *
    * @param string|null $preferredLanguage 用户语言首选项
    *
    * @return $this
    */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->container['preferredLanguage'] = $preferredLanguage;
        return $this;
    }

    /**
    * Gets profileUrl
    *  与用户关联的URL
    *
    * @return string|null
    */
    public function getProfileUrl()
    {
        return $this->container['profileUrl'];
    }

    /**
    * Sets profileUrl
    *
    * @param string|null $profileUrl 与用户关联的URL
    *
    * @return $this
    */
    public function setProfileUrl($profileUrl)
    {
        $this->container['profileUrl'] = $profileUrl;
        return $this;
    }

    /**
    * Gets timezone
    *  用户时区
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 用户时区
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets title
    *  用户头衔
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
    * @param string|null $title 用户头衔
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets userName
    *  用户名，用于标识用户的唯一字符串
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName 用户名，用于标识用户的唯一字符串
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userType
    *  用户类型
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType 用户类型
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets passwordMode
    *  初始化密码方式，一次性密码/邮箱
    *
    * @return string
    */
    public function getPasswordMode()
    {
        return $this->container['passwordMode'];
    }

    /**
    * Sets passwordMode
    *
    * @param string $passwordMode 初始化密码方式，一次性密码/邮箱
    *
    * @return $this
    */
    public function setPasswordMode($passwordMode)
    {
        $this->container['passwordMode'] = $passwordMode;
        return $this;
    }

    /**
    * Gets enterprise
    *  enterprise
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EnterpriseDto|null
    */
    public function getEnterprise()
    {
        return $this->container['enterprise'];
    }

    /**
    * Sets enterprise
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EnterpriseDto|null $enterprise enterprise
    *
    * @return $this
    */
    public function setEnterprise($enterprise)
    {
        $this->container['enterprise'] = $enterprise;
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

