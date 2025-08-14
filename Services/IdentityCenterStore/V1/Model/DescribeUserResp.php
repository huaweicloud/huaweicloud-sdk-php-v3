<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DescribeUserResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DescribeUserResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  用户的外部标识符信息列表
    * identityStoreId  身份源的全局唯一标识符（ID）
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userId  身份源中IdentityCenter用户的全局唯一标识符（ID）
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * createdAt  创建用户时的时间戳
    * createdBy  创建者
    * updatedAt  更新用户时的时间戳
    * updatedBy  更新者
    * emailVerified  一个布尔值，表示用户主的电子邮箱是否验证
    * enabled  一个布尔值，表示用户是否启用
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addresses' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\AddressDto[]',
            'displayName' => 'string',
            'emails' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EmailDto[]',
            'externalId' => 'string',
            'externalIds' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]',
            'identityStoreId' => 'string',
            'locale' => 'string',
            'name' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\NameDto',
            'nickname' => 'string',
            'phoneNumbers' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\PhoneNumberDto[]',
            'preferredLanguage' => 'string',
            'profileUrl' => 'string',
            'timezone' => 'string',
            'title' => 'string',
            'userId' => 'string',
            'userName' => 'string',
            'userType' => 'string',
            'createdAt' => 'int',
            'createdBy' => 'string',
            'updatedAt' => 'int',
            'updatedBy' => 'string',
            'emailVerified' => 'bool',
            'enabled' => 'bool',
            'enterprise' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\EnterpriseDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  用户的外部标识符信息列表
    * identityStoreId  身份源的全局唯一标识符（ID）
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userId  身份源中IdentityCenter用户的全局唯一标识符（ID）
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * createdAt  创建用户时的时间戳
    * createdBy  创建者
    * updatedAt  更新用户时的时间戳
    * updatedBy  更新者
    * emailVerified  一个布尔值，表示用户主的电子邮箱是否验证
    * enabled  一个布尔值，表示用户是否启用
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addresses' => null,
        'displayName' => null,
        'emails' => null,
        'externalId' => null,
        'externalIds' => null,
        'identityStoreId' => null,
        'locale' => null,
        'name' => null,
        'nickname' => null,
        'phoneNumbers' => null,
        'preferredLanguage' => null,
        'profileUrl' => null,
        'timezone' => null,
        'title' => null,
        'userId' => null,
        'userName' => null,
        'userType' => null,
        'createdAt' => 'int64',
        'createdBy' => null,
        'updatedAt' => 'int64',
        'updatedBy' => null,
        'emailVerified' => null,
        'enabled' => null,
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
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  用户的外部标识符信息列表
    * identityStoreId  身份源的全局唯一标识符（ID）
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userId  身份源中IdentityCenter用户的全局唯一标识符（ID）
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * createdAt  创建用户时的时间戳
    * createdBy  创建者
    * updatedAt  更新用户时的时间戳
    * updatedBy  更新者
    * emailVerified  一个布尔值，表示用户主的电子邮箱是否验证
    * enabled  一个布尔值，表示用户是否启用
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addresses' => 'addresses',
            'displayName' => 'display_name',
            'emails' => 'emails',
            'externalId' => 'external_id',
            'externalIds' => 'external_ids',
            'identityStoreId' => 'identity_store_id',
            'locale' => 'locale',
            'name' => 'name',
            'nickname' => 'nickname',
            'phoneNumbers' => 'phone_numbers',
            'preferredLanguage' => 'preferred_language',
            'profileUrl' => 'profile_url',
            'timezone' => 'timezone',
            'title' => 'title',
            'userId' => 'user_id',
            'userName' => 'user_name',
            'userType' => 'user_type',
            'createdAt' => 'created_at',
            'createdBy' => 'created_by',
            'updatedAt' => 'updated_at',
            'updatedBy' => 'updated_by',
            'emailVerified' => 'email_verified',
            'enabled' => 'enabled',
            'enterprise' => 'enterprise'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  用户的外部标识符信息列表
    * identityStoreId  身份源的全局唯一标识符（ID）
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userId  身份源中IdentityCenter用户的全局唯一标识符（ID）
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * createdAt  创建用户时的时间戳
    * createdBy  创建者
    * updatedAt  更新用户时的时间戳
    * updatedBy  更新者
    * emailVerified  一个布尔值，表示用户主的电子邮箱是否验证
    * enabled  一个布尔值，表示用户是否启用
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $setters = [
            'addresses' => 'setAddresses',
            'displayName' => 'setDisplayName',
            'emails' => 'setEmails',
            'externalId' => 'setExternalId',
            'externalIds' => 'setExternalIds',
            'identityStoreId' => 'setIdentityStoreId',
            'locale' => 'setLocale',
            'name' => 'setName',
            'nickname' => 'setNickname',
            'phoneNumbers' => 'setPhoneNumbers',
            'preferredLanguage' => 'setPreferredLanguage',
            'profileUrl' => 'setProfileUrl',
            'timezone' => 'setTimezone',
            'title' => 'setTitle',
            'userId' => 'setUserId',
            'userName' => 'setUserName',
            'userType' => 'setUserType',
            'createdAt' => 'setCreatedAt',
            'createdBy' => 'setCreatedBy',
            'updatedAt' => 'setUpdatedAt',
            'updatedBy' => 'setUpdatedBy',
            'emailVerified' => 'setEmailVerified',
            'enabled' => 'setEnabled',
            'enterprise' => 'setEnterprise'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addresses  用户的地址信息列表
    * displayName  用户的显示名称
    * emails  用户的电子邮箱信息列表
    * externalId  外部身份源分配给此资源的标识符
    * externalIds  用户的外部标识符信息列表
    * identityStoreId  身份源的全局唯一标识符（ID）
    * locale  用户的地理区域或位置信息
    * name  name
    * nickname  用户昵称
    * phoneNumbers  用户的电话号码信息列表
    * preferredLanguage  用户语言首选项
    * profileUrl  与用户关联的URL
    * timezone  用户时区
    * title  用户头衔
    * userId  身份源中IdentityCenter用户的全局唯一标识符（ID）
    * userName  用户名，用于标识用户的唯一字符串
    * userType  用户类型
    * createdAt  创建用户时的时间戳
    * createdBy  创建者
    * updatedAt  更新用户时的时间戳
    * updatedBy  更新者
    * emailVerified  一个布尔值，表示用户主的电子邮箱是否验证
    * enabled  一个布尔值，表示用户是否启用
    * enterprise  enterprise
    *
    * @var string[]
    */
    protected static $getters = [
            'addresses' => 'getAddresses',
            'displayName' => 'getDisplayName',
            'emails' => 'getEmails',
            'externalId' => 'getExternalId',
            'externalIds' => 'getExternalIds',
            'identityStoreId' => 'getIdentityStoreId',
            'locale' => 'getLocale',
            'name' => 'getName',
            'nickname' => 'getNickname',
            'phoneNumbers' => 'getPhoneNumbers',
            'preferredLanguage' => 'getPreferredLanguage',
            'profileUrl' => 'getProfileUrl',
            'timezone' => 'getTimezone',
            'title' => 'getTitle',
            'userId' => 'getUserId',
            'userName' => 'getUserName',
            'userType' => 'getUserType',
            'createdAt' => 'getCreatedAt',
            'createdBy' => 'getCreatedBy',
            'updatedAt' => 'getUpdatedAt',
            'updatedBy' => 'getUpdatedBy',
            'emailVerified' => 'getEmailVerified',
            'enabled' => 'getEnabled',
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
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['externalIds'] = isset($data['externalIds']) ? $data['externalIds'] : null;
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['preferredLanguage'] = isset($data['preferredLanguage']) ? $data['preferredLanguage'] : null;
        $this->container['profileUrl'] = isset($data['profileUrl']) ? $data['profileUrl'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['emailVerified'] = isset($data['emailVerified']) ? $data['emailVerified'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
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
        if ($this->container['identityStoreId'] === null) {
            $invalidProperties[] = "'identityStoreId' can't be null";
        }
            if ((mb_strlen($this->container['identityStoreId']) > 36)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['identityStoreId']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['identityStoreId'])) {
                $invalidProperties[] = "invalid value for 'identityStoreId', must be conform to the pattern /d-[0-9a-f]{10}$|^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 47)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 47.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /([0-9a-f]{10}-|)[A-Fa-f0-9]{8}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{4}-[A-Fa-f0-9]{12}/.";
            }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
            if ((mb_strlen($this->container['userName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
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
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['updatedBy'] === null) {
            $invalidProperties[] = "'updatedBy' can't be null";
        }
        if ($this->container['emailVerified'] === null) {
            $invalidProperties[] = "'emailVerified' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
    * Gets externalId
    *  外部身份源分配给此资源的标识符
    *
    * @return string|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string|null $externalId 外部身份源分配给此资源的标识符
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets externalIds
    *  用户的外部标识符信息列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]|null
    */
    public function getExternalIds()
    {
        return $this->container['externalIds'];
    }

    /**
    * Sets externalIds
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto[]|null $externalIds 用户的外部标识符信息列表
    *
    * @return $this
    */
    public function setExternalIds($externalIds)
    {
        $this->container['externalIds'] = $externalIds;
        return $this;
    }

    /**
    * Gets identityStoreId
    *  身份源的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string $identityStoreId 身份源的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
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
    * Gets userId
    *  身份源中IdentityCenter用户的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 身份源中IdentityCenter用户的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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
    * Gets createdAt
    *  创建用户时的时间戳
    *
    * @return int
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int $createdAt 创建用户时的时间戳
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建者
    *
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy 创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新用户时的时间戳
    *
    * @return int
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int $updatedAt 更新用户时的时间戳
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新者
    *
    * @return string
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string $updatedBy 更新者
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets emailVerified
    *  一个布尔值，表示用户主的电子邮箱是否验证
    *
    * @return bool
    */
    public function getEmailVerified()
    {
        return $this->container['emailVerified'];
    }

    /**
    * Sets emailVerified
    *
    * @param bool $emailVerified 一个布尔值，表示用户主的电子邮箱是否验证
    *
    * @return $this
    */
    public function setEmailVerified($emailVerified)
    {
        $this->container['emailVerified'] = $emailVerified;
        return $this;
    }

    /**
    * Gets enabled
    *  一个布尔值，表示用户是否启用
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 一个布尔值，表示用户是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
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

