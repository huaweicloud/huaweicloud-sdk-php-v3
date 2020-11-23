<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateUserResult implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateUserResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'pwdStatus' => 'bool',
            'xuserId' => 'string',
            'xuserType' => 'string',
            'description' => 'string',
            'name' => 'string',
            'phone' => 'string',
            'isDomainOwner' => 'string',
            'domainId' => 'string',
            'enabled' => 'bool',
            'areacode' => 'string',
            'email' => 'string',
            'createTime' => 'string',
            'xdomainId' => 'string',
            'xdomainType' => 'string',
            'id' => 'string',
            'passwordExpiresAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => 'int32',
        'pwdStatus' => null,
        'xuserId' => null,
        'xuserType' => null,
        'description' => null,
        'name' => null,
        'phone' => null,
        'isDomainOwner' => null,
        'domainId' => null,
        'enabled' => null,
        'areacode' => null,
        'email' => null,
        'createTime' => null,
        'xdomainId' => null,
        'xdomainType' => null,
        'id' => null,
        'passwordExpiresAt' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'pwdStatus' => 'pwd_status',
            'xuserId' => 'xuser_id',
            'xuserType' => 'xuser_type',
            'description' => 'description',
            'name' => 'name',
            'phone' => 'phone',
            'isDomainOwner' => 'is_domain_owner',
            'domainId' => 'domain_id',
            'enabled' => 'enabled',
            'areacode' => 'areacode',
            'email' => 'email',
            'createTime' => 'create_time',
            'xdomainId' => 'xdomain_id',
            'xdomainType' => 'xdomain_type',
            'id' => 'id',
            'passwordExpiresAt' => 'password_expires_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'pwdStatus' => 'setPwdStatus',
            'xuserId' => 'setXuserId',
            'xuserType' => 'setXuserType',
            'description' => 'setDescription',
            'name' => 'setName',
            'phone' => 'setPhone',
            'isDomainOwner' => 'setIsDomainOwner',
            'domainId' => 'setDomainId',
            'enabled' => 'setEnabled',
            'areacode' => 'setAreacode',
            'email' => 'setEmail',
            'createTime' => 'setCreateTime',
            'xdomainId' => 'setXdomainId',
            'xdomainType' => 'setXdomainType',
            'id' => 'setId',
            'passwordExpiresAt' => 'setPasswordExpiresAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'pwdStatus' => 'getPwdStatus',
            'xuserId' => 'getXuserId',
            'xuserType' => 'getXuserType',
            'description' => 'getDescription',
            'name' => 'getName',
            'phone' => 'getPhone',
            'isDomainOwner' => 'getIsDomainOwner',
            'domainId' => 'getDomainId',
            'enabled' => 'getEnabled',
            'areacode' => 'getAreacode',
            'email' => 'getEmail',
            'createTime' => 'getCreateTime',
            'xdomainId' => 'getXdomainId',
            'xdomainType' => 'getXdomainType',
            'id' => 'getId',
            'passwordExpiresAt' => 'getPasswordExpiresAt'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['pwdStatus'] = isset($data['pwdStatus']) ? $data['pwdStatus'] : null;
        $this->container['xuserId'] = isset($data['xuserId']) ? $data['xuserId'] : null;
        $this->container['xuserType'] = isset($data['xuserType']) ? $data['xuserType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['isDomainOwner'] = isset($data['isDomainOwner']) ? $data['isDomainOwner'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['areacode'] = isset($data['areacode']) ? $data['areacode'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['xdomainId'] = isset($data['xdomainId']) ? $data['xdomainId'] : null;
        $this->container['xdomainType'] = isset($data['xdomainType']) ? $data['xdomainType'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['passwordExpiresAt'] = isset($data['passwordExpiresAt']) ? $data['passwordExpiresAt'] : null;
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
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets status
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
    * @param int|null $status IAM用户状态信息。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets pwdStatus
    *
    * @return bool|null
    */
    public function getPwdStatus()
    {
        return $this->container['pwdStatus'];
    }

    /**
    * Sets pwdStatus
    *
    * @param bool|null $pwdStatus IAM用户首次登录是否重置密码。
    *
    * @return $this
    */
    public function setPwdStatus($pwdStatus)
    {
        $this->container['pwdStatus'] = $pwdStatus;
        return $this;
    }

    /**
    * Gets xuserId
    *
    * @return string|null
    */
    public function getXuserId()
    {
        return $this->container['xuserId'];
    }

    /**
    * Sets xuserId
    *
    * @param string|null $xuserId IAM用户在外部系统中的ID。 >外部系统指与华为云对接的外部企业管理系统，xaccount_type、xaccount_id、xdomain_type、xdomain_id、xuser_type、xuser_id等参数值，无法在华为云获取，请咨询企业管理员。
    *
    * @return $this
    */
    public function setXuserId($xuserId)
    {
        $this->container['xuserId'] = $xuserId;
        return $this;
    }

    /**
    * Gets xuserType
    *
    * @return string|null
    */
    public function getXuserType()
    {
        return $this->container['xuserType'];
    }

    /**
    * Sets xuserType
    *
    * @param string|null $xuserType 用户在外部系统中的类型。 >外部系统指与华为云对接的外部企业管理系统，xaccount_type、xaccount_id、xdomain_type、xdomain_id、xuser_type、xuser_id等参数值，无法在华为云获取，请咨询企业管理员。
    *
    * @return $this
    */
    public function setXuserType($xuserType)
    {
        $this->container['xuserType'] = $xuserType;
        return $this;
    }

    /**
    * Gets description
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description IAM用户描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
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
    * @param string $name IAM用户名，长度5~32字符之间，首位不能为数字，特殊字符只能包含下划线“_”、中划线“-”和空格。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
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
    * @param string|null $phone IAM用户手机号，纯数字，长度小于等于32字符。必须与国家码同时存在。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets isDomainOwner
    *
    * @return string|null
    */
    public function getIsDomainOwner()
    {
        return $this->container['isDomainOwner'];
    }

    /**
    * Sets isDomainOwner
    *
    * @param string|null $isDomainOwner IAM用户是否为账号管理员。
    *
    * @return $this
    */
    public function setIsDomainOwner($isDomainOwner)
    {
        $this->container['isDomainOwner'] = $isDomainOwner;
        return $this;
    }

    /**
    * Gets domainId
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId IAM用户所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enabled
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
    * @param bool $enabled 是否启用IAM用户。true为启用，false为停用，默认为true。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets areacode
    *
    * @return string|null
    */
    public function getAreacode()
    {
        return $this->container['areacode'];
    }

    /**
    * Sets areacode
    *
    * @param string|null $areacode 国家码。中国大陆为“0086”。
    *
    * @return $this
    */
    public function setAreacode($areacode)
    {
        $this->container['areacode'] = $areacode;
        return $this;
    }

    /**
    * Gets email
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
    * @param string|null $email IAM用户邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets createTime
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime IAM用户创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets xdomainId
    *
    * @return string|null
    */
    public function getXdomainId()
    {
        return $this->container['xdomainId'];
    }

    /**
    * Sets xdomainId
    *
    * @param string|null $xdomainId 运营主体的客户编码。
    *
    * @return $this
    */
    public function setXdomainId($xdomainId)
    {
        $this->container['xdomainId'] = $xdomainId;
        return $this;
    }

    /**
    * Gets xdomainType
    *
    * @return string|null
    */
    public function getXdomainType()
    {
        return $this->container['xdomainType'];
    }

    /**
    * Sets xdomainType
    *
    * @param string|null $xdomainType 运营主体。
    *
    * @return $this
    */
    public function setXdomainType($xdomainType)
    {
        $this->container['xdomainType'] = $xdomainType;
        return $this;
    }

    /**
    * Gets id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id IAM用户ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets passwordExpiresAt
    *
    * @return string|null
    */
    public function getPasswordExpiresAt()
    {
        return $this->container['passwordExpiresAt'];
    }

    /**
    * Sets passwordExpiresAt
    *
    * @param string|null $passwordExpiresAt 密码过期时间（UTC时间），“null”表示密码不过期。
    *
    * @return $this
    */
    public function setPasswordExpiresAt($passwordExpiresAt)
    {
        $this->container['passwordExpiresAt'] = $passwordExpiresAt;
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

