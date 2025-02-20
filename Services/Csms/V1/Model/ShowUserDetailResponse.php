<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUserDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUserDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户id。
    * orgId  用户所属组织。
    * userName  用户名。
    * name  姓名。
    * mobile  手机号。
    * email  邮箱。
    * pwdMustModify  首次登录是否强制修改密码。
    * pwdChangeAt  密码修改时间
    * createdAt  创建时间。
    * updatedAt  最后一次修改时间。
    * disabled  是否禁用。
    * grade  可信等级。
    * locked  是否锁定。
    * extension  自定义扩展属性。
    * userOrgRelationList  用户组织关系集合。
    * domainId  所属租户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'orgId' => 'string',
            'userName' => 'string',
            'name' => 'string',
            'mobile' => 'string',
            'email' => 'string',
            'pwdMustModify' => 'bool',
            'pwdChangeAt' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'disabled' => 'bool',
            'grade' => 'int',
            'locked' => 'string',
            'extension' => 'object',
            'userOrgRelationList' => '\HuaweiCloud\SDK\Csms\V1\Model\UserOrgRelationListResult[]',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户id。
    * orgId  用户所属组织。
    * userName  用户名。
    * name  姓名。
    * mobile  手机号。
    * email  邮箱。
    * pwdMustModify  首次登录是否强制修改密码。
    * pwdChangeAt  密码修改时间
    * createdAt  创建时间。
    * updatedAt  最后一次修改时间。
    * disabled  是否禁用。
    * grade  可信等级。
    * locked  是否锁定。
    * extension  自定义扩展属性。
    * userOrgRelationList  用户组织关系集合。
    * domainId  所属租户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'orgId' => null,
        'userName' => null,
        'name' => null,
        'mobile' => null,
        'email' => null,
        'pwdMustModify' => null,
        'pwdChangeAt' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'disabled' => null,
        'grade' => null,
        'locked' => null,
        'extension' => null,
        'userOrgRelationList' => null,
        'domainId' => null
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
    * userId  用户id。
    * orgId  用户所属组织。
    * userName  用户名。
    * name  姓名。
    * mobile  手机号。
    * email  邮箱。
    * pwdMustModify  首次登录是否强制修改密码。
    * pwdChangeAt  密码修改时间
    * createdAt  创建时间。
    * updatedAt  最后一次修改时间。
    * disabled  是否禁用。
    * grade  可信等级。
    * locked  是否锁定。
    * extension  自定义扩展属性。
    * userOrgRelationList  用户组织关系集合。
    * domainId  所属租户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'orgId' => 'org_id',
            'userName' => 'user_name',
            'name' => 'name',
            'mobile' => 'mobile',
            'email' => 'email',
            'pwdMustModify' => 'pwd_must_modify',
            'pwdChangeAt' => 'pwd_change_at',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'disabled' => 'disabled',
            'grade' => 'grade',
            'locked' => 'locked',
            'extension' => 'extension',
            'userOrgRelationList' => 'user_org_relation_list',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户id。
    * orgId  用户所属组织。
    * userName  用户名。
    * name  姓名。
    * mobile  手机号。
    * email  邮箱。
    * pwdMustModify  首次登录是否强制修改密码。
    * pwdChangeAt  密码修改时间
    * createdAt  创建时间。
    * updatedAt  最后一次修改时间。
    * disabled  是否禁用。
    * grade  可信等级。
    * locked  是否锁定。
    * extension  自定义扩展属性。
    * userOrgRelationList  用户组织关系集合。
    * domainId  所属租户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'orgId' => 'setOrgId',
            'userName' => 'setUserName',
            'name' => 'setName',
            'mobile' => 'setMobile',
            'email' => 'setEmail',
            'pwdMustModify' => 'setPwdMustModify',
            'pwdChangeAt' => 'setPwdChangeAt',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'disabled' => 'setDisabled',
            'grade' => 'setGrade',
            'locked' => 'setLocked',
            'extension' => 'setExtension',
            'userOrgRelationList' => 'setUserOrgRelationList',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户id。
    * orgId  用户所属组织。
    * userName  用户名。
    * name  姓名。
    * mobile  手机号。
    * email  邮箱。
    * pwdMustModify  首次登录是否强制修改密码。
    * pwdChangeAt  密码修改时间
    * createdAt  创建时间。
    * updatedAt  最后一次修改时间。
    * disabled  是否禁用。
    * grade  可信等级。
    * locked  是否锁定。
    * extension  自定义扩展属性。
    * userOrgRelationList  用户组织关系集合。
    * domainId  所属租户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'orgId' => 'getOrgId',
            'userName' => 'getUserName',
            'name' => 'getName',
            'mobile' => 'getMobile',
            'email' => 'getEmail',
            'pwdMustModify' => 'getPwdMustModify',
            'pwdChangeAt' => 'getPwdChangeAt',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'disabled' => 'getDisabled',
            'grade' => 'getGrade',
            'locked' => 'getLocked',
            'extension' => 'getExtension',
            'userOrgRelationList' => 'getUserOrgRelationList',
            'domainId' => 'getDomainId'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['orgId'] = isset($data['orgId']) ? $data['orgId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['pwdMustModify'] = isset($data['pwdMustModify']) ? $data['pwdMustModify'] : null;
        $this->container['pwdChangeAt'] = isset($data['pwdChangeAt']) ? $data['pwdChangeAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['userOrgRelationList'] = isset($data['userOrgRelationList']) ? $data['userOrgRelationList'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets userId
    *  用户id。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets orgId
    *  用户所属组织。
    *
    * @return string|null
    */
    public function getOrgId()
    {
        return $this->container['orgId'];
    }

    /**
    * Sets orgId
    *
    * @param string|null $orgId 用户所属组织。
    *
    * @return $this
    */
    public function setOrgId($orgId)
    {
        $this->container['orgId'] = $orgId;
        return $this;
    }

    /**
    * Gets userName
    *  用户名。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名。
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
    *  姓名。
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
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mobile
    *  手机号。
    *
    * @return string|null
    */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
    * Sets mobile
    *
    * @param string|null $mobile 手机号。
    *
    * @return $this
    */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;
        return $this;
    }

    /**
    * Gets email
    *  邮箱。
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
    * @param string|null $email 邮箱。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets pwdMustModify
    *  首次登录是否强制修改密码。
    *
    * @return bool|null
    */
    public function getPwdMustModify()
    {
        return $this->container['pwdMustModify'];
    }

    /**
    * Sets pwdMustModify
    *
    * @param bool|null $pwdMustModify 首次登录是否强制修改密码。
    *
    * @return $this
    */
    public function setPwdMustModify($pwdMustModify)
    {
        $this->container['pwdMustModify'] = $pwdMustModify;
        return $this;
    }

    /**
    * Gets pwdChangeAt
    *  密码修改时间
    *
    * @return string|null
    */
    public function getPwdChangeAt()
    {
        return $this->container['pwdChangeAt'];
    }

    /**
    * Sets pwdChangeAt
    *
    * @param string|null $pwdChangeAt 密码修改时间
    *
    * @return $this
    */
    public function setPwdChangeAt($pwdChangeAt)
    {
        $this->container['pwdChangeAt'] = $pwdChangeAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  最后一次修改时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 最后一次修改时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets disabled
    *  是否禁用。
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否禁用。
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets grade
    *  可信等级。
    *
    * @return int|null
    */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
    * Sets grade
    *
    * @param int|null $grade 可信等级。
    *
    * @return $this
    */
    public function setGrade($grade)
    {
        $this->container['grade'] = $grade;
        return $this;
    }

    /**
    * Gets locked
    *  是否锁定。
    *
    * @return string|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param string|null $locked 是否锁定。
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets extension
    *  自定义扩展属性。
    *
    * @return object|null
    */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
    * Sets extension
    *
    * @param object|null $extension 自定义扩展属性。
    *
    * @return $this
    */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
        return $this;
    }

    /**
    * Gets userOrgRelationList
    *  用户组织关系集合。
    *
    * @return \HuaweiCloud\SDK\Csms\V1\Model\UserOrgRelationListResult[]|null
    */
    public function getUserOrgRelationList()
    {
        return $this->container['userOrgRelationList'];
    }

    /**
    * Sets userOrgRelationList
    *
    * @param \HuaweiCloud\SDK\Csms\V1\Model\UserOrgRelationListResult[]|null $userOrgRelationList 用户组织关系集合。
    *
    * @return $this
    */
    public function setUserOrgRelationList($userOrgRelationList)
    {
        $this->container['userOrgRelationList'] = $userOrgRelationList;
        return $this;
    }

    /**
    * Gets domainId
    *  所属租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 所属租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

