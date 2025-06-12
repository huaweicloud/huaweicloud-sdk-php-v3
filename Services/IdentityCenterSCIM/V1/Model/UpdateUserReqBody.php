<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateUserReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateUserReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  用户的全局唯一标识符（ID）
    * externalId  外部标识符
    * userName  用户名，用于标识用户的唯一字符串
    * name  name
    * displayName  包含用户显示名称的字符串
    * nickName  包含用户昵称的字符串
    * profileUrl  包含可能与用户关联的URL的字符串
    * emails  包含用户的电子邮箱信息的对象列表
    * addresses  包含用户地址信息的对象列表
    * phoneNumbers  包含用户电话号码信息的对象列表
    * userType  指示用户类型的字符串
    * title  包含用户头衔的字符串
    * preferredLanguage  包含用户首选语言的字符串
    * locale  包含用户地理区域或位置的字符串
    * timezone  包含用户时区的字符串
    * active  表示用户是否启用
    * schemas  概要
    * urnietfparamsscimschemasextensionenterprise20User  urnietfparamsscimschemasextensionenterprise20User
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'externalId' => 'string',
            'userName' => 'string',
            'name' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\NameDto',
            'displayName' => 'string',
            'nickName' => 'string',
            'profileUrl' => 'string',
            'emails' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EmailItemDto[]',
            'addresses' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AddressItemDto[]',
            'phoneNumbers' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PhoneNumberItemDto[]',
            'userType' => 'string',
            'title' => 'string',
            'preferredLanguage' => 'string',
            'locale' => 'string',
            'timezone' => 'string',
            'active' => 'bool',
            'schemas' => 'string[]',
            'urnietfparamsscimschemasextensionenterprise20User' => '\HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EnterpriseDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  用户的全局唯一标识符（ID）
    * externalId  外部标识符
    * userName  用户名，用于标识用户的唯一字符串
    * name  name
    * displayName  包含用户显示名称的字符串
    * nickName  包含用户昵称的字符串
    * profileUrl  包含可能与用户关联的URL的字符串
    * emails  包含用户的电子邮箱信息的对象列表
    * addresses  包含用户地址信息的对象列表
    * phoneNumbers  包含用户电话号码信息的对象列表
    * userType  指示用户类型的字符串
    * title  包含用户头衔的字符串
    * preferredLanguage  包含用户首选语言的字符串
    * locale  包含用户地理区域或位置的字符串
    * timezone  包含用户时区的字符串
    * active  表示用户是否启用
    * schemas  概要
    * urnietfparamsscimschemasextensionenterprise20User  urnietfparamsscimschemasextensionenterprise20User
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'externalId' => null,
        'userName' => null,
        'name' => null,
        'displayName' => null,
        'nickName' => null,
        'profileUrl' => null,
        'emails' => null,
        'addresses' => null,
        'phoneNumbers' => null,
        'userType' => null,
        'title' => null,
        'preferredLanguage' => null,
        'locale' => null,
        'timezone' => null,
        'active' => null,
        'schemas' => null,
        'urnietfparamsscimschemasextensionenterprise20User' => null
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
    * id  用户的全局唯一标识符（ID）
    * externalId  外部标识符
    * userName  用户名，用于标识用户的唯一字符串
    * name  name
    * displayName  包含用户显示名称的字符串
    * nickName  包含用户昵称的字符串
    * profileUrl  包含可能与用户关联的URL的字符串
    * emails  包含用户的电子邮箱信息的对象列表
    * addresses  包含用户地址信息的对象列表
    * phoneNumbers  包含用户电话号码信息的对象列表
    * userType  指示用户类型的字符串
    * title  包含用户头衔的字符串
    * preferredLanguage  包含用户首选语言的字符串
    * locale  包含用户地理区域或位置的字符串
    * timezone  包含用户时区的字符串
    * active  表示用户是否启用
    * schemas  概要
    * urnietfparamsscimschemasextensionenterprise20User  urnietfparamsscimschemasextensionenterprise20User
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'externalId' => 'externalId',
            'userName' => 'userName',
            'name' => 'name',
            'displayName' => 'displayName',
            'nickName' => 'nickName',
            'profileUrl' => 'profileUrl',
            'emails' => 'emails',
            'addresses' => 'addresses',
            'phoneNumbers' => 'phoneNumbers',
            'userType' => 'userType',
            'title' => 'title',
            'preferredLanguage' => 'preferredLanguage',
            'locale' => 'locale',
            'timezone' => 'timezone',
            'active' => 'active',
            'schemas' => 'schemas',
            'urnietfparamsscimschemasextensionenterprise20User' => 'urn:ietf:params:scim:schemas:extension:enterprise:2.0:User'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  用户的全局唯一标识符（ID）
    * externalId  外部标识符
    * userName  用户名，用于标识用户的唯一字符串
    * name  name
    * displayName  包含用户显示名称的字符串
    * nickName  包含用户昵称的字符串
    * profileUrl  包含可能与用户关联的URL的字符串
    * emails  包含用户的电子邮箱信息的对象列表
    * addresses  包含用户地址信息的对象列表
    * phoneNumbers  包含用户电话号码信息的对象列表
    * userType  指示用户类型的字符串
    * title  包含用户头衔的字符串
    * preferredLanguage  包含用户首选语言的字符串
    * locale  包含用户地理区域或位置的字符串
    * timezone  包含用户时区的字符串
    * active  表示用户是否启用
    * schemas  概要
    * urnietfparamsscimschemasextensionenterprise20User  urnietfparamsscimschemasextensionenterprise20User
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'externalId' => 'setExternalId',
            'userName' => 'setUserName',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'nickName' => 'setNickName',
            'profileUrl' => 'setProfileUrl',
            'emails' => 'setEmails',
            'addresses' => 'setAddresses',
            'phoneNumbers' => 'setPhoneNumbers',
            'userType' => 'setUserType',
            'title' => 'setTitle',
            'preferredLanguage' => 'setPreferredLanguage',
            'locale' => 'setLocale',
            'timezone' => 'setTimezone',
            'active' => 'setActive',
            'schemas' => 'setSchemas',
            'urnietfparamsscimschemasextensionenterprise20User' => 'setUrnietfparamsscimschemasextensionenterprise20User'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  用户的全局唯一标识符（ID）
    * externalId  外部标识符
    * userName  用户名，用于标识用户的唯一字符串
    * name  name
    * displayName  包含用户显示名称的字符串
    * nickName  包含用户昵称的字符串
    * profileUrl  包含可能与用户关联的URL的字符串
    * emails  包含用户的电子邮箱信息的对象列表
    * addresses  包含用户地址信息的对象列表
    * phoneNumbers  包含用户电话号码信息的对象列表
    * userType  指示用户类型的字符串
    * title  包含用户头衔的字符串
    * preferredLanguage  包含用户首选语言的字符串
    * locale  包含用户地理区域或位置的字符串
    * timezone  包含用户时区的字符串
    * active  表示用户是否启用
    * schemas  概要
    * urnietfparamsscimschemasextensionenterprise20User  urnietfparamsscimschemasextensionenterprise20User
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'externalId' => 'getExternalId',
            'userName' => 'getUserName',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'nickName' => 'getNickName',
            'profileUrl' => 'getProfileUrl',
            'emails' => 'getEmails',
            'addresses' => 'getAddresses',
            'phoneNumbers' => 'getPhoneNumbers',
            'userType' => 'getUserType',
            'title' => 'getTitle',
            'preferredLanguage' => 'getPreferredLanguage',
            'locale' => 'getLocale',
            'timezone' => 'getTimezone',
            'active' => 'getActive',
            'schemas' => 'getSchemas',
            'urnietfparamsscimschemasextensionenterprise20User' => 'getUrnietfparamsscimschemasextensionenterprise20User'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['profileUrl'] = isset($data['profileUrl']) ? $data['profileUrl'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['preferredLanguage'] = isset($data['preferredLanguage']) ? $data['preferredLanguage'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['urnietfparamsscimschemasextensionenterprise20User'] = isset($data['urnietfparamsscimschemasextensionenterprise20User']) ? $data['urnietfparamsscimschemasextensionenterprise20User'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['emails'] === null) {
            $invalidProperties[] = "'emails' can't be null";
        }
        if ($this->container['schemas'] === null) {
            $invalidProperties[] = "'schemas' can't be null";
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
    * Gets id
    *  用户的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 用户的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets externalId
    *  外部标识符
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
    * @param string|null $externalId 外部标识符
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
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
    * Gets name
    *  name
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\NameDto
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\NameDto $name name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  包含用户显示名称的字符串
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
    * @param string $displayName 包含用户显示名称的字符串
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets nickName
    *  包含用户昵称的字符串
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 包含用户昵称的字符串
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets profileUrl
    *  包含可能与用户关联的URL的字符串
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
    * @param string|null $profileUrl 包含可能与用户关联的URL的字符串
    *
    * @return $this
    */
    public function setProfileUrl($profileUrl)
    {
        $this->container['profileUrl'] = $profileUrl;
        return $this;
    }

    /**
    * Gets emails
    *  包含用户的电子邮箱信息的对象列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EmailItemDto[]
    */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
    * Sets emails
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EmailItemDto[] $emails 包含用户的电子邮箱信息的对象列表
    *
    * @return $this
    */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;
        return $this;
    }

    /**
    * Gets addresses
    *  包含用户地址信息的对象列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AddressItemDto[]|null
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\AddressItemDto[]|null $addresses 包含用户地址信息的对象列表
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets phoneNumbers
    *  包含用户电话号码信息的对象列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PhoneNumberItemDto[]|null
    */
    public function getPhoneNumbers()
    {
        return $this->container['phoneNumbers'];
    }

    /**
    * Sets phoneNumbers
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\PhoneNumberItemDto[]|null $phoneNumbers 包含用户电话号码信息的对象列表
    *
    * @return $this
    */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->container['phoneNumbers'] = $phoneNumbers;
        return $this;
    }

    /**
    * Gets userType
    *  指示用户类型的字符串
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
    * @param string|null $userType 指示用户类型的字符串
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets title
    *  包含用户头衔的字符串
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
    * @param string|null $title 包含用户头衔的字符串
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets preferredLanguage
    *  包含用户首选语言的字符串
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
    * @param string|null $preferredLanguage 包含用户首选语言的字符串
    *
    * @return $this
    */
    public function setPreferredLanguage($preferredLanguage)
    {
        $this->container['preferredLanguage'] = $preferredLanguage;
        return $this;
    }

    /**
    * Gets locale
    *  包含用户地理区域或位置的字符串
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
    * @param string|null $locale 包含用户地理区域或位置的字符串
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets timezone
    *  包含用户时区的字符串
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
    * @param string|null $timezone 包含用户时区的字符串
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets active
    *  表示用户是否启用
    *
    * @return bool|null
    */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
    * Sets active
    *
    * @param bool|null $active 表示用户是否启用
    *
    * @return $this
    */
    public function setActive($active)
    {
        $this->container['active'] = $active;
        return $this;
    }

    /**
    * Gets schemas
    *  概要
    *
    * @return string[]
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param string[] $schemas 概要
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets urnietfparamsscimschemasextensionenterprise20User
    *  urnietfparamsscimschemasextensionenterprise20User
    *
    * @return \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EnterpriseDto|null
    */
    public function getUrnietfparamsscimschemasextensionenterprise20User()
    {
        return $this->container['urnietfparamsscimschemasextensionenterprise20User'];
    }

    /**
    * Sets urnietfparamsscimschemasextensionenterprise20User
    *
    * @param \HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model\EnterpriseDto|null $urnietfparamsscimschemasextensionenterprise20User urnietfparamsscimschemasextensionenterprise20User
    *
    * @return $this
    */
    public function setUrnietfparamsscimschemasextensionenterprise20User($urnietfparamsscimschemasextensionenterprise20User)
    {
        $this->container['urnietfparamsscimschemasextensionenterprise20User'] = $urnietfparamsscimschemasextensionenterprise20User;
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

